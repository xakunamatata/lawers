<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Адвокатский кабинет Видюкова Д. В</title>
    <script src="https://kit.fontawesome.com/af6c29c45b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include_once('partials/navigation.php') ?>

<div class="section-header">
    <div class="container">
        <a href="#" class="header-link">Главная</a>
        <a href="#" class="header-link">Контакты</a>
        <p class="header-name">Контактная информация</p>
    </div>
</div>

<div class="section-map"></div>

<div class="section-contacts">
    <div class="container">
        <h4 class="heading4">Обратная связь</h4>
        <form action="">
            <div class="form-layout">
                <input type="text" name="name" id="name" placeholder="Ваше имя" class="form-input">
                <input type="text" name="surname" id="surname" placeholder="Ваша фамилия" class="form-input">
                <input type="text" name="phone" id="phone" placeholder="Ваш телефон" class="form-input">
                <input type="text" name="email" id="email" placeholder="Ваш контактный email" class="form-input">
                <textarea name="question" id="question" class="form-input form-textarea"
                          placeholder="Ваш вопрос"></textarea>
            </div>
            <div class="form-agreement">
                <input type="checkbox" name="agree" id="agree" class="form-checkbox">
                <label for="agree" class="label-checkbox">Я согласен на обработку <a href="">персональных данных</a></label>
            </div>
            <button type="submit" class="btn btn-blue">Отправить</button>
        </form>
    </div>
</div>
<?php include_once('partials/footer.php') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="/ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="libs/animated_circles/dist/circle-progress.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>