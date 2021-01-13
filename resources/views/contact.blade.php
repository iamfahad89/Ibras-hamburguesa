@extends('layouts.app')
@section('pagetitle', 'CONTACTO')


@section('content')
    <!-- First section-->
    <section class="container-bk-img-top img-bk-contact-page-1 h-500x pos-relative">
        <div class="triangle-up pos-bottom"></div>
            <div class="bk-img-top-items h-100">
                <div class="display-tbl">
                        <div  class="display-tbl-cell center-text color-white">
                                <h5 id="imp-text" >DI HOLA</h5>
                                <h2 id="imp-text">Contacto</h2>
                        </div>
                </div>
            </div>
    </section>
    <!-- Second section-->

    <section class="home-story-container  pos-relative ">
        
        <div class="center-container">
            <div class="heading">
                <div id="div3" ><img class="registration-img" src="images/Burguer.png" alt="Burguer" height="42" width="32"></div><br><br>
                <h3>Di Hola</h3><br>
                <h5>Di hola, envíanos un mensaje</h5><br>
                <h6>Envíanos tus comentarios y suguerencias ustedes son importante para nosotros</h6>
            </div>
            <form class="form-style-1 placeholder-1" method="post" action="contactsubmit">
            {{ csrf_field() }}
            <div class="row">
                        <div class="second-col {{ $errors->has('name') ? ' has-error' : '' }}"> 
                            <input type="text" name="name" placeholder="Name">  
                        </div>
                        <div class="second-col"> 
                            <input type="text" name="email" placeholder="E-mail">  
                        </div>
                        <div class="full-col">
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="full-col">
                                <textarea class="text-pad-20" name="message" placeholder="Message"></textarea>
                        </div>
                </div><!-- row -->
                <h6 class="center-text">
                    <button type="submit" value="Submit" class="btn-primary-border">ENVIAR MENSAJE</button>
                    
                </h6>
            </form>
    </section>

@endsection
