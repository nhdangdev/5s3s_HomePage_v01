function disableForm(form) {
    const fieldsetOfForm = form.querySelector('fieldset')
    if (!fieldsetOfForm) {
        return console.log('Not found fieldset of form')
    }
    fieldsetOfForm.disabled = true
}

function enableForm(form) {
    const fieldsetOfForm = form.querySelector('fieldset')
    if (!fieldsetOfForm) {
        return console.log('Not found fieldset of form')
    }
    fieldsetOfForm.disabled = false
}

function showInvalidMessage(errorMessageSelector) {
    const errorMessageElement = document.querySelector(errorMessageSelector)
    if (!errorMessageElement) {
        return console.log(`Not found error message element "${errorMessageSelector}"`)
    }

    errorMessageElement.classList.add('account-form__error-message--show')
}

function hideInvalidMessage(errorMessageSelector) {
    const errorMessageElement = document.querySelector(errorMessageSelector)
    if (!errorMessageElement) {
        return console.log(`Not found error message element "${errorMessageSelector}"`)
    }

    errorMessageElement.classList.remove('account-form__error-message--show')
}

function initValidInput(fieldControlSelector, errorMessageSelector) {

    if (!fieldControlSelector) { return console.error('Input selector is blank') }
    if (!errorMessageSelector) { return console.error('Error message selector is blank') }

    const input = document.querySelector(fieldControlSelector)
    const errorMessageElement = input.querySelector(errorMessageSelector)
    function validInputOnChange(e) {
        if (e.target.validity.valid) {
            hideInvalidMessage(errorMessageSelector)
        }
    }
    input.addEventListener('invalid', (e) => {
        e.preventDefault();
        showInvalidMessage(errorMessageSelector)
        // Check if has a focused element is invalid if so return 
        // else focus to this input
        const currentFocusedElement = document.activeElement
        if (currentFocusedElement && !currentFocusedElement.validity.valid) { return }
        input.focus()
    })

    input.addEventListener('input', validInputOnChange)
}