@extends('layouts.master')
 
@section('title', 'Msze Święte i Nabożeństwa')
 
@section('content')
    <!-- ################################# MSZE ################################# -->

    <h2 id="msze" class="semi-main-header my-5">Msze Święte</h2>                    
    <section class="full-width-cont">
        <div class="do-not-resize" style="background-image:url({{ URL::asset('images/msze.jpg')}})"></div>
        <div class="pt-2">
            <h3 class="font-weight-bold msze">Msze Święte</h3>
            <h4 class="msze">Niedziela:</h4> 
            <ul class="msze">
                <li>7<sup>00</sup>, </li> 
                <li>8<sup>30</sup>, </li> 
                <li>10<sup>00</sup>, </li> 
                <li id="dzieci">11<sup>30</sup>
                    <span>(z udziałem dzieci)</span>,
                </li>
                <li>13<sup>00</sup>, </li>
                <li>18<sup>00</sup></li>
            </ul>
            <h4 class="msze">Dni Powszednie:</h4>
            <ul class="msze">
                <li>7<sup>00</sup>, </li>
                <li>7<sup>30</sup>, </li>
                <li>18<sup>00</sup></li>
            </ul>
            <p class="msze">Spowiedź podczas każdej Mszy Św. lub bezpośrednio przed Mszą Św.</p>
        </div>
    </section>

    <!-- ################################# NABOZENSTWA ################################# -->

    <h2 class="semi-main-header my-5">Nabożeństwa</h2>  

    <section id="naboz" class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="naboz-cont">
                    <div class="image" style="background-image:url({{ URL::asset('images/mboza.jpg')}})"></div>
                    <div class="nabozenstwo">
                        <h3>Nabożeństwo do Matki Bożej Nieustającej Pomocy</h3>
                        <p>w środy na Mszy Św. o godzinie 18<sup>00</sup></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="naboz-cont">
                    <div class="image" style="background-image:url({{ URL::asset('images/nsakrament.jpg')}}); background-position: 0px -57px;"></div>
                    <div class="nabozenstwo">
                        <h3>Adoracja Najświętszego Sakramentu</h3>
                        <p>w każdy czwartek po wieczornej Mszy Świętej do godz. 20<sup>00</sup></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="naboz-cont">
                    <div class="image" style="background-image:url({{ URL::asset('images/dkrzyz.jpg')}}); background-position: 0px -102px;"></div>
                    <div class="nabozenstwo">
                        <h3>Droga Krzyżowa</h3>
                        <p>W okresie Wielkiego Postu w każdy piątek o 17<sup>15</sup> oraz 18<sup>30</sup></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="naboz-cont">
                    <div class="image" style="background-image:url({{ URL::asset('images/dni_tyg.jpg')}})"></div>
                    <div class="nabozenstwo">
                        <h3>Pierwsze piątki, soboty, niedziele miesiąca</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="naboz-cont">
                    <div class="image" style="background-image:url({{ URL::asset('images/soltarz.jpg')}}); background-position: -144px -224px; background-size: 200%;"></div>
                    <div class="nabozenstwo">
                        <h3>Nabożeństwa majowe i czerwcowe</h3>
                        <p>W danym miesiącu o godzinie 17<sup>15</sup></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="naboz-cont">
                    <div class="image" style="background-image:url({{ URL::asset('images/rozaniec.jpg')}})"></div>
                    <div class="nabozenstwo">
                        <h3>Różaniec</h3>
                        <p>W październiku o godzinie 17<sup>15</sup> przed Najświętszym Sakramentem</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop