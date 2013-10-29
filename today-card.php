<?php/*
	今日交易 卡片视图 页面
	@since 1.2
	@这个视图中所查询到的和LIST 视图一样	
*/?>
<?php include 'header.php';?>
<div id="search">
  <button title="搜索" style="color:#fff;margin-top:0;"><i class="icon-search icon-white"></i> 高级搜索</button>
</div>

<!--close-top-Header-menu-->
<div id="content">
  	<div id="content-header">
    <div id="breadcrumb"><a href="#" class="current">今日交易</a>
        </div>
        <?php/* 
        @ since 1.2
        @ 新增了视图切换下拉菜单	*/?>
     <div class="btn-group" style="top: -18px;left: 75px;">
		 <button data-toggle="dropdown" class="btn dropdown-toggle"style="padding: 5px;">视图方式<span class="caret"></span></button>
									  <ul class="dropdown-menu">
										<li><a id="list" href="today.php"><i class="icon-th-list"></i> 表视图</a></li>
										<li><a id="card" href="today-card.php"><i class="icon-th"></i> 卡片视图</a></li>
									  </ul>
									</div>
  </div>
  	<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
      <div id="search-box" class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>高级搜索</h5>
            <?php /*点击搜索显示resault.php 页面*/ ?>
            <div class="buttons"><a href="#" class="btn btn-mini btn-success"><i class="icon-search"></i> 开始搜索</a></div>
          </div>
          <div class="widget-content">
          <div class="row-fluid ">
          <div class="control-group span4">
										<label class="control-label">交易金额：</label>
										<div class="controls">
<select><?php/*搜索金额条件*/?>
				<option>全 部</option>
				<option>[100.00]–[1,000.00]</option>
				<option>[1,000.00]–[5,000.00]</option>
				<option>[5,000.00]–[10,000.00]</option>
				<option>[10,000.00]–[50,000.00]</option>
				<option>大于[50,000.00]</option>
</select>
										</div></div>
<div class="control-group span4">
										<label class="control-label">交易类型：</label>
										<div class="controls">

<select multiple><?php/*多选的搜索字段*/?>
				<option>全 部</option>								
				<option>消费</option>
				<option>消费撤销类</option>
				<option>退货</option>
				<option>预授权类</option>
				<option>预授权完成类</option>
											</select>
										</div>
</div>
<div class="control-group span4">
										<label class="control-label">交易状态：</label>
										<div class="controls">
<select><?php/*状态*/?>
 				<option>全 部</option>
				<option>成 功</option>
				<option>失 败</option>
				<option>未 知</option>

