<?php




?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lasseni MALLE | Futur Expert Comptable</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <style>
        #trait-gauche {
            height: 60px;
            background-color: #F3BB00;
            width: 2px;
        }

        div.logos img {
            width: 50px;
            height: auto;
            margin-left: 20px;
        }

        div.reseaux {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media only screen and (max-width: 576px) {
            div.logos img {
                width: 40px;
                height: auto;
                margin-left: 20px;
            }
        }
    </style>
</head>

<body>
    <nav class="menu">
        <ul>
            <li class="nav-item">
                <a href="#acceuil" title="Acceuil" class="nav-link"><img src="./img/accueil.png" alt=""
                        class="icon-menu entouree"></a>
            </li>
            <li class="nav-item">
                <a href="#a-propos" title="A propos de moi" class="nav-link"><img src="./img/utilisateur.png" alt=""
                        class="icon-menu"></a>
            </li>
            <li class="nav-item">
                <a href="#formations" title="Mes formations" class="nav-link"><img src="./img/education.png" alt=""
                        class="icon-menu"></a>
            </li>
            <li class="nav-item">
                <a href="#contact" title="Me contacter" class="nav-link"><img src="./img/appel-telephonique.png" alt=""
                        class="icon-menu"></a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="tell"></div>
        <section id="acceuil" class="section voir">
            <div class="container">
                <figure id="ma-photo" class="figure">
                    <img src="./img/il-code.jpg" alt="Ma photo">
                </figure>
                <div class="infos">
                    <div class="mon-nom">
                        <h1>Lasseni <span id="prenom-red">MALLE</span></h1>
                    </div>
                    <div class="trait-jaune"></div>
                    <p class="grey-txt">
                        Passionné par la comptabilité, la fiscalité et la finance depuis au lycée.
                    </p>
                    <h2>
                        Mon seul et unique but est de dévenir <span class="black-text">EXPERT COMPTABLE</span>.
                    </h2>
                    <div class="reseaux">
                        <div id="trait-gauche"></div>
                        <div class="logos">
                            <a href="https://wa.me/+33627606087"><img src="img/whatsapp.png" alt=""></a>
                            <a href="https://facebook.com"><img src="img/facebook.png" alt=""></a>
                            <a href="https://linkedin.com"><img src="img/linkedin.png" alt=""></a>
                            <a href="mailto:lassenimalle2@gmail.com"><img src="img/gmail.png" alt=""></a>
                        </div>
                    </div>
                    <p>
                        <a href="#contact" id="btn-engager">Engagez-moi</a>
                        <a href="#a-propos" id="btn-a-propos">A propos de moi</a>
                    </p>
                </div>
            </div>
        </section>
        <section id="a-propos" class="section">
            <h1 class="title-section">A Propos de <span class="red-text">Moi</span></h1>
            <div class="container">
                <figure id="ma-photo" class="figure">
                    <img src="./img/il-code.jpg" alt="">
                </figure>
                <div class="infos">
                    <h1 style="color: var(--my-grey); align-self: flex-start; margin: 0;">Qui suis je ?</h1>
                    <h3 style="color: var(--main-bg);">Je suis Lasseni MALLE,
                        étudiant en Gestion</h3>
                    <h2>Ayant un <span style="color: var(--main-bg);">BAC ES</span> depuis 2020,
                        je suis arrivé en FRANCE
                        l’année suivante pour
                        poursuivre mes études
                        supérieures avec un seul but
                        de dévenir <span style="color: var(--main-bg);">LOAF</span>.
                    </h2>
                </div>
            </div>
            <div class="infos-perso sections">
                <h1 class="title-section">Informations <span>Personnelles</span></h1>
                <div class="contenu">
                    <div class="partie-1">
                        <h2 class="info">Nom: <span class="info-white">MALLE</span></h2>
                        <h2 class="info">Prénom: <span class="info-yellow">Lasseni</span></h2>
                        <h2 class="info">Adresse/Domicile: <span class="info-red">13 Route de saclay</span></h2>
                    </div>
                    <div class="partie-2">
                        <h2 class="info">Email: <span class="info-white"><a
                                    href="mailto:lassenimalle2@gmail.com">lassenimalle2@gmail.com</a></span></h2>
                        <h2 class="info">Tel: <span class="info-yellow"><a
                                    href="tel:+33627606087">0627606087</a></span></h2>
                        <h2 class="info">Code Postal & Ville: <span class="info-red">91120 Palaiseau</span></h2>
                    </div>
                </div>
                <iframe style="width: 100%; align-self: center; height: 80px;" src="reseaux.html"
                    frameborder="0"></iframe>
            </div>
            <div class="cv sections">
                <h1 class="title-section">Mon <span>CV</span></h1>
                <div class="contenu">
                    <div class="partie-1">
                        <h1>Compétences</h1>
                        <div class="une-col">
                            <details open>
                                <summary><h1 class="title" style="display: inline-block;">Comptabilité Générale</h1></summary>
                                <p>Je suis à l'aise avec la comptabilité générale à savoir l'enregistrement comptable, la mise en place d'un bilan et de compte de resultat d'exercice...</p>
                            </details>
                        </div>
                        <div class="une-col">
                            <details>
                                <summary><h1 class="title" style="display: inline-block;">Plan comptable Général</h1></summary>
                                <p>J'ai une bonne maitrise de cet outil à savoir le plan comptable(de la classe 1 à 7).</p>
                            </details>
                        </div>
                        <div class="une-col">
                            <details>
                                <summary><h1 class="title" style="display: inline-block;">Les Liasses Fiscales</h1></summary>
                                <p>Je sais egalement remplir les liasses fiscales.</p>
                            </details>
                        </div>
                    </div>
                    <div class="partie-2">
                        <h1>Expériences</h1>
                        <div class="une-col">
                            <details>
                                <summary>Août 2023 - maintenant<h1 class="title">Stage chez Paris Sud Appart Hotel</h1></summary>
                                <ul>
                                    <li>Enregistrement des opérations comptables courantes</li>
                                    <li>Réalisations du bilan mensuel</li>
                                    <li>Elaboration du compte de resultat mensuel</li>
                                    <li>Calcul et déclaration de la TVA</li>
                                    <li>Calcul et paiement des accomptes de l'impôt sur les sociétés.</li>
                                </ul>
                            </details>
                        </div>
                        <div class="une-col">
                            <details>
                                <summary>Août - Septembre 2022<h1 class="title">Stage chez Paris Sud Appart Hotel</h1></summary>
                                <ul>
                                    <li>Enregistrement des opérations courantes</li>
                                    <li>Calcul et déclaration de la TVA</li>
                                    <li>Archivage des documents comptables sur Google Drive</li>
                                    <li>Gérer les appels téléphoniques en lien avec la comptabilité.</li>
                                </ul>
                            </details>
                        </div>
                    </div>
                </div>
                <h1 id="download-cv"><a href="maquette&cahier-de-charge/ProjetLasseni.pdf"
                        title="Télécharger Mon CV">TELECHARGER Mon CV</a></h1>
            </div>
        </section>
        <section id="formations" class="section">
            <h1 class="title-section">Mes <span class="red-text">Formations</span></h1>
            <p style="color: var(--color-trait); font-size: 1.5em; font-style: italic; font-weight: bold;">Explorez des
                formations sur mesure, conçues pour votre
                succès personnel et professionnel. Ensemble, réalisons
                vos ambitions !</p>

            <div class="les-formations">
                <div class="une-form">
                    <h1 class="date">2019 - 2020</h1>
                    <div class="une-col">
                        <svg width="60" height="32" viewBox="0 0 104 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.39233e-05 0L103.27 19L0 32L8.39233e-05 0Z" fill="#BD3100" />
                        </svg>
                        <h1 class="title">BAC ES</h1>
                        <p class="body">J’ai eu mon BAC Malien en économie
                            avec ...
                        </p>
                    </div>
                </div>

                <div class="une-form">
                    <h1 class="date">2019 - 2020</h1>
                    <div class="une-col">
                        <svg width="60" height="32" viewBox="0 0 104 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.39233e-05 0L103.27 19L0 32L8.39233e-05 0Z" fill="#BD3100" />
                        </svg>
                        <h1 class="title">BAC ES</h1>
                        <p class="body">J’ai eu mon BAC Malien en économie
                            avec ...
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="section">
            <h1 class="title-section">Me <span class="red-text">Contacter</span></h1>
            <div id="profil">
                <img style="width: 100px; height: 100px; border-radius: 100%; object-fit: cover;" src="img/il-code.jpg" alt="Ma photo">
            </div>
            <div class="container">
                <div class="send-mail">
                    <h1>Envoyez-moi un mail</h1>
                    <form action="acceuil.php" method="post">
                        <div class="group-nom">
                            <input type="text" placeholder="Nom" name="nom">
                            <input type="text" name="prenom" placeholder="Prénom">
                        </div>
                        <input type="email" name="email" placeholder="E-Mail">
                        <textarea style="width: 100%;" name="msg"cols="30" rows="10" placeholder="Message"></textarea>
                        <input type="submit" value="Envoyer" name="sendForm">
                    </form>
                </div>
                <div class="contact-info">
                    <h1>Contact Infos</h1>
                    <p style="color: var(--my-grey); font-weight: bold;">Je suis toujours disponible pour travailler en
                        alternance si la bonne occasion se présente, N'hésitez
                        pas à me contacter !</p>
                        <h1>
                            <img class="icon-menu en" src="img/homme-daffaire.png" alt="Ma photo">
                            Lasseni MALLE
                        </h1>
                        <h1>
                            <img class="icon-menu en" src="img/contact-us.png" alt="Ma photo">
                            0627606087
                        </h1>
                        <h1>
                            <img class="icon-menu en" src="./img/homme-daffaire.png" alt="Ma photo">
                            <a href="mailto:lassenimalle2@gmail.com"></a>lassenimalle2@gmail.com
                        </h1>
                </div>
                <iframe style="width: 100%; align-self: center; height: 120px;" src="reseaux.html"
                    frameborder="0"></iframe>
            </div>
        </section>
    </main>
</body>

</html>
