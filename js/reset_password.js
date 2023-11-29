import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const RESET_PASSWORD_SECTION_ID = 'reset-password-section'
const isShowPasswordRef = ref(false)
const isShowConfirmPasswordRef = ref(false)
const formMessageRef = ref('');

function createResetPasswordForm() {
    const resetPasswordFormTemplate = document.querySelector('#reset-password-form-template')?.innerHTML || '';
    const resetPasswordForm = createApp({
        template: resetPasswordFormTemplate,
        setup() {

            function handleForm(e) {
                const form = e.target;
                const passwordInput = form.querySelector('#password');
                const confirmPasswordInput = form.querySelector('#confirm-password');
                if (!passwordInput || !confirmPasswordInput) { return }
                if (passwordInput.value !== confirmPasswordInput.value) {
                    formMessageRef.value = 'Password and confirm password do not match'
                } else {
                    const form = createResetPasswordAlert()
                    form.mount('#' + RESET_PASSWORD_SECTION_ID)
                }
            }

            return {
                isShowPassword: isShowPasswordRef,
                isShowConfirmPassword: isShowConfirmPasswordRef,
                formMessage: formMessageRef,
                handleForm,
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