<div id="addFoter">
<?php 
    $text = $_SERVER["REQUEST_URI"];
    if (strripos($text, "buy-gold")  == true) {include "footerGirl.php";} 
     else {include "footerNorm.php";};            
?>	
</div>
</div>
 <footer>        
		<div id="ContextVipad">
			херня<br/><br/><br/><br/><br/>ВсяКАЯ
			<br/><br/><br/><br/><br/>и так далее
		</div>
		<div id="footerDivGold">
		<div id="context">
            <a id="hrefContextVipad" href="#ContextVipad" ><img id="contextImg" src="<?php echo get_stylesheet_directory_uri()?>/images/context.png"></a>
        </div>
		<div id="footerOther">
            <table id="tableOther">
                <tbody>
                    <tr>
                        <td id="spaceFooterOther1"></td>
                        <td class="tdFooter">
                            <ul id="ulFooter">
                                <li class="liUlFooter"><a href="<?php echo home_url();?>/buy-gold/">КУПИТЬ</a></li>
                                <li class="liUlFooter"><a href="#">ПРОДАТЬ</a></li>
                                <li class="liUlFooter"><a href="#">НОВОСТИ</a></li>
                                <li class="liUlFooter"><a href="#">ГАРАНТИЯ</a></li>
                            </ul>
                        </td>
						<td id="spaceFooterOther2"></td>
                        <td class="tdFooter">
                            <ul id="ulFooter">
                                <li class="liUlFooter"><a href="#">ОТЗЫВЫ</a></li>
                                <li class="liUlFooter"><a href="#">ЧАВО</a></li>
                                <li class="liUlFooter"><a href="#">КОНТАКТЫ</a></li>
                            </ul>
                        </td>
                        <td id="spaceFooterOther3"></td>
                        <td class="tdFooter" id="tdFooterGame1">
                            <ul id="ulFooter2">
                                <li><a href="#">Archeage</a></li>
                                <li><a href="#">Allods</a></li>
                                <li><a id="goldGame2" href="#">Lineage 2</a></li>
                                <li><a id="goldGame2" href="#">Lineage 2 Classic</a></li>
                            </ul>
                        </td>
						<td id="spaceFooterOther4"></td>
                        <td class="tdFooter" id="tdFooterGame2">
                            <ul id="ulFooter2">
                                <li><a href="#">Blade and soul</a></li>
                                <li><a href="#">Black Desert</a></li>
                                <li><a href="#">Tera Online</a></li>
                                <li><a id="goldGame2" href="#">WoW</a></li>
                            </ul>
                        </td>
						<td id="spaceFooterOther4"></td>
                        <td class="tdFooter" id="tdFooterGame3">
                            <ul id="ulFooter2">
                                <li><a href="#">EVE online</a></li>
                                <li><a href="#">Guild Wars 2</a></li>
                                <li><a href="#">Karos</a></li>
                            </ul>
                        </td>
                        <td id="spaceFooterOther5"></td>
                    </tr>
                </tbody>
            </table>
            <div id="socialFooter">
                <table id="socialTable">
                    <tbody>
                        <tr>
                            <td id="spaceImgFooterL"></td>
                            <td class="tdHead" id="jetImg">
                                <a href="<?php echo home_url();?>">
                                    <img src="<?php echo get_stylesheet_directory_uri()?>/images/jet.png">
                                </a>
                            </td>
                            <td id="spaceImgFooterR"></td>
                            <td class="tdHead" id="textJet">
                                <a href="<?php echo home_url();?>">
                                    <span class="spanJetGnomeFooter">JET<span id="spanGnome">GNOME</span>.COM</span>
                                </a>
                            </td>
                            <td id="socialFooterSpace1"></td>
                            <td id="socialIcon">
                                <a href="#"><img class="socialImg" src="<?php echo get_stylesheet_directory_uri()?>/images/vk.jpg"></a>
                                <a href="#"><img class="socialImg" src="<?php echo get_stylesheet_directory_uri()?>/images/facebook.jpg"></a>
                                <a href="#"><img class="socialImg" src="<?php echo get_stylesheet_directory_uri()?>/images/twitter.jpg"></a>
                                <a href="#"><img class="socialImg" src="<?php echo get_stylesheet_directory_uri()?>/images/ok.jpg"></a>
                                <a href="#"><img class="socialImg" src="<?php echo get_stylesheet_directory_uri()?>/images/skype.jpg"></a>
                                <a href="https://www.youtube.com/"><img class="socialImg" src="<?php echo get_stylesheet_directory_uri()?>/images/youtube.jpg"></a>
                            </td>
                            <td id="socialFooterSpace2"></td>
                            <td id="mailTo">
                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri()?>/images/envelope-letter.png"></a>
                            </td>
                            <td id="socialFooterSpace3"></td>
                            <td id="delivery">
                                <a href="#">Подписаться на рассылку</a>
                            </td>
                            <td id="socialFooterSpace4"></td>
                            <td id="languageFooter">
                                <span id="languagesFooter"><a href="#">RU</a> | <a href="#">EN</a></span>
                            </td>
                            <td id="socialFooterSpace5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>
