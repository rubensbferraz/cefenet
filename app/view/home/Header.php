<div class="cabeca">
    <div class="logo">
        <img src="<?php echo DIRIMG . "ImgHeader/imgcabecalho.png" ?>" alt="" srcset="">
    </div>
    <div class="portchico rounded float-right d-none d-md-block">
        <img src="<?php echo DIRIMG . "ImgHeader/bustoChico.png" ?>" alt="" srcset="">
    </div>
    <div class="frasechico d-none d-md-block">
        <p class="lead">"Deixe algum sinal de alegria onde passe."</br><span>Chico Xavier</span></p>
    </div>
    <div class="assinatura d-none d-lg-block">
        <img src="<?php echo DIRIMG . "ImgHeader/assinatura.png" ?>" alt="" srcset="">
    </div>
</div>
<div class="menu">
    <?php
    $Menu = new Src\Classes\ClassMenu();
    $Menu->addMenu();
    ?>
</div>
<section>
    <div class="corousel">
        <div id='carouselSite' class='carousel slide' data-ride='carousel'>
            <ol class='carousel-indicators'>
                <li data-target='#carouselSite' data-slide-to='0' class='active'></li>
                <li data-target='#carouselSite' data-slide-to='1'></li>
                <li data-target='#carouselSite' data-slide-to='2'></li>
            </ol>
            <div class='carousel-inner'>
                <div class='carousel-item active'>
                    <img src="<?php echo DIRIMG . "ImgCarousel/atendimentofraterno1.png"; ?>" class='d-block w-100'>
                    <div class='carousel-caption d-none d-md-block text-dark'>
                        <h2>Assistência Espíritual</h2>
                        <p class='lead'>Em nossa Casa, é um local acolhedor. Venha acolher alguém.</p>
                    </div>
                </div>
                <div class='carousel-item'>
                    <img src="<?php echo DIRIMG . "ImgCarousel/estadodegraca.png"; ?>" class=' d-block w-100' alt='...'>
                    <div class='carousel-caption d-none d-md-block text-dark'>
                        <h2>Sua paz, é a paz do mundo.</h2>
                        <p class='lead'>O nosso estado espiritual reflete em todo o nosso derredor.</p>
                    </div>
                </div>
                <div class='carousel-item'>
                    <img src="<?php echo DIRIMG . "ImgCarousel/uniao.png"; ?>" class='d-block w-100' alt='...'>
                    <div class='carousel-caption d-none d-md-block text-dark'>
                        <h2>União de todos</h2>
                        <p class='lead'>Somos elos de uma corrente, nossa Fraternidade é o sustentáculo de nossa união.</p>
                    </div>
                </div>
            </div>
            <a class='carousel-control-prev' href='#carouselSite' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Anterior</span>
            </a>
            <a class='carousel-control-next' href='#carouselSite' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Avançar</span>
            </a>
        </div>
    </div>
</section>