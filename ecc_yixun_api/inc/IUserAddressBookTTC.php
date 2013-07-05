<?php
/**
 * IUserAddressBookTTC.php
 * ��TTC:t_user_addressbook_�������顢ɾ���ĵȲ���
 * 
 * @Copyright	(c) 1998-2008 Tencent Inc. All Rights Reserved
 * @Author	oscarzhu
 */

global $_TTC_CFG;

$_TTC_CFG['IUserAddressBookTTC']['TTCKEY']	= 'IUserAddressBookTTC';
$_TTC_CFG['IUserAddressBookTTC']['TABLE']	= 't_user_addressbook_';
$_TTC_CFG['IUserAddressBookTTC']['TimeOut']	= 1;
$_TTC_CFG['IUserAddressBookTTC']['KEY']		= 'uid';
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']	= array();//�������ͣ�int=1,string=2,binary=3
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['uid'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['aid'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['iid'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['name'] = array('type' => 2, 'min' => 0, 'max' => 32);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['mobile'] = array('type' => 2, 'min' => 0, 'max' => 16);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['phone'] = array('type' => 2, 'min' => 0, 'max' => 64);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['fax'] = array('type' => 2, 'min' => 0, 'max' => 64);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['zipcode'] = array('type' => 2, 'min' => 0, 'max' => 16);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['district'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['address'] = array('type' => 2, 'min' => 0, 'max' => 256);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['workplace'] = array('type' => 2, 'min' => 0, 'max' => 128);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['sortfactor'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['updatetime'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['createtime'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['default_shipping'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['default_pay_type'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['last_use_time'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IUserAddressBookTTC']['FIELDS']['status'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);

class IUserAddressBookTTC
{
	/**
	 * �������
	 */
	public static $errCode = 0;

	/**
	 * ������Ϣ
	 */
	public static $errMsg  = '';

	/**
	 * ttc��¼Map
	 */
	public static $ttcMap  = array();


	/**
	 * ��������ʶ����ÿ����������ǰ����
	 */
	public static function getErrMsg()
	{
		return self::$errMsg;
	}



	/**
	 * ��������ʶ����ÿ����������ǰ����
	 */
	private static function clearErr()
	{
		self::$errCode = 0;
		self::$errMsg  = '';
	}

	/**
	 * ����һ��TTC��¼
	 * 
	 * @param	$param ��ʽ: 
	 * 	array(
	 * 		'uid' =>  XXX,
	 * 		'aid' =>  XXX,
	 * 		'iid' =>  XXX,
	 * 		'name' => 'XXX',
	 * 		'mobile' => 'XXX',
	 * 		'phone' => 'XXX',
	 * 		'fax' => 'XXX',
	 * 		'zipcode' => 'XXX',
	 * 		'district' =>  XXX,
	 * 		'address' => 'XXX',
	 * 		'workplace' => 'XXX',
	 * 		'sortfactor' =>  XXX,
	 * 		'updatetime' =>  XXX,
	 * 		'createtime' =>  XXX,
	 * 		'default_shipping' =>  XXX,
	 * 		'default_pay_type' =>  XXX,
	 * 		'last_use_time' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		)
	 * 
	 * ����ֵ����ȷ����true�����󷵻�false
	 */
	public static function insert($param)
	{
		self::clearErr();
		
		if(empty($param) || !is_array($param))
		{
			self::$errCode = 111;
			self::$errMsg  = 'param is empty';
		}
		$ttc = Config::getTTC('IUserAddressBookTTC');
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
	 * ����һ��TTC��¼
	 * 
	 * @param	$param ��ʽ: 
	 * 	array(
	 * 		'uid' =>  XXX,
	 * 		'aid' =>  XXX,
	 * 		'iid' =>  XXX,
	 * 		'name' => 'XXX',
	 * 		'mobile' => 'XXX',
	 * 		'phone' => 'XXX',
	 * 		'fax' => 'XXX',
	 * 		'zipcode' => 'XXX',
	 * 		'district' =>  XXX,
	 * 		'address' => 'XXX',
	 * 		'workplace' => 'XXX',
	 * 		'sortfactor' =>  XXX,
	 * 		'updatetime' =>  XXX,
	 * 		'createtime' =>  XXX,
	 * 		'default_shipping' =>  XXX,
	 * 		'default_pay_type' =>  XXX,
	 * 		'last_use_time' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		)
	 * 
	 * ����ֵ����ȷ����true�����󷵻�false
	 */
	public static function update($param, $filter = array())
	{
		self::clearErr();
		
		if(empty($param) || !is_array($param))
		{
			self::$errCode = 111;
			self::$errMsg  = 'param is empty';
		}
		$ttc = Config::getTTC('IUserAddressBookTTC');
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
	 * ɾ��һ��TTC��¼
	 * 
	 * @param   string  $key		���ݿ������
	 * 
	 * ����ֵ����ȷ����true�����󷵻�false
	 */
	public static function remove($key, $filter= array())
	{
		self::clearErr();
		
		if(empty($key))
		{
			self::$errCode = 111;
			self::$errMsg  = 'key is empty';
		}
		$ttc = Config::getTTC('IUserAddressBookTTC');
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
	 * ȡһ��TTC��¼
	 * 
	 * @param   string  $key		���ݿ������
	 * @param   array   $multikey	��ѡ����, ���ֶ�keyʱ��ѡ, ����array('field2' => 1, 'field3' => 2)
	 * 
	 * ����ֵ����ȷ�������ݣ����󷵻�false
	 * ���ݸ�ʽ:
	 * 	array(
	 * 		'uid' =>  XXX,
	 * 		'aid' =>  XXX,
	 * 		'iid' =>  XXX,
	 * 		'name' => 'XXX',
	 * 		'mobile' => 'XXX',
	 * 		'phone' => 'XXX',
	 * 		'fax' => 'XXX',
	 * 		'zipcode' => 'XXX',
	 * 		'district' =>  XXX,
	 * 		'address' => 'XXX',
	 * 		'workplace' => 'XXX',
	 * 		'sortfactor' =>  XXX,
	 * 		'updatetime' =>  XXX,
	 * 		'createtime' =>  XXX,
	 * 		'default_shipping' =>  XXX,
	 * 		'default_pay_type' =>  XXX,
	 * 		'last_use_time' =>  XXX,
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
		$ttc = Config::getTTC('IUserAddressBookTTC');
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
	 * ����ȡTTC��¼
	 * 
	 * @param   string  $keys		���ݿ����������
	 * 
	 * ����ֵ����ȷ�������ݣ����󷵻�false
	 */
	public static function gets($keys, $filter=array(), $need=array())
	{
		self::clearErr();
		
		if(empty($keys) || !is_array($keys))
		{
			self::$errCode = 111;
			self::$errMsg  = 'keys is empty';
		}
		$ttc = Config::getTTC2('IUserAddressBookTTC');
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
	 * ȡ����TTCӰ�������
	 * 
	 * 
	 * ����ֵ����ȷ����>-1�����������󷵻ظ���
	 */
	public static function getTTCAffectRows()
	{
		$ttc = Config::getTTC('IUserAddressBookTTC');
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
