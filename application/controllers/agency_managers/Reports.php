<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends MY_Agency_Managers_Controller {
  public function index() {
    $this->template->load('layout/application', 'agency_managers/reports/index', ['page_title' => 'Reportes']);
  }
}
