<?php include("view/header.php"); ?>

<div id="sidebar">
<div class="sidebar-block" id="other-post">
      <div class="sidebar-block-title" style="text-align: center;">
        <span><b style="font-size: 20pt;">Có thể bạn quan tâm</b></span>
      </div>
      <div class="sidebar-block-content">
        <?php
        $i=0;
       
foreach($ds_baiviet as $bv)
  { $i++;
    if($i==4) break;
     rsort($ds_baiviet);

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


    <div class="sidebar-block" style="margin-top: -40px;">
    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;height=300&amp;wkst=2&amp;hl=vi&amp;bgcolor=%23FFFFFF&amp;ctz=Asia%2FSaigon" style="border:solid 1px #777" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
    </div>
   
  <div class="sidebar-block" style="margin-top: -40px;">
      
      <a href="http://www.agu.edu.vn"><img class="img-rounded" src="<?php echo $app_path; ?>images/agu.jpg?>" style="height: 100px; width: 100%;"></a>
      <a href="http://www.chinhphu.vn/portal/page/portal/chinhphu/trangchu"><img class="img-rounded" src="<?php echo $app_path; ?>images/chinhphu.jpg?>" style="height: 100px; width: 100%; padding-top: 10px;"></a>
    </div>
    
    
   
  </div><!--end #sidebar-->


<div id="main-content" style="margin-top: 50px;">
    <h2>Kết Quả Tìm Kiếm</h2>
    <hr>
<?php
foreach($ds_baiviet as $bv){
  $url = $app_path . $bv["Hinh_Anh"];
  $ma = $bv["Ma_Bai_Viet"];
  $manguoidung = $bv["Ma_Nguoi_Dung"];
  $ten = $bv["Ten_Bai_Viet"];
  $trichdan = $bv["Trich_Dan"];
  $noidung = $bv["Noi_Dung"];
  $ngaydang = $bv["Ngay_Dang"];
?>
    <div class="post">
      <div class="post-thumb">
    
        <a href="?action=single&ma=<?php echo $bv["Ma_Bai_Viet"];?>"><img class="img-rounded" src="<?php echo $url; ?>"></a>
      </div>
      <div class="post-info">
        <h1 class="post-title"><a href="?action=single&ma=<?php echo $bv["Ma_Bai_Viet"];?>"><b><?php echo $ten; ?></b></a></h1>
        <ul>
          <li><span><b><?php echo $ngaydang; ?></b></span></li>
        </ul>
        <p class="post-desc">
          <?php echo $trichdan; ?>[...]
        </p>
      </div>
    </div><!--end .post-->
    <?php } ?>


    <div id="pagination">
      <td colspan="9">
            <div>
              <?php Control_Navigation($tongsodong); ?>
            </div>
          </td>
    </div>
  </div><!--end #main-content-->
<?php include("view/footer.php"); ?>