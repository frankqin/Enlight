<?php
/**
 * Enlight
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://enlight.de/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@shopware.de so we can send you a copy immediately.
 *
 * @category   Enlight
 * @package    Enlight_Test
 * @copyright  Copyright (c) 2011, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 * @version    $Id$
 * @author     Heiner Lohaus
 * @author     $Author$
 */

/**
 * @category   Enlight
 * @package    Enlight_Test
 * @copyright  Copyright (c) 2011, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 */
abstract class Enlight_Components_Test_Plugin_TestCase extends Enlight_Components_Test_Controller_TestCase
{
	/**
	 * Create event args method
	 *
	 * @param string|array $name|$args
	 * @param array $args
	 * @return Enlight_Event_EventArgs
	 */
	public function createEventArgs($name=null, $args=array())
	{
		if($name===null) {
			$name = get_class($this);
		} elseif (is_array($name)) {
			$args = $name;
			$name = get_class($this);
		}
		return new Enlight_Event_EventArgs($name, $args);
	}
}