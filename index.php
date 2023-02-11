<?php
session_start();
$title = 'Главная';
if(($_SESSION['name']?? '') === ''){
    require "blocks/header1.php";
} else {
    setcookie("cookLog", $_SESSION['name'], time()+432000);
    if(isset($_COOKIE["cookLog"])){
        setcookie("cookPromo", true, time()+86400);
        
    }
    require "blocks/header2.php";
}

$d=date('d-m-Y H:i', $_SESSION['time']);
$nowT=time()-$_SESSION['time'];
$endH=floor((86400-$nowT)/(60*60));
$endM = floor((86400-$nowT-$endH*60*60)/60);
$endS=floor(86400-$nowT-$endH*60*60 - $endM*60);
?>

<div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text"><ul>Отдых для души и тела! Мы предлагаем:
            <li> Различные виды массажа</li>
            <li> Ароматерапия и косметические процедуры </li>
            <li> Скидки ко дню рождения и многое другое</li>
        </ul></p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1630835425197-50feeba99ecd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">В нашем салоне работают мастера только высшей категории и используется самое современное оборудование.</p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1552373438-9be21778554d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">В честь дня Святого Валентина, да конца февраля скидка 15% на парные посещения!</p>
    </div>
    </div>
    </div>
  </div>
</div>

<br>
<br>
<?php
if(isset($_SESSION['name'])){
    include "blocks/hi.php";
}

if(isset($_POST['birthday'])){
    $birthday = strtotime($_POST['birthday']);
    $diff = abs($birthday - time());
    $months = floor($diff / (30*60*60*24));
    $days = floor(($diff - $months*30*60*60*24)/ (60*60*24));
    $hours = floor(($diff - $months*30*60*60*24 - $days*60*60*24) / (60*60));
    $end_date = "$months мес. $days д. $hours ч.";
    if(($months && $days && $hours)===0){
        echo "<h4> Поздравляем с Днем рождения!</h4>";
        include 'blocks/ad3.php';
    } else {
        echo "<h4>До вашего дня рождения $end_date</h4>";
    }
}

?>
<br>

<h1 align="center">О салоне</h1>
<section class="news">
<article>
<p>
    <h4>Наш СПА-салон — более 10 лет в индустрии СПА и красоты.
    В настоящее время мало кому удается избежать стрессов, неблагоприятного
    воздействия окружающей среды, отказаться от малоподвижного образа жизни,
    нервной работы, неправильного питания. Бурная жизнь большого города, эмоциональное
    перенапряжение, синдром хронической усталости — вот, что отличает высокие темпы и
    уровень жизни мегаполиса. А наш салон настоящей оазис, где вы можете отвлечся от всей этой суеты.
     И мы с нетерпением ждем вас в гости!</h4>
</p>       
    </article>
