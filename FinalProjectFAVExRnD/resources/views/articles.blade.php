<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="/css/articles.css"> --}}
</head>
<body>

    <!-- Nicholas - nav bar , udah ada styling juga -->
    <nav id="Navbar">
        <div class="navbar-container">
            <div class="navbar-left">
                <img class="logo" src="/Assets/images-removebg-preview copy.png" alt="logo">
                <h1>LOGO</h1>
            </div>
            <div class="navbar-center">
                <a href="/">HOME</a>
                <a href="#About">ABOUT</a>
                <a href="#Articles">ARTICLES</a>
                <a href="#ContactUs">CONTACT US</a>
            </div>
            <div class="navbar-login">
                <a class="login" href="/login">Log In</a>
                <a class="signup" href="/register">Sign Up</a>
            </div>
        </div>
        <hr>
    </nav>
  
    


    <main>
        <div id="content">
            <h1>Halaman Blog Articles</h1>
            @if ($articles->count())
            <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption d-none d-md-block">
                      <h3><a href="/articles/{{ $articles[0]->id }}" class="text-decoration-none">{{ $articles[0] ->tittle }}</a></h3>
                      <p>{{ $articles[0] ->excerpt }}</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1453928582365-b6ad33cbcf64?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1173&q=80" class="d-block w-100" alt="Image 2">
                    <div class="carousel-caption d-none d-md-block">
                      <h3><a href="/articles/{{ $articles[1]->id }}" class="text-decoration-none">{{ $articles[1] ->tittle }}</a></h3>
                      <p>{{ $articles[1] ->excerpt }}</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1457305237443-44c3d5a30b89?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80" class="d-block w-100" alt="Image 3">
                    <div class="carousel-caption d-none d-md-block">
                      <h3><a href="/articles/{{ $articles[2]->id }}" class="text-decoration-none">{{ $articles[2] ->tittle }}</a></h3>
                      <p>{{ $articles[2] ->excerpt }}</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            @else
            <p class="text-center fs-3">No Post Found</p>
            @endif

            <div class="container mt-4">
              <div class="row">
                @foreach ($articles->skip(3) as $post)
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="position-absolute bg-dark px-3 py-2 text-white">{{ $post->category->name }}</div>
                    <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->tittle }}</h5>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/articles/{{ $post->id }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            {{-- <article>
                <h2><a href="/articles/{{ $post->id }}">{{ $post->tittle }}</a></h2>
                <p>{{ $post->excerpt }}</p>
            </article> --}}
        </div>

        <div class="pagination d-flex justify-content-center">
          {{ $articles->links() }}
        </div>

    </main>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

