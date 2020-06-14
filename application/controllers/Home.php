<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mpegawai');

		if($this->session->userdata('user')){

		}
		else{
			redirect('login');
		}
	}

	public function index()
	{
		$username = $this->session->userdata('user');
		$quser = $this->db->get_where('user', array('username'=>$username))->row();
		$data = array(
			'nama'=>$quser->nama,
			'pns' => $this->Mpegawai->getpns('PNS')->num_rows(),
			'gty' => $this->Mpegawai->getgty('GTY')->num_rows(),
			'honorer' => $this->Mpegawai->gethonor('Honor')->num_rows(),
			'cpns' => $this->Mpegawai->getcpns('CPNS')->num_rows() 
		);
		$this->load->view('home/_header', $data);
		$this->load->view('home/page/home');
		$this->load->view('home/_footer');
	}

	public function pegawai(){
		$username = $this->session->userdata('user');
		$quser = $this->db->get_where('user', array('username'=>$username))->row();
		$row=$this->db->get('pegawai')->num_rows();
                
		$config['base_url'] = base_url('home/pegawai');
		$config['total_rows'] = $row;
		$config['per_page'] = 10;

		$config['first_link']       = 'First';
                $config['last_link']        = 'Last';
                $config['next_link']        = 'Next';
                $config['prev_link']        = 'Prev';
                $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination pull-right">';
                $config['full_tag_close']   = '</ul></nav></div>';
                $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
                $config['num_tag_close']    = '</span></li>';
                $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
                $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
                $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
                $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['prev_tagl_close']  = '</span>Next</li>';
                $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
                $config['first_tagl_close'] = '</span></li>';
                $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['last_tagl_close']  = '</span></li>';

		$start=$this->uri->segment(3);
		$this->pagination->initialize($config);

		$cari=null;
		if(isset($_POST['cari'])){
			$cari=$_POST['cari'];
		}

		$par=array(
			'perpage'=>$config['per_page'],
			'start'=>$start,
			'cari' => $cari
		);

		$pegawai=$this->Mpegawai->getpegawai('', $par);
		$data=array(
			'pegawai' => $pegawai->result(),
			'nama' => $quser->nama
		);

		$this->load->view('home/_header', $data);
		$this->load->view('home/page/pegawai');
		$this->load->view('home/_footer');
	}

	public function pegawaistatus(){
		$username = $this->session->userdata('user');
		$quser = $this->db->get_where('user', array('username'=>$username))->row();
		$row = $this->db->like('status_kepegawaian', $this->uri->segment(3));
		$row=$this->db->get('pegawai')->num_rows();
                
		$config['base_url'] = base_url('home/pegawaistatus/'.$this->uri->segment(3));
		$config['total_rows'] = $row;
		$config['per_page'] = 10;

		$config['first_link']       = 'First';
                $config['last_link']        = 'Last';
                $config['next_link']        = 'Next';
                $config['prev_link']        = 'Prev';
                $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination pull-right">';
                $config['full_tag_close']   = '</ul></nav></div>';
                $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
                $config['num_tag_close']    = '</span></li>';
                $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
                $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
                $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
                $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['prev_tagl_close']  = '</span>Next</li>';
                $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
                $config['first_tagl_close'] = '</span></li>';
                $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['last_tagl_close']  = '</span></li>';

		$start=$this->uri->segment(4);
		$this->pagination->initialize($config);

		$cari=null;
		if(isset($_POST['cari'])){
			$cari=$_POST['cari'];
		}

		$par=array(
			'perpage'=>$config['per_page'],
			'start'=>$start,
			'status'=>$this->uri->segment(3),
			'cari' => $cari
		);

		$pegawai=$this->Mpegawai->getpegawaistatus($par);
		$data=array(
			'pegawai' => $pegawai->result(),
			'nama' => $quser->nama
		);

		$this->load->view('home/_header', $data);
		$this->load->view('home/page/pegawaistatus');
		$this->load->view('home/_footer');
	}

	public function detail($nik){
		$username = $this->session->userdata('user');
		$quser = $this->db->get_where('user', array('username'=>$username))->row();
		$pegawai = $this->Mpegawai->getpegawai($nik);
		$data = array(
			'pegawai' => $pegawai->row(),
			'nama' => $quser->nama
		);
		$this->load->view('home/_header', $data);
		$this->load->view('home/page/detail');
		$this->load->view('home/_footer');
	}

	public function info(){
		$username = $this->session->userdata('user');
		$quser = $this->db->get_where('user', array('username'=>$username))->row();
		$pegawai = $this->Mpegawai->getinfopeg();

		$data = array(
			'pegawai'=>$pegawai->result(),
			'nama' => $quser->nama
		);

		$this->load->view('home/_header', $data);
		$this->load->view('home/page/info');
		$this->load->view('home/_footer');
	}

	public function add(){
		$username = $this->session->userdata('user');
		$quser = $this->db->get_where('user', array('username'=>$username))->row();
		$data = array(
			'nama' => $quser->nama
		);
		$this->load->view('home/_header', $data);
		$this->load->view('home/page/add');
		$this->load->view('home/_footer');
	}

	public function prosesadd(){
		$input = $this->input->post(null, FALSE);

		$this->Mpegawai->inputpeg($input);

		redirect('home/add');
	}

	public function pageedit($nik){
		$username = $this->session->userdata('user');
		$quser = $this->db->get_where('user', array('username'=>$username))->row();
		$pegawai = $this->Mpegawai->getpegawai($nik);
		$data = array(
			'peg' => $pegawai->row(),
			'nama' => $quser->nama
		);

		$this->load->view('home/_header', $data);
		$this->load->view('home/page/edit');
		$this->load->view('home/_footer');
	}

	public function prosesedit(){
		$input = $this->input->post(null, FALSE);

		$this->Mpegawai->editpeg($input);

		redirect('home/pegawai');
	}

	public function delpeg($nik){
		$this->Mpegawai->deletepeg($nik);

		redirect('home/pegawai');
	}
}
