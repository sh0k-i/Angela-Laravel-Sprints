<!DOCTYPE html>
<html lang="en">
   <head>
    <title
      @include('main_css')
   </head>
   <body>
      <!-- header section -->
      <div class="header_section">
        @include('home.header')
        <!-- banner section -->
        @include('home.banner')
      </div>
      <!-- header section end -->

      <!-- services section start -->
      @include('home.services')
      <!-- about section start -->
      @include('home.about')
      <!-- blog section start -->

      <!-- footer section start -->
      <!-- copyright section start -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript -->
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>
