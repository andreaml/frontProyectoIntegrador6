<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
  var $template_data = array();

  public function __construct() {
    $this->template_data['libraries'] = array();
    $this->template_data['stylesheets'] = array();
  }

  public function set($name, $value) {
    $this->template_data[$name] = $value;
  }

  public function load_css($stylesheets) {
    $this->template_data['stylesheets'] = array_merge($this->template_data['stylesheets'], $stylesheets);
  }

  public function load_js($libraries) {
    $this->template_data['libraries'] = array_merge($this->template_data['libraries'], $libraries);
  }

  public function load($template = '', $view = '', $view_data = array(), $return = FALSE) {
    $this->CI = &get_instance();
    $this->set('stylesheets', $this->CI->load->view('layout/stylesheets', $this->template_data, TRUE));
    $this->set('header', $this->CI->load->view('layout/header', $this->template_data, TRUE));
    $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));   
    $this->set('scripts', $this->CI->load->view('layout/scripts', $this->template_data, TRUE));
    return $this->CI->load->view($template, $this->template_data, $return);
  }
}
