<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks extends MY_General_Managers_Controller {
  public function index() {
    $this->template->load('layout/application', 'general_managers/stocks/index', ['page_title' => 'works']);
  }
}
