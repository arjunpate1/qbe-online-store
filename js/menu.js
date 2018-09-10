function openMenu() {
    closeCart();
    // Make Menu Buttons Dissapear
    document.getElementById('hb').style.visibility = "hidden";
    document.getElementById('cart').style.visibility = "hidden";
    
    // Display Mobile Menu 
    document.getElementById('fsm-menu').style.visibility = "visible";
    document.getElementById('fsm-menu').style.opacity = "1";
}

function openCart() {
    closeMenu();
    // Make Menu Buttons Dissapear
    document.getElementById('hb').style.visibility = "hidden";
    document.getElementById('cart').style.visibility = "hidden";
    
    // Display Mobile Menu 
    document.getElementById('fsm-cart').style.visibility = "visible";
    document.getElementById('fsm-cart').style.opacity = "1";
}
function openUser() {
    // Hide Menu
    closeMenu();
    
    // Make Menu Buttons Dissapear
    document.getElementById('hb').style.visibility = "hidden";
    document.getElementById('cart').style.visibility = "hidden";
    
    // Show User Screen
    document.getElementById('fsm-user').style.visibility = "visible";
    document.getElementById('fsm-user').style.opacity = "1";
}

function closeMenu() {
    // Make Menu Button Appear
    document.getElementById('hb').style.visibility = "visible";
    document.getElementById('cart').style.visibility = "visible";
    
    // Hide Mobile Menu
    document.getElementById('fsm-menu').style.opacity = "0";
    setTimeout(function(){ document.getElementById('fsm-menu').style.visibility = "hidden"; }, 490);
}

function closeCart() {
    // Make Menu Button Appear
    document.getElementById('hb').style.visibility = "visible";
    document.getElementById('cart').style.visibility = "visible";
    
    // Hide Mobile Menu
    document.getElementById('fsm-cart').style.opacity = "0";
    setTimeout(function(){ document.getElementById('fsm-cart').style.visibility = "hidden"; }, 490);
}

function closeUser() {
    // Make Menu Button Appear
    document.getElementById('hb').style.visibility = "visible";
    document.getElementById('cart').style.visibility = "visible";
    
    // Close User Menu
    document.getElementById('fsm-user').style.opacity = "0";
    setTimeout(function(){ document.getElementById('fsm-user').style.visibility = "hidden"; }, 490);
    
    // Open Menu
    openMenu();
}

var dcopen = false;
var upopen = false;

function deskCartToggle() {
    
    if (dcopen == false) {
        // Change Color
        document.getElementById('odc').style.color = "#0fba90";
        
        // Open Cart
        document.getElementById('hsm-cart').style.visibility = "visible";
        document.getElementById('hsm-cart').style.opacity = "1";
        
        dcopen = true;
    }
    else {
        // Change Color
        document.getElementById('odc').style.color = "#fff";
        
        // Close Cart
        document.getElementById('hsm-cart').style.opacity = "0";
        setTimeout(function(){ document.getElementById('hsm-cart').style.visibility = "hidden"; }, 490);
        
        dcopen = false;
    }
}

function userProfileToggle() {

    
    if (upopen == false) {
        // Change Color
        document.getElementById('odp').style.color = "#0fba90";
        
        // Open Cart
        document.getElementById('hsm-profile').style.visibility = "visible";
        document.getElementById('hsm-profile').style.opacity = "1";
        
        upopen = true;
    }
    else {
        // Change Color
        document.getElementById('odp').style.color = "#fff";
        
        // Close Cart
        document.getElementById('hsm-profile').style.opacity = "0";
        setTimeout(function(){ document.getElementById('hsm-profile').style.visibility = "hidden"; }, 490);
        
        upopen = false;
    }
}

function toggleDeskCart() {
    if (upopen == true) {
        userProfileToggle();
        deskCartToggle();
    }
    else {
        deskCartToggle();
    }
}

function toggleUserProfile() {
    if (dcopen == true) {
        deskCartToggle();
        userProfileToggle();
    }
    else {
        userProfileToggle();
    }
}

function closePanel() {
    if (upopen == true) {
        userProfileToggle();
    }
    if (dcopen == true) {
        deskCartToggle();
    }
}

function alertSample() {
    alert('This is only a sample product and will not be added to the cart.');
}
