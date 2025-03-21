const notyf = new Notyf({
    duration: 4000,
    position: {
        x: 'right',
        y: 'top',
    },
    className: 'toast',
    types: [
        {
            type: 'success',
            background: '#FF6939',
            icon: `<svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path d="M173.9 439.4l-166.4-166.4c-10-10-10-26.2 0-36.2l36.2-36.2c10-10 26.2-10 36.2 0L192 312.7 432.1 72.6c10-10 26.2-10 36.2 0l36.2 36.2c10 10 10 26.2 0 36.2l-294.4 294.4c-10 10-26.2 10-36.2 0z"/>
      </svg>`
        },
        {
            type: 'error',
            background: 'red',
            icon: `<svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
           <path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480L40 480c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24l0 112c0 13.3 10.7 24 24 24s24-10.7 24-24l0-112c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
        </svg>`
        },
    ]
});

function handleScroll() {
    const header = document.querySelector(".firstscreen__header");
    const mainContent = document.querySelector(".firstscreen__content");

    if (!header || !mainContent) return;

    const scrollHeight = header.offsetHeight;
    const isScrolled = window.scrollY > scrollHeight;

    if (isScrolled) {
        header.classList.add("fixed");
    } else {
        header.classList.remove("fixed");
    }

    const paddingTop = window.innerWidth > 550
        ? `calc(17vw + ${isScrolled ? scrollHeight : 0}px)`
        : `calc(230px + ${isScrolled ? scrollHeight : 0}px)`;

    if (mainContent.style.paddingTop !== paddingTop) {
        mainContent.style.paddingTop = paddingTop;
    }
}

// Используем requestAnimationFrame для оптимизации
let ticking = false;
window.addEventListener("scroll", function () {
    if (!ticking) {
        requestAnimationFrame(() => {
            handleScroll();
            ticking = false;
        });
        ticking = true;
    }
});


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
new Swiper('.swiper-services', {
    navigation: {
        nextEl: '.nav-bns__next',
        prevEl: '.nav-bns__pred',
    },
});

const swiperMobileServices = new Swiper('.swiper-mobile-services', {
    spaceBetween: 20,
    slidesPerView: "auto",
    pagination: {
        el: ".swiper-mobile-services-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".nav-bns__next",
        prevEl: ".nav-bns__pred",
    },
});

new Swiper('.swiper-reviews', {
    spaceBetween: 20,
    slidesPerView: "auto",
});

const im = new Inputmask("+38 (999) 999-99-99");
const tels = document.querySelectorAll('input[type="tel"]');

if (tels && tels?.length > 0) {
    tels?.forEach(tel => {
        im.mask(tel);
    })
}

const sendTelegramMessage = async (message) => {
    const apiUrl = `https://api.telegram.org/bot${window.botToken}/sendMessage`;

    // Формируем тело запроса
    const body = {
        chat_id: window.chatId,
        text: message,
        parse_mode: 'Markdown' // Указываем использование Markdown
    };

    // Выполняем запрос к API Telegram
    const data = await axios.post(apiUrl, body).then(res => res).catch(res => res);

    if (data?.status !== 200 && data?.status !== 201) {
        notyf.open({
            type: 'error',
            message: 'Сталася помилка при відпраці заявки. Спробуйте ще раз.',
        });
    } else {
        notyf.open({
            type: 'success',
            message: 'Заявка успішно відправлена! Очікуйте відповіді від менеджера.',
        });

        const allModals = document.querySelectorAll('.modal')

        allModals?.forEach(modal => {
            new Modal().closeModal(modal)
        })
    }
};

