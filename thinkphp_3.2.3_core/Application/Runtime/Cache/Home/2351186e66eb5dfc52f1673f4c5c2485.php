<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title></title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="/thinkphp_3.2.3_core/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/chosen.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/datepicker.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/colorpicker.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/ace-skins.min.css" />

		<script src="/thinkphp_3.2.3_core/Public/assets/js/ace-extra.min.js"></script>

	</head>

	<body>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<!--<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>-->

				<div class="main-content1">
					<div class="breadcrumbs" id="breadcrumbs" style="position:fixed;width:100%;z-index: 1028;">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="/thinkphp_3.2.3_core/Home/Index/right">Home</a>
							</li>

							<!--<li>
								<a href="#">Forms</a>
							</li>-->
							<li class="active">自动化设计</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>
					<br/>
					<br/>
					<div class="page-content">
						
						<?php  for($i=0;$i<count($autoinfoArr);$i++){ $content = $autoinfoArr[$i]["content"]; $content = mb_strimwidth($content,0,300,"...","utf8"); ?>
							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<h2 class="header smaller lighter blue">
										<!--<a href="/thinkphp_3.2.3_core/index.php/Home/autodesign/detail?id=<?php echo ($autoinfoArr[$i]["id"]); ?>"><?php echo ($autoinfoArr[$i]["title"]); ?></a>-->
										<a href="/thinkphp_3.2.3_core/index.php/Home/autodesign/detail?title=<?php echo ($autoinfoArr[$i]["title"]); ?>"><?php echo ($autoinfoArr[$i]["title"]); ?></a>
										&nbsp;<small>创建时间:<?php echo ($autoinfoArr[$i]["create_time"]); ?></small>
									</h2>
								</div><!-- /.col -->
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div>
										<pre><font size=+1 face="宋体"><?php echo ($content); ?></font></pre>
									</div>
								</div>
							</div>
						<?php ;}?>
						
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/thinkphp_3.2.3_core/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/thinkphp_3.2.3_core/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/bootstrap.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/typeahead-bs2.min.js"></script>

		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/chosen.jquery.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/date-time/moment.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/date-time/daterangepicker.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery.knob.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery.autosize.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery.maskedinput.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->

		<script src="/thinkphp_3.2.3_core/Public/assets/js/ace-elements.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/ace.min.js"></script>
		
		<script>
		$(window).scroll(function(){
				if($(window).scrollTop()>10){    //垂直滚动条钓offset 大于90时。
					$("#btn-scroll-up").css({
					   "display":"block",       //修改相关div样式
				   });
				   
				}else{
					$("#btn-scroll-up").css({
						"display":"none",     //修改相关div样式
					});
				}
			});
		</script>
	
</html>