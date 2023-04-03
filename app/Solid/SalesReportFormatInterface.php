<?php
namespace App\Solid;
interface SalesReportFormatInterface{
    public function export($salesData);
}