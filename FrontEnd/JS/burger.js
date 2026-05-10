const burgerBtn = document.querySelector('.burger-menu');
const closeBtn = document.getElementById('closeMenu');
const mobileMenu = document.getElementById('mobileMenu');
// Открыть
burgerBtn.addEventListener('click', () => {
    mobileMenu.classList.add('active');
    document.body.style.overflow = 'hidden'; // Запрещаем скролл при открытом меню
});
// Закрыть
closeBtn.addEventListener('click', () => {
    mobileMenu.classList.remove('active');
    document.body.style.overflow = ''; // Возвращаем скролл
});