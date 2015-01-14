<?php
namespace Buyer\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
	 * 商店首页
	 *
	 */
    public function index(){
    	$this->display('index');
    }
    /**
	 * 分类页
	 *
	 */
    public function category(){
    	$this->display('category');
    }
    /**
	 * 列表页
	 *
	 */
    public function list(){
    	$this->display('goods_list');
    }
    /**
	 * 详细页
	 *
	 */
    public function detail(){
    	$this->display('goods_detail');
    }
}