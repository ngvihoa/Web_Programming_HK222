<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * User class
 */
class Cv
{
	use Database;
	use Model;

	protected $table = 'cv';
	protected $primaryKey = 'cvid';
	
	public $limit = 10;
	// public $offset = ($page_number - 1) * $limit;
	public $order_type 	= "desc";
	public $order_column = "cvid";
	public $errors 		= [];

	public function search($data=[])
	{
		if(!$data){
			$page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;
			$page_number = $page_number < 1 ? 1 : $page_number;


			$query = "select * from cv order by cvid desc ";

			$result = $this->query($query);
			if(!$result)
				return false;
			// return $query;
			return $result;
		}
		if($data['degree']){
			$query = "select cvid from degree where namedegree = '".$data['degree']."'";
			$result = $this->query($query);
			// unset($result['0']);
			// return $result;

			if(!$result)
				return false;
			// return $keys;
			$query = "select * from cv where cvid in (";
			foreach ($result as $key) {
					$query .= $key->cvid .",";
				}
				// endforeach; 
			$query=substr_replace($query ,"",-1);
			$query.=") ";
			$query.=" && ";
			unset($data['degree']);
			$keys = array_keys($data);
			foreach ($keys as $key) {
				if(!empty($data[$key])){
					if ($key=='jobtitle')
						$query .= $key . " like '%". $data[$key] . "%' && ";
					if ($key=='firstname')
						$query .= $key . " like '%". $data[$key] . "%' || lastname like '%". $data[$key] . "%";
					if ($key=='country')
						$query .= $key . " = '". $data[$key] . "' && "; 
				}
			}
			$query = trim($query," && ");
			// return $query;
			$result = $this->query($query);
			return $result;
		}
		else{
			$query = "select * from cv where ";
			$keys = array_keys($data);
			foreach ($keys as $key) {
				if(!empty($data[$key])){
					if ($key=='jobtitle')
						$query .= $key . " like '%". $data[$key] . "%' && ";
					if ($key=='firstname')
						$query .= $key . " like '%". $data[$key] . "%' or lastname like '%". $data[$key] . "%'";
					if ($key=='country')
						$query .= $key . " = '". $data[$key] . "' && "; 
				}
			}
			$query = trim($query," && ");
			// return $query;
			$result = $this->query($query);
			return $result;
		}
	}
}