<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Асфальтирование дорог и территорий</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome для иконок -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .hero-bg {
            background: linear-gradient(135deg, #1a1a1a 0%, #434343 100%);
        }

        .section-bg {
            background: #f8f9fa;
        }

        .card-shadow {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
        }
    </style>
</head>

<body class="font-sans">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <i class="fas fa-road text-orange-500 text-2xl mr-2"></i>
                    <span class="text-xl font-bold text-gray-800">Sett Group</span>
                </div>
                <div class="hidden md:block">
                    <a href="#services" class="px-4 py-2 text-gray-600 hover:text-orange-500">Услуги</a>
                    <a href="#calculator" class="px-4 py-2 text-gray-600 hover:text-orange-500">Калькулятор</a>
                    <a href="#about" class="px-4 py-2 text-gray-600 hover:text-orange-500">О нас</a>
                    <a href="#contact" class="px-4 py-2 text-gray-600 hover:text-orange-500">Контакты</a>
                </div>
                <div class="md:hidden">
                    <button class="text-gray-600 hover:text-orange-500">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg text-white pt-20 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Асфальтирование дорог, дворов и территорий под ключ
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-300">
                    Профессиональное асфальтирование в Алматы и области. Собственная техника,
                    гарантия качества, работаем по договору.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="openWhatsApp()" class="bg-green-500 hover:bg-green-600 px-8 py-4 rounded-lg text-white font-semibold text-lg transition-all">
                        <i class="fab fa-whatsapp mr-2"></i>Заказать расчет
                    </button>
                    <a href="tel:+87078484746" class="border-2 border-white px-8 py-4 rounded-lg text-white font-semibold text-lg hover:bg-white hover:text-gray-800 transition-all inline-block text-center">
                        <i class="fas fa-phone mr-2"></i>Вызвать замерщика
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 section-bg relative">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://media.istockphoto.com/id/171145217/ru/%D1%84%D0%BE%D1%82%D0%BE/%D0%B4%D0%BE%D1%80%D0%BE%D0%B3%D0%B0-roller.jpg?s=612x612&w=0&k=20&c=U5kG0YjmjU_05fO8gTY2AWpywPqEutU_TNksep8hxX4=')"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Наши услуги
                </h2>
                <p class="text-xl text-white">
                    Полный спектр услуг по асфальтированию и благоустройству территорий
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-lg p-6 card-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-road text-orange-500 text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Асфальтирование дорог</h3>
                        <p class="text-gray-600">
                            Профессиональное асфальтирование автомобильных дорог любого масштаба.
                        </p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-lg p-6 card-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-home text-orange-500 text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Асфальтирование дворов</h3>
                        <p class="text-gray-600">
                            Благоустройство дворовых территорий, парковок, подъездов к домам.
                            Создаем комфортную среду для жильцов.
                        </p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="bg-white rounded-lg p-6 card-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-tools text-orange-500 text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ямочный ремонт</h3>
                        <p class="text-gray-600">
                            Быстрое восстановление поврежденных участков дорожного покрытия.
                            Качественный ремонт с гарантией.
                        </p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="bg-white rounded-lg p-6 card-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-tree text-orange-500 text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Благоустройство территорий</h3>
                        <p class="text-gray-600">
                            Комплексное благоустройство: озеленение, освещение,
                            установка малых архитектурных форм.
                        </p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="bg-white rounded-lg p-6 card-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-shield-alt text-orange-500 text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Гарантийное обслуживание</h3>
                        <p class="text-gray-600">
                            Гарантия на все виды работ.
                            Бесплатное устранение дефектов в гарантийный период.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Calculator Section -->
    <section id="calculator" class="py-16 section-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Калькулятор стоимости
                </h2>
                <p class="text-xl text-gray-600">
                    Рассчитайте примерную стоимость вашего проекта
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-lg p-8 card-shadow">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-xl font-bold mb-6">Параметры проекта</h3>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Площадь (м²)</label>
                                <input type="number" id="area" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Введите площадь">
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Толщина покрытия</label>
                                <select id="thickness" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    <option value="5" selected>5 см - Стандартное покрытие</option>
                                    <option value="7">7 см - Грузовой транспорт</option>
                                    <option value="10">10 см - Интенсивное движение</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Тип работ</label>
                                <select id="workType" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    <option value="asphalt">Асфальтирование</option>
                                    <option value="repair">Ямочный ремонт</option>
                                </select>
                            </div>

                            <button onclick="calculatePrice()" class="btn-primary w-full py-3 rounded-lg text-white font-semibold">
                                <i class="fas fa-calculator mr-2"></i>Рассчитать стоимость
                            </button>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold mb-6">Примерная стоимость</h3>
                            <div id="priceResult" class="bg-gray-50 rounded-lg p-6 text-center">
                                <div class="text-3xl font-bold text-orange-500 mb-2">от 4 000 ₸</div>
                                <div class="text-gray-600 mb-4">за м²</div>
                                <div class="text-sm text-gray-500">
                                    *Цена может варьироваться в зависимости от сложности работ и материалов
                                </div>
                            </div>

                            <div class="mt-6">
                                <h4 class="font-bold mb-3">Что входит в стоимость:</h4>
                                <ul class="text-sm text-gray-600 space-y-2">
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Подготовка основания</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Укладка асфальта</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Уплотнение покрытия</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Уборка территории</li>
                                    <li><i class="fas fa-check text-green-500 mr-2"></i>Гарантия год</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Почему выбирают нас
                </h2>
                <p class="text-xl text-gray-600">
                    Наши преимущества и гарантии качества
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-orange-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-calendar-alt text-orange-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">10+ лет опыта</h3>
                    <p class="text-gray-600">Более 10 лет успешной работы на рынке асфальтирования</p>
                </div>

                <div class="text-center">
                    <div class="bg-orange-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-truck text-orange-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Своя техника</h3>
                    <p class="text-gray-600">Собственный парк современной дорожно-строительной техники</p>
                </div>

                <div class="text-center">
                    <div class="bg-orange-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-orange-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Гарантия 1 год</h3>
                    <p class="text-gray-600">Гарантия качества на все виды работ</p>
                </div>

                <div class="text-center">
                    <div class="bg-orange-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-file-contract text-orange-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Работаем по договору</h3>
                    <p class="text-gray-600">Все работы выполняются по официальному договору</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-16 section-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Отзывы клиентов
                </h2>
                <p class="text-xl text-gray-600">
                    Что говорят наши клиенты о качестве работ
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-6 card-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://static.espreso.tv/uploads/photobank/313000_314000/313131_Oleksij_Petrov_censor_social_new_960x380_0.webp" alt="Алексей" class="rounded-full w-12 h-12 mr-4 object-cover border-2 border-orange-200 shadow-md">
                        <div>
                            <h4 class="font-bold">Алексей Петров</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Отличная работа! Асфальтировали двор нашего дома. Все сделали быстро и качественно.
                        Прошло уже полгода - никаких проблем. Рекомендую!"
                    </p>
                </div>

                <div class="bg-white rounded-lg p-6 card-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://www.conservatoire.edu.kz/upload/medialibrary/c97/c975ea177e8df0f68c9fba0df3a74ee4.jpg" alt="Мария" class="rounded-full w-12 h-12 mr-4 object-cover border-2 border-orange-200 shadow-md">
                        <div>
                            <h4 class="font-bold">Айгүл Нұрланова</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Кеңсе үшін автотұрақты асфальттауға тапсырыс бердік. Жұмыс жасауға кедергі келтірмей, мұқият жұмыс істеді.
                        Баға жетімді, сапасы өте жақсы. Рахмет!"
                    </p>
                </div>

                <div class="bg-white rounded-lg p-6 card-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://images.kinorium.com/persona/150/1727644.jpg?20201106110719" alt="Сайлау" class="rounded-full w-12 h-12 mr-4 object-cover border-2 border-orange-200 shadow-md">
                        <div>
                            <h4 class="font-bold">Сайлау Шокай</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Профессиональная команда! Сделали ямочный ремонт на нашей улице.
                        Все быстро и качественно. Буду обращаться еще."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                        О компании
                    </h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Компания "Sett Group" - ведущий поставщик услуг по асфальтированию дорог и благоустройству территорий в Алматы и области.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        За более чем 10 лет работы мы выполнили сотни проектов различной сложности - от небольших дворовых территорий до крупных промышленных объектов.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-500">500+</div>
                            <div class="text-gray-600">Выполненных проектов</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-500">50+</div>
                            <div class="text-gray-600">Единиц техники</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Лицензия на строительство</span>
                        <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Сертификат ISO 9001</span>
                        <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Страхование работ</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 section-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Контакты
                </h2>
                <p class="text-xl text-gray-600">
                    Свяжитесь с нами для консультации и расчета стоимости
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div>
                    <h3 class="text-2xl font-bold mb-6">Наши контакты</h3>

                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="bg-orange-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-orange-500"></i>
                            </div>
                            <div>
                                <div class="font-bold">Телефон</div>
                                <div class="text-gray-600">+7 (707) 848 47 46</div>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="bg-orange-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fab fa-whatsapp text-orange-500"></i>
                            </div>
                            <div>
                                <div class="font-bold">WhatsApp</div>
                                <div class="text-gray-600">+7 (707) 482 41 21</div>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="bg-orange-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-orange-500"></i>
                            </div>
                            <div>
                                <div class="font-bold">Адрес офиса</div>
                                <div class="text-gray-600">г. Алматы, проспект Аль-Фараби, 19 к1Б</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="font-bold mb-4">Режим работы</h4>
                        <div class="text-gray-600">
                            <div>Пн-Пт: 8:00 - 20:00</div>
                            <div>Сб-Вс: 9:00 - 18:00</div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <h3 class="text-2xl font-bold mb-6">Оставить заявку</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Имя</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Ваше имя">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Телефон</label>
                            <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="+7 (___) ___-__-__">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Тип работ</label>
                            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                                <option>Асфальтирование дорог</option>
                                <option>Асфальтирование дворов</option>
                                <option>Ямочный ремонт</option>
                                <option>Благоустройство территорий</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Площадь (м²)</label>
                            <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Укажите площадь">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Комментарий</label>
                            <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Дополнительная информация о проекте"></textarea>
                        </div>

                        <button type="submit" class="btn-primary w-full py-3 rounded-lg text-white font-semibold">
                            <i class="fas fa-paper-plane mr-2"></i>Отправить заявку
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-road text-orange-500 text-2xl mr-2"></i>
                        <span class="text-xl font-bold">Sett Group</span>
                    </div>
                    <p class="text-gray-400">
                        Профессиональное асфальтирование дорог и территорий в Алматы и области.
                    </p>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Услуги</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Асфальтирование дорог</li>
                        <li>Асфальтирование дворов</li>
                        <li>Ямочный ремонт</li>
                        <li>Благоустройство территорий</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Контакты</h4>
                    <div class="space-y-2 text-gray-400">
                        <div><i class="fas fa-phone mr-2"></i>+7 (707) 848 47 46</div>
                        <div><i class="fas fa-envelope mr-2"></i>info@settgroup.kz</div>
                        <div><i class="fas fa-map-marker-alt mr-2"></i>г. Алматы, проспект Аль-Фараби, 19 к1Б</div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Sett Group. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Calculator -->
    <script>
        function calculatePrice() {
            const area = document.getElementById('area').value;
            const thickness = document.getElementById('thickness').value;
            const workType = document.getElementById('workType').value;

            if (!area) {
                alert('Пожалуйста, введите площадь');
                return;
            }

            let basePrice = 4000; // базовая цена за м²

            // Корректировка по толщине
            if (thickness == 5) basePrice = 4500;
            else if (thickness == 7) basePrice = 6500;
            else if (thickness == 10) basePrice = 9000;

            // Корректировка по типу работ
            if (workType == 'repair') basePrice *= 1.5;

            const totalPrice = area * basePrice;

            document.getElementById('priceResult').innerHTML = `
                <div class="text-3xl font-bold text-orange-500 mb-2">${totalPrice.toLocaleString()} ₸</div>
                <div class="text-gray-600 mb-4">за ${area} м²</div>
                <div class="text-sm text-gray-500">
                    *Цена может варьироваться в зависимости от сложности работ и материалов
                </div>
            `;
        }

        // WhatsApp function
        function openWhatsApp() {
            const phoneNumber = '77084824121';
            const message = 'Здравствуйте, я по поводу асфальтирования';
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>