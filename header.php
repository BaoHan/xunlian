<?php /*
	这里是所有头部php
	
	功能：
	@	根据页面的不同加载css和js
	@	动态显示LOGO
	@	获得该用户的名称
	@	页面登出
	@	固定菜单
*/?>
<!DOCTYPE html>
<html lang="en">

<head>
<title><?php /*动态显示LOGO*/?>收单服务平台</title><meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php /*bootstrap 前端开发框架*/?>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<?php /*日期选择CSS 只需要加载于“历史交易”页面*/?>
<link rel="stylesheet" href="css/datepicker.css" />
<?php /*整体的style设置*/?>
<link rel="stylesheet" href="css/maruti-style.css" />
<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
<?php /*除了首页和个人设置页面 出现表格加载如下*/?>
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
</head>
<body>

<!--Header-part-->
<div id="header">
	<?php /*判断是否有LOGO图片，如果没有显示如下文字
		
		@since 1.3 删除了下面color 样式 
	*/?>
	
  <h3 style="padding:10px 0 0 10px;">收单服务平台</h3>
</div>
<!--close-Header-part--> 



<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text"><?php /*读取当前用户名*/?>Encore Bao</span></a></li>
    <li class=""><a title="" href="config.php"><i class="icon icon-cog"></i> <span class="text">个人设置</span></a></li>
    <li class=""><a title="" href="login.php"><i class="icon icon-share-alt"></i> <span class="text"><?php /*登出链接*/?>登出</span></a></li>
  </ul>
</div>

<?php /*以下菜单修改href就行了*/?>
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> 首 页</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>首 页</span></a></li>
    <li> <a href="today.php"><i class="icon icon-signal"></i> <span>今日交易</span></a> </li>
    <li> <a href="history.php"><i class="icon icon-search"></i> <span>历史交易</span></a> </li>
    <?php /*
    	@ since 1.5.1
	    @ 新增报表下载页面
    */?>  
    <li class="submenu"> <a href="#"><i class="icon icon-download-alt"></i> <span>报表下载</span></a> 
    	<ul>
    	<li><a href="report.php">清算报表</a></li>
        <li><a href="report-csv.php">CSV报表</a></li>
      </ul>
    </li>
    <li> <a href="arrange.php"><i class="icon icon-edit"></i> <span>商户管理</span></a> </li>
    <?php /*
    	@ since 1.4
	    @ 新增权限管理页面
    */?>
    <li class="submenu"> <a href="#"><i class="icon icon-user"></i> <span>账户管理</span></a>
      <ul>
        <li><a href="creator-jigou.php">机构账户管理</a></li>
        <li><a href="creator-daili.php">代理账户管理</a></li>
        <li><a href="creator-shanghu.php">商户账户管理</a></li>
      </ul>
    </li>
     <?php /*
    	@ since 1.5
	    @ 新增其他菜单
    */?>
    <li class="submenu"> <a href="#"><i class="icon icon-plus"></i> <span>其他</span></a> 
    	<ul>
        <li><a href="search-yingda.php">应答码查询</a></li>
        <li><a href="search-hanghao.php">银行行号查询</a></li>
      </ul>
    </li>
  </ul>
</div>