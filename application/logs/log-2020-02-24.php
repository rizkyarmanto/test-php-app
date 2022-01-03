<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-24 00:04:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3,4,5 and tahun=2020
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
			on g.id_anggota=a.id_anggota and g.id_produk in (2,3,4,5) and g.bulan=1 and g.tahun=2020
			left join t_transaksi_simpanan_tbl h
			on h.id_anggota=a.id_anggota and h.id_produk in (2,3,4,5) and h.bulan=2 and h.tahun=2020
			left join t_transaksi_simpanan_tbl i
			on i.id_anggota=a.id_anggota and i.id_produk in (2,3,4,5) and i.bulan=3 and i.tahun=2020
			left join t_transaksi_simpanan_tbl j
			on j.id_anggota=a.id_anggota and j.id_produk in (2,3,4,5) and j.bulan=4 and j.tahun=2020
			left join t_transaksi_simpanan_tbl k
			on k.id_anggota=a.id_anggota and k.id_produk in (2,3,4,5) and k.bulan=5 and k.tahun=2020
			left join t_transaksi_simpanan_tbl l
			on l.id_anggota=a.id_anggota and l.id_produk in (2,3,4,5) and l.bulan=6 and l.tahun=2020
			left join t_transaksi_simpanan_tbl m
			on m.id_anggota=a.id_anggota and m.id_produk in (2,3,4,5) and m.bulan=7 and m.tahun=2020
			left join t_transaksi_simpanan_tbl n
			on n.id_anggota=a.id_anggota and n.id_produk in (2,3,4,5) and n.bulan=8 and n.tahun=2020
			left join t_transaksi_simpanan_tbl o
			on o.id_anggota=a.id_anggota and o.id_produk in (2,3,4,5) and o.bulan=9 and o.tahun=2020
			left join t_transaksi_simpanan_tbl p
			on p.id_anggota=a.id_anggota and p.id_produk in (2,3,4,5) and p.bulan=10 and p.tahun=2020
			left join t_transaksi_simpanan_tbl q
			on q.id_anggota=a.id_anggota and q.id_produk in (2,3,4,5) and q.bulan=11 and q.tahun=2020
			left join t_transaksi_simpanan_tbl r
			on r.id_anggota=a.id_anggota and r.id_produk in (2,3,4,5) and r.bulan=12 and r.tahun=2020
			left join (select id_anggota,sum(coalesce(nominal,0))nominal from t_transaksi_simpanan_tbl a1
			where id_produk=2,3,4,5 and tahun=2020
			group by id_anggota) simp_tahunberjalan
			on simp_tahunberjalan.id_anggota=a.id_anggota
			left join (select id_anggota,sum(coalesce(nominal,0))nominal from t_transaksi_simpanan_tbl a1
			where id_produk in (2,3,4,5) and tahun<2020
			group by id_anggota) simp_tahunsebelum
			on simp_tahunsebelum.id_anggota=a.id_anggota
			left join (select id_anggota,sum(coalesce(nominal,0))nominal from t_transaksi_simpanan_tbl a1
			where id_produk=7 and tahun<2020
			group by id_anggota) simp_modalpartisipasi
			on simp_modalpartisipasi.id_anggota=a.id_anggota ) tbl where 1<2 
ERROR - 2020-02-24 09:55:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3,4,5 and tahun=2020
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
			on g.id_anggota=a.id_anggota and g.id_produk in (2,3,4,5) and g.bulan=1 and g.tahun=2020
			left join t_transaksi_simpanan_tbl h
			on h.id_anggota=a.id_anggota and h.id_produk in (2,3,4,5) and h.bulan=2 and h.tahun=2020
			left join t_transaksi_simpanan_tbl i
			on i.id_anggota=a.id_anggota and i.id_produk in (2,3,4,5) and i.bulan=3 and i.tahun=2020
			left join t_transaksi_simpanan_tbl j
			on j.id_anggota=a.id_anggota and j.id_produk in (2,3,4,5) and j.bulan=4 and j.tahun=2020
			left join t_transaksi_simpanan_tbl k
			on k.id_anggota=a.id_anggota and k.id_produk in (2,3,4,5) and k.bulan=5 and k.tahun=2020
			left join t_transaksi_simpanan_tbl l
			on l.id_anggota=a.id_anggota and l.id_produk in (2,3,4,5) and l.bulan=6 and l.tahun=2020
			left join t_transaksi_simpanan_tbl m
			on m.id_anggota=a.id_anggota and m.id_produk in (2,3,4,5) and m.bulan=7 and m.tahun=2020
			left join t_transaksi_simpanan_tbl n
			on n.id_anggota=a.id_anggota and n.id_produk in (2,3,4,5) and n.bulan=8 and n.tahun=2020
			left join t_transaksi_simpanan_tbl o
			on o.id_anggota=a.id_anggota and o.id_produk in (2,3,4,5) and o.bulan=9 and o.tahun=2020
			left join t_transaksi_simpanan_tbl p
			on p.id_anggota=a.id_anggota and p.id_produk in (2,3,4,5) and p.bulan=10 and p.tahun=2020
			left join t_transaksi_simpanan_tbl q
			on q.id_anggota=a.id_anggota and q.id_produk in (2,3,4,5) and q.bulan=11 and q.tahun=2020
			left join t_transaksi_simpanan_tbl r
			on r.id_anggota=a.id_anggota and r.id_produk in (2,3,4,5) and r.bulan=12 and r.tahun=2020
			left join (select id_anggota,sum(coalesce(nominal,0))nominal from t_transaksi_simpanan_tbl a1
			where id_produk=2,3,4,5 and tahun=2020
			group by id_anggota) simp_tahunberjalan
			on simp_tahunberjalan.id_anggota=a.id_anggota
			left join (select id_anggota,sum(coalesce(nominal,0))nominal from t_transaksi_simpanan_tbl a1
			where id_produk in (2,3,4,5) and tahun<2020
			group by id_anggota) simp_tahunsebelum
			on simp_tahunsebelum.id_anggota=a.id_anggota
			left join (select id_anggota,sum(coalesce(nominal,0))nominal from t_transaksi_simpanan_tbl a1
			where id_produk=7 and tahun<2020
			group by id_anggota) simp_modalpartisipasi
			on simp_modalpartisipasi.id_anggota=a.id_anggota ) tbl where 1<2 
