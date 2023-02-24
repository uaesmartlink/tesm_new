<html>
    <head>
        <title>
            Order
        </title>
        <style>
            .styled-table {
                margin: auto;
                padding: 10;
                font-size: 0.9em;
                font-family: sans-serif;
                min-width: 80%;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }
            .inner-table {
                margin: auto;
                padding: 10;
                font-size: 0.9em;
                font-family: sans-serif;
                min-width: 80%;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

            }
            .inner-inner{
                border: 1px solid gray;
                margin: auto;
                padding: 10;
                font-size: 0.9em;
                min-width: 80%;
                font-family: sans-serif;
            }
            .data-center{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table class="styled-table">
              <tr>
                <table class="inner-table">
                    <tr>
                        <td>{{ $order->account->name }}</td>
                        <td colspan="2" rowspan="6">
                                <img src="{{ $order->account->logo_path }}" width="50%" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ $order->account->phone }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ $order->account->email }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ $order->account->address }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            346671
                        </td>
                    </tr>
                    <tr>
                        <td>
                        TRN 100009122100003
                        </td>
                    </tr>
                </table>
               </tr>
               <tr>
                    <table class="inner-table">
                        <thead>
                            <tr>
                                <th>
                                    Prepared For
                                </th>
                                <th>
                                    Prepared In
                                </th>
                                <th>
                                    Invoce Number
                                </th>
                            </tr>
                        </thead>
                        <tbody >
                           <tr>
                                <td>
                                    {{ $order->customer->name }}
                                </td>
                                <td class="data-center">
                                    {{ $order->created_at }}
                                </td>
                                <td class="data-center">
                                    {{ $order->id }}
                                </td>
                           </tr>
                           <tr>
                                <td>
                                     {{$order->customer->address}}
                                </td>
                                <td></td>
                                <td></td>
                           </tr>
                           <tr>
                                <td>
                                    {{$order->customer->email}}
                                </td>
                                <td></td>
                                <td></td>
                             </tr>
                             <tr>
                                <td>
                                    {{$order->customer->phone}}
                                </td>
                                <td></td>
                                <td></td>
                             </tr>
                        </tbody>
                    </table>
               </tr>
               <tr>
                    <table class="inner-table">
                        <thead>
                            <th>
                                <tr>
                                    <th colspan="6">
                                        Services
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Item / Details
                                    </th>
                                    <th>
                                        Code
                                    </th>
                                    <th>
                                        Color
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Qty
                                    </th>
                                    <th>
                                        Amount
                                    </th>
                                </tr>
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($order->services as $service)
                            <tr>
                                <td class="data-center">
                                    {{ $service->name }}
                                </td>
                                <td class="data-center">
                                    {{ $service->code }}
                                </td>
                                <td class="data-center">
                                    {{ $service->color }}

                                </td>
                                <td class="data-center">
                                    {{ $service->price }}

                                </td>
                                <td class="data-center">
                                    {{ $service->qty }}
                                </td>
                                <td class="data-center">
                                    {{ $service->amount }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="inner-inner">
                                        <tr>
                                            <td>
                                                L
                                            </td>
                                            <td>
                                                {{ $service->measurement->extra_attributes[0]["L"] }}
                                            </td>
                                            <td>
                                                B
                                            </td>
                                            <td>
                                                {{ $service->measurement->extra_attributes[1]["B"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                H
                                            </td>
                                            <td>
                                                {{ $service->measurement->extra_attributes[2]["H"] }}
                                            </td>
                                            <td>
                                                SI
                                            </td>
                                            <td>
                                                {{ $service->measurement->extra_attributes[3]["SI"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                W
                                            </td>
                                            <td>
                                                {{ $service->measurement->extra_attributes[4]["W"] }}
                                            </td>
                                            <td>
                                                S
                                            </td>
                                            <td>
                                                {{ $service->measurement->extra_attributes[5]["S"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                NI
                                            </td>
                                            <td>
                                                {{ $service->measurement->extra_attributes[6]["NI"] }}
                                            </td>
                                            <td>
                                                AH
                                            </td>
                                            <td>
                                                {{ $service->measurement->extra_attributes[7]["AH"] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                P.B
                                            </td>
                                            <td>
                                                {{ $service->measurement->extra_attributes[8]["P.B"] }}
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align: right;">Total</td>
                                <td class="data-center">{{ $order->total }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                @php
                                    $discount = $order->discount;
                                    $vat = ($order->taxes[0]->rate / 100) * (($order->total) -($order->discount));
                                    $grand_total = $order->total - $order->discount + $vat;
                                @endphp
                                <td style="text-align: right;">{{ $discount }}</td>
                                <td class="data-center">100</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align: right;">VAT</td>
                                <td class="data-center">{{ $vat }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align: right;">Grand Total</td>
                                <td class="data-center">{{ $grand_total }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    Comment/Note: {{ $order->note }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </tr>
        </table>
    </body>
</html>

