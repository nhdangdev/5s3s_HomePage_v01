import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const RESET_PASSWORD_SECTION_ID = 'reset-password-section'
function createResetPasswordForm() {
    const resetPasswordFormTemplate = document.querySelector('#reset-password-form-template')?.innerHTML || '';
    const resetPasswordForm = createApp({
        template: resetPasswordFormTemplate,
        setup() {
            function resetPassword(e) {
                const form = createResetPasswordAlert()
                form.mount('#' + RESET_PASSWORD_SECTION_ID)
            }
            return { resetPassword }
        }
    })
    return resetPasswordForm
}

function createResetPasswordAlert() {
    const resetPasswordAlertTemplate = document.querySelector('#reset-password-alert-template').innerHTML || ''
    const resetPasswordAlert = createApp({ template: resetPasswordAlertTemplate })
    return resetPasswordAlert
}


window.addEventListener('load', () => {
    const form = createResetPasswordForm()
    form.mount('#' + RESET_PASSWORD_SECTION_ID)
})