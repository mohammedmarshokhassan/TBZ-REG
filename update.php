	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<?php
  include "db.php"; 

   // checking if the variable is set or not and if set adding the set data value to variable userid
    if(isset($_GET['id']))
    {
      $userid = $_GET['id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM interview_Form WHERE id = $userid ";
      
      $view_users= mysqli_query($conn,$query);
 
      while($row = mysqli_fetch_assoc($view_users))
        {
 
          $user =  $row['remark'];
          
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $user = $_POST['user'];
   
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE interview_Form SET remark = '{$user}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }    
                  
?>

<h1 class="text-center">Update User Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
          
        <label for="user" >Username</label>
      <input type="text" name="user" class="form-control" value="<?php echo $user; ?>">
           
      </div>

      
     

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="wel.php" class="btn btn-warning mt-5"> Back </a>
    <div>

 