<?php
namespace App\Config;


use Exception;

try {

  spl_autoload_register(function ($className) {
    $file = '../' . str_replace('\\', '/', $className) . '.php';

    if (file_exists($file)) {
      //echo ("<br>" . $file);
      require_once($file);
      return true;
    };
    return false;

  });


} catch (Exception $e) {

  echo ($e->getMessage());
}



?>