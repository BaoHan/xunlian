<?php /*
	查询结果页面
	
	
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
              <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>查询结果</h5>
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
                  <th>清算状态</th>
                  <th>交易结果</th>
                </tr>
              </thead>
              <?php /*
	              根据查询过滤器。
				  查询表为：历史记录查 TBL_TRANS_SETT_HISTORY_A，TBL_TRANS_SETT_HISTORY_B表
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
              */ ?>

              <tbody>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>君越国际培训中心</small><br/>122227510</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>云南土家菜馆</small><br/>101234501</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>云南土家菜馆</small><br/>101234501</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>云南土家菜馆</small><br/>101234501</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>君越国际培训中心</small><br/>122227510</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                 <td><small>云南土家菜馆</small><br/>101234501</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳天一酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>11111111</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>11111111</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>11111111</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                 <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>深圳凯莱洲际酒店</small><br/>101947599</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td><td>清算</td>
                  <td><small><i class="icon-ok"></i> 00</small><br/>123456</td>
                </tr>
                <tr>
                  <td> <small>2013-09-18</small><br/>11:39:11</td>
                  <td><small>中山香烟制作场</small><br/>201941299</td>
                  <td><small>移动终端</small><br/>12345678</td>
                  <td>消费</td>
                  <td style="text-align:right;"><small>人民币</small><br/>1,000.00</td>
                  <td><small>中国工商银行</small><br/>4323 87** **** 1234</td>
                <td>清算</td>
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
								<a href="<?php /*这个是个下载链接，至今字段不明*/ ?>" class="btn btn-large btn-block">导出为CSV文件</a>

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
</body>
</html>