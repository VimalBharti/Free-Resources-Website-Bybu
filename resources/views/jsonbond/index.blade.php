<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fake Json Data</title>
    <meta name="description" content="Download Free and Exclusive PSD Files with HTML and CSS Code. Free Showcase your design -  free for lifetime. A collection of free high quality website templates designed with Photoshop. Bybu.cc - freebies ">
    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="YaDpQGJSl0pcVl7f2yniOo5Suv1b7pLUU6sMdYAW9lM" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123989535-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-123989535-1');
    </script>

</head>

<body>

    <div class="jsonbond-homepage">
      <div class="menu-bar-top">
        <nav>
          <li><a href="https://www.patreon.com/bybu" target="_blank"><i class="fab fa-patreon"></i> Patreon</a></li>
          <li><a href="https://github.com/VimalBharti" target="_blank"><i class="fab fa-github"></i> Github</a></li>
          <li><a href="{{route('contact')}}"><i class="fas fa-comments"></i> Contact</a></li>
        </nav>
        <span class="beta-icon"><img src="{{asset('images/beta.png')}}"></span>
      </div>

      <section class="hero is-primary is-medium is-bold">
        <div class="hero-body center-heading">
          <div class="container">
            <h1 class="title">
              Jsonbond
            </h1>
            <h2 class="subtitle">
              Fake Json Api
            </h2>
          </div>
        </div>
      </section>

      <section class="section center-area-api-container">
        <div class="tile is-ancestor">

          <!-- Users -->
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Users</p>
              <p class="subtitle">10 Users</p>
              <div class="tags has-addons">
                <span class="tag is-primary">GET</span>
                <span class="tag">https://www.bybu.cc/jsonbond/users</span>
                <span class="tag is-dark">
                  <a href="{{route('jsonbond.users')}}" style="color:#fff;"><i class="fas fa-external-link-alt"></i></a>
                </span>
              </div>

              <div class="content">
                <code>
                  <pre>
  {
    "id": 1,
    "name": "Shiva",
    "username": "shiva",
    "email": "shiva@sati.com",
    "address": "Swadweep",
    "phone": "9999999999",
  }
                  </pre>
                </code>
              </div>
            </article>
          </div>

          <!-- Posts -->
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Posts</p>
              <p class="subtitle">20 Posts</p>
              <div class="tags has-addons">
                <span class="tag is-primary">GET</span>
                <span class="tag">https://www.bybu.cc/jsonbond/posts</span>
                <span class="tag is-dark">
                  <a href="{{route('jsonbond.posts')}}" style="color:#fff;">
                    <i class="fas fa-external-link-alt"></i></a>
                </span>
              </div>

              <div class="content">
                <code>
                  <pre>
  {
    "id": 1,
    "userId": 4,
    "title": "Post title 1",
    "description": "lorem ipsum hhd sddf",
    "url": "http://image-url/image",
  }
                  </pre>
                </code>
              </div>
            </article>
          </div>

          <!-- Albums -->
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Photo Album</p>
              <p class="subtitle">20 Album</p>
              <div class="tags has-addons">
                <span class="tag is-primary">GET</span>
                <span class="tag">https://www.bybu.cc/jsonbond/albums</span>
                <span class="tag is-dark">
                  <a href="{{route('jsonbond.albums')}}" style="color:#fff;">
                    <i class="fas fa-external-link-alt"></i></a>
                </span>
              </div>

              <div class="content">
                <code>
                  <pre>
  {
    "id": 1,
    "ablumnId": "11",
    "albumName": "album1",
    "url": "http://image-url/image",
    "thumbnailUrl": "http://image-url/image",
  }
                  </pre>
                </code>
              </div>
            </article>
          </div>
        </div>

        <!-- Comments -->
        <div class="tile is-ancestor">
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Comments</p>
              <p class="subtitle">50 Comments</p>
              <div class="tags has-addons">
                <span class="tag is-primary">GET</span>
                <span class="tag">https://www.bybu.cc/jsonbond/comments</span>
                <span class="tag is-dark">
                  <a href="{{route('jsonbond.comments')}}" style="color:#fff;">
                    <i class="fas fa-external-link-alt"></i></a>
                </span>
              </div>

              <div class="content">
                <code>
                  <pre>
  {
    "postId": 1,
    "id": 1,
    "body": "lorem ipsum shhdh bhsdb voluptate ipsam eos\ntempora quo",
  }
                  </pre>
                </code>
              </div>
            </article>
          </div>

          <!-- Testimonials -->
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Testimonials</p>
              <p class="subtitle">10 Posts</p>
              <div class="tags has-addons">
                <span class="tag is-primary">GET</span>
                <span class="tag">https://www.bybu.cc/jsonbond/testimonials</span>
                <span class="tag is-dark">
                  <a href="{{route('jsonbond.testimonials')}}" style="color:#fff;">
                    <i class="fas fa-external-link-alt"></i></a>
                </span>
              </div>

              <div class="content">
                <code>
                  <pre>
  {
    "id": 1,
    "body": "lorem ipsum hhd nasba jajsdhy",
    "name": "Shiva",
    "company": "Company1",
    "position": "Owner",
  }
                  </pre>
                </code>
              </div>
            </article>
          </div>
        </div>

        <!-- RealEstate -->
        <div class="tile is-ancestor">
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Real Estate (Property)</p>
              <p class="subtitle">20 Property</p>
              <div class="tags has-addons">
                <span class="tag is-primary">GET</span>
                <span class="tag">https://www.bybu.cc/jsonbond/properties</span>
                <span class="tag is-dark">
                  <a href="{{route('jsonbond.properties')}}" style="color:#fff;">
                    <i class="fas fa-external-link-alt"></i></a>
                </span>
              </div>

              <div class="content">
                <code>
                  <pre>
  {
    "postId": 1,
    "id": 1,
    "body": "lorem ipsum shhdh bhsdb voluptate ipsam eos\ntempora quo",
  }
                  </pre>
                </code>
              </div>
            </article>
          </div>

        </div>

      </section>

      <!-- Patreon list Container -->
      <!-- <div class="tile is-ancestor patreon-list-container">
        <div class="tile is-parent">
          <article class="tile is-child box">
            <h1>Patreon Sponsors</h1>
            <img src="{{asset('hind.jpg')}}" alt="">
          </article>
        </div>
      </div> -->

      <!-- footer -->
      <footer class="footer">
        <div class="content has-text-centered">
          <p>
            <strong>JsonBond</strong> by <a style="color:#00d1b2" href="https://bybu.cc">Bybu</a> @ 2019
          </p>
        </div>
      </footer>

    </div>

</body>
</html>
