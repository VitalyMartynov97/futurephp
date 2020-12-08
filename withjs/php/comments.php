<?php
    include("db.php");
    $query = "SELECT * FROM comments_tb ORDER BY id desc";
        
    if ($result = mysqli_query($db, $query)) {
    	while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <div class="comment" id="cm">
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