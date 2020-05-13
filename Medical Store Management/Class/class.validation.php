<?php
class validation
{
	private $is_validated=false;

	function is_alpha($val)
	{
		return (bool)preg_match("/^([a-zA-Z])+$/i", $val);
	}
    
    function is_alpha_space($val)
    {
        return (bool)preg_match("/^([a-zA-Z ])+$/i", $val);
    }

	function is_number($val)
	{
			return (bool)preg_match("/^([0-9])+$/i", $val);

	}
		function is_latlong($val)
	{
			return (bool)preg_match("/^([0-9.])+$/i", $val);

	}

	function is_usnumber($val)
	{
			return (bool)preg_match("/^([()-0-9])+$/i", $val);

	}

	function is_alphaandhyphen($val)
	{
		return (bool)preg_match("/^([A-Za-z_\-])+$/i", $val);
	}

	function is_alphanumeric($val)
	{
		return (bool)preg_match("/^([a-zA-Z0-9])+$/i", $val);
	}
	function is_alnumun($val)
	{
		return (bool)preg_match("/^([a-zA-Z0-9_])+$/i", $val);
	}
	function is_alnumaddr($val)
	{
		return (bool)preg_match("/^([a-zA-Z0-9 ,\\n\\r])+$/i", $val);
	}

	function is_alphanumericspecial($val)
	{
		return (bool)preg_match("/^([a-zA-Z0-9*!@#$%^\&*\-()|?:'\s.\\\\ ])+$/i", $val);
	}
	function is_alphanumericnm($val)
	{		
		return (bool)preg_match("/^([a-zA-Z0-9 ,])+$/i", $val);
	}
	function is_alphanumericmerch($val)
	{		
		return (bool)preg_match("/^([a-zA-Z0-9 ,@!])+$/i", $val);
	}
	function is_alphanumericspc($val)
	{		
		return (bool)preg_match("/^([a-zA-Z0-9 ])+$/i", $val);
	}
	function is_alphanumericdash($val)
	{		
		return (bool)preg_match("/^([a-zA-Z0-9,\-(). ])+$/i", $val);
	}

	function is_ascii($val)
	{
		return !preg_match('/[^\x00-\x7F]/i', $val);
	}

	function is_base64($val)
	{
		return (bool)!preg_match('/[^a-zA-Z0-9\/\+=]/', $val);
	}		

	function is_boolean($val)
	{
		$booleans = array(1, 0, '1', '0', true, false, true, false);
		$literals = array('true', 'false', 'yes', 'no');
		foreach ($booleans as $bool) {
			if ($val === $bool)
			return true;
		}
		return in_array(strtolower($val), $literals);
	}

	function is_creditcard($val)
	{
		return (bool)preg_match("/^((4\d{3})|(5[1-5]\d{2})|(6011)|(7\d{3}))-?\d{4}-?\d{4}-?\d{4}|3[4,7]\d{13}$/",$val);
	}

	function is_date($val)
	{
		return (strtotime($val) !== false);
	}

	function is_dateRe($date)
	{
		return (bool)preg_match("/^\d\d?\.\d\d?\.\d\d\d?\d?$/", $date);
	}		

	function is_dateISO($date)
	{
		return (bool)preg_match("/^\d{4}[\/-]\d{1,2}[\/-]\d{1,2}$/", $date);
	}
	
	function is_decimal($val)
	{
		return (bool)preg_match("/^\d+(\.\d{1,6})?$/'", $val);
	}				

