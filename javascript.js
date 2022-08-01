//smart phone 

//Xiomi adding
document.getElementById('Xiomi-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Xiomi-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;


	// Updating amount of Xiomi in Shopping Cart while adding to cart
	var AmountOfXiomi = document.getElementById('xiomi-amount');
	AmountOfXiomi.innerText = parseInt(caseNumber) + 1;



	// Updating amount of Xiomi Bill in Shopping Cart after adding

	var bill = document.getElementById('xiomi-bill');
	bill.innerText = (parseInt(caseNumber) + 1) * 11980;
	document.getElementById('Xiomi-body').style.color = "#FFA500";
    
	;

});


//Xiomi removing

document.getElementById('Xiomi-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Xiomi-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}


	// Updating amount of Xiomi in Shopping Cart while Removing from cart
	var AmountOfXiomi = document.getElementById('xiomi-amount');
	if (caseNumber > 0) {
		AmountOfXiomi.innerText = parseInt(caseNumber) - 1;

	}



	// চেক করছি যে কার্ট থেকে রিমুভ করার পর এমাউন্ট ০ হয়ে যায় কি না। 
	//যদি হয় তাহলে তো কোনো প্রডাক্ট ই নাই সো প্রোডাক্ট নেম টা নাথিং ইন ইউর কার্ট করে দিসি। বাংলা ইস কুল। 



	// Updating amount of Xiomi Bill in Shopping Cart 

	var XiomiBill = document.getElementById('xiomi-bill');

	if (caseNumber > 0) {
		XiomiBill.innerText = (parseInt(caseNumber) - 1) * 11980;

	}

	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Xiomi-body').style.color = "black";

	}

});


//Iphone Adding

document.getElementById('Iphone-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Iphone-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;



	// Updating amount of Iphone in Shopping Cart while adding to cart
	var AmountOfIphone = document.getElementById('Iphone-amount');
	AmountOfIphone.innerText = parseInt(caseNumber) + 1;


	// Updating  Iphone's Bill in Shopping Cart after adding

	var IphoneBill = document.getElementById('iphone-bill');
	IphoneBill.innerText = (parseInt(caseNumber) + 1) * 120000;
	document.getElementById('Iphone-body').style.color = "blue";

});




//Iphone removing

document.getElementById('Iphone-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Iphone-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of Iphone in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfIphone = document.getElementById('Iphone-amount');
		AmountOfIphone.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Iphone's Bill in Shopping Cart while removing

	var IphoneBill = document.getElementById('iphone-bill');

	if (caseNumber > 0) {
		IphoneBill.innerText = (parseInt(caseNumber) - 1) * 120000;

	}

	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Iphone-body').style.color = "black";

	}



});




//Samsung Adding

document.getElementById('Samsung-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Samsung-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;


	// Updating amount of Samsung in Shopping Cart while adding to cart
	var AmountOfSamsung = document.getElementById('Samsung-amount');
	AmountOfSamsung.innerText = parseInt(caseNumber) + 1;



	// Updating  Samsung's Bill in Shopping Cart after adding

	var SamsungBill = document.getElementById('Samsung-bill');
	SamsungBill.innerText = (parseInt(caseNumber) + 1) * 45000;

	document.getElementById('Samsung-body').style.color = "#A52A2A";


});

//Samsung removing

document.getElementById('Samsung-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Samsung-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}


	// Updating amount of Samsung in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfSamsung = document.getElementById('Samsung-amount');
		AmountOfSamsung.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Iphone's Bill in Shopping Cart while removing

	var SamsungBill = document.getElementById('iphone-bill');

	if (caseNumber > 0) {
		SamsungBill.innerText = (parseInt(caseNumber) - 1) * 12000;


	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Samsung-body').style.color = "black";

	}

});




//Laptops

//Lenovo Adding

