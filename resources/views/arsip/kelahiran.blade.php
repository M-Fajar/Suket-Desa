       <!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Kelahiran</title>
</head>

<body>
    <!-- KOP SURAT -->
    <table border="0" align="center" style="margin-top: 10px;" width=84%>
        <tr>
            <td width=14%><img src="{{ public_path('images/logo.png') }}" alt="" width="85" height="85">
            </td>
            <td>
                <center>
                    <font size="3">PEMERINTAH KABUPATEN BANDUNG</font> <br>
                    <font size="3">KECAMATAN ARJASARI</font> <br>
                    <font size="5"><b>DESA PINGGIRSARI</b></font> <br>
                    <font size="3"><i>Jl.Raya Pinggirsari No.1 Km.1 Kode Pos 40379</i></font>
                </center>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr style="border: 2px; border-top:5px double">
            </td>
        </tr>
    </table>

   
    <table border="0" align="center" width=83% >
        <!-- IDENTITAS PENGAJU -->
        <tr>
            <td align="center" colspan="3">
                <font size="3"><u><b>SURAT KETERANGAN KELAHIRAN</b></u></font><br>
                <font size="3">Nomor : {{ $kelahiran->nosurat }}</font>
            </td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">Yang bertanda tangan di bawah ini, menerangkan bahwa pada :</td>
        </tr>
        <tr>
            <td width=32%>Hari</td>
            <td width=68%>: {{ $kelahiran->hari }}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>: {{ $kelahiran->tanggal }}</td>
        </tr>
        <tr>
            <td>Di</td>
            <td>: {{ $kelahiran->tempat }}</td>
        </tr>
        <tr>
            <td>Pukul</td>
            <td>: {{ $kelahiran->pukul }}</td>
        </tr>
        <tr>
            <td colspan="3">Telah lahir seorang anak {{ $kelahiran->jk_anak }}</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td>Anak ke</td>
            <td>: {{ $kelahiran->anak_ke }}</td>
        </tr>
        <tr>
            <td>Bernama</td>
            <td>: {{ $kelahiran->nama_anak }}</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">Dari seorang Ibu</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: {{ $kelahiran->nama_ibu }}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{ $kelahiran->umur_ibu }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{ $kelahiran->agama_ibu }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{ $kelahiran->pekerjaan_ibu }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{ $kelahiran->alamat_ibu }}</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">Istri dari</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: {{ $kelahiran->nama_ayah }}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{ $kelahiran->umur_ayah }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{ $kelahiran->agama_ayah }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{ $kelahiran->pekerjaan_ayah }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{ $kelahiran->alamat_ayah }}</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">Surat Keterangan Kelahiran ini dibuat dengan sebenarnya, agar yang berkepentingan mengetahuinya.</td>
        </tr>
    </table>
    <br>

    {{-- TTD --}}
    <table border="0" align="center" width=83%>
        <tr>
            <td style="text-align: right; position:relative">
                Pinggirsari, {{ $kelahiran->updated_at->format('d F Y') }} <br>
                Kepala Desa Pinggirsari <br>
                <img src="{{ public_path('storage/ttdcap/'.$kelahiran->ttd.'') }}" alt="" height="150" align="right" style="position:absolute; top:10; right: 4 "> <br><br><br><br>
                <p style="position:absolute; right:-85">{{ $kelahiran->kades }}</p>
            </td>
        </tr>
    </table>

</body>

</html>