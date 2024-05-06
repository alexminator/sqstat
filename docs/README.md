<h1 align="center">
  <img alt="SqStat logo" src="https://github.com/alexminator/sqstat/blob/main/squid.png" width="300px"/><br/>
  ${\color{#ff0000}S}{\color{#ff6e00}q}{\color{#ffdd00}S}{\color{#b2ff00}t}{\color{#48ff00}a}{\color{#48ff00}t}$
</h1>
<h4 align="center">
  <a href="https://github.com/alexminator/SML/blob/master/README_es.md">
    <img height="20px" src="https://img.shields.io/badge/ES-flag.svg?color=555555&style=flat-square&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA3NTAgNTAwIj4NCjxwYXRoIGZpbGw9IiNjNjBiMWUiIGQ9Im0wLDBoNzUwdjUwMGgtNzUweiIvPg0KPHBhdGggZmlsbD0iI2ZmYzQwMCIgZD0ibTAsMTI1aDc1MHYyNTBoLTc1MHoiLz4NCjwvc3ZnPg0K">
  </a>
  <a href="https://github.com/alexminator/SML/blob/master/README.md">
    <img height="20px" src="https://img.shields.io/badge/EN-flag.svg?color=555555&style=flat-square&logo=data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNjAgMzAiIGhlaWdodD0iNjAwIj4NCjxkZWZzPg0KPGNsaXBQYXRoIGlkPSJ0Ij4NCjxwYXRoIGQ9Im0zMCwxNWgzMHYxNXp2MTVoLTMwemgtMzB2LTE1enYtMTVoMzB6Ii8+DQo8L2NsaXBQYXRoPg0KPC9kZWZzPg0KPHBhdGggZmlsbD0iIzAwMjQ3ZCIgZD0ibTAsMHYzMGg2MHYtMzB6Ii8+DQo8cGF0aCBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iNiIgZD0ibTAsMGw2MCwzMG0wLTMwbC02MCwzMCIvPg0KPHBhdGggc3Ryb2tlPSIjY2YxNDJiIiBzdHJva2Utd2lkdGg9IjQiIGQ9Im0wLDBsNjAsMzBtMC0zMGwtNjAsMzAiIGNsaXAtcGF0aD0idXJsKCN0KSIvPg0KPHBhdGggc3Ryb2tlPSIjZmZmIiBzdHJva2Utd2lkdGg9IjEwIiBkPSJtMzAsMHYzMG0tMzAtMTVoNjAiLz4NCjxwYXRoIHN0cm9rZT0iI2NmMTQyYiIgc3Ryb2tlLXdpZHRoPSI2IiBkPSJtMzAsMHYzMG0tMzAtMTVoNjAiLz4NCjwvc3ZnPg0K">
  </a>
</h4>
    
    
    
    About SqStat
    ============

SqStat is a script which allows to look through active squid users
connections. It use cachemgr protocol to get information from squid
proxy server. Script homepage is http://samm.kiev.ua/sqstat/. 


    What's new
    ==========

For a complete list of changes, see the CHANGES file. 


    System requirements
    ===================

# PHP (you need PHP 4.1.0 or newer) with installed "pcre" extension
# Squid proxy server
# a web-browser (doh!)
# (optional) PHP session extension if you want to see current/average CPS


    Installation
    ============    

   1. Unpack the distribution in your webserver's document root.
   2. Copy file config.inc.php.defaults to config.inc.php, edit config.inc.php
      to specify your squid proxy server IP and port.
   3. Edit your squid.conf to allow cachemgr protocol:

      acl manager proto cache_object
      # replace 10.0.0.1 with your webserver IP
      acl webserver src 10.0.0.1/255.255.255.255
      http_access allow manager webserver
      http_access deny manager

   4. Point your browser to sqstat.php file and see what happens :)
   5. (optionally) enable ip resolving in config.inc.php. Also you can make 
      "hosts" like file with ip->name pairs.
   


    Bug reports
    ===========

If you have found what you believe to be a bug, you can send a bug
report to samm [at] os2.kiev.ua. Please, read FAQ before reporting.
