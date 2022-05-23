<?php
require_once("./functions.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>可愛い動物の写真と名言を表示するアプリ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <section class="hero">
        <div class="hero-body">
            <h1 class="is-size-3">
                可愛い動物の写真と名言を表示するアプリ
            </h1>
            <p class="subtitle">
                <a href="https://bubudoufu.com/webapp/">bubudoufu.com</a>
            </p>
        </div>
    </section>

    <div class="columns is-vcentered" style="background-color: #FFFFCC; margin: 0;">
        <div class="column is-4">
            <div class="box" style="width: 300px; margin: 10px auto 0;">
                <p>
                    写真は<a href="https://www.flickr.com/services/api/">Flickr API</a>から名言は<a href="https://meigen.doodlenote.net/about_api.html">名言教えるよ！</a>から取得しています。
                </p>
            </div>
        </div>
        <div class="column is-4">
            <main style="width: 350px; margin: 0 auto;">
                <div class="card">
                    <div class="card-image">
                        <figure class="is-128x128" style="text-align: center;">
                            <img class="" src="<?php echo h($url_z); ?>" alt="動物の写真">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <p class="has-text-centered"> <?php echo h($meigen); ?></p>
                            <p class="has-text-centered	has-text-weight-semibold"> <?php echo h($auther); ?></p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="column is-4">

        </div>
    </div>

</body>

</html>