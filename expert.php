<?php 
    $filename = ltrim( $_SERVER['REQUEST_URI'], '/');
    echo $filename;
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
        <div style="text-align: left; width: 45%; margin-left: auto; margin-right: auto; padding: 1rem;">
        <h2>Форма для заполнения</h2>
        <form action="action.php" method="post">
            <div style="padding: 0.5rem;">
                <label for="number">1.Любое число</label><br>
                <input name="number" id="number" type="text">
            </div>
            <div style="padding: 0.5rem;">
                <label for="plusnumber">2.Положительное число</label><br>
                <input name="plusnumber" id="plusnumber" type="text">
            </div>
            <div style="padding: 0.5rem;">
                <label for="string">3.Текстовая инфа от 0 до 30</label><br>
                <input name="string" id="string" type="text">
            </div>
            <div style="padding: 0.5rem;">
                <label for="text">4.Текстовая инфа от 0 до 255</label><br>
                <input name="text" id="text" type="text">
            </div>
            <div style="padding: 0.5rem;">
                <p>5.Единственный выбор</p>
                <select name="onlychoise" id="onlychoise">
                    <option name='1' value="1">1 вариант</option>
                    <option name='2' value="2">2 вариант</option>
                    <option name='3' value="3">3 вариант</option>
                </select>
            </div>
            <div style="padding: 0.5rem;">
            <p>6.Множественный выбор</p>
                <div>
                    <input name="multichoise1" type="radio" value="1 ">
                    <label for="multichoise">1 вариант</label>
                </div>
                <div>
                    <input name="multichoise2" type="radio" value="2">
                    <label for="multichoise">2 вариант</label>
                </div>
                <div>
                    <input name="multichoise3" type="radio" value="3">
                    <label for="multichoise">3 вариант</label>
                </div>
            </div>
            <div>
                <button type="submit" name='submit'>Отправить форму</button>
            </div>
            <div style="display: none">
                <input name="hidefilename" type="text" value="<?php echo($filename = ltrim( $_SERVER['REQUEST_URI'], '/') ); ?>">
            </div>
        </form>
        <div style="padding:1rem; text-align:left;">
            <h3>Подсказка для форм(правильные ответы):</h3>
            <p>1 поле - любые числа</p>
            <p>2 поле - положительные числа</p>
            <p>3 поле - текст от 0 до 30 символов</p>
            <p>4 поле - текст от 0 до 255 символов</p>
            <p>5 поле - 3 вариант правильный</p>
            <p>6 поле - 2 и 3 вариант правильные</p>
        </div>
    </div>
        
    </main>
    <footer>
    </footer>

</body>
</html>