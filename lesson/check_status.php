<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check_status</title>
</head>
<body>
    <form action="" method="get">
        <input type="hidden" name="item" value="0">
        <input type="checkbox" name="item" value="1"> <!-- hidden скрытый--> 
        <input type="submit">
    </form>
    <?php 
    if (isset($_REQUEST['item']) and $_REQUEST['item'] == 0 ){
        echo 'not otmecheno';
    }else{
        echo 'good, otmecheno';
    }
    ?>
</body>
</html> 