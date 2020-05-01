<?php
	echo error_reporting(E_ALL);
	/*	function filter_string($str){
	$str = html_entity_decode($str);
	$str = stripslashes($str);
	$str = stripslashes($str);
	$str = str_replace("\\r","\r",str_replace("\\n","\n",$str));
	//$str =  str_replace("\\r\\n", "\r\n",mysql_real_escape_string(trim($str)));
	return $str;
}

$to = "sulbha2814@gmail.com";
$subject = "Test Email";
//$link="http://10.115.254.213:8080/data_signing/verifySignData?signData=$signData&publicKey=$publicKey&digitalSignature=$digitalSignature";
//$message = "hello Mam, This is test email-2. <a href='".$link."'>Varify</a>";
$message = "<table  cellspacing \"1\" cellpadding=\"0\"><tbody><tr><td align=\"center\" colspan=\"2\"><h4><u><b>मध्यप्रदेश शासन, विधि एवं विधायी कार्य विभाग, भोपाल</b></u></h4></td></tr><tr><td class=\"style5\" colspan=\"2\"><table width=\"100\%\"><tbody><tr><td align=\"left\">क्रमांक 12/16/14/21-क (आप), </td><td align=\"right\">भोपाल, दिनांक 17-03-2016</td></tr></tbody></table></td></tr><tr><td class=\"style7 top\_class\"> प्रति,</td><td>   <br> शासकीय अधिवक्ता,<br> कार्यालय महाधिवक्ता,<br> मध्यप्रदेश न्यायालय,<br><span>जबलपुर</span> (म. प्र.),</td></tr><tr><td class=\"style7 top\_class\" width=\"55px \">विषय:-</td><td colspan=\"2\"> माननीय न्यायालय, <span id=\"Label5\"> न्यायाधीश,</span> जिला  <span id=\"l2\">(म.प्र.)</span> के     प्रकरण क्रमांक  2016  मध्य प्रदेश शासन विरुद्ध में पारित निर्णय दिनांक  से सम्बंधित साक्ष्यो के कथन की नकले व अन्य दस्तावेज भेजने बाबत |</td></tr><tr><td align=\"left\" class=\"top\_class\">संदर्भ:-</td><td valign=\"top\">आपका यू.ओ. क्रमांक 856756 , दिनांक 19-03-2016<br></td></tr><tr><td align=\"center\" class=\"style1 top\_class\" colspan=\"2\" valign=\"top\">---000---</td></tr><tr></tr><tr><td></td><td class=\"style1\" colspan=\"2\">कृपया उपरोक्त संदर्भित पत्र का अवलोकन करें ।<br><br></td></tr><tr><td></td><td align=\"left\" class=\"style1\" valign=\"top\" colspan=\"2\"><p>क्र //2016  मध्य प्रदेश शासन विरुद्ध  के प्रकरण में सम्बंधित न्यायालय द्वारा सत्र प्रकरण क्रमांक  में  पारित निर्णय दिनांक <b></b> की प्रति एवं साक्षियों के कथनों की नकले व अन्य दस्तावेजों की प्रति इस विभाग की ओर प्रस्तुत करें, तत्पश्चात् प्रकरण में अग्रिम कार्यवाही  की जावेगी । विलंब का दायित्व इस विभाग का नहीं रहेगा ।<br></p></td></tr><tr><td align=\"right\" height=\"60\"></td></tr><tr><td colspan=\"3\"> </td></tr><tr><td colspan=\"3\" align=\"right\"><div contenteditable=\"false\" class=\"officer-center\">( हरि मोहन बाथम )</div></td></tr><tr><td colspan=\"3\" align=\"right\"><div contenteditable=\"false\" class=\"officer-center\">अवर सचिव</div></td></tr><tr><td colspan=\"3\" align=\"right\"><div class=\"law\_dept\" >मध्यप्रदेश शासन विधि और विधायी कार्य विभाग, भोपाल</div></td></tr><tr><td colspan=\"2\"><table width=\"100\%\"><tbody><tr><td align=\"left\">पृ0 क्रमांक 12/16/14/21-क (आप), </td><td align=\"right\">भोपाल, दिनांक 17-03-2016</td></tr></tbody></table></td></tr>  <tr><td width=\"100\"> प्रतिलिपि:-</td><td></td></tr>  <tr><td></td><td><p text-justify=\"\">  पुलिस अधीक्षक, जिला(म0प्र0) की ओर सूचनार्थ  एवं आवश्यक कार्यवाही हेतु प्रेषित हैं ।</p></td></tr><tr><td align=\"right\" height=\"60\"></td></tr><tr><td colspan=\"2\" align=\"right\"><div contenteditable=\"false\" class=\"officer-center\">( हरि मोहन बाथम )</div></td></tr><tr><td colspan=\"2\" align=\"right\"><div contenteditable=\"false\" class=\"officer-center \">अवर सचिव</div></td></tr><tr><td></td><td align=\"right\"><div class=\"law\_dept\">मध्यप्रदेश शासन विधि और विधायी कार्य विभाग, भोपाल</div></td></tr></tbody></table>";


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; // for html
// More headers
$headers .= 'From: <rtrivedi39@gmail.com>' . "\r\n";
//$headers .= 'Cc: fromcc@example.com' . "\r\n";

if(mail($to,$subject,filter_string($message),$headers)){
	echo "sent";
}else
{
	echo "fail";
} */
   echo send_sms('+919893910866', 'this is test sms');
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
           echo $result = curl_exec($post);
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
        echo $ret = post_to_url("http://msdgweb.mgov.gov.in/esms/sendsmsrequest", $data);
		if($ret) { 
			echo  'Mesdsage send successfully!';			
		}else{
		echo "Sms not sent";
		}		
    }
?>