<?php
include_once ROOT_PATH . "/sito/script/functions.php";
include_once ROOT_PATH . "/sito/inc/init.php";
$db = new DB();
$mysqli = $db->getDb();
sec_session_start(); // usiamo la nostra funzione per avviare una sessione php sicura
if(isset($_POST['email'], $_POST['p'])) { 
   $email = $_POST['email'];
   $password = $_POST['p']; // Recupero la password criptata.
   //var_dump($mysqli);
   if(login($email, $password, $mysqli) == true) {
      // Login eseguito
      echo 'Success: You have been logged in!';
   } else {
      // Login fallito
      echo 'Unsuccess login';
   }
} else { 
   // Le variabili corrette non sono state inviate a questa pagina dal metodo POST.
   echo 'Invalid Request';
}
?>