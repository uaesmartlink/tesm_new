<html>
    <head>
        <title>
            Order
        </title>
        <meta name="format-detection" content="telephone=no">

        <style>
            *{
                text-decoration: none;
                font-size: 8px;
                font-family: tajawal;
            }

            body {
                margin: auto;
                padding-left: 2em;
                padding-right: 2em;
                padding-top:  2em;
                padding-bottom: 2em;
            }

            /* Style the tab */
            .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            height: 3%;
            }

            /* Style the buttons inside the tab */
            .tab button {
            background-color: inherit;
            position: relative;
            margin: none;
            height: 100%;
            left: 45%;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
            background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
            background-color: #000;
            color:#fff;
            }

            /* Style the tab content */
            .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
            }
            .styled-table {
                margin: auto;
                padding: 10;
                font-family: sans-serif;
                width: 80%;
            }
            .inner-table {
                margin: auto;
                padding: 10;
                font-family: sans-serif;
                min-width: 80%;

            }
            .inner-inner{
                border: 1px solid gray;
                margin: auto;
                padding: 10;
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
            .terms span{
                font-size: 8px;
            }

            .button {
                background-color: black;
                border: #000 1px solid;
                border: none;
                color: white;
                padding: 10px 50px;
                text-align: center;
                border-radius:25px;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button1 {
                background-color: black;
                border: #000 1px solid;
                color: white;
            }

            .button1:hover {
                background-color: #fff;
                color: black;
            }


            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #000;
                color:#fff;
            }

        </style>
    </head>
    <body>
        @if (isset($message))

        {{-- <span style="color:green; font-size: 12px; margin:auto;  position: absolute; left:40%;">{{ $message }}</span> --}}

        <table class="styled-table">
            <tr >
              <table class="inner-table">
                  <tr>
                      <td colspan="2" rowspan="6">
                              <img src="{{ $order->account->logo_path }}" width="30%" >
                      </td>
                      <td style="text-align: right;">{{ $order->account->name }}</td>

                  </tr>
                  <tr >
                    <td class="bold" style="text-align: right;">
                       <p> {{ $order->account->phone }}</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="bold" style="text-align: right;">
                          {{ $order->account->email }}
                    </td>
                  </tr>
                  <tr>
                    <td class="bold" style="text-align: right;">
                          {{ $order->account->address }}
                    </td>
                  </tr>
                  <tr>
                    <td class="bold" style="text-align: right;">
                          346671
                    </td>
                  </tr>
                  <tr>
                    <td class="bold" style="text-align: right;">
                      <p> TRN 100009122100003 </p>
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
                                  <p>{{$order->customer->phone}}</p>
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
      @endif
      @if (!isset($message))
        {{-- <table class="inner-inner" style="border: none;">
            <tbody>
                <tr>
                    <td width="50%">
                        <div  class="terms" style="font-size: 9px;">
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
                    <td width="50%">
                        <div dir="rtl" lang="ar" class="terms" style="font-size: 9px;"  width="50%">
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
                        </div>
                    </td>
                </tr>
            </tbody>
        </table> --}}

        <div class="tab" >
            <center>
                <button class="tablinks active" onclick="openCity(event, 'English')">English</button>
                <button class="tablinks" onclick="openCity(event, 'arabic')">عربي</button>
            </center>
        </div>


<div id="English" class="tabcontent active" style="display:block">

    1- We are not responsible for any change in design and color and it is not exchanged or returned<br>
    2- The implementation of the dress or abaya takes the agreed period and can be delayed in the event of circumstances beyond our control.<br>
    3- 50% down payment for each dress or abaya<br>
    4- The first payment is non-refundable<br>
    5- The urgent dress consumes an additional fee<br>
    6 - Amendments are valid only within two weeks from the date of delivery and are not responsible for any modification after the mentioned period<br>
    7- The dress will be sold in the event that the customer fails to collect it within two months, and the amount provided will not be returned<br>
    8- The request is not changed or canceled after the invoice is issued<br>
    9- We do not have a return or exchange policy<br>
    10- We are not responsible for any sizes given by the customer, but we make adjustments to them within two weeks from the date of delivery, and the customer bears all shipping and delivery costs<br>
    11- The rights related to this design are reserved, and it cannot be copied or photographed or trade it<br>
    <br>
    <form action="{{ route('orders.confirm', [$order,$order->hash]) }}" method="GET">
        <button class="button button1">Agree</button>
    </form>
    </div>


    <div id="arabic" class="tabcontent" dir="rtl">
      1- نحن غير مسؤولين عن اي تغير في التصميم واللون ولا يتم تبديله او ارجاعه<br>
    2- يستغرق تنفيذ الفستان او العباية المدة المتفق عليها ويمكن التأخير في حال حدوث ظروف خارجة عن ارادتنا<br>
    3- دفعة مقدمة 50% لكل فستان او عباية<br>
    4- الدفعة الاولى غير قابلة للرد<br>
    5- الفستان العاجل يستهلك رسوم اضافية<br>
    6- التعديلات صالحة فقط في غضون اسبوعين من تاريخ التسليم وغير مسؤولين عن اي تعديل بعد المدة المذكورة<br>
    7-سوف يتم بيع الفستان في حال فشل العميل لجمعة خلال شهرين ولا يتم ارجاع المبلغ المقدم<br>
    8- ليس لدينا سياسة ارجاع او استبدال<br>
    9- غير مسؤولين عن اي مقاسات يتم اعطاءها من العميل ولكن نقوم بالتعديلات عليها خلال اسبوعين من تاريخ التسليم ويتحمل العميل كافة مصاريف الشحن والتوصيل<br>
    10- لا يتم تغير الطلب او الالغاء بعد اصدار الفاتورة<br>
    11- الحقوق المتعلقة في هذا التصميم محفوظة لا يمكن نسخه او تصويره او المتاجرة به<br>
    <br>
    <form action="{{ route('orders.confirm', [$order,$order->hash]) }}" method="GET">
        <button class="button button1">موافق</button>
    </form>
    <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>


      @endif

    </body>
</html>

