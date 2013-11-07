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
	@ 判断行号
	@ 查询要素：所属省（下拉选择）、城市（下拉选择）、银行（下拉选择）、开户银行（下拉选择和模糊查询，模糊查询输出匹配内容）
输出要素：机构使用行号信息中的“二级行号+一级行号”，即输出24为数字

	@ 查询字段：省（link_city_code表中cityJb=’省级’,显示province）、城市：得到省份province后，查询link_city_code表中province=province,显示cityName
	  银行：link_bank_name表中所有信息、开户银行：link_bank_no表中cityCode=城市的cityCode and 截取oneBankNo的前三位为银行的id
	  结果：开户银行的twoBrankNo+oneBrank

	@ 例：省为：黑龙江省，城市为：(select *  from  link_city_code  where  province="黑龙江省" )选择：依兰县（cityCode为2610），
    银行：兴业银行（id为：309）
    开户银行： (SELECT * FROM link_bank_no where cityCode='2610' AND substring(oneBankNo,1,3)='309')
    选择银行：兴业银行股份有限公司哈尔滨南岗支行
结果：309261000010309261000036
	*/?>
  
										<label class="control-label">省份：</label>
										<div class="controls">
<select>
				<option>省份一</option>
				<option>省份二</option>
				<option>省份三</option>
</select>
										</div>
										<hr/>
										<label class="control-label">城市：</label>
										<div class="controls">
<select>
				<option>城市一</option>
				<option>城市二</option>
				<option>城市三</option>
</select>
										</div>
										<hr/>
										<label class="control-label">银行名称：</label>
										<div class="controls">
<select>
				<option>银行名称一</option>
				<option>银行名称二</option>
				<option>银行名称三</option>
</select>
										</div>
										<hr/>
										<label class="control-label">支行名称：</label>
										<div class="controls">
<select>
				<option>支行一</option>
				<option>支行二</option>
				<option>支行三</option>
</select>
										</div>
										<hr/>
	<?php /*
	@ since 1.5
	@ 返回结果直接显示在下面
	*/?>
									<hr/>
									<p>行号：<b><?php /*获得银行行号*/?></b></p>
									
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