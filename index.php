<?php
//header bölümünü index.php ye ekledik
include 'includes/header.php';
?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="makale.php">
                        <h2 class="post-title">
                            makale başlığı-1
                        </h2>
                        <h3 class="post-subtitle">
                            makale başlığı-1 alt başlık
                        </h3>
                    </a>
                    <p class="post-meta">gönderen <a href="#">gönderenin adı</a> tarih: haziran 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="makale.php">
                        <h2 class="post-title">
                            makale başlığı-2
                        </h2>
                    </a>
                    <p class="post-meta">gönderen <a href="#">gönderenin adı</a> tarih: haziran 18, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="makale.php">
                        <h2 class="post-title">
                            makale başlığı-3
                        </h2>
                        <h3 class="post-subtitle">
                            makale alt başlığı-3
                        </h3>
                    </a>
                    <p class="post-meta">gönderen <a href="#">gönderenin adı</a> tarih: haziran 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="makale.php">
                        <h2 class="post-title">
                            makale başlığı-4
                        </h2>
                        <h3 class="post-subtitle">
                            makale alt başlığı-4
                        </h3>
                    </a>
                    <p class="post-meta">gönderen <a href="#">gönderenin adı</a> tarih: July 8, 2014</p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">GEÇMİŞ GÖNDERİLER &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
<?php
//footer bölümünü de index.php ye ekledik
include 'includes/footer.php';
?>

