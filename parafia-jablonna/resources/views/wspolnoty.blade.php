@extends('layouts.master')
 
@section('title', 'Wspólnoty Parafialne')
 
@section('content')                   

<h2 class="semi-main-header my-5">Wspólnoty Parafialne</h2>                     
    <div class="container">
        <div class="row wspolnoty">
            <div class="wspolnota col-xl-3 col-md-6 col-12" data-bs-toggle="modal" data-bs-target="#lso">
            <div class="do-not-resize" style="background-image:url({{ URL::asset('images/minist2.jpg')}}); background-size: 200%; background-position: -105px 0px;"></div>
                <h3>Ministranci i Lektorzy</h3>
                <div class="modal fade" id="lso">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Ministranci i Lektorzy</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <?php echo $MinistranciLektorzy; ?>
                                </div>
                                <div class="modal-footer modal-footer-end">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="wspolnota col-xl-3 col-md-6 col-12" data-bs-toggle="modal" data-bs-target="#biel">
            <div class="do-not-resize" style="background-image:url({{ URL::asset('images/biel1.jpg')}}); background-size: 180%; background-position: -85px 0px;"></div>
                <h3>Bielanki</h3>
                <div class="modal fade" id="biel">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Bielanki</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <?php echo $Bielanki; ?>
                                </div>
                                <div class="modal-footer modal-footer-end">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="wspolnota col-xl-3 col-md-6 col-12" data-bs-toggle="modal" data-bs-target="#schol">
            <div class="do-not-resize" style="background-image:url({{ URL::asset('images/scholka2.jpg')}}); background-size: 140%; background-position: -50px center;"></div>
                <h3>Schola</h3>
                <div class="modal fade" id="schol">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Schola Magnificat</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <?php echo $Schola; ?>
                                </div>
                                <div class="modal-footer modal-footer-end">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="wspolnota col-xl-3 col-md-6 col-12" data-bs-toggle="modal" data-bs-target="#oaza">
            <div class="do-not-resize" style="background-image:url({{ URL::asset('images/oaza.jpg')}}); background-size: 100%; background-position: center;"></div>
                <h3>Oaza</h3>
                <div class="modal fade" id="oaza">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Oaza</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <?php echo $Oaza; ?>
                                </div>
                                <div class="modal-footer modal-footer-end">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row wspolnoty">
            <div class="wspolnota col-xl-4 col-md-6 col-12" data-bs-toggle="modal" data-bs-target="#duch">
                <div class="do-not-resize" style="background-image:url({{ URL::asset('images/duch-sw.jpg')}}); background-size: 108%; background-position: center;"></div>
                <h3 class="highness">Odnowa w Duchu Świętym</h3>
                <div class="modal fade" id="duch">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Odnowa w Duchu Świętym</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <?php echo $OdnowaDuchuSwietym; ?>
                                </div>
                                <div class="modal-footer modal-footer-end">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="wspolnota col-xl-4 col-md-6 col-12" data-bs-toggle="modal" data-bs-target="#rosary">
            <div class="do-not-resize" style="background-image:url({{ URL::asset('images/rozaniec.jpg')}}); background-size: 183%; background-position: 0 0;"></div>
                <h3>Koła Różańcowe</h3>
                <div class="modal fade" id="rosary">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Koła Różańcowe</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <?php echo $KolaRozancowe; ?>
                                </div>
                                <div class="modal-footer modal-footer-end">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="wspolnota col-xl-4 col-md-6 col-12" data-bs-toggle="modal" data-bs-target="#pozost">
            <div class="do-not-resize" style="background-image:url({{ URL::asset('images/parafia.ico')}}); background-size: 100%; background-position: center;"></div>
                <h3>Pozostałe Wspólnoty</h3>
                <div class="modal fade" id="pozost">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Pozostałe wspólnoty</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <?php echo $PozostaleWspolnoty; ?>
                                </div>
                                <div class="modal-footer modal-footer-end">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@stop