<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use App\DesignPatterns\Generating\FactoryMethod\Classes\Forms\BootstrapDialogForm;
use Illuminate\Http\Request;
use App\DesignPatterns\Fundamental\PropertyContainer\BlogPost as Post;
use App\DesignPatterns\Fundamental\Delegation\AppMessenger;
use App\DesignPatterns\Fundamental\EventChannel\EventChannelJob;
use App\DesignPatterns\Generating\AbstractFactory\GuiKitFactory;
use App\DesignPatterns\Generating\StaticFactory\StaticFactory;
use App\DesignPatterns\Generating\Singleton\SimpleSingleton;
use App\DesignPatterns\Generating\Singleton\AdvancedSingleton;
use App\DesignPatterns\Generating\Singleton\Interfaces\AnotherConnection;
use App\DesignPatterns\Generating\Singleton\LaravelSingleton;
use App\DesignPatterns\Generating\Multiton\SimpleMultiton;

class BlogPost extends Controller
{
    /**
     * Контейнер свойств (Property Container)
     * функциональный шаблон проектирования,
     * который служит для обеспечения возможности уже построенного и развернутого приложения
     * динамически расширять свои свойства, а в общем случае функциональность.
     * Это достигается путем добавления дополнительных свойств непосредственно самому объекту
     * в некоторый “контейнер свойств”, вместо расширения класса объекта новым свойством.
     */
    public function propertyContainer()
    {
        $item = new Post();

        $item->setTitle('Post Title');
        $item->seCategory(10);

        $item->addProperty('view_count', 100);

        $item->addProperty('last_update', '2030-10-10');
        $item->setProperty('last_update', '2030-10-11');

        $item->addProperty('read_only', true);
        $item->deleteProperty('read_only');

        dd($item);
    }

    /**
     * Делегирование (Delegation)
     * основной шаблон проектирования, в котором объект внешне выражает некоторое поведение,
     * но в реальности передаёт ответственность за выполнение этого поведения связанному объекту.
     * Шаблон делегирования является фундаментальной абстракцией, на основе которой реализованы другие шаблоны -
     * композиция (также называемая агрегацией), примеси (mixins) и аспекты (aspects).
     */
    public function delegation()
    {
        $item = new AppMessenger();

        $item->setSender('user1@mail.com');
        $item->setRecipient('user2@mail.com');
        $item->setMessage('Hello');
        $item->send();
        dump($item);

        $item->toSms();
        $item->setSender('1111111');
        $item->setRecipient('22222222');
        $item->setMessage('Hello');
        $item->send();
        dump($item);
    }

    /**
     * Канал событий (англ. event channel)
     * фундаментальный шаблон проектирования, используется для создания канала связи и
     * коммуникации через него посредством событий.
     * Этот канал обеспечивает возможность разным издателям публиковать события и подписчикам,
     * подписываясь на них, получать уведомления.
     * (Пример: есть клметы(subscribers), магазин(event channel), поставщики(publisher).
     * Клиенты подписываются на получение магазином определенных товаров
     * поставщиков и им не нужно знать кто такие поставщики)
     */
    public function eventChannel()
    {
        $item = new EventChannelJob();
        $item->run();
    }


    /**
     * Интерфейс (англ. interface) — основной шаблон проектирования,
     * являющийся общим методом для структурирования компьютерных программ для того,
     * чтобы их было проще понять.
     *
     * В общем, интерфейс — это класс, который обеспечивает программисту простой или более программно-специфический
     * способ доступа к другим классам.
     *
     * Интерфейс может содержать набор объектов и обеспечивать простую, высокоуровневую функциональность
     * для программиста (например, Шаблон Фасад); он может обеспечивать более чистый или более специфический способ
     * использования сложных классов («класс-обёртка»); он может использоваться в качестве «клея»
     * между двумя различными API (Шаблон Адаптер); и для многих других целей.
     *
     * Другими типами интерфейсных шаблонов являются: Шаблон делегирования, Шаблон компоновщик, и Шаблон мост.
     */

    /**
     * -----------Порждающие шаблоны---------------
     */

    /**
     * Абстрактная фабрика (англ. Abstract factory) или Инструментарий —
     * порождающий шаблон проектирования, предоставляет интерфейс для создания семейств взаимосвязанных
     * или взаимозависимых объектов, не специфицируя их конкретных классов. Шаблон реализуется созданием
     * абстрактного класса Factory, который представляет собой интерфейс для создания компонентов системы
     * (например, для оконного интерфейса он может создавать окна и кнопки).
     * Затем пишутся классы, реализующие этот интерфейс.
     * Семейства объектов должны происходить от одних и тех же интерфейсов и быть взаимозаменяемыми. Т.е можно
     * переключаться между семействами
     */

    public function AbstractFactory()
    {
        $guiKit = (new GuiKitFactory())->getFactory('bootstrap');
        $result[] = $guiKit->buildButton()->drow();
        $result[] = $guiKit->buildCheckbox()->drow();

        dump($result);
    }

