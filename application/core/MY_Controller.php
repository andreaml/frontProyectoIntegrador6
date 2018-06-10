<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->library('Template');
    $this->load->helper('url');
    $this->template->load_js([
      'lib/jquery/jquery-3.3.1.min.js',
      'lib/popper/popper.min.js',
      'lib/bootstrap/bootstrap.min.js',
      'lib/moment/moment.js',
      'lib/moment/es.js',
      'lib/datetimepicker/daterangepicker.js'
    ]);
  }
}

class MY_Agency_Managers_Controller extends MY_Controller {
  public function __construct() {
    parent::__construct();
    $this->template->set('user', 'agency_manager');
  }
}
class MY_General_Managers_Controller extends MY_Controller {
  public function __construct() {
    parent::__construct();
    $this->template->set('user', 'general_manager');
  }
}
class MY_Sellers_Controller extends MY_Controller {
  public function __construct() {
    parent::__construct();
    $this->template->set('user', 'seller');
  }
}
