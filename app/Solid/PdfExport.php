<?php
namespace App\Solid;

class PdfExport implements SalesReportFormatInterface
{
    public function export($salesData)
    {
        return "Pdf Export";
    }
}