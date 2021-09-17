<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
    <link rel="stylesheet" href="css/booksstyle.css">
    <link rel="stylesheet" href="css/fonts.css"> 
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/infobookstyle.css">
    <link rel="stylesheet" href="css/oformzakaza.css">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Alice&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    
    
</head>
<body>
    <div class="html">
        <?php include "header.php"; ?>
        <div class="pageWrapper">
            <div class="section">    
                  
                <div class="container__books">     
                    
                    <div class="headPage">
                        
                        <div class="headerCard">
                            <a href="pageblock.html" class="navigation__back_for_oform">Вернуться обратно в корзину</a>
                    
                        </div>
                        <div class="title--wrapper">
                            <h1 class="main__title">
                                Оформление заказа
                            </h1>
                            
                        </div>
                    </div>
                </div>
    
            </div>
            <div class="section--order">
                <div class="container section_inner">
                    <div class="grid--remove">
                        <div class="column-1">

                            <div class="order">
                                <div class="formCategory">
                                    <div class="formCategory--title">
                                        <span class="title-2 title--26">
                                            Город
                                        </span>
                                    </div>
                                    <div class="formCategory--body">
                                        <div class="grid grid--formFields">
                                            <div class=" columnDesktop--12 columnMobile--12">
                                                <select data-placeholder="Choose a Country..." class="vs__search"  tabindex="4">
                                                    <option value=""></option>
                                                    <option value="Any">г. Челябинск</option>
                                                    <option value="United States">г. Москва</option>
                                                    <option value="United Kingdom">г. Калининград</option>
                                                    <option value="Afghanistan">г. Санкт-Петербург</option>
                                                    <option value="Aland Islands">г. Уфа</option>
                                                    <option value="Albania">г. Нижний Уфалей</option>
                                                    <option value="Algeria">г. Курган</option>
                                                    <option value="American Samoa">г. Ростов-на-Дону</option>
                                        
                                                </select>  
                                            </div>
                                            <h2 id="foo"></h2>
                                        </div>
                                    </div>

                                   
                                </div>
                                <div class="formCategory">
                                    <div class="formCategory--title">
                                        <span class="title-2 title--26">
                                            Способы получения
                                        </span>
                                    </div>
                                    <div class="formCategory--body">

                                        <div class="selectorElement">
                                            
                                            <label data-v-82f70d28="" class="selectElementLabel">
                                                <span data-v-82f70d28="" class="selectElementLabel__border"></span>
                                                <span data-v-82f70d28="" class="selectElementLabel__title">Служба доставки</span> 
                                                <span data-v-82f70d28="" class="text--xs gray">от 219 ₽</span> 
                                                <span data-v-82f70d28="" class="selectElementLabel__radio"></span>
                                            </label>
                                            <label data-v-82f70d28="" class="selectElementLabel">
                                                <span data-v-82f70d28="" class="selectElementLabel__border"></span> 
                                                <span data-v-82f70d28="" class="selectElementLabel__title">Курьерская доставка</span>
                                                <span data-v-82f70d28="" class="text--xs gray">от 367 ₽</span> 
                                                <span data-v-82f70d28="" class="selectElementLabel__radio"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="column-2">

                            <div class="cartBox">
                                <div class="cartBox_inner">
                                    <div class="cartBox-title20">Ваш заказ</div>
                                    <ul class="cartBoxList">
                                        <li class="cartBox__item">
                                            <div class="cartBoxList_left">
                                                <div class=" text text--sm">Стоимость товаров</div>
                                            </div>
                                            <div class=" text text--sm">
                                                <span class="price_ruble">
                                                    91
                                                </span>
                                            </div>
                                        </li>
                                        <li class="cartBox__item">
                                            <div data-v-505161b8="" class="cartBoxList_left">
                                                <div data-v-505161b8="" class="text text--sm"> Доставка </div>
                                            </div> 
                                            <div data-v-505161b8="" class="text text--sm">
                                                <span data-v-505161b8="" class="price_ruble"> 0 </span>
                                            </div>
                                        </li>
                                        <li data-v-505161b8="" class="cartBox__item paddingCart">
                                            <div data-v-505161b8="" class="cartBoxList_left">
                                                <div data-v-505161b8="" class="text text--sm"> Итого к оплате </div>
                                            </div> 
                                            <div data-v-505161b8="" class="cartBoxList__right">
                                                <span data-v-505161b8="" class="price price--sm price_ruble">
                                            91
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container section_inner">
                    <div class="grid--remove">
                        <div class="grid__dan column-1">
                            <div class="order">
                                <div class="formCategory">
                                    <div class="formCategory--title">
                                        <span class="title-2 title--26">
                                            Данные получателя
                                        </span>
                                    </div>
                                    <div data-v-7965d61c>
                                        <div data-v-7965d61c class="formCategory__subtitle text text--sm gray"> 
                                            Пожалуйста, указывайте реальные данные — у вас могут попросить паспорт, прежде чем вручить оплаченный заказ. 
                                        </div>
                                        <div data-v-7965d61c class="formCategory--body">
                                            <div data-v-7965d61c class="grid grid--formFields">
                                                <div data-v-7965d61c class="formFields-item column-3 colum-4">
                                                    <div data-v-7965d61cclass="form_field">
                                                        <div data-v-7965d61c class="label">ФИО</div>
                                                        <div data-v-7965d61c class="form_input">
                                                            <input data-v-7965d61c="" type="text" placeholder="Петров Константин Иванович" class="input ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-v-7965d61c class="formFields-item column-3 colum-4">
                                                    <div data-v-7965d61cclass="form_field">
                                                        <div data-v-7965d61c class="label">Контактный номер</div>
                                                        <div data-v-7965d61c class="form_input">
                                                            <input data-v-7965d61c placeholder="+7 (___) ___-__-__" class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-v-7965d61c class="formFields-item column-3 colum-4">
                                                    <div data-v-7965d61cclass="form_field">
                                                        <div data-v-7965d61c class="label">Электронная почта</div>
                                                        <div data-v-7965d61c class="form_input">
                                                            <input data-v-7965d61c="" type="text" placeholder="example@gmail.com" class="input ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="formCategory">
                                    <div class="formCategory--title">
                                        <span class="title-2 title--26">
                                            Способ оплаты
                                        </span>
                                    </div>
                                    <div class="formCategory--body">

                                        <div data-v-2f4ee1bb="" class="selectElementLabel-wrap selectElementLabel-wrap_payment">
                                            <label data-v-2f4ee1bb="" class="selectElementLabel selectElementLabel_payment js_payment-loader-online">
                                                <span data-v-2f4ee1bb="" class="selectElementLabel__border"></span> 
                                                <span data-v-2f4ee1bb="" class="selectElementLabel__title">Онлайн картой</span> 
                                                <span data-v-2f4ee1bb="" class="text--xs gray">VISA, MasterCard, Maestro, МИР</span>
                                                <span data-v-2f4ee1bb="" class="selectElementLabel__radio"></span>
                                            </label>
                                            <label data-v-2f4ee1bb="" class="selectElementLabel selectElementLabel_payment js_payment-loader-cash">
                                                <span data-v-2f4ee1bb="" class="selectElementLabel__border"></span> 
                                                <span data-v-2f4ee1bb="" class="selectElementLabel__title">Оплата при получении</span> 
                                                <span data-v-2f4ee1bb="" class="text--xs gray">Оплата в пункте выдачи или курьеру</span> 
                                                <span data-v-2f4ee1bb="" class="selectElementLabel__radio"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-8d84d880 data-v-30c97347 class="formCategory" data-v-5d29195a="">
                                    <div data-v-8d84d880 class="formCategory--title">
                                        <span data-v-8d84d880 class="title-2 title--26">
                                            Примечание
                                        </span>
                                    </div>
                                    <div data-v-8d84d880 class="formCategory__body">
                                        <div data-v-8d84d880 class="form__field">
                                            <textarea data-v-8d84d880 name="message" placeholder="Дополнительная информация или пожелания к вашему заказу" class="input_review input_textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__bottom">
                                    <div data-v-59ff7c04class="form__button textLeft">
                                        <button data-v-59ff7c04 type="submit" class="btn btn--primary btn--height60">
                                            <span data-v-59ff7c04>Подтвердить заказ</span>
                                        </button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include "footer.php"; ?>
        <div id="cd-login" > 
            <div id="window">
                <div class="form">
                    <div class="header__popup">
                        <div class="popup_title">Войти</div>
                        <span class="close">&times;</span>
                    </div>
                    <div class="popup__body">
                        <form action="index.html" name="f2">
                            <div class="form-group">
                                <label class="form-group_label">Логин</label>
                                <input type="email" placeholder="" name="email2" class="input">
                            </div>
                            <div class="form-group">
                                <label class="form-group_label">Пароль</label>
                                <input type="password" placeholder="" name="email2" class="input">
                            </div>

                            
                            <button class="btn_normal popup__btn_normal popup__btn-action" type="submit"  name="sub">Войти</button>
                        </form>
                        <div class="popup__btns">
                            <button class="line-btn js_btn" >Регистрация</button>
                            <button class="line-btn fl-right js__resetPass" >Забыли пароль?</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cd-signup" >
            <div id="window">
                <div class="form">
                    <div class="header__popup">
                        <div class="popup_title">Регистрация</div>
                        <span class="close">&times;</span>
                    </div>
                    <div class="popup__body">
                        <form action="index.html" name="f1">
                            <div class="form-group">
                                <label class="form-group_label">Электронная почта</label>
                                <input type="email" placeholder="email@email.com" name="email1" class="input">
                            </div>
                            <div class="form-group">
                                <label class="form-group_label">Номер телефона</label>
                                <input type="number" placeholder="+79511292732" name="number1" class="input">
                            </div>
                            <div class="form-group">
                                <label class="form-group_label">Имя</label>
                                <input type="text" placeholder="Имя" name="name1" class="input">
                            </div>
                            <div class="form-footer checkbox">
                                <label for="registration-popup"> Хочу быть в курсе скидок новинок и секретных акций"</label>
                            
                            </div>
                            <button class="btn_normal popup__btn_normal popup__btn-action" type="submit"  name="sub" >Зарегистрироваться</button>
                            
                        </form>
                        <div class="popup__text">
                            Регистрируясь, вы подтверждаете, что
                            <br>
                            вам 18 или больше лет и вы соглашаетесь 
                            <br>
                            <a class="link" href="/about/agreement/">правилами использования</a>
                            и
                            <a class="link" href="/about/policy/">политикой конфиденциальности</a>
                        </div>
                        <div class="popup__btns">
                            <button class="line-btn js__alreadyReg">Я уже зарегестрирован</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fancybox-stage">
            <form action="/" class="fancybox-container">

                <div class="filter__inner">
                    <div class="filterHead">
                        <div class="filterHead__button">
                            <h1 class="main__title">
                                Каталог
                            </h1>
                        </div>
                    </div>
                    <nuv class="nav--catalog">
                        <ul class="navigation">
                            <li class="navigation__item"><a href="" class="navigation__link">Литература</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Ужасы и мистика</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Фантастика. Фэнтези</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Романтика</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Боевики</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Детективы</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Приключения</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Знания и навыки</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Книги для детей</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">История</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Психология</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Образование</a></li>
                        </ul>

                    </nuv>
                </div>
            </form>
         
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/popups.js"></script>
    <script src="js/filtersClick.js"></script>
    <script>
        
    </script>
 

</body>
</html>