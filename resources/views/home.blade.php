@extends('layouts.app')
@section('pagetitle', 'INICIO')

@section('content')
    <!-- First section-->
    <section class="container-bk-img-top img-bk-1 h-700x pos-relative">
        <div class="triangle-up pos-bottom"></div>
            <div class="bk-img-top-items h-100">
                <div class="display-tbl">
                        <div class="display-tbl-cell center-text color-white">
                                <h5>LAS MEJORES DE LA CIUDAD</h5>
                                <h1 class="main-text">Hamburguesas</h1>
                                <h5><a href="{{ url('/menu') }}" class="btn btn-primary"><b>VER MENÚ HOY</b></a></h5>
                        </div>
                </div>
            </div>
    </section>
    <!-- Second section-->
    <section class="home-story-container left-text pos-relative">
        <div class="home-story-left-img img-bk-2 w-20"></div>
        <div class="home-story-right-img img-bk-3 w-20"></div>
        <div class="center-container">
                <div class="heading">
                    <img class="heading-img" src="images/Burguer.png" alt="Burguer">
                    <h3>Nuestra historia</h3>
                </div>
                <div class="row">
                    <div class="half-col">
                            <p >Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la Hamburgueseria “Soy Yo” con una  inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto. </p>
                    </div>

                    <div class="half-col">
                            <p >A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill. </p>
                    </div>
                </div>
        </div>
    </section>


    <!-- Third section-->
    <section class="home-story-container img-bk-menu pos-relative ">
        
        <div class="container">
            <div class="heading">
                <img class="heading-img" src="images/Burguer.png" alt="Burguer">
                <h3>Las más vendidos</h3>
            </div>
            <div class='row'>
                @foreach($menu_items as $menu_item)
                    <div class='col-lg-3 col-md-4  col-sm-6'>
                        <div class='center-text'>
                            <div class='img-200x margin-lr-auto pos-relative'>
                            @if( $menu_item -> special_tag != 'none' )
                                <h6 class='ribbon-container'>
                                <div class='ribbon-main  {{  $menu_item -> special_tag === "oferta" ? "ribbon-red" : ($menu_item -> special_tag === "especialidad" ? "ribbon-green" : "ribbon-white") }}'></div>
                                <b class='uppercase ' style='color:black;'>{{ $menu_item -> special_tag }}</b>
                                </h6>
                            @endif
                        <img src='images/{{ $menu_item ->image_loc }}' alt=''>
                        </div>
                        <h5 >{{ $menu_item ->item_name }} </h5>
                        <h4 ><b> ${{ $menu_item ->price }}</b></h4>
                        <h6 ><a href="{{ url('/placeorder?id='.$menu_item -> id ) }}" class='btn-primary-border'><b> Ordenar ahora</b></a></h6>
                        </div>
                        </div>                               
                
                @endforeach
            </div>
            
            <h6 class="center-text "><a href="{{ url('/menu') }}" class="btn btn-primary"><b>VER MENÚ HOY</b></a></h6>
        </div>
    </section>
@endsection
