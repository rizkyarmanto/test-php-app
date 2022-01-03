<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
	}
	function index(){
		//$this->load->view('product_view');
		$data['title'] = 'Daftar Product';
     	$data['main'] = 'product_view';
		$this->load->view('layout',$data);
	}

	function product_data(){
		$data=$this->product_model->product_list();
		echo json_encode($data);
	}

	function save(){
		$params['product_code'] = $this->input->post('product_code');
		$params['product_name'] = $this->input->post('product_name');
		$params['price'] = $this->input->post('price');
		$data=$this->product_model->add($params);
		if (!empty($_FILES['inputImage']['name'])) {
			$date   = new DateTime();
            $paramsupdate['file'] = $this->do_upload('file',$date->format('Y-m-d-H-i-s').'-'.$_FILES['file']['name']);
        }
		$id=$data;
        $paramsupdate['id'] = $data;
        $this->User_model->add($paramsupdate);
		echo json_encode($data);
	}

	function del(){
		$params['id'] = $this->input->post('id');
		$data=$this->product_model->del();
		echo json_encode($data);
	}
	
	// Setting Upload File Requied
    function do_upload($name = NULL,$newname=NULL) {
        $this->load->library('upload');

        $config['upload_path'] = FCPATH . 'file/';
		//if($newname!=NULL){
			$config['file_name']=$newname;
		//}
        /* create directory if not exist */
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|xls|xlsx|pdf|txt';
        $config['max_size'] = '32000';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($name)) {
//            echo $config['upload_path'];
//            echo $this->upload->display_errors('');
//            die();
            $this->session->set_flashdata('failed', $this->upload->display_errors('', ''));
            redirect(uri_string());
        }
		
		//make small image
		$fileName = $_FILES[$name]["name"];
		$extensions = explode(".",$fileName);
		$extension = $extensions[count($extensions)-1];
		
		if ($extension=="jpg" || $extension=="jpeg" || $extension=="gif" || $extension == "png") {
		    $file_type = "image";
		    $size=filesize($_FILES[$name]['tmp_name']);
		    $image =$_FILES[$name]["name"];
			$uniqueName=$image;
		    $uploadedfile = $_FILES[$name]['tmp_name'];
			$uploaddir=$config['upload_path'];
		
		    if ($image)
		    {
		        if($extension=="jpg" || $extension=="jpeg" )
		        {
		            $uploadedfile = $_FILES[$name]['tmp_name'];
		            $src = imagecreatefromjpeg($uploadedfile);
		        }
		        else if($extension=="png")
		        {
		            $uploadedfile = $_FILES[$name]['tmp_name'];
		            $src = imagecreatefrompng($uploadedfile);
		        }
		        else
		        {
		            $src = imagecreatefromgif($uploadedfile);
		        }
		
		        list($width,$height)=getimagesize($uploadedfile);
				
				if($width>400){
					$newwidth=400;
		        	$newheight=($height/$width)*$newwidth;
				}
				else{
					$newwidth=$width;$newheight=$height;
				}
				
		        $tmp=imagecreatetruecolor($newwidth,$newheight);
				
		        imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
				
		        $filename = $uploaddir . $newname;
				
		        imagejpeg($tmp,$filename,100);
				
		        $newwidth=225;
		        $newheight=($height/$width)*$newwidth;
		        $tmp=imagecreatetruecolor($newwidth,$newheight);
		
		        imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
				
		        $filename = $uploaddir . "small" .$newname;
		
		        imagejpeg($tmp,$filename,100);
				
				$namafileupload=$newname;
		        imagedestroy($src);
		        imagedestroy($tmp);
		    }
		}
		else{
			$upload_data = $this->upload->data();
			$namafileupload=$upload_data['file_name'];
		}
		
        return $namafileupload;
    }

}