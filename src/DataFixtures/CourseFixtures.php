<?php

namespace App\DataFixtures;

use App\Entity\Course;
use App\Entity\Lesson;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CourseFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $arCourses = [
            [
                'NAME' => 'Курсы кройки и шитья',
                'CODE' => 'sewing',
                'DESCRIPTION' => 'Программа заочного курса является дополнительной общеобразовательной общеразвивающей программой, реализуемой с целью удовлетворения индивидуальных образовательных потребностей и интересов граждан в получении необходимых
теоретических знаний и навыков в области швейного мастерства.',
                'LESSONS' => [
                    [
                        'NAME' => 'Ткани и их свойства. Виды ручных швов',
                        'CONTENT' => 'Из истории моды. Ткани и их свойства. Наиболее часто встречающиеся ткани и их сочетание. Инструменты и приспособления. Ручные швы и стежки. Ручные декоративные строчки. Домашняя работа.',
                        'SORT' => 0
                    ],
                    [
                        'NAME' => 'Швейная машина и ее устройство. Стили и направления в моде',
                        'CONTENT' => 'Швейная машина и ее устройство. Что необходимо учитывать при приобретении машины. Неполадки в работе машины и их устранение. Машинные стежки и швы. Готовимся к приему гостей. Пошив скатерти и салфеток, их декор и использование в современном интерьере. Стили и направления в моде. Домашняя работа.',
                        'SORT' => 20
                    ],
                    [
                        'NAME' => 'Пошив юбки. Методика снятия мерок. Построение чертежа',
                        'CONTENT' => 'Юбка. Как правильно подобрать фасон юбки с учетом всех достоинств и недостатков фигуры. Методика снятия мерок. Построение чертежа основы прямой юбки. Припуски на швы. Раскрой. Подготовка к первой примерке. Примерка. Технология обработки вытачек. Пошив юбки. Дефекты посадки и их исправление. Домашняя работа.',
                        'SORT' => 50
                    ],
                ]
            ],
            [
                'NAME' => 'Обучение работе с эпоскидной смолой',
                'CODE' => 'resin',
                'DESCRIPTION' => 'Внешне большинство эпоксидных смол, выпускаемых для работы в быту, похожи на лаки разной степени густоты.',
                'LESSONS' => [
                    [
                        'NAME' => 'Техника безопасности при работе с полимерами',
                        'CONTENT' => 'При разработке эпоксидных смол и отвердителей в линейке продуктов Artline мы стремились к наилучшим физико-химическим свойствам с наименьшим риском для людей и окружающей среды. Смолы нашей компании не имеют резкого запаха, соответственно доля химических веществ в испаряемом продукте не велика и составляет не более 1,5%, что позволяет избежать чрезмерного воздействия на организм. Тем не менее, так как работа предстоит с жидкими химическими компонентами, необходимо соблюдать меры предосторожности.',
                        'SORT' => 10
                    ],
                    [
                        'NAME' => 'Влажность и температурный режим. Важнейшие факторы',
                        'CONTENT' => 'Мы не рекомендуем заливать эпоксидную смолу во время и после дождя, а также в комнате, где имеется большое количество растений, ваши заливки могут не отвердеть. Проверяйте влажность специальным прибором — гигрометром, если вы проживаете в климате с повышенной влажностью или узнавайте значения из прогноза погоды в интернете. Помещение, в котором будет производиться заливка должно быть максимально сухим. Это касается и того, что вы планируете заливать, у дерева влажность должна быть не более 10-12%, другой материал для заливки (цветы, листья и пр.) тоже желательно хорошо просушить.',
                        'SORT' => 20
                    ],
                    [
                        'NAME' => 'Подготовка к работе с эпоксидной смолой',
                        'CONTENT' => 'Во время работы с эпоксидной смолой ваше рабочее место должно быть чистым, сухим и обеспыленным. Рекомендуем закрыть все поверхности полиэтиленовой плёнкой. Подготовьте все требуемые для заливки материалы и инструменты.',
                        'SORT' => 30
                    ],
                    [
                        'NAME' => 'Как смешивать эпоксидную смолу?',
                        'CONTENT' => 'Перед тем, как приступить к работе, необходимо убедиться, что составы имеют комнатную температуру. После транспортировки в холодное время года они должны постоять в тепле и отогреться. Если вы этого не сделаете и будете смешивать холодные компоненты, то смесь у вас может сильно запузырится. Из-за большого количества пузырей, стать белой, как молоко.',
                        'SORT' => 40
                    ],
                ]
            ],
            [
                'NAME' => 'Торговля на бирже',
                'CODE' => 'trading',
                'DESCRIPTION' => 'Вы научитесь торговать на финансовых рынках и контролировать риски. Создадите собственную стратегию торговли и сможете совершать обдуманные сделки.',
                'LESSONS' => [
                    [
                        'NAME' => 'Введение в трейдинг',
                        'CONTENT' => 'Поймёте, какие навыки нужны для успешной торговли и как важно финансовое планирование. Изучите базовую терминологию, инструменты трейдинга и типы счетов для удобной торговли. Узнаете, что такое индивидуальный инвестиционный счёт, какими бывают биржевые заявки и для чего они нужны. Познакомитесь с особенностями современных биржевых площадок. Оцените себя по скил-карте, определите точки роста и обозначите цели, которых сможете достигнуть после обучения работе на бирже.',
                        'SORT' => 10
                    ],
                    [
                        'NAME' => 'Аспекты финансового планирования для трейдинга',
                        'CONTENT' => 'Разберёте свою финансовую ситуацию. Проанализируете свой бюджет, активы и пассивы. Поймёте, как можно работать с подушкой безопасности. Определите сумму для будущих инвестиций. Научитесь правильно ставить и декомпозировать финансовые цели и определять допустимую степень риска на капитал и будущие поступления.',
                        'SORT' => 20
                    ],
                    [
                        'NAME' => 'Выбор стратегии по уровню риска',
                        'CONTENT' => 'Изучите 3 стратегии — спекуляции, позиционной торговли и инвестиций, их правила и признаки. Научитесь определять, сочетать их и выявлять потенциальные риски. Поймёте, в каких случаях стоит применить ту или иную стратегию.',
                        'SORT' => 30
                    ],
                ]
            ],
        ];

        foreach ($arCourses as $arCourse) {
            $course = new Course();
            $course->setName($arCourse['NAME']);
            $course->setCode($arCourse['CODE']);
            $course->setDescription($arCourse['DESCRIPTION']);
            $manager->persist($course);

            foreach ($arCourse['LESSONS'] as $arLesson) {
                $lesson = new Lesson();
                $lesson->setCourse($course);
                $lesson->setName($arLesson['NAME']);
                $lesson->setContent($arLesson['CONTENT']);
                $lesson->setSort($arLesson['SORT']);

                $manager->persist($lesson);
            }
        }
        $manager->persist($course);

        $manager->flush();
    }
}