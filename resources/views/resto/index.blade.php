<!DOCTYPE html>
<html>

<head>
    <title>education</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/inner-page-style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet" />
</head>

<body>
    <div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
        <header class="site-header">
            <!-- Top header Close -->
            <div class="main-header">
                <div class="container">
                    <div class="logo-wrap" itemprop="logo">
                        <img src="{{ asset('img/logo.webp') }}" alt="Logo Image" />
                    </div>
                    <div class="nav-wrap">
                        <nav class="nav-desktop">
                            <ul class="menu-list">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                        <div id="bar">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div id="close">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Close -->
        <section id="home">
            <div class="banner">
                <div class="owl-four owl-carousel" itemprop="image">
                    <img src="{{ asset('img/cover.jpg') }}" alt="Image of Bannner" />
                    <img src="{{ asset('img/cover.jpg') }}" alt="Image of Bannner" />
                    <img src="{{ asset('img/cover.jpg') }}" alt="Image of Bannner" />
                </div>
                <div class="container" itemprop="description">
                    <h1 style="color: black">welcome to education pro</h1>
                    <h3 style="color:chartreuse">
                        With our advance search feature you can now find the
                        trips for you...
                    </h3>
                </div>
                <div id="owl-four-nav" class="owl-nav"></div>
            </div>
        </section>

        <section id="about">
            <div class="page-heading">
                <div class="container">
                    <h2>Tentang</h2>
                </div>
            </div>
            <!-- Popular courses End -->
            <div class="learn-courses">
                <div class="container">
                    <div class="courses">
                        <div class="owl-one owl-carousel">
                            @forelse ($blog as $post)
                                <div class="col">
                                    <img src="{{ asset('/storage/blog/' . $post->image) }}" class="rounded"
                                        style="width: 400px">
                                    <center>
                                        <p style="font-size: 50px">{{ $post->title }} </p>
                                        <p style="font-size: 20px">{{ $post->content }}</p>
                                        <a href="{{ route('blog.show', $post->id) }}" class="learn-desining-banner"
                                            itemprop="name"> ===>Pelajari Desain Ini<=== </a>
                                    </center>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <section class="whyUs-section" style="background-color: green">
                <div class="container">
                    <div class="featured-points">
                        <ul>
                            <li>
                                <i class="fas fa-book"></i> Grid.ID
                            </li>
                            <li>
                                <i class="fas fa-money-check-alt"></i>
                                Kompas.com
                            </li>
                            <li>
                                <i class="fas fa-chalkboard-teacher"></i>
                                Suara.com
                            </li>
                            <li>
                                <i class="fas fa-book"></i> Liputan6.com
                            </li>
                        </ul>
                    </div>
                    <div class="whyus-wrap">
                        <h1>why us?</h1>
                        <p itemprop="description">
                            Berkebun memiliki manfaat untuk kesehatan mental dan fisik. Berkebun di pagi hari dapat
                            membuat
                            tubuh memproduksi vitamin D karena terpapar sinar matahari. Berkebun juga dapat mengajak
                            siswa
                            untuk merawat tanaman dan menyayanginya sebagai makhluk hidup.
                            Berkebun juga merupakan aktivitas fisik sedang yang baik untuk tubuh. Saat berkebun, kita
                            dapat
                            melakukan kegiatan seperti berjongkok, menggali tanah, dan menyiram tanaman. Berkebun juga
                            dapat
                            membuat kita berolahraga dengan cara yang menyenangkan.
                        </p>
                        <a href="https://www.google.com/search?q=berita+tentang+berkebun&oq=berita+tentang+berkeb&gs_lcrp=EgZjaHJvbWUqCAgBEAAYFhgeMgYIABBFGDkyCAgBEAAYFhgeMggIAhAAGBYYHtIBCDgwMTJqMWo3qAIAsAIA&sourceid=chrome&ie=UTF-8"
                            class="read-more-btn">read more</a>
                    </div>
                </div>
            </section>
        </section>
        <section id="gallery">

            <section class="page-heading">
                <div class="container">
                    <h2>gallery</h2>
                </div>
            </section>
            <section class="gallery-images-section" itemprop="image" itemscope
                itemtype=" http://schema.org/ImageGallery">
                <div class="gallery-img-wrap">
                    <a href="#" data-lightbox="example-set"
                        data-title="Click the right half of the image to move forward.">
                        <img src="{{ asset('img/1.jpeg') }}" alt="gallery-images" />
                    </a>
                </div>
                <div class="gallery-img-wrap">
                    <a href="#" data-lightbox="example-set"
                        data-title="Click the right half of the image to move forward.">
                        <img src="{{ asset('img/2.jpeg') }}" alt="gallery-images" />
                    </a>
                </div>
                <div class="gallery-img-wrap">
                    <a href="" data-lightbox="example-set"
                        data-title="Click the right half of the image to move forward.">
                        <img src="{{ asset('img/3.jpeg') }}" alt="gallery-images" />
                    </a>
                </div>
                <div class="gallery-img-wrap">
                    <a href="" data-lightbox="example-set"
                        data-title="Click the right half of the image to move forward.">
                        <img src="{{ asset('img/4.jpeg') }}" alt="gallery-images" />
                    </a>
                </div>
            </section>
            <section class="page-heading">
                <div class="container">
                    <h2>Berita terbaru</h2>
                </div>
            </section>
            <section class="latest-news">
                <div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">
                    <div class="owl-two owl-carousel">
                        <div class="news-wrap" itemprop="event">
                            <div class="news-img-wrap" itemprop="image">
                                <img src="{{ asset('img/1.jpeg') }}" alt="Latest News Images" />
                            </div>
                            <div class="news-detail" itemprop="description">
                                <a href="">
                                    <h1>
                                        Mengenal karakteritstik Tanaman
                                    </h1>
                                </a>
                                <h2 itemprop="startDate">
                                    By Liputan6.com | 15 Dec. 2023
                                </h2>
                                <p>
                                    Proses merawat tanaman, dari menabur benih hingga melihat mereka tumbuh dan
                                    berkembang,
                                    membutuhkan kesabaran ekstra.
                                </p>
                            </div>
                        </div>
                        <div class="news-wrap" itemprop="event">
                            <div class="news-img-wrap" itemprop="image">
                                <img src="{{ asset('img/2.jpeg') }}" alt="Latest News Images" />
                            </div>
                            <div class="news-detail" itemprop="description">
                                <a href="">
                                    <h1>
                                        Tanaman yang bermanfaat sebagai pastisida alami
                                    </h1>
                                </a>
                                <h2 itemprop="startDate">
                                    By Liputan6.com | 15 Dec. 2023
                                </h2>
                                <p>
                                    Penanaman tanaman jenis tertentu dapat bermanfaat untuk mengurangi hama pada kebun.
                                </p>
                            </div>
                        </div>
                        <div class="news-wrap" itemprop="event">
                            <div class="news-img-wrap" itemprop="image">
                                <img src="{{ asset('img/3.jpeg') }}" alt="Latest News Images" />
                            </div>
                            <div class="news-detail" itemprop="description">
                                <a href="">
                                    <h1>
                                        Hobi berkebun bikin jantung sehat </h1>
                                </a>
                                <h2 itemprop="startDate">
                                    By Liputan6.com | 15 Dec. 2023
                                </h2>
                                <p>
                                    Sebuah studi baru menemukan bahwa hobi berkebun mungkin saja menjadi rahasia bagi
                                    jantung sehat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section id="contact">
            <footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
                <div class="footer-first-section">
                    <div class="container">
                        <div class="box-wrap" itemprop="about">
                            <header>
                                <h1>about</h1>
                            </header>
                            <p>
                                Gardenbeast adalah awal yang baik untuk memulai berkebun. Personil atau organisasi untuk
                                memulai berkebun dengan 1 klik
                            </p>
                            <h4>
                                <a href="tel:+6287753150191"><i class="fas fa-phone"></i> +6287753150191
                                </a>
                            </h4>
                            <h4>
                                <a href="mailto:gardenbeast@gmail.com"><i class="fas fa-envelope"></i>
                                    gardenbeast@gmail.com</a>
                            </h4>
                            <h4>
                                <a href=""><i class="fas fa-map-marker-alt"></i>Gongabu, Kathmandu, Nepal</a>
                            </h4>
                        </div>
                        <div class="box-wrap">
                            <header>
                                <h1>links</h1>
                            </header>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="box-wrap">
                            <header>
                                <h1>quick contact</h1>
                            </header>
                            <section class="quick-contact">
                                <input type="email" name="email" placeholder="Your Email*" />
                                <textarea placeholder="Type your message*"></textarea>
                                <button>send message</button>
                            </section>
                        </div>
                    </div>
                </div>
                <!-- End of box-Wrap -->
                <div class="footer-second-section">
                    <div class="container">
                        <hr class="footer-line" />
                        <ul class="social-list">
                            <li>
                                <a href=""><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <hr class="footer-line" />
                    </div>
                </div>
                <div class="footer-last-section">
                    <div class="container">
                        <p>
                            Copyright 2018 &copy; educationpro.com
                            <span> | </span> Theme designed and developed by
                            <a href="https://gardenbeast.com/">Lab Theme</a>
                        </p>
                    </div>
                </div>
            </footer>
        </section>
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
