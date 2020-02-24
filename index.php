<html lang="fr">
<head>

    <meta charset="utf-8">
    <title> CV Housni BOUDAOUD </title>
    <link rel="shortcut icon" sizes="300x300" href="img/cv-hb.ico" type="image/x-icon"/>
    <meta name="author" lang="fr" content="Housni BOUDAOUD"/>
    <meta name="robots" content="Housni, BOUDAOUD, hboudaoud, cv-boudaoud, cv-hboudaoud"/>
    <META HTTP-EQUIV="Pragma" CONTENT="cache"/>
    <meta name="viewport" content="width=device-width"/>
    <meta name="viewport" content="width=device-height"/>

    <!-- Couleur du navigateur / Source : https://www.orsal.fr/theme-color-Personnalisation-des -->
    <!-- Chrom, Firfox et opera -->
    <meta name="theme-color" content="rgb(5, 45, 49)"/>
    <!-- Chrom, Firfox et opera -->
    <meta name="apple-mobile-web-app-status-bar-style" content="rgb(5, 45, 49)"/>
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="rgb(5, 45, 49)"/>
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="rgb(5, 45, 49)">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"-->
    <!--          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->


    <link rel="stylesheet" type="text/css" media="all"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="css/cv.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="css/img.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="css/scroll.css"/>

