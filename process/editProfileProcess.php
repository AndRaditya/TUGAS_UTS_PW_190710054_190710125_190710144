<?php
    if(isset($_POST['id'])){
        include ('../db.php');
        $id = $_POST['id'];
        $username = $_POST['username'];
        // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $nomor_telepon = $_POST['nomor_telepon'];

        $queryEdit=mysqli_query($con, "UPDATE users SET username='$username', 
            name='$name', email='$email', nomor_telepon='$nomor_telepon' WHERE id=$id");
        if($queryEdit){
            echo
                '<script>
                alert("Edit Success"); window.location = "../Profile/EditProfilePage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Failed"); window.location = "../Profile/EditProfilePage.php"
                </script>';
        }

    }else {
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>