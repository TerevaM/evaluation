<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.2/quartz/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="utils/style.css">
    <title>Overwatch</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-2">

                <button class="navbar-toggler pl-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>           
                <!-- logo overwatch -->
                <a href="#" class="nav-link">
                    <img src="utils/pictures/logo.png" style="width:50px" alt="Responsive image">
                </a>
                <div class="container-fluid">



                <div class="collapse navbar-collapse" id="navbarColor01">

                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= URL ?>accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL?>heros">Héros</a>
                        </li>
                    </ul>
                </div>

            </div>
            <a href="#" class="nav-link collapse navbar-collapse" id="navbarColor01">
                <img src="utils/pictures/user.png" style="width:35px" alt="Responsive image">
            <p class="collapse navbar-collapse">Compte</p>    
            </a>
                
        </nav>
    </header>

    <main>
            <?= $content;
            ?>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>