	function is_email($val)
	{
		return (bool)(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$val));		 
	}		

	function is_emaildomain($email)
	{
		return (bool)checkdnsrr(preg_replace('/^[^@]++@/', '', $email), 'MX');
	}

	function is_empty($val)
	{
		return in_array($val, array(null, false, '', array(),(object)array()), true); 
	}

	function is_enum($val, $arr)
	{
		return in_array($val, $arr);		  		 
	}
	
	function is_us_state($val){
		return (bool)preg_match("/^(A[LKSZRAP]|C[AOT]|D[EC]|F[LM]|G[AU]|HI|I[ADL N]|K[SY]|LA|M[ADEHINOPST]|N[CDEHJMVY]|O[HKR]|P[ARW]|RI|S[CD] |T[NX]|UT|V[AIT]|W[AIVY])$/",$val);
	
	}
	
	function is_us_state_lower($val){
		return (bool)preg_match("/^(a[lkszrap]|c[aot]|d[ec]|f[lm]|g[au]|hi|i[adl n]|k[sy]|la|m[adehinopst]|n[cdehjmvy]|o[hkr]|p[arw]|ri|s[cd] |t[nx]|ut|v[ait]|w[aivy])$/",$val);
	
	}
	
	function is_us_zipcode($val){
		return (bool)preg_match("/^([0-9]{5})$/i",$val);
	}

	function is_time12($val){ 
		return (bool)preg_match("/^([1-9]|1[0-2]|0[1-9]){1}(:[0-5][0-9] [aApP][mM]){1}$/",$val); 
	}

	function is_time24($val) 
	{ 
		return (bool)preg_match("/^(([0-1]?[0-9])|([2][0-3])):([0-5]?[0-9])(:([0-5]?[0-9]))?$/",$val); 
	} 	

	function is_htmlsafe($val)
	{
		return (bool)(!preg_match("/<(.*)>.*<$1>/", $val));
	}

	function is_ipaddress($val)
	{
	return (bool)preg_match("/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $val);	
	}
	
	function is_macaddress($val){
	return (bool)preg_match("/^([0-9A-F]{2}[:-]){5}([0-9A-F]{2})$/",$val);
	
	}

	function us_telephone_match($val){
	
		$regex = '/^(?:1(?:[. -])?)?(?:\((?=\d{3}\)))?([2-9]\d{2})'
        .'(?:(?<=\(\d{3})\))? ?(?:(?<=\d{3})[.-])?([2-9]\d{2})'
        .'[. -]?(\d{4})(?: (?i:ext)\.? ?(\d{1,5}))?$/';

		$formats = $val;
		
	if( preg_match($regex, $formats) ) {
        return preg_replace($regex, '($1) $2-$3 ext. $4', $formats);
        
    }
	
	}
	
	function special_character($val){
		$regex = '[[:punct:]]';
		
		if (preg_match('/'.$regex.'/', $val, $matches)) {
	    return($matches);
		}
	}
	
	function valid_url($val)
	{
		$regex = '#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#iS';
		
		return (bool)(preg_match($regex, $val)); 
	}
	
	function valid_pass($candidate){
	   $r1='/[A-Z]/';  //Uppercase
	   $r2='/[a-z]/';  //lowercase
	   $r3='/[!@#$-&.]/';  // whatever you mean by 'special char'
	   $r4='/[0-9]/';  //numbers
	
	   if(preg_match_all($r1,$candidate, $o)<1) return FALSE;
	   if(preg_match_all($r2,$candidate, $o)<1) return FALSE;
	   if(preg_match_all($r3,$candidate, $o)<1) return FALSE;
	   if(preg_match_all($r4,$candidate, $o)<1) return FALSE;
	   if(strlen($candidate)<6) return FALSE;
	   if(strlen($candidate)>15) return FALSE;
	   return TRUE;

	}
	
	function invalid_remarks($candidate)
	{
	   $rc='/["\'$+&*();~^|?]/';  // whatever you dont want entered

	   if(preg_match_all($rc,$candidate, $o)>0) 
	   {
		   return FALSE;
	   }
	  
	   return TRUE;

	}
	
	function Check_Valid_Url($val){
		$reg_exp = "/^(http(s?):\/\/)?(www\.)+[a-zA-Z0-9\.\-\_]+(\.[a-zA-Z]{2,3})+(\/[a-zA-Z0-9\_\-\s\.\/\?\%\#\&\=]*)?$/";
		
		return (bool)(preg_match($reg_exp, $val));
	}
	
	function credit_amount($val,$credit)
	{
			//$select_query="select credit from table name";
			//$data =	$obj_dbms->check_query($select_query);
		
		//echo 	"val".$val;
	//	echo    "credit".$credit;
		//die("good");
			$cal=100/$credit;
			$datas=$cal/10;
			$cal2=$val*$datas;
			$amountss = $cal2/10;
		//$data=$val*.20;
		  $amount = number_format($amountss, 2, '.', '');
		
			return $amount;
		
	}

	
}
?>