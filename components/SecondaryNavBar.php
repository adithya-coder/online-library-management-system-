<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "library-management-system/config.php";

    /* Manage Level-1 */
    $level_1 = '';

    if(isset($_SESSION['logged_user'])) {
        $email= $_SESSION['logged_user'];

        $sql = "SELECT Frist_Name FROM regular_user WHERE Email='$email';";

        $result = $conn -> query($sql);

        if($result->num_rows == 1) {
            $username = $result -> fetch_assoc();
        }
        
        $level_1 .= $username["Frist_Name"];
    }
    else {
        $level_1 .= "Guest User";
    }

    $level_1 .=  "&nbsp/&nbsp";



    /* Manage Level-2 */

    $level_2 = "Home";
?>

<div class="navi" style="/*margin-left:85%;*/ padding-top: 2rem; text-align:right;">
    <span style="display: inline-flex; text-overflow: inherit; margin-left: 2rem; margin-bottom: 1rem; font-weight: bold;">
        <span style="color:deepskyblue; font-size: 1rem;">
            <?php 
                echo $level_1;
            ?>
        </span>
        <span style="color:antiquewhite; font-size: 1rem;">
            <?php
                echo $level_2;
            ?>
        </span>
    </span>
</div>