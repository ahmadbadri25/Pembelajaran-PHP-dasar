<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .s {
        background-color: #BADA55;
        text-align: center;
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: 1s;
    }

    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }

    .clear {
        clear: both;
    }
    </style>
</head>

<body>

    <?php
    $angka = [[1,2,3],[4,5,6],[7,8,9]];
    ?>

    <?php foreach($angka as $nomor) : ?>
    <?php foreach( $nomor as $no ) : ?>
    <div class="kotak"> <?=  $no; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>