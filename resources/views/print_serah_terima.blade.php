<p>&nbsp;</p>
<center><span style="font-size: 16px;"><strong>Serah Terima Biro Jasa</strong></span></center>
<center><br />
    <table style="width: 550px; font-size: 8pt; font-family: calibri; border-collapse: collapse;" border="1"
        cellspacing="0">
        <tbody>
            <tr align="center">
                <td width="10%">No Spk</td>
                <td width="20%">No Smk</td>
                <td width="13%">No Cust</td>
                <td width="4%">Nama</td>
                <td width="7%">Alamat</td>
                <td width="13%">Type Kendaraan</td>
                <td width="13%">Warna</td>
                <td width="13%">Pembayaran</td>
            </tr>
            @foreach($biro as  $biro)
            <tr>
                <td>{{$biro->no_spk}}</td>
                <td>{{$biro->no_smk}}</td>
                <td>{{$biro->no_cust}}</td>
                <td>{{$biro->nama}}</td>
                <td>{{$biro->alamat}}</td>
                <td style="text-align: right;">{{$biro->type_kendaraan}}</td>
                <td style="text-align: right;">{{$biro->warna}}</td>
                <td style="text-align: right;">{{$biro->pembayaran}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>&nbsp;</p>
    <table style="width: 650; font-size: 7pt;" cellspacing="2">
        <tbody>
            <tr>
                <td align="center">Diterima Oleh,<u>(............)</u></td>
                <td style="border: 1px solid black; padding: 5px; text-align: left; width: 30%;">&nbsp;</td>
                <td align="center">TTD,<u>(...........)</u></td>
            </tr>
        </tbody>
    </table>
</center>