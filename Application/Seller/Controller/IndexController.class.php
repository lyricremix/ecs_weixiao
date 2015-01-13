<?php
namespace Seller\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
	 * 本地商品分类
	 *
	 */
    public function index(){
    	$this->display('category');
    }
    /**
	 * 本地分类商品列表
	 *
	 */
    public function localGoodsList(){
    	$this->display('local_goods_list');
    }
    /**
	 * 线上商品分类
	 *
	 */
    public function liveCategory(){
    	$this->display('live_category');
    }
    /**
	 * 线上分类商品列表
	 *
	 */
    public function liveGoodsList(){
    	$this->display('live_goods_list');
    }
    /**
	 * 线上商品详细
	 *
	 */
    public function goodsDetail(){
    	$this->display('goods_detail');
    }
}