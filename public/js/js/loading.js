function hideLoadingScreen() {
    setTimeout(function () {
        document.getElementById('loading-screen').style.display = 'none';
        document.getElementById('main-content').style.display = 'block';
    }, 1100); 
}