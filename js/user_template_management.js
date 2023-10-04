import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const templatesRef = ref([])
const originalTemplates = []
const DEFAULT_ITEMS_PER_PAGE = 5
const DEFAULT_PAGE = 1
const templateRowsTemplate = document.querySelector('template#template-row-template')?.innerHTML || ''
let currentPage = DEFAULT_PAGE
const ratioSelectBox = document.querySelector('select#ratio-selectbox')
const subjectSeclectBox = document.querySelector('select#subject-selectbox')
const itemsPerPageSelectBox = document.querySelector('select#items-per-page')
const prevPageBtn = document.querySelector('button#prev-page-btn')
const nextPageBtn = document.querySelector('button#next-page-btn')
const pageCountSection = document.querySelector('#page-count')
const templateRows = createApp({
    setup() {
        return {
            templates: templatesRef,
            copyToClipboard
        }
    },
    template: templateRowsTemplate
})

templateRows.mount("#template-rows")

async function getTemplateData() {
    const res = await fetch('./get_template_data.php')
    if (!res.ok) { return [] }
    return await res.json()
}

getTemplateData().then(fetchedTemplates => {
    originalTemplates.splice(0, originalTemplates.length)
    originalTemplates.push(...fetchedTemplates)
    const filter = getFilter()
    templatesRef.value = filterTemplate(originalTemplates, filter)
})


ratioSelectBox.addEventListener('change', (e) => {
    if (!e.target) { return }
    // reset current page if change ratio
    currentPage = DEFAULT_PAGE
    handleFilterTemplate()
})

subjectSeclectBox.addEventListener('change', (e) => {
    if (!e.target) { return }
    // reset current page if change subject
    currentPage = DEFAULT_PAGE
    handleFilterTemplate()
})

itemsPerPageSelectBox.addEventListener('change', (e) => {
    if (!e.target) { return }
    handleFilterTemplate()
})

prevPageBtn.addEventListener('click', (e) => {
    if (!e.target) { return }
    if (currentPage > 1) {
        currentPage--
        handleFilterTemplate()
    }
})

nextPageBtn.addEventListener('click', (e) => {
    if (!e.target) { return }
    currentPage++
    handleFilterTemplate()
})

function handleFilterTemplate() {
    const filter = getFilter()
    const filteredTemplates = filterTemplate(originalTemplates, filter)
    templatesRef.value = filteredTemplates
}

function getFilter() {
    const ratio = ratioSelectBox.value
    const subject = subjectSeclectBox.value
    const itemsPerPage = Number(itemsPerPageSelectBox.value)
    return { ratio, subject, itemsPerPage, page: currentPage }
}

function filterTemplate(templates, { ratio = 'all', subject = 'all', itemsPerPage, page }) {
    const filteredTemplates = filterTemplateBySubject(filteredTemplatesByRatio(templates, ratio), subject)

    return paginateTemplates(filteredTemplates, { itemsPerPage, page })
}

function filteredTemplatesByRatio(templates, ratio = 'all') {
    const filteredTemplates = []
    if (ratio === 'all') {
        return templates
    }

    for (let template of templates) {
        if (template.ratios.includes(ratio)) {
            filteredTemplates.push(template)
        }
    }

    return filteredTemplates
}

function filterTemplateBySubject(templates, subject = 'all') {
    const filteredTemplates = []

    if (subject === 'all') {
        return templates
    }

    for (let template of templates) {
        if (template.subject === subject) {
            filteredTemplates.push(template)
        }
    }

    return filteredTemplates
}

function paginateTemplates(templates, { itemsPerPage = DEFAULT_ITEMS_PER_PAGE, page = DEFAULT_PAGE }) {
    const startIndex = (page - 1) * itemsPerPage
    const endIndex = startIndex + itemsPerPage

    if (endIndex >= templates.length) {
        nextPageBtn.disabled = true
    } else {
        nextPageBtn.disabled = false
    }

    if (startIndex === 0) {
        prevPageBtn.disabled = true
    } else {
        prevPageBtn.disabled = false
    }

    pageCountSection.innerHTML = `${startIndex + 1}-${endIndex < templates.length ? endIndex : templates.length} of ${templates.length}`

    return templates.slice(startIndex, endIndex)
}