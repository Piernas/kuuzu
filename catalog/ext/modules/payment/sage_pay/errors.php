<?php
/**
  * Kuuzu Cart
  *
  * REPLACE_WITH_COPYRIGHT_TEXT
  * REPLACE_WITH_LICENSE_TEXT
  */

  $errors = array('400' => 'The syntax of the request was not understood by the server.',
                  '401' => 'The request needs user authentication.',
                  '403' => 'The server has refused to fulfill the request.',
                  '404' => 'The document/file requested by the client was not found.',
                  '405' => 'The method specified in the Request-Line is not allowed for the specified resource.',
                  '408' => 'The client failed to send a request in the time allowed by the server.',
                  '414' => 'The request was unsuccessful because the URI specified is longer than the server is willing to process.',
                  '500' => 'The request was unsuccessful due to an unexpected condition encountered by the server.',
                  '501' => 'The request was unsuccessful because the server can not support the functionality needed to fulfill the request.',
                  '503' => 'The request was unsuccessful to the server being down or overloaded.',
                  '2000' => 'The Authorisation was Declined by the bank.',
                  '2001' => 'The Authorisation was Rejected by the vendor rule-base.',
                  '2002' => 'The Authorisation timed out.',
                  '2003' => 'An ERROR has occurred on the Protx System.',
                  '2008' => 'The Transaction timed-out.',
                  '2009' => 'The network connection to the bank is currently unavailable.',
                  '2013' => 'The Transaction was cancelled by the customer.',
                  '2015' => 'The server encountered an unexpected condition which prevented it from fulfilling the request.',
                  '3002' => 'The VPSTxId is invalid.',
                  '3003' => 'The Currency is invalid.',
                  '3004' => 'The Amount is invalid.',
                  '3005' => 'The Amount is outside the mininum and maximum limits.',
                  '3006' => 'The fractional part of the Amount is invalid for the specified currency.',
                  '3007' => 'The RelatedSecurityKey format invalid.',
                  '3008' => 'The Vendor or Vendorname format is invalid.',
                  '3009' => 'The VendorTxCode is missing.',
                  '3010' => 'The RelatedVPSTxId is invalid.',
                  '3011' => 'The NotificationURL format is invalid.',
                  '3012' => 'The RelatedVendorTxCode format invalid.',
                  '3013' => 'The Description is missing.',
                  '3014' => 'The TxType or PaymentType is invalid.',
                  '3015' => 'The BillingAddress value is too long.',
                  '3016' => 'The BillingPostCode value is too long.',
                  '3017' => 'The RelatedTxAuthNo format is invalid.',
                  '3018' => 'The GiftAid flag is invalid. If a value is supplied, should contain either 0 or 1.',
                  '3019' => 'The ApplyAVSCV2 flag is invalid. The value, if supplied, should contain either 0, 1, 2 or 3.',
                  '3020' => 'The Apply3DSecure flag is invalid. The value, if supplied, should contain either 0, 1, 2 or 3.',
                  '3021' => 'The Basket format is invalid.',
                  '3022' => 'The CustomerEMail is too long.',
                  '3023' => 'The ContactFax is too long.',
                  '3024' => 'The ContactNumber is too long.',
                  '3025' => 'The DeliveryPostCode is too long.',
                  '3026' => 'The DeliveryAddress is too long.',
                  '3027' => 'The BillingPostCode is too long.',
                  '3028' => 'The BillingAddress is too long.',
                  '3029' => 'The FailureURL is missing.',
                  '3030' => 'The SuccessURL is missing.',
                  '3031' => 'The Amount value is required.',
                  '3032' => 'The Amount format is invalid.',
                  '3033' => 'The RelatedSecurityKey is required.',
                  '3034' => 'The Vendor or VendorName value is required.',
                  '3035' => 'The VendorTxCode format is invalid.',
                  '3036' => 'The Description format is invalid.',
                  '3037' => 'The NotificationURL is too long.',
                  '3038' => 'The RelatedVendorTxCode is required.',
                  '3039' => 'The TxType or PaymentType is missing.',
                  '3040' => 'The RelatedTxAuth number is required.',
                  '3041' => 'The Basket field is too long.',
                  '3042' => 'The CustomerName field is too long.',
                  '3043' => 'The eMailMessage field is too long.',
                  '3044' => 'The VendorEMail is too long.',
                  '3045' => 'The Currency field is missing.',
                  '3046' => 'The VPSTxId field is missing.',
                  '3047' => 'Invalid VPSTxId format.',
                  '3048' => 'The CardNumber length is invalid.',
                  '3049' => 'The StartDate format is invalid.',
                  '3050' => 'The ExpiryDate format is invalid.',
                  '3051' => 'The CardNumber field is required.',
                  '3052' => 'The ExpiryDate field is required.',
                  '3053' => 'The IssueNumber format is invalid.',
                  '3054' => 'The CardType length is invalid.',
                  '3055' => 'The CardType field is required.',
                  '3056' => 'Invalid Amount field format. The Amount value contains a decimal point.',
                  '3057' => 'The CV2 format is invalid.',
                  '3058' => 'The CardHolder field is required.',
                  '3059' => 'The CardHolder value is too long.',
                  '3060' => 'The GiftAid format is invalid.',
                  '3061' => 'The AuthCode format invalid.',
                  '3062' => 'The CardNumber field should only contain numbers. No spaces, hyphens or other characters or separators.',
                  '3063' => 'The 3DStatus value is too long.',
                  '3064' => 'The ECI format is invalid.',
                  '3065' => 'The XID format is invalid.',
                  '3066' => 'The CAVV format is invalid.',
                  '3067' => 'The ClientIPAddress is too long.',
                  '3068' => 'The PaymentSystem invalid.',
                  '3069' => 'The PaymentSystem is not supported on the account.',
                  '3070' => 'The RelatedVPSTxId is required.',
                  '3071' => 'The RelatedVPSTxId format is invalid.',
                  '3072' => 'The TxAuthNo field is missing.',
                  '3073' => 'The TxAuthNo format is invalid.',
                  '3074' => 'The SecurityKey is missing.',
                  '3075' => 'The SecurityKey format is invalid.',
                  '3076' => 'The NotificationURL is required.',
                  '3077' => 'The CustomerName is required.',
                  '3078' => 'The CustomerEMail format is invalid.',
                  '3079' => 'The ClientIPAddress format is invalid. Should not include leading zero\'s, and only include values in the range of 0 to 255.',
                  '3080' => 'The VendorTxCode value is too long.',
                  '3081' => 'The RelatedVendorTxCode value is too long.',
                  '3082' => 'The Description value is too long.',
                  '3083' => 'The RelatedTxAuthNo value is too long.',
                  '3084' => 'The FailureURL value is too long.',
                  '3085' => 'The FailureURL format is invalid.',
                  '3086' => 'The SuccessURL value is too long.',
                  '3087' => 'The SuccessURL format is invalid.',
                  '3088' => 'The VendorEMail format is invalid.',
                  '3089' => 'The BillingAddress is required.',
                  '3090' => 'The BillingPostCode is required.',
                  '3091' => 'The BillingAddress and BillingPostCode are required.',
                  '3092' => 'The DeliveryAddress and DeliveryPostcode are required.',
                  '3093' => 'The DeliveryAddress is required.',
                  '3094' => 'The DeliveryPostcode is required.',
                  '3095' => 'The VPSProtocol value is invalid.',
                  '3096' => 'The VPSProtocol value is required.',
                  '3097' => 'The VPSProtocol value is outside the valid range. Should be between 2.00 and 2.22.',
                  '3098' => 'The VPSProtocol value is not supported by the system in use.',
                  '3099' => 'The AccountType is not setup on this account.',
                  '3100' => 'The AccountType value is invalid.',
                  '3101' => 'The PaymentSystem does not support direct refund.',
                  '3102' => 'The ReleaseAmount invalid.',
                  '4000' => 'The VendorName is invalid or the account is not active.',
                  '4001' => 'The VendorTxCode has been used before. All VendorTxCodes should be unique.',
                  '4002' => 'An active transaction with this VendorTxCode has been found but the Amount is different.',
                  '4003' => 'An active transaction with this VendorTxCode has been found but the Currency is different.',
                  '4004' => 'An active transaction with this VendorTxCode has been found but the TxType is different.',
                  '4005' => 'An active transaction with this VendorTxCode has been found but the some data fields are different.',
                  '4006' => 'The TxType requested is not supported on this account.',
                  '4007' => 'The TxType requested is not active on this account.',
                  '4008' => 'The Currency is not supported on this account.',
                  '4009' => 'The Amount is outside the allowed range.',
                  '4020' => 'Information received from an Invalid IP address.',
                  '4021' => 'The Card Range not supported by the system.',
                  '4022' => 'The Card Type selected does not match card number.',
                  '4023' => 'The Card Issue Number length is invalid.',
                  '4024' => 'The Card Issue Number is required.',
                  '4025' => 'The Card Issue Number is invalid.',
                  '4026' => '3D-Authentication failed. This vendor\'s rules require a successful 3D-Authentication.',
                  '4027' => '3D-Authentication failed. Cannot authorise this card.',
                  '4028' => 'The RelatedVPSTxId cannot be found.',
                  '4029' => 'The RelatedVendorTxCode does not match the original transaction.',
                  '4030' => 'The RelatedTxAuthNo does not match the original transaction.',
                  '4031' => 'The RelatedSecurityKey does not match the original transaction.',
                  '4032' => 'The original transaction was carried out by a different Vendor.',
                  '4033' => 'The Currency does not match the original transaction.',
                  '4034' => 'The Transaction has already been Refunded.',
                  '4035' => 'This Refund would exceed the amount of the original transaction.',
                  '4036' => 'The Transaction has already been Voided.',
                  '4037' => 'The Related transaction is not a DEFFERED payment.',
                  '4038' => 'The Transaction has already been Released.',
                  '4039' => 'The Tranaction is not in a DEFERRED state.',
                  '4040' => 'The Transaction has been Aborted.',
                  '4041' => 'The Transaction type does not support the requested operation.',
                  '4042' => 'The VendorTxCode has been used before for another transaction. All VendorTxCodes must be unique.',
                  '4043' => 'The Vendor Rule Bases disallow this card range.',
                  '4044' => 'This Authorise would exceed 115% of the value of the original transaction.',
                  '4045' => 'The Related transaction is not an AUTHENTICATE.',
                  '4046' => '3D-Authentication required. Cannot authorise this card.',
                  '4047' => 'The vendor account is closed.',
                  '4048' => 'The Card Number length is invalid.',
                  '4049' => 'The ReleaseAmount larger the original amount.',
                  '5001' => 'The required service is not available or invalid.',
                  '5002' => 'Invalid request.',
                  '5003' => 'Internal server error.',
                  '5004' => 'The Transaction state is invalid.',
                  '5005' => 'The Vendor configuration is missing or invalid.',
                  '5006' => 'Unable to redirect to Vendor\'s web site. The Vendor failed to provide a RedirectionURL.',
                  '5007' => 'Invalid request. A required parameter is missing.',
                  '5008' => 'Missing Custom vendor template.',
                  '5009' => 'The Encryption password is missing.',
                  '5010' => 'The CardNumber is required.',
                  '5011' => 'The check digit invalid. Card failed the LUHN check. Check the card number and resubmit.',
                  '5012' => 'The CardHolder name is required.',
                  '5013' => 'The card has expired.',
                  '5014' => 'The card expiry date is required.',
                  '5015' => 'Card validation failure.',
                  '5016' => 'The StartDate is in the future. The card is not yet valid.',
                  '5017' => 'The Security Code is required.',
                  '5018' => 'The Security Code length is invalid.',
                  '5019' => 'The Security Code is not a number.',
                  '5020' => 'The Card Address is required.',
                  '5021' => 'The Card Address is too long.',
                  '5022' => 'The Post Code value is required.',
                  '5023' => 'The Post Code value is too long.',
                  '5024' => 'The CardHolder value is too long.',
                  '5025' => 'The number of authorisation attempts exceeds the limit.',
                  '5026' => 'The Card Number is not numeric.',
                  '5027' => 'The Card Start Date is invalid.',
                  '5028' => 'The Card Expiry Date is invalid.',
                  '5029' => '3D-Authentication failed. This vendor\'s rules require a successful 3D-Authentication.',
                  '5030' => 'Unable to decrypt the request message. This might be caused by an incorrect password or invalid encoding.',
                  '5994' => 'The Authorisation process failed, due to an internal server error.',
                  '5995' => 'The AVS/CV2 checks failed.',
                  '5996' => 'The Authorisation process timed-out. The bank did not respond within an acceptable time limit.',
                  '5997' => 'A communication related error occured.',
                  '5998' => 'Duplicate vendor notification attempt.',
                  '5999' => 'The Session is invalid or has expired.',
                  '6000' => 'Data Access Error.');
?>
