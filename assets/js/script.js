// Меню бургер
const menuBtns = document.querySelectorAll('.burger--btn');
const menu = document.querySelector('.firstscreen__menu');
const body = document.querySelector('body');

if (menuBtns && menu) {
  menuBtns.forEach(function (menuBtn) {
    menuBtn.addEventListener('click', function () {
      menu.classList.toggle('menu--active');
      body.classList.toggle('menu--open')
    });
  });
}

//Слайдер свайпер
new Swiper('.swiper');

//Валідація
var im = new Inputmask("+38 (999) 999-99-99");

var mainForm = document.querySelector('.consul-form__form');
if (mainForm !== null) {
  var telMain = mainForm.querySelector('input[type="tel"]');
  im.mask(telMain);
}

const sendTelegramMessage = async (message) => {
  try {
    const botToken = '';
    const chatId = '';
    const apiUrl = `https://api.telegram.org/bot${botToken}/sendMessage`;

    // Формируем тело запроса
    const body = {
      chat_id: chatId,
      text: message,
      parse_mode: 'Markdown' // Указываем использование Markdown
    };

    // Опции для запроса
    const options = {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(body),
    };

    // Выполняем запрос к API Telegram
    const response = await fetch(apiUrl, options);
    const data = await response.json();

    alert('Заявка успішно відправлена! Очікуйте відповіді від менеджера.')
  } catch (error) {
    alert('Сталася помилка при відпраці заявки. Спробуйте ще раз.')
    console.error('Сталася помилка при відпраці заявки:', error);
  }
};

// Отримуємо форму
const form = document.getElementById('contact-form');

// Підключаємо обробник події на відправку форми
form.addEventListener('submit', (event) => {
  // Зупиняємо стандартну поведінку форми
  event.preventDefault();

  // Отримуємо дані форми
  const formData = new FormData(form);

  // Формируем сообщение для отправки в Telegram
  let message = '*Нова заявка з сайту:*\n';
  for (const [name, value] of formData.entries()) {
    message += `*${name}*: ${value}\n`;
  }

  // Отправляем сообщение в Telegram
  sendTelegramMessage(message);
});

// Звук видео
const soundOffBtns = document.querySelectorAll('.video__soundoff');
const soundOnBtns = document.querySelectorAll('.video__soundon');
const videos = document.querySelectorAll('.content__video');

function toggleSound(index) {
  // Включаем или выключаем звук для соответствующего видео
  videos[index].muted = !videos[index].muted;

  if (!videos[index].muted) {
    // Начинаем видео сначала
    videos[index].currentTime = 0;
  }

  // Переключаем видимость кнопок "Выключить звук" и "Включить звук"
  soundOffBtns[index].style.display = videos[index].muted ? 'block' : 'none';
  soundOnBtns[index].style.display = videos[index].muted ? 'none' : 'block';
}

if (soundOffBtns && videos) {
  soundOffBtns.forEach(function (soundOffBtn, index) {
    soundOffBtn.addEventListener('click', function () {
      toggleSound(index);
    });
  });

  soundOnBtns.forEach(function (soundOnBtn, index) {
    soundOnBtn.addEventListener('click', function () {
      toggleSound(index);
    });
  });
}

const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    const blockID = anchor.getAttribute('href').substr(1)
    if (menu.className.includes('menu--active')) {
      menu.classList.remove('menu--active');
      body.classList.remove('menu--open')
    }
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}


document.addEventListener("DOMContentLoaded", function () {
  const attendancesBlocks = document.querySelectorAll(".attendances_block");
  const sidebarTitle = document.querySelector(".sidebar__title");
  const sidebarDesc = document.querySelector(".sidebar__desc");
  const sidebarNote = document.querySelector(".bottom-content__note");

  const priceTimeElements = [
    {
      price: document.querySelector(".price__1"),
      time: document.querySelector(".time__1"),
    },
    {
      price: document.querySelector(".price__2"),
      time: document.querySelector(".time__2"),
    },
    {
      price: document.querySelector(".price__3"),
      time: document.querySelector(".time__3"),
    },
  ];


  priceTimeElements.forEach((element) => {
    if (element.price.innerHTML === '') {
      element.price.style.display = 'none';
    } else {
      element.price.style.display = 'flex';
    }

    if (element.time.innerHTML === '') {
      element.time.style.display = 'none';
    } else {
      element.time.style.display = 'flex';
    }
  })


  attendancesBlocks.forEach(function (block) {
    block.addEventListener("click", function () {
      attendancesBlocks.forEach(function (otherBlock) {
        otherBlock.classList.remove('active');
      });

      block.classList.add('active');

      const title = block.getAttribute("data-title");
      const desc = block.getAttribute("data-desc");

      priceTimeElements.forEach((element, index) => {
        const priceAttr = `data-price-${index + 1}`;
        const durationAttr = `data-duration-${index + 1}`;
        element.price.style.opacity = 0;
        element.time.style.opacity = 0;


        setTimeout(() => {
          element.price.style.opacity = 1;
          element.time.style.opacity = 1;
        }, 200);

        element.price.innerHTML = block.getAttribute(priceAttr);
        element.time.innerHTML = block.getAttribute(durationAttr);

        if (element.price.innerHTML === '') {
          element.price.style.display = 'none';
        } else {
          element.price.style.display = 'flex';
        }

        if (element.time.innerHTML === '') {
          element.time.style.display = 'none';
        } else {
          element.time.style.display = 'flex';
        }
      });

      sidebarTitle.style.opacity = 0;
      sidebarDesc.style.opacity = 0;
      sidebarNote.style.opacity = 0;
      document.querySelector('.sidebar__btn').style.opacity = 0;

      setTimeout(() => {
        sidebarTitle.style.opacity = 1;
        sidebarDesc.style.opacity = 1;
        sidebarNote.style.opacity = 1;
        document.querySelector('.sidebar__btn').style.opacity = 1;
      }, 200);

      sidebarTitle.innerHTML = title;
      sidebarDesc.innerHTML = desc;
      sidebarNote.innerHTML = block.getAttribute("data-note");
    });
  });
});

const scheduleOpenBtn = document.querySelector('.main__btn');
const scheduleCloseBtn = document.querySelector('.table__btn');
const servicesSchedule = document.querySelector('.services__schedule')

scheduleOpenBtn.addEventListener('click', function () {
  servicesSchedule.classList.remove('close');
  servicesSchedule.classList.add('open');
})

scheduleCloseBtn.addEventListener('click', function () {
  servicesSchedule.classList.remove('open');
  servicesSchedule.classList.add('close');
})

document.addEventListener("DOMContentLoaded", function () {
  const sidebarLinks = document.querySelectorAll(".sidebar__link");
  const sidebarImage = document.querySelector(".sidebar__image");

  sidebarLinks.forEach(function (link) {
    link.addEventListener("mouseenter", function () {
      // Получаем ссылку на изображение из атрибута data-image
      const imageSrc = this.getAttribute("data-image");

      // Скрываем изображение плавно
      sidebarImage.style.opacity = "0";

      // После завершения перехода, устанавливаем новое изображение и показываем его
      setTimeout(function () {
        sidebarImage.src = imageSrc;
        sidebarImage.style.opacity = "1";
      }, 300); // 500 миллисекунд - это значение, соответствующее времени перехода в CSS
    });

    link.addEventListener("mouseleave", function () {
      // Скрываем изображение при убирании мыши
      sidebarImage.style.opacity = "0";
    });
  });
});

