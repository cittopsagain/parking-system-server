<?php
/**
 * Created by Dave Tolentin on 9/27/2017.
 * -------------------------------------
 * Violations Report
 * -------------------------------------
 */
 
$pdf = new TcpdfHelper();

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage();
$pdf->SetFont('dejavusans', '', 10);

$area = $_REQUEST['area'];
$date_from = $_REQUEST['date_from'];
$date_to = $_REQUEST['date_to'];

$pdf->Image('images/ic_logo_small.png', ($pdf->getPageWidth() / 2) - 10, 5, 22, 22, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);

$pdf->SetY($pdf->GetY() + 20);
$pdf->SetX(86);
$pdf->Write(0, 'Violations Report', '', 0, 'L', true, 0, false, false, 0);

$results = $parkingModel->searchParkingHistory(array("area" => $area, "date_from" => $date_from, "date_to" => $date_to));

$html = '<table>';
$html .= '<tr>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">#</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">Area</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">Slot Number</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">Date Time Park</th>';
$html .= '</tr>';
if (count($results) > 0) {
	for ($i = 0; $i < count($results); $i++) {
	$html .= '<tr>';
		$html .= '<td>'.($i + 1).'</td>';
		$html .= '<td style="padding: 8px;">'.$results[$i]->area.'</td>';
		$html .= '<td>'.$results[$i]->slot_no.'</td>';
		$html .= '<td>'.$results[$i]->date_time_park.'</td>';
	$html .= '</tr>';
	}
} else {
	$html .= '<tr>';
		$html .= '<td></td>';
		$html .= '<td align="right" width="180">No results found!</td>';
		$html .= '<td></td>';
		$html .= '<td></td>';
	$html .= '</tr>';
}
$html .= '</table>';

$pdf->writeHTMLCell(0, 0, 10, 45, $html);

ob_end_clean();
$pdf->Output();
?>