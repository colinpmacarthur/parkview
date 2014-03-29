<?php
   $inifile = "/home/colin/.mysql_settings_muir.ini";

/* Access required data for database access from isolated file */
if (!$settings = parse_ini_file($inifile, TRUE)) throw new exception('Unable t\
o open ' . $file . '.');                                                      
                                                                            
$host = $settings['database']['host'];
$dbname = $settings['database']['dbname'];                              
$user = $settings['database']['username'];
$pw = $settings['database']['password'];  


$mysqli = new mysqli($host, $user, $pw, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
                                                        
?>
