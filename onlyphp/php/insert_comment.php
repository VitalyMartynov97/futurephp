<?
    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        $text = $_POST['comment'];
        $cdate = date("yy-m-d");
        $time = date("H:i");

        include('db.php');

        $sql = "INSERT INTO comments_tb (name, text, c_date, time) VALUES ('$name', '$text', '$cdate', '$time')";
        if (mysqli_query($db, $sql)) {
            header("Location: ../index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
 
        mysqli_close($db);
    }
?>