<?php
    if(isset($_POST['editProfile'])){
        include ('../db/db.php');
        $id = $_POST['id'];
        // $username = $_POST['username'];
        // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        // $email = $_POST['email'];
        $nomor_telepon = $_POST['nomor_telepon'];

        $queryEdit=mysqli_query($con, "UPDATE users SET  
            name='$name', nomor_telepon='$nomor_telepon' WHERE id=$id");

        if($queryEdit){
            echo
                '<script>
                alert("Edit profil berhasil."); window.location = "../Profile/EditProfilePage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit profil gagal."); window.location = "../Profile/EditProfilePage.php"
                </script>';
        }

    }else {
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>