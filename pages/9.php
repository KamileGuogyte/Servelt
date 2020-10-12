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
                                <div class="product__block-company">
                                    <div class="product__block-photo product__block-photo--rectangle" style="background-image: url('http://placehold.it/180x180')">
                                        <?php if($y===1) { ?><div class="product__block-like-status"></div><?php } ?>
                                    </div>                    
                                    <div class="product__block-info">
                                        <h2>Grožio salonas Jos Kaprizai</h2>
                                        <p>Klinika “Lazerinė praktika”<br/>
                                        <a class="product__block-address" href="#">M. Valančiaus g. 23</a></p>
                                        <div class="product__block-distance"><b>15 min</b> (5,6 km) Kaunas</div>
                                        <a href="#" class="product__block-phone">+37060000000</a>
                                        <div class="product__block-info-actions">
                                            <button class="button small orange product__block-order">Užsakyti paslaugas</button>
                                            <button class="button small gray transparent product__block-like <?php if($y!==1) { ?>product__block-like--active<?php } ?>">Mano</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-hours">
                                    <h3 class="work-hours__title">Darbo laikas</h3>
                                    <ul>
                                        <?php for($i=0;$i<7;$i++){ ?>
                                        <li><span>Pirmadienis</span><span <?php if($i===0) { ?> class="work-hours__date--red"<?php } ?>>8:00 - 20:00</span></li>
                                        <?php }?>
                                    </ul>
                                </div>
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