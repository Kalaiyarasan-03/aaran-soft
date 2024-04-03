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
            font-size: xx-small;
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


    </style>

</head>
<body>

<table width="100%" class="print:*">
    <thead>
    <tr>
        <td colspan="2" style="padding-top: 10px">
{{--            <div class="logoLeft">--}}
{{--                <img style="position: fixed;margin-left: 20px;padding-top: 5px;height: 70px;width: auto;" src="{{ public_path('/storage/'.$cmp->get('logo'))}}"/>--}}
{{--            </div>--}}
            <div style="height: 65px;" class="bg-blue-400 ">
                <div style="text-align: center; width: 100%;color: #3b82f6;" class="companyname"></div>
                <div style="text-align: center; width: 100%;" class="address1"></div>
                <div style="text-align: center; width: 100%;" class="address1"></div>
                <div style="text-align: center; width: 100%;" class="address2"></div>
            </div>
            <div style="text-align: center; width: 100%;" class="address1">&nbsp;</div>
            <div style="text-align: center; width: 100%;" class="address1">&nbsp;</div>
            <div style="text-align: center; width: 100%;" class="address1">&nbsp;</div>
            <div style="text-align: center; width: 100%;" class="address1">&nbsp;</div>
            <div style="text-align: center; width: 100%;" class="address1">&nbsp;</div>
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
        <th width="5px" style="padding: 5px;">#</th>
        <th width="12px" style="padding: 5px; ">Po.No</th>
        <th width="12px" style="padding: 5px;">Dc.No</th>
        <th width="160px" style="padding: 5px;">Particulars</th>
        <th width="40px" style="padding: 5px;">HSN Code</th>
        <th width="40px" style="padding: 5px;">Quantity</th>
        <th width="40px" style="padding: 5px;">Price</th>
        <th width="40px" style="padding: 5px;">Taxable Amt</th>
        <th style="padding: 1px; width: 1px; border-right: none;text-align: left; margin-bottom: 0;">%</th>
        <th width="40px" style="padding: 2px; border-left: none; margin-left: 0px;">SGST Amt</th>
        <th style="padding: 1px; width: 1px; border-right: none;text-align: left; margin-bottom: 0;">%</th>
        <th width="40px" style="padding: 2px; border-left: none; margin-left: 0px;">CGST Amt</th>
        <th width="40px" style="padding: 5px;">sub Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list as $index => $row)

        <tr>
            <td align="center" style="border-bottom: none;border-top: none;">{{$index+1}} </td>
            <td align="center" style="border-bottom: none;border-top: none;">{{$row['po_no']}} </td>
            <td align="center" style="border-bottom: none;border-top: none;">{{$row['dc_no']}} </td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;{{$row['product_name']}}</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="right" style="border-bottom: none;border-top: none;">&nbsp;{{$row['qty']}}</td>
            <td align="right" style="border-bottom: none;border-top: none;">&nbsp;{{$row['price']}}</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;{{$row['qty']*$row['price']}}</td>
            <td align="center" style="border-bottom: none;border-top: none; border-left: none;">{{$row['gst_percent']/2}}</td>
            <td align="right" style="border-bottom: none;border-top: none;">&nbsp;{{($row['qty']*$row['price']*$row['gst_percent']/100)/2}}</td>
            <td align="center" style="border-bottom: none;border-top: none; border-left: none;">{{$row['gst_percent']/2}}</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;{{($row['qty']*$row['price']*$row['gst_percent']/100)/2}}</td>
            <td align="right" style="border-bottom: none;border-top: none; ">&nbsp;{{$row['qty']*$row['price']*$row['gst_percent']/100+$row['qty']*$row['price']}}</td>
        </tr>

    @endforeach

    @for($i = 0; $i < 30-$list->count(); $i++)

        <tr>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        </tr>

    @endfor

    <tr>
        <td colspan=2" align="right" style="border-right: none;">&nbsp;E&OE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td colspan="3" align="right" style="border-left: none;">&nbsp;Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td  align="right">{{$obj->total_qty}}</td>
        <td  align="right"></td>
        <td  align="right">{{$obj->total_taxable}}</td>
        <td colspan="2" align="right">{{$obj->total_gst/2}}</td>
        <td colspan="2" align="right">{{$obj->total_gst/2}}</td>
        <td colspan="1" align="right">{{$obj->grand_total}}</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;"></td>
        <td colspan="5" align="left" style="border-bottom: none;border-top: none; border-right: none;">Taxable value</td>
        <td align="center" style="border-bottom: none;border-top: none; border-left: none;">{{$obj->total_taxable}}</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;"></td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none;">CGST</td>
        <td align="center" style="border-bottom: none; border-left: none;">{{$obj->total_gst/2}}</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;"></td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none;">SGST</td>
        <td align="center" style="border-bottom: none; border-left: none;">{{$obj->total_gst/2}}</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;"></td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none;">Total GST</td>
        <td align="center" style="border-bottom: none; border-left: none;">{{$obj->total_gst}}</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none; border-left: none;">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;"></td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none;">Round Off</td>
        <td align="center" style="border-bottom: none; border-left: none;">{{$obj->round_off}}</td>
    </tr>
    <tr>
        <td colspan="7"><span>Amount Chargeable (in words)</span>
            <div style="margin-top: 5px">
                {{$rupees}}
            </div>
        </td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none; font-weight: bold; font-size:medium;">GRAND TOTAL</td>
        <td align="center" style="border-bottom: none; border-left: none;font-weight: bold; font-size:medium;">{{$obj->grand_total}}</td>
    </tr>
    <tr>
        <td colspan="6" style="height: 40px; text-align: center; vertical-align: top; padding-top: 5px ;">Receiver Sign
        </td>
        <td colspan="7" style="height: 40px; text-align: center; vertical-align: top; padding-top: 5px; ">
            &nbsp;for&nbsp;{{$cmp->get('company_name')}}
            <div style="padding-top: 20px;  margin-top:16px">Authorized signatory</div>
        </td>
    </tr>
    </tbody>
