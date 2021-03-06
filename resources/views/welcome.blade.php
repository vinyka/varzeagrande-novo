@extends('layouts.site') @section('content')

<section id="main-container" class="main-container">
    @include('components.servicos')
</section>
<!-- Main container end -->


<section class="subscribe no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="subscribe-call-to-acton">
                    <h3>Podemos ajudar?</h3>
                    <h4>0800 647 41 42</h4>
                </div>
            </div>
            <!-- Col end -->

            <div class="col-md-8">
                <div class="ts-newsletter row align-items-center">
                    <div class="col-md-5 newsletter-introtext">
                        <h4 class="text-white mb-0">Boletim informativo</h4>
                        <p class="text-white">Informe seu email para receber!</p>
                    </div>

                    <div class="col-md-7 newsletter-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                                <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Digite seu email" style="background-color: #FFF;" autocomplete="off">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Newsletter end -->
            </div>
            <!-- Col end -->

        </div>
        <!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>




<div class="banner-carousel banner-carousel-1 mb-0">
    @include('components.banners')
</div>


<section id="ts-features" class="ts-features">
    <div class="container">
        <div class="row">
            


        </div>
    </div>
</section>

<!--end code-->

<section id="ts-features" class="ts-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ts-intro">
                    <h2 class="into-title"><img src="https://img.icons8.com/ios/21/000000/tv-show.png" /> Web TV</h2>
                    <h3 class="into-sub-title">Apresentando V??rzea Grande</h3>
                    <!-- <p><iframe width="100%" height="350" src="https://www.youtube.com/embed/I2Faw4RAXkU"></iframe></p> -->
                    <div id="page-slider" class="page-slider small-bg">

                        <div class="item" style="background-image:url(http://img.youtube.com/vi/I2Faw4RAXkU/maxresdefault.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">V??rzea Grande em n??meros</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 1 end -->

                        <div class="item" style="background-image:url(http://img.youtube.com/vi/I2Faw4RAXkU/maxresdefault.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Relationships</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="item" style="background-image:url(images/slider-pages/slide-page3.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Performance</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Page slider end-->
                </div>
                <!-- Intro box end -->


            </div>
            <!-- Col end -->

            <div class="col-lg-6 mt-4 mt-lg-0">
                <h2 class="into-title"><img src="https://img.icons8.com/dotty/21/000000/tabletop-radio.png" /> Podcast
                </h2>
                <h3 class="into-sub-title">Inscri????es para o curso de Microempreendedor Individual poder??o ser feitas at?? o dia 2 de fevereiro</h3>
                <p>
                    <script type="text/javascript" player-tytle="Programa #03" player-ip="78.129.234.163" player-porta="17386" player-autoplay="false" src="https://lucianobragaweb.github.io/webradio-player/player.js"></script>
                </p>



                <div class="widget recent-posts">
                    <!-- <h3 class="widget-title">Recent Posts</h3> -->
                    <br>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center">
                            <!-- <div class="posts-thumb">
                                <a href="#"><img loading="lazy" alt="news-image" src="{{ asset('images/news/news1.jpg') }}"></a>
                            </div> -->
                            <div class="post-info">
                                <h4 class="entry-title">
                                    <a href="#">#02 - {{ date("d/m/Y")}} - We Just Completes $17.6 Million Medical
                                        Clinic In Mid-missouri</a>
                                </h4>
                            </div>
                        </li>
                        <!-- 1st post end-->

                        <li class="d-flex align-items-center">
                            <!-- <div class="posts-thumb">
                                <a href="#"><img loading="lazy" alt="news-img" src="{{ asset('images/news/news2.jpg') }}"></a>
                            </div> -->
                            <div class="post-info">
                                <h4 class="entry-title">
                                    <a href="#">#01 - {{ date("d/m/Y")}} - Thandler Airport Water Reclamation Facility
                                        Expansion Project Named</a>
                                </h4>
                            </div>
                        </li>
                        <!-- 2nd post end-->

                        <!-- <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="news-img" src="{{ asset('images/news/news3.jpg') }}"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">Silicon Bench And Cornike Begin Construction Solar Facilities</a>
                                        </h4>
                                    </div>
                                </li> -->

                    </ul>

                </div>
                <!-- Recent post end -->


            </div>

        </div>
        <!-- Col end -->
    </div>
    <!-- Row end -->
    </div>
    <!-- Container end -->
</section>
<!-- Feature are end -->

<!--/ subscribe end -->


<section id="ts-team" class="ts-team">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Comunica????o</h2>
                <h3 class="section-sub-title">Assessoria de imprenssa</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-12">
                <div id="team-slide" class="team-slide">
                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" class="w-100" src="{{ asset('images/team/team1.jpg') }}" alt="team-img">
                            </div>
                            <div class="ts-team-content">
                                <a href="#">
                                    <h3 class="ts-name">Nats Stenman</h3>
                                    <!-- <p class="ts-designation">Chief Operating Officer</p> -->
                                    <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                                    <!-- <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div> -->
                                </a>

                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper end -->
                    </div>
                    <!-- Team 1 end -->

                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" class="w-100" src="images/team/team2.jpg" alt="team-img">
                            </div>
                            <div class="ts-team-content">
                                <h3 class="ts-name">Angela Lyouer</h3>
                                <!-- <p class="ts-designation">Innovation Officer</p> -->
                                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                                <!-- <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div> -->
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper end -->
                    </div>
                    <!-- Team 2 end -->

                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" class="w-100" src="images/team/team3.jpg" alt="team-img">
                            </div>
                            <div class="ts-team-content">
                                <h3 class="ts-name">Mark Conter</h3>
                                <!-- <p class="ts-designation">Safety Officer</p> -->
                                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                                <!-- <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div> -->
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper end -->
                    </div>
                    <!-- Team 3 end -->

                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" class="w-100" src="images/team/team4.jpg" alt="team-img">
                            </div>
                            <div class="ts-team-content">
                                <h3 class="ts-name">Ayesha Stewart</h3>
                                <!-- <p class="ts-designation">Finance Officer</p> -->
                                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                                <!-- <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div> -->
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper end -->
                    </div>
                    <!-- Team 4 end -->

                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" class="w-100" src="images/team/team5.jpg" alt="team-img">
                            </div>
                            <div class="ts-team-content">
                                <h3 class="ts-name">Dave Clarkte</h3>
                                <!-- <p class="ts-designation">Civil Engineer</p> -->
                                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                                <!-- <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div> -->
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper end -->
                    </div>
                    <!-- Team 5 end -->

                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" class="w-100" src="images/team/team6.jpg" alt="team-img">
                            </div>
                            <div class="ts-team-content">
                                <h3 class="ts-name">Elton Joe</h3>
                                <!-- <p class="ts-designation">Site Supervisor</p> -->
                                <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                                <!-- <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div> -->
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper end -->
                    </div>
                    <!-- Team 6 end -->

                </div>
                <!-- Team slide end -->
            </div>
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ Team end -->


<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">GAAT</h2>
                <h3 class="section-sub-title">GABINETE DE APOIO ??S A????ES TRANSFORMADORAS</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="#" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="http://www.varzeagrande.mt.gov.br/storage/imagem/bf6fc9aa8087de37df8217415bb872e4.jpg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="#" class="d-inline-block">GAAT repassa quase R$100 mil em recursos do Bazar do Bem
                                para o lar dos idosos</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> {{ date("d/m/Y") }}
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Latest post end -->
            </div>
            <!-- 1st post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="#" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="http://www.varzeagrande.mt.gov.br/storage/imagem/751803a7431856c5de5990af2c158ffc.JPG" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="#" class="d-inline-block">Primeira-dama Kika Doril??o visita Cras e refor??a apoio ??s
                                a????es e servi??os sociais</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> {{ date("d/m/Y") }}
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Latest post end -->
            </div>
            <!-- 2nd post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="#" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="http://www.varzeagrande.mt.gov.br/storage/imagem/1299b7438582c908a37e7febe7d2f115.jpg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="#" class="d-inline-block">Kalil Baracat lan??a programa visando ampliar a gera????o de
                                emprego e renda</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> {{ date("d/m/Y") }}
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Latest post end -->
            </div>
            <!-- 3rd post col end -->
        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="#">Ver todas as not??cias</a>
        </div>

    </div>
    <!--/ Container end -->
</section>

@endsection