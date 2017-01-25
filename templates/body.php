<?php
/**
 * @link      https://github.com/prooph/bookdown-template for the canonical source repository
 * @license   https://github.com/prooph/bookdown-template/blob/master/LICENSE.txt New BSD License
 */

  $cssBootswatch = getenv('CSS_BOOTSWATCH') ?: 'cerulean';

?>
<body data-spy="scroll" data-target="#sideNav" data-offset="50" class="bbt-theme-<?php echo $cssBootswatch; ?>">
<div class="page-wrapper">
    <?php echo $this->render('core'); ?>
</div>
<?= $this->render("script"); ?>
</body>
