<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Dashboard extends CI_Controller
{
	var $data= array();
	public static $coba;

	function __construct(){
		parent::__construct();

		if(!isset($_SESSION)){session_start();}

		$this->load->model('gallery_model');
		$this->load->model('home_title_model');
		$this->load->model('kontak_model');
		$this->load->model('postingan_model');
		$this->load->model('staff_model');
		$this->load->model('visi_misi_model');


        $this->load->helper(['url','html','form']);
        $this->load->helper('date');
        $this->load->library(['form_validation','session']);
        $this->load->database();

    	if($this->session->userdata('logged_in')){
     		$session_data = $this->session->userdata('logged_in');
     		$this->data['username'] = $session_data['username'];
   		}else{
     		redirect('admin/login', 'refresh');
   		}

   		$this->data['hasil'] = $this->home_title_model->getTitle();
   		$this->data['kontak'] = $this->kontak_model->getAll();
   		$this->data['kontakbaca'] = $this->kontak_model->getBelumBaca()->num_rows();
   		$this->data['images'] = $this->gallery_model->getAll();
   		$this->data['daftarkategori'] = $this->postingan_model->getAllKategori();
   		$this->data['semuaberita'] = $this->postingan_model->getAllArtikel();
   		$this->data['allpostingan'] = $this->postingan_model->getAllPostingan();
   		$this->data['visimisi'] = $this->visi_misi_model->getVisiMisi();
   		$this->data['staff'] = $this->staff_model->getAllGuru();
   		


	}
//--------------------------------------INDEX------------------------------------------
//-------------------------------------------------------------------------------------
	function index(){
		$this->load->view('admin/index',$this->data);
	}


//--------------------------------------JUDUL------------------------------------------
//-------------------------------------------------------------------------------------
	function judul(){
		
        $this->load->view('admin/judul', $this->data);
	}

	function judul_update(){

		$this->form_validation->set_rules('title','Title','required');

		if ($this->form_validation->run() == FALSE){
              $this->load->view('admin/judul',$this->data);
        }
        else{

        	$datajudul['title'] = set_value('title');
        	$datajudul['city'] = set_value('city'); 
        	$datajudul['logo'] = set_value('logo'); 
        	$datajudul['tagline'] = set_value('tagline');

		    $this->home_title_model->update($datajudul);
		    $this->session->set_flashdata('message','Judul telah diperbarui...');
		    redirect('admin/dashboard/judul');
		}
	}

//-------------------------------------GALLERY-----------------------------------------
//-------------------------------------------------------------------------------------

	function gallery(){
		
        $this->load->view('admin/gallery', $this->data);
	}

	function gallery_upload(){
		$rules =    [
            [
                'field' => 'caption',
                'label' => 'Caption',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
       		]
        ];

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/gallery_upload', $this->data);
        }
        else{
	        /* Start Uploading File */
	        $config =   [
	            'upload_path'   => './uploads/',
	            'allowed_types' => 'gif|jpg|png',
	            'max_size'      => 1000,
	            'max_width'     => 1024,
	            'max_height'    => 768
	        ];

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload()){
	            $error = array('error' => $this->upload->display_errors());

	            $this->load->view('admin/gallery_upload', $error);
	        }
	        else{
	            $file = $this->upload->data();

	            $now = time();
	            $tgl = unix_to_human($now, TRUE, 'us');
	            $str1 = str_replace(' ' , '',  $file['file_name'] .  set_value('caption'));
	            $toid = str_replace('.','',$str1 );
	            //print_r($file);
	            $data = [
	                'id_images'     => $toid ,
	                'file'          => 'uploads/' . $file['file_name'],
	                'title'         => set_value('caption'),
	                'date'          => $tgl,
	                'description'   => set_value('description'),
	                'status'        => set_value('radioOption')
	            ];
	            $this->gallery_model->create($data);
	            $this->session->set_flashdata('message','Foto berhasil diupload..');
	            redirect('admin/dashboard/gallery');                                  
	            }        
        }

	}

	function gallery_edit($id){
		$rules =    [
            [
                'field' => 'caption',
                'label' => 'Caption',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($rules);
        $image = $this->gallery_model->getById($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/gallery_edit',['username' => $this->data['username'],'image'=>$image]);
        }
        else{
	        $datagallery['title']   = set_value('caption');
	        $datagallery['description']   = set_value('description');
	        $datagallery['status']   = set_value('radioOption');

	        $this->gallery_model->update($id,$datagallery);
	        $this->session->set_flashdata('message','Foto telah diperbarui...');
	       	redirect('admin/dashboard/gallery');
        }
	}

	function gallery_hapus($id){
		$this->gallery_model->delete($id);
        $this->session->set_flashdata('message','Foto telah dihapus..');
        redirect('admin/dashboard/gallery');
	}

//-------------------------------------BERITA------------------------------------------
//-------------------------------------------------------------------------------------

	function berita(){
		//$this->load->view('admin/berita', $this->data);

		$this->form_validation->set_rules('namakategori','Namakategori','required');


        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/berita',$this->data);
        }else{
        	$datakategori['kategori']   = set_value('namakategori');
        		$this->postingan_model->addKategori($datakategori);
        		$this->session->set_flashdata('message','Kategori baru telah dibuat.....');
        	redirect('admin/dashboard/berita');
        }

	}

	function berita_edit_kategori($id){
		$this->form_validation->set_rules('namakategori','Namakategori','required');
		$hasil = $this->postingan_model->getKategoriById($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/berita_edit_kategori',['username' => $this->data['username'],'kategoribyid' => $hasil, 
            	'kontak' => $this->data['kontak'],'daftarkategori' => $this->data['daftarkategori'] ,'semuaberita' => $this->data['semuaberita']
            	]);
        }else{
        	$datakategori['kategori']   = set_value('namakategori');
        		$this->postingan_model->updateKategory($id,$datakategori);
        		$this->session->set_flashdata('message','Kategori baru telah diedit.....');
        	redirect('admin/dashboard/berita');
        }
	}

	function berita_delete_kategori($id){
		$this->postingan_model->deleteKategori($id);
        $this->session->set_flashdata('message','Kategori baru telah dihapus.....');
        redirect('admin/dashboard/berita');
	}

	function berita_delete_artikel($id){
		$this->postingan_model->deleteArtikel($id);
        $this->session->set_flashdata('message','Artikel baru telah dihapus.....');
        redirect('admin/dashboard/berita');
	}

	function berita_status_artikel($id){
		$dat = $this->postingan_model->getArtikelById($id);
		$row = $dat->row();

		$stts;
		
		if ($row->status == 'hidden'){
			$new['status'] = 'show';
			$this->postingan_model->updateArtikel($id,$new);
			$stts = 'ditayangkan';
		}


		if ($row->status == 'show'){
			$new['status'] = 'hidden';
			$this->postingan_model->updateArtikel($id,$new);
			$stts = 'disembunyikan';
		}

		
		
		$this->session->set_flashdata('message','Pesan berhasil '.$stts.'....');
		redirect('admin/dashboard/berita','resresh');
	}

	function berita_baru(){

        $this->form_validation->set_rules('title','Title','required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/berita_baru',$this->data);
        }
        else{
        	$now = time();
	        $tgl = unix_to_human($now, TRUE, 'us');

	        $dataartikel['judul']   = set_value('title');
	        
	        
	        $dataartikel['isi']   = set_value('isi');
	        $dataartikel['tgl_posting']   = $tgl;
	        $dataartikel['status']   = set_value('radioOption');

	        $datakategori['id_artikel'] = $this->postingan_model->setArtikel($dataartikel);

	        $nokategori = $this->data['daftarkategori']->num_rows();
	        
	        if ($nokategori > 0) {
	        	$xx = 0;
	        	while ($xx  < $nokategori) {
	        		$datakategori['id_kategory']   = set_value('kategori'.$xx);
	        		if($datakategori['id_kategory'] > 0){
	        			$this->postingan_model->setPostingan($datakategori);
	        		}
	       			$xx++;
	        	}
	        }else{
	        	
	        }
	        
	        
	        $this->session->set_flashdata('message','Berita telah dibuat.....');
	       	redirect('admin/dashboard/berita_baru');
        }
	}
