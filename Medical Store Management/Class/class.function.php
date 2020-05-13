<?php

require_once('include/inc_master.php');  

class operationMethods extends DB

{

	function check_Auth_Assoc($table_name,$check_id,$cond){

		$sql_Fetch = "SELECT ".$check_id." FROM ". $table_name." WHERE ".$cond."";

		$chk_rslt  = $this->fetchArray( $sql_Fetch );

		return $chk_rslt;

	}

	

	function getMac(){

		exec("ipconfig /all", $output);

		foreach($output as $line){

			if (preg_match("/(.*)Physical Address(.*)/", $line)){

				$mac = $line;

				$mac = str_replace("Physical Address. . . . . . . . . :","",$mac);

			}

		}

	}

	

	function getIP(){

		return $_SERVER['REMOTE_ADDR'];

	}

	

	function get_WebsiteUrl($field_name, $id,$id_name, $table_name){

		$data=array();

		//$fetch = "select ".$field_name." from ".$table_name." where ".$id_name."=".$id." limit 0,1";

		

		$exec_Fetch = $this->SelectOne($table_name, "$id_name = $id limit 0,1", $field_name);

		

		if($exec_Fetch!=false)

		{

			return  $exec_Fetch;

		}

		else

		{

			return false;

		}

		

		

	}

	

	function allocated_User_Websites($userid){

		$sql = "(select location_name,website_id, location_code, location_code from website_locations where location_id in (select location_id from alloted_user_access_details where admin_id='".$userid."' and status=1 and base_location = 1))";

		

		$returnstr='';

		$fetch_Result = $this->get_results( $sql );

		

		if($fetch_Result!=false)

		{

			$rsltcoount = count($fetch_Result);

			

			if($rsltcoount>0){

				$returnstr.='<option value="">Select State</option>';

				for($i=0; $i<$rsltcoount; $i++)

				{

					

					$web_name =	$this->get_WebsiteUrl("website_name",$fetch_Result[$i]['website_id'],"website_id","websites_list");

					$returnstr.='<option value="'.$fetch_Result[$i]['location_code'].'">'.$web_name[0]."-".$fetch_Result[$i]['location_name'].'</option>';

				}

			}else{

				$returnstr.='<option value="">Select State</option>';

			}

		}

		else

		{

			

			$returnstr.='<option value="">Select State</option>';

		}

		return $returnstr;	

	}



	function escapechar($str){

	return mysql_real_escape_string(htmlentities(trim($str),ENT_QUOTES));

	}

	

	function check_Selected_Location_Auth($loc_code,$userid){

		$sql = "select location_id from alloted_user_access_details where admin_id='".$userid."' and status=1 and location_code='".$loc_code."'";

		$getresult = $this->fetchArray( $sql );

		if($getresult!=false)

		{

			return $getresult;

		}

		else

		{

			return false;

		}

		

	}

	

	//fetch website id from location code

	function getWebIdFrmLoc($locn_code, &$result)

	{

		$fetch = NULL;

		$result=NULL;

		

		$fetch = "select website_id from  website_locations where location_code='".$locn_code."' and location_status = '1' and delete_flag = '1'";

		$fetch = $this->fetchArray( $fetch );

		if($fetch!=false)

		{

			

			$result	=	$fetch;

			return true;

		}

		else

		{

			return false;

		}

		

	}

	

	function createRandomIden($chkval) 

	{

		$chars="abcdTUVWXYZefghi01234jklmnopqrstuvwxyzABCDEFGHIJK56789LMNOPQRS";

		srand((double)microtime()*1000000);

		$i = 0;

		$pass = '' ;

		while ($i<=$chkval) 

		{

			$num  = rand() % 33;

			$tmp  = substr($chars, $num, 1);

			$pass = $pass . $tmp;

			$i++;

		}

		return $pass;

	}

	

	function create_audit_rec($tbl_1, $tbl_2, $adt_val1, $ary1, $ary2, $adt_val2, $adt_val3, $adt_val4)

