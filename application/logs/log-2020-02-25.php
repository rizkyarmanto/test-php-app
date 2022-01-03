<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-25 06:07:18 --> Severity: Notice --> Undefined variable: date C:\xampp\htdocs\koperasi\application\controllers\M_user.php 45
ERROR - 2020-02-25 06:07:18 --> Severity: Error --> Call to a member function format() on a non-object C:\xampp\htdocs\koperasi\application\controllers\M_user.php 45
ERROR - 2020-02-25 06:09:35 --> Severity: Notice --> Undefined variable: date C:\xampp\htdocs\koperasi\application\controllers\M_user.php 45
ERROR - 2020-02-25 06:09:35 --> Severity: Error --> Function name must be a string C:\xampp\htdocs\koperasi\application\controllers\M_user.php 45
ERROR - 2020-02-25 08:31:26 --> 404 Page Not Found: Uploads/foto
ERROR - 2020-02-25 08:31:29 --> 404 Page Not Found: Uploads/foto
ERROR - 2020-02-25 08:32:13 --> 404 Page Not Found: Uploads/foto
ERROR - 2020-02-25 08:32:16 --> 404 Page Not Found: Uploads/foto
ERROR - 2020-02-25 08:34:36 --> 404 Page Not Found: Uploads/foto
ERROR - 2020-02-25 08:38:09 --> Severity: Notice --> Undefined variable: upload_data C:\xampp\htdocs\koperasi\application\controllers\M_user.php 70
ERROR - 2020-02-25 08:38:11 --> Severity: Notice --> Undefined variable: upload_data C:\xampp\htdocs\koperasi\application\controllers\M_user.php 70
ERROR - 2020-02-25 08:38:53 --> Severity: Notice --> Undefined variable: upload_data C:\xampp\htdocs\koperasi\application\controllers\M_user.php 70
ERROR - 2020-02-25 08:39:14 --> Severity: Notice --> Undefined variable: upload_data C:\xampp\htdocs\koperasi\application\controllers\M_user.php 70
ERROR - 2020-02-25 08:41:12 --> Severity: Notice --> Undefined variable: upload_data C:\xampp\htdocs\koperasi\application\controllers\M_user.php 70
ERROR - 2020-02-25 16:23:49 --> Severity: Compile Error --> Cannot use isset() on the result of a function call (you can use "null !== func()" instead) C:\xampp\htdocs\koperasi\application\views\layout.php 2
ERROR - 2020-02-25 16:34:18 --> 404 Page Not Found: Login/index
ERROR - 2020-02-25 16:34:37 --> 404 Page Not Found: Login/index
ERROR - 2020-02-25 16:45:42 --> Severity: Notice --> Undefined variable: keterangan C:\xampp\htdocs\koperasi\application\views\tbl_angsuran.php 46
ERROR - 2020-02-25 16:45:42 --> Severity: Notice --> Undefined variable: stsampun C:\xampp\htdocs\koperasi\application\views\tbl_angsuran.php 47
ERROR - 2020-02-25 16:45:42 --> Severity: Notice --> Undefined variable: keterangan C:\xampp\htdocs\koperasi\application\views\tbl_angsuran.php 46
ERROR - 2020-02-25 16:45:42 --> Severity: Notice --> Undefined variable: stsampun C:\xampp\htdocs\koperasi\application\views\tbl_angsuran.php 47
ERROR - 2020-02-25 16:45:42 --> Severity: Notice --> Undefined variable: keterangan C:\xampp\htdocs\koperasi\application\views\tbl_angsuran.php 46
ERROR - 2020-02-25 16:45:42 --> Severity: Notice --> Undefined variable: stsampun C:\xampp\htdocs\koperasi\application\views\tbl_angsuran.php 47
ERROR - 2020-02-25 16:45:42 --> Severity: Notice --> Undefined variable: keterangan C:\xampp\htdocs\koperasi\application\views\tbl_angsuran.php 46
ERROR - 2020-02-25 16:45:42 --> Severity: Notice --> Undefined variable: stsampun C:\xampp\htdocs\koperasi\application\views\tbl_angsuran.php 47
ERROR - 2020-02-25 18:02:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'on a1.id_anggota=b1.id_anggota and b1.status='Aktif'' at line 11 - Invalid query: update t_trans_pin_det_tbl a 
				join (
				select id_trans_pin_mst,max(tgl_jatuhtempo)tgl_jatuhtempo
				from t_trans_pin_det_tbl
				where tgl_jatuhtempo<=curdate()
				group by id_trans_pin_mst) b
				on a.id_trans_pin_mst=b.id_trans_pin_mst and a.tgl_jatuhtempo=b.tgl_jatuhtempo
				and a.sts_angsuran=0 and coalesce(a.stsampun,0)=0
				set tgl_bayar=curdate(),sts_angsuran=1
				where a.id_trans_pin_mst in 
				(select a1.id_trans_pin_mst from t_trans_pin_mst_tbl a1, v_anggota b1 on a1.id_anggota=b1.id_anggota and b1.status='Aktif'
ERROR - 2020-02-25 18:03:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'on a1.id_anggota=b1.id_anggota and b1.status='Aktif'' at line 11 - Invalid query: update t_trans_pin_det_tbl a 
				join (
				select id_trans_pin_mst,max(tgl_jatuhtempo)tgl_jatuhtempo
				from t_trans_pin_det_tbl
				where tgl_jatuhtempo<=curdate()
				group by id_trans_pin_mst) b
				on a.id_trans_pin_mst=b.id_trans_pin_mst and a.tgl_jatuhtempo=b.tgl_jatuhtempo
				and a.sts_angsuran=0 and coalesce(a.stsampun,0)=0
				set tgl_bayar=curdate(),sts_angsuran=1
				where a.id_trans_pin_mst in 
				(select a1.id_trans_pin_mst from t_trans_pin_mst_tbl a1, v_anggota b1 on a1.id_anggota=b1.id_anggota and b1.status='Aktif'
ERROR - 2020-02-25 18:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 11 - Invalid query: update t_trans_pin_det_tbl a 
				join (
				select id_trans_pin_mst,max(tgl_jatuhtempo)tgl_jatuhtempo
				from t_trans_pin_det_tbl
				where tgl_jatuhtempo<=curdate()
				group by id_trans_pin_mst) b
				on a.id_trans_pin_mst=b.id_trans_pin_mst and a.tgl_jatuhtempo=b.tgl_jatuhtempo
				and a.sts_angsuran=0 and coalesce(a.stsampun,0)=0
				set tgl_bayar=curdate(),sts_angsuran=1
				where a.id_trans_pin_mst in 
				(select a1.id_trans_pin_mst from t_trans_pin_mst_tbl a1, v_anggota b1 where a1.id_anggota=b1.id_anggota and b1.status='Aktif'
ERROR - 2020-02-25 18:04:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 11 - Invalid query: update t_trans_pin_det_tbl a 
				join (
				select id_trans_pin_mst,max(tgl_jatuhtempo)tgl_jatuhtempo
				from t_trans_pin_det_tbl
				where tgl_jatuhtempo<=curdate()
				group by id_trans_pin_mst) b
				on a.id_trans_pin_mst=b.id_trans_pin_mst and a.tgl_jatuhtempo=b.tgl_jatuhtempo
				and a.sts_angsuran=0 and coalesce(a.stsampun,0)=0
				set tgl_bayar=curdate(),sts_angsuran=1
				where a.id_trans_pin_mst in 
				(select a1.id_trans_pin_mst from t_trans_pin_mst_tbl a1, v_anggota b1 where a1.id_anggota=b1.id_anggota and b1.status='Aktif'
ERROR - 2020-02-25 18:04:46 --> Query error: Unknown column 'a1.id_trans_pin_mst' in 'field list' - Invalid query: update t_trans_pin_det_tbl a 
				join (
				select id_trans_pin_mst,max(tgl_jatuhtempo)tgl_jatuhtempo
				from t_trans_pin_det_tbl
				where tgl_jatuhtempo<=curdate()
				group by id_trans_pin_mst) b
				on a.id_trans_pin_mst=b.id_trans_pin_mst and a.tgl_jatuhtempo=b.tgl_jatuhtempo
				and a.sts_angsuran=0 and coalesce(a.stsampun,0)=0
				set tgl_bayar=curdate(),sts_angsuran=1
				where a.id_trans_pin_mst in 
				(select a1.id_trans_pin_mst from t_trans_pin_mst_tbl a1, v_anggota b1 where a1.id_anggota=b1.id_anggota and b1.status='Aktif')
