<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
        <form action="" method="post">
            <label for="input">Input</label>
            <input type="number" name="number">
            <input type="submit" value="Simpan" name="save">
        </form>
        <?php 
            if(isset($_POST['save'])) {
                $number = $_POST['number'];
             ?>
        <form action="output.php" method="post">
            <?php
                for ($b = 0; $b < $number; $b++) {
             ?>
                <input type="number" min="0" max="1" name="binary[]">
            <?php
                }
             ?>
                <input type="submit" name="save1">
            </form>
             <?php
            }
        ?>
</body>
</html>