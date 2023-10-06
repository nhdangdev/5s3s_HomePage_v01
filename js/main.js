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