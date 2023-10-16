import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

function createRequestResetPasswordForm() {
    const resetPasswordFormTemplate = document.querySelector('#request-reset-password-template')?.innerHTML || '';
    const requestResetPasswordForm = createApp({
        template: resetPasswordFormTemplate,
        setup() {
            function resetPassword(e) {
                const email = e.target.querySelector('#email').value || ''
                const form = createSentResetPasswordLinkForm(email)
                form.mount('#' + FORGOT_PASSWORD_FORM_ID)
            }
            return { resetPassword }
        }
    })
    return requestResetPasswordForm
}

function createSentResetPasswordLinkForm(email = '') {
    const sentResetPasswordLinkFormTemplate = document.querySelector('#sent-reset-password-link-template').innerHTML || ''
    const sentResetPasswordLinkForm = createApp({
        template: sentResetPasswordLinkFormTemplate,
        setup() {
            return { email }
        }
    })
    return sentResetPasswordLinkForm
}

const FORGOT_PASSWORD_FORM_ID = 'forgot-password-form'

window.addEventListener('load', () => {
    const form = createRequestResetPasswordForm()
    form.mount('#' + FORGOT_PASSWORD_FORM_ID)
})