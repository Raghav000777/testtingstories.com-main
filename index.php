<?php
	$ID = $_GET['ac'] ?? '718915';
	$TYPE = $_GET['type'] ?? 'async';
	$AC_SWITCH_SCRIPT = "javascript:(function()%7Bvar%20accountId%20%3D%20prompt(%22Enter%20the%20accountId%22)%3B%0A%09if(accountId)%20%7B%0A%09%09const%20u%20%3D%20new%20URL(window.top.location.href)%0A%09%09u.searchParams.set('ac'%2C%20accountId)%3B%0A%09%09window.location.href%20%3D%20u.toString()%3B%0A%09%7D%7D)()%3B";
	$USE_JQ = ($_GET['jq'] ?? '0') == '1';
	$DEL_JQ = ($_GET['del_jq'] ?? '0') == '1';
	// echo $DEL_JQ;
	// return;
?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<title>Testingstories.com <?= $ID ?>(<?= $TYPE ?>)(<?= $USE_JQ ? 'Jq' : 'No-Jq' ?>)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link href="assets/css/main.css" rel="stylesheet" />
	<!-- <script>
		function getAcount() {
			var account_id = '606908';
			const urlSearchParams = new URLSearchParams(window.location.search);
			const params = Object.fromEntries(urlSearchParams.entries());
			if (params.ac) { account_id = params.ac; }
			return account_id;
		}
	</script> -->
	<?php if ($TYPE == 'async') { ?>
	<!-- Start VWO Async SmartCode -->
	<script type='text/javascript' id='vwoCode'>
		window._vwo_code = window._vwo_code || (function () {
			var account_id = <?= $ID ?>,
				version = 1.5,
				settings_tolerance = 2000,
				library_tolerance = 2500,
				use_existing_jquery = <?= $USE_JQ ? 'true' : 'false' ?>,
				is_spa = 1,
				hide_element = 'body',
				hide_element_style = 'opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important',
				/* DO NOT EDIT BELOW THIS LINE */
				f = false, d = document, vwoCodeEl = d.querySelector('#vwoCode'), code = { use_existing_jquery: function () { return use_existing_jquery }, library_tolerance: function () { return library_tolerance }, hide_element_style: function () { return '{' + hide_element_style + '}' }, finish: function () { if (!f) { f = true; var e = d.getElementById('_vis_opt_path_hides'); if (e) e.parentNode.removeChild(e) } }, finished: function () { return f }, load: function (e) { var t = d.createElement('script'); t.fetchPriority = 'high'; t.src = e; t.type = 'text/javascript'; t.onerror = function () { _vwo_code.finish() }; d.getElementsByTagName('head')[0].appendChild(t) }, getVersion: function () { return version }, getMatchedCookies: function (e) { var t = []; if (document.cookie) { t = document.cookie.match(e) || [] } return t }, getCombinationCookie: function () { var e = code.getMatchedCookies(/(?:^|;)\s?(_vis_opt_exp_\d+_combi=[^;$]*)/gi); e = e.map(function (e) { try { var t = decodeURIComponent(e); if (!/_vis_opt_exp_\d+_combi=(?:\d+,?)+\s*$/.test(t)) { return '' } return t } catch (e) { return '' } }); var i = []; e.forEach(function (e) { var t = e.match(/([\d,]+)/g); t && i.push(t.join('-')) }); return i.join('|') }, init: function () { if (d.URL.indexOf('__vwo_disable__') > -1) return; window.settings_timer = setTimeout(function () { _vwo_code.finish() }, settings_tolerance); var e = d.createElement('style'), t = hide_element ? hide_element + '{' + hide_element_style + '}' : '', i = d.getElementsByTagName('head')[0]; e.setAttribute('id', '_vis_opt_path_hides'); vwoCodeEl && e.setAttribute('nonce', vwoCodeEl.nonce); e.setAttribute('type', 'text/css'); if (e.styleSheet) e.styleSheet.cssText = t; else e.appendChild(d.createTextNode(t)); i.appendChild(e); var n = this.getCombinationCookie(); this.load('https://dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' + encodeURIComponent(d.URL) + '&f=' + +is_spa + '&vn=' + version + (n ? '&c=' + n : '')); return settings_timer } }; window._vwo_settings_timer = code.init(); return code;
		}());
	</script>
	<!-- End VWO Async SmartCode -->
	<?php } else { ?>
	<!-- Start VWO SmartCode -->
	<script src="https://dev.visualwebsiteoptimizer.com/lib/<?= $ID ?>.js" id='vwoCode'></script>
	<!-- End VWO SmartCode -->
	<?php } ?>
	<!--<script type='text/javascript' defer rel="preload" fetchpriority="high">-->
	<!--    var script = document.createElement('script');-->
	<!--    script.src = 'https://dev.visualwebsiteoptimizer.com/lib/' +getAcount() + '.js';-->
	<!--    script.id = 'vwoCode';-->
	<!--    document.head.appendChild(script);-->
	<!--</script>-->

	<!-- <script type="text/javascript">
		var s = document.createElement('script');
		s.src='https://storage.googleapis.com/troubleshooter/troubleshooter.js?r=' + Math.random() ;
		document.getElementsByTagName('head')[0].appendChild(s);
	</script> -->

	<link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/bootstrap-icons-1.11.3/font/bootstrap-icons.css" />
	<style type="text/css">
		#header>div:nth-child(1) {
			position: fixed;
			width: 100%;
			top: 0px;
			z-index: 100000;
			padding: 10px 0px 0px 0px;
			opacity: 0.75;
			color: #c72f1c;
			font-weight: bolder;
			background-color: white;
			background-image: linear-gradient(#9e7c78 1px, transparent 1px), linear-gradient(to right, #d5bab6 1px, #ffffff 1px);
			background-size: 45px 51px;
			box-shadow: 5px 10px 10px #eaeaea;
		}
		.ac_change_btn {
			display: inline-block;
			height: 17px;
			width: 17px;
			opacity: 0.8;
		}
		.id_holder {
			font-size: 109%;
			font-weight: bolder;
			font-style: italic;
		}
	</style>
