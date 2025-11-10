<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <title>Data List</title>
    <script>
        function loadForm(student) {
            var modal = new bootstrap.Modal(document.getElementById('editModal'));
            modal.show();
            document.getElementById("id").value = student.id;
            document.getElementById("last_name").value = student.last_name;
            document.getElementById("first_name").value = student.first_name;
            document.getElementById("sexe").value = student.sexe;
            document.getElementById("email").value = student.email;
        }
    </script>
</head>

<body>
    <?php include "header.php"; ?>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="traitement.php" method="post">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white">Modifier un étudiant</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3 row">
                            <label for="last_name" class="col-sm-3 col-form-label">Last name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Exp: Atangana" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="first_name" class="col-sm-3 col-form-label">First name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Exp: Leaticia">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="sexe" class="col-sm-3 col-form-label">Sexe</label>
                            <div class="col-sm-9" required>
                                <select name="sexe" id="sexe" class="form-select">
                                    <option value="Masculin">Masculin</option>
                                    <option value="Féminin">Feminin</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2 row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Exp: azercvdvvd@yahoo.fr">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Modifier" name="modifier">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--- Table displaying the list of students -->
    <div class="table-responsive mt-4">
        <table class="table table-primary table-bordered table-hover border-secondary col-md-40 auto">
            <tr class="text-center">
                <th>id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php
            require_once "config.php";
            $sql = "SELECT id, last_name, first_name, sexe, email FROM students";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($students as $student) {
                ?>
                <tr>
                    <td><?php echo $student["id"]; ?> </td>
                    <td><?php echo $student["last_name"]; ?></td>
                    <td><?php echo $student["first_name"]; ?></td>
                    <td><?php echo $student["sexe"]; ?> </td>
                    <td><?php echo $student["email"]; ?></td>
                    <td class="text-center">
                        <a href="traitement.php?set=del&id=<?php echo $student["id"] ?>" class="btn btn-outline-danger"
                            title="Supprimer">
                            <i class="bi-x-circle-fill"></i>
                        </a>
                        <button onclick='loadForm(<?php echo json_encode($student) ?>)' class="btn btn-outline-success"
                            title="Modifier">
                            <i class="bi bi-pencil-fill"></i>
                        </button>
                    </td>
                </tr>
            <?php } ?>
            <tr>
        </table>
    </div>

    <?php include "footer.php"; ?>
</body>

</html>