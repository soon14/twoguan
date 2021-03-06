<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>用户中心-<?php echo $webname;?></title>
<?php echo Common::getCss('m_base.css,style.css'); ?>
<?php echo Common::getScript('jquery-min.js,common.js,st_m.js'); ?>
</head>
<body>
  <?php echo  Stourweb_View::template('public/top');  ?>
<div class="city_top clearfix">
  <a class="back" href="<?php echo $cmsurl;?>">返回</a>
    <a class="city_tit" href="<?php echo $cmsurl;?>user/index">个人中心</a>
  </div>
  
  <div class="m-main">
<div class="user_head">
    <div class="user_name_pic">
        <h2><img src="<?php echo $user['litpic'];?>" width="25%" /></h2>
        <p><?php echo $user['nickname'];?></p>
      </div>
    <img class="fl" src="<?php echo $publicurl;?>images/user_sp_bg.jpg" width="100%" />
    </div>
    <div class="user_msg_con">
    <ul>
      <li class="li_1" data-url="<?php echo $cmsurl;?>user/orderlist"><p>我的订单</p></li>
      <li class="li_2" data-url="<?php echo $cmsurl;?>user/pinlunlist"><p>我的点评</p></li>
      <li class="li_3" data-url="<?php echo $cmsurl;?>user/loginout"><p>注销登陆</p></li>
      </ul>
    </div>
</div>
  
  <?php echo  Stourweb_View::template('public/foot');  ?>
  <script>
      $()
      $('.user_msg_con').find('li').each(function(){
          $(this).css("cursor","pointer");
          $(this).click(function(){
              var url = $(this).attr('data-url');
              window.location.href=url;
          })
      })
  </script>
</body>
</html>
