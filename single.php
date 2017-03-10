<?php include("view/header.php"); ?>


    
<div id="sidebar">
<div class="sidebar-block" id="other-post">
      <div class="sidebar-block-title" style="text-align: center;">
        <span><b style="font-size: 20pt;">Có thể bạn quan tâm</b></span>
      </div>
      <div class="sidebar-block-content">
        <?php
        $i=0;
        rsort($ds_baiviet);
foreach($ds_baiviet as $bv)
  { $i++;
    if($i==4) break;

  $url = $app_path . $bv["Hinh_Anh"];
  $ma = $bv["Ma_Bai_Viet"];
  //$chude = $bv["Ma_Chu_De"];
  $ten = $bv["Ten_Bai_Viet"];
  $trichdan = $bv["Trich_Dan"];
  //$noi = $bv["Noi_Dung"];
  $ngaydang = $bv["Ngay_Dang"];
?>
        <div class="other-post-item">
          <div class="other-post-img">
           <a href="?action=gioithieu&ma=<?php echo $ma;?>"><img src="<?php echo $url; ?>"></a>
          </div>
          <div class="other-post-info">
            <a href="#"><b><?php echo $ten; ?></b></a>
            <p><?php echo $trichdan; ?>[...]</p>
          </div>
        </div>
 <?php } ?>
      </div>
    </div>

    <div id="sidebar-block">
    <div class="container2">
      <img src="<?php echo $app_path; ?>/images/a1.jpg" alt="" />
      <img src="<?php echo $app_path; ?>/images/a2.jpg" alt="" />
      <img src="<?php echo $app_path; ?>/images/a3.jpg" alt="" />
      <img src="<?php echo $app_path; ?>/images/a4.jpg" alt="" />
      <img src="<?php echo $app_path; ?>/images/a5.jpg" alt="" />
      <img src="<?php echo $app_path; ?>/images/a6.jpg" alt="" />
    </div>
    
  </div>

    <div class="sidebar-block">
    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;height=300&amp;wkst=2&amp;hl=vi&amp;bgcolor=%23FFFFFF&amp;ctz=Asia%2FSaigon" style="border:solid 1px #777" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
    </div>
   
  <div class="sidebar-block">
      
      <a href="http://www.agu.edu.vn"><img class="img-rounded" src="<?php echo $app_path; ?>images/agu.jpg?>" style="height: 100px; width: 100%;"></a>
      <a href="http://www.moet.edu.vn"><img class="img-rounded" src="<?php echo $app_path; ?>images/chinhphu.jpg?>" style="height: 100px; width: 100%; padding-top: 10px;"></a>
    </div>
    
    
   
  </div><!--end #sidebar-->

<div id="container">
 	<div id="main-content">
 		<div class="content-wrap">
 			<div class="content" method="get" action="index.php">
 				<input type="hidden" name="action" value="single">
	 			<h1 class="single-post-title"><?php echo $baiviet["Ten_Bai_Viet"];?></h1>
	 			<p><?php echo $baiviet["Ngay_Dang"]; ?></p>
	 			<p><b><?php echo $baiviet["Trich_Dan"]; ?></b></p>
	 			<p><?php echo $baiviet["Noi_Dung"]; ?></p>
	 			<p>Tác giả: <?php echo $baiviet["Ma_Nguoi_Dung"]; ?></p>
 			</div>
 		</div><!--end .content-->
 	</div><!--end #main-content-->
<?php include("view/footer.php"); ?>