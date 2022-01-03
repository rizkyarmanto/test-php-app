<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-21 00:31:38 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:31:49 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:32:27 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:32:39 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:32:58 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:33:11 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:33:19 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:33:28 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:33:37 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:33:59 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:34:07 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:34:24 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:36:28 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:36:34 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\koperasi\application\controllers\M_anggota.php 69
ERROR - 2020-02-21 00:45:17 --> Severity: Error --> Cannot use object of type CI_DB_mysqli_result as array C:\xampp\htdocs\koperasi\application\controllers\Form.php 119
ERROR - 2020-02-21 00:50:51 --> Severity: Error --> Cannot use object of type CI_DB_mysqli_result as array C:\xampp\htdocs\koperasi\application\controllers\Form.php 119
ERROR - 2020-02-21 00:52:25 --> Severity: Error --> Cannot use object of type CI_DB_mysqli_result as array C:\xampp\htdocs\koperasi\application\controllers\Form.php 119
ERROR - 2020-02-21 00:56:47 --> Severity: Notice --> Undefined variable: id_produk C:\xampp\htdocs\koperasi\application\controllers\Form.php 123
ERROR - 2020-02-21 00:59:46 --> Severity: Error --> Cannot use object of type CI_DB_mysqli_result as array C:\xampp\htdocs\koperasi\application\controllers\Form.php 171
ERROR - 2020-02-21 00:59:48 --> Severity: Error --> Cannot use object of type CI_DB_mysqli_result as array C:\xampp\htdocs\koperasi\application\controllers\Form.php 171
ERROR - 2020-02-21 02:45:12 --> Severity: Notice --> Undefined index: tgl_pencairan C:\xampp\htdocs\koperasi\application\models\M_data.php 18
ERROR - 2020-02-21 02:45:12 --> Severity: Notice --> Undefined variable: bunga C:\xampp\htdocs\koperasi\application\models\M_data.php 23
ERROR - 2020-02-21 02:45:12 --> Severity: Notice --> Undefined variable: bunga C:\xampp\htdocs\koperasi\application\models\M_data.php 23
ERROR - 2020-02-21 02:45:12 --> Severity: Notice --> Undefined variable: bunga C:\xampp\htdocs\koperasi\application\models\M_data.php 23
ERROR - 2020-02-21 02:45:12 --> Severity: Notice --> Undefined variable: bunga C:\xampp\htdocs\koperasi\application\models\M_data.php 23
ERROR - 2020-02-21 02:49:17 --> Severity: Notice --> Undefined index: tgl_pencairan C:\xampp\htdocs\koperasi\application\models\M_data.php 18
ERROR - 2020-02-21 02:49:17 --> Severity: Notice --> Undefined variable: bunga C:\xampp\htdocs\koperasi\application\models\M_data.php 23
ERROR - 2020-02-21 02:49:17 --> Severity: Notice --> Undefined variable: bunga C:\xampp\htdocs\koperasi\application\models\M_data.php 23
ERROR - 2020-02-21 02:49:17 --> Severity: Notice --> Undefined variable: bunga C:\xampp\htdocs\koperasi\application\models\M_data.php 23
ERROR - 2020-02-21 02:49:17 --> Severity: Notice --> Undefined variable: bunga C:\xampp\htdocs\koperasi\application\models\M_data.php 23
ERROR - 2020-02-21 02:49:17 --> Severity: Notice --> Undefined variable: bunga C:\xampp\htdocs\koperasi\application\models\M_data.php 23
ERROR - 2020-02-21 05:22:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '5,6,7),0)
				,month(curdate()),year(curdate())
				from m_anggota_tbl' at line 3 - Invalid query: insert into t_transaksi_simpanan_tbl(id_produk,id_anggota,tgl_simpanan,nominal,bulan,tahun)
				select 2,5,6,7,id_anggota,curdate(),
				coalesce((select nominal from m_produk_simpanan_tbl where id_produk=2,5,6,7),0)
				,month(curdate()),year(curdate())
				from m_anggota_tbl
ERROR - 2020-02-21 05:22:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '5,6,7),0)
				,month(curdate()),year(curdate())
				from m_anggota_tbl' at line 3 - Invalid query: insert into t_transaksi_simpanan_tbl(id_produk,id_anggota,tgl_simpanan,nominal,bulan,tahun)
				select 2,5,6,7,id_anggota,curdate(),
				coalesce((select nominal from m_produk_simpanan_tbl where id_produk=2,5,6,7),0)
				,month(curdate()),year(curdate())
				from m_anggota_tbl
