<?php
//phpinfo();
$redis = new Redis();
$redis->connect('110.110.110.100', 6379);//serverip port
$redis ->set("test" , "Hello World");
echo $redis ->get("test");
