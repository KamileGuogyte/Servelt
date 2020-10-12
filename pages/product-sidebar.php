
    <aside class="site-aside">
        <div class="site-aside__block site-aside__block--logo site-aside__block--padding">
            <img src="../img/logo-sidebar.svg" />
        </div>
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