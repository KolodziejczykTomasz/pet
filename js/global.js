//Menu toggle
var top_menu = document.getElementById("menu");
var btn_burger = document.getElementById("burger");

window.onresize = () => {
  location.reload();
  if (window.innerWidth < 1919) {
    top_menu.style.opacity = "0";
  } else {
    top_menu.style.opacity = "1";
  }
};

btn_burger.onclick = function () {
  if (top_menu.style.opacity == "0") {
    top_menu.style.opacity = "1";
    top_menu.style.transition = "opacity 0.5s ease-out";
  } else {
    top_menu.style.opacity = "0";
    top_menu.style.transition = "none";
  }
};
//Button more
const div = document.getElementById("hidden_text");

div.style.display = "none";
document.getElementById("more").innerHTML = "+ more";
document.getElementById("more").style.marginLeft = "0";
document.getElementById("more").onclick = function () {
  if (div.style.display == "none") {
    div.style.display = "block";
    document.getElementById("more").style.marginLeft = "0";
    this.innerHTML = "- less";
  } else {
    div.style.display = "none";
    this.innerHTML = "+ more";
  }
};
//Link active
let links = document.querySelectorAll("a");
links.forEach((a) => {
  a.addEventListener("click", function () {
    links.forEach((a) => a.classList.remove("active"));
    this.classList.add("active");
  });
});

//Modal
var modal = document.getElementById("dashborad_modal");
var btn_modal = document.getElementById("btn_modal");
modal.style.display = "none";
btn_modal.onclick = function () {
  if (modal.style.display == "none") {
    modal.style.display = "block";
  } else {
    modal.style.display = "none";
  }
};

//Cookie
var cookie = document.getElementById("dashborad_cookie");
var btn_cookie = document.getElementById("btn_cookie");
cookie.style.display = "flex";
btn_cookie.onclick = function () {
  if (cookie.style.display === "none") {
    cookie.style.display = "flex";
  } else {
    cookie.style.display = "none";
  }
};

//Form

function isCheck() {
  var checkBox = document.getElementById("checkbox__form"),
    btn_range = document.getElementById("button-slide"),
    currentVal = btn_range.value;
  btn_send = document.getElementById("button-submit");

  btn_send.disabled = true;

  if (checkBox.checked == true && currentVal == 100) {
    btn_send.classList.remove("button-light");
    btn_send.classList.add("button-dark");
    btn_send.disabled = false;
  } else {
    btn_send.classList.remove("button-dark");
    btn_send.classList.add("button-light");
    checkBox.removeAttribute("checked");
  }
}