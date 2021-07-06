/******/ (() => {
    // webpackBootstrap
    /******/ "use strict";
    /******/
    /******/
    /******/
})();

let i = 0; //Start point
let images = [];
let time = 1000;

images[0] =
    "https://images.unsplash.com/photo-1550439062-609e1531270e?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzQzfHxjb2RlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60";

images[1] =
    "https://images.unsplash.com/photo-1557599443-2071a2df9c19?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjV8fGNvZGV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60";

images[2] =
    "https://images.unsplash.com/photo-1536859355448-76f92ebdc33d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTMwfHxkZXZlbG9wZXJ8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60";

images[3] =
    "https://images.unsplash.com/photo-1525969400584-bdd69c615bfc?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTM0fHxjb2RlciUyMHNldHVwfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60";

function changeImg() {
    document.slide.src = images[i];
    // Check If Index Is Under Max
    if (i < images.length) {
        // Add 1 to Index
        i++;
    } else {
        // Reset Back To O
        i = 0;
    }

    //Run image every sec
    setTimeout("changeImg()", time);
}

window.onload = changeImg;

// Opening the Modal
let imgContain = document.querySelectorAll(".contain");

// const viewbtn = document.querySelectorAll("#viewProject");
const project = document.querySelector(".view-project");

const modal = document.querySelector(".moda");
const closeModal = document.querySelector(".close");
const modalImage = document.querySelector(".modal-img");
let containImage = document.querySelectorAll(".contain img");
const viewBtn = document.querySelectorAll(".view");

function modals(e) {
    modal.style.display = "block";
    modalImage.src = this.src;
}

function viewbtn(e) {
    modal.style.display = "block";
    containImage.src = modalImage.src;
    console.log(containImage);
}
function hideModal() {
    modal.style.display = "none";
}
containImage.forEach((openModal) =>
    openModal.addEventListener("click", modals)
);
viewBtn.forEach((view) => view.addEventListener("click", viewbtn));
closeModal.addEventListener("click", hideModal);
