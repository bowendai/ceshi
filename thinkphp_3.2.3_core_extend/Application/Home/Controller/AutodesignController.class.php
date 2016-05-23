<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

/**
 * 自动化设计控制器
 */
 
class AutoDesignController extends Controller {
    
	
	public function index() {
		
		$AutoDesignModel = new \Home\Model\AutoDesignModel();
		
		$results = $AutoDesignModel->where('parentid='.'1')->select();
		
		$this->assign('autoinfoArr',$results);
		
		$this->display('index');
	}
	
	
	public function detail($id) {
		
		$AutoDesignModel = new \Home\Model\AutoDesignModel();
		
		$results = $AutoDesignModel->where('id='.$id)->select();
		
		$this->assign('detailinfoArr',$results);
		
		$this->display('detail');
	}
	
}