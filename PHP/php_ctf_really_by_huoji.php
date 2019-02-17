<link rel='stylesheet' type='text/css' href='https://cdn.bootcss.com/SyntaxHighlighter/3.0.83/styles/shCoreRDark.css'/>
<!-- :) -->
<p></p>

<?php
ini_set("display_errors",0);
function GetRand($length)   
{   
    $pattern = '1234567890qwertyuiopasdfghjklzxcvbnm';  
    for($i=0;$i<$length;$i++)   
    {   
        $key .= $pattern{mt_rand(0,34)};
    }   
    return $key;   
}
if(empty($_COOKIE['user']) || !$_COOKIE['user'])
{
	setcookie("user","guest");
	echo '<p>真正的题目: 学会尊重别人</p><p>-不要太把自己当回事了,也许你懂一点百度,懂一点PHP匿名函数,懂一点PHP弱类型特点,懂一点null中存在的问题,但是不好意思,这都是热身。那么,开始受苦吧:)</p>';
	die();
}else if($_COOKIE['user'] != "admin")
	die();
setcookie("user","admin");
$tmpdir = md5("huoji".$_SERVER["REMOTE_ADDR"]);
$dir = iconv("UTF-8", "GBK", $tmpdir);
if (!file_exists($dir))
	mkdir ($dir,0777,true);

