<?php
namespace Drupal\glue\Controller;

class GlueController {
  public function helloWorldPage() {
    return array(
      '#markup' => t('<p>Hello, world!</p>'), 
    ); 
  } 
}



?>