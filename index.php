<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <script src="js/script.js"></script>
    <title>Document</title>
</head>
<body>
        <div class="container main-block">
            <div class="form-group row">
                <label class="col-sm-2" for="ip-address">IP адрес</label>
                <input class="col-sm-10" type="text" id="ip-address">
            </div>

            <div class="btn-block text-center">
                <div class="btn btn-primary" onclick="send()">Отправить</div>
            </div>
            <div class="info-block text-center">
                <div class="text-success"  id="city">

                </div>
                <div class="text-success" id="country">

                </div>
                <div class="text-danger" id="error">

                </div>
            </div>
        </div>
</body>
</html>