<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="top_header">
            <h1>php with jquery</h1>
            <form action="" id="form_empty">

                <div class="row m-4">
                    <div class="col-md-4">
                        Name:
                        <input type="text" id="name" class="form-control">
                    </div>
                    <div class="col-md-4">
                        Email:
                        <input type="text" id="email" class="form-control">
                    </div>
                    <div class="col-md-4">
                        password:
                        <input type="text" id="password" class="form-control">
                    </div>
                </div>
            </form>


            <input type="submit" value="Seve" id="save_data" class="btn btn-info">
        </div>
        <div class="container">
            <table class="table" id="table_data">

            </table>
        </div>

    </header>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        function loadData() {
            $.ajax({
                url: "ajax-load.php",
                type: "POST",
                success: function(data) {
                    $('#table_data').html(data);
                }
            });
        }
        loadData();

        $("#save_data").on("click", function(e) {
            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var pass = $('#password').val();
            $.ajax({
                url: "ajax_insert_data.php",
                type: "POST",
                data: {
                    user_name: name,
                    user_email: email,
                    user_pass: pass
                },
                success: function(data) {
                    if (data == 1) {


                        $('#form_empty').trigger("reset");
                    } else {
                        alert("data cannot save ");
                    }

                }
            })


        })
        $(document).on('click', '.delete_btn', function() {
            var userId = $(this).data("id");
            var element = this;
            $.ajax({
                url: "delete-user.php",
                type: "POST",
                data: {
                    id: userId
                },
                success: function(data) {
                    if (data == 1) {
                        // $(this).closest("tr").fadeOut();
                        $(element).closest("tr").fadeOut();
                    } else {
                        alert('data connot delete');
                    }
                }

            })
        })

        //      $(document).on("click",".delete_btn", function(){
        //   if(confirm("Do you really want to delete this record ?")){
        //     var studentId = $(this).data("id");
        //     var element = this;

        //     $.ajax({
        //       url: "delete-user.php",
        //       type : "POST",
        //       data : {id : studentId},
        //       success : function(data){
        //           if(data == 1){
        //             $(element).closest("tr").fadeOut();
        //           }else{
        //             $("#error-message").html("Can't Delete Record.").slideDown();
        //             $("#success-message").slideUp();
        //           }
        //       }
        //     });
        //   }



        // });






    });
    </script>
</body>

</html>