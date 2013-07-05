<?php
/**
 * IRetailerTTC.php
 * 对TTC:t_retailer的赠、查、删、改等操作
 * 
 * @Copyright	(c) 1998-2008 Tencent Inc. All Rights Reserved
 * @Author	root
 */

global $_TTC_CFG;

$_TTC_CFG['IRetailerTTC']['TTCKEY']	= 'IRetailerTTC';
$_TTC_CFG['IRetailerTTC']['TABLE']	= 't_retailer';
$_TTC_CFG['IRetailerTTC']['TimeOut']	= 1;
$_TTC_CFG['IRetailerTTC']['KEY']		= 'uid';
$_TTC_CFG['IRetailerTTC']['FIELDS']	= array();//数据类型，int=1,string=2,binary=3
$_TTC_CFG['IRetailerTTC']['FIELDS']['uid'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IRetailerTTC']['FIELDS']['icsonid'] = array('type' => 2, 'min' => 0, 'max' => 100);
$_TTC_CFG['IRetailerTTC']['FIELDS']['name'] = array('type' => 2, 'min' => 0, 'max' => 128);
$_TTC_CFG['IRetailerTTC']['FIELDS']['qq'] = array('type' => 2, 'min' => 0, 'max' => 20);
$_TTC_CFG['IRetailerTTC']['FIELDS']['tel'] = array('type' => 2, 'min' => 0, 'max' => 64);
$_TTC_CFG['IRetailerTTC']['FIELDS']['email'] = array('type' => 2, 'min' => 0, 'max' => 256);
$_TTC_CFG['IRetailerTTC']['FIELDS']['retailerType'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IRetailerTTC']['FIELDS']['level'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IRetailerTTC']['FIELDS']['regTime'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IRetailerTTC']['FIELDS']['auditUser'] = array('type' => 2, 'min' => 0, 'max' => 128);
$_TTC_CFG['IRetailerTTC']['FIELDS']['editTime'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IRetailerTTC']['FIELDS']['auditTime'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IRetailerTTC']['FIELDS']['status'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IRetailerTTC']['FIELDS']['invoiceId'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IRetailerTTC']['FIELDS']['regIP'] = array('type' => 2, 'min' => 0, 'max' => 20);
$_TTC_CFG['IRetailerTTC']['FIELDS']['info'] = array('type' => 2, 'min' => 0, 'max' => 400);
$_TTC_CFG['IRetailerTTC']['FIELDS']['logo'] = array('type' => 2, 'min' => 0, 'max' => 255);
$_TTC_CFG['IRetailerTTC']['FIELDS']['conpanyName'] = array('type' => 2, 'min' => 0, 'max' => 100);
$_TTC_CFG['IRetailerTTC']['FIELDS']['fax'] = array('type' => 2, 'min' => 0, 'max' => 64);
$_TTC_CFG['IRetailerTTC']['FIELDS']['mobile'] = array('type' => 2, 'min' => 0, 'max' => 64);
$_TTC_CFG['IRetailerTTC']['FIELDS']['sex'] = array('type' => 1, 'min' => 0, 'max' => 255);
$_TTC_CFG['IRetailerTTC']['FIELDS']['district'] = array('type' => 1, 'min' => 0, 'max' => 65535);
$_TTC_CFG['IRetailerTTC']['FIELDS']['address'] = array('type' => 2, 'min' => 0, 'max' => 255);
$_TTC_CFG['IRetailerTTC']['FIELDS']['zipcode'] = array('type' => 2, 'min' => 0, 'max' => 6);
$_TTC_CFG['IRetailerTTC']['FIELDS']['bindManager'] = array('type' => 2, 'min' => 0, 'max' => 128);
$_TTC_CFG['IRetailerTTC']['FIELDS']['useInvoice'] = array('type' => 1, 'min' => 0, 'max' => 255);
$_TTC_CFG['IRetailerTTC']['FIELDS']['pid'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IRetailerTTC']['FIELDS']['stage'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IRetailerTTC']['FIELDS']['flag'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);

//$_TTC_CFG['IRetailerTTC']['FIELDS']['priceSchemeId'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);

class IRetailerTTC
{
	/**
	 * 错误编码
	 */
	public static $errCode = 0;

	/**
	 * 错误消息
	 */
	public static $errMsg  = '';

	/**
	 * ttc记录Map
	 */
	public static $ttcMap  = array();


	/**
	 * 清除错误标识，在每个函数调用前调用
	 */
	private static function clearErr()
	{
		self::$errCode = 0;
		self::$errMsg  = '';
	}

	/**
	 * 增加一条TTC记录
	 * 
	 * @param	$param 格式: 
	 * 	array(
	 * 		'uid' =>  XXX,
	 * 		'icsonid' => 'XXX',
	 * 		'name' => 'XXX',
	 * 		'tel' => 'XXX',
	 * 		'email' => 'XXX',
	 * 		'retailerType' =>  XXX,
	 * 		'level' =>  XXX,
	 * 		'regTime' =>  XXX,
	 * 		'auditUser' => 'XXX',
	 * 		'editTime' =>  XXX,
	 * 		'auditTime' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		'invoiceId' =>  XXX,
	 * 		'regIP' => 'XXX',
	 * 		'info' => 'XXX',
	 * 		'logo' => 'XXX',
	 * 		'conpanyName' => 'XXX',
	 * 		'fax' => 'XXX',
	 * 		'mobile' => 'XXX',
	 * 		'sex' =>  XXX,
	 * 		'district' =>  XXX,
	 * 		'address' => 'XXX',
	 * 		'zipcode' => 'XXX',
	 * 		'bindManager' => 'XXX',
	 * 		'useInvoice' =>  XXX,
	 * 		'priceSchemeId' =>  XXX,
	 * 		)
	 * 
	 * 返回值：正确返回true，错误返回false
	 */
	public static function insert($param)
	{
		self::clearErr();
		
		if(empty($param) || !is_array($param))
		{
			self::$errCode = 111;
			self::$errMsg  = 'param is empty';
		}
		$ttc = Config::getTTC('IRetailerTTC');
		if(!$ttc)
		{
			self::$errCode = 114;
			self::$errMsg  = 'get instance of TTC failed';
			return false;
		}

		$v = $ttc->insert($param);
		if(false === $v)
		{
			self::$errCode = $ttc->errCode;
			self::$errMsg  = $ttc->errMsg;
			return false;
		}

		if(!empty(self::$ttcMap[$param['uid']]))
		{
			unset(self::$ttcMap[$param['uid']]);
		}

		return $v;
	}

	/**
	 * 更新一条TTC记录
	 * 
	 * @param	$param 格式: 
	 * 	array(
	 * 		'uid' =>  XXX,
	 * 		'icsonid' => 'XXX',
	 * 		'name' => 'XXX',
	 * 		'tel' => 'XXX',
	 * 		'email' => 'XXX',
	 * 		'retailerType' =>  XXX,
	 * 		'level' =>  XXX,
	 * 		'regTime' =>  XXX,
	 * 		'auditUser' => 'XXX',
	 * 		'editTime' =>  XXX,
	 * 		'auditTime' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		'invoiceId' =>  XXX,
	 * 		'regIP' => 'XXX',
	 * 		'info' => 'XXX',
	 * 		'logo' => 'XXX',
	 * 		'conpanyName' => 'XXX',
	 * 		'fax' => 'XXX',
	 * 		'mobile' => 'XXX',
	 * 		'sex' =>  XXX,
	 * 		'district' =>  XXX,
	 * 		'address' => 'XXX',
	 * 		'zipcode' => 'XXX',
	 * 		'bindManager' => 'XXX',
	 * 		'useInvoice' =>  XXX,
	 * 		'priceSchemeId' =>  XXX,
	 * 		)
	 * 
	 * 返回值：正确返回true，错误返回false
	 */
	public static function update($param, $filter = array())
	{
		self::clearErr();
		
		if(empty($param) || !is_array($param))
		{
			self::$errCode = 111;
			self::$errMsg  = 'param is empty';
		}
		$ttc = Config::getTTC('IRetailerTTC');
		if(!$ttc)
		{
			self::$errCode = 114;
			self::$errMsg  = 'get instance of TTC failed';
			return false;
		}

		$v = $ttc->update($param, $filter);
		if(false === $v)
		{
			self::$errCode = $ttc->errCode;
			self::$errMsg  = $ttc->errMsg;
			return false;
		}

		if(!empty(self::$ttcMap[$param['uid']]))
		{
			unset(self::$ttcMap[$param['uid']]);
		}

		return $v;
	}

	/**
	 * 删除一条TTC记录
	 * 
	 * @param   string  $key		数据库的主键
	 * 
	 * 返回值：正确返回true，错误返回false
	 */
	public static function remove($key, $filter= array())
	{
		self::clearErr();
		
		if(empty($key))
		{
			self::$errCode = 111;
			self::$errMsg  = 'key is empty';
		}
		$ttc = Config::getTTC('IRetailerTTC');
		if(!$ttc)
		{
			self::$errCode = 114;
			self::$errMsg  = 'get instance of TTC failed';
			return false;
		}

		$v = $ttc->delete($key, $filter);
		if(false === $v)
		{
			self::$errCode = $ttc->errCode;
			self::$errMsg  = $ttc->errMsg;
			return false;
		}

		if(!empty(self::$ttcMap[$key]))
		{
			unset(self::$ttcMap[$key]);
		}

		return $v;
	}

	/**
	 * 取一条TTC记录
	 * 
	 * @param   string  $key		数据库的主键
	 * @param   array   $multikey	可选参数, 多字段key时必选, 形如array('field2' => 1, 'field3' => 2)
	 * 
	 * 返回值：正确返回数据，错误返回false
	 * 数据格式:
	 * 	array(
	 * 		'uid' =>  XXX,
	 * 		'icsonid' => 'XXX',
	 * 		'name' => 'XXX',
	 * 		'tel' => 'XXX',
	 * 		'email' => 'XXX',
	 * 		'retailerType' =>  XXX,
	 * 		'level' =>  XXX,
	 * 		'regTime' =>  XXX,
	 * 		'auditUser' => 'XXX',
	 * 		'editTime' =>  XXX,
	 * 		'auditTime' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		'invoiceId' =>  XXX,
	 * 		'regIP' => 'XXX',
	 * 		'info' => 'XXX',
	 * 		'logo' => 'XXX',
	 * 		'conpanyName' => 'XXX',
	 * 		'fax' => 'XXX',
	 * 		'mobile' => 'XXX',
	 * 		'sex' =>  XXX,
	 * 		'district' =>  XXX,
	 * 		'address' => 'XXX',
	 * 		'zipcode' => 'XXX',
	 * 		'bindManager' => 'XXX',
	 * 		'useInvoice' =>  XXX,
	 * 		'priceSchemeId' =>  XXX,
	 * 		)
	 */
	public static function get($key, $filter = array(), $need = array(), $itemLimit = 0, $start = 0)
	{
		self::clearErr();
		
		if(empty($key))
		{
			self::$errCode = 111;
			self::$errMsg  = 'key is empty';
		}
		$ttc = Config::getTTC('IRetailerTTC');
		if(!$ttc)
		{
			self::$errCode = 114;
			self::$errMsg  = 'get instance of TTC failed';
			return false;
		}

		$v = $ttc->get($key, $filter, $need , $itemLimit, $start );
		if(false === $v)
		{
			self::$errCode = $ttc->errCode;
			self::$errMsg  = $ttc->errMsg;
			return false;
		}

		return $v;
	}

	/**
	 * 批量取TTC记录
	 * 
	 * @param   string  $keys		数据库的主键数组
	 * 
	 * 返回值：正确返回数据，错误返回false
	 */
	public static function gets($keys, $filter=array(), $need=array())
	{
		self::clearErr();
		
		if(empty($keys) || !is_array($keys))
		{
			self::$errCode = 111;
			self::$errMsg  = 'keys is empty';
		}
		$ttc = Config::getTTC2('IRetailerTTC');
		if(!$ttc)
		{
			self::$errCode = 114;
			self::$errMsg  = 'get instance of TTC failed';
			return false;
		}

		$v = $ttc->get($keys, $filter, $need);
		if(false === $v)
		{
			self::$errCode = $ttc->errCode;
			self::$errMsg  = $ttc->errMsg;
			return false;
		}

		return $v;
	}

	/**
	 * 取操作TTC影响的行数
	 * 
	 * 
	 * 返回值：正确返回>-1的行数，错误返回负数
	 */
	public static function getTTCAffectRows()
	{
		$ttc = Config::getTTC('IRetailerTTC');
		if(!$ttc)
		{
			self::$errCode = -114;
			self::$errMsg  = 'get instance of TTC failed';
			return -1;
		}

		return $ttc->getAffectRows();
	}

}

//End Of Script

