<!DOCTYPE html>
<html>
<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            widht: 30px;
            height: 30px;
            background-color: #BADAS;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 15;
        }
        .kotak:hover {
            transform: rotate (360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
];
?>
<?php foreach( $angka as $a) : ?>
    <?php foreach( $a as $b) : ?>
        <dive class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <dive class="clear"></div>
        <?php endforeach; ?>






</body>
</html>


