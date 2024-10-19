<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Số chia hết cho A va B</title>
    <style>
        .main{
            margin-top:-50%;
            width: 400px;
            border:2px solid #ccc;
            border-radius:2px;
            margin:auto;
            overflow: hidden;
            text-align: center;
        }
        h1{
            background-color: #f2bc50;
            font-size:40px;
            margin:0;
        }
        form{
            background-color: #e8d787;
            
        }
        label{
            float:left;
            margin: 10px 0 0 10px;
        }

        input{
            margin: 10px;
        }
        .btn{
            background-color:#e8e0bc;
        }

        input[type="text"] {
            border: none;
            color: red;
            background-color: pink;
        
        }
    </style>
</head>
<body>

    <div class="main">
    <h1>Số chia hết cho A và B</h1>
    <form  method="post">
            <label class ="lable" for="n">Nhập N:</label>
            <input type="number" name="n" required><br>
            <label class ="lable" for="a">Nhập A:</label>
            <input type="number" name="a" required><br>
            <label class ="lable" for="b">Nhập B:</label>
            <input type="number" name="b" required><br>
            <input class = "btn" type="submit" name="submit" value="Các số <=N chia hết cho A và cho B">
        </form>
    

    <?php
    if (isset($_POST['submit'])) {
        $n = $_POST['n'];
        $a = $_POST['a'];
        $b = $_POST['b'];

        function kt_so($so, $a, $b) {
            return ($so % $a == 0 && $so % $b == 0) ? 1 : 0;
        }

        $chuoi = "";
        for ($i = 1; $i <= $n; $i++) {
            if (kt_so($i, $a, $b) == 1) {
                $chuoi .= $i . ", ";
            }
        }

        // Xóa dấu phẩy và khoảng trắng cuối cùng nếu có
        $chuoi = rtrim($chuoi, ', ');

        echo "<h2>Số chia hết cho $a và $b từ 1 đến $n:</h2>";
        echo "<input type='text' value='$chuoi' readonly>";
    }
    ?>

    
</div>
</body>
</html>