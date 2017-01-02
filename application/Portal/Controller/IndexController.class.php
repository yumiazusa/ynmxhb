<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;
use Common\Controller\HomeBaseController;
use Com\Http;
/**
 * 首页
 */
class IndexController extends HomeBaseController {
	
    //首页
	public function index() {
	$home='home';
	$img=1;
	$this->assign('home',$home);
	$this->assign('img',$img);
    	$this->display(":index");
    }   

    public function download(){
		$type='.jpg';
		$file='2Dcode';
		$file_name='./tpl/ynhdkc/Public/assets/images/rec_1446704924300531.jpg';
		$newfile=$file.$type;
		Http::download($file_name,$newfile);
		}
}


