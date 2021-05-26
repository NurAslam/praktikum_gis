@extends('layouts.front')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Malang Tour</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/map">Coming</a>
        </div>
    </header>

     <!-- About-->
     <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">wisata yang penuh dengan kenyamanan dan mengasyikan.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('startbootstrap') }}/assets/img/about/1.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Mengenal Lebih Dekat Tentang Malang</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Kota Malang merupakan salah satu kota destinasi wisata yang terletak Di Provinsi Jawa Timur, Indonesia. Kota ini terletak berdekatan dengan Kota Sidoarjo, Pasuruan dan Surabaya. Kota Malang merupakan salah satu kota terbesar setelah Surabaya yang merupakan Ibukota Provinsi Jawa timur dan terpadat di Jawa Timur. Luas wilayah Kota Malang sekitar 110,06 km2, sedangkan luas Malang Raya sekitar 252,10 km2 yang merupakan kesatuan wilayah bersama Kota Batu dan Kabupaten Malang.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('startbootstrap') }}/assets/img/about/2.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>11 Januari 1975</h4>
                            <h4 class="subheading">Kelahiran Malang</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Asal usul penamaan Malang sampai sekarang masih diperdebatkan oleh para ahli sejarah. Nama "Malang" muncul pertama kali pada Prasasti Pamotoh/Ukirnegara (1120 Saka/1198 Masehi) yang ditemukan pada tanggal 11 Januari 1975 oleh seorang administrator perkebunan Bantaran di Wlingi, Kabupaten Blitar.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('startbootstrap') }}/assets/img/about/3.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Wisata Yang Ada</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">banyak sekali tempat-tempat wisata terindah yang sudah tertata cantik untuk Anda kunjungi saat Anda berada di Kota Malang, Antara lain pegunungan Semeru Bromo, pantai Balaikamabang dan lain-lain</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('startbootstrap') }}/assets/img/about/4.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Malang Asoy</h4>
                            <h4 class="subheading">Malang Kota Wisata</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Untuk lebih mengenalkan Kota Malang di pentas nasional dan internasional, Pemerintah Kota Malang, Jawa Timur, meluncurkan slogan baru bagi kota pendidikan itu, “Malang Asoy,” yang berarti Malang sebagai tujuan wisata yang penuh dengan kenyamanan dan mengasyikan <a href="https://malangkota.go.id/wisata/"> kunjungi.</a></p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </section>


@endsection
