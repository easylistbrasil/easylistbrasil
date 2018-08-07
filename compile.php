<?php

// github info

$username = 'easylistbrasil';
$repository = 'easylistbrasil';
$branch = 'master';

// filter info

$filtername = 'Easylist Brasil';
// Homepage - example: https://username.github.io or https://github.com/username/repository or your host
$home = 'http://easylistbrasil.github.io/';
$licence = 'https://creativecommons.org/licenses/by-sa/4.0/';
$comment1 = 'Por favor comunique quaisquer anúncios desbloqueados ou problemas';
$comment2 = 'no fórum (http://easylistbrasil.freeforums.net/)';
$comment3 = 'ou via e-mail (easylistbrasil.subscription@gmail.com)';

// default file
$file1 = 'easylistbrasil/general_block.txt';
$file2 = 'easylistbrasil/general_block_dimensions.txt';
$file3 = 'easylistbrasil/general_block_popup.txt';
$file4 = 'easylistbrasil/general_hide.txt';
$file5 = 'easylistbrasil/whitelist_general_hide.txt';
$file6 = 'easylistbrasil/adservers.txt';
$file7 = 'easylistbrasil/adservers_popup.txt';
$file8 = 'easylistbrasil/adult_adservers.txt';
$file9 = 'easylistbrasil/adult_adservers_popup.txt';
$file10 = 'easylistbrasil/thirdparty.txt';
$file11 = 'easylistbrasil/thirdparty_popup.txt';
$file12 = 'easylistbrasil/adult_thirdparty.txt';
$file13 = 'easylistbrasil/adult_thirdparty_popup.txt';
$file14 = 'easylistbrasil/specific_block.txt';
$file15 = 'easylistbrasil/specific_block_popup.txt';
$file16 = 'easylistbrasil/adult_specific_block.txt';
$file17 = 'easylistbrasil/adult_specific_block_popup.txt';
$file18 = 'easylistbrasil/specific_hide.txt';
$file19 = 'easylistbrasil/adult_specific_hide.txt';
$file20 = 'easylistbrasil/whitelist.txt';
$file21 = 'easylistbrasil/whitelist_dimensions.txt';
$file22 = 'easylistbrasil/whitelist_popup.txt';
$file23 = 'easylistbrasil/adult_whitelist.txt';
$file24 = 'easylistbrasil/adult_whitelist_popup.txt';

// list info

$list1 = 'Filtros de bloqueio de anúncios em geral';
$list2 = 'Regras de ocultação de elementos em geral';
$list3 = 'Anunciantes de terceiros';
$list4 = 'Anúncios de terceiros';
$list5 = 'Filtros de bloqueio de anúncio específico';
$list6 = 'Regras de ocultação de elemento específico';
$list7 = 'Lista de permissões para corrigir sites quebrados';

// time zone, day, hour

// check time zone - https://secure.php.net/manual/en/timezones.php
date_default_timezone_set('America/Sao_Paulo');
$year = date('Y', time());
$month = date('m', time());
$monthword = date('M', time());
$day = date('d', time());
$hour = date('H', time());
$minute = date('i', time());
// time 1-14
$time = '1';
// time format - days or hours
$timetype = 'days';
$update = '(update frequency)';



// check url
function url_exists($url) {

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return ($code == 200);
}

$ft1 = "!-----------------------$list1-----------------------!";

/// general_block

$f1 = "! *** $repository:$file1 ***";

$link1 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file1";

if (url_exists($link1)) {
    $filter01 = file_get_contents($link1);
} else {
   $filter01 = '! not found';
}

/// general_block_dimensions

$f2 = "! *** $repository:$file2 ***";

$link2 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file2";

if (url_exists($link2)) {
    $filter02 = file_get_contents($link2);
} else {
    $filter02 = '! not found';
}

/// general_block_popup

$f3 = "! *** $repository:$file3 ***";

$link3 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file3";

