<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .x{
            color:blue;
        }
    </style>
</head>
<body> 
    <h1 class="<?php echo "x" ?>"> hello <?php echo "world"; ?> </h1>
</body>
<script>
    alert('<?php echo "ok"; ?>');
</script>
</html>
