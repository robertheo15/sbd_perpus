 <!-- Start: Footer -->
 <footer class="site-footer" id="footer">
   <div class="container">
     <div id="footer-widgets">
       <div class="row">

         <div class="col-md-6 col-sm-6 widget-container">
           <?php foreach ($data['abouts'] as $about) : ?>
             <div id="text-2" class="widget widget_text">
               <h3 class="footer-widget-title">About Us</h3>
               <span class="underline left"></span>
               <div class="textwidget">
                 <?= $about['info']; ?>
               </div>
               <address>
                 <div class="info">
                   <i class="fa fa-location-arrow"></i>
                   <span><?= $about['address']; ?></span>
                 </div>
                 <div class="info">
                   <i class="fa fa-envelope"></i>
                   <span><a href="mailto:<?= $about['email']; ?>"><?= $about['email']; ?></a></span>
                 </div>
                 <div class="info">
                   <i class="fa fa-phone"></i>
                   <span><a href="tel:<?= $about['phone']; ?>">+ <?= $about['phone']; ?></a></span>
                 </div>
               </address>
             </div>
         </div>
       <?php endforeach; ?>
       <div class="col-md-6 col-sm-6 widget-container">
         <div id="nav_menu-2" class="widget widget_nav_menu">
           <h3 class="footer-widget-title">Quick Links</h3>
           <span class="underline left"></span>
           <div class="menu-quick-links-container">
             <ul id="menu-quick-links" class="menu">
               <li><a href="#">List</a></li>
               <li><a href="#">List</a></li>
               <li><a href="#">List</a></li>
               <li><a href="#">List</a></li>
               <li><a href="#">List</a></li>
               <li><a href="#">List</a></li>

             </ul>
           </div>
         </div>
       </div>
       </div>
     </div>
   </div>
   <div class="sub-footer">
     <div class="container">
       <div class="row">
         <div class="footer-text col-md-3">
           <p><a target="_blank" href="https://www.templateshub.net">Copyright ©Kennethliem2021</a></p>
         </div>
         <div class="col-md-9 pull-right">
           <ul>
             <li><a href="index.html">Home</a></li>
             <li><a href="#books">Books</a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </footer>
 <!-- End: Footer -->

 <!-- jQuery Latest Version 1.x -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/jquery-1.12.4.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 <!-- jQuery UI -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/jquery-ui.min.js"></script>

 <!-- jQuery Easing -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/jquery.easing.1.3.js"></script>

 <!-- Bootstrap -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/bootstrap.min.js"></script>

 <!-- Mobile Menu -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/mmenu.min.js"></script>

 <!-- Harvey - State manager for media queries -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/harvey.min.js"></script>

 <!-- Waypoints - Load Elements on View -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/waypoints.min.js"></script>

 <!-- Facts Counter -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/facts.counter.min.js"></script>

 <!-- MixItUp - Category Filter -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/mixitup.min.js"></script>

 <!-- Owl Carousel -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/owl.carousel.min.js"></script>

 <!-- Accordion -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/accordion.min.js"></script>

 <!-- Responsive Tabs -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/responsive.tabs.min.js"></script>

 <!-- Responsive Table -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/responsive.table.min.js"></script>

 <!-- Masonry -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/masonry.min.js"></script>

 <!-- Carousel Swipe -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/carousel.swipe.min.js"></script>

 <!-- bxSlider -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/bxslider.min.js"></script>

 <!-- Custom Scripts -->
 <script type="text/javascript" src="<?= BASEURL; ?>/js/main.js"></script>

 </body>


 </html>