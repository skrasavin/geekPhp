<table class="table">
<p class="tt1 tt">№</p>
<p class="tt2 tt">Дата-Время</p>
<p class="tt3 tt">Имя</p>
<p class="tt4 tt">Телефон</p>
<p class="tt5 tt">Товары</p>
<p class="tt6 tt">Стоимость</p>

<a href="lk.php"><button class="edit_button">Выход</button></a>
<?

foreach ($orders as $order) {
    $orderNumber = $order[0];
    $time = $order[1];
    $name = $order[2];
    $phone = $order[3];
    $goods = $order[4];
    $sum = $order[5];

    echo "<tr>";
    echo "<td class='orderTable'>$orderNumber</td>";
    echo "<td class='orderTable'>$time</td>";
    echo "<td class='orderTable'>$name</td>";
    echo "<td class='orderTable'>$phone</td>";
    echo "<td class='orderTable'>$goods</td>";
    echo "<td class='orderTable'>$sum руб</td>";
    echo "</tr>";
}
?>



</table>
