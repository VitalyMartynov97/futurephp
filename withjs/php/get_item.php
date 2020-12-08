<?
    include("db.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM comments_tb WHERE id = '$id'";
    if ($result = mysqli_query($db, $query)) {
    	while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <div class="comment">
                    <div class="comment-head" id="'.$row['id'].'">
                        <span class="cname">'.$row['name'].'</span><span class="ctime"> '.$row['time'].'</span> '.$row['c_date'].'
                    </div>
                    <div class="comment-text">
                        '.$row['text'].'
                    </div>
                </div>
            ';
        }
    }
?>