<?php
    include "../../controller/database.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmergenceApp</title>
    <script src="../js/jquery.js"></script>

    <script>
        $(document).ready(function() {
            $(".sw_btn").on("click", function() {
                let tag = $(this).attr("data")

                $(".sw_btn").children("img").css("filter", "invert(0)")
                $(".sw_btn").css("background-color", "unset")
                $(this).children("img").css("filter", "invert(1)")
                $(this).css("background-color", "#6b3cb8")

                $(".divs").hide()
                $("."+tag+"_div").show()
            })

            $(".post_type_btn").on("click", function() {
                let tag = $(this).attr("value")

                $(".post_type_btn").css("background-color", "unset").css("color", "black")
                $(".post_type_btn").css("color", "black")
                $(this).css("background-color", "#6b3cb8").css("color", "white")
                $(this).css("color", "white")

                if (tag == "x") {
                    $(".illust_cont").hide()
                    $(".p_type").attr("value", "0")
                } else {

                    if (tag == "1") {
                        $(".hook").text("vidéo")
                        $("#post_illust").attr("accept", ".mp4, .avi, .mkv")
                        $(".p_file_type").attr("value", "1")
                    }else{
                        $(".hook").text("image")
                        $("#post_illust").attr("accept", ".jpg, .jpeg, .png")
                        $(".p_file_type").attr("value", "0")
                    }

                    $(".illust_cont").show()
                    $(".p_type").attr("value", "1")
                }
            })

        })
    </script>
