<?php

$conn = new PDO('mysql:host=localhost;dbname=painel','root','123456');


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);