<?php
  class PagesController {
    public static function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
     
      return $first_name.' '.$last_name;
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>