document.getElementById('Lenovo-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Lenovo-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Lenovo in Shopping Cart while adding to cart
	var AmountOfLenovo = document.getElementById('Lenovo-amount');
	AmountOfLenovo.innerText = parseInt(caseNumber) + 1;


	// Updating  Lenovo's Bill in Shopping Cart after adding

	var LenovoBill = document.getElementById('Lenovo-bill');
	LenovoBill.innerText = (parseInt(caseNumber) + 1) * 45000;
	document.getElementById('Lenovo-body').style.color = "#800080";


});

//Lenovo removing

document.getElementById('Lenovo-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Lenovo-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}



	// Updating amount of Lenovo in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfLenovo = document.getElementById('Lenovo-amount');
		AmountOfLenovo.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Lenovo's Bill in Shopping Cart while removing

	var LenovoBill = document.getElementById('Lenovo-bill');

	if (caseNumber > 0) {
		LenovoBill.innerText = (parseInt(caseNumber) - 1) * 45000;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Lenovo-body').style.color = "black";

	}
});



//Dell adding

document.getElementById('Dell-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Dell-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;


	// Updating amount of Dell in Shopping Cart while adding to cart
	var AmountOfDell = document.getElementById('Dell-amount');
	AmountOfDell.innerText = parseInt(caseNumber) + 1;


	// Updating  Dell's Bill in Shopping Cart after adding

	var DellBill = document.getElementById('Dell-bill');
	DellBill.innerText = (parseInt(caseNumber) + 1) * 35500;

	document.getElementById('Dell-body').style.color = "#00008B";


});


//Dell removing

document.getElementById('Dell-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Dell-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of Dell in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfDell = document.getElementById('Dell-amount');
		AmountOfDell.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Dell's Bill in Shopping Cart while removing

	var DellBill = document.getElementById('Dell-bill');

	if (caseNumber > 0) {
		DellBill.innerText = (parseInt(caseNumber) - 1) * 35500;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Dell-body').style.color = "black";

	}
});



// Mac adding

document.getElementById('Mac-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Mac-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Mac in Shopping Cart while adding to cart
	var AmountOfMac = document.getElementById('Mac-amount');
	AmountOfMac.innerText = parseInt(caseNumber) + 1;


	// Updating  Mac's Bill in Shopping Cart after adding

	var MacBill = document.getElementById('Mac-bill');
	MacBill.innerText = (parseInt(caseNumber) + 1) * 220000;

	document.getElementById('Mac-body').style.color = "#00008B";


});

//Mac removing

document.getElementById('Mac-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Mac-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}
	// Updating amount of Mac in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfMac = document.getElementById('Mac-amount');
		AmountOfMac.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Mac's Bill in Shopping Cart while removing

	var MacBill = document.getElementById('Mac-bill');

	if (caseNumber > 0) {
		MacBill.innerText = (parseInt(caseNumber) - 1) * 220000;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Mac-body').style.color = "black";

	}

});



//Shoes corner

//Sply adding

document.getElementById('Sply-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Sply-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Sply in Shopping Cart while adding to cart
	var AmountOfSply = document.getElementById('Sply-amount');
	AmountOfSply.innerText = parseInt(caseNumber) + 1;


	// Updating  Sply's Bill in Shopping Cart after adding

	var SplyBill = document.getElementById('Sply-bill');
	SplyBill.innerText = (parseInt(caseNumber) + 1) * 8000;
	document.getElementById('Sply-body').style.color = "#FF0000";


});

//Sply removing

document.getElementById('Sply-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Sply-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of Sply in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfSply = document.getElementById('Sply-amount');
		AmountOfSply.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Sply's Bill in Shopping Cart while removing

	var SplyBill = document.getElementById('Sply-bill');

	if (caseNumber > 0) {
		SplyBill.innerText = (parseInt(caseNumber) - 1) * 8000;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Sply-body').style.color = "black";

	}
});


// Nike adding


document.getElementById('Nike-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Nike-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Nike in Shopping Cart while adding to cart
	var AmountOfNike = document.getElementById('Nike-amount');
	AmountOfNike.innerText = parseInt(caseNumber) + 1;


	// Updating  Nike's Bill in Shopping Cart after adding

	var NikeBill = document.getElementById('Nike-bill');
	NikeBill.innerText = (parseInt(caseNumber) + 1) * 7500;

	document.getElementById('Nike-body').style.color = "green";


})

