<!DOCTYPE html>
<html lang="Fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پلیر فیلم</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css"> 
</head>
<body>

    <div class="container-fluid">
        <div class="title">
            <h6>بهترینم به سیستم پخش فیلم خوش اومدی</h6>
        </div>
        <div class="videoplayer">
            <video poster="" class="player" width="800px" height="400px" controls="controls">
                <source src="<?php echo $_GET['episode']; ?>">
            </video>
        </div>
    </div>
</body>
</html>