</select>
										</div></div>
          </div>
          </div>
      </div>
      <div class="row-fluid">
      <div id="data-list" class="span12">
      <?php/* 
        @ since 1.2
        卡片视图详细	*/?>
      	<div class="row-fluid" style="margin:0;">
      	<?php/* 
        @ since 1.2
        @ 根据交易状态判断 添加三种class 默认是：default-c 错误是：error-c 未知是：unkonow-c 
        @ 字段方面和list表示的是一样的。
        */?>
	      <div id="plane" class="widget-box default-c">
			  <div class="widget-title" >
				  <span class="icon"><i class="icon-ok icon-white"></i></span>
				  <h5>深圳凯莱洲际酒店</h5><h5 style="float:right;font-size:10px;">101947599</h5>
			  </div>
			  <div class="widget-content">
				  <p>11:20:32 12月4日<span style="float:right">人民币</span></p>
				  <p>消费<span style="float:right;font-size:36px">1,000.00</span></p>
			  </div>
			  <div class="widget-content">
				 <h5>移动终端<span style="float:right;">中国工商银行</span></h5>
			  <p>12345678<span style="float:right">4323 87** **** 1234</span></p>
			  </div>
			  
	      </div>
	      <div id="plane" class="widget-box error-c">
			  <div class="widget-title" >
				  <span class="icon"><i class="icon-question-sign icon-white"></i></span>
				  <h5>深圳凯莱洲际酒店</h5><h5 style="float:right;font-size:10px;">101947599</h5>
			  </div>
			  <div class="widget-content">
				  <p>11:20:32 12月4日<span style="float:right">人民币</span></p>
				  <p>消费<span style="float:right;font-size:36px">1,000.00</span></p>
			  </div>
			  <div class="widget-content">
				 <h5>移动终端<span style="float:right;">中国工商银行</span></h5>
			  <p>12345678<span style="float:right">4323 87** **** 1234</span></p>
			  </div>
			  
	      </div>
	      <div id="plane" class="widget-box error-c">
			  <div class="widget-title" >
				  <span class="icon"><i class="icon-remove icon-white"></i></span>
				  <h5>深圳凯莱洲际酒店</h5><h5 style="float:right;font-size:10px;">101947599</h5>
			  </div>
			  <div class="widget-content">
				  <p>11:20:32 12月4日<span style="float:right">人民币</span></p>
				  <p>消费<span style="float:right;font-size:36px">1,000.00</span></p>
			  </div>
			  <div class="widget-content" >
				 <h5>移动终端<span style="float:right;">中国工商银行</span></h5>
			  <p>12345678<span style="float:right">4323 87** **** 1234</span></p>
			  </div>
			  
	      </div>
	      <div id="plane" class="widget-box unknow-c">
			  <div class="widget-title">
				  <span class="icon"><i class="icon-remove icon-white"></i></span>
				  <h5>深圳凯莱洲际酒店</h5><h5 style="float:right;font-size:10px;">101947599</h5>
			  </div>
			  <div class="widget-content">
				  <p>11:20:32 12月4日<span style="float:right">人民币</span></p>
				  <p>消费<span style="float:right;font-size:36px">1,000.00</span></p>
			  </div>
			  <div class="widget-content" >
				 <h5>移动终端<span style="float:right;">中国工商银行</span></h5>
			  <p>12345678<span style="float:right">4323 87** **** 1234</span></p>
			  </div>
			  
	      </div>
      	</div>
      	<?php/* 
        @ since 1.2
        @ 这里是翻页样式，每页15个结果。
        */?> 
      	<div class="pagination alternate" style="text-align:center">
      	<p>当前显示 1 到 15 条，共 35 条记录</p>
              <ul>
                <li class="disabled"><a href="#">上一页</a></li>
                <li class="active"> <a href="#">1</a> </li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">下一页</a></li>
              </ul>
            </div>
      </div>
      
      <div id="detail" class="span3" style="display:none;">
	                <div class="widget-box" style="">
						<div class="widget-title">
							<span class="icon"><i class="icon-th"></i></span> 
							<h5>详细信息</h5>
							<div id="close-detail" class="buttons"><a href="#" class="btn btn-mini"><i class="icon-remove"></i>关闭</a></div>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered">
								<a href="<?php /*这个是个下载链接，至今字段不明*/?>"class="btn btn-large btn-block">导出为CSV文件</a>
									<thead>
										<tr>
											<th>交易信息</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>交易金额</td>
											<td><?php /*TRANS_AMT （要有千分符）*/?>8,850.00</td>
										</tr>
										<tr>
											<td>交易时间</td>
											<td><?php /*TRANS_DATETIME*/?>2013/08/11 11:12:11</td>
										</tr>
										<tr>
											<td>刷卡方式</td>
											<td><?php /*SRV_ENTRY_MODE*/?></td>
										</tr>
										<tr>
											<td>交易类型</td>
											<td><?php /*TXN_TYPE*/?>消费</td>
										</tr>
										<tr>
											<td>流水号</td>
											<td><?php /*TERM_TRACE_NUM*/?>419287975</td>
										</tr>
										<tr>
											<td>授权号</td>
											<td><?php /*RESP_AUTH_CODE*/?>123456</td>
										</tr>
									</tbody>
								
									<thead>
										<tr>
											<th>支付帐号信息</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>卡号</td>
											<td><?php /*ACCT_NUM*/?>4324 87** **** 1234</td>
										</tr>
										<tr>
											<td>发卡银行</td>
											<td><?php /*CARD_BRAND*/?>中国工商银行上海淞沪分行</td>
										</tr>
										<tr>
											<td>卡片类型(<?php /*CARD_BRAND 要做个case 判断 不同结果显示不同icon*/?>)</td>
											<td<?php /*CARD_TYPE*/?>>-</td>
										</tr>
									</tbody>
								
									<thead>
										<tr>
											<th>商户信息</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>商户号</td>
											<td><?php /*MER_CODE*/?>12546564567</td>
										</tr>
										<tr>
											<td>终端号</td>
											<td><?php /*TERM_ID*/?>123467</td>
										</tr>
										<tr>
											<td>商户名称</td>
											<td><?php /*MER_NAME*/?></td>
										</tr>
										<tr>
											<td>地址</td>
											<td><?php /*跟据mer_code 查找TBL_MER_INFO表中的 MER_ADDR*/?></td>
										</tr>
										<tr>
											<td>联系人</td>
											<td><?php /*跟据mer_code 查找TBL_MER_INFO表中的 MER_REL_MAN*/?></td>
										</tr>
										<tr>
											<td>联系电话</td>
											<td><?php /*跟据mer_code 查找TBL_MER_INFO表中的 MER_REL_TEL*/?></td>
										</tr>
										<tr>
											<td>邮箱</td>
											<td><?php /*跟据mer_code 查找TBL_MER_INFO表中的 MER_EMAIL*/?></td>
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


<div class="row-fluid">
      <div id="footer" class="span12">&copy; 2013 <a href="http://#">上海讯联数据服务有限公司</a> 版权所有  |  <a href="http://#">联系方式</a></div>
</div>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script>
<script src="js/maruti.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<?php /*本页面的JS*/?>
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/maruti.tables.js"></script>
</body>
</html>
