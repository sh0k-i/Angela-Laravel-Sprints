<!DOCTYPE html>

<html
lang="en"
class="light-style layout-menu-fixed layout-compact"
dir="ltr"
data-theme="theme-default"
data-assets-path="{{ asset('sneat/assets/"
data-template="vertical-menu-template-free') }}">

  <head>
    <meta charset="utf-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Edit Post</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('sneat/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('sneat/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('sneat/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('sneat/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('sneat/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('sneat/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('sneat/assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('sneat/assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Side Bar -->
        @include('acc.sidebar')
        <!-- /Side Bar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          @include('acc.navbar')

          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session()->get('message') }}
                    </div>
                @endif
                <!-- box -->
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-10">
                        <!-- Post Card -->
                        <div class="card-body">
                          <h5 class="card-title text-primary">Update Post</h5>
                          <form method="POST" action="{{url('update_post', $post->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Title</label>
                              <input type="text" class="form-control" name= "title" id="title" value="{{$post->title}}" placeholder="Title">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                              <textarea class="form-control" id="content" name="content" rows="15">{{$post->content}} </textarea>
                            </div>

                            <!-- image -->
                            <div class="mb-3">
                                <label   class="form-label"></label>
                                <img src="/post_images/{{$post->image}}" alt="Image" width="200" height="200">
                            </div>

                            <div class="col-sm-4 mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Update Image</label>
                              <input type="file" class="form-control" name="image" id="image" placeholder="Image">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-outline-primary">Update Post</button>
                            </div>
                          </form>

                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <!-- /box -->
              </div>

            </div>
            <!-- /Content -->
          </div>
          <!-- /Content wrapper-->

        </div>
        <!-- /Layout container -->

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Javascript files-->
    @include('acc.js')
  </body>
</html>






