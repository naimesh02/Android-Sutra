<?php include 'header.php';?>
<?php include 'conn.php';?>

<?php 
	$qry="SELECT * FROM `tblcategorydata` where category_name='".$_GET['category']."'";
	$cat=mysqli_query($conn,$qry);
	while($row=mysqli_fetch_array($cat))
{
?>
<div class="container">
	<div class="row category-row">
		<div class="col-sm-4">
			<img src="../../Android Project/AdminAndroid/Admin/upload/<?php echo $row['image']; ?>" class="category-img" alt="Denim Jeans">
		</div>
    	<div class="col-sm-8">
    		<p class="category-title"><?php echo $row['title']; ?></p>
        	<p class="category-desc"><?php echo $row['description']; ?></p>
    	</div>
		</div>
	</div>	

<?php 
}?>
<?php include 'footer.php';?>