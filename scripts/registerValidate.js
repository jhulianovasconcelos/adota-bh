const petRegisterForm = document.querySelector("#petRegisterForm");
const validateBtn = document.querySelector("#validateBtn");
const inputGroupList = document.querySelectorAll('.inputGroupList')
const inputList = document.querySelectorAll(".inputList");
const inputRadioList = document.querySelectorAll(".form-check-input")


for (let i = 0; i < inputList.length; i++) {
    inputList[i].addEventListener("focusout", () => {
        if (inputList[i].id == "petName") {
            if (inputList[i].value.length == 0) {
                addFeedback(inputList[i], inputGroupList[i], "Insira um nome válido");
                return;
            }
            if (inputList[i].value.match(/^[A-Z a-z]+$/)) {
                removeFeedback(inputList[i], inputGroupList[i]);
                return;
            }
        }
        if (inputList[i].id == "petAge") {
            if (inputList[i].value.length == 0) {
                addFeedback(inputList[i], inputGroupList[i], "Insira uma idade válida");
                return;
            }
            removeFeedback(inputList[i], inputGroupList[i]);
        }
        if (inputList[i].id == "petBreed") {
            if (inputList[i].value == 'null') {
                addFeedback(inputList[i], inputGroupList[i], "Selecione uma raça");
                return
            }
            removeFeedback(inputList[i], inputGroupList[i]);
        }
    })
}

function formRegisterSubmit() {
    for (let i = 0; i < inputList.length; i++) {
        if (inputList[i].value.length == 0 || inputList[i].value == 'null') {
            alert('Preencha todos os campos')
            return
        }
    }
    for (let i = 0; i < inputRadioList.length; i++) {
        const radio = document.querySelectorAll('#' + inputRadioList[i].id)
        if (!(radio[0].checked || radio[1].checked)) {
            alert('Preencha todos os campos')
            i++
            return
        }
    }
    return petRegisterForm.submit()

}

function addFeedback(inputId, inputGroup, feedbackText) {
    if (inputId.classList.contains("is-invalid")) return;

    inputId.classList.add("is-invalid");
    invalidFeedbackDiv = document.createElement('div');
    invalidFeedbackDiv.classList.add('invalid-feedback');
    invalidFeedbackDiv.textContent = feedbackText;
    inputGroup.appendChild(invalidFeedbackDiv);
}

function removeFeedback(inputId, inputGroup) {
    if (!inputId.classList.contains("is-invalid")) return;

    invalidFeedbackDiv = inputGroup.querySelectorAll('.invalid-feedback');
    inputId.classList.remove("is-invalid");
    inputGroup.removeChild(invalidFeedbackDiv[0]);
}