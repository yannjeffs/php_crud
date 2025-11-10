<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Système d'enrolement</title>
</head>

<body>
    <div class="container">
        <?php include("header.php"); ?>
        <main class="mt-2">
            <div class="row">
                <div class="col">
                    <h1 class="mt-2">Welcome to our <span>CDWFS - IUC enrolment platform</span></h1>
                    <p class="mt-2">Les vidéos vous permettent de faire passer votre message de façon convaincante.
                        Quand vous
                        cliquez sur Vidéo en ligne, vous pouvez coller le code incorporé de la vidéo que vous souhaitez
                        ajouter. Vous pouvez également taper un mot-clé pour rechercher en ligne la vidéo qui convient
                        le mieux à votre document.
                    </p>
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-success">First year</a>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-success">Third year</a>
                        </div>
                    </div>
                    <p class="mt-2">
                        La lecture est également simplifiée grâce au nouveau mode Lecture. Vous pouvez réduire certaines
                        parties du document et vous concentrer sur le texte désiré. Si vous devez stopper la lecture
                        avant d’atteindre la fin de votre document, Word garde en mémoire l’endroit où vous avez arrêté
                        la lecture, même sur un autre appareil.
                    </p>
                </div>
                <div class="col">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./images/suzuki-ciaz-2019.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/toyota-camry-2016.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/2022-Honda-CRV.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </main>
        <?php include("footer.php"); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>