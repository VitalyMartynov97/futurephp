<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/formcontrol.js"></script>
</head>
<body>
    <div id="screen">
        <div id="header">
            <div id="header-container">
                <div id="header-left">
                    <div class="contacts">
                        <b>Телефон: (499) 340-94-71
                        <br>
                        Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a>
                        </b>
                    </div>
                    <div class="page-title">
                        Комментарии
                    </div>
                </div>
                <div id="header-right">
                    <div class="logo">
                        <img src="img/logo.png">
                    </div>
                </div>
            </div>
        </div>
        <div id="main">
            <div id="main-insaider">
                <div id="comments-block">
                    <div id="c-blck-inner">

                        <? 
                            include("php/comments.php")
                        ?>

                    </div>
                    <hr>
                </div>
                <form method="POST" class="pt-2"  action="php/insert_comment.php">
                    <h3 >Оставить комментарий</h3>
                    <label for="name" class="mt-2 mb-2">Ваше имя</label>
                    <input class="form-control input-lg" style="max-width: 400px;" id="name" type="text" required>
                    <label for="comment" class="mt-3 mb-2">Ваш комментарий</label>
                    <textarea id="comment" class="form-control input-lg" style="max-width: 400px; height: 160px;"></textarea>
                    <div id="submit-line">
                        <div></div>
                        <input id="send-comment-sub" class="btn btn-outline-dark" type="submit" value="Отправить" name="sub">
                    </div>
                </form>
            </div>
        </div>
        <div id="footer">
            <div id="footer-insaider">
                <div class="logo">
                    <img src="img/logo.png" width="130px">
                </div>
                <div class="footer-contacts">
                    <b>
                    Телефон: (499) 340-94-71
                    <br>
                    Email: info@future-group.ru
                    <br>
                    Адрес: <a href="https://yandex.ru/maps/-/CCUEB-A3OC">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a>
                    </b>
                    <div class="footer-rights">
                        @2010 - 2014 Future. Все права защищены
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>