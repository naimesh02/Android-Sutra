<?php include 'header.php';?>
<?php include 'conn.php';?>
<link rel="stylesheet" type="text/css" href="css/Index-Style.css">

<?php 
$results_per_page=2;
$qry="SELECT * FROM `tbldata` where type='".$_GET['type']."'";
$cat=mysqli_query($conn,$qry);
$num_of_data=mysqli_num_rows($cat);

$num_of_pages=ceil($num_of_data/$results_per_page);

if(!isset($_GET['page'])){
	$page=1;
}
else
{
	$page=$_GET['page'];
}

$this_page_start=($page-1)*$results_per_page;


$qry="SELECT * FROM `tbldata` where type='".$_GET['type']."' LIMIT ".$this_page_start.','.$results_per_page;
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
}
?>
<div class="container pagination-div">
	<div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-6">
<?php
for($i=1;$i<=$num_of_pages;$i++){
	echo '<a href="Data.php?type='.$_GET['type'].'&page='.$i.'" style="font-size:17px;padding:5px;color:black">'.$i.'</a>';
}
?>
</div>
</div>
</div>
 <div class="pagination-section">
      <ul class="pagination first">
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </div>


<?php include 'footer.php';?>