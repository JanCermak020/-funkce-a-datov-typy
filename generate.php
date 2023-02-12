<?php

$pocet =0;
$type =array("bool","int","float","string");
$numbers =array(TRUE,5,5.0,'5');
$myfile = fopen("test.php", "w") or die("Unable to open file!");
$code ="<?php \n error_reporting(E_ALL);\n";
$prome='$x';
$prome2='\n';
$code2="";
foreach ($type as $input)
{
    foreach($type as $output)
    {
        $code .="function test$pocet($input $prome):$output\n{return $prome/2;}\n";
        foreach ($numbers as $test)
        {
            $code2 .="echo '    test$pocet  '; \n";
            $code2 .="echo test$pocet($test);\n";
        }
        $pocet++;
    }
}
$code2 .="?>";
fwrite($myfile, $code);
fwrite($myfile, $code2);
fclose($myfile);

?> 