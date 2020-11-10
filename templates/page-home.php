<?php
/*
Template Name: Главная
*/
?>
<?php get_header();?>
      <div id="home" class="slider">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/img/slide1.jpg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>We love working</h2>
                     <h4>Maintenance service</h4>
                     <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years</p>
                     <a class="blue_bt" href="#">See Our Service</a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/img/slide1.jpg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>We love working</h2>
                     <h4>Maintenance service</h4>
                     <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years</p>
                     <a class="blue_bt" href="#">See Our Service</a>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/left.png" alt="#" />
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/right.png" alt="#" />
            </a>
         </div>
      </div>
      <div id="about" class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <h4>ABOUT BLUESKY</h4>
                  <h3 style="text-transform: none !important">We Build for Your Comfort</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="full text_align_center">
                     <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/about.png" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="hiw" class="hiw_section layout_padding" style="background: #1a2428;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3 class="white_font">How it's Works</h3>
                  <p class="white_font">adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/blog1.jpg" alt="#" />
                  <h3 class="blog_head">Book Online</h3>
               </div>
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/blog2.jpg" alt="#" />
                  <h3 class="blog_head">Confirmation</h3>
               </div>
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/blog3.jpg" alt="#" />
                  <h3 class="blog_head">Work Status</h3>
               </div>
            </div>
         </div>
      </div>
      <div id="service" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3>OUR SERVICES</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 service_blog">
                  <img class="margin_top_30 img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/s1.jpg" alt="#" />
                  <h3 class="blog_head">Book Online</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/s2.jpg" alt="#" />
                  <h3 class="blog_head">Confirmation</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/s3.jpg" alt="#" />
                  <h3 class="blog_head">Work Status</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/s4.jpg" alt="#" />
                  <h3 class="blog_head">Work Status</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/s5.jpg" alt="#" />
                  <h3 class="blog_head">Work Status</h3>
               </div>
            </div>
         </div>
      </div>
      <div id="contact" class="hiw_section layout_padding" style="background: #eeefef;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3>Booking Online</h3>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="contact-form">
                     <form>
                        <input type="text" placeholder="Name" />
                        <input type="email" placeholder="Email" />
                        <input type="text" placeholder="Phone Number" />
                        <input type="text" placeholder="Type of Service">
                        <textarea placeholder="Message"></textarea>
                        <input type="submit" value="SEND">
                     </form>
                  </div>
               </div>
               <div class="col-md-5 text_align_center">
                  <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/img/man_cartoon.png" alt="#" />
               </div>
            </div>
         </div>
      </div>
      <div id="wcs" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text_align_center">
                  <h3>Our Client Say</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-11">
                  <div class="full testimonial_blog">
                     <p>Jackrok</p>
                     <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="subcribe">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <h3>Newsletter</h3>
                  <p>dolor sit amet, consectetur adipiscing elit.<br>Ut elit tellus, luctus nec ullamcorper</p>
               </div>
               <div class="col-md-8 col-sm-6">
                  <form>
                     <input type="email" name="email" placeholder="Enter Your Email Address" />
                     <button>Subscribe</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php get_footer(); ?>