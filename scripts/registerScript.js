// get all inputs


var inputs = document.getElementsByTagName("input");

for(var input of inputs){
    input.onfocus = function (){
        this.style.borderBottom = "4px solid #00f";
    }
    input.onblur = function (){
        this.style.borderBottom = "none";
    }
}
var back = document.getElementsByClassName('back')[0];

back.addEventListener('click',function(){
  window.location.href = "index.html";
});