	{ 	

		$adt_tbl_nm  = NULL;

		$upd_in_tbl  = NULL;

			

		$cnt_mod_col	= 0;

		$ins_adt_arr 	= array();

		$chk_arr_nw	 	= array();

		$upd_arr_tbl	= array();

		$val_arr_tbl 	= array();

		$web_id_fr_adt	= NULL;

		$seq_fr_adt 	= NULL;

		

		$adt_tbl_nm  	= $tbl_1;

		$upd_in_tbl  	= $tbl_2;

		$web_id_fr_adt 	= $adt_val1;

		$upd_arr_tbl 	= $ary1;

		$val_arr_tbl 	= $ary2;

		$seq_fr_adt		= $adt_val2;

		$ky_colum_nm	= $adt_val3;

		$ky_colum_val	= $adt_val4;

		

		$chk_arr_nw = array_keys($upd_arr_tbl);

		while($cnt_mod_col < count($upd_arr_tbl))

		{

			

			// same values can be populated across all tables all menus.

			$ins_adt_arr['mod_in_tbl_nm']	= $upd_in_tbl;

			$ins_adt_arr['file_nm']		  	= basename($_SERVER['PHP_SELF']);

			

			$ins_adt_arr['rec_mod_dt']		= date("d-m-Y H:i:s");

			$ins_adt_arr['rec_mod_by']		= $_SESSION['adminId'];

			$ins_adt_arr['locn_cd']			= $_SESSION['location_code'];

			$ins_adt_arr['belong_to']		= $_SESSION['identifier'];

			$ins_adt_arr['web_id']			= $web_id_fr_adt;

			

			// for below entries care need to be taken for making an entry into the DB for each menu / page

			

			$ins_adt_arr['colm_mod']	  	= $chk_arr_nw[$cnt_mod_col];

			$ins_adt_arr['old_val']			= $val_arr_tbl[$chk_arr_nw[$cnt_mod_col]];//$data_disc[$chk_arr_nw[$cnt_mod_col]];

			$ins_adt_arr['new_val']			= $upd_arr_tbl[$chk_arr_nw[$cnt_mod_col]];

				//rand generated seq to taag together al entries made as part of one transaction.

			$ins_adt_arr['mod_activity_seq']= $seq_fr_adt;

			// identifier for the key element for which this change is being audited.

			$ins_adt_arr['key_col_nm']	  	= $ky_colum_nm;

			$ins_adt_arr['key_col_val']		= $ky_colum_val;

			

			

	// to be removed till below comment if alternate insert option used.

			$sql_adt = "INSERT INTO ".$adt_tbl_nm." SET ";

		

			foreach($ins_adt_arr as $key_adt => $ret_ins_mod){

				$sql_adt.='';

				$sql_adt.= "`".$key_adt."` = '".$ret_ins_mod."',";

			}

			$sql_adt = substr(trim($sql_adt),0,-1);  

			//$ret_ins_mod = $this->executeQuery($sql_adt);

			 mysql_query($sql_adt) or die(" Query failed : ".mysql_errno());

	

			 

			 $ret_ins_mod = mysql_insert_id();

	// to be removed till above removal comment if alternate insert option used.

	

			if ($ret_ins_mod == '')

			{

				$ret = false;

				return $ret;

			}

			else

			{

				$ret = true;

			}

			

			$cnt_mod_col++;

		}

		

		return $ret;

		

	}

	

	function getLocation_Website_Name($code)

	{

		$sql_fetch = "SELECT P.location_name,O.website_name, O.website_code,P.website_id

	FROM website_locations P INNER JOIN websites_list O ON P.website_id = O.website_id

	WHERE P.location_code = '".$code."'";

	

		$fetch = $this->fetchArray( $sql_fetch );

		if($fetch!=false)

		{

			return $fetch;

		}

		else

		{

			return false;

		}



	}



	function getStateList($state_id='')

	{

		$returnstr=''; $selected='';

		//$fetch=mysql_query() or die('mysql error ->'.mysql_error());

		$sql = "select StateID, StateName from  state where CountryID = 1 order by ChangeDate desc";

		$fetch = $this->get_Resource( $sql );

	

		if($fetch==true)

		{

			$returnstr.='<option value="">Select State</option>';

			while($resfetch=mysqli_fetch_array($fetch))

			{

				

				if($resfetch['StateID']==$state_id) {

					$returnstr.='<option value="'.$resfetch['StateID'].'" selected="true">'.$resfetch['StateName'].'</option>';

				} else {

					$returnstr.='<option value="'.$resfetch['StateID'].'">'.$resfetch['StateName'].'</option>';

				}

			}

		}

		return $returnstr;	

	}

	

	function getCountryList($country_id='')

	{

		$returnstr=''; $selected='';

		

		$sql = "select country_id, country_name from countries where delete_flag = 1 and status = 1 order by country_name desc";

		$fetch = $this->get_Resource( $sql );

	

		if($fetch==true)

		{

			$returnstr.='<option value="">Select Country</option>';

			while($resfetch=mysqli_fetch_array($fetch))

			{

				

				if($resfetch['country_id']==$country_id) {

					$returnstr.='<option value="'.$resfetch['country_id'].'" selected="true">'.$resfetch['country_name'].'</option>';

				} else {

					$returnstr.='<option value="'.$resfetch['country_id'].'">'.$resfetch['country_name'].'</option>';

				}

			}

		}

		return $returnstr;	

	}

	

	

