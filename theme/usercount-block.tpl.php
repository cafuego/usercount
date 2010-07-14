<?php
/**
 * $Id$
 *
 * Variables:
 *  - $total:   The total number of users.
 *  - $blocked: The number of blocked users.
 */

// Make some sensibly formatted strings that can be printed.
$total_users = format_plural($total, '1 registered user', '@count registered users');
$blocked_users = empty($blocked) ? t('no blocked users') : format_plural($blocked, '1 user is blocked', '@count users are blocked');

?>
<p>This site has <?php print $total_users; ?> in total and <?php print $blocked_users; ?></p>
