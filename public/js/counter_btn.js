let orderVal = 0; 

function updateOrderValue() {
    const orderElement = document.getElementById('orderValue');
    orderElement.innerText = orderVal;
}

function add() {
    orderVal++;
    updateOrderValue();
}

function minus() {
    if (orderVal > 0) {
        orderVal--;
        updateOrderValue();
    }
}

updateOrderValue();
