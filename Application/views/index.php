<!DOCTYPE html>
<head>
    <title> Учёт монтажных работ по системе видеонаблюдения</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" charset="utf-8">
    <link href= "http://rizar:8080/public/css/bootstrap.min.css" rel="stylesheet"  type="text/css">
    <script src="http://rizar:8080/public/js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <link href="http://rizar:8080/public/css/style.css" rel="stylesheet"  type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>.container{
            max-width: 1024px;
            max-height: 768px;
            align-content: center;
            position: fixed; /* or absolute */
            top: 50%;
            left: 70%;
            width: 200px;
            height:200px;
            transform: translate(-50%, -50%);
        }
        body{
            background-image: url(http://www.wallpapers4u.org/wp-content/uploads/circles_curves_reflections_waves_38929_1920x1080.jpg);
        }
    </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://rizar:8080/public/js/popper.min.js"></script>
<script src="http://rizar:8080/public/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<?php
$this->load->database();
?>

<div class="container">

<form action='http://Rizar:8080/index.php/Rizar/Index' method='POST'>
    <p>
    &nbsp&nbsp&nbsp Пользователь:
        <br>
        <select name="avt">
            <option value="Менеджер">Менеджер</option>
            <option value="Бухгалтер">Бухгалтер</option>
            <option value="Клиент">Клиент</option>
            <option value="Директор">Директор</option>
        </select>
        <input type='submit' class="btn"   value='Войти' style="height: 50px; width: 100px;">
    </p>
</form>
</div>
</body>
</html>
