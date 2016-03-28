<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	/*public function index()
	{
		$this->load->view('welcome_message');
	}*/
	public function index(){
		$this->home();
	}

	public function home(){
		//$this->load->view('dionco/dionco');
		$this->load->model('dionco_data');
		$data['titleweb'] = $this->dionco_data->getJudul();
		$data['navbar'] = $this->dionco_data->getNavbar();
		$data['servname'] = $this->dionco_data->getServiceName();
		$data['portfolio'] = $this->dionco_data->getPortfolio();
		$data['about'] = $this->dionco_data->getAbout();
		$data['team'] = $this->dionco_data->getTeam();
		$data['client'] = $this->dionco_data->getClient();
		$this->load->view('dionco/header');
		$this->load->view('dionco/navbar',$data);
		$this->load->view('dionco/mainview', $data);
		$this->load->view('dionco/portofolio_modal');
		$this->load->view('dionco/footer');
		//$this->load->view('dionco/data', $data);


	}
	/*public function array2(){
		$this->load->model('model_users');
		$data['title'] = 'MVC Cool Title';
		$data['page_header'] = 'Intro to MVC Design';
		$data['firstnames'] = $this->model_users->getFirstNames();
		$data['users'] = $this->model_users->getUsers();
		$this->load->view('welcome_message', $data);
	}

	public function array1()
	{
		$this->load->helper('array');
		$data['title'] = 'Array Helper Title';
		$data['page_header'] = 'Array Helper in Code Igniter';
		$data['firstnames'] = $this->model_users->getFirstNames();
		
		$this->load->view('view_home', $data);

	}*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */