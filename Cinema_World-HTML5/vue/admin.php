<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Zhi+Mang+Xing&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/parametre_design.css">
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <title>Parametre</title>
</head>
<body>

    <header class="container-fluid header">
        <div class="container-fluid">
            <div class="title"><a href="###"></a></div>
            <div class="pseudo">

            </div>
        </div>
    </header>



    <section class="menu">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mon Compte</h5>
                    <div class="text">
                    <p class="card-text"><div class="nom">
                    <?php
                    $a = new Manager();
                    $d = $a->admin($_SESSION['id']);
                    foreach ($d as $value) {
                                         echo "id : ".$value['id']." "."mail : ".$value['mail']." "."mdp : ".$value['mdp']." "."num : ".$value['num'].  " ";
                                     }

?>
                    

                </div>
                </div>
                </div>
            </div>

        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mes Réservations</h5>
                <p class="card-text">
                <i class="fas fa-pizza-slice"></i><br>

                    <?php
                    $a = new Manager();
                    $r = $a->reserv($_SESSION['id']);
                    foreach ($r as $value) {
   echo "id : ".$value['id']." "."nom : ".$value['nom']." "."film : ".$value['film']." "."nb_place : ".$value['nb_place'].  " "."3D : ".$value['3D']." ";
                                     }

            ?>
            <br><i class="fas fa-pizza-slice"></i></p>
            </div>
            </div>
        </div>
    </div>
    </section>

</body>
</html>
