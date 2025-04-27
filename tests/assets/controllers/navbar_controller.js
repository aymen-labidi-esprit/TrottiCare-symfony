// assets/controllers/navbar_controller.js (quick version)
export default class {
    connect() {
        window.addEventListener('scroll', () =>
            document.querySelector('.navbar-glass')
                .classList.toggle('scrolled', window.scrollY > 20)
        )
    }
}
