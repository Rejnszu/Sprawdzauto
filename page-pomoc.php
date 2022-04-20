<?php




$args = [
    "metaDescription" => "",
    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => "Pomoc drogowa"
];

get_header(null, $args); ?>

<div class="container-fluid main_pomoc p-0 m-0">

    <div class="container-fluid pomoc_sekcja1">
        <img class="pomoc_back_img" alt="pomoc obraz w tle" src="<?php echo get_template_directory_uri() . '/assets/pomoc_back.jpg'; ?>">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pomoc_cien">
                    <h1>POMOC DROGOWA <span style="color:yellow;"> 24/7</span></h1>
                    <h3>Zadzwoń pod nr <a href="tel:0048500711715">+48&nbsp;500&nbsp;711&nbsp;715</a></h3>
                    <p>Oferujemy Państwu pomoc drogową na terenie całej Polski. W ramach pomocy zapewniamy dojazd lawetą do wybranego przez Państwa miejsca, samochód zastępczy z możliwością podstawienia samochodu pod miejsce awarii oraz fachowe doradztwo w usunięciu usterki na miejscu o ile będzie to możliwe.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container pomoc_cena text-center">
        <div class="row">
            <div class="col-sm-12 col-lg-6 d-flex flex-column align-items-center mb-5 " data-aos="fade-down">
                <h2>Opłata początkowa 100zł*</h2>
                <i class="fas fa-plus"></i>
                <p>4 zł/km</p>
                <h5>*Cena obejmuje teren Trójmiasta i okolic do 20km. </h5>
                <h5> Transporty powyżej 30km wyceniane są indywidualnie pod <br> nr tel. <span style="color:yellow;"> 500 711 715</span></h5>
            </div>
            <div class="col-sm-12 col-lg-6 pomocny" data-aos="fade-up"><img class="img-fluid " alt="pomoc" src="<?php echo get_template_directory_uri() . '/assets/drive_pomoc.jpg'; ?>"></div>

        </div>
    </div>
</div>




<?php get_footer(); ?>