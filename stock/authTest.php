<?php
use PHPUnit\Framework\TestCase;

class authTest extends TestCase
{
    // function testRegistration() {
    //     include "dbconnect.php";
    //     $username = "testuser";
    //     $password = "testpassword";
    //     $nickname = "testnickname";
    //     $role = "role_reg";

    //     $sql = "INSERT INTO slogin (username, password, nickname, role) VALUES ('$username', '$password', '$nickname', '$role')";
    //     $result = mysqli_query($conn, $sql);

    //     if ($result) {
    //         echo "Unit Test: Registration - Passed\n";
    //     } else {
    //         echo "Unit Test: Registration - Failed\n";
    //     }
    // }

    public function testLogin() {
        include "dbconnect.php";
        $username= "marco";
        $password = "marco";
    
        $sql = "SELECT * FROM slogin WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['password'];
    
            if (password_verify($password, $hashedPassword)) {
                echo "Unit Test: Login - Passed\n";
            } else {
                echo "Unit Test: Login - Failed (Incorrect Password)\n";
            }
        } else {
            echo "Unit Test: Login - Failed (User Not Found)\n";
        }
    }
    
}
?>