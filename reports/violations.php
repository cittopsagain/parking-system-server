<?php
/**
 * Created by Dave Tolentin on 9/27/2017.
 * -------------------------------------
 * Violations Report
 * -------------------------------------
 */
 
$pdf = new TcpdfHelper('L');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage();
$pdf->SetFont('dejavusans', '', 10);

$area = $_REQUEST['area'];
$area = $_REQUEST['area'];
$date_from = $_REQUEST['date_from'];
$date_to = $_REQUEST['date_to'];
$violation = $_REQUEST['violation'];

$pdf->Image('images/ic_logo_small.png', ($pdf->getPageWidth() / 2) - 10, 5, 25, 25, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);

$pdf->SetY($pdf->GetY() + 23);
$pdf->SetX(134);
$pdf->Write(0, 'Violations Report', '', 0, 'L', true, 0, false, false, 0);

$results = $parkingModel->searchViolation(array("area" => $area, "date_from" => $date_from, "date_to" => $date_to, "violation" => $violation));

$html = '<table>';
$html .= '<tr>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black; width: 20">#</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">Area</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">Plate Number</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">Violation Type</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">Make</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">Model</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">Color</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black; width: 150">Additional Details</th>';
	$html .= '<th style="border-bottom: 1px solid black; border-top: 1px solid black">Date of Violation</th>';
$html .= '</tr>';
if (count($results) > 0) {
	for ($i = 0; $i < count($results); $i++) {
	$html .= '<tr>';
		$html .= '<td>'.($i + 1).'</td>';
		$html .= '<td style="padding: 8px;">'.$results[$i]->area.'</td>';
		$html .= '<td>'.$results[$i]->plate_number.'</td>';
		$html .= '<td>'.$results[$i]->violation_type.'</td>';
		$html .= '<td>'.$results[$i]->car_make.'</td>';
		$html .= '<td>'.$results[$i]->car_model.'</td>';
		$html .= '<td>'.$results[$i]->car_color.'</td>';
		$html .= '<td>'.$results[$i]->additional_details.'</td>';
		$html .= '<td>'.date('Y-m-d', strtotime($results[$i]->violation_date)).'</td>';
	$html .= '</tr>';
	}
} else {
	$html .= '<tr>';
		$html .= '<td></td>';
		$html .= '<td align="right" width="420">No results found!</td>';
		$html .= '<td></td>';
		$html .= '<td></td>';
	$html .= '</tr>';
}
$html .= '</table>';

$pdf->writeHTMLCell(0, 0, 8, 45, $html);

ob_end_clean();
$pdf->Output();
?>