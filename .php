<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // 2. Adresse à laquelle tu veux recevoir l'e-mail (ton adresse)
    $to = "hasna.dakhouch@gmail.com; // 🔁 Remplace par ton adresse

    // 3. Sujet de l'e-mail
    $subject = "Nouveau message de $nom via le formulaire";

    // 4. En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // 5. Contenu du message
    $body = "<h2>Nouveau message reçu :</h2>";
    $body .= "<p><strong>Nom :</strong> $nom</p>";
    $body .= "<p><strong>Email :</strong> $email</p>";
    $body .= "<p><strong>Message :</strong><br>$message</p>";

    // 6. Envoi de l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès. Merci $nom !";
    } else {
        echo "Erreur : le message n’a pas pu être envoyé.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>

