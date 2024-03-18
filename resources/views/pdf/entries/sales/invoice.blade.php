@php use App\Helper\ConvertTo;use Rmunate\Utilities\SpellNumber;  @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Printing Emb DC</title>
    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
            border-collapse: collapse;
        }

        th, td {
            border: solid 1px rgba(161, 161, 161, 0.9);
            border-collapse: collapse;
            padding: 2px;
            /*margin: 2px;*/
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        thead tr td {
            font-weight: bold;
        }

        .logoLeft {
            position: fixed;
            margin-top: 10px;
            margin-left: 20px;
            height: 80px !important;
            Width: auto !important;
        }

        .companyname {
            position: fixed;
            margin-top: 2px;
            margin-left: 20px;
            /*font-weight: 400;*/
            /*font-size: 36px;*/
            /*font-size: x-large;*/
            font-size: 30px;
            text-align: center;
            text-transform: uppercase;
            height: 35px;
        }

        .address1 {
            position: fixed;
            margin-top: 34px;
            font-weight: 400;
            font-size: 12px;
            text-align: center;
            font-family: sans-serif;
        }

        .address2 {
            position: fixed;
            margin-top: 30px;
            top: 20px !important;
            font-weight: 400;
            font-size: 12px;
            text-align: center;
            font-family: sans-serif;
        }

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

    </style>

</head>
<body>

<table width="100%" class="print:*">
    <thead>
    <tr>
        <td colspan="2">
            <div style="height: 65px;" class="bg-blue-400 ">
                <div style="text-align: center; width: 100%;" class="companyname">{{$cmp->get('company_name')}}</div>
                <div style="text-align: center; width: 100%;" class="address1">{{$cmp->get('address_1')}}</div>
                <div style="text-align: center; width: 100%;" class="address2">{{$cmp->get('address_2')}}</div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="  background-color: darkgray">
            <div style=" height: 18px;text-align: center;  vertical-align: middle; color: white; font-size: medium  ">
                Invoice

            </div>
            <div style="text-align: right; color: white; margin-top: -20px; margin-bottom: 4px">
                Original copy&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </td>
    </tr>
    <tr>
        <td style="padding: 0;margin: 0;">
            <div style="text-align: left;">
                <p style="font-size: 12px; line-height: 5px ">&nbsp;&nbsp;M/s.{{$contact->get('contact_name')}}</p>
                <p style="line-height: 5px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$contact->get('address_1')}}</p>
                <p style="line-height: 5px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$contact->get('address_3')}}</p>
                <p style="line-height: 5px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$contact->get('gstCell')}}</p>
            </div>
        </td>
        <td style="padding: 0;margin: 0;">
            <div style="text-align: left; width: 100%;">
                <div><span style="vertical-align: middle;font-size: 13px;">&nbsp;&nbsp;Invoice no:&nbsp;</span><span
                        style="font-size: 18px;">&nbsp;&nbsp;{{$obj->invoice_no}}</span></div>
                <div><span style="vertical-align: middle;font-size: 13px; ">&nbsp;&nbsp;Date:&nbsp;</span><span
                        style="font-size: 14px;">{{$obj->invoice_date ?date('d-m-Y', strtotime($obj->invoice_date)):''}}</span>
                </div>
            </div>
        </td>
    </tr>
    </thead>
</table>
<table width="100%">
    <thead style="background-color: lightgray;">
    <tr>
        <th width="12px">#</th>
        <th>Product</th>
        <th width="70px">Colour</th>
        <th width="70px">Sizes</th>
        <th width="70px">Quantity</th>
        <th width="70px">Price</th>
        <th width="70px">Amount</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list as $index => $row)

        <tr>
            <td align="center" style="border-bottom: none;border-top: none;">{{$index+1}} </td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;{{$row['product_name']}}</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;{{$row['colour_name']}}</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;{{$row['size_name']}}</td>
            <td align="right" style="border-bottom: none;border-top: none;">&nbsp;{{$row['qty']}}</td>
            <td align="right" style="border-bottom: none;border-top: none;">&nbsp;{{$row['price']}}</td>
            <td align="right" style="border-bottom: none;border-top: none;">&nbsp;{{$row['qty']*$row['price']}}</td>
        </tr>

    @endforeach

    @for($i = 0; $i < 22-$list->count(); $i++)

        <tr>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        </tr>

    @endfor


    {{--    <tr>--}}
    {{--        <td colspan="7" align="center"></td>--}}
    {{--    </tr>--}}
    <tr>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="right" style="border-bottom: none;border-top: none;">Cgst Tax</td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;">{{ $obj->total_gst/2 }}</td>
    </tr>
    <tr>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="right" style="border-bottom: none;border-top: none;">Sgst Tax</td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;">{{ $obj->total_gst/2 }}</td>
    </tr>
    <tr>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="right" style="border-bottom: none;border-top: none;">Round Off</td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;"></td>
        <td align="center" style="border-bottom: none;border-top: none;">{{ $obj->round_off }}</td>
    </tr>

    <tr>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
    </tr>

    <tr>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="4" align="right">&nbsp;Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td align="right">{{$obj->total_qty}}</td>
        <td align="right"></td>
        <td align="right">&nbsp;{{$obj->grand_total}}</td>
    </tr>

    <tr>
        <td colspan="7"><span>Amount Chargeable (in words)</span>
            <div>
              {{$rupees}}
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center" style="border-bottom: none;border-top: none;">Taxable</td>
        <td colspan="2" align="center" style="border-bottom: none;border-top: none;">CGST</td>
        <td colspan="2" align="center" style="border-bottom: none;border-top: none;">SGST</td>
        <td align="center" style="border-bottom: none;border-top: none;">Total</td>
    </tr>

    <tr>
        <td colspan="2" align="center" style="border-top: none;">value</td>
        <td align="center">Rate</td>
        <td align="center">Amount</td>
        <td align="center">Rate</td>
        <td align="center">Amount</td>
        <td align="center" style="border-top: none;">Tax Amount</td>
    </tr>

    @foreach($list as $index => $row)
        <tr>
            <td colspan="2" align="right"
                style="border-bottom: none;border-top: none;">{{$row['qty']*$row['price']}}</td>
            <td align="center" style="border-bottom: none; border-top: none;">{{$row['gst_percent']/2}}%</td>
            <td align="center"
                style="border-bottom: none; border-top: none;">{{($row['qty']*$row['price']*$row['gst_percent']/100)/2}}</td>
            <td align="center" style="border-bottom: none; border-top: none;">{{$row['gst_percent']/2}}%</td>
            <td align="center"
                style="border-bottom: none; border-top: none;">{{($row['qty']*$row['price']*$row['gst_percent']/100)/2}}</td>
            <td align="center"
                style="border-bottom: none;border-top: none;">{{$row['qty']*$row['price']*$row['gst_percent']/100}}</td>
        </tr>

    @endforeach

    <tr>
        <td width="120px" align="center" style="border-bottom: none;">Total</td>
        <td align="right" style="border-bottom: none;">{{$obj->total_taxable}}</td>
        <td align="center" style="border-bottom: none; "></td>
        <td align="center" style="border-bottom: none; ">{{$obj->total_gst/2}}</td>
        <td align="center" style="border-bottom: none; "></td>
        <td align="center" style="border-bottom: none; ">{{$obj->total_gst/2}}</td>
        <td align="center" style="border-bottom: none;">{{$obj->total_gst}}</td>
    </tr>

    <tr>
        <td colspan="7"><span style="text-underline: #5e5e5e;">Declaration:</span>
            <div style="padding-top:5px; ">
                We declare that this invoice shows the actual price of the
                goods described and that all particulars are true and
                correct.
            </div>
        </td>

    </tr>
    <tr>
        <td colspan="3" style="height: 40px; text-align: left; vertical-align: top; padding-top: 5px ">Receiver Sign
        </td>
        <td colspan="4" style="height: 40px; text-align: center; vertical-align: top; padding-top: 5px ">
            &nbsp;for&nbsp;{{$cmp->get('company_name')}}
            <div style="padding-top: 20px;">Authorized signatory</div>
        </td>
    </tr>
    </tbody>
</table>
<div style="text-align: center;font-size:10px ">This is a Computer Generated Invoice</div>

</body>
</html>
