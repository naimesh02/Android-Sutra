<?php include 'header.php';?>
<?php include 'conn.php';?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-container">
<?php 
	$qry="SELECT * FROM `tblcategorydata` where category_name='".$_GET['category']."'";
	$cat=mysqli_query($conn,$qry);
	while($row=mysqli_fetch_array($cat))
{
?>
<div class="w3-panel w3-card">
	<div class="w3-row">
		 <div class="w3-third w3-center">
			<img src="../../Android Project/AdminAndroid/Admin/upload/<?php echo $row['image']; ?>" class="category-img" alt="Denim Jeans">
		</div>
		 <div class="w3-third w3-center">
    		<p class="category-title"><?php echo $row['title']; ?></p>
        	<p class="category-desc"><?php echo $row['description']; ?></p>
    	</p>
    	</div>
    </div>
</div>	

<?php 
}?>
</div>
<?php include 'footer.php';?>