<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trackings extends MY_Sellers_Controller {
  public function index() {
    $this->template->load('layout/application', 'sellers/trackings/index', ['page_title' => 'works']);
  }
}
