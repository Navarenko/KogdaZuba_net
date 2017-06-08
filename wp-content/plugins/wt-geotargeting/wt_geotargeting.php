<?php
/*
Plugin Name: WT GeoTargeting
Plugin URI: http://web-technology.biz/cms-wordpress/plugin-wt-geotargeting-for-cms-wordpress
Description: Настройка геотаргетинга с помощью Шорткодов.
Version: 1.4.1
Author: Кусты Роман, АИТ "Web-Techology"
Author URI: http://web-technology.biz
*/

include('geo.php'); // Подключаем класс для работы с базой http://ipgeobase.ru
include('data_files.php');
require('wt.php');

class WtGeoTargeting
{
	var $ip;
	var $data = array();
	var $record = array();

	var $geo_contacts;

	function __construct(){	
		// Перенес код из __construct() в initial(), так как возникли сложности в инициализации плагина
		add_action('plugins_loaded', array($this, 'initial'));

		Wt::setGeo($this);
	}

	public static function basename() {
		return plugin_basename(__FILE__);
	}

	public function initial(){
		// Подгружаем значения региона по умолчанию
		$option_default = get_option('wt_geotargeting_default');
		if (is_array($option_default))
			$this->data = array_merge($this->data, get_option('wt_geotargeting_default'));

		$options = array();

		// ТЕСТОВЫЙ РЕЖИМ
		// Проверяем роль пользователя для включения тестового режима
		if (is_user_logged_in() && current_user_can('administrator')){

			
			$options_debug = get_option('wt_geotargeting_debug');

			if (isset($options_debug['mode']) && $options_debug['mode'] == 'ip'
				&& isset($options_debug['ip']) && filter_var($options_debug['ip'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)){

				$options['ip'] = $options_debug['ip'];
			}

			if (isset($options_debug['mode']) && $options_debug['mode'] == 'city'
				&& isset($options_debug['city_id'])){

				// Проверка и получение выбранного для тестирования города
				$data_files = new WtGeoTargetingDataFiles();
				$debug_geo_data = $data_files->getCityInfo($options_debug['city_id']);
			}

			if (isset($options_debug['mode']) && $options_debug['mode'] == 'country'
				&& isset($options_debug['country_alpha2'])){

				$debug_geo_data = array('country' => $options_debug['country_alpha2']);
			}
		}

		$geo = new Geo($options);
		$this->ip = $geo->ip;

		// Очищаем cookie
		if (isset($_GET['wt_geo_clean'])){
			$wt_geo_clean = strip_tags(urldecode($_GET['wt_geo_clean']));
			if ($wt_geo_clean == 1) $geo->cookie_clean();
		} 
		
		// Сохраняем массив значений региона для работы плагина

		if (isset($options_debug['mode']) && $options_debug['mode'] == 'ip'){

			// Получаем значения из IpGoeBase не сохраняя в cookie 
			$this->data = array_merge($this->data, $geo->get_value(null, false));

		}elseif (isset($options_debug['mode']) 
			&& ($options_debug['mode'] == 'city' || $options_debug['mode'] == 'country') 
			&& count($debug_geo_data) > 0){

			$this->data = array_merge($this->data, $debug_geo_data);

		}elseif (count($data_default = $this->setDataDefault()) > 0){  // Default значения
			$this->data = array_merge($this->data, $geo->set_cookie($data_default));

		}else{

			$this->data = array_merge($this->data, $geo->get_value());
		}
		
		// Регистрируем шорткод и хук для него
		add_shortcode('wt_geotargeting', array (&$this, 'shortcode_geotargeting_action'));
	}

    // Сохраняем Default значения
    function setDataDefault()
    {
		if (isset($_GET['wt_country_by_default'])) $wt_country_by_default = strip_tags(urldecode($_GET['wt_country_by_default']));
		if (isset($_GET['wt_district_by_default'])) $wt_district_by_default = strip_tags(urldecode($_GET['wt_district_by_default']));
		if (isset($_GET['wt_region_by_default'])) $wt_region_by_default = strip_tags(urldecode($_GET['wt_region_by_default']));
		if (isset($_GET['wt_city_by_default'])) $wt_city_by_default = strip_tags(urldecode($_GET['wt_city_by_default']));
		
		$data_default = array();

		if (!empty($wt_country_by_default)) $data_default['country'] = $wt_country_by_default;
		if (!empty($wt_district_by_default)) $data_default['district'] = $wt_district_by_default;
		if (!empty($wt_region_by_default)) $data_default['region'] = $wt_region_by_default;
		if (!empty($wt_city_by_default)) $data_default['city'] = $wt_city_by_default;

		return $data_default;    	
    }

	function shortcode_geotargeting_action($param, $content){
		
		// Определяем выводился-ли ранее контент для указанного типа, если да, то завершаем выполнение
		if (isset($param['type']) && isset($this->record[$param['type']]) &&
			$this->record[$param['type']] > 0)
			return;

		// Проверяем совпадение локаций

		if (!empty($this->data['city'])){

			if (!empty($param['city_show']) && $param['city_show'] == $this->data['city']){
				if (!empty($param['type'])) $this->record[$param['type']] = 1;
				return do_shortcode($content);
			}

			if (!empty($param['city_not_show']) && $param['city_not_show'] != $this->data['city']){
				if (!empty($param['type'])) $this->record[$param['type']] = 1;
				return do_shortcode($content);
			}

		}

		if (!empty($this->data['region'])) {

			if (!empty($param['region_show']) && $param['region_show'] == $this->data['region']) {
				if (!empty($param['type'])) $this->record[$param['type']] = 1;
				return do_shortcode($content);
			}

			if (!empty($param['region_not_show']) &&	$param['region_not_show'] != $this->data['region']) {
				if (!empty($param['type'])) $this->record[$param['type']] = 1;
				return do_shortcode($content);
			}

		}

		if (!empty($this->data['district'])) {

			if (!empty($param['district_show']) && $param['district_show'] == $this->data['district']) {
				if (!empty($param['type'])) $this->record[$param['type']] = 1;
				return do_shortcode($content);
			}

			if (!empty($param['district_not_show']) && $param['district_not_show'] != $this->data['district']) {
				if (!empty($param['type'])) $this->record[$param['type']] = 1;
				return do_shortcode($content);
			}
		}

		if (!empty($this->data['country'])) {

			if (!empty($param['country_show']) && $param['country_show'] == $this->data['country']){
				if (!empty($param['type'])) $this->record[$param['type']] = 1;
				return do_shortcode($content);
			}

			if (!empty($param['country_not_show']) && $param['country_not_show'] != $this->data['country']){
				if (!empty($param['type'])) $this->record[$param['type']] = 1;
				return do_shortcode($content);
			}
		}

		if (!empty($param['default']) && $param['default'] == true){
			
			if (!empty($param['type'])) $this->record[$param['type']] = 1;
			return do_shortcode($content);
		}

		// Вывод текущих значений
		if (!empty($param['get'])){

			if ($param['get'] == 'ip'){
				return $this->ip;
			} 
			
			if (!empty($this->data[$param['get']])){
				$return = $this->data[$param['get']];

			}

			if (empty($return) && isset($content)) $return = $content;
			return $return;
			
		}

		return;
	}

	public function getRegion(){
		if (!empty($this->data['city'])) return $this->data['city'];

		return NULL;
	}

	public function getContact($type = null, $region = NULL){
		if (empty($this->geo_contacts)) $this->geoContactsReload();

		if (!$region && $this->getRegion()) $region = $this->getRegion();

		if (!$region) return NULL;

		if (empty($this->geo_contacts[$region])) return NULL;

		if (empty($type)) return $this->geo_contacts[$region];

		if (!empty($this->geo_contacts[$region][$type])) return $this->geo_contacts[$region][$type];

		return NULL;
	}

	public function geoContactsReload(){
		$file_name = WP_CONTENT_DIR.'/uploads/multisite_geo_info.txt';

		$file_content = file_get_contents($file_name);

		if (empty($file_content)) return NULL;

		$this->geo_contacts = json_decode($file_content, true);
	}

}


$wt_geotargeting = new WtGeoTargeting();

if (defined('ABSPATH') && is_admin()) {
	require('admin_panel.php');
	$wt_geotargeting_admin = new WtGeoTargetingAdmin();
}

?>