<?php
/* global settings */

$use_js=true; // use javascript for the HTML toolkits

// Maximum URL length to display in URI table column
DEFINE("SQSTAT_SHOWLEN",160);


/* proxy settings */

/* Squid proxy server ip address or host name */
$squidhost[0]="192.168.10.3";
/* Squid proxy server port */
$squidport[0]=3128;
/* cachemgr_passwd in squid.conf. Leave blank to disable authorisation */
$cachemgr_passwd[0]="secret";
/* Resolve user IP addresses or print them as numbers only [true|false] */
$resolveip[0]=true; 
/* uncomment next line if you want to use hosts-like file. 
   See hosts.txt.dist. */
// $hosts_file[0]="hosts.txt"
/* Group users by hostname - "host" or by User - "username". Username work only 
   with squid 2.6+ */ 
$group_by[0]="username";

/* you can specify more than one proxy in the configuration file, e.g.: */
 // $squidhost[1]="192.168.95.128";
 // $squidport[1]=3128;
 // $cachemgr_passwd[1]="secret";
 // $resolveip[1]=false;
 // $group_by[1]="host"; 

?>