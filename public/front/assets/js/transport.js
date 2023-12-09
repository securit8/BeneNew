var coup_status=false;
document.querySelectorAll(".circle").forEach((btn)=>{
 btn.addEventListener("click",(e)=>{
   let clicked = e.target;
   let parent = clicked.parentElement.getElementsByClassName('quantity')[0];
   let quantity = parent.value;
   let price_input=clicked.parentElement.parentElement.parentElement.querySelectorAll("#kaxeti_price")[0];


   if(clicked.classList.contains('minus')){
     quantity--;

   }
   if(clicked.classList.contains('plus')){
   quantity++;

   }
   if(quantity>5 || quantity<1){
     quantity = 1;
   }
   var totalPrice;
 if(clicked.parentElement.classList.contains('full_day')){

   totalPrice = quantity*Per_Day;
 }
 else{
   totalPrice =quantity*Airport;
 }

 if(coup_status){
   price_input.value= totalPrice*0.95;
 }
 else{
  price_input.value= totalPrice;
}
   parent.value = quantity;


 });
});



function detalebi() {
  var element = document.getElementById("detalebi_div");
  element.classList.toggle("show");
}
function detaleb() {
  var element = document.getElementById("detalebi_di");
  element.classList.toggle("show");
}
function detale() {
  var element = document.getElementById("detalebi_d");
  element.classList.toggle("show");
}

var coupon = document.querySelectorAll('#coupon_input');
coupon.forEach((item) => {
item.addEventListener("keyup",coup);
});

function coup(event){
  var coupon_code =event.target.value;
  var kaxeti_price = document.querySelectorAll('#kaxeti_price');
  if(coupon_code == 'tbc123' || coupon_code == 'vtb123' || coupon_code == 'bog123'){
    coup_status = true;
    kaxeti_price.forEach((element)=>{
    element.value*=0.95;
});
coupon.forEach((element)=>{
  element.disabled = true;
  element.value = coupon_code;
});

}
}
