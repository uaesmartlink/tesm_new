<html>
    <head>
        <title>
            Order
        </title>
        <style>
            *{
                text-decoration: none;
            }

            body {
                margin: auto;
                padding-left: 2em;
                padding-right: 2em;
                padding-top:  1em;
                padding-bottom: 1em;
            }
            .styled-table {
                margin: auto;
                padding: 10;
                font-size: 1vw;
                font-family: sans-serif;
                min-width: 80%;
            }
            .inner-table {
                margin: auto;
                padding: 10;
                font-size: 1vw;
                font-family: sans-serif;
                min-width: 80%;

            }
            .inner-inner{
                border: 1px solid gray;
                margin: auto;
                padding: 10;
                font-size: 1vw;
                min-width: 80%;
                font-family: sans-serif;
            }
            .data-center{
                text-align: center;
            }
            .gr{
                /* background-color:rgb(229,231,235); */
            }
            table{
                border-collapse: collapse;
                border-bottom: 0.2em solid black;
            }
            table td{
                border: none;
            }

            .gr td
            {
               border:none;
               /* background-color:rgb(229,231,235); */
            }
            .bold{
                font-weight: 700;
            }

            .trc{
                border-top-right-radius: 5px;
            }
            .tlc{
                border-top-left-radius:  5px;
            }
            .blc{
                border-bottom-left-radius:  5px;
            }
            .brc{
                border-bottom-right-radius:  5px;
            }
            span{
                font-size: 0.8vw;
            }

            /* CSS */
            .button-3 {
                appearance: none;
                background-color: #2ea44f;
                border: 1px solid rgba(27, 31, 35, .15);
                border-radius: 6px;
                box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
                box-sizing: border-box;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
                font-size: 1vw;
                font-weight: 600;
                padding: 6px 16px;
                position: relative;
                text-align: center;
                text-decoration: none;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                vertical-align: middle;
                white-space: nowrap;
            }

            .button-3:focus:not(:focus-visible):not(.focus-visible) {
                box-shadow: none;
                outline: none;
            }

            .button-3:hover {
             background-color: #2c974b;
            }

            .button-3:focus {
                box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
                outline: none;
            }

            .button-3:disabled {
                background-color: #94d3a2;
                border-color: rgba(27, 31, 35, .1);
                color: rgba(255, 255, 255, .8);
                cursor: default;
            }

            .button-3:active {
                background-color: #298e46;
                box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
            }
        </style>
    </head>
    <body>
        <table class="styled-table">
            <tr>
              <table class="inner-table">
                  <tr>
                      <td colspan="2" rowspan="6">
                              <img src="{{ $order->account->logo_path }}" width="50%" >
                      </td>
                      <td>{{ $order->account->name }}</td>

                  </tr>
                  <tr>
                    <td class="bold">
                        {{ $order->account->phone }}
                    </td>
                  </tr>
                  <tr>
                    <td class="bold">
                          {{ $order->account->email }}
                    </td>
                  </tr>
                  <tr>
                    <td class="bold">
                          {{ $order->account->address }}
                    </td>
                  </tr>
                  <tr>
                    <td class="bold">
                          346671
                    </td>
                  </tr>
                  <tr>
                    <td class="bold">
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
                              <tr class="gr">
                                  <th class="tlc  blc">
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
                                  <th class="trc brc">
                                      Amount
                                  </th>
                              </tr>
                          </th>
                      </thead>
                      <tbody>
                          @foreach ($order->services as $service)
                          <tr >
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
                                          <td style="font-weight: 700;">
                                              L
                                          </td>
                                          <td>
                                              {{ $service->measurement->extra_attributes[0]["L"] }}
                                          </td>
                                          <td style="font-weight: 700;">
                                              B
                                          </td>
                                          <td>
                                              {{ $service->measurement->extra_attributes[1]["B"] }}
                                          </td>
                                      </tr>
                                      <tr>
                                          <td style="font-weight: 700;">
                                              H
                                          </td>
                                          <td>
                                              {{ $service->measurement->extra_attributes[2]["H"] }}
                                          </td>
                                          <td style="font-weight: 700;">
                                              SI
                                          </td>
                                          <td>
                                              {{ $service->measurement->extra_attributes[3]["SI"] }}
                                          </td>
                                      </tr>
                                      <tr>
                                          <td style="font-weight: 700;">
                                              W
                                          </td>
                                          <td>
                                              {{ $service->measurement->extra_attributes[4]["W"] }}
                                          </td>
                                          <td style="font-weight: 700;">
                                              S
                                          </td>
                                          <td>
                                              {{ $service->measurement->extra_attributes[5]["S"] }}
                                          </td>
                                      </tr>
                                      <tr>
                                          <td style="font-weight: 700;">
                                              NI
                                          </td>
                                          <td>
                                              {{ $service->measurement->extra_attributes[6]["NI"] }}
                                          </td>
                                          <td style="font-weight: 700;">
                                              AH
                                          </td>
                                          <td>
                                              {{ $service->measurement->extra_attributes[7]["AH"] }}
                                          </td>
                                      </tr>
                                      <tr>
                                          <td style="font-weight: 700;">
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
                          <tr class="gr">
                              <td class="tlc"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td style="text-align: right;">Total</td>
                              <td class="data-center trc">{{ $order->total }}</td>
                          </tr>
                          <tr class="gr">
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              @php
                                  $discount = 0;
                                  $rate = 0.05;
                                  $vat =  $rate * (($order->total) - ($order->discount));
                                  $grand_total = $order->total - $order->discount + 0;
                              @endphp
                              <td style="text-align: right;">Discount</td>
                              <td class="data-center">{{ $discount }}</td>
                          </tr>
                          <tr class="gr">
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td style="text-align: right;">VAT</td>
                              <td class="data-center">{{ $vat }}</td>
                          </tr>
                          <tr class="gr">
                              <td class="blc"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td style="text-align: right;">Grand Total</td>
                              <td class="data-center brc">{{ $grand_total }}</td>
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
       <table>
        <tr>
            <td>
                <td>
                    <div style="margin-left: 5%">
                        <span style="display: block;">
                            1- We are not responsible for any change in design and color and it is not exchanged or returned
                        </span>
                        <span style="display: block;">
                            2- The implementation of the dress or abaya takes the agreed period and can be delayed in the event of circumstances beyond our control.
                        </span>
                        <span style="display: block;">
                            3- 50% down payment for each dress or abaya
                        </span>
                        <span style="display: block;">
                            4- The first payment is non-refundable
                        </span>
                        <span style="display: block;">
                            5- The urgent dress consumes an additional fee
                        </span>
                        <span style="display: block;">
                            6 - Amendments are valid only within two weeks from the date of delivery and are not responsible for any modification after the mentioned period
                        </span>
                        <span style="display: block;">
                            7- The dress will be sold in the event that the customer fails to collect it within two months, and the amount provided will not be returned
                        </span>
                        <span style="display: block;">
                            8- The request is not changed or canceled after the invoice is issued
                        </span>
                        <span style="display: block;">
                            9- We do not have a return or exchange policy
                        </span>
                        <span style="display: block;">
                            10- We are not responsible for any sizes given by the customer, but we make adjustments to them within two weeks from the date of delivery, and the customer bears all shipping and delivery costs
                        </span>
                        <span style="display: block;">
                            11- The rights related to this design are reserved, and it cannot be copied or photographed or trade it
                        </span>
                    </div>
                </td>
                <div dir="rtl" lang="ar" style="margin-right: 5%">
                        <span style="display: block;">
                            1- نحن غير مسؤولين عن اي تغير في التصميم واللون ولا يتم تبديله او ارجاعه
                        </span>
                        <span style="display: block;">
                            2- يستغرق تنفيذ الفستان او العباية المدة المتفق عليها ويمكن التأخير في حال حدوث ظروف خارجة عن ارادتنا
                        </span>
                        <span style="display: block;">
                            3- دفعة مقدمة 50% لكل فستان او عباية
                        </span>
                        <span style="display: block;">
                            4- الدفعة الاولى غير قابلة للرد
                        </span>
                        <span style="display: block;">
                            5- الفستان العاجل يستهلك رسوم اضافية
                        </span>
                        <span style="display: block;">
                            6- التعديلات صالحة فقط في غضون اسبوعين من  تاريخ التسليم وغير مسؤولين عن اي تعديل بعد المدة المذكورة
                        </span>
                        <span style="display: block;">
                            7-سوف يتم بيع الفستان في حال فشل العميل لجمعة خلال شهرين ولا يتم ارجاع المبلغ المقدم
                        </span>
                        <span style="display: block;">
                            8- ليس لدينا سياسة ارجاع او استبدال
                        </span>
                        <span style="display: block;">
                            9- غير مسؤولين عن اي مقاسات يتم اعطاءها من العميل ولكن نقوم بالتعديلات عليها خلال اسبوعين من تاريخ التسليم ويتحمل العميل كافة مصاريف الشحن والتوصيل
                        </span>
                        <span style="display: block;">
                            10- لا يتم تغير الطلب او الالغاء بعد  اصدار الفاتورة
                        </span>

                        <span style="display: block;">
                            11- الحقوق المتعلقة في هذا التصميم محفوظة لا يمكن نسخه او تصويره  او المتاجرة به
                        </span>

                    <span style="font-size: 0.7vw; margin:2em;">
                        بالنقر على الزر أدناه فإنك توافق على الشروط ةالأحكام ويتم بدء العمل بالطلب الخاص بك
                    </span>
                </td>
            </tr>
        </table>
                    @php
                        if (isset($message)) {
                            @endphp
                                <span style="color:green; display: block;">{{ $message }}</span>
                            @php
                        }else {
                            @endphp
                            <form action="{{ route('orders.confirm', [$order,$order->hash]) }}" method="GET">
                                <button type="submit" class="button-3" style="display: inline;">موافق</button>
                            </form>
                            @php
                        }
                    @endphp
                </div>

    </body>
</html>

