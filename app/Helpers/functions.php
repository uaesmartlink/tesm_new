<?php

// Get Settings
if (!function_exists('get_settings')) {
    function get_settings($key = null)
    {
        return auth()->user()?->account?->toArray();
        return array_merge(auth()->user()?->account?->toArray(), \App\Helpers\Env::changeable()->mapWithKeys(function ($item) {
            return [$item['key'] => $item['value']];
        })?->toArray());

        // if ($key) {
        //     return optional(\App\Models\Setting::where('tec_key', $key)->first())->tec_value;
        // }
        // return \App\Models\Setting::all()->pluck('tec_value', 'tec_key')->merge(['baseUrl' => url('/')]);
    }
}

// Get account id
if (!function_exists('getAccountId')) {
    function getAccountId($account_id = null)
    {
        return session('account_id', $account_id ?? optional(auth()->user())->account_id);
    }
}

// Log Activity
if (!function_exists('log_activity')) {
    function log_activity($activity, $properties = null, $model = null, $name = null)
    {
        return activity($name)->performedOn($model)->withProperties($properties)->log($activity);
    }
}

// Format Decimal
if (!function_exists('formatDecimal')) {
    function formatDecimal($number, $decimals = 4, $ds = '.', $ts = '')
    {
        return number_format($number, $decimals, $ds, $ts);
    }
}

// Format Number
if (!function_exists('formatNumber')) {
    function formatNumber($number, $decimals = 2, $ds = '.', $ts = ',')
    {
        return number_format($number, $decimals, $ds, $ts);
    }
}

// Is Demo Enabled
if (!function_exists('demo')) {
    function demo()
    {
        return env('DEMO', false) || env('WINDOWS', false);
    }
}

if (!function_exists('desktopMachine')) {
    function desktopMachine()
    {
        return env('DESKTOPMACHINE', false);
    }
}

if (!function_exists('notDemo')) {
    function notDemo()
    {
        return !demo();
    }
}

if (!function_exists('__choice')) {
    function __choice(string $key, int $count): string
    {
        return trans_choice(__($key), $count);
    }
}


//لإختيار الدالة المناسبة  حسب خصائص موقعك	
//دالة فحص طريقة الإرسال curl
function curlTest()
{
	$testValue = 0;
	if(function_exists("curl_init"))
		++$testValue;
	if(function_exists("curl_setopt"))
		++$testValue;
	if(function_exists("curl_exec"))
		++$testValue;
	if(function_exists("curl_close"))
		++$testValue;
	if(function_exists("curl_errno"))
		++$testValue;
	return $testValue;
}

if(curlTest() == 5)
{
	//إختبار طريقة curl
	//License Sender's Name API using CURL method
function addSender($userAccount, $passAccount, $sender,$type, $viewResult=1)
{	
	global $arrayAddSender;
	$url = "http://doo.ae/api/addSender.php";
	$stringToPost = "mobile=".$userAccount."&password=".$passAccount."&sender=".$sender."&type=".$type;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $stringToPost);
	$result = curl_exec($ch);

	if($viewResult)
		$result = printStringResult(trim($result), $arrayAddSender, 'Normal');
	return $result;
}

//Check your Balance API using CURL method
function balanceSMS($userAccount, $passAccount, $viewResult=1)
{
	global $arrayBalance;
	$url = "http://doo.ae/api/balance.php";
	$stringToPost = "mobile=".$userAccount."&password=".$passAccount;
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $stringToPost);
	$result = curl_exec($ch);

	if($viewResult)
		$result = printStringResult(trim($result), $arrayBalance, 'Balance');
	return $result;
}

//Retrieve your password API using CURL method
function forgetPassword($userAccount, $sendType, $viewResult=1)
{
	global $arrayForgetPassword;
	$url = "http://doo.ae/api/forgetPassword.php";
	$stringToPost = "mobile=".$userAccount."&type=".$sendType;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $stringToPost);
	$result = curl_exec($ch);
	
	if($viewResult)
		$result = printStringResult(trim($result) , $arrayForgetPassword);
	return $result;
}

