
<!DOCTYPE html>
<html lang='en' class=''>

<head>

  <meta charset='UTF-8'>
 
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<!-- Bootstrap Icon -->
  

<body style="font-size: 12px;" >
  <div class="container">
<div class="table-responsive">
<h2 class="text-center">Table</h2>
 
 
<?php 

include "db.php";

$sql = "SELECT * FROM interview_Form";

$result = $conn->query($sql);

?>

 
   

 

</head>

<body>

    

        <h2>users</h2>
         <table class="table table-striped table-bordered table-hover" id="myTable">
          <thead class="table-dark">

        <tr>

        <th scope="col" >ID</th>

        <th scope="col" >Name </th>

        <th scope="col" >Gender</th>

        <th scope="col">Date Of Birth</th>

        <th scope="col" >Email</th>

        <th scope="col">Phone</th>
        
        <th scope="col">Phone1</th>
        
        <th scope="col">Address</th>
        
        <th scope="col" >Location</th>
        
        <th scope="col">Education</th>
        
        <th scope="col" >Year Of Experience</th>
        
        
         <th scope="col" >About</th>
         
          
          <th scope="col">Remark</th>
          
           <th scope="col">Resume</th>
          
          <th scope="col">update</th>
        

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    
                    $id = $row['id'];

        ?>
        

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['gender']; ?></td>

                    <td><?php echo $row['DOB']; ?></td>

                    <td><?php echo $row['email']; ?></td>
                    
                    <td><?php echo $row['phone']; ?></td>
                    
                    <td><?php echo $row['phone1']; ?></td>
                    
                    <td><?php echo $row['address']; ?></td>
                    
                    <td><?php echo $row['location']; ?></td>
                    
                    <td><?php echo $row['education']; ?></td>
                    
                    <td><?php echo $row['YOE']; ?></td>
                    
                    
                    
                    <td><?php echo $row['about']; ?></td>
                    
                     <td><?php echo $row['remark']; ?></td> 
                    
                    <td><a href="assets/<?php echo $row[resume]; ?>" download="<?php echo $row[resume]; ?>">
            Download
        </a></td>
        
        <td class='text-center'>
  <a href='update.php?id=<?php echo $row['id']; ?>' class='btn btn-secondary'>
    <i class='bi bi-pencil'></i> EDIT
  </a>
</td>

                    
                    </tr>           
       

        <?php       }

            }

        ?>                

    </tbody>

</table>



    
</div>
</div>
</body>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
</html>

