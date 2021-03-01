<!DOCTYPE html>
<html>
<head>
  <title>Insert Data in MySQL using PHP MVC</title>
</head>

<body>
<?php 
 echo $result;

?>
<form action="Model/model.php" method="POST">
  <p>
   <label>Full Name :</label>
   <input id="fname" value="" name="fname" type="text" required="required" /><br />
  </p>

  <p>
   <label>Email :</label>
   <input id="email" name="email" type="email" required="required" /><br />
  </p>

   <p>
   <label>Password : </label>
   <input id="password" value="" name="password" type="password" required="required" /><br>
  </p>
   <br />
  <p>

      <button type="submit" name="submit"><span>Save</span></button>
      <button type="reset"><span>Cancel</span></button>
  </p>
 </form>

</body>
</html>