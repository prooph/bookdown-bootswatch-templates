<?php
/**
 * @link      https://github.com/prooph/bookdown-template for the canonical source repository
 * @license   https://github.com/prooph/bookdown-template/blob/master/LICENSE.txt New BSD License
 */

if (!$this->page->hasTocEntries()) {
    return;
}

/**
 * Define on which level a collapsible sublist will be created.
 * @var integer
 */
$sublistLevelThrottle = getenv('TOC_SUBLIST_LEVEL') ?: 2;
?>

<h1><?= $this->page->getNumberAndTitle(); ?></h1>
<ul class="list-toc list-group">
<?php
    $entries = $this->page->getTocEntries();
    $nestedEntries = tocEntriesToNestedList($entries, $sublistLevelThrottle);
    renderTocList($nestedEntries, $this);
?>
</ul>
