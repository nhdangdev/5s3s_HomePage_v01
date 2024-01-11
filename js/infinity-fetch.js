class InfinityFetch {
    #observer
    #currentPage = 1
    onfetch
    onfetched
    onerror
    getNextPage
    observedDock
    observerOptions

    constructor({ onfetch, onfetched, onerror, observedDock, getNextPage, observerOptions }) {
        this.onfetch = onfetch
        this.onfetched = onfetched
        this.onerror = onerror
        this.getNextPage = getNextPage
        this.observedDock = observedDock
        this.initObserve(observedDock, observerOptions)
    }

    initObserve(observedDock, observerOptions) {
        this.#observer = new IntersectionObserver((entries) => {
            if (entries.length > 0 && this.getNextPage(this.#currentPage)) {
                this.onfetch(++this.#currentPage).then(this.onfetched)
            }
        }, observerOptions)

        this.#observer.observe(observedDock || this.observedDock)
    }

    replaceDock(observedDock) {
        this.#observer.disconnect()
        this.#observer.observe(observedDock)
    }
}