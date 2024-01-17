<!DOCTYPE html>
<html lang="en">
   <head>
    @include('main_css')
   </head>
   <body>
      <!-- header section start -->
      @include('acc.acc_nav')
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Account </h1>
            <p class="services_text">Welcome to your account!</p>
            <!-- todo: add button for "create a post" that will toggle a box inside the page to enter the post -->
            <div id="createPostButton" class="btn_main">
                <a href="#">Create a post</a>
            </div>

            <div id="postForm" style="display: none;">
                <form method="POST" action="/posts">
                    @csrf
                    <textarea name="content"></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>

            <script>
                document.getElementById('createPostButton').addEventListener('click', function(event) {
                    event.preventDefault();
                    document.getElementById('postForm').style.display = 'block';
                });
            </script>


            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div><img src="images/img-1.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">Old Post 1</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-2.png" class="services_img"></div>
                     <div class="btn_main active"><a href="#">Old Post 2</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-3.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">Old Post 3</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <!-- copyright section end -->
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
