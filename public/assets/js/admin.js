const btnShow = document.querySelectorAll('.btn-show');

btnShow.forEach((item) => {
    item.addEventListener('click', () => {
        item.nextElementSibling.classList.toggle('d-none')
    })
}) 
