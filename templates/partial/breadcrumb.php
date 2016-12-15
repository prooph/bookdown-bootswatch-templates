<?php
/**
 * Renders the top navigation recursively.
 *
 * @link      https://github.com/prooph/bookdown-template for the canonical source repository
 * @license   https://github.com/prooph/bookdown-template/blob/master/LICENSE.txt New BSD License
 */

/* @var \Bookdown\Bookdown\Content\Page $page */
$page = $this->page;
$breadcrumb = [];

while ($page) {
    $breadcrumb[] = $page;

    $page = $page->getParent();
}
$breadcrumb = array_reverse($breadcrumb);
?>
<ol class="breadcrumb">
    <?php foreach ($breadcrumb as $entry) : ?>
        <?php if ($entry === $this->page) : ?>
            <li class="active"><?= $entry->getTitle(); ?></li>
        <?php else : ?>
            <li><?= $this->anchorRaw($entry->getHref(), $entry->getTitle()); ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ol>
<?php
 unset($breadcrumb);
