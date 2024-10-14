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
$less->compileFile('less/bai2.less', 'css/bai2.css');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platform Programs</title>
    <link rel="stylesheet" href="css/bai2.css">
</head>
<body>
    <section class="platform-section">
        <div class="box-tittle">
            <p class="section-subtitle">01 Programs</p>
            <h2 class="section-title">The platform</h2>
        </div>
        <div class="platform-grid">
            <div class="box-item">
                <img src="src/icon1.png" alt="Online courses icon">
                <div class="text-content">
                    <h2>Online courses</h2>
                    <p>Lorem ipsum dolor sitans enesin cons ctetur adipisici elite sed do eiusmod te in didun ut labore et sen.</p>
                </div>
            </div>

            <div class="box-item">
                <img src="src/icon2.png" alt="Webinars icon">
                <div class="text-content">
                    <h2>Webinars</h2>
                    <p>Lorem ipsum dolor sitans enesin cons ctetur adipisici elite sed do eiusmod te in didun ut labore et sen.</p>
                </div>
            </div>

            <div class="box-item">
                <img src="src/icon3.png" alt="Trainings icon">
                <div class="text-content">
                    <h2>Trainings</h2>
                    <p>Lorem ipsum dolor sitans enesin cons ctetur adipisici elite sed do eiusmod te in didun ut labore et sen.</p>
                </div>
            </div>

            <div class="box-item">
                <img src="src/icon4.png" alt="Certification icon">
                <div class="text-content">
                    <h2>Certification</h2>
                    <p>Lorem ipsum dolor sitans enesin cons ctetur adipisici elite sed do eiusmod te in didun ut labore et sen.</p>
                </div>
            </div>

            <div class="box-item">
                <img src="src/icon5.png" alt="Quizzes & forums icon">
                <div class="text-content">
                    <h2>Quizzes & forums</h2>
                    <p>Lorem ipsum dolor sitans enesin cons ctetur adipisici elite sed do eiusmod te in didun ut labore et sen.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
