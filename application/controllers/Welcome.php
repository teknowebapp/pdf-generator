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
		$data['course'] = $this->welcome->get_course();

		$this->load->view('welcome_message', $data);
	}
	
	public function generate()
	{
		$this->load->library('pdf');
		$this->load->library('pdfgenerator');

		$student = $this->input->get('student');
		$periode = $this->input->get('periode');
		$check = $this->welcome->get_print_course($student, $periode)->row();

		if($check)
		{
			$data = [
				'student' => $check,
				'course' => $this->welcome->get_print_course($student, $periode)->result()
			];

			// generate pdf file in this server
			$html = $this->load->view('generator', $data, true);
			$filename = 'course-print-' . date('Ymd') . '.pdf';
			$this->pdfgenerator->save($html, $filename, 'A4', 'portrait');

			// show pdf file in browser
			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = 'course-generated-' . date('dmY') . '.pdf';
			$this->pdf->generate('generator', $data);
		} else {
			show_404();
		}
	}
}
