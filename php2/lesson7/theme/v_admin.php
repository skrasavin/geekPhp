<?php?><div class="firstAdminDiv">    <form action="../models/admin_model.php?key=3" method="post" enctype="multipart/form-data">        <input class="adminInput1 ainput" type="text" name="name" placeholder="Имя товара">        <input class="adminInput2 ainput" type="text" name="desc" placeholder="Описание">        <input class="adminInput3 ainput" type="text" name="price" placeholder="Стоимость">        <input type="file" name="photo[]">        <input class="vAdminButton" type="submit" value="Добавить новый товар">    </form></div><div class="adminDiv">    <?php    foreach ($basket as $val) {        $id = $val[0];        $name = $val[1];        $addr = $val[2];        $price = $val[3];        echo "<div class='divCatalog'>";        echo "<p class='textElements'>$name</p>";        echo "<img src='./photos/$addr' width='300px' height='200px' alt=''>";        echo "<a href='../models/admin_model.php?key=4&id=$id'><input class='buttonElement'             type='button' value='Удалить'></a>";        echo "<p class='priceElements'>$price$</p>";        echo "</div>";    }    ?></div><a href="index.php"><button class="edit_button">Выход</button></a><a href="orders.php"><button class="edit_button2">Заказы</button></a>