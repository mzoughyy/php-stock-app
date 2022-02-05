
   
<?php

  require("../config/adding.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<!-- css styles links -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/panel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- JavaScript links -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<title>Admin |New Product</title>
   <!-- Title Icon -->
   <link rel="icon" href="../title.png" type="image/icon type">
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2> <a href="panel.php"><i class="fa fa-arrow-circle-left" style="font-size:26px;color:white" id="arrow"></i></i></a>  New  <b>Product</b></h2>
                    </div>
                   
                </div>
            </div>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      </div>

<form class="form-horizontal" method="post">
<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id">PRODUCT ID</label>  
  <div class="col-md-4">
  <input id="product_id" name="id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dispo">STATUS</label>  
  <div class="col-md-4">
    <select id="product_categorie" name="dispo" class="form-control">
      <option>-------------</option>
      <option>In Stock</option>
      <option>Out Of Stock</option>
    </select>
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="infos">PRODUCT INFOS</label>  
  <div class="col-md-4">
  <textarea name="infos" placeholder="PRODUCT INFOS" class="form-control input-md" required=""></textarea>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">PRODUCT PRICE</label>
  <div class="col-md-4">                     
    <input class="form-control" id="product_description" name="price" type="number" placeholder="PRODUCT PRICE">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="image">PRODUCT IMAGE</label>
  <div class="col-md-4">
  <input id="product_image" name="image" placeholder="PRODUCT IMAGE URL" class="form-control input-md" required="" type="text">
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="valider">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="valider" class="btn btn-primary">ADD A NEW PRODUCT</button>
  </div>
  </div>

</fieldset>
</form>

</body>
</html>

<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['id']) AND isset($_POST['name']) AND isset($_POST['dispo']) AND isset($_POST['infos']) AND isset($_POST['price']) AND isset($_POST['image']))
    {
    if(!empty($_POST['id']) AND !empty($_POST['name']) AND !empty($_POST['dispo']) AND !empty($_POST['infos']) AND !empty($_POST['price']) AND !empty($_POST['image']))
	    {
        $id = htmlspecialchars(strip_tags($_POST['id']));
	    	$name = htmlspecialchars(strip_tags($_POST['name']));
        $dispo = htmlspecialchars(strip_tags($_POST['dispo']));
        $infos = htmlspecialchars(strip_tags($_POST['infos']));
        $price = htmlspecialchars(strip_tags($_POST['price']));
        $image = htmlspecialchars(strip_tags($_POST['image']));

          
          try 
          {
            adding($id,$name, $dispo, $infos, $price,$image) ;
                          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }

?>
