<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends MY_Sellers_Controller {
  public function index() {
    $this->template->load('layout/application', 'sellers/sales/index', ['page_title' => 'works']);
  }
}
