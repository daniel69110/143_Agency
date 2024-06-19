  <?php 
// Démarre ou reprend une session existante. Ceci est nécessaire pour accéder aux variables de session.
session_start();

// Vérifie si l'utilisateur est déjà connecté. Si non, redirige vers la page de connexion.
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirection vers login.php si aucun utilisateur n'est connecté
    exit; // Arrête l'exécution du script après la redirection pour sécuriser l'app
}

// Récupération des commentaires stockés en session. Utilise un tableau vide comme valeur par défaut si 'comments' n'est pas encore défini.
$comments = $_SESSION['comments'] ?? [];

// Vérification si la requête est de type POST et que le champ 'comment' n'est pas vide
// if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['comment'])) {
//     // Ajout du commentaire dans la session. Chaque commentaire est un tableau associatif contenant le nom d'utilisateur et le commentaire.
//     $_SESSION['comments'][] = ['user' => $_SESSION['username'], 'comment' => $_POST['comment']]; // Stockage du commentaire avec le nom d'utilisateur associé

//     // Redirection vers comments.php pour éviter le rechargement du formulaire et la soumission multiple du même commentaire
//     header('Location: ../login.php');
//     exit; // Arrête l'exécution du script après la redirection
// }
// ?> 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Créer un tableau pour stocker les données du formulaire
    $annonce = array(
        "title" => $_POST["title"],
        "transaction" => $_POST["transaction"],
        "price" => $_POST["price"],
        "category" => $_POST["category"],
        "rooms" => $_POST["rooms"],
        "bedrooms" => $_POST["bedrooms"],
        "area" => $_POST["area"],
        "city" => $_POST["city"],
        "img" => $_FILES["fileUpload"]
    
        
    );
    

    $_SESSION['properties']['house'][] = $annonce;
}


?>

<?php
 if ( $_SERVER["REQUEST_METHOD"] == "POST"){
     if (isset($_FILES['fileUpload'])&& $_FILES['fileUpload']['error'] ==0){
        $allowed = ['jpg', 'jpeg' , 'png', 'gif'];
         $filename = $_FILES['fileUpload']['name'];
         $filetmp = $_FILES['fileUpload']['tmp_name'];
         $ext= pathinfo($filename, PATHINFO_EXTENSION);

        if (in_array(strtolower($ext), $allowed)){
            $dest = 'uploads/' . $filename;

            if (move_uploaded_file($filetmp, $dest)){
                echo 'fichier transféré avec succès';
             } else {
                 echo "Erreur lors de l'upload du fichier";
             }
         } else {
             echo 'extension de fichier non autorisée';
         }
     }
 } 
?>




<form action="" method="POST" enctype="multipart/form-data">
    <label for="title">Titre de l'annonce:</label><br>
    <input type="text" id="title" name="title" size ="50" required><br><br>

    

    <label for="price">Prix:</label>
    <input type="number" id="price" name="price" required><br><br>

    <label for="category">Catégorie:</label><br>
    <select id="category" name="category" required>
        <option value="apartment">Apartment</option>
        <option value="house">house</option>
        
    </select><br><br>
    <label for="transaction">type transaction:</label><br>
    <select id="transaction" name="transaction" required>
        <option value="apartment">Sale</option>
        <option value="house">rent</option>
        
    </select><br>

    <label for="rooms">Number rooms :</label><br>
        <input type="number" id="rooms" name="rooms" required><br>

        <label for="bedrooms">Number bedrooms :</label><br>
        <input type="number" id="bedrooms" name="bedrooms" required><br>

        <label for="area">Surface (m²) :</label><br>
        <input type="number" id="area" name="area" required><br>

        <label for="city">City :</label><br>
        <input type="text" id="city" name="city" required><br>

    <label for="image1">Image 1:</label>
    <input type="file" id="fileUpload" name="fileUpload" accept="image/*"><br><br>



    <input type="submit" value="Ajouter l'annonce">
</form>
