<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>

<style>
.warna-baris {
    background-color: silver;
}
</style>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- contoh pakai for -->
        <!-- <?php 
    for ($i=1; $i <= 3; $i++) { 
        echo "<tr>";
        for ($j=1; $j <= 5; $j++) { 
            echo "<td>$i,$j</td>";
        }
        echo "</tr>";
    }
    ?> -->

        <!-- <?php  for ($i=1; $i <= 3; $i++) { ?>
        <tr>
            <?php for ($j=1; $j <= 5; $j++) {  ?>
            <td> <?php echo "$i, $j";?></td>
            <?php } ?>
        </tr>
        <?php }?> -->

        <?php  for ($i=1; $i <= 5; $i++) : ?>
        <?php  if ($i % 2 == 0) : ?>
        <tr class="warna-baris">
            <?php else : ?>
        <tr>
            <?php endif; ?>
            <?php for ($j=1; $j <= 5; $j++) :  ?>
            <td> <?php echo "$i, $j";?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor;?>


        <!-- ada tiga cara menggunakan for -->
    </table>
</body>

</html>