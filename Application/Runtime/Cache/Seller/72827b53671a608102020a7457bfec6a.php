<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="/ecs_weixiao/Public/css/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="/ecs_weixiao/Public/css/common.css" />
	<script src="/ecs_weixiao/Public/js/jquery-1.11.1.min.js"></script>
	<script src="/ecs_weixiao/Public/js/jquery.mobile-1.4.2.min.js"></script>
<style type="text/css">
.price_filter{
	padding:20px 10px;
}
.price_filter a:link,.price_filter a:visited,.price_filter a:hover,.price_filter a:active{
	text-decoration: none;
	color:#ff5616;
	float: left;
	margin-right: 10px;
}
.my-page{
	text-align:center;
}
.my-page .aaa,.my-page .bbb,.my-page .ccc,.my-page .ddd,.my-page .fff{
	display: inline;
}
.my-page a{
	text-decoration: none;
	padding:0.5em;
	font-size: 0.8em;
}

</style>
</head>

<body>
	<div data-role="content">
		<header data-role="header" class="header" data-position="inline" >
			<a href="http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39" dat-ajax="false" data-role="none" style="margin-left:10px;">
				<img class="top-img" src="/ecs_weixiao/Public/images/consumers/icon-msg-left.png" alt="">
			</a>
			<h1 data-role="none">商品列表</h1>
		</header>
	<link rel="stylesheet" href="/ecs_weixiao/Public/css/merchant_goods_list.css" />
 		<div style="height:40px;line-height:40px;padding-left:10px;font-size:0.9em;">当前位置(商品区)：分类>男装>上装</div>
		<div style="padding:10px 10px 0;text-shadow:none;box-shadow:none;">价格区间</div>
 		<div class="price_filter">
			<a data-role="none" data-ajax="false" href="http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39/406/?map=分类>男装>上装&price_filter=1-50">1-50</a>
			<a data-role="none" data-ajax="false" href="http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39/406/?map=分类>男装>上装&price_filter=50-100">50-100</a>
			<a data-role="none" data-ajax="false" href="http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39/406/?map=分类>男装>上装&price_filter=100-150">100-150</a>
			<a data-role="none" data-ajax="false" href="http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39/406/?map=分类>男装>上装&price_filter=150-2000">大于150</a>
			<!-- <a data-role="none" data-ajax="false" href="http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39/406/分类>男装>上装?price_filter=200-100000">大于200</a> -->
		</div>
		<div class="good-list" style="margin-bottom:20px;">
			<fieldset class="ui-grid-a">
				<div style="text-align:center;margin-top:30px;"></div>
														   	<div class="ui-block-a">
					   		<div class="my-cloth-img">
					   			<a href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81233/39" data-ajax="false">
					   			<img src="http://img.pf178.com/data/files/store_10406/goods_60/lcj_201409171744202469.jpg" style="width:90%;" /><!-- 
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left"></a> -->
					   			</a>
					   		</div>
					   		<div class="my-cloth-des">RIV/SD秋季男士新款衬衫时尚拼色大格子立领长袖衬衫衬衣</div>
					   		<div class="my-cloth-spec">款号：DS-20</div>
					   		<div class="my-cloth-price">厂家价：￥75.00</div>
					   		<div class="my-cloth-price" id="show-add-box-81233">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="" placeholder="设置利润" id="goods-81233" goods-name="RIV/SD秋季男士新款衬衫时尚拼色大格子立领长袖衬衫衬衣" /></div>
					   			<div class="my-edit-price" onclick="add_goods(81233)">添加</div>
					   			<div class="my-clear"></div>
					   		</div>
			   				<!--
					   		<div class="my-cloth-price" id="my-goods-81233">
					   			<div class="my-add-price">增量价：￥5.00</div>
					   			<div class="my-edit-price">已添加</div>
					   			<div class="my-clear"></div>
					   		</div>
					   		-->
					   	</div>
																			    <div class="ui-block-b">
					   		<div class="my-cloth-img">
					   			<a href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81230/39" data-ajax="false">
					   			<img src="http://img.pf178.com/data/files/store_10406/goods_78/lcj_201409171724383179.jpg" style="width:90%;" />
					   			</a>
					   			<!-- 
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left"></a> -->
					   		</div>
					   		<div class="my-cloth-des">RIV/SD2014秋季衬衫新款红色修身格子纹男士衬衫长袖衬衣</div>
					   		<div class="my-cloth-spec">款号：DS-19</div>
					   		<div class="my-cloth-price">厂家价：￥75.00</div>
					   		<div class="my-cloth-price" id="show-add-box-81230">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="" placeholder="设置利润" id="goods-81230" goods-name="RIV/SD2014秋季衬衫新款红色修身格子纹男士衬衫长袖衬衣" /></div>
					   			<div class="my-edit-price" onclick="add_goods(81230)">添加</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
																			    <div class="ui-block-b">
					   		<div class="my-cloth-img">
					   			<a href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81225/39" data-ajax="false">
					   			<img src="http://img.pf178.com/data/files/store_10406/goods_75/lcj_201409171701154617.jpg" style="width:90%;" />
					   			</a>
					   			<!-- 
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left"></a> -->
					   		</div>
					   		<div class="my-cloth-des">RIV/SD2014秋季男装修身印花配搭蝴蝶结长袖男士衬衫</div>
					   		<div class="my-cloth-spec">款号：DS-18</div>
					   		<div class="my-cloth-price">厂家价：￥75.00</div>
					   		<div class="my-cloth-price" id="show-add-box-81225">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="" placeholder="设置利润" id="goods-81225" goods-name="RIV/SD2014秋季男装修身印花配搭蝴蝶结长袖男士衬衫" /></div>
					   			<div class="my-edit-price" onclick="add_goods(81225)">添加</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
																			    <div class="ui-block-b">
					   		<div class="my-cloth-img">
					   			<a href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81224/39" data-ajax="false">
					   			<img src="http://img.pf178.com/data/files/store_10808/goods_91/lcj_201409171654512121.gif" style="width:90%;" />
					   			</a>
					   			<!-- 
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left"></a> -->
					   		</div>
					   		<div class="my-cloth-des">中南至尊2014新款韩版秋装修身波点舒适休闲长袖衬衫休闲男装</div>
					   		<div class="my-cloth-spec">款号：3311##</div>
					   		<div class="my-cloth-price">厂家价：￥71.50</div>
					   		<div class="my-cloth-price" id="show-add-box-81224">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="" placeholder="设置利润" id="goods-81224" goods-name="中南至尊2014新款韩版秋装修身波点舒适休闲长袖衬衫休闲男装" /></div>
					   			<div class="my-edit-price" onclick="add_goods(81224)">添加</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
																			    <div class="ui-block-b">
					   		<div class="my-cloth-img">
					   			<a href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81221/39" data-ajax="false">
					   			<img src="http://img.pf178.com/data/files/store_10808/goods_199/lcj_201409171639599417.gif" style="width:90%;" />
					   			</a>
					   			<!-- 
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left"></a> -->
					   		</div>
					   		<div class="my-cloth-des">中南至尊2014秋装新款韩版时尚纽扣修身袖口长袖衬衫休闲男装</div>
					   		<div class="my-cloth-spec">款号：3306####</div>
					   		<div class="my-cloth-price">厂家价：￥71.50</div>
					   		<div class="my-cloth-price" id="show-add-box-81221">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="" placeholder="设置利润" id="goods-81221" goods-name="中南至尊2014秋装新款韩版时尚纽扣修身袖口长袖衬衫休闲男装" /></div>
					   			<div class="my-edit-price" onclick="add_goods(81221)">添加</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
																			    <div class="ui-block-b">
					   		<div class="my-cloth-img">
					   			<a href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81217/39" data-ajax="false">
					   			<img src="http://img.pf178.com/data/files/store_10808/goods_150/lcj_201409171632305472.gif" style="width:90%;" />
					   			</a>
					   			<!-- 
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left"></a> -->
					   		</div>
					   		<div class="my-cloth-des">中南至尊2014秋装新款韩版袖口时尚修身长袖衬衫休闲男装</div>
					   		<div class="my-cloth-spec">款号：3305####</div>
					   		<div class="my-cloth-price">厂家价：￥71.50</div>
					   		<div class="my-cloth-price" id="show-add-box-81217">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="" placeholder="设置利润" id="goods-81217" goods-name="中南至尊2014秋装新款韩版袖口时尚修身长袖衬衫休闲男装" /></div>
					   			<div class="my-edit-price" onclick="add_goods(81217)">添加</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
																			    <div class="ui-block-b">
					   		<div class="my-cloth-img">
					   			<a href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81215/39" data-ajax="false">
					   			<img src="http://img.pf178.com/data/files/store_10808/goods_50/lcj_201409171624106365.gif" style="width:90%;" />
					   			</a>
					   			<!-- 
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left"></a> -->
					   		</div>
					   		<div class="my-cloth-des">中南至尊2014新款韩版修身波点长袖舒适休闲衬衫休闲男装</div>
					   		<div class="my-cloth-spec">款号：3301##</div>
					   		<div class="my-cloth-price">厂家价：￥71.50</div>
					   		<div class="my-cloth-price" id="show-add-box-81215">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="" placeholder="设置利润" id="goods-81215" goods-name="中南至尊2014新款韩版修身波点长袖舒适休闲衬衫休闲男装" /></div>
					   			<div class="my-edit-price" onclick="add_goods(81215)">添加</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
																			    <div class="ui-block-b">
					   		<div class="my-cloth-img">
					   			<a href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81214/39" data-ajax="false">
					   			<img src="http://img.pf178.com/data/files/store_10406/goods_103/lcj_201409171618237924.jpg" style="width:90%;" />
					   			</a>
					   			<!-- 
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left"></a> -->
					   		</div>
					   		<div class="my-cloth-des">2014RIV/SD秋季男装新款衬衫红色大格子撞色修身长袖衬衣</div>
					   		<div class="my-cloth-spec">款号：DS-17</div>
					   		<div class="my-cloth-price">厂家价：￥75.00</div>
					   		<div class="my-cloth-price" id="show-add-box-81214">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="" placeholder="设置利润" id="goods-81214" goods-name="2014RIV/SD秋季男装新款衬衫红色大格子撞色修身长袖衬衣" /></div>
					   			<div class="my-edit-price" onclick="add_goods(81214)">添加</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
																			    <div class="ui-block-b">
					   		<div class="my-cloth-img">
					   			<a href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81213/39" data-ajax="false">
					   			<img src="http://img.pf178.com/data/files/store_10808/goods_17/lcj_201409171606574298.gif" style="width:90%;" />
					   			</a>
					   			<!-- 
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left"></a> -->
					   		</div>
					   		<div class="my-cloth-des">中南至尊2014秋装新款韩版时尚舒适修身袖口长袖衬衫休闲男装</div>
					   		<div class="my-cloth-spec">款号：2860</div>
					   		<div class="my-cloth-price">厂家价：￥78.40</div>
					   		<div class="my-cloth-price" id="show-add-box-81213">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="" placeholder="设置利润" id="goods-81213" goods-name="中南至尊2014秋装新款韩版时尚舒适修身袖口长袖衬衫休闲男装" /></div>
					   			<div class="my-edit-price" onclick="add_goods(81213)">添加</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
																			    <div class="ui-block-b">
					   		<div class="my-cloth-img">
					   			<a href="http://localhost/pz/wx/index.php/merchant/merchant/goods_detail/81209/39" data-ajax="false">
					   			<img src="http://img.pf178.com/data/files/store_10808/goods_138/lcj_201409171555388603.gif" style="width:90%;" />
					   			</a>
					   			<!-- 
					   			<a href="#popupDialog" style="position:absolute;top:10px;right:0;" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-icon-delete ui-btn-icon-left"></a> -->
					   		</div>
					   		<div class="my-cloth-des">中南至尊2014秋装新款韩版时尚修身袖口舒适牛仔长袖衬衫休闲男装</div>
					   		<div class="my-cloth-spec">款号：930</div>
					   		<div class="my-cloth-price">厂家价：￥78.40</div>
					   		<div class="my-cloth-price" id="show-add-box-81209">
					   			<div class="my-add-price" style="width:60%;"><input type="text" value="" placeholder="设置利润" id="goods-81209" goods-name="中南至尊2014秋装新款韩版时尚修身袖口舒适牛仔长袖衬衫休闲男装" /></div>
					   			<div class="my-edit-price" onclick="add_goods(81209)">添加</div>
					   			<div class="my-clear"></div>
					   		</div>
					   	</div>
												</fieldset>
			<div class="my-page"><div class="aaaaaa"><div class="ddd">1</div><div class="ccc"><a href="http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39/406?map=分类>男装>上装&amp;per_page=2">2</a></div><div class="ccc"><a href="http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39/406?map=分类>男装>上装&amp;per_page=3">3</a></div><div class="fff"><a href="http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39/406?map=分类>男装>上装&amp;per_page=2">下一页</a></div><div class="bbb"><a href="http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39/406?map=分类>男装>上装&amp;per_page=45">尾页</a></div><select data-role="none" id="select-page"><option value=1 selected="selected">第1页</option><option value=2>第2页</option><option value=3>第3页</option><option value=4>第4页</option><option value=5>第5页</option><option value=6>第6页</option><option value=7>第7页</option><option value=8>第8页</option><option value=9>第9页</option><option value=10>第10页</option><option value=11>第11页</option><option value=12>第12页</option><option value=13>第13页</option><option value=14>第14页</option><option value=15>第15页</option><option value=16>第16页</option><option value=17>第17页</option><option value=18>第18页</option><option value=19>第19页</option><option value=20>第20页</option><option value=21>第21页</option><option value=22>第22页</option><option value=23>第23页</option><option value=24>第24页</option><option value=25>第25页</option><option value=26>第26页</option><option value=27>第27页</option><option value=28>第28页</option><option value=29>第29页</option><option value=30>第30页</option><option value=31>第31页</option><option value=32>第32页</option><option value=33>第33页</option><option value=34>第34页</option><option value=35>第35页</option><option value=36>第36页</option><option value=37>第37页</option><option value=38>第38页</option><option value=39>第39页</option><option value=40>第40页</option><option value=41>第41页</option><option value=42>第42页</option><option value=43>第43页</option><option value=44>第44页</option><option value=45>第45页</option></select></div></div>
		</div>

	</div>
