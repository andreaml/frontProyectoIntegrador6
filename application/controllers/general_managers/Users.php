<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_General_Managers_Controller {
  public function index() {
    $this->template->load_js(['gerenteGeneral/usuarios.js']);
    $this->template->load('layout/application', 'general_managers/users/index', ['page_title' => 'Usuarios']);
  }
}
