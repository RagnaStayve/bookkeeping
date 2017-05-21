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

</head>
<body>
	<?= $this->fetch('content') ?>

	<script>
		videojs.options.flash.swf = "/vendors/video-js.swf"
	</script>
</body>
</html>
