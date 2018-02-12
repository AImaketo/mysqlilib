<?php
//建立到数据库的连接
//$mysqli = new mysqli('localhost','root','','point');
//print_r($mysqli);
$mysqli = new mysqli();
@$mysqli->connect('127.0.0.1','root','','point');
//print_r($mysqli);
//捕获错误信息
if ($mysqli->connect_errno){
    die($mysqli->connect_error);
}
//设置字符集
$mysqli->set_charset('utf8');
//print_r($mysqli->get_connection_stats());
print_r($mysqli);
echo '<br/>';
echo '客户端信息'."\t:".$mysqli->client_info.'<br/>';
echo "客户端版本:\t".$mysqli->client_version.'<br/>';
echo '主机信息'.$mysqli->host_info.'<br/>';
echo '服务器信息'.$mysqli->server_info.'<br/>';
echo $mysqli->server_version.'<br/>';
echo $mysqli->get_server_info();
