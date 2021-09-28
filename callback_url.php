<?php include "conn.php"; ?>
<?php
  $stkCallbackResponse = file_get_contents('php://input');
  $logFile = "stkPushCallbackResponse.json";
  $log = fopen($logFile, "a");
  fwrite($log, $stkCallbackResponse);
  fclose($log);

  $callbackData=json_decode($callbackJSONData);

  $resultCode=$callbackData->Body->stkCallback->ResultCode;
  $resultDesc=$callbackData->Body->stkCallback->ResultDesc;
  $merchantRequestID=$callbackData->Body->stkCallback->$MerchantRequestID;
  $checkoutRequestID=$callbackData->Body->stkCallback->$CheckoutRequestID;
  $pesa=$callbackData->Body->stkCallback->callbackMetadata->Item[0]->Name;
  $amount=$callbackData->Body->stkCallback->callbackMetadata->Item[0]->Value;
  $mpesaReceiptNumber=$callbackData->Body->stkCallback->callbackMetadata->Item[1]->Value;
  $balance=$callbackData->Body->stkCallback->callbackMetadata->Item[2]->Value;
  $b2CUtilityAccountAvailableFunds=$callbackData->Body->stkCallback->callbackMetadata->Item[3]->Value;
  $transactionDate=$callbackData->Body->stkCallback->callbackMetadata->Item[3]->Value;
  $phoneNumber=$callbackData->Body->stkCallback->callbackMetadata->Item[4]->Value;

  $amount = strval($amount);

  $insert = $conn->query("INSERT INTO `stkpush`(`merchantRequestID`,`checkoutRequestID`,`resultDesc`,`amount`)")
  VALUES ('$merchantRequestID','$checkoutRequestID','$resultDesc','$amount')
  $conn = null;

  echo "
  <script>alert('payment succesful')</script>
  <script>window.location = 'index.php'</script>
  ";