//Send SMS API using CURL method
function sendSMS($userAccount, $passAccount, $numbers, $sender, $msg, $timeSend=0, $dateSend=0, $viewResult=1, $MsgID=0)
{
	global $arraySendMsg;
	$url = "http://doo.ae/api/msgSend.php";
	$applicationType = "24";  
    $msg = convertToUnicode($msg);
	$sender = urlencode($sender);
	//$domainName = $_SERVER['SERVER_NAME'];
	$stringToPost = "mobile=".$userAccount."&password=".$passAccount."&numbers=".$numbers."&sender=".$sender."&msg=".$msg."&timeSend=".$timeSend."&dateSend=".$dateSend."&applicationType=".$applicationType."&msgId=".$MsgID;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $stringToPost);
	$result = curl_exec($ch);

	if($viewResult)
		$result = printStringResult(trim($result) , $arraySendMsg);
	return $result;
}

//Send Formatted SMS API using CURL method
function sendSMSWK($userAccount, $passAccount, $numbers, $sender, $msg, $msgKey, $timeSend=0, $dateSend=0, $viewResult=1)
{
	global $arraySendMsgWK;
	$url = "http://doo.ae/api/msgSendWK.php";
	$applicationType = "24";  
    $msg = convertToUnicode($msg);
	$msgKey = convertToUnicode($msgKey);
	$sender = urlencode($sender);
	$domainName = $_SERVER['SERVER_NAME'];
	$stringToPost = "mobile=".$userAccount."&password=".$passAccount."&numbers=".$numbers."&sender=".$sender."&msg=".$msg."&msgKey=".$msgKey."&timeSend=".$timeSend."&dateSend=".$dateSend."&applicationType=".$applicationType;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $stringToPost);
	$result = curl_exec($ch);

	if($viewResult)
		$result = printStringResult(trim($result) , $arraySendMsgWK);
	return $result;
}

//Check Send Status API using CURL method
function sendStatus($viewResult=1)
{
	global $arraySendStatus;	
	$url = "http://doo.ae/api/sendStatus.php";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	$result = curl_exec($ch);

	if($viewResult)
		$result = printStringResult(trim($result) , $arraySendStatus);
	return $result;
}

//Check Send Status API using CURL method
function senderAvailability($userAccount, $type=0, $viewResult=1)
{	
	global $arraySenderAvailability;
	$url = "http://doo.ae/api/senderAvailability.php";
	$stringToPost = "mobile=".$userAccount."&type=".$type;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $stringToPost);
	$result = curl_exec($ch);

	if($viewResult)
		$result = printStringResult(trim($result) , $arraySenderAvailability);
	return $result;
}
}

else
{
	//للخروج من عملية الإرسال في حال لم يكن هنالك أي دالة مفعله
	echo "لا يوجد لديك دوال مفعلة<br>راجع الإستضافة وفعل إحدى البوابات الثلاث fsockopen أو curl أو fopen أو file او filegetcontents";
}

//لطباعة القيمة الناتجه من بوابة الإرسال على شكل نص
//لطباعة القيمة الناتجه من بوابة الإرسال على شكل نص
function printStringResult($apiResult, $arrayMsgs, $printType = 'Alpha')
{
	global $undefinedResult;
	switch ($printType)
	{
		case 'Alpha':
		{
			if(array_key_exists($apiResult, $arrayMsgs))
				return $arrayMsgs[$apiResult];
			else
				return $arrayMsgs[0];
		}
		break;

		case 'Balance':
		{
			if(array_key_exists($apiResult, $arrayMsgs))
				return $arrayMsgs[$apiResult];
			else
			{
				list($originalAccount, $currentAccount) = explode("/", $apiResult);
				if(!empty($originalAccount) && !empty($currentAccount))
				{
					return sprintf($arrayMsgs[3], $currentAccount, $originalAccount);
				}
				else
					return $arrayMsgs[0];
			}
		}
		break;
			
		case 'Senders':
		{
			$apiResult = str_replace('[pending]', '[pending]<br>', $apiResult);
			$apiResult = str_replace('[active]', '<br>[active]<br>', $apiResult);
			$apiResult = str_replace('[notActive]', '<br>[notActive]<br>', $apiResult);
			return $apiResult;
		}
		break;
		
		case 'Normal':
			if($apiResult[0] != '#')
				return $arrayMsgs[$apiResult];
			else
				return $apiResult;
		break;
	}		
}

