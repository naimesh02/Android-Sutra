<?php include 'header.php' ?>
<?php include 'conn.php';?>
<?php
$sql="SELECT * FROM `tbldata` WHERE title ='". $_GET['title']."'";
$qrys=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($qrys)) {
  $img=$row['image'];
  $description=$row['description'];
  # code...
}

?>


  <div class="row" style="padding: 100px;padding-top: 10px">
  	<div class="col-sm-8">
      
  		<img src="../../AdminAndroid/Admin/upload/<?php echo $img; ?>" class="center" alt="
      Denim Jeans">
  	</div>
    <div class="col-sm-4">
    	<h2>Advertisement</h2>
    </div>
    <div class="container_title">
	   <div class="jumbotron heading_title">
    <h1 class="title_text" ><?php echo strtoupper($_GET['title']);?>
  </h1>
  </div>
  </div>
<div>
  <div style="width: 70%;float:left;">
 <!--  <p class="cat_title_1"><strong>What is Lorem Ipsum?</strong></p> -->
  <p class="cat_content_1"><?php echo $description;?> </p>
</div>
<div style="width: 30%;float:left;">
  <p class="sideListHead">Topics</p>
  <ul>
 
  <?php
$titles="SELECT * FROM `tbldata` WHERE title not LIKE '".$_GET['title']."'";
$response=mysqli_query($conn,$titles);

while($res=mysqli_fetch_array($response)){
  ?>
 <li class="li list">
   <a href="view.php?title=<?php echo $res['title']; ?>">  <?php echo $res['title']; ?></a></li>
  <?php
}
  ?>
</ul>
  </div>
</div>
 
</div>


<?php include 'footer.php' ?>