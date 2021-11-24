<?php

use Shetabit\Multipay\Drivers\Asanpardakht\Asanpardakht;
use Shetabit\Multipay\Drivers\Behpardakht\Behpardakht;
use Shetabit\Multipay\Drivers\Digipay\Digipay;
use Shetabit\Multipay\Drivers\Etebarino\Etebarino;
use Shetabit\Multipay\Drivers\Idpay\Idpay;
use Shetabit\Multipay\Drivers\Irankish\Irankish;
use Shetabit\Multipay\Drivers\Local\Local;
use Shetabit\Multipay\Drivers\Nextpay\Nextpay;
use Shetabit\Multipay\Drivers\Parsian\Parsian;
use Shetabit\Multipay\Drivers\Pasargad\Pasargad;
use Shetabit\Multipay\Drivers\Payir\Payir;
use Shetabit\Multipay\Drivers\Paypal\Paypal;
use Shetabit\Multipay\Drivers\Payping\Payping;
use Shetabit\Multipay\Drivers\Paystar\Paystar;
use Shetabit\Multipay\Drivers\Poolam\Poolam;
use Shetabit\Multipay\Drivers\Sadad\Sadad;
use Shetabit\Multipay\Drivers\Saman\Saman;
use Shetabit\Multipay\Drivers\Sepehr\Sepehr;
use Shetabit\Multipay\Drivers\Sepordeh\Sepordeh;
use Shetabit\Multipay\Drivers\Walleta\Walleta;
use Shetabit\Multipay\Drivers\Yekpay\Yekpay;
use Shetabit\Multipay\Drivers\Zarinpal\Zarinpal;
use Shetabit\Multipay\Drivers\Zibal\Zibal;

