import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const DEFAULT_ITEMS_PER_PAGE = 5
const DEFAULT_PAGE = 1
const DEFAULT_RATIO_FILTER = 'all'
const DEFAULT_SUBJECT_FILTER = 'all'
const filteredTemplatesRef = ref([])
const paginatedTemplatesRef = ref([])
const templatesRef = ref([])
const isLoadTemplateDataRef = ref(true)
const startTemplateIndexRef = ref(0)
const endTemplateIndexRef = ref(0)
const templateTableTemplate = document.querySelector('template#template-table-template')?.innerHTML || ''

// for dialog
const isOpenDialogRef = ref(false)
const dialogDataRef = ref({
    title: 'Untitle',
    content: '',
    cancelButtonText: 'Cancel',
    submitButtonText: 'Submit'
})
const dialogTemplate = document.querySelector('template#dialog-template')?.innerHTML || ''

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
    // return [
    //     {
    //         "id": "restaurant_1",
    //         "name": "Restaurant 1",
    //         "title": "Restaurant 1",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "restaurant",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/restaurant_1"
    //     }, {
    //         "id": "restaurant_2",
    //         "name": "Restaurant 2",
    //         "title": "Restaurant 2",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "restaurant",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/restaurant_2"
    //     }, {
    //         "id": "restaurant_3",
    //         "name": "Restaurant 3",
    //         "title": "Restaurant 3",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "restaurant",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/restaurant_3"
    //     }, {
    //         "id": "restaurant_4",
    //         "name": "Restaurant 4",
    //         "title": "Restaurant 4",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "restaurant",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/restaurant_4"
    //     }, {
    //         "id": "restaurant_5",
    //         "name": "Restaurant 5",
    //         "title": "Restaurant 5",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "restaurant",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/restaurant_5"
    //     }, {
    //         "id": "pho_1",
    //         "name": "Pho 1",
    //         "title": "Pho 1",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "pho",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/pho_1"
    //     }, {
    //         "id": "pho_2",
    //         "name": "Pho 2",
    //         "title": "Pho 2",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "pho",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/pho_2"
    //     }, {
    //         "id": "pho_3",
    //         "name": "Pho 3",
    //         "title": "Pho 3",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "pho",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/pho_3"
    //     }, {
    //         "id": "pho_4",
    //         "name": "Pho 4",
    //         "title": "Pho 4",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "pho",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/pho_4"
    //     }, {
    //         "id": "pho_5",
    //         "name": "Pho 5",
    //         "title": "Pho 5",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "pho",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/pho_5"
    //     }, {
    //         "id": "nail_1",
    //         "name": "Nail 1",
    //         "title": "Nail 1",
    //         "ratios": ["32:9", "21:9", "16:9", "16:10", "4:3"],
    //         "subject": "nail",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/nail_1"
    //     }, {
    //         "id": "nail_2",
    //         "name": "Nail 2",
    //         "title": "Nail 2",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "nail",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/nail_2"
    //     }, {
    //         "id": "nail_3",
    //         "name": "Nail 3",
    //         "title": "Nail 3",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "nail",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/nail_3"
    //     }, {
    //         "id": "nail_4",
    //         "name": "Nail 4",
    //         "title": "Nail 4",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3"],
    //         "subject": "nail",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/nail_4"
    //     }, {
    //         "id": "nail_5",
    //         "name": "Nail 5",
    //         "title": "Nail 5",
    //         "ratios": ["21:9", "16:9", "16:10", "4:3", "32:9"],
    //         "subject": "nail",
    //         "created": "26/09/2023",
    //         "modified": "26/09/2023",
    //         "status": "Active",
    //         "slug": "https:\/\/template.com/nail_5"
    //     }
    // ]
    const GET_TEMPLATE_DATA_LIST_ENDPOINT = 'https://foodiemenu.co/wp-json/tv-menu-api/v1/templates/get-list-search'
    const res = await fetch(GET_TEMPLATE_DATA_LIST_ENDPOINT)
    if (res.ok) {
        const templateDatas = await res.json()

        return reshapeTemplateData(templateDatas)
    } else {
        return []
    }
}

