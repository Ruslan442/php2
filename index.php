<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="/css/style.css"/>
</head>
<body>

    <header>
        <img src="/img/poli.png" class="logo">
        <h1>Домашняя работа: Feedback Form</h1>
    </header>

    <main> 
        <form method="post" action="https://httpbin.org/post">
            <label for="name">Ваше имя</label><br>
            <input type="text" name="name" id="name"><br>

            <label for="e-mail">Ваш e-mail</label><br>
            <input type="e-mail" name="e-mail" id="e-mail"><br>

            <label for="type">Тип обращения</label><br>
            <input type="radio" name="type" id="type"> Жалоба<br>
            <input type="radio" name="type" id="type"> Предложение<br>
            <input type="radio" name="type" id="type"> Благодарность<br>

            <label for="text">Ваше обращение</label><br>
            <input type="textarea" name="obrashenie" id="text"><br>

            <label for="otvet">Где вам ответить</label><br>
            <input type="checkbox" name="otvet" id="otvet">СМС<br>
            <input type="checkbox" name="otvet" id="otvet">e-mail<br>

            <input type="submit">

        </form>

        <a href="/second.php" class="button beer-button-blue">GO</a>
    </main>
    

    <footer>
        <p>задание для самостоятельно работы (без описания)</p>
    </footer>
</body>
</html>