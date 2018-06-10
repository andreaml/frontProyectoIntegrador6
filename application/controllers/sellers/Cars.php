<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cars extends MY_Sellers_Controller {
  public function index() {
    $this->template->load('layout/application', 'sellers/cars/index', ['page_title' => 'works']);
  }

  public function show() {
    $this->template->load('layout/application', 'sellers/cars/show', ['page_title' => 'works']);
  }
}
