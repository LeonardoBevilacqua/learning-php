<?php
namespace model;  
class Livro {
  public string $titulo;
  public string $ator;
}

if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) {
  http_response_code(404);
  die();
}

