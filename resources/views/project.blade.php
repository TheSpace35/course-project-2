<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проект</title>

        <!--Favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
        <link rel="manifest" href="icons/site.webmanifest">
        <link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    
        <!--CSS-->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">
    
        <!-- js -->
        <script defer src="js/DataBase.js"></script>
        <script defer src="js/validation.js"></script>
        <!-- <script defer src="js/main.js"></script> -->
        <script defer src="js/project.js"></script>

</head>
<body>

    <header>
        <button class="settingsBtn btn button"><img src="icons/settings.svg" alt="настройки"></button>
        <h1 class="projectTitle title">ПРОЕКТ</h1>
        <button class="BackBtn btn button">СПИСОК КЛИЕНТОВ</button>
        <a href="./index.html"><button class="logOutBtn btn button">ВЫХОД</button></a>
    </header>

    <main>
        <section class="projectInfo">

            <div class="projectInfo__company">
                <h2>Организация:</h2>
                <h2 class="companyName">Название компании</h2> 
            </div>

            <div class="projectInfo__description">
                <h2>Описание:</h2>
                <p class="projectDescription">Описание проекта</p> 
            </div>

            <div class="projectInfo__status">
                <h2>Текущий статус:</h2>
                <p class="projectStatus">Текущий статус</p> 
            </div>

        </section>

        <section class="projectStatusHistory">
            <form class="newStatus">

                <div class="newStatus__first">

                    <label for="statusName" class="newStatus__name">Имя статуса</label>
                    <input type="text" class="newStatus__name_input" name="statusName">
    
                    <label for="statusColor" class="newStatus__color">Цвет статуса</label>
                    <input type="color" class="newStatus__color_input" name="statusColor">

                </div>

                <div class="newStatus__second">

                    <label for="statusDescription" class="newStatus__description">Описание статуса</label>
                    <textarea class="newStatus__description_input" name="statusDescription" cols="30" rows="10"></textarea>
    
                    <button type="submit" class="newStatus__sendBtn">Применить</button>

                </div>

            </form>

            <table class="projectStatusHistory__table">
                <tr>
                    <th>Статус</th>
                    <th><p>Комментарий</p></th>
                    <th rowspan="2">Оценка клиента</th>
                </tr>
            </table>

        </section>
    </main>
    
</body>
</html>