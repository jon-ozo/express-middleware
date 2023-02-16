function nav() {
    const mobileIcon = document.getElementById('nav-menu-list');
    // const mobileMenu = document.getElementById('mobile-menu');

    if(mobileIcon.classList.contains('hide')) {
        mobileIcon.classList.toggle('hide');
    } else {
        mobileIcon.classList.toggle('hide');
    }
};

function copyright() {
    const box = document.querySelector('#copyright');
    let date = new Date().getFullYear();
    box.innerHTML = `<p>Copyright &copy; ${date} Cometh the man cometh the hour. Designed by WBM. All rights reserved.</p>`
}copyright();
