<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- gLightbox-->
    <link rel="stylesheet" href="blog home/vendor/glightbox/css/glightbox.css">
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="blog home/css/style.default.css" id="theme-stylesheet">
    <!-- gLightbox-->
    <link rel="stylesheet" href="blog home/vendor/glightbox/glightbox.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="blog home/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="blog home/favicon.png">
  </head>
  <body>
    <!-- header  -->
    <div class="header_section">
      @include('home.nav')
      @include('home.banner')
    </div>

    <!-- posts -->
    <section>
      <div class="container">
        <div class="row gy-5">
          <!-- Latest Posts -->
          <main class="col-lg-8">
            <div class="container">
              <div class="row gy-4 mb-5">
                <!-- post -->
                @foreach ($posts as $post)
                  <div class="col-xl-6"><a class="mb-3" href="post.html">
                    <div class="image-container" style="overflow: hidden; aspect-ratio: 16/9;">
                      <img class="img-fluid" style="object-fit: cover; object-position: 50% 0;" src="{{ asset('post_images/' . $post->image) }}" alt="...">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2"><small class="text-gray-500">{{ $post->created_at->format('d M | Y') }}</small><a class="small fw-bold text-uppercase small" href="!#">{{ $post->user->first_name }} {{ $post->user->last_name }}</a></div>
                    <h3 class="h4"><a class="text-dark" href="post.html">{{ $post->title }}</a></h3>
                    <p class="text-muted text-sm">{{ $post->content }}</p>
                    <ul class="list-inline list-separated text-gray-500 mb-0">
                      <li class="list-inline-item"><a class="d-flex align-items-center flex-wrap text-reset" href="!#">
                          <small>Last Update</small></a></li>
                      <li class="list-inline-item small"><i class="far fa-clock"></i> {{ $post->updated_at->diffForHumans() }}</li>
                    </ul>
                  </div>
                @endforeach
              </div>
              <!-- Pagination -->
              @include('home.page')
            </div>
          </main>
          @include('home.column')
        </div>
      </div>
    </section>
    <!-- about -->


    <!-- Javascript files-->
    <!-- JavaScript files-->
    <script src="blog home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="blog home/vendor/glightbox/glightbox.js"></script>
    <script src="blog home/js/theme.js"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </body>
</html>
