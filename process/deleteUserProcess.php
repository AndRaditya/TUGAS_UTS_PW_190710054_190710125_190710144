<?php
    if(isset($_GET['delete'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM users WHERE id='$id'") or die(mysqli_error($con));
        if($queryDelete){
            echo
                '<script>
                alert("Delete Success"); window.location = "../TampilanAwal/tampilanAwal.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Delete Failed"); window.location = "../Profile/EditProfilePage.php"
                </script>';
        }
    }else {
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>