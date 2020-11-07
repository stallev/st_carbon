<?php get_header(); ?>
		<section class="hero-unit-slider slider-responsive no-margin">
			<div id="carousel-hero" class="slick-carousel">
				<div class="carousel-inner" role="listbox">

					<div class="item active">
						<img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'slider-bg-1' ), 'full'); ?>" class="img-responsive bord-bottom" alt="">
						<div class="container">
							<div class="row">

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cont-crs-wr">
									<div class="carousel-caption">
										<p>Работаем с <span>юр.</span> и <span>физ.</span> лицами</p>
                                        <h1 class="hero-heading"><?php echo carbon_get_theme_option( 'company-buziness1' ); ?><br/> <?php echo carbon_get_theme_option( 'company-buziness2' ); ?></h1>
									</div>
									<div class="form-head-wr">
										<form action="#" class="new-mc-form">
											<div class="eoc-home-form ">
												<input type="text" placeholder="Ваше имя" required="">
												<input type="tel" placeholder="Ваш телефон" required="">
												<button type="submit">Отправить</button>
											</div>
										</form>
									</div>
										<div class="head-line-par">
												<p><i class="fa fa-check"></i> <?php echo carbon_get_theme_option( 'company-slider-adv-1' ); ?></p>
												<p><i class="fa fa-check"></i> <?php echo carbon_get_theme_option( 'company-slider-adv-2' ); ?></p>
												<p><i class="fa fa-check"></i> <?php echo carbon_get_theme_option( 'company-slider-adv-3' ); ?></p>
										</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item">
						<img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'slider-bg-2' ), 'full'); ?>" class="img-responsive bord-bottom" alt="">
						<div class="container">
							<div class="row">               

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cont-crs-wr">
									<div class="carousel-caption">
										<p>Работаем с <span>юр.</span> и <span>физ.</span> лицами</p>
                                        <h1 class="hero-heading"><?php echo carbon_get_theme_option( 'company-buziness1' ); ?><br/> <?php echo carbon_get_theme_option( 'company-buziness2' ); ?></h1>
									</div>
									<div class="form-head-wr">
										<form action="#" class="new-mc-form">
											<div class="eoc-home-form ">                           
												<input type="text" placeholder="Ваше имя" required="">
												<input type="tel" placeholder="Ваш телефон" required="">
												<button type="submit">Отправить</button>
											</div>
										</form>
									</div>
                                    <div class="head-line-par">
                                        <p><i class="fa fa-check"></i> <?php echo carbon_get_theme_option( 'company-slider-adv-1' ); ?></p>
                                        <p><i class="fa fa-check"></i> <?php echo carbon_get_theme_option( 'company-slider-adv-2' ); ?></p>
                                        <p><i class="fa fa-check"></i> <?php echo carbon_get_theme_option( 'company-slider-adv-3' ); ?></p>
                                    </div>
								</div>
							</div>
						</div>						
					</div>

					<div class="item active">
						<img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'slider-bg-3' ), 'full'); ?>" class="img-responsive bord-bottom" alt="">
						<div class="container">
							<div class="row"> 							             

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cont-crs-wr">
									<div class="carousel-caption">
										<p>Работаем с <span>юр.</span> и <span>физ.</span> лицами</p>
										<h1 class="hero-heading"><?php echo carbon_get_theme_option( 'company-buziness1' ); ?><br/> <?php echo carbon_get_theme_option( 'company-buziness2' ); ?></h1>
									</div>
									<div class="form-head-wr">
										<form action="#" class="new-mc-form">
											<div class="eoc-home-form ">
                                                <div class="container">
                                                  <?php echo do_shortcode( '[contact-form-7 id="40" title="Форма заказа со слайдера"]' ); ?>
                                                </div>
											</div>
										</form>
									</div>
									<div class="head-line-par">
										<p><i class="fa fa-check"></i> <?php echo carbon_get_theme_option( 'company-slider-adv-1' ); ?></p>
										<p><i class="fa fa-check"></i> <?php echo carbon_get_theme_option( 'company-slider-adv-2' ); ?></p>
										<p><i class="fa fa-check"></i> <?php echo carbon_get_theme_option( 'company-slider-adv-3' ); ?></p>
									</div>
								</div>
							</div>
						</div>						
					</div>

				</div>
			</div>
		</section>


		<section id="about-own-page" class="about-own-page">

			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="title"><?php echo carbon_get_theme_option( 'menu-item-2-dress-models' ); ?></h2>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-sm-6">         
						<div class="home-gallery-wrap">
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-1' ), 'full'); ?>" class="gallery-tizer-wrap mfp-gallery" style="background-image: url(<?php echo get_template_directory_uri()?>/img/collections/4_119DG/1.jpg)">

								<div class="table">
									<div class="tr">
										<div class="td">
											<span>
												<i class="fa fa-search-plus" aria-hidden="true"></i><br>
												<?php echo carbon_get_theme_option( 'look-model-photo' );?>
											</span>
										</div>
									</div>
								</div>

							</a>  
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-1' ), 'full'); ?>" class="mfp-gallery"></a>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="home-gallery-wrap">
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-2' ), 'full'); ?>" class="gallery-tizer-wrap mfp-gallery-1" style="background-image: url(<?php echo get_template_directory_uri()?>/img/collections/4_219DG/1.jpg)">

								<div class="table">
									<div class="tr">
										<div class="td">
											<span>
												<i class="fa fa-search-plus" aria-hidden="true"></i><br>
												<?php echo carbon_get_theme_option( 'look-model-photo' );?>
											</span>
										</div>
									</div>
								</div>

							</a>  
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-2' ), 'full'); ?>" class="mfp-gallery-1"></a>
						</div>         
					</div>

					<div class="col-sm-6">
						<div class="home-gallery-wrap">
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-3' ), 'full'); ?>" class="gallery-tizer-wrap mfp-gallery-2" style="background-image: url(<?php echo get_template_directory_uri()?>/img/collections/119DG/1.jpg)">

								<div class="table">
									<div class="tr">
										<div class="td">
											<span>
												<i class="fa fa-search-plus" aria-hidden="true"></i><br>
												<?php echo carbon_get_theme_option( 'look-model-photo' );?>
											</span>
										</div>
									</div>
								</div>

							</a>  
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-3' ), 'full'); ?>" class="mfp-gallery-2"></a>
						</div>         
					</div>

					<div class="col-sm-6">
						<div class="home-gallery-wrap">
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-4' ), 'full'); ?>" class="gallery-tizer-wrap mfp-gallery-3" style="background-image: url(<?php echo get_template_directory_uri()?>/img/collections/219DG/1.jpg)">

								<div class="table">
									<div class="tr">
										<div class="td">
											<span>
												<i class="fa fa-search-plus" aria-hidden="true"></i><br>
												<?php echo carbon_get_theme_option( 'look-model-photo' );?>
											</span>
										</div>
									</div>
								</div>

							</a>  
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-4' ), 'full'); ?>" class="mfp-gallery-3"></a>
						</div>         
					</div>

					<div class="col-sm-6">
						<div class="home-gallery-wrap">
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-5' ), 'full'); ?>" class="gallery-tizer-wrap mfp-gallery-4" style="background-image: url(<?php echo get_template_directory_uri()?>/img/collections/319DG/1.jpg)">

								<div class="table">
									<div class="tr">
										<div class="td">
											<span>
												<i class="fa fa-search-plus" aria-hidden="true"></i><br>
												<?php echo carbon_get_theme_option( 'look-model-photo' );?>
											</span>
										</div>
									</div>
								</div>

							</a>  
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-5' ), 'full'); ?>" class="mfp-gallery-4"></a>
						</div>         
					</div>

					<div class="col-sm-6">
						<div class="home-gallery-wrap">
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-6' ), 'full'); ?>" class="gallery-tizer-wrap mfp-gallery-5" style="background-image: url(<?php echo get_template_directory_uri()?>/img/collections/519DG/1.jpg)">

								<div class="table">
									<div class="tr">
										<div class="td">
											<span>
												<i class="fa fa-search-plus" aria-hidden="true"></i><br>
												<?php echo carbon_get_theme_option( 'look-model-photo' );?>
											</span>
										</div>
									</div>
								</div>

							</a>  
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-6' ), 'full'); ?>" class="mfp-gallery-5"></a>
																		
						</div>         
					</div>

					<div class="col-sm-6">
						<div class="home-gallery-wrap">
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-7' ), 'full'); ?>" class="gallery-tizer-wrap mfp-gallery-6" style="background-image: url(<?php echo get_template_directory_uri()?>/img/collections/619DG/1.jpg)">

								<div class="table">
									<div class="tr">
										<div class="td">
											<span>
												<i class="fa fa-search-plus" aria-hidden="true"></i><br>
												<?php echo carbon_get_theme_option( 'look-model-photo' );?>
											</span>
										</div>
									</div>
								</div>

							</a>  
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-7' ), 'full'); ?>" class="mfp-gallery-6"></a>
														
						</div>         
					</div>

					<div class="col-sm-6">
						<div class="home-gallery-wrap">
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-8' ), 'full'); ?>" class="gallery-tizer-wrap mfp-gallery-7" style="background-image: url(<?php echo get_template_directory_uri()?>/img/collections/719DG/1.jpg)">

								<div class="table">
									<div class="tr">
										<div class="td">
											<span>
												<i class="fa fa-search-plus" aria-hidden="true"></i><br>
												<?php echo carbon_get_theme_option( 'look-model-photo' );?>
											</span>
										</div>
									</div>
								</div>

							</a>  
							<a href="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'dress-model-8' ), 'full'); ?>" class="mfp-gallery-7"></a>
							
						</div>         
					</div>

				</div>
			</div>

		</section>

    <section class="vantage">

     <div class="container">
     	<div class="row">

     		<div class="col-sm-3">
     			<div class="vantage-item">
     				<div class="vantage-img">
     					<img src="<?php echo get_template_directory_uri()?>/img/icons/sewing-machine.png" alt="">
     				</div>
     				<div class="vantage-text">
     					<p><?php echo carbon_get_theme_option( 'company-spec-work-item-1' ); ?></p>
     				</div>
     			</div>
     		</div>

     		<div class="col-sm-3">
     			<div class="vantage-item">
     				<div class="vantage-img">
     					<img src="<?php echo get_template_directory_uri()?>/img/icons/calendar.png" alt="">
     				</div>
     				<div class="vantage-text">
     					<p><?php echo carbon_get_theme_option( 'company-spec-work-item-2' ); ?></p>
     				</div>
     			</div>
     		</div>

     		<div class="col-sm-3">
     			<div class="vantage-item">
     				<div class="vantage-img">
     					<img src="<?php echo get_template_directory_uri()?>/img/icons/debit-card.png" alt="">
     				</div>
     				<div class="vantage-text">
     					<p><?php echo carbon_get_theme_option( 'company-spec-work-item-3' ); ?></p>
     				</div>
     			</div>
     		</div>

     		<div class="col-sm-3">
     			<div class="vantage-item">
     				<div class="vantage-img">
     					<img src="<?php echo get_template_directory_uri()?>/img/icons/gift.png" alt="">
     				</div>
     				<div class="vantage-text">
     					<p><?php echo carbon_get_theme_option( 'company-spec-work-item-4' ); ?></p>
     				</div>
     			</div>
     		</div>

     	</div>
     </div>

    </section>

    <section class="cons-sect-wrap">

    	<div class="subscribe-section">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-4 col-sm-5 col-xs-12">
    					<div class="row">
    						<div class="ht-newsletter">    							
    							<h2><b><?php echo carbon_get_theme_option( 'text-near-model-order-form' ); ?></b></h2>
    						</div>
    					</div>
    				</div>
    				<div class="col-md-8 col-sm-7 col-xs-12">
    					<div class="row">
    						<div class="form-inline newsletter-forn-in">
                                <div>
                                  <?php echo do_shortcode( '[contact-form-7 id="41" title="Заказ модели платья средняя"]' ); ?>
                                </div>
    						</div>
                            <div>
                            
                            </div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    </section>

    <section class="work-shema" style="background-image: url(<?php echo get_template_directory_uri()?>/img/bg-5.jpg);">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<h2 class="title"><?php echo carbon_get_theme_option( 'work-order-title' ); ?></h2>
    			</div>
    		</div>

    		<div class="row">
    			<div class="col-lg-3 col-md-3 col-sm-6">
    				<div class="shema">
    					<img src="<?php echo get_template_directory_uri()?>/img/icons/1.png" alt="">
    					<p><?php echo carbon_get_theme_option( 'work-order-item-1' ); ?></p>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-3 col-sm-6">
    				<div class="shema">
    					<img src="<?php echo get_template_directory_uri()?>/img/icons/2.png" alt="">
    					<p><?php echo carbon_get_theme_option( 'work-order-item-2' ); ?></p>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-3 col-sm-6">
    				<div class="shema">
    					<img src="<?php echo get_template_directory_uri()?>/img/icons/3.png" alt="">
    					<p><?php echo carbon_get_theme_option( 'work-order-item-3' ); ?></p>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-3 col-sm-6">
    				<div class="shema">
    					<img src="<?php echo get_template_directory_uri()?>/img/icons/4.png" alt="">
    					<p><?php echo carbon_get_theme_option( 'work-order-item-4' ); ?></p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section id="prem" class="prem">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<h2 class="title"><?php echo carbon_get_theme_option( 'our-adv-title' ); ?></h2>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-3 col-md-6">
    				<div class="prem_block">
    					<div class="prem_block_icon">
    						<img src="<?php echo get_template_directory_uri()?>/img/prem/mannequin.png" alt="">
    					</div>
    					<div class="prem_block_desc">
    						<span><?php echo carbon_get_theme_option( 'our-adv-item-1-title' );?></span>
    						<p><?php echo carbon_get_theme_option( 'our-adv-item-1-content' );?></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6">
    				<div class="prem_block">
    					<div class="prem_block_icon">
    						<img src="<?php echo get_template_directory_uri()?>/img/prem/costume-clothes.png" alt="">
    					</div>
    					<div class="prem_block_desc">
    						<span><?php echo carbon_get_theme_option( 'our-adv-item-2-title' );?></span>
    						<p><?php echo carbon_get_theme_option( 'our-adv-item-2-content' ); ?></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6">
    				<div class="prem_block">
    					<div class="prem_block_icon">
    						<img src="<?php echo get_template_directory_uri()?>/img/prem/fashion.png" alt="">
    					</div>
    					<div class="prem_block_desc">
    						<span><?php echo carbon_get_theme_option( 'our-adv-item-3-title' );?></span>
    						<p><?php echo carbon_get_theme_option( 'our-adv-item-3-content' ); ?></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6">
    				<div class="prem_block">
    					<div class="prem_block_icon">
    						<img src="<?php echo get_template_directory_uri()?>/img/prem/bride-dress.png" alt="">
    					</div>
    					<div class="prem_block_desc">
    						<span><?php echo carbon_get_theme_option( 'our-adv-item-4-title' );?></span>
    						<p><?php echo carbon_get_theme_option( 'our-adv-item-4-content' ); ?></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6">
    				<div class="prem_block">
    					<div class="prem_block_icon">
    						<img src="<?php echo get_template_directory_uri()?>/img/prem/goal.png" alt="">
    					</div>
    					<div class="prem_block_desc">
    						<span><?php echo carbon_get_theme_option( 'our-adv-item-5-title' );?></span>
    						<p><?php echo carbon_get_theme_option( 'our-adv-item-5-content' ); ?></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6">
    				<div class="prem_block">
    					<div class="prem_block_icon">
    						<img src="<?php echo get_template_directory_uri()?>/img/prem/collaboration.png" alt="">
    					</div>
    					<div class="prem_block_desc">
    						<span><?php echo carbon_get_theme_option( 'our-adv-item-6-title' );?></span>
    						<p><?php echo carbon_get_theme_option( 'our-adv-item-6-content' ); ?></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6">
    				<div class="prem_block">
    					<div class="prem_block_icon">
    						<img src="<?php echo get_template_directory_uri()?>/img/prem/handshake.png" alt="">
    					</div>
    					<div class="prem_block_desc">
    						<span><?php echo carbon_get_theme_option( 'our-adv-item-7-title' );?></span>
    						<p><?php echo carbon_get_theme_option( 'our-adv-item-7-content' ); ?></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-6">
    				<div class="prem_block pr-block-descr">
    					<div class="prem_block_icon">
    						<img src="<?php echo get_template_directory_uri()?>/img/prem/box.png" alt="">
    					</div>
    					<div class="prem_block_desc">
    						<span>Заказать <br/> модель</span>
    						<div class="our-service-box-button">
    							<a href="#callback" class="button" 
    							data-effect="mfp-zoom-in">Заказать</a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

   <section id="testimonials" class="testimonials">

   	<div class="container">
   		<div class="row">
   			<div class="col-lg-12">
   				<h2 class="title"><?php echo carbon_get_theme_option( 'reviews-section-title' ); ?></h2>
   			</div>
   		</div>
   	</div>

   	<div class="container">
   		<div class="row">
   			<div class="testimonial">

   				<div class="col-sm-3">  
   					<div class="testimonial-shadow">      
   						<a href="#" class="testimonial_item">
   							<img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'review-photo-1' ), 'full'); ?>" alt="">
   							<span class="hidden">
   								<span class="testimonial_popup">
   									<img class="resp_img" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'review-photo-1' ), 'full'); ?>" alt="">
   								</span>
   							</span>
   						</a>  
   					</div>        
   				</div>

   				<div class="col-sm-3">
   					<div class="testimonial-shadow">  
   						<a href="#" class="testimonial_item">
   							<img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'review-photo-1' ), 'full'); ?>" alt="">
   							<span class="hidden">
   								<span class="testimonial_popup">
   									<img class="resp_img" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'review-photo-1' ), 'full'); ?>" alt="">
   								</span>
   							</span>
   						</a>          
   					</div>
   				</div>

   				<div class="col-sm-3">
   					<div class="testimonial-shadow">
   						<a href="#" class="testimonial_item">
   							<img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'review-photo-1' ), 'full'); ?>" alt="">
   							<span class="hidden">
   								<span class="testimonial_popup">
   									<img class="resp_img" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'review-photo-1' ), 'full'); ?>" alt="">
   								</span>
   							</span>
   						</a>          
   					</div>
   				</div>

   				<div class="col-sm-3">
   					<div class="testimonial-shadow">
   						<a href="#" class="testimonial_item">
   							<img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'review-photo-1' ), 'full'); ?>" alt="">
   							<span class="hidden">
   								<span class="testimonial_popup">
   									<img class="resp_img" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'review-photo-1' ), 'full'); ?>" alt="">
   								</span>
   							</span>
   						</a>          
   					</div>
   				</div>

   			</div>
   		</div>
   	</div>

   </section>

   <section id="about-descr-wr" class="about-descr-wr"> 

   	<div class="container">
   		<div class="row">
   			<div class="col-lg-12">
   				<h2 class="title"><?php echo carbon_get_theme_option( 'in-brief-title' ); ?></h2>
   			</div>
   		</div>
   	</div>

   	<div class="container">
   		<div class="row">
   			<div class="col-sm-6">
   				<div class="ab-des">
   					<p><?php echo carbon_get_theme_option( 'in-brief-item-1' ); ?></p>
   					<p><?php echo carbon_get_theme_option( 'in-brief-item-2' ); ?></p>
   					<p><?php echo carbon_get_theme_option( 'in-brief-item-3' ); ?></p>
                    <a href="<?php echo get_template_directory_uri()?>/politic/">Политика конфиденциальности</a>
   				</div>
   			</div>
   			<div class="col-sm-6">
   				<div class="ab-des">
   					<p><i class="fa fa-check"></i><?php echo carbon_get_theme_option( 'in-brief-list-item-1' ); ?></p>
   					<p><i class="fa fa-check"></i><?php echo carbon_get_theme_option( 'in-brief-list-item-2' ); ?></p>
   					<p><i class="fa fa-check"></i><?php echo carbon_get_theme_option( 'in-brief-list-item-3' ); ?></p>
   					<p><i class="fa fa-check"></i><?php echo carbon_get_theme_option( 'in-brief-list-item-4' ); ?></p>
   				</div>
   			</div>
   		</div>
   	</div>

   </section> 

   <section id="mp-wrap">
   	<div class="container" style="position: relative">
   		<div class="mp" id="sec6">
   			<div class="mp__container">
   				<div class="mp__title mp__padding-top mp__padding-bottom">Контакты</div>
   				<div class="mp__contact padding-bottom">
   					<a><?php echo carbon_get_theme_option( 'company_address' ); ?></a>
   					<a href="tel:<?php echo carbon_get_theme_option( 'company_contact-phone-1' ); ?>"><?php echo carbon_get_theme_option( 'company_contact-phone-1-printing' ); ?></a>
                    <a href="tel:<?php echo carbon_get_theme_option( 'company_contact-phone-2' ); ?>"><?php echo carbon_get_theme_option( 'company_contact-phone-2-printing' ); ?></a>
   					<a href="mailto:<?php echo carbon_get_theme_option( 'company_email' );?>">Email: <?php echo carbon_get_theme_option( 'company_email' ); ?></a>
   				</div>
   			</div>
   		</div>
   	</div>      
   	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54673904.25036139!2d40.31569111759988!3d33.23950989718581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2z0KDQvtGB0YHQuNGP!5e0!3m2!1sru!2sby!4v1578995693596!5m2!1sru!2sby" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
   </section>

<?php get_footer(); ?>