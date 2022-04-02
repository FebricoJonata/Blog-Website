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
                <a class="login" href="/login">Log In</a>
            </div>
        </div>
        <hr>
    </nav>

    <!-- page register -->
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
                        <div class="form-bg">
                            <div class="register-input">
                                <label for="namaLengkap">Nama Lengkap</label>
                                <input type="text" id="name" name="name" placeholder="Masukkan Nama Anda" required value="{{ old('name') }}" class="@error('name') is-invalid @enderror">
                                @error('name')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="register-input">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                                @error('email')
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
                            <div class="register-input">
                                <label for="konfirmasiPassword">Konfirmasi Password</label>
                                <input type="password" id="password" name="password_confirmation" placeholder="Masukkan kembali Password Anda" required value="{{ old('confirmPassword') }}">
                                @error('confirmPassword')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div> 
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
                                <label for="dob">Tempat dan Tanggal Lahir</label>
                                <input type="date" id="dob" cols="50" rows="10" name="dob" placeholder="Tempat, DD-MM-YYYY" required value="{{ old('dob') }}">
                                @error('dob')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>                            
                            <div class="register-input">
                                <label for="telepon">Normor Telepon</label>
                                <input type="tel" id="telepon" placeholder="+62 XXXXXXXXXXX" name="telepon" pattern="+62 [0-9]{11}" required value="{{ old('telepon') }}">
                                @error('telepon')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>                            
                            <!-- <div class="register-input">
                                <label for="jenisKelamin">Jenis Kelamin</label>
                                <input type="radio" id="female" name="gender" value="Female">
                                <span class="checkmark"></span>
                                <label class="radio-container" for="female">Female</label><br>
                                <input type="radio" id="male" name="gender" value="Male">
                                <span class="checkmark"></span>
                                <label class="radio-container" for="male">Male</label><br>
                                <input type="radio" id="others" name="gender" value="Others">
                                <span class="checkmark"></span>
                                <label class="radio-container" for="others">Others</label>
                            </div> -->
                            <div class="register-input">
                                <p class="style">Jenis Kelamin</p>
                                <label class="radio-container">Female
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Male
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Others
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="button-container">
                                <button class="signUp-btn" type="signUp">Sign Up</button>
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