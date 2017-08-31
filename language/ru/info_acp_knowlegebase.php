<?php
/**
 *
 * Knowledge base. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Sheer
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_KNOWLEDGE_BASE_CONFIGURE'		=> 'Конфигурация',
	'ACP_KNOWLEDGE_EXPLAIN'				=> 'Здесь можно настроить параметры расширения.',
	'ACP_LIBRARY_ARTICLES'				=> 'Статьи',
	'ACP_LIBRARY_ATTACHMENTS'			=> 'Вложения',
	'ACP_LIBRARY_ATTACHMENTS_ORPHAN'	=> 'Потерянные вложения',
	'ACP_LIBRARY_MANAGE'				=> 'Управление библиотекой',
	'ACP_LIBRARY_MANAGE_EXPLAIN'		=> 'Каждая категория может иметь неограниченное количество подкатегорий. Здесь вы можете добавлять, редактировать, перемещать категории местами и перемещать категории из одной в другую. Если количество статей в категории не совпадает с реальным, вы можете синхронизировать категорию.',
	'ACP_LIBRARY_PERMISSIONS'			=> 'Права доступа',
	'ACP_LIBRARY_PERMISSIONS_EXPLAIN'	=> 'Здесь вы можете изменять для каждого пользователя и группы доступ к каждой категории библиотеки. Для назначения модераторов или определения прав администратора используйте соответствующую страницу.',
	'ACP_LIBRARY_PERMISSIONS_NO_CATS'	=> 'Чтобы задать права доступа, необходимо создать хотя бы одну категорию.',
	'ACP_LIBRARY_SEARCH'				=> 'Поиск',
	'ACP_LIBRARY_ATTACHMENTS_EXTRA_FILES'	=> 'Лишние файлы',
	'ACP_LIBRARY_ATTACHMENTS_LOST_FILES'	=> 'Потерянные файлы',
	'ADD_CATEGORY'						=> 'Добавить категорию',
	'ADD_CATEGORY'						=> 'Создать новую категорию',
	'ADD_CATEGORY_EXPLAIN'				=> 'Создать новую категорию',
	'ALL_CATS'							=> 'Все категории',
	'ANOUNCE'							=> 'Анонсировать статьи на конференции',
	'ANOUNCE_EXPLAIN'					=> 'Если выбрано, то после добавления статьи на конференции будет автоматически создана тема с кратким описанием статьи и ссылкой на статью.<br />Форум, в котором будут создаваться анонсы, следует выбрать из списка форумов ниже (будет доступен при активации опции).',
	'ARTICLE_MANAGE'					=> 'Управление статьями',
	'ARTICLE_MANAGE_EXPLAIN'			=> 'Здесь вы можете удалять статьи или перемещать их в другие категории, а также просматривать их или редактировать (в отдельном окне).',
	'ARTICLE_MOVE_EXPLAIN'				=> 'Выберите категорию, в которую вы желаете перенести статью.',
	'CAT_DESCR'							=> 'Описание категории',
	'CAT_NAME'							=> 'Название категории',
	'CAT_PARENT'						=> 'Родительская категория',
	'CATEGORY_ADDED'					=> 'Категория успешно добавлена. Теперь вы можете %sустановить права%s доступа для этой категории.',
	'CATEGORY_DELETED'					=> 'Категория успешно удалена.',
	'CATEGORY_EDITED'					=> 'Категория успешно отредактирована',
	'CATEGORYES'						=> 'Категории',
	'CATEGOTY_LIST'						=> 'Список категорий',
	'CONFIRM_DEL_CAT'					=> 'Вы уверены, что хотите удалить эту категорию?',
	'DEL_CATEGORY'						=> 'Удалить категорию',
	'DEL_CATEGORY_EXPLAIN'				=> 'Форма ниже позволяет вам удалить категорию. Вы можете решить, куда переместить все имеющиеся в ней статьи или подкатегории.',
	'DELETE_ALL_ARTICLES'				=> 'Удалить статьи',
	'DELETE_SUBCATS'					=> 'Удалить подкатегории и статьи',
	'EDIT_CATEGORY'						=> 'Редактировать категорию',
	'EDIT_DATE'							=> 'Отредактирована',
	'EXTENSION_GROUP_EXPLAIN'			=> 'Здесь вы можете управлять разрешёнными расширениями файлов вложений. Если вы желаете удалить расширение, в выпадающем меню слева выберите только те, которые следует оставить. Если вы хотите добавить расширения, выберите их в выпадающем списке доступных расширений слева. Используя соответствующие комбинации клавиш и кнопок мыши можно выбрать более одного расширения. Если вы хотите добавить расширения, отсутствующие в списке доступных, их следует добавить в соответствующем разделе ACP (<strong>Сообщения</strong> &raquo; ВЛОЖЕНИЯ &raquo; Управление расширениями файлов) Если вы желаете использовать другие группы расширений, их нужно также добавить в ACP.',
	'FILES_DELETED_SUCCESS'				=> 'Выбранные вложения были удалены.',
	'KB_CONFIG_EXPLAIN' 				=> 'Здесь вы можете задать основные настройки',
	'KB_CONFIG_UPDATED'					=> 'Настройки успешно обновлены',
	'KB_FORUM_EXPLAIN'					=> 'Выберите форум, в который будут отправляться анонсы статей.',
	'KB_ROOT'							=> 'Корневая категория',
	'KNOWLEDGE_BASE'					=> 'Библиотека',
	'LIBRARY_EDIT_CAT'					=> 'Редактирование категории',
	'LIBRARY_EDIT_CAT_EXPLAIN'			=> 'Здесь вы можете переименовать категорию, дать ей краткое описание и переместить в другую категорию (вместе с содержимым).',
	'MOVE_ARTICLES_TO'					=> 'Переместить статьи в',
	'MOVE_SUBCATS_TO'					=> 'Переместить подкатегории в',
	'NO_ARTICLES_IN_KB'					=> 'В библиотеке пока нет статей.',
	'NO_CAT_DESCR'						=> 'Вы не создали описание категории.',
	'NO_CAT_NAME'						=> 'Вы не указали название категории.',
	'NO_CATS_IN_KB'						=> 'В библиотеке пока нет категорий.',
	'NO_DESTINATION_CATEGORY'			=> 'Категория получатель не найдена',
	'NO_FILES_SELECTED'					=> 'Не выбрано вложений для удаления.',
	'NO_PARENT'							=> 'Нет родителя',
	'NUM_ARTICLES'						=> 'Статей',
	'PER_PAGE'							=> 'Количество статей на странице',
	'PER_PAGE_EXPLAIN'					=> 'Количество статей на странице управления статьями и странице просмотра категории.',
	'PRUNE_ATTACHMENTS_EXPLAIN'			=> 'Будет осуществлена проверка существования на сервере лишних файлов вложений. Если будет обнаружено, что файл существует, он будет удален. Продолжить?',
	'PRUNE_ATTACHMENTS_FINISHED'		=> 'Лишних файлов вложений не обнаружено.',
	'PRUNE_ATTACHMENTS_PROGRESS'		=> 'Проводится проверка лишних файлов. Не прерывайте процесс!<br />Следующие файлы были удалены:',
	'PRUNE_ATTACHMENTS_FAIL'			=> '<br />Следующие файлы не удалось удалить:',
	'POST_ROW_ARTICLE_INFO'				=> ' под номером %1$d…',
	'SELECT_CAT'						=> 'Выберите категорию',
	'SELECT_CATEGORY'					=> 'Выберите категорию',
	'SYNC_OK'							=> 'Категория успешно синхронизирована.',
	'THUMBNAIL_EXPLAIN'					=> 'Размеры миниатюр задаются в соответствующем разделе ACP (&laquo;Настройки вложений&raquo;).',
	'UPLOAD_DENIED_ARTICLE'				=> 'Статьи с таким номером не существует.',
	'UPLOADING_FILE_TO_ARTICLE'			=> 'Загрузка файла «%1$s» в статью',
	'ATTACHMENTS_EXPLAIN'				=> 'Здесь можно просматривать и удалять вложения, прикреплённые к статьям.',
	'ORPHAN_EXPLAIN'					=> 'Здесь вы можете видеть потерянные файлы. Обычно такие файлы появляются из-за того, что пользователи прикрепляют файлы, но впоследствии не публикуют статью. Вы можете удалить такие файлы или прикрепить их к существующим статьям. Во втором случае вам потребуется правильный идентификатор статьи (ID), который вы должны указать самостоятельно. После этого загруженное вложение будет прикреплено к указанной вами статье, если она существует.',
	'ACP_LIBRARY_ATTACHMENTS_LOST_FILES_EXPLAIN'	=> 'Данный инструмент сравнивает записи в Базе Данных с фактом нахождения вложений на сервере. Если файлы вложений отсутствуют на сервере, инструмент удаляет записи о них из Базы Данных. Продолжить?.',
	'RESYNC_ATTACHMENTS_FINISHED'		=> 'Вложения успешно синхронизированы (проверены на корректность записей в Базе Данных)!',
	'RESYNC_ATTACHMENTS_PROGRESS'		=> 'Производится проверка записей в Базе Данных о вложениях запущена! Не прерывайте процесс!',

// User Permissions
	'kb_u_add'				=> 'Может добавлять статьи',
	'kb_u_edit'				=> 'Может редактировать свои статьи',
	'kb_u_delete'			=> 'Может удалять свои статьи',
	'kb_u_add_noapprove'	=> 'Может добавлять статьи без предварительного одобрения',
// Moderator Permissions
	'kb_m_edit'				=> 'Может редактировать статьи',
	'kb_m_delete'			=> 'Может удалять статьи',
	'kb_m_approve'			=> 'Может одобрять статьи',

	'LOG_KB_CONFIG_SEARCH'					=> '<b>Изменены настройки поиска в Библиотеке</b>',
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Здесь вы можете управлять индексами поискового механизма. Поскольку обычно используется только один механизм, необходимо удалять все неиспользуемые индексы. После изменения каких-либо настроек поиска (например, минимального/максимального количества символов) имеет смысл повторно создать поисковые индексы для того, чтобы они отражали произведённые изменения.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Здесь вы можете указать поисковый механизм, который будет использоваться для индексации сообщений и осуществления поиска.',

	'CONFIRM_SEARCH_BACKEND'				=> 'Вы действительно хотите переключиться на другой поисковый механизм? После переключения нужно будет создать поисковые индексы для использования нового поискового механизма. Если вы не планируете переключаться обратно на старый поисковый механизм, то можете удалить поисковые индексы от него для освобождения системных ресурсов.',
	'CONTINUE_DELETING_INDEX'				=> 'Продолжить предыдущий процесс удаления индексов',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Ранее был запущен процесс удаления поисковых индексов. Необходимо дождаться завершения этого процесса для получения доступа к странице поисковых индексов или отменить его.',
	'CONTINUE_INDEXING'						=> 'Продолжить предыдущий процесс индексирования',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Ранее был запущен процесс индексации. Необходимо дождаться завершения этого процесса для получения доступа к странице поисковых индексов или отменить его.',
	'CREATE_INDEX'							=> 'Создать индексы',

	'DELETE_INDEX'							=> 'Удалить индексы',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Удаление поисковых индексов…',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Идёт удаление поисковых индексов. Этот процесс может занять несколько минут.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'Механизм полнотекстового поиска MySQL может использоваться только на MySQL4 и выше.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Полнотекстовые индексы MySQL могут использоваться только с таблицами MyISAM или InnoDB. Для использования полнотекстовых индексов с таблицами InnoDB требуется MySQL 5.6.4 или более поздней версии.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Общее количество индексированных статей',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'Механизм полнотекстового поиска PostgreSQL может быть использован только на СУБД PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'				=> 'Общее количество индексированных статей',
	'FULLTEXT_POSTGRES_VERSION_CHECK'			=> 'Версия PostgreSQL',
	'FULLTEXT_POSTGRES_TS_NAME'					=> 'Профиль конфигурации полнотекстового поиска:',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'	=> 'Для данного поискового механизма требуется PostgreSQL версии 8.3 и выше.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Общие настройки поиска',

	'INDEX_STATS'							=> 'Статистика индексации',
	'INDEXING_IN_PROGRESS'					=> 'Идёт индексация…',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Идёт индексация всех имеющихся статейй. Этот процесс может занять от нескольких минут до нескольких часов в зависимости от объёма данных.',

	'LIMIT_SEARCH_LOAD'						=> 'Ограничение поиска при загрузке системы',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Если загрузка системы в течение одной минуты превышает это значение, то поисковая страница будет недоступна. Значение 1.0 эквивалентно стопроцентному использованию одного процессора. Эта опция функционирует только на UNIX-подобных серверах.',
	'PER_PAGE_SEARCH'						=> 'Результаты поиска',
	'PER_PAGE_SEARCH_EXPLAIN'				=> 'Количество отображаемых элементов на странице результатов поиска.',

	'PROGRESS_BAR'							=> 'Индикатор выполнения',

	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> 'Все статьи до статьи под номером %2$d успешно проиндексированы, в текущем шаге проиндексировано %1$d статья.<br />',
		2	=> 'Все статьи до статьи под номером %2$d успешно проиндексированы, в текущем шаге проиндексировано %1$d статьи.<br />',
		3	=> 'Все статьи до статьи под номером %2$d успешно проиндексированы, в текущем шаге проиндексировано %1$d статей.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> 'Текущая скорость индексации — примерно %1$.1f сообщение в секунду.<br />Идёт индексация…',
		2	=> 'Текущая скорость индексации — примерно %1$.1f сообщения в секунду.<br />Идёт индексация…',
		3	=> 'Текущая скорость индексации — примерно %1$.1f сообщений в секунду.<br />Идёт индексация…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> 'Все статьи до статьи под номером %2$d успешно удалены из поисковых индексов.<br />Идёт удаление…',
		2	=> 'Все статьи до статьи под номером %2$d успешно удалены из поисковых индексов.<br />Идёт удаление…',
		3	=> 'Все статьи до статьи под номером %2$d успешно удалены из поисковых индексов.<br />Идёт удаление…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Все статьи в базе данных успешно проиндексированы.',
	'SEARCH_INDEX_REMOVED'					=> 'Поисковые индексы успешно удалены.',
	'SEARCH_TYPE'							=> 'Поисковый механизм',
	'SEARCH_TYPE_EXPLAIN'					=> 'Расширение <b>phpBB Knowledge Base</b> позволяет выбрать механизм для осуществления поиска в статьях. По умолчанию используется собственный полнотекстовый поисковый механизм phpBB Knowledge Base.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Вы переключились на другой поисковый механизм. Убедитесь, что имеются индексы для этого поискового механизма, и, в случае необходимости, создайте их.',

	'TOTAL_WORDS'							=> 'Общее количество индексированных слов',
	'TOTAL_MATCHES'							=> 'Число слов, связанных с статьями',

	'YES_SEARCH'							=> 'Включить поисковые возможности',
	'YES_SEARCH_EXPLAIN'					=> 'Включение поисковых возможностей поиска в статьях.',
	'YES_SEARCH_UPDATE'						=> 'Включить полнотекстовое обновление',

	'ACP_LIBRARY_LOGS'					=> 'Лог действий',
	'ACP_LIBRARY_LOGS_EXPLAIN'			=> 'Это список действий, выполненных с библиотекой. Вы можете сортировать список по имени пользователя, дате, IP-адресу или по действию. Вы можете удалить отдельные записи или очистить весь лог целиком.',
	'LOG_CLEAR_KB'						=> '<b>Очищены логи библиотеки</b>',
	'LOG_CATS_MOVE_DOWN'				=> '<b>Перемещена категория</b> %1$s <b>под</b> %2$s',
	'LOG_CATS_MOVE_UP'					=> '<b>Перемещена категория</b> %1$s <b>над</b> %2$s',
	'LOG_CATS_ADD'						=> '<b>Создана категория</b><br />» %s',
	'LOG_CATS_DEL_ARTICLES'				=> '<b>Удалена категория со статьями</b><br />» %s',
	'LOG_CATS_DEL_MOVE_POSTS_MOVE_CATS'	=> '<b>Удалена категория</b> » %3$s, <b>перемещены статьи в </b> » %1$s <b>и подкатегории в</b> » %2$s',
	'LOG_CATS_DEL_MOVE_POSTS'			=> '<b>Удалена категория</b> » %2$s<br /><b>и перемещены статьи в</b> » %1$s',
	'LOG_CATS_DEL_CAT'					=> '<b>Удалена категория</b><br />» %s',
	'LOG_CATS_DEL_MOVE_POSTS_CATS'		=> '<b>Удалена категория</b> » %2$s <b><br />с подкатегориями, статьи перемещены в</b> » %1$s',
	'LOG_CATS_DEL_POSTS_MOVE_CATS'		=> '<b>Удалена категория</b> » %2$s <b>со статьями, подкатегории перемещены</b> » %1$s',
	'LOG_CATS_DEL_POSTS_CATS'			=> '<b>Удалена категория со статьями и подкатегориями</b><br />» %s',
	'LOG_CATS_DEL_CATS'					=> '<b>Удалена категория</b> » %2$s <b>и подкатегории перемещены в</b> » %1$s',
	'LOG_CATS_EDIT'						=> '<b>Изменена информация о категории</b><br />» %1$s',
	'LOG_CATS_CAT_MOVED_TO'				=> '<b>Категория</b> » %1$s <b>перемещена в</b> %2$s',
	'LOG_CATS_SYNC'						=> '<b>Синхронизирована категория</b><br />» %1s',
	'LOG_KB_CONFIG_SEARCH'				=> '<b>Изменены настройки поиска</b>',
	'LOG_KB_SEARCH_INDEX_REMOVED'		=> '<b>Удалены поисковые индексы</b>',
	'LOG_KB_SEARCH_INDEX_CREATED'		=> '<b>Созданы поисковые индексы</b>',

	'LOG_LIBRARY_ADD_ARTICLE'			=> 'Добавлена статья &laquo;<b>%1s</b>&raquo; в категорию<br />» <b>%2s</b>',

	'LOG_LIBRARY_DEL_ARTICLE'			=> 'Удалена статья &laquo;<b>%1s</b>&raquo; из категории<br />» <b>%2s</b>',
	'LOG_LIBRARY_EDIT_ARTICLE'			=> 'Отредактирована статья &laquo;<b>%1s</b>&raquo; в категории<br />» <b>%2s</b>',
	'LOG_LIBRARY_MOVED_ARTICLE'			=> 'Перемещена статья <b>%1s</b> из категории » <b>%2s</b><br />в категорию » <b>%3s</b>',
	'LOG_LIBRARY_APPROVED_ARTICLE'		=> 'Одобрена статья <b>%1s</b> из категории » <b>%2s</b><br />добавленная пользователем » <b>%3s</b>',
	'LOG_LIBRARY_REJECTED_ARTICLE'		=> 'Отклонена статья <b>%1s</b> из категории » <b>%2s</b><br />добавленная пользователем » <b>%3s</b>',
	'LOG_LIBRARY_PERMISSION_DELETED'	=> 'Удалён доступ пользователя/группы к категории <b>%1s</b><br />» %2s',
	'LOG_LIBRARY_PERMISSION_ADD'		=> 'Добавлен или изменен доступ пользователя/группы к категории <b>%1s</b><br />» %2s',
	'LOG_LIBRARY_CONFIG'				=> '<b>Изменена конфигурация библиотеки</b>',
));
