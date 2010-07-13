<?php
/**
 * $Id$
 *
 * Variables:
 *  - $total:   The total number of users.
 *  - $blocked: The number of blocked users.
 */

$total_users = format_plural($total, '1 registered user', '@count registered users');
$blocked_users = format_plural($blocked, '1 blocked user', '@count blocked users');

?>
<p>This site has <?php print $total_users; ?> in total.</p>
