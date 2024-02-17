<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ewan QUELO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="voici le portfolio D'Ewan Quélo étudiant en MMI en première à l'IUT de Laval.">
    <link rel="shortcut icon" href="/images/Equ.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <!-- META -->
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://perso.univ-lemans.fr/~i2300634/Site-FINAL/index.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Ewan QUELO">
    <meta property="og:description" content="voici le portfolio D'Ewan Quélo étudiant en MMI en première à l'IUT de Laval.">
    <meta property="og:image" content="./images/projets/earth-bg.webp">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="perso.univ-lemans.fr">
    <meta property="twitter:url" content="https://perso.univ-lemans.fr/~i2300634/Site-FINAL/index.php">
    <meta name="twitter:title" content="Ewan QUELO">
    <meta name="twitter:description" content="voici le portfolio D'Ewan Quélo étudiant en MMI en première à l'IUT de Laval.">
    <meta name="twitter:image" content="./images/projets/earth-bg.webp">

    <!-- police pages -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Sketch&family=Moirai+One&family=Nova+Square&display=swap" rel="stylesheet">

</head>

<body>

    <header class="index-header">
        <h1 class="titre-page">Ewan Quelo</h1>
    </header>

    <nav class="nav-index">
        <ul class="navigation">
            <li class="boutton">
                <a href="#description">Présentation</a>
            </li>
            <li class="boutton">
                <a href="#projets">Projets</a>
            </li>
            <li class="boutton">
                <ul><a>Plus▼</a>
                    <li class="boutton"><a href="#competences">Compétences</a></li>
                    <li class="boutton"><a href="#pointsfort">Points fort</a></li>
                    <li class="boutton"><a href="#parcours">Parcours</a></li>
                    <!-- <li class="boutton"><a href="projet.php">test3</a></li> -->
                </ul>
            </li>

            <!-- <li class="boutton">

                <a href="#competences">Compétences ▼</a>

            </li> -->
            <li class="boutton">
                <a href="#contact">Contact</a>
            </li>
        </ul>

    </nav>

    <!-- image de devanture  -->
    <div class="fonds"></div>
    <!-- incitation scroll -->
    <p class="fleche-anim bounce">▼</p>
    <!-- RETOUR PAGE HAUT -->
    <a class="retourpage" href="#">
        <img src="./images/back-top.svg" alt="boutton retour en haut de la page">
    </a>

    <main>
        <section class="description" id="description">
            <img src="./images/portrait.webp" alt="Photo d'Ewan Quélo" class="portrait1">
            <div>
                <h2> A propos de moi</h2>
                <p class="dropshadow"> Passionné par les domaines de l'<strong>informatique</strong>,
                    de l'<strong>audiovisuel</strong> et du monde du <strong>divertissement</strong> depuis petit j'essaie
                    de découvrir ses différents domaines et leurs différentes facettes à
                    travers divers projets. Je suis actuellement en première année de BUT
                    <strong>Métiers du Multimédia et de l'Internet</strong> à Laval où je développe mes diverses connaissances. </p>
            </div>

        </section>



        <section class="projets" id="projets">
            <h2>Projets</h2>
            <input type="radio" id="all" name="button" checked>
            <input type="radio" id="photo" name="button">
            <input type="radio" id="video" name="button">
            <input type="radio" id="troisd" name="button">
            <input type="radio" id="dev" name="button">

            <label class="style-bouton-projet all" for="all">Tout</label>
            <label class="style-bouton-projet selection1" for="photo">Photos</label>
            <label class="style-bouton-projet selection2" for="video">Vidéos</label>
            <label class="style-bouton-projet selection4" for="troisd">Graphisme</label>
            <label class="style-bouton-projet selection3" for="dev">Dev</label>
            <!-- <label class="style-bouton-projet " for="">Javascript</label> -->

            <div class="images">
                <!--classe possible: photo; video; dev; troisd-->

                <?php
                $lecteur = new SplFileObject("./php/projets-galerie.csv", 'r');
                while ($lecteur->eof() == false) {
                    $ligne = $lecteur->fgets();
                    if ($ligne != "") {
                        $tab = explode(";", $ligne);
                        $nomprojet = $tab[0]; // nom du projet
                        $altprojet = $tab[1]; // alt du projet
                        $cheminimageprojet = $tab[2]; // lien vers l'img du projet
                        $classprojet = $tab[3]; // catégorie du projet
                        $texteprojet = $tab[4]; // texte descriptif du projet
                        $hrefprojet = $tab[5]; // href du projet
                        $textrougeprojet = $tab[6]; // texte rouge supplémentaire
                        $textrougeounonprojet = $tab[7]; // oui ou non texte rouge
                        $chemin = $tab[8]; // A UTILISER SI JE VEUX UN STICKERS
                        $stickeralt = $tab[9];  // A UTILISER SI JE VEUX UN STICKERS

                ?>

                        <div class="<?php echo ($classprojet) ?>">
                            <a href="<?php echo ($hrefprojet) ?>"><img class="dev" src="<?php echo ($cheminimageprojet) ?>" alt="<?php echo ($altprojet) ?>"></a>
                            <img class="sticker" src="<?php echo ($chemin) ?>" alt="<?php echo ($stickeralt) ?>">
                            <p class="titre-projet"><?php echo ($nomprojet) ?></p>
                            <p class="explication-projet"><?php echo ($texteprojet) ?></p>
                            <p class="<?php echo ($textrougeounonprojet) ?>"><?php echo ($textrougeprojet) ?></p>
                        </div>
                <?php
                    }
                }
                $lecteur = null;
                ?>

            </div>
        </section>




        <section>
            <section class="competences" id="competences">
                <h2>Compétences</h2>
                <div class="colonne">
                    <?php
                    $lecteur = new SplFileObject("./php/competence.csv", 'r');
                    while ($lecteur->eof() == false) {
                        $ligne = $lecteur->fgets();
                        if ($ligne != "") {
                            $tab = explode(";", $ligne);
                            $nomcompetence = $tab[0];
                            $altcompetence = $tab[1];
                            $niveaucompetence = $tab[2];
                            $cheminimagecompetence = $tab[3];
                    ?>
                            <article class="">
                                <img src="<?php echo ($cheminimagecompetence) ?>" alt="<?php echo ($altcompetence) ?>">
                                <h5><?php echo ($niveaucompetence) ?></h5> <!-- REMETTRE EN P SUR PROBLEME MISE EN PAgES -->
                            </article>
                    <?php
                        }
                    }
                    $lecteur = null;
                    ?>
                </div>
            </section>


            <section class="pointsfort" id="pointsfort">
                <h2>Points fort / Points faible</h2>

                <div class="ligne-point">
                    <?php
                    $lecteur = new SplFileObject("./php/pointfort.csv", 'r');
                    while ($lecteur->eof() == false) {
                        $ligne = $lecteur->fgets();
                        if ($ligne != "") {
                            $tab = explode(";", $ligne);
                            $nompointfort = $tab[0];
                    ?>
                            <p class="point-fort"><?php echo ($nompointfort) ?></p>
                    <?php
                        }
                    }
                    $lecteur = null;
                    ?>

                </div>

                <div class="ligne-point">
                    <?php
                    $lecteur = new SplFileObject("./php/pointfaible.csv", 'r');
                    while ($lecteur->eof() == false) {
                        $ligne = $lecteur->fgets();
                        if ($ligne != "") {
                            $tab = explode(";", $ligne);
                            $nompointfaible = $tab[0];
                    ?>

                            <p class="point-faible"><?php echo ($nompointfaible) ?></p>
                    <?php
                        }
                    }
                    $lecteur = null;
                    ?>
                </div>
            </section>

            <section class="parcours" id="parcours">
                <h2>Parcours</h2>
                <section>
                    <div class="timeline">
                        <div class="timeline-vide"> <!-- NE PAS ENLEVER sert a faire espace vide-->
                        </div>

                        <div class="timeline-ligne">
                            <div class="timeline-rond"></div>
                        </div>
                        <div class="timeline-compossant timeline-contenu">
                            <h4>2023-2026</h4>
                            <p>BUT MMI</p>
                            <i>➤ IUT de Laval</i>
                        </div>
                        <div class="timeline-compossant timeline-contenu">
                            <h4>2022</h4>
                            <p>Stage agence evenementielle</p>
                            <p> </p>
                            <i>➤ Venansault</i>
                        </div>

                        <div class="timeline-ligne">
                            <div class="timeline-rond"></div>
                        </div>
                        <div class="timeline-vide"> <!-- NE PAS ENLEVER sert a faire espace vide-->
                        </div>

                        <div class="timeline-vide"> <!-- NE PAS ENLEVER sert a faire espace vide-->
                        </div>

                        <div class="timeline-ligne">
                            <div class="timeline-rond"></div>
                        </div>
                        <div class="timeline-compossant timeline-contenu">
                            <h4>2022-2023</h4>
                            <p>Bac STMG spécialité Gestion Finance</p>
                            <p>Mention Bien</p>
                            <i>➤ Lycée Jeanne d'Arc Montaigu</i>
                        </div>
                        <div class=" timeline-compossant timeline-contenu">
                            <h4>2020</h4>
                            <p>Brevet des collèges</p>
                            <i>➤ Collège Jules Ferry Montaigu</i>
                        </div>
                        <div class="timeline-ligne">
                            <div class="timeline-rond"></div>
                        </div>
                        <div class="timeline-vide"> <!-- NE PAS ENLEVER sert a faire espace vide-->
                        </div>

                        <div class="timeline-vide"> <!-- NE PAS ENLEVER sert a faire espace vide-->
                        </div>

                        <div class="timeline-ligne">
                            <div class="timeline-rond"></div>
                        </div>
                        <div class=" timeline-compossant timeline-contenu">
                            <h4>2020</h4>
                            <p>Stage régisseur dans un théâtre</p>
                            <i>➤ Théâtre de Thalie Montaigu</i>
                        </div>



                    </div>
                </section>
            </section>
        </section>





    </main>
    <footer>
        <section class="contact width-footer" id="contact">
            <h2 class="topfloat">Contact</h2>
            <div class="width-footer">
                <fieldset class="floatgauche">
                    <h3 class="titrecontact">Réseaux sociaux</h3>
                    <?php
                    $lecteur = new SplFileObject("./php/reseaux.csv", 'r');
                    while ($lecteur->eof() == false) {
                        $ligne = $lecteur->fgets();
                        if ($ligne != "") {
                            $tab = explode(";", $ligne);
                            $nomcompetence = $tab[0];
                            $altreseaux = $tab[1];
                            $cheminreseaux = $tab[2];
                            $hrefreseaux = $tab[3];
                    ?>
                            <a class="image-reseaux" href="<?php echo ($hrefreseaux) ?>"><img src="<?php echo ($cheminreseaux) ?>" alt="<?php echo ($altreseaux) ?>" width="50" height="50"></a>
                    <?php
                        }
                    }
                    $lecteur = null;
                    ?>

                    <h3 class="titrecontact">Cordonnées</h3>

                    <a href="tel:+330637671910" class="image-reseaux"><img src="./images/reseaux/phone-icon.svg" alt="Lien pour m'appeller" width="80" height="80"></a>
                    <a href="mailto:ewanquelo0211@gmail.com"><img src="./images/reseaux/gmail-icon.svg" alt="Lien vers mon gmail" width="80" height="80"></a>

                </fieldset>

                <fieldset class="floatdroit">
                    <form action="./index.php#contact" method="get">
                        <?php
                        ini_set('display_errors', 1);
                        error_reporting(E_ALL);
                        // header("Content-type: text/plain; charset=utf-8");

                        if (isset($_GET["nom"]) && isset($_GET["adresseMail"])) { // prendre l'attribut name=""
                            if ($_GET["nom"] != ""  && $_GET["adresseMail"] != "") {



                                // PAS TOUCHE LA MOUCHE
                                require(__DIR__ . "/src/PHPMailer.php"); // Ajoute le fichier contenant le code de la classe PHPMailer
                                require(__DIR__ . "/src/SMTP.php"); // le code de la classe SMTP
                                require(__DIR__ . "/src/Exception.php"); // le code de la classe Exception
                                $mail = new PHPMailer\PHPMailer\PHPMailer();
                                // Configuration du serveur SMTP
                                $mail->SMTPDebug = 0; // Active/désactive les messages de mise au point
                                $mail->isSMTP(); // Utilise le protocole SMTP
                                $mail->Host = "smtp.gmail.com"; // Configure le nom du serveur SMTP
                                $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS; // Active le cryptage sécurisé TLS
                                $mail->Port = 465; // Configure le numéro de port
                                $mail->SMTPAuth = true; // Active le mode authentification
                                $mail->Username = "ewanquelo.contact@gmail.com"; // Identifiant du compte SMTP
                                $mail->Password = "pmna qdpi ydho nqvb"; // Mot de passe du compte SMTP

                                // Destinataires
                                $mail->setFrom("ewanquelo.contact@gmail.com", "Contact QUELO Ewan");    // Mailler 
                                $mail->addAddress("ewanquelo.contact@gmail.com", "Ewan Quélo"); // Ajout du destinataire
                                $mail->addAddress($_GET["adresseMail"], $_GET["nom"]); // Ajout du destinataire
                                // Contenu du mail
                                $mail->isHTML(true);
                                $mail->Subject = "Prise de contact";
                                $mail->Body = "Merci " . $_GET["nom"] . " de m'avoir contacté. Je vous recontacte dès que possible." . "\n Votre message est le suivant : " . $_GET["zonetexte"];
                                $mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
                                if ($mail->send() != false) {
                                    echo ("Un Email vous a été envoyé en attente d'une réponse de ma part.\n");
                                } else {
                                    echo ("Le message n'a pas pu être envoyé.\n");
                                    echo ("Mailer Error: " . $mail->ErrorInfo);
                                }
                                echo ("votre nom qui nous a été transmis est " . $_GET["nom"] . "\n");
                                echo (" et votre adresse mail est " . $_GET["adresseMail"]);
                            } else {
                                // header("location: index.php");
                            }
                        } else {
                            // header("location: index.php");
                        }
                        ?>

                        <p class="titrecontact">Formulaire de contact</p>

                        <div>
                            <label for="id_nom">Nom :</label>
                            <input id="id_nom" type="text" name="nom" required placeholder="Nom / Prénom">
                        </div>

                        <div>
                            <label for="id_email">Email :</label>
                            <input id="id_email" type="email" name="adresseMail" required placeholder="example@mail.com" />

                        </div>

                        <div>
                            <label for="id_message">Votre message :</label>
                            <textarea id="id_message" name="zonetexte" class="message" rows="4" cols="50" minlength="10" required placeholder="Je vous contacte pour..."></textarea>
                        </div>

                        <input type="submit" class="boutonenvoie" value="ENVOYER">
                    </form>
                </fieldset>
            </div>


            <p></p>
        </section>
        <p class="cc">
            Réalisé par Ewan QUELO, tout droits réservés.
        </p>
    </footer>
</body>

</html>