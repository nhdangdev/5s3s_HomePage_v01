function offLoadingScreen() {
    const loadingScreen = document.querySelector('#loading-screen');

    if (!!loadingScreen) {
        loadingScreen.style.display = 'none';
    }
}

window.addEventListener('load', offLoadingScreen)