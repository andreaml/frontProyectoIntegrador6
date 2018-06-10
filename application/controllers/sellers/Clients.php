<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends MY_Sellers_Controller {
  public function index() {
    $this->template->load('layout/application', 'sellers/clients/index', ['page_title' => 'works']);
  }
}
