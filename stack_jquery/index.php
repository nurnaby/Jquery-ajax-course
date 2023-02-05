<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery learnig</title>
</head>

<body>

    <div id="frist">frist Id div</div>
    <div class="frist">frist class div</div>
    <div>div</div>
    <p>frist p tage</p>
    <p>2nd p tage</p>
    <p>three p tage</p>
    <h1>frist h1 tage</h1>
    <h1>2nd h1 tage</h1>
    <div class="test">

        <ul>
            <li>first</li>
            <li>secned</li>
            <li>third</li>
            <li>fore</li>
        </ul>
        <p>ljjjjjjjjo</p>
    </div>
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ex ad necessitatibus perferendis tenetur
        natus dicta dolore similique nemo, totam ab voluptas quo! Hic, est facilis quam enim fuga laboriosam!</div>
    <h2 id="title"></h2>
    <button id="hide"> All elemant Hiden</button>
    <button id="show">show</button>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        $('#title').html('welcome');
        $('#hide').click(function() {
            $('.test ul li:first').hide();
        })

    });
    </script>
</body>

</html>