<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Sekolah extends CI_Controller
{

	var $data;

	function __construct()
	{
		parent::__construct();

		$this->load->helper(['url','html','form']);
        $this->load->helper('date');
        $this->load->library(['form_validation','session']);
        $this->load->database();


		$this->load->model('home_title_model');
		$this->load->model('kontak_model');
		$this->load->model('visi_misi_model');
		$this->load->model('gallery_model');
		$this->load->model('visi_misi_model');
		$this->load->model('staff_model');
		$this->load->helper('url_helper');


//------------home------------------------
		$result = $this->home_title_model->getTitle();
		$this->data['title']  = $result['title'];
		$this->data['city']   = $result['city'];
		$this->data['logo']   = $result['logo'];
		$this->data['tagline']= $result['tagline'];

//------------Staff---------------------
		$this->data['staff'] = $this->staff_model->getAllGuru();

	}

//-------------------------------------INDEX-------------------------------------------
//-------------------------------------------------------------------------------------
	function index(){
		$this->load->view('sekolah/index',$this->data);
	}

//-------------------------------------KONTAK------------------------------------------
//-------------------------------------------------------------------------------------
	function kontak(){
		$this->load->view('sekolah/kontak',$this->data);
	}

	function kontak_kirim(){
		$rules =    [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],
            [
                'field' => 'tlp',
                'label' => 'Tlp',
                'rules' => 'required'
            ],
            [
                'field' => 'pesan',
                'label' => 'Pesan',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE){
            $this->load->view('kontak',$data);
        }
        else{
        	$now = time();

	        $datakontak['nama']   = set_value('name');
	        $datakontak['email']   = set_value('email');
	        $datakontak['no_tlp']   = set_value('tlp');
	        $datakontak['pesan']   = set_value('pesan');
	        $datakontak['tgl_kirim']   = unix_to_human($now, TRUE, 'us');
	        $datakontak['status_baca']   = 'belum';
	        $datakontak['status_tayang']   = 'hiden';

	        $this->kontak_model->kirimPesan($datakontak);
	        $this->session->set_flashdata('message','Pesan Telah terkirim....');
	       	redirect('sekolah/kontak');
        }
	}

	//-----------------------------------BERITA------------------------------------------------
	//-----------------------------------------------------------------------------------------

	function berita(){
		$this->load->view('sekolah/berita');
	}

	//----------------------------------PRESTASI-----------------------------------------------
	//-----------------------------------------------------------------------------------------

	function prestasi(){
		$this->load->view('sekolah/prestasi');

	}

	//-----------------------------------STAFF-------------------------------------------------
	//-----------------------------------------------------------------------------------------

	function staff()
	{

		$this->load->view('sekolah/staff',$this->data);
	}

	//-----------------------------------TENTANG----------------------------------------------
	//----------------------------------------------------------------------------------------

	function tentang(){
		$visimisi = $this->visi_misi_model->getVisiMisi();
		$data['vismis'] = $visimisi;

		$this->load->view('sekolah/tentang',$data);

	}

	//----------------------------------GALLERY-----------------------------------------------
	//----------------------------------------------------------------------------------------

	function gallery()
	{
		$this->load->view('sekolah/gallery');
	}

	function ppdb(){
		$this->load->view('sekolah/ppdb');
	}

	function tausiah(){
		$this->load->view('sekolah/tausiah');
	}

}

?>
