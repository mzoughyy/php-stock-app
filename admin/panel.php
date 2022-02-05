<?php
require("../config/adding.php");
$Produits=display();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin |Panel</title>
  <!-- Title Icon -->
  <link rel="icon" href="../title.png" type="image/icon type">
<!--style sheets -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/panel.css">
<!-- Scripts-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Products <b>Management</b></h2>
                    </div>
                    <div class="col-sm-7">
                    <a href="login.php" class="btn btn-secondary" style="color:red"><i class="fa fa-power-off" style="font-size:20px"></i><span>log out</span></a>    
                    <a href="edit.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
                        
                    </div>
                    
                </div>
            </div>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                 
                        <th>Id</th>
                        <th>Name</th>						
                        <th>Price</th>
                        <th>Status</th> 
                        <th>Edit</th>
                        <th>Delete</th>

                        
                    </tr>
                    
                </thead>
                <?php foreach($Produits as $produit): ?>

                <tbody>
                    <tr>
                        <td><?= $produit->id ?></td>
                        <td><img src="<?= $produit->image ?>" class="avatar" alt="Avatar"> <?= $produit->name ?> </td>
                        <td><?= $produit->price ?> DT</td>                        
                        <td><?= $produit->dispo ?></td>
                        <td>
                            <a href="edit.php" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <td><a href="" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
            
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>     
</body>
</html>
