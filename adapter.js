var Paypal = /** @class */ (function () {
    function Paypal(amount) {
        this.amount = amount;
    }
    Paypal.prototype.send = function () {
        console.log(this.amount);
    };
    return Paypal;
}());
console.log('asdasd');
var PaymentAdapter = /** @class */ (function () {
    function PaymentAdapter(paypal) {
        this.paypal = paypal;
    }
    PaymentAdapter.prototype.pay = function () {
        this.paypal.send();
    };
    return PaymentAdapter;
}());
var b = new PaymentAdapter(new Paypal(789));
b.pay();