?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Ha4k1r</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- -->
    <script>var __links = document.querySelectorAll('a');
      function __linkClick(e) {
        parent.window.postMessage(this.href, '*');
      };
      for (var i = 0,
      l = __links.length; i < l; i++) {
        if (__links[i].getAttribute('data-t') == '_blank') {
          __links[i].addEventListener('click', __linkClick, false);
        }
      }</script>
    <script src="js/jquery.min.js"></script>
    <script>$(document).ready(function(c) {
        $('.alert-close').on('click',
        function(c) {
          $('.message').fadeOut('slow',
          function(c) {
            $('.message').remove();
          });
        });
      });</script>
	<script type="text/javascript">function SuperDuck(){
			alert("密码错误")}</script>
  </head>
  
  <body>
    <!-- contact-form -->
    <div class="message warning">
      <div class="inset">
        <div class="login-head">

		<?php
		if(isset($_GET['method']) || isset($_GET['resetkey']))
		{
			if($_GET['method'] == "resetpassword")
			{
				echo "
				 <h1>找回Admin的密码</h1></div>
				 <form>
				 
				 <p>请输入Admin的密码以确认您的身份:</p>
				 <li>
				  </li>
				  <div class=\"clear\"></div>
				  <li>
					<input type=\"text\" value=\"\">
					<a href=\"?method=resetpassword\" class=\"icon lock\"></a>
				  </li>
				  <div class=\"clear\"></div>
				  <div class=\"submit\">
					<input type=\"submit\" onclick=\"SuperDuck()\" value=\"找回密码!\">
						<h4>
					  <a href=\"?method=login\">返回登录</a></h4>
					<div class=\"clear\"></div>
				  </div>
				 </from>
				";
			}else if($_GET['method'] == "login"){
				echo "    
					<h1>请登录系统</h1></div>			
					<form>
				  <li>
					<input type=\"text\" class=\"text\" value=\"Admin\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Admin';}\">
					<a href=\"#\" class=\" icon user\"></a>
				  </li>
				  <div class=\"clear\"></div>
				  <li>
					<input type=\"password\" value=\"\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = '';}\">
					<a href=\"#\" class=\"icon lock\"></a>
				  </li>
				  <div class=\"clear\"></div>
				  <div class=\"submit\">
					<input type=\"submit\" onclick=\"SuperDuck()\" value=\"登录\">
					<h4>
					  <a href=\"?method=resetpassword\">忘记了你的密码吗 ?</a></h4>
					<div class=\"clear\"></div>
				  </div>
				</form>
				";
			}else if(!empty($_GET['resetkey']))
			{
				echo "<h1>请登录系统</h1></div>			
					<form>";
				$tmpdirfile = md5("huoji".$_SERVER["REMOTE_ADDR"])."/config.php";
				if(!file_exists($tmpdirfile))
					die(" :( ");
				$myfile = fopen($tmpdirfile, "r") or die("Unable to open file!");
				$key = fgets($myfile);
				fclose($myfile);

				if($key === $_GET['resetkey'])
				{
					echo '<p>恭喜你完成了最后的挑题目,是不是很简单呢? 点<a href="/php/php_fyuo2k2tlqp3uhw5s8ktzuqhf1x3wcq2.html">这里领红包了</p>';
				}else
				{
					echo "<p>重置链接错误! 点<a href =\"?method=resetpassword\">这里</a>返回上一级</p>";
				}
				echo '</form>';
			}
		}else {
			$SecureKey = GetRand(16);
			$ResetPasswordLink = GetRand(32);
			$stext = "系统安装成功!";
			$tmpdirfile = md5("huoji".$_SERVER["REMOTE_ADDR"])."/config.php";
			if(file_exists($tmpdirfile))
				$stext = "看起来您好像失败了 :)";
			$myfile = fopen($tmpdirfile, "w") or die("Unable to open file!");
			fwrite($myfile, $ResetPasswordLink);
			fclose($myfile);
			echo "
			<h1>$stext</h1></div>			
			<form>
			<p>恭喜您,您的系统安装成功了!为了防止你忘记Admin的密码,我们提供了一个security code给您找回密码,请务必牢记:</p>
			<li>
			<input type=\"text\" value=\"$SecureKey\">
			</li>
			<a href=\"?method=login\">去登录</a>
			</from>
			";
		}

		?>
      </div>
    </div>
    </div>
    <div class="clear"></div>
    <!--- footer --->
    <div class="footer">
      <p>Ha4k1r Copyright &copy; 2019.</p>
    </div>
	<?php
	if(!isset($_GET['method']) && !isset($_GET['resetkey']))
	{
		echo "
	<div class=\"syntaxhighlighter  php\" id=\"highlighter_301595\"><div class=\"toolbar\"><span><a class=\"toolbar_item command_help help\" href=\"#\">?</a></span></div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td class=\"gutter\"><div class=\"line number1 index0 alt2\">1</div><div class=\"line number2 index1 alt1\">2</div><div class=\"line number3 index2 alt2\">3</div><div class=\"line number4 index3 alt1\">4</div><div class=\"line number5 index4 alt2\">5</div><div class=\"line number6 index5 alt1\">6</div><div class=\"line number7 index6 alt2\">7</div><div class=\"line number8 index7 alt1\">8</div><div class=\"line number9 index8 alt2\">9</div><div class=\"line number10 index9 alt1\">10</div><div class=\"line number11 index10 alt2\">11</div></td><td class=\"code\"><div class=\"container\"><div class=\"line number1 index0 alt2\"><code class=\"php keyword\">function</code>&nbsp;<code class=\"php plain\">GetRand(</code><code class=\"php variable\">$length</code><code class=\"php plain\">)&nbsp;&nbsp;&nbsp;</code></div><div class=\"line number2 index1 alt1\"><code class=\"php plain\">{&nbsp;&nbsp;&nbsp;</code></div><div class=\"line number3 index2 alt2\"><code class=\"php spaces\">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class=\"php variable\">\$pattern</code>&nbsp;<code class=\"php plain\">=&nbsp;</code><code class=\"php string\">'1234567890qwertyuiopasdfghjklzxcvbnm'</code><code class=\"php plain\">;&nbsp;&nbsp;</code></div><div class=\"line number4 index3 alt1\"><code class=\"php spaces\">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class=\"php keyword\">for</code><code class=\"php plain\">(</code><code class=\"php variable\">$i</code><code class=\"php plain\">=0;</code><code class=\"php variable\">$i</code><code class=\"php plain\">&lt;</code><code class=\"php variable\">$length</code><code class=\"php plain\">;</code><code class=\"php variable\">$i</code><code class=\"php plain\">++)&nbsp;&nbsp;&nbsp;</code></div><div class=\"line number5 index4 alt2\"><code class=\"php spaces\">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class=\"php plain\">{&nbsp;&nbsp;&nbsp;</code></div><div class=\"line number6 index5 alt1\"><code class=\"php spaces\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class=\"php variable\">\$key</code>&nbsp;<code class=\"php plain\">.=&nbsp;</code><code class=\"php variable\">\$pattern</code><code class=\"php plain\">{mt_rand(0,34)};</code></div><div class=\"line number7 index6 alt2\"><code class=\"php spaces\">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class=\"php plain\">}&nbsp;&nbsp;&nbsp;</code></div><div class=\"line number8 index7 alt1\"><code class=\"php spaces\">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class=\"php keyword\">return</code>&nbsp;<code class=\"php variable\">\$key</code><code class=\"php plain\">;&nbsp;&nbsp;&nbsp;</code></div><div class=\"line number9 index8 alt2\"><code class=\"php plain\">}</code></div><div class=\"line number10 index9 alt1\"><code class=\"php variable\">\$SecureKey</code>&nbsp;<code class=\"php plain\">=&nbsp;GetRand(16);</code></div><div class=\"line number11 index10 alt2\"><code class=\"php variable\">\$ResetPasswordLink</code>&nbsp;<code class=\"php plain\">=&nbsp;</code><code class=\"php string\">\"?resetkey=\"</code><code class=\"php plain\">.GetRand(32);</code></div></div></td></tr></tbody></table></div>";
	}
	?>
  </body>

</html>