</table>
<div style="text-align: center;font-size:10px; padding-top: 5px; ">This is a Computer Generated Invoice</div>

</body>
</html>
{{--<----End original_copy--->--}}

{{--<----start second_copy--->--}}
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
        /*    margin-top: 2px;*/
        /*    margin-left: 20px;*/
        /*    height: 20px !important;*/
        /*    Width: 40px !important;*/
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


    </style>

</head>
<body>

<table width="100%" class="print:*">
    <thead>
    <tr>
        <td colspan="2" style="padding-top: 10px">
            {{--            <div class="logoLeft">--}}
            {{--                <img style="position: fixed;margin-left: 20px;padding-top: 5px;height: 70px;width: auto;" src="{{ public_path('/storage/'.$cmp->get('logo'))}}"/>--}}
            {{--            </div>--}}
            <div style="height: 65px;" class="bg-blue-400 ">
                <div style="text-align: center; width: 100%;color: #3b82f6;" class="companyname"></div>
                <div style="text-align: center; width: 100%;" class="address1"></div>
                <div style="text-align: center; width: 100%;" class="address1"></div>
                <div style="text-align: center; width: 100%;" class="address2"></div>
            </div>
            <div style="text-align: center; width: 100%;" class="address1">&nbsp;</div>
            <div style="text-align: center; width: 100%;" class="address1">&nbsp;</div>
            <div style="text-align: center; width: 100%;" class="address1">&nbsp;</div>
            <div style="text-align: center; width: 100%;" class="address1">&nbsp;</div>
            <div style="text-align: center; width: 100%;" class="address1">&nbsp;</div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="  background-color: darkgray">
            <div style=" height: 18px;text-align: center;  vertical-align: middle; color: white; font-size: medium  ">
                Invoice

            </div>
            <div style="text-align: right; color: white; margin-top: -20px; margin-bottom: 4px">
                Office copy&nbsp;&nbsp;&nbsp;&nbsp;
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
        <th width="5px" style="padding: 5px;">#</th>
        <th width="12px" style="padding: 5px; ">Po.No</th>
        <th width="12px" style="padding: 5px;">Dc.No</th>
        <th width="40px" style="padding: 5px;">Particulars</th>
        <th width="40px" style="padding: 5px;">HSN Code</th>
        <th width="40px" style="padding: 5px;">Quantity</th>
        <th width="40px" style="padding: 5px;">Price</th>
        <th width="40px" style="padding: 5px;">Taxable Amt</th>
        <th style="padding: 1px; width: 1px; border-right: none;text-align: left; margin-bottom: 0;">%</th>
        <th width="40px" style="padding: 2px; border-left: none; margin-left: 0px;">SGST Amt</th>
        <th style="padding: 1px; width: 1px; border-right: none;text-align: left; margin-bottom: 0;">%</th>
        <th width="40px" style="padding: 2px; border-left: none; margin-left: 0px;">CGST Amt</th>
        <th width="40px" style="padding: 5px;">sub Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list as $index => $row)

        <tr>
            <td align="center" style="border-bottom: none;border-top: none;">{{$index+1}} </td>
            <td align="center" style="border-bottom: none;border-top: none;">{{$row['po_no']}} </td>
            <td align="center" style="border-bottom: none;border-top: none;">{{$row['dc_no']}} </td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;{{$row['product_name']}}</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="right" style="border-bottom: none;border-top: none;">&nbsp;{{$row['qty']}}</td>
            <td align="right" style="border-bottom: none;border-top: none;">&nbsp;{{$row['price']}}</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;{{$row['qty']*$row['price']}}</td>
            <td align="center" style="border-bottom: none;border-top: none; border-left: none;">{{$row['gst_percent']/2}}</td>
            <td align="right" style="border-bottom: none;border-top: none;">&nbsp;{{($row['qty']*$row['price']*$row['gst_percent']/100)/2}}</td>
            <td align="center" style="border-bottom: none;border-top: none; border-left: none;">{{$row['gst_percent']/2}}</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;{{($row['qty']*$row['price']*$row['gst_percent']/100)/2}}</td>
            <td align="right" style="border-bottom: none;border-top: none;">&nbsp;{{$row['qty']*$row['price']*$row['gst_percent']/100+$row['qty']*$row['price']}}</td>
        </tr>

    @endforeach

    @for($i = 0; $i < 30-$list->count(); $i++)

        <tr>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
            <td align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        </tr>

    @endfor

    <tr>
        <td colspan=2" align="right" style="border-right: none;">&nbsp;E&OE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td colspan="3" align="right" style="border-left: none;">&nbsp;Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td  align="right">{{$obj->total_qty}}</td>
        <td  align="right"></td>
        <td  align="right">{{$obj->total_taxable}}</td>
        <td colspan="2" align="right">{{$obj->total_gst/2}}</td>
        <td colspan="2" align="right">{{$obj->total_gst/2}}</td>
        <td colspan="1" align="right">{{$obj->grand_total}}</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;"></td>
        <td colspan="5" align="left" style="border-bottom: none;border-top: none; border-right: none;">Taxable value</td>
        <td align="center" style="border-bottom: none;border-top: none; border-left: none;">{{$obj->total_taxable}}</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;"></td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none;">CGST</td>
        <td align="center" style="border-bottom: none; border-left: none;">{{$obj->total_gst/2}}</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;"></td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none;">SGST</td>
        <td align="center" style="border-bottom: none; border-left: none;">{{$obj->total_gst/2}}</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;"></td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none;">Total GST</td>
        <td align="center" style="border-bottom: none; border-left: none;">{{$obj->total_gst}}</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;">&nbsp;</td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none;">&nbsp;</td>
        <td align="center" style="border-bottom: none; border-left: none;">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="7" align="center" style="border-bottom: none;border-top: none;"></td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none;">Round Off</td>
        <td align="center" style="border-bottom: none; border-left: none;">{{$obj->round_off}}</td>
    </tr>
    <tr>
        <td colspan="7"><span>Amount Chargeable (in words)</span>
            <div style="margin-top: 5px">
                {{$rupees}}
            </div>
        </td>
        <td colspan="5" align="left" style="border-bottom: none;border-right: none; font-weight: bold; font-size:medium;">GRAND TOTAL</td>
        <td align="center" style="border-bottom: none; border-left: none;font-weight: bold; font-size:medium;">{{$obj->grand_total}}</td>
    </tr>
    <tr>
        <td colspan="6" style="height: 40px; text-align: center; vertical-align: top; padding-top: 5px ;">Receiver Sign
        </td>
        <td colspan="7" style="height: 40px; text-align: center; vertical-align: top; padding-top: 5px; ">
            &nbsp;for&nbsp;{{$cmp->get('company_name')}}
            <div style="padding-top: 20px;  margin-top:16px">Authorized signatory</div>
        </td>
    </tr>
    </tbody>
</table>
<div style="text-align: center;font-size:10px; padding-top: 5px; ">This is a Computer Generated Invoice</div>

</body>
</html>

{{--<----End original_copy--->--}}

{{--<----start second_copy--->--}}



