<?php
$start_time = explode(' ', microtime());

$link = mysqli_connect("127.0.0.1", "root", "", "cf");
if (!$link) {
    die("连接失败" . mysqli_connect_error());
}
