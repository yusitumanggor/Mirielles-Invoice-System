const 
productSelect = document.querySelectorAll('.product-select'),
productQty = document.querySelectorAll('.invoice_qty'),
productPrice = document.querySelectorAll('.invoice_price'),
productDiscount = document.querySelectorAll('.invoice_discount'),
productSubtotal = document.querySelectorAll('.invoice_subtotal')
totalPrice = document.getElementById('totalPrice');
let total = 0, total1 = 0, total2 = 0, total3 = 0, total4 = 0, total5 = 0, price = 0;
let currency = new Intl.NumberFormat('in-ID', { style: 'currency', currency: 'IDR' })

let subtotal = (index) => {
	//Calculate Subtotal
    productSubtotal[index].value = productQty[index].value * price;
	
	//Add Discount if Product Price over Rp 500.000
	if (productSubtotal[index].value >= 500000) {
		let discount = productSubtotal[index].value * 0.05;
		productSubtotal[index].value -= discount;
		productDiscount[index].value = "5%";
	} else {
		productDiscount[index].value = "0%";
	}
	switch (index) {
		case 0:
			total1 = Number(productSubtotal[0].value);
			break;
		case 1:
			total2 = Number(productSubtotal[1].value);
			break;
		case 2:
			total3 = Number(productSubtotal[2].value);
			break;
		case 3:
			total4 = Number(productSubtotal[3].value);
			break;
		case 4:
			total5 = Number(productSubtotal[4].value);
			break;
		default:
			break;
	}
	total = total1 + total2 + total3 + total4 + total5;
	productSubtotal[index].value = currency.format(productSubtotal[index].value);
	totalPrice.value = currency.format(total);
}



document.addEventListener('DOMContentLoaded', ()=> {
	productSelect.forEach((input, index) => {
		input.addEventListener('change', (e) => {
			price = e.target.options[e.target.selectedIndex].dataset.price;
			productPrice[index].value = currency.format(price);
			subtotal(index);
		});
	})
	productQty.forEach((input, index) => {
		input.addEventListener('keyup', () => {
			subtotal(index);
		});
	})
})