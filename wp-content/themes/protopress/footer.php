<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package protopress
 */
?>

	</div><!-- #content -->

<!-- раскрывающаяся кнопка поиска в шапке -->
<script src="wp-content/themes/protopress/js/classie.js"></script>
<script src="wp-content/themes/protopress/js/uisearch.js"></script>
<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>
<!-- end раскрывающаяся кнопка поиска в шапке -->

	<?php get_sidebar('footer'); ?>


<?php if (is_page(166)) { ?>
    <div id="ex4" class="container media_blocks">
        <h2 class="adnimated_post"><i class="fa fa-play" aria-hidden="true"></i> Видео</h2>
        <div class="row video_block adnimated_post">

<!--            Вывод постов определенной категории.-->
<!--            category=4: идентификатор категории-->
<!--            orderby=date: сортировка выведенных постов по дате-->
<!--            numberposts=3: количество выведенных постов-->
            <?php $i = 0; ?>
            <?php $posts = get_posts ("category=19&orderby=date&numberposts=6"); ?>
            <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                    <?php $i++; ?>
                    <a href="<?php the_permalink() ?>">
                        <div class="col-md-4">
                            <p class="post_thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </p>
                            <p class="name_video">
                                <?php the_title(); ?>
                            </p>
<!--                            <p class="text_video">-->
<!--                                Описание видео. Описание видео. Описание видео.-->
<!--                            </p>-->
                        </div>
                    </a>
                    <?php
                endforeach;
                wp_reset_postdata();
                ?>
            <?php endif; ?>
        </div>
        <div id="ex5" class="row test_and_article_block">
            <div class="col-md-6 adnimated_post">
                <h2>Тесты</h2>
                <div class="tests_block">
                    <p><a href="">Какой ты имплант?</a></p>
                    <p><a href="">Кто ты во вселенной ASTRA</a></p>
                    <p><a href="">Что ты знаешь об имплантации</a></p>
                    <p><a href="">Ваш уровень IQ</a></p>
                    <p><a href="">Ваш биологический возраст</a></p>
                 </div>
            </div>
            <div class="col-md-6 adnimated_post">
                <h2>Новые статьи</h2>
                <div class="articles_block">
                    <p><a href="">Показания к имплантации</a></p>
                    <p><a href="">Какие импланты ставить?</a></p>
                    <p><a href="">Сколько стоит имплант?</a></p>
                    <p><a href="">Врач вырвал все зубы пациенту</a></p>
                    <p><a href="">Где вставить зуб</a></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (is_page(31)) { ?>
<!-- JS Специалисты -->
	<script src="js/vendors/trianglify.min.js"></script>
	<script src="js/vendors/TweenMax.min.js"></script>
	<script src="js/vendors/ScrollToPlugin.min.js"></script>
	<script src="js/vendors/cash.min.js"></script>
	<script src="js/Card-circle.js"></script>
	<script src="js/demo.js"></script>
<?php } ?>
<?php if (is_page(12)) { ?>
    <script src="js/modernizr.custom.29473.js"></script>
<?php } ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<?php /*echo "КогдаЗуба.Нет"; */?>
			<span class="sep"></span>
            <div class="row">
                <div class="contacts_block col-md-6">
                    <span>Контакты:</span><br>
                    Справочная служба 8 800 100-71-43<br>
                    Редактор 8 495 645-77-72<br>
                    E-mail <a href="maito:info@kogdazuba.net">info@kogdazuba.net</a>
                </div>
                <div class="col-md-6">
                    <div class="social_media">
                        <span>Мы в социальных сетях:</span>
                        <div class="hidden-lg hidden-md"><br></div>
            <!--                <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>-->
            <!--                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
            <!--                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>-->
            <!--                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>-->
            <!--                <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>-->
                        <a href="https://vk.com/kogdazubanet" target="_blank"><div class="vk"></div></a>
                        <a href="https://www.facebook.com/kogdazuba.net/" target="_blank"><div class="facebook"></div></a>
                        <a href="https://twitter.com/kogdazubanet" target="_blank"><div class="twitter"></div></a>
                        <a href="" target="_blank"><div class="google-plus"></div></a>
                        <a href="" target="_blank"><div class="youtube"></div></a>
                    </div>
                    <h5>Если Вы нашли ошибку, выделите и нажмите <b>Ctrl+Enter</b></h5>
                    <?php echo ('Все права защищены 2015 - ' . date('Y') . '. <a href = "https://kogdazuba.net/">kogdazuba.net</a>'); ?>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<script src="https://kogdazuba.net/wp-content/themes/protopress/js/myscript.js"></script>

<?php wp_footer(); ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter32894585 = new Ya.Metrika({
                    id:32894585,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32894585" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>