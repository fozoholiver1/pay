<?php
//connectpaye integration sample
$merchant_key = 'BADF5-AA802-C1557-83722-F8866'; // Enter here your merchant API Key
$merchant_account = $_POST['merchant_account'];
$item_number = $_POST['item_number'];
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];
$item_currency = $_POST['item_currency'];
$txid = $_POST['txid']; // Transaction ID
//$payment_time = date('Y-m-d H:i:s'); // Current time of payment
//$payee_account = 'fozoholiver@gmail.com'; // The account of payee
$verification_link ="https://wallet.connectyu.com/payment_status.php?merchant_key=$merchant_key&merchant_account=$merchant_account&txid=$txid";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$verification_link);
$results=curl_exec($ch);
curl_close($ch);
$results = json_decode($results);
if($results->status == "success") {
    echo 'Payment is successful.';
} else {
    echo 'Payment was failed.';
}
?>