//Nike removing

document.getElementById('Nike-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Nike-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of Nike in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfNike = document.getElementById('Nike-amount');
		AmountOfNike.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Nike's Bill in Shopping Cart while removing

	var NikeBill = document.getElementById('Nike-bill');

	if (caseNumber > 0) {
		NikeBill.innerText = (parseInt(caseNumber) - 1) * 7500;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Nike-body').style.color = "black";

	}
});




//Red-Airmax Adding

document.getElementById('Red-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Red-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Red-Airmax in Shopping Cart while adding to cart
	var AmountOfRedAirmax = document.getElementById('Red-Airmax-amount');
	AmountOfRedAirmax.innerText = parseInt(caseNumber) + 1;


	// Updating  Red-Airmax's Bill in Shopping Cart after adding

	var RedAirmaxBill = document.getElementById('Red-Airmax-bill');
	RedAirmaxBill.innerText = (parseInt(caseNumber) + 1) * 12000;
	document.getElementById('Airmax-body').style.color = "blue";

})
//Red-Airmax removing

document.getElementById('Red-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Red-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}
	// Updating amount of Red-Airmax in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfRedAirmax = document.getElementById('Red-Airmax-amount');
		AmountOfRedAirmax.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Red-Airmax's Bill in Shopping Cart while removing

	var RedAirmaxBill = document.getElementById('Red-Airmax-bill');

	if (caseNumber > 0) {
		RedAirmaxBill.innerText = (parseInt(caseNumber) - 1) * 12000;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Airmax-body').style.color = "black";

	}
});


//Bags corner

//Red-bag Adding
document.getElementById('Red-bag-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Red-bag-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Red-bag in Shopping Cart while adding to cart
	var AmountOfRedBag = document.getElementById('Red-bag-amount');
	AmountOfRedBag.innerText = parseInt(caseNumber) + 1;


	// Updating  Red-bag's Bill in Shopping Cart after adding

	var RedBagBill = document.getElementById('Red-bag-bill');
	RedBagBill.innerText = (parseInt(caseNumber) + 1) * 1250;
	document.getElementById('Simple-red-bag-body').style.color = "magenta";



});

//Red-bag removing

document.getElementById('Red-bag-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Red-bag-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of Red-bag in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfRedBag = document.getElementById('Red-bag-amount');
		AmountOfRedBag.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Red-bag's Bill in Shopping Cart while removing

	var RedBagBill = document.getElementById('Red-bag-bill');

	if (caseNumber > 0) {
		RedBagBill.innerText = (parseInt(caseNumber) - 1) * 1250;
	}

	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Simple-red-bag-body').style.color = "black";

	}
});



// Blue-bag Adding
document.getElementById('Blue-bag-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Blue-bag-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Blue-bag in Shopping Cart while adding to cart
	var AmountOfBlueBag = document.getElementById('Blue-bag-amount');
	AmountOfBlueBag.innerText = parseInt(caseNumber) + 1;


	// Updating  Red-bag's Bill in Shopping Cart after adding

	var BlueBagBill = document.getElementById('Blue-bag-bill');
	BlueBagBill.innerText = (parseInt(caseNumber) + 1) * 1250;

	document.getElementById('Blue-bag-body').style.color = "blue";


});

//Blue-bag removing

document.getElementById('Blue-bag-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Blue-bag-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of Blue-bag in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfBlueBag = document.getElementById('Blue-bag-amount');
		AmountOfBlueBag.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Blue-bag's Bill in Shopping Cart while removing

	var BlueBagBill = document.getElementById('Blue-bag-bill');

	if (caseNumber > 0) {
		BlueBagBill.innerText = (parseInt(caseNumber) - 1) * 1250;
	}

	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Blue-bag-body').style.color = "black";

	}

});



