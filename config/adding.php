<?php
/*-------------------- Product adding function --------------------------- */
function adding($id,$name, $dispo, $infos, $price,$image){
    if(require("connexion.php")){
/* Commande pereparation [C1]*/
        $req =$access->prepare("INSERT INTO products(id,name,dispo, infos, price,image) VALUES ($id,'$name', '$dispo', '$infos', $price,'$image')");
/* Execution de comande [C2] */
        $req->execute(array($id,$name, $dispo, $infos, $price,$image));
        $req->closeCursor();
    }
}
/*------------------ Product display function ---------------------------------*/
function display(){
    if(require("connexion.php")){
        /* [C1] */
        $req=$access->prepare("SELECT * FROM products ORDER BY id DESC");
        /* [C2] */
        $req->execute();
        /* row -> object */
        $data=$req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}
/*------------------------ Delete product function -----------------------*/
$sql="DELETE FROM products WHERE id=4";
if(mysqli_query($conn,$sql)){
    echo "record deleted";
}
else{
    echo "error";
}
?>