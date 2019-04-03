<?php
date_default_timezone_set('moscow');
echo "Сейчас минут ". $minuteNow = date('i', time());
echo '<br>';
echo "Сейчас часов ". $hourNow = date('H', time());
echo '<br>';
echo "Сейчас секунд ". $secNow = date('s', time());
echo '<br>';
echo "Сейчас число ". $dayNow = date('d', time());
echo '<br>';
echo "Сейчас год ". $yearNow = date('Y', time()) ;
echo '<br>';




//ПЕРВОЕ УСЛОВИЕ
//Количество часов умноженное на 20 - ширина
echo "Текущий час $hourNow, умноженный на 20 равен ". $hourTwen = $hourNow * 20;
echo '<br>';
//День месяца в кубе
$dayInCube =  pow ( $dayNow , 3 );
$nimWithout = $minuteNow % 3;


//ВТОРОЕ УСЛОВИЕ
//Корень из текущего года, округленный и умноженный на 5
echo "Округленный из текущего года ". $yearNow." и умноженный на 5 равен ". $sqrYear =  round(sqrt($yearNow)) * 5 ;
//текущая минута, множенная на текущую секунду
$minSecNow = $minuteNow * $secNow;

//День месяца в кубе
$dayInCube =  pow ( $dayNow , 3 );

//Текущий час в квадрате
$sqrHour = $hourNow * $hourNow;


echo '<br>';
if (($minuteNow%3)==0){
    echo '<br>';
    echo '<b>Попадает под первое условие, когда текущая минута '. $minuteNow. ' кратна трём и делиться без остатка. Ширина  прямоугольника равна </b>';
    echo '<br>';
    echo "<div'>Сейчас минуты $minuteNow деляться без остатка на 3. Ширина сейчас текущий час ($hourNow) и умножена на 20 и ровняется  $hourTwen , а высота текущий день месяца ($dayNow) в кубе и ровняется $dayInCube.  <br></div>";

    echo "<div style='background: red; width: {$hourTwen}px; height: {$dayInCube}px '><br></div>";

}
else if (($minuteNow % 2)==0 && ($minuteNow % 3 != 0)){
    echo '<br>';
    echo "<div <b>Попадает под второе условие, когда остаток минут $minuteNow при делении на 2 равен нулю и не делиться без остатка на три</b></div>";
    echo '<br>';

    echo "<div style='background: yellow; width: {$sqrYear}px; height: {$sqrYear}px;'>Ширина и высота сейчас $sqrYear px на $sqrYear px</div>";
}

//Во всех остальных случаях выводим на экран зеленый прямоугольник, где ширина (в px) - это текущая минута, умноженная на текущую секунду, а высота (в px) - это текущий час в квадрате
else{
    echo '<br>';

    echo '<b>Все остальные условия </b>';
    echo '<br>';


    echo "Все остальные условия, в которых текущая минута $minuteNow умножена на текущую секунду $secNow и ровняется $minSecNow";
    echo "<div style='background: green; width: {$minSecNow}px; height: {$sqrHour}px'>Ширина сейчас $minSecNow , а высота $sqrHour  </div>";
}
?>
<script type="text/javascript">
var interval = setInterval("location.reload(true)", 1000);
</script>

<?php
if ((15 % 2)==0 && (15 % 3 != 0)){
echo '<br>';
echo "<div <b>норм три</b></div>";
echo '<br>';


}
?>