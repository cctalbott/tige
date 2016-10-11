<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Locator extends Model
{
  public $title = '';
  
  public $r = '';
	public $values = '';
  
  public function xl_results()
  {
    $pageSize = 10;
		$columns = "Name,Address,Phone,Toll Free,Fax,Country,Distance,Specialties,E-mail,Url";
		$linkable = false;
		$linkColumn = "Name";
		$locationColumns = "";
		
		//session_start();
		$a1 = explode(",", $columns);
		$a2 = explode(",", $locationColumns);
		$a2[] = "_id"; //required for mapit function
		$allColumns = implode(",", array_unique(array_merge($a1, $a2)));
		
		if(isset($_REQUEST["zip"]) || isset($_REQUEST["country"]) || isset($_REQUEST["sid"])) 
		{
			$c = curl_init("http://app.xtremelocator.com/visitor/findLocations.php");
			
			if(isset($_REQUEST["zip"])) 
			{
				$zip = $_REQUEST["zip"];
			} 
			else 
			{
				$zip = '';
			}
			if(isset($_REQUEST["country"])) 
			{
				$country = $_REQUEST["country"];
			} 
			else 
			{
				$country = '';
			}
			
			$xval = array(
				"sid" => "IDHere",
				"type" => "advanced",
				"format" => "CSV",
				"csv_columns" => $allColumns,
				"zip" => $zip,
				"country" => $country
			);
			
			foreach($_REQUEST as $k => $v) 
			{
				if(substr($k, 0, 4) == "spec") 
				{
					$xval[$k] = $v;
				}
			}
			
			$fields = "";
			foreach($xval as $name => $val) 
			{
				if(strlen($fields) > 0) 
				{
					$fields .= "&";
				}
				$fields .= $name."=".urlencode($val);
			}
			
			curl_setopt($c, CURLOPT_POST, 1);
			curl_setopt($c, CURLOPT_POSTFIELDS, $fields);
			ob_start();
			curl_exec($c);
			$response = ob_get_contents();
			ob_end_clean();
			
			$rows = explode("\n", trim($response));
			$r = array();
			$ca = explode(",", $allColumns);
			
			foreach($rows as $row) 
			{
				if(strstr($row, '"')) 
				{
					$ce = explode(",", $row);
					
					$f = array();
					$z = array();
					
					$field = "";
					foreach($ce as $v) 
					{
						$field .= $v;
						if($field[0] == '"' && (substr($field, strlen($field)-1, 1) != '"' || strlen($field) == 1)) 
						{
							$field .= ",";
						} 
						else 
						{
							$field = str_replace("\"\"", "\"", $field);
							if($field[0] == '"') 
							{
								$field = substr($field, 1, strlen($field) - 2);
							}
							$f[] = $field;
							$field = "";
						}
					}
					
					foreach($f as $k => $v) 
					{
						$z[ucwords($ca[$k])] = $f[$k];
					}
					
					$r[] = $z;
				}
			}
			$_SESSION["results"] = $r;
			$_SESSION["position"] = 0;
		}
		
		if(isset($_GET['id'])) 
		{
			$r[] = $_SESSION["results"][$_GET['id']];
		} 
		else 
		{
			$r = $_SESSION["results"];
		}
		if(isset($_GET["pos"])) 
		{
			$position = max($_GET["pos"], 0);
		} 
		else 
		{
			$position = $_SESSION["position"];
		}
		
		$start = $position;
		$end = min(count($r), $position + $pageSize);
		
		$this->r = $r;
  }
  
  public function contactOrigin()
	{
		$pageSize = 1;
		$columns = "name,additionalinfo"; 
		
		session_start();
		$c = curl_init("http://app.xtremelocator.com/visitor/findLocations.php");
		
		if(isset($_REQUEST["zip"])) 
		{
			$zip = $_REQUEST["zip"];
		} 
		else 
		{
			$zip = '';
		}
		if(isset($_REQUEST["name"])) 
		{
			$name = $_REQUEST["name"];
		} 
		else 
		{
			$name = '';
		}
		if(isset($_REQUEST["additionalinfo"])) 
		{
			$additionalinfo = $_REQUEST["additionalinfo"];
		} 
		else 
		{
			$additionalinfo = '';
		}
		$xval = array(
			"sid"            => "IDHere",
			"type"           => "advanced",
			"format"         => "CSV",
			"csv_columns"    => $columns,
			"zip"            => $zip,
			"name"           => $name,
			"additionalinfo" => $additionalinfo
		);
		
		foreach($_REQUEST as $k => $v) 
		{
			if(substr($k, 0, 4) == "spec") 
			{
				$xval[$k] = $v;
			}
		}
		
		$fields = "";
		foreach($xval as $name => $val) 
		{
			if(strlen($fields) > 0) 
			{
				$fields .= "&";
			}
			$fields .= $name."=".urlencode($val);
		}
		
		curl_setopt($c, CURLOPT_POST, 1);
		curl_setopt($c, CURLOPT_POSTFIELDS, $fields);
		ob_start();
		curl_exec($c);
		$response = ob_get_contents();
		ob_end_clean();
		
		if($response == "" || $response == "null") 
		{
			$this->values = array("House Account", "unassigned");
		} 
		else 
		{
			$this->values = explode('",', $response);
		}
	}
}