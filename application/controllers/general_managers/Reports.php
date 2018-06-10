<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends MY_General_Managers_Controller {
  public function index() {
    $this->template->load('layout/application', 'general_managers/reports/index', ['page_title' => 'works']);
  }
}