</head>

<body class="homepage is-preload">
	<div id="page-wrapper"><!-- Header -->
		<section id="header">
			<div><span>Account: </span><span class="id_holder"><?= $ID ?>(<?= $TYPE ?>)(<?= $USE_JQ ? '<b>Jq</b>' : '<b>No</b>-Jq' ?>)</span>
				<a href="<?= $AC_SWITCH_SCRIPT ?>" class="ac_change_btn">
					<img src="assets/imgs/change-id.svg" />
				</a>
			</div>

			<div class="container"><!-- Logo -->
				<h1 id="logo"><a href="index.html">Testing stories.com</a></h1>

				<p>A responsive HTML5 site template. Manufactured by HTML5 UP.</p>
				<!-- Nav -->

				<nav id="nav">
					<ul>
						<li><a class="icon solid fa-home" href="index.html"><span>Introduction</span></a></li>
						<li><a class="icon fa-chart-bar" href="#"><span>Dropdown</span></a>
							<ul>
								<li><a href="#">Lorem ipsum dolor</a></li>
								<li><a href="#">Magna phasellus</a></li>
								<li><a href="#">Etiam dolore nisl</a></li>
								<li><a href="#">Phasellus consequat</a>
									<ul>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li><a href="#">Phasellus consequat</a></li>
									</ul>
								</li>
								<li><a href="#">Veroeros feugiat</a></li>
							</ul>
						</li>
						<li><a class="icon solid fa-cog" href="#?p=left-sidebar"><span>Left Sidebar</span></a></li>
						<li><a class="icon solid fa-retweet" href="#?p=right-sidebar"><span>Right Sidebar</span></a>
						</li>
						<li><a class="icon solid fa-sitemap" href="#?p=no-sidebar"><span>No Sidebar</span></a></li>
					</ul>
				</nav>
			</div>
		</section>
		<!-- Features -->

		<section id="features">
			<div class="container">
				<header>
					<h2>Gentlemen, behold! This is <strong>Strongly Typed</strong>!</h2>
				</header>

				<div class="row aln-center">
					<div class="col-4 col-6-medium col-12-small"><!-- Feature -->
						<section><a class="image featured" href="#"><img alt="" src="images/pic01.jpg" /></a>

							<header>
								<h3>Okay, so what is this?</h3>
							</header>

							<p>This is <strong>Strongly Typed</strong>, a free, fully responsive site template by <a
									href="http://html5up.net">HTML5 UP</a>. Free for personal and commercial use under
								the <a href="http://html5up.net/license">CCA 3.0 license</a>.</p>
						</section>
					</div>

					<div class="col-4 col-6-medium col-12-small"><!-- Feature -->
						<section><a class="image featured" href="#"><img alt="" src="images/pic02.jpg" /></a>

							<header>
								<h3>Nice! What is HTML5 UP?</h3>
							</header>

							<p><a href="http://html5up.net">HTML5 UP</a> is a side project of <a
									href="http://twitter.com/ajlkn">AJ&rsquo;s</a> (= me). I started it as a way to both
								test my responsive tools and sharpen up my coding and design skills a bit.</p>
						</section>
					</div>

					<div class="col-4 col-6-medium col-12-small"><!-- Feature -->
						<section><a class="image featured" href="#"><img alt="" src="images/pic03.jpg" /></a>

							<header>
								<h3>What&#39;s this built with?</h3>
							</header>

							<p><strong>Responsive Tools</strong> is a simple set of tools for building responsive sites
								and apps. All of my templates at <a href="http://html5up.net">HTML5 UP</a> are built
								using these tools.</p>
						</section>
					</div>

					<div class="col-12">
						<ul class="actions">
							<li><a class="button icon solid fa-file" href="#">Tell Me More</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner -->

		<section id="banner">
			<div class="container">
				<p>Use this space for <strong>profound thoughts</strong>.<br />
					Or an enormous ad. Whatever.</p>
			</div>
		</section>
		<!-- Main -->

		<section id="main">
			<div class="container">
				<div class="row"><!-- Content -->
					<div class="col-8 col-12-medium" id="content"><!-- Post -->
						<article class="box post">
							<header>
								<h2><a href="#">I don&rsquo;t want to say <strong>it&rsquo;s the aliens</strong>
										...<br />
										but it&rsquo;s the aliens.</a></h2>
							</header>
							<a class="image featured" href="#"><img alt="" src="images/pic04.jpg" /></a>

							<h3>I mean isn&#39;t it possible?</h3>

							<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra
								sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique.
								Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet
								lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum
								veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo
								mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue.
								Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu
								malesuada in tristique.</p>

							<ul class="actions">
								<li><a class="button icon solid fa-file" href="#">Continue Reading</a></li>
							</ul>
						</article>
						<!-- Post -->

						<article class="box post">
							<header>
								<h2><a href="#">By the way, many thanks to <strong>regularjane</strong> for these
										awesome demo photos</a></h2>
							</header>
							<a class="image featured" href="#"><img alt="" src="images/pic05.jpg" /></a>

							<h3>You should probably check out her work</h3>

							<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra
								sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique.
								Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet
								lorem ipsum sed consequat consequat magna tempus lorem ipsum consequat Phasellus laoreet
								massa id in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
								magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna
								tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce
								suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet
								magna accumsan tristique. Curabitur leo nibh, rutrum malesuada.</p>

							<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet
								massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis
								tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh,
								rutrum eu malesuada in, tristique at erat. Curabitur leo nibh, rutrum eu malesuada in,
								tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus
								veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus.</p>

							<ul class="actions">
								<li><a class="button icon solid fa-file" href="#">Continue Reading</a></li>
							</ul>
						</article>
					</div>
					<!-- Sidebar -->

					<div class="col-4 col-12-medium" id="sidebar"><!-- Excerpts -->
						<section>
							<ul class="divided">
								<li><!-- Excerpt -->
									<article class="box excerpt">
										<header><span class="date">July 30</span>

											<h3><a href="#">Just another post</a></h3>
										</header>

										<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est suscipit
											convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.
										</p>
									</article>
								</li>
								<li><!-- Excerpt -->
									<article class="box excerpt">
										<header><span class="date">July 28</span>
											<h3><a href="#">And another post</a></h3>
										</header>

										<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est suscipit
											convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.
										</p>
									</article>
								</li>
								<li><!-- Excerpt -->
									<article class="box excerpt">
										<header><span class="date">July 24</span>
											<h3><a href="#">One more post</a></h3>
										</header>

										<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est suscipit
											convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.
										</p>
									</article>
								</li>
							</ul>
						</section>
						<!-- Highlights -->

						<section>
							<ul class="divided">
								<li><!-- Highlight -->
									<article class="box highlight">
										<header>
											<h3><a href="#">Something of note</a></h3>
										</header>
										<a class="image left" href="#"><img alt="" src="images/pic06.jpg" /></a>

										<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula
											vel quam viverra sit amet mollis tortor congue magna lorem ipsum dolor et
											quisque ut odio facilisis convallis. Etiam non nunc vel est suscipit
											convallis non id orci. Ut interdum tempus facilisis convallis. Etiam non
											nunc vel est suscipit convallis non id orci.</p>

										<ul class="actions">
											<li><a class="button icon solid fa-file" href="#">Learn More</a></li>
										</ul>
									</article>
								</li>
								<li><!-- Highlight -->
									<article class="box highlight">
										<header>
											<h3><a href="#">Something of less note</a></h3>
										</header>
										<a class="image left" href="#"><img alt="" src="images/pic07.jpg" /></a>

										<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula
											vel quam viverra sit amet mollis tortor congue magna lorem ipsum dolor et
											quisque ut odio facilisis convallis. Etiam non nunc vel est suscipit
											convallis non id orci. Ut interdum tempus facilisis convallis. Etiam non
											nunc vel est suscipit convallis non id orci.</p>

										<ul class="actions">
											<li><a class="button icon solid fa-file" href="#">Learn More</a></li>
										</ul>
									</article>
								</li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</section>
		<!-- Test-main -->

		<section id="test-main">
			<div class="container">
				<div class="row"><!-- Test-Content -->
					<div class="col-12 col-12-medium" id="test-content"><!-- Post -->
						<table class="table">
							<thead>
								<tr>
									<th>Group</th>
									<th>Test Case</th>
									<th>Test Input</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Type of Elements</td>
									<td>Paragraphs</td>
									<td>
										<p>Paragraph 1</p>
										<p>Paragraph 2</p>
									</td>
								</tr>
								<tr>
									<td>Type of Elements</td>
									<td>Headings</td>
									<td>
										<h1>Heading 1</h1>
										<h2>Heading 2</h2>
										<h3>Heading 3</h3>
										<h4>Heading 4</h4>
										<h5>Heading 5</h5>
									</td>
								</tr>
								<tr>
									<td>Type of Elements</td>
									<td>Span</td>
									<td>
										<span>Span 1</span>
										<span>Span 2</span>
									</td>
								</tr>
								<tr>
									<td>Links</td>
									<td>Link</td>
									<td>
										<a class="btn btn-primary" href="#" role="button">Link</a>
									</td>
								</tr>
								<tr>
									<td>Buttons</td>
									<td>Input Button</td>
									<td>
										<input class="btn btn-primary" type="button" value="Input">
									</td>
								</tr>
								<tr>
									<td>Buttons</td>
									<td>Submit Button</td>
									<td>
									<input class="btn btn-primary" type="submit" value="Submit">
									</td>
								</tr>
								<tr>
									<td>Buttons</td>
									<td>Image Button</td>
									<td>
									<input class="btn" type="image" src="assets/imgs/emoji.png" alt="Submit" width="100" height="90">
									</td>
								</tr>
								<tr>
									<td>Form Elements</td>
									<td>Input fields (text, email, password, etc.)</td>
									<td>
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label">Text</label>
											<input class="form-control" id="exampleFormControlInput1" type="text" placeholder="Text" />
										</div>
										<div class="mb-3">
											<label for="exampleFormControlInput2" class="form-label">Email</label>
											<input class="form-control" id="exampleFormControlInput2" type="email" placeholder="Email" />
										</div>
										<div class="mb-3">
											<label for="exampleFormControlInput3" class="form-label">Password</label>
											<input class="form-control" id="exampleFormControlInput3" type="password" placeholder="Password" />
										</div>
									</td>
								</tr>
								<tr>
									<td>Form Elements</td>
									<td>Textareas</td>
									<td>
										<div class="mb-3">
											<label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
											<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										</div>
									</td>
								</tr>
								<tr>
									<td>Form Elements</td>
									<td>Checkboxes</td>
									<td>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
											<label class="form-check-label" for="inlineCheckbox1">1</label>
											</div>
											<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
											<label class="form-check-label" for="inlineCheckbox2">2</label>
											</div>
											<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
											<label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>Form Elements</td>
									<td>Radio buttons</td>
									<td>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
											<label class="form-check-label" for="inlineRadio1">1</label>
											</div>
											<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
											<label class="form-check-label" for="inlineRadio2">2</label>
											</div>
											<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
											<label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>Form Elements</td>
									<td>Select dropdowns</td>
									<td>
									<select class="form-select" aria-label="Default select example">
										<option selected>Open this select menu</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									</select>
									</td>
								</tr>
								<tr>
									<td>Form Elements</td>
									<td>Labels for form elements</td>
									<td>
										<label for="formLabel1" class="form-label">Form Label</label>
									</td>
								</tr>
								<tr>
									<td>Images</td>
									<td>Image tags</td>
									<td>
										<img src="assets/imgs/emoji.png" class="img-fluid" alt="img-fluid" width="100" height="90">
									</td>
								</tr>
								<tr>
									<td>Images</td>
									<td>Image maps</td>
									<td>
										<img src="assets/imgs/workplace.jpg" alt="Workplace" usemap="#workmap">

										<map name="workmap">
											<area shape="rect" coords="34,44,270,350" alt="Computer" href="#computer">
											<area shape="rect" coords="290,172,333,250" alt="Phone" href="#phone">
											<area shape="circle" coords="337,300,44" alt="Coffee" href="#coffee">
										</map>
									</td>
								</tr>
								<tr>
									<td>Images</td>
									<td>Svg</td>
									<td>
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" cache-id="a96777576c144af7aa9ee0900a14c69f" id="e9g7WusiZel1" viewBox="0 0 600 600" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" style="background-color:rgb(24,1,65);width: 200px;"><defs><linearGradient id="e9g7WusiZel5-fill" x1="240.271632" y1="309.009212" x2="357.138883" y2="162.707706" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="e9g7WusiZel5-fill-0" offset="1%" stop-color="rgb(223,29,87)"></stop><stop id="e9g7WusiZel5-fill-1" offset="67.8492%" stop-color="rgb(136,27,138)"></stop><stop id="e9g7WusiZel5-fill-2" offset="100%" stop-color="rgb(119,27,148)"></stop></linearGradient><linearGradient id="e9g7WusiZel7-fill" x1="335.55" y1="243.09" x2="181.45" y2="250.85" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="e9g7WusiZel7-fill-0" offset="1%" stop-color="rgb(75,39,146)"></stop><stop id="e9g7WusiZel7-fill-1" offset="52%" stop-color="rgb(101,33,150)"></stop><stop id="e9g7WusiZel7-fill-2" offset="100%" stop-color="rgb(120,28,153)"></stop></linearGradient><linearGradient id="e9g7WusiZel8-fill" x1="327.990476" y1="243.474259" x2="142.06523" y2="188.143338" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="e9g7WusiZel8-fill-0" offset="0%" stop-color="rgb(75,39,146)"></stop><stop id="e9g7WusiZel8-fill-1" offset="29%" stop-color="rgb(79,38,147)"></stop><stop id="e9g7WusiZel8-fill-2" offset="60%" stop-color="rgb(93,35,149)"></stop><stop id="e9g7WusiZel8-fill-3" offset="93%" stop-color="rgb(114,29,152)"></stop><stop id="e9g7WusiZel8-fill-4" offset="100%" stop-color="rgb(120,28,153)"></stop></linearGradient><linearGradient id="e9g7WusiZel9-fill" x1="325.51" y1="239.5" x2="204.63" y2="152.98" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="e9g7WusiZel9-fill-0" offset="1%" stop-color="rgb(75,39,146)"></stop><stop id="e9g7WusiZel9-fill-1" offset="35%" stop-color="rgb(97,34,149)"></stop><stop id="e9g7WusiZel9-fill-2" offset="72%" stop-color="rgb(114,29,152)"></stop><stop id="e9g7WusiZel9-fill-3" offset="100%" stop-color="rgb(120,28,153)"></stop></linearGradient><linearGradient id="e9g7WusiZel11-fill" x1="341.38" y1="145.83" x2="413.1" y2="181.24" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="e9g7WusiZel11-fill-0" offset="0%" stop-color="rgb(244,68,3)"></stop><stop id="e9g7WusiZel11-fill-1" offset="0%" stop-color="rgb(244,69,3)"></stop><stop id="e9g7WusiZel11-fill-2" offset="31%" stop-color="rgb(249,110,3)"></stop><stop id="e9g7WusiZel11-fill-3" offset="59%" stop-color="rgb(252,140,2)"></stop><stop id="e9g7WusiZel11-fill-4" offset="83%" stop-color="rgb(254,158,2)"></stop><stop id="e9g7WusiZel11-fill-5" offset="100%" stop-color="rgb(255,165,2)"></stop></linearGradient><linearGradient id="e9g7WusiZel12-fill" x1="357.08" y1="221.33" x2="376.25" y2="177.6" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="e9g7WusiZel12-fill-0" offset="0%" stop-color="rgb(255,165,2)"></stop><stop id="e9g7WusiZel12-fill-1" offset="90%" stop-color="rgb(245,78,3)"></stop><stop id="e9g7WusiZel12-fill-2" offset="100%" stop-color="rgb(244,68,3)"></stop></linearGradient><linearGradient id="e9g7WusiZel13-fill" x1="302.71" y1="132.41" x2="356.4" y2="206.73" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="e9g7WusiZel13-fill-0" offset="1%" stop-color="rgb(223,29,87)"></stop><stop id="e9g7WusiZel13-fill-1" offset="20%" stop-color="rgb(219,29,89)"></stop><stop id="e9g7WusiZel13-fill-2" offset="39%" stop-color="rgb(207,29,97)"></stop><stop id="e9g7WusiZel13-fill-3" offset="59%" stop-color="rgb(186,28,109)"></stop><stop id="e9g7WusiZel13-fill-4" offset="79%" stop-color="rgb(158,28,125)"></stop><stop id="e9g7WusiZel13-fill-5" offset="99%" stop-color="rgb(121,27,147)"></stop><stop id="e9g7WusiZel13-fill-6" offset="100%" stop-color="rgb(119,27,148)"></stop></linearGradient><linearGradient id="e9g7WusiZel14-fill" x1="314.79" y1="172.87" x2="390.03" y2="203.02" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="e9g7WusiZel14-fill-0" offset="0%" stop-color="rgb(242,242,242)"></stop><stop id="e9g7WusiZel14-fill-1" offset="21%" stop-color="rgb(242,240,239)"></stop><stop id="e9g7WusiZel14-fill-2" offset="36%" stop-color="rgb(241,234,230)"></stop><stop id="e9g7WusiZel14-fill-3" offset="48%" stop-color="rgb(239,224,215)"></stop><stop id="e9g7WusiZel14-fill-4" offset="58%" stop-color="rgb(236,209,194)"></stop><stop id="e9g7WusiZel14-fill-5" offset="69%" stop-color="rgb(233,190,167)"></stop><stop id="e9g7WusiZel14-fill-6" offset="78%" stop-color="rgb(229,167,133)"></stop><stop id="e9g7WusiZel14-fill-7" offset="87%" stop-color="rgb(224,140,93)"></stop><stop id="e9g7WusiZel14-fill-8" offset="96%" stop-color="rgb(218,109,47)"></stop><stop id="e9g7WusiZel14-fill-9" offset="100%" stop-color="rgb(215,91,21)"></stop></linearGradient><linearGradient id="e9g7WusiZel16-fill" x1="241.157162" y1="306.337393" x2="210.486857" y2="352.84069" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop id="e9g7WusiZel16-fill-0" offset="0%" stop-color="rgb(223,29,87)"></stop><stop id="e9g7WusiZel16-fill-1" offset="18%" stop-color="rgb(218,29,90)"></stop><stop id="e9g7WusiZel16-fill-2" offset="38%" stop-color="rgb(204,29,98)"></stop><stop id="e9g7WusiZel16-fill-3" offset="60%" stop-color="rgb(181,28,112)"></stop><stop id="e9g7WusiZel16-fill-4" offset="83%" stop-color="rgb(148,28,131)"></stop><stop id="e9g7WusiZel16-fill-5" offset="100%" stop-color="rgb(119,27,148)"></stop></linearGradient></defs><g id="e9g7WusiZel2" display="none"><rect id="e9g7WusiZel3" width="600" height="600" rx="0" ry="0" fill="rgb(36,36,36)" stroke="none" stroke-width="1" stroke-miterlimit="1"></rect></g><g id="e9g7WusiZel4" transform="matrix(1.016002 0 0 1.016002 -4.838786 -3.748473)"><path id="e9g7WusiZel5" d="M351.399319,204.061943C351.064732,226.453571,340.840942,312.687588,233.588814,312.990908C244.651022,291.903574,254.040785,238.356769,254.820785,231.476769C259.717634,186.368732,293.090179,145.272372,333.17,131.3C346.635891,153.340945,352.938513,178.278918,351.399319,204.061943Z" fill="url(#e9g7WusiZel5-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><g id="e9g7WusiZel6"><path id="e9g7WusiZel7" d="M336.6,221.73C328.097002,253.014517,299.694469,274.727761,267.275,274.727761C234.855531,274.727761,206.452998,253.014517,197.95,221.73Z" fill="url(#e9g7WusiZel7-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1" transform="matrix(0.999705 0.024284 -0.024284 0.999705 5.595255 -7.980898)"></path><path id="e9g7WusiZel8" d="M336.6,221.76C316.659607,250.70831,279.80085,262.713487,246.636707,251.061726C213.472563,239.409965,192.222314,206.988996,194.77,171.93Z" fill="url(#e9g7WusiZel8-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1" transform="matrix(0.998916 0.046553 -0.046553 0.998916 10.714701 -15.128948)"></path><path id="e9g7WusiZel9" d="M336.6,221.71C307.884714,241.980324,269.151261,240.507159,242.058601,218.114271C214.965941,195.721382,206.227649,157.957737,220.73,125.94Z" fill="url(#e9g7WusiZel9-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1" transform="matrix(0.997982 0.063505 -0.063505 0.997982 14.524728 -20.325144)"></path></g><g id="e9g7WusiZel10" transform="matrix(0.99996 0.00899 -0.00899 0.99996 1.998482 -3.137129)"><path id="e9g7WusiZel11" d="M410.21,186.21C410.215352,192.162882,409.294334,198.080342,407.48,203.75C394.233555,191.290879,376.744307,184.316706,358.565726,183.82967Q358.775726,179.95967,358.766831,175.763126C358.83903,159.77505,356.205989,143.979258,351.023312,128.854323L352.84,128.83C384.526194,128.835522,410.21,154.523806,410.21,186.21Z" fill="url(#e9g7WusiZel11-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel12" d="M385.69,189.53C379.670214,206.741747,365.972224,220.072659,348.556131,225.472824C354.706131,213.532824,348.676378,181.70125,348.676378,181.70125C348.676378,181.70125,371.381552,182.790605,385.69,189.53Z" fill="url(#e9g7WusiZel12-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1" transform="matrix(0.986564 0.163373 -0.163373 0.986564 39.234922 -54.110239)"></path><path id="e9g7WusiZel13" d="M358.69,183.65L358.61,185.06C357.86,201.21,354.61,213.49,348.46,225.41C321.98,225.26,294.61,207.41,294.61,177.27C294.61,150.68,320.45,128.57,351.18,128.86L351.18,128.86C356.362677,143.984935,358.972199,159.871924,358.9,175.86Q358.9,179.78,358.69,183.65Z" fill="url(#e9g7WusiZel13-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel14" d="M358.9,175.83Q358.9,179.77,358.69,183.65L358.61,185.06C357.86,201.21,354.7,213.56,348.61,225.48C347.32,225.48,345.91,225.35,344.61,225.26C330.06,223.52,316.67,211.06,312.16,193.45C306.56,171.6,316.77,150.1,334.96,145.45C342.166504,143.666682,349.777341,144.599348,356.34,148.07C358.063808,157.222323,358.920933,166.516778,358.9,175.83Z" fill="url(#e9g7WusiZel14-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel15" d="M 83.587 43.768 C 83.587 48.419 76.564 48.409 76.564 43.768 C 76.596339 41.851752 78.158979 40.31526 80.0755 40.31526 C 81.992021 40.31526 83.554661 41.851752 83.587 43.768 Z" transform="matrix(3.530342 0 0 3.530342 55.959452 23.729269)" fill="rgb(51,51,51)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path></g><path id="e9g7WusiZel16" d="M242.5,303.82L204.45,338.19C204.45,338.19,219.58,349.25,236.05,336.19C242.14,330.19,251,317.91,242.5,303.82Z" transform="matrix(0.996897 0.078721 -0.078721 0.996897 25.864574 -24.086472)" fill="url(#e9g7WusiZel16-fill)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path></g><g id="e9g7WusiZel17" transform="matrix(1 0 0 1 -4.953304 152.550836)"><g id="e9g7WusiZel18"><path id="e9g7WusiZel19" d="M147,204.89C151.283544,204.759365,155.540758,205.603969,159.45,207.36C162.677254,208.846736,165.384017,211.267843,167.22,214.31C169.053851,217.56694,169.960007,221.264191,169.84,225C169.829328,227.480362,169.458801,229.946051,168.74,232.32C168.028878,234.74815,166.850124,237.01394,165.27,238.99C163.552839,241.078699,161.362217,242.727665,158.88,243.8C155.769398,245.09664,152.418635,245.717025,149.05,245.62L140.64,245.62L140.64,264.46L128.92,264.46L128.92,204.89ZM149,234.17C150.536569,234.222727,152.063154,233.903688,153.45,233.24C154.553731,232.689811,155.510225,231.884162,156.24,230.89C157.418335,229.247405,158.079875,227.290638,158.14,225.27C158.118583,224.46985,158.024869,223.673274,157.86,222.89C157.638581,221.830635,157.239624,220.816337,156.68,219.89C156.024073,218.8063,155.092381,217.916016,153.98,217.31C152.467613,216.533838,150.777961,216.168322,149.08,216.25L140.67,216.25L140.67,234.25Z" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1" transform="matrix(1 0 0 1 0 0)"></path><path id="e9g7WusiZel20" d="M204,202.55L203.35,202.55L176.51,264.41L188,264.41L192.85,252.77L212.6,252.77L217.19,264.41L230.78,264.41ZM197,242.9L203,228.39L208.72,242.9Z" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1" transform="matrix(1 0 0 1 0 0)"></path><path id="e9g7WusiZel21" d="M280.27,242.78C282.083898,241.776685,283.697483,240.44785,285.03,238.86C286.645489,236.908551,287.85574,234.654628,288.59,232.23C289.307711,229.869767,289.674961,227.416938,289.68,224.95C289.726915,222.111428,289.203225,219.292346,288.14,216.66C287.143515,214.24469,285.611684,212.087133,283.66,210.35C281.524539,208.522387,279.031496,207.160068,276.34,206.35C273.118837,205.355507,269.760759,204.876264,266.39,204.93L248.39,204.93L248.39,264.45L260.11,264.45L260.11,245.49L267.92,245.49L280.49,264.41L294.16,264.41ZM260.08,216.21L268.49,216.21C270.187961,216.128322,271.877613,216.493838,273.39,217.27C274.502381,217.876016,275.434073,218.7663,276.09,219.85C276.649624,220.776337,277.048581,221.790635,277.27,222.85C277.438712,223.659656,277.532442,224.483139,277.55,225.31C277.536072,226.256133,277.387928,227.195501,277.11,228.1C276.792217,229.133596,276.29829,230.104536,275.65,230.97C274.911155,231.935254,273.955349,232.712916,272.86,233.24C271.464473,233.873772,269.941938,234.178279,268.41,234.13L260.08,234.13Z" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1" transform="matrix(1 0 0 1 0 0)"></path><path id="e9g7WusiZel22" d="M344.64,242.79C346.453964,241.782576,348.067412,240.450465,349.4,238.86C351.015489,236.908551,352.22574,234.654628,352.96,232.23C353.677711,229.869767,354.044961,227.416938,354.05,224.95C354.096915,222.111428,353.573225,219.292346,352.51,216.66C351.513515,214.24469,349.981684,212.087133,348.03,210.35C345.894539,208.522387,343.401496,207.160068,340.71,206.35C337.488544,205.356816,334.130675,204.877602,330.76,204.93L312.76,204.93L312.76,264.45L324.48,264.45L324.48,245.49L332.29,245.49L344.86,264.41L358.5,264.41ZM324.45,216.21L332.86,216.21C334.557961,216.128322,336.247613,216.493838,337.76,217.27C338.872381,217.876016,339.804073,218.7663,340.46,219.85C341.019624,220.776337,341.418581,221.790635,341.64,222.85C341.808712,223.659656,341.902442,224.483139,341.92,225.31C341.90715,226.256994,341.755538,227.196988,341.47,228.1C341.157251,229.14675,340.659376,230.128954,340,231C339.263348,231.967381,338.306985,232.745497,337.21,233.27C335.814473,233.903772,334.291938,234.208279,332.76,234.16L324.43,234.16Z" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1" transform="matrix(1 0 0 1 -0.030317 5.374535)"></path><path id="e9g7WusiZel23" d="M371.44,234.73C371.420563,230.731267,372.216785,226.770571,373.78,223.09C376.889867,215.745134,382.693795,209.86964,390,206.67C397.511523,203.443547,406.018477,203.443547,413.53,206.67C417.163016,208.268624,420.466124,210.530608,423.27,213.34C426.079213,216.139394,428.329333,219.448394,429.9,223.09C431.493234,226.762914,432.307053,230.726452,432.29,234.73C432.318397,238.789565,431.504595,242.810905,429.9,246.54C428.342701,250.162432,426.090207,253.444347,423.27,256.2C420.462298,258.964046,417.157684,261.172777,413.53,262.71C405.999712,265.843893,397.530288,265.843893,390,262.71C382.708931,259.62942,376.905087,253.829163,373.82,246.54C372.232238,242.806007,371.422414,238.787509,371.44,234.73ZM383.57,234.73C383.517536,239.751743,385.447046,244.591687,388.94,248.2C392.398932,251.78975,397.185263,253.794003,402.17,253.74C404.603383,253.758647,407.013057,253.261034,409.24,252.28C411.402803,251.330741,413.344065,249.941207,414.94,248.2C416.572189,246.429872,417.860784,244.371512,418.74,242.13C421.594351,234.959966,420.068813,226.787443,414.82,221.13C413.18734,219.364691,411.205371,217.958243,409,217C402.071751,213.964262,393.983758,215.60026,388.78,221.09C387.102802,222.85207,385.784924,224.923992,384.9,227.19C383.980527,229.595697,383.529102,232.154901,383.57,234.73Z" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1" transform="matrix(1 0 0 1 0.168684 11.976539)"></path><path id="e9g7WusiZel24" d="M446.8,204.89L486.91,204.89L486.91,216.21L472.44,216.21L472.44,264.41L460.71,264.41L460.71,216.21L446.8,216.21Z" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1" transform="matrix(1 0 0 1 0 3.057187)"></path></g><g id="e9g7WusiZel25" mask="url(#e9g7WusiZel40)"><g id="e9g7WusiZel26"><path id="e9g7WusiZel27" d="M172.93,284.76L184.64,284.76L184.64,286L174.25,286L174.25,293.54L183.6,293.54L183.6,294.79L174.25,294.79L174.25,302.47L185,302.47L185,303.72L172.93,303.72Z" transform="matrix(0.851054 0 0 0.851054 26.65612 43.825872)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel28" d="M208.57,304.2L193.57,287.33L193.92,287.06L193.92,303.74L192.64,303.74L192.64,284.36L192.72,284.36L207.72,301.36L207.37,301.47L207.37,284.76L208.62,284.76L208.62,304.2Z" transform="matrix(0.851054 0 0 0.851054 29.883038 43.831829)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel29" d="M215.81,284.76L228.24,284.76L228.24,286L222.66,286L222.66,303.72L221.35,303.72L221.35,286L215.81,286Z" transform="matrix(0.851054 0 0 0.851054 33.069735 43.825872)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel30" d="M235.43,284.76L247.14,284.76L247.14,286L236.74,286L236.74,293.54L246.1,293.54L246.1,294.79L236.74,294.79L236.74,302.47L247.52,302.47L247.52,303.72L235.43,303.72Z" transform="matrix(0.851054 0 0 0.851054 35.966735 43.825872)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel31" d="M259.52,284.76C260.23765,284.764163,260.951205,284.868503,261.64,285.07C262.33785,285.285499,262.991491,285.624173,263.57,286.07C264.153775,286.516963,264.631793,287.087171,264.97,287.74C265.347989,288.496525,265.533471,289.334628,265.51,290.18C265.509451,290.882276,265.401538,291.580341,265.19,292.25C264.97544,292.919386,264.617066,293.533742,264.14,294.05C263.623904,294.617788,262.984057,295.05918,262.27,295.34C261.36745,295.684691,260.40573,295.847809,259.44,295.82L256.5,295.82L256.5,303.82L255.19,303.82L255.19,284.82ZM259.36,294.52C260.162315,294.546832,260.961743,294.410759,261.71,294.12C262.795123,293.696355,263.620019,292.79008,263.94,291.67C264.087961,291.190414,264.165437,290.691871,264.17,290.19C264.175597,289.641221,264.07015,289.096978,263.86,288.59C263.657439,288.090452,263.354525,287.637782,262.97,287.26C262.558248,286.869884,262.076455,286.561129,261.55,286.35C260.963259,286.123898,260.338746,286.011893,259.71,286.02L256.5,286.02L256.5,294.52ZM262.08,295.11L267.35,303.74L265.83,303.74L260.54,295.14Z" transform="matrix(0.851054 0 0 0.851054 38.91512 43.833322)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel32" d="M273.13,284.76L285.56,284.76L285.56,286L280,286L280,303.72L278.69,303.72L278.69,286L273.16,286Z" transform="matrix(0.851054 0 0 0.851054 41.607321 43.825872)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel33" d="M289.67,303.74L297.67,283.94L297.78,283.94L305.78,303.74L304.31,303.74L297.31,286.02L298.22,285.51L291,303.74ZM293.55,296.23L302,296.23L302.37,297.46L293.26,297.46Z" transform="matrix(0.851054 0 0 0.851054 44.344949 43.766292)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel34" d="M312.88,284.76L314.19,284.76L314.19,303.76L312.88,303.76Z" transform="matrix(0.851054 0 0 0.851054 46.699785 43.828851)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel35" d="M338.78,304.2L323.78,287.33L324.13,287.06L324.13,303.74L322.9,303.74L322.9,284.36L323,284.36L338,301.36L337.65,301.47L337.65,284.76L338.9,284.76L338.9,304.2Z" transform="matrix(0.851054 0 0 0.851054 49.286231 43.831829)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel36" d="M347.55,303.74L347.55,284.34L347.55,284.34L356.91,297.62L356.35,297.54L365.68,284.34L365.68,284.34L365.68,303.74L364.4,303.74L364.4,287.36L364.51,288L356.6,299.15L356.54,299.15L348.54,288L348.75,287.41L348.75,303.74Z" transform="matrix(0.851054 0 0 0.851054 53.116374 43.796081)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel37" d="M374.44,284.76L386.15,284.76L386.15,286L375.75,286L375.75,293.54L385.11,293.54L385.11,294.79L375.75,294.79L375.75,302.47L386.52,302.47L386.52,303.72L374.44,303.72Z" transform="matrix(0.851054 0 0 0.851054 56.670973 43.825872)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel38" d="M410.07,304.2L395.07,287.33L395.42,287.06L395.42,303.74L394.13,303.74L394.13,284.36L394.21,284.36L409.21,301.36L408.86,301.47L408.86,284.76L410.12,284.76L410.12,304.2Z" transform="matrix(0.851054 0 0 0.851054 59.89491 43.831829)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path><path id="e9g7WusiZel39" d="M417.32,284.76L429.75,284.76L429.75,286L424.16,286L424.16,303.72L422.85,303.72L422.85,286L417.32,286Z" transform="matrix(0.851054 0 0 0.851054 63.083845 43.825872)" fill="rgb(242,242,242)" stroke="none" stroke-width="1" stroke-miterlimit="1"></path></g><mask id="e9g7WusiZel40" mask-type="alpha"><rect id="e9g7WusiZel41" width="263.980511" height="25.261293" rx="0" ry="0" transform="matrix(1 0 0 1 -109.021893 280.362657)" fill="rgb(210,219,237)" stroke="none" stroke-width="0" stroke-miterlimit="1"></rect></mask></g></g></svg>
									</td>
								</tr>
								<tr>
									<td>Navigation Elements</td>
									<td>List(ul)</td>
									<td>
										<ul class="list-group list-group-flush">
											<li class="list-group-item">An item</li>
											<li class="list-group-item">A second item</li>
											<li class="list-group-item">A third item</li>
											<li class="list-group-item">A fourth item</li>
											<li class="list-group-item">And a fifth one</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Navigation Elements</td>
									<td>List(ol)</td>
									<td>
										<ol class="list-group list-group-numbered">
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item">Cras justo odio</li>
										</ol>
									</td>
								</tr>
								<tr>
									<td>Navigation Elements</td>
									<td>Navigation links</td>
									<td>
										<nav class="navbar navbar-light bg-light">
											<div class="container-fluid">
												<a class="navbar-brand" href="#">Navbar</a>
											</div>
										</nav>
									</td>
								</tr>
								<tr>
									<td>Divisions and Sections</td>
									<td>div</td>
									<td>
										<nav class="navbar navbar-light bg-light">
											<div class="container-fluid">
												<a class="navbar-brand" href="#">Navbar</a>
											</div>
										</nav>
									</td>
								</tr>
								<tr>
									<td>Miscellaneous</td>
									<td>Modals/Pop Ups</td>
									<td>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
										Launch demo modal
										</button>

										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
											</div>
										</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>Miscellaneous</td>
									<td>Video</td>
									<td>
										<video width="320" height="240" controls>
											<source src="assets/mov_bbb.mp4" type="video/mp4">
											Your browser does not support the video tag.
										</video>
									</td>
								</tr>
								<tr>
									<td>Miscellaneous</td>
									<td>Icons</td>
									<td>
										<i class="bi bi-0-circle-fill"></i>
										<i class="bi bi-6-square-fill"></i>
									</td>
								</tr>
								<tr>
									<td>Miscellaneous</td>
									<td>Elements with Padding</td>
									<td>
										<div class="container px-4">
											<div class="row gx-5">
												<div class="col">
												<div class="p-3 border bg-light">Custom column padding</div>
												</div>
												<div class="col">
												<div class="p-3 border bg-light">Custom column padding</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>Miscellaneous</td>
									<td>Shadow DOM element</td>
									<td>
									<script>
										customElements.define('show-hello', class extends HTMLElement {
										connectedCallback() {
											const shadow = this.attachShadow({mode: 'open'});
											shadow.innerHTML = `<p>
											Hello, ${this.getAttribute('name')}
											</p>`;
										}
										});
										</script>

										<show-hello name="from Shadow-dom"></show-hello>
									</td>
								</tr>
								<tr>
									<td>Miscellaneous</td>
									<td>Fixed Element</td>
									<td>
										<div class="position-fixed top-0 start-0">Fixed</div>
									</td>
								</tr>
								<tr>
									<td>Miscellaneous</td>
									<td>Sticky Element</td>
									<td>
										<div class="position-sticky top-0 start-0">Sticky</div>
									</td>
								</tr>
								<tr>
									<td>Miscellaneous</td>
									<td>Embede / Iframe</td>
									<td>
										<div class="embed-responsive embed-responsive-16by9">
											<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->

		<section id="footer">
			<div class="container">
				<header>
					<h2>Questions or comments? <strong>Get in touch:</strong></h2>
				</header>

				<div class="row">
					<div class="col-6 col-12-medium">
						<section>
							<form action="#" method="post">
								<div class="row gtr-50">
									<div class="col-6 col-12-small"><input name="name" placeholder="Name" type="text" />
									</div>

									<div class="col-6 col-12-small"><input name="email" placeholder="Email"
											type="text" /></div>

									<div class="col-12"><textarea name="message" placeholder="Message"></textarea></div>

									<div class="col-12"><a class="form-button-submit button icon solid fa-envelope"
											href="#">Send Message</a></div>
								</div>
							</form>
						</section>
					</div>

					<div class="col-6 col-12-medium">
						<section>
							<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet mollis
								tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh,
								rutrum eu malesuada.</p>

							<div class="row">
								<div class="col-6 col-12-small">
									<ul class="icons">
										<li class="icon solid fa-home">1234 Somewhere Road<br />
											Nashville, TN 00000<br />
											USA</li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-envelope"><a href="#">info@untitled.tld</a></li>
									</ul>
								</div>

								<div class="col-6 col-12-small">
									<ul class="icons">
										<li class="icon brands fa-twitter"><a href="#">@untitled</a></li>
										<li class="icon brands fa-instagram"><a href="#">instagram.com/untitled</a></li>
										<li class="icon brands fa-dribbble"><a href="#">dribbble.com/untitled</a></li>
										<li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled</a></li>
									</ul>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

			<div class="container" id="copyright">
				<ul class="links">
					<li>&copy; Untitled. All rights reserved.</li>
					<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</section>
	</div>
	<!-- Scripts -->
	<?php if ($DEL_JQ) { ?>
		<script>
			$ = {};
			jQuery = {};
		</script>
	<?php } else { ?>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
	<?php }?>

	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="./assets/js/app.js"></script>
	<script src="./assets/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
	<!--<script src="./assets/js/sampling.js"></script>-->
	<!-- <script>
		// window.name = '';
		let setAcIdTimeIns = null;
		(function setAcId() {
			console.log("setAcId");
			const para = document.querySelector("#header > div:nth-child(1) > span:nth-child(2)");
			if (window._vwo_acc_id && para) {
				clearTimeout(setAcIdTimeIns);
				para.innerText = window._vwo_acc_id;
			} else {
				setAcIdTimeIns = setTimeout(setAcId, 500);
			}
		})();
	</script> -->
</body>

</html>