	function GetUserTypes($type_id='',$created_by=''){

	$returnstr=''; 

	$selected='';

	

	if($created_by=='U'){

		

	$sql = "select category_name, category_value from  user_categorization where user_creation_allowed = 1 and status=1 order by category_id desc";

		$fetch = $this->get_Resource( $sql );

	}else{

		$sql = "select category_name, category_value from  user_categorization where status=1 and user_creation_allowed = 1 order by category_id desc";

		$fetch = $this->get_Resource( $sql );

	}

	if($fetch ==true)

	{

		$returnstr.='<option value="">Select User Group</option>';

		while($resfetch=mysqli_fetch_array($fetch))

		{

			if($resfetch['category_value']==$type_id) {

				$returnstr.='<option value="'.$resfetch['category_value'].'" selected="true">'.$resfetch['category_name'].'</option>';

		} else {

				$returnstr.='<option value="'.$resfetch['category_value'].'">'.$resfetch['category_name'].'</option>';

			}

		}

	}else{

		$returnstr.='<option value="">Select user Group</option>';

	}

	return $returnstr;	

	}

	

	public function chkUserType($usr_typ){

		$result='';

		

		$sql = "select category_name from  user_categorization where category_value='".$usr_typ."'";

		$result = $this->fetchArray( $sql );

		if($result!=false)

		{

			return $result;

		}

		else

		{

			return false;

		}

	}

	function getStateName($state_id){

		$result='';

		$sql = "select StateName from  state where StateID='".$state_id."'";

		$fetch = $this->fetchArray( $sql );

		if($fetch==true)

		{

			return $fetch;

		}

		else

		{

			return false;

		}



	}

	

	function getCountryName($country_id){

		$result='';

		$sql = "select country_name from countries where country_id = '".$country_id."'";

		$fetch = $this->fetchArray( $sql );

		if($fetch==true)

		{

			return $fetch;

		}

		else

		{

			return false;

		}



	}

	function decode($str)

	{

		$str = htmlspecialchars_decode($str,ENT_QUOTES);

		return html_entity_decode(trim($str),ENT_QUOTES);

	}

	

	public function getBaseLocation($location_code,&$rtn_data) // this function is using to check loaction is base location or not and one parameter is passing as location code

	{

		$rtn_sts 	= NULL;

		$rtn_data 	= NULL;

		$sql = "select location_id, website_id, location_name, base_location from website_locations where location_status = '1' and location_code='".$location_code."' and delete_flag ='1'";

		//echo $sql;

		//exit;

		$rtn_sts = $this->fetchArray( $sql );

		if($rtn_sts!=false)

		{

			$rtn_data = $rtn_sts;

			return true;

		}

		else

		{

			return false;

		}

	}

	public function createRandomVal($val) 

	{

		$chars="abcdTUVWXYZefghi01234jkl_-+=&*zABCDEFGHIJK56789LMNOPQRS";

		srand((double)microtime()*1000000);

		$i = 0;

		$pass = '' ;

		while ($i<=$val) 

		{

			$num  = rand() % 33;

			$tmp  = substr($chars, $num, 1);

			$pass = $pass . $tmp;

			$i++;

		}

		return $pass;

	}

		function GetSelectedInfoGroupType($type_id='',$user_group){

		$returnstr=''; $selected='';

			/*$fetch=mysql_query("select group_id, group_name from  info_groups where status=1 and delete_flag = 1 and user_group = '".$user_group."'");

*/			

			$sql = "select group_id, group_name from  info_groups where status=1 and delete_flag = 1 and user_group = '".$user_group."'";

			

			

		$fetch  = $this->get_resource( $sql );

		if($fetch!==false)

		{

			$returnstr.='<option value="">Select</option>';

			while($resfetch=mysqli_fetch_array($fetch))

			{

					if($resfetch['group_id']==$type_id) {

						$returnstr.='<option value="'.$resfetch['group_id'].'" selected="true">'.$resfetch['group_name'].'</option>';

					} else {

						$returnstr.='<option value="'.$resfetch['group_id'].'">'.$resfetch['group_name'].'</option>';

					}

			}

		}else{

			$returnstr.='<option value="">Select </option>';

		}

		return $returnstr;	

	}

	public function generatethissql($vari11,$vari12,$vari13,&$vari15)

