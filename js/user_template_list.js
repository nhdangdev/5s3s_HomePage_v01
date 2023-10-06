import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const DEFAULT_ITEMS_PER_PAGE = 5
const DEFAULT_PAGE = 1
const DEFAULT_RATIO_FILTER = 'all'
const DEFAULT_SUBJECT_FILTER = 'all'
const filteredTemplatesRef = ref([])
const paginatedTemplatesRef = ref([])
const templatesRef = ref([])
const startTemplateIndexRef = ref(0)
const endTemplateIndexRef = ref(0)
const templateTableTemplate = document.querySelector('template#template-table-template')?.innerHTML || ''

const filterRef = ref({
    ratio: DEFAULT_RATIO_FILTER,
    subject: DEFAULT_SUBJECT_FILTER
})

const paginationConfigRef = ref({
    page: DEFAULT_PAGE,
    itemsPerPage: DEFAULT_ITEMS_PER_PAGE,
    startIndex: 0,
    endIndex: 0,
    itemCount: 0,
})

async function getTemplateData() {
    const res = await fetch('./get_template_data.php')
    if (!res.ok) { return [] }
    return await res.json()
}

function filterTemplates(templates, { ratio = 'all', subject = 'all', itemsPerPage, page }) {
    const filteredTemplates = filterTemplateBySubject(filteredTemplatesByRatio(templates, ratio), subject)

    return filteredTemplates
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
    const { startIndex, endIndex } = getPageIndexes({ page, itemsPerPage })
    return templates.slice(startIndex, endIndex)
}

function getPageIndexes({ page = DEFAULT_PAGE, itemsPerPage = DEFAULT_ITEMS_PER_PAGE }) {
    const startIndex = (page - 1) * itemsPerPage
    const endIndex = startIndex + itemsPerPage
    return { startIndex, endIndex }
}

function markChangeFilter() {
    filteredTemplatesRef.value = filterTemplates(templatesRef.value, filterRef.value)
}

function markChangePaginationConfig() {
    paginatedTemplatesRef.value = paginateTemplates(filteredTemplatesRef.value, paginationConfigRef.value)
    let { startIndex, endIndex } = getPageIndexes(paginationConfigRef.value)
    const newItemCount = filteredTemplatesRef.value.length
    const { page, itemsPerPage } = paginationConfigRef.value

    if (endIndex > newItemCount) {
        endIndex = newItemCount
    }

    paginationConfigRef.value = {
        startIndex,
        endIndex,
        itemCount: newItemCount,
        itemsPerPage,
        page,
    }
}

function handleChangeItemsPerPage(e) {
    const selectedItemsPerPage = Number(e.target.value)
    paginationConfigRef.value.itemsPerPage = selectedItemsPerPage
    paginationConfigRef.value.page = DEFAULT_PAGE
    markChangePaginationConfig()
}

function handlePrevPage() {
    if (paginationConfigRef.value.page > 1) {
        paginationConfigRef.value.page--
        markChangePaginationConfig()
    }
}

function handleNextPage() {
    const isEndPage = paginationConfigRef.value.endIndex >= paginationConfigRef.value.itemCount
    if (!isEndPage) {
        paginationConfigRef.value.page++
        markChangePaginationConfig()
    }
}

function handleChangeRatioFilter(e) {
    const selectedRatio = String(e.target.value)
    filterRef.value.ratio = selectedRatio
    paginationConfigRef.value.page = DEFAULT_PAGE
    markChangeFilter()
    markChangePaginationConfig()
}

function handleChangeSubjectFilter(e) {
    const selectedSubject = String(e.target.value)
    filterRef.value.subject = selectedSubject
    paginationConfigRef.value.page = DEFAULT_PAGE
    markChangeFilter()
    markChangePaginationConfig()
}


const templateRows = createApp({
    setup() {
        return {
            filteredTemplates: filteredTemplatesRef,
            templates: templatesRef,
            filter: filterRef,
            paginationConfig: paginationConfigRef,
            paginatedTemplates: paginatedTemplatesRef,
            copyToClipboard,
            startTemplateIndex: startTemplateIndexRef,
            endTemplateIndex: endTemplateIndexRef,
            handleChangeItemsPerPage,
            handleNextPage,
            handlePrevPage,
            handleChangeRatioFilter,
            handleChangeSubjectFilter,
        }
    },
    template: templateTableTemplate
})

templateRows.mount("#template-table")

getTemplateData().then(fetchedTemplates => {
    templatesRef.value = fetchedTemplates
    markChangeFilter()
    markChangePaginationConfig()
})