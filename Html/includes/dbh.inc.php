<?php
try {
  $dsn = "sqlsrv:Server=192.168.0.55;Database=Rapportini";
  $PDOconn = new PDO($dsn, "samuele", "Msds.2021");
  $PDOconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo $e->getMessage();
};


?>

