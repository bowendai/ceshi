<?php	
namespace Home\Model;
use Think\Model;

class AutoDesignModel extends Model {
	
	protected $tableName = 'main';
	
	public function read2File($filename, $content) {
		
		$fp = fopen($filename,"w");
		if($fp) {
			fwrite($fp, $content);
		}
		
		fclose($fp);
	}
}