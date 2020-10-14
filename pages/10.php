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

            <section class="product" data-nav-section>
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
                            <div class="product-action product__block-action">                        
                                <div class="product-action__info">
                                    <h4>Greitasis odos atjauninimas lazeriu</h4>    
                                    <div class="product-action__duration">1 val</div>
                                    <div class="product-action__price">45€<strike>60€</strike></div>
                                </div>
                                <button class="button cyan transparent small product-action__order">Užsakyti</button>
                            </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </section>

            <section class="venue-info">
                <h2 class="venue-info__title">Paslaugos</h2>
                <?php for($y=0;$y<3;$y++) { ?>  
                    <h3 class="venue-info__subtitle">Plaukų priežiūra</h3>
                    <div class="venue-info__list"  data-nav-section>
                        <?php for($i=0;$i<10;$i++) { ?>      
                        <div class="product-action product__block-action">                        
                            <div class="product-action__info">
                                <h4>Greitasis odos atjauninimas lazeriu</h4>  
                                <p>Visų pl. dažymas viena spalva, galvos plovimas, modelinis kirpimas, dieninis sušukavimas, dieninis sušukavimas,dieninis sušukavimas,Visų pl. dažymas viena spalva, galvos plovimas, modelinis kirpimas, dieninis sušukavimas, dieninis sušukavimas,dieninis sušukavimas,Visų pl. dažymas viena spalva, galvos plovimas, modelinis kirpimas, dieninis sušukavimas, dieninis sušukavimas,dieninis sušukavimas.</p>  
                                <div class="product-action__duration">1 val</div>
                                <div class="product-action__price">45€<strike>60€</strike></div>
                            </div>
                            <button class="button cyan transparent small product-action__order">Užsakyti</button>
                        </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </section>

            <section class="venue-info venue-info--partners"  data-nav-section>
                <h2 class="venue-info__title">Produktai</h2>
                <h3 class="venue-info__subtitle">Mūsų partneriai</h3>
                <div class="venue-info__partners">
                    <div class="venue-info__partner"><img src="http://placehold.it/160x55" /></div>
                    <div class="venue-info__partner"><img src="http://placehold.it/160x55" /></div>
                    <div class="venue-info__partner"><img src="http://placehold.it/160x55" /></div>
                    <div class="venue-info__partner"><img src="http://placehold.it/160x55" /></div>
                    <div class="venue-info__partner"><img src="http://placehold.it/160x55" /></div>
                    <div class="venue-info__partner"><img src="http://placehold.it/160x55" /></div>
                </div>
            </section>

            <section class="venue-info venue-info--about"  data-nav-section>
                <h2 class="venue-info__title">Apie mus</h2>
                <div class="venue-info__description">„Vasco by I.C.O.N. Grožio Studija“, įkurta 2010 metais, yra subūrusi kūrybingus, profesionalius ir darbščius meistrus. 
Čia dirbantys plaukų stilistai ir kosmetologai puikiai išmano savo darbą, dėl to vis didėja nuolatinių ir naujų klientų ratas.

Grožio salono meistrai nuolat tobulinasi įvairiuose seminaruose ir konkursuose. Jie sutinka kiekvieną klientą maloniai, 
atsakingai, ypatingą dėmesį skirdami atlieka savo darbą, ir individualiai jums pritaiko informatyvią konsultaciją.
Mūsų grožio salonuose yra dažoma tik su ECOTECH dažais, kurie iš 90% natūralių ingredientų. Šie dažai yra aliejinio 
pagrindo be amoniako ir parabenų. EHOTECH COLOR dažai suteikia švelnų poveikį ne tik plaukui, bet ir galvos odai. 

Puikiai uždažo žilus plaukus. I.C.O.N. ECOTECH dažai pagaminti naudojant unikalią technologiją, kuri padeda pakeisti 
plaukų spalvą, nekenkiant nei plaukų struktūrai, nei mus supančiai aplinkai.

Vasco by I.C.O.N. grožio studijoje yra teikiamos įvairiausios plaukų SPA procedūros.
Visi I.C.O.N. produktai atitinka aukščiausius kosmetikos gamybai keliamus reikalavimus.</div>
                <div class="venue-info__map">
                    <h3 class="venue-info__map-title">Mus rasite</h3>
                    <div class="venue-info__map-wrapper">
                        <img src="http://placehold.it/570x230" />
                    </div>
                    <div class="venue-info__map-info">
                        <a href="#">Kalvarijų g. 125, Vilnius, 08221</a>
                        <a href="#">+370 684 98756</a>
                    </div>
                </div>
                <div class="work-hours venue-info__work-hours">
                    <h3 class="work-hours__title">Darbo laikas</h3>
                    <ul>
                        <?php for($i=0;$i<7;$i++){ ?>
                        <li><span>Pirmadienis</span><span <?php if($i===0) { ?> class="work-hours__date--red"<?php } ?>>8:00 - 20:00</span></li>
                        <?php }?>
                    </ul>
                </div>
            </section>
            <?php require_once('footer-menu.php'); ?> 
            <div class="sliding-menu-wrapper">
            <div class="sliding-menu">
                <h4>TURINYS</h4>
                <ul>
                    <li><a href="javascript:void(0);">Registuokis</a></li>
                    <li>
                        <a href="javascript:void(0);">Paslaugos</a>
                        <ul>
                            <?php for($i=0;$i<3;$i++) { ?>   
                                <li><a href="javascript:void(0);">Plaukų priežiūra</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);">Produktai</a></li>
                    <li><a href="javascript:void(0);">Apie mus</a></li>
                </ul>
            </div></div>
        </div>
               
    </div>
</main>
<div id="test"></div>
<?php require_once('footer.php'); ?>