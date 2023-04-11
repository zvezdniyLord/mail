document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("form");
    form.addEventListener("submit", formSend);
    
    async function formSend(e) {
        e.preventDefault();
        const formData = new FormData(form);
        let response = await fetch('../php.php', {
            method: "POST",
            body: formData
        });
        if(response.ok) {
            let result = await response.json();
        } else {
            console.log("Ошибка");
        }
    }
});

