<?php/*
	@ since 1.2
	@ 搜索结果 card 布局
	*/?>
<?php include 'header.php';?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="history.php" class="current">交易查询</a>    </div>
    <?php /*
	    @ since 1.2
	    @ 删除查询结果的 a 标签
	    @ 添加了视图切换下拉菜单
    */?>
    <div class="btn-group" style="top: -18px;left: 75px;">
		 <button data-toggle="dropdown" class="btn dropdown-toggle"style="padding: 5px;">视图方式<span class="caret"></span></button>
									  <ul class="dropdown-menu">
										<li><a id="list" href="resault.php"><i class="icon-th-list"></i> 表视图</a></li>
										<li><a id="card" href="resault-card.php"><i class="icon-th"></i> 卡片视图</a></li>
									  </ul>
									</div>

  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
     
      <div class="row-fluid">
      <?php /*
	    @ since 1.2
	    @ 修改默认list视图，由class span9 修改为 span12
    */?>

      <div id="data-list" class="span12">
      	 <?php /* 
        @ since 1.2
        卡片视图详细	*/?>
      	<div class="row-fluid" style="margin:0;">
      	<?php /* 
        @ since 1.2
        @ 根据交易状态判断 添加三种class 默认是：default-c 错误是：error-c 未知是：unkonow-c 
        @ 字段方面和list表示的是一样的。
        @ since 1.3
        @ 增加了 <ul id="itemContainer">
        @ 原本 div 标签换成 li
        @ class widget-content 后面增加了 top 和 bot class 用来做样式 

        */?>
        <ul id="itemContainer">
	      <li id="plane" class="widget-box default-c">
			  <div class="widget-title" >
				  <span class="icon"><i class="icon-ok icon-white"></i></span>
				  <h5>深圳凯莱洲际酒店</h5><h5 style="float:right;font-size:10px;">101947599</h5>
			  </div>
			  <div class="widget-content top">
				  <p>11:20:32 12月4日<span style="float:right">人民币</span></p>
				  <p>消费<span style="float:right;font-size:36px">1,000.00</span></p>
			  </div>
			  <div class="widget-content bot">
				 <h5>移动终端<span style="float:right;">中国工商银行</span></h5>
			  <p>12345678<span style="float:right">4323 87** **** 1234</span></p>
			  </div>
			  
	      </li>
	      <li id="plane" class="widget-box error-c">
			  <div class="widget-title" >
				  <span class="icon"><i class="icon-question-sign icon-white"></i></span>
				  <h5>深圳凯莱洲际酒店</h5><h5 style="float:right;font-size:10px;">101947599</h5>
			  </div>
			  <div class="widget-content top">
				  <p>11:20:32 12月4日<span style="float:right">人民币</span></p>
				  <p>消费<span style="float:right;font-size:36px">1,000.00</span></p>
			  </div>
			  <div class="widget-content bot">
				 <h5>移动终端<span style="float:right;">中国工商银行</span></h5>
			  <p>12345678<span style="float:right">4323 87** **** 1234</span></p>
			  </div>
			  
	      </li>
	      <li id="plane" class="widget-box error-c">
			  <div class="widget-title" >
				  <span class="icon"><i class="icon-remove icon-white"></i></span>
				  <h5>深圳凯莱洲际酒店</h5><h5 style="float:right;font-size:10px;">101947599</h5>
			  </div>
			  <div class="widget-content top">
				  <p>11:20:32 12月4日<span style="float:right">人民币</span></p>
				  <p>消费<span style="float:right;font-size:36px">1,000.00</span></p>
			  </div>
			  <div class="widget-content bot" >
				 <h5>移动终端<span style="float:right;">中国工商银行</span></h5>
			  <p>12345678<span style="float:right">4323 87** **** 1234</span></p>
			  </div>
			  
	      </li>
	      <li id="plane" class="widget-box unknow-c">
			  <div class="widget-title">
				  <span class="icon"><i class="icon-remove icon-white"></i></span>
				  <h5>深圳凯莱洲际酒店</h5><h5 style="float:right;font-size:10px;">101947599</h5>
			  </div>
			  <div class="widget-content top">
				  <p>11:20:32 12月4日<span style="float:right">人民币</span></p>
				  <p>消费<span style="float:right;font-size:36px">1,000.00</span></p>
			  </div>
			  <div class="widget-content bot" >
				 <h5>移动终端<span style="float:right;">中国工商银行</span></h5>
			  <p>12345678<span style="float:right">4323 87** **** 1234</span></p>
			  </div>
			  
	      </li>
        </ul>
      	</div>
      	<?php /* 
        @ since 1.2
        @ 这里是翻页样式，每页15个结果。
        @ since 1.3
        @ 将原本UL和LI标签删除 ，改为 div.holder 自动生成页码
        */?> 
      	<div class="pagination alternate" style="text-align:center">
      	<p>当前显示 1 到 15 条，共 35 条记录</p>
         <div class="holder"></div>
            </div>
      
      </div>
              
              <?php /*
	              以下为详细信息页面。
	              需要做个JQUERY或者php的ajax刷新。
	              当点击以上<TR>标签，将详细信息传值给详细信息框。
	              JQUERY 还需要做个，当点击该<tr>时，高亮显示。
	              
              */?>
                    <?php /*
	    @ since 1.2
	    @ 将ID detail 的可见修改为 display：none
					*/?>
              <div id="detail" class="span3" style="display:none;">
	                <div class="widget-box" style="">
						<div class="widget-title">
							<span class="icon"><i class="icon-th"></i></span> 
							<h5>详细信息</h5>
							<div id="close-detail" class="buttons"><a href="#" class="btn btn-mini"><i class="icon-remove"></i>关闭</a></div>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered">
								<?php /*
									@ since 1.5.1
									@ 导出CSV按钮被删除
								*/ ?>
								
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
											<th>清算类信息</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>手续费</td>
											<td><?php /*MER_FEE_AMT*/?></td>
										</tr>
										<tr>
											<td>净清算额</td>
											<td><?php /*MER_SETT_AMT-MER_FEE_AMT*/?></td>
										</tr>
										<tr>
											<td>手续费标准</td>
											<td><?php /*跟据DISC_CD_MER 查DISC_CD_MER表中的nm字段*/?></td>
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
											<td>4324 87** **** 1234</td>
										</tr>
										<tr>
											<td>发卡银行</td>
											<td>中国工商银行上海淞沪分行</td>
										</tr>
										<tr>
											<td>借贷记(logo)</td>
											<td>-</td>
										</tr>
									</tbody>
								
									<thead>
										<tr>
											<th>商户信息</th>
											<th>数 据</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>商户号</td>
											<td>12546564567</td>
										</tr>
										<tr>
											<td>终端号</td>
											<td>123467</td>
										</tr>
										<tr>
											<td>终端名称</td>
											<td>-</td>
										</tr>
										<tr>
											<td>地址</td>
											<td>-</td>
										</tr>
										<tr>
											<td>联系人</td>
											<td>-</td>
										</tr>
										<tr>
											<td>联系电话</td>
											<td>-</td>
										</tr>
										<tr>
											<td>邮箱</td>
											<td>-</td>
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
<?php /*
	@since 1.3
	@加入css 和js*/?>
<link rel="stylesheet" href="css/animate.css">
<script src="js/jPages.min.js"></script>
</body>
</html>


</html>