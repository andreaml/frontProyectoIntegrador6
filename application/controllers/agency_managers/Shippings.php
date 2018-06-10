<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shippings extends MY_Agency_Managers_Controller {
  public function index() {
    $this->template->load('layout/application', 'agency_managers/shippings/index', ['page_title' => 'works']);
  }
}
