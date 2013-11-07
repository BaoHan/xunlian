<?php /*
	@ since 1.5.1
	@ CSV下载页面
*/?>

<?php include 'header.php';?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="#" class="current">CSV报表</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span4">
      	<div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>下载CSV报表</h5>
            <div class="buttons"><a <?php /* @ since 1.5.1 下载清算报表 CSV 导出在指定日期内 清算标识为：清算  的交易*/?> href="" class="btn btn-mini btn-primary">商户清算报表</a></div>
            <div class="buttons"><a <?php /*直接把交易报表输出CSV*/?> href="" class="btn btn-mini btn-primary">交易报表</a></div>
             </div>
          <div class="widget-content">
          	<div class="row-fluid">
			  	<div class="span12">
				  	
				  	<form action="#" method="get" class="">
					  <?php /*
	@ since 1.5.1
	@ 
	*/?>
  
										<div class="control-group">
                                        <label class="control-label">开始日期：</label>
                                        <div class="controls">
                                            <input type="text" data-date="2013-01-02" data-date-format="yyyy-mm-dd" value="2013-01-02" class="datepicker" /><small>（必选）</small><?php /* 判断 为空则报错*/?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">结束日期：</label>
                                        <div class="controls">
                                            <input type="text" data-date="<?php/*默认今天*/?>2013-01-02" data-date-format="yyyy-mm-dd" value="<?php /*获得今天日期*/ ?>" class="datepicker" /><small>（必选）</small><?php /* 判断 为空则报错*/?>
                                        </div>
                                    </div>
							 <div class="control-group">
							 <?php /* 判断商户代码是否为该代理或者该机构下的商户；如果登入账户为商户，则默认填写账户的商户ID，且以下部分不可见。*/ ?>
										<label class="control-label">商户代码：</label>
										<div class="controls">
											<input type="text"  placeholder="输入商户代码"/><?php /* 判断 数字15为查商户代码 如果非数字查商户名称。精确搜索*/?>
										</div>
									</div>				  	</form>
				 
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