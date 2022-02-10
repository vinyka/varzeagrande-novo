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
            <div class="col-lg-6">
                <div class="ts-intro">
                    <h2 class="into-title"><img src="https://img.icons8.com/ios/21/000000/tv-show.png" /> Web TV</h2>
                    <h3 class="into-sub-title">Apresentando Várzea Grande</h3>
                    <p><iframe width="100%" height="350" src="https://www.youtube.com/embed/I2Faw4RAXkU"></iframe></p>
                </div>
                <!-- Intro box end -->


            </div>
            <!-- Col end -->

            <div class="col-lg-6 mt-4 mt-lg-0">
                <h2 class="into-title"><img src="https://img.icons8.com/dotty/21/000000/tabletop-radio.png" /> Web Rádio</h2>
                <h3 class="into-sub-title">Inscrições para o curso de Microempreendedor Individual poderão ser feitas até o dia 2 de fevereiro</h3>
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
                                    <a href="#"><img src="https://img.icons8.com/material-outlined/24/000000/circled-play.png" /> - #02 - {{ date("d/m/Y")}} - We Just Completes $17.6 Million Medical Clinic In Mid-missouri</a>
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
                                    <a href="#"><img src="https://img.icons8.com/material-outlined/24/000000/circled-play.png" /> - #01 - {{ date("d/m/Y")}} - Thandler Airport Water Reclamation Facility Expansion Project Named</a>
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



<section id="main-container" class="main-container">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Secretaria de Comunicação</h2>
                <h3 class="section-sub-title">Assessoria de Imprensa</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- <div class="shuffle-btn-group">
                    <label class="active" for="all">
                        <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
                    </label>
                    <label for="commercial">
                        <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Commercial
                    </label>
                    <label for="education">
                        <input type="radio" name="shuffle-filter" id="education" value="education">Education
                    </label>
                    <label for="government">
                        <input type="radio" name="shuffle-filter" id="government" value="government">Government
                    </label>
                    <label for="infrastructure">
                        <input type="radio" name="shuffle-filter" id="infrastructure"
                            value="infrastructure">Infrastructure
                    </label>
                    <label for="residential">
                        <input type="radio" name="shuffle-filter" id="residential" value="residential">Residential
                    </label>
                    <label for="healthcare">
                        <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
                    </label>
                </div> -->
                <!-- project filter end -->


                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/project1.jpg">
                                <img class="img-fluid" src="images/projects/project1.jpg" alt="project-image">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Capital Teltway Building</a>
                                    </h3>
                                    <p class="project-cat">Commercial, Interiors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 1 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/project2.jpg">
                                <img class="img-fluid" src="images/projects/project2.jpg" alt="project-image">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Ghum Touch Hospital</a>
                                    </h3>
                                    <p class="project-cat">Healthcare</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 2 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/project3.jpg">
                                <img class="img-fluid" src="images/projects/project3.jpg" alt="project-image">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">TNT East Facility</a>
                                    </h3>
                                    <p class="project-cat">Government</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 3 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/project4.jpg">
                                <img class="img-fluid" src="images/projects/project4.jpg" alt="project-image">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Narriot Headquarters</a>
                                    </h3>
                                    <p class="project-cat">Infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 4 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/project5.jpg">
                                <img class="img-fluid" src="images/projects/project5.jpg" alt="project-image">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Kalas Metrorail</a>
                                    </h3>
                                    <p class="project-cat">Infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 5 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/project6.jpg">
                                <img class="img-fluid" src="images/projects/project6.jpg" alt="project-image">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Ancraft Avenue House</a>
                                    </h3>
                                    <p class="project-cat">Residential</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 6 end -->
                </div>
                <!-- shuffle end -->
            </div>

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="#">Todas a notícias</a>
                </div>
            </div>

        </div>
        <!-- Content row end -->

    </div>
    <!-- Conatiner end -->
</section>
<!-- Main container end -->


<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">GAAT</h2>
                <h3 class="section-sub-title">GABINETE DE APOIO ÀS AÇÕES TRANSFORMADORAS</h3>
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
                            <a href="#" class="d-inline-block">GAAT repassa quase R$100 mil em recursos do Bazar do Bem para o lar dos idosos</a>
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
                            <a href="#" class="d-inline-block">Primeira-dama Kika Dorilêo visita Cras e reforça apoio às ações e serviços sociais</a>
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
                            <a href="#" class="d-inline-block">Kalil Baracat lança programa visando ampliar a geração de emprego e renda</a>
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
            <a class="btn btn-primary" href="#">Ver todas notícias do GAAT</a>
        </div>

    </div>
    <!--/ Container end -->
</section>

@endsection