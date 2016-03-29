<form action="/global.php" method="post">
   
    First Name:<input type="text" name="fname"><br />
    <br />
     Last Name:<input type="text" name="lname"><br />
     <br />
     <input type="reset" name="reset" />
     <input type="submit" name="submit" value="Go" />
    
</form>
<?php
if(isset($_POST['submit'])){
echo $_POST['fname'];
echo "<br />";
echo $_POST['lname'];
}
