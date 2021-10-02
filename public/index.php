<?
session_start();
$SID = session_id();
include __DIR__ . '/../sources/php/autoloader.php'; // Autoloader für geladen
// HTML 
$html["header"] =  new \Html\Head("Webentwickler Karlsruhe", "de");
$html["footer"] =  new \Html\Footer();
//------HEADER
print $html["header"]->render(); ?>

<header class="first-screen">
    <img width="180" height="180" alt="Webentwickler aus Karlsruhe : JP Behrens" src="./img/webentwickler-karlsruhe_jp_behrens.jpg">
    <span class="my-name">JP Behrens</span>
    <span class="my-job">Software- & Webentwickler</span>
    <span class="my-city">Karlsruhe</span>
</header>

<main class="main-screen">
    <nav class="main-nav">
        <span>
            JP Behrens
        </span>
        <ul>
            <li><a href="">Link 1</a></li>
            <li><a href="">Link 2</a></li>
            <li><a href="">Link 3</a></li>
            <li><a href="">Link 4</a></li>
        </ul>
    </nav>
    <section style="min-height: 80vh;">
        <h1>Hello World!</h1>
    </section>
    <section style="min-height: 80vh;">
        <h1>Hello World!</h1>
    </section>
    <footer>
        copyright 2021 by JP Behrens
    </footer>
</main>

<? print $html["footer"]->render(); ?>