<?php

 Class Model
 {
 
    public $con;
     public function __construct()
      {
        $this->con = new mysqli("localhost","yuvraj","yuvraj","User");
     
        if($this->con->connection_error)
          {
            //echo "not connected";
          }
        else
          {
           // echo "connected";
          }


     }

   public function insert_data()
    {
      // if (isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['password']))
      //  {
      //   $fname = $_POST['full_name'];
      //   $email = $_POST['email'];
      //   $pass = $_POST['password'];
      //   $qry = "insert into Registered (full_name,email,password) values('$fname',$email,'$pass')";
      //   $result = mysql_query($qry);
      //     if ($result) 
      //     {
      //       return "Insert Data Successfully.";
      //     }
      //     else
      //     {
      //       return "Error...! Not Inserted.";
      //     }
      //  } 
      
      if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])) {
         $username = $_POST['name'];
         $email = $_POST['email'];
          $password = md5($_POST['password']);
         $cpassword = md5($_POST['password-confirmation']);
       //  echo $username,$password,$email;
       if ($password == $cpassword) {
           $sql = "SELECT * FROM user WHERE email='$email'";
           $result = mysqli_query($this->con, $sql);
           if (!$result->num_rows > 0) {
              $sql = "INSERT INTO user (username, email, password)
               VALUES ('$username', '$email', '$password')";
          $result = mysqli_query($this->con, $sql);
           if ($result) {
               echo "<script>alert('Wow! User Registration Completed.')</script>";
             $username = "";
             $email = "";
             $_POST['password'] = "";
             $_POST['cpassword'] = "";
           } else {
               echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
      echo "<script>alert('Woops! Email Already Exists.')</script>";
    }
    
  } else {
    echo "<script>alert('Password Not Matched.')</script>";
  }
}
    }
 } 
?>