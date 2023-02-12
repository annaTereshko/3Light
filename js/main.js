
function changeZIndex(){

    let products = document.getElementsByClassName("product");
    let productTitle = document.getElementsByClassName("product__title");
    let navigation = document.getElementById("navigation");
    let policyLink = document.getElementById("policy");

    if(document.getElementById("checkbox").checked){
        for(i=0; i < products.length; i++){
            products[i].style.zIndex = "-1";
            productTitle[i].style.zIndex = "-1";
        }
        navigation.style.transform = "none";
        policyLink.style.zIndex = "-1";

    }else{
        for(i=0; i < products.length; i++){
            products[i].style.zIndex = "0";
            productTitle[i].style.zIndex = "0";
        }
        navigation.style.transform = "translate(-150%, 0%)";
        policyLink.style.zIndex = "0";
    }
}



document.querySelector('#checkbox').addEventListener('click', changeZIndex);