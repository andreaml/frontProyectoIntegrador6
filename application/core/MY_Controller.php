<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->library('Template');
    $this->load->helper('url');
    $this->template->load_css([
      'bootstrap/bootstrap.min.css',
      'font-awesome-4.7.0/css/font-awesome.min.css',
      'datatables.min.css',
      'dateragepicker.css',
      'style.css',
      'stylePrimaryButton.css'
    ]);
    $this->template->load_js([
      'lib/jquery/jquery-3.3.1.min.js',
      'lib/popper/popper.min.js',
      'lib/bootstrap/bootstrap.min.js',
      'lib/moment/moment.js',
      'lib/moment/es.js',
      'lib/datetimepicker/daterangepicker.js',
      'lib/datatables/datatables.min.js',
      'lib/sweetalert/sweetAlert.min.js',
      'funcionesGenerales.js',
      'parseoErroresMysql.js'
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
