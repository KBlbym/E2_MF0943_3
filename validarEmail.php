<?php
include('config.php');
//validar email de lado del servidor
if (($_POST['email'] != null && isset($_POST['email']) && isset($_POST['submit']))) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //Verificamos que el email no exista en la base de datos
        $stmtCheck = $context->prepare("SELECT email FROM emails WHERE email= :email");
            $stmtCheck->bindParam(':email', $email);
            $stmtCheck->execute();
            $Mycount=$stmtCheck->rowCount();
            if($Mycount == 1){
                header('Location: newsletter.php?error=El email '.$email. ' ya existe');
                exit();
            }
            $statment = $context->prepare("INSERT INTO emails (email) VALUES (:email)");
            $statment->bindParam(':email', $email);
            $statment->execute();
            $count=$statment->rowCount();
            if($count >= 1){
                header('Location: newsletter.php?success=Gracias por suscribirse a nuesto botin de noticias');
                exit();
            }
            else{
                header('Location: newsletter.php?error=Habido un ERROR y no ha sido posible suscribirse, ¡Intentalo más tarde! ');
                exit();
            }
    }
    else {
        header('Location: newsletter.php?error=Introduce un Email valido');
        exit();
    }
}
else{
    header('Location: newsletter.php?error=Debe introducir un valor');
    exit();
}