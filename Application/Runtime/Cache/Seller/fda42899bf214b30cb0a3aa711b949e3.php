<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>商品分类</title>
	<meta http-equiv="pragma" content="no-cache">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="/ec_weixiao/Public/css/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="/ec_weixiao/Public/css/common.css" />
	<script src="/ec_weixiao/Public/js/jquery-1.11.1.min.js"></script>
	<script src="/ec_weixiao/Public/js/jquery.mobile-1.4.2.min.js"></script>
	<style type="text/css">
	.my-nav .my-current{background:#ff4400;}
	</style>
	<script type="text/javascript">
		var imgUrl = "http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0"; //注意必须是绝对路径
      var lineLink = "http://localhost/pz/wx/index.php/consumers/consumers/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ";
    	//var lineLink = window.location.href;//同样，必须是绝对路径
        var descContent = ''; //分享给朋友或朋友圈时的文字简介
var shareTitle = new Array();
shareTitle[0] = '睿智的你，指尖滑过我的瞬间，就没有点进来看看的冲动吗？等你哦！';
shareTitle[1] = '借你几个豹子胆，让你在这里狂欢，唯有你，才能让这里“动”起来。';
shareTitle[2] = '睿智的你，指尖滑过我的瞬间，就没有点进来看看的冲动吗？等你哦！';
shareTitle[3] = '在这里“拼”的是耐力，当你在这里不带走任何东西，那是我的错。';
shareTitle[4] = '当我在向你招手，招呼你“戳”进来，而你却视而不见，你怎么能这么狠心？';
        var appid = ''; //apiID，可留空
        var range = Math.floor(Math.random()*(4));
        //alert(range);
	    // 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
	    function shareFriend() {
           WeixinJSBridge.invoke('sendAppMessage',{
               "appid": appid,
               "img_url": imgUrl,
               "img_width": "200",
               "img_height": "200",
               "link": lineLink,
               "desc": shareTitle[range],
               "title": ''
           }, function(res) {
               //_report('send_msg', res.err_msg);
           })
        }
        function shareTimeline() {
           WeixinJSBridge.invoke('shareTimeline',{
               "img_url": imgUrl,
               "img_width": "200",
               "img_height": "200",
               "link": lineLink,
               "desc": shareTitle[range],
               "title": shareTitle[range]
           }, function(res) {
                  //_report('timeline', res.err_msg);
           });
        }
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
           // 发送给好友
           WeixinJSBridge.on('menu:share:appmessage', function(argv){
               shareFriend();
           });
           // 分享到朋友圈
           WeixinJSBridge.on('menu:share:timeline', function(argv){
               shareTimeline();
           });
       }, false);
	</script>
</head>

<body>
	<div data-role="content">
		<div class="my-header-bg">
			<img src="/ec_weixiao/Public/images/header_bg.gif" class="my-header-img">
			<div class="my-ui-grid">
				<div class="ui-grid-b">
			    	<div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:150px"></div></div>
			    	<div class="ui-block-b">
			    		<div class="ui-bar ui-bar-a" style="height:150px;">
			    			<div class="my-header-image">
			    				<!-- <a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ">
			    					<img src="http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0"/>
			    				</a> -->
			    				<img onclick="nav_jump(this)" jump-url="http://localhost/pz/wx/index.php/consumers/consumers/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ" src="http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0"/>
			    				<br/>
			    				Jahng			    			</div>
			    		</div>
			    	</div>
			   		<div class="ui-block-c">
			   			<div class="ui-bar ui-bar-a" style="height:150px">

			   			</div>
			   		</div>
				</div><!-- /grid-b -->
			</div>
			<div class="my-nav">
				<div class="ui-grid-c">
			    	<div class="ui-block-a" jump-url="http://localhost/pz/wx/index.php/merchant/merchant/local_category" onclick="nav_jump(this)">
			    		<div class="ui-bar ui-bar-a" style="font-weight:400;color:#ff5616;">
			    			<img src="/ec_weixiao/Public/images/consumers/add.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			    			添加分类
			    		</div>
			    	</div>
			    	<div class="ui-block-b" jump-url="http://localhost/pz/wx/index.php/merchant/merchant/panic_buy" onclick="nav_jump(this)">
			    		<div class="ui-bar ui-bar-a" style="font-weight:400;">
			    			<img src="/ec_weixiao/Public/images/consumers/shai.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			    			全民疯抢
			    		</div>
			    	</div>
			   		<div class="ui-block-c" jump-url="http://localhost/pz/wx/index.php/merchant/merchant/collect" onclick="nav_jump(this)">
			   			<div class="ui-bar ui-bar-a" style="font-weight:400;">
			    			<img src="/ec_weixiao/Public/images/consumers/collect_.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			   				收藏
			   			</div>
			   		</div>
			   		<div class="ui-block-c" jump-url="http://wsq.qq.com/reflow/263536219" onclick="nav_jump(this)">
			   			<div class="ui-bar ui-bar-a" style="font-weight:400;">
			    			<img src="/ec_weixiao/Public/images/consumers/logo.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			   				晒单区
			   			</div>
			   		</div>
				</div><!-- /grid-b -->
			</div>
		</div>
