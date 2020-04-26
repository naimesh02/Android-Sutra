<?php include 'header.php';?>
<?php include 'conn.php';?>
<div class="container">
<?php 
$qry="SELECT * FROM `tblcategorydata` where category_name='".$_GET['category']."'";
$cat=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($cat))
{
?>


<div class="row">
	<div class="row category-row">
		<div class="col-sm-4">
			<img src="../../AdminAndroid/Admin/upload/<?php echo $row['image']; ?>" class="category-img" alt="Denim Jeans">
		</div>
    	<div class="col-sm-8">
    		<p class="category-title"><?php echo $row['title']; ?></p>
        	<p class="category-desc"><?php echo $row['description']; ?></p>
    	</div>
		</div>
	</div>	

<?php 
}?>
</div>
<?php include 'footer.php';?>