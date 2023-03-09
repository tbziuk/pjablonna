<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Parafia w Jabłonnie</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css')}} ">
        <link rel="icon" type="image/x-icon" href="{{ URL::asset('images/parafia.ico')}}">
    </head>
    <body>
        @component('components/navbar')
        @endcomponent

        <div id="carouselExampleIndicators" class="carousel slide active">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="max-height: 95vh">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::asset('images/8.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ URL::asset('images/5.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ URL::asset('images/3.png')}}" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Poprzedni</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Następny</span>
            </button>
        </div>

        <h1 class="main-header">Parafia Matki Bożej Królowej Polski w Jabłonnie</h1>
        <hr class="divider">

<!-- ############################################################################ -->
<!-- ################################  CZYTANIA  ################################ -->
<!-- ############################################################################ -->

        <section class="czytania-na-dzis">
            <h2 class="semi-main-header">Czytania na dzisiaj</h2>                    
            <div class="czytania container row">
                <?php echo $Czytania; ?>
            </div>
        </section>

<!-- ########################################################################## -->
<!-- ################################ ADORACJA ################################ -->
<!-- ########################################################################## -->
        <section class="full-width-cont">
            <div class="do-not-resize" style="background-image:url({{ URL::asset('images/adoracja.jpg')}})"></div>
            <div>
                <h3 class="font-weight-bold">Adoracja Najświętszego Sakramentu</h3>
                <p>Zapraszamy w dni powszednie między 8<sup>00</sup> a 18<sup>00</sup></p>
                <a href="{{ url('/msze-i-nabozenstwa#msze') }}"><button class="adoracja font-weight-bold">Msze i nabożeństwa</button></a>
            </div>
        </section>

<!-- ############################################################################ -->
<!-- ################################ INFORMACJE ################################ -->
<!-- ############################################################################ -->


        <section class="container info-short-main">
            <h2 class="semi-main-header">Informacje</h2>
            <div class="row">
                <a href="{{ url('/ogloszenia-parafialne') }}" class="not-btn"><div class="info-item col-12 col-lg-4">
                    <div class="graybg" style="background-image:url({{ URL::asset('images/ogloszenia.jpg')}})"></div>
                    <h4>Ogłoszenia Parafialne</h4>
                </div></a>
                <a href="{{ url('/intencje-mszalne') }}" class="not-btn"><div class="info-item col-12 col-lg-4">
                    <div class="graybg" style="background-image:url({{ URL::asset('images/stuly.jpg')}}); background-position: -14px 0px;"></div>
                    <h4>Intencje Mszalne</h4>
                </div></a>
            </div>
        </section>
        
<!-- ########################################################################## -->
<!-- ################################ DIECEZJA ################################ -->
<!-- ########################################################################## -->
        <section class="full-width-cont">
            <div class="other-22">
                <h3 class="font-weight-bold other-2">Poznaj naszą parafię</h3>
                <p>Zapraszamy do odwiedzenia strony naszej diecezji</p>
                <a href="https://diecezja.waw.pl/parafia/jablonna-parafia-matki-bozej-krolowej-polski/" target="_blank"><button class="adoracja font-weight-bold">Odwiedź</button></a>
            </div>
            <div class="do-not-resize other-2" style="background-image:url({{ URL::asset('images/diecezja.png')}})"></div>
        </section>


<!-- ############################################################################# -->
<!-- ################################ AKTUALNOŚCI ################################ -->
<!-- ############################################################################# -->

        <section class="container aktualnosci-short">
            <h2 class="semi-main-header">Aktualności</h2>
            <div class="row m-0 justify-content-center">
                <?php echo $html ?>
            </div>
        </section>

<!-- ################################################################################ -->
<!-- ################################ WIRTUALNA TACA ################################ -->
<!-- ################################################################################ -->

        <section class="full-width-cont">
            <div class="do-not-resize" style="background-image:url({{ URL::asset('images/konto.png')}})"></div>
            <div>
                <h3 class="font-weight-bold">Konto Parafialne</h3>
                    <p class="other-2">Wszystkim wspierającym składamy serdeczne podziękowania. Bóg zapłać. 
                        Jeśli chciałbyś materialnie wesprzeć 
                        parafię &minus; ofiarę można wpłacić na konto:
                        <span class="font-weight-bold">BS 96 8013 1016 2002 0545 5314 0001</span>
                    </p>
            </div>
        </section>


<!-- ############################################################################ -->
<!-- ################################ ZOBACZ TEŻ ################################ -->
<!-- ############################################################################ -->


        <section class="container info-short-main">
            <h2 class="semi-main-header">Zobacz też</h2>
            <div class="row">
                <a href="{{ url('/kancelaria#info') }}" class="not-btn"><div class="info-item col-12 col-lg-4">
                    <div class="graybg" style="background-image:url({{ URL::asset('images/chrzest.jpg')}})"></div>
                    <h4>Chrzest Święty</h4>
                </div></a>
                <a data-bs-toggle="modal" data-bs-target="#IKomunia" class="not-btn"><div class="info-item col-12 col-lg-4">
                    <div class="graybg" style="background-image:url({{ URL::asset('images/komunia.jpg')}})"></div>
                    <h4>I Komunia Święta</h4>
                    <div class="modal fade" id="IKomunia">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">I Komunia Ś</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php echo $Komunia; ?>
                                </span>
                                </div>
                                <div class="modal-footer modal-footer-end">
                                    <!-- Z prawej strony -->
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></a>
                <a data-bs-toggle="modal" data-bs-target="#Bierzmowanie" class="not-btn"><div class="info-item col-12 col-lg-4">
                    <div class="graybg" style="background-image:url({{ URL::asset('images/bierzmowanie.png')}})"></div>
                    <h4>Bierzmowanie</h4>
                    <div class="modal fade" id="Bierzmowanie">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Bierzmowanie</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php echo $Bierzmowanie; ?>
                                </span>
                                </div>
                                <div class="modal-footer modal-footer-end">
                                    <!-- Z prawej strony -->
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></a>                
            </div>
            <div class="row">
                <a href="{{ url('/kancelaria#info') }}" class="not-btn"><div class="info-item col-12 col-lg-4">
                    <div class="graybg" style="background-image:url({{ URL::asset('images/slub.jpg')}})"></div>
                    <h4>Sakrament Małżeństwa</h4>
                </div></a>
                <a href="{{ url('/kancelaria#info') }}" class="not-btn"><div class="info-item col-12 col-lg-4">
                    <div class="graybg" style="background-image:url({{ URL::asset('images/trumna.jpg')}}); background-position: -1px 0px;"></div>
                    <h4>Sprawy pogrzebowe</h4>
                </div></a>
            </div>
        </section>


        @component('components/footer')
        @endcomponent
        <!-- scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/index.js')}}"></script>
    </body>
</html> 