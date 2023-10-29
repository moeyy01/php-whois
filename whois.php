<?php

require_once('src/whois.main.php');

if(isset($_GET['domain'])){
    $domain = $_GET['domain'];
    
    // 查询域名信息
    $whois = new Whois();
    $result = $whois->lookup($domain);
        $output = '';

        foreach ($result['rawdata'] as $line) {
            $output .= "$line<br>";
        }
        echo $output;
} else {
    echo "请提供要查询的域名";
}
?>
