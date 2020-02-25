<html>
<head>
    <title>
        Отправить форму
    </title>
</head>
<body>

<form action="vivod.php" method="post" enctype="multipart/form-data">
    <br>

    <label for="name"> Имя: </label>
    <input type="text" name="name" id="name" placeholder="Имя" required>
    <br><br>


    <label for="Email"> Email: </label>
    <input type="text" name="Email" id="Email" placeholder="Email" required>
    <br><br>

    <label for="message"> Сообщение: </label>
    <br>
    <textarea name="message" cols="40" rows="10"> </textarea>
    <br><br>

    <input type="submit" value="Готово">
</form>
</body>


</html>
