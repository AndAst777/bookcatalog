<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK.RU</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="header">
        <img class="logotipe" src="img/book2.png">
        <p class="logo-text">BOOK.RU</p>
    </div>
    <div class="panel-navigation">
        <input type="search" id="livesearch" placeholder="Искать...">
        <nav>
            <ul id="navbar">
                <li>
                    <a class="catalog" href="#">Каталог</a>
                </li>
                <li>
                    <a class="blog" href="#">Бог</a>
                </li>
                <li>
                    <a class="profile" href="auto.php"> Профиль</a>
                </li>
            </ul>
        </nav>
    </div>




    <div class="result" id="searchresult"></div>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#livesearch").keyup(function() {

                var input = $(this).val();
                //alert(input); 

                if (input != "") {
                    $("#searchresult").css("display", "block");
                    $.ajax({

                        url: "livesearch.php",
                        method: "POST",
                        data: {
                            input: input
                        },

                        success: function(data) {
                            $("#searchresult").html(data);
                        }
                    });


                } else {

                    $("#searchresult").css("display", "none");
                }
            });
        });

        <?php
        require "send/connect.php";
        $sql = "SELECT * FROM book";
        $sql2 = "SELECT * FROM author";
        $q = mysqli_query($connect, $sql);
        $q2 = mysqli_query($connect, $sql2);

        while ($row = mysqli_fetch_assoc($q) and $row_two = mysqli_fetch_assoc($q2)) { ?>

                <
                div class = "book" >
                <
                img src = "send/uploads/<?= $row['image'] ?>"
            alt = "" >
                <
                p > <?= $row['bookName'] ?> < /p> <
                p > <?= $row_two['AuthorName'] ?> < /p> <
                /div>
        <?php
        }
        ?>
    </script>
</body>

</html>