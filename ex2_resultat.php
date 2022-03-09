<!DOCTYPE html>
<html>
    <head>
        <title>
            TP 4 Exos PHP Objet
        </title>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">TP 4 Exos PHP Objet</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="ex1_saisie.php">Ex1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Ex2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Ex3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Ex4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <body>
        <div class="container-sm">
            <?php
                include('ex2_produit.php');
                $nom = $_GET['nom'];
                $prix = $_GET['prix'];
                echo "<br><h3>Ajout produit : ".$nom."</h3><br>";
            
                $produit = new Produit(0,$nom,$prix);
                echo 'Le code du produit : '.$produit-> GetCode().'<br>';  
                echo 'Le nom du produit : '.$produit-> GetNom().'<br>';
                echo 'Le prix du produit : '.$produit-> GetPrix().'<br>';
            ?>
            <br>
            <button type="button" class="btn btn-secondary" onclick="history.back()">Retour</button>
        </div>
    </body>
</html>