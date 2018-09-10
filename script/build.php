<?php

// github info

$username = 'easylistbrasil';
$repository = 'easylistbrasil';
$branch = 'master';

// export 1 - export file, export 0 - display
$export = '1';
$exportname = './output/easylistbrasil.txt';

// local (fast), remote (slow)
$source = 'local';

// filter info
$filtername = 'EasyList Brasil';
// Homepage - example: https://username.github.io or https://github.com/username/repository or your host
$home = 'https://easylistbrasil.github.io/';
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

// no error
Error_reporting (0);

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

// remove blank lines
function rBlankLines($str) {  
           $str = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $str);  
  	   return $str;
}

function filelist($username, $repository, $branch, $file, $source){
	$f = "! *** $repository:$file ***";
	$link = "https://raw.githubusercontent.com/$username/$repository/$branch/$file";
if (($source == 'local') && (file_exists("./$file"))) {
    $filter = file_get_contents("./$file");
   $result = "$f\n$filter";
} elseif (($source == 'remote') && (url_exists($link))) {
    $filter = file_get_contents($link);
   $result = "$f\n$filter";
} else {
   $result = "! $file was not found";
}
return $result;
}

// Checksum
function md5_base64($data) {
  return preg_replace('/=+$/','',base64_encode(pack('H*',md5($data))));
}

/// (1-3)
$ft[0] = "!-----------------------$list1-----------------------!";
$ft[1] = filelist($username, $repository, $branch, $file1, $source);
$ft[2] = filelist($username, $repository, $branch, $file2, $source);
$ft[3] = filelist($username, $repository, $branch, $file3, $source);
/// (4-5)
$ft[4] = "!-----------------------$list2-----------------------!";
$ft[5] = filelist($username, $repository, $branch, $file4, $source);
$ft[6] = filelist($username, $repository, $branch, $file5, $source);
/// (6-9)
$ft[7] = "!-----------------------$list3-----------------------!";
$ft[8] = filelist($username, $repository, $branch, $file6, $source);
$ft[9] = filelist($username, $repository, $branch, $file7, $source);
$ft[10] = filelist($username, $repository, $branch, $file8, $source);
$ft[11] = filelist($username, $repository, $branch, $file9, $source);
/// (10-13)
$ft[12] = "!-----------------------$list4-----------------------!";
$ft[13] = filelist($username, $repository, $branch, $file10, $source);
$ft[14] = filelist($username, $repository, $branch, $file11, $source);
$ft[15] = filelist($username, $repository, $branch, $file12, $source);
$ft[16] = filelist($username, $repository, $branch, $file13, $source);
/// (14-17)
$ft[17] = "!-----------------------$list5-----------------------!";
$ft[18] = filelist($username, $repository, $branch, $file14, $source);
$ft[19] = filelist($username, $repository, $branch, $file15, $source);
$ft[20] = filelist($username, $repository, $branch, $file16, $source);
$ft[21] = filelist($username, $repository, $branch, $file17, $source);
/// (18-19)
$ft[22] = "!-----------------------$list6-----------------------!";
$ft[23] = filelist($username, $repository, $branch, $file18, $source);
$ft[24] = filelist($username, $repository, $branch, $file19, $source);
/// (20-24)
$ft[25] = "!-----------------------$list7-----------------------!";
$ft[26] = filelist($username, $repository, $branch, $file20, $source);
$ft[27] = filelist($username, $repository, $branch, $file21, $source);
$ft[28] = filelist($username, $repository, $branch, $file22, $source);
$ft[29] = filelist($username, $repository, $branch, $file23, $source);
$ft[30] = filelist($username, $repository, $branch, $file24, $source);

$abp = rBlankLines(implode("\n", $ft));
$lines_arr = preg_split('/\n|\r/',$abp);
$lines = count($lines_arr);

$abpversion = "[Adblock Plus 2.0]\n";
$info[0] = "! Version: $year$month$day$hour$minute";
$info[1] = "! Title: $filtername";
$info[2] = "! Last modified: $day $monthword $year $hour:$minute UTC";
$info[3] = "! Expires: $time $timetype $update";
$info[4] = "! Homepage: $home";
$info[5] = "! License: $licence";
$info[6] = "!";
$info[7] = "! $comment1";
$info[8] = "! $comment2";
$info[9] = "! $comment3";
$info[10] = "! GitHub issues: https://github.com/$username/$repository/issues";
$info[11] = "! GitHub pull requests: https://github.com/$username/$repository/pulls";
$info[12] = "!\n";

$abpinfo = implode("\n", $info);
$recompile = $abpversion.$abpinfo.$abp;
$chk = md5_base64($recompile);
$check = "! Checksum: $chk\n";
$validate = $abpversion.$check.$abpinfo.$abp;

if (($export == '1') && ($lines != count($ft))) {
    $textfile = trim($validate);
    $myfile = fopen("$exportname", "w") or die("Unable to open file!");
    fwrite($myfile, $textfile);
    fclose($myfile);
} elseif (($export == '0') && ($lines != count($ft))) {
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Connection: close");
    header('Content-Type: text/plain; charset=utf-8');
    echo trim($validate);
} else {
    echo 'error';
}

?>