    /**
     * Фабричный метод (англ. Factory Method), или виртуальный конструктор (англ. Virtual Constructor) —
     * порождающий шаблон проектирования, предоставляющий подклассам (дочерним классам) интерфейс для создания
     * экземпляров некоторого класса. В момент создания наследники могут определить, какой класс создавать.
     * Иными словами, данный шаблон делегирует создание объектов наследникам родительского класса.
     * Это позволяет использовать в коде программы не специфические классы, а манипулировать абстрактными объектами на
     * более высоком уровне.
     */

    public function FactoryMethod()
    {
        $dialogForm = new BootstrapDialogForm();
        $result = $dialogForm->render();
        dump($result);
    }

    /**
     * Статическая фабрика - самый простой способ создания фабрик(объектов класаоов) с помощью одного статического метода
     * фабрики, который обычно называется factory  или build
     */
    public function StaticFactory()
    {
        $appMailMessage = StaticFactory::build('email');
        $appPhoneMessage = StaticFactory::build('sms');

        dump($appMailMessage);
        dump($appPhoneMessage);
    }

    /**
     * Простая фабрика - просто генерирует экземпляр для клиента без предоставления какой-либо логики экземпляра.
     * Это функция или метод, возвращающая объекты разных прототипов или классов из вызова какого-то метода,
     * который считается новым.
     */
    public function SimpleFactory()
    {
        $factory = new MessengerSimplaFactory();

        $appMailMessage = $factory->build('email');
        $appPhoneMessage = $factory->build('sms');

        dump($appMailMessage);
        dump($appPhoneMessage);
    }

    /**
     * Одиночка (англ. Singleton) — порождающий шаблон проектирования, гарантирующий, что в однопоточном приложении
     * будет единственный экземпляр некоторого класса, и предоставляющий глобальную точку доступа к этому экземпляру.
     * Антипаттерн. Не использовать в классах, где важно состояние, т.к. на разных этапах выполнеия состояния класса
     * могу меняться.
     *Единственный экземпляр - меньше памяти.
     */
    public function Singleton()
    {
        //Simple way
        $result['simpleSingleton1'] = SimpleSingleton::getInstance();
        $result['simpleSingleton2'] = SimpleSingleton::getInstance();
        $result['simpleSingleton3'] = SimpleSingleton::getInstance();

        $result[] = $result['simpleSingleton1'] === $result['simpleSingleton3'];

        //Advanced way
        $result['advancedSingleton1'] = AdvancedSingleton::getInstance();
        $result['advancedSingleton1']->setTest('advancedSingleton1');
        $result['advancedSingleton2'] = AdvancedSingleton::getInstance();

        //Laravel way
        $result['laravelSingleton1'] = app(AnotherConnection::class);
        $result['laravelSingleton1']->setTest('laravelSingleton1');
        $result['laravelSingleton2'] = app(AnotherConnection::class);
        $result['laravelSingleton3'] = new LaravelSingleton();

        $result[] = $result['laravelSingleton1'] === $result['laravelSingleton2'];
        $result[] = $result['laravelSingleton1'] === $result['laravelSingleton3'];
    }

    /**
     * Мультитон (англ. multiton) — порождающий шаблон проектирования, который обобщает шаблон "Одиночка". В то время,
     * как "Одиночка" разрешает создание лишь одного экземпляра класса, мультитон позволяет создавать несколько
     * экземпляров, которые управляются через ассоциативный массив. Создаётся лишь один экземпляр для каждого из
     * ключей ассоциативного массива, что позволяет контролировать уникальность объекта по какому-либо признаку.
     */
    public function Multiton()
    {
        $multiton[] = SimpleMultiton::getInstance('mysql')->setTest('mysql-test');
        $multiton[] = SimpleMultiton::getInstance('mongo');

        $multiton[] = SimpleMultiton::getInstance('mysql');
        $multiton[] = SimpleMultiton::getInstance('mongo')->setTest('mongo-test');

        $simpleMultitonNext = SimpleMultitonNext::getInstance('mysql');
        $simpleMultitonNext->test2 = 'init';
        $multiton[] = $simpleMultitonNext;

        $simpleMultitonNext = SimpleMultitonNext::getInstance('mysql');
        $simpleMultitonNext->test2 = 'init2';
        $multiton[] = $simpleMultitonNext;

        dump($multiton);
    }

    /**
     * -----------Поведенческие шаблоны---------------
     */

    /**
     *Стратегия (англ. Strategy) — поведенческий шаблон проектирования, предназначенный для определения семейства
     * алгоритмов, инкапсуляции каждого из них и обеспечения их взаимозаменяемости. Это позволяет выбирать алгоритм
     * путём определения соответствующего класса. Шаблон Strategy позволяет менять выбранный алгоритм независимо от
     * объектов-клиентов, которые его используют.
     */
    public function Strategy()
    {
        $period = [
            Carbon::now()->subMonth()->startOfMonth(),
            Carbon::now()->subMonth()->endOfMonth(),
        ];

        $users = User::all();
        $result = (new SalaryManager($period, $users))->handle();
        dump($result);
    }
}
