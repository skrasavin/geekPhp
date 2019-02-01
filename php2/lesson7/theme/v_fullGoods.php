<?

    foreach ($arr as $val) {
        if($val[0] == $_GET['id']) {
            $name = $val[1];
            $addr = $val[2];
            $price = $val[3];
            $desc = $val[4];
            echo "<div class='divFullGoods'>";
            echo "<p class='textFullGoods'>$name</p>";
            echo "<img class='photoFullGoods' src='./photos/$addr' width='700px' height='500px' alt=''>";
            echo "<div class='descFullGoods'><p class='textDescFullGoods'>$desc</p></div>";
            echo "<a href='../models/basket_model.php?key=1&name=$name&addr=$addr&price=$price'><input class='buttonFullGoods' 
            type='button' value='Купить'></a>";
            echo "<p class='priceFullGoods'>$price$</p>";
            echo "</div>";
        }
    }
?>