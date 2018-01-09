<?php $t = require __DIR__ . '/../translations/de.php'; ?>
<!DOCTYPE html>
<html lang="de" class="no-js">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-28037043-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-28037043-7');
</script>
<meta charset="utf-8">
<title>Ihre finanzielle Freiheit - BitcoinZ</title>
<meta name="description" content="BitcoinZ ist eine neue Art der Zahlungsberechnung. Wähle deine Münze" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:image" content="path/to/image.jpg">
<!--Favicon-->
<link rel="icon" href="/favicon.ico">
<!--Libs css-->
<link rel="stylesheet" href="/css/stylelibs.css">
<!--Main css-->
<link rel="stylesheet" data-style="styles" href="/css/stylemain.css">
</head>
<body class="dark-load">
<header id="top-nav" class="top-nav page-header">
<div class="container"><a href="/" class="logo smooth-scroll"><img src="/img/logo.png" alt="logo" class="logo-white"><img src="/img/logo.png" alt="logo" class="logo-dark"></a>
<nav class="top-menu">
<ul class="sf-menu">
<!--Menu default-->
<li><a href="https://docs.google.com/document/d/1hFi_sQirkF7hC6dFc4ov7WCgiyePSHHER1FsbNUFZ5E" target="_blank"><?php echo $t['Community Paper']; ?></a>
<li><a href="#benefist" class="smooth-scroll">Leistungen</a></li>
<li><a href="#exchange" class="smooth-scroll">Austausch</a></li>
<li><a href="#wallets" class="smooth-scroll">Brieftaschen</a></li>
<li><a href="#" class="smooth-scroll">Pools</a>
<ul>
<?php
include_once '../pools.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more on the forum bitcointalk</a></li>
</ul></li>
<li><a href="#" class="smooth-scroll">Explorer</a>
<ul>
<?php
include_once '../explorer.php';
?>
</ul></li>
<li><a href="#" class="smooth-scroll">Sozial </a>
<ul>
<?php
include_once '../social.php';
?>
</ul>
<!--<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">ANN</a></li>-->
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Lang</a>
<ul class="sub-menu">
<?php
include_once '../lang.php';
?>
</ul></li>
</nav>
<!-- Start mobile menu-->
<!-- Start toggle menu--><a href="#" class="toggle-mnu"><span></span></a>
<div id="mobile-menu">
<div class="inner-wrap">
<nav>
<ul class="nav_menu"><br>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Language</a>
<ul class="sub-menu"><br>
<?php
include_once '../langmobile.php';
?>
</ul></li>
<li><a href="https://docs.google.com/document/d/1hFi_sQirkF7hC6dFc4ov7WCgiyePSHHER1FsbNUFZ5E"><?php echo $t['Community Paper']; ?></a></li>
<li><a href="#benefist" class="smooth-scroll">Leistungen</a></li>
<li><a href="#exchange" class="smooth-scroll">Austausch</a></li>
<li><a href="#wallets" class="smooth-scroll">Brieftaschen</a></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Pools</a>
<ul class="sub-menu"><br>
<?php
include_once '../poolsmobile.php';
?>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">And more...</a></li>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Explorer </a>
<ul class="sub-menu">
<?php
include_once '../explorermobile.php';
?>
</ul></li>
<li class="menu-item-has-children current-menu-item"><a href="#" class="smooth-scroll">Sozial </a>
<ul class="sub-menu">
<?php
include_once '../socialmobile.php';
?>
</ul></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">Forum bitcointalk</a>
</ul>
</nav>
</div>
</div>
<!-- End mobile menu-->
</div>
</header>

