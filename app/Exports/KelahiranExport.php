<?php

namespace App\Exports;

use App\Kelahiran;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class KelahiranExport implements FromQuery, WithMapping, ShouldAutoSize, WithStyles, WithHeadingRow
{
    /**
     * @var Kelahiran $kelahiran
     */
    public function map($kelahiran): array
    {
        return [
            $kelahiran->updated_at->format('d-m-y'),
            $kelahiran->nosurat,
            $kelahiran->user->nama,
            $kelahiran->user->ttl,
            $kelahiran->user->jk,
            $kelahiran->user->alamat,
            $kelahiran->nama_anak,
            $kelahiran->nama_ibu,
            $kelahiran->nama_ayah,
        ];
    }

    public function query()
    {
        return Kelahiran::query()->where('acc', 1);
    }

    public function styles(Worksheet $sheet)
    {
        return [];
    }
}
