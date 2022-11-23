<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>INDex</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="nub">
        <h2>Admin</h2>
        <!-- <img src="image/image 6.png" class="img"> -->
    </div>
    <form action="admin.php" method="POST" enctype="multipart/form-data" class="form">
        <input type="text" class="name_book" name="bookName" placeholder="Название книги">
        <input type="text" class="name_author" name="author" placeholder="Имя автора">
        <input type="text" class="genre" name="genre" placeholder="Жанр">
        <input type="file" name="image" class="inImage" id="image">
        <input type="text" placeholder="Год выпуска" class="year" name="year">
        <textarea name="description" placeholder="Описание книги" class="desc"></textarea>

        <button class="add" id="addBut" type="submit">Добавить</button>

    </form>
    <?php
    require "connect.php";
    $sql = "SELECT * FROM book";
    $sql2 = "SELECT * FROM author";
    $q = mysqli_query($connect, $sql);
    $q2 = mysqli_query($connect, $sql2);

    while ($row = mysqli_fetch_assoc($q) and $row_two = mysqli_fetch_assoc($q2)) { ?>

        <div class="book">
            <img src="uploads/<?= $row['image'] ?>" alt="" style="width: 15vw;">
            <p><?= $row['bookName'] ?></p>
            <p><?= $row_two['AuthorName'] ?></p>
        </div>
    <?php
    }
    ?>
    <script src="main.js"></script>
</body>

</html>