Доброго дня. 

Проект выполнен при помощи фреймворка yii2.
Для того что бы запустить и посмотреть проект:
1) Создана миграция БД.( ..\crmvector\console\migrations\m130524_201442_init.php ) 
команда yii migrate.
2)Настройки БД. 
..\crmvector\crmvector\common\config\main-local.php
3) При запуске точка входа.В веб сервере.
...\crmvector\crmvector\frontend\web
4) БД прелагается к проекту (crmvector_tbl.sql).В корне папки с проектом. 
5) Главный HTML файл index находится (..\crmvector\frontend\views\site\index.php).
В нем стандартная разметка согласно задаче расчета стоимости груза.
Стили к нему ..\crmvector\crmvector\frontend\web\css\myStyle.css
6)Для работы формы без перезагрузки использовал Ajax.
скрипт находится ..\crmvector\frontend\web\js\ajaxFunc.js
7) Логика работы прописана в контроллере в 2х экшенах.
...\crmvector\frontend\controllers\SiteController.php
Не стал переносить по отдельности, так как проект маленький. 
8) Функция расчета стоимости 
..\crmvector\frontend\components\Common.php 

Комментировать не стал, так как код написал интуитивно понятно. 
Пункты в задании: Все поля должны быть заполнены немного упростил, что бы пользователь
не допустил ошибок+jquery на поле с весом груза , что бы ничего не напутать.

 