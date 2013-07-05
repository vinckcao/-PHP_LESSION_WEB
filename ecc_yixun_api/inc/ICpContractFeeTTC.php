<?php
/**
 * ICpContractFeeTTC.php
 * 对TTC:t_cp2_contract_fee的赠、查、删、改等操作
 * 
 * @Copyright	(c) 1998-2008 Tencent Inc. All Rights Reserved
 * @Author	root
 */

global $_TTC_CFG;

$_TTC_CFG['ICpContractFeeTTC']['TTCKEY']	= 'ICpContractFeeTTC';
$_TTC_CFG['ICpContractFeeTTC']['TABLE']	= 't_cp2_contract_fee';
$_TTC_CFG['ICpContractFeeTTC']['TimeOut']	= 1;
$_TTC_CFG['ICpContractFeeTTC']['KEY']		= 'product_id';
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']	= array();//数据类型，int=1,string=2,binary=3
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['product_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['card_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['fee_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['fee_package_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['package_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['customer_price'] = array('type' => 2, 'min' => 0, 'max' => 26);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['sp_id'] = array('type' => 1, 'min' => 0, 'max' => 255);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['location_pid'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['location_cid'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['location_pname'] = array('type' => 2, 'min' => 0, 'max' => 20);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['location_cname'] = array('type' => 2, 'min' => 0, 'max' => 20);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['mode_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['wh_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['ICpContractFeeTTC']['FIELDS']['updatetime'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);

class ICpContractFeeTTC
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
	 * 		'product_id' =>  XXX,
	 * 		'fee_id' =>  XXX,
	 * 		'fee_package_id' =>  XXX,
	 * 		'package_id' =>  XXX,
	 * 		'customer_price' => 'XXX',
	 * 		'sp_id' =>  XXX,
	 * 		'location_pid' =>  XXX,
	 * 		'location_cid' =>  XXX,
	 * 		'location_pname' => 'XXX',
	 * 		'location_cname' => 'XXX',
	 * 		'mode_id' =>  XXX,
	 * 		'wh_id' =>  XXX,
	 * 		'updatetime' =>  XXX,
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
		$ttc = Config::getTTC('ICpContractFeeTTC');
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

		if(!empty(self::$ttcMap[$param['product_id']]))
		{
			unset(self::$ttcMap[$param['product_id']]);
		}

		return $v;
	}

	/**
	 * 更新一条TTC记录
	 * 
	 * @param	$param 格式: 
	 * 	array(
	 * 		'product_id' =>  XXX,
	 * 		'fee_id' =>  XXX,
	 * 		'fee_package_id' =>  XXX,
	 * 		'package_id' =>  XXX,
	 * 		'customer_price' => 'XXX',
	 * 		'sp_id' =>  XXX,
	 * 		'location_pid' =>  XXX,
	 * 		'location_cid' =>  XXX,
	 * 		'location_pname' => 'XXX',
	 * 		'location_cname' => 'XXX',
	 * 		'mode_id' =>  XXX,
	 * 		'wh_id' =>  XXX,
	 * 		'updatetime' =>  XXX,
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
		$ttc = Config::getTTC('ICpContractFeeTTC');
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

		if(!empty(self::$ttcMap[$param['product_id']]))
		{
			unset(self::$ttcMap[$param['product_id']]);
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
		$ttc = Config::getTTC('ICpContractFeeTTC');
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
	 * 		'product_id' =>  XXX,
	 * 		'fee_id' =>  XXX,
	 * 		'fee_package_id' =>  XXX,
	 * 		'package_id' =>  XXX,
	 * 		'customer_price' => 'XXX',
	 * 		'sp_id' =>  XXX,
	 * 		'location_pid' =>  XXX,
	 * 		'location_cid' =>  XXX,
	 * 		'location_pname' => 'XXX',
	 * 		'location_cname' => 'XXX',
	 * 		'mode_id' =>  XXX,
	 * 		'wh_id' =>  XXX,
	 * 		'updatetime' =>  XXX,
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
		$ttc = Config::getTTC('ICpContractFeeTTC');
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
		$ttc = Config::getTTC2('ICpContractFeeTTC');
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
		$ttc = Config::getTTC('ICpContractFeeTTC');
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

