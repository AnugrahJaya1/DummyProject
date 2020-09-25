<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{$name}}
    <ol>
        <!-- 1 -->
        <li>Sholat 5 waktu di rumah</li>

        <?php
        $arr = ['','Sangat Kurang', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik'];
            for($i = 1;$i<=5;$i++){
                echo "<input type='radio' id='".$name.$i."' name='".$name."' value='".$i."'>";
                echo "<label for='".$name.$i."'>".$arr[$i]."</label>";
            }
        ?>
        <input type="radio" id="a11" name={{$name}} value="1">
        <label for='a11'>Sangat Kurang</label>

        <input type="radio" id="a12" name="a1" value="2">
        <label for='a12'>Kurang</label>

        <input type="radio" id="a13" name="a1" value="3">
        <label for='a13'>Cukup</label>

        <input type="radio" id="a14" name="a1" value="4">
        <label for='a14'>Baik</label>

        <input type="radio" id="a15" name="a1" value="5">
        <label for='a15'>Sangat Baik</label>
    </ol>
</body>

</html>