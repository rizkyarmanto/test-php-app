<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-23 06:04:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/application/controllers/api/Kuisioner.php:46) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-09-23 09:50:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and str_to_date(tgl_isi,'%Y-%m-%e')=str_to_date('0-0-0','%Y-%m-%e') ) m0  left j' at line 1 - Invalid query:  select m0.usia,m0.id_jeniskelamin,m0.id_pendidikan,m0.id_pekerjaan,m0.id_layanan, b.nama jeniskelamin,c.nama pendidikan,d.nama pekerjaan,m1.nilai u1,m2.nilai u2,m3.nilai u3,m4.nilai u4,m5.nilai u5,m6.nilai u6,m7.nilai u7,m8.nilai u8,m9.nilai u9 from (  select distinct id_layanan,tgl_isi,no,usia,id_jeniskelamin,id_pekerjaan,id_pendidikan  from t_kuesioner a where id_layanan= and str_to_date(tgl_isi,'%Y-%m-%e')=str_to_date('0-0-0','%Y-%m-%e') ) m0  left join m_jeniskelamin b on b.id=m0.id_jeniskelamin left join m_pekerjaan c on c.id=m0.id_pekerjaan left join m_pendidikan d on d.id=m0.id_pendidikan left join t_kuesioner m1   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m1.tgl_isi and m0.no=m1.no  and m1.id_mkuesioner=1 left join t_kuesioner m2   on m0.id_layanan=m2.id_layanan   and m0.tgl_isi=m2.tgl_isi and m0.no=m2.no  and m2.id_mkuesioner=2 left join t_kuesioner m3   on m0.id_layanan=m3.id_layanan   and m0.tgl_isi=m3.tgl_isi and m0.no=m3.no  and m3.id_mkuesioner=3 left join t_kuesioner m4   on m0.id_layanan=m4.id_layanan   and m0.tgl_isi=m4.tgl_isi and m0.no=m4.no  and m4.id_mkuesioner=4 left join t_kuesioner m5   on m0.id_layanan=m5.id_layanan   and m0.tgl_isi=m5.tgl_isi and m0.no=m5.no  and m5.id_mkuesioner=5 left join t_kuesioner m6   on m0.id_layanan=m6.id_layanan   and m0.tgl_isi=m6.tgl_isi and m0.no=m6.no  and m6.id_mkuesioner=6 left join t_kuesioner m7   on m0.id_layanan=m7.id_layanan   and m0.tgl_isi=m7.tgl_isi and m0.no=m7.no  and m7.id_mkuesioner=7 left join t_kuesioner m8   on m0.id_layanan=m8.id_layanan   and m0.tgl_isi=m8.tgl_isi and m0.no=m8.no  and m8.id_mkuesioner=8 left join t_kuesioner m9   on m0.id_layanan=m9.id_layanan   and m0.tgl_isi=m9.tgl_isi and m0.no=m9.no  and m9.id_mkuesioner=9 order by m0.id_layanan,m0.no
ERROR - 2020-09-23 10:42:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and str_to_date(tgl_isi,'%Y-%m-%e')=str_to_date('0-0-0','%Y-%m-%e') ) m0  left j' at line 1 - Invalid query:  select m0.usia,m0.id_jeniskelamin,m0.id_pendidikan,m0.id_pekerjaan,m0.id_layanan, b.nama jeniskelamin,c.nama pendidikan,d.nama pekerjaan,m1.nilai u1,m2.nilai u2,m3.nilai u3,m4.nilai u4,m5.nilai u5,m6.nilai u6,m7.nilai u7,m8.nilai u8,m9.nilai u9 from (  select distinct id_layanan,tgl_isi,no,usia,id_jeniskelamin,id_pekerjaan,id_pendidikan  from t_kuesioner a where id_layanan= and str_to_date(tgl_isi,'%Y-%m-%e')=str_to_date('0-0-0','%Y-%m-%e') ) m0  left join m_jeniskelamin b on b.id=m0.id_jeniskelamin left join m_pekerjaan c on c.id=m0.id_pekerjaan left join m_pendidikan d on d.id=m0.id_pendidikan left join t_kuesioner m1   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m1.tgl_isi and m0.no=m1.no  and m1.id_mkuesioner=1 left join t_kuesioner m2   on m0.id_layanan=m2.id_layanan   and m0.tgl_isi=m2.tgl_isi and m0.no=m2.no  and m2.id_mkuesioner=2 left join t_kuesioner m3   on m0.id_layanan=m3.id_layanan   and m0.tgl_isi=m3.tgl_isi and m0.no=m3.no  and m3.id_mkuesioner=3 left join t_kuesioner m4   on m0.id_layanan=m4.id_layanan   and m0.tgl_isi=m4.tgl_isi and m0.no=m4.no  and m4.id_mkuesioner=4 left join t_kuesioner m5   on m0.id_layanan=m5.id_layanan   and m0.tgl_isi=m5.tgl_isi and m0.no=m5.no  and m5.id_mkuesioner=5 left join t_kuesioner m6   on m0.id_layanan=m6.id_layanan   and m0.tgl_isi=m6.tgl_isi and m0.no=m6.no  and m6.id_mkuesioner=6 left join t_kuesioner m7   on m0.id_layanan=m7.id_layanan   and m0.tgl_isi=m7.tgl_isi and m0.no=m7.no  and m7.id_mkuesioner=7 left join t_kuesioner m8   on m0.id_layanan=m8.id_layanan   and m0.tgl_isi=m8.tgl_isi and m0.no=m8.no  and m8.id_mkuesioner=8 left join t_kuesioner m9   on m0.id_layanan=m9.id_layanan   and m0.tgl_isi=m9.tgl_isi and m0.no=m9.no  and m9.id_mkuesioner=9 order by m0.id_layanan,m0.no
ERROR - 2020-09-23 10:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and str_to_date(tgl_isi,'%Y-%m-%e')=str_to_date('0-0-0','%Y-%m-%e') ) m0 left jo' at line 1 - Invalid query: select m0.usia,m0.id_jeniskelamin,m0.id_pendidikan,m0.id_pekerjaan,m0.id_layanan,m1.nilai u1,m2.nilai u2,m3.nilai u3,m4.nilai u4,m5.nilai u5,m6.nilai u6,m7.nilai u7,m8.nilai u8,m9.nilai u9 from (  select distinct id_layanan,tgl_isi,no,usia,id_jeniskelamin,id_pekerjaan,id_pendidikan  from t_kuesioner where id_layanan= and str_to_date(tgl_isi,'%Y-%m-%e')=str_to_date('0-0-0','%Y-%m-%e') ) m0 left join t_kuesioner m1   on m0.id_layanan=m1.id_layanan   and m0.tgl_isi=m1.tgl_isi and m0.no=m1.no  and m1.id_mkuesioner=1 left join t_kuesioner m2   on m0.id_layanan=m2.id_layanan   and m0.tgl_isi=m2.tgl_isi and m0.no=m2.no  and m2.id_mkuesioner=2 left join t_kuesioner m3   on m0.id_layanan=m3.id_layanan   and m0.tgl_isi=m3.tgl_isi and m0.no=m3.no  and m3.id_mkuesioner=3 left join t_kuesioner m4   on m0.id_layanan=m4.id_layanan   and m0.tgl_isi=m4.tgl_isi and m0.no=m4.no  and m4.id_mkuesioner=4 left join t_kuesioner m5   on m0.id_layanan=m5.id_layanan   and m0.tgl_isi=m5.tgl_isi and m0.no=m5.no  and m5.id_mkuesioner=5 left join t_kuesioner m6   on m0.id_layanan=m6.id_layanan   and m0.tgl_isi=m6.tgl_isi and m0.no=m6.no  and m6.id_mkuesioner=6 left join t_kuesioner m7   on m0.id_layanan=m7.id_layanan   and m0.tgl_isi=m7.tgl_isi and m0.no=m7.no  and m7.id_mkuesioner=7 left join t_kuesioner m8   on m0.id_layanan=m8.id_layanan   and m0.tgl_isi=m8.tgl_isi and m0.no=m8.no  and m8.id_mkuesioner=8 left join t_kuesioner m9   on m0.id_layanan=m9.id_layanan   and m0.tgl_isi=m9.tgl_isi and m0.no=m9.no  and m9.id_mkuesioner=9 order by m0.id_layanan,m0.no