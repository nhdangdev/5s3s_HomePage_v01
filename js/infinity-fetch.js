class InfinityFetch {
    #observer
    #currentPage = 0
    onfetch
    onfetched
    onerror
    checkNextPage
    observedDock
    observerOptions

    constructor({ onfetch, onfetched, onerror, observedDock, checkNextPage, observerOptions }) {
        this.onfetch = onfetch
        this.onfetched = onfetched
        this.onerror = onerror
        this.checkNextPage = checkNextPage
        this.observedDock = observedDock
        this.initObserve(observerOptions)
    }

    initObserve = (observerOptions) => {
        this.#observer = new IntersectionObserver((entries) => {
            if (entries.length > 0 && this.checkNextPage(this.#currentPage)) {
                this.onfetch(++this.#currentPage).then(this.onfetched).catch(this.onerror)
            }
        }, observerOptions)

        if (Array.isArray(this.observedDock)) {
            for (let dock of this.observedDock) {
                this.#observer.observe(dock)
            }
        } else {
            this.#observer.observe(this.observedDock)
        }

    }

    replaceDock = (observedDock) => {
        this.#observer.disconnect()
        if (Array.isArray(observedDock)) {
            for (let dock of observedDock) {
                this.#observer.observe(dock)
            }
        } else {
            this.#observer.observe(this.observedDock)
        }
    }

    resetPage = () => {
        this.#observer.disconnect()
        this.#currentPage = 0
        this.initObserve(this.observerOptions)
    }
}