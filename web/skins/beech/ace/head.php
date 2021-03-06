<script type="text/javascript">var _starttime = new Date().getTime();</script>
<meta http-equiv="Content-Type" content="<?php $this->text('mimetype') ?>; charset=<?php $this->text('charset') ?>" />
<?php $this->html('headlinks') ?>
<title><?php $this->text('pagetitle'); ?></title>

<!-- default css -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php $this->html('pathtpl'); ?>/_reset.css"/>
<?php $this->html('screencss'); ?>
<?php $this->html('printcss'); ?>

<!-- default scripting -->
<?php $this->html('javascript'); ?>
<script type="text/javascript" src="<?php $this->html('pathskin'); ?>/javascript.js"></script>


<!-- specific screen stylesheets-->
<?php if (!Skin::isPrintPage()) { ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php $this->html('pathskin'); ?>/css.php"/>
<?php } else { ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php $this->html('pathskin'); ?>/_content.css" />   
<link rel="stylesheet" type="text/css" media="screen" href="<?php $this->html('pathskin'); ?>/_print.css" />    
<?php } ?>

<?php $this->html('inlinejavascript'); ?>

<!-- styles overwritten via control panel - load this css last -->	
<?php $this->html('customhead'); ?> 