<?php/*创建帐号，商户管理页面
	
	功能：
	@	创建固定权限的账户
	@	创建的字段是写入用户的自定义字段
	@
	
	@ since 1.4
	@ 将本页的 creator.php 命名为creator-shanghu.php
	@ 新增商户权限，也就是用户 绑定商户。
*/?>
<?php include 'header.php';?>
<div id="search">
  <button title="搜索" style="color:#fff;margin-top:0;"><i class="icon-search icon-white"></i> 高级搜索</button>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="#" class="current">账户管理</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
      <div  id="search-box" class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>高级搜索</h5>
            <div class="buttons"><a href="#" class="btn btn-mini btn-success"><i class="icon-search"></i> 开始搜索</a></div>
          </div>
          <div class="widget-content">
          <div class="row-fluid ">
          <form action="#" method="get" class="">
            	<?php /*
	          @ since 1.4
	          @ 修改搜索条件
          */?>
          <div class="control-group span4">
										<label class="control-label">商户名称：</label>
										<div class="controls">
											<input type="text" placeholder="输入代理名称">
										</div>
									</div>
          <div class="control-group span4">
										<label class="control-label">商户代码：</label>
										<div class="controls">
											<input type="text" placeholder="输入代理ID">
										</div>
									</div>
		<div class="control-group span4">
										<label class="control-label">按照城市搜索：</label>
										<div class="controls">
											<input type="text" placeholder="选择所在省市">
										</div>
									</div>

          </form>
          </div>
          </div>
      </div>
      <div class="row-fluid">
      <div class="span12">
              <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i>
            </span> 
            <h5>商户账户列表</h5><div class="buttons" style="float:left !important;"><a  href="#shanghu" data-toggle="modal" class="btn btn-mini">+ 创建商户账户</a></div>
            <div id="shanghu" class="modal hide" aria-hidden="true" style="display: none;">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>创建商户账户</h3>
              </div>
              <div class="modal-body">
               	<form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
                                   
                                    <div class="control-group">
                                        <label class="control-label">商户代码</label>
                                        <div class="controls">
                                            <input type="text">	*
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">商户名称</label>
                                        <div class="controls">
                                            <input type="text" > *
                                            
                                        </div>
                                    </div>
                                        <div class="control-group">
                                        <label class="control-label">商户地区</label>
                                        <div class="controls">
                                            <input type="text" >
                                            
                                        </div>
                                        </div>                                     
                                        <div class="control-group">
                                          <label class="control-label">联系人</label>
                                        <div class="controls">
                                            <input type="text" >
                                        </div>   
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">电话</label>
                                        <div class="controls">
                                            <input type="text" >                                           
                                        </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">登入账户</label>
                                        <div class="controls">
                                            <input type="text" >  *                                          
                                        </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">邮箱</label>
                                        <div class="controls">
                                            <input type="text" >  *                                 
                                        </div>
                                        
                                    </div>                                    
                                </form>
               
               </div>
              <div class="modal-footer"> <a data-dismiss="modal" class="btn btn-primary" href="#">确定</a> <a data-dismiss="modal" class="btn" href="#">取消</a> </div>
            </div>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>商户代码</th>
                  <th>商户名称</th>
                  <th>商户地区</th>
                  <th>联系人</th>
                  <th>电话</th>
                  <th>邮箱</th>
                  <th>删除</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                  <td>12375900</td>
                  <td>长春天一总代理</td>
                  <td>长春市</td>

                  <td>张三</td>
                  <td>1889090910</td>
                  <td>dundao@name.com</td>                 
                  <td><a href="#"><i class="icon-remove"></i> 删除</a></td>
                  </tr>	
                  	
                 </tbody>
            </table>
          </div>
              </div></div>
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
<script src="js/maruti.form_validation.js"></script>
</body>
</html>

