
function changeZIndex(){

    let products = document.getElementsByClassName("product");
    let productTitle = document.getElementsByClassName("product__title");
    let navigation = document.getElementById("navigation");
    let policyLink = document.getElementById("policy");
    let arrows = document.getElementById("arrows");

    if(document.getElementById("checkbox").checked){
        for(i=0; i < products.length; i++){
            products[i].style.zIndex = "-1";
            productTitle[i].style.zIndex = "-1";
        }
        navigation.style.transform = "none";
        policyLink.style.zIndex = "-1";
        arrows.style.zIndex = "-1";

    }else{
        for(i=0; i < products.length; i++){
            products[i].style.zIndex = "0";
            productTitle[i].style.zIndex = "0";
        }
        navigation.style.transform = "translate(-150%, 0%)";
        policyLink.style.zIndex = "0";
        arrows.style.removeProperty('z-index');
    }
}

function zoomPicture(){
    let zoom =  document.getElementById("bigger");
    let wrapper =  document.getElementById("wrapper");
    let bluredArea = document.querySelector("body:not(#bigger)");
    if(zoom.getAttribute('state') && zoom.getAttribute('state') === 'zoomed'){
        zoom.style.transform = 'none';
        zoom.style.position = "static";
        zoom.setAttribute('state', 'not-zoomed');
        bluredArea.style.filter = "blur(0)";
    }else{
        zoom.style.transform = "scale(2) translate(22.5%,-45%)";
        zoom.style.position = "fixed";
        zoom.setAttribute('state', 'zoomed');
        // bluredArea.style.filter = "blur(5rem)";
/*         wrapper.style.height = "100vh";
        wrapper.style.background = "rgba(0,0,0,.8)";
        wrapper.style.position ="absolute";
        wrapper.style.zIndex ="100"; */
    }

}

document.querySelector('#checkbox').addEventListener('click', changeZIndex);
document.querySelector('#bigger').addEventListener('click', zoomPicture);