<?php
/* Construct json string that consist of the fields listed below 
  client_id : client secret that can be generated in Sequengin.com under developer center / generate oauth2
  email : email of the account, to which the file will be imported
  files: array of files that holds information about the file items
  More information can be found in Connect to Sequencing Documentation 
  https://sequencing.com/developer-documentation/connect-to-sequencing.com
 */
$string = '{ "client_id":"tA_U5BIkxv3oL7_Wj0tyWLX50dadjg2Zwk6vAP4TzBsguVa--vsXmqG0KmrOfUPmFc08pblTSrhtKry25fRaWA",
"email":"demo@sequencing.com", "files": [ 
{"name":"datafile.dd","type":"0","url":"https://api.sequencing.com/accessiblefile","hashType":"0","hashValue":"0","size":"42444"} ] }';

/* 
  Password for encrypt function is the same as client_id
 */
$password = "tA_U5BIkxv3oL7_Wj0tyWLX50dadjg2Zwk6vAP4TzBsguVa--vsXmqG0KmrOfUPmFc08pblTSrhtKry25fRaWA"; 

/* 
  Static key for the encrypt function 
 */
$key = "3n3CrwwnzMqxOssv"; 

/* 
   We pass both, fully encrypted json string and also hashed client_id
 */
$hash = md5($password); 
/* 
  Encrypt string and render the link
 */
$encrypted = openssl_encrypt($string, "aes-256-cbc", $password, 0, $key);
$sequencing_connect_string = 'https://sequencing.com/connect?c='.$hash.'&json='.$encrypted;
?>
