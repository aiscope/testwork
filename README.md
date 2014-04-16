Тестовое задание

Тестовое задание для Эксмо, издательство.

Данная тестовая работа выполнена с использованием последней на текущий момент
версии фрейморка Kohana. 

Для запуска необходимо, чтобы тестовая среда удовлетворяла требованиям фреймворка.

Тестовая БД (MySQL) находится в репозитории.
Также ее можно сгенерировать командой: GET /service/

Просмотр расписания кинотеатра:

GET /api/cinema/<название кинотеатра>/shedule

Просмотр расписания кинотеатра с фильтрацией по залу:

GET /api/cinema/<название кинотеатра>/shedule/hall/<номер зала>

Просмотр идуших в кинотеатре, зале фильмов:

GET /api/film/<название фильма>/schedule

Проверка свободных мест на сеанс:

GET /api/session/<id session>/places

Покупка билета

POST /api/tickets/buy?session=<id session>&places=1,3,5,7

Отмена покупки

POST /api/tickets/reject/<уникальный код>
