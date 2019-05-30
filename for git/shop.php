<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "id9642978_pontios013", "nikos013", "id9642978_project");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="shop.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="shop.php"</script>';  
                }  
           }  
      }  
 }
 if(isset($_POST["submit_order"]))  
 {  
    foreach($_SESSION["shopping_cart"] as $keys => $values) 
    { 	
		    
			$quant= $values["item_quantity"]; 
			$cid= $values["item_id"];
			$query = "SELECT * FROM items WHERE id='$cid'";
			$result = mysqli_query($connect, $query);
			$row = mysqli_fetch_array($result);
            $aquan= $row["quan"]; 
			if ($aquan>=$quant)
			{
				    
			$sql = "UPDATE items SET quan=quan-$quant WHERE id=$cid";

			if ($connect->query($sql) === TRUE) {
			echo "Record updated successfully";
			} else {
			echo "Error updating record: " . $connect->error;
			}
			echo "<script> alert('Your order has been placed!');</script>";
	        echo "<script>
            window.location.href = 'https://4minutes.000webhostapp.com/';
            </script>";
			} else {
			    echo "<script> alert('There are not enough items!');</script>";
			}
	}
	
 }  
?> 

 <!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
		body{
			background-image: url("13.jpg");
			/*background-color: #000000;*/
		}
		.block1000 {

	text-align: center;
	width: 75%;
	height: 3100px;
	background: rgb(255,176,181);
	opacity: .95;
	box-shadow: 0 2px 120px;
    font-family: Algerian;
}
		.button {
 		 	background-color: white;
 		    color: black;
 			padding: 16px 32px;
  			border: 4px solid #555555;
  			transition-duration: 0.4s;
  			cursor: pointer;
		}

		.button:hover {
  			background-color: #555555;
  			color: white;
		}

		</style>
	</head>
	<body>
		<br />
		<center>
		    
		<div class="block1000"">
		    <h1>WELCOME TO THE SHOP</h1>
		<h2>NOW YOU CAN TAKE EVERY YOU WANT</h2>
		<br>
			<br />
			<br />
			<br />
			
			<br /><br />
			<?php
				$query = "SELECT * FROM items ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="imag/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                        <?php 
						    echo "There are ". $row['quan']." left!";
                        ?>
                        <br>
						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                        
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						
						
						<?php 
						if( $row["quan"] > 0) 
						{
							echo "<input type=\"submit\" name=\"add_to_cart\" style=\"margin-top:5px;\" class=\"button\" value=\"Add to Cart\" />";
						} else {
						echo "Not Available At The Moment";
						}
						?>
					</div>
				</form>
			</div>
<?php
					}
				}
?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="30%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="shop.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
			<form method="post" action="shop.php">
				<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
					<input type="submit" name="submit_order" style="margin-top:5px;" class="button" value="Submit your order" />
					
			</form>
		</div>
		</center>
	</div>
	<br />
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>