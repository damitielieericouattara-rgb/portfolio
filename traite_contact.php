<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sécurisation et récupération des données du formulaire
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $sujet = htmlspecialchars(trim($_POST['sujet']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Adresse e-mail du destinataire
    $destinataire = "damitielieericouattara@mail.com"; // <-- Mets ici ton adresse email réelle

    // Entêtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Corps du message
    $contenu = "Nom       : $nom\n";
    $contenu .= "Email     : $email\n";
    $contenu .= "Téléphone : $telephone\n";
    $contenu .= "Sujet     : $sujet\n";
    $contenu .= "Message   :\n$message\n";

    // Envoi du mail
    if (mail($destinataire, $sujet, $contenu, $headers)) {
        header("Location: remerciement.html");
        exit();
    } else {
        echo "<h2 style='color:red; text-align:center;'>Erreur : Le message n'a pas pu être envoyé.</h2>";
    }
}
?>