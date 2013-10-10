<?php/*
	今日交易 页面
	
	这个页面中所有查询，需要通过查询过滤器。根据权限，将搜索变成默认搜索。
	
*/?>
<?php include 'header.php';?>
<div id="search">
  <button title="搜索" style="color:#fff;margin-top:0;"><i class="icon-search icon-white"></i> 高级搜索</button>
</div>
<!--close-top-Header-menu-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="#" class="current">今日交易</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
      <div id="search-box" class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>高级搜索</h5>
            <?php/*	点击搜索显示resault.php 页面*/?>
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
      <div id="data-list" class="span9">
              <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>今日交易 <?php/*获得今天的日期，格式如后方*/?>2013/05/11 星期三</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>交易时间</th>
                  <th>商户信息</th>
                  <th>终端信息</th>
                  <th>交易类型</th>
                  <th style="text-align:right;">交易金额</th>
                  <th>帐号信息</th>
                  <th>交易结果</th>
                </tr>
              </thead>
              <?php/*
	              根据查询过滤器。
				  查询表为：TBL_TRANS_SETT_HISTORY_A，TBL_TRANS_SETT_HISTORY_B
				  默认查询字段：今天的时间
				  排序方式：按最新时间
				  *******
				  根据MER_CODE 查询 TBL_MER_INFO 中的 MER_NAME
				  根据TERM_ID 查询 TBL_TERM_INFO 中的 TERM_TYPE
				  根据BEFORE_TRANS_CODE 查询 TBL_TXN_TYPE 中的 TXN_TYPE
				  根据TRANS_CURR 查询 ？？？？
				  
				  字段如下：
				  <tr>
                  <td>TRANS_DATETIME</td>
                  <td><small>MER_NAME</small><br/>MER_CODE</td>
                  <td><small>TERM_TYPE</small><br/>TERM_ID</td>
                  <td>TXN_TYPE</td>
                  <td style="text-align:right;"><small>TRANS_CURR</small><br/>TRANS_AMT （要有千分符）</td>
                  <td><small>CARD_BRAND</small><br/>ACCT_NUM</td>
                  <td><small>（如果结果为00则显示icon-ok，如果不为0，则显示-还没做。。）<i class="icon-ok"></i> RESP_AUTH_CODE</small><br/>RESP_AUTH_CODE</td>
                </tr>
              */?>
              <tbody>
                <tr>
                  <td>11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>君越国际培训中心</small><br/>122227510</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>云南土家菜馆</small><br/>101234501</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>云南土家菜馆</small><br/>101234501</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>云南土家菜馆</small><br/>101234501</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>君越国际培训中心</small><br/>122227510</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                 <td><small>云南土家菜馆</small><br/>101234501</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>11111111</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>11111111</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>11111111</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                 <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> 11:30:11</td>
                  <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
              </tbody>
            </table>
          </div>
              </div></div>
              <?php /*
	              以下为详细信息页面。
	              需要做个JQUERY或者php的ajax刷新。
	              当点击以上<TR>标签，将详细信息传值给详细信息框。
	              JQUERY 还需要做个，当点击该<tr>时，高亮显示。
	              
              */?>
              <div id="detail" class="span3">
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