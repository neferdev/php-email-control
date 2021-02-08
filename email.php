<?php 
public function mailControl($param)
	{
		if (filter_var($param, FILTER_VALIDATE_EMAIL)) {
			echo "E-posta Geçerli";
		}else {
			echo "E-posta Geçersiz";
		}
	}
  
