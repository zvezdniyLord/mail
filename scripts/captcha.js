const targetText = document.querySelector(".form__captcha-target");
const captchaInput = document.querySelector('.form__captcha-input');
const btnCaptcha = document.querySelector(".btn__captcha");
const submit = document.querySelector(".btn__product-submit");

function createRandomChar(str) {
    if(typeof str != "string" && typeof str === "undefined") {
        alert("Введено неккоректное значение");
        return;
    }
    const span = document.createElement("span");
    span.classList.add("captcha__char");
    const randomValue = Math.floor(Math.random() * targetText.dataset.value);
    span.textContent = str.charAt(randomValue);
    const randomChar = span;
    targetText.appendChild(randomChar);
}
//createRandomChar(targetText.textContent);

function createCaptcha(text) {
    if(typeof text != "string") {
        return;
    }
    const inputText = document.querySelector(".form__captcha-target");
    let innerHTML = inputText.innerHTML;
    let index = innerHTML.indexOf(text);
    const rand = Math.floor(Math.random() * inputText.dataset.value);
    index = rand;
    if (index >= 0) { 
     innerHTML = innerHTML.substring(0, index) + "<span class='captcha__char'>" + innerHTML.substring(index,index+text.length) + "</span>" + innerHTML.substring(index + text.length);
     inputText.innerHTML = innerHTML;
    }
}

createCaptcha("e");

function checkValue(e) {
    e.preventDefault();
    const char = document.querySelector(".captcha__char").innerHTML;
    if(captchaInput.value === char) {
        console.log("yes");
        submit.disabled = false;
    } else {
        console.log("no");
        alert("Не совпадает");
        captchaInput.value = "";
    }
}

btnCaptcha.addEventListener("click", e => checkValue(e));

