<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>вывод содержимого</title>
</head>
<body>
    <form method="POST">
        <input type="file" name="filename">
        <input type="submit" value="отправить файл">
    </form>
    <?php  

   if($_SERVER['REQUEST_METHOD'] === 'POST'){
         $filename = $_POST['filename'];
        if(!is_null($filename)){
        echo file_get_contents($filename, true);
    }
   }

    ?>
</body>
</html>