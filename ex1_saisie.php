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
                            <a class="nav-link active" aria-current="page" href="ex1_saisie.php">Ex1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ex2_saisie.php">Ex2</a>
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
        <br>
        <h3>Ajout produit</h3>
        <br>
        <form action=ex1_resultat.php method=GET>
            <div class="mb-3">
                <label for="exampleTextInput" class="form-label">Produit</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label for="exampleNumberInput" class="form-label">Prix</label>
                <input type="number" class="form-control" name="prix">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
    </div>
    </body>
</html>