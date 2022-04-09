{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/LoginStyle.css">
</head>
<body>
    <!-- Yuric Julias, Login form + image box-->
    <div class="LoginContainer">
        <div class="imageBox">
            
        </div>
        <form action="/login" id="LoginBox" method="POST">
            @csrf
            <div class="titleForm">
                <h1>WELCOME BACK</h1>
            </div>
            <label for="username">Username</label>
            <input type="text" name="username" id="" required>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="" required>
            
            <div class="ForgotBox">
                <a href="#">Forgot Password</a>
            </div>
            
            <button type="Submit" class="submitButton">Login</button>
                <div class="RememberBox">
                    <input type="checkbox" name="RememberMe" id="">
                    <label for="RememberMe">Remember Me</label>
                </div>
        </form>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Secular+One&display=swap" rel="stylesheet">
</head>
</head>
<body>
    <nav id="Navbar">
        <div class="navbar-container">
            <div class="navbar-left">
                <img class="logo" src="/Assets/images-removebg-preview.png" alt="logo">
                <h1>LOGO</h1>
            </div>
            <div class="navbar-center">
                <a href="#Home">HOME</a>
                <a href="#About">ABOUT</a>
                <a href="#Articles">ARTICLES</a>
                <a href="#ContactUs">CONTACT US</a>
            </div>
            <div class="navbar-right">
                <img class="search" src="/Assets/magnifying-glass.png" alt="seacrh">
            </div>
            <div class="navbar-login">
                <a class="login" href="/register">Sign Up</a>
            </div>
        </div>
        <hr>
    </nav>

    <!-- page Login -->
    <section id="Register">
        <div class="register-container">
            <div class="register-left">
                <img src="/Assets/ae5ae16a1f8bdad663c96a699d91e646-removebg-preview.png" alt="gambar-utama">
                <p class="p2">Together we study</p>
                <p>Together we build the better world</p>
            </div>
            <div class="register-right">
                <div class="register-heading">
                    <h1>Let's join our Blog!</h1>
                </div>
                <div class="register-form">
                    <form id="form" onsubmit="validate()" action="/register" method="POST">
                        @csrf

                            <div class="register-input">
                                <label for="username">Username</label>
                                <input type="text" id="name" name="username" placeholder="Masukkan Username Anda" required value="{{ old('username') }}">
                                @error('username')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="register-input">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required value="{{ old('password') }}">
                                @error('password')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>                           
                            <div class="button-container">
                                <button class="signUp-btn" type="signUp">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>




<!-- Login Page dari Nicholas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="/css/loginstyle2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Secular+One&display=swap" rel="stylesheet">
</head>
</head>
<body>
    <nav id="Navbar">
        <div class="navbar-container">
            <div class="navbar-left">
                <img class="logo" src="/Asset/images-removebg-preview.png" alt="logo">
                <h1>LOGO</h1>
            </div>
            <div class="navbar-center">
                <a href="#Home">HOME</a>
                <a href="#About">ABOUT</a>
                <a href="#Articles">ARTICLES</a>
                <a href="#ContactUs">CONTACT US</a>
            </div>
            <div class="navbar-right">
                <img class="search" src="/Asset/magnifying-glass.png" alt="seacrh">
            </div>
            <div class="navbar-login">
                <a class="signup" href="">Sign Up</a>
            </div>
        </div>
        <hr>
    </nav>

    <!-- page login -->
    <section id="Register">
        <div class="register-container">
            <div class="register-left">
                <img src="/Asset/ae5ae16a1f8bdad663c96a699d91e646-removebg-preview.png" alt="gambar-utama">
                <p class="p2">Together we study</p>
                <p>Together we build the better world</p>
            </div>
            <div class="register-right">
                <div class="register-heading">
                    <h1>Welcome Back!</h1>
                </div>
                <div class="register-form">
                    <form id="form" onsubmit="validate()">
                        <div class="form-bg">
                            <div class="register-input">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" placeholder="Masukkan Username Anda" required>
                            </div>
                            <div class="register-input">
                                <label for="password">Password</label>
                                <input type="password" id="password" placeholder="Masukkan Password Anda" required></input>
                            </div>
                            <div class="ForgotBox">
                                <a href="#">Forgot Password</a>
                            </div>
                            <div class="button-container">
                                <button class="logIn-btn" type="logIn">Log In</button>
                            </div>
                            <div class="RememberBox">
                                <input type="checkbox" name="RememberMe" id="">
                                <label for="RememberMe">Remember Me</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>