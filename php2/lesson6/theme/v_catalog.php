<div class="lh">
<?php

foreach ($n as $val) {
    $name = $val[1];
    $addr = $val[2];
    $price = $val[3];
    echo "<div class='divCatalog'>";
    echo "<p class='textElements'>$name</p>";
    echo "<img src='./photos/$addr' width='300px' height='200px' alt=''>";
    echo "<a><input class='buttonElement' type='button' value='Купить'></a>";
    echo "<p class='priceElements'>$price$</p>";
    echo "</div>";
/*    echo '<p class="el_3"><span class="el_4">Описание:</span><br><br><?=$info[$x]?></p>';*/
/*    echo '<p class="el_5"><?=$price[$x]?>р</p>';*/
//
}
?>
</div>





