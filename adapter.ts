class Paypal {
	amount : number;
	constructor(amount : number) {
		this.amount = amount
	}

	send() {
		console.log(this.amount)
	}
}
console.log('asdasd');

interface PaypalInterface {
	pay()
}

class PaymentAdapter implements PaypalInterface {
	paypal : Paypal
	constructor(paypal : Paypal) {
		this.paypal = paypal
	}

	 pay() {
		this.paypal.send()
	}
}

 let b = new PaymentAdapter(new Paypal(789))
 b.pay()