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
		
		//$this->assign('autoinfoArr',$results);
		
		$dir = getcwd() . "/Public/dokuwiki/data/pages/autodesign";
		
		$filenames = $AutoDesignModel->getFilenames($dir);
		
		if(count($filenames) > 0) {
			
			$fileinfos = $AutoDesignModel->getFileinfo($filenames,$dir);
			
			//var_dump($fileinfos);
			$this->assign('autoinfoArr',$fileinfos);
		}
		
		
		$this->display('index');
	}
	
	
	//public function detail($id) {
	public function detail($title) {
		
		//$AutoDesignModel = new \Home\Model\AutoDesignModel();
		
		//$results = $AutoDesignModel->where('id='.$id)->select();
		
		//$this->assign('detailinfoArr',$results);
		
		$this->assign('title',$title);
		
		$this->display('detail');
	}
	
}