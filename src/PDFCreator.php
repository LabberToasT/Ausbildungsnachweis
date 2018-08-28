<?php

class PDFCreator
{

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getTestPdf()
    {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont("Arial", "", 12);
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->MultiCell(50, 5, "Name des/ der Auszubildenden:", 1, "L", false);
        $pdf->SetXY($x + 50, $y);
        $pdf->Cell(0, 10, "Lucas Reich", 1, 1, "L", false);

        $pdf->Cell(50, 10, "Ausbildungsjahr:", 1, 0, "L", false);
        $pdf->Cell(25, 10, "2017/18", 1, 0, "C", false);
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        $pdf->MultiCell(36, 5, "Ggf. Ausbildende Abteilung", 1, "L", false);
        $pdf->SetXY($x + 36, $y);
        $pdf->Cell(0, 10, "Team Deathstar", 1, 0, "L", false);

        return $pdf->Output();
    }
}
