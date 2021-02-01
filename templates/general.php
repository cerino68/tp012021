<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul class="menu">
            <li><a href="index.php?route=showAcceuil">Accueil</a></li>
            <li><a href="index.php?route=showEspacemembre">espace membres</a></li>
            <li><a href="index.php?route=showPage2">Page2</a></li>
            <li><a href="index.php?route=showEspaceconseiller">espace conseiller</a></li>
            <li><a href="index.php?route=showFormulaire">Connectez vous.</a></li>
        </ul>
    </nav>
    <?php
    //var_dump($infos);
    require_once "templates/".$infos["template"];
    ?>
    <footer class="footer">
        <div>
            <nav>
                <ul class="menu">
                    <li><a href="index.php?route=showAcceuil">Accueil</a></li>
                    <li><a href="index.php?route=showEspacemembre">espace membres</a></li>
                    <li><a href="index.php?route=showPage2">Page2</a></li>
                    <li><a href="index.php?route=showEspaceconseiller">espace conseiller</a></li>
                    <li><a href="index.php?route=showFormulaire">Connectez vous.</a></li>
                </ul>
            </nav>
        </div>
    </footer>

</body>
</html>