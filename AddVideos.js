// Get the modal
var modal = document.getElementById("addUserModal");

// Get the button that opens the modal
var btn = document.getElementById("addUser");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal_2 = document.getElementById("addUserModal2");

// Get the button that opens the modal
var btn_2 = document.getElementById("updatePlayer");

// Get the <span> element that closes the modal
var span_2 = document.getElementsByClassName("closeModal")[0];

// When the user clicks the button, open the modal 
btn_2.onclick = function () {
    modal_2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span_2.onclick = function () {
    modal_2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal_2) {
        modal_2.style.display = "none";
    }
}


// Validate modal form
// 
// function validate() {
//     if (document.modalform.userEmail.selectedIndex == "") {
//         alert("Some required fields have no input!");
//         return false;
//     }

//     if (document.modalform.roleID.selectedIndex == "") {
//         alert("Some required fields have no input!");
//         return false;
//     }

//     if (document.modalform.team.selectedIndex == "") {
//         alert("Some required fields have no input!");
//         return false;
//     }

//     if (document.modalform.linemanager.selectedIndex == "") {
//         alert("Some required fields have no input!");
//         return false;
//     }

//     if (document.modalform.username.selectedIndex == "") {
//         alert("Some required fields have no input!");
//         return false;
//     }

//     if (document.modalform.password.selectedIndex == "") {
//         alert("Some required fields have no input!");
//         return false;
//     }
// }