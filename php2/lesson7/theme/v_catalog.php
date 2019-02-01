<div class="lh">
<?php

foreach ($arr as $val) {
    $id = $val[0];
    $name = $val[1];
    $addr = $val[2];
    $price = $val[3];
    echo "<div class='divCatalog'>";
    echo "<p class='textElements'>$name</p>";
    echo "<a href='fullPhoto.php?id=$id'><img src='./photos/$addr' width='300px' height='200px' alt=''></a>";
    echo "<a href='../models/basket_model.php?key=1&name=$name&addr=$addr&price=$price'><input class='buttonElement' 
            type='button' value='Купить'></a>";
    echo "<p class='priceElements'>$price$</p>";
    echo "</div>";
}
?>
</div>





