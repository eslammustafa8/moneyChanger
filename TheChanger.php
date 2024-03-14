<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>MoneyCalc</title>
</head>
<body>
    <form action="" method="POST">
        <label for="egyMoney">enter the  money </label>
        <input type="text"  id="Money" name="Money">
        <br>
        <label for="choosedMoney">choose money u want to Calc</label>
        <select id="choosedMoney" name="choosedMoney">
            <option value="SR">ريال سعودي</option>
            <option value="CNY">ين صيني</option>
            <option value="USD">دولار </option>
        </select>
        <br>
        <input type="submit" value="Calculate" name="calc">
        <br>

<?php

if(isset($_POST['calc']))
{

    $money=$_POST['Money'];
    $money=filter_var($money,FILTER_SANITIZE_NUMBER_FLOAT);
    switch ($_POST['choosedMoney']){
        case 'SR':
            $egyM =12.92*$money;
            break;
        case 'CNY':
            $egyM =6.74*$money; 
            break;
        case 'USD':
            $egyM =48.44*$money; 
            break;
    }
}



?>
    <h2>The money you added is equale <?php echo $egyM ?>  Egyption money </h2>
    </form>
    
</body>
</html>