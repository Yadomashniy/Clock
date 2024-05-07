<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clock</title>
    <link rel="stylesheet" href="/style/clock.css">
    <link rel="stylesheet" href="/style/glavnay.css">
</head>
<body>

        <?php 
            include_once('header.php');
        ?>
        
    <div class="container">
            <div class="clock__casio1">
                <div class="clock__casio-123">
                    <img src="/pic/rolex1.png" style="width: 22%;">
                    <img src="/pic/rolex2.png" style="width: 19%;">
                    <img src="/pic/rolex3.png" style="width: 19%;">
                </div>
                <div class="clock__casio-text-2">
                    <h3 style="color: #ffffff;margin-bottom: 0;">Hublot classic fusion</h3>
                    <h3 style="color: #ffffff;margin-bottom: 0;">Hublot classic fusion</h3>
                    <h3 style="color: #ffffff;margin-bottom: 0;">Hublot classic fusion</h3>
                </div>
                <div class="clock__casio-text2-2">
                    <h3 style="color: #ffffff;margin-top: 0;">1 434 200 ₽</h3>
                    <h3 style="color: #ffffff;margin-top: 0;">1 434 200 ₽</h3>
                    <h3 style="color: #ffffff;margin-top: 0;">1 434 200 ₽</h3>
                </div>
                <div class="clock__casio-text2-3">
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 14px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 20px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 20px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                </div>
            </div>

        <form name="form" action="" method="post" style="display: flex;margin-top: 30px;justify-items: start;flex-wrap: wrap;justify-content: flex-start;position: absolute;margin-left: 40px;">
        <table>
        <h3 style="margin-left: 0;margin-bottom: 5px;">Фильтры</h3><br>
                <input class="place__price" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Цена от:">
                <input class="place__price" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Цена до:">

                <style>
                .line {
                border-bottom: 1px solid rgb(255, 255, 255);
                }
            </style>
            <div class="line" style="margin-top: 10px;width: 300px;"></div>

                <h3 style="margin-left: 0;margin-bottom: 5px;margin-right: 70px;">Производитель</h3><br>

            <div class="form__rr">

                <h4 style="color: #fff;margin-top: 15px;margin-bottom: 0px;font-family: 'EB+Garamond' , sans-serif;"><input class="form__text-radio" type="checkbox" checked/>  Rolex</h4>
            
                <h4 style="color: #fff;margin-top: 15px;margin-bottom: 0px;font-family: 'EB+Garamond' , sans-serif;" ><input class="form__text-radio" type="checkbox" />  Casio</h4>
            
                <h4 style="color: #fff;margin-top: 15px;margin-bottom: 0px;font-family: 'EB+Garamond' , sans-serif;" ><input class="form__text-radio" type="checkbox" />  Omega</h4>
            
                <h4 style="color: #fff;margin-top: 15px;margin-bottom: 0px;font-family: 'EB+Garamond' , sans-serif;" ><input class="form__text-radio" type="checkbox" />  Hublot</h4>

                <h4 style="color: #fff;margin-top: 15px;margin-bottom: 0px;font-family: 'EB+Garamond' , sans-serif;" ><input class="form__text-radio" type="checkbox" />  Zenit</h4>
            
                <h4 style="color: #fff;margin-top: 15px;margin-bottom: 20px;font-family: 'EB+Garamond' , sans-serif;" ><input class="form__text-radio" type="checkbox" />  Seico</h4>

            </div>

            <input class="form__text-button" type="submit" name="filter" value="Подобрать" />
        </table>
        </form>
    </div>
        <div class="container">
            <div class="clock__casio1">
                <div class="clock__casio-124">
                    <div class="clock__casio-124-1">
                        <img src="/pic2/rolex1 (2).png" style="width: 69%;">
                        <h3 style="color: #ffffff;margin-bottom: 0;margin-left: 15px;">Hublot classic fusion</h3>
                        <h3 style="color: #ffffff;margin-top: 10px;margin-left: 55px;">1 434 200 ₽</h3>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 20px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                    </div>
                    <div class="clock__casio-124-2">
                    <img src="/pic2/rolex1 (5).png" style="width: 79%;">
                        <h3 style="color: #ffffff;margin-bottom: 0;margin-left: 30px;">Hublot classic fusion</h3>
                        <h3 style="color: #ffffff;margin-top: 10px;margin-left: 67px;">1 434 200 ₽</h3>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 31px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                    </div>
                    <div class="clock__casio-124-3">
                    <img src="/pic2/rolex1 (4).png" style="width: 78%;">
                        <h3 style="color: #ffffff;margin-bottom: 0;margin-left: 30px;">Hublot classic fusion</h3>
                        <h3 style="color: #ffffff;margin-top: 10px;margin-left: 67px;">1 434 200 ₽</h3>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 31px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="clock__casio1">
                <div class="clock__casio-124">
                    <div class="clock__casio-124-1">
                        <img src="/pic2/rolex1 (6).png" style="width: 69%;">
                        <h3 style="color: #ffffff;margin-bottom: 0;margin-left: 15px;">Hublot classic fusion</h3>
                        <h3 style="color: #ffffff;margin-top: 10px;margin-left: 55px;">1 434 200 ₽</h3>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 20px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                    </div>
                    <div class="clock__casio-124-2">
                    <img src="/pic2/rolex1 (7).png" style="width: 84%;">
                        <h3 style="color: #ffffff;margin-bottom: 0;margin-left: 30px;">Hublot classic fusion</h3>
                        <h3 style="color: #ffffff;margin-top: 10px;margin-left: 67px;">1 434 200 ₽</h3>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 31px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                    </div>
                    <div class="clock__casio-124-3">
                    <img src="/pic2/rolex1 (8).png" style="width: 63%;margin-left: 10px;">
                        <h3 style="color: #ffffff;margin-bottom: 0;margin-left: 30px;">Hublot classic fusion</h3>
                        <h3 style="color: #ffffff;margin-top: 10px;margin-left: 67px;">1 434 200 ₽</h3>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 31px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="clock__casio1">
                <div class="clock__casio-124">
                    <div class="clock__casio-124-1">
                        <img src="/pic2/rolex1 (9).png" style="width: 69%;">
                        <h3 style="color: #ffffff;margin-bottom: 0;margin-left: 15px;">Hublot classic fusion</h3>
                        <h3 style="color: #ffffff;margin-top: 10px;margin-left: 55px;">1 434 200 ₽</h3>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 20px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                    </div>
                    <div class="clock__casio-124-2">
                    <img src="/pic2/rolex1 (12).png" style="width: 66%;margin-left: 10px;">
                        <h3 style="color: #ffffff;margin-bottom: 0;margin-left: 30px;">Hublot classic fusion</h3>
                        <h3 style="color: #ffffff;margin-top: 10px;margin-left: 67px;">1 434 200 ₽</h3>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 31px;">
                                <h3 style="display: flex;justify-content: center;color: #ffffff;margin: auto;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;">Подробнее</h3>
                            </button>
                    </div>
                    <div class="clock__casio-124-3">
                    <img src="/pic2/rolex1 (11).png" style="width: 56%;margin-left: 24px;">
                            <h3 style="color: #ffffff;margin-bottom: 0;margin-left: 30px;">Hublot classic fusion</h3>
                            <h3 style="color: #ffffff;margin-top: 10px;margin-left: 67px;">1 434 200 ₽</h3>
                            <button style="display: flex;background: none;border: groove;cursor: pointer;color: #ffffff;margin-left: 30px;">
                                <a href="STR-tovar.php" style="display: flex;justify-content: center;color: #ffffff;text-decoration: 0;font-size: 16px;margin-left: 23px;margin-right: 25px;margin-top: 10px;margin-bottom: 10px;font-family: 'EB+Garamond', sans-serif;">Посмотреть</a>
                            </button>

                    </div>
                </div>
            </div>
        </div>

        <button style="display: flex;background: none;border: groove;cursor: pointer;margin-left: 1003px;margin-bottom: 50px;margin-top: 40px;">
            <h3 style="display: flex;justify-content: center;color: #ffffff;margin-left: 30px;margin-right: 30px;">Показать ещё</h3>
        </button>

   <?php 
        include_once('footer.php');
    ?>

</body>
</html>