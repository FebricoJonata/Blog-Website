<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="/css/articles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <!-- Nicholas - nav bar , udah ada styling juga -->
    {{-- <nav id="Navbar">
        <div class="navbar-container">
            <div class="navbar-left">
                <img class="logo" src="/Assets/images-removebg-preview.png" alt="logo">
                <h1>LOGO</h1>
            </div>
            <div class="navbar-center">
                <a href="/">HOME</a>
                <a href="#About">ABOUT</a>
                <a href="#Articles">ARTICLES</a>
                <a href="#ContactUs">CONTACT US</a>
            </div>
            <div class="navbar-right">
                <img class="search" src="/Assets/magnifying-glass.png" alt="seacrh">
            </div>
            <div class="navbar-login">
                <a class="login" href="/login">Log In</a>
                <a class="signup" href="/register">Sign Up</a>
            </div>
        </div>
        <hr>
    </nav> --}}

    <main class="mt-4">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <h1 class="mb-3">{{ $post->tittle }}</h1> 
                    <a href="/dashboard/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/dashboard/posts/{{ $post->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0" onclick="return confirm('Are you sure to delete?')">Delete</button>
                      </form>
                    <p>By {{ $post->user->name }} <br> Category : {{ $post->category->name }}</p>

                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="photo">
                    @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="photo">
                    @endif

                        <article class="my-3">
                            {!! $post->body !!}
                        </article>
                    <a href="/dashboard/posts" class="d-block mt-3">Back To Articles</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>