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

if(isset($_POST["delete"]))  
 {  
       
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id_kelas"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>window.location="index.php?page=cart"</script>';  
                }  
           }  
      
 }  
?>
<div class="container py-5">
    <form method="post" action="index.php?page=checkout">
        <?php  
                $query = "SELECT * FROM kelas";  
                $result = mysqli_query($koneksi, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>
        <input type="hidden" id="id_kelas" name="id_kelas"
            value="index.php?page=cart&id=<?php echo $row["id_kelas"]; }}?>">
        <input type="hidden" id="id_user" name="id_user" value="<?=$_SESSION['id_user']?>">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <!-- <th scope="col"></th> -->
                                <th scope="col" class="h5">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>
                            <tr>
                                <!-- <td class="align-middle">
                                    <button href="index.php?page=cart?id=<?php echo $values["item_id"]; ?>"
                                        class="btn btn-primary btn-circle" name="delete">
                                        <i class="las la-times"></i>
                                    </button>
                                </td> -->
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-column ms-4">
                                            <p class="mb-2" name="nama_kelas"><?php echo $values["item_name"]; ?></p>
                                        </div>
                                    </div>
                                </th>
                                <td class="align-middle">
                                    <div class="d-flex flex-row">
                                        <input type="hidden" id="jumlah" name="jumlah"
                                            value="<?php echo $values["item_quantity"]; ?>">
                                        <p class="mb-2"><?php echo $values["item_quantity"]; ?>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <p class="mb-0" style="font-weight: 500;">
                                        Rp.<?php echo number_format( $values["item_price"], 0); ?>
                                    </p>
                                </td>
                                <td class="align-middle">
                                    <p class="mb-0" style="font-weight: 500;">
                                        Rp.<?php echo number_format($values["item_quantity"] * $values["item_price"], 0); ?>
                                    </p>
                                </td>
                            </tr>
                            <!-- <?php
                               }
                            ?>     -->
                        </tbody>

                    </table>
                    <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-align-self-end">
                                    <div class="col">
                                        <?php  
                                                $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                                                ?>
                                        <div class="d-flex justify-content-between" style="font-weight: 500;">
                                            <p class="mb-2">Subtotal</p>
                                            <p class="mb-2">Rp. <?php echo number_format($total, 0);?></p>
                                        </div>

                                        <div class="d-flex justify-content-between" style="font-weight: 500;">
                                            <p class="mb-0">Shipping</p>
                                            <p class="mb-0">Rp.10000</p>
                                        </div>
                                        <?php  
                                                $total_semua = $total + 10000;  
                                                
                                                ?>
                                        <hr class="my-4">
                                        <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                            <input type="hidden" id="total_semua" name="total_semua"
                                                value="<?=$total_semua?>">
                                            <p class="mb-2">Total (tax included)</p>
                                            <p class="mb-2">Rp.<?php echo number_format($total_semua, 0);?></p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <button type="submit" href="index.php?page=checkout" name="checkout"
                                                class="btn btn-primary btn-lg"
                                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Checkout Rp.
                                                <?php echo number_format($total_semua, 0);?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
            }
        ?>
                </div>
            </div>
        </div>
    </form>