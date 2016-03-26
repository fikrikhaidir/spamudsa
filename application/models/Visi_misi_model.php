<?php 
/**
* 
*/
class Visi_misi_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getVisiMisi(){
		$query = $this->db->get('visi_misi');  
         return $query;
	}

	function update($data){
		try{
			$this->db->where('id_visiMisi',1)->limit(1)->update('id_visiMisi',$data);
			return true;
	}
		catch (Exception $e) {
			echo $e->getMessage();
		}
}
}


  ?>