// const servicesSelectModals = [
//     document.getElementById('activity-form'),
//     document.getElementById('service-form')
// ];
//
// servicesSelectModals.forEach(modal => {
//     if (!modal) return;
//
//     const nextButton = modal.querySelector('.modal__button');
//     const dropdownInput = modal.querySelector('.dropdown__input');
//
//     if (!nextButton || !dropdownInput) return;
//
//     nextButton.addEventListener('click', () => {
//         const selectedItem = dropdownInput.value?.trim();
//         const sendModal = document.getElementById('send-request');
//         const selectedItemInSendModal = sendModal?.querySelector('.modal__selected-item');
//         const hiddenInSendModal = sendModal?.querySelector('.modal__hidden');
//
//         if (selectedItem && selectedItemInSendModal) {
//             dropdownInput.classList.remove('shake');
//             selectedItemInSendModal.innerHTML = selectedItem;
//             hiddenInSendModal.value = selectedItem;
//             new Modal().openModal(sendModal);
//         } else {
//             dropdownInput.classList.add('shake');
//             // Убираем класс после завершения анимации, чтобы позволить повторную активацию
//             setTimeout(() => dropdownInput.classList.remove('shake'), 500);
//         }
//     });
// });


// Отримуємо форму

const forms = [document.getElementById('activity-form'), document.getElementById('service-form')];

forms.forEach(form => {
    // Підключаємо обробник події на відправку форми
    form.addEventListener('submit', (event) => {
        // Зупиняємо стандартну поведінку форми
        event.preventDefault();

        // Перевірка на обов'язкові поля (як приклад)
        const formData = new FormData(form);
        const isValid = validateForm(formData);

        if (!isValid) {
            alert('Будь ласка, заповніть всі обов\'язкові поля.');
            return;
        }

        // Формуємо повідомлення для відправки в Telegram
        let message = '*Нова заявка з сайту:*\n';
        for (const [name, value] of formData.entries()) {
            message += `*${name}*: ${value}\n`;
        }

        // Відправляємо повідомлення в Telegram
        sendTelegramMessage(message);
    });
});

// Функція для валідації форми (приклад)
function validateForm(formData) {
    let isValid = true;

    // Приклад перевірки обов'язкових полів
    formData.forEach((value, name) => {
        if (name === 'required_field' && !value) {
            isValid = false;
        }
    });

    return isValid;
}

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
    const sidebarBtn = document.querySelector(".sidebar__btn");
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
            sidebarBtn.setAttribute('data-selected-activity', title);
            sidebarDesc.innerHTML = desc;
            sidebarNote.innerHTML = block.getAttribute("data-note");
        });
    });
});

// const scheduleOpenBtn = document.querySelector('.main__btn');
// const scheduleCloseBtn = document.querySelector('.table__btn');
// const servicesSchedule = document.querySelector('.services__schedule')
//
// scheduleOpenBtn.addEventListener('click', function () {
//     servicesSchedule.classList.remove('close');
//     servicesSchedule.classList.add('open');
// })
//
// scheduleCloseBtn.addEventListener('click', function () {
//     servicesSchedule.classList.remove('open');
//     servicesSchedule.classList.add('close');
// })

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
            sidebarImage.src = '';
        });
    });

    // Извлечение данных из таблицы и преобразование их в JSON с требуемой структурой
    function tableToJson(table) {
        const days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];
        let jsonData = {};

        // Инициализация JSON объекта для каждого дня недели
        days.forEach(function (day, index) {
            jsonData[day] = [];
        });

        // Проход по строкам таблицы (начиная со второй строки, так как первая содержит заголовки столбцов)
        for (let i = 1; i < table.rows.length; i++) {
            let tableRow = table.rows[i];
            let time = tableRow.cells[0].textContent.trim();

            // Проход по ячейкам с данными (начиная с первой ячейки после времени)
            for (let j = 1; j < tableRow.cells.length; j++) {
                let day = days[j - 1];
                let className = tableRow.cells[j].textContent.trim();

                // Если в ячейке есть данные, добавляем их в JSON структуру
                if (className !== '') {
                    jsonData[day].push({time: time, class: className});
                }
            }
        }

        return jsonData;
    }

    const mobileTable = document.querySelector(".shedule__table-mobile").querySelector('table');

    const jsonData = tableToJson(mobileTable);
    const tableContainer = document.querySelector(".shedule__table-mobile")
    if (jsonData) {
        for (let day in jsonData) {
            let newBlock = ''
            let newDay = ''
            switch (day) {
                case 'monday':
                    newDay = 'Понеділок'
                    break;
                case 'tuesday':
                    newDay = 'Віторок'
                    break;
                case 'wednesday':
                    newDay = 'Середа'
                    break;
                case 'thursday':
                    newDay = 'Четвер'
                    break;
                case 'friday':
                    newDay = 'П`ятниця'
                    break;
            }

            const rows = jsonData[day].map((row) => {
                return `<div class="day__row">
              <div class="day__class day_">
                <a href="#choose-activity" data-selected-activity="${row.class}, ${newDay}, ${row.time}">${row.class}</a>
              </div>
              <div class="day__time day_">
                ${row.time}
              </div>
            </div>`
            })

            newBlock =
                `<div class="day__block-container">
                <h5 class="day__block-title">${newDay}</h5>
                <div class="day__block">
                   ${rows.join('')}
                </div>
              </div>`

            mobileTable.style.display = 'none'
            tableContainer.innerHTML += newBlock
        }
    }

    const table = document.querySelector(".shedule__table").querySelector('table');

    for (let row_i = 0; row_i < table.rows?.length; row_i++) {
        const row = table.rows[row_i]
        const cells = row.cells

        for (let cell_i = 0; cell_i < cells?.length; cell_i++) {
            const cell = cells[cell_i]
            if (row_i !== 0 && !!cell?.innerHTML?.trim() && cell_i !== 0) {
                cell.classList.add('activity-cell')
                const activity = [cell.textContent.replace(/\s+/g, ' ').trim(), table.rows[0]?.cells[cell_i]?.textContent, row?.cells[0]?.textContent]?.join(', ')

                const activityLink = document.createElement('a')
                activityLink.setAttribute('data-selected-activity', activity)
                activityLink.setAttribute('href', '#choose-activity')
                activityLink.style.display = 'none'
                cell.append(activityLink)

                cell.addEventListener('click', () => {
                    activityLink.click()
                })
            }
        }
    }
});

