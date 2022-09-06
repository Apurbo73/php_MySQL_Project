document.getElementById("myCartBtn").addEventListener("click", function(){
    console.log("clickeddddd");
    var XiaomiInput = document.getElementById("Xiomi-number").value;
    var xiaomiPrice = XiaomiInput * 11980;

    var IphoneInput = document.getElementById("Iphone-number").value;
    var IphonePrice = IphoneInput * 12000;

    var SamsungNumber = document.getElementById("Samsung-number").value;
    var SamsungPrice = SamsungNumber * 45000;

    var LenovoNumber = document.getElementById("Lenovo-number").value;
    var LenovoPrice = LenovoNumber * 45000;

    var DellNumber = document.getElementById("Dell-number").value;
    var DellPrice = DellNumber * 35500;

    var MacNumber = document.getElementById("Mac-number").value;
    var MacPrice = MacNumber * 220000;

    var SplyNumber = document.getElementById("Sply-number").value;
    var SplyPrice = SplyNumber * 8000;

    var NikeNumber = document.getElementById("Nike-number").value;
    var NikePrice = NikeNumber * 7500;

    var RedNumber = document.getElementById("Red-number").value;
    var RedPrice = RedNumber * 12000;

    var RedBagNumber = document.getElementById("Red-bag-number").value;
    var RedBagPrice = RedBagNumber * 1250;

    var blueBagNumber = document.getElementById("Blue-bag-number").value;
    var blueBagPrice = blueBagNumber * 1250;

    var blackBagNumber = document.getElementById("Black-bag-number").value;
    var blackBagPrice = blackBagNumber * 1250;

    var burgerNumber = document.getElementById("Burger-number").value;
    var burgerPrice = burgerNumber * 350;

    var ComboNumber = document.getElementById("Combo-number").value;
    var ComboPrice = ComboNumber * 650;

    var SaladNumber = document.getElementById("Salad-number").value;
    var SaladPrice = SaladNumber * 650;

    var BluePoloNumber = document.getElementById("Blue-polo-number").value;
    var BluePoloPrice = BluePoloNumber * 550;

    var USPANumber = document.getElementById("USPA-number").value;
    var USPAPrice = USPANumber * 450;

    var BluePolo1Number = document.getElementById("Blue-polo1-number").value;
    var BluePolo1Price = BluePolo1Number * 550;

    var WholeSaleNumber = document.getElementById("Whole-sale-number").value;
    var WholeSalePrice = WholeSaleNumber * 1050;

    var SpiderNumber = document.getElementById("Spider-number").value;
    var SpiderPrice = SpiderNumber * 550;

    var TruckNumber = document.getElementById("Truck-number").value;
    var TruckPrice = TruckNumber * 1550;



    var total = xiaomiPrice + IphonePrice + SamsungPrice + LenovoPrice + DellPrice + MacPrice + SplyPrice + NikePrice + RedPrice + RedBagPrice + blueBagPrice + blackBagPrice + burgerPrice + ComboPrice + SaladPrice + BluePoloPrice + USPAPrice + BluePolo1Price + WholeSalePrice + SpiderPrice + TruckPrice;

    document.getElementById("total-payment").innerText = total + " Taka";
    var totalAmountPortion = document.getElementById("total-payment");
    totalAmountPortion.style.backgroundColor = "yellow";
    
    console.log(IphonePrice);
})