ERROR - 2020-02-21 05:48:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '5,6,7 and tahun=2020
			group by id_anggota) simp_tahunberjalan
			on simp_tah' at line 48 - Invalid query: select * from (select nama_anggota,a.nip,
			a.id_satker,coalesce(d.nama_satker,'')nama_satker,
			e.id_golongan,f.nama_golongan,
			coalesce(g.nominal,0) jan,coalesce(h.nominal,0) feb,coalesce(i.nominal,0) mar,coalesce(j.nominal,0) apr,
			coalesce(k.nominal,0) mei,coalesce(l.nominal,0) jun,
			coalesce(m.nominal,0) jul,coalesce(n.nominal,0) agu,coalesce(o.nominal,0) sep,coalesce(p.nominal,0) okt,
			coalesce(q.nominal,0) nov,coalesce(r.nominal,0) des,
			coalesce(simp_tahunberjalan.nominal,0) jml_tahunberjalan,coalesce(simp_tahunsebelum.nominal,0) jml_tahunsebelum,
			coalesce(simp_tahunberjalan.nominal,0)+coalesce(simp_tahunsebelum.nominal,0) jml_sampaitahunberjalan,
			coalesce(simp_modalpartisipasi.nominal,0) jml_modalpartisipasi,
			coalesce(simp_tahunberjalan.nominal,0)+coalesce(simp_tahunsebelum.nominal,0)+coalesce(simp_modalpartisipasi.nominal,0) jml_simp
			from m_anggota_tbl a
			left join t_golongan_anggota_tbl b
			on a.id_anggota=b.id_anggota and b.aktif=1
			left join t_keanggotaan_tbl c
			on a.id_anggota=c.id_anggota and c.aktif=1
			left join m_satker_tbl d
			on d.id_satker=a.id_satker
			left join t_golongan_anggota_tbl e
			on e.id_anggota=a.id_anggota and e.aktif=1
			left join m_golongan_tbl f
			on e.id_golongan=f.id_golongan
			left join t_transaksi_simpanan_tbl g
			on g.id_anggota=a.id_anggota and g.id_produk in (2,5,6,7) and g.bulan=1 and g.tahun=2020
			left join t_transaksi_simpanan_tbl h
			on h.id_anggota=a.id_anggota and h.id_produk in (2,5,6,7) and h.bulan=2 and h.tahun=2020
			left join t_transaksi_simpanan_tbl i
			on i.id_anggota=a.id_anggota and i.id_produk in (2,5,6,7) and i.bulan=3 and i.tahun=2020
			left join t_transaksi_simpanan_tbl j
			on j.id_anggota=a.id_anggota and j.id_produk in (2,5,6,7) and j.bulan=4 and j.tahun=2020
			left join t_transaksi_simpanan_tbl k
			on k.id_anggota=a.id_anggota and k.id_produk in (2,5,6,7) and k.bulan=5 and k.tahun=2020
			left join t_transaksi_simpanan_tbl l
			on l.id_anggota=a.id_anggota and l.id_produk in (2,5,6,7) and l.bulan=6 and l.tahun=2020
			left join t_transaksi_simpanan_tbl m
			on m.id_anggota=a.id_anggota and m.id_produk in (2,5,6,7) and m.bulan=7 and m.tahun=2020
			left join t_transaksi_simpanan_tbl n
			on n.id_anggota=a.id_anggota and n.id_produk in (2,5,6,7) and n.bulan=8 and n.tahun=2020
			left join t_transaksi_simpanan_tbl o
			on o.id_anggota=a.id_anggota and o.id_produk in (2,5,6,7) and o.bulan=9 and o.tahun=2020
			left join t_transaksi_simpanan_tbl p
			on p.id_anggota=a.id_anggota and p.id_produk in (2,5,6,7) and p.bulan=10 and p.tahun=2020
			left join t_transaksi_simpanan_tbl q
			on q.id_anggota=a.id_anggota and q.id_produk in (2,5,6,7) and q.bulan=11 and q.tahun=2020
			left join t_transaksi_simpanan_tbl r
			on r.id_anggota=a.id_anggota and r.id_produk in (2,5,6,7) and r.bulan=12 and r.tahun=2020
			left join (select id_anggota,sum(coalesce(nominal,0))nominal from t_transaksi_simpanan_tbl a1
			where id_produk=2,5,6,7 and tahun=2020
			group by id_anggota) simp_tahunberjalan
			on simp_tahunberjalan.id_anggota=a.id_anggota
			left join (select id_anggota,sum(coalesce(nominal,0))nominal from t_transaksi_simpanan_tbl a1
			where id_produk in (2,5,6,7) and tahun<2020
			group by id_anggota) simp_tahunsebelum
			on simp_tahunsebelum.id_anggota=a.id_anggota
			left join (select id_anggota,sum(coalesce(nominal,0))nominal from t_transaksi_simpanan_tbl a1
			where id_produk=4 and tahun<2020
			group by id_anggota) simp_modalpartisipasi
			on simp_modalpartisipasi.id_anggota=a.id_anggota ) tbl where 1<2 
ERROR - 2020-02-21 20:48:33 --> Severity: Notice --> Undefined variable: tgl_cicilan C:\xampp\htdocs\koperasi\application\views\tbl_angsuransimulasi.php 30
ERROR - 2020-02-21 20:48:33 --> Severity: Notice --> Undefined variable: tgl_cicilan C:\xampp\htdocs\koperasi\application\views\tbl_angsuransimulasi.php 48
ERROR - 2020-02-21 20:48:33 --> Severity: Notice --> Undefined variable: tgl_cicilan C:\xampp\htdocs\koperasi\application\views\tbl_angsuransimulasi.php 49
ERROR - 2020-02-21 20:48:33 --> Severity: Notice --> Undefined variable: tgl_cicilan C:\xampp\htdocs\koperasi\application\views\tbl_angsuransimulasi.php 26
