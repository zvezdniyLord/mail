const inputSubmit = document.querySelector(".btn__product-submit");
const controller = new AbortController();
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("form");
    form.addEventListener("submit", formSend);

    async function formSend(e) {
        e.preventDefault();
        const formData = new FormData(form);
        const response = await fetch('../php.php', {
            method: "POST",
            body: formData,
            signal: controller.signal,
        });
        if(response.ok) {
            const result = await response.json();
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

/*$defaultMail = '';
$email_addresses = array(
    'ИНТ' => 'int@scadaint.ru', 
	'Техническая поддержка' => 'support@scadaint.ru',
    'Запрос документации' => "commerce@scadaint.ru",
    'Запрос пробной версии' => "commerce@scadaint.ru",
    'Запрос ценового предложения' => "commerce@scadaint.ru",
    'Запрос на обучение' => "commerce@scadaint.ru",

);

if (isset($email_addresses[$_POST['select']])) {
   $defaultMail = $email_addresses[$_POST['select']];
}

$mail->addAddress($defaultMail);*/