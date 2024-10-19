<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tìm USCLN và BSCNN</title>
    <style>
        div {
            width: 100%;
            background-color: yellow;
        }
        h2 {
            background-color: #f2bc50;
            font-size:40px;
            margin:0;
        }
        * {
            padding: 0;
            margin: 20;        
            box-sizing: border-box;
        }
        form {
            margin: auto;
            border: 1px solid #000;
            text-align: center;
            width: 30%;
            height: 60%;
            background-color: #e8d787;
        }

        
    </style>
</head>
<body>
    
    <form method="post" action="">
        <div><h2>Tìm USCLN và BSCNN</h2>  </div>
        <label for="a">Nhập A:</label>
        <input type="number" name="a" id="a" required>
        <br>

        <label for="b">Nhập B:</label>
        <input type="number" name="b" id="b" required>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST['a'];
            $b = $_POST['b'];

            function findUSCLN($a, $b) {
                while ($b != 0) {
                    $temp = $b;
                    $b = $a % $b;
                    $a = $temp;
                }
                return $a;
            }

            $uscln = findUSCLN($a, $b);

            $bscnn = ($a * $b) / $uscln;

        }
        ?>
        <br>
        <label for="ucln">USCLN:</label>
        <input type="number" name="ucln" id="ucln" value ="<?php echo  $uscln; ?>" readonly>
        <br>

        <label for="bcnn">BSCNN:</label>
        <input type="number" name="bcnn" id="bcnn" value = "<?php echo  $bscnn; ?>" readonly>
        <br>
        <input type="submit" value="Tìm USCLN và BSCNN">
    </form>

</body>
</html>
