<?php
class M_dashboard_model extends CI_Model{
	function grafik1($params = array()){
		$str=" select a.nm_layanan,coalesce(b.responden,0)sm1,coalesce(c.responden,0)sm2 from m_layanan a ".
			 " left join ( ".
			 " select count(distinct no,id_layanan,tgl_isi) responden,id_layanan from t_kuesioner ".
			 " where bulan<=6 ";
			 if ($params['tahun']!="") {
			 	$str.=" and tahun=".$params['tahun'];
	         }
			 $str.=" group by id_layanan) b on a.id_layanan=b.id_layanan".
			 " left join ( ".
			 " select count(distinct no,tgl_isi) responden,id_layanan from t_kuesioner ".
			 " where bulan>=7 ";
			 if ($params['tahun']!="") {
			 	$str.=" and tahun=".$params['tahun'];
	         }
			 $str.=" group by id_layanan) c on a.id_layanan=c.id_layanan";
		$res=$this->db->query($str);
		return $res->result_array();
	}
	function grafik2($params = array()){
		$str=" select nm_layanan,coalesce(c.ikm,0)sm1,coalesce(e.ikm,0)sm2 ".
			 " from m_layanan a  ".
			 " left join ( ".
			 " select id_layanan,round(round(sum(b.ikm),3)*25,3)ikm from ( ".
			 " select round(round(avg(nilai),3)*0.111,3) ikm,id_layanan,id_mkuesioner from t_kuesioner c  ".
			 " where bulan<=6 ";
			 if ($params['tahun']!="") {
			 	$str.=" and tahun=".$params['tahun'];
	         }
			 $str.=" group by id_layanan,id_mkuesioner ) b ".
			 " group by b.id_layanan)c on a.id_layanan=c.id_layanan  ".
			 " left join ( ".
			 " select id_layanan,round(round(sum(d.ikm),3)*25,3)ikm from ( ".
			 " select round(round(avg(nilai),3)*0.111,3) ikm,id_layanan,id_mkuesioner from t_kuesioner c  ".
			 " where bulan>=7 ";
			 if ($params['tahun']!="") {
			 	$str.=" and tahun=".$params['tahun'];
	         }
			 $str.=" group by id_layanan,id_mkuesioner ) d ".
			 " group by id_layanan)e on a.id_layanan=e.id_layanan ";
		$res=$this->db->query($str);
		return $res->result_array();
	}
	function grafik3($params = array()){
		$str=" select distinct a.tahun,coalesce(c.ikm,0) sm1,coalesce(e.ikm,0) sm2 from t_kuesioner a ".
			 " left join ( ".
			 " select tahun,coalesce(round(round(sum(b.ikm),3)*25,3),0)ikm from ( ".
			 " select round(round(avg(nilai),3)*0.111,3) ikm,tahun,id_mkuesioner from t_kuesioner c ".
			 " where bulan<=6 ".
			 " group by tahun,id_mkuesioner ".
			 " ) b group by b.tahun ".
			 " ) c on a.tahun=c.tahun ".
			 " left join ( ".
			 " select tahun,coalesce(round(round(sum(d.ikm),3)*25,3),0)ikm from ( ".
			 " select round(round(avg(nilai),3)*0.111,3) ikm,tahun,id_mkuesioner from t_kuesioner c ".
			 " where bulan>=7 ".
			 " group by tahun,id_mkuesioner ".
			 " ) d group by d.tahun ".
			 " ) e on a.tahun=e.tahun where 1=1 ";
			 if ($params['tahun_mulai']!="") {
			 	$str.=" and a.tahun>=".$params['tahun_mulai'];
	         }
			 if ($params['tahun_akhir']!="") {
			 	$str.=" and a.tahun<=".$params['tahun_akhir'];
	         }
			 $str.=" order by a.tahun ";
			 if ($params['tahun_mulai']==""&&$params['tahun_akhir']=="") {
			 	$str.=" limit 5";
			 }
		$res=$this->db->query($str);
		return $res->result_array();
	}
	function grafik4($params = array()){
		$str=" select distinct a.tahun,coalesce(b.responden,0) sm1,coalesce(c.responden,0) sm2 from t_kuesioner a ".
			 " left join ( ".
			 " select tahun,coalesce(count(distinct no,tgl_isi),0) responden from t_kuesioner ".
			 " where bulan<=6 ".
			 " group by tahun) b on a.tahun=b.tahun "; 
			 $str.=" left join ( ".
			 " select tahun,coalesce(count(distinct no,id_layanan,tgl_isi),0) responden from t_kuesioner ".
			 " where bulan>=7 ".
			 " group by tahun) c on a.tahun=c.tahun where 1=1 "; 
			 if ($params['tahun_mulai']!="") {
			 	$str.=" and a.tahun>=".$params['tahun_mulai'];
	         }
			 if ($params['tahun_akhir']!="") {
			 	$str.=" and a.tahun<=".$params['tahun_akhir'];
	         }
			 $str.=" order by a.tahun ";
			 if ($params['tahun_mulai']==""&&$params['tahun_akhir']=="") {
			 	$str.=" limit 5";
			 }
		$res=$this->db->query($str);
		return $res->result_array();
	}
}