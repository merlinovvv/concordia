class Modal {
    /**
     * Инициализация модалок на странице
     */
    constructor() {
        this.modals = document.querySelectorAll('.modal');
        this.init();
    }

    /**
     * Навешивает обработчики на ссылки и кнопки закрытия
     */
    init() {
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            const modalId = link.getAttribute('href').substring(1);
            const modal = document.getElementById(modalId);

            if (modal && modal.classList.contains('modal')) {
                link.addEventListener('click', (event) => {
                    event.preventDefault();

                    const dropdownValue = link.dataset.selectedActivity;
                    const modalDropdown = modal.querySelector('.dropdown');

                    if (modalDropdown) {
                        const dropdownInstance = modalDropdown.__instance;
                        if (dropdownInstance) {
                            dropdownInstance.selectItem(dropdownValue);
                        } else {
                            const newDropdown = new Dropdown(modalDropdown);
                            newDropdown.selectItem(dropdownValue);
                            modalDropdown.__instance = newDropdown;
                        }
                    }

                    this.openModal(modal);
                });
            }
        });

        this.modals.forEach(modal => {
            const closeButton = modal.querySelector('.modal__close');
            if (closeButton) {
                closeButton.addEventListener('click', () => this.closeModal(modal));
            }
            modal.addEventListener('click', (event) => {
                if (event.target === modal) {
                    this.closeModal(modal);
                }
            });
        });
    }

    /**
     * Открывает модальное окно
     * @param {HTMLElement} modal - элемент модалки
     */
    openModal(modal) {
        modal.classList.add('modal--active');
        document.body.classList.add('modal-open');
    }

    /**
     * Закрывает модальное окно
     * @param {HTMLElement} modal - элемент модалки
     */
    closeModal(modal) {
        modal.classList.remove('modal--active');
        document.body.classList.remove('modal-open');
    }
}

// Инициализация модалок при загрузке страницы
document.addEventListener('DOMContentLoaded', () => new Modal());