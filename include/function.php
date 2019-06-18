<?php
Function enkripsi($a){
	global $e;
	global $n;
	$data[0]=1;
	for($i=0; $i<=$e; $i++){
		$rest[$i]=pow($a,1)%$n;
		if($data[$i]>$n){
			$data[$i+1]=$data[$i]*$rest[$i]%$n;
		}else{
			$data[$i+1]=$data[$i]*$rest[$i];
		}
	}
	$get=$data[$e]%$n;
	return $get;
}
Function dekripsi($a){
	global $d;
	global $n;
	$data[0]=1;
	for($i=0; $i<=$d; $i++){
		$rest[$i]=pow($a,1)%$n;
		if($data[$i]>$n){
			$data[$i+1]=$data[$i]*$rest[$i]%$n;
		}else{
			$data[$i+1]=$data[$i]*$rest[$i];
		}
	}
	$get=$data[$d]%$n;
	return $get;
}
function enk($plaintext){
	global $n;
	for($i=0;$i<strlen($plaintext); $i++){
		$m=ord($plaintext[$i]);
		if($m<=$n){
			$enc[]=chr(enkripsi($m));
		}else{
			$enc[]=$plaintext[$i];
		}
	}
	return implode("",$enc);
}
function enk_array($plaintext){
	global $n;
	for($i=0;$i<strlen($plaintext); $i++){
		$m=ord($plaintext[$i]);
		if($m<=$n){
			$enc[]=chr(enkripsi($m));
		}else{
			$enc[]=$plaintext[$i];
		}
	}
	return $enc;
}
function enk_array_num($plaintext){
	global $n;
	for($i=0;$i<strlen($plaintext); $i++){
		$m=ord($plaintext[$i]);
		if($m<=$n){
			$enc[]=enkripsi($m);
		}else{
			$enc[]=$plaintext[$i];
		}
	}
	return $enc;
}
function dek($chipertext){
	global $n;
	for($i=0;$i<strlen($chipertext); $i++){
		$m=ord($chipertext[$i]);
		if($m<=$n){
			$dec[]=chr(dekripsi($m));
		}else{
			$dec[]=$chipertext[$i];
		}
	}
	return implode("",$dec);
}
function dek_array($chipertext){
	global $n;
	for($i=0;$i<strlen($chipertext); $i++){
		$m=ord($chipertext[$i]);
		if($m<=$n){
			$dec[]=chr(dekripsi($m));
		}else{
			$dec[]=$chipertext[$i];
		}
	}
	return $dec;
}
function dek_array_num($chipertext){
	global $n;
	for($i=0;$i<strlen($chipertext); $i++){
		$m=ord($chipertext[$i]);
		if($m<=$n){
			$dec[]=dekripsi($m);
		}else{
			$dec[]=$chipertext[$i];
		}
	}
	return $dec;
}
?>