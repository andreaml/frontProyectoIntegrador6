<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends MY_General_Managers_Controller {
  public function index() {
    $this->template->load_js([
      'gerenteGeneral/sucursales.js'
    ]);
    $this->template->load('layout/application', 'general_managers/branches/index', ['page_title' => 'Gerente General - Sucursales']);
  }
}
