    
<?php require 'functions.php';

    if(!empty($_POST)){

        $errors= array();
        
            if(empty($_POST['nom']) || !preg_match('/^[a-zA-Z0-9_]+$', $_POST['nom'])){
                    $errors['nom']="Vous n'avez pas entrer des caracteres valide pour votre nom";

            }

        debug($errors);

        if(empty($_POST['mail']) || !filter_var($_POST['mail'])){

            $errors['mail']="votre email n'est pas valide";

        }

    }

?>


