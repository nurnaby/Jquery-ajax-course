<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery learnig</title>
</head>

<body>
    <div>
        <h2 id="title"></h2>
        <button id="hide">Hiden</button>
        <button id="show">show</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        $('#title').html('welcome');
        $('#hide').click(function() {
            $('#title').hide();
        })
        $('#show').click(function() {
            $('#title').show();
        })
    });
    </script>
</body>

</html>