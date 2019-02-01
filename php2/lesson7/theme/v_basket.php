<div class="lh">
    <?php
    foreach ($basket as $val) {
        $id = $val[0];
        $name = $val[1];
        $addr = $val[2];
        $price = $val[3];
        echo "<div class='divCatalog'>";
        echo "<p class='textElements'>$name</p>";
        echo "<img src='./photos/$addr' width='300px' height='200px' alt=''>";
        echo "<a href='../models/basket_model.php?key=2&id=$id'><input class='buttonElement' 
            type='button' value='Удалить'></a>";
        echo "<p class='priceElements'>$price$</p>";
        echo "</div>";
    }
    ?>
</div>
<div>
    <code class="orderForm"><?=$_GET['message']?></code>
    <p class="orderForm2"><?=$_GET['mess']?></p>
    <div class="basketDiv">
        <h2 class="h2basket">Форма для заказа</h2>
        <form action="../models/basket_model.php?key=6" method="POST">
            <input class="adminInput1" type="text" name="name" placeholder="Ваше имя">
            <input class="basketInput2" type="text" name="phone" placeholder="Номер телефона">
            <input class="basketButton" type="submit" value="Сделать заказ">
        </form>
    </div>
</div>