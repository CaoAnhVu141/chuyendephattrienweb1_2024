<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/1354.less', 'css/bai1.css');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Grid</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="css/bai1.css">
</head>
<body>

    <div class="product-grid">
        <div class="product-item">
            <img src="src/image2.jpg" alt="Ninja Silhouette">
            <h3 class="product-title">Ninja Silhouette</h3>
            <p class="price">$35.00</p>
            <button class="add-to-cart">ADD TO CART</button>
        </div>

        <div class="product-item">
            <img src="src/image3.jpg" alt="Patient Ninja">
            <h3 class="product-title">Patient Ninja</h3>
            <p class="price">$35.00</p>
            <button class="add-to-cart">ADD TO CART</button>
        </div>

        <div class="product-item">
            <img src="src/image2.jpg" alt="Premium Quality">
            <h3 class="product-title">Premium Quality</h3>
            <p class="price">$20.00</p>
            <button class="add-to-cart">ADD TO CART</button>
        </div>
        <div class="product-item">
            <img src="src/image4.jpg" alt="Premium Quality Poster">
            <h3 class="product-title">Premium Quality</h3>
            <p class="price"><span class="old-price">$15.00</span> $12.00</p>
            <button class="add-to-cart">ADD TO CART</button>
        </div>
    </div>
    <div class="pagination">
        <button class="page-btn active">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">3</button>
        <button class="page-btn next">→</button>
    </div>
</body>
</html>

