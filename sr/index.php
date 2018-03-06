<?php $t = require __DIR__ . '/../translations/en.php'; ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
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
      <title>Tvoja financijska sloboda - BitcoinZ</title>
      <meta name="description" content="BitcoinZ is a new type of payment calculation. Choose your coin" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta property="og:image" content="/img/logo.png">
      <!--Favicon-->
      <link rel="icon" href="/favicon.ico">
      <!--Libs css-->
      <link rel="stylesheet" href="/css/stylelibs.css">
      <!--Main css-->
      <link rel="stylesheet" data-style="styles" href="/css/stylemain.css">
   </head>
   <body class="dark-load">
      <header id="top-nav" class="top-nav page-header">
         <div class="container">
            <a href="/" class="logo smooth-scroll">
            <img src="/img/logo.png" alt="logo" class="logo-white">
            <img src="/img/logo.png" alt="logo" class="logo-dark">
            </a>
            <nav class="top-menu">
               <ul class="sf-menu">
               <li><a href="/en/">Početna</a></li>
               <li><a href="<?php echo $t['community-paper-link']; ?>" target="_blank"><?php echo $t['Community Paper']; ?></a>
               <li><a href="#benefist" class="smooth-scroll">Pogodnosti</a></li>
               <li><a href="#exchange" class="smooth-scroll">Menjačnice</a></li>
               <li><a href="#wallets" class="smooth-scroll">Novčanici</a></li>
               <li><a href="http://bitcoinzguiding.ovh" class="smooth-scroll" target="_blank">Uputstva</a></li>
               <li>
                  <a href="#" class="smooth-scroll">Bazeni</a>
                  <ul>
                     <?php include_once '../pools.php'; ?>
                     <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">I još mnogo toga na forumu bitcointalk</a></li>
                  </ul>
               </li>
               <li>
                  <a href="#" class="smooth-scroll">Explorer</a>
                  <ul>
                     <?php include_once '../explorer.php'; ?>
                  </ul>
               </li>
               <li>
                  <a href="#" class="smooth-scroll">Social</a>
                  <ul>
                     <?php include_once '../social.php'; ?>
                  </ul>
               </li>
               <!--<li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">ANN</a></li>-->
               <li class="menu-item-has-children current-menu-item">
                  <a href="#" class="smooth-scroll">Jezik</a>
                  <ul class="sub-menu">
                     <?php include_once '../lang.php'; ?>
                  </ul>
               </li>
            </nav>
            <!-- Start mobile menu-->
            <!-- Start toggle menu--><a href="#" class="toggle-mnu"><span></span></a>
            <div id="mobile-menu">
               <div class="inner-wrap">
                  <nav>
                     <ul class="nav_menu">
                        <br><br><br>
                        <li class="menu-item-has-children current-menu-item">
                           <a href="#" class="smooth-scroll">Jezik</a>
                           <ul class="sub-menu"><br><br>
                              <?php
                                 include_once '../langmobile.php';
                                 ?>
                           </ul>
                        </li>
                        <li><a href="<?php echo $t['community-paper-link']; ?>"><?php echo $t['Community Paper']; ?></a></li>
                        <li><a href="#benefist" class="smooth-scroll">Pogodnosti</a></li>
                        <li><a href="#exchange" class="smooth-scroll">Menjačnice</a></li>
                        <li><a href="#wallets" class="smooth-scroll">Novčanici</a></li>
                        <li><a href="http://bitcoinzguiding.ovh" class="smooth-scroll" target="_blank">Uputstva</a></li>
                        <li class="menu-item-has-children current-menu-item">
                           <a href="#" class="smooth-scroll">Bazeni</a>
                           <ul class="sub-menu">
                              <br>
                              <?php
                                 include_once '../poolsmobile.php';
                                 ?>
                              <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" target="_blank">Još više...</a></li>
                           </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                           <a href="#" class="smooth-scroll">Explorer</a>
                           <ul class="sub-menu"><br>
                              <?php
                                 include_once '../explorermobile.php';
                                 ?>
                           </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                           <a href="#" class="smooth-scroll">Social</a>
                           <ul class="sub-menu"><br>
                              <?php
                                 include_once '../socialmobile.php';
                                 ?>
                           </ul>
                        </li>
                        <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">FORUM bitcointalk </a>
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
                           <div class="heading-title-big"><br>Ovo je tvoja valuta <br><span>BitcoinZ: Pravi Bitcoin 2.0</span></div>
                           <div class="description-slide">Dobrodošli u decantralizaciju</div>
                           <div class="buttons-section">
                              <a href="<?php echo $t['community-paper-link']; ?>" target="_blank" class="btn dark-btn large-btn"><?php echo $t['Community Paper']; ?></a><a href="https://youtu.be/RI-V7n8amFk" target="_blank" class="btn dark-btn large-btn">Započni Rudarenje</a><a href="https://info.btcz.rocks/" class="btn dark-btn large-btn" target="_blank">Poslednje vesti</a><a href="https://btcz.fund/" class="btn dark-btn large-btn" target="_blank">Doniraj</a><br><br>
                              <center>
                                 <script type="text/javascript" src="/api.js"></script>
                                 <div class="coinmarketcap-currency-widget" data-currency="bitcoinz" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
                              </center>
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
         </div>
         <a href="#about" class="smooth-scroll btn-down"><i aria-hidden="true" class="fa fa-angle-down"></i></a>
      </div>
      <!-- End slider section-->
      <!-- Section about-->
      <section id="about" class="about-us">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-md-push-2">
                  <div class="heading-title center">
                     <h2>O <span>valuti</span></h2>
                     <!--<div class="small-desd">We create <span>awesome stuff</span></div>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>-->
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="item-about">
                     <div class="icon">
                        <i class="pe-7s-target"></i>
                        <div class="bg-icon"><i class="pe-7s-target"></i></div>
                     </div>
                     <div class="content">
                        <h3>Važni <span>detalji</span></h3>
                        <p>
                        	- Pravite rezervne kopije svog novčanika na više lokacija. <br>
                        	- Čuvajte velike sume novčića u hladnim novčanicima ili anonimnim adresama.<br>
                        	- Nemojte davati ili slati svoje privatne ključeve. Privatni ključevi se trebaju čuvati na sigurnim lokacijama. Oni će vam pomoći da povratite svoj novčanik. Ukoliko ste nekome dali ili poslali svoje privatne ključeve, to je već alarmantna situacija. U najkraćem mogućem roku pošaljite svoje novčiće na novu adresu.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="item-about">
                     <div class="icon">
                        <i class="pe-7s-help2"></i>
                        <div class="bg-icon"><i class="pe-7s-help2"></i></div>
                     </div>
                     <div class="content">
                        <h3>BitcoinZ je <span>Bitcoin 2.0:</span></h3>
                        <p>
                        	- Bitcoin tehnologija<br>
                        	- Anonimne transakcije (zk-SNARKs anonimnost) 
                        	- Bitcoin ima sve transakcije javno dostupne.<br>
                        	- Decentralizovano GPU rudarenje (ASIC rudari su blokirani, hardforks za prevenciju ASIC rudara su dozvoljene)<br>
                        	- Decentralizovani razvoj / Svi uAll doprinosioci su volonteri<br>
                        	- Veliki blokovi -> blokovi su slični BCC / BCH
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="item-about">
                     <div class="icon">
                        <i class="pe-7s-light"></i>
                        <div class="bg-icon"><i class="pe-7s-light"></i></div>
                     </div>
                     <div class="content">
                        <h3>Aktivna <span>zajednica</span></h3>
                        <p>
                        	Naša zajednica je aktivna i uvek se razvijamo. <br>
                        	Možete nas pratiti na socijalnim mrežama, forumu, kao i na Slack-u</p>
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
                  <h2>Prednosti <span>BitcoinZ</span></h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="tabs services-tabs">
               <ul class="services-carousel">
                  <li class="animated-service anim-shadow">
                     <a href="#tabs-1">
                        <i class="pe-7s-graph"></i>
                        <h4>Maks. Zaliha</h4>
                        <p>21 000 000 000 btcz.</p>
                     </a>
                  </li>
                  <li class="animated-service anim-shadow">
                     <a href="#tabs-2">
                        <i class="pe-7s-drop"></i>
                        <h4>Algoritam</h4>
                        <p>Equihash.</p>
                     </a>
                  </li>
                  <li class="animated-service anim-shadow">
                     <a href="#tabs-3">
                        <i class="pe-7s-timer"></i>
                        <h4>Brze transakcije</h4>
                        <p>BTCZ = 2MB na svaka 2.5 minuta ~</p>
                     </a>
                  </li>
                  <li class="animated-service anim-shadow">
                     <a href="#tabs-4">
                        <i class="pe-7s-map"></i>
                        <h4>Cirkulirajuće zalihe</h4>
                        <p>12500 novčića na svaka 2.5 minuta.</p>
                     </a>
                  </li>
               </ul>
               <div id="dots-control-tabs" class="dots-control-carousel"></div>
               <!--Start tabs-->
               <div id="tabs-1">
                  <div class="col-md-6">
                     <div class="head-service small-head text-left">
                        <h2>Naš cilj je da omogućimo svim najboljim besplatnim softwerima na <span>marketu da mogu da koriste BitcoinZ.</span></h2>
                        <p>Imuni parametri:</p>
                     </div>
                     <p>- maks. zaliha </p>
                     <p>- inflacija </p>
                     <p>- samo POW algo - možemo promeniti Equihash algo u drugi POW algo radi zaštite od ASIC rudara </p>
                     <p>- nove karakteristike su su dozvoljene samo zbog unapređenja korišćenja / stabilnisti, ali nikada nećemo menjati istoriju (ETH/ETC slučaj) </p>
                  </div>
                  <div class="col-md-5 col-md-push-1">
                     <ul class="list">
                        <li>Algoritam: Equihash (uvek GPU kopanje - mi promovišemo decentralizaciju u rudarenju) </li>
                        <li>Max supply 21B coins </li>
                        <li>Trenutne zalihe: 12500 novčića na svaka 2.5 minuta</li>
                        <li>Trenutna veličina bloka je slična BCC/BCH (BTCZ = 2MB na svaka 2.5 minuta ~ BCC/BCH = 8MB svakih 10 minuta)</li>
                     </ul>
                  </div>
               </div>
               <div id="tabs-2">
                  <div class="col-md-6">
                     <div class="head-service small-head text-left">
                        <h2>Najsigurniji softver je uključen u <span>bitcoinz-pod/bitcoinz linux klient.</span></h2>
                        <p>Osetljivi programi sa podacima, kao što su novčanici, trebali bi da koriste besplatan javni kod i koriste enkripciju sha256 da bi moglo ostali članovi tima mogli da urade reviziju. Nije preporučljivo koristiti ni jedan novčanik koji nije imao reviziju drugog tima. </p>
                     </div>
                     <p>Program bez revizije i potvrde nije sigurno koristiti i trebalo bi ga izbegavati.</p>
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
                  <div class="link-full"><a href="https://bitcointalk.org/index.php?topic=2166510.0">Poseti forum<i aria-hidden="true" class="fa fa-angle-right"></i></a></div>
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
                     <h2>Zašto BitcoinZ ?</h2>
                     <div class="small-desd">Mi smo potpuno decentralizovana mreža</div>
                     <p>Evo nekih prednosti</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- Item-->
               <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                  <div class="icon-container">
                     <div class="icon icon-circle"><i class="pe-7s-look"></i></div>
                  </div>
                  <h3>Anonimnost</h3>
                  <p>Sve transakcije su u potpunosti anonimne.</p>
               </div>
               <!-- Item-->
               <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                  <div class="icon-container">
                     <div class="icon icon-circle"><i class="pe-7s-light"></i></div>
                  </div>
                  <h3>Podrška za različite platform</h3>
                  <p>Naš novčanik je kompaktibilan sa Linux, Windows, iOS i Android.</p>
               </div>
               <!-- Item-->
               <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                  <div class="icon-container">
                     <div class="icon icon-circle"><i class="pe-7s-like2"></i></div>
                  </div>
                  <h3>Zajednica</h3>
                  <p>Mi sarađujemo sa zajednicom, tako da možemo da uspemo.</p>
               </div>
               <!-- Item-->
               <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
                  <div class="icon-container">
                     <div class="icon icon-circle"><i class="pe-7s-graph1"></i></div>
                  </div>
                  <h3>Aktivan rast cena</h3>
                  <p>BitcoinZ je fokusiran na organski rast.</p>
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
               <h2>Menjačnice</h2>
               <p>Kupi ili prodaj BitcoinZ novčiće</p>
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
                     <h2>Preuzmi <span>novčanik</span></h2>
                     <p>Linux, Windows i mobilni novčanik</p>
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
            <div class="row"></div>
         </div>
      </section>
      </br>
      </br>
      </br>
      </br>
      <!--Section why chose us-->
      <?php
         include_once 'roadmap.php';
         ?>
      <section class="section-choose-us">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-md-push-2">
                  <div class="heading-title center">
                     <h2>Zašto izabrati <span>BitcoinZ</span></h2>
                     <div class="small-desd">Evo nekoliko<span> razloga</span></div>
                     <p>UPOZORENJE: Uvek čuvajte rezervne kopije svojih ključeva na sigurnom mestu.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <!--Start item-->
               <div class="col-md-4">
                  <div class="item-about item-choose">
                     <div class="content">
                        <h3>Decentralizovano rudarenje</h3>
                        <p>
                        	Kao rudar, ne bi trebalo koristiti najveći bazen za rudarenje.<br>
                           Lako je rudarenje<br>
                           Equihash algoritam.<br>
                           Decentralizovane menjačnice
                        </p>
                     </div>
                  </div>
               </div>
               <!--Start item-->
               <div class="col-md-4">
                  <div class="item-about item-choose">
                     <div class="icon">
                        <i class="pe-7s-light"></i>
                        <div class="bg-icon"><i class="pe-7s-light"></i></div>
                     </div>
                     <div class="content">
                        <h3>Bez <span>Pre-rudarenja</span></h3>
                        <p>Čist novčić. Bez pre-rudarenja</p>
                     </div>
                  </div>
               </div>
               <!--Start item-->
               <div class="col-md-4">
                  <div class="item-about item-choose">
                     <div class="icon">
                        <i class="pe-7s-graph1"></i>
                        <div class="bg-icon"><i class="pe-7s-graph1"></i></div>
                     </div>
                     <div class="content">
                        <h3>BitcoinZ je  <span>Bitcoin 2.0:</span></h3>
                        <p>
                        	- 21 milijarda novčića <br />
                       		- Svi na svetu mogu da poseduju bar jedan BTCZ
                       	</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <!--Start item-->
               <div class="col-md-4">
                  <div class="item-about item-choose">
                     <div class="icon">
                        <i class="pe-7s-like"></i>
                        <div class="bg-icon"><i class="pe-7s-like"></i></div>
                     </div>
                     <div class="content">
                        <h3>Aktivna <span>zajednica</span></h3>
                        <p>Naša zajednica ima aktivan razvoj i raste svakog dana.</p>
                     </div>
                  </div>
               </div>
               <!--Start item-->
               <div class="col-md-4">
                  <div class="item-about item-choose">
                     <div class="icon">
                        <i class="pe-7s-help2"></i>
                        <div class="bg-icon"><i class="pe-7s-help2"></i></div>
                     </div>
                     <div class="content">
                        <h3>Anonimne  <span>Transakcije</span></h3>
                        <p>Sve transakcije su anonimne. Tako da se ne treba brinuto o anonimnosti</p>
                     </div>
                  </div>
               </div>
               <!--Start item-->
               <div class="col-md-4">
                  <div class="item-about item-choose">
                     <div class="icon">
                        <i class="pe-7s-phone"></i>
                        <div class="bg-icon"><i class="pe-7s-phone"></i></div>
                     </div>
                     <div class="content">
                        <h3>Android i iOS <span>novčanici</span></h3>
                        <p>Korisite bitcoinz nočiće u svom telefonu</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <!--Start item-->
               <div class="col-md-4">
                  <div class="item-about item-choose">
                     <div class="icon">
                        <i class="pe-7s-display1"></i>
                        <div class="bg-icon"><i class="pe-7s-display1"></i></div>
                     </div>
                     <div class="content">
                        <h3>Prirodan <span>rast</span></h3>
                        <p>Vaši novčići će rasti i razvijati se prirodnim putem.</p>
                     </div>
                  </div>
               </div>
               <!--Start item-->
               <div class="col-md-4">
                  <div class="item-about item-choose">
                     <div class="icon">
                        <i class="pe-7s-link"></i>
                        <div class="bg-icon"><i class="pe-7s-link"></i></div>
                     </div>
                     <div class="content">
                        <h3>Decentralizovan  <span>razvoj</span></h3>
                        <p>Sve menjačnice su dozvoljene. Najbolje su decentralizovane. Planiramo da implementujemo kompletno decentralizovanu XCAT menjačnicu.</p>
                     </div>
                  </div>
               </div>
               <!--Start item-->
               <div class="col-md-4">
                  <div class="item-about item-choose">
                     <div class="icon">
                        <i class="pe-7s-paint"></i>
                        <div class="bg-icon"><i class="pe-7s-paint"></i></div>
                     </div>
                     <div class="content">
                        <h3>Samo POW i <span>bez POS-a</span></h3>
                        <p>Novčići će biti dodeljeni samo POW rudarenju, i nikada neće biti promennjeno u POS. </p>
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
                     <div class="item-carousel"><a href="https://slack.bitcoinz.global/" target="_blank"><img src="/img/partner3.png" alt="logo"></a></div>
                  </div>
                  <div class="col-md-2">
                     <div class="item-carousel"><a href="https://www.reddit.com/r/BTCZCommunity/" target="_blank"><img src="/img/partner4.png" alt="logo"></a></div>
                  </div>
                  <div class="col-md-2">
                     <div class="item-carousel"><a href="https://discordapp.com/invite/u3dkbFs" target="_blank"><img src="/img/disc.png" alt="logo"></a></div>
                  </div>
                  <div class="col-md-2">
                     <div class="item-carousel"><a href="https://www.facebook.com/BTCZCommunity/" target="_blank"><img src="/img/face.png" alt="logo"></a></div>
                  </div>
                  <div class="col-md-2">
                     <div class="item-carousel"><a href="https://t.me/joinchat/CDzlaRGMvBm4P2Z76sNclQ" target="_blank"><img src="/img/tel.png" alt="logo"></a></div>
                  </div>
                  <div class="col-md-2">
                     <div class="item-carousel"><a href="https://twitter.com/BitcoinZTeam" target="_blank"><img src="/img/twit.png" alt="logo"></a></div>
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
                     <p>© 2017 BitcoinZ Community. All rights reserved.</p>
                     <ul class="footer-menu">
                        <li><a href="#benefist" class="smooth-scroll">POGODNOSTI</a></li>
                        <li><a href="#exchange" class="smooth-scroll">Menjačnice</a></li>
                        <li><a href="#wallets" class="smooth-scroll">Novčanici</a></li>
                        <li><a href="https://bitcointalk.org/index.php?topic=2166510.0" class="smooth-scroll" target="_blank">FORUM bitcointalk</a></li>
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