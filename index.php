<?php 
    session_start();

    if(empty($_SESSION['user'])){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="css/main.css">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <title>Гатауллина Руфина 191-322 9 лаба php</title>
    <style>
    .container{
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    padding: 2rem;
    box-shadow: 0 0px 10px rgba(0, 0, 0, 0.356);
    margin-top: 170px;
}
.page{
    padding: 0.5rem;
    border: 1px solid black;
    text-decoration: none;
    margin: 5px;
    color: black;
}
.activepage{
    background-color: #273d46;
}
.active{
    background-color: rgba(255, 255, 255, 0.356);
}

.li{
display: inline-block;
margin: 10px;
}
.ul{
    background-color: #273d46;
}
.ul2{
    position: absolute;
    -webkit-transform: scaleY(0);
    -ms-transform: scaleY(0);
    transform: scaleY(0);
  -webkit-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    transform-origin: 0 0;
    transition: 0.6s;
}
ul li:hover .ul2{
    -webkit-transform: scaleY(1);
    -ms-transform: scaleY(1);
    transform: scaleY(1);
}
.ul2 > li:hover{
    background-color: rgba(255, 255, 255, 0.356);
}
.a{
    color: white;
    text-decoration: none;
    padding: 1rem;
    border-bottom: none;
}
.ul2{
    position: absolute;
    background-color: #0e9084;
    margin-top: 16px;
}
.li2{
    list-style: none;
    padding: 0.6rem;
}
.li2 > a{
    text-decoration: none;
    color: white;
}
.active2{
    background-color: rgba(255, 255, 255, 0.356);
}
main{
    margin-top: 80px;
}
.input{
    padding: 0.5rem;
    width: 300px;
    font-size: 18px;
    margin: 5px;
}
form{
    margin-top: 140px;
}
.btn{
    margin-top: 20px;
    padding: 0.7rem; 
    border: none;
    background-color: #273d46;
    color: white;
    cursor: pointer;
    font-family: sans-serif;
    font-size: 12px;
    transition: 0.5s;
    border-radius: 6px;
    text-transform: uppercase;
}
.btn:hover{
    background-color: #273d466e;
    color: black;
}
th{
    border-bottom: 1px solid black;
}
.margin{
    margin-top: 120px;
}
.delete{
    border: 1px solid black;
    display: block;
    width: 20px;
    height: 20px;
}
.aedit{
    color: black;
    text-decoration: none;
}
td{
    text-align: left;
    transition: 0.6s;
}
td:hover{
    background-color: #273d46cf;
}
.hide{
    display: none;
}
.img{
    vertical-align: bottom;
    float: right;
    background-color: #da4a4a3d;
    padding: 0.1rem;
}
.img:hover{
    cursor: pointer;
    background-color: #da4a4a;
}
    </style>
</head>
<body>
    <header>
        <div>
            <div class="logo"><img class="logo" src="../img/5ddf7f4a09a57_173x173.png" alt=""></div>
            <div class="name"> Московский Политех</div>
        </div>
    </header>
    <main>
            <?php
                    function createForm(){
                        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $idform = (substr(str_shuffle($permitted_chars), 0, 16));
                        return $idform;
                        $flag = false;
                    }
                        ?>
            <h1><?= 'Добро пожаловать, '. $_SESSION['user']['login']; ?></h1>
        <ul>
            <li style="style-list:none;"><a href="logout.php">Выйти из учетной записи</a></li>
            <li><a href="/?flag=true">Создать форму</a></li>
        </ul>
            <?php 
           $link = createForm();
           print_r($array_global);
            if($_GET['flag']== 'true'){
                echo('<div>
                <h3>Ссылка сгенерирована</h3>
                <a href="/?formlink='.$link.'"> '."http://".$_SERVER["HTTP_HOST"].$link.'</a></div>');

                //$conn = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971');
                $conn = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971');
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "CREATE TABLE `std_971`.`$link` ( `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , `number` TEXT NOT NULL , `plusnumber` TEXT NOT NULL , `string` TEXT NOT NULL , `text` TEXT NOT NULL , `onlychoise` TEXT NOT NULL , `multichoise` TEXT NOT NULL , UNIQUE `id` (`id`)) ENGINE = InnoDB;";
                if (mysqli_query($conn, $sql)) {
                    echo "<script> alert('Создано БД для адреса ".$link."')</script>";
                    //return( require 'index.php');
                    //exit();
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                // mysqli_close($conn);
                // exit();

            }
           ?> 
           <?php
            if(isset($_GET['formlink']) == $link){
                rename("expert.php", $link.'.php');
                header('Location: '.$link.'.php');
                //header('Location: expert.php');
            }
             ?>
             <div>
           <?php // просмотр всех ссылок
                $connection = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971'); // коннект с сервером бд
                if( mysqli_connect_error() ) // проверяем корректность подключения 
                    echo 'Ошибка подключения к БД: '.mysqli_connect_error();
                    $result = mysqli_query($connection, "SHOW TABLES FROM std_971;"); // запрос на выборку
                    if(!$result)
                    {
                        echo('error');
                        throw new Exception(sprintf('Не удалось выполнить запрос к БД, код ошибки %d, текст ошибки: %s', mysqli_errno($connection), mysqli_error($connection)));
                    }else{
                         //echo('прошел');
                    }
                    $rows = mysqli_num_rows($result); // количество полученных строк
                    echo "<table><tr><th>Ссылки на все созданные формы (из БД)</th></tr>";
                    for ($i = 0 ; $i < $rows ; ++$i)
                    {
                        $row = mysqli_fetch_row($result);
                        echo "<tr>";
                            for ($j = 0 ; $j < 1 ; ++$j) echo "<td><a href='/?formlink=".$row[$j]."'>$row[$j]</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    mysql_close($connection);
            ?>
           </div>
          
    </main>
    <footer>
    </footer>

</body>
</html>