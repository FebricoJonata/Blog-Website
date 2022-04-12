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

    <main>
        <h1>
            {{ $post->tittle }}
        </h1>
        <p>Category : {{ $post->category->name }}</p>
            {!! $post->body !!}
            <br>
        <a href="/post">Back To Articles</a>
    </main>

</body>
</html>