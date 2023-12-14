<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   GNU General Public License https://www.gnu.de/documents/gpl-2.0.en.html
 */

ossn_register_callback('ossn', 'init', function () {
		if(ossn_isLoggedin()) {
				ossn_extend_view('forms/OssnProfile/edit', 'restrict_birthdate_change/js');
				ossn_register_callback('action', 'load', function ($c, $t, $params) {
						if($params['action'] == 'profile/edit') {
								ossn_set_input('birthdate', ossn_loggedin_user()->birthdate);
						}
				});
		}
});