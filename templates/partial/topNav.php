<?php
/**
 * Renders the top navigation recursively.
 *
 * @link      https://github.com/prooph/bookdown-template for the canonical source repository
 * @license   https://github.com/prooph/bookdown-template/blob/master/LICENSE.txt New BSD License
 */

/* @var \Bookdown\Bookdown\Content\Page $page */
/* @var int $depth */

$depth++;
$maxDepth = 3;
?>
<?php if (!($page instanceof \Bookdown\Bookdown\Content\RootPage)): ?>
    <li>
    <?= $this->anchorRaw($page->getHref(), $page->getTitle()); ?>
<?php endif; ?>

<?php if ($page instanceof \Bookdown\Bookdown\Content\IndexPage
    && count($page->getChildren()) > 0
    && $depth <= $maxDepth
): ?>
    <?php $class = ($depth == 1) ? 'nav navbar-nav' : 'dropdown-menu'; ?>

    <ul class="<?= $class ?>">
        <img src="./prooph-logo.svg"/ class="prooph-logo"/>
        <?php foreach ($page->getChildren() as $child) : ?>
            <?= $this->render('partialTopNav', array(
                'page' => $child,
                'depth' => $depth
            ));
            ?>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php if (!($page instanceof \Bookdown\Bookdown\Content\RootPage)): ?>
    </li>
<?php endif; ?>
