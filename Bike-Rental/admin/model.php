<?php

class model
{
	public $conn="";
	
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','db_bike_rent');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl"; // query
		$run=$this->conn->query($sel);  // run on db
		while($fetch=$run->fetch_object()) // fetch alll data from query from db
		{
			$arr[]=$fetch;
		}
    
		return $arr;
       /* if(!isset($arr)){
            $arr = 'Variable is not set';
            echo $arr;
            }*/
	}
	function select_where($tbl,$arr)
	{
		$sel="select * from $tbl where 1=1"; // query continue...
		$i=0;
		$arr_key=array_keys($arr);
		$arr_value=array_values($arr);
		foreach($arr as $w){
			$sel.=" and $arr_key[$i]='$arr_value[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
	}
    
	
  
	function insert($tbl,$arr)
	{
		$arr_key=array_keys($arr);
		$key=implode(",",$arr_key);

		$arr_value=array_values($arr);
		$value=implode("','",$arr_value);//'Priyanka','123','priyanka@gmail.com'
		$ins="insert into $tbl($key) values ('$value')";
		$run=$this->conn->query($ins);
		return $run;
	}

	function select_join2($tbl1,$tbl2,$on){
		$sel="select * from $tbl1 join $tbl2 on $on";
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object()){
			$arr[] = $fetch;
		}
		return $arr;
	}
	function select_where_join($tbl1,$tbl2,$on,$arr)
	{
		$sel = "select * from $tbl1 join $tbl2 on $on where 1=1";
		$i = 0;
		$arr_key = array_keys($arr);
		$arr_value = array_values($arr);
		foreach($arr as $w){
			$sel .= " and $arr_key[$i] = '$arr_value[$i]'";
				$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
	}
	function update($tbl, $data, $where)
	{
		$upd = "update $tbl set";
		$i = 0;
		$arr_key = array_keys($data);
		$arr_value = array_values($data);
		$count = count($data);
		foreach ($data as $d) {
			if ($count == $i + 1) {
				$upd .= " $arr_key[$i]='$arr_value[$i]'";
			} else {
				$upd .= " $arr_key[$i]='$arr_value[$i]',";
				$i++;
			}
		}
		$upd .= "where 1=1";
		$j = 0;
		$warr_key = array_keys($where);
		$warr_value = array_values($where);

		foreach ($where as $d) {
			$upd .= " and $warr_key[$j]='$warr_value[$j]'";
			$j++;
		}
		$run = $this->conn->query($upd);
		return $run;
	}

	function delete($tbl,$where){
		$del="delete from $tbl where 1=1";
		$j=0;
		$arr_key = array_keys($where);
		$arr_value = array_values($where);
		foreach($where as $d){
			$del .= " and $arr_key[$j]='$arr_value[$j]'";
			$j++;
		}
		$run=$this->conn->query($del);
		return $run;
	}	
}
$obj = new model;

?>