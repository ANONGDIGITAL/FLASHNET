<?php
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['nom'] AND !empty($_POST['email'] AND !empty($_POST['message']))))
    {
        $message = "Ce message vous a été envoyé via la page de contact du site nettoyage-hotte-de-cuisine.fr
        Nom : " . $_POST["nom"] . "
        Email : " . $_POST["email"] . "
        Telephone : " . $_POST["tel"] . "
        Message : " . $_POST["message"];

        $retour = mail ("melvinmambing@yahoo.fr", $_POST["entreprise"],
        $message, "From:contact@exemplesite.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
        if ($retour) {
            $message ;
        }   
    }
else{
    $errormsg = "vous devez remplir tous les champs obligatoires du formulaire";
}
    
}
?>



<?php
if (isset($_POST['send'])) {
    if (!empty($_POST['nom'] AND !empty($_POST['email'] AND !empty($_POST['message']))))
    {
        $message = "Ce message vous a été envoyé via la page de devis du site nettoyage-hotte-de-cuisine.fr
        Nom : " . $_POST["nom"] . "
		Type : " . $_POST["type"] . "
		Telephone : " . $_POST["tel"] . "
        Email : " . $_POST["email"] . "
		Adresse : " . $_POST["location"] . "
		Ville : " . $_POST["ville"] . "
		Département : " . $_POST["dep"] . "
		Objet : " . $_POST["sujet"] . "
		Message : " . $_POST["message"] . "
        Image : " . $_FILES["avatar"];
		

        $retour = mail ("melvinmambing@yahoo.fr", $_POST["entreprise"],
        $message, "From:contact@exemplesite.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
        if ($retour) {
            $message ;
        }   
    }
else{
    $errormsg = "vous devez remplir tous les champs obligatoires du formulaire";
}
    
}
?>




<!--Upload une image via le formulaire-->



<?php
if(isset($_FILES['avatar']))
{ 
     $dossier = 'upload/';
     $fichier = basename($_FILES['avatar']['name']);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
?>