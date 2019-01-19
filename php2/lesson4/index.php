<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button id="searchip">Ещё фото</button>
<div id="resultip"></div>

<script>
    var count = 25;
    $(document).ready(function () {
        $.post('connect.php',{postname:count},
            function (data){
                $("#resultip").html(data);
                count = 50;
            }
        );
        $("#searchip").click(function () {

            $.post('connect.php',{postname:count},
                function (data){
                    $("#resultip").html(data);
                    count += 25;
                }
            )
        })
    });
</script>


</body>
</html>
