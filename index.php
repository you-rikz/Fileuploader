<?php
include "Retrieve.php";

$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;
?>
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>File Upload Handler in PHP</title>
<style> 
.btn-primary {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    background-color: #27baba;

}
</style>
</head>
<body>
<?php if (!is_null($success)): ?>
  <div class="alert alert-success" role="alert">
            Your file was succesfully uploaded
        </div>
        <?php endif ?>

        <?php if (!is_null($error)): ?>
        <div class="alert alert-danger" role="alert">
            Unable to upload your file. 
        </div>
<?php endif ?>
<div class="container">
      <div class="row">
         <div class="col-9"><h1>Registrations</h1></div>
         <div class="col-3">
             <form method="POST" action="register.php">
                 <button class="btn btn-primary" style="margin-top:10px;">Add New Registration</button>
             </form>
        </div> 
    </div>
</div>
  <div class="container">
  <div class="container-xl">
  <table class="table table-striped">
  <thead>
      <th scope="col">ID</th>
      <th scope="col">Complete Name</th>
      <th scope="col">Email</th>
      <th scope="col">Picture</th>
      <th scope="col">Registered Date</th>
  </thead>
  <tbody>
        <?php
            $retrieve = new Retrieve;
            $retrieveData = $retrieve->retrieveData();
            foreach($retrieveData as $data){
        ?>
            <tr>
            <th scope="row"><?php echo $data['id']?></th>
            <td><?php echo $data['complete_name']?></td>
            <td><?php echo $data['email']?></td>
            <td><?php echo "<img width=50px;height=50px; src=" . $data['picture_path'] . ">";?></td>
            <td><?php echo $data['registered_at']?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>