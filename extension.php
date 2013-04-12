<?php
class TableSort extends AbstractExtension {
	public function run() {
		$this->register_js('footer','jquery.tablesorter.min.js');
		$this->register_js('footer','jquery.metadata.js');
		$this->register_css(array('filename' => 'tablesort.css', 'media' => 'screen,projection,print'));
	}
}
?>