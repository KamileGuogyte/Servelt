<?php require_once('header.php'); ?>


<main class="site-main site-main--aside">
    <aside class="site-aside">
        <div class="site-aside__blocks">
            <div class="site-aside__block site-aside__block--city site-aside__block--padding">
                <select>
                    <option>Vilnius</option>
                    <option>Vilnius</option>
                </select>
            </div>

            <div class="site-aside__block">
                <h3 class="title title--padding">Rikiuoti pagal atstumą</h3>
                <div class="radio">
                    <input name="distance" type="radio" id="distance_asc" class="" value="asc" />
                    <label for="distance_asc">Arčiausiai nuo manęs</label>
                </div>
                <div class="radio">
                    <input name="distance" type="radio" id="distance_desc" class="" value="desc" />
                    <label for="distance_desc">Toliausiai nuo manęs</label>
                </div>
            </div>

            <div class="site-aside__block">
                <h3 class="title title--padding">Rikiuoti pagal kainą</h3>
                <div class="radio">
                    <input name="price" type="radio" id="price_asc" class="" value="asc" />
                    <label for="price_asc">Viršuje mažiausia</label>
                </div>
                <div class="radio">
                    <input name="price" type="radio" id="price_desc" class="" value="desc" />
                    <label for="price_desc">Viršuje didžiausia</label>
                </div>
            </div>

            <div class="site-aside__block">
                <h3 class="title title--padding">Paslaugų tipai</h3>
                <?php $cats = array(
                    'Plaukų priežiūra',
                    'Rankų priežiūra',
                    'Pėdų priežiūra',
                    'Veido priežiūra',
                    'Kūno priežiūra'
                );
                foreach($cats as $k => $c) {?>
                    <div class="checkbox-wrapper">
                        <div class="checkbox">
                            <input name="service[]" type="checkbox" id="s<?php echo $k; ?>" class="" value="1" />
                            <label for="s<?php echo $k; ?>"><?php echo $c; ?></label>
                        </div>
                        <div class="checkbox-children">
                            <div class="checkbox">
                                <input name="service[]" type="checkbox" id="s<?php echo $k; ?>1" class="" value="1" />
                                <label for="s<?php echo $k; ?>1">Moterims</label>
                            </div>
                            <div class="checkbox">
                                <input name="service[]" type="checkbox" id="s<?php echo $k; ?>2" class="" value="1" />
                                <label for="s<?php echo $k; ?>2">Vyrams</label>
                            </div>
                            <div class="checkbox">
                                <input name="service[]" type="checkbox" id="s<?php echo $k; ?>3" class="" value="1" />
                                <label for="s<?php echo $k; ?>3">Vaikams</label>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="site-aside__block">
                <h3 class="title title--padding">Turi laiko rezervacijai</h3>
                <div class="checkbox">
                    <input name="reserve[]" type="checkbox" id="r1" class="" value="1" />
                    <label for="r1">Dabar</label>
                </div>
                <div class="checkbox">
                    <input name="reserve[]" type="checkbox" id="r2" class="" value="1" />
                    <label for="r2">Per pietus (12-14 val)</label>
                </div>
                <div class="checkbox">
                    <input name="reserve[]" type="checkbox" id="r3" class="" value="1" />
                    <label for="r3">Vakare (nuo 18 val)</label>
                </div>
            </div>
            
            <div class="site-aside__block site-aside__block--padding">
                <h3 class="title">Aktuali valanda</h3>
                <select name="time">
                    <option value="18">18:00</option>
                    <option value="19">19:00</option>
                    <option value="20">20:00</option>
                </select>
            </div>
            
            <div class="site-aside__block">
                <h3 class="title title--padding">Aktuali savaitės diena</h3>
                <?php $days = array(
                    'Pirmadienis',
                    'Antradienis',
                    'Trečiadienis',
                    'Ketvirtadienis',
                    'Penktadienis',
                    'Šeštadienis',
                    'Sekmadienis'                    
                );
                foreach($days as $k => $d) { ?>
                <div class="checkbox">
                    <input name="days[]" type="checkbox" id="d<?php echo $k; ?>" class="" value="<?php echo $k; ?>" />
                    <label for="d<?php echo $k; ?>"><?php echo $d; ?></label>
                </div>
                <?php } ?>
            </div>            

            <div class="site-aside__block">
                <h3 class="title title--padding">Specialūs psiūlymai</h3>
                <div class="checkbox">
                    <input name="offers[]" type="checkbox" id="o1" class="" value="1" />
                    <label for="o1">Šiuo metu taikomos nuolaidos</label>
                </div>
                <div class="checkbox">
                    <input name="offers[]" type="checkbox" id="o2" class="" value="2" />
                    <label for="o2">Paskutinės minutės pasiūlymai</label>
                </div>
            </div>         

            <div class="site-aside__block">
                <h3 class="title title--padding">Specialistai kalbantys</h3>
                <?php $lang = array(
                    'Lietuviškai',                  
                    'Angliškai',                  
                    'Rusiškai'                  
                );
                foreach($lang as $k => $l) { ?>
                <div class="checkbox">
                    <input name="lang[]" type="checkbox" id="l<?php echo $k; ?>" class="" value="<?php echo $k; ?>" />
                    <label for="l<?php echo $k; ?>"><?php echo $l; ?></label>
                </div>
                <?php } ?>
            </div>

        </div>
    </aside>
    <div class="page-content">        
        <section class="breadcrumbs">
            <a href="#" class="breadcrumbs__change">Pakeisti</a>
            <span class="breadcrumbs__location">GROŽIO SALONAI</span>
            <button class="breadcrumbs__cart"><span>2</span></button>
        </section>
        <section class="specialists">
            <div class="specialists__header">
                <h1 class="title">Registruokis</h1>
                <div class="specialists__nav">
                    <input type="text" name="date" class="specialists__nav-input" />
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
                        <div class="specialists__block-top">
                            <div class="specialists__block-person">
                                <div class="specialists__block-photo" style="background-image: url('http://placehold.it/180x180')">
                                    <?php if($y!==1) { ?><div class="specialists__block-like-status"></div><?php } ?>
                                </div>                    
                                <div class="specialists__block-info">
                                    <h2>Ramunė Varnaliauskienė</h2>
                                    <span>Dermatologė</span>
                                    <p>Klinika “Lazerinė praktika”<br/>
                                    <a href="#">M. Valančiaus g. 23</a><br/></p>
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
                        </div>
                        <h3 class="specialists__block-recommend">Specialistas Jums rekomenduoja užsiregistruoti šiai procedūrai</h3>
                        <div class="specialists__block-action">                        
                            <div class="specialists__block-action-info">
                                <h4>Greitasis odos atjauninimas lazeriu</h4>    
                                <div class="specialists__block-action-duration">1 val</div>
                                <div class="specialists__block-action-price">45€<strike>60€</strike></div>
                            </div>
                            <button class="button cyan transparent specialists__block-action-order">Užsakyti</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <?php require_once('footer-menu.php'); ?>
    </div>
</main>

<?php require_once('footer.php'); ?>