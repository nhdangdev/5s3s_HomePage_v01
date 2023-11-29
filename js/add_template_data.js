function handlePickImageFile(input) {
    if (!input) { return }
    const oldImageUrl = input.dataset.oldImageUrl || ''
    const imagePreviewSelector = input.dataset.imagePreviewSelector || ''

    const pickedFile = input.files.item(0)
    if (!pickedFile) { return }

    const imagePreview = document.querySelector(imagePreviewSelector)
    if (!imagePreview) { return }
    const newImageUrl = URL.createObjectURL(pickedFile)
    imagePreview.src = newImageUrl

    if (!oldImageUrl) { return }
    URL.revokeObjectURL(oldImageUrl)
}

function handleFormSubmit(e) {
    const form = e.target;
    e.preventDefault()
    if (!form) { return }
    const formControls = form.querySelectorAll('.template-data-item__control')
    for (let formControl of formControls) {
        if (!validFormControl(formControl)) {
            return
        }
    }
    form.submit()
}

function validFormControl(formControl) {
    const textInput = formControl.querySelector('input[type="text"')
    const controlMessage = formControl.querySelector('.template-data-item__control-message')

    if (!textInput.value) {
        formControl.classList.add('template-data-item__control--error')
        controlMessage.innerHTML = 'Value of title is invalid'
        controlMessage.style.display = 'block'
        textInput.focus()
        return false
    }

    formControl.classList.remove('template-data-item__control--error')
    controlMessage.style.display = 'none'

    return true
}

window.addEventListener('load', () => {
    const templateDataForm = document.querySelector('#template-data-form')
    templateDataForm.addEventListener('submit', handleFormSubmit)
})