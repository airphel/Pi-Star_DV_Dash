<?php

if (!isset($_SESSION) || !is_array($_SESSION)) {
    session_id('pistardashsess');
    session_start();
}

$editorname = 'P25 Hosts';
$configfile = '/root/P25Hosts.txt';
$tempfile = '/tmp/YeENkHL7jUxtp.tmp';

require_once('fulledit_template.php');

?>
