<?php
$account = @file_get_contents('https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player='.urlencode($_GET['username'])); 
$account_found = "";
if($http_response_header[0] == 'HTTP/1.1 404 Not found')
    {
    $account_found = 0;
    }
    else
    {
    $account_found = 1;
}
?>