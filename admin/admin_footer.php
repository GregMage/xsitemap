<?php
/*
 * xSitemMap module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @package    module\Xsitemap\admin
 * @author     XOOPS Module Development Team
 * @copyright  XOOPS Project (https://xoops.org)
 * @license    https://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @link       https://xoops.org XOOPS
 **/

use Xmf\Module\Admin;

echo "<div class='adminfooter'>\n"
     . "  <div class='txtcenter'>\n"
     . "    <a href='https://xoops.org' rel='external' target='_blank'><img src='"
     . Admin::iconUrl('xoopsmicrobutton.gif', '32')
     . "' alt='XOOPS' title='XOOPS'></a>\n"
     . "  </div>\n"
     . '  '
     . _AM_MODULEADMIN_ADMIN_FOOTER
     . "\n"
     . "</div>\n";
xoops_cp_footer();