<br>
<h1 align="center">Наши услуги</h1>
            <article>
                <a href="#">
                    <h2>Сауна</h2>
                </a>
                <img src="https://images.unsplash.com/photo-1583416750470-965b2707b355?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                <p><h3><strong> 4 000 руб/час</strong></h3></p>
                <p> <ul><strong>Включает в себя:</strong>
                    <li> Сауна из канадского кедра и можжевельника</li>
                    <li> Комната отдыха (комфортное вместительность 4-6 чел) </li>
                    <li> Spa комната с двумя кушетками для массажа</li>
                    <li> Душ, туалетная комната</li>
                </ul></p>
            </article>
            <article>
                <a href="#">
                    <h2>SPA-МАССАЖ</h2>
                </a>
                <img src="https://images.unsplash.com/photo-1570174006382-148305ce4972?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                <p><ul>
                    <li> <strong>СПА-МАССАЖ ВСЕГО ТЕЛА - 3 000 рублей/1 час</strong>
                    <p>Данный массаж отличается более глубоким и мощным воздействием на организм, по сравнению с другими массажными техниками. При работе массажист использует все части рук: пальцы, ладони, основания ладоней, предплечья, чем достигается воздействие на самые глубокие мышечные ткани.</p></li>
                    <li> <strong>АНТИЦЕЛЛЮЛИТНЫЙ СПА-МАССАЖ - 2 500 рублей/1 час</strong>
                    <p>Эта техника разработана Испанским институтом мануальной медицины в Барселоне, самим Энрике Кастелс Гарсия лет 15 назад. Этот массаж изменил мир массажа, создал просто «взрыв» в умах массажистов. Массажи по коррекции фигуры всегда были настолько болезненными, что их назвали в мужском журнале «антицеллюлитные пытки». Больно с синяками. На этот массаж нужно было настроиться, типа: «наела, так тебе и нужно».</p> </li>
                    <li> <strong>ЛИМФОДРЕНАЖНЫЙ СПА-МАССАЖ - 3 000 рублей/1,5 часа</strong>
                    <p>Выполняется от кончиков пальцев ног до шеи. Это общий уход за телом, способствующий снижению веса, устраняющий отеки, улучшающий обмен веществ, снимает напряжение и хроническую усталость. Восстанавливает структуру мышечной ткани, подкожной клетчатки, улучшает тургор кожи. Лимфатическая система удаляет и обезвреживает наиболее вредные отходы, а также откачивает излишнюю жидкость из межклеточного пространства. Уход дает прекрасный результат с техникой похудения «Антицеллюлитный массаж», а также рекомендуется сочетать с различными программами по детоксикации организма, такие как гидромассаж и очищающие фитобочки.</p></li>
                    <li> <strong>МОДЕЛИРУЮЩИЙ МАССАЖ ЛИЦА - 3 000 рублей/ 1 час</strong>
                    <p>Основное действие, которое оказывает моделирующий массаж, заключается в подтяжке кожи и создании более четких и ярко выраженных контуров лица. Цель процедуры – создать красивый рельеф, который достигается за счет снятия гипертонуса мышц и стимуляции выработки эластина и коллагена. В итоге человек получает высокие скулы, ровную линию подбородка, отсутствие морщин и дряблости.</p></li>
                    <li> <strong>РАССЛАБЛЯЮЩИЙ АРОМА-ОЙЛ МАССАЖ - 3 500 рублей/ 1 час</strong>
                    <p>Тайский арома-ойл массаж – мягкая процедура. Он основан на классическом тайском массаже, но в нем меньше силовых воздействий. В сочетании с ароматическими маслами массаж положительно влияет не только на мышцы и суставы, но и на кожу.</p></li>
                    <li> <strong>ФУТ МАССАЖ - 1 900 рублей/ 30 мин</strong>
                    <p>Тайский фут-массаж (англ. foot — ступня) — массаж ног от стоп до колен. <br> Сеанс массажа проходит в расслабляющей обстановке. Вы ложитесь на мягкую кушетку лицом вверх. Вас окружают традиционные тайские ароматы, мягкий свет и тихая музыка. Это уже успокаивает и снижает привычную городскую тревожность.
                    </p></li>
                </ul></p>
            </article>
            <article>
                <a href="#">
                    <h2>«Спа-шоколад» — шоколадный пилинг, обертывание, арома-ойл массаж</h2>
                </a>
                <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                <p><h3><strong> 6 900 руб</strong></h3></p>
                <p>Спа-шоколад – это программа с использованием шоколада. В нее входит: - шоколадный пилинг - шоколадное обёртывание - ойл-массаж с шоколадным маслом *Мы рекомендуем добавить кедровую бочку для большего расслабления и подготовки тела к спа-программе за дополнительную плату. Длительность - 15 минут. Добавить кедровую бочку можно при записи на спа-программу. Пилинг – это удаление верхнего, ороговевшего слоя кожи. Пилинг с шоколадом деликатно удаляет мертвые клетки эпидермиса, сохраняя здоровые. А ещё шоколад содержит кофеин, который влияет на кожу так же, как и на наше тело чашка кофе. Кофеин в шоколаде поддерживает сосуды в тонусе и оберегает кожу от потери воды. Поэтому пилинг с использованием шоколада – безопасная и полезная для кожи процедура. После пилинга важно усилить положительное действие шоколада на кожу. Для этого следующая часть программы – шоколадное обёртывание. Тело полностью покрывают шоколадной маской в течение 15-20 минут. За это время полезные вещества легко проникают в очищенную пилингом кожу. Благодаря этому она омолаживается, подтягивается и увлажняется. Завершает спа-программу тайский массаж с шоколадным маслом. Массаж мягко разминает мышцы, и это усиливает приток крови к коже.Во время массажа мастер использует скользящие и растирающие движения, таким образом усиливая воздействие шоколадного масла на кожу. Масло с экстрактом какао тонизирует кожу и придает ей упругость На первые два этапа отводится один час, и на массаж с шоколадным маслом – еще час. Так, за два часа спа-программы «спа-шоколад» вам удастся отдохнуть душой и телом. Приглушенный свет, расслабляющая музыка и сладкий аромат шоколада погружают вас в расслабляющую атмосферу отдыха.</p>
            </article>
            <article>
                <a href="#">
                    <h2 class="fourth">«Цветущая орхидея» - спа-программа для лица</h2>
                </a>               
                <img src="https://images.unsplash.com/photo-1552511556-9f16dcb6561f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80">
                <p><h3><strong> 3 500 руб</strong></h3></p>
                <p> <ul><strong>Включает в себя:</strong>
                    <li> скраб</li>
                    <li> питающая маска </li>                    
                    <li> массаж головы и лица</li>
                </ul></p>
                <p>Процедура не только позволяет улучшить состояние кожи лица, но и добиться максимального расслабления. А тихая приятная музыка и приглушенный свет усиливают эффект от процедур.<br>
                Все средства, использующиеся для очищения и ухода, имеют полностью натуральный состав.</p>
            </article>
            <article>
                <a href="#">
                    <h2 class="fifth">СПА ДЛЯ ДВОИХ</h2>
                </a>                
                <img src="https://images.unsplash.com/photo-1496047017858-c558b925d95c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=885&q=80">
                <p><h3><strong> 10 500 руб</strong></h3></p>
                <p>Тайская программа для двоих. <br> <br>
                Два разных вида процедур по телу помогут проясниться Вашему сознанию, открыть Ваши сердца и произнести теплые слова! Спа-программа создана для вас двоих!</p>
                <p> <ul><strong>Включает в себя:</strong>
                    <li> Тайский арома-ойл массаж</li>
                    <li> FOOT-массаж. </li>                    
                    <li> Чайное угощение.</li>
                </ul></p>
            </article>
            
        </section>

 <?php 
require "blocks/footer.php";
?>