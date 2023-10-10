import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const templatesRef = ref([])
const templateItemTemplate = document.querySelector('template#template-item-template')?.innerHTML || ''

async function getTemplateData() {
    // fake template data
    return [
        {
            "id": "restaurant_1",
            "name": "Restaurant 1",
            "thumb": "../asset/img/template_screenshot/temp_restaurant_1.png",
            "title": "Restaurant 1",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "restaurant",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/restaurant_1"
        }, {
            "id": "restaurant_2",
            "name": "Restaurant 2",
            "thumb": "../asset/img/template_screenshot/temp_restaurant_2.png",
            "title": "Restaurant 2",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "restaurant",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/restaurant_2"
        }, {
            "id": "restaurant_3",
            "name": "Restaurant 3",
            "thumb": "../asset/img/template_screenshot/template_restaurant_3.png",
            "title": "Restaurant 3",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "restaurant",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/restaurant_3"
        }, {
            "id": "restaurant_4",
            "name": "Restaurant 4",
            "thumb": "../asset/img/template_screenshot/template_restaurant_4.png",
            "title": "Restaurant 4",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "restaurant",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/restaurant_4"
        }, {
            "id": "restaurant_5",
            "name": "Restaurant 5",
            "thumb": "../asset/img/template_screenshot/template_restaurant_5.png",
            "title": "Restaurant 5",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "restaurant",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/restaurant_5"
        }, {
            "id": "pho_1",
            "name": "Pho 1",
            "thumb":
                "../asset/img/template_screenshot/temp_pho_1.png",
            "title": "Pho 1",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "pho",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/pho_1"
        }, {
            "id": "pho_2",
            "name": "Pho 2",
            "thumb":
                "../asset/img/template_screenshot/temp_pho_2.png",
            "title": "Pho 2",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "pho",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/pho_2"
        }, {
            "id": "pho_3",
            "name": "Pho 3",
            "thumb":
                "../asset/img/template_screenshot/temp_pho_3.png",
            "title": "Pho 3",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "pho",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/pho_3"
        }, {
            "id": "pho_4",
            "name": "Pho 4",
            "thumb":
                "../asset/img/template_screenshot/temp_pho_4.png",
            "title": "Pho 4",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "pho",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/pho_4"
        }, {
            "id": "pho_5",
            "name": "Pho 5",
            "title": "Pho 5",
            "thumb":
                "../asset/img/template_screenshot/temp_pho_5.png",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "pho",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/pho_5"
        }, {
            "id": "nail_1",
            "name": "Nail 1",
            "thumb": "../asset/img/template_screenshot/temp_nail_1.png",
            "title": "Nail 1",
            "ratios": ["32:9", "21:9", "16:9", "16:10", "4:3"],
            "subject": "nail",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/nail_1"
        }, {
            "id": "nail_2",
            "name": "Nail 2",
            "thumb": "../asset/img/template_screenshot/temp_nail_2.png",
            "title": "Nail 2",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "nail",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/nail_2"
        }, {
            "id": "nail_3",
            "name": "Nail 3",
            "thumb": "../asset/img/template_screenshot/temp_nail_3.png",
            "title": "Nail 3",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "nail",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/nail_3"
        }, {
            "id": "nail_4",
            "name": "Nail 4",
            "thumb": "../asset/img/template_screenshot/temp_nail_4.png",
            "title": "Nail 4",
            "ratios": ["21:9", "16:9", "16:10", "4:3"],
            "subject": "nail",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/nail_4"
        }, {
            "id": "nail_5",
            "name": "Nail 5",
            "thumb": "../asset/img/template_screenshot/temp_nail_5.png",
            "title": "Nail 5",
            "ratios": ["21:9", "16:9", "16:10", "4:3", "32:9"],
            "subject": "nail",
            "created": "26/09/2023",
            "modified": "26/09/2023",
            "status": "Active",
            "slug": "https:\/\/template.com/nail_5"
        }
    ]
}

const templateItems = createApp({
    setup() {
        return { templates: templatesRef }
    },
    template: templateItemTemplate
})

templateItems.mount("#template-item-list")

getTemplateData().then(fetchedTemplates => {
    templatesRef.value = fetchedTemplates
})