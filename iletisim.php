<?php
include 'includes/header.php';
?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/iletisim.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>İLETİŞİM</h1>
                    <hr class="small">
                    <span class="subheading">BİZE ULAŞIN</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Ad-Soyad</label>
                        <input type="text" class="form-control" placeholder="Ad-Soyad" id="name" required data-validation-required-message="Lütfen adınızı ve soyadınızı girin.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>E-posta Adresi</label>
                        <input type="email" class="form-control" placeholder="E-posta Adresi" id="email" required data-validation-required-message="Lütfen e-posta adresinizi girin.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>İleti</label>
                        <textarea rows="5" class="form-control" placeholder="İleti" id="message" required data-validation-required-message="Lütfen iletinizi yazın."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">Gönder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
<?php
include 'includes/footer.php';
?>