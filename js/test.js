import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const templatesRef = ref([])
const originalTemplates = []
const DEFAULT_ITEMS_PER_PAGE = 5
const DEFAULT_PAGE = 1
const templateTableTemplate = document.querySelector('template#template-table-template')?.innerHTML || ''
let currentPage = DEFAULT_PAGE
const filter = ref({})