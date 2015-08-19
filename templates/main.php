<?php

/**
 * ownCloud - Dashboard
 *
 * @author Patrick Paysant <ppaysant@linagora.com>
 * @copyright 2014 CNRS DSI
 * @license This file is licensed under the Affero General Public License version 3 or later. See the COPYING file.
 */

\OCP\Util::addStyle('user_files_restore', 'restore');

?>

<div id="user_files_restore">
    <?php p($l->t('Restoration requests')); ?>
</div>

<div id="container">

<div id="todo" class="dataBlock">
    <p class="header"><?php p($l->t('To be processed')); ?></p>
    <?php foreach($_['todos'] as $todo): ?>
    <p id="<?php p($todo['id']); ?>">
        <?php p($todo['file']); ?>
        <span>(<?php p($todo['mime']); ?> ; </span>
        <span><?php p($todo['version']); ?>)</span>
        <span class="cancel" data-id="<?php p($todo['id']); ?>" data-version="<?php p($todo['version']); ?>"><?php p($l->t('Cancel')); ?></span>
    </p>
    <?php endforeach; ?>
</div>

<div id="running" class="dataBlock">
    <p class="header"><?php p($l->t('Running')); ?></p>
    <?php foreach($_['runnings'] as $running): ?>
    <p><span>(<?php p($running['mime']); ?>)</span> <?php p($running['file']); ?></span> </p>
    <?php endforeach; ?>
</div>

<div id="done" class="dataBlock">
    <p class="header"><?php p($l->t('Done')); ?></span></p>
    <?php foreach($_['dones'] as $done): ?>
    <p><span>(<?php p($done['mime']); ?>)</span> <?php p($done['file']); ?> <span class="date"><?php p($done['dateEnd']); ?></span> </p>
    <?php endforeach; ?>
</div>

</div>

<div id="footer">
    <p>Icons provided by <a href="http://glyphicons.com/">GLYPHICONS.com</a>, released under <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported (CC BY 3.0)</a></p>
</div>