// Black bag Adding
document.getElementById('Black-bag-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Black-bag-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;


	// Updating amount of Black-bag in Shopping Cart while adding to cart
	var AmountOfBlackBag = document.getElementById('Black-amount');
	AmountOfBlackBag.innerText = parseInt(caseNumber) + 1;


	// Updating  Black-bag's Bill in Shopping Cart after adding

	var BlackBagBill = document.getElementById('Black-bill');
	BlackBagBill.innerText = (parseInt(caseNumber) + 1) * 1250;

	document.getElementById('black-bag-body').style.color = "green";

});

//Black bag removing

document.getElementById('Black-bag-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Black-bag-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of Blue-bag in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfBlackBag = document.getElementById('Black-amount');
		AmountOfBlackBag.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Blue-bag's Bill in Shopping Cart while removing

	var BlackBagBill = document.getElementById('Black-bill');

	if (caseNumber > 0) {
		BlackBagBill.innerText = (parseInt(caseNumber) - 1) * 1250;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('black-bag-body').style.color = "black";

	}


});



//Foods corner
// Burger Adding
document.getElementById('Burger-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Burger-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Burger in Shopping Cart while adding to cart
	var AmountOfBurger = document.getElementById('Burger-amount');
	AmountOfBurger.innerText = parseInt(caseNumber) + 1;


	// Updating  Burger's Bill in Shopping Cart after adding

	var BurgerBill = document.getElementById('Burger-bill');
	BurgerBill.innerText = (parseInt(caseNumber) + 1) * 350;

	document.getElementById('Burger-body').style.color = "orange";


});


//Burger removing

document.getElementById('Burger-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Burger-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}
	// Updating amount of Burger in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfBurger = document.getElementById('Burger-amount');
		AmountOfBurger.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Burger's Bill in Shopping Cart while removing

	var BurgerBill = document.getElementById('Burger-bill');

	if (caseNumber > 0) {
		BurgerBill.innerText = (parseInt(caseNumber) - 1) * 350;
	}

	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Burger-body').style.color = "black";

	}

});


//Combo adding
document.getElementById('Combo-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Combo-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Combo in Shopping Cart while adding to cart
	var AmountOfCombo = document.getElementById('Combo-amount');
	AmountOfCombo.innerText = parseInt(caseNumber) + 1;


	// Updating  Combo's Bill in Shopping Cart after adding

	var ComboBill = document.getElementById('Combo-bill');
	ComboBill.innerText = (parseInt(caseNumber) + 1) * 650;
	document.getElementById('Combo-body').style.color = "#800080";


});

//combo removing

document.getElementById('Combo-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Combo-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}


	// Updating amount of combo in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfCombo = document.getElementById('Combo-amount');
		AmountOfCombo.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of combo's Bill in Shopping Cart while removing

	var ComboBill = document.getElementById('Combo-bill');

	if (caseNumber > 0) {
		ComboBill.innerText = (parseInt(caseNumber) - 1) * 650;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Combo-body').style.color = "black";

	}


});





//Salad Adding
document.getElementById('Salad-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Salad-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Salad in Shopping Cart while adding to cart
	var AmountOfSalad = document.getElementById('Salad-amount');
	AmountOfSalad.innerText = parseInt(caseNumber) + 1;


	// Updating  Salad's Bill in Shopping Cart after adding

	var SaladBill = document.getElementById('Salad-bill');
	SaladBill.innerText = (parseInt(caseNumber) + 1) * 650;
	document.getElementById('Fresh-salad-body').style.color = "magenta";


});

//Salad removing

document.getElementById('Salad-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Salad-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}
	// Updating amount of Salad in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfSalad = document.getElementById('Salad-amount');
		AmountOfSalad.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Salad's Bill in Shopping Cart while removing

	var SaladBill = document.getElementById('Salad-bill');

	if (caseNumber > 0) {
		SaladBill.innerText = (parseInt(caseNumber) - 1) * 650;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('Fresh-salad-body').style.color = "black";

	}

}

);



// Cloth section


