@extends('layouts.site')

@section('content')

<section id="main-container" class="main-container">
    @include('components.servicos')
</section><!-- Main container end -->


<section class="subscribe no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="subscribe-call-to-acton">
                    <h3>Podemos ajudar?</h3>
                    <h4>0800 647 41 42</h4>
                </div>
            </div><!-- Col end -->

            <div class="col-md-8">
                <div class="ts-newsletter row align-items-center">
                    <div class="col-md-5 newsletter-introtext">
                        <h4 class="text-white mb-0">Newsletter</h4>
                        <p class="text-white">Receba informativos da prefeitura!</p>
                    </div>

                    <div class="col-md-7 newsletter-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                                <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Digite seu email" style="background-color: #FFF;" autocomplete="off">
                            </div>
                        </form>
                    </div>
                </div><!-- Newsletter end -->
            </div><!-- Col end -->

        </div><!-- Content row end -->
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
                    <h2 class="into-title">Web TV</h2>
                    <h3 class="into-sub-title">Apresentando Várzea Grande</h3>
                    <p><iframe width="100%" height="350" src="https://www.youtube.com/embed/I2Faw4RAXkU"></iframe></p>
                </div><!-- Intro box end -->


            </div><!-- Col end -->

            <div class="col-lg-6 mt-4 mt-lg-0"><h2 class="into-title">Notícias</h2>
                <h3 class="into-sub-title">Inscrições para o curso de Microempreendedor Individual poderão ser feitas até o dia 2 de fevereiro</h3>
                <p>Os locais que serão realizados os cursos da IFMT já foram definidos de acordo com as regiões de abrangência dos CRAS</p>

                

                        <div class="widget recent-posts">
                            <!-- <h3 class="widget-title">Recent Posts</h3> -->
                            <br>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="news-image" src="{{ asset('images/news/news1.jpg') }}"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">We Just Completes $17.6 Million Medical Clinic In Mid-missouri</a>
                                        </h4>
                                    </div>
                                </li><!-- 1st post end-->

                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="news-img" src="{{ asset('images/news/news2.jpg') }}"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                                        </h4>
                                    </div>
                                </li><!-- 2nd post end-->

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

                        </div><!-- Recent post end -->
                    

                </div>

            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->

<!--/ subscribe end -->

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
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="images/news/news1.jpg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block">We Just Completes $17.6 million Medical Clinic in Mid-Missouri</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> July 20, 2017
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 1st post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="images/news/news2.jpg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> June 17, 2017
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 2nd post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="images/news/news3.jpg" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block">Silicon Bench and Cornike Begin Construction Solar Facilities</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> Aug 13, 2017
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 3rd post col end -->
        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="news-left-sidebar.html">Ver tudo</a>
        </div>

    </div>
    <!--/ Container end -->
</section>

@endsection