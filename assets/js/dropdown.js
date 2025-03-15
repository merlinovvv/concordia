class Dropdown {
    /**
     * @param {HTMLElement} element - Корневой элемент dropdown
     */
    constructor(element) {
        this.dropdown = element;
        this.input = this.dropdown.querySelector('.dropdown__input');
        this.list = this.dropdown.querySelector('.dropdown__list');
        this.items = this.list.querySelectorAll('.dropdown__item');

        this.init();
    }

    /**
     * Инициализация событий
     */
    init() {
        this.input.addEventListener('click', () => this.toggleList());

        this.items.forEach(item => {
            item.addEventListener('click', () => this.selectItem(item.dataset.value));
        });

        document.addEventListener('click', (event) => {
            if (!this.dropdown.contains(event.target)) {
                this.closeList();
            }
        });

        // Устанавливаем активный элемент при инициализации
        const selectedItem = [...this.items].find(item => item.dataset.value === this.input.value);
        if (selectedItem) {
            selectedItem.classList.add('dropdown__item--selected');
        }
    }

    /**
     * Открывает/закрывает список
     */
    toggleList() {
        console.log(123);

        const isOpen = this.list.classList.contains('dropdown__list--visible');

        document.querySelectorAll('.dropdown__list--visible').forEach(el => {
            if (el !== this.list) {
                el.classList.remove('dropdown__list--visible');
            }
        });

        setTimeout(() => {
            if (!isOpen) {
                this.list.classList.add('dropdown__list--visible');
            }
        }, 0);
    }

    /**
     * Закрывает список
     */
    closeList() {
        this.list.classList.remove('dropdown__list--visible');
    }

    /**
     * Выбирает элемент списка
     * @param {string} value - выбранный элемент
     */
    selectItem(value) {
        this.items.forEach(el => el.classList.remove('dropdown__item--selected'));

        const selectedItem = [...this.items].find(el => el.dataset.value === value);
        if (selectedItem) {
            this.input.value = value;
            selectedItem.classList.add('dropdown__item--selected');
        }

        this.closeList();

        // Генерируем кастомное событие для подписчиков
        this.dropdown.dispatchEvent(new CustomEvent('dropdown:change', {
            detail: { value },
            bubbles: true
        }));
    }
}

// Инициализация всех dropdown'ов на странице
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.dropdown').forEach(dropdown => new Dropdown(dropdown));
});