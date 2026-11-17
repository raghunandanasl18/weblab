<?php
echo"<h1>REFRESH PAGE </h1>";
$file = 'count.txt';
$c =file_get_contents($file);
file_put_contents($file,$c+1);
echo "The number of user visited: ".$c;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 80px;
            background-color: #f4f4f4;
        }

        .box{
            display: inline-block;
            padding: 20px 40px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: white;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
        }

        h1{
            color: #333;
        }

        .count{
            color: #0066cc;
            font-size: 22px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Visitor Counter</h2>
    <p class="count">
        <?php echo "The number of users visited: " . $c; ?>
    </p>
</div>

</body>
</html>
