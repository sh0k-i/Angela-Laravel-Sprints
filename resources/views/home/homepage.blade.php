<!DOCTYPE html>
<html lang="en">
   <head>
    <title
      @include('main_css')
   </head>
   <body>
      <!-- header  -->
      <div class="header_section">
        @include('home.header')

        @include('home.banner')
      </div>

      <!-- posts -->
      @include('home.services')
      @include('home.carousel')
      <!-- about -->
      @include('home.about')

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
