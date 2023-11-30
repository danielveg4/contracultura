const toggleMenuElement = document.getElementById('toggle-menu')
const mainNavElement = document.getElementById('main-nav')


function handleClick(){
    mainNavElement.classList.toggle('hide')
    
}

toggleMenuElement.addEventListener('click', handleClick);