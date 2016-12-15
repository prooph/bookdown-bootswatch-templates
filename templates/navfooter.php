<?php
/**
 * @link      https://github.com/prooph/bookdown-template for the canonical source repository
 * @license   https://github.com/prooph/bookdown-template/blob/master/LICENSE.txt New BSD License
 */

$prev = $this->page->getPrev();
$parent = $this->page->getParent();
$next = $this->page->getNext();

if (!($copyright = $this->page->getCopyright())) {
    $copyright = 'Powered by <a href="https://github.com/prooph/bookdown-template" title="Visit project to generate your own docs">Bookdown Bootswatch Templates</a>.';
}
?>
        </div>
    </div>
</div>

<footer>
    <div class="links">
        <div class="container">
            <div class="row">
                <div class="prev col-xs-6">
                    <?php if ($prev): ?>
                        <?= $this->anchorRaw($prev->getHref(), 'Previous'); ?>
                    <?php endif; ?>
                </div>
                <div class="next col-xs-6">
                    <?php if ($next): ?>
                        <?= $this->anchorRaw($next->getHref(), 'Next'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?= $copyright; ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
