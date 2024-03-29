let layoutFilePaths = window.layoutFilePaths || [
    './order-tracking.html',
    './landing.html',
    './template_list.html',
    './pricing.html',
    // './login1.html',
    // './login2.html',
    './login3.html',
    // './get_tips_earlier.html',
    './get_tips_earlier2.html',
    './complete_register.html',
    './forgot_password.html',
    './reset_password.html',
    './user_template_list.html',
    './select_template.html',
    // './add_template_data.html',
    './add_template_data2.html',
    './dialog.html'
]

const sliderFrame = document.querySelector('#slider-frame')
const suggestionSection = document.querySelector('.searchbox__suggestion')
const searchboxInput = document.querySelector('#searchbox')
const openInNewTabButton = document.querySelector('a#open_in_new')
const prevButton = document.querySelector('#prev-btn')
const nextButton = document.querySelector('#next-btn')
const SHOW_SUGGESTION_CLASS = 'searchbox__suggestion--show'
let currentLayoutIndex = 0

function nextLayout() {
    // const nextLayoutIndex = currentLayoutIndex >= layoutFilePaths.length - 1 ? 0 : currentLayoutIndex + 1
    // prevent goto index 0
    if (currentLayoutIndex >= layoutFilePaths.length - 1) {
        return
    }
    const nextLayoutIndex = currentLayoutIndex + 1
    sliderFrame.src = layoutFilePaths[nextLayoutIndex]
    currentLayoutIndex = nextLayoutIndex
    // searchboxInput.value = sliderFrame.src
    // openInNewTabButton.href = searchboxInput.value
    markNavigatedLayout()
}

function prevLayout() {
    // const prevLayoutIndex = currentLayoutIndex === 0 ? layoutFilePaths.length - 1 : currentLayoutIndex - 1
    // prevent goto last index
    if (currentLayoutIndex === 0) {
        return
    }
    const prevLayoutIndex = currentLayoutIndex - 1
    sliderFrame.src = layoutFilePaths[prevLayoutIndex]
    currentLayoutIndex = prevLayoutIndex
    // searchboxInput.value = sliderFrame.src
    // openInNewTabButton.href = searchboxInput.value
    markNavigatedLayout()
}

function gotoLayout(path) {
    sliderFrame.src = path
    currentLayoutIndex = layoutFilePaths.indexOf(path)
    if (currentLayoutIndex < 0) {
        currentLayoutIndex = 0
    }
    suggestionSection.classList.remove(SHOW_SUGGESTION_CLASS)
    // searchboxInput.value = sliderFrame.src
    // openInNewTabButton.href = searchboxInput.value
    markNavigatedLayout()

}

function reloadSliderFrame() {
    const frame = document.querySelector('#slider-frame')
    frame.src += ''
}

function markNavigatedLayout() {
    searchboxInput.value = sliderFrame.src
    openInNewTabButton.href = sliderFrame.src

    if (currentLayoutIndex === 0 && !!prevButton) {
        prevButton.disabled = true
    } else {
        prevButton.disabled = false
    }

    if (currentLayoutIndex >= layoutFilePaths.length - 1 && !!nextButton) {
        nextButton.disabled = true
    } else {
        nextButton.disabled = false
    }
}

searchboxInput.addEventListener('click', () => {
    if (suggestionSection.classList.contains(SHOW_SUGGESTION_CLASS)) {
        return
    }
    suggestionSection.classList.add(SHOW_SUGGESTION_CLASS)
})

suggestionSection.addEventListener('blur', (e) => {
    if (!e.target || e.relatedTarget === searchboxInput) {
        return
    }

    suggestionSection.classList.remove(SHOW_SUGGESTION_CLASS)
})

searchboxInput.addEventListener('blur', (e) => {
    if (!e.target || e.relatedTarget === suggestionSection) {
        return
    }
    suggestionSection.classList.remove(SHOW_SUGGESTION_CLASS)
})

searchboxInput.addEventListener('keydown', (e) => {
    const path = e.target.value
    if (e.key === 'Enter') {
        gotoLayout(path)
    }
})

window.addEventListener('load', () => {
    // const currentPage = getCookie('currentPage')
    // if (!!currentPage) {
    //     gotoLayout(currentPage)
    // }
    if (sliderFrame.scr !== layoutFilePaths.at(0)) {
        sliderFrame.src = layoutFilePaths.at(0)
    }
    searchboxInput.value = sliderFrame.src
    openInNewTabButton.href = searchboxInput.value
    let suggestionItemHtmls = ''
    for (let layoutFilePath of layoutFilePaths) {
        suggestionItemHtmls += `
            <div 
                class="searchbox__suggestion-item"
                onclick="gotoLayout('${layoutFilePath}')"
            >
                ${layoutFilePath}
            </div>`
    }

    suggestionSection.innerHTML = suggestionItemHtmls
    markNavigatedLayout()
})

// window.addEventListener('beforeunload', (e) => {
//     setCookie('currentPage', sliderFrame.src, 24 * 3600 * 1000)
// })