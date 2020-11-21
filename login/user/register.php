<?php

require 'model/data.php'

if ( isset($_POST['cadastrar']) ) {
  require 'controller/consist_register.php'
} 

include 'view/register_tpl.php';