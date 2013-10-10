<?php/*
	高级查询页面
	
	该页面中必须要填写两个内容，开始日期-结束日期。之间的时间必须少于6个月。
	其余字段作为查询条件POST到resault.php 页面中，显示结果。
	
*/?>

<?php include 'header.php';?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="#" class="current">交易查询</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
      	<div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>历史交易搜索</h5>
            <div class="buttons"><a <?php/*按下此键跳转resault显示结果*/?> href="resault.php" class="btn btn-mini btn-primary">开始搜索</a></div>
             </div>
          <div class="widget-content">
          	<div class="row-fluid">
			  	<div class="span12">
				  	
				  	<form action="#" method="get" class="form-horizontal">
					  	  <div class="control-group">
                                        <label class="control-label">开始日期：</label>
                                        <div class="controls">
                                            <input type="text" data-date="2013-01-02" data-date-format="yyyy-mm-dd" value="2013-01-02" class="datepicker" /><small>（必选）</small><?php/* 判断 为空则报错*/?>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">结束日期：</label>
                                        <div class="controls">
                                            <input type="text" data-date="<?php/*默认今天*/?>2013-01-02" data-date-format="yyyy-mm-dd" value="<?php/*获得今天日期*/?>" class="datepicker" /><small>（必选）</small><?php/* 判断 为空则报错*/?>
                                        </div>
                                    </div>
							 <div class="control-group">
										<label class="control-label">商户名称/代码：</label>
										<div class="controls">
											<input type="text"  placeholder="输入商户名称或代码"/><?php/* 判断 数字15为查商户代码 如果非数字查商户名称。精确搜索*/?>
										</div>
									</div>
								<div class="control-group">
										<label class="control-label">交易跟踪号：<?php/* 判断 判断数字6位，不是则报错*/?></label>
										<div class="controls">
											<input type="text"  placeholder=""/>
										</div>
									</div>
								<div class="control-group">
										<label class="control-label">卡号后四位：<?php/* 判断 判断数字4位，不是则报错*/?></label>
										<div class="controls">
											<input type="text"  placeholder=""/>
										</div>
									</div>
				  	          <div class="control-group">
										<label class="control-label">交易金额：</label>
										<div class="controls">
<select>
				<option>全 部</option>
				<option>[100.00]–[1000.00]</option>
				<option>[1000.00]–[5000.00]</option>
				<option>[5000.00]–[10000.00]</option>
				<option>[10000.00]–[50000.00]</option>
				<option>大于[50000.00]</option>
</select>
										</div></div>
<div class="control-group">
										<label class="control-label">交易类型：</label>
										<div class="controls">

<select multiple>
				<option>全 部</option>								
				<option>消费</option>
				<option>消费撤销类</option>
				<option>退货</option>
				<option>预授权类</option>
				<option>预授权完成类</option>
											</select>
										</div>
</div>
<div class="control-group">
										<label class="control-label">交易状态：</label>
										<div class="controls">
<select>

				<option>全 部</option>
				<option>成 功</option>
				<option>失 败</option>
				<option>未 知</option>

</select>
										</div></div>
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
