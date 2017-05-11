<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> First page php</title>
    </head>
    <body>
        <?php
       for($year = 2010, $now =2017;$year<=$now;$year++)
          
$phrase = [
2010 => "",
2011=>"BT",
2012=>"",
2013=>"VT",
2014 => "",
2015=>"MYSA",
2016=>"",
2017=>"ipsumm"
];
echo "now Year $year , $phrase[$year]) <br>";
        

        ?>
    </body>
</html>