<!doctype html>
<!--
 Author by FreeHTML5.co
 Twitter: https://twitter.com/fh5co
 Facebook: https://fb.com/fh5co
 URL: https://freehtml5.co
-->
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home/css/style.css">
    <link rel="stylesheet" href="home/css/slick.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Author</title>
    {{-- sweetalert --}}
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* typing */
        .typing-container {
            display: flex;
            align-items: center;
        }

        .cursor {
            display: inline-block;
            background-color: white;
            animation: blink 0.7s steps(1) infinite;
            margin-left: 1px;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="site-navigation">
        <div class="site-navigation-inner site-container">
            <img src="{{ asset('home') }}/images/site-logo.png" width="10%" alt="site logo">
            <div class="main-navigation">
                <ul class="main-navigation__ul">
                    <li><a href="#">Homepage</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                    <li><a href="#">Page 4</a></li>
                </ul>
            </div>
            <div id="myBtn" class="burger-container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <script>
                function myFunction(x) {
                    x.classList.toggle("change");
                }
            </script>

        </div>
    </nav>
    <!-- Navigation end -->

    <!-- Top banner -->
    <section class="fh5co-top-banner">
        <div class="top-banner__inner site-container d-flex">
            <div class="top-banner__image">
                <img src="{{ asset('home') }}/images/top-banner-author.jpg" width="500px" alt="author image">
            </div>
            <div class="top-banner__text">
                <div class="typing-container ">
                    <div id="text-data" class="top-banner__text-up"
                        data-texts='[
                            @if (Auth::check()) "Hallo {{ Auth::user()->name }}",
                            @else
                            "Yuk Daftar Cinema", @endif
                            "Tapakrama Production"]'
                        style="display: none;">
                    </div>
                    <div class="top-banner__text-up">
                        <span id="typing-text" class="fs-2 text-light fw-bold"></span>
                        <h1 class="cursor text-light">i
                        </h1>
                    </div>

                </div>
                @if (Auth::check())
                @else
                    <a href="login" class="btn btn-outline-secondary">login </a>
                @endif
                <a href="#daftar" class="btn btn-outline-success">Gabung Sekarang</a>
            </div>
        </div>
    </section>
    <!-- Top banner end -->

    <!-- About me -->
    <section class="fh5co-about-me">
        <div class="about-me-inner site-container">
            <article class="portfolio-wrapper">
                <div class="portfolio__img">
                    <img src="{{ asset('home') }}/images/about-me.jpg" class="about-me__profile"
                        alt="about me profile picture">
                </div>
                <div class="portfolio__bottom">
                    <div class="portfolio__name">
                        <span>T</span>
                        <h2 class="universal-h2">apakrama</h2>
                    </div>
                    <p>Visual, Photography, editing.</p>
                </div>
            </article>
            <div class="about-me__text">
                <div class="about-me-slider">
                    <div class="about-me-single-slide">
                        <h2 class="universal-h2 universal-h2-bckg">About Us</h2>
                        <p><span>C</span> inematografi adalah ilmu terapan yang membahas tentang teknik menangkap gambar
                            dan sekaligus menggabung-gabungkan gambar tersebut sehingga menjadi rangkaian gambar yang
                            memililki kemampuan menyampaikan ide dan cerita..</p>
                        <h4>Author</h4>
                        <p class="p-white">See Us</p>
                    </div>
                    <div class="about-me-single-slide">
                        <h2 class="universal-h2 universal-h2-bckg">About Us 2</h2>
                        <p><span>H</span> e has work appearing or forthcoming in over a dozen venues, including Buzzy
                            Mag, The Spirit of Poe, and the British Fantasy Society journal Dark Horizons. He is also
                            CEO of a company, specializing in custom book publishing and social media marketing
                            services, have created a community for authors to learn and connect.He has work appearing or
                            forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and have created
                            a community for authors to learn and connect.</p>
                        <h4>Author</h4>
                        <p class="p-white">See Us</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-me-bckg"></div>
    </section>
    <!-- About me end -->

    <!-- Books and CD -->
    <section class="fh5co-books">
        <div class="site-container" id="daftar">
            <h2 class="universal-h2 universal-h2-bckg"><i class="bi bi-camera-reels"></i> Yuk Daftar Cinema <i
                    class="bi bi-arrow-down-short"></i></h2>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Formulir Pendaftaran</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="daftar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputname3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputname3" name="name"
                                    placeholder="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_np" class="col-sm-2 col-form-label">No Wa</label>
                            <div class="col-sm-10">
                                <input type="Number" class="form-control" id="no_np" name="no_hp"
                                    placeholder="08..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <select class="form-control select2 select2-hidden-accessible" name="kelas"
                                    style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" disabled>pilih</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jurusan" class="col-sm-2 col-form-label">jurusan</label>
                            <div class="col-sm-10">
                                <select class="form-control select2 select2-hidden-accessible" name="jurusan"
                                    style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" disabled>pilih</option>
                                    <option value="PPLG1">PPLG 1</option>
                                    <option value="PPLG2">PPLG 2</option>
                                    <option value="TJKT1">TJKT 1</option>
                                    <option value="TJKT2">TJKT 2</option>
                                    <option value="TJKT3">TJKT 3</option>
                                    <option value="AKKUL1">AKKUL 1</option>
                                    <option value="AKKUL2">AKKUL 2</option>
                                    <option value="AKKUL3">AKKUL 3</option>
                                    <option value="AKKUL4">AKKUL 4</option>
                                    <option value="MPLB1">MPLB 1</option>
                                    <option value="MPLB2">MPLB 2</option>
                                    <option value="MPLB3">MPLB 3</option>
                                    <option value="MPLB4">MPLB 4</option>
                                    <option value="MPLB5">MPLB 5</option>
                                    <option value="BDPS1">BDPS 1</option>
                                    <option value="BDPS2">BDPS 2</option>
                                    <option value="BDPS3">BDPS 3</option>                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alasan" class="col-sm-2 col-form-label">Alasan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="alasan" name="alasan" placeholder="contoh'saya hobi ngedit'"></textarea>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="alasan" class="col-sm-2 col-form-label">Upload foto</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="foto"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Daftar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </section>
    <!-- Books and CD end -->

    <!-- Counter -->
    <div class="fh5co-counter counters">
        <div class="counter-inner site-container">
            <div class="single-count">
                <span class="count" data-count="{{ $totalanggota }}">0</span>
                <i class="bi bi-people fs-1"></i>
                <div class="single-count__text">
                    <p> Anggota</p>
                </div>
            </div>
            <div class="single-count">
                <span class="count" data-count="7">0</span>
                <i class="bi bi-journal-bookmark-fill fs-1"></i>
                <div class="single-count__text">
                    <p>script</p>
                </div>
            </div>
            <div class="single-count">
                <span class="count" data-count="10">0</span>
                <i class="bi bi-film fs-1"></i>
                <div class="single-count__text">
                    <p>film</p>
                </div>
            </div>
            <div class="single-count">
                <span class="count" data-count="4">0</span>
                <i class="bi bi-trophy fs-1"></i>
                <div class="single-count__text">
                    <p>Awards</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter -->

    <!-- Blog -->
    <section class="fh5co-blog">
        <div class="site-container">
            <h2 class="universal-h2 universal-h2-bckg">Seputar Tapakrama <i class="bi bi-globe-americas"></i></h2>
            <div class="blog-slider blog-inner">
                <div class="single-blog">
                    <div class="single-blog__img">
                        <img src="{{ asset('home') }}/images/blog1.jpg" alt="blog image">
                    </div>
                    <div class="single-blog__text">
                        <h4>coming soon</h4>
                        <span>Lorem, ipsum dolor.</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, facilis! Non consequuntur omnis aliquid voluptatum perferendis? Dignissimos libero totam eius!</p>
                    </div>
                </div>
                <div class="single-blog">
                    <div class="single-blog__img">
                        <img src="{{ asset('home') }}/images/blog2.jpg" alt="blog image">
                    </div>
                    <div class="single-blog__text">
                        <h4>coming soon</h4>
                        <span>Lorem, ipsum dolor.</span>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia in doloribus, delectus quas asperiores animi temporibus vitae quibusdam numquam quae..</p>
                    </div>
                </div>
                <div class="single-blog">
                    <div class="single-blog__img">
                        <img src="{{ asset('home') }}/images/blog2.jpg" alt="blog image">
                    </div>
                    <div class="single-blog__text">
                        <h4>The Journey Under the Waves</h4>
                        <span>On August 28, 2015</span>
                        <p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest,
                            tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies
                            eu leo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog end -->

    <!-- Quotes -->
    <section class="fh5co-quotes">
        <div class="site-container">
            <div class="about-me-slider">
                <div>
                    <h2 class="universal-h2 universal-h2-bckg">What People Are Saying</h2>
                    <p>“Your life is your choice. Whether you become good or evil is up to you. If, one day, 15 or 20 years from now, you end up as nothing (fail), don't blame others, blame yourself.”</p>
                    <img src="{{ asset('home') }}/images/quotes.svg" alt="quotes svg">
                    <h4>Ambarita</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Quotes end -->

    <!-- Social -->
    <section class="fh5co-social">
        <div class="site-container">
            <div class="social">
                <h5>Follow me!!</h5>
                <div class="social " style="gap: 20px; font-size: 30px;">
                    <a href="https://www.instagram.com/tapakramaproduction5/" target="_blank"><i class="bi bi-instagram text-light"></i></a>
                    <a href="https://www.youtube.com/@tapakramaproduction8371" target="_blank"><i class="bi bi-youtube text-light"></i></a>
                </div>
                <h5>Share it!</h5>
            </div>
        </div>
    </section>
    <!-- Social -->

    <!-- Footer -->
    <footer class="site-footer">
        <div class="site-container">
            <div class="footer-inner">
                <div class="footer-info">
                    <div class="footer-info__left">
                        <img src="{{ asset('home') }}/images/footer-img.jpg" alt="about me image">
                        <p>Read more about me</p>
                    </div>
                    <div class="footer-info__right">
                        <h5>Get In Touch</h5>
                        <p class="footer-phone">Phone(Dzalfa): 087728755431</p>
                        <p>Email : -</p>
                        <div class="social-icons">
                            {{-- <a href="#" target="_blank"><img
                                    src="{{ asset('home') }}/images/social-twitter.png" alt="social icon"></a>
                            <a href="#" target="_blank"><img
                                    src="{{ asset('home') }}/images/social-pinterest.png" alt="social icon"></a>
                            <a href="#" target="_blank"><img
                                    src="{{ asset('home') }}/images/social-youtube.png" alt="social icon"></a>
                            <a href="#" target="_blank"><img
                                    src="{{ asset('home') }}/images/social-twitter.png" alt="social icon"></a> --}}
                        </div>
                    </div>
                </div>
                <div class="footer-contact-form">
                    <h5>Contact Form</h5>
                    <form class="contact-form">
                        <div class="contact-form__input">
                            <input type="text" name="name" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <textarea></textarea>
                        <input type="button" name="submit" value="Submit" class="submit-button commingsoon">
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="site-container footer-bottom-inner">
                <p>Copyright &copy; 2024. All Rights Reserved || Made with ❤️ by <a href="https://www.instagram.com/0_0lorem">MuhamadFadli</a></p>
                <div class="footer-bottom__img">
                    <img src="{{ asset('home') }}/images/footer-mastercard.png" alt="footer image">
                    <img src="{{ asset('home') }}/images/footer-paypal.png" alt="footer image">
                    <img src="{{ asset('home') }}/images/footer-visa.png" alt="footer image">
                    <img src="{{ asset('home') }}/images/footer-fedex.png" alt="footer image">
                    <img src="{{ asset('home') }}/images/footer-dhl.png" alt="footer image">
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Scripts -->
    <script src="home/js/jquery.min.js"></script>
    <script src="home/js/slick.min.js"></script>
    <script src="home/js/main.js"></script>
    <!-- SweetAlert2 -->
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>


    {{-- notifikasi --}}
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "{{ $message }}",
                icon: "success"
            });
        </script>
    @endif

    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                title: "Errors!",
                text: "{{ $message }}",
                icon: "error"
            });
        </script>
    @endif
    <script>
        $('.commingsoon').click(function(e) {
            e.preventDefault()
            const data = $(this).closest('tr').find('td:eq(1)').text()
            Swal.fire({
                title: 'fitur ini belum tersedia',
                text: `Mungkin developer nya cape jadi maless!`,
                icon: 'warning',
                confirmButtonText: 'OK',
                focusConfirm: false
            })
        });
    </script>


    {{-- typing text --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const textDataElement = document.getElementById("text-data");
            const texts = JSON.parse(textDataElement.getAttribute("data-texts"));

            let currentTextIndex = 0;
            let charIndex = 0;
            const typingSpeed = 150;
            const erasingSpeed = 100;
            const newTextDelay = 2000; // Delay between current and next text

            const typingTextSpan = document.getElementById("typing-text");

            function type() {
                if (charIndex < texts[currentTextIndex].length) {
                    typingTextSpan.textContent += texts[currentTextIndex].charAt(charIndex);
                    charIndex++;
                    setTimeout(type, typingSpeed);
                } else {
                    setTimeout(erase, newTextDelay);
                }
            }

            function erase() {
                if (charIndex > 0) {
                    typingTextSpan.textContent = texts[currentTextIndex].substring(0, charIndex - 1);
                    charIndex--;
                    setTimeout(erase, erasingSpeed);
                } else {
                    currentTextIndex = (currentTextIndex + 1) % texts.length;
                    setTimeout(type, typingSpeed + 1100);
                }
            }

            setTimeout(type, newTextDelay);
        });
    </script>

</body>

</html>