if (url_exists($link3)) {
    $filter03 = file_get_contents($link3);
} else {
    $filter03 = '! not found';
}

$ft2 = "!------------------------$list2-------------------------!";

/// general_hide

$f4 = "! *** $repository:$file4 ***";

$link4 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file4";

if (url_exists($link4)) {
    $filter04 = file_get_contents($link4);
} else {
    $filter04 = '! not found';
}

/// whitelist_general_hide

$f5 = "! *** $repository:$file5 ***";

$link5 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file5";

if (url_exists($link5)) {
    $filter05 = file_get_contents($link5);
} else {
    $filter05 = '! not found';
}

$ft3 = "!---------------------------$list3---------------------------!";

/// adservers

$f6 = "! *** $repository:$file6 ***";

$link6 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file6";

if (url_exists($link6)) {
    $filter06 = file_get_contents($link6);
} else {
    $filter06 = '! not found';
}

/// adservers_popup

$f7 = "! *** $repository:$file7 ***";

$link7 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file7";

if (url_exists($link7)) {
    $filter07 = file_get_contents($link7);
} else {
    $filter07 = '! not found';
}

/// adult_adservers

$f8 = "! *** $repository:$file8 ***";

$link8 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file8";

if (url_exists($link8)) {
    $filter08 = file_get_contents($link8);
} else {
    $filter08 = '! not found';
}

/// adult_adservers_popup

$f9 = "! *** $repository:$file9 ***";

$link9 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file9";

if (url_exists($link9)) {
    $filter09 = file_get_contents($link9);
} else {
    $filter09 = '! not found';
}

$ft4 = "!-----------------------------$list4-----------------------------!";

/// thirdparty

$f10 = "! *** $repository:$file10 ***";

$link10 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file10";

if (url_exists($link10)) {
    $filter10 = file_get_contents($link10);
} else {
   $filter10 = '! not found';
}

/// thirdparty_popup

$f11 = "! *** $repository:$file11 ***";

$link11 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file11";

if (url_exists($link11)) {
    $filter11 = file_get_contents($link11);
} else {
    $filter11 = '! not found';
}

/// adult_thirdparty

$f12 = "! *** $repository:$file12 ***";

$link12 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file12";

if (url_exists($link12)) {
    $filter12 = file_get_contents($link12);
} else {
    $filter12 = '! not found';
}

/// adult_thirdparty_popup

$f13 = "! *** $repository:$file13 ***";

$link13 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file13";

if (url_exists($link13)) {
    $filter13 = file_get_contents($link13);
} else {
    $filter13 = '! not found';
}

$ft5 = "!----------------------$list5-----------------------!";

/// specific_block

$f14 = "! *** $repository:$file14 ***";

$link14 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file14";

if (url_exists($link14)) {
    $filter14 = file_get_contents($link14);
} else {
    $filter14 = '! not found';
}

/// specific_block_popup

$f15 = "! *** $repository:$file15 ***";

$link15 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file15";

if (url_exists($link15)) {
    $filter15 = file_get_contents($link15);
} else {
    $filter15 = '! not found';
}

/// adult_specific_block

$f16 = "! *** $repository:$file16 ***";

$link16 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file16";

if (url_exists($link16)) {
    $filter16 = file_get_contents($link16);
} else {
    $filter16 = '! not found';
}

/// adult_specific_block_popup

$f17 = "! *** $repository:$file17 ***";

$link17 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file17";

if (url_exists($link17)) {
    $filter17 = file_get_contents($link17);
} else {
    $filter17 = '! not found';
}

$ft6 = "!------------------------$list6------------------------!";

/// specific_hide

$f18 = "! *** $repository:$file18 ***";

$link18 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file18";

if (url_exists($link18)) {
    $filter18 = file_get_contents($link18);
} else {
    $filter18 = '! not found';
}

/// adult_specific_hide

$f19 = "! *** $repository:$file19 ***";

$link19 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file19";