//BluePolo Adding
document.getElementById('Blue-polo-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Blue-polo-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of BluePolo in Shopping Cart while adding to cart
	var AmountOfBluePolo = document.getElementById('Blue-polo-amount');
	AmountOfBluePolo.innerText = parseInt(caseNumber) + 1;


	// Updating  BluePolo's Bill in Shopping Cart after adding

	var BluePoloBill = document.getElementById('Blue-polo-bill');
	BluePoloBill.innerText = (parseInt(caseNumber) + 1) * 450;
	document.getElementById('polo-original-body').style.color = "#800000";


});


//Blue polo removing

document.getElementById('Blue-polo-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Blue-polo-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}
	// Updating amount of Blue polo in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfBluePolo = document.getElementById('Blue-polo-amount');
		AmountOfBluePolo.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Blue polo's Bill in Shopping Cart while removing

	var BluePoloBill = document.getElementById('Blue-polo-bill');

	if (caseNumber > 0) {
		BluePoloBill.innerText = (parseInt(caseNumber) - 1) * 550;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('polo-original-body').style.color = "black";

	}

}



);



//USPA Adding
document.getElementById('USPA-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('USPA-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of USPA in Shopping Cart while adding to cart
	var AmountOfUSPA = document.getElementById('USPA-amount');
	AmountOfUSPA.innerText = parseInt(caseNumber) + 1;


	// Updating  USPA's Bill in Shopping Cart after adding

	var USPABill = document.getElementById('USPA-bill');
	USPABill.innerText = (parseInt(caseNumber) + 1) * 450;
	document.getElementById('USPA-body').style.color = "blue";


}

);

//USPA removing

document.getElementById('USPA-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('USPA-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of USPA in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfUSPA = document.getElementById('USPA-amount');
		AmountOfUSPA.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of USPA's Bill in Shopping Cart while removing

	var USPABill = document.getElementById('USPA-bill');

	if (caseNumber > 0) {
		USPABill.innerText = (parseInt(caseNumber) - 1) * 450;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	if (ChangingCartColorVariable == 0) {
		document.getElementById('USPA-body').style.color = "black";

	}
}


);




//Blue-polo-new Adding
document.getElementById('Blue-polo1-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Blue-polo1-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Blue-polo-new in Shopping Cart while adding to cart
	var AmountOfBluePoloNew = document.getElementById('Blue-polo-new-amount');
	AmountOfBluePoloNew.innerText = parseInt(caseNumber) + 1;


	// Updating  Blue-polo-new's Bill in Shopping Cart after adding

	var BluePoloNewBill = document.getElementById('Blue-polo-new-bill');
	BluePoloNewBill.innerText = (parseInt(caseNumber) + 1) * 450;

	document.getElementById('Blue-polo-new-body').style.color = "green";


});


//Blue-polo New removing
document.getElementById('Blue-polo1-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Blue-polo1-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of Blue-polo New in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfBluePoloNew = document.getElementById('Blue-polo-new-amount');
		AmountOfBluePoloNew.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Blue-polo New's Bill in Shopping Cart while removing

	var BluePoloNewBill = document.getElementById('Blue-polo-new-bill');

	if (caseNumber > 0) {
		BluePoloNewBill.innerText = (parseInt(caseNumber) - 1) * 450;
	}
	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	console.log(ChangingCartColorVariable);
	if (ChangingCartColorVariable == 0) {
		document.getElementById('Blue-polo-new-body').style.color = "black";

	}
}


);

// Toys corner


// WholeSale Adding

document.getElementById('Whole-sale-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Whole-sale-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Whole sale in Shopping Cart while adding to cart
	var AmountOfWholeSale = document.getElementById('Whole-sale-amount');
	AmountOfWholeSale.innerText = parseInt(caseNumber) + 1;


	// Updating  Whole sale's Bill in Shopping Cart after adding

	var WholeSaleBill = document.getElementById('Whole-sale-bill');
	WholeSaleBill.innerText = (parseInt(caseNumber) + 1) * 1050;

	document.getElementById('Whole-sale-body').style.color = "magenta";


});


