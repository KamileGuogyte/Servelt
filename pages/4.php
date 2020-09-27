<?php require_once('header.php'); ?>


<main class="site-main site-main--aside">
    <aside class="site-aside">
        <select>
            <option>Vilnius</option>
            <option>Vilnius</option>
        </select>
        <div class="site-aside__blocks">
            <?php for($ii=0;$ii<3;$ii++) { ?>
                <div class="site-aside__block">
                    <h3>Rikiuoti pagal atstumą</h3>
                    
                    <?php for($i=0;$i<3;$i++) { ?>
                    <div class="checkbox">
                        <input name="c<?php echo $i; ?>" type="checkbox" id="c<?php echo $i; ?>" class="" value="1" required />
                        <label for="c<?php echo $i; ?>">Arčiausiai nuo manęs</label>
                    </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </aside>
    <section class="page-content">
        <div class="page-content__header">
            <h1 class="title">Registruokis</h1>
            <div class="page-content__nav">
                <button class="page-content__nav-button page-content__nav-button--prev"></button>
                <div class="page-content__nav-current">2021 Sausio 10</div>
                <button class="page-content__nav-button page-content__nav-button--next"></button>
            </div>
        </div>
        <div class="input-wrapper">
            <input type="text" name="search" placeholder="Įveskite kelis paslaugos pavadinimo simbolius paieškai" />
        </div>
        <div class="specialists">
            <div class="specialists__block">
                <div class="specialists__block-person">
                    <div class="specialists__block-photo" style="background-image: url('http://placehold.it/180x180')">
                        <button class="specialists__block-like-status"></button>
                    </div>                    
                    <div class="specialists__block-info">
                        <h2>Ramunė Varnaliauskienė</h2>
                        <h5>Dermatologė</h5>
                        Klinika “Lazerinė praktika”<br/>
                        M. Valančiaus g. 23<br/>
                        <div class="specialists__block-address">15 min (5,6 km) Kaunas</div>
                        <button class="button small orange specialists__block-more">Plačiau</button>
                        <button class="button small gray specialists__block-like">Mano</button>
                    </div>
                    <table class="specialists__block-calendar">
                        <thead>
                            <tr>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                                <th>Pr<small>Sau10</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>09:15</td>
                                <td>09:15</td>
                                <td>09:15</td>
                                <td>09:15</td>
                                <td>09:15</td>
                                <td>09:15</td>
                                <td>09:15</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>Specialistas Jums rekomenduoja užsiregistruoti šiai procedūrai</h3>
                    <div class="specialists__block-action">                        
                        <div class="specialists__block-action-info">
                            <h4>Greitasis odos atjauninimas lazeriu            
                            <div class="specialists__block-action-duration">1 val</div>
                            <div class="specialists__block-action-price">45€<strike>60€</strike></div>
                        </div>
                        <button class="button orange specialists__block-action-order">Užsakyti</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>