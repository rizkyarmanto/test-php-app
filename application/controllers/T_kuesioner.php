<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_kuesioner extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->has_userdata('uname')){
			redirect(site_url('auth'));
		}
		$this->load->model('T_kuesioner_model');
		$this->load->model('M_umum_model');
	}
	function index(){
		$data['title'] = 'Daftar Kuesioner';
     	$data['main'] = 't_kuesioner_list';
     	$data['list'] = $this->T_kuesioner_model->daftar();
		$data['arrLink']=array(
				array("Kuesioner",site_url('t_kuesioner'))
				);
		$data['tambah'] = 'href="'.site_url('t_kuesioner/add').'"';
		$this->load->view('layout',$data);
	}
	function daftar_bulan(){
		$data['title'] = 'Daftar Kuesioner';
     	$data['main'] = 'f_kuesioner_list';
     	$data['list'] = $this->T_kuesioner_model->daftar_kuisbulan();
		$data['arrLink']=array(
				array("Kuesioner",site_url('t_kuesioner/daftar_bulan'))
				);
		$this->load->view('layout',$data);
	}
	function kunci_bulan(){
		$params['id'] = $this->input->post('id_kunci');
		$params['sts'] = $this->input->post('sts_kunci');
		$dt=$this->T_kuesioner_model->add_kunci($params);
		$data['title'] = 'Daftar Kuesioner';
     	$data['main'] = 'f_kuesioner_list';
     	$data['list'] = $this->T_kuesioner_model->daftar_kuisbulan();
		$data['arrLink']=array(
				array("Kuesioner",site_url('t_kuesioner/daftar_bulan'))
				);
		$this->load->view('layout',$data);
	}
	function add(){
		$this->load->model('M_layanan_model');
		$data['id_layanan'] = $this->input->post('id_layanan');
		$data['tgl_isi'] = $this->input->post('tgl_isi');
		$sts_kunci=0;
		if($data['id_layanan']!=""&&$data['tgl_isi']!=""){
			$params['id_layanan']=$data['id_layanan'];
			$params['bulan']=konversi_tanggal("n",InggrisTgl($data['tgl_isi']));
			$params['tahun']=konversi_tanggal("Y",InggrisTgl($data['tgl_isi']));
			$res_sts_kunci=$this->T_kuesioner_model->daftar_kunci($params);
			if(!empty($res_sts_kunci)){
				$sts_kunci=$res_sts_kunci[0]['kunci'];
			}
			if($sts_kunci==1){
				$data['tahun']=$params['tahun'];
				$data['bulan']=$params['bulan'];
				$data['nm_layanan']="";
				$res_nm_layanan= $this->M_layanan_model->daftar(array("id"=>$data['id_layanan']));
				if(!empty($res_nm_layanan)){
					$data['nm_layanan']=$res_nm_layanan["nm_layanan"];
				}
			}
		}
     	$data['layanan'] = $this->M_layanan_model->daftar();
     	$data['mkuis'] = $this->T_kuesioner_model->daftar_mkuis();
		$str="";
		$data['operation'] ="Tambah";
		if(!empty($data['mkuis'])&&!is_null($data['id_layanan'])&&!is_null($data['tgl_isi'])&&$sts_kunci==0){
			$str="select m0.usia,m0.id_jeniskelamin,m0.id_pendidikan,m0.id_pekerjaan,m0.id_layanan";
			$j=1;
			foreach ($data['mkuis'] as $row){
				$str.=",m".$j.".nilai u".$row["id_mkuesioner"];
				$j=$j+1;
			}
			$str.=" from ( ".
			" select distinct id_layanan,tgl_isi,no,usia,id_jeniskelamin,id_pekerjaan,id_pendidikan ".
			" from t_kuesioner where id_layanan=".$data['id_layanan']." and str_to_date(tgl_isi,'%Y-%m-%e')=str_to_date('".InggrisTgl($data['tgl_isi'])."','%Y-%m-%e')".
			" ) m0";
			$j=1;
			foreach ($data['mkuis'] as $row){
				$str.=" left join t_kuesioner m".$j."  ".
					  " on m0.id_layanan=m".$j.".id_layanan  ".
					  " and m0.tgl_isi=m".$j.".tgl_isi and m0.no=m".$j.".no ".
					  " and m".$j.".id_mkuesioner=".$row["id_mkuesioner"]."";
				$j=$j+1;
			}
			$str.=" order by m0.id_layanan,m0.no";
			$data['kuis']=$this->T_kuesioner_model->daftar_kuispivot($str);
			if(!empty($data['kuis'])){
				$data['operation'] ="Ubah";
			}
		}
		$data['jeniskelamin'] =$this->M_umum_model->daftar_jeniskelamin();
		$data['pendidikan'] =$this->M_umum_model->daftar_pendidikan();
		$data['pekerjaan'] =$this->M_umum_model->daftar_pekerjaan();
		$data['sts_kunci'] =$sts_kunci;
		$data['title'] = $data['operation'].' Kuesioner';
     	$data['main'] = 't_kuesioner_add';
		$data['arrLink']=array(
			array("Kuesioner",site_url('t_kuesioner'))
		);
		$this->load->view('layout',$data);
	}
	function view(){
		$this->load->model('M_layanan_model');
		$id_layanan = $this->input->post('id_layanan');
		$data['id_layanan'] = $id_layanan;
		$params['id_layanan'] = $id_layanan;
		$data['tgl_isi'] = InggrisTgl($this->input->post('tgl_isi'));
		$data['res_nm_layanan']= $this->M_layanan_model->daftar(array("id"=>$id_layanan));
		$data['layanan'] = $this->M_layanan_model->daftar();
     	$data['mkuis'] = $this->T_kuesioner_model->daftar_mkuis();
		$str="";
		$data['operation'] ="Lihat";
		if(!empty($data['mkuis'])&&!is_null($data['id_layanan'])&&!is_null($data['tgl_isi'])){
			$str=" select m0.usia,m0.id_jeniskelamin,m0.id_pendidikan,m0.id_pekerjaan,m0.id_layanan,".
				 " b.nama jeniskelamin,c.nama pekerjaan,d.nama pendidikan";
			$j=1;
			foreach ($data['mkuis'] as $row){
				$str.=",m".$j.".nilai u".$row["id_mkuesioner"];
				$j=$j+1;
			}
			$str.=" from ( ".
			" select distinct id_layanan,tgl_isi,no,usia,id_jeniskelamin,id_pekerjaan,id_pendidikan ".
			" from t_kuesioner a where id_layanan=".$data['id_layanan']." and str_to_date(tgl_isi,'%Y-%m-%e')=str_to_date('".$data['tgl_isi']."','%Y-%m-%e')".
			" ) m0 ".
			" left join m_jeniskelamin b on b.id=m0.id_jeniskelamin".
			" left join m_pekerjaan c on c.id=m0.id_pekerjaan".
			" left join m_pendidikan d on d.id=m0.id_pendidikan";
			$j=1;
			foreach ($data['mkuis'] as $row){
				$str.=" left join t_kuesioner m".$j."  ".
					  " on m0.id_layanan=m".$j.".id_layanan  ".
					  " and m0.tgl_isi=m".$j.".tgl_isi and m0.no=m".$j.".no ".
					  " and m".$j.".id_mkuesioner=".$row["id_mkuesioner"]."";
				$j=$j+1;
			}
			
			$str.=" order by m0.id_layanan,m0.no";
			//echo $str;
			//die();
			$data['kuis']=$this->T_kuesioner_model->daftar_kuispivot($str);
		}
		$data['title'] = $data['operation'].' Kuesioner';
     	$data['main'] = 't_kuesioner_view';
		$data['arrLink']=array(
			array("Kuesioner",site_url('t_kuesioner'))
		);
		$this->load->view('layout',$data);
	}
	function view_bulan(){
		$this->load->model('M_layanan_model');
		$id_layanan = $this->input->post('id_layanan');
		$data['id_layanan'] = $id_layanan;
		$params['id_layanan'] = $id_layanan;
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun'] = $this->input->post('tahun');
		$data['res_nm_layanan']= $this->M_layanan_model->daftar(array("id"=>$id_layanan));
     	$data['layanan'] = $this->M_layanan_model->daftar();
     	$data['mkuis'] = $this->T_kuesioner_model->daftar_mkuis();
		$str="";
		$data['operation'] ="Lihat";
		if(!empty($data['mkuis'])&&!is_null($data['id_layanan'])&&!is_null($data['tahun'])&&!is_null($data['bulan'])){
			$str=" select m0.usia,m0.id_jeniskelamin,m0.id_pendidikan,m0.id_pekerjaan,m0.id_layanan,".
				 " b.nama jeniskelamin,c.nama pendidikan,d.nama pekerjaan";
			$j=1;
			foreach ($data['mkuis'] as $row){
				$str.=",m".$j.".nilai u".$row["id_mkuesioner"];
				$j=$j+1;
			}
			$str.=" from ( ".
			" select distinct id_layanan,tahun,bulan,no,usia,id_jeniskelamin,id_pekerjaan,id_pendidikan,tgl_isi ".
			" from t_kuesioner where id_layanan=".$data['id_layanan']." and bulan=".$data['bulan']." and tahun=".$data['tahun']."".
			" ) m0 ".
			" left join m_jeniskelamin b on b.id=m0.id_jeniskelamin".
			" left join m_pekerjaan c on c.id=m0.id_pekerjaan".
			" left join m_pendidikan d on d.id=m0.id_pendidikan";
			$j=1;
			foreach ($data['mkuis'] as $row){
				$str.=" left join t_kuesioner m".$j."  ".
					  " on m0.id_layanan=m".$j.".id_layanan and m0.tahun=m".$j.".tahun  ".
					  " and m0.bulan=m".$j.".bulan and m0.no=m".$j.".no and m0.tgl_isi=m".$j.".tgl_isi ".
					  " and m".$j.".id_mkuesioner=".$row["id_mkuesioner"]."";
				$j=$j+1;
			}
			$str.=" order by m0.id_layanan,m0.no";
			$data['kuis']=$this->T_kuesioner_model->daftar_kuispivot($str);
		}
		$data['title'] = $data['operation'].' Kuesioner';
     	$data['main'] = 'f_kuesioner_view';
		$data['arrLink']=array(
			array("Kuesioner",site_url('t_kuesioner'))
		);
		$this->load->view('layout',$data);
	}
	function view_all(){
		$this->load->model('M_layanan_model');
		$data['id_layanan'] = $this->input->post('id_layanan');
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun'] = $this->input->post('tahun');
		$data['stscari'] = $this->input->post('stscari');
     	$data['layanan'] = $this->M_layanan_model->daftar();
     	$data['mkuis'] = $this->T_kuesioner_model->daftar_mkuis();
		$str="";
		$data['operation'] ="Lihat";
		if(!empty($data['mkuis'])&&$data['stscari']!=""){
			$str=" select m0.usia,m0.id_jeniskelamin,m0.id_pendidikan,m0.id_pekerjaan,m0.id_layanan,".
				 " b.nama jeniskelamin,c.nama pendidikan,d.nama pekerjaan";
			$j=1;
			foreach ($data['mkuis'] as $row){
				$str.=",m".$j.".nilai u".$row["id_mkuesioner"];
				$j=$j+1;
			}
			$str.=" from ( ".
			" select distinct id_layanan,tahun,bulan,no,usia,id_jeniskelamin,id_pekerjaan,id_pendidikan,tgl_isi ".
			" from t_kuesioner where 1=1 ";
			if($data['id_layanan']!=""){
				$str.=" and id_layanan=".$data['id_layanan'];
			}
			if($data['bulan']!=""){
				$str.=" and bulan=".$data['bulan'];
			}
			if($data['tahun']!=""){
				$str.=" and tahun=".$data['tahun'];
			}
			$str.=" ) m0 ".
			" left join m_jeniskelamin b on b.id=m0.id_jeniskelamin".
			" left join m_pekerjaan c on c.id=m0.id_pekerjaan".
			" left join m_pendidikan d on d.id=m0.id_pendidikan";
			$j=1;
			foreach ($data['mkuis'] as $row){
				$str.=" left join t_kuesioner m".$j." on m0.no=m".$j.".no and m0.tgl_isi=m".$j.".tgl_isi ";
					  //if($data['id_layanan']!=""){
					  		$str.=" and m0.id_layanan=m".$j.".id_layanan ";
					  //}
					  //if($data['tahun']!=""){
					  //		$str.=" and m0.tahun=m".$j.".tahun ";
					  //}
					  //if($data['bulan']!=""){
					  //		$str.=" and m0.bulan=m".$j.".bulan ";
					  //}
					  $str.=" and m".$j.".id_mkuesioner=".$row["id_mkuesioner"];
				$j=$j+1;
			}
			$str.=" order by m0.id_layanan,m0.no";
			$data['kuis']=$this->T_kuesioner_model->daftar_kuispivot($str);
		}
		$data['title'] = $data['operation'].' Kuesioner';
     	$data['main'] = 'h_kuesioner_view';
		$data['arrLink']=array(
			array("Kuesioner",site_url('t_kuesioner'))
		);
		$this->load->view('layout',$data);
	}
	function laporan($type=NULL){
		$this->load->model('M_layanan_model');
		$stscetak = $this->input->post('stscetak');
		$data['id_layanan'] = $this->input->post('id_layanan');
		$nm_layanan="";
		if(isset($data['id_layanan'])){
			$data['res_nm_layanan']= $this->M_layanan_model->daftar(array("id"=>$data['id_layanan']));
			$nm_layanan="";
			if(!empty($data['res_nm_layanan'])){
				$data['nm_layanan']=$data['res_nm_layanan']["nm_layanan"];
				$nm_layanan=$data['nm_layanan'];
			}
		}
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun'] = $this->input->post('tahun');
		$data['semester'] = $this->input->post('semester');
		$data['stscari'] = $this->input->post('stscari');
		$data['type'] = $type;
     	$data['layanan'] = $this->M_layanan_model->daftar();
     	$data['mkuis'] = $this->T_kuesioner_model->daftar_mkuis();
		$str="";
		if($type==1){
			$data['title'] = ' Laporan IKM Global';
		}
		elseif($type==2){
			$data['title'] = ' Laporan IKM Perizinan';
		}
		if(!empty($data['mkuis'])&&$data['stscari']!=""){
			$str="select m0.usia,m0.id_layanan,".
			" b.nama jeniskelamin,c.nama pendidikan,d.nama pekerjaan";
			$j=1;
			foreach ($data['mkuis'] as $row){
				$str.=",m".$j.".nilai u".$row["id_mkuesioner"];
				$j=$j+1;
			}
			$str.=" from ( ".
			" select distinct id_layanan,tgl_isi,tahun,bulan,no,usia,id_jeniskelamin,id_pekerjaan,id_pendidikan ".
			" from t_kuesioner where 1=1 ";
			if($data['id_layanan']!=""){
				$str.=" and id_layanan=".$data['id_layanan'];
			}
			if($data['bulan']!=""){
				$str.=" and bulan=".$data['bulan'];
			}
			if($data['tahun']!=""){
				$str.=" and tahun=".$data['tahun'];
			}
			if($data['semester']!=""){
				$semester=(int)$data['semester'];
				if($semester==1){
					$str.=" and bulan in (1,2,3,4,5,6)";
				}
				elseif($semester==2){
					$str.=" and bulan in (7,8,9,10,11,12)";
				}
			}
			$str.=" ) m0 ".
			" left join m_jeniskelamin b on b.id=m0.id_jeniskelamin".
			" left join m_pekerjaan c on c.id=m0.id_pekerjaan".
			" left join m_pendidikan d on d.id=m0.id_pendidikan";
			$j=1;
			foreach ($data['mkuis'] as $row){
				$str.=" left join t_kuesioner m".$j." on m0.no=m".$j.".no and m0.tgl_isi=m".$j.".tgl_isi ";
					  //if($data['id_layanan']!=""){
					  		$str.=" and m0.id_layanan=m".$j.".id_layanan ";
					  //}
					  //if($data['tahun']!=""){
					  //		$str.=" and m0.tahun=m".$j.".tahun ";
					  //}
					  //if($data['bulan']!=""){
					 // 		$str.=" and m0.bulan=m".$j.".bulan ";
					  //}
					  if($data['semester']!=""){
							$semester=(int)$data['semester'];
							if($semester==1){
								$str.=" and m0.bulan in (1,2,3,4,5,6)";
							}
							elseif($semester==2){
								$str.=" and m0.bulan in (7,8,9,10,11,12)";
							}
					  }
					  $str.=" and m".$j.".id_mkuesioner=".$row["id_mkuesioner"];
				$j=$j+1;
			}
			$str.=" order by m0.id_layanan,m0.no";
			$data['kuis']=$this->T_kuesioner_model->daftar_kuispivot($str);
		}
		$data['main'] = 'laporan';
		$data['arrLink']=array(
			array("Laporan",site_url('t_kuesioner/laporan/'.$type))
		);
		
		if($stscetak=="pdf"){
			if($type==1){
				$data['judul_laporan']='LAPORAN IKM GLOBAL';
			}
			elseif($type==2){
				$data['judul_laporan']='LAPORAN IKM IZIN '.($nm_layanan!=""?" - ".$nm_layanan:"");
			}
		    if($data['semester']!=""){
				$semester=(int)$data['semester'];
				if($semester==1){
					$data['judul_laporan'].="<br>PERIODE JANUARI-JUNI ".$data['tahun'];
				}
				elseif($semester==2){
					$data['judul_laporan'].="<br>PERIODE JULI-DESEMBER ".$data['tahun'];
				}
		    }
			$this->load->library('pdfgenerator');
			$html = $this->load->view("laporan_prn", $data, true);
	    	$this->pdfgenerator->generate($html,'laporan');
		}
		$this->load->view('layout',$data);
	}
	function save(){
		$data['id_layanan'] = $this->input->post('id_layanan');
		$data['tgl_isi'] = $this->input->post('tgl_isi');
		$id_layanan=$data['id_layanan'];
		$tgl_isi=InggrisTgl($data['tgl_isi']);
		$no = $this->input->post('no');
		$usia = $this->input->post('usia');
		$id_jeniskelamin = $this->input->post('id_jeniskelamin');
		$id_pendidikan = $this->input->post('id_pendidikan');
		$id_pekerjaan = $this->input->post('id_pekerjaan');
     	$data['mkuis'] = $this->T_kuesioner_model->daftar_mkuis();
		$s="";
		foreach ($data['mkuis'] as $row){
			$s.='$m_'.$row["id_mkuesioner"].'=$this->input->post("m_'.$row["id_mkuesioner"].'");';
		}
		eval($s);
		$tahun=konversi_tanggal("Y",$tgl_isi);
		$bulan=konversi_tanggal("n",$tgl_isi);
		$s="";
		$index = 0;
		$dt = array();
		//echo count($id_pekerjaan).'<br>';
		$s="foreach (\$no as \$data_no){";
			foreach ($data['mkuis'] as $row){
				$s.="if(\$data_no!=''&&\$usia[\$index]!=''&&\$id_jeniskelamin[\$index]!=''){";
				$s.="array_push(\$dt, array(";
				$s.="'id_mkuesioner'=>".$row["id_mkuesioner"].",";
				$s.="'id_layanan'=>".$data['id_layanan'].",";
				$s.="'tgl_isi'=>'".$tgl_isi."',";
				$s.="'no'=>\$index,";
				$s.="'usia'=>\$usia[\$index],";
				$s.="'id_jeniskelamin'=>\$id_jeniskelamin[\$index],";
				$s.="'id_pendidikan'=>\$id_pendidikan[\$index],";
				$s.="'id_pekerjaan'=>\$id_pekerjaan[\$index],";
				$s.="'nilai'=>(\$m_".$row["id_mkuesioner"]."[\$index]==''?null:\$m_".$row["id_mkuesioner"]."[\$index]),";
				$s.="'tahun'=>'".$tahun."',";
				$s.="'bulan'=>'".$bulan."'";
				$s.="));";
				$s.="}";
			}
			$s.="\$index++;
		}";
		
		
		//foreach ($id_pekerjaan as $id_pekerjaan_no){
		//	echo $index.'<-->'.$usia[$index].'<-->'.$id_pendidikan[$index].'<br>';
		//	$index++;
		//}
		//echo $m.'<br>';
		//die();
		eval($s);
		//echo(json_encode($dt));
		//die();
		$params['id_layanan']=$id_layanan;
		$params['tgl_isi']=$tgl_isi;
		$params['bulan']=$bulan;
		$params['tahun']=$tahun;
		$data=$this->T_kuesioner_model->add($params,$dt);
		if($data){
			redirect('t_kuesioner');
		}
		else{
			$data['title'] = $data['operation'].' Kuesioner';
	     	$data['main'] = 't_kuesioner_add';
			$data['arrLink']=array(
				array("Kuesioner",site_url('t_kuesioner'))
			);
			$this->load->view('layout',$data);
		}
	}
	function del(){
		$params['id_layanan'] = $this->input->post('id_layanan');
		$params['tgl_isi'] = $this->input->post('tgl_isi');
		$data=$this->T_kuesioner_model->del($params);
		redirect('t_kuesioner');
	}
}