return [
    /*
    |--------------------------------------------------------------------------
    | Default Driver
    |--------------------------------------------------------------------------
    |
    | This value determines which of the following gateway to use.
    | You can switch to a different driver at runtime.
    |
    */
    'default' => 'zarinpal',

    /*
    |--------------------------------------------------------------------------
    | List of Drivers
    |--------------------------------------------------------------------------
    |
    | These are the list of drivers to use for this package.
    | You can change the name. Then you'll have to change
    | it in the map array too.
    |
    */
    'drivers' => [
        'local' => [
            'callbackUrl' => '/callback',
            'title' => 'درگاه پرداخت تست',
            'description' => 'این درگاه *صرفا* برای تست صحت روند پرداخت و لغو پرداخت میباشد',
            'orderLabel' => 'شماره سفارش',
            'amountLabel' => 'مبلغ قابل پرداخت',
            'payButton' => 'پرداخت موفق',
            'cancelButton' => 'پرداخت ناموفق',
        ],
        'asanpardakht' => [
            'apiPaymentUrl' => 'https://asan.shaparak.ir',
            'apiRestPaymentUrl' => 'https://ipgrest.asanpardakht.ir/v1/',
            'username' => '',
            'password' => '',
            'merchantConfigID' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using asanpardakht',
        ],
        'behpardakht' => [
            'apiPurchaseUrl' => 'https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl',
            'apiPaymentUrl' => 'https://bpm.shaparak.ir/pgwchannel/startpay.mellat',
            'apiVerificationUrl' => 'https://bpm.shaparak.ir/pgwchannel/services/pgw?wsdl',
            'terminalId' => '',
            'username' => '',
            'password' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using behpardakht',
        ],
        'digipay' => [
            'apiOauthUrl' => 'https://api.mydigipay.com/digipay/api/oauth/token',
            'apiPurchaseUrl' => 'https://api.mydigipay.com/digipay/api/businesses/ticket?type=0',
            'apiPaymentUrl' => 'https://api.mydigipay.com/digipay/api/purchases/ipg/pay/',
            'apiVerificationUrl' => 'https://api.mydigipay.com/digipay/api/purchases/verify/',
            'username' => 'username',
            'password' => 'password',
            'client_id' => '',
            'client_secret' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
        ],
        'etebarino' => [
            'apiPurchaseUrl' => 'https://api.etebarino.com/public/merchant/request-payment',
            'apiPaymentUrl' => 'https://panel.etebarino.com/gateway/public/ipg',
            'apiVerificationUrl' => 'https://api.etebarino.com/public/merchant/verify-payment',
            'merchantId' => '',
            'terminalId' => '',
            'username' => '',
            'password' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using etebarino',
        ],
        'idpay' => [
            'apiPurchaseUrl' => 'https://api.idpay.ir/v1.1/payment',
            'apiPaymentUrl' => 'https://idpay.ir/p/ws/',
            'apiSandboxPaymentUrl' => 'https://idpay.ir/p/ws-sandbox/',
            'apiVerificationUrl' => 'https://api.idpay.ir/v1.1/payment/verify',
            'merchantId' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using idpay',
            'sandbox' => false, // set it to true for test environments
        ],
        'irankish' => [
            'apiPurchaseUrl' => 'https://ikc.shaparak.ir/XToken/Tokens.xml',
            'apiPaymentUrl' => 'https://ikc.shaparak.ir/TPayment/Payment/index/',
            'apiVerificationUrl' => 'https://ikc.shaparak.ir/XVerify/Verify.xml',
            'merchantId' => '',
            'sha1Key' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using irankish',
        ],
        'nextpay' => [
            'apiPurchaseUrl' => 'https://api.nextpay.org/gateway/token.http',
            'apiPaymentUrl' => 'https://api.nextpay.org/gateway/payment/',
            'apiVerificationUrl' => 'https://api.nextpay.org/gateway/verify.http',
            'merchantId' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using nextpay',
        ],
        'parsian' => [
            'apiPurchaseUrl' => 'https://pec.shaparak.ir/NewIPGServices/Sale/SaleService.asmx?wsdl',
            'apiPaymentUrl' => 'https://pec.shaparak.ir/NewIPG/',
            'apiVerificationUrl' => 'https://pec.shaparak.ir/NewIPGServices/Confirm/ConfirmService.asmx?wsdl',
            'merchantId' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using parsian',
        ],
        'pasargad' => [
            'apiPaymentUrl' => 'https://pep.shaparak.ir/payment.aspx',
            'apiGetToken' => 'https://pep.shaparak.ir/Api/v1/Payment/GetToken',
            'apiCheckTransactionUrl' => 'https://pep.shaparak.ir/Api/v1/Payment/CheckTransactionResult',
            'apiVerificationUrl' => 'https://pep.shaparak.ir/Api/v1/Payment/VerifyPayment',
            'merchantId' => '',
            'terminalCode' => '',
            'certificate' => '', // can be string (and set certificateType to xml_string) or an xml file path (and set cetificateType to xml_file)
            'certificateType' => 'xml_file', // can be: xml_file, xml_string
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
        ],
        'payir' => [
            'apiPurchaseUrl' => 'https://pay.ir/pg/send',
            'apiPaymentUrl' => 'https://pay.ir/pg/',
            'apiVerificationUrl' => 'https://pay.ir/pg/verify',
            'merchantId' => 'test', // set it to `test` for test environments
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using payir',
        ],
        'paypal' => [
            /* normal api */
            'apiPurchaseUrl' => 'https://www.paypal.com/cgi-bin/webscr',
            'apiPaymentUrl' => 'https://www.zarinpal.com/pg/StartPay/',
            'apiVerificationUrl' => 'https://ir.zarinpal.com/pg/services/WebGate/wsdl',

            /* sandbox api */
            'sandboxApiPurchaseUrl' => 'https://www.sandbox.paypal.com/cgi-bin/webscr',
            'sandboxApiPaymentUrl' => 'https://sandbox.zarinpal.com/pg/StartPay/',
            'sandboxApiVerificationUrl' => 'https://sandbox.zarinpal.com/pg/services/WebGate/wsdl',

            'mode' => 'normal', // can be normal, sandbox
            'currency' => '',
            'id' => '', // Specify the email of the PayPal Business account
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using paypal',
        ],
        'payping' => [
            'apiPurchaseUrl' => 'https://api.payping.ir/v1/pay/',
            'apiPaymentUrl' => 'https://api.payping.ir/v1/pay/gotoipg/',
            'apiVerificationUrl' => 'https://api.payping.ir/v1/pay/verify/',
            'merchantId' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using payping',
        ],
        'paystar' => [
            'apiPurchaseUrl' => 'https://core.paystar.ir/api/pardakht/create/',
            'apiPaymentUrl' => 'https://core.paystar.ir/api/pardakht/payment/',
            'apiVerificationUrl' => 'https://core.paystar.ir/api/pardakht/verify/',
            'gatewayId' => '', // your gateway id
            'signKey' => '', // sign key of your gateway
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using paystar',
        ],
        'poolam' => [
            'apiPurchaseUrl' => 'https://poolam.ir/invoice/request/',
            'apiPaymentUrl' => 'https://poolam.ir/invoice/pay/',
            'apiVerificationUrl' => 'https://poolam.ir/invoice/check/',
            'merchantId' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using poolam',
        ],
        'sadad' => [
            'apiPurchaseUrl' => 'https://sadad.shaparak.ir/vpg/api/v0/Request/PaymentRequest',
            'apiPaymentUrl' => 'https://sadad.shaparak.ir/VPG/Purchase',
            'apiVerificationUrl' => 'https://sadad.shaparak.ir/VPG/api/v0/Advice/Verify',
            'key' => '',
            'merchantId' => '',
            'terminalId' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using sadad',
        ],
        'saman' => [
            'apiPurchaseUrl' => 'https://sep.shaparak.ir/Payments/InitPayment.asmx?WSDL',
            'apiPaymentUrl' => 'https://sep.shaparak.ir/payment.aspx',
            'apiVerificationUrl' => 'https://sep.shaparak.ir/payments/referencepayment.asmx?WSDL',
            'merchantId' => '',
            'callbackUrl' => '',
            'description' => 'payment using saman',
        ],
        'sepehr' => [
            'apiGetToken' => 'https://mabna.shaparak.ir:8081/V1/PeymentApi/GetToken',
            'apiPaymentUrl' => 'https://mabna.shaparak.ir:8080/pay',
            'apiVerificationUrl' => 'https://mabna.shaparak.ir:8081/V1/PeymentApi/Advice',
            'terminalId' => '',
            'callbackUrl' => '',
            'description' => 'payment using sepehr(saderat)',
        ],
        'walleta' => [
            'apiPurchaseUrl' => 'https://cpg.walleta.ir/payment/request.json',
            'apiPaymentUrl' => 'https://cpg.walleta.ir/ticket/',
            'apiVerificationUrl' => 'https://cpg.walleta.ir/payment/verify.json',
            'merchantId' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using walleta',
        ],
        'yekpay' => [
            'apiPurchaseUrl' => 'https://gate.yekpay.com/api/payment/server?wsdl',
            'apiPaymentUrl' => 'https://gate.yekpay.com/api/payment/start/',
            'apiVerificationUrl' => 'https://gate.yekpay.com/api/payment/server?wsdl',
            'fromCurrencyCode' => 978,
            'toCurrencyCode' => 364,
            'merchantId' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using yekpay',
        ],
        'zarinpal' => [
            /* normal api */
            'apiPurchaseUrl' => 'https://api.zarinpal.com/pg/v4/payment/request.json',
            'apiPaymentUrl' => 'https://www.zarinpal.com/pg/StartPay/',
            'apiVerificationUrl' => 'https://api.zarinpal.com/pg/v4/payment/verify.json',

            // for test api in localhost
            /* sandbox api */
            'sandboxApiPurchaseUrl' => 'https://sandbox.zarinpal.com/pg/services/WebGate/wsdl',
            'sandboxApiPaymentUrl' => 'https://sandbox.zarinpal.com/pg/StartPay/',
            'sandboxApiVerificationUrl' => 'https://sandbox.zarinpal.com/pg/services/WebGate/wsdl',

            /* zarinGate api */
            'zaringateApiPurchaseUrl' => 'https://ir.zarinpal.com/pg/services/WebGate/wsdl',
            'zaringateApiPaymentUrl' => 'https://www.zarinpal.com/pg/StartPay/:authority/ZarinGate',
            'zaringateApiVerificationUrl' => 'https://ir.zarinpal.com/pg/services/WebGate/wsdl',

            'mode' => 'sandbox', // can be normal, sandbox, zaringate
            'merchantId' => '123456789abcdefghijkmnopqrstuvwxyzAB',
            'callbackUrl' => 'http://shoppingonline.mytest/orders/payment/callback',
            'description' => 'payment using zarinpal',
        ],
        'zibal' => [
            /* normal api */
            'apiPurchaseUrl' => 'https://gateway.zibal.ir/v1/request',
            'apiPaymentUrl' => 'https://gateway.zibal.ir/start/',
            'apiVerificationUrl' => 'https://gateway.zibal.ir/v1/verify',

            'mode' => 'normal', // can be normal, direct

            'merchantId' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using zibal',
        ],
        'sepordeh' => [
            'apiPurchaseUrl' => 'https://sepordeh.com/merchant/invoices/add',
            'apiPaymentUrl' => 'https://sepordeh.com/merchant/invoices/pay/id:',
            'apiDirectPaymentUrl' => 'https://sepordeh.com/merchant/invoices/pay/automatic:true/id:',
            'apiVerificationUrl' => 'https://sepordeh.com/merchant/invoices/verify',
            'mode' => 'normal', // can be normal, direct
            'merchantId' => '',
            'callbackUrl' => 'http://shoppingonline.mytest/order/payment/callback',
            'description' => 'payment using sepordeh',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Class Maps
    |--------------------------------------------------------------------------
    |
    | This is the array of Classes that maps to Drivers above.
    | You can create your own driver if you like and add the
    | config in the drivers array and the class to use for
    | here with the same name. You will have to extend
    | Shetabit\Multipay\Abstracts\Driver in your driver.
    |
    */
    'map' => [
        'local' => Local::class,
        'asanpardakht' => Asanpardakht::class,
        'behpardakht' => Behpardakht::class,
        'digipay' => Digipay::class,
        'etebarino' => Etebarino::class,
        'idpay' => Idpay::class,
        'irankish' => Irankish::class,
        'nextpay' => Nextpay::class,
        'parsian' => Parsian::class,
        'pasargad' => Pasargad::class,
        'payir' => Payir::class,
        'paypal' => Paypal::class,
        'payping' => Payping::class,
        'paystar' => Paystar::class,
        'poolam' => Poolam::class,
        'sadad' => Sadad::class,
        'saman' => Saman::class,
        'sepehr' => Sepehr::class,
        'walleta' => Walleta::class,
        'yekpay' => Yekpay::class,
        'zarinpal' => Zarinpal::class,
        'zibal' => Zibal::class,
        'sepordeh' => Sepordeh::class
    ]
];
