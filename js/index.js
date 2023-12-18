// menu inicio

const toggleMenu = () => {
        const navigation = document.querySelector(".navigation");
    
        const burgerMenu = document.querySelector(".menu-icon");
        const src = burgerMenu.getAttribute("src");
    
        const isBurger = src === "<?=base_url?>assets/img/burger-menu.svg";
        const iconName = isBurger ? "<?=base_url?>assets/img/close.svg" : "<?=base_url?>assets/img/burger-menu.svg";
    
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

  // animacion contacto

const handleMouseMove = event => {
        const eyes = document.getElementsByClassName('eye')
        for (let eye of eyes) {
               const x = eye.getBoundingClientRect().left + 10;
               const y = eye.getBoundingClientRect().top + 10;
               const rad = Math.atan2(event.pageX - x, event.pageY - y);
               const rot = (rad * (180 / Math.PI) * -1) + 180;
        
               eye.style.transform = `rotate(${rot}deg)`;
            }
}

document.addEventListener("mousemove", event => handleMouseMove(event))

document.getElementById('submit').addEventListener("mouseover", event => document.getElementById('ball').classList.toggle('look_at'))
document.getElementById('submit').addEventListener("mouseout", event => document.getElementById('ball').classList.toggle('look_at'))
  
