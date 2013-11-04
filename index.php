<?php /*
	项目解释：
	这是一个交易查询的网站，通过CMS的用户权限管理，来提供不同的查询结果。
	**********
		
	用户的创建，是由高层级来生成的。如超级管理员，生成管理员账户，管理员账户生成机构账户，机构账户生成代理商。
	权限分配由高到低如下：
	1.超级管理员：能够登入后台，做一些网站的配置。能够登入前台，查询所有商户，查看所有条件。没有限制。
	2.管理员：仅能登入前台，查询所有商户，能够生成机构账户，没有限制。
	3.机构账户：仅能登入前台，默认查询条件为（机构代码），
	4.代理账户：仅能进入前台，默认查询条件为（机构代码+代理商代码），不能生成任何账户。
	5.商户：仅能进入前台，默认查询条件为（商户代码）。
	
	账户字段：机构代码，代理商代码，商户代码。
	判断方式
	机构账户：机构代码（有），代理商代码（无），商户代码（无）
	代理商：机构代码（有），代理商代码（有），商户代码（查询所有商户有代理商代码的）
	商户账户：机构代码（有），代理商代码（有/无），商户代码（有）
		如果- 有机构，代理，商户。则该商户是某机构代理下商户
		如果- 有机构，无代理。则该商户是机构下，未分配代理的商户
		
	**********
	
	网站需要商户管理功能：查询该（机构代码）下的所有商户，机构有权生成代理商，并且在商户管理页面将，该商户的代码，绑定到生成的代理代码中。
	代理商用户中会有一个，代理商代码字段。会给所有商户帐号中，添加该字段代理商代码。如果为添加，该商户显示未分类。
	
	**********
	首页介绍：这里主要是一些统计的内容。
	
	**********
	查询过滤器：需要设计个这样的php，根据权限不同，将不同的条件设为默认查询。
	千分符：凡是设计到金额的，需要千分符 如 ￥1,000,000.00
*/?>





<?php include 'header.php';?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="返回首页" class="tip-bottom"><i class="icon-home"></i> <?php/*获得当前页面的title*/?>首 页</a></div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12"> 
        <div class="widget-box">
          <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span>
            <h5>本周数据</h5>
            <?php/*刷新数据按钮，等同于刷新cookie*/?>
            <div class="buttons"><a href="#" class="btn btn-mini"><i class="icon-refresh"></i> 刷新数据</a></div>
          </div>
          <div class="widget-content">
          <div class="row-fluid">
            <div class="span8">
            <?php/*以下为左边线图的数据，用的插件FLOT，读取数据库，绘制图形。暂时数据库没准备好。	            
            */?>
              <div class="chart"></div>
            </div>
            <div class="span4">
            <?php/*以下数据为右边本周统计*/?>
              <ul class="stat-boxes2">
                    <li>
               <?php/*@@这里用FLOT JS 来设置，只需要输入数据，就能形成图表。因为没有数据库，暂时不做。*/?>     
        <div class="left peity_bar_good"><span><?php/*7个数据，分别读取数据库里面的字段就行了。以下类似。*/?>
200,4123,921,744,120,1024,1211</span></div>
        <div class="right"> <strong>￥123,759.00</strong> 当前交易金额（元） </div>
      </li>
      <li>
        <div class="left peity_bar_neutral"><span>20,15,18,14,10,9,9,9</span></div>
        <div class="right"> <strong>1433</strong> 当前交易笔数 </div>
      </li>
      <li>
        <div class="left peity_bar_bad"><span>3,5,9,7,12,20,10</span></div>
        <div class="right"> <strong>12</strong> 当前退货笔数 </div>
      </li>
      <li>
        <div class="left peity_bar_good"><span>12,6,9,23,14,10,17</span></div>
        <div class="right"> <strong>7</strong> 当前失败笔数 </div>
      </li>
    </ul>                
             
            </div>
          </div>
        </div>
          </div>
        <div class="row-fluid">
        <div class="span6">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-eye-open"></i>
								</span>
								<?php/*和上面一样，只需要动态获得数据。数据库没准备好*/?>
								<h5>今日统计</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="text-align:left;"></th>
											<th style="text-align:left;">单位</th>
											<th style="text-align:right;">数据</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>消费交易量</td>
											<td>元 （人民币）</td>
											<td style="text-align:right;">￥18,0858.00</td>
										</tr>										
										<tr>
											<td>退货交易量</td>
											<td>元 （人民币）</td>
											<td style="text-align:right;">￥5,670.00</td>
										</tr>
										<tr>
											<td>预授权交易量</td>
											<td>元 （人民币）</td>
											<td style="text-align:right;">￥5,670.00</td>
										</tr>
										<tr>
											<td>预授权完成交易量</td>
											<?php /*since 1.4.1*/?>
											<td>元 （人民币）</td>
											<td style="text-align:right;">2460</td>
										</tr>
										<tr>
											<td>成功交易笔数</td>
											<td >笔</td>
											<td style="text-align:right;">14</td>
										</tr>
										<tr>
											<td>失败交易笔数</td>
											<td>笔</td>
											<td style="text-align:right;">2345</td>
										</tr>
										</tbody>
									</table>
							</div>
						</div>
					</div>
              
              <div class="span6">
                <div class="widget-box">
                  <div class="widget-title"> <span class="icon"> <i class="icon-refresh"></i> </span>
                    <h5>新闻通知</h5>
                  </div>
                  <?php /*获得超级管理员，后台设置的文章。文章详细查看页面，还没有做，第二阶段再做。*/?>
                  <div class="widget-content nopadding updates">
                    <div class="new-update clearfix"><i class="icon-ok-sign"></i>
                      <div class="update-done"><a title="" href="#"><strong>系统全面维护至明晨8点</strong></a> <span>兹定于今日19时进行系统维护，至明日8点可正常访问</span> </div>
                      <div class="update-date"><span class="update-day">20</span>8月</div>
                    </div>
                    <div class="new-update clearfix"> <i class="icon-gift"></i> <span class="update-notice"> <a title="" href="#"><strong>中秋节临近，CardinfoLink团队送上最真挚的问候。</strong></a> <span>中秋快乐！！！月饼拿来！</span> </span> <span class="update-date"><span class="update-day">11</span>8月</span> </div>
                    <div class="new-update clearfix"> <i class="icon-move"></i> <span class="update-alert"> <a title="" href="#"><strong>版本更新至1.5.0</strong></a> <span>重新优化了版面结构，加入了移动端的可视化界面。</span> </span> <span class="update-date"><span class="update-day">07</span>8月</span> </div>
                    <div class="new-update clearfix"> <i class="icon-leaf"></i> <span class="update-done"> <a title="" href="#"><strong>其他的一些新闻内容可以发布于此</strong></a> <span>发布最新的通知和消息，提高用户黏性，广告也能发布于此。</span> </span> <span class="update-date"><span class="update-day">05</span>8月</span> </div>
                    <div class="new-update clearfix"> <i class="icon-question-sign"></i> <span class="update-notice"> <a title="" href="#"><strong>系统更新至1.0.3</strong></a> <span>本次更新我们提升的交互体验。</span> </span> <span class="update-date"><span class="update-day">01</span>8月</span> </div>
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
<?php /*以下是公共JS*/?>
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/maruti.js"></script>  
<?php /*以下是首页需要载入的JS*/?>
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/maruti.dashboard.js"></script> 
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>



</body>

</html>
