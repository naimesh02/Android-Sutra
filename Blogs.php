<?php include 'header.php';?>
<?php include 'conn.php';?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>

<div class="w3-container w3-containerdata">
   <div class="jumbotron heading_title">
    <h1 class="title_text" >New Blogs
  </h1>
  </div>
<?php 
$results_per_page=10;
$num_of_pages=0;

$qry="SELECT * FROM `tblblogs` ";
$cat=mysqli_query($conn,$qry);
$num_of_data=mysqli_num_rows($cat);
if($num_of_data>0){
$num_of_pages=ceil($num_of_data/$results_per_page);

if(!isset($_GET['page'])){
	$page=1;
 
}
else
{
	$page=$_GET['page'];

}

$this_page_start=($page-1)*$results_per_page;


$qry="SELECT * FROM `tblblogs` ORDER BY storeDate LIMIT ".$this_page_start.','.$results_per_page;
$cat=mysqli_query($conn,$qry);
?>
<div >
  <div class="blog_row">

<?php
while($row=mysqli_fetch_array($cat))
{
?>
 <div class="blog_column" style="box-sizing: border-box;">
<a href="#" class="card_click_links"> 
  
    <!--  <div class="w3-third w3-center">
      <div class="w3-panel w3-card w3-card-view"> -->
      <img align="center" src="../../AdminAndroid/Admin/upload/<?php echo $row['image']; ?>" class="blog_image" alt="
      Denim Jeans">
   <!--  </div>
    </div>

  
     <div class="w3-third w3-center" id="w3-card-content">
 -->
 <div class="w3-center" id="blog_content" >
        <a href="#"><p class="category-title"><?php echo $row['title']; ?></p>
   <p class="card-text"><?php echo substr(strip_tags($row['description']),0,300) . "..."; ?></p>
 </a>
          
      </p>

      </div>
    
  
</a>
</div>
<?php 
}
?>
</div>
</div>
<!-- <div style="width: 100%; background-color: yellow;float: left;" >
  <img src="https://thebhakti.com/wp-content/uploads/2019/01/mahakal.jpg"  class="sticky_ad" >
</div> -->


<div style="height: 100%; width: 10%;right:50; position:absolute; ">
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
<div align="center" style="background-color: white; margin: 10px">
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
<?php
}
else
{
  ?>

  <div align="center" class="commingsoon">
  <h1 class="h1comming"></h1>
</div>

  <?php
}
?>

</div>

</div>
<div align="center">
  <div align="center" style="background-color: white;width: 600px">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Homepage Leaderboard -->
<ins class="adsbygoogle"
style="display:inline-block;width:600px;height:90px"
data-ad-client="ca-pub-1234567890123456"
data-ad-slot="1234567890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
  </div>
 <div class="pagination-section">
      <ul class="pagination firstPage">
      	<?php if($num_of_pages>0){  ?> <li><a href="#">Prev</a></li><?php } ?>
<?php
for($i=1;$i<=$num_of_pages;$i++){
	echo '<li><a href="Blogs.php?page='.$i.'" class="pages" >'.$i.'</a></li>';
}
?>
 <?php if($num_of_pages>0){  ?> <li><a href="#">Next</a></li><?php } ?>
 </ul>
    </div>
  </div>

    


<?php include 'footer.php';?>
<!-- <script type="text/javascript" src='js/paginationJs.js'></script> -->