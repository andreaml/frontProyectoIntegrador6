<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cars extends MY_Sellers_Controller {
  public function index() {
    $this->template->load('layout/application', 'sellers/cars/index', ['page_title' => 'Catálogo']);
  }
	
  public function byCategory($category) {
		switch ($category) {
			case 'Autos_Familiares':
				$idCategory = 1;
				break;
			case 'Autos_Deportivos':
				$idCategory = 2;
				break;
			case 'Camionetas':
				$idCategory = 3;
				break;
			case 'Autos_Negocios':
				$idCategory = 4;
				break;
			default:
				$idCategory = -1;
				break;
		}
		$categoryString = str_replace('_', ' ', $category);
		$this->template->load_js(['colores.js', 'vendedor/catalogo.js']);
		$this->template->load_css(['gerenteGeneral/catalogo.css']);
		$this->template->load('layout/application', 'sellers/cars/show', [
			'page_title' => 'Catálogo', 
			'category' => $categoryString,
			'idCategory' => $idCategory,
		]);
	}
}