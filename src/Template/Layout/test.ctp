<?//test.ctp?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>

	<link rel="shortcut icon" href="img/logs/R-logo.png">

	<?= $this->Html->css('bootstrap.min.css') ?>

	<?= $this->Html->css('flat-ui.min.css') ?>
	<?= $this->Html->css('demo.css') ?>
	<?= $this->Html->css('docs.css') ?>

	<?= $this->Html->script('vendor/jquery.min.js') ?>
	<?= $this->Html->script('vendor/video.js') ?>
	<?= $this->Html->script('flat-ui.min.js') ?>
	<?= $this->Html->script('prettify.js') ?>
	<?= $this->Html->script('application.js') ?>

	<style>
		/**{border: solid red 1px;}*/
		*{font-size: 20px;}
		.center{text-align: center;}
		body{background-color: whitesmoke;}
		.container-fluid{margin-top: 10px;}
		table.links td a{display: block;}
	</style>

	<script>
		$(function() {
			var search = $('#search');
			var btn = $('#open');
			btn.click(function() {
				if(search.css('display') == 'none'){
					search.show();
					btn.text("▲");
				}else{
					search.hide();
					btn.text("▼");
				}
			});
		});
	</script>

</head>
<body>
	<?= $this->fetch('content') ?>

	<script>
		videojs.options.flash.swf = "/vendors/video-js.swf"
	</script>
</body>
</html>