	{

		$val11		=	NULL;

		$val12		=	NULL;

		$val13		=	NULL;

		$val15		=	NULL;

		$ret_val	=	NULL;

		$ret_stat	=	NULL;

		$ret_su		=	NULL;

		

		$val11 = $vari11;

		$val12 = $vari12;

		$val13 = $vari13;

		

		

		$ret_val = "SELECT ".$val11." FROM ".$val12;		

		$ret_val.= " WHERE ".$val13;

		

		$vari15 = $ret_val;

		

		return true;

	}

	public function createRandomPassword() 

	{

		$chars="abcdTUVWXYZefghi01234jklmnopqrstuvwxyzABCDEFGHIJK56789LMNOPQRS";

		srand((double)microtime()*1000000);

		$i = 0;

		$pass = '' ;

		while ($i<=8) 

		{

			$num  = rand() % 33;

			$tmp  = substr($chars, $num, 1);

			$pass = $pass . $tmp;

			$i++;

		}

		return $pass;

	}

	public function getBaseName($filename)

	{

		if($filename!='')

		{

			$basename=basename($filename);

			$basename=explode(".",$basename);

			$end=end($basename);

			return strtolower($end);

		}

		else

		{

			return false;

		}

	}

	public function imagetype($end)

	{

		$end=strtolower(trim($end));

		if($end=="jpeg" || $end=="png" || $end=="jpg" || $end=="gif") {

			$return3 = true;	

		} else {

			$return3 = false;

		}

		return $return3;

	}

	public function getAddType($type){

	switch ($type) {

		case "1":

		echo "Slider";

		break;

		case "2":

		echo "Full Box";

		break;

		case "3":

		echo "Half Box";

		break;

		case "4":

		echo "Category";

		break;

		default:

		echo "Not Found";

	}

	}

	public function Get_Valid_Exe(){

	$Exe_array = array();

	$sql_Get = "Select sub_extension_name from sub_extensions where status = 1 and delete_flag = 1";

	

	

	$sql_Exe = $this->get_resource( $sql_Get );

	if($sql_Exe!==false)

	{

		if($sql_Exe!== false and mysqli_num_rows($sql_Exe)>0){

			while($res = mysqli_fetch_row($sql_Exe)){

				$Exe_array[] = $res[0];

			}

		}else{

			$Exe_array = "empty";

		}

	}

	else

	{

		

		$Exe_array = "empty";

	}

	return $Exe_array;

  }

  

  public function get_User_ClassificationList($belong_to,$locn_code,$selec='',$left_bar='')// this is a generic function in which we can give condition that show in left bar yes or no

	{

		$returnstr		=	''; 

		$selected		=	'';

		$show_lft_bar 	= 	'';

		if(!empty($left_bar))

		{

			$show_lft_bar = "and show_in_left_bar = 'Y'";

		}

		else

		{

			$show_lft_bar= '';

		}

		$sql = "select category_id, category_name from category_list  where status=1 and delete_flag=1 ".$show_lft_bar." order by date_of_record_creation desc";

		$fetch = $this->get_resource( $sql );

		

		if($fetch!==false and mysqli_num_rows($fetch)>1)

		{

			$returnstr.='<option value="">Select Category</option>';

			while($resfetch=mysqli_fetch_array($fetch))

			{

				if($resfetch['category_id']==$selec) {

					$returnstr.='<option value="'.$resfetch['category_id'].'" selected="true">'.$resfetch['category_name'].'</option>';

				} else {

					$returnstr.='<option value="'.$resfetch['category_id'].'">'.$resfetch['category_name'].'</option>';

				}

			}

		}

		else

		{

			$returnstr='<option value="">Select Category</option>';

		}

		return $returnstr;	

	}

	

	public function get_classi_SubClassification($categoryid,$subcategory_id)

	{

		$id_array = explode(",",$subcategory_id);

		$returnstr=''; $selected='';

		$sql1 = "select sub_category_id,sub_category_name from sub_category_list where status=1 and sub_category_belong_to_category='".$categoryid."' order by date_of_record_creation desc";

		$fetch = $this->get_resource( $sql1 ); 

		if($fetch!==false && mysqli_num_rows($fetch)>0)

		{

			$returnstr.='<option value="">Select Category</option>';

			while($resfetch=mysqli_fetch_array($fetch))

			{

				if(in_array($resfetch['sub_category_id'], $id_array)) {

					$returnstr.='<option value="'.$resfetch['sub_category_id'].'" selected="true">'.$resfetch['sub_category_name'].'</option>';

				} else {

					$returnstr.='<option value="'.$resfetch['sub_category_id'].'">'.$resfetch['sub_category_name'].'</option>';

				}

			}

		}

		else

		{

			$returnstr =  false;

		}

		return $returnstr;	

	}

	