//دالة تشفير نص الرساله إلى الترميز UNICODE
//دالة تحويل الرساله إلى ترميز UNICODE الخاص بالإرسال من خلال بوابة دوو
function convertToUnicode($message)
{
	$chrArray[0] = "،";
	$unicodeArray[0] = "060C";
	$chrArray[1] = "؛";
	$unicodeArray[1] = "061B";
	$chrArray[2] = "؟";
	$unicodeArray[2] = "061F";
	$chrArray[3] = "ء";
	$unicodeArray[3] = "0621";
	$chrArray[4] = "آ";
	$unicodeArray[4] = "0622";
	$chrArray[5] = "أ";
	$unicodeArray[5] = "0623";
	$chrArray[6] = "ؤ";
	$unicodeArray[6] = "0624";
	$chrArray[7] = "إ";
	$unicodeArray[7] = "0625";
	$chrArray[8] = "ئ";
	$unicodeArray[8] = "0626";
	$chrArray[9] = "ا";
	$unicodeArray[9] = "0627";
	$chrArray[10] = "ب";
	$unicodeArray[10] = "0628";
	$chrArray[11] = "ة";
	$unicodeArray[11] = "0629";
	$chrArray[12] = "ت";
	$unicodeArray[12] = "062A";
	$chrArray[13] = "ث";
	$unicodeArray[13] = "062B";
	$chrArray[14] = "ج";
	$unicodeArray[14] = "062C";
	$chrArray[15] = "ح";
	$unicodeArray[15] = "062D";
	$chrArray[16] = "خ";
	$unicodeArray[16] = "062E";
	$chrArray[17] = "د";
	$unicodeArray[17] = "062F";
	$chrArray[18] = "ذ";
	$unicodeArray[18] = "0630";
	$chrArray[19] = "ر";
	$unicodeArray[19] = "0631";
	$chrArray[20] = "ز";
	$unicodeArray[20] = "0632";
	$chrArray[21] = "س";
	$unicodeArray[21] = "0633";
	$chrArray[22] = "ش";
	$unicodeArray[22] = "0634";
	$chrArray[23] = "ص";
	$unicodeArray[23] = "0635";
	$chrArray[24] = "ض";
	$unicodeArray[24] = "0636";
	$chrArray[25] = "ط";
	$unicodeArray[25] = "0637";
	$chrArray[26] = "ظ";
	$unicodeArray[26] = "0638";
	$chrArray[27] = "ع";
	$unicodeArray[27] = "0639";
	$chrArray[28] = "غ";
	$unicodeArray[28] = "063A";
	$chrArray[29] = "ف";
	$unicodeArray[29] = "0641";
	$chrArray[30] = "ق";
	$unicodeArray[30] = "0642";
	$chrArray[31] = "ك";
	$unicodeArray[31] = "0643";
	$chrArray[32] = "ل";
	$unicodeArray[32] = "0644";
	$chrArray[33] = "م";
	$unicodeArray[33] = "0645";
	$chrArray[34] = "ن";
	$unicodeArray[34] = "0646";
	$chrArray[35] = "ه";
	$unicodeArray[35] = "0647";
	$chrArray[36] = "و";
	$unicodeArray[36] = "0648";
	$chrArray[37] = "ى";
	$unicodeArray[37] = "0649";
	$chrArray[38] = "ي";
	$unicodeArray[38] = "064A";
	$chrArray[39] = "ـ";
	$unicodeArray[39] = "0640";
	$chrArray[40] = "ً";
	$unicodeArray[40] = "064B";
	$chrArray[41] = "ٌ";
	$unicodeArray[41] = "064C";
	$chrArray[42] = "ٍ";
	$unicodeArray[42] = "064D";
	$chrArray[43] = "َ";
	$unicodeArray[43] = "064E";
	$chrArray[44] = "ُ";
	$unicodeArray[44] = "064F";
	$chrArray[45] = "ِ";
	$unicodeArray[45] = "0650";
	$chrArray[46] = "ّ";
	$unicodeArray[46] = "0651";
	$chrArray[47] = "ْ";
	$unicodeArray[47] = "0652";
	$chrArray[48] = "!";
	$unicodeArray[48] = "0021";
	$chrArray[49]='"';
	$unicodeArray[49] = "0022";
	$chrArray[50] = "#";
	$unicodeArray[50] = "0023";
	$chrArray[51] = "$";
	$unicodeArray[51] = "0024";
	$chrArray[52] = "%";
	$unicodeArray[52] = "0025";
	$chrArray[53] = "&";
	$unicodeArray[53] = "0026";
	$chrArray[54] = "'";
	$unicodeArray[54] = "0027";
	$chrArray[55] = "(";
	$unicodeArray[55] = "0028";
	$chrArray[56] = ")";
	$unicodeArray[56] = "0029";
	$chrArray[57] = "*";
	$unicodeArray[57] = "002A";
	$chrArray[58] = "+";
	$unicodeArray[58] = "002B";
	$chrArray[59] = ",";
	$unicodeArray[59] = "002C";
	$chrArray[60] = "-";
	$unicodeArray[60] = "002D";
	$chrArray[61] = ".";
	$unicodeArray[61] = "002E";
	$chrArray[62] = "/";
	$unicodeArray[62] = "002F";
	$chrArray[63] = "0";
	$unicodeArray[63] = "0030";
	$chrArray[64] = "1";
	$unicodeArray[64] = "0031";
	$chrArray[65] = "2";
	$unicodeArray[65] = "0032";
	$chrArray[66] = "3";
	$unicodeArray[66] = "0033";
	$chrArray[67] = "4";
	$unicodeArray[67] = "0034";
	$chrArray[68] = "5";
	$unicodeArray[68] = "0035";
	$chrArray[69] = "6";
	$unicodeArray[69] = "0036";
	$chrArray[70] = "7";
	$unicodeArray[70] = "0037";
	$chrArray[71] = "8";
	$unicodeArray[71] = "0038";
	$chrArray[72] = "9";
	$unicodeArray[72] = "0039";
	$chrArray[73] = ":";
	$unicodeArray[73] = "003A";
	$chrArray[74] = ";";
	$unicodeArray[74] = "003B";
	$chrArray[75] = "<";
	$unicodeArray[75] = "003C";
	$chrArray[76] = "=";
	$unicodeArray[76] = "003D";
	$chrArray[77] = ">";
	$unicodeArray[77] = "003E";
	$chrArray[78] = "?";
	$unicodeArray[78] = "003F";
	$chrArray[79] = "@";
	$unicodeArray[79] = "0040";
	$chrArray[80] = "A";
	$unicodeArray[80] = "0041";
	$chrArray[81] = "B";
	$unicodeArray[81] = "0042";
	$chrArray[82] = "C";
	$unicodeArray[82] = "0043";
	$chrArray[83] = "D";
	$unicodeArray[83] = "0044";
	$chrArray[84] = "E";
	$unicodeArray[84] = "0045";
	$chrArray[85] = "F";
	$unicodeArray[85] = "0046";
	$chrArray[86] = "G";
	$unicodeArray[86] = "0047";
	$chrArray[87] = "H";
	$unicodeArray[87] = "0048";
	$chrArray[88] = "I";
	$unicodeArray[88] = "0049";
	$chrArray[89] = "J";
	$unicodeArray[89] = "004A";
	$chrArray[90] = "K";
	$unicodeArray[90] = "004B";
	$chrArray[91] = "L";
	$unicodeArray[91] = "004C";
	$chrArray[92] = "M";
	$unicodeArray[92] = "004D";
	$chrArray[93] = "N";
	$unicodeArray[93] = "004E";
	$chrArray[94] = "O";
	$unicodeArray[94] = "004F";
	$chrArray[95] = "P";
	$unicodeArray[95] = "0050";
	$chrArray[96] = "Q";
	$unicodeArray[96] = "0051";
	$chrArray[97] = "R";
	$unicodeArray[97] = "0052";
	$chrArray[98] = "S";
	$unicodeArray[98] = "0053";
	$chrArray[99] = "T";
	$unicodeArray[99] = "0054";
	$chrArray[100] = "U";
	$unicodeArray[100] = "0055";
	$chrArray[101] = "V";
	$unicodeArray[101] = "0056";
	$chrArray[102] = "W";
	$unicodeArray[102] = "0057";
	$chrArray[103] = "X";
	$unicodeArray[103] = "0058";
	$chrArray[104] = "Y";
	$unicodeArray[104] = "0059";
	$chrArray[105] = "Z";
	$unicodeArray[105] = "005A";
	$chrArray[106] = "[";
	$unicodeArray[106] = "005B";
	$char="\ ";
	$chrArray[107]=trim($char);
	$unicodeArray[107] = "005C";
	$chrArray[108] = "]";
	$unicodeArray[108] = "005D";
	$chrArray[109] = "^";
	$unicodeArray[109] = "005E";
	$chrArray[110] = "_";
	$unicodeArray[110] = "005F";
	$chrArray[111] = "`";
	$unicodeArray[111] = "0060";
	$chrArray[112] = "a";
	$unicodeArray[112] = "0061";
	$chrArray[113] = "b";
	$unicodeArray[113] = "0062";
	$chrArray[114] = "c";
	$unicodeArray[114] = "0063";
	$chrArray[115] = "d";
	$unicodeArray[115] = "0064";
	$chrArray[116] = "e";
	$unicodeArray[116] = "0065";
	$chrArray[117] = "f";
	$unicodeArray[117] = "0066";
	$chrArray[118] = "g";
	$unicodeArray[118] = "0067";
	$chrArray[119] = "h";
	$unicodeArray[119] = "0068";
	$chrArray[120] = "i";
	$unicodeArray[120] = "0069";
	$chrArray[121] = "j";
	$unicodeArray[121] = "006A";
	$chrArray[122] = "k";
	$unicodeArray[122] = "006B";
	$chrArray[123] = "l";
	$unicodeArray[123] = "006C";
	$chrArray[124] = "m";
	$unicodeArray[124] = "006D";
	$chrArray[125] = "n";
	$unicodeArray[125] = "006E";
	$chrArray[126] = "o";
	$unicodeArray[126] = "006F";
	$chrArray[127] = "p";
	$unicodeArray[127] = "0070";
	$chrArray[128] = "q";
	$unicodeArray[128] = "0071";
	$chrArray[129] = "r";
	$unicodeArray[129] = "0072";
	$chrArray[130] = "s";
	$unicodeArray[130] = "0073";
	$chrArray[131] = "t";
	$unicodeArray[131] = "0074";
	$chrArray[132] = "u";
	$unicodeArray[132] = "0075";
	$chrArray[133] = "v";
	$unicodeArray[133] = "0076";
	$chrArray[134] = "w";
	$unicodeArray[134] = "0077";
	$chrArray[135] = "x";
	$unicodeArray[135] = "0078";
	$chrArray[136] = "y";
	$unicodeArray[136] = "0079";
	$chrArray[137] = "z";
	$unicodeArray[137] = "007A";
	$chrArray[138] = "{";
	$unicodeArray[138] = "007B";
	$chrArray[139] = "|";
	$unicodeArray[139] = "007C";
	$chrArray[140] = "}";
	$unicodeArray[140] = "007D";
	$chrArray[141] = "~";
	$unicodeArray[141] = "007E";
	$chrArray[142] = "©";
	$unicodeArray[142] = "00A9";
	$chrArray[143] = "®";
	$unicodeArray[143] = "00AE";
	$chrArray[144] = "÷";
	$unicodeArray[144] = "00F7";
	$chrArray[145] = "×";
	$unicodeArray[145] = "00F7";
	$chrArray[146] = "§";
	$unicodeArray[146] = "00A7";
	$chrArray[147] = " ";
	$unicodeArray[147] = "0020";
	$chrArray[148] = "\n";
	$unicodeArray[148] = "000D";
	$chrArray[149] = "\r";
	$unicodeArray[149] = "000A";

	$strResult = "";
	for($i=0; $i<strlen($message); $i++)
	{
		if(in_array(substr($message,$i,1), $chrArray))
		$strResult.= $unicodeArray[array_search(substr($message,$i,1), $chrArray)];
	}
	return $strResult;
}

