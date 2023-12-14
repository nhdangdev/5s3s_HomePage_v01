// $('.md-select')?.addEventListener(
//     'click',
//     function (e) {
//         alert('click');
//         $(this).toggleClass('active');
//     }
// );

function offLoadingScreen() {
    const loadingScreen = document.querySelector('#loading-screen');

    if (!!loadingScreen) {
        loadingScreen.style.display = 'none';
    }
}

window.addEventListener('load', offLoadingScreen)

function getCookie(name, fallback = '') {
    const cookiePairs = extractCookie()
    for (let cookiePair of cookiePairs) {
        if (cookiePair.name === name) {
            return cookiePair.value
        }
    }

    return fallback
}

function setCookie(name, value, expireMs) {
    if (typeof name !== 'string' || !name) { return }

    let newCookie = `${name}=${value}`

    if (!!expireMs) {
        const expiresDate = new Date(Date.now() + expireMs || 0)
        newCookie += `;expires=${expiresDate.toISOString()}`
    }

    document.cookie = newCookie
}

function clearCookie(name) {
    document.cookie = `${name}=;expires=${(new Date(Date.now() - 1000)).toUTCString()}`
}

function checkExistsCookie(name) {
    const cookiePairs = extractCookie()
    const indexOfCookie = cookiePairs.findIndex(pair = pair.name === name)
    return indexOfCookie >= 0
}

function extractCookie() {
    const allCookie = document.cookie

    if (allCookie === '') { return [] }

    const cookiePieces = allCookie.split(';')
    const cookiePairs = cookiePieces.map(cookiePiece => {
        const [name, value] = cookiePiece.split('=')
        return { name, value }
    })

    return cookiePairs
}

function copyToClipboard(text) {
    navigator.clipboard.writeText(text)
    alert(`Coppied "${text}"`);
}

function logout(logoutLink) {
    clearCookie('email')
    window.location.href = logoutLink
}

// [122305TIN] add below script
const MOBILE_MENU_CLASSNAME = 'page-header__mobile-menu'
const MOBILE_MENU_ACTIVE_CLASSNAME = 'page-header__mobile-menu--active'
const MOBILE_MENU_LINK_CLASSNAME = 'page-header__mobile-menu-link'
const MOBILE_MENU_LINK_ACTIVE_CLASSNAME = 'page-header__mobile-menu-link--active'
const DESKTOP_MENU_CLASSNAME = 'page-header__desktop-menu'
const DESKTOP_MENU_LINK_CLASSNAME = 'page-header__desktop-menu-link'
const DESKTOP_MENU_LINK_ACTIVE_CLASSNAME = 'page-header__desktop-menu-link--active'

function toggleMobileMenu() {
    const mobileMenu = document.querySelector(`.${MOBILE_MENU_CLASSNAME}`)
    if (!mobileMenu) { return }

    mobileMenu.classList.toggle(MOBILE_MENU_ACTIVE_CLASSNAME)
}

window.addEventListener('load', () => {
    const mobileMenuLinkElements = document.querySelectorAll(`.${MOBILE_MENU_LINK_CLASSNAME}`)
    const desktopMenuLinkElements = document.querySelectorAll(`.${DESKTOP_MENU_LINK_CLASSNAME}`)
    mobileMenuLinkElements.forEach(menuLinkElement => menuLinkElement.addEventListener('click', handleMobileMenuItemClick))
    desktopMenuLinkElements.forEach(menuLinkElement => menuLinkElement.addEventListener('click', handleDesktopMenuItemClick))

})
// Change active menu item if scroll to matched section
// window.addEventListener('scroll', () => {
//     const sections = document.querySelectorAll('section')
//     for (let section of sections) {
//         const isVisibleSection = window.pageYOffset > section.offsetTop
//             && window.pageYOffset < (section.offsetTop + section.offsetHeight)
//         if (isVisibleSection) {
//             const sectionId = section.id
//             const mobileMenuLinkElements = document.querySelectorAll('.page-header__mobile-menu-link')
//             const desktopMenuLinkElements = document.querySelectorAll('.page-header__desktop-menu-link')
//             for (let menuLinkElement of desktopMenuLinkElements) {
//                 let url = new URL(menuLinkElement.href)
//                 if (url.hash === `#${sectionId}`) {
//                     activeDesktopMenuItem(menuLinkElement)
//                 }
//             }
//         }
//     }
// })
// const observerRoot = document.querySelector('#observer-root')

