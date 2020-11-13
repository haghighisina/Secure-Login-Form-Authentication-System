<?php
include_once("Template/header.php");
include_once('Functions/functions.php');
func::deleteCookie();
header("location:login.php");