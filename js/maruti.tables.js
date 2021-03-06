/**
 * Unicorn Admin Template
 * Diablo9983 -> diablo9983@gmail.com
**/
$(document).ready(function(){
	
	$('.data-table').dataTable({
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sDom": '<""f>t<"F"lip>',
		"oLanguage": {  
                   "sLengthMenu": "每页显示 _MENU_ 条记录",  
                   "sZeroRecords": "对不起，查询不到任何相关数据",  
                   "sInfo": "当前显示 _START_ 到 _END_ 条，共 _TOTAL_ 条记录",  
                   "sInfoEmtpy": "找不到相关数据",  
                   "sInfoFiltered": "数据表中共为 _MAX_ 条记录)",  
                   "sProcessing": "正在加载中...",  
                   "sSearch": "搜索", 
                   "bInfo": true, 
                   "sUrl": "", //多语言配置文件，可将oLanguage的设置放在一个txt文件中，例：Javascript/datatable/dtCH.txt  
                   "oPaginate": {  
                       "sFirst":    "第一页",  
                       "sPrevious": " 上一页 ",  
                       "sNext":     " 下一页 ",  
                       "sLast":     " 最后一页 "  
                   }  
               } //多语言配置 
	});
	
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	
	$("span.icon input:checkbox, th input:checkbox").click(function() {
		var checkedStatus = this.checked;
		var checkbox = $(this).parents('.widget-box').find('tr td:first-child input:checkbox');		
		checkbox.each(function() {
			this.checked = checkedStatus;
			if (checkedStatus == this.checked) {
				$(this).closest('.checker > span').removeClass('checked');
			}
			if (this.checked) {
				$(this).closest('.checker > span').addClass('checked');
			}
		});
	});	
});
