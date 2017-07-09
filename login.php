<?php
include 'includes/header.php';
?>
    <link rel="stylesheet" href="css/style.css">
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">GİRİŞ YAP</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">KAYIT OL</label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Kullanıcı Adı</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Şİfre</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Beni Hatırla</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="GİRİŞ YAP">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Parolamı unuttum?</a>
                </div>
            </div>
            <div class="sign-up-htm">
                <div class="group">
                    <label for="user" class="label">Kullanıcı Adı</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Şİfre</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">ŞİFREYİ TEKRARLA</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">E-MAİL ADRESİ</label>
                    <input id="pass" type="text" class="input">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="KAYIT OL">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">ZATEN ÜYEYİM?</label>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';
?>