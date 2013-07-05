<?php
/**
 * IProductInfoTTC.php
 * 对TTC:t_product_info_的赠、查、删、改等操作
 * 
 * @Copyright	(c) 1998-2008 Tencent Inc. All Rights Reserved
 * @Author	zhiliu
 */

global $_TTC_CFG;

$_TTC_CFG['IProductInfoTTC']['TTCKEY']	= 'IProductInfoTTC';
$_TTC_CFG['IProductInfoTTC']['TABLE']	= 't_product_info_';
$_TTC_CFG['IProductInfoTTC']['TimeOut']	= 1;
$_TTC_CFG['IProductInfoTTC']['KEY']		= 'product_id';
$_TTC_CFG['IProductInfoTTC']['FIELDS']	= array();//数据类型，int=1,string=2,binary=3
$_TTC_CFG['IProductInfoTTC']['FIELDS']['product_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['wh_id'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['flag'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['type'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['type2'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['status'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['restricted_trans_type'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['onshelf_time'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['promotion_word'] = array('type' => 2, 'min' => 0, 'max' => 200);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['promotion_start'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['promotion_end'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['num_available'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['virtual_num'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['arrival_days'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['market_price'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['price'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['cash_back'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['cost_price'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['num_limit'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['is_clear_wh'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['point_type'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['point'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['vip_price'] = array('type' => 2, 'min' => 0, 'max' => 255);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['updatetime'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['psystock'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['multiprice_type'] = array('type' => 1, 'min' => -9.22337203685E+18, 'max' => 9223372036854775807);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['product_sale_type'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['business_unit_cost_price'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['sale_model'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['lowest_num'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['booking_type'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['booking_value'] = array('type' => 2, 'min' => 0, 'max' => 128);
$_TTC_CFG['IProductInfoTTC']['FIELDS']['seller_address_id'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);

class IProductInfoTTC
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
	 * 		'wh_id' =>  XXX,
	 * 		'flag' =>  XXX,
	 * 		'type' =>  XXX,
	 * 		'type2' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		'restricted_trans_type' =>  XXX,
	 * 		'onshelf_time' =>  XXX,
	 * 		'promotion_word' => 'XXX',
	 * 		'promotion_start' =>  XXX,
	 * 		'promotion_end' =>  XXX,
	 * 		'num_available' =>  XXX,
	 * 		'virtual_num' =>  XXX,
	 * 		'arrival_days' =>  XXX,
	 * 		'market_price' =>  XXX,
	 * 		'price' =>  XXX,
	 * 		'cash_back' =>  XXX,
	 * 		'cost_price' =>  XXX,
	 * 		'num_limit' =>  XXX,
	 * 		'is_clear_wh' =>  XXX,
	 * 		'point_type' =>  XXX,
	 * 		'point' =>  XXX,
	 * 		'vip_price' => 'XXX',
	 * 		'updatetime' =>  XXX,
	 * 		'psystock' =>  XXX,
	 * 		'multiprice_type' =>  XXX,
	 * 		'product_sale_type' =>  XXX,
	 * 		'business_unit_cost_price' =>  XXX,
	 * 		'sale_model' =>  XXX,
	 * 		'lowest_num' =>  XXX,
	 * 		'booking_type' =>  XXX,
	 * 		'booking_value' => 'XXX',
	 * 		'seller_address_id' =>  XXX,
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
		$ttc = Config::getTTC('IProductInfoTTC');
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
	 * 		'wh_id' =>  XXX,
	 * 		'flag' =>  XXX,
	 * 		'type' =>  XXX,
	 * 		'type2' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		'restricted_trans_type' =>  XXX,
	 * 		'onshelf_time' =>  XXX,
	 * 		'promotion_word' => 'XXX',
	 * 		'promotion_start' =>  XXX,
	 * 		'promotion_end' =>  XXX,
	 * 		'num_available' =>  XXX,
	 * 		'virtual_num' =>  XXX,
	 * 		'arrival_days' =>  XXX,
	 * 		'market_price' =>  XXX,
	 * 		'price' =>  XXX,
	 * 		'cash_back' =>  XXX,
	 * 		'cost_price' =>  XXX,
	 * 		'num_limit' =>  XXX,
	 * 		'is_clear_wh' =>  XXX,
	 * 		'point_type' =>  XXX,
	 * 		'point' =>  XXX,
	 * 		'vip_price' => 'XXX',
	 * 		'updatetime' =>  XXX,
	 * 		'psystock' =>  XXX,
	 * 		'multiprice_type' =>  XXX,
	 * 		'product_sale_type' =>  XXX,
	 * 		'business_unit_cost_price' =>  XXX,
	 * 		'sale_model' =>  XXX,
	 * 		'lowest_num' =>  XXX,
	 * 		'booking_type' =>  XXX,
	 * 		'booking_value' => 'XXX',
	 * 		'seller_address_id' =>  XXX,
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
		$ttc = Config::getTTC('IProductInfoTTC');
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
		$ttc = Config::getTTC('IProductInfoTTC');
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
	 * 		'wh_id' =>  XXX,
	 * 		'flag' =>  XXX,
	 * 		'type' =>  XXX,
	 * 		'type2' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		'restricted_trans_type' =>  XXX,
	 * 		'onshelf_time' =>  XXX,
	 * 		'promotion_word' => 'XXX',
	 * 		'promotion_start' =>  XXX,
	 * 		'promotion_end' =>  XXX,
	 * 		'num_available' =>  XXX,
	 * 		'virtual_num' =>  XXX,
	 * 		'arrival_days' =>  XXX,
	 * 		'market_price' =>  XXX,
	 * 		'price' =>  XXX,
	 * 		'cash_back' =>  XXX,
	 * 		'cost_price' =>  XXX,
	 * 		'num_limit' =>  XXX,
	 * 		'is_clear_wh' =>  XXX,
	 * 		'point_type' =>  XXX,
	 * 		'point' =>  XXX,
	 * 		'vip_price' => 'XXX',
	 * 		'updatetime' =>  XXX,
	 * 		'psystock' =>  XXX,
	 * 		'multiprice_type' =>  XXX,
	 * 		'product_sale_type' =>  XXX,
	 * 		'business_unit_cost_price' =>  XXX,
	 * 		'sale_model' =>  XXX,
	 * 		'lowest_num' =>  XXX,
	 * 		'booking_type' =>  XXX,
	 * 		'booking_value' => 'XXX',
	 * 		'seller_address_id' =>  XXX,
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
		$ttc = Config::getTTC('IProductInfoTTC');
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
		$ttc = Config::getTTC2('IProductInfoTTC');
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
	 * 清理缓存
	 * @param mix $key 第一个key
	 * @param array $filter 其它过滤条件
	 * @return boolean
	 */
	public static function purge($key, $filter = array())
	{
		self::clearErr();
		
		if(empty($key))
		{
			self::$errCode = 111;
			self::$errMsg  = 'key is empty';
		}
		$ttc = Config::getTTC('IProductInfoTTC');
		if(!$ttc)
		{
			self::$errCode = 114;
			self::$errMsg  = 'get instance of TTC failed';
			return false;
		}
		
		$v = $ttc->purge($key, $filter);
		if(false === $v)
		{
			self::$errCode = $ttc->errCode;
			self::$errMsg  = $ttc->errMsg;
			return false;
		}
		
		return true;
	}

	/**
	 * 取操作TTC影响的行数
	 * 
	 * 
	 * 返回值：正确返回>-1的行数，错误返回负数
	 */
	public static function getTTCAffectRows()
	{
		$ttc = Config::getTTC('IProductInfoTTC');
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

