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
