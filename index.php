<?php

if (isset($_GET['view'])) {
  if (file_exists("./modules/{$_GET['view']}.php")) {
    include_once("./modules/{$_GET['view']}.php");
  } else {
    include_once("./modules/404.php");
  }
} else {
  include_once("./modules/Login.php");
}