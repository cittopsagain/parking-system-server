<?php
/**
 * Created by Dave Tolentin on 9/26/2017.
 */

class TcpdfHelper extends TCPDF {
	
	public function __construct($orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = 'UTF-8') {
        parent::__construct($orientation, $unit, $format, $unicode, $encoding, false);
    }
}
?>