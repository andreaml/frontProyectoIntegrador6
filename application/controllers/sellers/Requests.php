<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requests extends MY_Sellers_Controller {
  public function index() {
    $this->load->view();
    $this->template->load('layout/application', 'sellers/requests/index', ['page_title' => 'works']);
  }
}
