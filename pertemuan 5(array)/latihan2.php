<?php 
// pengulangan pada array
// for / foreach
$angka = [3,2,14,421,24,24,1];
?>
<html>

<head>
    <title>Latihan 2</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }

    .clear {
        clear: both;
    }
    </style>
</head>

<body>
    <!-- Cara pertama -->
    <?php for ($i=0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php }?>

    <!-- cara kedua -->
    <div class="clear"></div>

    <?php foreach ($angka as $a) {?>
    <div class="kotak"> <?php echo $a;?></div>
    <?php }?>

    <!-- cara ketiga -->
    <div class="clear"></div>

    <?php foreach ($angka as $a) :?>
    <div class="kotak"> <?php echo $a;?></div>
    <?php endforeach; ?>
</body>

</html>