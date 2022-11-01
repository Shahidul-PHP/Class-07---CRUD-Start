// class 06 JS code 

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

function showPass() {
    let pass = document.getElementById('pass')
    if (pass.type == 'password') {
        pass.type = 'text';
    } else {
        pass.type = 'password';
    }
}

function ptwo() {
    let passtwo = document.getElementById('two')
    if (passtwo.type == 'password') {
        passtwo.type = 'text';
    } else {
        passtwo.type = 'password';
    }
}


// class 07 JS Code




