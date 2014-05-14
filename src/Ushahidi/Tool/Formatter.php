<?php

/**
 * Ushahidi Platform Formatter Tool
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Platform
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Tool;

use Ushahidi\Entity;

interface Formatter
{
	/**
	 * @param  mixed $input
	 * @return mixed
	 * @throws \Ushahidi\Exception\Formatter
	 */
	public function __invoke($input);
}
