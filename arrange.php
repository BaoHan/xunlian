<?php/*
	商户管理页面
	页面功能：
	@ 高级搜索
	@ 分配商户给代理商
	@ 商户列表
	@ 代理账户权限，不显示此页。
*/?>
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
          <?php/*高级搜索模块
	          搜索结果页面，也是该页面，你们也可以复制本php，来作为搜索结果页面。
          */?>
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
      <?php/*搜索结果列表 和之前一样 用的 data-table*/?>
      <div id="data-list" class="span9">
              <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span> 
            <h5>商户列表</h5><div class="buttons" style="float:left !important;"><a  href="#myArrange" data-toggle="modal" class="btn btn-mini"><?php/*这个按钮会让用户分配账户*/?>分配给账户</a></div>
            <div id="myArrange" class="modal hide" aria-hidden="true" style="display: none;">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>选择代理账户</h3>
              </div>
              <div class="modal-body">
              <?php/*这里载入该机构用户权限下的所有代理账户。并将选定的商户添加为选择代理账户的默认查询条件。*/?>
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
                <th>机构代码</th>
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
              <?php/*通过用户默认的机构代码查询表 TBL_MER_INFO */?>
              	<td><input type="checkbox" /></td>
              	<td><?php/*当前用户绑定的机构代码*/?>1234566</td>
                  <td><?php/*MER_CODE*/?>018581058120008</td>
                  <td><?php/*MER_NAME*/?>广州市越秀区弥敦道茶餐厅</td>
                  <td><?php/*显示代理商ID 从账户管理生成所填写的字段*/?>2342555</td>
                  <td><?php/*显示代理账户名称 从账户管理生成所填写的字段*/?>-</td>
                  <td><?php/*用 MER_CODE 查 TBL_SETT_MER_SCHEME*/?>0.2%</td>
                  <td><?php/*MER_TYPE*/?>156</td>
                  <td><?php/*MER_STATUS*/?>正常</td>
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
											<td>机构代码</td>
											<td><?php/*当前用户绑定的机构代码*/?>018581058120008</td>
										</tr>
										<tr>
											<td>代理商代码</td>
											<td><?php/*显示代理商ID 从账户管理生成所填写的字段*/?>018581058120008</td>
										</tr>
										<tr>
											<td>商户名称</td>
											<td><?php/*MER_NAME*/?>广州市越秀区弥敦道茶餐厅</td>
										</tr>
										<tr>
											<td>代理商地区</td>
											<td><?php/*MER_CITY */?>广州市</td>
										</tr>
										<tr>
											<td>分润信息</td>
											<td><?php/*<?php/*用 MER_CODE 查 TBL_SETT_MER_SCHEME*/?>*/?>-</td>
										</tr>
										<tr>
											<td>联系人</td>
											<td><?php/*MER_REL_MAN*/?>-</td>
										</tr>
										<tr>
											<td>电话</td>
											<td><?php/*MER_REL_TEL*/?>-</td>
										</tr>
										<tr>
											<td>邮箱</td>
											<td><?php/*MER_EMAIL*/?>-</td>
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
											<td>账户名称</td>
											<td><?php/**/?>冯燕兰</td>
										</tr>
										<tr>
											<td>账户</td>
											<td><?php/**/?>6225211082519876</td>
										</tr>
										<tr>
											<td>银行名称</td>
											<td><?php/*MER_CB_NAME */?>上海浦东发展银行广州东山支行</td>
										</tr>
										<tr>
											<td>银行代码</td>
											<td><?php/*MER_CB_CODE */?>310581000017310581000017</td>
										</tr>
										<tr>
											<td>法人代表</td>
											<td><?php/*MER_CORP */?>冯燕兰</td>
										</tr>
										<tr>
											<td>负责人</td>
											<td><?php/*MER_MASTER */?>-</td>
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
											<td><?php/*MER_REL_MAN */?>冯燕兰</td>
										</tr>
										<tr>
											<td>电话</td>
											<td><?php/*MER_REL_TEL */?>83586789</td>
										</tr>
										<tr>
											<td>传真</td>
											<td><?php/*MER_FAX */?>-</td>
										</tr>
										<tr>
											<td>电子邮箱</td>
											<td><?php/*MER_EMAIL */?>-</td>
										</tr>
										<tr>
											<td>地址</td>
											<td><?php/*MER_ADDR */?>广州市越秀区淘金路54号首层E、D房</td>
										</tr>
										<tr>
											<td>邮编</td>
											<td><?php/*MER_POSTCODE*/?>510000</td>
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
											<td><?php/*用 MER_CODE 查 TBL_SETT_MER_SCHEME*/?>固定百分比 1.100%</td>
										</tr>
										<tr>
											<td>银联境内卡</td>
											<td><?php/*用 MER_CODE 查 TBL_SETT_MER_SCHEME*/?>固定百分比 1.100%</td>
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