"use strict"

document.addEventListener("DOMContentLoaded", function (event) {

    const form = document.getElementById('addComment'),
        blogId = document.getElementById('blogId');

    form.addEventListener('submit', formSend);

    async function formSend(e) {
        e.preventDefault();
        let error = formValidate(form),
            formData = new FormData(form);
        if (error === 0) {
            form.classList.add('_sending');

            let response = await fetch(`/ajax-comment/index.php?id=${blogId.value}`, {
                method: 'POST',
                body: formData
            });
            if (response.ok) {
                let result = await response.text();
                if (result.message === '1') {
                    form.reset();
                    form.classList.remove('_sending');
                    form.classList.add('_welldone');
                    setTimeout(function () {
                        form.classList.remove('_welldone');
                    }, 2000);
                }
                let parentBlock = document.getElementById('comments');
                parentBlock.innerHTML = result;
                form.reset();
            } else {
                alert('Ошибка, повторите отправку позже!');
                form.classList.remove('_sending');
            }
        }
    }


    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);

           if (input.classList.contains('_tel')) {
               if (input.value !== '') {
                   formAddError(input);
                   error++;
               }
            } else if (input.classList.contains('_name')) {
                if (input.value === '') {
                    // какие-то проверки
                    formAddError(input);
                    error++;
                }
            } else if (input.classList.contains('_mail')) {
                if (input.value === '') {
                    // какие-то проверки
                    formAddError(input);
                    error++;
                }
            } else if (input.classList.contains('_text')) {
                if (input.value === '') {
                    // какие-то проверки
                    formAddError(input);
                    error++;
                }
            } else if (input.getAttribute("type") === "checkbox" && input.checked === false) {
                formAddError(input);
                error++;
            } else {
                if (input.value === '') {
                    formAddError(input);
                    error++;
                }
            }

        }
        return error;
    }

    function formAddError(input) {
        input.parentElement.classList.add('_error');
        input.classList.add('_error');
    }

    function formRemoveError(input) {

        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
    }
});