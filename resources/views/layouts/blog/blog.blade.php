
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <!-- <link rel="stylesheet" href="/assets/css/Raleway.css"> -->
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
    @yield('head')
</head>
<body class="w3-light-grey">

    <!-- w3-content defines a container for fixed size centered content,
    and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            @yield('header')
              </header>
        <nav class="w3-container w3-center w3-padding-0">
            @yield('nav')
        </nav>
        <!-- Grid -->
        <div class="w3-row">

            <!-- Blog entries -->
            <div class="w3-col l8 s12">
              @yield('entries')
            <!-- END BLOG ENTRIES -->
            </div>

            <!-- Introduction menu -->
            <div class="w3-col l4">
              <!-- About Card -->
              <div class="w3-card w3-margin w3-margin-top">
                  @yield('aboutCard')
              </div><hr>

              <!-- Posts -->
              <div class="w3-card w3-margin">
                @yield('popPosts')
              </div>
              <hr>

              <!-- Labels / tags -->
              <div class="w3-card w3-margin">
                @yield('labelsTags')
              </div>

            <!-- END Introduction Menu -->
            </div>

        <!-- END GRID -->
        </div><br>

    <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
      @yield('footer')
    </footer>

</body>
</html>
