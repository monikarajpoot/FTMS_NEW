<?php
	
	/*
	send_sms('9893910866', 'this is test sms');
	function send_sms($mobile_numbers,$content) {
           function post_to_url($url, $data) {           
		   $fields = '';
           foreach($data as $key => $value) { 
              $fields .= $key . '=' . $value . '&'; 
           }
           rtrim($fields, '&');
           $post = curl_init();
           curl_setopt($post, CURLOPT_URL, $url);
           curl_setopt($post, CURLOPT_POST, count($data));
           curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
           curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
           return $result = curl_exec($post);
           curl_close($post);
        }
        $data = array(
           "username" => "DITMP-MPLSWD",	             // type your assigned username here(for example:                  "username" => "CDACMUMBAI") 
           "password" => "lladbho#123",	             //type your password
           "senderid" =>"MPLAWD",	             //type your senderID
           "smsservicetype" =>'bulkmsg',         //*Note*  for single sms enter  ”singlemsg” , for bulk   		enter “bulkmsg”
           "mobileno" =>'mobileno',              //enter the mobile number 
           "bulkmobno" => $mobile_numbers,		//enter the mobile numbers separated by commas, in case of bulk sms otherwise leave it blank
           "content"  => urlencode($content)	             //type the message.            
        );
        $ret = post_to_url("http://msdgweb.mgov.gov.in/esms/sendsmsrequest", $data);
		if(!empty($ret)){ 
			echo  'Mesdsage send successfully!';			
		}else{
			echo "<br/>";
			echo "Sms not sent.";
		}		
    }
	*/
	echo 'welcome';
?>