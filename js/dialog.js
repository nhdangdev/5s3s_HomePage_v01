const SHOW_DIALOG_CLASS = 'dialog--show'
const HIDE_DIALOG_CLASS = 'dialog--hide'

function showDialog(selector = '.dialog') {
    const dialog = document.querySelector(selector)
    if (!dialog) { return }
    dialog.classList.remove(HIDE_DIALOG_CLASS)
    dialog.classList.add(SHOW_DIALOG_CLASS)
}

function hideDialog(selector = '.dialog') {
    const dialog = document.querySelector(selector)
    if (!dialog) { return }
    dialog.classList.remove(SHOW_DIALOG_CLASS)
    dialog.classList.add(HIDE_DIALOG_CLASS)
}