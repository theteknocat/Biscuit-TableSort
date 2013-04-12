<?php
/**
 * Extension for easy inclusion of table sorter JS
 *
 * @package Extensions
 * @subpackage TableSort
 * @author Peter Epp
 * @copyright Copyright (c) 2009 Peter Epp (http://teknocat.org)
 * @license GNU Lesser General Public License (http://www.gnu.org/licenses/lgpl.html)
 * @version 2.0 $Id: extension.php 13982 2011-08-08 18:51:55Z teknocat $
 */
class TableSort extends AbstractExtension {
	public function run() {
		$this->register_js('footer','jquery.tablesorter.min.js');
		$this->register_js('footer','jquery.metadata.js');
		$this->register_css(array('filename' => 'tablesort.css', 'media' => 'screen,projection,print'));
	}
}
