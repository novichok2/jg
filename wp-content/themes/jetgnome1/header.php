<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/1">
	<?php wp_enqueue_script("jquery"); ?>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body>

        <header>
            <table>
                <tbody>
                    <tr>
                        <td id="spanImg"></td>
                        <td class="tdHead"><img id="imgJet" src="<?php echo get_stylesheet_directory_uri()?>/images/jet.png"></td>
                        <td id="spanImg"></td>
                        <td class="tdHead" id="textJet">
                            <span class="spanJetGnome">JET<span id="spanGnome">GNOME</span>.COM</span>
                        </td>
                        <td>
                            <a class="aHead" href="#">ВХОД</a>
                        </td>
                        <td id="tdHeadReg"></td>
                        <td>
                            <a class="aHead" href="#">РЕГИСТРАЦИЯ</a>
                        </td>
                        <td id="spaceHead"></td>
                        <td>
                            <a class="aHead" href="#">КУПИТЬ</a>
                        </td>
                        <td class="tdHeadNav"></td>
                        <td>
                            <a class="aHead" href="#">ПРОДАТЬ</a>
                        </td>
                        <td class="tdHeadNav"></td>
                        <td>
                            <a class="aHead" href="#">НОВОСТИ</a>
                        </td>
                        <td class="tdHeadNav"></td>
                        <td>
                            <a class="aHead" href="#">ГАРАНТИЯ</a>
                        </td>
                        <td class="tdHeadNav"></td>
                        <td>
                            <a class="aHead" href="#">ОТЗЫВЫ</a>
                        </td>
                        <td class="tdHeadNav"></td>
                        <td>
                            <a class="aHead" href="#">ЧАВО</a>
                        </td>
                        <td class="tdHeadNav"></td>
                        <td>
                            <a class="aHead" href="#">КОНТАКТЫ</a>
                        </td>
                        <td id="tdHeadNavLast"></td>
                    </tr>
                </tbody>
            </table>
        </header>
<div id="back">