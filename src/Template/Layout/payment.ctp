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
		#common .btn {font-size: 16px;}
	</style>

	<script>
		$(function() {
			var search = $('#search');
			var btn = $('#open');
			btn.click(function() {
				if(search.css('display') == 'none'){
					search.show();
					btn.text("条件▲");
				}else{
					search.hide();
					btn.text("条件▼");
				}
			});
		});
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

	<!-- Flash -->
	<?= $this->Flash->render() ?>

	<!-- 検索画面 -->
	<div class="container-fluid" id="common">
		<button class="btn btn-info full" style="border-radius:4px 4px 0 0; width:100%;" id="open">条件▼</button>
		<table class="table table-bordered" style="display: none;" id="search">
			<tbody>
				<tr>
					<td class="col-sm-2" style="text-align:left; vertical-align: middle;">連番</td>
					<td class="" style="text-align:left;">
						<div class="col-sm-6"><input class="form-control" id="s_No" type="text"></div>
					</td>

					<td class="col-sm-2" style="text-align:left; vertical-align: middle;">刀剣番号</td>
					<td class="col-sm-2" style="text-align:left;">
						<div class="col-sm-6"><input class="form-control" id="s_No" type="text"></div>
					</td>
				</tr>
				<tr>
					<td class="col-sm-2" style="text-align:left; vertical-align: middle;">レア</td>
					<td class="col-sm-2" style="text-align:left;">
						<div class="col-sm-6"><input class="form-control" id="s_No" type="text"></div>
					</td>
					<td class="col-sm-2" style="text-align:left; vertical-align: middle;">特</td>
					<td class="col-sm-2" style="text-align:left;">
						<div class="col-sm-6">
							<label class="checkbox" for="checkbox1">
								<input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
							</label>
						</td>
					</td>
				</tr>

				<tr>
					<td class="col-sm-2" style="text-align:left; vertical-align: middle;">刀名</td>
					<td class="col-sm-2" style="text-align:left;" colspan="5">
						<div class="col-sm-3"><input class="form-control" id="s_No" type="text"></div>

						<!-- 検索ボタン -->
						<button class="btn btn-info" style="float:right;">検索</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- 共通ボタン群 -->
	<div class="container-fluid" id="common">
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-4">
				<button class="btn btn-success full" onclick="location.reload();">更新</button>
			</div>
			<div class="col-sm-4">
				<a class="btn btn-info full" type="submit" href="javascript:void(window.open('add/', 'mywindow1', 'width=700, height=500, menubar=no, toolbar=no, scrollbars=yes'));">出納記入画面</a>
			</div>
			<div class="col-sm-4">
				<button class="btn btn-warning full" onClick="window.close(); return false;">閉じる</button>
			</div>
		</div>
	</div>

	<!-- 各ページ本体 -->
	<?= $this->fetch('content') ?>

	<script>
		videojs.options.flash.swf = "/vendors/video-js.swf"
	</script>
</body>
</html>
