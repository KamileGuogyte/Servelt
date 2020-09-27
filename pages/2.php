<?php require_once('header.php'); ?>

<main class="site-main container">
    <section class="login">
        <h1 class="title">Prisijungti</h1>
        <div class="login__blocks">
            <div class="login__block">
                <h2 class="title">Prisijungti</h2>
                <form class="login__form">
                    <div class="input-wrapper input-wrapper--envelope">
                        <input type="email" name="email" placeholder="El. paštas" />
                    </div>
                    <div class="input-wrapper input-wrapper--eye">
                        <input type="password" name="password" placeholder="Slaptažodis" />
                    </div>
                    <div class="input-wrapper login__forgot">
                        <a href="#" class="">Pamiršai slaptažodį?</a>
                    </div>

                    <button class="button orange login__button--half">Prisijungti</button>
                    <button class="button blue login__button--half login__button--fb">Prisijungti per <div class="login__button-fb"></div></button>
                </form>
            </div>
            <div class="login__block login__block--register">
                <h2 class="title">Registruotis pirmą kartą</h2>
                <form class="login__form">
                    <div class="input-wrapper input-wrapper--user">
                        <input type="text" name="name" placeholder="Vardas Pavardė" />
                    </div>
                    <div class="input-wrapper input-wrapper--envelope">
                        <input type="email" name="email" placeholder="El. paštas" />
                    </div>
                    <div class="input-wrapper input-wrapper--half input-wrapper--phone">
                        <input type="tel" name="phone" placeholder="+370 XXXXXXXX" />
                    </div>
                    <div class="input-wrapper input-wrapper--half input-wrapper--marker">
                        <input type="text" name="city" placeholder="Miestas" />
                    </div>
                    <label class="login__passwords">Slaptaždis, ne mažiau 8 simbolių.</label>
                    <div class="input-wrapper input-wrapper--half input-wrapper--lock">
                        <input type="password" name="password" placeholder="" />
                    </div>
                    <div class="input-wrapper input-wrapper--half input-wrapper--lock">
                        <input type="password" name="password2" placeholder="" />
                    </div>
                    <div class="login__checkboxes">
                        <div class="checkbox">
                            <input name="privacy_policy" type="checkbox" id="privacy_policy" class="" value="1" required />
                            <label for="privacy_policy">Patvirtinu, kad susipažinau su Privatumo politika ir sutinku, kad mano asmens duomenys būtų naudojami joje numatytais duomenų tvarkymo tikslais ir sąlygomis.</label>
                        </div>
                        <div class="checkbox">
                            <input name="newsletter" type="checkbox" id="newsletter" class="" value="1" required />
                            <label for="newsletter">Pažymėkite, jei nenorite gauti el. laiškų apie naujausius pasiūlymus bei naujienas iš Serve Online.</label>
                        </div>
                        <div class="checkbox">
                            <input name="sms" type="checkbox" id="sms" class="" value="1" required />
                            <label for="sms">Pažymėkite, jei sutinkate, kad įstaiga, kurioje registruojatės, siųstų jums el. laiškus bei SMS apie jų paslaugas.</label>
                        </div>
                    </div>
                    <button class="button orange">Registruotis</button>
                </form>
            </div>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>