//تستخدم هذه القيمة في حال كانت نتيجة العمليه غير معرفه
$undefinedResult = "نتيجة العملية غير معرفه، الرجاء المحاول مجددا";

//الرسائل الناتجه من دالة فحص حالة الإرسال دوو
$arraySendStatus = array();
$arraySendStatus[0] = "نعتذر الإرسال متوقف الآن";
$arraySendStatus[1] = "يمكنك الإرسال الآن";
//الرسائل الناتجه من دالة إسترجاع كلمة المرور
$arrayForgetPassword = array();
$arrayForgetPassword[-2] = "لم يتم الاتصال بالخادم";
$arrayForgetPassword[1] = "رقم الجوال غير متوفر او غير صحيح";
$arrayForgetPassword[2] = "الإيميل الخاص بالحساب غير متوفر او غير صحيح";
$arrayForgetPassword[3] = "تم إرسال كلمة المرور على الجوال بنجاح";
$arrayForgetPassword[4] = "رصيدك غير كافي لإتمام عملية الإرسال";
$arrayForgetPassword[5] = "تم إرسال كلمة المرور على الإيميل بنجاح";

//الرسائل الناتجه من دالة الإرسال
$arraySendMsg = array();
$arraySendMsg[-2] = "لم يتم الاتصال بالخادم";
$arraySendMsg[-1] = "لم يتم الإتصال بقاعدة البيانات";
$arraySendMsg[1] = "تم الإرسال";
$arraySendMsg[2] = "الرصيد = 0.";
$arraySendMsg[3] = "الرصيد غير كافي";
$arraySendMsg[4] = "رقم الجوال غير متوفر او غير صحيح";
$arraySendMsg[5] = "كلمة المرور خاطئه";
$arraySendMsg[12] = "إصدار البوابة غير صحيح";
$arraySendMsg[13] = "إسم المرسل غير مقبول";
$arraySendMsg[15] = "الأرقام المرسل لها غير صحيحه أو فارغه";
$arraySendMsg[16] = "إسم المرسل فارغ";
$arraySendMsg[17] = "نص الرساله غير مشفر بالشكل الصحيح أو نص الرسالة فارغ";


