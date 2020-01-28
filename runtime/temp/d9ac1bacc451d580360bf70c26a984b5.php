<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\MilFun\Apache24\htdocs\CityZone\config/../public/view/index\index\markdown.html";i:1572230920;s:71:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\header.html";i:1572242657;s:68:"D:\MilFun\Apache24\htdocs\CityZone\public\view\index\common\nav.html";i:1572231387;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-store, must-revalidate"> 
<meta name="keywords" content="怪兽研习社,MilFun,研习社,微信公众号,怪兽" />
<meta name="description" content="怪兽研习社,专注于为广大粉丝免费提供大量资源福利，帮助您快速找到自己的未来,让技术变得更简单、更安全。目前已有百万粉丝关注研习社，欢迎您加入，共创辉煌！" />
<link rel="bookmark"  type="image/x-icon"  href="favicon.ico"/>
<link rel="shortcut icon" href="http://milfun.com/public/static/img/favicon.ico">
<link rel="stylesheet" type="text/css" href="http://milfun.com/public/static/css/m.css" />
<!-- mp.milfun.fun Baidu tongji analytics -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?83d7d33e2195a88dceb457d2159fd69b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script src="https://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>

	
<link rel="stylesheet" type="text/css" href="http://milfun.com/public/static/css/sspai.css" />
<title>怪兽研习社 - MarkDown在线编辑器</title>

</head>
<body>
<div class="docker header">
		<div class="inner">
			<!---->
			<nav >
				<!---->
				<div class="nav-logo">
					<a href="<?php echo APP_DOMAIN; ?>"><img src="http://milfun.com/public/static/img/zone-logo.png"  title="怪兽研习社"  alt="怪兽研习社"></a>
				</div>
				<!---->
				<div class="nav-item">
					<a href="" class="nav-link">发现</a>
					<a href="" class="nav-link">有聊</a>
					<a href="" class="nav-link">活动</a>
					<a href="" class="nav-link">未知领域</a>
					<a href="" class="nav-link">Zone学院</a>
				</div>
				<!---->
				<div class="nav-info">
					
					<!--<a href="http://milfun.com/Index/index/login.html" class="btn login">注册/登陆</a>-->
				</div>
				
		</nav>
		</div>
		
	</div>
	<div class="docker header2">
		<div class="inner">
			
			<span class="h2-span">最新消息：士大夫的就能免费v接口的沙漠覅开发你们看v</span>
		</div>
	</div>	
<!---->
<div class="docker main">
		<div class="inner">
			
			<div>
					<!--保留块-->
					<a href=""><div class="swiper s1"></div></a>
					<!--文章顶部信息-->
					<div class="article-head">
						<p class="category">
							<a id="article-type" href=""  contenteditable="true">创意越过界</a>
						</p>
						<h1 id="article-title" contenteditable="true">如何从“听到大师讲课”到“和大师合作”丨MindClass创意大师课正式上线</h1>
						<p id="article-tag" class="article-tag" contenteditable="true">
							<span class="tag">品牌</span>
							<span class="tag">创意</span>
							<span class="tag">灵感</span>
							<span class="tag">品牌</span>
							<span class="tag">创意</span>
							<span class="tag">灵感</span>
						</p>
						<p class="" contenteditable="true">
							<span id="article-imgurl" class="tag">https://pic2.zhimg.com/v2-0114703a5276a4824b7022ff94645425_1200x500.jpg</span>
						</p>
					</div>

					<!--设置展示的div添加id-->
				    
				    	<article id="result">
				    		

				    	</article>
				    

				    <div id="tool">
				    	<p>MilFun文章编辑器</p>
				    	<!--设置id为oriContent，如果想实现实时更新，使用onkeyup方法-->
				    	 <textarea id="MilFun" placeholder="请输入文章内容" onkeyup="convert()"></textarea>
				    	  <a href="jacascript:;" class="link-more">提交信息</a>
				    </div>
				    
				   

			</div>

		   
		</div>
		 

		<!-- Tips -->

		<!-- Tips End-->

</div>
<script type="text/javascript" src="http://milfun.com/public/static/js/milfun.js"></script>
<script>
	var domain = "<?php echo APP_DOMAIN; ?>"
	var jsList = ["showdown.min","commit"]
	var mi = new Milfun(jsList,domain);
	
</script>
<script>

var html,text,onverter 
function convert(){
    text = $("#MilFun").val();
    converter = new showdown.Converter();
    html = converter.makeHtml(text);
    $("#result").html(html) ;
}


$(window).load(function(){
	
	$(".link-more").click(function(){
	    co.getAll(domain );
	});
});


</script>

