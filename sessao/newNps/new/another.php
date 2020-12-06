<?php

session_start();

echo 'Same in an another directory, you are still: ' . $_SESSION['name'];