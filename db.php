<?php
// Connection to Oracle Database

$conn = oci_connect("system", "1q2w3e4r", 'XE');
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
?>