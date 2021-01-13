@extends('layouts.adminapp')
@section('pagetitle', 'Admin')

@section('content')
    <!-- First section-->
    <section class="side-nav-right">
        <div class="heading">
            <h2>Menu</h2>
        </div>
        <div class="content ">

    <!-- Third section-->
    <section class="home-story-container img-bk-menu pos-relative ">
        <div class="add-more-container">
            <h6><a href="{{ url('/createmenu') }}" class="btn-primary-border"><b> + Add new</b></a></h6>
        </div>        
        <div class="container">

            <div class='row'>
                @foreach($menu_items as $menu_item)
                    <div class='col-lg-3 col-md-4 col-sm-6'>
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
                        <h6 ><a href='php/add_items_cart.php?item_id=' class='btn-primary-border'><b> Update    </b></a></h6>
                        </div>
                        </div>                               
                
                @endforeach
            </div>
            
            
        </div>
    </section>        
        </div>
    </section>
@endsection
