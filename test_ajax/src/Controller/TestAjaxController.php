<?php
namespace Drupal\test_ajax\Controller;

use Drupal\Core\Controller\ControllerBase;

class TestAjaxController extends ControllerBase {
  public function testAjax() {
    $build['test'] = array(
      '#theme' => 'test_ajax_template'
    );
    $build['test']['#attached']['library'][] = 'test_ajax/test.ajax.new-text-hello';
    return $build;
  }
}