<?php

namespace App\Exports;

use App\Models\IncomeCashier;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class IncomeCashierExport implements FromView, ShouldAutoSize, WithColumnFormatting
{
    use Exportable;

    public $periode = 0;
    public $jenisTransaksi = 0;
    
    public function view(): View
    {
        $periode = $this->periode;
        $jenisTransaksi = $this->jenisTransaksi;

        $datas = [];

        $range = explode(' ', $periode);
        
        $from = date('Y-m-d', strtotime($range[0]));
        $to = date('Y-m-d', strtotime($range[1]) + (3600 * 23));

        $datas = IncomeCashier::with('detail.coa')->whereBetween('date', [$from, $to]);

        if($jenisTransaksi != 'all'){
            $datas = $datas->where('transaction_type', $jenisTransaksi);
        }


        $datas = $datas->orderBy('number_voucher', 'asc')->get();

        return view('income-cashier.excel', [
            'datas' => $datas,
            'from' => $from,
            'to' => $to,
            'jenisTransaksi' => $jenisTransaksi,
        ]);
    }

    public function columnFormats(): array
    {
        return [
            'D' => '"Rp. "#,##0',
            'E' => '"Rp. "#,##0'
        ];
    }
}
