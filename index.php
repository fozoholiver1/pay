<html>
<body>
<form action="https://wallet.connectyu.com/payment" method="POST">
    <input type="hidden" name="merchant_account" value="dopplereffect1992@gmail.com">
    <input type="hidden" name="item_number" value="2">
    <input type="hidden" name="item_name" value="Chocolates">
    <input type="hidden" name="item_price" value="1">
    <input type="hidden" name="txid" value="4455756766">
    <input type="hidden" name="item_currency" value="XAF">
    <input type="hidden" name="return_success" value="http://localhost/pay/success.php">
    <input type="hidden" name="return_fail" value="http://localhost/pay/fail.php">
    <input type="hidden" name="return_cancel" value="http://localhost/pay//cancel.php">
    <button type="submit">Pay via ConnectWallet</button>
</form>
<hr>

    <form method="POST" action="https://cash.connectyu.com/api/payment/merchant/create" >
        <input type="hidden" name="token" value="4cv0nrMXNJyChx9cVp2OxwhYIfNkpbqw" />
        <input type="hidden" name="public_key" value="PUBLIC-FN8xcrV8HIu5If8EQ6cGaOn46SpxpRyQ" />
        <input type="hidden" name="callback_url" value="http://localhost/cash.php" />
        <input type="hidden" name="reference_code" value="31" />
        <input type="hidden" name="amount" value="5" />
        <input type="hidden" name="email" value="gesudybuz@mailinator.com" />
        <input type="hidden" name="first_name" value="John" />
        <input type="hidden" name="last_name" value="Deo" />
        <input type="hidden" name="title" value="Payment For Products" />
        <input type="hidden" name="description" value="The description of entire payments" />
        <input type="hidden" name="quantity" value="5" />
        <input type="hidden" name="currency" value="XAF" />
        <input type="submit" value="connect cash" />
    </form>
</body>
</html>
