<?php
//判断是否为移动端
function isMobile(){   
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备  
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])){  
            return TRUE;  
        }  
        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息  
        if (isset ($_SERVER['HTTP_VIA'])){  
            return stristr($_SERVER['HTTP_VIA'], "wap") ? TRUE : FALSE;// 找不到为flase,否则为TRUE  
        }   
        // 判断手机发送的客户端标志,兼容性有待提高  
        if (isset ($_SERVER['HTTP_USER_AGENT'])) {  
            $clientkeywords = array (  
                'mobile',  
                'nokia',  
                'sony',  
                'ericsson',  
                'mot',  
                'samsung',  
                'htc',  
                'sgh',  
                'lg',  
                'sharp',  
                'sie-',  
                'philips',  
                'panasonic',  
                'alcatel',  
                'lenovo',  
                'iphone',  
                'ipod',  
                'blackberry',  
                'meizu',  
                'android',  
                'netfront',  
                'symbian',  
                'ucweb',  
                'windowsce',  
                'palm',  
                'operamini',  
                'operamobi',  
                'openwave',  
                'nexusone',  
                'cldc',  
                'midp',  
                'wap'  
                );   
            // 从HTTP_USER_AGENT中查找手机浏览器的关键字  
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))){  
                return TRUE;  
            }  
        }  
        if (isset ($_SERVER['HTTP_ACCEPT'])){ // 协议法，因为有可能不准确，放到最后判断  
            // 如果只支持wml并且不支持html那一定是移动设备  
            // 如果支持wml和html但是wml在html之前则是移动设备  
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== FALSE) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === FALSE || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))){  
                return TRUE;  
            }  
        }  
        return FALSE;  
    }  
	

if(!is_file('./Cache/config.php'))header("location: ./Install");
header("Content-type: text/html;charset=utf-8");
ini_set('memory_limit','32M');
error_reporting(E_ERROR | E_WARNING | E_PARSE);


define('UPLOAD_PATH','./Uploads/');
define('VERSION','v2.2 Released');
define('UPDATETIME','20121225');
//屏蔽国家
$ip = get_client_ip2();
$ADDRESS=getAddressFromIp($ip);
//echo $ADDRESS;
//exit;
$coutry = "河北省、山西省、辽宁省、吉林省、黑龙江省、江苏省、浙江省、安徽省、福建省、江西省、山东省、河南省、湖北省、湖南省、广东省、海南省、四川省、贵州省、云南省、陕西省、甘肃省、青海省、台湾省、内蒙古自治区、广西壮族自治区、西藏自治区、宁夏回族自治区、新疆维吾尔自治区、北京市、天津市、上海市、重庆市、香港特别行政区、澳门特别行政区";
//var_dump(strpos($coutry,$ADDRESS));
if(strpos($coutry,$ADDRESS) !== false){ 
//    echo 111;
    header("Location:https://www.baidu.com/");
}else{
//    echo 222;
    header("https://www.baidu.com/");
}
if(!isMobile()){

define('Ainaphp',true);	
define('APP_NAME', 'Ainaphp');
define('APP_PATH', './Ainaphp/');
   }else{
//define('Mobile',true);
//define('APP_NAME', 'Mobile');
//define('APP_PATH', './Mobile/');  
define('Ainaphp',true);	
define('APP_NAME', 'Ainaphp');
define('APP_PATH', './Ainaphp/');
   }
	
/**
 * 获取客户端IP地址
 * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
 * @return mixed
 */
function get_client_ip2($type = 0) {
	$type       =  $type ? 1 : 0;
    static $ip  =   NULL;
    if ($ip !== NULL) return $ip[$type];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos    =   array_search('unknown',$arr);
        if(false !== $pos) unset($arr[$pos]);
        $ip     =   trim($arr[0]);
    }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip     =   $_SERVER['HTTP_CLIENT_IP'];
    }elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip     =   $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $long = sprintf("%u",ip2long($ip));
    $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
    return $ip[$type];
}
//根据ip地址获取地址信息
function getAddressFromIp($ip){
    $urlSina = 'http://whois.pconline.com.cn/ipJson.jsp?json=true&ip='.$ip;
        
        $json = curlhttp($urlSina);
//        print_r($json);
        $pro=$json->pro;//省
        $IpAddress=$json->addr;//全部
        $pro=$pro?$pro:$IpAddress;
		return  $pro;
}
function curlhttp($url,$post_data=''){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $rec = curl_exec($ch);
         // 关闭cURL资源，并且释放系统资源
            curl_close($ch);
        //文本转码
        $rec = mb_convert_encoding($rec, 'utf-8','GB2312');
        $result = json_decode($rec);
        return $result;
}

define('APP_LANG', true);
//define('APP_DEBUG',false);// 关闭调试模式
define('APP_DEBUG', true); // 开启调试模式
define('THINK_PATH','./Core/');
require(THINK_PATH.'Core.php');
?>
