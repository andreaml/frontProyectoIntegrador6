<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comparator extends MY_Public_Controller {
  public function index() {
    $this->template->load_js([
      'comparador_2.js'
    ]);
    $this->template->load('layout/application', 'public/comparator', ['page_title' => 'Comparador']);
  }
}
