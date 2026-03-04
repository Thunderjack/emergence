<?php

    //functions______________________________________________________________
    function newPostSubmit($postType, $postText, $postIllustration, $postIllustrationType, $submitter){
        $link = mysqli_connect("localhost", "root", "", "emergence");
        $link->set_charset("utf8");

        $q1 = "INSERT INTO posts(post_type, post_usr, post_txt) VALUES('$postType', '$submitter', '$postText')";
        $e1 = mysqli_query($link, $q1);
        $postID = mysqli_insert_id($link);

        if (!$e1) {
            echo "Error: " . mysqli_error($link);    
        } else {
            
            if ($postType == "1") {

                $path = "../model/posts/";
                $illustration = basename($postIllustration["name"]);
                $illustration_tmp = $postIllustration["tmp_name"];

                $i = rand(1111, 99999);
                $illustArray = explode(".", $illustration);
                $newFile = "ILL-" . $postID . "_ID-" . $i . "_YR-" . date("y") . "." . end($illustArray);
                $illust = "../../../model/posts/" . $newFile;
                move_uploaded_file($illustration_tmp, $path . $newFile);

                $q2 = "INSERT INTO posts_illustrations(post_id, illust_path, illust_type) VALUES('$postID', '$illust', '$postIllustrationType')";
                $e2 = mysqli_query($link, $q2);
                if (!$e2) {
                    echo "Error: " . mysqli_error($link);    
                }else{
                    echo "Post created successfully.";
                }
            }else{
                echo "Post created successfully.";
            }
        }
        
    }

    //handlers_______________________________________________________________
    if (isset($_POST["p_submit"])) {

        $postType = $_POST["p_type"];
        $postText = $_POST["p_text"];
        $submitter = $_POST["p_submitter"];

        if ($postType == "1") {
            $postIllustration = $_FILES["p_file"];
            $postIllustrationType = $_POST["p_file_type"];

            newPostSubmit($postType, $postText, $postIllustration, $postIllustrationType, $submitter);
        }else{

            newPostSubmit($postType, $postText, "", "", $submitter);
        }
    }
?>