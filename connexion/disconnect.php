<?php
// Page de déconnexion : Destruction d'une session et redirection
session_start();
session_unset();
session_destroy();
header("Location: ../");
exit();
?>