// const observer = new IntersectionObserver((entries, observer) => {
//     const displayedSection = entries.find(entry => entry.intersectionRatio > 0)
//     // console.log(displayedSection.target)
//     console.log(entries)
//     const menuLinks = document.querySelectorAll(`.${DESKTOP_MENU_LINK_CLASSNAME}`)
//     for (menuLink of menuLinks) {
//         const urlOfMenuLink = new URL(menuLink.href)
//         if (urlOfMenuLink.hash === `#${displayedSection.target.id}`) {
//             activeMenuLink(menuLink, DESKTOP_MENU_LINK_CLASSNAME, DESKTOP_MENU_LINK_ACTIVE_CLASSNAME)
//             window.history.pushState({}, "", urlOfMenuLink.href);
//         }
//     }

// },
//     // { root: observerRoot }
// )

// const sections = document.querySelectorAll('section[id]')
// for (let section of sections) {
//     observer.observe(section)
// }

function handleMobileMenuItemClick(e) {
    e.preventDefault()
    const clickedMenuLink = e.target
    const url = new URL(clickedMenuLink.href)
    const sectionId = url.hash
    activeMenuLink(clickedMenuLink, MOBILE_MENU_LINK_CLASSNAME, MOBILE_MENU_LINK_ACTIVE_CLASSNAME)
    toggleMobileMenu()
    scrollToElement(sectionId);
    window.history.pushState({}, "", e.target.href);
}

function handleDesktopMenuItemClick(e) {
    e.preventDefault()
    const clickedMenuLink = e.target
    const url = new URL(clickedMenuLink.href)
    const sectionId = url.hash
    activeMenuLink(clickedMenuLink, DESKTOP_MENU_LINK_CLASSNAME, DESKTOP_MENU_LINK_ACTIVE_CLASSNAME)
    scrollToElement(sectionId);
    window.history.pushState({}, "", e.target.href);
}

function activeMenuLink(clickedMenuLink, normalClassName, activeClassName) {
    if (!clickedMenuLink) {
        return console.log('Invalid element')
    }

    const menuLinks = document.querySelectorAll(`.${normalClassName}`)

    for (let menuLink of menuLinks) {
        menuLink.classList.remove(activeClassName)
    }

    clickedMenuLink.classList.add(activeClassName)

}

function scrollToElement(selector) {
    const selectedElement = document.querySelector(selector)
    if (!selectedElement) { return }
    selectedElement.scrollIntoView({ behavior: 'smooth', block: 'start' })
}
// [122305TIN] add below script - end

// [122306TIN] add script for custome video player
function initCustomVideoPlayer(videoPlayler) {
    const THUMB_CLASSNAME = 'video-player__thumb'
    const PLAY_BTN_CLASSNAME = 'video-player__play-btn'
    const EMBEDDED_CLASSNAME = 'video-player__embedded'

    const playButton = videoPlayler.querySelector(`.${PLAY_BTN_CLASSNAME}`)
    const thumb = videoPlayler.querySelector(`.${THUMB_CLASSNAME}`)
    const embedded = videoPlayler.querySelector(`.${EMBEDDED_CLASSNAME}`)

    function handlePlayClick() {
        thumb.style.display = 'none'
        embedded.style.display = 'block'
        playButton.style.display = 'none'
        // auto play when click custom play button
        const videoUrl = new URL(embedded.src)
        videoUrl.searchParams.set('autoplay', '1')
        embedded.src = videoUrl.href
    }

    playButton.addEventListener('click', handlePlayClick)
}