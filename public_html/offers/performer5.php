<?

$info = explode("|",$_COOKIE['__utmz']);
$ga_info = array();

foreach ($info as $val) {
    $temp = explode("=",$val);
    $ga_info[$temp[0]] = $temp[1];
}

$keys = (!isset($ga_info['utmctr'])) ? (isset($_GET['OVRAW'])) ? $_GET['OVRAW'] : "Unknown" : $ga_info['utmctr'];

// your affiliate link (without keyword fields)
$link = "http://track.impactfive.com/hit.php?w=150921&s=161&c=280343209505198087&a=10347";

header ("Location: {$link}&kw={$keys}");
exit;

?>