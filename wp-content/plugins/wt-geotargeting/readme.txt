=== WT GeoTargeting ===
Contributors: kustyrt
Tags: geotargeting, geo, geolocation, ipgeobase, ip, геотаргетинг, IpGeoBase
Requires at least: 3.9
Tested up to: 4.5.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Гибкая настройка геотаргетинга с помощью Шорткодов и глобальных методов.

== Description ==

**WT GeoTargeting** – плагин для CMS WordPress, позволяющий с помощью Шорткодов и глобальных методов настраивать геотаргетинг на страницах сайта.

**Геотаргетинг** – вывод на страницах сайта контента (заголовки, текст, адреса, телефоны и т.д.), соответствующего географическому местоположению посетителя.

= Основные возможности плагина: =
* Определение местоположения посетителей с точностью до страны;
* Определение местоположения посетителей России и Украины с точностью до города;
* Отображение контента с привязкой к местоположению посетителя;
* Отображение местоположения посетителя.

Плагин работает с [базой IP-адресов “IpGeoBase”](http://ipgeobase.ru/), хорошо зарекомендовавшей себя в точности определения местоположение на территории России и Украины.
В работе плагина используется доработанный [PHP Класс для работы с “IpGeoBase”](http://faniska.ru/php-kusochki/geotargeting-novyj-php-klass-dlya-raboty-s-bazoj-ipgeobase-ru.html), автором которого является faniska.

После установки плагина в панели администратора Вашего сайта появится страница с примерами использования и подробным описанием создания условий геотаргетинга.

Домашняя страница и документация плагина: [WT GeoTargeting](http://web-technology.biz/cms-wordpress/plugin-wt-geotargeting-for-cms-wordpress).<br />
Разработка и поддержка: [АИТ "Web Technology"](http://web-technology.biz).<br />
Сообщество Вконтакте: [vk.com/agency_web_technology](https://vk.com/agency_web_technology).

== Installation ==

Процесс инсталляции плагина стандартен для WordPress.

1. Найти плагин в панели администратора вашего сайта:
Плагины->Добавить новый->Поле ввода "Поиск плагинов"-> Ввести "WT GeoTargeting".
2. Установить найденный плагин.
3. Активировать плагин "WT GeoTargeting":
Плагины->Установленные->Активировать "WT GeoTargeting".

== Changelog ==

= 1.4 =
* Мультисайт: Совместимость с плагином "WT Contacts" - манипулирование данными со всех сайтов
* Настройки: Регион посетителя "По умолчанию"
* Глобальный статический PHP-класс "Wt" для доступа к гео-данным
* PHP-методы getRegion() и getContact() для использования в коде тем оформления
* Исправление ошибок

= 1.3.3 =
* Значение по умолчанию для шорткод-атрибута GET
* Исправление некритических ошибок

= 1.3.2 =
* Возможность использования шорткодов внутри шорткодов плагина "WT GeoTargeting"

= 1.3.1 =
* Возможность очистки данных из Cookie

= 1.3 =
* Вывод текущих данных региона посетителя
* Режим тестирования работы плагина

= 1.2 =
* Справочник городов (в панели администратора)
* Исправление ошибок

= 1.1 =
* Возможность выбора города (или региона) посетителем сайта

= 1.0 =
* Работа с базой Российских и Украинских IP-адресов “IpGeoBase”.
* Настройка геотаргетинга с помощью Шорткодов.
