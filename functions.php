<?php
error_reporting(0);

// 名言を取得
$meigenUrl = "https://meigen.doodlenote.net/api/json.php";
$meigenJson =  getApi($meigenUrl);
$meigen = $meigenJson[0]->meigen;
$auther = $meigenJson[0]->auther;

// 写真を取得
$flickrApiUrl = 'https://api.flickr.com/services/rest?';
$flickrQuery = [
    'method' => 'flickr.photos.search',
    'api_key' => '', // <-- ここにあなたのapikeyを設定してください。
    'text' => 'cuteanimal',
    'format' => 'json',
    'nojsoncallback' => '?',
    'extras' => 'url_z'
];
$flickrApiUrl .= http_build_query($flickrQuery);
$flickrJson = getApi($flickrApiUrl);
$rand = mt_rand(1, 99);
$url_z = $flickrJson->photos->photo[$rand]->url_z;

// エスケープ処理
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// apiから取得する関数
function getApi($url)
{
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        [
            CURLOPT_URL            => $url, // URLの指定
            CURLOPT_HEADER => false, // ヘッダーの有無
            CURLOPT_RETURNTRANSFER => true, // データを文字列に変換するか
            CURLOPT_SSL_VERIFYPEER => false, // SSL証明書の検証をするか
            CURLOPT_TIMEOUT => 30, //タイムアウトする時間（秒）
            CURLOPT_FAILONERROR => true // エラーコードを出すか
        ]
    );
    $html = curl_exec($ch);
    if (curl_error($ch)) {
        $error_msg = curl_error($ch);
    }
    curl_close($ch);

    if (isset($error_msg)) {
        // ここにエラー処理を書く
    }
    curl_close($ch);

    $json = json_decode($html);
    return $json;
}
