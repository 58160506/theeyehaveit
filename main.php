<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Main extends CI_Controller{

	public function index()
	{
		$this->load->model('product_model','product');

		$data['query'] = $this->product->get_all();

		$this ->load->view('main_view',$data);

	}

	function showdetail($id){
		$this->load->model('product_model','product');
		$data['query'] = $this->product->get_one($id);
		$this->load->view('detail_view', $data);
	}

	function search() {
		$kw = $this->input->post('kw');
		$this->load->model('product_model','product')
		$data['query'] = $this->product->search($kw);
		$this->load->view('main_view', $data);
	}
}
?>