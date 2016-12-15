<?php
/**
 * @link      https://github.com/prooph/bookdown-template for the canonical source repository
 * @license   https://github.com/prooph/bookdown-template/blob/master/LICENSE.txt New BSD License
 */

use Bookdown\Bookdown\Content\IndexPage;
use Bookdown\Bookdown\Content\RootPage;

$prev = $this->page->getPrev();
$parent = $this->page->getParent();
$next = $this->page->getNext();

$col = '12';

if ($useSideMenu = !($this->page instanceof IndexPage || $this->page instanceof RootPage)){
    $col = '9';
}
?>
<header>
    <?= $this->render("nav"); ?>
</header>
<div class="container">
    <?= $this->render("partialBreadcrumb"); ?>
    <div class="row">

        <?php if ($useSideMenu) : ?>
        <div class="col-md-3">
            <?= $this->render("partialSideNav"); ?>
        </div>
        <?php endif; ?>
        <div class="col-md-<?= $col; ?>">
