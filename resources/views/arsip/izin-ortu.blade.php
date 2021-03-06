<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Izin Orang Tua</title>
</head>

<body>
    <!-- KOP SURAT -->
    <table border="0" align="center" style="margin-top: 22px;" width=84%>
        {{-- <tr>
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
        </tr> --}}
        <tr>
            <td colspan="2">
                <br>
                <center>
                    <font size="3"><u><b style="text-transform: uppercase;">SURAT IZIN {{ $ajuan->izinOrtu->hubungan }}</b></u></font><br>
                    <font size="3">NO: {{ $ajuan->nosurat }}</font>
                </center>
                <br>
            </td>
        </tr>
    </table>


    <table border="0" align="center" width=83% >
        <!-- IDENTITAS PENGAJU -->
        <tr>
            <td>Yang bertanda tangan di bawah ini:</td>
        </tr>
        <tr>
            <td width=42%>Nama Lengkap</td>
            <td width=2%>:</td>
            <td style="text-transform: uppercase;">{{ $ajuan->user->nama }}</td>
        </tr>
        <tr>
            <td>Nomor Induk Kependudukan</td>
            <td>:</td>
            <td>{{ $ajuan->user->nik }}</td>
        </tr>
        <tr>
            <td>Nomor Kartu Keluarga</td>
            <td>:</td>
            <td>{{ $ajuan->user->no_kk }}</td>
        </tr>
        <tr>
            <td>Tempat, tanggal lahir</td>
            <td>:</td>
            <td>{{ $ajuan->user->ttl }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $ajuan->user->alamat }}</td>
        </tr>
    </table>


    <table border="0" align="center" width=83% >
        <!-- IDENTITAS PENGAJU -->
        <tr>
            <td width=42%>Selaku {{ $ajuan->izinOrtu->hubungan }} dari:</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td width=2%>:</td>
            <td style="text-transform: uppercase;">{{ $ajuan->izinOrtu->nama }}</td>
        </tr>
        <tr>
            <td>Nomor Induk Kependudukan</td>
            <td>:</td>
            <td>{{ $ajuan->izinOrtu->nik }}</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>{{ $ajuan->izinOrtu->tempat_lahir }}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $ajuan->izinOrtu->tanggal_lahir }}</td>
        </tr>
        <tr>
            <td>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td>Dengan ini memberikan izin untuk</td>
            <td>:</td>
        </tr>
    </table>

    <table border="0" align="center" width=83%>
        <!-- KETERANGAN -->
        <tr>
            <td>
                {{-- <p style="text-align: justify;">
                    Dengan ini memberikan izin untuk:
                </p> --}}
                <p style="text-align: center;">
                    <b style="text-transform: uppercase;">
                        {{ $ajuan->keterangan }}
                    </b>
                </p>
                <p style="text-align: justify;">
                    Demikian surat izin yang saya buat dengan sebenarnya tanpa ada paksaan dan tekanan dari pihak manapun.
                </p>
            </td>
        </tr>
    </table>

    <br><br>

    {{-- TTD --}}
    <table border="0" align="center">
        <tr>
            <td style="text-align:center; position:relative;" width=35%>
                Yang bersangkutan<br><br><br><br><br><br>
                <u>{{ $ajuan->izinOrtu->nama }}</u>
            </td>
            
            <td>
               &nbsp;
            </td>
            <td>
               &nbsp;
            </td>
            <td>
               &nbsp;
            </td>
            <td>
               &nbsp;
            </td>
            <td>
               &nbsp;
            </td>
            <td>
               &nbsp;
            </td>
            <td>
               &nbsp;
            </td>
            <td>
               &nbsp;
            </td>
            <td>
               &nbsp;
            </td>
            <td>
               &nbsp;
            </td>
            <td>
               &nbsp;
            </td>

            <td style="text-align:center; position:relative;" width=35%>
                Bandung, {{ $ajuan->updated_at->format('d F Y') }}<br><br><br><br><br><br>
                <u>{{ $ajuan->user->nama }}</u>
            </td>
        </tr>
    </table>
    <br><br>
    <table border="0" align="center" width=30%>
        <tr>
            <td style="text-align: center; position:relative">
                Mengetahui, {{ $ajuan->updated_at->format('d F Y') }} <br>
                Kepala Desa Pinggirsari <br>
                <img src="{{ public_path('storage/ttdcap/'.$ajuan->ttd.'') }}" alt="" height="132" align="center" style="position:absolute; top:10; right:0 "> <br><br><br><br>
                <p  align="center">{{ $ajuan->kades }}</p>
            </td>
        </tr>
    </table>

</body>

</html>