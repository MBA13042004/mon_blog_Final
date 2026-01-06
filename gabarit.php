<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $titre ?></title>

    <!-- CSS du template -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">


    
</head>

<body class="is-preload">

<div id="wrapper">

    <!-- HEADER DU TEMPLATE -->
    <header id="header">
        <div class="inner">

            <!-- LOGO -->
            <a href="index.php" class="logo">
              <span class="symbol">
               <img src="images/logo2.jpg" alt="Logo" class="Img">
              </span>
              <span class="title">Mon Final Blog </span>
            </a>




            <!-- NAV MENU ICON -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- MENU LATÉRAL -->
    <nav id="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="index.php?action=accueil">Accueil</a></li>
            <li><a href="index.php?action=blog">Blog</a></li>
            <li><a href="index.php?action=article">Article</a></li>
            <li><a href="index.php?action=auteur">Auteur</a></li>
            <li><a href="index.php?action=team">Team</a></li>
            <li><a href="index.php?action=about">about</a></li>
            
        </ul>
    </nav>

    <!-- CONTENU DYNAMIQUE DU MVC -->
    <div id="main">
        <div class="inner">

            <!-- Ici s'insère le contenu spécifique à chaque vue -->
            <?= $contenu ?>

        </div>
    </div>

    <!-- FOOTER DU TEMPLATE -->
    <footer id="footer">
        <div class="inner">

            <section>
                <h2>Contact Us</h2>
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <input type="text" name="name" placeholder="Nom" />
                        </div>

                        <div class="field half">
                            <input type="email" name="email" placeholder="Email" />
                        </div>

                        <div class="field">
                            <input type="text" name="subject" placeholder="Sujet" />
                        </div>

                        <div class="field">
                            <textarea name="message" rows="3" placeholder="Message"></textarea>
                        </div>

                        <div class="field text-right">
                            <ul class="actions">
                                <li><input type="submit" value="Envoyer" class="primary" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>

            <section>
                <h2>Informations</h2>
                <ul class="alt">
                    <li><span class="fa fa-envelope-o"></span> mossabbenabdellah7@gmail.com</li>
                    <li><span class="fa fa-phone"></span> +212 602504704</li>
                    <li><span class="fa fa-map-pin"></span> Hay Lalla Chafia Rue:7 Num:4, Maroc</li>
                </ul>

                <h2>Suivez-nous</h2>
                <!--ca travaille car nous avons importer awesone 6 dernier version ici importation ici -->
                <ul class="icons">
                    <li><a href="https://x.com/" class="fa-brands fa-x-twitter"></a></li>
                    <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                    <li><a href="https://www.instagram.com/" class="fa-brands fa-instagram"></a></li>
                    <li><a href="https://www.linkedin.com/in/mosab-ben-abdellah-b6b7052b9/" class="fa-brands fa-linkedin-in"></a></li>
                </ul>
            </section>
             <!--pour écrire l'année automatiquement -->
            <ul class="copyright">
                 <li>&copy; <?php echo date("Y"); ?> - Mon Blog</li>
            </ul>


        </div>
    </footer>

</div>

<!-- SCRIPTS TEMPLATE -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
