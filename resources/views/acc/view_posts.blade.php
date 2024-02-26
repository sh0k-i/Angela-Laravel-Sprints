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

    <title>View Posts</title>

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
                <div class="col-lg-15 mb-4 order-0">
                  <div class="card">
                    <h5 class="card-header">View Posts</h5>
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Post Title</th>
                            <th>Post Content</th>
                            <th>Post Created</th>
                            <th>Post Updated</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @foreach ($posts as $post)
                            <tr>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->content }}</td>
                              <td>{{ $post->created_at }}</td>
                              <td>{{ $post->updated_at }}</td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                      ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                  </div>
                                </div>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /box -->
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                  @foreach ($posts as $post)
                      <div class="col">
                          <div class="card h-100 position-relative">
                              <div class="card-body d-flex flex-column">
                                  <div class="image-container mb-3" style="overflow: hidden; aspect-ratio: 1/1;">
                                      <img class="card-img-top" style="object-fit: cover; object-position: 50% 0;" src="{{ asset('post_images/' . $post->image) }}" alt="Post image">
                                  </div>
                                  <h5 class="card-title">{{ $post->title }}</h5>
                                  <p class="card-text">
                                      {{ $post->content }}
                                  </p>
                                  <div class="d-flex align-items-center mt-auto justify-content-between">
                                      <small class="text-muted">Last updated {{ $post->updated_at->diffForHumans() }}</small>
                                      <!-- Dropdown -->
                                      <div class="dropdown">
                                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                              <i class="bx bx-dots-vertical-rounded"></i>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="{{url('edit_post', $post->id)}} onclick">
                                                  <i class="bx bx-edit-alt me-1"></i> Edit
                                              </a>
                                              <a class="dropdown-item" href="{{url('delete_post', $post->id)}} onclick">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
                </div>





              </div>
              <!-- /Row -->
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

    @include('acc.js')
  </body>
</html>






