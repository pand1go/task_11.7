<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Логические операции PHP</title>
    <style>
        .stl {
            font-size: 20px;
            font-weight: 600;
            color: red;
            padding-bottom: 50px;
        }
    </style>
</head>
<body>
    <h2>Задание 1. Таблица истинности PHP</h2>
    <table class="tb1">
        <thead>
            <tr>
                <th>
                    <strong>A</strong>
                </th>
                <th>
                    <strong>B</strong>
                </th>
                <th>
                    <strong>!A</strong>
                </th>
                <th>
                    <strong>A || B</strong>
                </th>
                <th>
                    <strong>A && B</strong>
                </th>
                <th>
                    <strong>A xor B</strong>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php
                    $a = 0;
                    echo $a;
                    ?>
                </td>
                <td>
                    <?php
                    $b = 0;
                    echo $b;
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)(!$a);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a || $b);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a && $b);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a xor $b);
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    $a = 0;
                    echo $a;
                    ?>
                </td>
                <td>
                    <?php
                    $b = 1;
                    echo $b;
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)(!$a);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a || $b);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a && $b);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a xor $b);
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    $a = 1;
                    echo $a;
                    ?>
                </td>
                <td>
                    <?php
                    $b = 0;
                    echo $b;
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)(!$a);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a || $b);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a && $b);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a xor $b);
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    $a = 1;
                    echo $a;
                    ?>
                </td>
                <td>
                    <?php
                    $b = 1;
                    echo $b;
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)(!$a);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a || $b);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a && $b);
                    ?>
                </td>
                <td>
                    <?php
                    echo (int)($a xor $b);
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    <h2>Задание 2. Гибкое сравнение в PHP</h2>
    <table class="tb2">
        <?php
        $val1 = true;
        $val2 = false;
        $val3 = 1;
        $val4 = 0;
        $val5 = -1;
        $val6 = "1";
        $val7 = null;
        $val8 = "php";
        ?>
        <thead>
            <tr>
                <th></th>
                <th><strong>true</strong></th>
                <th><strong>false</strong></th>
                <th><strong>1</strong></th>
                <th><strong>0</strong></th>
                <th><strong>-1</strong></th>
                <th><strong>"1"</strong></th>
                <th><strong>null</strong></th>
                <th><strong>"php"</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>true</strong></td>
                <td>
                    <?php
                    echo ($val1 == $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 == $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 == $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 == $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 == $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 == $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 == $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 == $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>false</strong></td>
                <td>
                    <?php
                    echo ($val2 == $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 == $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 == $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 == $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 == $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 == $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 == $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 == $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>1</strong></td>
                <td>
                    <?php
                    echo ($val3 == $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 == $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 == $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 == $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 == $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 == $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 == $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 == $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>0</strong></td>
                <td>
                    <?php
                    echo ($val4 == $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 == $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 == $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 == $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 == $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 == $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 == $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 == $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>-1</strong></td>
                <td>
                    <?php
                    echo ($val5 == $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 == $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 == $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 == $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 == $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 == $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 == $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 == $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>"1"</strong></td>
                <td>
                    <?php
                    echo ($val6 == $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 == $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 == $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 == $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 == $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 == $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 == $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 == $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>null</strong></td>
                <td>
                    <?php
                    echo ($val7 == $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 == $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 == $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 == $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 == $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 == $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 == $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 == $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>"php"</strong></td>
                <td>
                    <?php
                    echo ($val8 == $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 == $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 == $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 == $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 == $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 == $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 == $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 == $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    <h2>Задание 2. Жёсткое сравнение в PHP</h2>
    <table class="tb2">
        <thead>
            <tr>
                <th></th>
                <th><strong>true</strong></th>
                <th><strong>false</strong></th>
                <th><strong>1</strong></th>
                <th><strong>0</strong></th>
                <th><strong>-1</strong></th>
                <th><strong>"1"</strong></th>
                <th><strong>null</strong></th>
                <th><strong>"php"</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>true</strong></td>
                <td>
                    <?php
                    echo ($val1 === $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 === $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 === $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 === $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 === $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 === $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 === $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val1 === $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>false</strong></td>
                <td>
                    <?php
                    echo ($val2 === $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 === $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 === $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 === $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 === $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 === $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 === $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val2 === $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>1</strong></td>
                <td>
                    <?php
                    echo ($val3 === $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 === $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 === $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 === $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 === $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 === $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 === $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val3 === $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>0</strong></td>
                <td>
                    <?php
                    echo ($val4 === $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 === $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 === $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 === $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 === $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 === $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 === $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val4 === $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>-1</strong></td>
                <td>
                    <?php
                    echo ($val5 === $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 === $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 === $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 === $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 === $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 === $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 === $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val5 === $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>"1"</strong></td>
                <td>
                    <?php
                    echo ($val6 === $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 === $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 === $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 === $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 === $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 === $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 === $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val6 === $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>null</strong></td>
                <td>
                    <?php
                    echo ($val7 === $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 === $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 === $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 === $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 === $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 === $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 === $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val7 === $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>"php"</strong></td>
                <td>
                    <?php
                    echo ($val8 === $val1) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 === $val2) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 === $val3) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 === $val4) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 === $val5) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 === $val6) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 === $val7) ? 'true' : 'false';
                    ?>
                </td>
                <td>
                    <?php
                    echo ($val8 === $val8) ? 'true' : 'false';
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    <h2>Выводы о сравнение в PHP</h2>
    <p class="stl">
        При гибком сравнении (==) true, если переменные равны после преобразования типов. </br>
        При жестком сравнении (===) true, если переменные имеют один и тот же тип и равны.
    </p>
</body>
</html>