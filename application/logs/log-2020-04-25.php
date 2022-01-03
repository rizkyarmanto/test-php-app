<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-25 05:12:48 --> 404 Page Not Found: Media/assets
ERROR - 2020-04-25 05:12:49 --> 404 Page Not Found: Media/assets
ERROR - 2020-04-25 05:12:49 --> 404 Page Not Found: Media/assets
ERROR - 2020-04-25 05:32:17 --> Severity: Notice --> Undefined index: id_mkuesioner C:\xampp\htdocs\kuis\application\views\t_kuesioner_list.php 34
ERROR - 2020-04-25 05:32:17 --> Severity: Notice --> Undefined index: id_mkuesioner C:\xampp\htdocs\kuis\application\views\t_kuesioner_list.php 35
ERROR - 2020-04-25 05:32:17 --> Severity: Notice --> Undefined index: kuesioner C:\xampp\htdocs\kuis\application\views\t_kuesioner_list.php 35
ERROR - 2020-04-25 05:39:50 --> Severity: Notice --> Undefined index: id_mkuesioner C:\xampp\htdocs\kuis\application\views\t_kuesioner_list.php 34
ERROR - 2020-04-25 05:42:51 --> Severity: Notice --> Undefined index: id_layanan C:\xampp\htdocs\kuis\application\views\t_kuesioner_list.php 34
ERROR - 2020-04-25 05:44:00 --> Severity: Notice --> Undefined variable: role C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 171
ERROR - 2020-04-25 05:57:45 --> Severity: Notice --> Undefined variable: params C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 41
ERROR - 2020-04-25 05:58:14 --> Severity: Parsing Error --> syntax error, unexpected ';' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 41
ERROR - 2020-04-25 08:10:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`id_layanan`, `b`.`nm_layanan`, `a`.`tgl_isi`
FROM `k_kuesioner` `a`
LEFT JOIN ' at line 1 - Invalid query: SELECT `distinct` `a`.`id_layanan`, `b`.`nm_layanan`, `a`.`tgl_isi`
FROM `k_kuesioner` `a`
LEFT JOIN `m_layanan` `b` ON `a`.`id_layanan`=`b`.`id_layanan`
ERROR - 2020-04-25 08:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`id_layanan`, `b`.`nm_layanan`, `a`.`tgl_isi`
FROM `t_kuesioner` `a`
LEFT JOIN ' at line 1 - Invalid query: SELECT `distinct` `a`.`id_layanan`, `b`.`nm_layanan`, `a`.`tgl_isi`
FROM `t_kuesioner` `a`
LEFT JOIN `m_layanan` `b` ON `a`.`id_layanan`=`b`.`id_layanan`
ERROR - 2020-04-25 08:12:29 --> Severity: Error --> Call to undefined method CI_DB_mysqli_driver::select_distinct() C:\xampp\htdocs\kuis\application\models\T_kuesioner_model.php 5
ERROR - 2020-04-25 08:13:38 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\kuis\application\views\t_kuesioner_list.php 32
ERROR - 2020-04-25 08:13:38 --> Severity: Notice --> Undefined index: bulan C:\xampp\htdocs\kuis\application\views\t_kuesioner_list.php 32
ERROR - 2020-04-25 08:13:38 --> Severity: Notice --> Undefined index: id_kunci C:\xampp\htdocs\kuis\application\views\t_kuesioner_list.php 33
ERROR - 2020-04-25 08:45:01 --> Query error: Unknown column 'a.tgl_isi' in 'where clause' - Invalid query: select m0.nama,m0.alamat,m1.nilai u1,m2.nilai u2,m3.nilai u3,m4.nilai u4,m5.nilai u5,m6.nilai u6,m7.nilai u7,m8.nilai u8,m9.nilai u9 from (  select distinct id_layanan,tgl_isi,nama,alamat  from t_kuesioner where id_layanan=1 and str_to_date(a.tgl_isi,'%Y-%m-%e')=str_to_date('2020-04-20','%Y-%m-%e') ) m0 left join t_kuesioner m1   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m1.tgl_isi and m0.nama=m1.nama and m0.alamat=m1.alamat  and m1.id_mkuesioner=1 left join t_kuesioner m2   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m2.tgl_isi and m0.nama=m2.nama and m0.alamat=m2.alamat  and m2.id_mkuesioner=2 left join t_kuesioner m3   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m3.tgl_isi and m0.nama=m3.nama and m0.alamat=m3.alamat  and m3.id_mkuesioner=3 left join t_kuesioner m4   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m4.tgl_isi and m0.nama=m4.nama and m0.alamat=m4.alamat  and m4.id_mkuesioner=4 left join t_kuesioner m5   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m5.tgl_isi and m0.nama=m5.nama and m0.alamat=m5.alamat  and m5.id_mkuesioner=5 left join t_kuesioner m6   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m6.tgl_isi and m0.nama=m6.nama and m0.alamat=m6.alamat  and m6.id_mkuesioner=6 left join t_kuesioner m7   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m7.tgl_isi and m0.nama=m7.nama and m0.alamat=m7.alamat  and m7.id_mkuesioner=7 left join t_kuesioner m8   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m8.tgl_isi and m0.nama=m8.nama and m0.alamat=m8.alamat  and m8.id_mkuesioner=8 left join t_kuesioner m9   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m9.tgl_isi and m0.nama=m9.nama and m0.alamat=m9.alamat  and m9.id_mkuesioner=9
ERROR - 2020-04-25 11:27:35 --> 404 Page Not Found: Media/assets
ERROR - 2020-04-25 11:27:35 --> 404 Page Not Found: Media/assets
ERROR - 2020-04-25 11:35:21 --> Severity: Parsing Error --> syntax error, unexpected '?>' C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 175
ERROR - 2020-04-25 16:42:07 --> 404 Page Not Found: Media/assets
ERROR - 2020-04-25 16:42:07 --> 404 Page Not Found: Media/assets
ERROR - 2020-04-25 16:42:12 --> 404 Page Not Found: Media/assets
ERROR - 2020-04-25 16:42:13 --> 404 Page Not Found: Media/assets
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:33:24 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:34:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:45:16 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:53:49 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:56:01 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 19:57:04 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:33 --> Severity: Parsing Error --> syntax error, unexpected ''=$this->input->post("'' (T_CONSTANT_ENCAPSED_STRING) C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 73
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:22:58 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:10 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:30 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 114
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:23:38 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:24:11 --> Severity: Notice --> Undefined variable: row1 C:\xampp\htdocs\kuis\application\views\t_kuesioner_add.php 238
ERROR - 2020-04-25 20:27:52 --> Severity: Parsing Error --> syntax error, unexpected '=' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php(75) : eval()'d code 1
ERROR - 2020-04-25 20:28:28 --> Severity: Parsing Error --> syntax error, unexpected '=' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php(76) : eval()'d code 1
ERROR - 2020-04-25 20:34:17 --> Severity: Parsing Error --> syntax error, unexpected 'foreach' (T_FOREACH), expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 83
ERROR - 2020-04-25 20:35:17 --> Severity: Parsing Error --> syntax error, unexpected 'foreach' (T_FOREACH), expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 83
ERROR - 2020-04-25 20:35:21 --> Severity: Parsing Error --> syntax error, unexpected 'foreach' (T_FOREACH), expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 83
ERROR - 2020-04-25 20:36:52 --> Severity: Parsing Error --> syntax error, unexpected ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 85
ERROR - 2020-04-25 20:37:07 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 80
ERROR - 2020-04-25 20:37:07 --> Severity: Notice --> Undefined variable: data_nama C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 81
ERROR - 2020-04-25 20:37:07 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 82
ERROR - 2020-04-25 20:37:07 --> Severity: Notice --> Undefined variable: data_nama C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 83
ERROR - 2020-04-25 20:38:16 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 80
ERROR - 2020-04-25 20:38:16 --> Severity: Notice --> Undefined variable: data_nama C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 81
ERROR - 2020-04-25 20:38:16 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 82
ERROR - 2020-04-25 20:38:16 --> Severity: Notice --> Undefined variable: data_nama C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 83
ERROR - 2020-04-25 20:39:19 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 80
ERROR - 2020-04-25 20:39:19 --> Severity: Notice --> Undefined variable: data_nama C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 81
ERROR - 2020-04-25 20:39:19 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 82
ERROR - 2020-04-25 20:39:19 --> Severity: Notice --> Undefined variable: data_nama C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 83
ERROR - 2020-04-25 20:40:53 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 79
ERROR - 2020-04-25 20:40:53 --> Severity: Notice --> Undefined variable: data_nama C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 79
ERROR - 2020-04-25 20:42:27 --> Severity: Parsing Error --> syntax error, unexpected 'foreach' (T_FOREACH), expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 83
ERROR - 2020-04-25 20:42:45 --> Severity: Parsing Error --> syntax error, unexpected 'foreach' (T_FOREACH), expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 83
ERROR - 2020-04-25 20:44:39 --> Severity: Parsing Error --> syntax error, unexpected 'foreach' (T_FOREACH), expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 81
ERROR - 2020-04-25 20:45:51 --> Severity: Parsing Error --> syntax error, unexpected ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 78
ERROR - 2020-04-25 20:46:28 --> Severity: Parsing Error --> syntax error, unexpected 'foreach' (T_FOREACH), expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 81
ERROR - 2020-04-25 20:47:30 --> Severity: Parsing Error --> syntax error, unexpected ''nama'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 85
ERROR - 2020-04-25 20:47:45 --> Severity: Parsing Error --> syntax error, unexpected ';', expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 84
ERROR - 2020-04-25 20:50:30 --> Severity: Notice --> Undefined variable: index C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 78
ERROR - 2020-04-25 20:50:30 --> Severity: Notice --> Undefined variable: index C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 78
ERROR - 2020-04-25 20:50:30 --> Severity: Notice --> Undefined variable: index C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 78
ERROR - 2020-04-25 20:50:30 --> Severity: Notice --> Undefined variable: index C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 78
ERROR - 2020-04-25 20:50:30 --> Severity: Notice --> Undefined variable: index C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 78
ERROR - 2020-04-25 20:50:30 --> Severity: Notice --> Undefined variable: index C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 78
ERROR - 2020-04-25 20:50:30 --> Severity: Notice --> Undefined variable: index C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 78
ERROR - 2020-04-25 20:50:30 --> Severity: Notice --> Undefined variable: index C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 78
ERROR - 2020-04-25 20:50:30 --> Severity: Notice --> Undefined variable: index C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 78
ERROR - 2020-04-25 20:51:10 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php(85) : eval()'d code 1
ERROR - 2020-04-25 20:51:50 --> Severity: Parsing Error --> syntax error, unexpected ';', expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 85
ERROR - 2020-04-25 20:51:59 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php(85) : eval()'d code 1
ERROR - 2020-04-25 21:00:02 --> Severity: Parsing Error --> syntax error, unexpected 'foreach' (T_FOREACH), expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 84
ERROR - 2020-04-25 21:02:34 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php(86) : eval()'d code 1
ERROR - 2020-04-25 21:02:48 --> Severity: Parsing Error --> syntax error, unexpected ';', expecting ')' C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 86
ERROR - 2020-04-25 21:02:57 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php(86) : eval()'d code 1
ERROR - 2020-04-25 21:03:26 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php(84) : eval()'d code 1
ERROR - 2020-04-25 21:06:41 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 80
ERROR - 2020-04-25 21:06:41 --> Severity: Notice --> Undefined variable: data_nama C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 81
ERROR - 2020-04-25 21:06:41 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 82
ERROR - 2020-04-25 21:06:41 --> Severity: Notice --> Undefined variable: data_nama C:\xampp\htdocs\kuis\application\controllers\T_kuesioner.php 83
