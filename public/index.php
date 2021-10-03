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
        <div class="company-name">
            JP Behrens
        </div>
        <div id="toggle-nav">Toggle</div>
        <ul class="top-menu">
            <li><a href="" class="active">Home</a></li>
            <li><a href="">Über mich</a></li>
            <li><a href="">Webseiten</a></li>
            <li><a href="">Analysen</a></li>
            <li><a href="">Beratung</a></li>
            <li><a href="" class="contact">Kontakt</a></li>
        </ul>
    </nav>


    <section>
        <div class="content-box">
            <div class="image">
                <img class="img-fit" src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1770&q=80" width="947" height="480" alt="…">
            </div>
            <div class="text">
                <h1>Professionelle Weblösungen zum fairen Preis!</h1>
                <h2>Für mehr Sichtbarkeit & Erfolg im Internet!</h2>
                <p> Du bist bei mir genau richtig, wenn...
                    deine Website dich bei deinen Vertriebszielen unterstützen soll
                    deine Website gut im Internet gefunden werden soll
                    deine Website aus Besuchern Kunden machen soll
                    deine Website Spaß machen soll</p>
                    <p>

                    Das alles garantiere ich dir - und das zum fairen Preis!


                    Wenn deine Webseite dich bei deinen Vertriebszielen
                    unterstützen soll und du mehr möchtest als nur eine 0815 Webseite
                    von einem Anbieter, der dir nicht dabei hilft mehr Sichbarkeit zu erreichen.
                    Dann bist du bei mir genau richtig.</>
            </div>
        </div>

        <div class="content-box">
            <div class="image">
                <img class="img-fit" src="https://images.pexels.com/photos/2102416/pexels-photo-2102416.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" width="947" height="480" alt="…">
            </div>
            <div class="text">
            <h2>Über mich</h2>
            <h3 class="comment">Dein Webentwickler aus Karlsruhe</h3>
                <p>Als Ausgebilderter Fachinformatiker für Anwendungsentwicklung und Webentwickler mit über 10 Jahren Praxis erfahrung im Webumfeld weiss ich heute was gut und was weniger gut funtioniert.</p>
                <p>Und auch wenn ich leidenschaftlich gerne Programmiere ist es mir wichtig dir dabei zu helfen dein Projekt nach vorne zu bringen
                    und das so schnell und einfach wie möglich.
                </p>
                <a href="" class="button-one">erfahren mehr über mich...</a>

            </div>
        </div>

    </section>
    <section style="min-height: 80vh;">
        <h1>Hello World!</h1>
    </section>
    <footer>
        copyright 2021 by JP Behrens
    </footer>
</main>

<? print $html["footer"]->render(); ?>