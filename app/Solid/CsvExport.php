<?php
namespace App\Solid;

class CsvExport implements SalesReportFormatInterface
{
    public function export($salesData)
    {
        return "CSV Export";
    }
}