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
    {{-- <nav id="Navbar">
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
    </nav> --}}


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #a8dadc">
      <div class="container-fluid">
        <img class="logo" src="/Assets/images-removebg-preview copy.png" alt="logo" style="height: 65px">
        <a class="navbar-brand ms-2" href="/">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav mx-auto my-2 p-2 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item fs-5">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item fs-5">
              <a class="nav-link active" href="/articles">About</a>
            </li>
            <li class="nav-item fs-5">
              <a class="nav-link active" href="/articles">Articles</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  
    


    <main>
        <div id="content">
            @if ($articles->count())
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    @if ($articles[0]->image)
                    <div style="max-height: 600px; max-width: 1600px; overflow: hidden">
                      <img src="{{ asset('storage/' . $articles[0]->image) }}" class="img-fluid" alt="photo">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/1600x600?{{ $articles[0]->category->name }}" class="img-fluid" alt="photo">
                    @endif
                    <div class="carousel-caption d-none d-md-block">
                      <h3><a href="/articles/{{ $articles[0]->id }}" class="text-decoration-none">{{ $articles[0] ->tittle }}</a></h3>
                      <p>{{ $articles[0] ->excerpt }}</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    @if ($articles[1]->image)
                    <img src="{{ asset('storage/' . $articles[1]->image) }}" class="img-fluid" alt="photo">
                    @else
                    <img src="https://source.unsplash.com/1600x600?{{ $articles[1]->category->name }}" class="img-fluid" alt="photo">
                    @endif
                    
                    <div class="carousel-caption d-none d-md-block">
                      <h3><a href="/articles/{{ $articles[1]->id }}" class="text-decoration-none">{{ $articles[1] ->tittle }}</a></h3>
                      <p>{{ $articles[1] ->excerpt }}</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    @if ($articles[2]->image)
                    <img src="{{ asset('storage/' . $articles[2]->image) }}" class="img-fluid" alt="photo">
                    @else
                    <img src="https://source.unsplash.com/1600x600?{{ $articles[2]->category->name }}" class="img-fluid" alt="photo">
                    @endif
                    
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
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="photo">
                    @else
                    <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" class="img-fluid" alt="photo">
                    @endif
                    {{-- <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" class="card-img-top" alt="..."> --}}
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

