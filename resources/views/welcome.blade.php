@extends('layouts.site') @section('content')


<section id="main-container" class="main-container" style="background-color: #F9F9F9;">
    @include('components.servicos1')
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




<!--end code-->

<section id="ts-features" class="ts-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ts-intro">
                    <h2 class="into-title"><img src="https://img.icons8.com/ios/21/000000/tv-show.png" /> Web TV</h2>
                    <!-- <h3 class="into-sub-title">Apresentando Várzea Grande</h3> -->
                    <!-- <p><iframe width="100%" height="350" src="https://www.youtube.com/embed/I2Faw4RAXkU"></iframe></p> -->
                    <div id="page-slider" class="page-slider small-bg">

                        <div class="item img-fluid" style="background-image:url(http://img.youtube.com/vi/I2Faw4RAXkU/maxresdefault.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Várzea Grande em números</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 1 end -->

                        <div class="item" style="background-image:url(http://img.youtube.com/vi/XKFTbrxY4zE/maxresdefault.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Várzea Grande vai aderir ao programa de Educação Ambiental</h2>
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
                <h2 class="into-title">
                    <h2 class="into-title">
                        <img src="https://img.icons8.com/ios/21/000000/block-microphone--v2.png" /> Podcast
                    </h2>
                    <h3 class="into-sub-title">Inscrições para o curso de Microempreendedor Individual poderão ser feitas até o dia 2 de fevereiro</h3>
                    <p>
                        <audio controls="" class="podCastPlayer"><source src="http://78.129.234.163:17386/;stream.mp3" type="audio/mp3">Seu navegador não suporta o elemento de áudio.</audio>
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
                                        <a href="#"><img src="https://img.icons8.com/ios/18/000000/block-microphone--v2.png">#02 - {{ date("d/m/Y")}} - We Just Completes $17.6 Million Medical Clinic In Mid-missouri</a>
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
                                        <a href="#"><img src="https://img.icons8.com/ios/18/000000/block-microphone--v2.png" /> #01 - {{ date("d/m/Y")}} - Thandler Airport Water Reclamation Facility Expansion Project Named</a>
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



<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Comunicação</h2>
                <h3 class="section-sub-title">Assessoria de imprenssa</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="#" class="latest-post-img">
                            <img loading="lazy" class="img-thumbnail" src="{{ asset('images/news/1.jpg')}}" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="#" class="d-inline-block">Sábado tem Dia "D" contra a Covid-19 para crianças em Várzea Grande</a></h4>
                        </a>
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
                            <img loading="lazy" class="img-thumbnail" src="{{ asset('images/news/4.jpg')}}" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="#" class="d-inline-block">Cursos de curta e longa duração estão sendo realizados em Várzea Grande</a>
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
                            <img loading="lazy" class="img-thumbnail" src="{{ asset('images/news/3.jpg')}}" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="#" class="d-inline-block">Educação promove Formação para Articuladores e Monitores do Programa ETA  </a>
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
    </div>
    <!--/ Container end -->
</section>



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
                            <img loading="lazy" class="img-thumbnail" src="{{ asset('images/banner/gaat1.jpg')}}" alt="img">
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
                            <img loading="lazy" class="img-thumbnail" src="{{ asset('images/banner/gaat2.jpg')}}" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="#" class="d-inline-block">Primeira-dama Kika Dorilêo visita Cras e reforça apoio às
                                ações e serviços sociais</a>
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
                            <img loading="lazy" class="img-thumbnail" src="{{ asset('images/banner/gaat3.jpg')}}" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="#" class="d-inline-block">Kalil Baracat lança programa visando ampliar a geração de
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
            <a class="btn btn-primary" href="#">Ver todas as notícias</a>
        </div>

    </div>
    <!--/ Container end -->
</section>

@endsection
