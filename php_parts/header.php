<!DOCTYPE html>
<?php

require_once("php_functions/reponsesTables.php");

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
    <title>TP php</title>
</head>




<body class="container pt-5">


    <header>

        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tableau.php?table=articles">voir tous les articles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tableau.php?table=clients">voir les clients</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tableau.php?table=commandes">voir les commandes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tableau.php?table=fournisseurs">voir les fournisseurs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tableau.php?table=magasins">voir les magasins</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
            <!-- Jumbotron -->
            <div class="p-5 text-center bg-secondary">
                <h1 class="mb-3">TP php/sql</h1>
                <p class="mb-3">
                    A l’aide du PHP, créez :
                <ul>
                    <li>
                        - 1 page pour afficher les articles sous forme de tableau bootstrap
                    </li>
                    <li>
                        - 1 page pour afficher les clients sous forme de tableau bootstrap
                    </li>
                    <li>
                        - 1 page pour afficher les commandes sous forme de tableau bootstrap
                    </li>
                    <li>
                        - 1 page pour afficher les fournisseurs sous forme de tableau bootstrap
                    </li>
                    <li>
                        - 1 page pour afficher les magasins sous forme de tableau bootstrap
                    </li>
                </ul>
                </p>
            </div>
            <!-- Jumbotron -->
    </header>