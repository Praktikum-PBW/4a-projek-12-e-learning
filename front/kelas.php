<?php
if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id_kelas"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id_kelas"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],
                     'item_quantity'          =>     $_POST["quantity"] 
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {   
               if(isset($_SESSION['level'])==""){
                   echo '<script>window.location="index.php?page=login"</script>';  
               }else{
                echo '<script>window.location="index.php?page=cart"</script>';  
                }  
            }
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id_kelas"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantity'          =>     $_POST["quantity"] 
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
?>
<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php  
                $query = "SELECT * FROM kelas";  
                $result = mysqli_query($koneksi, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>
        <div class="col">
            <form action="index.php?page=cart&id=<?php echo $row["id_kelas"]; ?>" method="post" name="add">
                <div class="card h-100">
                    <img src="../aset/img/kelas/<?=$row['thumbnail']?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama_kelas']?></h5>
                        <input type="hidden" name="hidden_name" value="<?php echo $row["nama_kelas"]; ?>" />
                        <input type="hidden" name="hidden_price" value="<?php echo $row["harga"]; ?>" />
                        <input type="hidden" name="quantity" class="form-control" value="1" /> 
                        <a href="index.php?page=kelas_konten&id=<?=$row['id_kelas']?>"
                            class="btn btn-outline-primary">Read
                            More</a>
                        <input name="add_to_cart" type='submit' class="btn btn-primary" value="Add to Cart">
                    </div>
                </div>
            </form>
        </div>
        <?php
        }}
        ?>
    </div>
</div>