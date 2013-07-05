<?php
/**
 * IOrdersTTC.php
 * ��TTC:t_orders_�������顢ɾ���ĵȲ���
 * 
 * @Copyright	(c) 1998-2008 Tencent Inc. All Rights Reserved
 * @Author	andyyao
 */

global $_TTC_CFG;

$_TTC_CFG['IOrdersTTC']['TTCKEY']	= 'IOrdersTTC';
$_TTC_CFG['IOrdersTTC']['TABLE']	= 't_orders_';
$_TTC_CFG['IOrdersTTC']['TimeOut']	= 1;
$_TTC_CFG['IOrdersTTC']['KEY']		= 'uid';
$_TTC_CFG['IOrdersTTC']['FIELDS']	= array();//�������ͣ�int=1,string=2,binary=3
$_TTC_CFG['IOrdersTTC']['FIELDS']['uid'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['order_char_id'] = array('type' => 2, 'min' => 0, 'max' => 32);
$_TTC_CFG['IOrdersTTC']['FIELDS']['order_id'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['status'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['flag'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['hw_id'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['order_date'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['source'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['type'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['shipping_cost'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['premium_cost'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['shipping_type'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['pay_time'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['pay_type'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['prcd_cost'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['order_cost'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['price_cut'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['coupon_type'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['coupon_code'] = array('type' => 2, 'min' => 0, 'max' => 32);
$_TTC_CFG['IOrdersTTC']['FIELDS']['coupon_amt'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['point'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['point_pay'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['cash'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['receiver'] = array('type' => 2, 'min' => 0, 'max' => 32);
$_TTC_CFG['IOrdersTTC']['FIELDS']['receiver_tel'] = array('type' => 2, 'min' => 0, 'max' => 64);
$_TTC_CFG['IOrdersTTC']['FIELDS']['receiver_mobile'] = array('type' => 2, 'min' => 0, 'max' => 16);
$_TTC_CFG['IOrdersTTC']['FIELDS']['receiver_zip'] = array('type' => 2, 'min' => 0, 'max' => 16);
$_TTC_CFG['IOrdersTTC']['FIELDS']['receiver_addr_id'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['receiver_addr'] = array('type' => 2, 'min' => 0, 'max' => 256);
$_TTC_CFG['IOrdersTTC']['FIELDS']['expect_dly_date'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['expect_dly_time_span'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['comment'] = array('type' => 2, 'min' => 0, 'max' => 65535);
$_TTC_CFG['IOrdersTTC']['FIELDS']['update_time'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['isPayed'] = array('type' => 1, 'min' => -128, 'max' => 127);
$_TTC_CFG['IOrdersTTC']['FIELDS']['out_time'] = array('type' => 1, 'min' => 0, 'max' => 4294967295);
$_TTC_CFG['IOrdersTTC']['FIELDS']['sign_by_other'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['installment_bank'] = array('type' => 2, 'min' => 0, 'max' => 40);
$_TTC_CFG['IOrdersTTC']['FIELDS']['installment_num'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['cash_per_month'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['rate'] = array('type' => 4, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['back_rate'] = array('type' => 4, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['cpsinfo'] = array('type' => 2, 'min' => 0, 'max' => 512);
$_TTC_CFG['IOrdersTTC']['FIELDS']['visitkey'] = array('type' => 2, 'min' => 0, 'max' => 40);
$_TTC_CFG['IOrdersTTC']['FIELDS']['ls'] = array('type' => 2, 'min' => 0, 'max' => 100);
$_TTC_CFG['IOrdersTTC']['FIELDS']['pOrderId'] = array('type' => 2, 'min' => 0, 'max' => 32);
$_TTC_CFG['IOrdersTTC']['FIELDS']['subOrderNum'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['stockNo'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['deliveryMemo'] = array('type' => 2, 'min' => 0, 'max' => 16);
$_TTC_CFG['IOrdersTTC']['FIELDS']['promotion_point'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['cash_point'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['shop_guide_cost'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['shop_guide_id'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['shop_guide_name'] = array('type' => 2, 'min' => 0, 'max' => 100);
$_TTC_CFG['IOrdersTTC']['FIELDS']['shop_id'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['is_vat'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['single_promotion_info'] = array('type' => 2, 'min' => 0, 'max' => 400);
$_TTC_CFG['IOrdersTTC']['FIELDS']['bits'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['seller_id'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['sale_model'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['seller_address_id'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['SaleSpec'] = array('type' => 1, 'min' => -2147483648, 'max' => 2147483647);
$_TTC_CFG['IOrdersTTC']['FIELDS']['Weight'] = array('type' => 1, 'min' => -9.22337203685E+18, 'max' => 9223372036854775807);
$_TTC_CFG['IOrdersTTC']['FIELDS']['Volume'] = array('type' => 1, 'min' => -9.22337203685E+18, 'max' => 9223372036854775807);
$_TTC_CFG['IOrdersTTC']['FIELDS']['LongestEdge'] = array('type' => 1, 'min' => -9.22337203685E+18, 'max' => 9223372036854775807);

class IOrdersTTC
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
	 * 		'order_char_id' => 'XXX',
	 * 		'order_id' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		'flag' =>  XXX,
	 * 		'hw_id' =>  XXX,
	 * 		'order_date' =>  XXX,
	 * 		'source' =>  XXX,
	 * 		'type' =>  XXX,
	 * 		'shipping_cost' =>  XXX,
	 * 		'premium_cost' =>  XXX,
	 * 		'shipping_type' =>  XXX,
	 * 		'pay_time' =>  XXX,
	 * 		'pay_type' =>  XXX,
	 * 		'prcd_cost' =>  XXX,
	 * 		'order_cost' =>  XXX,
	 * 		'price_cut' =>  XXX,
	 * 		'coupon_type' =>  XXX,
	 * 		'coupon_code' => 'XXX',
	 * 		'coupon_amt' =>  XXX,
	 * 		'point' =>  XXX,
	 * 		'point_pay' =>  XXX,
	 * 		'cash' =>  XXX,
	 * 		'receiver' => 'XXX',
	 * 		'receiver_tel' => 'XXX',
	 * 		'receiver_mobile' => 'XXX',
	 * 		'receiver_zip' => 'XXX',
	 * 		'receiver_addr_id' =>  XXX,
	 * 		'receiver_addr' => 'XXX',
	 * 		'expect_dly_date' =>  XXX,
	 * 		'expect_dly_time_span' =>  XXX,
	 * 		'comment' => 'XXX',
	 * 		'update_time' =>  XXX,
	 * 		'isPayed' =>  XXX,
	 * 		'out_time' =>  XXX,
	 * 		'sign_by_other' =>  XXX,
	 * 		'installment_bank' => 'XXX',
	 * 		'installment_num' =>  XXX,
	 * 		'cash_per_month' =>  XXX,
	 * 		'rate' => 'XXX',
	 * 		'back_rate' => 'XXX',
	 * 		'cpsinfo' => 'XXX',
	 * 		'visitkey' => 'XXX',
	 * 		'ls' => 'XXX',
	 * 		'pOrderId' => 'XXX',
	 * 		'subOrderNum' =>  XXX,
	 * 		'stockNo' =>  XXX,
	 * 		'deliveryMemo' => 'XXX',
	 * 		'promotion_point' =>  XXX,
	 * 		'cash_point' =>  XXX,
	 * 		'shop_guide_cost' =>  XXX,
	 * 		'shop_guide_id' =>  XXX,
	 * 		'shop_guide_name' => 'XXX',
	 * 		'shop_id' =>  XXX,
	 * 		'is_vat' =>  XXX,
	 * 		'single_promotion_info' => 'XXX',
	 * 		'bits' =>  XXX,
	 * 		'seller_id' =>  XXX,
	 * 		'sale_model' =>  XXX,
	 * 		'seller_address_id' =>  XXX,
	 * 		'SaleSpec' =>  XXX,
	 * 		'Weight' =>  XXX,
	 * 		'Volume' =>  XXX,
	 * 		'LongestEdge' =>  XXX,
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
		$ttc = Config::getTTC('IOrdersTTC');
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
	 * 		'order_char_id' => 'XXX',
	 * 		'order_id' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		'flag' =>  XXX,
	 * 		'hw_id' =>  XXX,
	 * 		'order_date' =>  XXX,
	 * 		'source' =>  XXX,
	 * 		'type' =>  XXX,
	 * 		'shipping_cost' =>  XXX,
	 * 		'premium_cost' =>  XXX,
	 * 		'shipping_type' =>  XXX,
	 * 		'pay_time' =>  XXX,
	 * 		'pay_type' =>  XXX,
	 * 		'prcd_cost' =>  XXX,
	 * 		'order_cost' =>  XXX,
	 * 		'price_cut' =>  XXX,
	 * 		'coupon_type' =>  XXX,
	 * 		'coupon_code' => 'XXX',
	 * 		'coupon_amt' =>  XXX,
	 * 		'point' =>  XXX,
	 * 		'point_pay' =>  XXX,
	 * 		'cash' =>  XXX,
	 * 		'receiver' => 'XXX',
	 * 		'receiver_tel' => 'XXX',
	 * 		'receiver_mobile' => 'XXX',
	 * 		'receiver_zip' => 'XXX',
	 * 		'receiver_addr_id' =>  XXX,
	 * 		'receiver_addr' => 'XXX',
	 * 		'expect_dly_date' =>  XXX,
	 * 		'expect_dly_time_span' =>  XXX,
	 * 		'comment' => 'XXX',
	 * 		'update_time' =>  XXX,
	 * 		'isPayed' =>  XXX,
	 * 		'out_time' =>  XXX,
	 * 		'sign_by_other' =>  XXX,
	 * 		'installment_bank' => 'XXX',
	 * 		'installment_num' =>  XXX,
	 * 		'cash_per_month' =>  XXX,
	 * 		'rate' => 'XXX',
	 * 		'back_rate' => 'XXX',
	 * 		'cpsinfo' => 'XXX',
	 * 		'visitkey' => 'XXX',
	 * 		'ls' => 'XXX',
	 * 		'pOrderId' => 'XXX',
	 * 		'subOrderNum' =>  XXX,
	 * 		'stockNo' =>  XXX,
	 * 		'deliveryMemo' => 'XXX',
	 * 		'promotion_point' =>  XXX,
	 * 		'cash_point' =>  XXX,
	 * 		'shop_guide_cost' =>  XXX,
	 * 		'shop_guide_id' =>  XXX,
	 * 		'shop_guide_name' => 'XXX',
	 * 		'shop_id' =>  XXX,
	 * 		'is_vat' =>  XXX,
	 * 		'single_promotion_info' => 'XXX',
	 * 		'bits' =>  XXX,
	 * 		'seller_id' =>  XXX,
	 * 		'sale_model' =>  XXX,
	 * 		'seller_address_id' =>  XXX,
	 * 		'SaleSpec' =>  XXX,
	 * 		'Weight' =>  XXX,
	 * 		'Volume' =>  XXX,
	 * 		'LongestEdge' =>  XXX,
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
		$ttc = Config::getTTC('IOrdersTTC');
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
		$ttc = Config::getTTC('IOrdersTTC');
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
	 * 		'order_char_id' => 'XXX',
	 * 		'order_id' =>  XXX,
	 * 		'status' =>  XXX,
	 * 		'flag' =>  XXX,
	 * 		'hw_id' =>  XXX,
	 * 		'order_date' =>  XXX,
	 * 		'source' =>  XXX,
	 * 		'type' =>  XXX,
	 * 		'shipping_cost' =>  XXX,
	 * 		'premium_cost' =>  XXX,
	 * 		'shipping_type' =>  XXX,
	 * 		'pay_time' =>  XXX,
	 * 		'pay_type' =>  XXX,
	 * 		'prcd_cost' =>  XXX,
	 * 		'order_cost' =>  XXX,
	 * 		'price_cut' =>  XXX,
	 * 		'coupon_type' =>  XXX,
	 * 		'coupon_code' => 'XXX',
	 * 		'coupon_amt' =>  XXX,
	 * 		'point' =>  XXX,
	 * 		'point_pay' =>  XXX,
	 * 		'cash' =>  XXX,
	 * 		'receiver' => 'XXX',
	 * 		'receiver_tel' => 'XXX',
	 * 		'receiver_mobile' => 'XXX',
	 * 		'receiver_zip' => 'XXX',
	 * 		'receiver_addr_id' =>  XXX,
	 * 		'receiver_addr' => 'XXX',
	 * 		'expect_dly_date' =>  XXX,
	 * 		'expect_dly_time_span' =>  XXX,
	 * 		'comment' => 'XXX',
	 * 		'update_time' =>  XXX,
	 * 		'isPayed' =>  XXX,
	 * 		'out_time' =>  XXX,
	 * 		'sign_by_other' =>  XXX,
	 * 		'installment_bank' => 'XXX',
	 * 		'installment_num' =>  XXX,
	 * 		'cash_per_month' =>  XXX,
	 * 		'rate' => 'XXX',
	 * 		'back_rate' => 'XXX',
	 * 		'cpsinfo' => 'XXX',
	 * 		'visitkey' => 'XXX',
	 * 		'ls' => 'XXX',
	 * 		'pOrderId' => 'XXX',
	 * 		'subOrderNum' =>  XXX,
	 * 		'stockNo' =>  XXX,
	 * 		'deliveryMemo' => 'XXX',
	 * 		'promotion_point' =>  XXX,
	 * 		'cash_point' =>  XXX,
	 * 		'shop_guide_cost' =>  XXX,
	 * 		'shop_guide_id' =>  XXX,
	 * 		'shop_guide_name' => 'XXX',
	 * 		'shop_id' =>  XXX,
	 * 		'is_vat' =>  XXX,
	 * 		'single_promotion_info' => 'XXX',
	 * 		'bits' =>  XXX,
	 * 		'seller_id' =>  XXX,
	 * 		'sale_model' =>  XXX,
	 * 		'seller_address_id' =>  XXX,
	 * 		'SaleSpec' =>  XXX,
	 * 		'Weight' =>  XXX,
	 * 		'Volume' =>  XXX,
	 * 		'LongestEdge' =>  XXX,
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
		$ttc = Config::getTTC('IOrdersTTC');
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
		$ttc = Config::getTTC2('IOrdersTTC');
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
		$ttc = Config::getTTC('IOrdersTTC');
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