//Whole sale removing
document.getElementById('Whole-sale-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Whole-sale-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of Whole sale New in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfWholeSale = document.getElementById('Whole-sale-amount');
		AmountOfWholeSale.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Whole sale New's Bill in Shopping Cart while removing

	var WholeSaleBill = document.getElementById('Whole-sale-bill');

	if (caseNumber > 0) {
		WholeSaleBill.innerText = (parseInt(caseNumber) - 1) * 1050;
	}

	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	console.log(ChangingCartColorVariable);
	if (ChangingCartColorVariable == 0) {
		document.getElementById('Whole-sale-body').style.color = "black";

	}

});



// Spider Man Adding

document.getElementById('Spider-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Spider-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Spider in Shopping Cart while adding to cart
	var AmountOfSpider = document.getElementById('Spider-amount');
	AmountOfSpider.innerText = parseInt(caseNumber) + 1;


	// Updating  Spider's Bill in Shopping Cart after adding

	var SpiderBill = document.getElementById('Spider-bill');
	SpiderBill.innerText = (parseInt(caseNumber) + 1) * 550;


	document.getElementById('Spider-body').style.color = "green";




});

//Spider man removing
document.getElementById('Spider-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Spider-number');
	var caseNumber = caseInput.value;
	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;

	}

	// Updating amount of Spider in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfSpider = document.getElementById('Spider-amount');
		AmountOfSpider.innerText = parseInt(caseNumber) - 1;

	}

	// Updating amount of Spider's Bill in Shopping Cart while removing

	var SpiderBill = document.getElementById('Spider-bill');

	if (caseNumber > 0) {
		SpiderBill.innerText = (parseInt(caseNumber) - 1) * 550;
	}

	// changing color of cart if input is 0 after removing
	var ChangingCartColorVariable = caseInput.value;

	console.log(ChangingCartColorVariable);
	if (ChangingCartColorVariable == 0) {
		document.getElementById('Spider-body').style.color = "black";

	}

});



//Truck Adding
document.getElementById('Truck-plus').addEventListener('click', function () {
	var caseInput = document.getElementById('Truck-number');
	var caseNumber = caseInput.value;
	caseInput.value = parseInt(caseNumber) + 1;

	// Updating amount of Truck in Shopping Cart while adding to cart
	var AmountOfTruck = document.getElementById('Truck-amount');
	AmountOfTruck.innerText = parseInt(caseNumber) + 1;


	document.getElementById('Truck-body').style.color = "blue";

	// Updating  Truck's Bill in Shopping Cart after adding

	var TruckBill = document.getElementById('Truck-bill');
	TruckBill.innerText = (parseInt(caseNumber) + 1) * 1550;




	// var TotalTruckBill = (parseInt(caseNumber) + 1) *1550;
	// var TotalPayment =TotalTruckBill;

	// var UpdateTotalPayment = document.getElementById('total-payment');
	// UpdateTotalPayment.innerText= TotalPayment;

});

//Truck removing
document.getElementById('Truck-minus').addEventListener('click', function () {
	var caseInput = document.getElementById('Truck-number');
	var caseNumber = caseInput.value;

	if (caseNumber > 0) {
		caseInput.value = parseInt(caseNumber) - 1;
		// document.getElementById('Truck-body').style.color = "blue";

	}


	// Updating amount of Truck in Shopping Cart while Removing from cart
	if (caseNumber > 0) {
		var AmountOfTruck = document.getElementById('Truck-amount');
		AmountOfTruck.innerText = parseInt(caseNumber) - 1;

	}


	var ChangingCartColorVariable = caseInput.value;

	// console.log(ChangingCartColorVariable);
	if (ChangingCartColorVariable == 0) {
		document.getElementById('Truck-body').style.color = "black";

	}
	// Updating amount of Truck's Bill in Shopping Cart while removing

	var TruckBill = document.getElementById('Truck-bill');

	if (caseNumber > 0) {
		TruckBill.innerText = (parseInt(caseNumber) - 1) * 1550;

	}
});

// var TotalPayment =TotalTruckBill;

// var UpdateTotalPayment = document.getElementById('total-payment');
// UpdateTotalPayment.innerText= TotalPayment;