<!-- Start slider section-->
<div id="top" class="slider">
<div id="preloader">
<div id="status"></div>
</div>
<div class="full-slider intro">
<!-- Start slide-->
<div data-image="/img/bgn22.jpg" class="slide bg-mask background-image full-vh">
<div class="container-slide vertical-align center head-desc">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="heading-title-big"><br>Es ist deine Münze <br><span>BitcoinZ: Das wahre Bitcoin 2.0</span></div>
<div class="description-slide">Willkommen bei der Dezentralisierung. BitcoinZ.</div>
<div class="buttons-section">&nbsp;&nbsp;<a href="/media/Community_Paper_Final.pdf" class="btn dark-btn large-btn">Gemeinschafts Papier </a><a href="https://connect.bitcoinz.global/" class="btn dark-btn large-btn" target="_blank">Mehr lesen</a><a href="https://bitcoinz.global/donations/" class="btn dark-btn large-btn" target="_blank">Donate</a><br><br><center><script type="text/javascript" src="/api.js"></script><div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div></center>
</div>
</div>
</div>
</div>
</div>
<div id="particles-js" class="canvas-background"></div>
</div>
</div>
<!--Contol slider-->
<div id="dots-control-full-slider" class="dots-control-carousel"></div>
<!-- Strat Control carousel-->
<div id="control-full-slider" class="prev-next-block-rotate opacity-control">
<div class="wrap-prev">
<div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
</div>
<div class="wrap-next">
<div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
</div>
</div><a href="#about" class="smooth-scroll btn-down"><i aria-hidden="true" class="fa fa-angle-down"></i></a>
</div>
<!-- End slider section-->
<!-- Section about-->
<section id="about" class="about-us">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>Über die  <span>Münze</span></h2>
<!--<div class="small-desd">We create <span>awesome stuff</span></div>
<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-target"></i>
<div class="bg-icon"><i class="pe-7s-target"></i></div>
</div>
<div class="content">
<h3>WICHTIGE <span>DETAILS</span></h3>
<p>- Sichere deine Brieftasche an mehreren Orten<br>- Lagere große Mengen an Münzen in kalten Brieftaschen (Cold Wallets) mit anonymen Adressen<br>- Gib niemals irgendjemanden deine privaten Schlüssel. Es ist lediglich der private Schlüssel nötig um Kontrolle über deine Münzen zu bekommen. Solltest du dennoch jemandem unabsichtlich deinen privaten Schlüssel gegeben haben, dann überweise dein Guthaben so schnell wie möglich an eine neue, sichere Adresse.</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>BitcoinZ ist  <span>Bitcoin 2.0:</span></h3>
<p>- Bitcoin-Technologie<br>- Anonyme Transaktionen (zk-SNARKs Privatsphäre) - Bei Bitcoin sind alle Transaktionen öffentlich einsehbar.<br>- dezentrales GPU-Mining (ASIC-Miner sind verboten, Hardforks zur Vermeidung von ASIC-Minern sind erlaubt)<br>- Dezentrale Entwicklung / Alle Mitwirkenden sind Freiwillige<br>- Große Blöcke -> Blöcke ähneln BCC / BCH</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="item-about">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>Aktive  <span>Gemeinschaft</span></h3>
<p>Unsere Gemeinschaft ist aktiv und wir entwickeln uns immer weiter. <br>Folge uns in sozialen Netzwerken, im Forum, sowie Slack</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!--Section services-->
<section id="benefist" class="services-section background-image bg-dark-section">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title small-heading center">
<h2>Leistungen <span>BitcoinZ</span></h2>
<!--<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
</div>
</div>
</div>
<div class="row">
<div class="tabs services-tabs">
<ul class="services-carousel">
<li class="animated-service anim-shadow"><a href="#tabs-1"><i class="pe-7s-graph"></i>
<h4>Max Versorgung</h4>
<p>21 000 000 000 BTCZ.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-2"><i class="pe-7s-drop"></i>
<h4>Algorithmus</h4>
<p>Equihash.</p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-3"><i class="pe-7s-timer"></i>
<h4>Schnelle Transaktionen</h4>
<p>BTCZ = 2MB alle 2,5 Minuten. </p></a></li>
<li class="animated-service anim-shadow"><a href="#tabs-4"><i class="pe-7s-map"></i>
<h4>Umlaufversorgung</h4>
<p>12500 Münzen alle 2,5 Minuten.</p></a></li>
</ul>
<div id="dots-control-tabs" class="dots-control-carousel"></div>
<!--Start tabs-->
<div id="tabs-1">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Unser Ziel ist es, die beste freie Software auf dem Markt <span>zu portieren um BitcoinZ nutzen zu können.</span></h2>
<p>Unveränderliche Parameter:</p>
</div>
<p>- maximale Versorgung </p>
<p>- Inflation </p>
<p>- nur POW algo - wir können vom aktuellen Equihash Algorithmus zu einem anderen Proof-of-Work (POW) Algorithmus wechseln, um ASIC Miner zu verhindern</p>
<p>- neue Funktionen können die Nutzung / Skalierbarkeit verbessern, aber wir werden nie die Geschichte ändern (ETH / ETC-Fall) </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Algorithmus: Equihash (immer GPU-Mining - wir fördern die Dezentralisierung beim Abbau) </li>
<li>Max Versorgung: 21B Münzen</li>
<li>Stromversorgung: 12500 Münzen alle 2,5 Minuten</li>
<li>Die aktuelle Blockgröße ist ähnlich zu BCC / BCH (BTCZ = 2 MB alle 2,5 Minuten ~ BCC / BCH = 8 MB alle 10 Minuten)</li>
</ul>
</div>
</div>
<div id="tabs-2">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>BitcoinZ-pod/BitcoinZ Klienten beinhalten  <span>die sicherste Software.</span></h2>
<p>Sensible Programme wie die Wallets (Brieftaschen) sollten ihren Quellcode und einen Sha256 bei der Veröffentlichung zur Verfügung stellen (=Open Source Code), damit andere Teams diese Brieftaschen überprüfen können. Es ist nicht üblich und ratsam Wallets zu wählen, welche noch nicht von unabhängigen Softwareentwicklern überprüft wurden. </p>
</div>
<p>Software ohne Bestätigungen sollten mit der roten Flagge versehen und nicht genutzt werden. </p>
</div>
<!--<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Decentralized mining</li>
<li>Easy to mine</li>
<li>Decentalized Exchanges</li>
<li>Pure community coin</li>
<li>Always immutable - no way to change history!</li>
<li>Hardforks to improve tech & scalability are allowed but changing history is banned</li>
<li>BitcoinZ is focused on organic growth</li>
<li>and more...	</li>
</ul>
</div> -->
</div>
<!--<div id="tabs-3">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Never fall in love with an idea. They’re whores. If the the <span>job, there’s always another.</span></h2>
<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
</div>
<p>Tab 1 Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et . Mauris </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Rich media banners</li>
<li>Audio production</li>
<li>Photography</li>
<li>Design</li>
<li>Content creation</li>
<li>Content audit</li>
<li>Project management</li>
<li>Technical requirements</li>
<li>Testing</li>
<li>and more...	</li>
</ul>
</div>
</div>
<div id="tabs-4">
<div class="col-md-6">
<div class="head-service small-head text-left">
<h2>Never fall in love with an idea. If the the <span>job, there’s always another.</span></h2>
</div>
<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
<p>Tab 1 Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et . Mauris </p>
</div>
<div class="col-md-5 col-md-push-1">
<ul class="list">
<li>Design</li>
<li>Content creation</li>
<li>Content audit</li>
<li>Project management</li>
<li>Technical requirements</li>
<li>Rich media banners</li>
<li>Audio production</li>
<li>Photography</li>
<li>Testing</li>
<li>and more...</li>
</ul>
</div>
</div>
</div>!-->
<div class="col-md-12">
<div class="link-full"><a href="https://bitcointalk.org/index.php?topic=2166510.0">Forum anzeigen<i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
</div>
</div>
</div>
</section>
<!--Section how we work-->
<section class="section-how-we-work bg-white-section background-image">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>WARUM  BitcoinZ ?</h2>
<div class="small-desd">WIR SIND EIN KOMPLETT DEZENTRALISIERTES NETZWERK</div>
<p>Hier sind einige Vorteile</p>
</div>
</div>
</div>
<div class="row">
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-look"></i></div>
</div>
<h3>ANONYMITÄT</h3>
<p>Alle Transaktionen sind komplett anonym.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-light"></i></div>
</div>
<h3>UNTERSTÜTZUNG FÜR VERSCHIEDENE PLATTFORMEN</h3>
<p>Unsere Wallet (Brieftasche) ist mit Linux, Windows, iOS und Android kompatibel. Wir arbeiten auch ständig daran, unsere Wallets zu verbessern.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
</div>
<h3>GEMEINSCHAFT</h3>
<p>Wir hören auf unsere Community, nur so kann es gelingen.</p>
</div>
<!-- Item-->
<div class="col-md-3 col-sm-6 col-xs-12 item-icon">
<div class="icon-container">
<div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
</div>
<h3>STETIGER PREIS WACHSTUM</h3>
<p>BitcoinZ konzentriert sich auf organisches Wachstum.</p>
</div>
<!-- Edn items-->
</div>
</div>
</section>
<!--Section work progress-->
<section id="exchange" class="section-work-progress background-image bg-dark-section">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="heading-title small-heading text-left">
<h2>Austausch</h2>
<p>Kaufe oder verkaufe deine BitcoinZ</p>
</div>
</div>
<?php
include_once '../exchange.php';
?>
</section>
<!--Section our some work-->
<section id="wallets" class="section-portfolio bg-white-section background-image">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="heading-title center">
<h2>Herunterladen <span>Wallets</span></h2>
<p>Linux, Windows und mobile Wallets</p>
</div>
<div class="controls-portfolio center">
<?php
include_once '../wallets.php';
?>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
</div>
</div>
</section>
</br>
</br>
</br>
</br>
<!--Section why chose us-->
<?php
include_once '../roadmap.php';
?>
<section class="section-choose-us">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="heading-title center">
<h2>WARUM <span>BitcoinZ WÄHLEN?</span></h2>
<div class="small-desd">HIER SIND EINIGE  <span> GRÜNDE</span></div>
<p>WARNUNG. Sei vorsichtig und behalte deine Zugangsschlüssel an einem gut gesichteren Ort!</p>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="content">
<h3>DEZENTRALISIERTES MINING</h3>
<p>Als Miner solltest du nicht einfach den größten Pool wählen.<br>
Einfach zu minen.<br>
Equihash Algorythmus.<br>
Dezentralisierte Austauschbörsen.</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-light"></i>
<div class="bg-icon"><i class="pe-7s-light"></i></div>
</div>
<div class="content">
<h3>Kein  <span>Premining</span></h3>
<p>Eine reine Münze. Kein Premine</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-graph1"></i>
<div class="bg-icon"><i class="pe-7s-graph1"></i></div>
</div>
<div class="content">
<h3>BitcoinZ ist  <span>Bitcoin 2.0:</span></h3>
<p>- 21 Milliarden Münzen-  Jeder auf dieser Welt sollte zumindest einen BTCZ besitzen</p>
</div>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-like"></i>
<div class="bg-icon"><i class="pe-7s-like"></i></div>
</div>
<div class="content">
<h3>AKTIVE  <span>GEMEINSCHAFT</span></h3>
<p>Unsere Gemeinschaft entwickelt sich und wächst jeden Tag.</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-help2"></i>
<div class="bg-icon"><i class="pe-7s-help2"></i></div>
</div>
<div class="content">
<h3>ANONYME  <span>TRANSAKTIONEN</span></h3>
<p>Alle Transaktionen bleiben anonym. Du musst dir also wegen der Anonymität keine Sorgen machen.</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-phone"></i>
<div class="bg-icon"><i class="pe-7s-phone"></i></div>
</div>
<div class="content">
<h3>ANDROID UND IOS  <span>BRIEFTASCHE</span></h3>
<p>Nutze BitcoinZ auf deinem Smartphone</p>
</div>
</div>
</div>
</div>
<div class="row">
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-display1"></i>
<div class="bg-icon"><i class="pe-7s-display1"></i></div>
</div>
<div class="content">
<h3>NATÜRLICHES  <span>WACHSEN</span></h3>
<p>Deine Münze wächst und entwickelt sich auf natürlichem Weg</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-link"></i>
<div class="bg-icon"><i class="pe-7s-link"></i></div>
</div>
<div class="content">
<h3>DEZENTRALISIERTE <span>ENTWICKLUNG</span></h3>
<p>Alle Börsen sind erlaubt. Dezentralisierte sind die besten. Wir planen den dezentralisierten XCAT Austausch zu implementieren</p>
</div>
</div>
</div>
<!--Start item-->
<div class="col-md-4">
<div class="item-about item-choose">
<div class="icon"><i class="pe-7s-paint"></i>
<div class="bg-icon"><i class="pe-7s-paint"></i></div>
</div>
<div class="content">
<h3>NUR POW UND <span>KEIN POS</span></h3>
<p>Die Münze wurde ausschliesslich zum POW minen entworfen, und wird niemals auf POS wechseln</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!--Section our clients-->
<div class="our-clients">
<div class="container">
<div class="row">
<div id="clients-carousel" class="clients-carousel">
<div class="col-md-2">
<div class="item-carousel"><a href="https://github.com/bitcoinz-pod/bitcoinz" target="_blank"><img src="/img/partners-1.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank"><img src="/img/partner2.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="http://slack.bitcoinz.site/" target="_blank"><img src="/img/partner3.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank"><img src="/img/partner4.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://discordapp.com/invite/u3dkbFs" target="_blank"><img src="/img/disc.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://www.facebook.com/BitcoinZCommunity/" target="_blank"><img src="/img/face.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://t.me/joinchat/CDzlaRGMvBm4P2Z76sNclQ" target="_blank"><img src="/img/tel.png" alt="logo"></a></div>
</div>
<div class="col-md-2">
<div class="item-carousel"><a href="https://twitter.com/BTCZCommunity" target="_blank"><img src="/img/twit.png" alt="logo"></a></div>
</div>
</div>
</div>
</div>
<!-- Strat Control carousel-->
<div id="control-clients" class="prev-next-block-rotate">
<div class="wrap-prev">
<div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
</div>
<div class="wrap-next">
<div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
</div>
</div>
</div>

<!-- Old browsers support--><!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

<footer>
<div class="down-footer">
<div class="container">
<div class="row">
<div class="col-md-12">
<p>© 2017 BitcoinZ Gemeinschaft. Alle Rechte reserviert</p>
<ul class="footer-menu">
<li><a href="#benefist" class="smooth-scroll">Leistungen</a></li>
<li><a href="#exchange" class="smooth-scroll">Austausch</a></li>
<li><a href="#wallets" class="smooth-scroll">Brieftaschen</a></li>
<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">Forum bitcointalk</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>
<!--button to top-->
<div class="top icon-down toTopFromBottom"><a href="#" class="smooth-scroll"><i class="pe-7s-angle-up"></i></a></div>
<!--end button to top-->
<!--Libs-->
<script src="/js/libs.js.pagespeed.ce.Av_NAtkm4V.js"></script>
<script src="/libs/style-customizer/style-customizer.js.pagespeed.ce.IgWtkWf8IC.js"></script>
<!--Use scripts-->
<script src="/js/common.js.pagespeed.ce.hW1NRi6zyn.js"></script>
</body>
</html>
