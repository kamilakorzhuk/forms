<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <title>Практичне заняття по темі "Веб-форми"</title>
</head>
<body>
    <div class="wraper">
        <h1>Форми</h1>
        <h2 class="pt0">01. проста форма</h2>
        <form class="normalform" method="GET" action="#">
            <label><input type="text" placeholder="Введіть ім'я"></label>
            <label><input type="email" placeholder="Email"></label>
            <label>
                <select>
                    <option selected disabled>Ваше місто</option>
                    <option>Хмельницький</option>
                    <option>Познань</option>
                    <option>Львів</option>
                </select>
            </label>
            <label><textarea placeholder="Email"></textarea></label>
            <label><input type="submit" value="Зареєструватися"></label>
        </form>
        <h2>02. елементи</h2>
        <form class="elements clear robotoregular"> 
            <div class="left-elements">
                <div class="post left-elements">
                    <input id="n" type="radio" name="delivery"><label for="n">Нова Пошта</label>
                    <input id="k" type="radio" name="delivery"><label for="k">Кур’єр</label>
                    <input type="radio" name="delivery" disabled><label class="disabled">Самовивіз</label>
                </div>
                <div class="rules left-elements">
                    <input id="p" type="checkbox"><label for="p">Прочитав умови договору</label>
                    <input id="z" type="checkbox"><label for="z">Згідний з ПДВ 9%</label>
                    <input type="checkbox" disabled><label class="disabled">Отримувати новини на ел. пошту</label>
                </div>
            </div>
            <div class="right-elements">
                <fieldset>
                    <div class="status-data">
                        <p>Статус</p>
                        <p>Дата</p> 
                    </div>
                    <p class="checkboxes">
                        <input id="nk" type="checkbox"><label for="nk">Новинки</label>
                        <input id="t" type="checkbox"><label for="t">Акційні товари</label>
                        <input id="r" type="checkbox"><label for="r">Розпродаж</label>
                    </p>
                    <p>
                        <label><input class="date" type="date"></label>
                    </p>
                </fieldset>
            </div>
        </form>
        <h2>03. стилізовані чекбокси</h2>
        <form class="style-checkbox clear">
            <div class="state left-elements robotoslab">
                <input type="radio" name="people" id="m"><label class="man" for="m">Чоловік</label>
                <input type="radio" name="people" id="w"><label class="woman" for="w">Жінка</label>
            </div>
            <div class="functional-checkbox left-elements robotoregular">
                <input id="a" type="checkbox"><label for="a">Отримувати новини</label>
                <input id="b" type="checkbox"><label for="b">Купити додому ковбаси</label>
                <input id="c" type="checkbox"><label for="c">Включити світло</label>
            </div>
        </form>
        <h2>04. форма таблицею</h2>
        <h3 class="robotobold">Заповніть усі необхідні поля</h3>
        <form class="table robotoregular">
            <table>
                <tr>
                    <td>ФІО:</td>
                    <td><label><input type="text" placeholder="Введіть ім’я"></label></td>
                </tr>
                <tr>
                    <td>Пароль:</td>
                    <td><label><input type="password" placeholder="Введіть не менше 6 символів" max="16"></label></td>
                </tr>
                <tr>
                    <td>Місто:</td>
                    <td>
                        <label>
                            <select>
                                <option selected>Хмельницький</option>
                                <option>Познань</option>
                                <option>Львів</option>
                            </select>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Стать:</td>
                    <td>
                        <input type="radio" id="man" name="people2"><label for="man" class="labelman">Чоловік<label>
                        <input type="radio" id="women" name="people2"><label for="women" class="labelwoman">Жінка</label>
                    </td>
                </tr>
                <tr>
                    <td>Фото:</td>
                    <td><label><input class="selectfile" type="button" value="Виберіть файл"></label></td>
                </tr>
                <tr>
                    <td>Коментарій:</td>
                    <td><label><textarea placeholder="Введіть текст повідомлення"></textarea></label></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><label><input type="submit" value="Зареєструватися"></label></td>
                </tr>
            </table>
        </form>
        <h2>05. форма таблицею</h2>
        <form class="mb clear">
        <h3 class="robotobold">Оформлення заявки</h3>
            <table class="table-second">
                <tr class="margin">
                    <td class="pb">
                        <label for=imie>Прізвище та ім’я</label><input id="imie" type="text">
                    </td>
                    <td class="pb">
                        <label for="elektronyadres">Ел. пошта</label><input id="elektronyadres" type="email">
                    </td>
                    <td class="pb">
                        <label for="telefon">Телефон</label><input id="telefon" type="number">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="kraj">Країна</label>
                        <select id="kraj">
                            <option>Індонезія</option>
                            <option>Айзербайджан</option>
                            <option>Ірак</option>
                        </select>
                    </td>
                    <td colspan="2">
                        <label for="adres">Адреса</label><input class="adress" id="adres" type="text">
                    </td>
                </tr>
                <tr>
                    <td class="mb14"> 
                        <label for="miasto">Місто</label><input type="text" id="miasto">
                    </td>
                    <td class="mb14">
                        <label for="dom">Будинок</label><input type="text" id="dom">
                    </td>
                    <td class="mb14">
                        <label for="">Поштовий індекс</label><input type="text" id="pocztowykod">
                    </td>
                </tr>
            </table>
            <p class="mb30">
                <input id="ja" type="checkbox" class="accept">
                <label for="ja">Я погоджуюсь з правилами оплати та доставки товару</label>
            </p>
            <p>
                <input class="back" type="button" value="Повернутися назад">
                <input class="checkout" type="submit" value="Оформити покупку">
            </p>
        </form>
        <div class="fixed">
            <h2 class="robotoregular">06. фіксована форма</h2>
            <form class="robotoregular tablecloth">
                <table>
                    <tbody>
                        <tr>
                            <td class="pb5">
                                <label>Логін</label>
                            </td>  
                        </tr>
                        <tr>
                            <td class="pb10">
                                <input type="text">
                            </td>
                        </tr>             
                        <tr>
                            <td class="pb5">
                                <label>Пароль</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="pb10">
                                <input type="password">
                            </td>
                        </tr>
                            <td class="pb12">
                                <a href="#" class="forget">Забули пароль?</a>
                            </td>
                        <tr>
                            <td class="pb16">
                                <input id="remember" type="checkbox" class="remember">
                                <label for="remember">Запам’ятати пароль</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" value="Увійти">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>
</html>