// temp function
function reshapeTemplateData(templateDatas) {
    const reshapedTemplateDatas = []
    for (let templateData of templateDatas) {
        reshapedTemplateDatas.push({
            "id": templateData['id'],
            "name": templateData['templateName'],
            "title": templateData['templateName'],
            "ratios": !!templateData['ratios'] ? (templateData['ratios']).split(/\s*,\s*/) : [],
            "subject": templateData['categoryName'],
            "created": templateData['created'].split(' ').at(0),
            "modified": templateData['modified'] || null,
            "status": "Active",
            "slug": 'https:\/\/template.com/' + templateData['']
        })
    }
    return reshapedTemplateDatas
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

// function handleChangeItemsPerPage(e) {
//     const selectedItemsPerPage = Number(e.target.value)
//     paginationConfigRef.value.itemsPerPage = selectedItemsPerPage
//     paginationConfigRef.value.page = DEFAULT_PAGE
//     markChangePaginationConfig()
// }

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

// function handleChangeRatioFilter(e) {
//     const selectedRatio = String(e.target.value)
//     filterRef.value.ratio = selectedRatio
//     paginationConfigRef.value.page = DEFAULT_PAGE
//     markChangeFilter()
//     markChangePaginationConfig()
// }

// function handleChangeSubjectFilter(e) {
//     const selectedSubject = String(e.target.value)
//     filterRef.value.subject = selectedSubject
//     paginationConfigRef.value.page = DEFAULT_PAGE
//     markChangeFilter()
//     markChangePaginationConfig()
// }

function handleSelectSubject(e) {
    if (e.target.checked) {
        const selectedSubject = String(e.target.value)
        filterRef.value.subject = selectedSubject
        paginationConfigRef.value.page = DEFAULT_PAGE
        markChangeFilter()
        markChangePaginationConfig()
    }
}

function handleSelectRatio(e) {
    if (e.target.checked) {
        const selectedRatio = String(e.target.value)
        filterRef.value.ratio = selectedRatio
        paginationConfigRef.value.page = DEFAULT_PAGE
        markChangeFilter()
        markChangePaginationConfig()
    }
}

function handleSelectItemsPerPage(e) {
    if (e.target.checked) {
        const selectedItemsPerPage = Number(e.target.value)
        paginationConfigRef.value.itemsPerPage = selectedItemsPerPage
        paginationConfigRef.value.page = DEFAULT_PAGE
        markChangePaginationConfig()
    }
}


const templateTable = createApp({
    setup() {
        initData()
        return {
            filteredTemplates: filteredTemplatesRef,
            templates: templatesRef,
            filter: filterRef,
            paginationConfig: paginationConfigRef,
            paginatedTemplates: paginatedTemplatesRef,
            copyToClipboard,
            startTemplateIndex: startTemplateIndexRef,
            endTemplateIndex: endTemplateIndexRef,
            isLoadTemplateData: isLoadTemplateDataRef,
            // handleChangeItemsPerPage,
            handleNextPage,
            handlePrevPage,
            // handleChangeRatioFilter,
            // handleChangeSubjectFilter,
            handleSelectSubject,
            handleSelectRatio,
            handleSelectItemsPerPage,
            openDeleteDialog,
        }
    },
    template: templateTableTemplate
})

templateTable.mount("#template-table")

function initData() {
    getTemplateData().then(fetchedTemplates => {
        templatesRef.value = fetchedTemplates
        // templatesRef.value = []
        markChangeFilter()
        markChangePaginationConfig()
        isLoadTemplateDataRef.value = false
    })
}

const dialog = createApp({
    setup() {
        function handleCloseDialog() {
            isOpenDialogRef.value = false
        }

        return {
            dialogData: dialogDataRef,
            isOpen: isOpenDialogRef,
            handleCloseDialog: handleCloseDialog,
            handleCancelDialog: handleCloseDialog,
            handleSubmitDialog: handleCloseDialog,
        }
    },
    template: dialogTemplate,
})

function openDeleteDialog(templateData) {
    dialogDataRef.value = {
        ...dialogDataRef.value,
        title: 'Delete template',
        content: `You want delete template '${templateData.name}'`,
        cancelButtonText: `No, I don't`,
        submitButtonText: `Yes, I do`,
    }
    isOpenDialogRef.value = true
}

dialog.mount('#dialog')