const inputSubmit = document.querySelector(".btn__product-submit");
const controller = new AbortController();
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("form");
    form.addEventListener("submit", formSend);

    async function formSend(e) {
        e.preventDefault();
        const formData = new FormData(form);
        let response = await fetch('../php.php', {
            method: "POST",
            body: formData,
            signal: controller.signal,
        });
        if(response.ok) {
            let result = await response.json();
            alertSendForm(inputSubmit, "Сообщение отправлено");
            restartInput();
            e.target.reset();
        } else {
            controller.abort();
            alertSendForm(inputSubmit, "Ошибка");
            restartInput();
            e.target.reset();
        }
        console.log(formData)
    }
});
const alertSendForm = (element, value) => {
    element.value = value;
};

const restartInput = () => {
    setTimeout(() => {
        alertSendForm(inputSubmit, "Отправить запрос");
    }, 3000);
}