</head>
<body>
<div class="noPrint">
    <nav>
        <h1>CV Housni BOUDAOUD</h1>
        <button id="menuOn" class="menuOn btn  btn-primary fa fa-bars" aria-hidden="true"
                onclick="afficheMenu('menuOn')"
        >
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </button>
        <div style="display: inline">

            <button class="menuOn btn  btn-primary fa fa-id-card-o" aria-hidden="true"
                    onclick="window.location.href = '#Information';"
                    alt ="Information"
            > <span class="menuLabel"> Information</span>
            </button>

            <button class="menuOn btn  btn-primary fa fa-wrench" aria-hidden="true"
                    onclick="window.location.href = '#Experiences';"
            > <span class="menuLabel"> Experiences</span>
            </button>
            <button class="menuOn btn  btn-primary fa fa-university " aria-hidden="true"
                    onclick="window.location.href = '#Formations';"
            > <span class="menuLabel"> Formations </span>
            </button>
            <button class="menuOn btn  btn-primary fa fa-cogs " aria-hidden="true"
                    onclick="window.location.href = '#Competences';"
            > <span class="menuLabel"> Competences </span>
            </button>
            <button class="menuOn btn  btn-primary fa fa-language  " aria-hidden="true"
                    onclick="window.location.href = '#Langues';"
            > <span class="menuLabel"> Langues</span>
            </button>
        </div>
        <div id="dropdownMenu" class="dropdown">
            <button class="menuOff  btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <button id="menuOff" class="dropdown-item fa fa-angle-left" aria-hidden="true"
                        onclick="afficheMenu('menuOff')"
                >
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <button class="dropdown-item fa fa-id-card-o" aria-hidden="true"
                        onclick="window.location.href = '#Information';"
                        alt ="Information"
                > Information
                </button>
                <button class="dropdown-item fa fa-wrench" aria-hidden="true"
                        onclick="window.location.href = '#Experiences';"
                > Experiences
                </button>
                <button class="dropdown-item fa fa-university " aria-hidden="true"
                        onclick="window.location.href = '#Formations';"
                > Formations
                </button>
                <button class="dropdown-item fa fa-cogs " aria-hidden="true"
                        onclick="window.location.href = '#Competences';"
                > Competences
                </button>
                <button class="dropdown-item fa fa-language  " aria-hidden="true"
                        onclick="window.location.href = '#Langues';"
                > Langues
                </button>
            </div>
        </div>
        <a class=" btn  btn-primary fa fa-code" aria-hidden="true"
           href="http://projets-boudaoud.biz.ht/" target="_blank"
        > <span class="menuLabel"> Mes realisation</span>
        </a>
    </nav>
    <div id="page" class="page holster">
        <div class="fenetre container y mandatory-scroll-snapping" dir="ltr">
            <section id="Information">
                <div>
                    <h2>
                        DEVELOPPEUR FULLSTACK
                        <span><br/>Lyon et alentour (max 1h30 de trajet aller/retour)<span>
                    </h2>
                    <!--                    <div class="col-1 d-block d-lg-none">-->
                    <!--                        <button class="handheld fa fa-angle-left" aria-hidden="true"></button>-->
                    <!---->
                    <!--                    </div>-->
                    <!--                    <div class="col-10 d-block">-->
                    <!--                    </div>-->
                    <!--                    <div class="col-1 d-block d-lg-none">-->
                    <!--                        <button class="handheld fa fa-angle-right" aria-hidden="true"></button>-->
                    <!--                    </div>-->
                </div>
                <aside class="row">
                    <div class="row no-gutters container x mandatory-scroll-snapping">
                        <section id="image"
                                 class="col-lg-2 col-md-6 col-pr-2 col-12 order-lg-1 order-md-2 order-xs-2 order-2 order-pr-1 landscape">
                            <a href="img/hboudaoud.jpg"><img src="img/hboudaoud.jpg" alt="Image Housni BOUDAOUD"
                                                             title="Housni BOUDAOUD" class="imageflottante"/>
                            </a>
                        </section>
                        <section id="coodonnees"
                                 class="col-lg-3 col-md-6 col-pr-4 mt-md-1 mt-4 col-12 order-lg-3 order-md-1 order-xs-1 order-3 order-pr-3 landscape">
                            <address>
                                Housni BOUDAOUD
                                <br/><i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                : 06 28 07 53 84
                                <br/><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                : <a
                                        href="javascript:window.location='mailto:h.boudaoud@homail.fr?subject=Mail envoyer depuis cv-boudaoud.biz.ht&amp;body=\n\n\nMail envoyer depuis cv-boudaoud.biz.ht ' + window.location.href; "
                                        id="mail" target="_black">
                                    h.boudaoud<i class="fa fa-at" aria-hidden="true"></i>homail.fr</a>

                                <br/><i class="fa fa-address-card" aria-hidden="true"></i>
                                : 65, rue Gabriel PERI
                                <br/> 69100, Villeurbanne
                            </address>
                            <p>
                                <i class="fa fa-link" aria-hidden="true"></i>:
                                <a href="http://www.cv-boudaoud.biz.ht" target="cv">
                                    cv-boudaoud.biz.ht</a>
                                <br/><i class="fa fa-code" aria-hidden="true"></i>:
                                <a href="http://projets-boudaoud.biz.ht" target="projets">
                                    projets-boudaoud.biz.ht</a>

                                <br/><i class="fa fa-car" aria-hidden="true"></i>
                                : Permis B, Véhiculé
                            </p>
                            <p><i class="fa fa-download" aria-hidden="true"></i>
                                :
                                <a href="/doc/cv-boudaoud.pdf" target="_blank" title="Télécharger mon CV en PDF">PDF </a>
                                , <a href="/doc/cv-hboudaoud.odt" title="Télécharger mon CV en odt"> odt </a>
                                , <a href="/doc/cv-hboudaoud.docx" title="Télécharger mon CV en docx">docx</a>
                            </p>
                        </section>

                        <section
                                class="col-lg-6 col-pr-6 col-mt-6 col-md-12 col-12 order-md-2 order-pr-2 order-1 order-xs-3">
                            <!-- paragraphe : une petite présentation -->
                            <div class="infos">
                                <p>Des compétences solides en mathématiques <span style="font-size:0.9em">(Algèbre, Algorithmique, Statistiques,...)</span>;</p>
                                <hr />
                                <p> Des savoir-faire en programmation orienté objet</p>
                                <hr />
                                <p> Des connaissances en conception de bases de données;</p>
                                <hr />
                                <p> Conceptuel / Analytique /Flexible.</p>
                            </div>
                        </section>
                    </div>
                </aside>
                <button class="fa fa-angle-down" aria-hidden="true"
                        onclick="window.location.href = '#Experiences';">
                </button>
            </section>
            <section id="Experiences">
                <div>
                    <button class="fa fa-angle-up" aria-hidden="true"
                            onclick="window.location.href = '#Information';">

                    </button>
                    <h3>Experiences</h3>
                </div>
                <aside>
                    <div class="row no-gutters container x mandatory-scroll-snapping">
                        <section id="dizi" class="col-md-6 col-pr-6 col-sm-12">
                            <div class="mark">2019 - 2019</div>
                            <strong>Développeur informatiques :</strong> DIZISOFT (38)
                            <ul>
                                <li class="text"> → Mise en place de vues affichant en temps réel les données sous forme
                                    de tableaux, graphiques, ou indicateurs
                                </li>
                                <li class="text"> → Ajout de modèles, Modification des contrôleurs pour paramétrer
                                    l’affichage des vues.
                                </li>
                                <li class="text"> → Installation et configuration de la solution chez les clients.</li>
                                <li class="text"> → Paramétrer des requêtes AJAX pour ajouter/modifier des structures de
                                    données dans une vue.
                                </li>
                                <li class="text"> → Effectuer les tests d'intégration et de validation</li>
                            </ul>
                        </section>
                        <section id="Education" class="col-md-6 col-pr-6 col-sm-12">
                            <div class="mark">2011 - 2017</div>
                            <strong>Enseignant de Mathématiques :</strong>
                            <ul class="espace-ligne">
                                <li class="text"> → Education nationale (69 et 38) du 14/02/2011 au 31/08/2017. Pour les
                                    niveaux collège et lycée .
                                </li>
                                <li class="text"> → Lycée agricole de Dardilly (69) à mi-temps du 01/10/2009 au
                                    31/08/2010. Pour les niveaux 2<sup>nd</sup> pro. BEPA et BTSA.
                                </li>
                            </ul>

                            <div class="mark">2006 - 2009</div>
                            <strong>Vendeur à Carrefour Antibes (06):</strong> <span style="font-size:90%;">Conseil de la clientèle, l'étiquetage des articles, le rangement et la mise en rayon.</span>
                        </section>
                        <section id="toto" class="col-md-6 col-pr-6 col-sm-12">
                            <div class="mark">2003 - 2005</div>
                            <strong>Manutentionnaire à la librairie SAURAMPS Montpellier (34):</strong>
                            <span style="font-size:90%;">
                                Réception, étiquetage et expédition de la marchandise, préparation des commandes pour
                                plus de dix mois.
                            </span>
                            <div class="mark"> 2003 - 2003</div>
                            <strong>BAFA :</strong>
                            <ul class="espace-ligne">
                                <li>
                                    → Stagiaire BAFA et animateur au centre de loisir éducatif à l'Université
                                    Montpellier II (34) du 29/08/2003 au 17/12/2003
                                </li>
                                <li> → Stage de base BAFA avec l'UFCV du 13 au 21 juillet 2003</li>
                            </ul>
                        </section>
                    </div>
                </aside>
                <div class="row">
                    <button class="fa fa-angle-down" aria-hidden="true"
                            onclick="window.location.href = '#Formations';">
                    </button>
                </div>
            </section>
            <section id="Formations">
                <div>
                    <button class="fa fa-angle-up" aria-hidden="true"
                            onclick="window.location.href = '#Experiences';">
                    </button>
                    <h3>Formations</h3>
                </div>
                <aside>
                    <div class="row no-gutters container x mandatory-scroll-snapping">
                        <section id="CNAM" class="col-lg-6 col-pr-6 col-sm-12">
                            <div class="mark"> En cours</div>
                            <strong> UE suivies au CNAM Lyon</strong>
                            <ul>
                                <li>
                                    <a href="/doc/cnam/TET102.pdf" target="_blank"
                                       title="Cliquer ici pour avoir plus de détail sur ce module">
                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                        Management social pour ingénieur et communication en entreprise
                                    </a>
                                </li>
                                <li>
                                    <a href="/doc/cnam/LG02500A.pdf" target="_blank1">
                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                        <strong>Licence informatique </strong>
                                    </a>,
                                    <a href="https://iscople.gescicca.net/Cursus.aspx?code_scolarite=CHA285420%20-%20RHA285180%20-%20BRT285479%20-%20ARA427291&amp;cr=ARA&amp;uid=c802ea7393c1acec03799b348d4ba1bf"
                                       target="_blank2" title="Cliquer ici pour avoir mes notes">
                                        Voir le cursus <i class="fa fa-mouse-pointer" aria-hidden="true"></i>
                                    </a>
                                    <ul class="cursus">
                                        <li>
                                            <a href="/doc/cnam/RSX112.pdf" target="_blank"
                                               title="Cliquer ici pour avoir plus de détail sur ce module">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                Sécurité et réseaux
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/doc/cnam/GLG105.pdf" target="_blank"
                                               title="Cliquer ici pour avoir plus de détail sur ce module">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                Génie logiciel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/doc/cnam/CCE105.pdf" target="_blank"
                                               title="Cliquer ici pour avoir plus de détail sur ce module">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                Pratiques écrites et orales de la communication professionnelle
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/doc/cnam/NFP135.pdf" target="_blank"
                                               title="Cliquer ici pour avoir plus de détail sur ce module">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                Valeur d'Accueil et de Reconversion en Informatique 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/doc/cnam/RCP101.pdf" target="_blank"
                                               title="Cliquer ici pour avoir plus de détail sur ce module">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                Recherche opérationnelle et aide à la décision
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/doc/cnam/NFP136.pdf" target="_blank"
                                               title="Cliquer ici pour avoir plus de détail sur ce module">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                Valeur d'Accueil et de Reconversion en Informatique 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/doc/cnam/SMB137.pdf" target="_blank"
                                               title="Cliquer ici pour avoir plus de détail sur ce module">
                                                Systèmes d'exploitation : principes, programmation et virtualisation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/doc/cnam/NFE108.pdf" target="_blank"
                                               title="Cliquer ici pour avoir plus de détail sur ce module">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                Spécification et Modélisation Informatiques
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/doc/cnam/NFE113.pdf" target="_blank"
                                               title="Cliquer ici pour avoir plus de détail sur ce module">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                Conception et administration de bases de données
                                            </a>
                                        </li>

                                    </ul>
                                    <!--                                        <div class="noPrint">-->
                                    <!--                                            <strong> <abbr title="Sécurité et réseaux.">RSX112</abbr> </strong> ;-->
                                    <!--                                            <strong> <abbr title="Génie logiciel.">GLG105</abbr></strong> ;-->
                                    <!--                                            <strong> <abbr title="Pratiques écrites et orales de la communication professionnelle.">CCE105</abbr></strong> ;-->
                                    <!--                                            <strong> <abbr title="Valeur d'Accueil et de Reconversion en Informatique 1.">NFP135</abbr></strong> ;-->
                                    <!--                                            <strong> <abbr title="Recherche opérationnelle et aide à la décision.">RCP101</abbr></strong> ;-->
                                    <!--                                            <strong> <abbr title="Valeur d'Accueil et de Reconversion en Informatique 2.">NFP136</abbr></strong> ;-->
                                    <!--                                            <strong> <abbr title="Systèmes d'exploitation : principes, programmation et virtualisation.">SMB137</abbr></strong> ;-->
                                    <!--                                            <strong> <abbr title="Spécification et Modélisation Informatiques.">NFE108</abbr></strong> ;-->
                                    <!--                                            <strong> <abbr title="Conception et administration de bases de données.">NFE113</abbr></strong> .-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="print">-->
                                    <!--                                            <strong> RSX112 </strong> ;-->
                                    <!--                                            <strong> GLG105</strong> ;-->
                                    <!--                                            <strong> CCE105</strong> ;-->
                                    <!--                                            <strong> NFP135</strong> ;-->
                                    <!--                                            <strong> RCP101</strong> ;-->
                                    <!--                                            <strong> NFP136</strong> ;-->
                                    <!--                                            <strong> SMB137</strong> ;-->
                                    <!--                                            <strong> NFE108</strong> ;-->
                                    <!--                                            <strong> NFE113</strong> .-->
                                    <!--                                        </div>-->
                                </li>
                            </ul>
                        </section>
                        <section id="universite" class="col-lg-6 col-pr-6 col-sm-12">
                            <div class="mark"> 2012</div>
                            <p><strong> Master </strong> <abbr title="Histoire, Philosophie et Didactique des Sciences"
                                                               class="noPrint">HPDS</abbr><span
                                        class="print">HPDS</span>,
                                Spécialité <abbr title="Enseignement, Apprentissage et Diffusion des Mathématiques"
                                                 class="noPrint">EADM</abbr><span
                                        class="print">EADM</span>
                                <br/>Université Claude Bernard Lyon 1.
                            </p>
                            <div class="mark"> 2011</div>
                            <p><strong> CAPES Mathématiques : </strong> Admis au CAPES Externe.</p>

                            <div class="mark"> 2006</div>
                            <p><strong> Licence de Mathématiques</strong>
                                <br/>Université Montpellier II.</p>
                        </section>
                        <section id="OpenClassRooms" class="col-lg-6 col-pr-6 col-sm-12">
                            <span id="nbCertificatsOpenClassRooms"> ? </span> Certificats btenues en suivant les
                            cours de <a href="https://openclassrooms.com/" target="opr">OpenCassRooms</a>.</p>
                            <div class="row">
                                <div class="col-2">
                                    <button id="certificatsLeft" disabled=""
                                            onclick="nextPage(-1)">
                                        <i class="fa fa-angle-left " aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="col-8">
                                    <button style="background: rgba(15, 45, 49,.2)" id="listCertificatsSortBy"
                                            onclick="listCertificatsSortBy('Name')"></button>
                                </div>
                                <div class="col-2">
                                    <button id="certificatsRight" onclick="nextPage(1)">
                                        <i class="fa fa-angle-right " aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div id="certificatsOpenClassRooms" class="col-12"></div>
                            </div>
                        </section>

                    </div>
                </aside>
                <div class="row">
                    <button class="fa fa-angle-down" aria-hidden="true"
                            onclick="window.location.href = '#Competences';">
                    </button>
                </div>
            </section>
            <section id="Competences">
                <div>
                    <button class="fa fa-angle-up" aria-hidden="true"
                            onclick="window.location.href = '#Formations';">

                    </button>
                    <h3>Competences</h3>
                </div>
                <aside>
                    <div class="row no-gutters container x mandatory-scroll-snapping">
                        <section class="col-lg-3 col-md-4  col-pr-6  col-sm-6 col-xs-12">
                            <p><strong> Langages </strong></p>
                            <ul>
                                <li>
                                    » HTML5/CSS3* <span class="etoile" style="float: right; display:none">4</span>
                                </li>
                                <li>
                                    » C# <span class="etoile" style="float: right; display:none">3</span>
                                </li>
                                <li>
                                    » PHP <span class="etoile" style="float: right; display:none">2</span>
                                </li>
                                <li>
                                    » Javascript* <span class="etoile" style="float: right; display:none">3.5</span>
                                </li>
                            </ul>

                        </section>
                        <section class="col-lg-3 col-md-4  col-pr-6  col-sm-6 col-xs-12">
                            <p><strong> DataBase </strong></p>

                            <ul>
                                <li>
                                    » SQL Server <span class="etoile" style="float: right; display:none">3</span>
                                </li>
                                <li>
                                    » Mysql* <span class="etoile" style="float: right; display:none">2.5</span>
                                </li>
                                <li>
                                    » Oracle* <span class="etoile" style="float: right; display:none">1.5</span>
                                </li>
                            </ul>
                        </section>
                        <section class="col-lg-3 col-md-4  col-pr-6  col-sm-6 col-xs-12">
                            <p><strong>IDE </strong></p>

                            <ul>
                                <li>
                                    » Visual-Studio <span class="etoile" style="float: right; display:none">3.5</span>
                                </li>
                                <li>
                                    » Sublime Text* <span class="etoile" style="float: right; display:none">3</span>
                                </li>
                                <li>
                                    » Eclipse* <span class="etoile" style="float: right; display:none">2</span>
                                </li>
                            </ul>

                        </section>
                        <section class="col-lg-3 col-md-4  col-pr-6  col-sm-6 col-xs-12">
                            <p><strong>Méthode</strong></p>
                            <ul>
                                <li>
                                    » Merise*
                                    <span class="etoile col-md-3" style="float: right; display:none">3</span>
                                    <br/><abbr title="Modèle Conceptuel des Données" class="noPrint">MCD</abbr>/
                                    <abbr title="Modèle Relationnel des Données" class="noPrint">MRD</abbr>
                                </li>
                                <li>
                                    » Agile(Scrum) <span class="etoile" style="float: right; display:none">1</span>
                                </li>
                                <li>
                                    » Cycle en V <span class="etoile" style="float: right; display:none">1</span>
                                </li>
                                <li>
                                    » Cycle Spirale <span class="etoile" style="float: right; display:none">1</span>
                                </li>
                                <li>
                                    » Cycle en cascade <span class="etoile" style="float: right; display:none">1</span>
                                </li>
                            </ul>

                        </section>
                        <section class="col-lg-3 col-md-4  col-pr-6  col-sm-6 col-xs-12">
                            <p><strong>Système </strong></p>
                            <ul>
                                <li>
                                    » Windows* <span class="etoile" style="float: right; display:none">4</span>
                                </li>
                                <li>
                                    » Linux* <span class="etoile" style="float: right; display:none">3.5</span>
                                </li>
                            </ul>

                        </section>
                        <section class="col-lg-3 col-md-4  col-pr-6  col-sm-6 col-xs-12">
                            <p><strong>Divers </strong>Connaissances</p>
                            <ul>
                                <li>» ASP.Net, Entity, Laravel*</li>
                                <li>» Chart.js*, Ajax*, JSON*</li>
                                <li>» Bootstrap*, Quasar(VueJs)</li>
                                <li>» Java, C++*, C*, Python*</li>
                                <li>» XML*,SVG*</li>
                            </ul>
                        </section>
                        <section class="col-lg-3 col-md-4  col-pr-6  col-sm-6 col-xs-12">
                            <p><strong> Aptitudes </strong></p>
                            <ul>
                                <li>Recueil des besoins</li>
                                <li>Modélisation</li>
                                <li>Autodidacte</li>
                            </ul>

                        </section>
                    </div>
                </aside>
                <div class="row">
                    <button class="fa fa-angle-down" aria-hidden="true"
                            onclick="window.location.href = '#Langues';">
                    </button>
                </div>
            </section>
            <section id="Langues">
                <div>
                    <button class="fa fa-angle-up" aria-hidden="true"
                            onclick="window.location.href = '#Competences';">
                    </button>
                </div>
                <aside>
                    <div class="container x mandatory-scroll-snapping bloc">
                        <h3>Langues</h3>
                        <section>
                            <ul>
                                <li><strong> Anglais :</strong> Niveau scolaire</li>
                                <li><strong> Arabe :</strong> bilingue</li>
                            </ul>
                        </section>
                        <h3>Loisirs</h3>
                        <section>
                            <ul>
                                <li>Programmation, création de pages web en HTML,</li>
                                <li>voyages, randonnées, cuisine</li>
                            </ul>
                        </section>
                    </div>
                </aside>
            </section>
        </div>
    </div>
    <footer>
        <div class="Compteur">
            merci de me laissez vos commentaires sur <a href="http://cv-boudaoud.biz.ht">http://cv-boudaoud.biz.ht</a>
            <?php
            //            // dossier courant
            //            $foldersArry = explode('_', getcwd());
            //            array_shift($foldersArry);
            //            $page = implode("_", $foldersArry);
            //            /****************************************************/
            //            /*                                                  */
            //            /*                    Compteur                      */
            //            /*                                                  */
            //            /****************************************************/
            //            include('../code-source/php/compteur/index.php');
            ?>
        </div>
    </footer>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>


