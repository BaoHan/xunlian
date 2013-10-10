<?php/*config 页面*/?>
<?php include 'header.php';?>
<div id="search">
  <button title="搜索" style="color:#fff;margin-top:0;"><i class="icon-search icon-white"></i> 高级搜索</button>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="" class="tip-bottom" data-original-title="返回首页"><i class="icon-home"></i> 控制面板</a> <a href="#" class="current">商户管理</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
      <div id="search-box" class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>高级搜索</h5>
            <div class="buttons"><a href="#" class="btn btn-mini btn-success"><i class="icon-search"></i> 开始搜索</a></div>
          </div>
          <div class="widget-content">
          <div class="row-fluid ">
          <form action="#" method="get" class="">
          <div class="control-group span2">
										<label class="control-label">终端编号：</label>
										<div class="controls">
											<input type="text" placeholder="输入代理名称">
										</div>
									</div>
          <div class="control-group span2">
										<label class="control-label">商户编号：</label>
										<div class="controls">
											<input type="text" placeholder="输入代理ID">
										</div>
									</div>
		<div class="control-group span2">
										<label class="control-label">商户名称：</label>
										<div class="controls">
											<input type="text" placeholder="选择所在省市">
										</div>
									</div>
		  <div class="control-group span2">
										<label class="control-label">代理编号：</label>
										<div class="controls">
											<input type="text" placeholder="输入代理名称">
										</div>
									</div>
          <div class="control-group span2">
										<label class="control-label">代理名称：</label>
										<div class="controls">
											<input type="text" placeholder="输入代理ID">
										</div>
									</div>


          </form>
          </div>
          </div>
      </div>
      <div class="row-fluid">
      <div id="data-list" class="span9">
              <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span> 
            <h5>商户列表</h5><div class="buttons" style="float:left !important;"><a  href="#myArrange" data-toggle="modal" class="btn btn-mini">分配给账户</a></div>
            <div id="myArrange" class="modal hide" aria-hidden="true" style="display: none;">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>选择代理账户</h3>
              </div>
              <div class="modal-body">
                <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>代理ID</th>
              <th>代理名称</th>
              <th>代理帐号</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"></td>
              <td>15523322</td>
              <td>什么什么代理</td>
              <td>ncacee@name.com</td>
            </tr>
            <tr>
              <td><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"></td>
              <td>15523322</td>
              <td>什么什么代理</td>
              <td>ncacee@name.com</td>
            </tr>
            <tr>
              <td><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"></td>
              <td>15523322</td>
              <td>什么什么代理</td>
              <td>ncacee@name.com</td>
            </tr>
            <tr>
              <td><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"></td>
              <td>15523322</td>
              <td>什么什么代理</td>
              <td>ncacee@name.com</td>
            </tr>
            <tr>
              <td><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"></td>
              <td>15523322</td>
              <td>什么什么代理</td>
              <td>ncacee@name.com</td>
            </tr>
            <tr>
              <td><input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"></td>
              <td>15523322</td>
              <td>什么什么代理</td>
              <td>ncacee@name.com</td>
            </tr>
          </tbody>
      	</table>
              </div>
              <div class="modal-footer"> <a data-dismiss="modal" class="btn btn-primary" href="#">确定</a> <a data-dismiss="modal" class="btn" href="#">取消</a> </div>
            </div>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped with-check data-table">
              <thead>
                <tr>
                <th><i class="icon-resize-vertical"></i></th>
                  <th>商户代码</th>
                  <th>商户名称</th>
                  <th>代理编号</th>
                  <th>代理名称</th>
                  <th>银行扣率信息</th>
                  <th>MCC</th>
                  <th>状态</th>
                </tr>
              </thead>
              <tbody>
              <tr>
              	<td><input type="checkbox" /></td>
                  <td>018581058120008</td>
                  <td>广州市越秀区弥敦道茶餐厅</td>
                  <td>2342555</td>
                  <td>-</td>
                  <td>0.2%</td>
                  <td>156</td>
                  <td>正常</td>
              </tr>	
               </tbody>
            </table>
          </div>
              </div></div>
              <div  id="detail" class="span3">
	                <div class="widget-box" style="">
						<div class="widget-title">
							<span class="icon"><i class="icon-th"></i></span> 
							<h5>详细信息</h5>
							<div id="close-detail" class="buttons"><a href="#" class="btn btn-mini"><i class="icon-remove"></i>关闭</a></div>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>商户信息</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>代理商代码</td>
											<td>018581058120008</td>
										</tr>
										<tr>
											<td>商户名称</td>
											<td>广州市越秀区弥敦道茶餐厅</td>
										</tr>
										<tr>
											<td>代理商地区</td>
											<td>广州市</td>
										</tr>
										<tr>
											<td>分润信息</td>
											<td>-</td>
										</tr>
										<tr>
											<td>联系人</td>
											<td>-</td>
										</tr>
										<tr>
											<td>电话</td>
											<td>-</td>
										</tr>
										<tr>
											<td>邮箱</td>
											<td>-</td>
										</tr>
									</tbody>
								
									<thead>
										<tr>
											<th>账户信息</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>登入邮箱</td>
											<td>username@company.com</td>
										</tr>
										<tr>
											<td>账户名称</td>
											<td>冯燕兰</td>
										</tr>
										<tr>
											<td>账户</td>
											<td>6225211082519876</td>
										</tr>
										<tr>
											<td>银行名称</td>
											<td>上海浦东发展银行广州东山支行</td>
										</tr>
										<tr>
											<td>银行代码</td>
											<td>310581000017310581000017</td>
										</tr>
										<tr>
											<td>法人代表</td>
											<td>冯燕兰</td>
										</tr>
										<tr>
											<td>负责人</td>
											<td>-</td>
										</tr>
										
									</tbody>
								
									<thead>
										<tr>
											<th>联系方式</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>联系人</td>
											<td>冯燕兰</td>
										</tr>
										<tr>
											<td>电话</td>
											<td>83586789</td>
										</tr>
										<tr>
											<td>传真</td>
											<td>-</td>
										</tr>
										<tr>
											<td>电子邮箱</td>
											<td>-</td>
										</tr>
										<tr>
											<td>地址</td>
											<td>广州市越秀区淘金路54号首层E、D房</td>
										</tr>
										<tr>
											<td>邮编</td>
											<td>510000</td>
										</tr>
									</tbody>
									<thead>
										<tr>
											<th>手续费方案</th>
											<th>费率</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>银联境外卡</td>
											<td>固定百分比 1.100%</td>
										</tr>
										<tr>
											<td>银联境内卡</td>
											<td>固定百分比 1.100%</td>
										</tr>
									</tbody>
								</table>
							</div>
	                </div>
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
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.tables.js"></script>
</body>
</html>