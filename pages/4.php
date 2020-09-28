<?php require_once('header.php'); ?>


<main class="site-main site-main--aside">
    <aside class="site-aside">
        <div class="site-aside__blocks">
            <div class="site-aside__block">
                <select>
                    <option>Vilnius</option>
                    <option>Vilnius</option>
                </select>
            </div>
            <?php for($ii=0;$ii<10;$ii++) { ?>
                <div class="site-aside__block">
                    <h3 class="title">Rikiuoti pagal atstumą</h3>
                    
                    <?php for($i=0;$i<3;$i++) { ?>
                    <div class="radio">
                        <input name="c<?php echo $i; ?>" type="radio" id="c<?php echo $i; ?>" class="" value="1" required />
                        <label for="c<?php echo $i; ?>">Arčiausiai nuo manęs</label>
                    </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </aside>
    <div class="page-content">        
        <section class="breadcrumbs">
            <a href="#" class="breadcrumbs__change">Pakeisti</a>
            <span class="breadcrumbs__location">Grožio salonai | Vilnius</span>
            <button class="breadcrumbs__cart"></button>
        </section>
        <section class="specialists">
        <div class="specialists__header">
            <h1 class="title">Registruokis</h1>
            <div class="specialists__nav">
                <button class="specialists__nav-button specialists__nav-button--prev"></button>
                <div class="specialists__nav-current">2021 Sausio 10</div>
                <button class="specialists__nav-button specialists__nav-button--next"></button>
            </div>
        </div>
        <div class="specialists__search input-wrapper input-wrapper--briefcase">
            <input type="text" name="search" placeholder="Įveskite kelis paslaugos pavadinimo simbolius paieškai" />
        </div>
        <div class="specialists__list">
            <?php for($y=0;$y<5;$y++) { ?>
                <div class="specialists__block">
                    <div class="specialists__block-person">
                        <div class="specialists__block-photo" style="background-image: url('http://placehold.it/180x180')">
                            <?php if($y!==1) { ?><div class="specialists__block-like-status"></div><?php } ?>
                        </div>                    
                        <div class="specialists__block-info">
                            <h2>Ramunė Varnaliauskienė</h2>
                            <span>Dermatologė</span>
                            <p>Klinika “Lazerinė praktika”<br/>
                            M. Valančiaus g. 23<br/></p>
                            <div class="specialists__block-distance"><b>15 min</b> (5,6 km) Kaunas</div>
                            <button class="button small orange specialists__block-more">Plačiau</button>
            <button class="button small gray transparent specialists__block-like <?php if($y===1) { ?>specialists__block-like--active<?php } ?>">Mano</button>
                        </div>
                    </div>
                    <table class="specialists__block-calendar">
                        <thead>
                            <tr>
                                <th class="active">Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
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
                    <h3 class="specialists__block-recommend">Specialistas Jums rekomenduoja užsiregistruoti šiai procedūrai</h3>
                    <div class="specialists__block-action">                        
                        <div class="specialists__block-action-info">
                            <h4>Greitasis odos atjauninimas lazeriu</h4>    
                            <div class="specialists__block-action-duration">1 val</div>
                            <div class="specialists__block-action-price">45€<strike>60€</strike></div>
                        </div>
                        <button class="button orange specialists__block-action-order">Užsakyti</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php require_once('footer.php'); ?>