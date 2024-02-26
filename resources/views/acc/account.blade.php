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

    <title>Account Dashboard</title>

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
                <!-- box -->
                <div class="col-lg-7 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-10">
                        <!-- content inside box -->
                        <div class="card-body">
                          <h5 class="card-title text-primary">Title</h5>
                          <p class="mb-4">
                            text here</p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">Button</a>
                          </div>
                        </div>

                        <!-- image -->
                        <div class="col-sm-3 text-center text-sm-left">
                          <div class="card-body pb-0 px-0 px-md-4">
                            <img
                            src="{{ asset('sneat/assets/img/illustrations/man-with-laptop-light.png') }}"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                          </div>
                        </div>
                        <!-- /image -->
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






