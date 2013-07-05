<?php
/**
 * IVoteOptionTTC.php
 * 对TTC:t_vote_option的赠、查、删、改等操作
 * 
 * @Copyright	(c) 1998-2008 Tencent Inc. All Rights Reserved
 * @Author	zhiliu
 */

global $_TTC_CFG;

$_TTC_CFG['IVoteOptionTTC']['TTCKEY']	= 'IVoteOptionTTC';
$_TTC_CFG['IVoteOptionTTC']['TABLE']	= 't_vote_option';
$_TTC_CFG['IVoteOptionTTC']['TimeOut']	= 1;
$_TTC_CFG['IVoteOptionTTC']['KEY']		= 'category_id';
$_TTC_CFG['IVoteOptionTTC']['FIELDS']	= array();//数据类型，int=1,string=2,binary=3
$_TTC_CFG['IVoteOptionTTC']['FIELDS']['category_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IVoteOptionTTC']['FIELDS']['biz_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IVoteOptionTTC']['FIELDS']['option_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IVoteOptionTTC']['FIELDS']['group_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IVoteOptionTTC']['FIELDS']['order'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IVoteOptionTTC']['FIELDS']['option_name1'] = array('type' => 2, 'min' => 0, 'max' => 255);
$_TTC_CFG['IVoteOptionTTC']['FIELDS']['option_name2'] = array('type' => 2, 'min' => 0, 'max' => 255);
$_TTC_CFG['IVoteOptionTTC']['FIELDS']['status'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);

class IVoteOptionTTC
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
	 * 		'category_id' =>  XXX,
	 * 		'biz_id' =>  XXX,
	 * 		'option_id' =>  XXX,
	 * 		'group_id' =>  XXX,
	 * 		'order' =>  XXX,
	 * 		'option_name1' => 'XXX',
	 * 		'option_name2' => 'XXX',
	 * 		'status' =>  XXX,
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
		$ttc = Config::getTTC('IVoteOptionTTC');
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

		if(!empty(self::$ttcMap[$param['category_id']]))
		{
			unset(self::$ttcMap[$param['category_id']]);
		}

		return $v;
	}

	/**
	 * 更新一条TTC记录
	 * 
	 * @param	$param 格式: 
	 * 	array(
	 * 		'category_id' =>  XXX,
	 * 		'biz_id' =>  XXX,
	 * 		'option_id' =>  XXX,
	 * 		'group_id' =>  XXX,
	 * 		'order' =>  XXX,
	 * 		'option_name1' => 'XXX',
	 * 		'option_name2' => 'XXX',
	 * 		'status' =>  XXX,
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
		$ttc = Config::getTTC('IVoteOptionTTC');
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

		if(!empty(self::$ttcMap[$param['category_id']]))
		{
			unset(self::$ttcMap[$param['category_id']]);
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
		$ttc = Config::getTTC('IVoteOptionTTC');
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
	 * 		'category_id' =>  XXX,
	 * 		'biz_id' =>  XXX,
	 * 		'option_id' =>  XXX,
	 * 		'group_id' =>  XXX,
	 * 		'order' =>  XXX,
	 * 		'option_name1' => 'XXX',
	 * 		'option_name2' => 'XXX',
	 * 		'status' =>  XXX,
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
		if(empty($filter) && !empty(self::$ttcMap[$key]))
		{
			return self::$ttcMap[$key];
		}

		$ttc = Config::getTTC('IVoteOptionTTC');
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

		if (count(self::$ttcMap) > 100)
		{
			self::$ttcMap = array();
		}

		if (empty($filter))
		{
				self::$ttcMap[$key] = $v;

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
	public static function gets($keys)
	{
		self::clearErr();
		
		if(empty($keys) || !is_array($keys))
		{
			self::$errCode = 111;
			self::$errMsg  = 'keys is empty';
		}
		$ttc = Config::getTTC2('IVoteOptionTTC');
		if(!$ttc)
		{
			self::$errCode = 114;
			self::$errMsg  = 'get instance of TTC failed';
			return false;
		}

		$v = $ttc->get($keys);
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
		$ttc = Config::getTTC('IVoteOptionTTC');
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

