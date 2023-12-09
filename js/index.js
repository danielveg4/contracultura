// menu inicio

const toggleMenu = () => {
        const navigation = document.querySelector(".navigation");
    
        const burgerMenu = document.querySelector(".menu-icon");
        const src = burgerMenu.getAttribute("src");
    
        const isBurger = src === "assets/img/burger-menu.svg";
        const iconName = isBurger ? "assets/img/close.svg" : "assets/img/burger-menu.svg";
    
        burgerMenu.setAttribute("src", iconName);
    
        if (!isBurger) {
            navigation.classList.add("navigation--mobile--fadeout");
            setTimeout(() => {
                navigation.classList.toggle("navigation--mobile");
            }, 300);
        } else {
            navigation.classList.remove("navigation--mobile--fadeout");
            navigation.classList.toggle("navigation--mobile");
        }
    };

// menu usuario

document.addEventListener('DOMContentLoaded', function () {
    const userIcon = document.getElementById('userIcon');
    const submenu = document.getElementById('submenu');
  
    userIcon.addEventListener('click', function () {
      submenu.classList.toggle('show');
    });
  
    document.addEventListener('click', function (event) {
      if (!submenu.contains(event.target) && event.target !== userIcon) {
        submenu.classList.remove('show');
      }
    });
  });
  
