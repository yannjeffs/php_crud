<?php
require_once "config.php";

if (isset($_POST["action"]))
    try {
        //préparation des données reçues du formulaire
        $lastName = $_POST['last_name'];
        $firstName = $_POST['first_name'];
        $sexe = $_POST['sexe'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        //insertion des données dans la table students
        $sql = "INSERT INTO students VALUES ('', :last_name, :first_name, :sexe, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':sexe', $sexe);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        header("Location: index.php");

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

if (isset($_POST["modifier"])) {
    try {
        $id = $_POST["id"];
        $lastName = $_POST["last_name"];
        $firstName = $_POST["first_name"];
        $sexe = $_POST["sexe"];
        $email = $_POST["email"];

        $sql = "UPDATE students SET last_name = :last_name, first_name = :first_name, sexe = :sexe, email = :email WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':sexe', $sexe);
        $stmt->bindParam(':email', $email);

        $stmt->execute();

        header("Location: listing.php");
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

if (isset($_GET["set"])) {
    if ($_GET["set"] == "del") {
        $id = $_GET["id"];
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":id" => $id
        ]);
        header("Location:listing.php");
    }
}
?>