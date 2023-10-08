<?php


if ($_SERVER['SERVER_NAME'] === 'localhost') {

      $servername = 'localhost';
      $dbname = 'contemporains';
      $username = 'x';
      $password = 'x';

      try {
            $db = new PDO("mysql:host=$servername; dbname=$dbname",$username,$password);
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
            echo 'connexion fail : '.$e->getMessage();
      }

}/* elseif ($_SERVER['SERVER_NAME'] === 'portfolio.accesdenied.net' || $_SERVER['SERVER_NAME'] === 'accesdenied.net') {

      $servername = 'localhost';
      $dbname = 'accecqsn_portfolio';
      $username = 'accecqsn_publiquecheck';
      $password = 'lepassedelab@z3BaLèz€';

      try {
            $db = new PDO("mysql:host=$servername; dbname=$dbname",$username,$password);
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
            echo 'connexion fail : '.$e->getMessage();
      }

} */