<?php /*
	@ since 1.5
	应答码查询页面
	
	用CODE 查 RESPONSE_CODE 返回 RESPONSE_DESCRIPTION_CN
*/?>

<?php include 'header.php';?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="#" class="current">应答码查询</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span4">
      	<div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>查询应答码</h5>
            <div class="buttons"><a <?php /*按下此键跳转resault显示结果*/?> href="" class="btn btn-mini btn-primary">开始搜索</a></div>
             </div>
          <div class="widget-content">
          	<div class="row-fluid">
			  	<div class="span12">
				  	
				  	<form action="#" method="get" class="">
					  	  <?php /*
	@ since 1.5
	@ 输入应答码
	*/?>

										<label class="control-label">应答码：</label>
										<div class="controls">
											<input type="text"  placeholder=""/>
										</div>
	<?php /*
	@ since 1.5
	@ 返回结果直接显示在下面
	*/?>
									<hr/>
									<p>结果：<b><?php /*获得应答码*/?></b></p>
									
				  	</form>
				 
			  	</div>
          	</div>
          </div>
      	</div>
      </div>
    </div>
  </div>
</div>

<div class="row-fluid">
      <div id="footer" class="span12"> 2013 &copy; CardInfoLink. 由 <a href="http://#">讯联科技有限公司</a> </div>
    </div>
      		<script src="js/jquery.min.js"></script>
            <script src="js/jquery.ui.custom.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/bootstrap-datepicker.js"></script>
            <script src="js/jquery.uniform.js"></script>
            <script src="js/select2.min.js"></script>
            <script src="js/maruti.js"></script>
            <script src="js/maruti.form_common.js"></script>
</body>
</html>