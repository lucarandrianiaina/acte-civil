<?php
session_start();
// Finalement, détruire la session.
session_destroy();

// Rediriger vers la page de connexion.
header('Location: ../vue/login.php');
?>