<?php




$args = [
    "metaDescription" => "",
    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => "Sprawdzanie samochodów - cennik"
];

get_header(null, $args);
?>

<div class="container-fluid main_cennik">

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








<?php get_footer(); ?>