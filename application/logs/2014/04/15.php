<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-15 06:49:20 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1397851200, 2, 6, '1', '33,32', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, ' at line 1 [ INSERT INTO session (1397851200, 2, 6, '1', '33,32', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 34, 35') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 06:49:20 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ses...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Controller/Service.php(128): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Service->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Service))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#8 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 06:55:23 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''2014-04-18 23:00:00', '2014-04-25 01:00:00', 10, '15', '21,35,4,30,40,43,3,32,6' at line 1 [ INSERT INTO session ('2014-04-18 23:00:00', '2014-04-25 01:00:00', 10, '15', '21,35,4,30,40,43,3,32,6,13,37,19,20,38', '1,2,5,7,8,9,10,11,12,14,15,16,17,18,22,23,24,25,26,27,28,29,31,33,34,36,39,41,42,44') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 06:55:23 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ses...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Controller/Service.php(127): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Service->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Service))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#8 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 06:58:19 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''2014-04-21 00:00:00', '2014-04-21 02:00:00', 18, '15', '41,15,36,37,26,31,19,27' at line 1 [ INSERT INTO session ('2014-04-21 00:00:00', '2014-04-21 02:00:00', 18, '15', '41,15,36,37,26,31,19,27,42,8,20', '1,2,3,4,5,6,7,9,10,11,12,13,14,16,17,18,21,22,23,24,25,28,29,30,32,33,34,35,38,39,40,43,44') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 06:58:19 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ses...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Controller/Service.php(128): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Service->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Service))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#8 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 07:04:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH/classes/Controller/Service.php [ 128 ] in file:line
2014-04-15 07:04:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-15 07:06:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$query' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/Controller/Service.php [ 130 ] in file:line
2014-04-15 07:06:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-15 07:11:43 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''2014-04-23 12:00:00', '2014-04-23 14:00:00', 13, '15', '41,29,18,15', '1,2,3,4,' at line 1 [ INSERT INTO session ('2014-04-23 12:00:00', '2014-04-23 14:00:00', 13, '15', '41,29,18,15', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,16,17,19,20,21,22,23,24,25,26,27,28,30,31,32,33,34,35,36,37,38,39,40,42,43,44') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 07:11:43 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ses...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Controller/Service.php(128): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Service->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Service))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#8 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 07:12:45 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''2014-04-17 01:00:00', '2014-04-17 03:00:00', 39, '15', '23,37,14', '1,2,3,4,5,6' at line 1 [ INSERT INTO session ('2014-04-17 01:00:00', '2014-04-17 03:00:00', 39, '15', '23,37,14', '1,2,3,4,5,6,7,8,9,10,11,12,13,15,16,17,18,19,20,21,22,24,25,26,27,28,29,30,31,32,33,34,35,36,38,39,40,41,42,43,44') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 07:12:45 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ses...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Controller/Service.php(128): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Service->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Service))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#8 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 07:14:00 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''2014-04-22 19:00:00', '2014-04-22 21:00:00', 47, '45', '32,5', '1,2,3,4,6,7,8,9' at line 1 [ INSERT INTO session ('2014-04-22 19:00:00', '2014-04-22 21:00:00', 47, '45', '32,5', '1,2,3,4,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31', 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 07:14:00 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ses...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Controller/Service.php(129): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Service->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Service))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#8 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 07:15:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'reject' in 'field list' [ INSERT INTO session
				 (start_time, end_time, movie_id, hall_id, places, empty_places, reject)
				 VALUES ('2014-04-24 19:00:00', '2014-04-24 21:00:00', 62, '59', '26,12,8,16,23,25', '1,2,3,4,5,6,7,9,10,11,13,14,15,17,18,19,20,21,22,24,27,28,29,30,31,32,33,34,35,36,37,38', 0) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 07:15:42 --- DEBUG: #0 /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO ses...', false, Array)
#1 /home/dataminer/workspace/testwork/application/classes/Controller/Service.php(131): Kohana_Database_Query->execute()
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Controller.php(84): Controller_Service->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Service))
#5 /home/dataminer/workspace/testwork/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#8 {main} in /home/dataminer/workspace/testwork/modules/database/classes/Kohana/Database/Query.php:251
2014-04-15 11:25:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 87 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-04-15 11:25:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/home/dataminer...', 423, Array)
#1 /home/dataminer/workspace/testwork/system/classes/Kohana/Route.php(423): preg_match('#^api/cinema(?:...', 'cinema/kinomaks...', NULL)
#2 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /home/dataminer/workspace/testwork/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /home/dataminer/workspace/testwork/index.php(118): Kohana_Request->execute()
#5 {main} in file:line