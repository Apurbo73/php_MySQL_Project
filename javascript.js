//smart phone 

document.getElementById('Xiomi-plus').addEventListener('click',function(){
var caseInput= document.getElementById('Xiomi-number');
var caseNumber= caseInput.value;
caseInput.value=parseInt(caseNumber)+1;
console.log(caseInput);
})
