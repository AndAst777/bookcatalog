<?php
include("config.php");
if (isset($_POST['input'])) {

    $input = $_POST['input'];

    $query = ("SELECT * FROM book WHERE bookName  LIKE '{$input}%' ORDER BY bookName");
    $result = mysqli_query($con, $query);




    if (mysqli_num_rows($result) > 0) { ?>
        <table style="margin-top:100px ;">
            <thead>
                <tr>
                    <th>Имя автора</th>
                    <th>Название книги</th>
                    <th>Обложка</th>

                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $author = $row['author'];
                $bookName = $row['bookName'];
                $image = $row['image'];
            ?>
                <tbody>
                    <tr>
                        <td><a href="#"><?php echo $author; ?></a></td>
                        <td><?php echo $bookName; ?></td>
                        <td><img style="width: 5vw" src="uploads/<?= $image; ?>"></td>
                    </tr>
                <?php
            }
                ?>

                </tbody>
        </table>




<?php
    } else {

        echo "<h6 class='text-danger text-center mt-3'>NO data</h6> ";
    }
}
?>