<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\URL;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderCreated extends Notification implements ShouldQueue
{
    use Queueable;

    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function toMail($notifiable)
    {
        $url = URL::signedRoute('orders.show', ['order' => $this->order->id, 'hash' => $this->order->hash]);
        return (new MailMessage())
            ->subject('New order created')
            ->greeting("Hello {$this->order->customer->name}")
            ->line('A new order has been created. Please click the button below to view your order.')
            ->line('')
            ->line('By clicking on the button below, you agree to the following terms and conditions')
            ->line('1- We are not responsible for any change in design or color and the product will not be exchanged or returned.')
            ->line('2- The production of a dress or abaya takes the agreed period and can be delayed in the event of circumstances beyond our control.')
            ->line('3- 50% advance payment has to be made for each dress or abaya.')
            ->line('4- The advance is non-refundable.')
            ->line('5- A dress made on special request with urgent delivery will be charged an additional fee.')
            ->line('6- Alterations are valid only within two weeks from the date of delivery and we are not responsible for any modification after the mentioned period.')
            ->line('7- The dress will be sold in the event that the customer fails to collect it within two months, and the advanced paid will not be returned')
            ->line('8- The order cannot be modified or cancelled after the invoice is issued.')
            ->line('9-  We do not have a return or exchange policy.')
            ->line('10- We are not responsible for any change in sizes given by the customer during the order, however we do alterations within two weeks from the date of delivery, and the customer needs to bear all shipping and delivery costs.')
            ->line('11- The rights related to this design are reserved, and it cannot be copied, photographed or traded')
            ->line('')
            ->line('بالنقر فوق الزر أدناه ، فإنك توافق على الشروط والأحكام التالية')
            ->line('1- لسنا مسؤولين عن أي تغيير في التصميم أو اللون ولن يتم استبدال المنتج أو إرجاعه.')
            ->line('2- يستغرق إنتاج الفستان أو العباءة المدة المتفق عليها ويمكن أن يتأخر في حالة حدوث ظروف خارجة عن إرادتنا.')
            ->line('3- يتم دفع 50٪ دفعة مقدمة عن كل فستان أو عباية.')
            ->line('4- السلفة غير قابلة للاسترداد.')
            ->line('5- الفستان الذي يتم صنعه بناءً على طلب خاص مع التسليم العاجل سيُفرض عليه رسوم إضافية.')
            ->line('6 - التعديلات صالحة فقط في غضون أسبوعين من تاريخ التسليم ولسنا مسؤولين عن أي تعديل بعد الفترة المذكورة.')
            ->line('7- يباع الفستان في حال تخلف العميل عن تحصيله خلال شهرين ولن يتم إرجاع المقدم المدفوع.')
            ->line('8- لا يمكن تعديل الأمر أو إلغاؤه بعد إصدار الفاتورة.')
            ->line('9- ليس لدينا سياسة الإرجاع أو الاستبدال.')
            ->line('10- لا نتحمل أي مسؤولية عن أي تغيير في الأحجام يقدمه العميل أثناء الطلب ، ولكننا نقوم بإجراء التعديلات في غضون أسبوعين من تاريخ التسليم ، ويحتاج العميل إلى تحمل جميع تكاليف الشحن والتوصيل.')
            ->line('11- الحقوق المتعلقة بهذا التصميم محفوظة ولا يمكن نسخها أو تصويرها أو تداولها.')
            ->action('View Order', $url)
            ->line('Thank you & we would love to do business with you again.');
    }

    public function toVonage($notifiable)
    {
        return (new VonageMessage())
            ->content("Hello {$this->order->customer->name}, A new order (No. {$this->order->id}) has been created.\nThanks, {{config('app.name')}}")->unicode();
    }

    public function via($notifiable)
    {
        return $this->order->account->via();
    }
}
