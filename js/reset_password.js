import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const RESET_PASSWORD_SECTION_ID = 'reset-password-section'
const isShowPasswordRef = ref(false)
const isShowConfirmPasswordRef = ref(false)

function createResetPasswordForm() {
    const resetPasswordFormTemplate = document.querySelector('#reset-password-form-template')?.innerHTML || '';
    const resetPasswordForm = createApp({
        template: resetPasswordFormTemplate,
        setup() {
            function resetPassword(e) {
                const form = createResetPasswordAlert()
                form.mount('#' + RESET_PASSWORD_SECTION_ID)
            }
            return {
                isShowPassword: isShowPasswordRef,
                isShowConfirmPassword: isShowConfirmPasswordRef,
                resetPassword,
                togglePassword,
                toggleConfirmPassword,
            }
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

function togglePassword() {
    isShowPasswordRef.value = !isShowPasswordRef.value
}

function toggleConfirmPassword() {
    isShowConfirmPasswordRef.value = !isShowConfirmPasswordRef.value
}