//-------------------------------------STAFF-------------------------------------------
//-------------------------------------------------------------------------------------
	function staff(){
		$this->load->view('admin/staff', $this->data);
	}

	function staff_upload(){
		$rules =    [
            [
                'field' => 'caption',
                'label' => 'Caption',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
       		]
        ];

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/staff_upload');
        }
        else{
	        /* Start Uploading File */
	        $config =   [
	            'upload_path'   => './uploads/',
	            'allowed_types' => 'gif|jpg|png',
	            'max_size'      => 1000,
	            'max_width'     => 1024,
	            'max_height'    => 768
	        ];

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload()){
	            $error = array('error' => $this->upload->display_errors());

	            $this->load->view('admin/staff_upload', $error);
	        }
	        else{
	            $file = $this->upload->data();

	            $now = time();
	            $tgl = unix_to_human($now, TRUE, 'us');
	            $str1 = str_replace(' ' , '',  $file['file_name'] .  set_value('caption'));
	            $toid = str_replace('.','',$str1 );
	            //print_r($file);
	            $data = [
	                'id_images'     => $toid ,
	                'file'          => 'uploads/' . $file['file_name'],
	                'title'         => set_value('caption'),
	                'date'          => $tgl,
	                'description'   => set_value('description'),
	                'status'        => set_value('radioOption')
	            ];
	            $this->gallery_model->create($data);
	            $this->session->set_flashdata('message','Foto berhasil diupload..');
	            redirect('admin/dashboard/staff');                                  
	            }        
        }

	}

	function staff_edit($id){
		$rules =    [
            [
                'field' => 'caption',
                'label' => 'Caption',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($rules);
        $image = $this->gallery_model->getById($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/staff_edit',['image'=>$image]);
        }
        else{
	        $datagallery['title']   = set_value('caption');
	        $datagallery['description']   = set_value('description');
	        $datagallery['status']   = set_value('radioOption');

	        $this->gallery_model->update($id,$datagallery);
	        $this->session->set_flashdata('message','Foto telah diperbarui...');
	       	redirect('admin/dashboard/staff');
        }
	}

	function staff_hapus($id){
		$this->gallery_model->delete($id);
        $this->session->set_flashdata('message','Foto telah dihapus..');
        redirect('admin/dashboard/staff');
	}

//-------------------------------------KONTAK------------------------------------------
//-------------------------------------------------------------------------------------
	function kontak_edit($id){
		
		$dat = $this->kontak_model->getById($id);
		$row = $dat->row();

		$stts;
		
		if ($row->status_tayang == 'hidden'){
			$new['status_tayang'] = 'show';
			$this->kontak_model->setStatus($id,$new);
			$stts = 'ditayangkan';
		}


		if ($row->status_tayang == 'show'){
			$new['status_tayang'] = 'hidden';
			$this->kontak_model->setStatus($id,$new);
			$stts = 'disembunyikan';
		}

		
		
		$this->session->set_flashdata('message','Pesan berhasil '.$stts.'....');
		redirect('admin/dashboard/','resresh');
	}

	function kontak_baca($id){
		$result = $this->kontak_model->setbaca($id);
		$data= $result->row();
		$this->load->view('admin/kontakbaca',['kontakdibaca' => $data,'kontak' => $this->data['kontak'],'kontakbaca' =>$this->data['kontakbaca'] , 'username' => $this->data['username']]);
	}

	function kontak_hapus($id){
		$this->kontak_model->delete($id);
		$this->session->set_flashdata('message','Pesan berhasil dihapus....');
		redirect('admin/dashboard/', 'refresh');
	}
//-------------------------------------TENTANG-----------------------------------------
//-------------------------------------------------------------------------------------

	function tentang(){		
        $this->load->view('admin/visi_misi',$this->data);


	}

	function tentang_update()
	{
		$this->load->view('admin/visi_misi',$this->data);


		$this->form_validation->set_rules('visi','Visi','required');
		$this->form_validation->set_rules('misi','Misi','required');

		if ($this->form_validation->run() == FALSE){
              $this->load->view('admin/visi_misi',$this->data);
        }
        else{

        	$datavismis['visi'] = set_value('visi');
        	$datavismis['misi'] = set_value('misi'); 
        	
		    $this->visi_misi_model->update($datavismis);
		    $this->session->set_flashdata('message','Data visi dan misi telah diperbarui...');
		    redirect('admin/dashboard/visi_misi');
		}
	}

//-------------------------------------LOGOUT------------------------------------------
//-------------------------------------------------------------------------------------
	function logout(){
   		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('home', 'refresh');
   }


}
 ?>