<?
        
        $name = $_POST['name'];
        $text = $_POST['comment'];
        $cdate = date("yy-m-d");
        $time = $_POST['time'];

        include('db.php');

        $sql = "INSERT INTO comments_tb (name, text, c_date, time) VALUES ('$name', '$text', '$cdate', '$time')";
        if (mysqli_query($db, $sql)) {
            $last_id = mysqli_insert_id($db);
            echo $last_id; 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
 
        mysqli_close($db);
?>