	function get_User_SubClassification($classi_id,$userid){

	

		$data_Array = array();

		$fetch = "select sub_category_id, sub_category_name from sub_category_list where status='1' and delete_flag = '1'  and sub_category_belong_to_category='".$classi_id."' and sub_category_belong_to='".$userid."' order by date_of_record_creation desc";

		$exec_Fetch = $this->check_query( $fetch );

		

		if($exec_Fetch!==false && mysqli_num_rows($exec_Fetch)>0){

			$i=1;

			while($fetch_Data = mysqli_fetch_assoc($exec_Fetch)){

				$data_Array[$i][url] = $fetch_Data['sub_category_name'];

				$data_Array[$i][id] = $fetch_Data['sub_category_id'];

				$i++;

			}

		$data_Array[count_Tot] = count($data_Array);

		}else{

			$data_Array = 'error';

		}

		return $data_Array;

		

	}



	public function createRandnum($val)

	{

		$num_list 	= 	NULL;

		$rand_num2 	= 	NULL;

		$ret 		= 	NULL;

		$val_tmp	=	NULL;

		

		$val_tmp	=	$val - 1;

	

		$num_list="92516470380987654392470128765";

		srand((double)microtime()*1000000);

		$i = 0;

	   // $ret = '' ;

		while ($i<=$val_tmp) 

		{

			$sub_num_cd = 	NULL;

			$rand_num2  = rand() % 33;

			$sub_num_cd  = substr($num_list, $rand_num2, 1);

			$ret = $ret.$sub_num_cd;

			$i++;

		}

		return $ret;

		

	}

	public function createRandalpha($val)

	{

		$char_list 	= 	NULL;

		$rand_num 	= 	NULL;

		$pass 		= 	NULL;

		

		$char_list="AZXDRESWCFTYJMNGHVBNLIOJPUHYKJHFDYIUHHKP";

		srand((double)microtime()*1000000);

		$i = 1;

	   // $pass = '' ;

		while ($i<=$val) 

		{

			$sub_cd 	= 	NULL;

			$rand_num  = rand() % 33;

			$sub_cd  = substr($char_list, $rand_num, 1);

			$pass = $pass . $sub_cd;

			$i++;

		}

		return $pass;

		

	}

	public function SelectifOneValue($table,$cond,$what,&$retun_val)

	{

		$sql_d_cd		= NULL;	

		$sql_get_d_cd 	= NULL;

		$sql_get_d_cd_q	= NULL;

		$retu_val		= NULL;

		$retun_val		= NULL;

		

		$sql_d_cd_q = "SELECT ".$what." FROM ".$table;		

		$sql_d_cd_q.= " WHERE ".$cond;

		

		$sql_d_cd	=	$this->check_query( $sql_d_cd_q );

		

		

		//$sql_d_cd = mysql_query($sql_d_cd_q);

		if($sql_d_cd!==false and mysqli_num_rows($sql_d_cd)==1)

		{

			

			$retu_val = mysqli_fetch_row($sql_d_cd);

			

			if ($retu_val[0] != '')

			{

				$retun_val = $retu_val[0];

				$sql_get_d_cd = 'go';

				return $sql_get_d_cd;

			}

			else

			{

				$sql_get_d_cd = 'norecfound';

				return $sql_get_d_cd;

			}

		}

		else if($sql_d_cd!==false and mysqli_num_rows($sql_d_cd)>1)

		{ 

			$sql_get_d_cd = 'mult';

			return $sql_get_d_cd;

		}

		else if($sql_d_cd!==false and mysqli_num_rows($sql_d_cd)==0)

		{ 

			$sql_get_d_cd = 'empty';

			return $sql_get_d_cd;

		}

		else

		{

			$sql_get_d_cd = 'error';

			return $sql_get_d_cd;

		}	

	 }

	 

	 public function getSubCategoryName($string,$category_id){

		$data_list = NULL;

		$array 		= explode(",",$string);

		$data_list="";

		foreach($array as $arr){

			$sql = "select sub_category_name from sub_category_list where sub_category_id = '".$arr."' and sub_category_belong_to_category = '".$category_id."'";

	

			//echo $sql;

			//exit;

			$sql_Exec = $this->check_query($sql);

			if($sql_Exec!==false && mysqli_num_rows($sql_Exec)>0)

			{

				$result=mysqli_fetch_row($sql_Exec);

				$data_list.=$result[0].", ";

			}

			else if($sql_Exec!==false && mysqli_num_rows($sql_Exec)==0)

			{

			}

			else

			{

				$data_list = false;

				

			}

		}	

		return $data_list;

	}

	

}

?>