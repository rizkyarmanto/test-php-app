<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('pretty_date')) {

    function pretty_date($date = '', $format = '', $timezone = TRUE) {
        $date_str = strtotime($date);

        if (empty($format)) {
            $date_pretty = date('l, d/m/Y H:i', $date_str);
        } else {
            $date_pretty = date($format, $date_str);
        }

        if ($timezone) {
            $date_pretty .= ' WIB';
        }

        $date_pretty = str_replace('Sunday', 'Minggu', $date_pretty);
        $date_pretty = str_replace('Monday', 'Senin', $date_pretty);
        $date_pretty = str_replace('Tuesday', 'Selasa', $date_pretty);
        $date_pretty = str_replace('Wednesday', 'Rabu', $date_pretty);
        $date_pretty = str_replace('Thursday', 'Kamis', $date_pretty);
        $date_pretty = str_replace('Friday', 'Jumat', $date_pretty);
        $date_pretty = str_replace('Saturday', 'Sabtu', $date_pretty);

        $date_pretty = str_replace('January', 'Januari', $date_pretty);
        $date_pretty = str_replace('February', 'Februari', $date_pretty);
        $date_pretty = str_replace('March', 'Maret', $date_pretty);
        $date_pretty = str_replace('April', 'April', $date_pretty);
        $date_pretty = str_replace('May', 'Mei', $date_pretty);
        $date_pretty = str_replace('June', 'Juni', $date_pretty);
        $date_pretty = str_replace('July', 'Juli', $date_pretty);
        $date_pretty = str_replace('August', 'Agustus', $date_pretty);
        $date_pretty = str_replace('September', 'September', $date_pretty);
        $date_pretty = str_replace('October', 'Oktober', $date_pretty);
        $date_pretty = str_replace('November', 'November', $date_pretty);
        $date_pretty = str_replace('December', 'Desember', $date_pretty);

        return $date_pretty;
    }

}

if (!function_exists('delkoma')) {
	function delkoma($s){
	  	if($s!=""){
	  		$s=substr($s,0,strlen($s)-1);
		}
		return $s;
	  }
}
if (!function_exists('formatnumberdb')) {
	function formatnumberdb($p){
		$s="";
		if($p!=""){
			$s=($p!=""?str_replace(',','.',str_replace('.','',$p)):'');
		}
		return $s;
	}
}
if (!function_exists('formatnumberapp')) {
	function formatnumberapp($p,$a=0){
		$s="";
		$p=(string) $p;
		if($p!=""){
			$s=number_format($p,$a,',','.');
		}
		return $s;
	}
}
if (!function_exists('printby')) {
	function printby($b,$p){
		$s="";
		if($b=="pdf"){
			$s=formatnumberapp($p);
		}
		else if($b="exl"){
			$s=$p;
		}
		return $s;
	}
}

if (!function_exists('InggrisTgla')) {
	function InggrisTgla($tanggal){
		$awal="";
		if($tanggal!=""){
			$tgl=substr($tanggal,0,2);
			$bln=substr($tanggal,3,2);
			$thn=substr($tanggal,6,4);
			$awal="$thn-$bln-$tgl";
		}
		return $awal;
	}
}

if (!function_exists('InggrisTgl')) {
	function InggrisTgl($tanggal){
		$awal="";
		if($tanggal!=""){
			if(strpos($tanggal,"-")>0||strpos($tanggal,"/")>0){
				$p=(strpos($tanggal,"-")>0?"-":"/");
				$arr=explode($p,$tanggal);
				$tgl=intval($arr[0]);
				$bln=intval($arr[1]);
				$thn=intval($arr[2]);
				$awal="$thn-$bln-$tgl";
			}
		}
		return $awal;
	}
}

if (!function_exists('IndonesiaTgl')) {
	function IndonesiaTgl($tanggal){
		$awal="";
		if($tanggal!=""){
			$tgl=substr($tanggal,8,2);
			$bln=substr($tanggal,5,2);
			$thn=substr($tanggal,0,4);
			$awal="$tgl/$bln/$thn";
		}
		return $awal;
	}
}

if (!function_exists('namabulan')) {
	function namabulan($p){
		$s="";
		if($p!=""){
			$bulan = array(
                1 => 'JANUARI',
                2 => 'FEBRUARI',
                3 => 'MARET',
                4 => 'APRIL',
                5 => 'MEI',
                6 => 'JUNI',
                7 => 'JULI',
                8 => 'AGUSTUS',
                9 => 'SEPTEMBER',
                10 => 'OKTOBER',
                11 => 'NOVEMBER',
                12 => 'DESEMBER',
       	 	);
			$s=$bulan[intval($p)];
		}
		return $s;
	}
}

if (!function_exists('konversi_tanggal')) {
	function konversi_tanggal($format, $tanggal="now", $bahasa="id"){
	 $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
	 "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	 
	 $id=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
	 "Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September",
	 "Oktober","Nopember","Desember");
	 
	 $idshort=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
	 "Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep",
	 "Okt","Nop","Des");
	 
	 // tambahan untuk bahasa prancis
	 // sumber http://w.blankon.in/6V
	 $fr = array("dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi",
	 "janvier","février","mars","avril","Mei","mai","juillet","aoùt","septembre",
	 "octobre","novembre","décembre");
	 
	 // mengganti kata yang berada pada array en dengan array id, fr (default id)
	 if($tanggal!=""){
	 return str_replace($en,$$bahasa,date($format,strtotime($tanggal)));
	 }
	 //menampilkan tanggal saat ini
	 //keluaran Tue, 26 Mar 2013
	 //echo date("D, j M Y")."<br/>";
	 
	 //menampilkan tanggal saat ini setelah di konversi
	 //keluaran Minggu, 13 Maret 2011
	 //echo konversi_tanggal("D, j M Y")."<br/>";
	 
	 //menampilkan bulan saat ini
	 //keluaran Maret
	 //echo konversi_tanggal("M")."<br/>";
	 
	 //menampilkan hari saat ini
	 //keluaran Minggu
	 //echo konversi_tanggal("D")."<br/>";
	 
	 //konversi tanggal dari format tanggal di mysql
	 //keluaran Jumat, 17 Agustus 1945
	 //echo konversi_tanggal("D, j M Y","1945-08-17")."<br/>";
	 
	 //konversi tanggal dari format tanggal di mysql
	 //keluaran Jumat
	 //echo konversi_tanggal("D","1945-08-17")."<br/>";
	 
	 //konversi tanggal dari format tanggal di mysql
	 //keluaran Agustus
	 //echo konversi_tanggal("M","1945-08-17")."<br/>";
	 
	 //konversi tanggal dari format dengan bahasa lain
	 //keluaran dimanche, 17 avril 1988
	 //echo konversi_tanggal("D, j M Y","1988-04-17", "fr")."<br/>";
	}
}



if (!function_exists('upload_url')) {

    function upload_url($name = '') {
        if (stristr($name, '://') !== FALSE) {
            return $name;
        } else {
            return base_url('uploads/' . $name);
        }
    }

}

if (!function_exists('media_url')) {

    function media_url($name = '') {
        $CI = & get_instance();
        $media_url = $CI->config->item('media_url');

        if ($media_url != '-') {
            return $media_url . $name;
        } else {
            return base_url().'media/'.$name;
        }
    }

}