</head>
<body style="margin: 0px; background-color: #e6e6e6;">
    <div style="background-color: #6b3cb8; height: fit-content; padding: 5px; display: flex; justify-content: start;">
        <div>
            <img src="../../model/logo/Logo.jpeg" draggable="false" height="50px" width="50px">
        </div>
        <div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;; font-size: 30px; color: white; font-weight: bold; margin-left: 5px; margin-top: 5px;">
            EmergenceApp<small style="filter: opacity(0.5); font-size: 14px;">(beta)</small>
        </div>
    </div>

    <div style="height: 88vh; padding: 5px; display: flex; justify-content: start;">
        <div style="width: 52px;">
            <div class="sw_btn" data="home" style="border-radius: 10px; background-color: #6b3cb8; margin-right: 4px; height: 45px; width: 45px; display: flex; margin-bottom: 5px; cursor: pointer;">
                <img src="../../model/ico/home.png" width="30px" draggable="false" style="margin: auto; filter: invert();">
            </div>

            <div class="sw_btn" data="chat" style="border-radius: 10px; margin-right: 4px; height: 45px; width: 45px; display: flex; margin-bottom: 5px; cursor: pointer;">
                <img src="../../model/ico/chat.png" width="30px" draggable="false" style="margin: auto;">
            </div>

            <div class="sw_btn" data="notif" style="border-radius: 10px; margin-right: 4px; height: 45px; width: 45px; display: flex; margin-bottom: 5px; cursor: pointer;">
                <img src="../../model/ico/notif.png" width="30px" draggable="false" style="margin: auto;">
            </div>

            <div class="sw_btn" data="setting" style="border-radius: 10px; margin-right: 4px; height: 45px; width: 45px; display: flex; margin-bottom: 5px; cursor: pointer;">
                <img src="../../model/ico/setting.png" width="30px" draggable="false" style="margin: auto;">
            </div>
        </div>

        <div style="padding: 5px; border-radius: 10px; width: 92%; background-color: white; border: #cecece solid 1px;" class="master">
            <!--master divisions...-->
            <div class="divs home_div" style="height: 100%; overflow-x: hidden; overflow-y: auto; border-radius:10px; padding-left: 8px; padding-right: 8px;">
                <b style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; filter: opacity(0.8); font-size: 20px;">FIL D'ACTUALITES</b><hr>
                <div style="border-radius: 10px; padding: 7px; border: #09ce6c solid 1px; display: flex; justify-content: space-between;">
                    <div style="display: flex; justify-content: start;">
                        <div style="margin-right: 7px;"><img src="../../model/ico/school.png" width="40px" height="40px" style="border-radius: 50%;" draggable="false"></div>
                        <div><b style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">INSTITUT AFRICAIN DES ENSEIGNEMENTS SECONDAIRES</b><br><span style="filter: opacity(0.5);">Faites un Post pour votre communauté!</span></div>
                    </div>
                    <div style="margin-top: auto; margin-bottom: auto; background-color: #20cc62; color: white; padding: 6px; font-weight: bold; border-radius: 10px; padding-left: 12px; padding-right: 12px; cursor: pointer;;">+ Nouveau</div>
                </div><hr>

                <!--posts...-->
                <div style="border-radius: 10px; padding: 7px; border: #4e4e4e41 solid 1px; margin-bottom: 5px;">
                    <div style="display: flex; justify-content: space-between; border-bottom: #4e4e4e41 solid 1px; padding-bottom: 8px; position: sticky; top: 0px; background-color: white;">
                        <div style="display: flex; justify-content: start;">
                            <div style="margin-right: 7px;"><img src="../../model/ico/school.png" width="40px" height="40px" style="border-radius: 50%;" draggable="false"></div>
                            <div><b style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">INSTITUT AFRICAIN DES ENSEIGNEMENTS SECONDAIRES</b><br><span style="filter: opacity(0.5);">Mercredi 04 Mars 2026 - 09:32</span></div>
                        </div>
                        <div style="display: flex;">
                            <div style="margin-top: auto; margin-bottom: auto; background-color: #2e62d3; color: white; padding: 6px; font-weight: bold; border-radius: 10px; padding-left: 12px; padding-right: 12px; cursor: pointer; margin-right: 4px; display: flex;"><img src="../../model/ico/comment.png" draggable="false" width="25px" style="margin-right: 4px;">12</div>
                            <div style="margin-top: auto; margin-bottom: auto; background-color: #d32e2e; color: white; padding: 6px; font-weight: bold; border-radius: 10px; padding-left: 12px; padding-right: 12px; cursor: pointer; display: flex;"><img src="../../model/ico/comment.png" draggable="false" width="25px" style="margin-right: 4px;">03</div>
                        </div>
                    </div>

                    <div style="border-radius: 10px; padding-top: 8px; padding-bottom: 8px; display: flex; justify-content: start;" align="center">
                        <div style="width: 45%;">
                            <img src="../../mars-IgUR1iX0mqM-unsplash.jpg" width="75%" draggable="false">
                        </div>
                        <div style="width: 55%;" align="center">Les JPO sont en approches, et la classe de Tle Informatique se démènent pour finir a temps leur projet Reseau Social. Reussirons-t-ils avant la fin du temps imparti? Vous le saurez très prochainement.</div>
                    </div>
                </div><br>

                <div align="center"><small style="filter: opacity(0.6);">-Rafraichir pour voir plus!-</small></div>

            </div>

            <div class="divs chat_div" style="display: none; height: 100%; overflow-x: hidden; overflow-y: auto; border-radius:10px; padding-left: 8px; padding-right: 8px;">
                <b style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; filter: opacity(0.8); font-size: 20px;">DISCUSSIONS</b><hr>
            </div>

            <div class="divs notif_div" style="display: none; height: 100%; overflow-x: hidden; overflow-y: auto; border-radius:10px; padding-left: 8px; padding-right: 8px;">
                <b style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; filter: opacity(0.8); font-size: 20px;">NOTIFICATIONS</b><hr>
            </div>

            <div class="divs setting_div" style="display: none; height: 100%; overflow-x: hidden; overflow-y: auto; border-radius:10px; padding-left: 8px; padding-right: 8px;">
                <b style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; filter: opacity(0.8); font-size: 20px;">PARAMETRES</b><hr>
            </div>

            <div class="profile_div" style="display: none; height: 100%; overflow-x: hidden; overflow-y: auto; border-radius:10px; padding-left: 8px; padding-right: 8px;">
                <b style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; filter: opacity(0.8); font-size: 20px;">MON PROFIL</b><hr>
            </div>
        </div>

        <div style="width: 52px;"></div>
    </div>

    <!--profile pic...-->
    <div style="position: fixed; transform: translate(4px, -50px); cursor: pointer;">
        <img src="../../model/ico/ac.png" height="50px" width="50px" style="border-radius: 50%;">
    </div>





    <!--modals-->
    <div style="background-color: rgba(0, 0, 0, 0.705); z-index: 2; position: fixed; top: 0; bottom: 0; left: 0; right: 0; display: flex; justify-content: center;">
        <div style="margin: auto; background-color: white; border-radius: 4px; padding: 5px; width: 560px;">
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 30px;"></div>
                <div style="font-size: 20px; font-weight: bold;">Nouveau Post</div>
                <div style="width: 30px;"><span style="border-radius: 50%; background-color: #d32e2e; color: white; font-weight: bold; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;">X</span></div>
            </div><hr>
            <div align="center">
                <div align="center" style="padding: 5px; background-color: #ebebeb; border-radius: 8px; border: #4e4e4e41 solid 1px;">
                    <div style="display: flex; justify-content: space-between; width: 38%;">
                        <div class="post_type_btn" value="0" style="border-radius: 8px; padding: 2px; color: rgb(0, 0, 0); width: 65px; font-size: 12px; cursor: pointer;">Image</div>
                        <div class="post_type_btn" value="x" style="background-color: #6b3cb8; border-radius: 8px; padding: 2px; color: white; width: 65px; font-size: 12px; cursor: pointer;">Texte</div>
                        <div class="post_type_btn" value="1" style="border-radius: 8px; padding: 2px; color: rgb(0, 0, 0); width: 65px; font-size: 12px; cursor: pointer;">Video</div>
                    </div>
                </div><br>

                <form action="" method="POST" enctype="multipart/form-data" style="margin-bottom: 0px;">
                    <label for="post_txt">
                        <legend style="font-size: 12px;">Descriptions du Post</legend>
                        <textarea cols="30" name="p_text" rows="5" id="post_txt"
                            style="width: 100%; border-radius: 8px; background-color: #ebebeb; outline: none; border: #4e4e4e41 solid 1px; padding: 6px;"
                            placeholder="256 Caracteres maximum..."></textarea>
                    </label>
                    
                    <label class="illust_cont" for="post_illust" style="cursor: pointer; display: none;">
                        <div
                            style="display: flex; justify-content: start; border: #6b3cb8 dotted 3px; border-radius: 8px; margin-top: 7px; padding-left: 8px;">
                            <div style="margin-right: 5px;"><img src="../../model/ico/load.png" height="40px" draggable="false"></div>
                            <div style="display: flex;"><span style="margin: auto; font-weight: bolder; color: #6b3cb8;">Choisir une <span
                                        class="hook">Image</span> pour accompagner votre post!</span></div>
                        </div>
                        <input type="file" name="p_file" id="post_illust" accept=".png, .jpg, .jpeg" hidden>
                    </label>
                    <div align="center" style="margin-top: 10px;">
                        <input type="text" name="p_type" class="p_type" value="0" hidden>
                        <input type="text" name="p_file_type" class="p_file_type" value="0" hidden>
                        <input type="submit" name="p_submit" value="Publier" style="background-color: #18b353; color: white; padding: 6px; font-weight: bold; border-radius: 4px; padding-left: 12px; padding-right: 12px; cursor: pointer; outline: none; border: #157e3d; width: 100px;">
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>