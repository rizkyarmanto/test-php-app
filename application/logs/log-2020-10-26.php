<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-26 04:14:52 --> Severity: Warning --> Error while sending QUERY packet. PID=3531893 /home/smsinaja/public_html/ikm/system/database/drivers/mysqli/mysqli_driver.php 305
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-26 04:14:52 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_session23133ad64c71686fb7fa67f91dd50cd3ffa5e118 /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-26 04:14:52 --> Query error: MySQL server has gone away - Invalid query: SELECT DISTINCT `a`.`id_layanan`, `b`.`nm_layanan`, `a`.`tgl_isi`
FROM `t_kuesioner` `a`
LEFT JOIN `m_layanan` `b` ON `a`.`id_layanan`=`b`.`id_layanan`
ERROR - 2020-10-26 04:14:52 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-26 04:14:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/helpers/url_helper.php 564
ERROR - 2020-10-26 04:14:52 --> Severity: Warning --> filesize(): stat failed for /var/cpanel/php/sessions/ea-php72/ci_session23133ad64c71686fb7fa67f91dd50cd3ffa5e118 /home/smsinaja/public_html/ikm/system/libraries/Session/drivers/Session_files_driver.php 208
ERROR - 2020-10-26 04:14:52 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/libraries/Session/Session.php 143
ERROR - 2020-10-26 04:14:52 --> Severity: Warning --> session_destroy(): Trying to destroy uninitialized session /home/smsinaja/public_html/ikm/application/controllers/Auth.php 48
ERROR - 2020-10-26 04:14:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/application/controllers/Auth.php 50
ERROR - 2020-10-26 04:14:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/smsinaja/public_html/ikm/system/core/Exceptions.php:271) /home/smsinaja/public_html/ikm/system/core/Common.php 570
