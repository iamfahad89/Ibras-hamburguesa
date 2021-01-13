@extends('layouts.app')
@section('pagetitle', 'MENU')


@section('content')
    <!-- First section-->
    <section class="container-bk-img-top img-bk-menu-page-1 h-500x pos-relative">
        <div class="triangle-up pos-bottom"></div>
            <div class="bk-img-top-items h-100">
                <div class="display-tbl">
                        <div class="display-tbl-cell center-text color-white">
                                <h5>LAS MEJORES DE LA CIUDAD</h5>
                                <h1 class="main-text">Menú</h1>
                                <!--<h5><a href="#" class="btn btn-primary"><b>VER MENÚ HOY</b></a></h5>-->
                        </div>
                </div>
            </div>
    </section>
    <!-- Second section-->


    <!-- Third section-->
    <section class="home-story-container  pos-relative ">
        
        <div class="container">
            <div class="heading">
                <h3>Elija su Hamburguesa</h3>
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
        </div>
    </section>    

    <!-- Fourth section-->
    <section class="home-story-container left-text pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container">
        <div class='row'>
                @foreach($menu_items as $menu_item)
                    <div class='col-md-6'>
                        <div class='left-sided-container'>
                            <div class='sided-left'>
                            <img src='images/{{ $menu_item ->image_loc }}' alt=''>
                        </div>
                        <div class='sided-right'>
                        <h5 >
                            <b> {{ $menu_item ->item_name }}</b>
                            <b class='color-price float-right'>${{ $menu_item ->price }} </b>
                        </h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>            
                                    
            <!--<h6 class="center-text "><a href="#" class="btn btn-primary"><b>VER MENÚ HOY</b></a></h6>-->
        </div>
    </section>


@endsection
