<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan PUSKESOS</title>
</head>

<body>
    <!-- KOP SURAT -->
    <table border="0" align="center" style="margin-top: 10px;" width=90%>
        <tr>
            <td width=14%><img src="{{ public_path('images/logo.png') }}" alt="" width="100" height="100">
            </td>
            <td>
                <center>
                    <font size="3">SISTEM LAYANAN RUJUKAN TERPADU (SLRT)</font> <br>
                    <font size="3">PUSAT KESEJAHTERAAN SOSIAL</font> <br>
                    <font size="5"><b>"PUSKESOS WELAS ASIH"</b></font> <br>
                    <font size="3"><b>DESA PINGGIRSARI KEC. ARJASARI KAB. BANDUNG</b></font> <br>
                    <font size="3"><i>Jl.Raya Pinggirsari No.1 Km.1 Kode Pos 40379</i></font>
                </center>
            </td>
            <td width=14%><img src="{{ public_path('images/puskesos.png') }}" alt="" width="100" height="100">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <hr style="border: 2px; border-top:5px double">
            </td>
        </tr>
    </table>

    <table border="0" align="center" width=83%>
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td><u>.............................</u></td>
            <td style="text-align: right;">Pinggirsari, {{ $puskesos->updated_at->format('d F Y') }}</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>:</td>
            <td>-</td>
            <td style="text-align: right;">&nbsp;</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>:</td>
            <td>Permohonan Perbaikan Data <b>KIS</b></td> 
            <td style="text-align: right;">&nbsp;</td>
        </tr>
    </table>
    
    <br>


    <table border="0" align="center" width=83% >
        <tr>
            <td>
                Kepada Yth.<br>
                Pimpinan BPJS Kesehatan Kab. Bandung<br>
                Di<br>
                Soreang
            </td>
        </tr>
    </table>

    <table border="0" align="center" width=83%>
        <tr>
            <td>
                <p style="text-align: justify;">
                    <b>Assalamu'alaikum Wr, Wb.</b> <br>
                    Dengan Hormat, 
                </p>
                <p style="text-align: justify;">
                    Sehubungan dengan masih banyaknya ketidaksesuayan  data yang terdapat dalam <b>Kartu Indonesia Sehat (KIS)</b> dengan Data Kartu Penduduk (KTP) Baik Nama, Nik dan Alamat. Oleh karna hal tersebut di atas. Maka dengan ini Kepala Desa Pinggirsari kecamatan Arjasari Kab. Bandung mengajukan permohonan Perbaikan Data, yang di selenggarakan di kantor Desa Pinggirsari Adapun waktunya kami serahkan kepada Pihak BPJS.
                </p>
                <p style="text-align: justify;">
                   Demikian hal ini disampaikan, atas perhatian dan perkenan Bapak/Ibu Kami haturkan Terima Kasih.
                </p>
                <p style="text-align: justify;">
                   <b>Wasallamualaikum, Wr, Wb.</b>
                </p>
            </td>
        </tr>
    </table>

    <br>

    {{-- TTD --}}
    <table border="0" align="center" width=83%>
        <tr>
            <td style="text-align: right; position:relative">
                Pinggirsari, {{ $puskesos->updated_at->format('d F Y') }} <br>
                Kepala Desa Pinggirsari <br>
                <img src="{{ public_path('storage/ttdcap/'.$puskesos->ttd.'') }}" alt="" height="155" align="right" style="position:absolute; top:10; right: 4 "> <br><br><br><br><br>
                <p style="position:absolute; right:-90">{{ $puskesos->kades }}</p>
            </td>
        </tr>
    </table>
    <table border="0" align="center" width=83%>
        <tr style="line-height:0.3">
            <td>
                Tembusan Kepada Yth. :
            </td>
        </tr>
        <tr>
            <td>
                <ol>
                    <li>Bapak Bupati Bandung</li>
                    <li>Bapak Camat Arjasari</li>
                    <li>BPD DS Pinggirsari</li>
                    <li>Arsip</li>
                </ol>
            </td>
        </tr>
    </table>

</body>

</html>