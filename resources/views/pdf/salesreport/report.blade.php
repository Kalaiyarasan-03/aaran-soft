<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Printing SalesInovice DC</title>
    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        .inr-sign::before {
            content: "\20B9";
        }

        table {
            font-size: x-small;
            border-collapse: collapse;
        }

        th, td {
            font-size: x-small;
            border: solid 1px rgba(161, 161, 161, 0.9);
            border-collapse: collapse;
            padding: 2px;
            position: relative;
            /*margin: 2px;*/
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        thead tr td {
            font-weight: bold;
        }

        /*.logoLeft {*/
        /*    position: fixed;*/
        /*    margin-top: 10px;*/
        /*    margin-left: 20px;*/
        /*    height: 80px !important;*/
        /*    Width: auto !important;*/
        /*}*/

        /*.companyname {*/
        /*    position: fixed;*/
        /*    margin-top: 2px;*/
        /*    margin-left: 20px;*/
        /*    !*font-weight: 400;*!*/
        /*    !*font-size: 36px;*!*/
        /*    !*font-size: x-large;*!*/
        /*    font-size: 30px;*/
        /*    text-align: center;*/
        /*    text-transform: uppercase;*/
        /*    height: 35px;*/
        /*}*/

        /*.address1 {*/
        /*    position: fixed;*/
        /*    margin-top: 34px;*/
        /*    font-weight: 400;*/
        /*    font-size: 12px;*/
        /*    text-align: center;*/
        /*    font-family: sans-serif;*/
        /*}*/

        /*.address2 {*/
        /*    position: fixed;*/
        /*    margin-top: 30px;*/
        /*    top: 20px !important;*/
        /*    font-weight: 400;*/
        /*    font-size: 12px;*/
        /*    text-align: center;*/
        /*    font-family: sans-serif;*/
        /*}*/

        .gst {
            position: fixed;
            margin-top: 32px;
            top: 32px !important;
            font-weight: 400;
            font-size: 12px;
            text-align: center;
            font-family: sans-serif;
        }

        div.relative {
            position: relative;
            width: 400px;
            height: 200px;
            border: 3px solid #73AD21;
        }

        div.absolute {
            position: absolute;
            top: 80px;
            right: 0;
            width: 200px;
            height: 100px;
            border: 3px solid red;
        }


        .page-break {
            page-break-after: always;
        }

        .column1 {
            width: 300px;
            height: auto;

        }

        .column2 {
            width: 300px;
            height: auto;

        }
        hr {
            border: none;
            height: 1.5px;
            /* Set the hr color */
            color: #333;  /* old IE */
            background-color: #333;  /* Modern Browsers */
        }
    </style>

</head>
<body>
<h2 style="text-align: center">
    <div style="font-family:Times,serif; width: 100%;color: #3b82f6;">{{$cmp->get('company_name')}}</div>
</h2>
<hr>
<div style="text-align: left;">
    Party Name :&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$contact->vname}}</b>
</div>

<div style="text-align: center;font-size: 15px;padding: 10px;">
    <b>Statement&nbsp;{{$start_date.' to '.$end_date}}</b>
</div>

<table width="100%">
    <thead style="background-color: lightgray;">
    <tr>
        <td style="font-size: xx-small;">Date</td>
        <td style="font-size: xx-small;">Voucher no</td>
        <td style="font-size: xx-small;">Voucher type</td>
        <td style="font-size: xx-small;">Cheque No</td>
        <td style="font-size: xx-small;">Invoice amount</td>
        <td style="font-size: xx-small;">Receipt amount</td>
    </tr></thead>
    <tbody>
    <tr>
        <td colspan="4" style="text-align: right;">Opening Balance</td>
        <td>{{number_format($old_balance,2,'.','')}}</td>
        <td></td>
    </tr>

    @php
        $totalSales = 0;
        $totalReceipt = 0;
    @endphp

@foreach( $obj as $row )
    <tr>
        <td> {{date('d-m-Y', strtotime($row->vdate))}}</td>
        <td>{{$row->vno}}</td>
        <td> {{$row->mode}}</td>
        <td> {{$row->chq_no}}</td>
        <td> {{$row->grand_total}}</td>
        <td> {{$row->receipt_amount}}</td>
    </tr>

    @php
        $totalSales += floatval($row->grand_total);
        $totalReceipt += floatval($row->receipt_amount);
    @endphp
@endforeach
    <tr>
        <td colspan="4" style="text-align: right;"><b>Total</b></td>
        <td><b>{{number_format($totalSales+$old_balance,2,'.','')}}</b></td>
        <td><b>{{number_format($totalReceipt,2,'.','')}}</b></td>
    </tr>
    <tr>
        <td colspan="4" style="text-align: right;"><b>Balance</b></td>
        <td><b>{{number_format($totalSales+$old_balance-$totalReceipt,2,'.','')}}</b></td>
        <td></td>
    </tr>
    </tbody>
</table>
</body>
</html>
