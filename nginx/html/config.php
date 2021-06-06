<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3366,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

//$CFG->wwwroot   = 'http://127.0.0.1';
$CFG->wwwroot = 'http://'.$_SERVER['HTTP_HOST'];
$CFG->dataroot  = 'C:\\moodle_wnmp_64\\nginx\\moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
