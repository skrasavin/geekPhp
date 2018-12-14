
<form method="POST" action="server.php">
    <p class="content">Имя</p>
    <input class="cname" type="text" name="name"><br>

    <p class="content">Телефон</p>
    <input class="cname" type="number" name="phone"><br>

    <p class="content">Ваш отзыв</p>
    <textarea class="cname2" name="feedback" cols="30" rows="10"></textarea><br>
    <input type="submit" style="width: 100px;">
</form>

<style type="text/css">
    body {
        margin-left: 350px;
    }
    .cname {
        margin-bottom: 5px;
        width: 250px;
    }
    .cname2 {
        width: 500px;
        height: 200px;
    }
    .content {
        margin-bottom: 0px;
    }
</style>