<?php




$args = [
    "metaDescription" => "AUTA",

    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => "AUTA"
];
get_header(null, $args);
?>


<div class="main">
    <div class="rzeczo_wrapper">
        <img src="<?php echo get_template_directory_uri() . '/assets/rzeczoznastwo_obraz.png'; ?>" alt="rzeczoznastwo obraz w tle" class="rzeczo_back_img" />
        <div class="container">
            <div class="row">
                <div class="col-sm-12  rzeczo-slogan text-center">
                    <h1><b> Profesjonalnie</b></h1> <br>
                    <h2>sprawdzimy dla ciebie każdy samochód</h2>
                    <button class="button align-self-center mt-5"> <a href="tel:0048500711715">Zadzwoń</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="rzeczo_intro_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 rzeczo_intro_tekst">
                    <h2>Dlaczego warto skorzystać z tej usługi?</h2>
                    <p>Rynek samochodów używanych to jedna wielka niewiadoma. Atrakcyjna cena często ukrywa mniej lub bardziej poważne usterki. Auto marzeń, może niedługo po zakupie przepoczwarzyć się w senny koszmar. Remont silnika czy też zawieszenia, takie usterki mogą pochłonąć tysiące złotych. Dlatego wychodzimy naprzeciw, oferując Państwu usługę sprawdzenia samochodu przed zakupem. Dzięki naszej pomocy klient kupując auto będzie świadomy stanu technicznego pojazdu, co pozwoli wybrać rozsądny egzemplarz lub adekwatnie zbić cenę. Oferujemy pewność i naszą wiedze za ułamek ceny pojazdu.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="rzeczo_uslugi_wrapper">
        <img src="<?php echo get_template_directory_uri() . '/assets/rzeczo_uslugi.png'; ?>" alt="rzeczoznastwo uslugi obraz w tle" class="uslugi_back_img" />

        <div class="container">
            <div class="row">
                <div class="col-sm-12 rzeczo-uslugi-tekst">
                    <h2>Wybierając nas otrzymujesz:</h2>
                </div>
                <div class="col-sm-12 col-md-12 rzeczo-uslugi-lista">
                    <ul>
                        <li>
                            <div class="row rzeczo-uslugi-usluga d-flex align-items-center" data-aos="mojfadein" data-aos-duration="600">
                                <div class="col-4 col-sm-3 col-md-2 text-center "><i class="fas fa-car-crash fa-fw"></i></div>
                                <div class="col-8 col-sm-9 col-md-10 rzeczo-uslugi-uslugaTekst">Informacje na temat stanu karoserii</div>
                            </div>
                        </li>
                        <li>
                            <div class="row rzeczo-uslugi-usluga d-flex align-items-center" data-aos="mojfadein" data-aos-duration="600">
                                <div class="col-4 col-sm-3 col-md-2  text-center"><i class="fas fa-cogs fa-fw"></i></div>
                                <div class="col-8 col-sm-9 col-md-10 rzeczo-uslugi-uslugaTekst">Raport na temat stanu technicznego samochodu</div>
                            </div>
                        </li>
                        <li>
                            <div class="row rzeczo-uslugi-usluga d-flex align-items-center" data-aos="mojfadein" data-aos-duration="600">
                                <div class="col-4 col-sm-3 col-md-2 text-center"><i class="fas fa-laptop-medical fa-fw"></i></div>
                                <div class="col-8 col-sm-9 col-md-10 rzeczo-uslugi-uslugaTekst">Diagnostyke komputerową</div>
                            </div>
                        </li>
                        <li>
                            <div class="row rzeczo-uslugi-usluga d-flex align-items-center" data-aos="mojfadein" data-aos-duration="600">
                                <div class="col-4 col-sm-3 col-md-2 text-center"><i class="fas fa-tachometer-alt fa-fw"></i></div>
                                <div class="col-8 col-sm-9 col-md-10 rzeczo-uslugi-uslugaTekst">Weryfikację prawdziwości przebiegu</div>
                            </div>
                        </li>
                        <li>
                            <div class="row rzeczo-uslugi-usluga d-flex align-items-center" data-aos="mojfadein" data-aos-duration="600">
                                <div class="col-4 col-sm-3 col-md-2 text-center"><i class="far fa-file fa-fw"></i></div>
                                <div class="col-8 col-sm-9 col-md-10 rzeczo-uslugi-uslugaTekst">Dokumentację zdjęciową</div>
                            </div>
                        </li>
                        <li>
                            <div class="row rzeczo-uslugi-usluga d-flex align-items-center" data-aos="mojfadein" data-aos-duration="600">
                                <div class="col-4 col-sm-3 col-md-2 text-center"><i class="fas fa-digital-tachograph fa-fw"></i></div>
                                <div class="col-8 col-sm-9 col-md-10 rzeczo-uslugi-uslugaTekst">Ocenę wnętrza oraz sprawności wyposażenia</div>
                            </div>
                        </li>
                        <li>
                            <div class="row rzeczo-uslugi-usluga" data-aos="mojfadein" data-aos-duration="600">
                                <div class="col-4 col-sm-3 col-md-2 text-center"><i class="fas fa-check fa-fw"></i></div>
                                <div class="col-8 col-sm-9 col-md-10 rzeczo-uslugi-uslugaTekst">Oględziny podwozia</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid rzeczo_cennik_wrapper">
    <img src="<?php echo get_template_directory_uri() . '/assets/rzeczo_rzeczo_cennik.png'; ?>" alt="cennik rzeczoznastwa obraz w tle" class="cennik_rzeczo_back_img" />
    <!-- CENNIK KOLUMNOWY -->
    <div class="container column_price">
        <div class="row">
            <div class="col-sm-12  d-flex justify-content-center" data-aos="mojfadein">
                <div class="price_col_wrapper price_col_wrapper_2 ">
                    <div class="upper_col_wrapper"><span class="upper_col upper_col_2"></span></div>
                    <div class="price_wrapper">
                        <span class="price ">
                            <p> 399 zł</p>
                        </span>
                    </div>
                    <h3 class="text-center">Sprawdzenie auta przed zakupem</h3>
                    <h4 class="text-center"></h4>
                    <div class="row list_wrapper_row">
                        <div class="col-md-12  col-lg-4 list-wrapper">

                            <p><i class="bi bi-check2"></i>Pomiary grubości lakieru</p>
                            <p><i class="bi bi-check2"></i>Pomiary szczelin</p>
                            <p><i class="bi bi-check2"></i>Sprawdzenie szyb pojazdu</p>
                            <p><i class="bi bi-check2"></i>Sprawdzenie oświetlenia </p>
                            <p><i class="bi bi-check2"></i>Sprawdzenie opon i felg</p>
                            <p><i class="bi bi-check2"></i>Ocena organoleptyczna karoserii</p>

                        </div>
                        <div class="col-md-12  col-lg-4 list-wrapper">

                            <p><i class="bi bi-check2"></i>Weryfikacja prawdziwości przebiegu</p>
                            <p><i class="bi bi-check2"></i>Szacunkowe naprawy i ich koszt po zakupie </p>
                            <p><i class="bi bi-check2"></i>Identyfikacja pojazdu (sprawdzenie dokumentów, zgodności VIN)</p>
                            <p><i class="bi bi-check2"></i>Ocena wnętrza pojazdu</p>
                            <p><i class="bi bi-check2"></i>Sprawdzenie wyposażenia pojazdu</p>
                            <p><i class="bi bi-check2"></i>Oględziny komory silnika</p>
                            <p><i class="bi bi-check2"></i>Jazda próbna </p>
                            <p><i class="bi bi-check2"></i>Rekomendacja zakupu</p>

                        </div>
                        <div class="col-md-12  col-lg-4 list-wrapper">

                            <p><i class="bi bi-check2"></i>Weryfikacja układu napędowego</p>
                            <p><i class="bi bi-check2"></i>Weryfikacja układu hamulcowego</p>
                            <p><i class="bi bi-check2"></i>Weryfikacja układu wydechowego</p>
                            <p><i class="bi bi-check2"></i>Sprawdzenie stanu zawieszenia</p>
                            <p><i class="bi bi-check2"></i>Weryfikacja elementów konstrukcyjnych</p>
                            <p><i class="bi bi-check2"></i>Diagnostyka komputerowa (odczyt błędów, omówienie wyniku diagnostyki)</p>
                            <p><i class="bi bi-check2"></i>Rozmowa telefoniczna z Ekspertem </p>
                            <p><i class="bi bi-check2"></i>Dokumentacja zdjęciowa (minimum 120 zdjęć) </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DODATKOWE USŁUGI -->

    <div class="container dodatkowe_uslugi">
        <h2 class='text-center'>Dodatkowe usługi</h2>
        <div class="row text-center">
            <div class="col-md-12 col-lg-4 dodatkowe_uslugi_col_1" data-aos="fade-right" data-aos-duration="1000">
                <h3 class="">KONTROLA PODWOZIA</h3><i class="fas fa-warehouse"></i>

                <p class="dodatkowe_uslugi_cena_1">50 zl</p>
            </div>
            <div class="col-md-12 col-lg-4 dodatkowe_uslugi_col_2" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="">WIZYTA NA STACJI KONTROLI POJAZDÓW</h3><i class="fas fa-walking"></i>

                <p class="dodatkowe_uslugi_cena_2">70-120 zl</p>
            </div>
            <div class="col-md-12 col-lg-4 dodatkowe_uslugi_col_1" data-aos="fade-left" data-aos-duration="1000">
                <h3 class="">ANALIZA OGŁOSZENIA</h3><i class="fab fa-searchengin"></i>

                <p class="dodatkowe_uslugi_cena_1">30 zl</p>
            </div>
            <div class="col-md-12 col-lg-4 dodatkowe_uslugi_col_2" data-aos="fade-right" data-aos-duration="1000">
                <h3 class="">DOJAZD POZA GRANICE TRÓJMIASTA</h3><i class="fas fa-city"></i>

                <p class="dodatkowe_uslugi_cena_2">1zł/km</p>
            </div>
            <div class="col-md-12 col-lg-4 dodatkowe_uslugi_col_1" data-aos="fade-up" data-aos-duration="1000">
                <h3 class="">WYJAZDY Z KLIENTEM PO&nbsp;SAMOCHÓD</h3><i class="fas fa-car"></i>

                <p class="dodatkowe_uslugi_cena_1">do ustalenia</p>
            </div>
            <div class="col-md-12 col-lg-4 dodatkowe_uslugi_col_2" data-aos="fade-left" data-aos-duration="1000">
                <h3 class="">RAPORT HISTORII POJAZDU</h3><i class="bi bi-card-checklist"></i>

                <p class="dodatkowe_uslugi_cena_2">89 zl</p>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid jakrobimy_wrapper">
    <img src="<?php echo get_template_directory_uri() . '/assets/question_back.jpg'; ?>" alt="jak robimy obraz w tle" class="jakrobimy_back_img" />
    <h2 class="text-center pb-5">Jak to działa?</h2>
    <div class="row questions d-flex justify-content-around p-0 m-0">

        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2  text-center questions_col" data-aos="rotate"><i class="bi bi-search"></i>
            <span class="s3_number">1</span>
            <h4>Znajdź ogłoszenie</h4>
            <!-- <p class="questions_p">Lorem Ipsum is simply dummy text of text of</p> -->
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2  text-center questions_col" data-aos="rotate"><i class="bi bi-basket"></i>
            <span class="s3_number">2</span>
            <h4>Wybierz zakres usługi</h4>
            <!-- <p class="questions_p">Lorem Ipsum is simply dummy text of text of </p> -->
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2  text-center questions_col" data-aos="rotate"><i class="bi bi-telephone-forward"></i>
            <span class="s3_number">3</span>
            <h4>Skontaktuj się <br> z nami</h4>
            <!-- <p class="questions_p">Lorem Ipsum is simply dummy text of text of</p> -->
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2  text-center questions_col" data-aos="rotate"><i class="bi bi-calendar-check"></i>
            <span class="s3_number">4</span>
            <h4>Umawiamy spotkanie ze sprzedawcą</h4>
            <!-- <p class="questions_p">Lorem Ipsum is simply dummy text of text of</p> -->
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2  text-center questions_col" data-aos="rotate"><i class="bi bi-eye"></i>
            <span class="s3_number">5</span>
            <h4>Robimy oględziny samochodu</h4>
            <!-- <p class="questions_p">Lorem Ipsum is simply dummy text of text of</p> -->
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2  text-center questions_col" data-aos="rotate"><i class="bi bi-flag"></i>
            <span class="s3_number">6</span>
            <h4>Otrzymujesz szczegółowy raport na temat samochodu</h4>
            <!-- <p class="questions_p">Lorem Ipsum is simply dummy text of text of</p> -->
        </div>

    </div>

</div>
</div>










<?php get_footer(); ?>