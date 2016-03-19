<?php

require_once 'form.php';
session_start();
$ctrl = new ControleurRegister();
$ctrl->Register($_POST['usernom'],$_POST['userprenom'],$_POST['username'],$_POST['useremail'],$_POST['userpassword'],$_POST['userpassconfirm'],$_POST['newsletter']);