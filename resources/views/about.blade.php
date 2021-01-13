@extends('layouts.app')
@section('pagetitle', 'SOBRE NOSOTROS')


@section('content')
    <!-- First section-->
    <section class="container-bk-img-top img-bk-about-page-1 h-500x pos-relative">
        <div class="triangle-up pos-bottom"></div>
            <div class="bk-img-top-items h-100">
                <div class="display-tbl">
                        <div class="display-tbl-cell center-text color-white">
                                <h5>LAS MEJORES DE LA CIUDAD</h5>
                                <h2 class="main-text">Sobre nuestras Hamburguesas</h2>
                                <!--<h5><a href="#" class="btn btn-primary"><b>VER MENÚ HOY</b></a></h5>-->
                        </div>
                </div>
            </div>
    </section>
    <!-- Second section-->
    <section class="home-story-container left-text pos-relative">

        <div class="center-container">
            <div class="row">
                <div class="second-col">
                    <div class="abt-us-img-sec2">
                        <img src="images/hamburguesa1.jpg" alt="Menu Image">
                    </div>
                </div>
                <div class="second-col">
                    <div class="abt-us-img-sec2">
                        <img src="images/hamburguesa2.jpg" alt="Menu Image">
                    </div>
                </div> 
            </div>
            <div class="heading">
                    <h3>Somos Ibra</h3>
            </div>
            <div class="row">
                <div class="full-col center-text">
                    <p >Al comenzar el dia, cada mañana estamos más que preparándonos para dar lo mejor de nosotros mismos.<br>
                    Porque cada uno de nuestros clientes nos inspira a trabajar en pro del mejor servicio, las mejores entregas y, sobre todo, las mejores Hamburguesas..</p>
                </div>
            </div>
            <div class="row">
                    <div class="half-col">
                            <p >Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la Hamburgueseria “Soy Yo” con una  inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto. </p>
                    </div>

                    <div class="half-col">
                            <p >A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill. </p>
                    </div>
            </div>
            <h5 class="center-text">
                <a href="{{ url('/menu') }}" class="btn btn-primary equal-width"><b>VER EL MENÚ HOY </b></a>
                <a href="{{ url('/home') }}" class="btn btn-primary color-bk-green equal-width"><b>PEDIR AHORA </b></a>
            </h5>                
        </div>
    </section>


    <!-- Third section-->
    <section class="home-story-container img-bk-menu color-white pos-relative ">
        
        <div class="center-container">
            <div class="heading">
                <img class="heading-img" src="images/Burguer.png" alt="Burguer">
                <h3>Lo que dicen los clientes</h3>
            </div>
            <div class="carousel-container" >
                <div class="carousel-wrapper left-text">
                    <div class="carousel-item">
                        <h4>Las Mejores Hamburguesas</h4>
                        <p class="color-client-comments">
                        Me gustan sus Hamburguesas, siempre seran mi lugar de encuetros y buenos recuerdas acompañados de la mejor Hamburguesa
                        </p>
                        <!--<img class="client-profile-img" src="images/" alt="">-->
                        <i class="fa fa-user client-profile-img client-fa-icon"></i>
                        <h6><b class="color-price">Daiane Smith</b>,<b >Cliente</b>
                        </h6>
                    </div>
                    <div class="carousel-item">
                        <h4>Que Hamburguesa mas Increible</h4>
                        <p class="color-client-comments">
                            Voy con mi familia a compertir de la buena comida y servicio que prestan, los recomiendo a mis amigos, los felicito
                        </p>
                        <!--<img class="client-profile-img" src="images/" alt="">-->
                        <i class="fa fa-user client-profile-img client-fa-icon"></i>
                        <h6><b class="color-price">Daiane Smith</b>,<b >Cliente</b>
                        </h6>
                    </div>
                    <div class="carousel-item">
                        <h4>La mejor hamburguesa de la ciudad</h4>
                        <p class="color-client-comments">
                            Soy amante de la buena hamburguesa y puedo decir que me gusta lo bien que la preparan, el hambiente es como y muy familiar, cada ves que tengo la oportunidad de darme un gusto lo visito porque se que sere bien atendido y comere una excelente hamburguesa
                        </p>
                        <!--<img class="client-profile-img" src="images/" alt="">-->
                        <i class="fa fa-user client-profile-img client-fa-icon"></i>
                        <h6><b class="color-price">Michael Williams</b>,<b >Cliente</b>
                        </h6>
                    </div>
                </div>
                <div class="carousel-bullets">
                    <span class="carousel-item-bullet carousel-item-bullet-active"></span>
                    <span class="carousel-item-bullet"></span>
                    <span class="carousel-item-bullet"></span>
                    <span class="carousel-item-bullet"></span>
                </div>
            </div>
        </div>
    </section>    

    <!-- Fourth section-->
    <section class="home-story-container left-text pos-relative">

        <div class="triangle-up pos-bottom"></div>
        <div class="triangle pos-top"></div>
        <div class="center-container">
            <h3 class="center-text ">Nos esforzamos por brindar un buen servicio para su disfrute.</h3>
        </div>
    </section>
@endsection
