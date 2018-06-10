<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Agency_Managers_Controller {
  public function index() {
    $this->template->load('layout/application', 'agency_managers/users/index', ['page_title' => 'works']);
  }
}
