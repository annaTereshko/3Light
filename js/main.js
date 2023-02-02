
let products = document.getElementsByClassName("product");
let productTitle = document.getElementsByClassName("product__title");

function test(){

    if(document.getElementById("checkbox").checked){
        for(i=0; i < products.length; i++){
            products[i].style.zIndex = "-1";
            productTitle[i].style.zIndex = "-1";
        }
    }else{
        for(i=0; i < products.length; i++){
            products[i].style.zIndex = "0";
            productTitle[i].style.zIndex = "0";
        }
    }
}

document.querySelector('#checkbox').addEventListener('click', test);