<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-16 07:12:14 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/dataminer/workspace/testwork/system/classes/Kohana/Cookie.php:67
2014-04-16 07:12:14 --- DEBUG: #0 /home/dataminer/workspace/testwork/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('XDEBUG_SESSION')
#2 /home/dataminer/workspace/testwork/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/dataminer/workspace/testwork/system/classes/Kohana/Cookie.php:67
2014-04-16 07:13:03 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/dataminer/workspace/testwork/system/classes/Kohana/Cookie.php:67
2014-04-16 07:13:03 --- DEBUG: #0 /home/dataminer/workspace/testwork/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('XDEBUG_SESSION')
#2 /home/dataminer/workspace/testwork/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/dataminer/workspace/testwork/system/classes/Kohana/Cookie.php:67
2014-04-16 07:20:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ xdebug://debug-eval [ 1 ] in file:line
2014-04-16 07:20:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 07:49:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':hall_name' at line 7 [ SELECT session.session_id, session.start_time, session.end_time, session.empty_places,
			movie.name, hall.name, cinema.name
		 FROM session
		 INNER JOIN movie ON movie.movie_id = session.movie_id
		 INNER JOIN hall ON hall.hall_id = session.hall_id
		 INNER JOIN cinema ON cinema.cinema_id = hall.cinema_id
		 WHERE cinema.name = 'киномакс'  AND hall.name = :hall_name ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 07:49:10 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT session....', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Cinema.php(46): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php(10): Model_Cinema->get_schedule('???????????????...', '123')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Cinema->action_schedule()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cinema))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 07:54:28 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'cinema.name' in 'where clause' [ SELECT sess.session_id, sess.start_time, sess.end_time, sess.empty_places,
			mv.name, hl.name, cin.name
		 FROM session sess
		 INNER JOIN movie mv ON mv.movie_id = sess.movie_id
		 INNER JOIN hall hl ON hl.hall_id = sess.hall_id
		 INNER JOIN cinema cin ON cin.cinema_id = hl.cinema_id
		 WHERE cinema.name = 'киномакс'  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 07:54:28 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT sess.ses...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Cinema.php(47): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php(10): Model_Cinema->get_schedule('???????????????...', NULL)
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Cinema->action_schedule()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cinema))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 08:03:40 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Cinema.php [ 12 ] in /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php:12
2014-04-16 08:03:40 --- DEBUG: #0 /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php(12): Kohana_Core::error_handler(4096, 'Object of class...', '/home/dataminer...', 12, Array)
#1 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Cinema->action_schedule()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cinema))
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#7 {main} in /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php:12
2014-04-16 08:17:35 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Cinema.php [ 12 ] in /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php:12
2014-04-16 08:17:35 --- DEBUG: #0 /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php(12): Kohana_Core::error_handler(4096, 'Object of class...', '/home/dataminer...', 12, Array)
#1 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Cinema->action_schedule()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cinema))
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#7 {main} in /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php:12
2014-04-16 08:40:39 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Controller/Film.php [ 7 ] in file:line
2014-04-16 08:40:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 08:40:41 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Controller/Film.php [ 7 ] in file:line
2014-04-16 08:40:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 08:41:05 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Controller/Film.php [ 7 ] in file:line
2014-04-16 08:41:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 08:41:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hall ~ APPPATH/classes/Controller/Film.php [ 10 ] in /home/dataminer/workspace/testwork/application/classes/Controller/Film.php:10
2014-04-16 08:41:16 --- DEBUG: #0 /home/dataminer/workspace/testwork/application/classes/Controller/Film.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dataminer...', 10, Array)
#1 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Film->action_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Film))
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#7 {main} in /home/dataminer/workspace/testwork/application/classes/Controller/Film.php:10
2014-04-16 08:44:29 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2014-04-16 08:44:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/home/dataminer...', 33, Array)
#1 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #2, 'err')
#2 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('err')
#3 /home/dataminer/workspace/testwork/application/classes/Controller/Film.php(12): Kohana_Database_Result->offsetGet('err')
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Film->action_film()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Film))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-04-16 08:47:24 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2014-04-16 08:47:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/home/dataminer...', 33, Array)
#1 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #3, 'err')
#2 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('err')
#3 /home/dataminer/workspace/testwork/application/classes/Controller/Film.php(12): Kohana_Database_Result->offsetGet('err')
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Film->action_film()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Film))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-04-16 08:49:22 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2014-04-16 08:49:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/home/dataminer...', 33, Array)
#1 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #3, 'err')
#2 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('err')
#3 /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php(12): Kohana_Database_Result->offsetGet('err')
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Cinema->action_schedule()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cinema))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-04-16 08:52:16 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2014-04-16 08:52:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/home/dataminer...', 33, Array)
#1 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #3, 'error_message')
#2 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('error_message')
#3 /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php(13): Kohana_Database_Result->offsetGet('error_message')
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Cinema->action_schedule()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cinema))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-04-16 09:50:23 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 47 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-04-16 09:50:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/home/dataminer...', 423, Array)
#1 /home/dataminer/workspace/testwork/system/classes/Kohana/Route.php(423): preg_match('#^api/tickets/b...', 'api/tickets/buy...', NULL)
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-04-16 09:51:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 47 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-04-16 09:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/home/dataminer...', 423, Array)
#1 /home/dataminer/workspace/testwork/system/classes/Kohana/Route.php(423): preg_match('#^api/tickets/b...', 'api/tickets/buy...', NULL)
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-04-16 09:52:37 --- EMERGENCY: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ APPPATH/classes/Model/Tickets.php [ 45 ] in file:line
2014-04-16 09:52:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/home/dataminer...', 45, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(45): array_merge('14,19,18,31,4,8...', Array)
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(12): Model_Tickets->buy_tickets('1', Array)
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_buy()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-04-16 09:53:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: error_message ~ APPPATH/classes/Model/Common.php [ 16 ] in /home/dataminer/workspace/testwork/application/classes/Model/Common.php:16
2014-04-16 09:53:36 --- DEBUG: #0 /home/dataminer/workspace/testwork/application/classes/Model/Common.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dataminer...', 16, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(15): Model_Common->get_output(Array)
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_buy()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#8 {main} in /home/dataminer/workspace/testwork/application/classes/Model/Common.php:16
2014-04-16 10:17:56 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':uniq_key' at line 1 [ DELETE FROM buy WHERE uniq_key = :uniq_key ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 10:17:56 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM buy...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(159): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(23): Model_Tickets->reject_tickets('1509902928')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 10:54:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: places_str ~ APPPATH/classes/Controller/Tickets.php [ 11 ] in /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php:11
2014-04-16 10:54:25 --- DEBUG: #0 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dataminer...', 11, Array)
#1 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_buy()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#7 {main} in /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php:11
2014-04-16 12:03:03 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'cinema' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/MySQL.php:75
2014-04-16 12:03:03 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('cinema')
#1 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/MySQL.php(431): Kohana_Database_MySQL->connect()
#2 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database.php(478): Kohana_Database_MySQL->escape('????????????')
#3 [internal function]: Kohana_Database->quote('????????????')
#4 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(196): array_map(Array, Array)
#5 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query->compile(Object(Database_MySQL))
#6 /home/dataminer/workspace/testwork/application/classes/Model/Cinema.php(47): Kohana_Database_Query->execute()
#7 /home/dataminer/workspace/testwork/application/classes/Controller/Cinema.php(10): Model_Cinema->get_schedule('????????????', NULL)
#8 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Cinema->action_schedule()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cinema))
#11 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#14 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/MySQL.php:75
2014-04-16 12:14:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.session_id
		WHERE uniq_key = '487281689'' at line 3 [ SELECT buy.session_id as session_id, buy.places as places, session.start_time as start_time
		FROM buy
		INNER JOIN session.session_id = buy.session_id
		WHERE uniq_key = '487281689' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:14:53 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT buy.sess...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(117): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(30): Model_Tickets->reject_tickets('487281689')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:15:01 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.session_id
		WHERE uniq_key = '487281689'' at line 3 [ SELECT buy.session_id as session_id, buy.places as places, session.start_time as start_time
		FROM buy
		INNER JOIN session.session_id = buy.session_id
		WHERE uniq_key = '487281689' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:15:01 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT buy.sess...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(117): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(30): Model_Tickets->reject_tickets('487281689')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:15:12 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.session_id
		WHERE uniq_key = '487281689'' at line 3 [ SELECT buy.session_id as session_id, buy.places as places, session.start_time as start_time
		FROM buy
		INNER JOIN session.session_id = buy.session_id
		WHERE uniq_key = '487281689' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:15:12 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT buy.sess...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(117): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(30): Model_Tickets->reject_tickets('487281689')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:16:09 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.session_id
		WHERE uniq_key = '487281689'' at line 3 [ SELECT buy.session_id as session_id, buy.places as places, session.start_time as start_time
		FROM buy
		INNER JOIN session.session_id = buy.session_id
		WHERE uniq_key = '487281689' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:16:09 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT buy.sess...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(117): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(30): Model_Tickets->reject_tickets('487281689')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:17:25 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.session_id
		WHERE uniq_key = '487281689'' at line 3 [ SELECT buy.session_id as session_id, buy.places as places, session.start_time as start_time
		FROM buy
		INNER JOIN session.session_id = buy.session_id
		WHERE uniq_key = '487281689' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:17:25 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT buy.sess...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(117): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(30): Model_Tickets->reject_tickets('487281689')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:18:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.session_id
		WHERE uniq_key = '1604267863'' at line 3 [ SELECT buy.session_id as session_id, buy.places as places, session.start_time as start_time
		FROM buy
		INNER JOIN session.session_id = buy.session_id
		WHERE uniq_key = '1604267863' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:18:10 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT buy.sess...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(117): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(30): Model_Tickets->reject_tickets('1604267863')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:18:18 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.session_id
		WHERE uniq_key = '1604267863'' at line 3 [ SELECT buy.session_id as session_id, buy.places as places, session.start_time as start_time
		FROM buy
		INNER JOIN session.session_id = buy.session_id
		WHERE uniq_key = '1604267863' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:18:18 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT buy.sess...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(117): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(30): Model_Tickets->reject_tickets('1604267863')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:20:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.session_id
		WHERE uniq_key = '1604267863'' at line 3 [ SELECT buy.session_id as session_id, buy.places as places, session.start_time as start_time
		FROM buy
		INNER JOIN session.session_id = buy.session_id
		WHERE uniq_key = '1604267863' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:20:26 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT buy.sess...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(117): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(30): Model_Tickets->reject_tickets('1604267863')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:21:12 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.session_id
		WHERE uniq_key = '1604267863'' at line 3 [ SELECT buy.session_id as session_id, buy.places as places, session.start_time as start_time
		FROM buy
		INNER JOIN session.session_id = buy.session_id
		WHERE uniq_key = '1604267863' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:21:12 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT buy.sess...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(117): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(30): Model_Tickets->reject_tickets('1604267863')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:21:19 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.session_id
		WHERE uniq_key = '1604267863'' at line 3 [ SELECT buy.session_id as session_id, buy.places as places, session.start_time as start_time
		FROM buy
		INNER JOIN session.session_id = buy.session_id
		WHERE uniq_key = '1604267863' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 12:21:19 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT buy.sess...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Model/Tickets.php(117): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/application/classes/Controller/Tickets.php(30): Model_Tickets->reject_tickets('1604267863')
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Tickets->action_reject()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tickets))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#9 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251