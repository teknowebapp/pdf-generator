<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
    {
        parent::__construct();
        //load model welcome
        $this->load->model('welcome_model', 'welcome');
	}

	public function index()
	{
		$data['detail'] = $this->welcome->get_matkul();

		$this->load->view('welcome_message', $data);
	}
	
	public function cetak()
	{
		$this->load->library('pdf');
		$this->load->library('generatepdf');

		$cek = $this->welcome->get_cetak_matkul($this->input->get('mhs'), $this->input->get('smt'))->row();

		if($cek)
		{
			$data['detail'] = $cek;
			$data['matkul'] = $this->welcome->get_cetak_matkul($this->input->get('mhs'), $this->input->get('smt'))->result();

			// generate pdf file in this server
			$html = $this->load->view('cetak-matkul', $data, true);
			$filename = "krs_".$this->input->get('mhs').'_'.$this->input->get('smt').'.pdf';
			$this->generatepdf->save($html, $filename, 'A4', 'portrait');

			// show pdf file in browser
			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "cetak-krs-".date('d-m-Y').".pdf";
			$this->pdf->load_view('cetak-matkul', $data);

		} else {

			show_404();
		}
	}
}