//الرسائل الناتجه من دالة طلب الرصيد
$arrayBalance = array();
$arrayBalance[-2] = "لم يتم الاتصال بالخادم";
$arrayBalance[1] = "رقم الجوال غير متوفر او غير صحيح";
$arrayBalance[2] = "كلمة المرور خاطئه";
//الرسائل الناتجه من دالة طلب إسم المرسل احرف
$arrayAddSender = array();
$arrayAddSender[-2] = "لم يتم الاتصال بالخادم";
$arrayAddSender[1] = "رقم الجوال غير متوفر";
$arrayAddSender[2] = "كلمة المرور خاطئة";
$arrayAddSender[3] = "إسم المرسل غير صحيح";
$arrayAddSender[4] = "إسم المرسل موجود من قبل!";
$arrayAddSender[5] = "لا يمكنك تفعيل رقم جوال كإسم مرسل";
$arrayAddSender[6] = "تم طلب اسم المرسل بنجاح جاري تفعيله من موقع دو";
$arrayAddSender[7] = "لم تتم عملية طلب اسم المرسل بنجاح";
//الرسائل الناتجه من دالة طلب اسماء المرسل المفعلة
$arraySenderAvailability = array();
$arraySenderAvailability[1] = "رقم الجوال غير متوفر او غير صحيح";
//الرسائل الناتجه من دالة قالب الإرسال
$arraySendMsgWK = array();
$arraySendMsgWK[-2] = "لم يتم الاتصال بالخادم";
$arraySendMsgWK[-1] = "لم يتم الإتصال بقاعدة البيانات";
$arraySendMsgWK[1] = "تم الإرسال";
$arraySendMsgWK[2] = "الرصيد = 0";
$arraySendMsgWK[3] = "الرصيد غير كافي";
$arraySendMsgWK[4] = "رقم الجوال غير متوفر او غير صحيح";
$arraySendMsgWK[5] = "كلمة المرور خاطئه";
$arraySendMsgWK[10] = "عدد الارقام لا يساوي عدد الرسائل";
$arraySendMsgWK[14] = "إسم المرسل غير مقبول";
$arraySendMsgWK[15] = "االأرقام المرسل لها غير صحيحه أو فارغه";
$arraySendMsgWK[16] = "إسم المرسل فارغ";
$arraySendMsgWK[17] = "نص الرساله غير مشفر بالشكل الصحيح او نص الرسالة فارغ";