if (url_exists($link19)) {
    $filter19 = file_get_contents($link19);
} else {
    $filter19 = '! not found';
}

$ft7 = "!-----------------------$list7------------------------!";


/// whitelist

$f20 = "! *** $repository:$file20 ***";

$link20 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file20";

if (url_exists($link20)) {
    $filter20 = file_get_contents($link20);
} else {
    $filter20 = '! not found';
}

/// whitelist_dimensions

$f21 = "! *** $repository:$file21 ***";

$link21 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file21";

if (url_exists($link21)) {
    $filter21 = file_get_contents($link21);
} else {
    $filter21 = '! not found';
}

/// whitelist_popup

$f22 = "! *** $repository:$file22 ***";

$link22 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file22";

if (url_exists($link22)) {
    $filter22 = file_get_contents($link22);
} else {
    $filter22 = '! not found';
}

/// adult_whitelist

$f23 = "! *** $repository:$file23 ***";

$link23 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file23";

if (url_exists($link23)) {
    $filter23 = file_get_contents($link23);
} else {
    $filter23 = '! not found';
}

/// adult_whitelist_popup

$f24 = "! *** $repository:$file24 ***";

$link24 = "https://raw.githubusercontent.com/$username/$repository/$branch/$file24";

if (url_exists($link24)) {
    $filter24 = file_get_contents($link24);
} else {
    $filter24 = '! not found';
}

$compile = "$ft1\n$f1\n$filter01\n$f2\n$filter02\n$f3\n$filter03\n$ft2\n$f4\n$filter04\n$f5\n$filter05\n$ft3\n$f6\n$filter06\n$f7\n$filter07\n$f8\n$filter08\n$f9\n$filter09\n$ft4\n$f10\n$filter10\n$f11\n$filter11\n$f12\n$filter12\n$f13\n$filter13\n$ft5\n$f14\n$filter14\n$f15\n$filter15\n$f16\n$filter16\n$f17\n$filter17\n$ft6\n$f18\n$filter18\n$f19\n$ft7\n$f20\n$filter20\n$f21\n$filter21\n$f22\n$filter22\n$f23\n$filter23\n$f24\n$filter24";

/// remove blank lines
function rBlankLines($str) {  
           $str = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $str);  
  	   return $str;
}
$rp = rBlankLines($compile);
$result = $rp;

/// clean before and after
$final = trim($result);

/// Header
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Connection: close");
header('Content-Type: text/plain; charset=utf-8');
$head = "[Adblock Plus 2.0]\n";
$version = "! Version: $year$month$day$hour$minute\n";
$title = "! Title: $filtername\n";
$last = "! Last modified: $day $monthword $year $hour:$minute UTC\n";
$expire = "! Expires: $time $timetype $update\n";
$homepage = "! Homepage: $home\n";
$lic = "! License: $licence\n";
$line = "!\n";
$msg1 = "! $comment1\n";
$msg2 = "! $comment2\n";
$msg3 = "! $comment3\n";
$msg4 = "! GitHub issues: https://github.com/$username/$repository/issues\n";
$msg5 = "! GitHub pull requests: https://github.com/$username/$repository/pulls\n";

/// Checksum
function md5_base64($data) {
  return preg_replace('/=+$/','',base64_encode(pack('H*',md5($data))));
}

$recompile = $head.$version.$title.$last.$expire.$homepage.$lic.$line.$msg1.$msg2.$msg3.$msg4.$msg5.$line.$final;
$chk = md5_base64($recompile);
$check = "! Checksum: $chk\n";
$validate = $head.$check.$version.$title.$last.$expire.$homepage.$lic.$line.$msg1.$msg2.$msg3.$msg4.$msg5.$line.$final;
// echo trim($validate);
$full = trim($validate);
$path = 'easylistbrasil.txt';
$fp = fopen($path, "w");
$write = fwrite($fp, $full);
fclose($fp);

?>