<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6" lang="zh-cn"><![endif]-->
<!--[if IE 7]><html class="ie ie7" lang="zh-cn"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="zh-cn"><![endif]-->
<!--[if IE 9]><html class="ie ie9" lang="zh-cn"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="zh-cn"><!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>工单详情</title>
		<meta name="Copyright" content="Tencent" />
		<script src="/js/jquery.1.7.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="/js/csi.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/deal_detail.css" media="screen" />
		<script type="text/javascript" src="/js/fancybox/jquery.fancybox.js?v=2.1.4"></script>
		<link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox.css?v=2.1.4" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/overlay.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/css/power_manage.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<!--S 头部 -->
			<div class="ecc_header">
				<div class="ecc_header_inner grid_c1">
					<div id="loading-tips" style="position: absolute; top: -25px; left: 400px; width: 200px; height: 15px; padding: 3px; background: #FFC;border: 1px solid blue;">数据加载中......</div>
					<h1>
						<a href="http://csi.ecc.com" class="ecc_logo"><span class="hidden">腾讯电商服务指数平台</span> </a>
					</h1>
					<ul class="ecc_header_action">
						<li><a href="##">数据订阅</a></li>
						<li><a href="##">您的建议</a></li>
						<li><a href="/page.php?menu=2&biz=admin&mod=misc&act=aboutus">关于我们</a></li>
						<li><a href="/page.php?menu=2&biz=admin&mod=member&act=list">系统配置</a></li>
						<li><a href="/json.php?biz=admin&mod=user&act=logout">退出登录</a></li>
					</ul>
				</div>
			</div>
			<!--E 头部 -->
			<div class="ecc_subheader">
				<div class="ecc_subheader_inner grid_c1">
					<ul class="ecc_nav">
						<li><a href="##" class="selected">工单处理</a></li>
						<!--  <li><a href="##">用户历史工单</a></li> -->
					</ul>
					<div class="ecc_subheader_info">
						<!-- <span class="online">56</span>
						<span class="phone">56</span>
						<span class="weibo">56</span> -->
					</div>
				</div>
			</div>


			<div class="ecc_scoll_content grid_c1  ecc_scoll_content_full" id="complaint_detail_zone">
				<div class="ecc_main" id="content">

				<div class="ecc_action">
					<p class="no" id="deal_id">工单号：<strong>{id}</strong> </p>
					<!-- <a class="mod_btn_common" href="#" id="flag_4_btn" style="display:none;">设为典型订单</a> -->
					{urge_btn_str}
				</div>
				<div class="ecc_mod_box" id="dealing_info_box">
					<div class="ecc_mod_box_hd up_down">
						<h3 class="ecc_mod_box_tit">工单处理信息</h3>
						<p class="ecc_mod_icon ecc_mod_icon3" id="cl_flag_1_icon" title="已催办" {flag_str}></p>
						{vip_icon_str}
						{memo_str}
						<p class="ecc_mod_inline ecc_mod_txt1" id="cl_deal_order_id">{order_id_str}</p>
						<a href="##" class="ecc_mod_box_up" style="display:none"><span class="hidden">展开</span></a>
						<a href="##" class="ecc_mod_box_down" ><span class="hidden">收起</span></a>
					</div>
					<div class="ecc_mod_box_bd" style="display:none;">
						<table class="ecc_mod_table">
								<th>用户账户：</th>
								<td id="cl_user_account">{account}</td>
								<th>用户电话：</th>
								<td id="cl_user_mobile">{userPhone}</td>
								<!-- <th>用户特征：</th>
								<td id="cl_user_feature">{vip_str}</td> -->
								<th>已回复次数：</th>
								<td id="cl_reply_count">{reply_count}</td>
								<th>7天内申请数量：</th>
								<td id="cl_apply_count"><a href="/page.php?menu=0&biz=service&mod=deal&act=list&uid={account}&uname={userName}&type=week&start_time={week_ago_str}" target="_blank">{apply_count}</a></td>
							<tr>
								<th>单据来源：</th>
								<td id="cl_deal_biz">{biz}</td>
								<th>单据类型：</th>
								<td id="cl_deal_type">{type_str}</td>
								<th>建单时间：</th>
								<td id="cl_deal_create_time">{createTime_str}</td>
								<th>预计完成时间：</th>
								<td id="cl_deal_evaluate_finish_time">{est_comp_time_str}</td>
							</tr>
							<!-- <tr>
								<th>一周内服务申请数量：</th>
								<td id="cl_apply_count">{apply_count}</td>
							</tr> -->
						</table>
					</div>
				</div>

				<!-- S 用户投诉详情 -->
				<div class="ecc_mod_box">
					<!-- cur_d:鼠标为默认状态（非手型） -->
					<div class="ecc_mod_box_hd cur_d">
						<h3 class="ecc_mod_box_tit">用户描述详情</h3>
						{readcount_str}
						<div class="ecc_mod_box_action">
							<a class="mod_btn" id="reassign_btn" href="#">转单</a>
							<a class="mod_btn_common" id="reassign_urge_btn" href="#">转单并加急</a>
						</div>
					</div>
					<div class="ecc_mod_box_bd">
						<p id="deal_content">
							{deal_detail_str}
						</p>
						<!-- 用户缩略图 -->
						<div class="ecc_detail_list clear" id="attachment_list">
							{attachment_str}
						</div>
					</div>
				</div>
				<!-- E 用户投诉详情 -->

				<!-- S 处理记录详情 -->
				<div class="ecc_mod_box">
					<div class="ecc_mod_box_hd up_down">
						<h3 class="ecc_mod_box_tit">工单处理记录</h3>
						<a href="##" class="ecc_mod_box_up"><span class="hidden">展开</span></a>
						<a href="##" class="ecc_mod_box_down" style="display:none"><span class="hidden">收起</span></a>
					</div>
					<div class="ecc_mod_box_bd">
						<div id="latest_reply">
							{latest_reply_str}
						</div>
						<div id="workflow_zone">
							{workflow_str}
						</div>
					</div>
				</div>
				<!-- E 用户投诉详情 -->
			</div>
			</div>
			
			<!-- 底部固定区域 -->
			<div class="ecc_fix_content grid_c1" id="kf_reply_zone" >
				<!-- S 客户回复区 -->
				<div class="ecc_mod_box">
					<div class="ecc_mod_box_bd">
						<div class="ecc_mod_tit">
							<h4 class="tit">客服回复区</h4>
							<p class="ecc_mod_inline ecc_mod_txt2">
								<select id="quick_reply" class="empty">
									<option value="0">快速回复</option>
									{quick_reply_str}
								</select>
							</p>
							{expire_time_str}
						</div>
						<div class="ecc_editor">
							<!-- 文件编辑器放这里 -->
							<textarea cols="80" rows="6" id="kf_reply"></textarea>
						</div>
					
						<div class="clear" style="margin-top:10px;">
							<p class="ecc_mod_datetit">
								<strong>下次跟进时间:</strong>
							</p>
							<!-- 日期选择控件 -->
							<div class="ecc_mod_datepicker">
								<select id="next_follow_time">
									<option value="30">30分钟后</option>
									<option value="120">2小时后</option>
									<option value="180">3小时后</option>
									<option value="360">6小时后</option>
								</select>
							</div>
						</div>
						<div class="clear">
							<p class="ecc_mod_datetit">
								<strong>是否短信下达:</strong>&nbsp;<input type="checkbox" id="need_sms" style="vertical-align:-8%;"/>
							</p>
						</div>

						<div class="ecc_box_action">
							<a class="mod_btn" id="normal_submit" href="#">提交</a>
							<a class="mod_btn3" id="resolved_submit" href="#">提交并归档</a>
							<a class="mod_btn_common" id="memo_submit" href="#">对内备注</a>
						</div>
				</div>
			</div>
				<!-- S 客户回复区 -->
		</div>
		
		<div class="mod_pop" id="archive_zone" style="display:none; width:700px;position:absolute;">
			<div class="mod_pop_hd">
				<h3 class="mod_pop_tit">请选择归档路径</h3>
				<button type="button" class="mod_pop_close">关闭</button>
			</div>
			<div class="mod_pop_bd">
				<div class="ecc_mod_rowform">
					<div class="item">
						<label class="tit" for="">最近使用过的归档：</label>
						<div class="cont">
							<select name="" id="used_archive">
								{archive_option_str}
							</select>
						</div>
					</div>
					<div class="item">
						<label class="tit" for="">快速搜索：</label>
						<div class="cont">
							<form id="archive_quick_search_form">
								<input type="text" id="archive_quick_search">
							</form>
							<div class="ecc_mod_classify clear">
								<div class="ecc_mod_cyitem">
									<div class="ecc_mod_cyitem_hd">一级分类</div>
									<div class="ecc_mod_cyitem_bd">
										<ul id="archive-level-1">
											<li><a href="##" archive_id="1" class="level-1 selected">商品咨询</a></li>
											<li><a href="##" archive_id="2" class="level-1">购物流问题</a></li>
											<li><a href="##" archive_id="3" class="level-1">订单问题</a></li>
											<li><a href="##" archive_id="4" class="level-1">售后</a></li>
											<li><a href="##" archive_id="5" class="level-1">用户评论</a></li>
											<li><a href="##" archive_id="6" class="level-1">账号及VIP特权</a></li>
											<li><a href="##" archive_id="7" class="level-1">用户投诉及其他</a></li>
											<li><a href="##" archive_id="8" class="level-1">差评导入</a></li>
										</ul>
									</div>
								</div>
								<a class="ecc_mod_cyitem_btn" href="##"></a>
								<div class="ecc_mod_cyitem">
									<div class="ecc_mod_cyitem_hd">二级分类</div>
									<div class="ecc_mod_cyitem_bd">
										<ul id="archive-level-2">
											<li><a href="##" archive_id="1001" class="level-2">商品信息</a></li>
											<li><a href="##" archive_id="1002" class="level-2">预售首发商品</a></li>
											<li><a href="##" archive_id="1003" class="level-2">商品信息错误</a></li>
											<li><a href="##" archive_id="1004" class="level-2">价格举报</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="cont">
							<input type="hidden" id="selected_archive_id" value="">
							<a href="##" id="archive_btn" class="mod_btn">确认</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mod_pop" id="reassign_zone" style="display:none; width:450px;position:absolute;">
			<div class="mod_pop_hd">
				<h3 class="mod_pop_tit">转单</h3>
				<button type="button" class="mod_pop_close">关闭</button>
			</div>
			<div class="mod_pop_bd">
				<div class="ecc_mod_rowform">
					<div class="item">
						<input type="radio" id="reassign_type1" checked name="reassign_type" value="1"><label for="reassign_type1">转单到个人</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<!-- <input type="radio" id="reassign_type2" name="reassign_type" value="2"><label for="reassign_type2">转单到组</label> -->
					</div>
					<div class="item" id="input_kf_rtx">
						输入员工RTX: <input type="text" id="kf_rtx" placeholder="输入员工RTX" >
					</div>
					<!-- <div class="item ecc_power_list clear" id="group_list" style="display:none;">
					</div> -->
					<div class="item">
						<input type="hidden" id="reassign_flag" value="">
						<a href="##" id="reassign_submit_btn" class="mod_btn">确认</a>
						<div class="item" style="float:right;padding-right:165px;margin-top:5px;"><span class="msg-tips" style="color: red;"></span></div>
					</div>
				</div>
			</div>
		</div>
		<div id="overlay" class="overlay_hide"></div>
		<div id="loading_text"></div>
		<script src="/service/js/detail_unsolved.js" type="text/javascript" charset="utf-8" > </script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.fancybox').fancybox();
			});
		</script>
	</body>
</html>