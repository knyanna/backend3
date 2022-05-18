<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-dark">
    <div class="container-fluid">
        <header class="row d-flex flex-row justify-content-center">
            <div
                class="d-flex flex-row align-items-center justify-content-around justify-content-sm-start col-sm-9 px-sm-4 h-100">
                <img src="звезда.png" alt="Нет изображения"
                    class="logo">
                <h2 class="text-body">Задание №3</h2>
            </div>
        </header>
        <div class="items d-flex flex-column">
            <div class="row d-flex flex-row justify-content-center mt-3 order-sm-3">
                <div class="col-sm-9 bg-light">
                    <div class="items d-flex flex-column ">
                        <div id="form" class="order-sm-3">
                            <h2 class="text-center">Форма:</h2>
                            <form action="" method="POST">
                                <label>
                                    Введите имя:<br>
                                    <input name="name" value="Анна">
                                </label><br>
                                <label>
                                    Введите email:<br>
                                    <input name="email" value="test@example.com" type="email">
                                </label><br>
                                <label>
                                    Введите дату рождения:<br>
                                    <input name="date" value="2002-05-04" type="date">
                                </label><br>
                                Ваш пол:<br>
                                <label><input type="radio" name="radio-group-1" value="М">
                                    Мужской </label>
                                <label><input type="radio" checked="checked" name="radio-group-1" value="Ж">
                                    Женский </label><br>
                                Кол-во конечностей:<br>
                                <label><input type="radio" checked="checked" name="radio-group-2" value="4">
                                    4 </label>
                                <label><input type="radio" checked="checked" name="radio-group-2" value="5">
                                    5 </label>
                                <label><input type="radio" checked="checked" name="radio-group-2" value="6">
                                    6 </label>
                                <label><input type="radio" name="radio-group-2" value="7">
                                    7 </label><br>
                                <label>
                                    Ваши сверхспособности:
                                    <br>
                                    <select name="superpowers[]" multiple="multiple">
                                        <option value="Бессмертие" selected="selected">Бессмертие</option>
                                        <option value="Прохождение сквозь стены">Прохождение сквозь стены</option>
                                        <option value="Левитация">Левитация</option>
                                    </select>
                                </label><br>
                                <label>
                                    Ваша биография:<br>
                                    <textarea name="biography">Напишите биографию</textarea>
                                </label><br>
                                Согласие:<br>
                                <label><input type="checkbox" checked="checked" name="check-1" value = "1">
                                    C контрактом ознакомлен</label><br>
                                <input type="submit" value="Отправить">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row d-flex flex-row justify-content-start mt-3 h-sm-75">
            <div class="d-flex flex-row align-items-center col-sm-9">
                <div class="text-body text-light">(с) Кнышева Анна 2022</div>
            </div>
        </footer>
    </div>
</body>

</html>