<script type="text/javascript">
function add_goods(goods_id){
	var add_price = $('#goods-'+goods_id).val();
	var goods_name = $('#goods-'+goods_id).attr('goods-name');
	//console.log(add_price);
	if(add_price == '' || add_price == 0){
		alert('您还没有设置商品差价');
		return ;
	}
	var re = /^[0-9]+.?[0-9]*$/;
	if(Math.ceil(add_price)<=0 || !re.test(add_price)){
		alert('请设置正确的利润');
		return ;
	}
	//console.log(typeof add_price);
	//return;

	var url = "http://localhost/pz/wx/index.php/merchant/merchant/do_add_goods";
	$.ajax({
		type:'post',
		url:url,
		data:'goods_name='+goods_name+'&goods_add_price='+add_price+'&goods_live_id='+goods_id+'&local_category='+39,
		success:function(msg){
      		var msg = eval('('+msg+')');
        	//$('#show-add-box-'+live_goods_id).show();
        	//$('#my-goods-'+live_goods_id).hide();
			//console.log(msg);
			//alert(msg.msg);
			if(msg.status == -1){
				if(confirm('添加过该商品，要修改价格?')){
					window.location.href= "http://localhost/pz/wx/index.php/merchant/merchant/local_goods_list/39";
				}	
			}else{
				if(!confirm('继续添加商品')){
					window.location.href= "http://localhost/pz/wx/index.php/merchant/merchant/local_goods_list/39";
				}	
			}
		}
	});

}
$(document).ready(function(){
	$('#select-page').change(function(){
		var page = $(this).val();
		var url = "http://localhost/pz/wx/index.php/merchant/merchant/get_live_category/39/406?map=分类>男装>上装&per_page="+page;
		window.location.href = url;
	});
});
</script>
</body>
</html>