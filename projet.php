<!DOCTYPE html>
<html lang="fr">


<?php
if (isset($_GET["id"])) {
    $projetId = $_GET["id"];

    $lecteur = new SplFileObject("./php/projets.csv", 'r');
    while ($lecteur->eof() == false) {
        $ligne = $lecteur->fgets();

        if ($ligne != "") {
            $tabprojet = explode(";", $ligne);

            if ($projetId == $tabprojet[0]) {
                $projetExiste = true;
                $nomprojet = $tabprojet[1];
                $titre1 = $tabprojet[2];
                $titre2 = $tabprojet[3];
                $descriptionprojet1 = $tabprojet[4];
                $descriptionprojet2 = $tabprojet[5];
                $imgprojet1 = $tabprojet[6];
                $imgprojet2 = $tabprojet[7];
                $imgprojet3 = $tabprojet[8];
                $altimgprojet1 = $tabprojet[9];
                $altimgprojet2 = $tabprojet[10];
                $altimgprojet3 = $tabprojet[11];
                $speprojet1 = $tabprojet[12];
                $speprojet2 = $tabprojet[13];
                $speprojet3 = $tabprojet[14];

                $pagedroite = $projetId - 1;
                $pagegauche = $projetId + 1;



?>

                <head>
                    <meta charset="UTF-8">
                    <title><?php echo ($nomprojet); ?> / Ewan QUELO</title>
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

                    <header class="projet-header">
                        <h1 class="haut-page-projet"><?php echo ($nomprojet); ?></h1>
                        <img src="<?php echo ($imgprojet1); ?>" alt="<?php echo ($altimgprojet1); ?>" class="header-image-projet">
                    </header>

                    <nav class="nav-projet">
                        <a href="projet.php?id=<?php echo ($pagegauche); ?>"><img src="./images/arrow-left.svg" alt="projet précédent" class="fleche gauche"></a>
                        <ul class="nav-index">
                            <li class="boutton-projet">
                                <a href="index.php#projets">Retour Galerie</a>
                            </li>
                        </ul>

                        <a href="projet.php?id=<?php echo ($pagedroite); ?>"><img src="./images/arrow-right.svg" alt="projet suivant" class="fleche droite"></a>
                    </nav>

                    <a href="#" class="retourpage">
                        <img src="./images/back-top.svg" alt="bouton retour en haut de la page">
                    </a>

                    <main>
                        <section class="descriptionprojet">
                            <div class="partiegauche">
                                <img src="<?php echo ($imgprojet2); ?>" alt="<?php echo ($altimgprojet2); ?>" class="image-projet-desc">
                            </div>
                            <div class="partiedroite">
                                <h2><?php echo ($titre1); ?></h2>
                                <div class="special-images">
                                    <a class="image-spe-projet"><img src="<?php echo ($speprojet1) ?>" alt="" width="60" height="60"></a>
                                    <a class="image-spe-projet"><img src="<?php echo ($speprojet2) ?>" alt="" width="60" height="60"></a>
                                    <a class="image-spe-projet"><img src="<?php echo ($speprojet3) ?>" alt="" width="60" height="60"></a>
                                </div>
                                <p class="dropshadow"><?php echo ($descriptionprojet1); ?></p>
                            </div>
                        </section>

                        <section class="descriptionprojet">
                            <div class="partiegauche">
                                <h2><?php echo ($titre2); ?></h2>
                                <p class="dropshadow"><?php echo ($descriptionprojet2); ?></p>
                            </div>
                            <div class="partiedroite">
                                <img src="<?php echo ($imgprojet3); ?>" alt="<?php echo ($altimgprojet3); ?>" class="image-projet-desc">
                            </div>
                        </section>



        <?php
                break;
            }
        }
    }

    $lecteur = null;
    // va verif si 
    if (!$projetExiste) {
        header("Location: index.php#projets");
        exit();
    }
}
        ?>
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