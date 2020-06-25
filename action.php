<?php 
 if($_POST['hidefilename']){
     //$filename = ltrim( $_SERVER['REQUEST_URI'], '/');
    echo $_POST['hidefilename'];
    rename($_POST['hidefilename'], "expert.php");
}else{
    echo('NONE');
}

$bal1=0; $bal2=0 ; $bal3=0 ; $bal4=0 ; $bal5=0 ;$bal6=0 ;
if(isset($_POST['number'])){
    $array = preg_split('//u', $_POST['number'], null, PREG_SPLIT_NO_EMPTY);
   // print_r($array);
    $flag= false;
    for($i= 0; $i < count($array); $i++){
        echo('');
        if(  ((($array[$i]) == '0')) || ((($array[$i]) == '1')) || ((($array[$i]) == '2'))   || ((($array[$i]) == '3'))   || ((($array[$i]) == '4'))   || ((($array[$i]) == '5'))  || ((($array[$i]) == '6'))  || ((($array[$i]) == '7')) || ((($array[$i]) == '8'))   || ((($array[$i]) == '9'))  || ((($array[$i]) == '-'))      ){
            $flag = true;
        }else{
            $flag = false;
            break;
        }
    }
    if($flag){
        echo('1. Правильно 15 баллов<br>');
        $bal1 = 15;
    } else{
        echo('1. Неправильно<br>');
    }
}
if(isset($_POST['plusnumber'])){
    $array = preg_split('//u', $_POST['plusnumber'], null, PREG_SPLIT_NO_EMPTY);
    //print_r($array);
    $numberFlag= false;
    for($i= 0; $i < count($array); $i++){
        echo('');
        if(  ((($array[$i]) == '0')) || ((($array[$i]) == '1')) || ((($array[$i]) == '2'))   || ((($array[$i]) == '3'))   || ((($array[$i]) == '4'))   || ((($array[$i]) == '5'))  || ((($array[$i]) == '6'))  || ((($array[$i]) == '7')) || ((($array[$i]) == '8'))   || ((($array[$i]) == '9'))       ){
            $numberFlag = true;
        }else{
            $numberFlag = false;
            break;
        }
    }
    if($numberFlag){
        echo('2. Правильно 15 баллов<br>');
        $bal2 = 15;
    } else{
        echo('2. Неправильно<br>');
    }
}
if(isset($_POST['string'])){
    $array = preg_split('//u', $_POST['string'], null, PREG_SPLIT_NO_EMPTY);
    $flagString = false;
    $k=0;
    for($i= 0; $i < count($array); $i++){
        if(((mb_ord($array[$i]) >= 65)&&(mb_ord($array[$i]) <= 90))||((mb_ord($array[$i]) >= 97)&&(mb_ord($array[$i]) <= 122))||(($array[$i]) == ' ')){
            $k++;
            $flagString = true;
        }else{
            if(((mb_ord($array[$i]) >= 1040)&&(ord($array[$i]) <= 1103)) || ((mb_ord($array[$i]) == 1025))){
                $k++;
                $flagString = true;
            }else{
                $flagString = false;
                break;
            }   
        }
        
    }
    if( ($flagString) && ($k <= 30)){
        echo('3. Правильно 15 баллов<br>');
        $bal3 = 15;
    } else{
        echo('3. Неправильно<br>');
    }
}
if(isset($_POST['text'])){
    $array = preg_split('//u', $_POST['text'], null, PREG_SPLIT_NO_EMPTY);
    $flagString = false;
    $k=0;
    for($i= 0; $i < count($array); $i++){
        if(((mb_ord($array[$i]) >= 65)&&(mb_ord($array[$i]) <= 90))||((mb_ord($array[$i]) >= 97)&&(mb_ord($array[$i]) <= 122))||(($array[$i]) == ' ')){
            $k++;
            $flagString = true;
        }else{
            if(((mb_ord($array[$i]) >= 1040)&&(ord($array[$i]) <= 1103)) || ((mb_ord($array[$i]) == 1025))){
                $k++;
                $flagString = true;
            }else{
                $flagString = false;
                break;
            }   
        }
        
    }
    if( ($flagString) && ($k <= 250)){
        echo('4. Правильно 15 баллов<br>');
        $bal4 = 15;
    } else{
        echo('4. Неправильно<br>');
    }
}
if(isset($_POST['submit'])){
    //echo($_POST['onlychoise']);
    if($_POST['onlychoise'] == 3){
        echo('5. Правильно 15 баллов<br>');
        $bal5 = 15;
    }else{
        echo('5. Неправильно<br>');
    }

}
if(isset($_POST['submit'])){
    //echo($_POST['multichoise1']);
    //echo($_POST['multichoise2']);
    //echo($_POST['multichoise3']);
    if(($_POST['multichoise2'] == 2) && ($_POST['multichoise3'] == 3) ){
        echo('6. Правильно 25 баллов<br>');
        $bal6 = 25;
    }else{
        echo('6. Неправильно<br>');
    }
}
echo('<h2>Итого: '.($bal1+$bal2+$bal3+$bal4+$bal5+$bal6).'<h2>');
echo('<form method="GET">
<a href="/?index=1">На главную страницу</a>
</form>');
if($_GET['index'] == 1){
    header('Location: index.pnp');
}
?>