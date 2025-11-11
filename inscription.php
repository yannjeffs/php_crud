<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Inscription</title>
</head>

<body>
    <div class="container">
        <?php include "header.php"; ?>
        <main>
            <h2 class="alert alert-info text-center">Formulaire d'enrolement</h2>
            <form method="post" action="traitement.php" class="w-50 m-auto">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="last_name" id="floatingInput" placeholder="Atangana"
                        required>
                    <label for="floatingInput">Last name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="first_name" id="floatingPrenom" placeholder="Paul"
                        required>
                    <label for="floatingPrenom">First name</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="sexe" id="floatingSexe" class="form-select" required>
                        <option value="" selected disabled></option>
                        <option value="Masculin">Masculin</option>
                        <option value="Feminin">Féminin</option>
                    </select>
                    <label for="floatingSexe">Sexe</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="1234@"
                        required>
                    <label for="floatingEmail">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingPassowrd" placeholder="****"
                        required>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-4">
                        <input type="reset" value="Reinitialiser" class="btn btn-danger">
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4">
                        <input type="submit" name="action" value="S'enroler" class="btn btn-success">
                    </div>
                </div>
            </form>
        </main>
        <?php include "footer.php"; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>