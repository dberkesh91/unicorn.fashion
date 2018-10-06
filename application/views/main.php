<head>
	<?php $this->load->view('common/head'); ?>
</head>
<body>
	<?php $this->load->view('common/header'); ?>
	<?= $content ?>
	<?php $this->load->view('common/footer'); ?>

	<!-- Load javascript at bottom of the page for performance -->
	<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<?= putJs(); ?>
	<!-- Load javascript at bottom of the page for performance -->

</body>
</html>
