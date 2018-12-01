<?

function power($val, $pow) {
    $a = 7;

    $val *= $a;

    $pow--;

    if($pow == 1) {
        return $val;
    }


    return power($val,$pow);

}
echo power(7,4);


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//RU" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>

</body>
</html>