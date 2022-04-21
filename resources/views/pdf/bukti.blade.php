<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='https://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<body style='font-family:Tahoma;font-size:12px;color: #333333;background-color:#FFFFFF;'>

<hr><width="100" height="75">
    <center><b><font size="4" face="Courier New">HOTEL <span style="color: #FD7792">HEBAT</span></font></b></center><br>
    <center><b>Jl. Otto Iskandardinata, Kabupaten Garut, Jawa Barat<b></center><br>

<hr><width="100" height="75">

<table align='center' border='0' cellpadding='0' cellspacing='0' style='height:842px; width:595px;font-size:12px;'>
    <tr>
        <td valign='top'><table width='100%' cellspacing='0' cellpadding='0'>
        <tr>
          <td valign='bottom' width='50%' height='50'><div align='left'></div><br/></td>
          <td width='50%'>&nbsp;</td>
        </tr>
    </tr>
</table><center><a style='font-size: 30px;font-weight: bold;'> </a></center><center><a style='font-size: 20px;font-weight: bold;'> </a></center><br><br>

<table width='100%' cellspacing='0' cellpadding='0'>
    <tr>
        <td valign='top' width='35%' style='font-size:12px;'> <strong>Client Name : {{$buktiPembayaran->user->name}}</strong><br/>Client Email : {{$buktiPembayaran->user->email}}<br/> <br/></td>
        <td valign='top' width='35%'></td>
        <td valign='top' width='30%' style='font-size:12px;'>Check In : {{$buktiPembayaran->check_in}}<br/>Check Out : {{$buktiPembayaran->check_out}} <br/></td>
    </tr>
</table>

<table width='100%' height='100' cellspacing='0' cellpadding='0'>
    <tr>
        <td><div align='center' style='font-size: 14px;font-weight: bold;'></div></td>
    </tr>
</table>

<table width='100%' cellspacing='0' cellpadding='2' border='1' bordercolor='#CCCCCC'>
    <tr>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Transaction ID </strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Room Type </strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Price/Room </strong></td>
        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Total Room </strong></td>
    </tr>
    <tr style="display:none;">
        <td colspan="*">
            <tr>
                <td valign='top' style='font-size:12px;'>{{$buktiPembayaran->id}}</td>
                <td valign='top' style='font-size:12px;'>{{$buktiPembayaran->room->type_room->name}}</td>
                <td valign='top' style='font-size:12px;'>{{'Rp.' . ' ' . number_format($buktiPembayaran->room->type_room->price)}} </td>
                <td valign='top' style='font-size:12px;'>{{$buktiPembayaran->many_room}}</td>
            </tr>
            <tr>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
            </tr>
            <tr>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
            </tr>
            <tr>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
            </tr>
            <tr>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
            </tr>
            <tr><td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
            </tr>
            <tr>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
            </tr>
            <tr>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
            </tr>
            <tr>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
                <td valign='top' style='font-size:12px;'>&nbsp;</td>
            </tr>
        </td>
    </tr>
</table>

<table width='100%' cellspacing='0' cellpadding='2' border='0'>
    {{-- <tr>
        <td style='font-size:12px;width:50%;'><strong>{{"Rp. ".terbilang($data->pembayaran->amount)}} rupiah</strong></td>
        <td><table width='100%' cellspacing='0' cellpadding='2' border='0'>
    </tr>
    <tr>
        <td align='right' style='font-size:12px;' >Fasilitas Tambahan :</td>
        <td  align='right' style='font-size:12px;'>{{$data->fasilitas->namaFasilitas}}<td>
    </tr>
    <tr>
        <td  align='right' style='font-size:12px;'>Harga Fasilitas :</td>
        <td  align='right' style='font-size:12px;'>@currency($data->fasilitas->hargaFasilitas)</td>
    </tr> --}}
    <tr>
        <td  align='right' style='font-size:12px;'><b>Total :</b></td>
        <td  align='right' style='font-size:12px;'><b>{{ number_format( $buktiPembayaran->payment->price, 0) }}</b></td>
    </tr>
</table>

<table width='100%' height='50'><tr><td style='font-size:12px;text-align:justify;'></td></tr></table><br><br><br><br><br><br><br><br><br>
<table  width='100%' cellspacing='0' cellpadding='2'>
    <tr>
        <td width='33%' style='border-top:double medium #CCCCCC;font-size:12px;' valign='top' ><b>HOTEL<span style="color: #FD7792"> HEBAT</span></b><br/></td>
        <td width='33%' style='border-top:double medium #CCCCCC; font-size:12px;' align='center' valign='top'>Jl. Otto Iskandardinata, Kabupaten Garut, Jawa Barat<br/>Phone: +62-896-3070-6721<br/></td>
        <td valign='top' width='34%' style='border-top:double medium #CCCCCC;font-size:12px;' align='right'>Invoice Hotel<br/></td>
      </tr>
</table>
</body>
</html>
