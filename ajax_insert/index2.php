<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>javascript ajax</h1>
    <input type="textbox" id="num1">
    <a href="javascript:void(0)" onclick="click_here()">Click Here</a>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script>
    function click_here() {
        var num1 = jQuery('#num1').val();


        jQuery.ajax({
            url: 'get_data.php',
            type: 'post',
            data: 'num2=' + num1,
            success: function(result) {
                alert(result);
            }
        })
    }
    </script>

</body>

</html>