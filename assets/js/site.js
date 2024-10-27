function toggleHamburger(x) {
    let navigation = document.querySelector('.main-navigation');
    if (navigation) {
        navigation.classList.toggle("show-mobile");
        x.classList.toggle("change");
    }
}