<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-18 03:06:04 --> Severity: Warning --> Error while sending QUERY packet. PID=3523372 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-18 03:06:04 --> Severity: Warning --> Error while sending QUERY packet. PID=3523189 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-18 03:06:04 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-18 03:06:04 --> Query error: MySQL server has gone away - Invalid query:  select a.nm_layanan,coalesce(b.responden,0)sm1,coalesce(c.responden,0)sm2 from m_layanan a  left join (  select count(distinct no,id_layanan,tgl_isi) responden,id_layanan from t_kuesioner  where bulan<=6  and tahun=2020 group by id_layanan) b on a.id_layanan=b.id_layanan left join (  select count(distinct no,tgl_isi) responden,id_layanan from t_kuesioner  where bulan>=7  and tahun=2020 group by id_layanan) c on a.id_layanan=c.id_layanan
ERROR - 2020-10-18 03:06:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-18 03:06:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-18 03:29:51 --> 404 Page Not Found: Indexhtml/index
ERROR - 2020-10-18 07:13:51 --> Severity: Warning --> Error while sending QUERY packet. PID=3653162 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-18 07:13:51 --> Severity: Warning --> Error while sending QUERY packet. PID=3653044 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-18 07:13:51 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-18 07:13:51 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-18 07:13:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-18 07:13:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-18 07:13:52 --> Severity: Warning --> Error while sending QUERY packet. PID=3653313 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-18 07:13:52 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-18 07:13:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-18 07:13:52 --> Severity: Warning --> Error while sending QUERY packet. PID=3653640 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-18 07:13:52 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-18 07:13:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
