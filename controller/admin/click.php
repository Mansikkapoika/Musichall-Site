﻿<?php
require_once 'control.php';
session_start();
$ctrl = new controleurAdmin();
$ctrl->afficheAdmin();