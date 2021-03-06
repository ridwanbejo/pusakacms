<base href="<?php echo base_url() ?>" />
<meta charset="utf-8">
<title><?php echo $this->config->item('site_name'); ?></title>

<!-- Bootstrap core CSS -->
<link href="<?php echo get_theme_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_theme_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo get_theme_url() ?>assets/js/pagedown-bootstrap/css/jquery.pagedown-bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo get_theme_url() ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo get_module_asset('panel', 'codemirror/lib/codemirror.css'); ?>" rel="stylesheet">
<link href="<?php echo get_module_asset('panel', 'codemirror/theme/mbo.css'); ?>" rel="stylesheet">

<link href="<?php echo get_theme_url() ?>assets/jquery-ui-1.11.2.custom/jquery-ui.min.css" rel="stylesheet">
<link href="<?php echo get_module_asset('panel', 'elfinder/css/elfinder.min.css') ?>" rel="stylesheet">

<!-- codemirror assets -->
<script src="<?php echo get_module_asset('panel', 'codemirror/lib/codemirror.js'); ?>"></script>
<script src="<?php echo get_module_asset('panel', 'codemirror/addon/edit/closetag.js'); ?>"></script>
<script src="<?php echo get_module_asset('panel', 'codemirror/addon/fold/xml-fold.js'); ?>"></script>
<script src="<?php echo get_module_asset('panel', 'codemirror/addon/selection/active-line.js'); ?>"></script>
<script src="<?php echo get_module_asset('panel', 'codemirror/mode/javascript/javascript.js'); ?>"></script>
<script src="<?php echo get_module_asset('panel', 'codemirror/mode/xml/xml.js'); ?>"></script>
<script src="<?php echo get_module_asset('panel', 'codemirror/mode/css/css.js'); ?>"></script>
<script src="<?php echo get_module_asset('panel', 'codemirror/mode/htmlmixed/htmlmixed.js'); ?>"></script>
<script src="<?php echo get_module_asset('panel', 'codemirror/mode/markdown/markdown.js'); ?>"></script>

<script src="<?php echo get_theme_url() ?>assets/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo get_theme_url() ?>assets/jquery-ui-1.11.2.custom/jquery-ui.min.js"></script>
<script src="<?php echo get_module_asset('panel','elfinder/js/elfinder.min.js') ?>"></script>

<script>
	var BASE_URL = "<?php echo site_url(); ?>";
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-51093490-2', 'auto');
	ga('send', 'pageview');

</script>