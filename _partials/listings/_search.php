<?php


var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $type_transaction = $_POST['type_transaction'];
    $type_logement = $_POST['type_logement'];
    $rooms = $_POST['rooms'];
    $bedrooms = $_POST['bedrooms'];
    $price = $_POST['price'];
    $city = $_POST['city'];
    $surface = $_POST['surface'];

     if (empty($type_transaction) || empty($type_logement) || empty($rooms) || empty($bedrooms) || empty($price) || empty($city) || empty($surface)) {
        echo 'Veuillez remplir tous les champs';
    } else {
        echo 'Merci pour votre envoi';
    }
}
?>

<div class="form">
    <h2>Formulaire de Recherche Immobilière</h2>
    <form method="POST">

    <label for="type_transaction">Type de transaction :</label><br>
        <select id="type_transaction" name="type_transaction">
            <option value="sale">sale</option>
            <option value="rent">rent</option>
        </select><br>

    <label for="type_logement">Type de logement :</label><br>
        <select id="type_logement" name="type_logement">
            <option value="apartment">Apartment</option>
            <option value="house">House</option>
        </select><br>

        <label for="rooms">Number rooms :</label><br>
        <input type="number" id="rooms" name="rooms" required><br>

        <label for="bedrooms">Number bedrooms :</label><br>
        <input type="number" id="bedrooms" name="bedrooms" required><br>

        <label for="surface">Surface (m²) :</label><br>
        <input type="number" id="surface" name="surface" required><br>

        <label for="city">City :</label><br>
        <input type="text" id="city" name="city" required><br>

        <label for="price">Price ($) :</label><br>
        <input type="number" id="price" name="price" required><br>

        <input type="submit" value="Send">
    </form>
    </div>