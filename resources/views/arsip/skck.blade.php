<!DOCTYPE html>
<html>

<head>
    <title>SKCK - {{ $skck->user->nama }}</title>
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
        <tr>
            <td colspan="2">
                <br>
                <center>
                    <font size="3"><u><b>SURAT KETERANGAN CATATAN KEPOLISIAN</b></u></font><br>
                    {{-- <hr width="180" style="border-width: thin; margin-top: 0px;"> --}}
                    <font size="3">NO SURAT : {{ $skck->nosurat }}</font>
                </center>
                <br>
            </td>
        </tr>
    </table>

    <table border="0" align="center" width=83%>
        <!-- KETERANGAN -->
        <tr>
            <td>
                <p style="text-align: justify;">
                    Yang bertanda tangan di bawah ini, Kepala Desa Pinggirsari Kecamatan Arjasari Kabupaten Bandung , menerangkan dengan sebenarnya bahwa :
                </p>
            </td>
        </tr>
    </table>

    <table border="0" align="center" width=83% >
        <!-- IDENTITAS PENGAJU -->
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td style="text-transform: uppercase;"><b>{{ $skck->user->nama }}</b></td>
        </tr>
        <tr>
            <td>No Induk Kependudukan</td>
            <td>:</td>
            <td>{{ $skck->user->nik }}</td>
        </tr>
        <tr>
            <td>No Kartu Keluarga</td>
            <td>:</td>
            <td>{{ $skck->user->no_kk }}</td>
        </tr>
        <tr>
            <td>Tempat, tanggal lahir</td>
            <td>:</td>
            <td>{{ $skck->user->ttl }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $skck->user->jk }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{ $skck->user->agama }}</td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td>:</td>
            <td>{{ $skck->user->pendidikan }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>{{ $skck->user->pekerjaan }}</td>
        </tr>
        <tr>
            <td>Status Perkawinan</td>
            <td>:</td>
            <td>{{ $skck->user->status }}</td>
        </tr>
        <tr>
            <td>Nama Orang Tua</td>
            <td>:</td>
            <td style="text-transform: uppercase;">{{ $skck->user->ayah }} / {{ $skck->user->ibu }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $skck->user->alamat }}</td>
        </tr>
    </table>

    <table border="0" align="center" width=83%>
        <!-- KETERANGAN -->
        <tr>
            <td>
                <p style="text-align: justify;">
                    Berdasarkan keterangan dari RT dan RW setempat benar bahwa yang bersangkutan Penduduk Desa Pinggirsari Kecamatan Arjasari Kabupaten Bandung dan yang bersangkutan :
                </p>
                <p style="text-align: center"><i><b>{{ $skck->klarifikasi }}</b></i></p>
                <p style="text-align: justify;">
                    Surat keterangan ini digunakan untuk: <i>{{ $skck->keterangan }}</i>
                </p>
                <p>Demikian Surat Keterangan ini, untuk dipergunakan sebagaimana mestinya</p>
            </td>
        </tr>
    </table>

    <br><br>

    {{-- TTD --}}
    <table border="0" align="center" width=83%>
        <tr>
            <td style="text-align: right; position:relative">
                Pinggirsari, {{ $skck->updated_at->format('d F Y') }} <br>
                Kepala Desa Pinggirsari <br>
                <img src="{{ public_path('storage/ttdcap/'.$skck->ttd.'') }}" alt="" height="132" align="right" style="position:absolute; top:10; right: 4 "> <br><br><br><br>
                <p style="position:absolute; right:-80">{{ $skck->kades }}</p>
            </td>
        </tr>
    </table>

</body>

</html>