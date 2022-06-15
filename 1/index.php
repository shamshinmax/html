<?
$data = include_once('script.php');
$startScript = $data['about'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Резюме</title>
    <link rel="shortcut ico" href="images/img.ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container"> 
        <div class="header">
            <h1 align="center">Резюме</h1>
        </div>
        <div class="info">
            <h2><?=$startScript['name'] ?></h2>
            <div class="info_list">
                <p><?=$startScript['info'] ?></p>
                <p><?=$startScript['can'] ?></p>
                <p><?=$startScript['skills'] ?><ul>
                    <li><?=$startScript['skill1'] ?></li>
                    <li><?=$startScript['skill2'] ?></li>
                    <li><?=$startScript['skill3'] ?></li>
                </ul></p>
                <p><?=$startScript['extraInfo'] ?></p>
                </div>
        </div>
        <div class="photo">
            <p class="par">Основные сведения</p>
            <hr class="thick" size="5" align="left" color="#3CB371">    
            <a href=""><img src="images/photo_me.jpg" width="380" height="550" alt="Если не будет фотки, что-то не так"></a>
            <hr size="20" align="left" color="#3CB371">    
        </div>
        <div class="content">
            <p class="par">Желаемая должность и заработная плата</p>
            <p>Должность: <?=$startScript['work'] ?></p>
            <p>Зарплата: <?=$startScript['Salary'] ?></p>
        </div>

        <div class="footer_left" align="left">
            <a href="https://vk.com/sh4mw">Бла бла бла. Все права защищены(с)</a>
        </div>
        <div class="footer_right" align="right">
            <a href="#top">Перейти вверх страницы</a>
        </div>
    </div>

</body>
</html>