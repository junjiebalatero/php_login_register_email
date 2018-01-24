<?php
$connect_error = 'Sorry cannot connect';
mysql_connect('localhost', 'root', '') or die($connect_error);
mysql_select_db('lr2')or die($connect_error);
?>