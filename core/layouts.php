<?php
  require_once __DIR__ . '/route.php';

  $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  $atual = explode('/', $url);
  $urlAtual = $atual[1];

  if ($urlAtual) {
    foreach ($route as $r) {

      if ($urlAtual == $r[0]) {
        // echo $r[1];
        require_once __DIR__ . "/../controllers/" . $r[1] . ".php";
      }
    }
  } else {
    require_once __DIR__ . "/../controllers/" . $route[0][1] . ".php";
  }
      