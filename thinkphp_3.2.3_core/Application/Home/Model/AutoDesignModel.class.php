<?php	
namespace Home\Model;
use Think\Model;

class AutoDesignModel extends Model {
	
	protected $tableName = 'main';
	
	public function read2File($filename) {
		
		$fp = fopen($filename,"w");
		if ($fp) {
			
		}
		
		fclose($fp);
	}
	
	public function isExistDir($dir) {

		if (is_dir($dir)) {
			return true;
		}
		
		return false;
	}
	
	public function dir_is_empty($dir) { 
		if ($handle = opendir($dir)) {  
			while($item = readdir($handle)) {   
				if ($item != '.' && $item != '..')
					return false;   
			} 
		} 
		
		return true;
	}
	
	public function getFilenames($dir) {
		if ($this->isExistDir($dir) && (!$this->dir_is_empty($dir))) {
			
			//$filenames = scandir($dir);
			$filenames = array_diff(scandir($dir),array('..','.'));
			$filenames = array_values($filenames);
			
			return $filenames;
		}
		
		return [];
	}
	
	public function getFileinfo($filenames,$dir) {
		
		for($i = 0; $i < count($filenames); $i++) {
			$path = $dir."/".$filenames[$i];
			
			$create_time = filectime($path);
			
			$fileinfos[$i]["create_time"] = date("Y-m-d H:i:s",$create_time);
			$fileinfos[$i]["content"] = file_get_contents($path);
			$fileinfos[$i]["title"] = urldecode( str_replace(".txt","",$filenames[$i]));
		}
		
		return $fileinfos;
	}
}