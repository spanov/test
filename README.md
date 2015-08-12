# Задание 1

Находится в каталоге https://github.com/spanov/test/tree/master/imageeditor/modules/shape
Архитектура модуля будет выглядеть примерно так. 
Но еще необходимо учитывать валидацию параметров. 

# Задание 2

Необходимы 3 таблицы: авторы, книги, автор-книга
https://github.com/spanov/test/blob/master/books.sql


# Задание 3

Данный запрос, возвратит необходимые результаты
SELECT type, max(date) as maxDate FROM media GROUP BY type ORDER BY maxDate