ERROR - 2020-02-24 16:54:52 --> Severity: Parsing Error --> syntax error, unexpected ';' C:\xampp\htdocs\koperasi\application\controllers\Form.php 2441
ERROR - 2020-02-24 18:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'insert into t_logdebet_angsuran(id_anggota,id_trans_pin_mst,tgl_bayar,nominal_po' at line 10 - Invalid query: update t_trans_pin_det_tbl a 
				join (
				select id_trans_pin_mst,max(tgl_jatuhtempo)tgl_jatuhtempo
				from t_trans_pin_det_tbl
				where tgl_jatuhtempo<=curdate()
				group by id_trans_pin_mst) b
				on a.id_trans_pin_mst=b.id_trans_pin_mst and a.tgl_jatuhtempo=b.tgl_jatuhtempo
				and a.sts_angsuran=0 and coalesce(a.stsampun,0)=0
				set tgl_bayar=curdate(),sts_angsuran=1;
				insert into t_logdebet_angsuran(id_anggota,id_trans_pin_mst,tgl_bayar,nominal_pokok,angsuranke,nominal_bunga)
				select c.id_anggota, a.id_trans_pin_mst, curdate() tgl_bayar, a.nominal_pokok, 
				a.angsuranke, a.nominal_bunga 
				from t_trans_pin_det_tbl a 
				join (
				select id_trans_pin_mst,max(tgl_jatuhtempo)tgl_jatuhtempo
				from t_trans_pin_det_tbl
				where tgl_jatuhtempo<=curdate()
				group by id_trans_pin_mst) b
				on a.id_trans_pin_mst=b.id_trans_pin_mst and a.tgl_jatuhtempo=b.tgl_jatuhtempo
				and a.sts_angsuran=0 and coalesce(a.stsampun,0)=0
				left join t_trans_pin_mst_tbl c
				on c.id=a.id_trans_pin_mst
ERROR - 2020-02-24 19:59:52 --> 404 Page Not Found: Form/prn_debetpinj
ERROR - 2020-02-24 20:00:31 --> 404 Page Not Found: Form/prn_debetsimpananwajib
ERROR - 2020-02-24 20:00:50 --> Severity: Notice --> Undefined index: nama_satker C:\xampp\htdocs\koperasi\application\views\prn_debetsimpwajib.php 85
ERROR - 2020-02-24 20:00:50 --> Severity: Notice --> Undefined variable: namabulan C:\xampp\htdocs\koperasi\application\views\prn_debetsimpwajib.php 90
ERROR - 2020-02-24 20:00:50 --> Severity: Error --> Function name must be a string C:\xampp\htdocs\koperasi\application\views\prn_debetsimpwajib.php 90
ERROR - 2020-02-24 20:01:29 --> Severity: Notice --> Undefined variable: namabulan C:\xampp\htdocs\koperasi\application\views\prn_debetsimpwajib.php 90
ERROR - 2020-02-24 20:01:29 --> Severity: Error --> Function name must be a string C:\xampp\htdocs\koperasi\application\views\prn_debetsimpwajib.php 90
ERROR - 2020-02-24 20:01:56 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\koperasi\application\helpers\groot_helper.php 111
ERROR - 2020-02-24 20:01:56 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\koperasi\application\helpers\groot_helper.php 111
ERROR - 2020-02-24 20:01:56 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\koperasi\application\helpers\groot_helper.php 111
ERROR - 2020-02-24 20:01:56 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\koperasi\application\helpers\groot_helper.php 111
ERROR - 2020-02-24 20:05:05 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\koperasi\application\helpers\groot_helper.php 111
ERROR - 2020-02-24 20:05:05 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\koperasi\application\helpers\groot_helper.php 111
ERROR - 2020-02-24 20:05:05 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\koperasi\application\helpers\groot_helper.php 111
ERROR - 2020-02-24 20:05:05 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\koperasi\application\helpers\groot_helper.php 111
