<?php require_once('header.php'); ?>


<main class="site-main site-main--aside">    
    <?php require_once('product-sidebar.php'); ?>
    <div class="page-content">        
        <section class="breadcrumbs">
            <a href="#" class="breadcrumbs__change">Pakeisti</a>
            <span class="breadcrumbs__location">GROŽIO SALONAI</span>
            <button class="breadcrumbs__cart"><span>2</span></button>
        </section>
        
        <div class="page-content__wrapper">            
            <section class="venue">
                <h1 class="title">Vasco by I.C.O.N.</h1>
                <div class="venue__slider">
                    <img src="http://placehold.it/830x300"/>
                    <img src="http://placehold.it/830x300"/>
                </div>
                <div class="venue__info">
                    <a href="#">Kalvarijų g. 125, Vilnius, 08221</a>
                    <a href="#">+370 684 98756</a>
                </div>
                <div class="venue__description">
                    <p>Visą gyvenimą domėjausi stiliumi ir mada, norėjau kurti ir savo kūryba džiuginti žmones. Mano močiutė ir mama buvo prijaučiančios šiai profesijai, todėl nuo pat mažų dienų atsirado potraukis kurti ir stilizuoti žmogaus išvaizda dirbant su plaukais. Būdamas abiturientas nusprendžiau studijuoti Vilniaus kolegijoje – šukuosenų dizaino specialybės, ir įgyti šukuosenų dizaino, bei, apskritai, bendro įvaizdžio stilisto aukštąjį išsilavinimą.Sėkmingai baigęs Vilniaus kolegiją toliau tobulinau žinias tiek Lietuvoje, tiek kaimyninėse šalyse. Dirbdamas supratau, kad forma, tekstūra ir faktūra turi didelę įtaką žmonių stiliuje ir kirpimai, dažymai yra kūryba bei menas, todėl į savo darbą žiūriu atsakingai ir jį atlieku labai kruopščiai. Mano darbas dėl šių priežasčių gali užtrukti ilgiau nei įprastai, bet man kokybė yra svarbesnė už kiekybę.</p>
                    <button class="venue__description-more">Skaityti daugiau</button>
                </div>
                <div class="venue__footer">
                    <a class="venue__work-hours" href="#">Šiuo metu dirba : 08:00 - 20:00</a>
                    <a class="venue__deals" href="#">Yra paskutinės minutės pasiūlymai</a>
                </div>
            </section>

            <section class="product">
                <div class="product__header">
                    <h1 class="title">Registruokis</h1>
                    <div class="product__nav">
                        <input type="text" name="date" class="product__nav-input" />
                        <button class="product__nav-button product__nav-button--prev"></button>
                        <div class="product__nav-current">2021 Sausio 10</div>
                        <button class="product__nav-button product__nav-button--next"></button>
                    </div>
                </div>
                <div class="product__search input-wrapper input-wrapper--briefcase">
                    <input type="text" name="search" id="search" placeholder="Įveskite kelis paslaugos pavadinimo simbolius paieškai" />
                </div>
                <div class="product__list">
                    <?php for($y=0;$y<5;$y++) { ?>
                        <div class="product__block">
                            <div class="product__block-top">
                                <div class="product__block-person">
                                    <div class="product__block-photo" style="background-image: url('http://placehold.it/180x180')">
                                        <?php if($y===1) { ?><div class="product__block-like-status"></div><?php } ?>
                                    </div>                    
                                    <div class="product__block-info">
                                        <h2>Ramunė Varnaliauskienė</h2>
                                        <span>Dermatologė</span>
                                        <p>Klinika “Lazerinė praktika”<br/>
                                        <a href="#">M. Valančiaus g. 23</a><br/></p>
                                        <div class="product__block-distance"><b>15 min</b> (5,6 km) Kaunas</div>
                                        
                                        <div class="product__block-info-actions">
                                            <button class="button small orange product__block-more">Plačiau</button>
                                            <button class="button small gray transparent product__block-like <?php if($y!==1) { ?>product__block-like--active<?php } ?>">Mano</button>
                                        </div>
                                    </div>
                                </div>
                                <table class="calendar">
                                    <thead>
                                        <tr>
                                            <th class="active">Pr<small>Sau10</small></th>
                                            <th>An<small>Sau10</small></th>
                                            <th>Tr<small>Sau10</small></th>
                                            <th>Kt<small>Sau10</small></th>
                                            <th>Pn<small>Sau10</small></th>
                                            <th>Še<small>Sau10</small></th>
                                            <th>Se<small>Sau10</small></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i=0;$i<4;$i++) { ?>
                                        <tr>
                                            <td><p>09:15</p></td>
                                            <td><p></p></td>
                                            <td><p class="active">09:15</p></td>
                                            <td><p>09:15</p></td>
                                            <td><p>09:15</p></td>
                                            <td><p>09:15</p></td>
                                            <td><p>09:15</p></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php if($y === 0) { ?>
                            <h3 class="product__block-recommend">Specialistas Jums rekomenduoja užsiregistruoti šiai procedūrai</h3>
                            <div class="product__block-action">                        
                                <div class="product__block-action-info">
                                    <h4>Greitasis odos atjauninimas lazeriu</h4>    
                                    <div class="product__block-action-duration">1 val</div>
                                    <div class="product__block-action-price">45€<strike>60€</strike></div>
                                </div>
                                <button class="button cyan transparent small product__block-action-order">Užsakyti</button>
                            </div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                    <div class="pagination">
                        <div class="pagination__list">
                            <a href="#" class="pagination__button pagination__button--first"></a>
                            <a href="#" class="pagination__button pagination__button--prev"></a>

                            <a href="#" class="pagination__button">1</a>
                            <a href="#" class="pagination__button">2</a>
                            <a href="#" class="pagination__button">3</a>
                            <a href="#" class="pagination__button">4</a>
                            <a href="#" class="pagination__button">...</a>
                            <a href="#" class="pagination__button">10</a>
                            <a href="#" class="pagination__button">12</a>

                            <a href="#" class="pagination__button pagination__button--next"></a>
                            <a href="#" class="pagination__button pagination__button--last"></a>
                        </div>
                        <div class="pagination__info">
                            Rodomos eilutės nuo <b>1 - 22</b>  iš  <b>9678</b>  |  Viso puslapių  <b>999</b>  
                        </div>
                    </div>
                </div>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>        
    </div>
</main>
<div id="test"></div>
<?php require_once('footer.php'); ?>