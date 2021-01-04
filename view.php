<?php include 'header.php' ?>
<?php
$sql="SELECT * FROM `tbldata` WHERE title ='". $_GET['title']."'";
$qrys=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($qrys)) {
  $img=$row['image'];
  $description=$row['description'];
   $gitLink=$row['gitLink'];
  # code...
}

?>
  <div class="row viewData" style="padding: 100px;padding-top: 10px">
  	<div class="col-sm-8">
      
  		<img src="../../AdminAndroid/Admin/upload/<?php echo $img; ?>" class="center" alt="
      Denim Jeans">
  	</div>
    <div class="col-sm-4">
    	<div align="center" style="background-color: white;margin: 10px">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Homepage Leaderboard -->
<ins class="adsbygoogle"
style="display:inline-block;width:98px;height:37%"
data-ad-client="ca-pub-1234567890123456"
data-ad-slot="1234567890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div align="center" style="background-color: white;margin: 10px">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Homepage Leaderboard -->
<ins class="adsbygoogle"
style="display:inline-block;width:98px;height:50%"
data-ad-client="ca-pub-1234567890123456"
data-ad-slot="1234567890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    </div>
    <div class="container_title">
	   <div class="jumbotron heading_title">
    <h1 class="title_text" ><?php echo strtoupper($_GET['title']);?>
  </h1>
  </div>
  </div>
<div class="row dataDesc">
  <div class="col-sm-8">
 <!--  <p class="cat_title_1"><strong>What is Lorem Ipsum?</strong></p> -->
  <p class="cat_content_1"><?php echo $description;?> </p>
</div>
<div class="col-sm-4 topicsView">
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
<center>
 <div style="margin-left: 150px">
  <?php
if($gitLink !==null || $gitLink!='')
{

  ?>
  
<!-- <a href="<?php echo $gitLink ?>"> -->
<a hre="#">  <button class="btn-download btn-medium info" >Download </button></a>
   <!-- <a href="<?php echo $gitLink ?>"> -->
  <a href="#">  <button class="btn-download btn-medium info" >Git Repository </button></a>
 
 
  <?php
}
?>
 </div>
 </center>
</div>

<div align="center" style="background-color: white;margin: -50px 100px 10px 100px;width: 60%">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Homepage Leaderboard -->
<ins class="adsbygoogle"
style="display:inline-block;width:198px;height:20%"
data-ad-client="ca-pub-1234567890123456"
data-ad-slot="1234567890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php include 'footer.php' ?>