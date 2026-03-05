<?php

    $link = mysqli_connect("localhost", "root", "", "emergence");
    $link->set_charset("utf8");

    //functions______________________________________________________________
    function newPostSubmit($postType, $postText, $postIllustration, $postIllustrationType, $submitter){
        $link = mysqli_connect("localhost", "root", "", "emergence");
        $link->set_charset("utf8");

        $q1 = "INSERT INTO posts(post_type, post_usr, post_txt) VALUES('$postType', '$submitter', '$postText')";
        $e1 = mysqli_query($link, $q1);
        $postID = mysqli_insert_id($link);

        if (!$e1) {
            echo "<script>alert('Erreur: " . mysqli_error($link)."');</script>";
            echo "<script>location.replace('../vue/php/home.php');</script>";    
        } else {
            
            if ($postType == "1") {

                $path = "../model/posts/";
                $illustration = basename($postIllustration["name"]);
                $illustration_tmp = $postIllustration["tmp_name"];

                $i = rand(1111, 99999);
                $illustArray = explode(".", $illustration);
                $newFile = "ILL-" . $postID . "_ID-" . $i . "_YR-" . date("y") . "." . end($illustArray);
                $illust = "../../model/posts/" . $newFile;
                move_uploaded_file($illustration_tmp, $path . $newFile);

                $q2 = "INSERT INTO posts_illustrations(post_id, illust_path, illust_type) VALUES('$postID', '$illust', '$postIllustrationType')";
                $e2 = mysqli_query($link, $q2);
                if (!$e2) {
                    echo "<script>alert('Erreur: " . mysqli_error($link)."');</script>";
                    echo "<script>location.replace('../vue/php/home.php');</script>";    
                }else{
                    echo "<script>location.replace('../vue/php/home.php');</script>";
                }
            }else{
                echo "<script>location.replace('../vue/php/home.php');</script>";
            }
        }
        
    }

    function likeMechanism($postID, $userID){
        $link = mysqli_connect("localhost", "root", "", "emergence");
        $link->set_charset("utf8");

        $q = "SELECT * FROM posts_likes_log WHERE post_id = '$postID' AND usr_id = '$userID' LIMIT 1";
        $e = mysqli_query($link, $q);
        $r = mysqli_num_rows($e);

        echo $r;

        if ($r == 0) {
            $u = "INSERT INTO posts_likes_log(post_id, usr_id) VALUES('$postID', '$userID')";
            mysqli_query($link, $u);

            $w = "UPDATE posts SET post_likes = post_likes + 1 WHERE id = '$postID'";
            mysqli_query($link, $w);
        }else{
            $d = "DELETE FROM posts_likes_log WHERE post_id = '$postID' AND usr_id = '$userID'";
            mysqli_query($link, $d);

            $x = "UPDATE posts SET post_likes = post_likes - 1 WHERE id = '$postID'";
            mysqli_query($link, $x);
        }
    }

    function getPostComments($postID){
        $link = mysqli_connect("localhost", "root", "", "emergence");
        $link->set_charset("utf8");

        $u = "SELECT * FROM posts_cmts_log WHERE post_id = '$postID' AND cmt_type = '0' ORDER BY id DESC";
        $v = mysqli_query($link, $u);
        $w = mysqli_num_rows($v);

        if ($w == 0) {
            echo $w;
        }else{
            $comments = [];

            while ($com = mysqli_fetch_assoc($v)) {
                $comments[] = $com["id"]."_+_". $com["usr_id"]."_+_".$com["cmt_txt"] . "_+_" . $com["date_time"];
            }

            echo json_encode($comments);
        }
    }

    function submitComment($postID, $userID, $commentContent, $mode, $to){
        $link = mysqli_connect("localhost", "root", "", "emergence");
        $link->set_charset("utf8");

        $u = "";
        if ($mode == "1") {
            $u = "INSERT INTO posts_cmts_log(post_id, cmt_type, usr_id, cmt_txt) VALUES('$postID', '0', '$userID', '$commentContent')";
        }else{
            $u = "INSERT INTO posts_cmts_log(post_id, cmt_type, usr_id, cmt_txt, reply_to) VALUES('$postID', '1', '$userID', '$commentContent', '$to')";
        }
        $v = mysqli_query($link, $u);
        if ($v) {
            echo 0;

            $w = "UPDATE posts SET post_cmt = post_cmt + 1 WHERE id = '$postID'";
            mysqli_query($link, $w);
        } else {
            echo 1;
        }
        
    }

    function getReplies($postID, $comentID){
        $link = mysqli_connect("localhost", "root", "", "emergence");
        $link->set_charset("utf8");

        $u = "SELECT * FROM posts_cmts_log WHERE cmt_type = '1' AND post_id = '$postID' AND reply_to = '$comentID' ORDER BY id ASC";
        $v = mysqli_query($link, $u);
        $w = mysqli_num_rows($v);
        if ($w == 0) {

            echo 0;
        } else {
            $replies = [];

            while ($x = mysqli_fetch_assoc($v)) {
                $replies[] = $x["usr_id"]."_+_".$x["cmt_txt"]. "_+_" . $x["date_time"];
            }

            echo json_encode($replies);
        }
        
    }

    //handlers_______________________________________________________________
    if (isset($_POST["p_submit"])) {

        $postType = $_POST["p_type"];
        $postText = mysqli_real_escape_string($link, $_POST["p_text"]);
        $submitter = $_POST["p_submitter"];

        if ($postType == "1") {
            $postIllustration = $_FILES["p_file"];
            $postIllustrationType = $_POST["p_file_type"];

            newPostSubmit($postType, $postText, $postIllustration, $postIllustrationType, $submitter);
        }else{

            newPostSubmit($postType, $postText, "", "", $submitter);
        }
    }

    if (isset($_POST["likeMechanismTrigger"])) {
       echo likeMechanism($_POST["post_id"], $_POST["user"]);
    }

    if (isset($_POST["getCommentsTrigger"])) {
        echo getPostComments($_POST["pid"]);
    }

    if (isset($_POST["newCommentTrigger"])) {
        echo submitComment($_POST["pid"], $_POST["submitter"], mysqli_real_escape_string($link, $_POST["text"]), $_POST["mode"], $_POST["to"]);
    }

    if (isset($_POST["getRepliesTrigger"])) {
        echo getReplies($_POST["post"], $_POST["cID"]);
    }
?>