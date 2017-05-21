<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?></title>

	<!-- ヘッダーアイコンセット -->
	<link rel="shortcut icon" href="img/logs/R-logo.png"/>

	<!-- 各種CSS読み込み -->
	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('flat-ui.css') ?>
	<?= $this->Html->css('demo.css') ?>
	<?= $this->Html->css('docs.css') ?>

	<!-- 各種スクリプト読み込み -->
	<?= $this->Html->script('vendor/jquery.min.js') ?>
	<?= $this->Html->script('vendor/video.js') ?>
	<?= $this->Html->script('flat-ui.min.js') ?>
	<?= $this->Html->script('prettify.js') ?>
	<?= $this->Html->script('application.js') ?>

	<!-- その他共通CSS -->
	<style>
		/**{border: solid red 1px;}*/
		.center{text-align: center;}
		.full{width: 100%;}
		body{background-color: whitesmoke;}
		.container-fluid{margin-top: 10px;}
		table.links td a{display: block;}
		/*flshメッセージ*/
		.message {background-color: lightYellow;
					border: 1px solid #E6DB55;
					padding: 10px;
					text-align: center;
					/*color: red;*/
		}
		/*table td:hover {background-color: #ffffff;}*/
	</style>

	<script>

	</script>

</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
				<span class="sr-only">Toggle navigation</span>
			</button> -->
			<a class="navbar-brand" href="/calc">BookKeeping</a>
			<button type="button" class="btn btn-default navbar-btn" onclick="window.print();">印刷</button>
		</div>
	</nav>
	<?= $this->Flash->render() ?>
	<?= $this->fetch('content') ?>

	<!-- test用　カラム表示 -->
	<!-- <div class="container-fluid" id="test">
		<div class="col-sm-1" style="background-color: blue;">1</div>
		<div class="col-sm-1" style="background-color: green;">1</div>
		<div class="col-sm-1" style="background-color: yellow;">1</div>
		<div class="col-sm-1" style="background-color: blue;">1</div>
		<div class="col-sm-1" style="background-color: green;">1</div>
		<div class="col-sm-1" style="background-color: yellow;">1</div>
		<div class="col-sm-1" style="background-color: blue;">1</div>
		<div class="col-sm-1" style="background-color: green;">1</div>
		<div class="col-sm-1" style="background-color: yellow;">1</div>
		<div class="col-sm-1" style="background-color: blue;">1</div>
		<div class="col-sm-1" style="background-color: green;">1</div>
		<div class="col-sm-1" style="background-color: yellow;">1</div>
	</div> -->

	<script>
		videojs.options.flash.swf = "/vendors/video-js.swf"
	</script>
</body>
</html>
