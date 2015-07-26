<?php
namespace Drupal\resp_ajax\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class RespAjaxController extends ControllerBase {
  public function renderNewHelloText(Request $request) {
    $hellos = $request->request->get('hellos');
    $helloArr = [];
    foreach ($hellos as $one) {
      $helloArr[] = "<h1>Say hallo to $one";
    }
    return new JsonResponse($helloArr);
  }

}