<script>
function nav_jump(obj){
	window.location.href = $(obj).attr('jump-url');
}
</script><style type="text/css">
.ui-page-theme-a .ui-btn, html .ui-bar-a .ui-btn, html .ui-body-a .ui-btn, html body .ui-group-theme-a .ui-btn, html head + body .ui-btn.ui-btn-a, .ui-page-theme-a .ui-btn:visited, html .ui-bar-a .ui-btn:visited, html .ui-body-a .ui-btn:visited, html body .ui-group-theme-a .ui-btn:visited, html head + body .ui-btn.ui-btn-a:visited{
	border-color:#ff5616;
}
</style>
	<link rel="stylesheet" href="/ec_weixiao/Public/css/merchant_goods_list.css?" />
		<div class="good-list" style="margin-bottom:3em;">
			<fieldset class="ui-grid-a">
																		   	<div class="ui-block-a" id="goods-box-60">
					   		<div class="my-cloth-img">
							   	<a data-ajax="false" href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81280/39">
					   			<img src="http://img.pf178.com/data/files/store_14257/goods_176/lcj_201409191519364329.jpg" style="width:90%;" />
					   			</a>
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left" onclick="set_goods_id(60)"></a>
					   		</div>
					   		<div class="my-cloth-des">维珂菲2014秋冬季韩版修身人头花纹男士外穿拉链小外套</div>
					   		<div class="my-cloth-spec">款号：701#</div>
					   		<div class="my-cloth-price">厂家价：￥62.50</div>
					   		<div class="my-cloth-price" id="show-add-box-60">
					   			<div class="my-add-price" id="my-price-tips-60">利润：￥50</div>
					   			<div class="my-edit-price" onclick="my_show_edit(60)">编辑</div>
					   			<div class="my-clear"></div>
					   		</div>
			   				
					   		<div class="my-cloth-price" style="display:none;" id="goods-edit-60">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="50" id="edit-add-price-60" /></div>
					   			<div class="my-edit-price" onclick="my_change_price(this)" goods-id="60">确认</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
																			    <div class="ui-block-b" id="goods-box-59">
					   		<div class="my-cloth-img">
							   	<a data-ajax="false" href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/80767/39">
					   			<img src="http://img.pf178.com/data/files/store_13492/goods_67/lcj_201409101731079064.jpg" style="width:90%;" />
					   			</a>
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left" onclick="set_goods_id(59)"></a>
					   		</div>
					   		<div class="my-cloth-des">XIAO2014秋装新款休闲V领男西装薄款外套型男小西装拼色男士西装</div>
					   		<div class="my-cloth-spec">款号：1308-W00...</div>
					   		<div class="my-cloth-price">厂家价：￥95.00</div>
					   		<div class="my-cloth-price" id="show-add-box-59">
					   			<div class="my-add-price" id="my-price-tips-59">利润：￥100</div>
					   			<div class="my-edit-price" onclick="my_show_edit(59)">编辑</div>
					   			<div class="my-clear"></div>
					   		</div>
			   				
					   		<div class="my-cloth-price" style="display:none;" id="goods-edit-59">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="100" id="edit-add-price-59" /></div>
					   			<div class="my-edit-price" onclick="my_change_price(this)" goods-id="59">修改</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
																			    <div class="ui-block-b" id="goods-box-58">
					   		<div class="my-cloth-img">
							   	<a data-ajax="false" href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/80979/39">
					   			<img src="http://img.pf178.com/data/files/store_13063/goods_197/lcj_201409131713173974.jpg" style="width:90%;" />
					   			</a>
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left" onclick="set_goods_id(58)"></a>
					   		</div>
					   		<div class="my-cloth-des">树格2014秋季新款口袋休闲修身韩版潮男打底衫长袖t恤</div>
					   		<div class="my-cloth-spec">款号：8608#</div>
					   		<div class="my-cloth-price">厂家价：￥34.00</div>
					   		<div class="my-cloth-price" id="show-add-box-58">
					   			<div class="my-add-price" id="my-price-tips-58">利润：￥100</div>
					   			<div class="my-edit-price" onclick="my_show_edit(58)">编辑</div>
					   			<div class="my-clear"></div>
					   		</div>
			   				
					   		<div class="my-cloth-price" style="display:none;" id="goods-edit-58">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="100" id="edit-add-price-58" /></div>
					   			<div class="my-edit-price" onclick="my_change_price(this)" goods-id="58">修改</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
												</fieldset>
		</div>
		<div class="my-add-goods" style="position:fixed;width:100%;text-align:center;bottom:0.1em;">
			<button class="ui-btn" data-rel="popup" onclick="my_jump(this)" category-id="39" style="margin-bottom:0;margin-top:0;padding:;">添加商品</button>
		</div>

		<div data-role="popup" id="popupDialog" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px;">
    		<div data-role="header" data-theme="a">
    			<h1>删除</h1>
    		</div>
		    <div role="main" class="ui-content">
		        <h3 class="ui-title" style="text-align:center;margin-top:10px;">确定删除?</h3>
		        <a href="#" class="ui-btn ui-btn-inline" style="margin-left:10px;background:#666666;" data-rel="back">取消</a>
		        <a href="#" class="ui-btn ui-btn-inline" style="background:#666666;" data-rel="back" data-transition="flow" goods-id="" id="do-delete">确定</a>
		    </div>
		</div>
	</div>
