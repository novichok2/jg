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
    <link href="<?php echo get_template_directory_uri()?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>	
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/js/mg.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/js/jquery.bez.min.js"></script>    
    <script type="text/javascript">
        
    // bezier animations
    var bez = $.bez([.19,1,.22,1]);
    var bezcss = ".19,1,.22,1";
    /* Get css3 transition and transform prefixes */
    function mg_getProperty(arr0, arr1, arr2){
        var tmp = document.createElement("div");
        for(var i=0, len=arr0.length; i<len; i++){
            tmp.style[arr0[i]] = 800;
            if(typeof tmp.style[arr0[i]] == 'string'){
                return {
                    js: arr0[i],
                    css: arr1[i],
                    jsEnd: arr2[i]
                };
            }
        }
        return null;
    }
    function mg_getTransition(){
        var arr0 = ["transition", "msTransition", "MozTransition", "WebkitTransition", "OTransition", "KhtmlTransition"];
        var arr1 = ["transition", "-ms-transition", "-moz-transition", "-webkit-transition", "-o-transition", "-khtml-transition"];
        var arr2 = ["transitionend", "MSTransitionEnd", "transitionend", "webkitTransitionEnd", "oTransitionEnd", "khtmlTransitionEnd"];
        return mg_getProperty(arr0, arr1, arr2);
    }
    function mg_getTransform(){
        var arr0 = ["transform", "msTransform", "MozTransform", "WebkitTransform", "OTransform", "KhtmlTransform"];
        var arr1 = ["transform", "-ms-transform", "-moz-transform", "-webkit-transform", "-o-transform", "-khtml-transform"];
        return mg_getProperty(arr0, arr1, []);
    }
    function mg_getPerspective(){
        var arr0 = ["perspective", "msPerspective", "MozPerspective", "WebkitPerspective", "OPerspective", "KhtmlPerspective"];
        var arr1 = ["perspective", "-ms-perspective", "-moz-perspective", "-webkit-perspective", "-o-perspective", "-khtml-perspective"];
        return mg_getProperty(arr0, arr1, []);
    }
    var transition = mg_getTransition();
    var transform = mg_getTransform();
    var perspective = mg_getPerspective();
    </script> 
    
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>       

</head>

<body>

        <header>
            <table id="tableHeader">
                <tbody>
                    <tr>
                        <td id="spanImg"></td>
                        <td class="tdHead" id="jetImg">
                            <a href="<?php echo home_url();?>">
                                <img id="imgJet" src="<?php echo get_stylesheet_directory_uri()?>/images/jet.png">
                            </a>
                        </td>
                        <td id="spanImg2"></td>
                        <td class="tdHead">
                            <span id="spanJetGnome">JET<span id="spanGnome">GNOME</span>.COM</span>
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