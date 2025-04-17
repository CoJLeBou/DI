<?
session_start(); 
require_once 'connect.php'; ?>
<!DOCTYPE html>

<html>
    
<head>

    <meta  content="text/html" charset="utf-8">
    <title>CONTINENTAL</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="reg1.css">

  
 </head>
    

            <body class="body">
                 
                <? include 'headerr.php'; ?>

                
            <div class="reg1">
                <fieldset class="reg">
                    <legend class="leg">Регистрация</legend>
                    <label><input style="border-radius: 5px; border: none; width: 200px; height: 30px;"  type="text" placeholder="Фамилия" required></label>
                    <label><input style="border-radius: 5px; border: none; width: 200px; height: 30px;" type="email" placeholder="Имя" required></label>
                    <label><input style="border-radius: 5px; border: none; width: 200px; height: 30px;" type="email" placeholder="Отчество" required></label>
                    <label><input style="border-radius: 5px; border: none; width: 200px; height: 30px;" type="email" placeholder="E-mail" required></label>
                    <label><input style="border-radius: 5px; border: none; width: 200px; height: 30px;" type="email" placeholder="Пароль" required></label>
                    <label><input style="border-radius: 5px; border: none; width: 200px; height: 30px;" type="email" placeholder="Повторите Пароль" required></label>
                    <button style="border: none;" type="submit">Зарегистрироваться</button> 
                </fieldset>
            </div> 










         

                <? include 'footer.php'; ?>

            </body>
            
</html>
    