<script type="text/javascript">
$(document).ready(function(){
	$('#do-delete').click(function(){
		var goods_id = $(this).attr('goods-id');
		var url = "http://localhost/pz/wx/index.php/merchant/merchant/delete_goods";
		$.ajax({
			type:'post',
			url:url,
			data:'goods_id='+goods_id,
			success:function(msg){
	      		var msg = eval('('+msg+')');
	        	//$('#show-add-box-'+live_goods_id).show();
	        	//$('#my-goods-'+live_goods_id).hide();
				console.log(msg);
				//alert(msg.msg);
				if(msg.status==1){
					$('#goods-box-'+goods_id).remove();
				}else{
					alert(msg.msg);
				}

			}	
		});
	});
});
function my_jump(obj){
	var category_id = $(obj).attr('category-id');
	var url = "http://localhost/pz/wx/index.php/merchant/merchant/get_live_category"+"/"+category_id;
	window.location.href = url;
}
function set_goods_id(goods_id){
	$('#do-delete').attr('goods-id',goods_id);
}
function my_show_edit(goods_id){
	$('#show-add-box-'+goods_id).css('display','none');
	$('#goods-edit-'+goods_id).css('display','block');
}
function my_change_price(obj){
	var goods_id = $(obj).attr('goods-id');
	var add_price = $('#edit-add-price-'+goods_id).val();

	if(add_price == '' || add_price == 0){
		alert('您还没有设置商品差价');
		return ;
	}
	var re = /^[0-9]+.?[0-9]*$/;
	if(Math.ceil(add_price)<=0 || !re.test(add_price)){
		alert('请设置正确的利润');
		return ;
	}
	var url = "http://localhost/pz/wx/index.php/merchant/merchant/change_goods_price";
	$.ajax({
		type:'post',
		url:url,
		data:'goods_id='+goods_id+'&goods_price_add='+add_price,
		success:function(msg){
	      	var msg = eval('('+msg+')');
	        //$('#show-add-box-'+live_goods_id).show();
	        //$('#my-goods-'+live_goods_id).hide();
			console.log(msg);
			//alert(msg.msg);
			if(msg.status == 1){
				$('#my-price-tips-'+goods_id).html('增量价：￥'+add_price);
				$('#goods-edit-'+goods_id).css('display','none');
				$('#show-add-box-'+goods_id).css('display','block');

			}else{
				alert(msg.msg);
			}


		}	
	});
}
</script>
</body>
</html>