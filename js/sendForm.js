function closePopup(){
    let popupWindow = document.getElementById("popup");

    popupWindow.remove();

}

document.querySelector('#closePopup').addEventListener('click', closePopup);