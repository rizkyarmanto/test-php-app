<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-13 01:54:00 --> Severity: Warning --> Error while sending QUERY packet. PID=953787 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-13 01:54:00 --> Severity: Warning --> Error while sending QUERY packet. PID=953734 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 01:54:00 --> Query error: MySQL server has gone away - Invalid query:  select a.nm_layanan,coalesce(b.responden,0)sm1,coalesce(c.responden,0)sm2 from m_layanan a  left join (  select count(distinct no,id_layanan,tgl_isi) responden,id_layanan from t_kuesioner  where bulan<=6  and tahun=2020 group by id_layanan) b on a.id_layanan=b.id_layanan left join (  select count(distinct no,tgl_isi) responden,id_layanan from t_kuesioner  where bulan>=7  and tahun=2020 group by id_layanan) c on a.id_layanan=c.id_layanan
ERROR - 2020-10-13 01:54:00 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-13 01:54:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 01:54:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 05:08:27 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/fixed_positioner.cls.php 47
ERROR - 2020-10-13 05:08:27 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/fixed_positioner.cls.php 65
ERROR - 2020-10-13 05:08:27 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/page_frame_decorator.cls.php 439
ERROR - 2020-10-13 05:08:27 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/page_frame_decorator.cls.php 439
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:27 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: 8192 --> Function create_function() is deprecated /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/text_frame_reflower.cls.php 376
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 05:08:28 --> Severity: Warning --> A non-numeric value encountered /home/smsinaja/public_html/ikm/vendor/dompdf/dompdf/include/style.cls.php 1280
ERROR - 2020-10-13 06:39:33 --> Severity: Warning --> Error while sending QUERY packet. PID=1156876 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 06:39:33 --> Query error: MySQL server has gone away - Invalid query:  select a.nm_layanan,coalesce(b.responden,0)sm1,coalesce(c.responden,0)sm2 from m_layanan a  left join (  select count(distinct no,id_layanan,tgl_isi) responden,id_layanan from t_kuesioner  where bulan<=6  and tahun=2020 group by id_layanan) b on a.id_layanan=b.id_layanan left join (  select count(distinct no,tgl_isi) responden,id_layanan from t_kuesioner  where bulan>=7  and tahun=2020 group by id_layanan) c on a.id_layanan=c.id_layanan
ERROR - 2020-10-13 06:39:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> Error while sending QUERY packet. PID=1164003 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 06:50:41 --> Query error: MySQL server has gone away - Invalid query:  select a.nm_layanan,coalesce(b.responden,0)sm1,coalesce(c.responden,0)sm2 from m_layanan a  left join (  select count(distinct no,id_layanan,tgl_isi) responden,id_layanan from t_kuesioner  where bulan<=6  and tahun=2020 group by id_layanan) b on a.id_layanan=b.id_layanan left join (  select count(distinct no,tgl_isi) responden,id_layanan from t_kuesioner  where bulan>=7  and tahun=2020 group by id_layanan) c on a.id_layanan=c.id_layanan
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> Error while sending QUERY packet. PID=1164002 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 06:50:41 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_mkuesioner`, `kd_kuesioner`, `kuesioner`, `nilai_min`, `nilai_max`, `aktif`, (case when aktif=1 then 'Aktif' else 'Tidak Aktif' end) nm_aktif
FROM `m_kuesioner`
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_sessionf42cc1f1fe29325a920dc69d6472e1bb2e92de3d /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/helpers/url_helper.php 564
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_sessionf42cc1f1fe29325a920dc69d6472e1bb2e92de3d /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_sessionf42cc1f1fe29325a920dc69d6472e1bb2e92de3d /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-13 06:50:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/helpers/url_helper.php 564
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Error while sending QUERY packet. PID=1387189 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Error while sending QUERY packet. PID=1386792 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 12:39:30 --> Query error: MySQL server has gone away - Invalid query:  select a.nm_layanan,coalesce(b.responden,0)sm1,coalesce(c.responden,0)sm2 from m_layanan a  left join (  select count(distinct no,id_layanan,tgl_isi) responden,id_layanan from t_kuesioner  where bulan<=6  and tahun=2020 group by id_layanan) b on a.id_layanan=b.id_layanan left join (  select count(distinct no,tgl_isi) responden,id_layanan from t_kuesioner  where bulan>=7  and tahun=2020 group by id_layanan) c on a.id_layanan=c.id_layanan
ERROR - 2020-10-13 12:39:30 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Error while sending QUERY packet. PID=1387928 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 12:39:30 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Error while sending QUERY packet. PID=1387937 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 12:39:30 --> Query error: MySQL server has gone away - Invalid query:  select a.nm_layanan,coalesce(b.responden,0)sm1,coalesce(c.responden,0)sm2 from m_layanan a  left join (  select count(distinct no,id_layanan,tgl_isi) responden,id_layanan from t_kuesioner  where bulan<=6  and tahun=2020 group by id_layanan) b on a.id_layanan=b.id_layanan left join (  select count(distinct no,tgl_isi) responden,id_layanan from t_kuesioner  where bulan>=7  and tahun=2020 group by id_layanan) c on a.id_layanan=c.id_layanan
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Error while sending QUERY packet. PID=1388158 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 12:39:30 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Error while sending QUERY packet. PID=1386818 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 12:39:30 --> Query error: MySQL server has gone away - Invalid query:  select a.nm_layanan,coalesce(b.responden,0)sm1,coalesce(c.responden,0)sm2 from m_layanan a  left join (  select count(distinct no,id_layanan,tgl_isi) responden,id_layanan from t_kuesioner  where bulan<=6  and tahun=2020 group by id_layanan) b on a.id_layanan=b.id_layanan left join (  select count(distinct no,tgl_isi) responden,id_layanan from t_kuesioner  where bulan>=7  and tahun=2020 group by id_layanan) c on a.id_layanan=c.id_layanan
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Error while sending QUERY packet. PID=1387181 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 12:39:30 --> Query error: MySQL server has gone away - Invalid query: SELECT `id_layanan`, `kd_layanan`, `nm_layanan`, `bidang`
FROM `m_layanan`
ORDER BY `kd_layanan` ASC
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Error while sending QUERY packet. PID=1388163 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-10-13 12:39:30 --> Query error: MySQL server has gone away - Invalid query:  select a.nm_layanan,coalesce(b.responden,0)sm1,coalesce(c.responden,0)sm2 from m_layanan a  left join (  select count(distinct no,id_layanan,tgl_isi) responden,id_layanan from t_kuesioner  where bulan<=6  and tahun=2020 group by id_layanan) b on a.id_layanan=b.id_layanan left join (  select count(distinct no,tgl_isi) responden,id_layanan from t_kuesioner  where bulan>=7  and tahun=2020 group by id_layanan) c on a.id_layanan=c.id_layanan
ERROR - 2020-10-13 12:39:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
