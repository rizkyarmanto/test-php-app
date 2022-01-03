<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-12 03:03:21 --> Severity: Warning --> Error while sending QUERY packet. PID=169109 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-12 03:03:21 --> Severity: Warning --> Error while sending QUERY packet. PID=168468 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-12 03:03:22 --> Query error: MySQL server has gone away - Invalid query:  select a.nm_layanan,coalesce(b.responden,0)sm1,coalesce(c.responden,0)sm2 from m_layanan a  left join (  select count(distinct no,id_layanan,tgl_isi) responden,id_layanan from t_kuesioner  where bulan<=6  and tahun=2020 group by id_layanan) b on a.id_layanan=b.id_layanan left join (  select count(distinct no,tgl_isi) responden,id_layanan from t_kuesioner  where bulan>=7  and tahun=2020 group by id_layanan) c on a.id_layanan=c.id_layanan
ERROR - 2020-10-12 03:03:22 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-12 03:03:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-12 03:03:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/fixed_positioner.cls.php 47
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/fixed_positioner.cls.php 65
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/page_frame_decorator.cls.php 439
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/page_frame_decorator.cls.php 439
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:31 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/fixed_positioner.cls.php 47
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/fixed_positioner.cls.php 65
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/page_frame_decorator.cls.php 439
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/page_frame_decorator.cls.php 439
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/table_cell_frame_reflower.cls.php 103
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:04:47 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Error while sending QUERY packet. PID=185348 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Error while sending QUERY packet. PID=185407 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-12 03:28:22 --> Query error: MySQL server has gone away - Invalid query: SELECT DISTINCT `a`.`id_layanan`, `b`.`nm_layanan`, `a`.`tgl_isi`
FROM `t_kuesioner` `a`
LEFT JOIN `m_layanan` `b` ON `a`.`id_layanan`=`b`.`id_layanan`
ERROR - 2020-10-12 03:28:22 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Error while sending QUERY packet. PID=186557 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-12 03:28:22 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Error while sending QUERY packet. PID=185906 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-12 03:28:22 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_session049df5000b67681052d941a6c315ef610fe2bf6a /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/helpers/url_helper.php 564
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_session049df5000b67681052d941a6c315ef610fe2bf6a /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/helpers/url_helper.php 564
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_session049df5000b67681052d941a6c315ef610fe2bf6a /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/helpers/url_helper.php 564
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_session049df5000b67681052d941a6c315ef610fe2bf6a /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/helpers/url_helper.php 564
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_session049df5000b67681052d941a6c315ef610fe2bf6a /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/helpers/url_helper.php 564
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_session049df5000b67681052d941a6c315ef610fe2bf6a /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/helpers/url_helper.php 564
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_session049df5000b67681052d941a6c315ef610fe2bf6a /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-12 03:28:22 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-12 03:40:50 --> Severity: Warning --> Error while sending QUERY packet. PID=193827 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-12 03:40:50 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_user`, `nama`, `nm_user`, `id_role`, `foto`
FROM `m_user`
WHERE `nm_user` = 'staff'
AND `sandi` = '356a192b7913b04c54574d18c28d46e6395428ab'
ERROR - 2020-10-12 03:40:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-12 07:49:39 --> Query error: Unknown column 'id' in 'field list' - Invalid query: INSERT INTO `t_kuesioner` (`id_mkuesioner`, `id_layanan`, `tgl_isi`, `no`, `usia`, `id_jeniskelamin`, `id_pendidikan`, `id_pekerjaan`, `nilai`, `tahun`, `bulan`) VALUES ('1', '2', '2020-4-15', 'null', '30', '1', '2', '3', '3', '2020', '4')
ERROR - 2020-10-12 08:53:40 --> Severity: Warning --> Error while sending QUERY packet. PID=414744 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-12 08:53:40 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-12 08:53:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
