<?php
App::uses('AppModel', 'Model');
// carrega a interface com o Redis
require "../predis/autoload.php";

Predis\Autoloader::register();
/**
 * Area Model
 *
 */
class RedisInterface extends AppModel {

  function create_connection() {
    $redis;
    try {
      $redis = new Predis\Client();
    }
    catch (Exception $e) {
      die($e->getMessage());
    }

    return $redis;
  }
}
