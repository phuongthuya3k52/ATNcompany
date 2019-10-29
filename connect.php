<?php
  if (empty(getenv("DATABASE_URL"))){
      $pdo = new PDO('pgsql:host=ec2-174-129-18-42.compute-1.amazonaws.com;port=5432;dbname=d4ucl7dvgperco', 'yxmokirelqewcc', '2e22808668584561bfbe7c454db16a062574951e2dd8cf55553d9fdf0b44787f');
  }  else {
    $db = parse_url(getenv("DATABASE_URL"));
    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
  }
?>
