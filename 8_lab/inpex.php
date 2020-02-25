<div>

    <title>Регистрация</title>


    <form action="Vivod2.php" method="post" enctype="multipart/form-data"></br>
        <h3><label for="name">Введите ваше имя: </label></h3>
        <input type="text" name="name" id="name" placeholder="Имя" required>
        </br></br>
        <h3><label for="password">Введите ваш пароль: </label></h3>
        <input type="password" name="password" id="password" placeholder="Пароль" required>
        </br></br>

        <h3><label for="email">Введите ваш email: </label></h3>
        <input type="email" name="email" id="email" placeholder="email" required>
        </br></br>

        <h3><label for="fdate">Введите ваш дату рождения: </label></br>
            <input type="date" name="fdate" id="fdate" required></h3>
        </br></br>

        <h2><label for="home">Загрузите файл: </label></br>
            <input type="file" name="home" id="home">
            </br></br>

            <input type="submit" value="отправить"></h2>
        </br></br>
    </form>
</div>