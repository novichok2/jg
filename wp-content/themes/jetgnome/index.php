<?php get_header();?>
	<?php get_sidebar();?>
	<section>								
		<div id="indexDiv">
			<table id="indexTable">
				<tr>
					<td id="leftIndexTable"></td>
					<td id="mainIndexTable">
						<div class="spaceIndexDiv"></div>
						<div style="width: 520px; height: 170px;"> 
							<div id="indexH1">Добро пожаловать на JetGnome.com</div>
							<div id="indexHtext">Реактивные гномы собрали для вас золото со всего мира и готовы делиться богатством</div>
							<a href="<?php echo home_url();?>/buy-gold/">
							<div class="yelloButton block" style="width: 275px; float: right;">ВЫБЕРИТЕ ИГРУ ДЛЯ ПОКУПКИ</div>
							</a>												
						</div>
						<div class="spaceIndexDiv"></div>
						<table>
							<tr>
								<td>
									<div class="gameBox" id="lineageBox">
										<div class="gameBoxSpace"></div>
										<div class="gameBoxText">
											<table>
												<tr>
													<td class="tdGameBoxTextSpace1"></td>
													<td>Купить gold для LineAge от</td>
													<td class="tdGameBoxTextSpace2"></td>
													<td><div class="yelloButton" id="cena">7 руб.</div></td>
													<td class="tdGameBoxTextSpace3"></td>											
													<td>за 1к</td>										
												</tr>
											</table>
										</div>
									</div>
								</td>
								<td class="indexSpaceWidth1"></td>
								<td class="fileIndex">
									<div class="fileIndexImg">
										<img id="imgJet" src="<?php echo get_stylesheet_directory_uri()?>/images/Answers.png">
									</div>
									<div class="fileIndexText">
										Инструкция по продаже
									</div>
								</td>
								<td class="indexSpaceWidth2"></td>
								<td class="fileIndex">
									<div class="fileIndexImg">
										<img id="imgJet" src="<?php echo get_stylesheet_directory_uri()?>/images/borrowBook.png">
									</div>
									<div class="fileIndexText">
										Инструкция по покупке
									</div>									
								</td>
							</tr>			
							<tr class="indexSpaceHeight1"></tr>
							<tr>
								<td>
									<div class="gameBox" id="wowBox">
										<div class="gameBoxSpace"></div>
										<div class="gameBoxText">
											<table>
												<tr>
													<td class="tdGameBoxTextSpace1"></td>
													<td>Купить GOLD для WoW от</td>
													<td class="tdGameBoxTextSpace2"></td>
													<td><div class="yelloButton" id="cena">7 руб.</div></td>
													<td class="tdGameBoxTextSpace3"></td>											
													<td>за 1к</td>										
												</tr>
											</table>
										</div>
									</div>
								</td>
								<td class="indexSpaceWidth1"></td>
								<td id="tdWrapperIndexGame" rowspan="4" colspan="3">	
									<script type="text/javascript">if('ontouchstart' in document){}else{ document.getElementsByTagName("body")[0].className = "no-touch"; }</script> <!-- remove css hover on touch devices -->
									
									<div id="example1a-item-0" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/images/bannerIndex1.jpg);">
										<h1 class="h1SliderIndex">Сотрудничай с нами и получай <a class="h1SliderIndexA" href=""> награды</a><h1>
									</div>
									<div id="example1a-item-1" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/images/bannerIndex1.jpg);">
										<h1 class="h1SliderIndex">Еще какая-то лабуда <a class="h1SliderIndexA" href=""> ссылка на нее</a><h1>
									</div>
									<div id="example1a-item-2" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/images/bannerIndex1.jpg);">
										<h1 class="h1SliderIndex">Сотрудничай с нами и получай <a class="h1SliderIndexA" href=""> награды</a><h1>
									</div>
									<div id="example1a-item-3" style="background-image: url(<?php echo get_stylesheet_directory_uri()?>/images/bannerIndex1.jpg);">
										<h1 class="h1SliderIndex">Сотрудничай с нами и получай <a class="h1SliderIndexA" href=""> награды</a><h1>
									</div>
									
									<table style="width: 100%; display: table-row-group;">
										<tr>											
											<td id="example1b-click-prev"></td>
											<td id="example1b-item-0"></td>
											<td id="example1b-item-1"></td>
											<td id="example1b-item-2"></td>
											<td id="example1b-item-3"></td>
											<td id="example1b-click-next"></td>
										</tr>
									</table>
									

									<script type="text/javascript">

									$('[id^="example1a-item-"]').css("display","block").css("position","absolute").css("opacity",0).css("z-index","0");

									var example1a = new Mg({
										reference:"example1a",
										click:{	activated:[0] }
									});
									example1a.click.onEvent = function(){
										var path=$("#"+this.reference+"-item-"+this.deactivated); 
										path.css("z-index","0");
										path.stop().animate({opacity:0},{queue:true, duration:1600, specialEasing: {opacity: bez}});
										var path=$("#"+this.reference+"-item-"+this.activated);
										path.css("z-index","2").css("opacity",0);
										path.stop().animate({opacity:1},{queue:true, duration:1600, specialEasing: {opacity: bez}});
									}
									example1a.init();
									//
									var example1b = new Mg({
										reference:"example1b",
										click:{
											activated:[0],
											interactive:true,
											linked:[example1a.click],
											auto:5000, autoSlow:5000
										}
									});
									example1b.click.onEvent = function(){
										$("#"+this.reference+"-item-"+this.deactivated).removeClass("active");
										$("#"+this.reference+"-item-"+this.activated).addClass("active");
									}
									example1b.init();
									</script>
								</td>
							</tr>
							<tr class="indexSpaceHeight1"></tr>
							<tr>
								<td>
									<div class="gameBox" id="eveBox">
										<div class="gameBoxSpace"></div>
										<div class="gameBoxText">
											<table>
												<tr>
													<td class="tdGameBoxTextSpace1"></td>
													<td>Купить ISK для EvE online от</td>
													<td class="tdGameBoxTextSpace2"></td>
													<td><div class="yelloButton" id="cena">6 руб.</div></td>
													<td class="tdGameBoxTextSpace3"></td>											
													<td>за 1к</td>										
												</tr>
											</table>
										</div>
									</div>
								</td>
								<td class="indexSpaceWidth1"></td>
								<td>
									
								</td>
							</tr>							
							<tr class="indexSpaceHeightEnd"></tr>										
						</table>	
					</td>
					<td id="rightIndexTable"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<h1 id="indexNewsH1">
							Новостная лента (перейти в раздел)
						</h1>			
                        
						<?php    
                        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $params = array(
                            'posts_per_page' => 3, // количество постов на странице
                            'post_type'       => '', // тип постов
                            'paged'           => $current_page // текущая страница
                        );
                        query_posts($params);                        
                        $wp_query->is_archive = true;
                        $wp_query->is_home = false;                       
                        $a = 1;
                        while (have_posts()) : the_post();
                            if (($a % 2) == 1) {include "newsOdd.php";} 
                             else {include "newsEven.php";}                            
                            $a++;     
                        endwhile;       
                                              
                        wp_pagenavi();                        
                        ?>
                        
                        
					</td>
					<td></td>
				</tr>
			</table>
		</div>
	</section>
<?php get_footer();?>