const mobileServicesBlock = document.querySelector('.main__mobile-content');

const services = mobileServicesBlock.querySelectorAll('.service_block')

services.forEach((serviceBlock, index) => {
    const descOnClickButton = serviceBlock.querySelector('.desc_service_btn');

    descOnClickButton.addEventListener('click', function (e) {
        e.preventDefault();
        const serviceHeader = serviceBlock.querySelector('.service__info-header');
        const serviceDesc = serviceBlock.querySelector('.service__info-click');

        serviceHeader.classList.toggle('hidden')
        serviceDesc.classList.toggle('hidden')

        if (serviceHeader.className.includes('hidden')) {
            descOnClickButton.querySelector('.red-button__text').innerText = 'назад'
        } else {
            descOnClickButton.querySelector('.red-button__text').innerText = 'опис'
        }

    })
})

document.addEventListener('DOMContentLoaded', () => {
    const sortServicesDropdown = document.getElementById('sort-services');
    const dropdownItems = document.querySelectorAll('.dropdown__item');
    const swiperSlides = document.querySelectorAll('.services-mobile-slide');

    // 1️⃣ Сохраняем оригинальные слайды
    const originalSlides = Array.from(swiperSlides).map((slide, index) => ({
        element: slide,
        category: slide.dataset.category,
        index
    }));

    dropdownItems.forEach(item => {
        item.addEventListener('click', () => {
            const value = item.dataset.value;
            sortServicesDropdown.value = value;

            // 2️⃣ Удаляем все слайды из swiper
            swiperMobileServices.removeAllSlides();

            // 3️⃣ Фильтруем слайды по категории
            const filteredSlides = originalSlides
                .filter(slide => value === 'all' || slide.category === value)
                .map(slide => slide.element);

            // 4️⃣ Добавляем отфильтрованные слайды обратно
            swiperMobileServices.appendSlide(filteredSlides);

            // 5️⃣ Обновляем swiper
            swiperMobileServices.update();
        });
    });
});

const handlePopState = (event) => {
    // вместо выхода, можешь показать модалку или выполнить другое действие
    event.preventDefault();
    // "Возвращаем" пользователя обратно на ту же страницу
    window.history.pushState(null, '', window.location.href);
};

window.history.pushState(null, '', window.location.href);
window.addEventListener('popstate', handlePopState);
