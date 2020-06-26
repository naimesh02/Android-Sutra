<?php include 'header.php';?>
<?php include 'conn.php';?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-container w3-containerdata">
	 <div class="jumbotron heading_title">
    <h1 class="title_text" >DATA OF CATEGORY <?php echo strtoupper($_GET['category']);?>
  </h1>
  </div>

<?php 
$results_per_page=2;
	$qry="SELECT * FROM `tblcategorydata` where category_name='".$_GET['category']."'";
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

$qry="SELECT * FROM `tblcategorydata` where category_name='".$_GET['category']."' LIMIT ".$this_page_start.','.$results_per_page;
$cat=mysqli_query($conn,$qry);
?>
<div style="width:85%;float: left;">
<?php
	while($row=mysqli_fetch_array($cat))
{
?>
<div class="w3-panel w3-card w3-categorycard">
	<div class="w3-row">
		 <div class="w3-third w3-center">
		 	<div class="w3-panel w3-card w3-card-view">
			<img src="../../Android Project/AdminAndroid/Admin/upload/<?php echo $row['image']; ?>" class="category-img" alt="
			Denim Jeans">
		</div>
		</div>

	
		 <div class="w3-third w3-center" id="w3-card-content">

    		<a href="view-category.php"><p class="category-title"><?php echo $row['title']; ?></p></a>
        	<p class="category-desc"><?php echo $row['description']; ?></p>
    	</p>
    	</div>
    </div>
</div>	

<?php 
}
?>
</div>
<div style="width: 100%" >
  <img src="https://thebhakti.com/wp-content/uploads/2019/01/mahakal.jpg"  class="sticky_ad" >
</div>
</div>
</div>
</div>

 <div class="pagination-section">
      <ul class="pagination firstPage">
        <li><a href="#">Prev</a></li>
<?php
for($i=1;$i<=$num_of_pages;$i++){
  echo '<li><a href="category.php?category='.$_GET['category'].'&page='.$i.'" class="pages" >'.$i.'</a></li>';
}
?>
 <li><a href="#">Next</a></li>
 </ul>
    </div>
  </div>

<?php include 'footer.php';?>