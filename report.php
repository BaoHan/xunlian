<?php /*
				清算报表日期
	              根据查询过滤器。
				  查询表为：TBL_SETTLE_FILE 
				  排序方式：按最新清算时间
				  *******
				  
				  
				  @ since 1.5
				  @ 需要解决报表不能下载的问题
	              */?>
<?php include 'header.php';?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" class="current">报表下载</a></div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
     
      <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5><a href="#"><i class="icon-download"></i> 报表下载</a></h5>
            
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped with-check data-table">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th>清算日期</th>
                  <th>报表日期</th>
                  <th>商户代码</th>
                  <th>商户名称</th>
                  <th>下载</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td><?php /*SETT_DATE*/?>2013/04/12</td>
                  <td><?php /*FILE_DATE*/?>2013/04/12</td>
                  <td><?php /*MER_CODE*/?>12465875</td>
                  <td><?php /*根据MER_CODE查询MER_NAME*/?>未知名称</td>
                  <td><?php /*FILE_PATH*/?><a href="#" class="btn"><i class="icon-download"></i> 下载</a></td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>2013/04/11</td>
                  <td>2013/04/12</td>
                  <td>200004555</td>
                  <td>未知名称</td>
                  <?php /*
	                  @ since 1.5
	                  @ 当报表的DOWNLOAD_STATUS值为1时报表是不能下载，在下载按钮中加入class disabled 。                  */ ?>
                  <td><a href="#" class="btn disabled"><i class="icon-download"></i> 下载</a></td>
                </tr><tr>
                  <td><input type="checkbox" /></td>
                  <td>2013/04/10</td>
                  <td>2013/04/10</td>
                  <td>131165875</td>
                  <td>未知名称</td>
                  <td><a href="#" class="btn"><i class="icon-download"></i> 下载</a></td>
                </tr><tr>
                  <td><input type="checkbox" /></td>
                  <td>2013/04/09</td><td>2013/04/10</td>
                  <td>222465875</td>
                  <td>未知名称</td>
                  <td><a href="#" class="btn"><i class="icon-download"></i> 下载</a></td>                </tr><tr>
                  <td><input type="checkbox" /></td>
                  <td>2013/04/08</td><td>2013/04/10</td>
                  <td>124224875</td>
                  <td>未知名称</td>
                  <td><a href="#" class="btn disabled"><i class="icon-download"></i> 下载</a></td>
                </tr><tr>
                  <td><input type="checkbox" /></td>
                  <td>2013/04/07</td><td>2013/04/10</td>
                  <td>121555875</td>
                  <td>未知名称</td>
                  <td><a href="#" class="btn disabled"><i class="icon-download"></i> 下载</a></td>
                </tr><tr>
                  <td><input type="checkbox" /></td>
                  <td>2013/04/12</td><td>2013/04/10</td>
                  <td>132485975</td>
                  <td>未知名称</td>
                  <td><a href="#" class="btn"><i class="icon-download"></i> 下载</a></td>                </tr>              </tbody>
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