@extends('layouts.master')
 
@section('title', 'Kancelaria Parafialna')
 
@section('content')                   
    <!-- ################################# KANCELARIA ################################# -->

    <h2 class="semi-main-header my-5">Kancelaria Parafialna</h2>                     

    <section class="full-width-cont">
        <div class="do-not-resize" style="background-image:url({{ URL::asset('images/kalendarz.jpg')}})">
    <!-- source: https://v.wpimg.pl/MjhfMC5wYgsJBDtwGgxvHkpcbypcVWFIHUR3YRpPdVwQUnR7Gh4gDUYCIiFHEj0YBwE_IlgOYxoESQQuVBAoGUcoKDRGWHhTXl58bAdHfF9YUH92BEZ_U1peEnMbByMNShs --></div>
        <div class="pt-2">
            <h3 class="font-weight-bold msze">Godziny Otwarcia</h3>
            <h4 class="kancelaria-h">Poniedziałek - Piątek:</h4> 
            <ul class="kancelaria-h">
                <li class="kancelaria-h">8<sup>00</sup> &minus; 9<sup>00</sup> </li> 
                <li class="kancelaria-h">16<sup>00</sup> &minus; 17<sup>30</sup> </li>  
                <li class="kancelaria-h">
                    (w czasie trwania kolędy 15<sup>00</sup> &minus; 16<sup>00</sup>)
                </li>
            </ul>
            <h4 class="kancelaria-h">Sobota:</h4>
            <ul class="kancelaria-h">
            <li class="kancelaria-h">8<sup>00</sup> &minus; 9<sup>00</sup> </li> 
            </ul>
            <p class="kancelaria-h">W Niedziele i Uroczystości kancelaria jest nieczynna</p>
        </div>
    </section>

    <section class="full-width-cont" style="margin-top: 80px">
        <div class="pt-2 other-22">
            <h3 class="font-weight-bold msze">Dyżury Księży w Kancelarii</h3>
            <ul class="dyzury">
                <li class="dyzury"><span class="day">Poniedziałek: </span>ks. Marek</li> 
                <li class="dyzury"><span class="day">Wtorek: </span>ks. Proboszcz</li> 
                <li class="dyzury"><span class="day">Środa: </span>ks. Przemysław</li> 
                <li class="dyzury"><span class="day">Czwartek: </span>ks. Marek</li> 
                <li class="dyzury"><span class="day">Piątek: </span>ks. Przemysław</li> 
                <li class="dyzury"><span class="day">Sobota: </span>ks. Proboszcz</li> 
            </ul>
        </div>
        <div class="do-not-resize other-2" style="background-image:url({{ URL::asset('images/kancelaria.jpg')}})"></div>
    </section>

    <section class="container info-short-main" id="info">
        <h2 class="semi-main-header">Informacje</h2>
        <div class="row">
            <div class="sacrament col-12 col-lg-4">
                <div class="graybg" style="background-image:url({{ URL::asset('images/chrzest.jpg')}})"></div>
                    <h4 class="sacrament">Sakrament Chrztu Świętego</h4>
                        <button type="button" class="read-more-btn-2" data-bs-toggle="modal" data-bs-target="#Chrzest">
                            Czytaj więcej
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="Chrzest">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Sakrament Chrztu Świętego - Informacje</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <h3 class="font-weight-bold">CHRZEST ŚWIĘTY &#8211; najważniejsze informacje</h3>
                                    <p class="font-weight-bold">CZEGO POTRZEBUJEMY?</p>
                                    <p class="font-weight-bold">1. Aktu urodzenia dziecka pobranego z Urzędu Stanu Cywilnego</p>
                                    <p class="font-weight-bold">2. Danych rodziców dziecka:</p>
                                    <ul>
                                        <li>imię i nazwisko</li>
                                        <li>data urodzenia</li>
                                        <li>miejsce urodzenia</li>
                                        <li>adres zamieszkania</li>
                                        <li>data ślubu (<em>jeżeli został zawarty</em>)</li>
                                        <li>parafia ślubu (<em>jeżeli został zawarty</em>)</li>
                                    </ul>
                                    <p class="font-weight-bold">3. Danych rodziców chrzestnych:</p>
                                    <ul>
                                        <li>imię i nazwisko</li>
                                        <li>data urodzenia</li>
                                        <li>miejsce urodzenia</li>
                                        <li>adres zamieszkania</li>
                                    </ul>
                                    <p class="font-weight-bold">4. Świadectwa rodziców chrzestnych</p>
                                    <ul>
                                        <li>Prosimy, aby te świadectwa dostarczyć jak najszybciej, ale najpóźniej w dniu chrztu.</li>
                                        <li>Świadectwo chrzestni mogą otrzymać w parafii, na terenie której faktycznie mieszkają.</li>
                                    </ul>
                                    <p class="font-weight-bold">Z tymi dokumentami zapraszamy do naszej kancelarii parafialnej w celu umówienia terminu chrztu.</p>
                                    <p class="font-weight-bold">Tradycyjnie chrzty w naszej parafii odbywają się w <span style="text-decoration: underline;">drugą i czwartą niedzielę każdego miesiąca podczas mszy św. o godzinie 13:00.</span></p>
                                    <p class="font-weight-bold">W wyjątkowych sytuacjach, lub na specjalną prośbę możemy zorganizować chrzest w innym terminie.</p>
                                    <div class="modal-footer modal-footer-end">
                                    <!-- Z prawej strony -->
                                    <a href="{{ URL::asset('pdfs/chrzest.pdf')}}" download class="btn btn-secondary">Pobierz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sacrament col-12 col-lg-4">
                <div class="graybg" style="background-image:url({{ URL::asset('images/slub.jpg')}})"></div>
                    <h4 class="sacrament">Sakrament Małżeństwa</h4>
                        <button type="button" class="read-more-btn-2" data-bs-toggle="modal" data-bs-target="#Slub">
                            Czytaj więcej
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="Slub">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Sakrament Małżeństwa - Informacje</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body pt-0 mt-0 px-3">
                                    <h3 class="text-center my-4">Informacje dla narzeczonych</h3>
                                        <ol>
                                            <li>Formalności przedślubne należy załatwiać w parafii narzeczonej bądź narzeczonego <span style="text-decoration: underline;">najwcześniej</span> 6 miesięcy przed ślubem. Termin ślubu można ustalić dużo wcześniej.</li>
                                            <li>O przynależności do konkretnej parafii decyduje wyłącznie fakt fizycznego zamieszkania (a nie zameldowania).</li>
                                            <li>Ślub może być zawierany w dowolnym kościele (wpierw należy uzyskać tam zgodę); jeżeli nie w tym, w którym załatwia się formalności przedślubne, do kościoła ślubu zostanie wystawiona licencja. W wyjątkowych sytuacjach, kiedy ślub zawiera się w piątek należy uzyskać pisemną zgodę Kurii.</li>
                                            <li>Zawierający sakramentalny związek małżeński w Kościele Katolickim są zobowiązani:
                                            <ul>
                                                <li>do uzyskania dla niego skutków cywilnych (tzw. ślub konkordatowy) przedstawiając odpowiedni dokument z USC*;</li>
                                                <li>albo do wcześniejszego zawarcia kontraktu cywilnego przedstawiając akt ślubu z USC.</li>
                                            </ul>
                                            </li>
                                            <li>Obydwoje narzeczeni przedstawiają:
                                            <ul>
                                                <li>aktualne świadectwo chrztu Świętego, tj. nie starsze niż 3 miesiące z adnotacją: &#8222;do ślubu kościelnego&#8221;.</li>
                                                <li>świadectwo bierzmowania (jeżli na świadectwie chrztu jest odnotowane, to wystarcza).</li>
                                                <li>dokument poświadczający ukończenie kursu przedmałżeńskiego lub co najmniej aktualne uczestniczenie w kursie przedmałżeńskim.</li>
                                                <li>dokument poświadczający odbyte spotkania w poradni rodzinnej</li>
                                                <li>dokument z USC (patrz punkt 4)</li>
                                                <li>dowody osobiste (do wglądu)</li>
                                            </ul>
                                            </li>
                                            <li>Na podstawie tych dokumentów zostanie spisany protokół przedślubny oraz zapowiedzi</li>
                                            <li>Po spisaniu protokołu przedślubnego należy w najbliższym czasie przystąpić do spowiedzi. Przy konfesjonale na początku spowiedzi należy powiedzieć, ze jest to spowiedź przedślubna</li>
                                            <li>Po wygłoszeniu zapowiedzi należy zaświadczenie o tym fakcie dostarczyć do naszej kancelarii.</li>
                                            <li>W tygodniu przed ślubem narzeczeni w kancelarii parafialnej spisują akt ślubu (należy znać dane świadków tj. imiona, nazwiska, wiek, adres). Świadkiem może być osoba pełnoletnia i mająca zdolności podejmowania czynności prawnych.</li>
                                            <li>Na dzień lub dwa przed ślubem należy przystąpić do spowiedzi</li>
                                            <li>W dniu ślubu:
                                                <ul>
                                                    <li>świadkowie dostarczają do zakrystii obrączki i kartki od spowiedzi (15 minut przed ślubem)</li>
                                                    <li>po ceremonii zarówno młodzi jak i świadkowie złożą podpisy w księgach</li>
                                                </ul>
                                            </li>
                                            <li>W przypadku tzw. ślubu konkordatowego (patrz punkt 4) ksiądz przekaże nowożeńcom &#8222;Zaświadczenie o zawarciu małżeństwa&#8221;. W ciągu pięciu dni od zawarcia małżeństwa zostanie o tym powiadomiony Urząd Stanu Cywilnego w Jabłonnie. Tam też należy odebrać Akt ślubu (wypis z ksiąg cywilnych) do załatwiania jakichkolwiek spraw cywilnych.</li>
                                            <li>Natomiast w celu załatwienia jakichkolwiek spraw kościelnych wypis o zawarciu małżeństwa należy odebrać w kancelarii parafialnej.</li>
                                            <li>Zasadą jest, iż sakrament małżeństwa przyjmuje się w parafii narzeczonego lub narzeczonej. Gdyby jednak zaistniały jakieś warunki wskazujące na potrzebę zawarcia małżeństwa poza własną parafią należy uzyskać licencję na ślub w innym kościele.</li>
                                        </ol>
                                    <div>* &#8222;Zaświadczenie o braku okoliczności wyłączających zawarcie małżeństwa&#8221;</div>
                                <div class="modal-footer modal-footer-end mt-4">
                                    <!-- Z prawej strony  -->
                                    <a href="{{ URL::asset('pdfs/slub.pdf')}}" download class="btn btn-secondary">Pobierz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sacrament col-12 col-lg-4">
                <div class="graybg" style="background-image:url({{ URL::asset('images/trumna.jpg')}}); background-position: -1px 0px;"></div>
                    <h4 class="sacrament">Sprawy Pogrzebowe</h4>
                        <button type="button" class="read-more-btn-2" data-bs-toggle="modal" data-bs-target="#Pogrzeb">
                            Czytaj więcej
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="Pogrzeb">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 font-weight-bold" id="staticBackdropLabel">Sprawy Pogrzebowe - Informacje</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="modal-footer modal-footer-end">
                                    <!-- Z prawej strony -->
                                    <a href="{{ URL::asset('pdfs/chrzest.pdf')}}" download class="btn btn-secondary">Pobierz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="centered-full-width" class="full-width-cont p-0 mb-5" style="margin-top: 80px">
        <div class="do-not-resize" style="background-image:url({{ URL::asset('images/telefon.jpg')}})"></div>
        <div class="pt-2">
            <h3 class="font-weight-bold msze">Kontakt</h3>
            <ul class="kontakt" id="contact">
                <li class="kontakt"><span class="day">Numer telefonu: </span>(22) 782-42-96</li> 
                <li class="kontakt"><span class="day">Numer telefonu księdza dyżurnego: </span>(+48) 573-382-800</li> 
                <li class="kontakt"><span class="day">Konto Parafii: </span>BS 96 8013 1016 2002 0545 5314 0001</li> 
                <li class="kontakt"><span class="day">Adres: </span>ul. Modlińska 105, 05-110 Jabłonna</li> 
            </ul>
        </div>
    </section>
@stop