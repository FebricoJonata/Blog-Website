<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/dashboardallstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Secular+One&display=swap" rel="stylesheet">
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
                <a href="#AboutUs">ABOUT</a>
                <a href="#Articles">ARTICLES</a>
                <a href="#ContactUs">CONTACT US</a>
            </div>
            <div class="navbar-profile">
                <p class="welcome">WELCOME!</p>
                <p class="name">Name</p>
            </div>
            <div class="navbar-right">
                <img class="halo" src="/Assets/man-waving-arm.png" alt="gambarhalo">
            </div>
        </div>
        <hr>
    </nav>

    <!-- bagian dashboard -->
    <section id="Dashboard">
        <div class="register-container">
            <div class="register-left">
                <img src="./Assets/ae5ae16a1f8bdad663c96a699d91e646-removebg-preview.png" alt="gambar-utama">
                <p class="p2">Together we study</p>
                <p>Together we build the better world</p>
            </div>
            <div class="register-right">
                <div class="register-heading">
                    <img class="bg" src="./Assets/Vector.png" alt="gambar-utama">
                    <h1>StudBlog</h1>
                    <p class="p1">Studly is a website that provide online learning. Now, Studly announce their new product StudBlog</p>
                    <p class="p2">Let’s try it!</p>
                </div>
            </div>
    </section>

    <!-- about us -->
    <section id="AboutUs">
        <div class="about-contanier">
            <div class="about-top">
                <p class="judul">ABOUT US</p>
                <p class="letsknow">Let's Know Us More!</p>
                <hr>
            </div>
            <div class="about-bottom">
                <div class="about-left">
                    <img src="/Assets/sticky-note.png" alt="">
                    <p class="judul">Studly</p>
                    <p class="ket">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum odio et auctor in augue at eu a volutpat. Purus ultrices risus sagittis lectus leo, mauris. Metus nisl gravida nisl ut. Ultrices faucibus lectus lectus auctor et. Ac purus vehicula scelerisque turpis dolor. In ac libero dignissim faucibus purus eleifend id</p>
                </div>
                <div class="about-right">
                    <img src="/Assets/Online education text with dog attending online class.png" alt="gambaranimasi">
                </div>
            </div>
        </div>
    </section>

    <section id="Articles">
        <div class="article-container">
            <div class="articles-top">
                <p>ARTICLES</p>
                <img src="/Assets/Vector (1).png" alt="">
            </div>
            <div class="articles-bottom">
                <div class="box">
                    <img src="/Assets/Rectangle 19.png" alt="">
                    <p class="judul">Tips For Better Study</p>
                    <p class="ket">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem non tellus...</p>
                    <div class="articles-read">
                        <a class="read" href="">Read Article</a>
                    </div>
                </div>
                <div class="box">
                    <img src="/Assets/Rectangle 19.png" alt="">
                    <p class="judul">Tips For Better Study</p>
                    <p class="ket">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem non tellus...</p>
                    <div class="articles-read">
                        <a class="read" href="">Read Article</a>
                    </div>
                </div>
                <div class="box">
                    <img src="/Assets/Rectangle 19.png" alt="">
                    <p class="judul">Tips For Better Study</p>
                    <p class="ket">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem non tellus...</p>
                    <div class="articles-read">
                        <a class="read" href="">Read Article</a>
                    </div>
                </div>
            </div>
            <div class="articles-nav">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
                <a href="">Show All</a>
            </div>
        </div>
    </section>

    <section id="ContactUs">
        <div class="contact-container">
            <div class="contact-top">
                <p class="judul">CONTACT US</p>
                <p class="ket">Leave Your Message Here!</p>
                <hr>
            </div>
            <div class="contact-content">
                <div class="register-form">
                    <form id="form" onsubmit="validate()">
                        <div class="form-bg">
                            <div class="contact-input">
                                <label for="fullname">Fullname</label>
                                <input type="text" id="username" name="username" placeholder="Masukkan Nama Anda" required>
                            </div>
                            <div class="contact-input">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>
                            </div>
                            <div class="contact-input">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="50" rows="10" placeholder="Type your message here" required></textarea>
                            </div>
                            <div>
                            <div class="contact-send">
                                <a class="send" href="">SEND</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer id="Footer">
        <div class="footer-container">
            <div class="footer-top">
                <p class="title">Studly</p>
                <div class="location">
                    <img src="/Assets/image 17.png" alt="lokasi">
                    <p>Flying Chicken Road 12A, Bogor, Indonesia, 10859</p>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-left">
                    <div class="content">
                        <div class="content-top">
                            <p class="findUs">FIND US AT</p>
                        </div>
                        <div class="content-bottom">
                            <div class="content-left">
                                <div class="place">
                                    <img src="/Assets/image 22.png" alt="">
                                    <p class="usern">@Studly_ID</p>
                                </div>
                                <div class="place">
                                    <img src="/Assets/image 21.png" alt="">
                                    <p class="usern">Studly Indonesia</p>
                                </div>
                            </div>
                            <div class="content-right">
                                <div class="place">
                                    <img src="/Assets/image 20.png" alt="">
                                    <p class="usern">Studly Indonesia</p>
                                </div>
                                <div class="place">
                                    <img src="/Assets/image 19.png" alt="">
                                    <p class="usern">@studly_id</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-right">
                    <img src="/Assets/Online course lettering.png" alt="">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js
    "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="script.js"></script>
</body>
</html>