<?php




$args = [
  "metaDescription" => "Sprawdzanie samochodów przed zakupem, rzeczoznastwo, pomoc drogowa.",

  "ogTitle" => "",
  "ogUrl" => get_home_url(),
  "ogSite_name" => "",
  "title" => "Sprawdzanie samochodów przed zakupem"
];
get_header(null, $args);
?>
<!-- ANIMACJA Z GARAZEM NA STARCIE -->
<div class="main">
  <!-- SEKCJA 1 PASJA -->
  <div class="container-fluid pasja_wrapper text-center ">
    <img src="<?php echo get_template_directory_uri() . '/assets/pasja_back.webp'; ?>" alt="pasja obraz w tle" class="pasja_back_img" />
    <div class="container pasja_text_wrapper">
      <div class="row">
        <div class="col-sm-12  text-center ">
          <div class="wrapper_cien">
            <h1>Pasja i&nbsp;doświadczenie</h1>
            <h3>To właśnie one wyróżniają nas na tle konkurencji</h3>
          </div>
          <button class="button align-self-center" style="margin-top:6rem;"> <a href="tel:0048500711715"> Poznaj nas</a></button>
        </div>
      </div>
    </div>

  </div>






  <!-- SEKCJA 2 O NAS -->

  <div class="container-fluid onas_wrapper">
    <img src="<?php echo get_template_directory_uri() . '/assets/road.webp'; ?>" alt="onas obraz w tle" class="onas_back_img" />
    <div class="container onas1 ">
      <div class="row p-0 m-0 justify-content-center ">
        <div class="col-12 p-3 ">
          <h2>Dlaczego akurat my?</h2>

          <p>Bo mamy doświadczenie, ponieważ to nasza pasja. Świadczymy usługi, takie, jakich życzylibyśmy sobie sami płacąc za nie. Wieloletnie doświadczenie w branży i ciągła nauka, sprawia, że jesteśmy z motoryzacją na bieżąco i nic nie jest nam straszne. Nie jesteśmy ludźmi, którzy osiedli na laurach lata temu, ciągle się dokształcamy i śledzimy trendy oraz technologie. Mamy wiedze i chętnie się nią podzielimy, aby Państwu pomóc.</p>
        </div>
        <button class="button"><a href="<?php echo get_home_url() ?>/galeria">Przekonaj się sam</a></button>
      </div>
    </div>
    <!-- <div class="container onas2 mt-5">
      <div class="row p-0 m-0">
        <div class="col-sm-12 col-md-6 d-flex justify-content-center pt-3 pb-3 dyplom "><img src="<?php echo get_template_directory_uri() . '/assets/dyplom.webp'; ?>" alt="dyplom" class="img-fluid" /></div>
        <div class="col-sm-12 col-md-6">
          <h2>Lorem Ipsum</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>


        </div>

      </div>
    </div> -->


  </div>

  <!-- SEKCJA 3 NASZE USLUGI-->
  <div class="container-fluid uslugi_wrapper">
    <div class="container">
      <h2>Oferowane uslugi</h2>
      <div class="row">
        <div class="col-12">
          <div class="accordion" id="accordionExample">
            <div class="card" data-aos="fade-right">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="collapse_button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Sprawdzenie auta przed zakupem <span class="icon_after icon_after_active"><i class="fas fa-level-down-alt"></i></span>
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Na ogledziny wybieramy sie samodzielnie lub z interesantem. W pierwszej kolejnosci sprawdzamy karoserie. Kontrolujemy grubość lakieru, stan blach, ewentualną wypadkowość. Kolejne oceniamy wnętrze oraz sprawność wyposażenia. Następnie kontroli podlega strona mechaniczna samochodu. Praca silnika, układu wydechowego i zawieszenia, szukamy ewentualnych wycieków, luzów w układzie kierowniczym i zawieszeniu. Po wykonanej usłudze przesyłamy raport i ogólną ocene, doradzamy i odpowidamy na pytania interesanta.
                  <button class="button button_uslugi "><a href="<?php echo get_home_url() ?>/rzeczoznastwo"> Rzeczoznastwo</a></button>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-left">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="collapse_button collapsed " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Pomoc Drogowa <span style='color:yellow ;font-weight:600'>24/7</span> <span class="icon_after icon_after_inactive"><i class="fas fa-level-down-alt"></i></span>
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Oferujemy Państwu szybką i profesjonalną usługę pomocy drogowej na terenie Trójmiasta (Gdańsk, Sopot, Gdynia) i okolic, a także Autostradzie A1 oraz trasie S7.<br>
                  Zakres naszych usług : <br>
                  - holowanie pojazdu Trójmiasto (Gdańsk, Sopot, Gdynia i okolice)<br>
                  - transport pojazdu na terenie całej Polski<br>
                  - uruchamianie pojazdu z rozładowanym akumulatorem<br>
                  - diagnostyka komputerowa<br>
                  - dowóz paliwa
                  <button class="button button_uslugi "><a href="<?php echo get_home_url() ?>/pomoc"> Pomoc drogowa</a></button>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-right">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="collapse_button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Mechanika Pojazdowa <span class="icon_after icon_after_inactive"><i class="fas fa-level-down-alt"></i></span>
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Obsługujemy samochody osobowe i dostawcze wszystkich marek. Uczciwie i w dobrej cenie zdiagnozujemy i naprawimy Twój samochód. Oferujemy usługi szeroko pojętej mechaniki pojazdowej, wulkanizacji oraz obsługę klimatyzacji.
                  Zapraszamy do naszego serwisu w Sopocie przy ulicy Kasztanowej 4.
                </div>
              </div>
            </div>
            <!-- <div class="card" data-aos="fade-left">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="collapse_button" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Wynajem Samochodów <span class="icon_after icon_after_inactive"><i class="fas fa-level-down-alt"></i></span>
                  </button>
                </h5>
              </div>

              <div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                </div>
              </div>
            </div> -->
            <div class="card" data-aos="fade-right">
              <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                  <button class="collapse_button" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Doradztwo Motoryzacyjne <span class="icon_after icon_after_inactive"><i class="fas fa-level-down-alt"></i></span>
                  </button>
                </h5>
              </div>

              <div id="collapseFive" class="collapse " aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                  Każdy z nas prędzej czy później stanie przed wyborem nowego samochodu. Czy to pierwszego czy kolejnego, czy nowego czy może używanego. Jednak nie każdy posiada wiedze na temat awaryjności i eksploatacji tych aut. Prowadzimy kompleksowe usługi doradztwa motoryzacyjnego. Służymy wiedzą i wieloletnim doświadczeniem, z samochodami obcujemy na co dzień, poznaliśmy setki modeli i silników. Telefonicznie doradzamy, udzielamy informacji i przybliżamy zarówno dobre jak i złe cechy auta, którym Państwo są zainteresowani. Pomagamy również wybrać auto, jeżeli interesant nie wie czego szukać, na podstawie potrzeb udzielimy rad i pomożemy w wyborze egzemplarza skrojonego na miarę potrzeb. Pomagamy również w kwestiach serwisowych jak i eksploatacyjnych. Można do nas dzwonić w dosłownie każdej sprawie około-motoryzacyjnej.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- SEKCJA 4 POMOC DROGOWA -->

  <div class="container-fluid laweta_wrapper">
    <img src="<?php echo get_template_directory_uri() . '/assets/help.webp'; ?>" alt="laweta zdjecie w tle" class="laweta_back_img" />
    <h2 class="">Motoryzacja to nasza pasja</h2>

    <div class="container">

      <div class="col-sm-12 nasza_pasja" data-aos="fade-down">


        <div class="col-12 row m-0 nasza_pasja_img_wrapper">
          <div class="col-sm-12 col-md-6">
            <img src="<?php echo get_template_directory_uri() . '/assets/sprawd-9.jpg'; ?>" />
          </div>
          <div class="col-sm-12 col-md-6">
            <img src="<?php echo get_template_directory_uri() . '/assets/sprawd-7.jpg'; ?>" />
          </div>
        </div>

      </div>
      <h5>Samochody to dla nas coś więcej niż tylko praca. Przez lata braliśmy udział w większości motoryzacjnych imprez ogranizowanych na pomorzu i możemy się pochwalić kilkoma niezłymi wynikami. To właśnie tam zrodziło się nasze zamiłowanie do motoryzacji, które z czasem przekształciło się w chęć pomocy innym. </h5>
    </div>
  </div>


</div>
<?php get_footer(); ?>