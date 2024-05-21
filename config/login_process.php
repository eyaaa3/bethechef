<?php
session_start();
$ROOT = __DIR__;

$DS = DIRECTORY_SEPARATOR;
include_once("conn.php");

// Utilisez les méthodes statiques de la classe Conf pour obtenir les informations de connexion
$hostname = Conf::getHostname();
$database = Conf::getDatabase();
$login = Conf::getLogin();
$password = Conf::getPassword();

try {
    // Établissez la connexion à la base de données en utilisant les informations récupérées
    $bdd = new PDO("mysql:host=$hostname;dbname=$database", $login, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activez le mode d'affichage des erreurs PDO
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}

$table = 'utilisateurs';

if (isset($_REQUEST["email"]) && !empty($_REQUEST["email"])) {
    $login = $bdd->quote($_REQUEST["email"]);
} else {
    die("Ajoutez votre login !!!");
}

if (isset($_REQUEST["pass"]) && !empty($_REQUEST["pass"])) {
    $raw_password = $_REQUEST["pass"];
    $user_type_query = $bdd->query("SELECT type FROM $table WHERE adresse = $login");
    $user_type = $user_type_query->fetchColumn(); // Fetch user type

    if ($user_type == 2 || $user_type == 3) {
        // Hash the password if the user type is 2 or 3
        $pass = md5($raw_password); // Hash the password entered by the user
    } else {
        // Use the password as is for other user types
        $pass = $bdd->quote($raw_password);
    }
} else {
    die("Donnez votre mot de passe !!!");
}


$req = "SELECT * FROM $table WHERE adresse=$login"; // Select user by email
try {
    $reponse = $bdd->query($req); // Exécutez la requête SQL
    $user = $reponse->fetch(PDO::FETCH_ASSOC); // Fetch user data

    if (!$user) {
        header("location: ../erreur.php"); // Redirect to error page if user not found
        exit;
    } else {
        // Verify if the password matches the one stored in the database
        if ($user['type'] == 2 || $user['type'] == 3) {
            // Passwords for users of type 2 and 3 are hashed, so we need to compare hashed passwords
            if ($user['mdp'] === $pass) {
                // Passwords match, set up the session and redirect based on user type
                $_SESSION['n_cin'] = $user['n_cin'];
                switch ($user['type']) {
                    case '2':
                        $_SESSION['nom_utilisateur'] = $user['nom']; // Change 'nom_utilisateur' to the appropriate field
                        header("location: ../view/utilisateur/etudiant_page.php");
                        exit;
                    case '3':
                        $_SESSION['nom_chef'] = $user['nom']; // Change 'nom_chef' to the appropriate field
                        header("location: ../view/chef/viewCreatedChef.php");
                        exit;
                    default:
                        // Handle cases where the user type is not recognized
                        break;
                }
            } else {
                // Passwords do not match
                header("location: ../erreur.php");
                exit;
            }
        } else {
            // For other user types, we compare passwords as is
            if ($user['mdp'] === $_REQUEST["pass"]) {
                // Passwords match, set up the session and redirect based on user type
                switch ($user['type']) {
                    case '1':
                        $_SESSION['n_cin'] = $user['n_cin'];
                        $_SESSION['nom_admin'] = $user['nom'];
                        header("location: ../view/admin/viewCreatedAdmin.php");
                        exit;
                    default:
                        // Handle cases where the user type is not recognized
                        break;
                }
            } else {
                // Passwords do not match
                header("location: ../erreur.php");
                exit;
            }
        }
    }
} catch (PDOException $e) {
    die('Erreur de requête : ' . $e->getMessage());
}
?>
