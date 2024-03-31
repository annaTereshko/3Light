
function changeZIndex(){

    let products = document.getElementsByClassName("product");
    let productTitle = document.getElementsByClassName("product__title");
    let navigation = document.getElementById("navigation");
    let policyLink = document.getElementById("policy");
    let arrows = document.getElementById("arrows");
    let zIndexChange = document.getElementById("zIndexChange");

    if(document.getElementById("checkbox").checked){
        for(i=0; i < products.length; i++){
            products[i].style.zIndex = "-1";
            productTitle[i].style.zIndex = "-1";
        }
        policyLink.style.zIndex = "-1";
        if(arrows){
            arrows.style.zIndex = "-1";
        }
        if(zIndexChange){
            zIndexChange.style.zIndex = "-1";
        }
        navigation.style.transform = "none";

    }else{
        for(i=0; i < products.length; i++){
            products[i].style.zIndex = "0";
            productTitle[i].style.zIndex = "0";
        }
        policyLink.style.zIndex = "0";
        if(arrows){
            arrows.style.removeProperty('z-index');
        }
        if(zIndexChange){
            zIndexChange.style.removeProperty('z-index');
        }
        navigation.style.transform = "translate(-150%, 0%)";   
    }
}

function changeTransform() {
    location.reload();
    document.getElementById("checkbox").checked = false;

}

function zoomPicture(){
    let zoom =  document.getElementById("bigger");
    let overlay =  document.getElementById("overlay");
    let bluredArea = document.querySelector("body:not(#bigger)");
    if(zoom.getAttribute('state') && zoom.getAttribute('state') === 'zoomed'){
        zoom.style.transform = 'none';
        zoom.style.position = "static";
        zoom.setAttribute('state', 'not-zoomed');
        bluredArea.style.filter = "blur(0)";
        location.reload();

    }else{
        zoom.style.transform = "scale(2) translate(22.5%,-80%)";
        zoom.style.position = "fixed";
        zoom.setAttribute('state', 'zoomed');
        overlay.style.display = "block";
        overlay.style.zIndex = "9";
        zoom.style.zIndex = "10";
    }

}
 
let elementExists_anchor = document.getElementById("anchor_index");
let elementExists_product = document.getElementById("bigger");


document.querySelector('#checkbox').addEventListener('click', changeZIndex);
if (typeof(elementExists_anchor) != 'undefined' && elementExists_anchor != null) {
    document.querySelector('#anchor_index').addEventListener('click', changeTransform);
}
if (typeof(elementExists_product) != 'undefined' && elementExists_product != null) {
    document.querySelector('#bigger').addEventListener('click', zoomPicture);
}
