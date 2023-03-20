<?php
require "../../db_config.php";

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$profession = $_POST['profession'];
$term_wpp = array_key_exists('term_wpp', $_POST) ? 1 : 0;
$term_email = array_key_exists('term_email', $_POST) ? 1 : 0;

if (empty($name)) {
  $errMSG = "Por favor, insira o titulo do post";
}

if (!isset($errMSG)) {
  $stmt = $pdo->prepare('INSERT INTO leads 
    (name,address,email,phone,city,profession,term_wpp,term_email) VALUES
    (:uname,:uaddress,:uemail,:uphone,:ucity,:uprofession,:uterm_wpp,:uterm_email)');
  $stmt->bindParam(':uname', $name);
  $stmt->bindParam(':uaddress', $address);
  $stmt->bindParam(':uemail', $email);
  $stmt->bindParam(':uphone', $phone);
  $stmt->bindParam(':ucity', $city);
  $stmt->bindParam(':uprofession', $profession);
  $stmt->bindParam(':uterm_wpp', $term_wpp);
  $stmt->bindParam(':uterm_email', $term_email);

  if ($stmt->execute()) {
    echo ("<script>
      window.location = '../../obrigado.php';
      alert('Obrigado pelo cadastro, em breve entraremos em contato');
      </script>");
  } else {
    $errMSG = "Erro..";
    "<script>
      window.location = '../../cadastre-se';
      alert('Seu não foi enviado. Por favor, tente novamente.');
      </script>";
  }
}