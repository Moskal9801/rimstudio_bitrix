<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.2.0
 */

/**
 * Database `rimstudio_db`
 */

/* `rimstudio_db`.`b_admin_notify` */
$b_admin_notify = array(
  array('ID' => '4','MODULE_ID' => 'MAIN','TAG' => 'SITE_CHECKER','MESSAGE' => 'Обнаружены ошибки в работе сайта. <a href="/bitrix/admin/site_checker.php?lang=ru&start_test=Y">Проверить и исправить.</a>','ENABLE_CLOSE' => 'Y','PUBLIC_SECTION' => 'N','NOTIFY_TYPE' => 'M')
);

/* `rimstudio_db`.`b_admin_notify_lang` */
$b_admin_notify_lang = array(
);

/* `rimstudio_db`.`b_agent` */
$b_agent = array(
  array('ID' => '1','MODULE_ID' => 'main','SORT' => '100','NAME' => '\\Bitrix\\Main\\Analytics\\CounterDataTable::submitData();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 18:24:38','NEXT_EXEC' => '2023-02-20 18:25:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '60','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '2','MODULE_ID' => 'main','SORT' => '100','NAME' => 'CCaptchaAgent::DeleteOldCaptcha(3600);','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 17:43:38','NEXT_EXEC' => '2023-02-20 18:43:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '3600','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '3','MODULE_ID' => 'main','SORT' => '100','NAME' => 'CSiteCheckerTest::CommonTest();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '4','MODULE_ID' => 'main','SORT' => '100','NAME' => 'CEvent::CleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '5','MODULE_ID' => 'main','SORT' => '100','NAME' => 'CUser::CleanUpHitAuthAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '6','MODULE_ID' => 'main','SORT' => '100','NAME' => 'CUndo::CleanUpOld();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '7','MODULE_ID' => 'main','SORT' => '100','NAME' => 'CUserCounter::DeleteOld();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '8','MODULE_ID' => 'main','SORT' => '100','NAME' => '\\Bitrix\\Main\\UI\\Viewer\\FilePreviewTable::deleteOldAgent(22, 20);','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 18:24:38','NEXT_EXEC' => '2023-02-20 18:54:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '1800','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '9','MODULE_ID' => 'main','SORT' => '100','NAME' => 'CUser::AuthActionsCleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '10','MODULE_ID' => 'main','SORT' => '100','NAME' => 'CUser::CleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '11','MODULE_ID' => 'main','SORT' => '100','NAME' => 'CUser::DeactivateAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '12','MODULE_ID' => 'main','SORT' => '100','NAME' => 'CEventLog::CleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '13','MODULE_ID' => 'clouds','SORT' => '100','NAME' => 'CCloudStorage::CleanUp();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '14','MODULE_ID' => 'forum','SORT' => '100','NAME' => 'CForumStat::CleanUp();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:40','NEXT_EXEC' => '2023-02-21 15:24:40','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '15','MODULE_ID' => 'forum','SORT' => '100','NAME' => 'CForumFiles::CleanUp();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:41','NEXT_EXEC' => '2023-02-21 15:24:41','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '16','MODULE_ID' => 'landing','SORT' => '100','NAME' => 'Bitrix\\Landing\\Agent::clearRecycle();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 17:43:38','NEXT_EXEC' => '2023-02-20 19:43:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '7200','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '17','MODULE_ID' => 'landing','SORT' => '100','NAME' => 'Bitrix\\Landing\\Agent::clearFiles(30);','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 17:43:38','NEXT_EXEC' => '2023-02-20 18:43:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '3600','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '18','MODULE_ID' => 'landing','SORT' => '100','NAME' => 'Bitrix\\Landing\\Agent::sendRestStatistic();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:41','NEXT_EXEC' => '2023-02-21 15:24:41','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '19','MODULE_ID' => 'landing','SORT' => '100','NAME' => 'Bitrix\\Landing\\Agent::clearTempFiles();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:41','NEXT_EXEC' => '2023-02-21 15:24:41','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '20','MODULE_ID' => 'messageservice','SORT' => '100','NAME' => '\\Bitrix\\MessageService\\Queue::cleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:41','NEXT_EXEC' => '2023-02-21 00:00:00','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'Y','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '21','MODULE_ID' => 'rest','SORT' => '100','NAME' => 'Bitrix\\Rest\\Marketplace\\Client::getNumUpdates();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:41','NEXT_EXEC' => '2023-02-21 15:24:41','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '22','MODULE_ID' => 'rest','SORT' => '100','NAME' => '\\Bitrix\\Rest\\EventOfflineTable::cleanProcessAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:41','NEXT_EXEC' => '2023-02-21 15:24:41','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '23','MODULE_ID' => 'rest','SORT' => '100','NAME' => '\\Bitrix\\Rest\\LogTable::cleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:41','NEXT_EXEC' => '2023-02-21 15:24:41','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '24','MODULE_ID' => 'rest','SORT' => '100','NAME' => '\\Bitrix\\Rest\\Configuration\\Helper::sendStatisticAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:41','NEXT_EXEC' => '2023-02-21 15:24:41','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '25','MODULE_ID' => 'rest','SORT' => '100','NAME' => '\\Bitrix\\Rest\\UsageStatTable::sendAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 17:43:38','NEXT_EXEC' => '2023-02-20 18:43:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '3600','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '26','MODULE_ID' => 'rest','SORT' => '100','NAME' => '\\Bitrix\\Rest\\UsageStatTable::cleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 17:43:38','NEXT_EXEC' => '2023-02-20 18:43:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '3600','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '27','MODULE_ID' => 'rest','SORT' => '100','NAME' => '\\Bitrix\\Rest\\Marketplace\\Notification::checkAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:41','NEXT_EXEC' => '2023-02-21 15:24:41','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '28','MODULE_ID' => 'rest','SORT' => '100','NAME' => '\\Bitrix\\Rest\\Marketplace\\Immune::load();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:42','NEXT_EXEC' => '2023-02-21 15:24:42','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '29','MODULE_ID' => 'rest','SORT' => '100','NAME' => '\\Bitrix\\Rest\\Configuration\\Structure::clearContentAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:42','NEXT_EXEC' => '2023-02-21 15:24:42','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '30','MODULE_ID' => 'rest','SORT' => '100','NAME' => '\\Bitrix\\Rest\\Helper::recoveryAgents();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-16 15:28:48','NEXT_EXEC' => '2023-02-23 15:28:48','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '604800','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '31','MODULE_ID' => 'search','SORT' => '10','NAME' => 'CSearchSuggest::CleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:42','NEXT_EXEC' => '2023-02-21 15:24:42','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '32','MODULE_ID' => 'search','SORT' => '10','NAME' => 'CSearchStatistic::CleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:42','NEXT_EXEC' => '2023-02-21 15:24:42','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '33','MODULE_ID' => 'security','SORT' => '100','NAME' => 'CSecuritySession::CleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 18:24:38','NEXT_EXEC' => '2023-02-20 18:54:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '1800','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '34','MODULE_ID' => 'security','SORT' => '100','NAME' => 'CSecurityIPRule::CleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 17:43:38','NEXT_EXEC' => '2023-02-20 18:43:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '3600','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '35','MODULE_ID' => 'seo','SORT' => '100','NAME' => 'Bitrix\\Seo\\Engine\\YandexDirect::updateAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 17:43:38','NEXT_EXEC' => '2023-02-20 18:43:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '3600','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '36','MODULE_ID' => 'seo','SORT' => '100','NAME' => 'Bitrix\\Seo\\Adv\\LogTable::clean();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:42','NEXT_EXEC' => '2023-02-21 15:24:42','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '37','MODULE_ID' => 'seo','SORT' => '100','NAME' => 'Bitrix\\Seo\\Adv\\Auto::checkQuantityAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 17:43:38','NEXT_EXEC' => '2023-02-20 18:43:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '3600','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '38','MODULE_ID' => 'subscribe','SORT' => '100','NAME' => 'CSubscription::CleanUp();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:42','NEXT_EXEC' => '2023-02-21 03:00:00','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'Y','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '47','MODULE_ID' => 'messageservice','SORT' => '100','NAME' => '\\Bitrix\\MessageService\\IncomingMessage::cleanUpAgent();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 15:24:42','NEXT_EXEC' => '2023-02-21 00:00:00','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '86400','IS_PERIOD' => 'Y','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0'),
  array('ID' => '51','MODULE_ID' => 'ui','SORT' => '100','NAME' => '\\Bitrix\\UI\\FileUploader\\TempFileAgent::clearOldRecords();','ACTIVE' => 'Y','LAST_EXEC' => '2023-02-20 18:24:38','NEXT_EXEC' => '2023-02-20 18:54:38','DATE_CHECK' => NULL,'AGENT_INTERVAL' => '1800','IS_PERIOD' => 'N','USER_ID' => NULL,'RUNNING' => 'N','RETRY_COUNT' => '0')
);

/* `rimstudio_db`.`b_app_password` */
$b_app_password = array(
);

/* `rimstudio_db`.`b_b24connector_buttons` */
$b_b24connector_buttons = array(
);

/* `rimstudio_db`.`b_b24connector_button_site` */
$b_b24connector_button_site = array(
);

/* `rimstudio_db`.`b_bitrixcloud_option` */
$b_bitrixcloud_option = array(
  array('ID' => '1','NAME' => 'backup_quota','SORT' => '0','PARAM_KEY' => '0','PARAM_VALUE' => '0'),
  array('ID' => '2','NAME' => 'backup_total_size','SORT' => '0','PARAM_KEY' => '0','PARAM_VALUE' => '0'),
  array('ID' => '3','NAME' => 'backup_last_backup_time','SORT' => '0','PARAM_KEY' => '0','PARAM_VALUE' => '1676550571'),
  array('ID' => '4','NAME' => 'monitoring_expire_time','SORT' => '0','PARAM_KEY' => '0','PARAM_VALUE' => '1676903887')
);

/* `rimstudio_db`.`b_blog` */
$b_blog = array(
);

/* `rimstudio_db`.`b_blog_category` */
$b_blog_category = array(
);

/* `rimstudio_db`.`b_blog_comment` */
$b_blog_comment = array(
);

/* `rimstudio_db`.`b_blog_group` */
$b_blog_group = array(
);

/* `rimstudio_db`.`b_blog_image` */
$b_blog_image = array(
);

/* `rimstudio_db`.`b_blog_post` */
$b_blog_post = array(
);

/* `rimstudio_db`.`b_blog_post_category` */
$b_blog_post_category = array(
);

/* `rimstudio_db`.`b_blog_post_param` */
$b_blog_post_param = array(
);

/* `rimstudio_db`.`b_blog_site_path` */
$b_blog_site_path = array(
);

/* `rimstudio_db`.`b_blog_socnet` */
$b_blog_socnet = array(
);

/* `rimstudio_db`.`b_blog_socnet_rights` */
$b_blog_socnet_rights = array(
);

/* `rimstudio_db`.`b_blog_trackback` */
$b_blog_trackback = array(
);

/* `rimstudio_db`.`b_blog_user` */
$b_blog_user = array(
);

/* `rimstudio_db`.`b_blog_user2blog` */
$b_blog_user2blog = array(
);

/* `rimstudio_db`.`b_blog_user2user_group` */
$b_blog_user2user_group = array(
);

/* `rimstudio_db`.`b_blog_user_group` */
$b_blog_user_group = array(
  array('ID' => '1','BLOG_ID' => NULL,'NAME' => 'all'),
  array('ID' => '2','BLOG_ID' => NULL,'NAME' => 'registered')
);

/* `rimstudio_db`.`b_blog_user_group_perms` */
$b_blog_user_group_perms = array(
);

/* `rimstudio_db`.`b_cache_tag` */
$b_cache_tag = array(
  array('ID' => '4','SITE_ID' => NULL,'CACHE_SALT' => NULL,'RELATIVE_PATH' => '0:1676902435','TAG' => '**'),
  array('ID' => '81','SITE_ID' => 's1','CACHE_SALT' => '/e25','RELATIVE_PATH' => '/s1/bitrix/news.list/e25','TAG' => 'iblock_id_3'),
  array('ID' => '93','SITE_ID' => 's1','CACHE_SALT' => '/35f','RELATIVE_PATH' => 'landing/blocks','TAG' => 'landing_blocks')
);

/* `rimstudio_db`.`b_captcha` */
$b_captcha = array(
);

/* `rimstudio_db`.`b_checklist` */
$b_checklist = array(
);

/* `rimstudio_db`.`b_clouds_copy_queue` */
$b_clouds_copy_queue = array(
);

/* `rimstudio_db`.`b_clouds_delete_queue` */
$b_clouds_delete_queue = array(
);

/* `rimstudio_db`.`b_clouds_file_bucket` */
$b_clouds_file_bucket = array(
);

/* `rimstudio_db`.`b_clouds_file_hash` */
$b_clouds_file_hash = array(
);

/* `rimstudio_db`.`b_clouds_file_resize` */
$b_clouds_file_resize = array(
);

/* `rimstudio_db`.`b_clouds_file_save` */
$b_clouds_file_save = array(
);

/* `rimstudio_db`.`b_clouds_file_upload` */
$b_clouds_file_upload = array(
);

/* `rimstudio_db`.`b_component_params` */
$b_component_params = array(
  array('ID' => '9','SITE_ID' => 's1','COMPONENT_NAME' => 'bitrix:news.list','TEMPLATE_NAME' => 'portfolio_list','REAL_PATH' => '/index.php','SEF_MODE' => 'N','SEF_FOLDER' => NULL,'START_CHAR' => '152','END_CHAR' => '1781','PARAMETERS' => 'a:51:{s:18:"ACTIVE_DATE_FORMAT";s:5:"d.m.Y";s:18:"ADD_SECTIONS_CHAIN";s:1:"Y";s:9:"AJAX_MODE";s:1:"N";s:22:"AJAX_OPTION_ADDITIONAL";s:0:"";s:19:"AJAX_OPTION_HISTORY";s:1:"N";s:16:"AJAX_OPTION_JUMP";s:1:"N";s:17:"AJAX_OPTION_STYLE";s:1:"N";s:12:"CACHE_FILTER";s:1:"N";s:12:"CACHE_GROUPS";s:1:"Y";s:10:"CACHE_TIME";s:8:"36000000";s:10:"CACHE_TYPE";s:1:"A";s:11:"CHECK_DATES";s:1:"Y";s:10:"DETAIL_URL";s:0:"";s:20:"DISPLAY_BOTTOM_PAGER";s:1:"N";s:12:"DISPLAY_DATE";s:1:"Y";s:12:"DISPLAY_NAME";s:1:"Y";s:15:"DISPLAY_PICTURE";s:1:"Y";s:20:"DISPLAY_PREVIEW_TEXT";s:1:"Y";s:17:"DISPLAY_TOP_PAGER";s:1:"N";s:10:"FIELD_CODE";a:4:{i:0;s:4:"NAME";i:1;s:12:"PREVIEW_TEXT";i:2;s:15:"PREVIEW_PICTURE";i:3;s:0:"";}s:11:"FILTER_NAME";s:0:"";s:24:"HIDE_LINK_WHEN_NO_DETAIL";s:1:"N";s:9:"IBLOCK_ID";s:1:"3";s:11:"IBLOCK_TYPE";s:7:"Content";s:25:"INCLUDE_IBLOCK_INTO_CHAIN";s:1:"Y";s:19:"INCLUDE_SUBSECTIONS";s:1:"Y";s:11:"MESSAGE_404";s:0:"";s:10:"NEWS_COUNT";s:3:"999";s:22:"PAGER_BASE_LINK_ENABLE";s:1:"N";s:20:"PAGER_DESC_NUMBERING";s:1:"N";s:31:"PAGER_DESC_NUMBERING_CACHE_TIME";s:5:"36000";s:14:"PAGER_SHOW_ALL";s:1:"N";s:17:"PAGER_SHOW_ALWAYS";s:1:"N";s:14:"PAGER_TEMPLATE";s:0:"";s:11:"PAGER_TITLE";s:14:"Новости";s:14:"PARENT_SECTION";s:0:"";s:19:"PARENT_SECTION_CODE";s:0:"";s:20:"PREVIEW_TRUNCATE_LEN";s:0:"";s:13:"PROPERTY_CODE";a:3:{i:0;s:17:"work_descriptions";i:1;s:13:"work_examples";i:2;s:0:"";}s:17:"SET_BROWSER_TITLE";s:1:"Y";s:17:"SET_LAST_MODIFIED";s:1:"N";s:20:"SET_META_DESCRIPTION";s:1:"Y";s:17:"SET_META_KEYWORDS";s:1:"Y";s:14:"SET_STATUS_404";s:1:"N";s:9:"SET_TITLE";s:1:"Y";s:8:"SHOW_404";s:1:"N";s:8:"SORT_BY1";s:2:"ID";s:8:"SORT_BY2";s:4:"SORT";s:11:"SORT_ORDER1";s:3:"ASC";s:11:"SORT_ORDER2";s:3:"ASC";s:20:"STRICT_SECTION_CHECK";s:1:"N";}')
);

/* `rimstudio_db`.`b_composite_log` */
$b_composite_log = array(
);

/* `rimstudio_db`.`b_composite_page` */
$b_composite_page = array(
);

/* `rimstudio_db`.`b_consent_agreement` */
$b_consent_agreement = array(
  array('ID' => '1','CODE' => 'landing_cookie_agreement','DATE_INSERT' => '2023-02-20 17:14:40','ACTIVE' => 'Y','NAME' => 'Согласие с Cookies-файлами','TYPE' => 'C','LANGUAGE_ID' => 'ru','DATA_PROVIDER' => NULL,'AGREEMENT_TEXT' => '<p>Cookie–файлы &mdash; это текстовая строка информации, которую веб-сервер передает в браузер Вашего устройства (компьютер, ноутбук, смартфон, планшет), и которая далее хранится там. Cookie-файлы создаются, когда вы используете ваш браузер, при посещении Сайта. При каждом новом посещении Сайта браузер отправляет cookie-файлы на Сайт, и он распознает пользовательское устройство, что позволяет оптимизировать навигацию по Сайту при каждом следующем посещении.</p>
<p>При первом посещении Сайта Вы имеете возможность дать согласие на использование cookie-файлов или отказаться от него. Для отзыва ранее предоставленного согласия необходимо повторно открыть настройки Cookie через кнопку с иконкой &laquo;Печенье&raquo; в нижнем углу Сайта. При отказе от использования некоторых cookie-файлов определенный контент или функции Сайта могут быть недоступны или будут работать некорректно.</p>','LABEL_TEXT' => 'Мы используем файлы Cookie для улучшения работы, персонализации и повышения удобства пользования нашим сайтом. Продолжая посещать сайт, вы соглашаетесь на использование нами файлов Cookie.','SECURITY_CODE' => '9gfr40','USE_URL' => 'N','URL' => NULL,'IS_AGREEMENT_TEXT_HTML' => 'Y')
);

/* `rimstudio_db`.`b_consent_field` */
$b_consent_field = array(
);

/* `rimstudio_db`.`b_consent_user_consent` */
$b_consent_user_consent = array(
);

/* `rimstudio_db`.`b_consent_user_consent_item` */
$b_consent_user_consent_item = array(
);

/* `rimstudio_db`.`b_counter_data` */
$b_counter_data = array(
);

/* `rimstudio_db`.`b_culture` */
$b_culture = array(
  array('ID' => '1','CODE' => 'ru','NAME' => 'ru','FORMAT_DATE' => 'DD.MM.YYYY','FORMAT_DATETIME' => 'DD.MM.YYYY HH:MI:SS','FORMAT_NAME' => '#NAME# #LAST_NAME#','WEEK_START' => '1','CHARSET' => 'UTF-8','DIRECTION' => 'Y','SHORT_DATE_FORMAT' => 'd.m.Y','MEDIUM_DATE_FORMAT' => 'j M Y','LONG_DATE_FORMAT' => 'j F Y','FULL_DATE_FORMAT' => 'l, j F Y','DAY_MONTH_FORMAT' => 'j F','DAY_SHORT_MONTH_FORMAT' => 'j M','DAY_OF_WEEK_MONTH_FORMAT' => 'l, j F','SHORT_DAY_OF_WEEK_MONTH_FORMAT' => 'D, j F','SHORT_DAY_OF_WEEK_SHORT_MONTH_FORMAT' => 'D, j M','SHORT_TIME_FORMAT' => 'H:i','LONG_TIME_FORMAT' => 'H:i:s','AM_VALUE' => 'am','PM_VALUE' => 'pm','NUMBER_THOUSANDS_SEPARATOR' => ' ','NUMBER_DECIMAL_SEPARATOR' => ',','NUMBER_DECIMALS' => '2'),
  array('ID' => '2','CODE' => 'en','NAME' => 'en','FORMAT_DATE' => 'MM/DD/YYYY','FORMAT_DATETIME' => 'MM/DD/YYYY H:MI:SS T','FORMAT_NAME' => '#NAME# #LAST_NAME#','WEEK_START' => '0','CHARSET' => 'UTF-8','DIRECTION' => 'Y','SHORT_DATE_FORMAT' => 'n/j/Y','MEDIUM_DATE_FORMAT' => 'M j, Y','LONG_DATE_FORMAT' => 'F j, Y','FULL_DATE_FORMAT' => 'l, F j, Y','DAY_MONTH_FORMAT' => 'F j','DAY_SHORT_MONTH_FORMAT' => 'M j','DAY_OF_WEEK_MONTH_FORMAT' => 'l, F j','SHORT_DAY_OF_WEEK_MONTH_FORMAT' => 'D, F j','SHORT_DAY_OF_WEEK_SHORT_MONTH_FORMAT' => 'D, M j','SHORT_TIME_FORMAT' => 'g:i a','LONG_TIME_FORMAT' => 'g:i:s a','AM_VALUE' => 'am','PM_VALUE' => 'pm','NUMBER_THOUSANDS_SEPARATOR' => ',','NUMBER_DECIMAL_SEPARATOR' => '.','NUMBER_DECIMALS' => '2')
);

/* `rimstudio_db`.`b_entity_usage` */
$b_entity_usage = array(
);

/* `rimstudio_db`.`b_event` */
$b_event = array(
);

/* `rimstudio_db`.`b_event_attachment` */
$b_event_attachment = array(
);

/* `rimstudio_db`.`b_event_log` */
$b_event_log = array(
  array('ID' => '1','TIMESTAMP_X' => '2023-02-16 16:50:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_SITE_CREATE','MODULE_ID' => 'landing','ITEM_ID' => 'RIMstudio','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/admin/landing_site.php?lang=ru&site=s1','SITE_ID' => 's1','USER_ID' => '1','GUEST_ID' => NULL,'DESCRIPTION' => 'Array
(
    [0] => Array
        (
            [TITLE] => RIMstudio
            [SMN_SITE_ID] => s1
            [TYPE] => SMN
            [DOMAIN_ID] => 1
            [CODE] => l2wyvmolca
            [CREATED_BY_ID] => 1
            [MODIFIED_BY_ID] => 1
            [DATE_CREATE] => Bitrix\\Main\\Type\\DateTime Object
                (
                    [userTimeEnabled:protected] => 1
                    [value:protected] => DateTime Object
                        (
                            [date] => 2023-02-16 16:50:22.159560
                            [timezone_type] => 3
                            [timezone] => Europe/Moscow
                        )

                )

            [DATE_MODIFY] => Bitrix\\Main\\Type\\DateTime Object
                (
                    [userTimeEnabled:protected] => 1
                    [value:protected] => DateTime Object
                        (
                            [date] => 2023-02-16 16:50:22.159560
                            [timezone_type] => 3
                            [timezone] => Europe/Moscow
                        )

                )

        )

    [1] => Array
        (
            [0] => Array
                (
                    [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\internals\\site.php
                    [line] => 1259
                    [function] => prepareChange
                    [class] => Bitrix\\Landing\\Internals\\SiteTable
                    [type] => ::
                )

            [1] => Array
                (
                    [function] => OnBeforeAdd
                    [class] => Bitrix\\Landing\\Internals\\SiteTable
                    [type] => ::
                )

            [2] => Array
                (
                    [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\lib\\orm\\event.php
                    [line] => 151
                    [function] => call_user_func_array
                )

            [3] => Array
                (
                    [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\lib\\orm\\data\\datamanager.php
                    [line] => 1708
                    [function] => send
                    [class] => Bitrix\\Main\\ORM\\Event
                    [type] => ->
                )

            [4] => Array
                (
                    [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\lib\\orm\\data\\datamanager.php
                    [line] => 889
                    [function] => callOnBeforeAddEvent
                    [class] => Bitrix\\Main\\ORM\\Data\\DataManager
                    [type] => ::
                )

            [5] => Array
                (
                    [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\internals\\base.php
                    [line] => 76
                    [function] => add
                    [class] => Bitrix\\Main\\ORM\\Data\\DataManager
                    [type] => ::
                )

            [6] => Array
                (
                    [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\admin\\site.php
                    [line] => 117
                    [function] => add
                    [class] => Bitrix\\Landing\\Internals\\BaseTable
                    [type] => ::
                )

            [7] => Array
                (
                    [file] => W:\\domains\\rimstudio\\bitrix\\admin\\landing_site.php
                    [line] => 2
                    [args] => Array
                        (
                            [0] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\admin\\site.php
                        )

                    [function] => require
                )

        )

)
'),
  array('ID' => '2','TIMESTAMP_X' => '2023-02-17 03:13:36','SEVERITY' => 'WARNING','AUDIT_TYPE_ID' => 'SITE_CHECKER_ERROR','MODULE_ID' => 'main','ITEM_ID' => 'CSiteCheckerTest::CommonTest();','REMOTE_ADDR' => '-','USER_AGENT' => '-','REQUEST_URI' => '/index.php','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => ''),
  array('ID' => '3','TIMESTAMP_X' => '2023-02-18 08:18:06','SEVERITY' => 'WARNING','AUDIT_TYPE_ID' => 'SITE_CHECKER_ERROR','MODULE_ID' => 'main','ITEM_ID' => 'CSiteCheckerTest::CommonTest();','REMOTE_ADDR' => '-','USER_AGENT' => '-','REQUEST_URI' => '/bitrix/tools/public_session.php?k=79d3e0d7717871512bb5732e6b22eb83.b9d00c565cf8cbd39e795a750d36a4c99b1516c781bc49467cc48a8a8dcc3e1a','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => ''),
  array('ID' => '4','TIMESTAMP_X' => '2023-02-18 10:34:41','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'PAGE_EDIT','MODULE_ID' => 'main','ITEM_ID' => 'UNKNOWN','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/admin/public_file_edit.php','SITE_ID' => 's1','USER_ID' => '1','GUEST_ID' => NULL,'DESCRIPTION' => 'a:1:{s:4:"path";s:9:"index.php";}'),
  array('ID' => '5','TIMESTAMP_X' => '2023-02-18 14:10:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_ENTITY_DELETE','MODULE_ID' => 'landing','ITEM_ID' => '\\Bitrix\\Landing\\Internals\\UpdateBlockTable','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/tools/public_session.php?k=e7a49bd4705be90f4f0c90568d5a18af.ba4ec16b4a03457c87a9502c3523af747154435dac36c492f58220bca0ee5220','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => 'id: 1@Array
(
    [0] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 371
            [function] => delete
            [class] => Bitrix\\Landing\\Internals\\BaseTable
            [type] => ::
        )

    [1] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\lib\\update\\stepper.php
            [line] => 152
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [2] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\classes\\mysql\\agent.php(166) : eval()\'d code
            [line] => 1
            [function] => execAgent
            [class] => Bitrix\\Main\\Update\\Stepper
            [type] => ::
        )

    [3] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\classes\\mysql\\agent.php
            [line] => 166
            [function] => eval
        )

    [4] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\classes\\mysql\\agent.php
            [line] => 21
            [function] => ExecuteAgents
            [class] => CAgent
            [type] => ::
        )

)
'),
  array('ID' => '6','TIMESTAMP_X' => '2023-02-18 14:10:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_ENTITY_DELETE','MODULE_ID' => 'landing','ITEM_ID' => '\\Bitrix\\Landing\\Internals\\UpdateBlockTable','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/tools/public_session.php?k=e7a49bd4705be90f4f0c90568d5a18af.ba4ec16b4a03457c87a9502c3523af747154435dac36c492f58220bca0ee5220','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => 'id: 2@Array
(
    [0] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 371
            [function] => delete
            [class] => Bitrix\\Landing\\Internals\\BaseTable
            [type] => ::
        )

    [1] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [2] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\lib\\update\\stepper.php
            [line] => 152
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [3] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\classes\\mysql\\agent.php(166) : eval()\'d code
            [line] => 1
            [function] => execAgent
            [class] => Bitrix\\Main\\Update\\Stepper
            [type] => ::
        )

    [4] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\classes\\mysql\\agent.php
            [line] => 166
            [function] => eval
        )

)
'),
  array('ID' => '7','TIMESTAMP_X' => '2023-02-18 14:10:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_ENTITY_DELETE','MODULE_ID' => 'landing','ITEM_ID' => '\\Bitrix\\Landing\\Internals\\UpdateBlockTable','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/tools/public_session.php?k=e7a49bd4705be90f4f0c90568d5a18af.ba4ec16b4a03457c87a9502c3523af747154435dac36c492f58220bca0ee5220','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => 'id: 3@Array
(
    [0] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 371
            [function] => delete
            [class] => Bitrix\\Landing\\Internals\\BaseTable
            [type] => ::
        )

    [1] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [2] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [3] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\lib\\update\\stepper.php
            [line] => 152
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [4] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\classes\\mysql\\agent.php(166) : eval()\'d code
            [line] => 1
            [function] => execAgent
            [class] => Bitrix\\Main\\Update\\Stepper
            [type] => ::
        )

)
'),
  array('ID' => '8','TIMESTAMP_X' => '2023-02-18 14:10:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_ENTITY_DELETE','MODULE_ID' => 'landing','ITEM_ID' => '\\Bitrix\\Landing\\Internals\\UpdateBlockTable','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/tools/public_session.php?k=e7a49bd4705be90f4f0c90568d5a18af.ba4ec16b4a03457c87a9502c3523af747154435dac36c492f58220bca0ee5220','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => 'id: 4@Array
(
    [0] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 371
            [function] => delete
            [class] => Bitrix\\Landing\\Internals\\BaseTable
            [type] => ::
        )

    [1] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [2] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [3] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [4] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\main\\lib\\update\\stepper.php
            [line] => 152
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

)
'),
  array('ID' => '9','TIMESTAMP_X' => '2023-02-18 14:10:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_ENTITY_DELETE','MODULE_ID' => 'landing','ITEM_ID' => '\\Bitrix\\Landing\\Internals\\UpdateBlockTable','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/tools/public_session.php?k=e7a49bd4705be90f4f0c90568d5a18af.ba4ec16b4a03457c87a9502c3523af747154435dac36c492f58220bca0ee5220','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => 'id: 5@Array
(
    [0] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 371
            [function] => delete
            [class] => Bitrix\\Landing\\Internals\\BaseTable
            [type] => ::
        )

    [1] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [2] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [3] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [4] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

)
'),
  array('ID' => '10','TIMESTAMP_X' => '2023-02-18 14:10:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_ENTITY_DELETE','MODULE_ID' => 'landing','ITEM_ID' => '\\Bitrix\\Landing\\Internals\\UpdateBlockTable','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/tools/public_session.php?k=e7a49bd4705be90f4f0c90568d5a18af.ba4ec16b4a03457c87a9502c3523af747154435dac36c492f58220bca0ee5220','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => 'id: 6@Array
(
    [0] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 371
            [function] => delete
            [class] => Bitrix\\Landing\\Internals\\BaseTable
            [type] => ::
        )

    [1] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [2] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [3] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [4] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

)
'),
  array('ID' => '11','TIMESTAMP_X' => '2023-02-18 14:10:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_ENTITY_DELETE','MODULE_ID' => 'landing','ITEM_ID' => '\\Bitrix\\Landing\\Internals\\UpdateBlockTable','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/tools/public_session.php?k=e7a49bd4705be90f4f0c90568d5a18af.ba4ec16b4a03457c87a9502c3523af747154435dac36c492f58220bca0ee5220','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => 'id: 7@Array
(
    [0] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 371
            [function] => delete
            [class] => Bitrix\\Landing\\Internals\\BaseTable
            [type] => ::
        )

    [1] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [2] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [3] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [4] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

)
'),
  array('ID' => '12','TIMESTAMP_X' => '2023-02-18 14:10:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_ENTITY_DELETE','MODULE_ID' => 'landing','ITEM_ID' => '\\Bitrix\\Landing\\Internals\\UpdateBlockTable','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/tools/public_session.php?k=e7a49bd4705be90f4f0c90568d5a18af.ba4ec16b4a03457c87a9502c3523af747154435dac36c492f58220bca0ee5220','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => 'id: 8@Array
(
    [0] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 371
            [function] => delete
            [class] => Bitrix\\Landing\\Internals\\BaseTable
            [type] => ::
        )

    [1] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [2] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [3] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [4] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

)
'),
  array('ID' => '13','TIMESTAMP_X' => '2023-02-18 14:10:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_ENTITY_DELETE','MODULE_ID' => 'landing','ITEM_ID' => '\\Bitrix\\Landing\\Internals\\UpdateBlockTable','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/tools/public_session.php?k=e7a49bd4705be90f4f0c90568d5a18af.ba4ec16b4a03457c87a9502c3523af747154435dac36c492f58220bca0ee5220','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => 'id: 9@Array
(
    [0] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 371
            [function] => delete
            [class] => Bitrix\\Landing\\Internals\\BaseTable
            [type] => ::
        )

    [1] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [2] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [3] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [4] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

)
'),
  array('ID' => '14','TIMESTAMP_X' => '2023-02-18 14:10:22','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'LANDING_ENTITY_DELETE','MODULE_ID' => 'landing','ITEM_ID' => '\\Bitrix\\Landing\\Internals\\UpdateBlockTable','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/tools/public_session.php?k=e7a49bd4705be90f4f0c90568d5a18af.ba4ec16b4a03457c87a9502c3523af747154435dac36c492f58220bca0ee5220','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => 'id: 10@Array
(
    [0] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 371
            [function] => delete
            [class] => Bitrix\\Landing\\Internals\\BaseTable
            [type] => ::
        )

    [1] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [2] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [3] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

    [4] => Array
        (
            [file] => W:\\domains\\rimstudio\\bitrix\\modules\\landing\\lib\\update\\block.php
            [line] => 373
            [function] => execute
            [class] => Bitrix\\Landing\\Update\\Block
            [type] => ->
        )

)
'),
  array('ID' => '15','TIMESTAMP_X' => '2023-02-18 16:57:50','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'PAGE_EDIT','MODULE_ID' => 'main','ITEM_ID' => 'UNKNOWN','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/admin/public_file_edit.php','SITE_ID' => 's1','USER_ID' => '1','GUEST_ID' => NULL,'DESCRIPTION' => 'a:1:{s:4:"path";s:9:"index.php";}'),
  array('ID' => '16','TIMESTAMP_X' => '2023-02-18 17:01:49','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'PAGE_EDIT','MODULE_ID' => 'main','ITEM_ID' => 'UNKNOWN','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/admin/public_file_edit.php','SITE_ID' => 's1','USER_ID' => '1','GUEST_ID' => NULL,'DESCRIPTION' => 'a:1:{s:4:"path";s:9:"index.php";}'),
  array('ID' => '17','TIMESTAMP_X' => '2023-02-18 17:56:49','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'PAGE_EDIT','MODULE_ID' => 'main','ITEM_ID' => 'UNKNOWN','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/admin/public_file_edit.php','SITE_ID' => 's1','USER_ID' => '1','GUEST_ID' => NULL,'DESCRIPTION' => 'a:1:{s:4:"path";s:9:"index.php";}'),
  array('ID' => '18','TIMESTAMP_X' => '2023-02-18 17:57:17','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'PAGE_EDIT','MODULE_ID' => 'main','ITEM_ID' => 'UNKNOWN','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/admin/public_file_edit.php','SITE_ID' => 's1','USER_ID' => '1','GUEST_ID' => NULL,'DESCRIPTION' => 'a:1:{s:4:"path";s:9:"index.php";}'),
  array('ID' => '19','TIMESTAMP_X' => '2023-02-19 08:18:25','SEVERITY' => 'WARNING','AUDIT_TYPE_ID' => 'SITE_CHECKER_ERROR','MODULE_ID' => 'main','ITEM_ID' => 'CSiteCheckerTest::CommonTest();','REMOTE_ADDR' => '-','USER_AGENT' => '-','REQUEST_URI' => '/bitrix/tools/public_session.php?k=065003a7a19bc82b18bfc93f5cbbccfe.8da5c171eed899162bb1d3dce8db5e09e37ed6d1e9814f19d63571b45ae12d9b','SITE_ID' => 's1','USER_ID' => '1','GUEST_ID' => NULL,'DESCRIPTION' => ''),
  array('ID' => '20','TIMESTAMP_X' => '2023-02-19 08:53:15','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'PAGE_EDIT','MODULE_ID' => 'main','ITEM_ID' => 'UNKNOWN','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/admin/public_file_edit.php','SITE_ID' => 's1','USER_ID' => '1','GUEST_ID' => NULL,'DESCRIPTION' => 'a:1:{s:4:"path";s:9:"index.php";}'),
  array('ID' => '21','TIMESTAMP_X' => '2023-02-19 14:56:55','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'PAGE_EDIT','MODULE_ID' => 'main','ITEM_ID' => 'UNKNOWN','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/admin/public_file_edit.php','SITE_ID' => 's1','USER_ID' => '1','GUEST_ID' => NULL,'DESCRIPTION' => 'a:1:{s:4:"path";s:46:"local/templates/main/includes/bottom-phone.php";}'),
  array('ID' => '22','TIMESTAMP_X' => '2023-02-20 15:24:40','SEVERITY' => 'WARNING','AUDIT_TYPE_ID' => 'SITE_CHECKER_ERROR','MODULE_ID' => 'main','ITEM_ID' => 'CSiteCheckerTest::CommonTest();','REMOTE_ADDR' => '-','USER_AGENT' => '-','REQUEST_URI' => '/bitrix/tools/public_session.php?k=9f371f4ea4afa76a02c944ba30aef522.2248c368e5ac1c405b5e46edda89a98a643479e548b2a932425de6b9fed66e6d','SITE_ID' => 's1','USER_ID' => NULL,'GUEST_ID' => NULL,'DESCRIPTION' => ''),
  array('ID' => '23','TIMESTAMP_X' => '2023-02-20 15:55:40','SEVERITY' => 'UNKNOWN','AUDIT_TYPE_ID' => 'PAGE_EDIT','MODULE_ID' => 'main','ITEM_ID' => 'UNKNOWN','REMOTE_ADDR' => '127.0.0.1','USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0','REQUEST_URI' => '/bitrix/admin/public_file_edit.php','SITE_ID' => 's1','USER_ID' => '1','GUEST_ID' => NULL,'DESCRIPTION' => 'a:1:{s:4:"path";s:9:"index.php";}')
);

/* `rimstudio_db`.`b_event_message` */
$b_event_message = array(
  array('ID' => '1','TIMESTAMP_X' => '2023-02-16 15:24:02','EVENT_NAME' => 'NEW_USER','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#DEFAULT_EMAIL_FROM#','SUBJECT' => '#SITE_NAME#: Зарегистрировался новый пользователь','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

На сайте #SERVER_NAME# успешно зарегистрирован новый пользователь.

Данные пользователя:
ID пользователя: #USER_ID#

Имя: #NAME#
Фамилия: #LAST_NAME#
E-Mail: #EMAIL#

Login: #LOGIN#

Письмо сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

На сайте <?=$arParams["SERVER_NAME"];?> успешно зарегистрирован новый пользователь.

Данные пользователя:
ID пользователя: <?=$arParams["USER_ID"];?>


Имя: <?=$arParams["NAME"];?>

Фамилия: <?=$arParams["LAST_NAME"];?>

E-Mail: <?=$arParams["EMAIL"];?>


Login: <?=$arParams["LOGIN"];?>


Письмо сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => 'ru'),
  array('ID' => '2','TIMESTAMP_X' => '2023-02-16 15:24:02','EVENT_NAME' => 'USER_INFO','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL#','SUBJECT' => '#SITE_NAME#: Регистрационная информация','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------
#NAME# #LAST_NAME#,

#MESSAGE#

Ваша регистрационная информация:

ID пользователя: #USER_ID#
Статус профиля: #STATUS#
Login: #LOGIN#

Вы можете изменить пароль, перейдя по следующей ссылке:
http://#SERVER_NAME#/auth/index.php?change_password=yes&lang=ru&USER_CHECKWORD=#CHECKWORD#&USER_LOGIN=#URL_LOGIN#

Сообщение сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------
<?=$arParams["NAME"];?> <?=$arParams["LAST_NAME"];?>,

<?=$arParams["MESSAGE"];?>


Ваша регистрационная информация:

ID пользователя: <?=$arParams["USER_ID"];?>

Статус профиля: <?=$arParams["STATUS"];?>

Login: <?=$arParams["LOGIN"];?>


Вы можете изменить пароль, перейдя по следующей ссылке:
http://<?=$arParams["SERVER_NAME"];?>/auth/index.php?change_password=yes&lang=ru&USER_CHECKWORD=<?=$arParams["CHECKWORD"];?>&USER_LOGIN=<?=$arParams["URL_LOGIN"];?>


Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => 'ru'),
  array('ID' => '3','TIMESTAMP_X' => '2023-02-16 15:24:02','EVENT_NAME' => 'USER_PASS_REQUEST','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL#','SUBJECT' => '#SITE_NAME#: Запрос на смену пароля','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------
#NAME# #LAST_NAME#,

#MESSAGE#

Для смены пароля перейдите по следующей ссылке:
http://#SERVER_NAME#/auth/index.php?change_password=yes&lang=ru&USER_CHECKWORD=#CHECKWORD#&USER_LOGIN=#URL_LOGIN#

Ваша регистрационная информация:

ID пользователя: #USER_ID#
Статус профиля: #STATUS#
Login: #LOGIN#

Сообщение сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------
<?=$arParams["NAME"];?> <?=$arParams["LAST_NAME"];?>,

<?=$arParams["MESSAGE"];?>


Для смены пароля перейдите по следующей ссылке:
http://<?=$arParams["SERVER_NAME"];?>/auth/index.php?change_password=yes&lang=ru&USER_CHECKWORD=<?=$arParams["CHECKWORD"];?>&USER_LOGIN=<?=$arParams["URL_LOGIN"];?>


Ваша регистрационная информация:

ID пользователя: <?=$arParams["USER_ID"];?>

Статус профиля: <?=$arParams["STATUS"];?>

Login: <?=$arParams["LOGIN"];?>


Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => 'ru'),
  array('ID' => '4','TIMESTAMP_X' => '2023-02-16 15:24:02','EVENT_NAME' => 'USER_PASS_CHANGED','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL#','SUBJECT' => '#SITE_NAME#: Подтверждение смены пароля','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------
#NAME# #LAST_NAME#,

#MESSAGE#

Ваша регистрационная информация:

ID пользователя: #USER_ID#
Статус профиля: #STATUS#
Login: #LOGIN#

Сообщение сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------
<?=$arParams["NAME"];?> <?=$arParams["LAST_NAME"];?>,

<?=$arParams["MESSAGE"];?>


Ваша регистрационная информация:

ID пользователя: <?=$arParams["USER_ID"];?>

Статус профиля: <?=$arParams["STATUS"];?>

Login: <?=$arParams["LOGIN"];?>


Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => 'ru'),
  array('ID' => '5','TIMESTAMP_X' => '2023-02-16 15:24:02','EVENT_NAME' => 'NEW_USER_CONFIRM','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL#','SUBJECT' => '#SITE_NAME#: Подтверждение регистрации нового пользователя','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Здравствуйте,

Вы получили это сообщение, так как ваш адрес был использован при регистрации нового пользователя на сервере #SERVER_NAME#.

Ваш код для подтверждения регистрации: #CONFIRM_CODE#

Для подтверждения регистрации перейдите по следующей ссылке:
http://#SERVER_NAME#/auth/index.php?confirm_registration=yes&confirm_user_id=#USER_ID#&confirm_code=#CONFIRM_CODE#

Вы также можете ввести код для подтверждения регистрации на странице:
http://#SERVER_NAME#/auth/index.php?confirm_registration=yes&confirm_user_id=#USER_ID#

Внимание! Ваш профиль не будет активным, пока вы не подтвердите свою регистрацию.

---------------------------------------------------------------------

Сообщение сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Здравствуйте,

Вы получили это сообщение, так как ваш адрес был использован при регистрации нового пользователя на сервере <?=$arParams["SERVER_NAME"];?>.

Ваш код для подтверждения регистрации: <?=$arParams["CONFIRM_CODE"];?>


Для подтверждения регистрации перейдите по следующей ссылке:
http://<?=$arParams["SERVER_NAME"];?>/auth/index.php?confirm_registration=yes&confirm_user_id=<?=$arParams["USER_ID"];?>&confirm_code=<?=$arParams["CONFIRM_CODE"];?>


Вы также можете ввести код для подтверждения регистрации на странице:
http://<?=$arParams["SERVER_NAME"];?>/auth/index.php?confirm_registration=yes&confirm_user_id=<?=$arParams["USER_ID"];?>


Внимание! Ваш профиль не будет активным, пока вы не подтвердите свою регистрацию.

---------------------------------------------------------------------

Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => 'ru'),
  array('ID' => '6','TIMESTAMP_X' => '2023-02-16 15:24:02','EVENT_NAME' => 'USER_INVITE','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL#','SUBJECT' => '#SITE_NAME#: Приглашение на сайт','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------
Здравствуйте, #NAME# #LAST_NAME#!

Администратором сайта вы добавлены в число зарегистрированных пользователей.

Приглашаем Вас на наш сайт.

Ваша регистрационная информация:

ID пользователя: #ID#
Login: #LOGIN#

Рекомендуем вам сменить установленный автоматически пароль.

Для смены пароля перейдите по следующей ссылке:
http://#SERVER_NAME#/auth.php?change_password=yes&USER_LOGIN=#URL_LOGIN#&USER_CHECKWORD=#CHECKWORD#
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------
Здравствуйте, <?=$arParams["NAME"];?> <?=$arParams["LAST_NAME"];?>!

Администратором сайта вы добавлены в число зарегистрированных пользователей.

Приглашаем Вас на наш сайт.

Ваша регистрационная информация:

ID пользователя: <?=$arParams["ID"];?>

Login: <?=$arParams["LOGIN"];?>


Рекомендуем вам сменить установленный автоматически пароль.

Для смены пароля перейдите по следующей ссылке:
http://<?=$arParams["SERVER_NAME"];?>/auth.php?change_password=yes&USER_LOGIN=<?=$arParams["URL_LOGIN"];?>&USER_CHECKWORD=<?=$arParams["CHECKWORD"];?>

','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => 'ru'),
  array('ID' => '7','TIMESTAMP_X' => '2023-02-16 15:24:02','EVENT_NAME' => 'FEEDBACK_FORM','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: Сообщение из формы обратной связи','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Вам было отправлено сообщение через форму обратной связи

Автор: #AUTHOR#
E-mail автора: #AUTHOR_EMAIL#

Текст сообщения:
#TEXT#

Сообщение сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Вам было отправлено сообщение через форму обратной связи

Автор: <?=$arParams["AUTHOR"];?>

E-mail автора: <?=$arParams["AUTHOR_EMAIL"];?>


Текст сообщения:
<?=$arParams["TEXT"];?>


Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => 'ru'),
  array('ID' => '8','TIMESTAMP_X' => '2023-02-16 15:24:02','EVENT_NAME' => 'MAIN_MAIL_CONFIRM_CODE','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#MESSAGE_SUBJECT#','MESSAGE' => '<? EventMessageThemeCompiler::includeComponent(\'bitrix:main.mail.confirm\', \'\', $arParams); ?>','MESSAGE_PHP' => '<? EventMessageThemeCompiler::includeComponent(\'bitrix:main.mail.confirm\', \'\', $arParams); ?>','BODY_TYPE' => 'html','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => 'mail_join','ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '9','TIMESTAMP_X' => '2023-02-16 15:24:02','EVENT_NAME' => 'EVENT_LOG_NOTIFICATION','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL#','SUBJECT' => 'Оповещение журнала событий: #NAME#','MESSAGE' => 'Зафиксированы события в журнале, соответствующие параметрам оповещения:

Тип события: #AUDIT_TYPE_ID#
Объект: #ITEM_ID#
Пользователь: #USER_ID# 
IP-адрес: #REMOTE_ADDR#
Браузер: #USER_AGENT#
Страница: #REQUEST_URI# 

Количество записей: #EVENT_COUNT# 

#ADDITIONAL_TEXT#

Перейти в журнал событий:
http://#SERVER_NAME#/bitrix/admin/event_log.php?set_filter=Y&find_audit_type_id=#AUDIT_TYPE_ID#','MESSAGE_PHP' => 'Зафиксированы события в журнале, соответствующие параметрам оповещения:

Тип события: <?=$arParams["AUDIT_TYPE_ID"];?>

Объект: <?=$arParams["ITEM_ID"];?>

Пользователь: <?=$arParams["USER_ID"];?> 
IP-адрес: <?=$arParams["REMOTE_ADDR"];?>

Браузер: <?=$arParams["USER_AGENT"];?>

Страница: <?=$arParams["REQUEST_URI"];?> 

Количество записей: <?=$arParams["EVENT_COUNT"];?> 

<?=$arParams["ADDITIONAL_TEXT"];?>


Перейти в журнал событий:
http://<?=$arParams["SERVER_NAME"];?>/bitrix/admin/event_log.php?set_filter=Y&find_audit_type_id=<?=$arParams["AUDIT_TYPE_ID"];?>','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => 'ru'),
  array('ID' => '10','TIMESTAMP_X' => '2023-02-16 15:24:02','EVENT_NAME' => 'USER_CODE_REQUEST','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL#','SUBJECT' => '#SITE_NAME#: Запрос кода авторизации','MESSAGE' => 'Используйте для авторизации код:

#CHECKWORD#

После авторизации вы сможете изменить свой пароль в редактировании профиля.

Ваша регистрационная информация:

ID пользователя: #USER_ID#
Статус профиля: #STATUS#
Логин: #LOGIN#

Сообщение создано автоматически.','MESSAGE_PHP' => 'Используйте для авторизации код:

<?=$arParams["CHECKWORD"];?>


После авторизации вы сможете изменить свой пароль в редактировании профиля.

Ваша регистрационная информация:

ID пользователя: <?=$arParams["USER_ID"];?>

Статус профиля: <?=$arParams["STATUS"];?>

Логин: <?=$arParams["LOGIN"];?>


Сообщение создано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => 'ru'),
  array('ID' => '11','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'NEW_BLOG_MESSAGE','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: [B] #BLOG_NAME# : #MESSAGE_TITLE#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Новое сообщение в блоге "#BLOG_NAME#"

Тема:
#MESSAGE_TITLE#

Автор: #AUTHOR#
Дата: #MESSAGE_DATE#

Текст сообщения:
#MESSAGE_TEXT#

Адрес сообщения:
#MESSAGE_PATH#

Сообщение сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Новое сообщение в блоге "<?=$arParams["BLOG_NAME"];?>"

Тема:
<?=$arParams["MESSAGE_TITLE"];?>


Автор: <?=$arParams["AUTHOR"];?>

Дата: <?=$arParams["MESSAGE_DATE"];?>


Текст сообщения:
<?=$arParams["MESSAGE_TEXT"];?>


Адрес сообщения:
<?=$arParams["MESSAGE_PATH"];?>


Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '12','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'NEW_BLOG_COMMENT','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: [B] #MESSAGE_TITLE# : #COMMENT_TITLE#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Новый комментарий в блоге "#BLOG_NAME#" на сообщение "#MESSAGE_TITLE#"

Тема:
#COMMENT_TITLE#
Автор: #AUTHOR#
Дата: #COMMENT_DATE#

Текст сообщения:
#COMMENT_TEXT#

Адрес сообщения:
#COMMENT_PATH#

Сообщение сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Новый комментарий в блоге "<?=$arParams["BLOG_NAME"];?>" на сообщение "<?=$arParams["MESSAGE_TITLE"];?>"

Тема:
<?=$arParams["COMMENT_TITLE"];?>

Автор: <?=$arParams["AUTHOR"];?>

Дата: <?=$arParams["COMMENT_DATE"];?>


Текст сообщения:
<?=$arParams["COMMENT_TEXT"];?>


Адрес сообщения:
<?=$arParams["COMMENT_PATH"];?>


Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '13','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'NEW_BLOG_COMMENT2COMMENT','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: [B] #MESSAGE_TITLE# : #COMMENT_TITLE#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Новый комментарий на ваш комментарий в блоге "#BLOG_NAME#" на сообщение "#MESSAGE_TITLE#".

Тема:
#COMMENT_TITLE#
Автор: #AUTHOR#
Дата: #COMMENT_DATE#

Текст сообщения:
#COMMENT_TEXT#

Адрес сообщения:
#COMMENT_PATH#

Сообщение сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Новый комментарий на ваш комментарий в блоге "<?=$arParams["BLOG_NAME"];?>" на сообщение "<?=$arParams["MESSAGE_TITLE"];?>".

Тема:
<?=$arParams["COMMENT_TITLE"];?>

Автор: <?=$arParams["AUTHOR"];?>

Дата: <?=$arParams["COMMENT_DATE"];?>


Текст сообщения:
<?=$arParams["COMMENT_TEXT"];?>


Адрес сообщения:
<?=$arParams["COMMENT_PATH"];?>


Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '14','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'NEW_BLOG_COMMENT_WITHOUT_TITLE','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: [B] #MESSAGE_TITLE#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Новый комментарий в блоге "#BLOG_NAME#" на сообщение "#MESSAGE_TITLE#"

Автор: #AUTHOR#
Дата: #COMMENT_DATE#

Текст сообщения:
#COMMENT_TEXT#

Адрес сообщения:
#COMMENT_PATH#

Сообщение сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Новый комментарий в блоге "<?=$arParams["BLOG_NAME"];?>" на сообщение "<?=$arParams["MESSAGE_TITLE"];?>"

Автор: <?=$arParams["AUTHOR"];?>

Дата: <?=$arParams["COMMENT_DATE"];?>


Текст сообщения:
<?=$arParams["COMMENT_TEXT"];?>


Адрес сообщения:
<?=$arParams["COMMENT_PATH"];?>


Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '15','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'NEW_BLOG_COMMENT2COMMENT_WITHOUT_TITLE','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: [B] #MESSAGE_TITLE#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Новый комментарий на ваш комментарий в блоге "#BLOG_NAME#" на сообщение "#MESSAGE_TITLE#".

Автор: #AUTHOR#
Дата: #COMMENT_DATE#

Текст сообщения:
#COMMENT_TEXT#

Адрес сообщения:
#COMMENT_PATH#

Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Новый комментарий на ваш комментарий в блоге "<?=$arParams["BLOG_NAME"];?>" на сообщение "<?=$arParams["MESSAGE_TITLE"];?>".

Автор: <?=$arParams["AUTHOR"];?>

Дата: <?=$arParams["COMMENT_DATE"];?>


Текст сообщения:
<?=$arParams["COMMENT_TEXT"];?>


Адрес сообщения:
<?=$arParams["COMMENT_PATH"];?>


Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '16','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'BLOG_YOUR_BLOG_TO_USER','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: [B] Ваш блог "#BLOG_NAME#" был добавлен в друзья к #USER#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Ваш блог "#BLOG_NAME#" был добавлен в друзья к #USER#.

Профиль пользователя: #USER_URL#

Адрес вашего блога: #BLOG_ADR#

Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Ваш блог "<?=$arParams["BLOG_NAME"];?>" был добавлен в друзья к <?=$arParams["USER"];?>.

Профиль пользователя: <?=$arParams["USER_URL"];?>


Адрес вашего блога: <?=$arParams["BLOG_ADR"];?>


Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '17','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'BLOG_YOU_TO_BLOG','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: [B] Вы были добавлены в друзья блога "#BLOG_NAME#"','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Вы были добавлены в друзья блога "#BLOG_NAME#".

Адрес блога: #BLOG_ADR#

Ваш профиль: #USER_URL#

Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Вы были добавлены в друзья блога "<?=$arParams["BLOG_NAME"];?>".

Адрес блога: <?=$arParams["BLOG_ADR"];?>


Ваш профиль: <?=$arParams["USER_URL"];?>


Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '18','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'BLOG_BLOG_TO_YOU','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: [B] К вам в друзья был добавлен блог "#BLOG_NAME#"','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

К вам в друзья был добавлен блог "#BLOG_NAME#".

Адрес блога: #BLOG_ADR#

Ваш профиль: #USER_URL#

Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

К вам в друзья был добавлен блог "<?=$arParams["BLOG_NAME"];?>".

Адрес блога: <?=$arParams["BLOG_ADR"];?>


Ваш профиль: <?=$arParams["USER_URL"];?>


Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '19','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'BLOG_USER_TO_YOUR_BLOG','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: [B] В ваш блог "#BLOG_NAME#" был добавлен друг #USER#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

В ваш блог "#BLOG_NAME#" был добавлен друг #USER#.

Профиль пользователя: #USER_URL#

Адрес вашего блога: #BLOG_ADR#

Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

В ваш блог "<?=$arParams["BLOG_NAME"];?>" был добавлен друг <?=$arParams["USER"];?>.

Профиль пользователя: <?=$arParams["USER_URL"];?>


Адрес вашего блога: <?=$arParams["BLOG_ADR"];?>


Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '20','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'BLOG_SONET_NEW_POST','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#POST_TITLE#','MESSAGE' => '<?EventMessageThemeCompiler::includeComponent("bitrix:socialnetwork.blog.post.mail","",Array("EMAIL_TO" => "{#EMAIL_TO#}","RECIPIENT_ID" => "{#RECIPIENT_ID#}","POST_ID" => "{#POST_ID#}","URL" => "{#URL#}"));?>','MESSAGE_PHP' => '<?EventMessageThemeCompiler::includeComponent("bitrix:socialnetwork.blog.post.mail","",Array("EMAIL_TO" => "{$arParams[\'EMAIL_TO\']}","RECIPIENT_ID" => "{$arParams[\'RECIPIENT_ID\']}","POST_ID" => "{$arParams[\'POST_ID\']}","URL" => "{$arParams[\'URL\']}"));?>','BODY_TYPE' => 'html','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => 'mail_user','ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '21','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'BLOG_SONET_NEW_COMMENT','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => 'Re: #POST_TITLE#','MESSAGE' => '<?EventMessageThemeCompiler::includeComponent("bitrix:socialnetwork.blog.post.comment.mail","",Array("COMMENT_ID" => "{#COMMENT_ID#}","RECIPIENT_ID" => "{#RECIPIENT_ID#}","EMAIL_TO" => "{#EMAIL_TO#}","POST_ID" => "{#POST_ID#}","URL" => "{#URL#}"));?>','MESSAGE_PHP' => '<?EventMessageThemeCompiler::includeComponent("bitrix:socialnetwork.blog.post.comment.mail","",Array("COMMENT_ID" => "{$arParams[\'COMMENT_ID\']}","RECIPIENT_ID" => "{$arParams[\'RECIPIENT_ID\']}","EMAIL_TO" => "{$arParams[\'EMAIL_TO\']}","POST_ID" => "{$arParams[\'POST_ID\']}","URL" => "{$arParams[\'URL\']}"));?>','BODY_TYPE' => 'html','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => 'mail_user','ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '22','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'BLOG_SONET_POST_SHARE','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#POST_TITLE#','MESSAGE' => '<?EventMessageThemeCompiler::includeComponent("bitrix:socialnetwork.blog.post_share.mail","",Array("EMAIL_TO" => "{#EMAIL_TO#}","RECIPIENT_ID" => "{#RECIPIENT_ID#}","POST_ID" => "{#POST_ID#}","URL" => "{#URL#}"));?>','MESSAGE_PHP' => '<?EventMessageThemeCompiler::includeComponent("bitrix:socialnetwork.blog.post_share.mail","",Array("EMAIL_TO" => "{$arParams[\'EMAIL_TO\']}","RECIPIENT_ID" => "{$arParams[\'RECIPIENT_ID\']}","POST_ID" => "{$arParams[\'POST_ID\']}","URL" => "{$arParams[\'URL\']}"));?>','BODY_TYPE' => 'html','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => 'mail_user','ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '23','TIMESTAMP_X' => '2023-02-16 15:25:04','EVENT_NAME' => 'BLOG_POST_BROADCAST','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: #MESSAGE_TITLE#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

На сайте добавлено новое сообщение.

Тема:
#MESSAGE_TITLE#

Автор: #AUTHOR#

Текст сообщения:
#MESSAGE_TEXT#

Адрес сообщения:
#MESSAGE_PATH#

Сообщение сгенерировано автоматически.','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

На сайте добавлено новое сообщение.

Тема:
<?=$arParams["MESSAGE_TITLE"];?>


Автор: <?=$arParams["AUTHOR"];?>


Текст сообщения:
<?=$arParams["MESSAGE_TEXT"];?>


Адрес сообщения:
<?=$arParams["MESSAGE_PATH"];?>


Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '24','TIMESTAMP_X' => '2023-02-16 15:25:33','EVENT_NAME' => 'NEW_FORUM_MESSAGE','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#FROM_EMAIL#','EMAIL_TO' => '#RECIPIENT#','SUBJECT' => '#SITE_NAME#: [F] #TOPIC_TITLE# : #FORUM_NAME#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Новое сообщение на форуме #SERVER_NAME#.

Тема:
#TOPIC_TITLE#

Автор: #AUTHOR#
Дата : #MESSAGE_DATE#
Текст сообщения:

#MESSAGE_TEXT#

Адрес сообщения:
http://#SERVER_NAME##PATH2FORUM#

Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Новое сообщение на форуме <?=$arParams["SERVER_NAME"];?>.

Тема:
<?=$arParams["TOPIC_TITLE"];?>


Автор: <?=$arParams["AUTHOR"];?>

Дата : <?=$arParams["MESSAGE_DATE"];?>

Текст сообщения:

<?=$arParams["MESSAGE_TEXT"];?>


Адрес сообщения:
http://<?=$arParams["SERVER_NAME"];?><?=$arParams["PATH2FORUM"];?>


Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '25','TIMESTAMP_X' => '2023-02-16 15:25:33','EVENT_NAME' => 'NEW_FORUM_PRIV','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#FROM_EMAIL#','EMAIL_TO' => '#TO_EMAIL#','SUBJECT' => '#SITE_NAME#: [private] #SUBJECT#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Вы получили персональное сообщение с форума на сайте #SERVER_NAME#.

Тема: #SUBJECT#

Автор: #FROM_NAME# #FROM_EMAIL#
Дата : #MESSAGE_DATE#
Сообщение:

#MESSAGE#

Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Вы получили персональное сообщение с форума на сайте <?=$arParams["SERVER_NAME"];?>.

Тема: <?=$arParams["SUBJECT"];?>


Автор: <?=$arParams["FROM_NAME"];?> <?=$arParams["FROM_EMAIL"];?>

Дата : <?=$arParams["MESSAGE_DATE"];?>

Сообщение:

<?=$arParams["MESSAGE"];?>


Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '26','TIMESTAMP_X' => '2023-02-16 15:25:33','EVENT_NAME' => 'NEW_FORUM_PRIVATE_MESSAGE','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#FROM_EMAIL#','EMAIL_TO' => '#TO_EMAIL#','SUBJECT' => '#SITE_NAME#: [private] #SUBJECT#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Вы получили персональное сообщение с форума на сайте #SERVER_NAME#.

Тема: #SUBJECT#

Автор: #FROM_NAME#
Дата: #MESSAGE_DATE#
Сообщение:

#MESSAGE#

Ссылка на сообщение: #MESSAGE_LINK#Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Вы получили персональное сообщение с форума на сайте <?=$arParams["SERVER_NAME"];?>.

Тема: <?=$arParams["SUBJECT"];?>


Автор: <?=$arParams["FROM_NAME"];?>

Дата: <?=$arParams["MESSAGE_DATE"];?>

Сообщение:

<?=$arParams["MESSAGE"];?>


Ссылка на сообщение: <?=$arParams["MESSAGE_LINK"];?>Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '27','TIMESTAMP_X' => '2023-02-16 15:25:33','EVENT_NAME' => 'EDIT_FORUM_MESSAGE','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#FROM_EMAIL#','EMAIL_TO' => '#RECIPIENT#','SUBJECT' => '#SITE_NAME#: [F] #TOPIC_TITLE# : #FORUM_NAME#','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Изменение сообщения на форуме #SERVER_NAME#.

Тема:
#TOPIC_TITLE#

Автор: #AUTHOR#
Дата : #MESSAGE_DATE#
Текст сообщения:

#MESSAGE_TEXT#

Адрес сообщения:
http://#SERVER_NAME##PATH2FORUM#

Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Изменение сообщения на форуме <?=$arParams["SERVER_NAME"];?>.

Тема:
<?=$arParams["TOPIC_TITLE"];?>


Автор: <?=$arParams["AUTHOR"];?>

Дата : <?=$arParams["MESSAGE_DATE"];?>

Текст сообщения:

<?=$arParams["MESSAGE_TEXT"];?>


Адрес сообщения:
http://<?=$arParams["SERVER_NAME"];?><?=$arParams["PATH2FORUM"];?>


Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '28','TIMESTAMP_X' => '2023-02-16 15:25:33','EVENT_NAME' => 'FORUM_NEW_MESSAGE_MAIL','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#FROM_EMAIL#','EMAIL_TO' => '#RECIPIENT#','SUBJECT' => '#TOPIC_TITLE#','MESSAGE' => '#MESSAGE_TEXT#

------------------------------------------  
Вы получили это сообщение, так как выподписаны на форум #FORUM_NAME#.

Ответить на сообщение можно по электронной почте или через форму на сайте:
http://#SERVER_NAME##PATH2FORUM#

Написать новое сообщение: #FORUM_EMAIL#

Автор сообщения: #AUTHOR#

Сообщение сгенерировано автоматически на сайте #SITE_NAME#.
','MESSAGE_PHP' => '<?=$arParams["MESSAGE_TEXT"];?>


------------------------------------------  
Вы получили это сообщение, так как выподписаны на форум <?=$arParams["FORUM_NAME"];?>.

Ответить на сообщение можно по электронной почте или через форму на сайте:
http://<?=$arParams["SERVER_NAME"];?><?=$arParams["PATH2FORUM"];?>


Написать новое сообщение: <?=$arParams["FORUM_EMAIL"];?>


Автор сообщения: <?=$arParams["AUTHOR"];?>


Сообщение сгенерировано автоматически на сайте <?=$arParams["SITE_NAME"];?>.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '29','TIMESTAMP_X' => '2023-02-16 15:27:22','EVENT_NAME' => 'VIRUS_DETECTED','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL#','SUBJECT' => '#SITE_NAME#: Обнаружен вирус','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Здравствуйте!

Вы получили это сообщение, так как модуль проактивной защиты сервера #SERVER_NAME# обнаружил код, похожий на вирус.

1. Подозрительный код был вырезан из html.
2. Проверьте журнал вторжений и убедитесь, что код действительно вредоносный, а не является кодом какого-либо счетчика или фреймворка.
 (ссылка: http://#SERVER_NAME#/bitrix/admin/event_log.php?lang=ru&set_filter=Y&find_type=audit_type_id&find_audit_type[]=SECURITY_VIRUS )
3. В случае, если код не является опасным, добавьте его в исключения на странице настройки антивируса.
 (ссылка: http://#SERVER_NAME#/bitrix/admin/security_antivirus.php?lang=ru&tabControl_active_tab=exceptions )
4. Если код является вирусным, то необходимо выполнить следующие действия:

 а) Смените пароли доступа к сайту у администраторов и ответственных сотрудников.
 б) Смените пароли доступа по ssh и ftp.
 в) Проверьте и вылечите компьютеры администраторов, имевших доступ к сайту по ssh или ftp.
 г) В программах доступа к сайту по ssh и ftp отключите сохранение паролей.
 д) Удалите вредоносный код из зараженных файлов. Например, восстановите поврежденные файлы из самой свежей резервной копии.

---------------------------------------------------------------------
Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Здравствуйте!

Вы получили это сообщение, так как модуль проактивной защиты сервера <?=$arParams["SERVER_NAME"];?> обнаружил код, похожий на вирус.

1. Подозрительный код был вырезан из html.
2. Проверьте журнал вторжений и убедитесь, что код действительно вредоносный, а не является кодом какого-либо счетчика или фреймворка.
 (ссылка: http://<?=$arParams["SERVER_NAME"];?>/bitrix/admin/event_log.php?lang=ru&set_filter=Y&find_type=audit_type_id&find_audit_type[]=SECURITY_VIRUS )
3. В случае, если код не является опасным, добавьте его в исключения на странице настройки антивируса.
 (ссылка: http://<?=$arParams["SERVER_NAME"];?>/bitrix/admin/security_antivirus.php?lang=ru&tabControl_active_tab=exceptions )
4. Если код является вирусным, то необходимо выполнить следующие действия:

 а) Смените пароли доступа к сайту у администраторов и ответственных сотрудников.
 б) Смените пароли доступа по ssh и ftp.
 в) Проверьте и вылечите компьютеры администраторов, имевших доступ к сайту по ssh или ftp.
 г) В программах доступа к сайту по ssh и ftp отключите сохранение паролей.
 д) Удалите вредоносный код из зараженных файлов. Например, восстановите поврежденные файлы из самой свежей резервной копии.

---------------------------------------------------------------------
Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => '','REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '30','TIMESTAMP_X' => '2023-02-16 15:27:30','EVENT_NAME' => 'SUBSCRIBE_CONFIRM','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL#','SUBJECT' => '#SITE_NAME#: Подтверждение подписки','MESSAGE' => 'Информационное сообщение сайта #SITE_NAME#
------------------------------------------

Здравствуйте,

Вы получили это сообщение, так как ваш адрес был подписан
на список рассылки сервера #SERVER_NAME#.

Дополнительная информация о подписке:

Адрес подписки (email) ............ #EMAIL#
Дата добавления/редактирования .... #DATE_SUBSCR#

Ваш код для подтверждения подписки: #CONFIRM_CODE#

Для подтверждения подписки перейдите по следующей ссылке:
http://#SERVER_NAME##SUBSCR_SECTION#subscr_edit.php?ID=#ID#&CONFIRM_CODE=#CONFIRM_CODE#

Вы также можете ввести код для подтверждения подписки на странице:
http://#SERVER_NAME##SUBSCR_SECTION#subscr_edit.php?ID=#ID#

Внимание! Вы не будете получать сообщения рассылки, пока не подтвердите
свою подписку.

---------------------------------------------------------------------
Сохраните это письмо, так как оно содержит информацию для авторизации.
Используя код подтверждения подписки, вы cможете изменить параметры
подписки или отписаться от рассылки.

Изменить параметры:
http://#SERVER_NAME##SUBSCR_SECTION#subscr_edit.php?ID=#ID#&CONFIRM_CODE=#CONFIRM_CODE#

Отписаться:
http://#SERVER_NAME##SUBSCR_SECTION#subscr_edit.php?ID=#ID#&CONFIRM_CODE=#CONFIRM_CODE#&action=unsubscribe
---------------------------------------------------------------------

Сообщение сгенерировано автоматически.
','MESSAGE_PHP' => 'Информационное сообщение сайта <?=$arParams["SITE_NAME"];?>

------------------------------------------

Здравствуйте,

Вы получили это сообщение, так как ваш адрес был подписан
на список рассылки сервера <?=$arParams["SERVER_NAME"];?>.

Дополнительная информация о подписке:

Адрес подписки (email) ............ <?=$arParams["EMAIL"];?>

Дата добавления/редактирования .... <?=$arParams["DATE_SUBSCR"];?>


Ваш код для подтверждения подписки: <?=$arParams["CONFIRM_CODE"];?>


Для подтверждения подписки перейдите по следующей ссылке:
http://<?=$arParams["SERVER_NAME"];?><?=$arParams["SUBSCR_SECTION"];?>subscr_edit.php?ID=<?=$arParams["ID"];?>&CONFIRM_CODE=<?=$arParams["CONFIRM_CODE"];?>


Вы также можете ввести код для подтверждения подписки на странице:
http://<?=$arParams["SERVER_NAME"];?><?=$arParams["SUBSCR_SECTION"];?>subscr_edit.php?ID=<?=$arParams["ID"];?>


Внимание! Вы не будете получать сообщения рассылки, пока не подтвердите
свою подписку.

---------------------------------------------------------------------
Сохраните это письмо, так как оно содержит информацию для авторизации.
Используя код подтверждения подписки, вы cможете изменить параметры
подписки или отписаться от рассылки.

Изменить параметры:
http://<?=$arParams["SERVER_NAME"];?><?=$arParams["SUBSCR_SECTION"];?>subscr_edit.php?ID=<?=$arParams["ID"];?>&CONFIRM_CODE=<?=$arParams["CONFIRM_CODE"];?>


Отписаться:
http://<?=$arParams["SERVER_NAME"];?><?=$arParams["SUBSCR_SECTION"];?>subscr_edit.php?ID=<?=$arParams["ID"];?>&CONFIRM_CODE=<?=$arParams["CONFIRM_CODE"];?>&action=unsubscribe
---------------------------------------------------------------------

Сообщение сгенерировано автоматически.
','BODY_TYPE' => 'text','BCC' => '','REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '31','TIMESTAMP_X' => '2023-02-16 15:27:51','EVENT_NAME' => 'VOTE_FOR','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL_TO#','SUBJECT' => '#SITE_NAME#: [V] #VOTE_TITLE#','MESSAGE' => '#USER_NAME# принял участие в опросе "#VOTE_TITLE#":
#VOTE_STATISTIC#

http://#SERVER_NAME##URL#
Сообщение сгенерировано автоматически.','MESSAGE_PHP' => '<?=$arParams["USER_NAME"];?> принял участие в опросе "<?=$arParams["VOTE_TITLE"];?>":
<?=$arParams["VOTE_STATISTIC"];?>


http://<?=$arParams["SERVER_NAME"];?><?=$arParams["URL"];?>

Сообщение сгенерировано автоматически.','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => NULL),
  array('ID' => '32','TIMESTAMP_X' => '2023-02-18 14:14:02','EVENT_NAME' => 'NEW_DEVICE_LOGIN','LID' => 's1','ACTIVE' => 'Y','EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#','EMAIL_TO' => '#EMAIL#','SUBJECT' => 'Вход с нового устройства','MESSAGE' => 'Здравствуйте, #NAME#,

Новое устройство авторизовалось под вашим логином #LOGIN#.
 
Устройство: #DEVICE# 
Браузер: #BROWSER#
Платформа: #PLATFORM#
Местоположение: #LOCATION# (может быть неточным)
Дата: #DATE#

Если вы не знаете, кто это был, рекомендуем немедленно сменить пароль.
','MESSAGE_PHP' => 'Здравствуйте, <?=$arParams["NAME"];?>,

Новое устройство авторизовалось под вашим логином <?=$arParams["LOGIN"];?>.
 
Устройство: <?=$arParams["DEVICE"];?> 
Браузер: <?=$arParams["BROWSER"];?>

Платформа: <?=$arParams["PLATFORM"];?>

Местоположение: <?=$arParams["LOCATION"];?> (может быть неточным)
Дата: <?=$arParams["DATE"];?>


Если вы не знаете, кто это был, рекомендуем немедленно сменить пароль.
','BODY_TYPE' => 'text','BCC' => NULL,'REPLY_TO' => NULL,'CC' => NULL,'IN_REPLY_TO' => NULL,'PRIORITY' => NULL,'FIELD1_NAME' => NULL,'FIELD1_VALUE' => NULL,'FIELD2_NAME' => NULL,'FIELD2_VALUE' => NULL,'SITE_TEMPLATE_ID' => NULL,'ADDITIONAL_FIELD' => NULL,'LANGUAGE_ID' => 'ru')
);

/* `rimstudio_db`.`b_event_message_attachment` */
$b_event_message_attachment = array(
);

/* `rimstudio_db`.`b_event_message_site` */
$b_event_message_site = array(
  array('EVENT_MESSAGE_ID' => '1','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '2','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '3','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '4','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '5','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '6','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '7','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '8','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '9','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '10','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '11','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '12','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '13','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '14','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '15','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '16','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '17','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '18','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '19','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '20','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '21','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '22','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '23','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '24','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '25','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '26','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '27','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '28','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '29','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '30','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '31','SITE_ID' => 's1'),
  array('EVENT_MESSAGE_ID' => '32','SITE_ID' => 's1')
);

/* `rimstudio_db`.`b_event_type` */
$b_event_type = array(
  array('ID' => '1','LID' => 'ru','EVENT_NAME' => 'NEW_USER','NAME' => 'Зарегистрировался новый пользователь','DESCRIPTION' => '

#USER_ID# - ID пользователя
#LOGIN# - Логин
#EMAIL# - EMail
#NAME# - Имя
#LAST_NAME# - Фамилия
#USER_IP# - IP пользователя
#USER_HOST# - Хост пользователя
','SORT' => '1','EVENT_TYPE' => 'email'),
  array('ID' => '2','LID' => 'ru','EVENT_NAME' => 'USER_INFO','NAME' => 'Информация о пользователе','DESCRIPTION' => '

#USER_ID# - ID пользователя
#STATUS# - Статус логина
#MESSAGE# - Сообщение пользователю
#LOGIN# - Логин
#URL_LOGIN# - Логин, закодированный для использования в URL
#CHECKWORD# - Контрольная строка для смены пароля
#NAME# - Имя
#LAST_NAME# - Фамилия
#EMAIL# - E-Mail пользователя
','SORT' => '2','EVENT_TYPE' => 'email'),
  array('ID' => '3','LID' => 'ru','EVENT_NAME' => 'NEW_USER_CONFIRM','NAME' => 'Подтверждение регистрации нового пользователя','DESCRIPTION' => '


#USER_ID# - ID пользователя
#LOGIN# - Логин
#EMAIL# - EMail
#NAME# - Имя
#LAST_NAME# - Фамилия
#USER_IP# - IP пользователя
#USER_HOST# - Хост пользователя
#CONFIRM_CODE# - Код подтверждения
','SORT' => '3','EVENT_TYPE' => 'email'),
  array('ID' => '4','LID' => 'ru','EVENT_NAME' => 'USER_PASS_REQUEST','NAME' => 'Запрос на смену пароля','DESCRIPTION' => '

#USER_ID# - ID пользователя
#STATUS# - Статус логина
#MESSAGE# - Сообщение пользователю
#LOGIN# - Логин
#URL_LOGIN# - Логин, закодированный для использования в URL
#CHECKWORD# - Контрольная строка для смены пароля
#NAME# - Имя
#LAST_NAME# - Фамилия
#EMAIL# - E-Mail пользователя
','SORT' => '4','EVENT_TYPE' => 'email'),
  array('ID' => '5','LID' => 'ru','EVENT_NAME' => 'USER_PASS_CHANGED','NAME' => 'Подтверждение смены пароля','DESCRIPTION' => '

#USER_ID# - ID пользователя
#STATUS# - Статус логина
#MESSAGE# - Сообщение пользователю
#LOGIN# - Логин
#URL_LOGIN# - Логин, закодированный для использования в URL
#CHECKWORD# - Контрольная строка для смены пароля
#NAME# - Имя
#LAST_NAME# - Фамилия
#EMAIL# - E-Mail пользователя
','SORT' => '5','EVENT_TYPE' => 'email'),
  array('ID' => '6','LID' => 'ru','EVENT_NAME' => 'USER_INVITE','NAME' => 'Приглашение на сайт нового пользователя','DESCRIPTION' => '#ID# - ID пользователя
#LOGIN# - Логин
#URL_LOGIN# - Логин, закодированный для использования в URL
#EMAIL# - EMail
#NAME# - Имя
#LAST_NAME# - Фамилия
#PASSWORD# - пароль пользователя 
#CHECKWORD# - Контрольная строка для смены пароля
#XML_ID# - ID пользователя для связи с внешними источниками
','SORT' => '6','EVENT_TYPE' => 'email'),
  array('ID' => '7','LID' => 'ru','EVENT_NAME' => 'FEEDBACK_FORM','NAME' => 'Отправка сообщения через форму обратной связи','DESCRIPTION' => '#AUTHOR# - Автор сообщения
#AUTHOR_EMAIL# - Email автора сообщения
#TEXT# - Текст сообщения
#EMAIL_FROM# - Email отправителя письма
#EMAIL_TO# - Email получателя письма','SORT' => '7','EVENT_TYPE' => 'email'),
  array('ID' => '8','LID' => 'ru','EVENT_NAME' => 'MAIN_MAIL_CONFIRM_CODE','NAME' => 'Подтверждение email-адреса отправителя','DESCRIPTION' => '

#EMAIL_TO# - Email-адрес для подтверждения
#MESSAGE_SUBJECT# - Тема сообщения
#CONFIRM_CODE# - Код подтверждения','SORT' => '8','EVENT_TYPE' => 'email'),
  array('ID' => '9','LID' => 'ru','EVENT_NAME' => 'EVENT_LOG_NOTIFICATION','NAME' => 'Оповещение журнала событий','DESCRIPTION' => '#EMAIL# - Email получателя
#ADDITIONAL_TEXT# - Дополнительный текст действия
#NAME# - Название оповещения
#AUDIT_TYPE_ID# - Тип события
#ITEM_ID# - Объект
#USER_ID# - Пользователь
#REMOTE_ADDR# - IP-адрес
#USER_AGENT# - Браузер
#REQUEST_URI# - Страница
#EVENT_COUNT# - Количество записей','SORT' => '9','EVENT_TYPE' => 'email'),
  array('ID' => '10','LID' => 'ru','EVENT_NAME' => 'USER_CODE_REQUEST','NAME' => 'Запрос кода авторизации','DESCRIPTION' => '#USER_ID# - ID пользователя
#STATUS# - Статус логина
#LOGIN# - Логин
#CHECKWORD# - Код для авторизации
#NAME# - Имя
#LAST_NAME# - Фамилия
#EMAIL# - Email пользователя
','SORT' => '10','EVENT_TYPE' => 'email'),
  array('ID' => '11','LID' => 'ru','EVENT_NAME' => 'SMS_USER_CONFIRM_NUMBER','NAME' => 'Подтверждение номера телефона по СМС','DESCRIPTION' => '#USER_PHONE# - номер телефона
#CODE# - код подтверждения
','SORT' => '100','EVENT_TYPE' => 'sms'),
  array('ID' => '12','LID' => 'ru','EVENT_NAME' => 'SMS_USER_RESTORE_PASSWORD','NAME' => 'Восстановление пароля через СМС','DESCRIPTION' => '#USER_PHONE# - номер телефона
#CODE# - код для восстановления
','SORT' => '100','EVENT_TYPE' => 'sms'),
  array('ID' => '13','LID' => 'ru','EVENT_NAME' => 'SMS_EVENT_LOG_NOTIFICATION','NAME' => 'Оповещение журнала событий','DESCRIPTION' => '#PHONE_NUMBER# - Номер телефона получателя
#ADDITIONAL_TEXT# - Дополнительный текст действия
#NAME# - Название оповещения
#AUDIT_TYPE_ID# - Тип события
#ITEM_ID# - Объект
#USER_ID# - Пользователь
#REMOTE_ADDR# - IP-адрес
#USER_AGENT# - Браузер
#REQUEST_URI# - Страница
#EVENT_COUNT# - Количество записей','SORT' => '100','EVENT_TYPE' => 'sms'),
  array('ID' => '14','LID' => 'en','EVENT_NAME' => 'NEW_USER','NAME' => 'New user was registered','DESCRIPTION' => '

#USER_ID# - User ID
#LOGIN# - Login
#EMAIL# - EMail
#NAME# - Name
#LAST_NAME# - Last Name
#USER_IP# - User IP
#USER_HOST# - User Host
','SORT' => '1','EVENT_TYPE' => 'email'),
  array('ID' => '15','LID' => 'en','EVENT_NAME' => 'USER_INFO','NAME' => 'Account Information','DESCRIPTION' => '

#USER_ID# - User ID
#STATUS# - Account status
#MESSAGE# - Message for user
#LOGIN# - Login
#URL_LOGIN# - Encoded login for use in URL
#CHECKWORD# - Check string for password change
#NAME# - Name
#LAST_NAME# - Last Name
#EMAIL# - User E-Mail
','SORT' => '2','EVENT_TYPE' => 'email'),
  array('ID' => '16','LID' => 'en','EVENT_NAME' => 'NEW_USER_CONFIRM','NAME' => 'New user registration confirmation','DESCRIPTION' => '

#USER_ID# - User ID
#LOGIN# - Login
#EMAIL# - E-mail
#NAME# - First name
#LAST_NAME# - Last name
#USER_IP# - User IP
#USER_HOST# - User host
#CONFIRM_CODE# - Confirmation code
','SORT' => '3','EVENT_TYPE' => 'email'),
  array('ID' => '17','LID' => 'en','EVENT_NAME' => 'USER_PASS_REQUEST','NAME' => 'Password Change Request','DESCRIPTION' => '

#USER_ID# - User ID
#STATUS# - Account status
#MESSAGE# - Message for user
#LOGIN# - Login
#URL_LOGIN# - Encoded login for use in URL
#CHECKWORD# - Check string for password change
#NAME# - Name
#LAST_NAME# - Last Name
#EMAIL# - User E-Mail
','SORT' => '4','EVENT_TYPE' => 'email'),
  array('ID' => '18','LID' => 'en','EVENT_NAME' => 'USER_PASS_CHANGED','NAME' => 'Password Change Confirmation','DESCRIPTION' => '

#USER_ID# - User ID
#STATUS# - Account status
#MESSAGE# - Message for user
#LOGIN# - Login
#URL_LOGIN# - Encoded login for use in URL
#CHECKWORD# - Check string for password change
#NAME# - Name
#LAST_NAME# - Last Name
#EMAIL# - User E-Mail
','SORT' => '5','EVENT_TYPE' => 'email'),
  array('ID' => '19','LID' => 'en','EVENT_NAME' => 'USER_INVITE','NAME' => 'Invitation of a new site user','DESCRIPTION' => '#ID# - User ID
#LOGIN# - Login
#URL_LOGIN# - Encoded login for use in URL
#EMAIL# - EMail
#NAME# - Name
#LAST_NAME# - Last Name
#PASSWORD# - User password 
#CHECKWORD# - Password check string
#XML_ID# - User ID to link with external data sources

','SORT' => '6','EVENT_TYPE' => 'email'),
  array('ID' => '20','LID' => 'en','EVENT_NAME' => 'FEEDBACK_FORM','NAME' => 'Sending a message using a feedback form','DESCRIPTION' => '#AUTHOR# - Message author
#AUTHOR_EMAIL# - Author\'s e-mail address
#TEXT# - Message text
#EMAIL_FROM# - Sender\'s e-mail address
#EMAIL_TO# - Recipient\'s e-mail address','SORT' => '7','EVENT_TYPE' => 'email'),
  array('ID' => '21','LID' => 'en','EVENT_NAME' => 'MAIN_MAIL_CONFIRM_CODE','NAME' => 'Confirm sender\'s email address','DESCRIPTION' => '

#EMAIL_TO# - confirmation email address
#MESSAGE_SUBJECT# - Message subject
#CONFIRM_CODE# - Confirmation code','SORT' => '8','EVENT_TYPE' => 'email'),
  array('ID' => '22','LID' => 'en','EVENT_NAME' => 'EVENT_LOG_NOTIFICATION','NAME' => 'Event log notification','DESCRIPTION' => '#EMAIL# - Recipient email
#ADDITIONAL_TEXT# - Action additional text
#NAME# - Notification name
#AUDIT_TYPE_ID# - Event type
#ITEM_ID# - Object
#USER_ID# - User
#REMOTE_ADDR# - IP address
#USER_AGENT# - Browser
#REQUEST_URI# - Page URL
#EVENT_COUNT# - Number of events','SORT' => '9','EVENT_TYPE' => 'email'),
  array('ID' => '23','LID' => 'en','EVENT_NAME' => 'USER_CODE_REQUEST','NAME' => 'Request for verification code','DESCRIPTION' => '#USER_ID# - user ID
#STATUS# - Login status
#LOGIN# - Login
#CHECKWORD# - Verification code
#NAME# - First name
#LAST_NAME# - Last name
#EMAIL# - User email
','SORT' => '10','EVENT_TYPE' => 'email'),
  array('ID' => '24','LID' => 'en','EVENT_NAME' => 'SMS_USER_CONFIRM_NUMBER','NAME' => 'Verify phone number using SMS','DESCRIPTION' => '#USER_PHONE# - phone number
#CODE# - confirmation code','SORT' => '100','EVENT_TYPE' => 'sms'),
  array('ID' => '25','LID' => 'en','EVENT_NAME' => 'SMS_USER_RESTORE_PASSWORD','NAME' => 'Recover password using SMS','DESCRIPTION' => '#USER_PHONE# - phone number
#CODE# - recovery confirmation code','SORT' => '100','EVENT_TYPE' => 'sms'),
  array('ID' => '26','LID' => 'en','EVENT_NAME' => 'SMS_EVENT_LOG_NOTIFICATION','NAME' => 'Event log notification','DESCRIPTION' => '#PHONE_NUMBER# - Recipient phone number
#ADDITIONAL_TEXT# - Action additional text
#NAME# - Notification name
#AUDIT_TYPE_ID# - Event type
#ITEM_ID# - Object
#USER_ID# - User
#REMOTE_ADDR# - IP address
#USER_AGENT# - Browser
#REQUEST_URI# - Page URL
#EVENT_COUNT# - Number of events','SORT' => '100','EVENT_TYPE' => 'sms'),
  array('ID' => '27','LID' => 'ru','EVENT_NAME' => 'NEW_BLOG_MESSAGE','NAME' => 'Новое сообщение в блоге','DESCRIPTION' => '#BLOG_ID# - ID блога 
#BLOG_NAME# - Название блога
#BLOG_URL# - Название блога латиницей
#MESSAGE_TITLE# - Тема сообщения
#MESSAGE_TEXT# - Текст сообщения
#MESSAGE_DATE# - Дата сообщения
#MESSAGE_PATH# - URL адрес сообщения
#AUTHOR# - Автор сообщения
#EMAIL_FROM# - Email отправителя письма
#EMAIL_TO# - Email получателя письма','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '28','LID' => 'ru','EVENT_NAME' => 'NEW_BLOG_COMMENT','NAME' => 'Новый комментарий в блоге','DESCRIPTION' => '#BLOG_ID# - ID блога 
#BLOG_NAME# - Название блога
#BLOG_URL# - Название блога латиницей
#MESSAGE_TITLE# - Тема сообщения
#COMMENT_TITLE# - Заголовок комментария
#COMMENT_TEXT# - Текст комментария
#COMMENT_DATE# - Текст комментария
#COMMENT_PATH# - URL адрес сообщения
#AUTHOR# - Автор сообщения
#EMAIL_FROM# - Email отправителя письма
#EMAIL_TO# - Email получателя письма','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '29','LID' => 'ru','EVENT_NAME' => 'NEW_BLOG_COMMENT2COMMENT','NAME' => 'Новый комментарий на ваш комментарий в блоге','DESCRIPTION' => '#BLOG_ID# - ID блога 
#BLOG_NAME# - Название блога
#BLOG_URL# - Название блога латиницей
#MESSAGE_TITLE# - Тема сообщения
#COMMENT_TITLE# - Заголовок комментария
#COMMENT_TEXT# - Текст комментария
#COMMENT_DATE# - Текст комментария
#COMMENT_PATH# - URL адрес сообщения
#AUTHOR# - Автор сообщения
#EMAIL_FROM# - Email отправителя письма
#EMAIL_TO# - Email получателя письма','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '30','LID' => 'ru','EVENT_NAME' => 'NEW_BLOG_COMMENT_WITHOUT_TITLE','NAME' => 'Новый комментарий в блоге (без темы)','DESCRIPTION' => '#BLOG_ID# - ID блога 
#BLOG_NAME# - Название блога
#BLOG_URL# - Название блога латиницей
#MESSAGE_TITLE# - Тема сообщения
#COMMENT_TEXT# - Текст комментария
#COMMENT_DATE# - Текст комментария
#COMMENT_PATH# - URL адрес сообщения
#AUTHOR# - Автор сообщения
#EMAIL_FROM# - Email отправителя письма
#EMAIL_TO# - Email получателя письма','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '31','LID' => 'ru','EVENT_NAME' => 'NEW_BLOG_COMMENT2COMMENT_WITHOUT_TITLE','NAME' => 'Новый комментарий на ваш комментарий в блоге (без темы)','DESCRIPTION' => '#BLOG_ID# - ID блога 
#BLOG_NAME# - Название блога
#BLOG_URL# - Название блога латиницей
#COMMENT_TITLE# - Заголовок комментария
#COMMENT_TEXT# - Текст комментария
#COMMENT_DATE# - Текст комментария
#COMMENT_PATH# - URL адрес сообщения
#AUTHOR# - Автор сообщения
#EMAIL_FROM# - Email отправителя письма
#EMAIL_TO# - Email получателя письма','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '32','LID' => 'ru','EVENT_NAME' => 'BLOG_YOUR_BLOG_TO_USER','NAME' => 'Ваш блог был добавлен в друзья','DESCRIPTION' => '#BLOG_ID# - ID блога 
#BLOG_NAME# - Название блога
#BLOG_URL# - Название блога латиницей
#BLOG_ADR# - Адрес блога
#USER_ID# - ID пользователя
#USER# - Пользователь
#USER_URL# - Адрес пользователя
#EMAIL_FROM# - Email отправителя письма
#EMAIL_TO# - Email получателя письма
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '33','LID' => 'ru','EVENT_NAME' => 'BLOG_YOU_TO_BLOG','NAME' => 'Вы были добавлены в друзья блога','DESCRIPTION' => '#BLOG_ID# - ID блога 
#BLOG_NAME# - Название блога
#BLOG_URL# - Название блога латиницей
#BLOG_ADR# - Адрес блога
#USER_ID# - ID пользователя
#USER# - Пользователь
#USER_URL# - Адрес пользователя
#EMAIL_FROM# - Email отправителя письма
#EMAIL_TO# - Email получателя письма
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '34','LID' => 'ru','EVENT_NAME' => 'BLOG_BLOG_TO_YOU','NAME' => 'К вам в друзья был добавлен блог','DESCRIPTION' => '#BLOG_ID# - ID блога 
#BLOG_NAME# - Название блога
#BLOG_URL# - Название блога латиницей
#BLOG_ADR# - Адрес блога
#USER_ID# - ID пользователя
#USER# - Пользователь
#USER_URL# - Адрес пользователя
#EMAIL_FROM# - Email отправителя письма
#EMAIL_TO# - Email получателя письма
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '35','LID' => 'ru','EVENT_NAME' => 'BLOG_USER_TO_YOUR_BLOG','NAME' => 'В ваш блог был добавлен друг','DESCRIPTION' => '#BLOG_ID# - ID блога 
#BLOG_NAME# - Название блога
#BLOG_URL# - Название блога латиницей
#BLOG_ADR# - Адрес блога
#USER_ID# - ID пользователя
#USER# - Пользователь
#USER_URL# - Адрес пользователя
#EMAIL_FROM# - Email отправителя письма
#EMAIL_TO# - Email получателя письма
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '36','LID' => 'ru','EVENT_NAME' => 'BLOG_SONET_NEW_POST','NAME' => 'Добавлено новое сообщение','DESCRIPTION' => '#EMAIL_TO# - Email получателя письма
#POST_ID# - ID сообщения
#RECIPIENT_ID# - ID получателя
#URL_ID# - URL страницы сообщения
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '37','LID' => 'ru','EVENT_NAME' => 'BLOG_SONET_NEW_COMMENT','NAME' => 'Добавлен новый комментарий','DESCRIPTION' => '#EMAIL_TO# - Email получателя письма
#COMMENT_ID# - ID комментария
#POST_ID# - ID сообщения
#RECIPIENT_ID# - ID получателя
#URL_ID# - URL страницы сообщения
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '38','LID' => 'ru','EVENT_NAME' => 'BLOG_SONET_POST_SHARE','NAME' => 'Добавлен новый получатель сообщения','DESCRIPTION' => '#EMAIL_TO# - Email получателя письма
#POST_ID# - ID сообщения
#RECIPIENT_ID# - ID получателя
#URL_ID# - URL страницы сообщения
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '39','LID' => 'ru','EVENT_NAME' => 'BLOG_POST_BROADCAST','NAME' => 'Добавлено новое сообщение','DESCRIPTION' => '
#MESSAGE_TITLE# - Тема сообщения
#MESSAGE_TEXT# - Текст сообщения
#MESSAGE_PATH# - URL адрес сообщения
#AUTHOR# - Автор сообщения
#EMAIL_TO# - Email получателя письма','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '40','LID' => 'en','EVENT_NAME' => 'NEW_BLOG_MESSAGE','NAME' => 'New blog message','DESCRIPTION' => '#BLOG_ID# - Blog ID
#BLOG_NAME# - Blog title
#BLOG_URL# - Blog url
#MESSAGE_TITLE# - Message title
#MESSAGE_TEXT# - Message text
#MESSAGE_DATE# - Message date
#MESSAGE_PATH# - URL to message
#AUTHOR# - Message author
#EMAIL_FROM# - Sender email
#EMAIL_TO# - Recipient email','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '41','LID' => 'en','EVENT_NAME' => 'NEW_BLOG_COMMENT','NAME' => 'New comment in blog','DESCRIPTION' => '#BLOG_ID# - Blog ID
#BLOG_NAME# - Blog title
#BLOG_URL# - Blog url
#MESSAGE_TITLE# - Message title
#COMMENT_TITLE# - Comment title
#COMMENT_TEXT# - Comment text
#COMMENT_DATE# - Comment date
#COMMENT_PATH# - Comment URL
#AUTHOR# - Comment author
#EMAIL_FROM# - Sender email
#EMAIL_TO# - Recipient email','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '42','LID' => 'en','EVENT_NAME' => 'NEW_BLOG_COMMENT2COMMENT','NAME' => 'New comment for your in blog','DESCRIPTION' => '#BLOG_ID# - Blog ID
#BLOG_NAME# - Blog title
#BLOG_URL# - Blog url
#MESSAGE_TITLE# - Message title
#COMMENT_TITLE# - Comment title
#COMMENT_TEXT# - Comment text
#COMMENT_DATE# - Comment date
#COMMENT_PATH# - Comment URL
#AUTHOR# - Comment author
#EMAIL_FROM# - Sender email
#EMAIL_TO# - Recipient email','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '43','LID' => 'en','EVENT_NAME' => 'NEW_BLOG_COMMENT_WITHOUT_TITLE','NAME' => 'New comment in blog (without subject)','DESCRIPTION' => '#BLOG_ID# - Blog ID
#BLOG_NAME# - Blog title
#BLOG_URL# - Blog url
#MESSAGE_TITLE# - Message title
#COMMENT_TEXT# - Comment text
#COMMENT_DATE# - Comment date
#COMMENT_PATH# - Comment URL
#AUTHOR# - Comment author
#EMAIL_FROM# - Sender email
#EMAIL_TO# - Recipient email','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '44','LID' => 'en','EVENT_NAME' => 'NEW_BLOG_COMMENT2COMMENT_WITHOUT_TITLE','NAME' => 'New comment for your in blog (without subject)','DESCRIPTION' => '#BLOG_ID# - Blog ID
#BLOG_NAME# - Blog title
#BLOG_URL# - Blog url
#MESSAGE_TITLE# - Message title
#COMMENT_TEXT# - Comment text
#COMMENT_DATE# - Comment date
#COMMENT_PATH# - Comment URL
#AUTHOR# - Comment author
#EMAIL_FROM# - Sender email
#EMAIL_TO# - Recipient email','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '45','LID' => 'en','EVENT_NAME' => 'BLOG_YOUR_BLOG_TO_USER','NAME' => 'Your blog has been added to friends','DESCRIPTION' => '#BLOG_ID# - Blog ID
#BLOG_NAME# - Blog name
#BLOG_URL# - Blog name, Latin letters only
#BLOG_ADR# - Blog address
#USER_ID# - User ID
#USER# - User
#USER_URL# - User URL
#EMAIL_FROM# - Sender E-mail
#EMAIL_TO# - Recipient E-mail','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '46','LID' => 'en','EVENT_NAME' => 'BLOG_YOU_TO_BLOG','NAME' => 'You have been added to blog friends','DESCRIPTION' => '#BLOG_ID# - Blog ID
#BLOG_NAME# - Blog name
#BLOG_URL# - Blog name, Latin letters only
#BLOG_ADR# - Blog address
#USER_ID# - User ID
#USER# - User
#USER_URL# - User URL
#EMAIL_FROM# - Sender E-mail
#EMAIL_TO# - Recipient E-mail','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '47','LID' => 'en','EVENT_NAME' => 'BLOG_BLOG_TO_YOU','NAME' => 'A blog has been added to your friends','DESCRIPTION' => '#BLOG_ID# - Blog ID
#BLOG_NAME# - Blog name
#BLOG_URL# - Blog name, Latin letters only
#BLOG_ADR# - Blog address
#USER_ID# - User ID
#USER# - User
#USER_URL# - User URL
#EMAIL_FROM# - Sender E-mail
#EMAIL_TO# - Recipient E-mail','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '48','LID' => 'en','EVENT_NAME' => 'BLOG_USER_TO_YOUR_BLOG','NAME' => 'A friend has been added to your blog','DESCRIPTION' => '#BLOG_ID# - Blog ID
#BLOG_NAME# - Blog name
#BLOG_URL# - Blog name, Latin letters only
#BLOG_ADR# - Blog address
#USER_ID# - User ID
#USER# - User
#USER_URL# - User URL
#EMAIL_FROM# - Sender E-mail
#EMAIL_TO# - Recipient E-mail','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '49','LID' => 'en','EVENT_NAME' => 'BLOG_SONET_NEW_POST','NAME' => 'New post added','DESCRIPTION' => '#EMAIL_TO# - Recipient email
#POST_ID# - Post ID
#URL_ID# - Post URL','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '50','LID' => 'en','EVENT_NAME' => 'BLOG_SONET_NEW_COMMENT','NAME' => 'Comment added','DESCRIPTION' => '#EMAIL_TO# - Recipient email
#COMMENT_ID# - Comment ID
#POST_ID# - Post ID
#URL_ID# - Post URL','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '51','LID' => 'en','EVENT_NAME' => 'BLOG_SONET_POST_SHARE','NAME' => 'New recipient added','DESCRIPTION' => '#EMAIL_TO# - Recipient email
#POST_ID# - Post ID
#URL_ID# - Post URL','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '52','LID' => 'en','EVENT_NAME' => 'BLOG_POST_BROADCAST','NAME' => 'New post added','DESCRIPTION' => '
#MESSAGE_TITLE# - Post subject
#MESSAGE_TEXT# - Post text 
#MESSAGE_PATH# - Post URL
#AUTHOR# - Post author
#EMAIL_TO# - E-mail recipient','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '53','LID' => 'ru','EVENT_NAME' => 'NEW_FORUM_MESSAGE','NAME' => 'Новое сообщение на форуме','DESCRIPTION' => '
			#FORUM_ID# - ID форума
			#FORUM_NAME# - Название форума
			#TOPIC_ID# - ID темы
			#MESSAGE_ID# - ID сообщения
			#TOPIC_TITLE# - Тема сообщения
			#MESSAGE_TEXT# - Текст сообщения
			#MESSAGE_DATE# - Дата сообщения
			#AUTHOR# - Автор сообщения
			#RECIPIENT# - Получатель сообщения
			#TAPPROVED# - Тема сообщения показывается
			#MAPPROVED# - Тело сообщения показывается
			#PATH2FORUM# - Адрес сообщения
			#FROM_EMAIL# - E-Mail для поля From письма','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '54','LID' => 'ru','EVENT_NAME' => 'NEW_FORUM_PRIV','NAME' => 'Приватное письмо посетителю форума','DESCRIPTION' => '
			#FROM_NAME# - Автор сообщения
			#FROM_EMAIL# - E-Mail автора сообщения
			#TO_NAME# - Имя получателя сообщения
			#TO_EMAIL# - E-Mail получателя сообщения
			#SUBJECT# - Тема сообщения
			#MESSAGE# - Тело сообщения
			#MESSAGE_DATE# - Дата сообщения','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '55','LID' => 'ru','EVENT_NAME' => 'NEW_FORUM_PRIVATE_MESSAGE','NAME' => 'Приватное сообщение','DESCRIPTION' => '
			#FROM_NAME# - Имя автора сообщения
			#FROM_USER_ID# - ID автора сообщения
			#FROM_EMAIL# - E-Mail автора сообщения
			#TO_NAME# - Имя получателя сообщения
			#TO_USER_ID# - ID получателя сообщения
			#TO_EMAIL# - E-Mail получателя сообщения
			#SUBJECT# - Тема сообщения
			#MESSAGE# - Текст сообщения
			#MESSAGE_DATE# - Дата сообщения
			#MESSAGE_LINK# - Ссылка на сообщение','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '56','LID' => 'ru','EVENT_NAME' => 'EDIT_FORUM_MESSAGE','NAME' => 'Изменение сообщения на форуме','DESCRIPTION' => '
			#FORUM_ID# - ID форума
			#FORUM_NAME# - Название форума
			#TOPIC_ID# - ID темы
			#MESSAGE_ID# - ID сообщения
			#TOPIC_TITLE# - Тема сообщения
			#MESSAGE_TEXT# - Текст сообщения
			#MESSAGE_DATE# - Дата сообщения
			#AUTHOR# - Автор сообщения
			#RECIPIENT# - Получатель сообщения
			#TAPPROVED# - Тема сообщения показывается
			#MAPPROVED# - Тело сообщения показывается
			#PATH2FORUM# - Адрес сообщения
			#FROM_EMAIL# - E-Mail для поля From письма','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '57','LID' => 'en','EVENT_NAME' => 'NEW_FORUM_MESSAGE','NAME' => 'New forum message','DESCRIPTION' => '
			#FORUM_ID# - Forum ID
			#FORUM_NAME# - Forum name
			#TOPIC_ID# - Topic ID
			#MESSAGE_ID# - Message ID
			#TOPIC_TITLE# - Topic title
			#MESSAGE_TEXT# - Message text
			#MESSAGE_DATE# - Message date
			#AUTHOR# - Message author
			#RECIPIENT# - E-Mail recipient
			#TAPPROVED# - Message topic is approved
			#MAPPROVED# - Message is approved
			#PATH2FORUM# - Message Url
			#FROM_EMAIL# - E-Mail for From field of the EMail','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '58','LID' => 'en','EVENT_NAME' => 'NEW_FORUM_PRIV','NAME' => 'Private message for forum user','DESCRIPTION' => '
			#FROM_NAME# - Name of the sender
			#FROM_EMAIL# - E-Mail of the sender
			#TO_NAME# - Name of recipient
			#TO_EMAIL# - E-Mail of recipient
			#SUBJECT# - Topic
			#MESSAGE# - Message
			#MESSAGE_DATE# - Date','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '59','LID' => 'en','EVENT_NAME' => 'NEW_FORUM_PRIVATE_MESSAGE','NAME' => 'Private message for forum user','DESCRIPTION' => '
			#FROM_NAME# - Name of the sender
			#FROM_USER_ID# - ID of the sender
			#FROM_EMAIL# - E-Mail of the sender
			#TO_NAME# - Name of recipient
			#TO_USER_ID# - ID of recipient
			#TO_EMAIL# - E-Mail of recipient
			#SUBJECT# - Topic
			#MESSAGE# - Message
			#MESSAGE_DATE# - Date
			#MESSAGE_LINK# - Link to message','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '60','LID' => 'en','EVENT_NAME' => 'EDIT_FORUM_MESSAGE','NAME' => 'Changing forum message','DESCRIPTION' => '
			#FORUM_ID# - Forum ID
			#FORUM_NAME# - Forum name
			#TOPIC_ID# - Topic ID
			#MESSAGE_ID# - Message ID
			#TOPIC_TITLE# - Topic title
			#MESSAGE_TEXT# - Message text
			#MESSAGE_DATE# - Message date
			#AUTHOR# - Message author
			#RECIPIENT# - E-Mail recipient
			#TAPPROVED# - Message topic is approved
			#MAPPROVED# - Message is approved
			#PATH2FORUM# - Message Url
			#FROM_EMAIL# - E-Mail for From field of the EMail','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '61','LID' => 'ru','EVENT_NAME' => 'FORUM_NEW_MESSAGE_MAIL','NAME' => 'Новое сообщение на форуме в режиме общения по E-Mail','DESCRIPTION' => '#FORUM_NAME# - Название форума
#AUTHOR# - Автор сообщения
#FROM_EMAIL# - E-Mail для поля From письма
#RECIPIENT# - Получатель сообщения
#TOPIC_TITLE# - Тема сообщения
#MESSAGE_TEXT# - Текст сообщения
#PATH2FORUM# - Адрес сообщения
#MESSAGE_DATE# - Дата сообщения
#FORUM_EMAIL# - Е-Mail адрес для добавления сообщений на форум
#FORUM_ID# - ID форума
#TOPIC_ID# - ID темы 
#MESSAGE_ID# - ID сообщения
#TAPPROVED# - Тема опубликована
#MAPPROVED# - Сообщение опубликовано
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '62','LID' => 'en','EVENT_NAME' => 'FORUM_NEW_MESSAGE_MAIL','NAME' => 'New message at the forum (e-mail messaging mode)','DESCRIPTION' => '#FORUM_NAME# - Forum name
#AUTHOR# - Message author
#FROM_EMAIL# - E-Mail in the &amp;From&amp; field
#RECIPIENT# - Message recipient
#TOPIC_TITLE# - Message subject
#MESSAGE_TEXT# - Message text
#PATH2FORUM# - Message URL
#MESSAGE_DATE# - Message date
#FORUM_EMAIL# - E-Mail to add messages to the forum 
#FORUM_ID# - Forum ID
#TOPIC_ID# - Topic ID 
#MESSAGE_ID# - Message ID
#TAPPROVED# - Topic approved and published
#MAPPROVED# - Message approved and published
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '63','LID' => 'ru','EVENT_NAME' => 'VIRUS_DETECTED','NAME' => 'Обнаружен вирус','DESCRIPTION' => '#EMAIL# - E-Mail администратора сайта (из настроек главного модуля)','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '64','LID' => 'en','EVENT_NAME' => 'VIRUS_DETECTED','NAME' => 'Virus detected','DESCRIPTION' => '#EMAIL# - Site administrator\'s e-mail address (from the Kernel module settings)','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '65','LID' => 'ru','EVENT_NAME' => 'SUBSCRIBE_CONFIRM','NAME' => 'Подтверждение подписки','DESCRIPTION' => '#ID# - идентификатор подписки
#EMAIL# - адрес подписки
#CONFIRM_CODE# - код подтверждения
#SUBSCR_SECTION# - раздел, где находится страница редактирования подписки (задается в настройках)
#USER_NAME# - имя подписчика (может отсутствовать)
#DATE_SUBSCR# - дата добавления/изменения адреса
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '66','LID' => 'en','EVENT_NAME' => 'SUBSCRIBE_CONFIRM','NAME' => 'Confirmation of subscription','DESCRIPTION' => '#ID# - subscription ID
#EMAIL# - subscription email
#CONFIRM_CODE# - confirmation code
#SUBSCR_SECTION# - section with subscription edit page (specifies in the settings)
#USER_NAME# - subscriber\'s name (optional)
#DATE_SUBSCR# - date of adding/change of address
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '67','LID' => 'ru','EVENT_NAME' => 'VOTE_FOR','NAME' => 'Новый голос','DESCRIPTION' => '#ID# - ID результата голосования
#TIME# - время голосования
#VOTE_TITLE# - наименование опроса
#VOTE_DESCRIPTION# - описание опроса
#VOTE_ID# - ID опроса
#CHANNEL# - наименование группы опроса
#CHANNEL_ID# - ID группы опроса
#VOTER_ID# - ID проголосовавшего посетителя
#USER_NAME# - ФИО пользователя
#LOGIN# - логин
#USER_ID# - ID пользователя
#STAT_GUEST_ID# - ID посетителя модуля статистики
#SESSION_ID# - ID сессии модуля статистики
#IP# - IP адрес
#VOTE_STATISTIC# - Сводная статистика опроса типа ( - Вопрос - Ответ )
#URL# - Путь к опросу
','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '68','LID' => 'en','EVENT_NAME' => 'VOTE_FOR','NAME' => 'New vote','DESCRIPTION' => '#ID# - Vote result ID
#TIME# - Time of vote
#VOTE_TITLE# - Poll name
#VOTE_DESCRIPTION# - Poll description
#VOTE_ID# - Poll ID
#CHANNEL# - Poll group name
#CHANNEL_ID# - Poll group ID
#VOTER_ID# - Voter\'s user ID
#USER_NAME# - User full name
#LOGIN# - login
#USER_ID# - User ID
#STAT_GUEST_ID# - Visitor ID in web analytics module
#SESSION_ID# - Session ID in web analytics module
#IP# - IP address
#VOTE_STATISTIC# - Summary statistics of this poll type ( - Question - Answer)
#URL# - Poll URL','SORT' => '100','EVENT_TYPE' => 'email'),
  array('ID' => '69','LID' => 'ru','EVENT_NAME' => 'NEW_DEVICE_LOGIN','NAME' => 'Вход с нового устройства','DESCRIPTION' => '#USER_ID# - ID пользователя
#EMAIL# - Email пользователя
#LOGIN# - Логин пользователя
#NAME# - Имя пользователя
#LAST_NAME# - Фамилия пользователя
#DEVICE# - Устройство
#BROWSER# - Браузер
#PLATFORM# - Платформа
#USER_AGENT# - User agent
#IP# - IP-адрес
#DATE# - Дата
#COUNTRY# - Страна
#REGION# - Регион
#CITY# - Город
#LOCATION# - Объединенные город, регион, страна
','SORT' => '150','EVENT_TYPE' => 'email'),
  array('ID' => '70','LID' => 'en','EVENT_NAME' => 'NEW_DEVICE_LOGIN','NAME' => 'New device signed in','DESCRIPTION' => '#USER_ID# - User ID
#EMAIL# - User email:
#LOGIN# - User login
#NAME# - User first name
#LAST_NAME# - User last name
#DEVICE# - Device
#BROWSER# - Browser
#PLATFORM# - Platform
#USER_AGENT# - User agent
#IP# - IP address
#DATE# - Date
#COUNTRY# - Country
#REGION# - Region
#CITY# - City
#LOCATION# - Full location (city, region, country)
','SORT' => '150','EVENT_TYPE' => 'email')
);

/* `rimstudio_db`.`b_favorite` */
$b_favorite = array(
);

/* `rimstudio_db`.`b_file` */
$b_file = array(
  array('ID' => '5','TIMESTAMP_X' => '2023-02-18 17:51:43','MODULE_ID' => 'iblock','HEIGHT' => '1409','WIDTH' => '1279','FILE_SIZE' => '949280','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/2be','FILE_NAME' => '6k36r5nwukj4gs4fjw089edzc9psvezl.png','ORIGINAL_NAME' => 'изображение_2023-02-18_230637216.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '2c8bd5ca0d04b66ccc72225b3af248ce'),
  array('ID' => '6','TIMESTAMP_X' => '2023-02-18 16:07:34','MODULE_ID' => 'iblock','HEIGHT' => '1409','WIDTH' => '1279','FILE_SIZE' => '949280','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/2be','FILE_NAME' => '6k36r5nwukj4gs4fjw089edzc9psvezl.png','ORIGINAL_NAME' => 'изображение_2023-02-18_230710292.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '62f75e8be102604934fe1c4b31e152ca'),
  array('ID' => '7','TIMESTAMP_X' => '2023-02-18 16:07:34','MODULE_ID' => 'iblock','HEIGHT' => '1492','WIDTH' => '1279','FILE_SIZE' => '1665234','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/54e','FILE_NAME' => 'y5uo3q35la6nv4rfacpdziyf60jhmxnh.png','ORIGINAL_NAME' => 'изображение_2023-02-18_230719773.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'de8b1f66cded0c97e05eb8e42235ae11'),
  array('ID' => '8','TIMESTAMP_X' => '2023-02-18 16:07:34','MODULE_ID' => 'iblock','HEIGHT' => '1492','WIDTH' => '1279','FILE_SIZE' => '902716','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/63f','FILE_NAME' => 'fasl07j9afcfiy263cr6bidx65asikcb.png','ORIGINAL_NAME' => 'изображение_2023-02-18_230728401.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '11359767c0f7fd915b0ef899a0d7f45f'),
  array('ID' => '9','TIMESTAMP_X' => '2023-02-18 17:51:21','MODULE_ID' => 'iblock','HEIGHT' => '1200','WIDTH' => '800','FILE_SIZE' => '1661586','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/ab3','FILE_NAME' => '6ela3xuoqpdacouflb1et2f91f0zw40o.png','ORIGINAL_NAME' => 'изображение_2023-02-19_005008130.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '92633c28f4466a20103411fafca01b2d'),
  array('ID' => '10','TIMESTAMP_X' => '2023-02-18 17:51:21','MODULE_ID' => 'iblock','HEIGHT' => '1200','WIDTH' => '800','FILE_SIZE' => '1661586','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/ab3','FILE_NAME' => '6ela3xuoqpdacouflb1et2f91f0zw40o.png','ORIGINAL_NAME' => 'изображение_2023-02-19_005044681.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '2e406cca2fc606631fc07b61227167cd'),
  array('ID' => '11','TIMESTAMP_X' => '2023-02-18 17:51:21','MODULE_ID' => 'iblock','HEIGHT' => '2560','WIDTH' => '1440','FILE_SIZE' => '5144330','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/67c','FILE_NAME' => 'j2o6idcyd6wzag4yn7d2c6fx8fkdz57f.png','ORIGINAL_NAME' => 'изображение_2023-02-19_005052911.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'de72a002572dc8a180df67c5216d6b90'),
  array('ID' => '12','TIMESTAMP_X' => '2023-02-18 17:51:21','MODULE_ID' => 'iblock','HEIGHT' => '2560','WIDTH' => '1707','FILE_SIZE' => '6369335','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/8f0','FILE_NAME' => 'frewl2y0bg2yz42lvvf1gmaoetxxgxsc.png','ORIGINAL_NAME' => 'изображение_2023-02-19_005101557.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '839f84c4c172bef34f0af41c22380268'),
  array('ID' => '13','TIMESTAMP_X' => '2023-02-18 17:51:21','MODULE_ID' => 'iblock','HEIGHT' => '2560','WIDTH' => '1440','FILE_SIZE' => '4361710','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/8c9','FILE_NAME' => '520sxyi395s7ojul9fqqf19i3jt6mrmg.png','ORIGINAL_NAME' => 'изображение_2023-02-19_005110299.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '5398d0746e6c6d72d40c436322a49904'),
  array('ID' => '14','TIMESTAMP_X' => '2023-02-19 06:54:05','MODULE_ID' => 'iblock','HEIGHT' => '488','WIDTH' => '418','FILE_SIZE' => '217965','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/dd2','FILE_NAME' => '0aznbof27kvnez82wtn57tyrkaty0a3r.png','ORIGINAL_NAME' => 'изображение_2023-02-19_135328573.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '502ac721ed6326d7404aa0c63454fcb1'),
  array('ID' => '15','TIMESTAMP_X' => '2023-02-19 06:54:05','MODULE_ID' => 'iblock','HEIGHT' => '933','WIDTH' => '800','FILE_SIZE' => '705928','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/88f','FILE_NAME' => 'djzt2acu66vn2f5hgbzbbqkczlpvg309.png','ORIGINAL_NAME' => 'изображение_2023-02-19_135357587.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '9c12bf493e46259b81bbd91a1ab89293'),
  array('ID' => '16','TIMESTAMP_X' => '2023-02-19 06:59:46','MODULE_ID' => 'iblock','HEIGHT' => '671','WIDTH' => '584','FILE_SIZE' => '330718','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/22b','FILE_NAME' => 'nb3m3r4v2yrustlifqjf1ab2dj8vc42o.png','ORIGINAL_NAME' => 'изображение_2023-02-19_135856203.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '389f8ed08652038305e8e6e8f23f0435'),
  array('ID' => '17','TIMESTAMP_X' => '2023-02-19 06:59:46','MODULE_ID' => 'iblock','HEIGHT' => '921','WIDTH' => '800','FILE_SIZE' => '583489','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/64e','FILE_NAME' => 'ioewxpn9qze18ao5vtqbdwfcwwhdrcob.png','ORIGINAL_NAME' => 'изображение_2023-02-19_135922742.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'bba848cfde2e843febfc2999e7b4a113'),
  array('ID' => '18','TIMESTAMP_X' => '2023-02-19 06:59:46','MODULE_ID' => 'iblock','HEIGHT' => '1492','WIDTH' => '1279','FILE_SIZE' => '1721738','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/c2e','FILE_NAME' => 'oqd0qyve809wabd5j4ozxsaa239taf3a.png','ORIGINAL_NAME' => 'изображение_2023-02-19_135929192.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '70ce4ac67488fdbe484a2969529c566f'),
  array('ID' => '19','TIMESTAMP_X' => '2023-02-19 06:59:46','MODULE_ID' => 'iblock','HEIGHT' => '1492','WIDTH' => '1279','FILE_SIZE' => '1612993','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/b2d','FILE_NAME' => 'l2uttpiwf8ntzztwgdim28xa6oej5tti.png','ORIGINAL_NAME' => 'изображение_2023-02-19_135935123.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '809e291d287b650c6ba456a7789f57ac'),
  array('ID' => '20','TIMESTAMP_X' => '2023-02-19 06:59:46','MODULE_ID' => 'iblock','HEIGHT' => '1492','WIDTH' => '1279','FILE_SIZE' => '1325343','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/f72','FILE_NAME' => '5o9i2g3inl7lkd1lwm0mxx4p52trd2l2.png','ORIGINAL_NAME' => 'изображение_2023-02-19_135940744.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'b25d97f6bc34342d8215c93610315c42'),
  array('ID' => '21','TIMESTAMP_X' => '2023-02-19 07:01:08','MODULE_ID' => 'iblock','HEIGHT' => '2560','WIDTH' => '1707','FILE_SIZE' => '7196359','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/097','FILE_NAME' => 'kmli3on6wvn2bfnp133xrzi53xf4powr.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140003927.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '06655dbdefaff3972d6bec63f5bdd12c'),
  array('ID' => '22','TIMESTAMP_X' => '2023-02-19 07:01:08','MODULE_ID' => 'iblock','HEIGHT' => '2560','WIDTH' => '1707','FILE_SIZE' => '7196359','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/097','FILE_NAME' => 'kmli3on6wvn2bfnp133xrzi53xf4powr.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140027785.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '76a171fa239341f4ab885acc5b908cb3'),
  array('ID' => '23','TIMESTAMP_X' => '2023-02-19 07:01:08','MODULE_ID' => 'iblock','HEIGHT' => '2560','WIDTH' => '1707','FILE_SIZE' => '7441438','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/45b','FILE_NAME' => 'immv2tqz586zexaxefkr5g080x7cmyq9.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140040828.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'aadfcfd77687f0f93bb853e83be41e2c'),
  array('ID' => '24','TIMESTAMP_X' => '2023-02-19 07:01:08','MODULE_ID' => 'iblock','HEIGHT' => '2560','WIDTH' => '1707','FILE_SIZE' => '2806369','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/dba','FILE_NAME' => '71qi62moxwmsi893i5wl9olman3u8sdo.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140047400.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'e38a0f94df93f3c859ae469e6e43c81b'),
  array('ID' => '25','TIMESTAMP_X' => '2023-02-19 07:01:08','MODULE_ID' => 'iblock','HEIGHT' => '1707','WIDTH' => '2560','FILE_SIZE' => '6464709','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/f8d','FILE_NAME' => 'jk11gld9edpvnntccmgl6dugd31esoxe.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140056114.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'd7dbc9e2e06686e650c4f2cc8110450a'),
  array('ID' => '26','TIMESTAMP_X' => '2023-02-19 07:01:08','MODULE_ID' => 'iblock','HEIGHT' => '1707','WIDTH' => '2560','FILE_SIZE' => '6694042','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/66f','FILE_NAME' => '3zccqjvt7pajgt2f2qf3sc4v2cjukjox.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140103652.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'bda37f91feb9a614a335567735eeabcf'),
  array('ID' => '27','TIMESTAMP_X' => '2023-02-19 07:03:03','MODULE_ID' => 'iblock','HEIGHT' => '494','WIDTH' => '741','FILE_SIZE' => '556743','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/50a','FILE_NAME' => '2vru48i2mkhggh6gjo8cym1tz98tq574.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140132852.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'ae8e434fa8b04bc5a8bbd7f4b895959b'),
  array('ID' => '28','TIMESTAMP_X' => '2023-02-19 07:03:03','MODULE_ID' => 'iblock','HEIGHT' => '667','WIDTH' => '1000','FILE_SIZE' => '998822','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/46a','FILE_NAME' => 'hb8k54zng1ky6izapiwajz0mbjjbn9zj.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140227077.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '43f264b55247b4ba11e5567f92439c11'),
  array('ID' => '29','TIMESTAMP_X' => '2023-02-19 07:03:03','MODULE_ID' => 'iblock','HEIGHT' => '1333','WIDTH' => '2000','FILE_SIZE' => '3453574','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/8bc','FILE_NAME' => 'q0cgvuifzeb2tlgb6qgjxsz2ggf88o64.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140235212.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '0fd1b2f0d1e9810a33f0c0c71568d677'),
  array('ID' => '30','TIMESTAMP_X' => '2023-02-19 07:03:03','MODULE_ID' => 'iblock','HEIGHT' => '1333','WIDTH' => '2000','FILE_SIZE' => '3536823','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/123','FILE_NAME' => '73k2jyfseefxshm02juq7a7bsh4yvk7t.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140242219.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '7f6e1ef595f6786208439158e93e9186'),
  array('ID' => '31','TIMESTAMP_X' => '2023-02-19 07:03:03','MODULE_ID' => 'iblock','HEIGHT' => '1333','WIDTH' => '2000','FILE_SIZE' => '3172142','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/04d','FILE_NAME' => 'hgir6aux3ti2r821ltkkkee08bskkzas.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140249259.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '6e9e34181b39c9ea3683338250d04c7b'),
  array('ID' => '32','TIMESTAMP_X' => '2023-02-19 07:03:03','MODULE_ID' => 'iblock','HEIGHT' => '2000','WIDTH' => '1333','FILE_SIZE' => '2611946','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/434','FILE_NAME' => 'l0d0n5rs83fdxnmlbsmpglhkc534jnu8.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140256368.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '46ca7f1a66aad2c0fcdd36f3bd049439'),
  array('ID' => '33','TIMESTAMP_X' => '2023-02-19 07:04:47','MODULE_ID' => 'iblock','HEIGHT' => '494','WIDTH' => '427','FILE_SIZE' => '215253','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/68d','FILE_NAME' => 'gdml7000virtlk06o9a5s9ijahrw6aen.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140431713.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'f432b2414dffcde2b756bf0446e0cd8d'),
  array('ID' => '34','TIMESTAMP_X' => '2023-02-19 07:04:47','MODULE_ID' => 'iblock','HEIGHT' => '928','WIDTH' => '800','FILE_SIZE' => '622522','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/153','FILE_NAME' => 'f3021ry1056lorddwu4i2axffka6t1pp.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140446343.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '2bd4950dbd0881b54bfc5f7c864764c7'),
  array('ID' => '35','TIMESTAMP_X' => '2023-02-19 07:05:37','MODULE_ID' => 'iblock','HEIGHT' => '590','WIDTH' => '507','FILE_SIZE' => '246305','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/8a6','FILE_NAME' => 'ufmpfxs1edxvzgh8qmmred5lx0dngdiq.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140503529.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'c7ff3199f62280c340495f95c76c263b'),
  array('ID' => '36','TIMESTAMP_X' => '2023-02-19 07:05:37','MODULE_ID' => 'iblock','HEIGHT' => '933','WIDTH' => '800','FILE_SIZE' => '544047','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/d32','FILE_NAME' => 'mefv3682sbcru6ntmve4sxr4gq6xo4go.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140519429.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'bec8fc377d55fb2dd79e4c5330c96b86'),
  array('ID' => '37','TIMESTAMP_X' => '2023-02-19 07:06:14','MODULE_ID' => 'iblock','HEIGHT' => '590','WIDTH' => '661','FILE_SIZE' => '583685','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/a2e','FILE_NAME' => 's1i1sv4qzf1a3egjb68kr1ftlk23jpxj.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140551700.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '888513b9a831f25859aebd648b3ea11a'),
  array('ID' => '38','TIMESTAMP_X' => '2023-02-19 07:06:14','MODULE_ID' => 'iblock','HEIGHT' => '590','WIDTH' => '661','FILE_SIZE' => '583685','CONTENT_TYPE' => 'image/png','SUBDIR' => 'iblock/a2e','FILE_NAME' => 's1i1sv4qzf1a3egjb68kr1ftlk23jpxj.png','ORIGINAL_NAME' => 'изображение_2023-02-19_140555313.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => 'a74705729c8e71b3a3e12fb15699ab1c'),
  array('ID' => '39','TIMESTAMP_X' => '2023-02-20 17:18:50','MODULE_ID' => 'landing','HEIGHT' => '180','WIDTH' => '180','FILE_SIZE' => '3303','CONTENT_TYPE' => 'image/png','SUBDIR' => 'landing/538','FILE_NAME' => 'zzhn9b6gv3r9nosg356pj0h6l2i5exht.png','ORIGINAL_NAME' => 'cropped-favicon-180x180.png','DESCRIPTION' => '','HANDLER_ID' => NULL,'EXTERNAL_ID' => '76f381efb95ebbcd55aea2c5bd6b5b5a')
);

/* `rimstudio_db`.`b_file_duplicate` */
$b_file_duplicate = array(
  array('DUPLICATE_ID' => '6','ORIGINAL_ID' => '5','COUNTER' => '1','ORIGINAL_DELETED' => 'N'),
  array('DUPLICATE_ID' => '10','ORIGINAL_ID' => '9','COUNTER' => '1','ORIGINAL_DELETED' => 'N'),
  array('DUPLICATE_ID' => '22','ORIGINAL_ID' => '21','COUNTER' => '1','ORIGINAL_DELETED' => 'N'),
  array('DUPLICATE_ID' => '38','ORIGINAL_ID' => '37','COUNTER' => '1','ORIGINAL_DELETED' => 'N')
);

/* `rimstudio_db`.`b_file_hash` */
$b_file_hash = array(
  array('FILE_ID' => '39','FILE_SIZE' => '3303','FILE_HASH' => '05d0f0f26a72fe728efa366e84f002c6'),
  array('FILE_ID' => '33','FILE_SIZE' => '215253','FILE_HASH' => 'e3edd8ef9410e70bc49f4851e76632b9'),
  array('FILE_ID' => '14','FILE_SIZE' => '217965','FILE_HASH' => 'c3d29c2d82250c0e75f1f70d9e4b1671'),
  array('FILE_ID' => '35','FILE_SIZE' => '246305','FILE_HASH' => 'b13e801642c7295dbbbaff5bd0183310'),
  array('FILE_ID' => '16','FILE_SIZE' => '330718','FILE_HASH' => '963f71499ab51c4481ab2ec9205d86c2'),
  array('FILE_ID' => '36','FILE_SIZE' => '544047','FILE_HASH' => 'f17ea54947472510e004afd2900b88e8'),
  array('FILE_ID' => '27','FILE_SIZE' => '556743','FILE_HASH' => '59ace4bb7546e634effb90c7f17ce189'),
  array('FILE_ID' => '17','FILE_SIZE' => '583489','FILE_HASH' => '545a1ea412add896eccdfc34188e1547'),
  array('FILE_ID' => '37','FILE_SIZE' => '583685','FILE_HASH' => 'f41cd17f158136b1877f50c5c5530a09'),
  array('FILE_ID' => '34','FILE_SIZE' => '622522','FILE_HASH' => 'd187911d35f5bf566ed157924490c18a'),
  array('FILE_ID' => '15','FILE_SIZE' => '705928','FILE_HASH' => 'd8d678171a6f3ccfc893503b1a5b872a'),
  array('FILE_ID' => '8','FILE_SIZE' => '902716','FILE_HASH' => '67b938ef997e54d3bde9eb97abd79696'),
  array('FILE_ID' => '5','FILE_SIZE' => '949280','FILE_HASH' => '3bed9c21e10880a31a2bdbf8a219cb20'),
  array('FILE_ID' => '28','FILE_SIZE' => '998822','FILE_HASH' => '912c185c2597dbc088d818e78180babc'),
  array('FILE_ID' => '20','FILE_SIZE' => '1325343','FILE_HASH' => '7ecab55aece3dbdef9f9f2d8e80edd63'),
  array('FILE_ID' => '19','FILE_SIZE' => '1612993','FILE_HASH' => 'ec0446f54bd475a5b1265cd13608648f'),
  array('FILE_ID' => '9','FILE_SIZE' => '1661586','FILE_HASH' => 'bcca0471db9be6043b3c05a43d0518bb'),
  array('FILE_ID' => '7','FILE_SIZE' => '1665234','FILE_HASH' => '1a4165029960921b5584ba97301f7628'),
  array('FILE_ID' => '18','FILE_SIZE' => '1721738','FILE_HASH' => '33672caee93e0acc7ba713bafed2c8b6'),
  array('FILE_ID' => '32','FILE_SIZE' => '2611946','FILE_HASH' => 'f39e7591744188749d30712214ee09c4'),
  array('FILE_ID' => '24','FILE_SIZE' => '2806369','FILE_HASH' => '74d38e8fea1593c0af4b969e3cde232f'),
  array('FILE_ID' => '31','FILE_SIZE' => '3172142','FILE_HASH' => 'e76fceb404a8e5dffad838a95d4791a4'),
  array('FILE_ID' => '29','FILE_SIZE' => '3453574','FILE_HASH' => 'f393bc26529d5d48f6eb0d0f5cd5fed7'),
  array('FILE_ID' => '30','FILE_SIZE' => '3536823','FILE_HASH' => '84a4c155bfe46c8934d1bddaab3b2fdb'),
  array('FILE_ID' => '13','FILE_SIZE' => '4361710','FILE_HASH' => 'b526419c0c4870df962b23cd370328a0'),
  array('FILE_ID' => '11','FILE_SIZE' => '5144330','FILE_HASH' => '3605a465ff93f94321ecf0f86eb36cad'),
  array('FILE_ID' => '12','FILE_SIZE' => '6369335','FILE_HASH' => '15522f50b54cc99e1646d378402b5052'),
  array('FILE_ID' => '25','FILE_SIZE' => '6464709','FILE_HASH' => '88cab0e3d10207ca2293d9cea7c8d8b3'),
  array('FILE_ID' => '26','FILE_SIZE' => '6694042','FILE_HASH' => '6172ba7d0b2b096d78ccb8d6a9d16325'),
  array('FILE_ID' => '21','FILE_SIZE' => '7196359','FILE_HASH' => 'b1dd190e9820e0580b37e873e18baa0b'),
  array('FILE_ID' => '23','FILE_SIZE' => '7441438','FILE_HASH' => 'f516e9ff8165fc2df279490552046584')
);

/* `rimstudio_db`.`b_file_preview` */
$b_file_preview = array(
);

/* `rimstudio_db`.`b_file_search` */
$b_file_search = array(
);

/* `rimstudio_db`.`b_file_version` */
$b_file_version = array(
);

/* `rimstudio_db`.`b_filters` */
$b_filters = array(
);

/* `rimstudio_db`.`b_finder_dest` */
$b_finder_dest = array(
);

/* `rimstudio_db`.`b_form` */
$b_form = array(
);

/* `rimstudio_db`.`b_form_2_group` */
$b_form_2_group = array(
);

/* `rimstudio_db`.`b_form_2_mail_template` */
$b_form_2_mail_template = array(
);

/* `rimstudio_db`.`b_form_2_site` */
$b_form_2_site = array(
);

/* `rimstudio_db`.`b_form_answer` */
$b_form_answer = array(
);

/* `rimstudio_db`.`b_form_crm` */
$b_form_crm = array(
);

/* `rimstudio_db`.`b_form_crm_field` */
$b_form_crm_field = array(
);

/* `rimstudio_db`.`b_form_crm_link` */
$b_form_crm_link = array(
);

/* `rimstudio_db`.`b_form_field` */
$b_form_field = array(
);

/* `rimstudio_db`.`b_form_field_filter` */
$b_form_field_filter = array(
);

/* `rimstudio_db`.`b_form_field_validator` */
$b_form_field_validator = array(
);

/* `rimstudio_db`.`b_form_menu` */
$b_form_menu = array(
);

/* `rimstudio_db`.`b_form_result` */
$b_form_result = array(
);

/* `rimstudio_db`.`b_form_result_answer` */
$b_form_result_answer = array(
);

/* `rimstudio_db`.`b_form_status` */
$b_form_status = array(
);

/* `rimstudio_db`.`b_form_status_2_group` */
$b_form_status_2_group = array(
);

/* `rimstudio_db`.`b_form_status_2_mail_template` */
$b_form_status_2_mail_template = array(
);

/* `rimstudio_db`.`b_forum` */
$b_forum = array(
);

/* `rimstudio_db`.`b_forum2site` */
$b_forum2site = array(
);

/* `rimstudio_db`.`b_forum_dictionary` */
$b_forum_dictionary = array(
  array('ID' => '1','TITLE' => '[ru] Словарь слов','TYPE' => 'W'),
  array('ID' => '2','TITLE' => '[ru] Словарь транслита','TYPE' => 'T'),
  array('ID' => '3','TITLE' => '[en] Bad words','TYPE' => 'W'),
  array('ID' => '4','TITLE' => '[en] Transliteration','TYPE' => 'T')
);

/* `rimstudio_db`.`b_forum_email` */
$b_forum_email = array(
);

/* `rimstudio_db`.`b_forum_file` */
$b_forum_file = array(
);

/* `rimstudio_db`.`b_forum_filter` */
$b_forum_filter = array(
  array('ID' => '1','DICTIONARY_ID' => '1','WORDS' => '*пизд*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])([^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*([ПпPp]+)([ИиIi]+)([ЗзZz3]+)([ДдDd]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '2','DICTIONARY_ID' => '1','WORDS' => '*пизж*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])([^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*([ПпPp]+)([ИиIi]+)([ЗзZz3]+)([ЖжGg]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '3','DICTIONARY_ID' => '1','WORDS' => '*сра%','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])([^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*([СсCc]+)([РрPpRr]+)([АаAa]+)([[Цц]+([Аа]+|[Оо]+)]+|[[Тт]+([Ьь]+|)[Сс]+[Яя]+]+))(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '4','DICTIONARY_ID' => '1','WORDS' => 'анобляд*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([АаAa]+)([НнNn]+)([ОоOo]+)([БбBb]+)([ЛлLl]+)([Яя]+)([ДдDd]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '5','DICTIONARY_ID' => '1','WORDS' => 'взъеб*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвVv]+)([ЗзZz3]+)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '6','DICTIONARY_ID' => '1','WORDS' => 'бля','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([БбBb]+)([ЛлLl]+)([Яя]+))(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '7','DICTIONARY_ID' => '1','WORDS' => 'долбоеб*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ДдDd]+)([ОоOo]+)([ЛлLl]+)([БбBb]+)([ОоOo]+)([ЁёЕеEe]+)([БбBb]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '8','DICTIONARY_ID' => '1','WORDS' => 'дуроеб*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ДдDd]+)([УуUu]+)([РрPpRr]+)([ОоOo]+)([ЁёЕеEe]+)([БбBb]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '9','DICTIONARY_ID' => '1','WORDS' => 'еби','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ЁёЕеEe]+)([БбBb]+)([ИиIi]+))(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '10','DICTIONARY_ID' => '1','WORDS' => 'ебисти*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ЁёЕеEe]+)([БбBb]+)([ИиIi]+)([СсCc]+)([ТтTt]+)([ИиIi]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '11','DICTIONARY_ID' => '1','WORDS' => 'ебическ*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ЁёЕеEe]+)([БбBb]+)([ИиIi]+)([Чч]+)([ЁёЕеEe]+)([СсCc]+)([КкKk]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '12','DICTIONARY_ID' => '1','WORDS' => 'еблив*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ЁёЕеEe]+)([БбBb]+)([ЛлLl]+)([ИиIi]+)([ВвVv]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '13','DICTIONARY_ID' => '1','WORDS' => 'ебло*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ЁёЕеEe]+)([БбBb]+)([ЛлLl]+)([ОоOo]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '14','DICTIONARY_ID' => '1','WORDS' => 'еблыс*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ЁёЕеEe]+)([БбBb]+)([ЛлLl]+)([Ыы]+)([СсCc]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '15','DICTIONARY_ID' => '1','WORDS' => 'ебля','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ЁёЕеEe]+)([БбBb]+)([ЛлLl]+)([Яя]+))(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '16','DICTIONARY_ID' => '1','WORDS' => 'ебс','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ЁёЕеEe]+)([БбBb]+)([СсCc]+))(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '17','DICTIONARY_ID' => '1','WORDS' => 'ебукент*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ЁёЕеEe]+)([БбBb]+)([УуUu]+)([КкKk]+)([ЁёЕеEe]+)([НнNn]+)([ТтTt]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '18','DICTIONARY_ID' => '1','WORDS' => 'ебурген*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ЁёЕеEe]+)([БбBb]+)([УуUu]+)([РрPpRr]+)([Гг]+)([ЁёЕеEe]+)([НнNn]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '19','DICTIONARY_ID' => '1','WORDS' => 'коноебит*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([КкKk]+)([ОоOo]+)([НнNn]+)([ОоOo]+)([ЁёЕеEe]+)([БбBb]+)([ИиIi]+)([ТтTt]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '20','DICTIONARY_ID' => '1','WORDS' => 'мозгоеб*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([МмMm]+)([ОоOo]+)([ЗзZz3]+)([Гг]+)([ОоOo]+)([ЁёЕеEe]+)([БбBb]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '21','DICTIONARY_ID' => '1','WORDS' => 'мудоеб*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([МмMm]+)([УуUu]+)([ДдDd]+)([ОоOo]+)([ЁёЕеEe]+)([БбBb]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '22','DICTIONARY_ID' => '1','WORDS' => 'однохуйствен*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ОоOo]+)([ДдDd]+)([НнNn]+)([ОоOo]+)([ХхXx]+)([УуUu]+)([ЙйИиYy]+)([СсCc]+)([ТтTt]+)([ВвVv]+)([ЁёЕеEe]+)([НнNn]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '23','DICTIONARY_ID' => '1','WORDS' => 'охуе*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ОоOo]+)([ХхXx]+)([УуUu]+)([ЁёЕеEe]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '24','DICTIONARY_ID' => '1','WORDS' => 'охуи*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ОоOo]+)([ХхXx]+)([УуUu]+)([ИиIi]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '25','DICTIONARY_ID' => '1','WORDS' => 'охуя*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ОоOo]+)([ХхXx]+)([УуUu]+)([Яя]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '26','DICTIONARY_ID' => '1','WORDS' => 'разъеба*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([РрPpRr]+)([АаAa]+)([ЗзZz3]+)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([АаAa]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '27','DICTIONARY_ID' => '1','WORDS' => 'распиздон*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([РрPpRr]+)([АаAa]+)([СсCc]+)([ПпPp]+)([ИиIi]+)([ЗзZz3]+)([ДдDd]+)([ОоOo]+)([НнNn]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '28','DICTIONARY_ID' => '1','WORDS' => 'расхуюж*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([РрPpRr]+)([АаAa]+)([СсCc]+)([ХхXx]+)([УуUu]+)([Юю]+|[[Йй]+[Оо]+]+)([ЖжGg]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '29','DICTIONARY_ID' => '1','WORDS' => 'худоебин*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ХхXx]+)([УуUu]+)([ДдDd]+)([ОоOo]+)([ЁёЕеEe]+)([БбBb]+)([ИиIi]+)([НнNn]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '30','DICTIONARY_ID' => '1','WORDS' => 'хуе','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ХхXx]+)([УуUu]+)([ЁёЕеEe]+))(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '31','DICTIONARY_ID' => '1','WORDS' => 'хуебрат*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ХхXx]+)([УуUu]+)([ЁёЕеEe]+)([БбBb]+)([РрPpRr]+)([АаAa]+)([ТтTt]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '32','DICTIONARY_ID' => '1','WORDS' => 'хуеглот*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ХхXx]+)([УуUu]+)([ЁёЕеEe]+)([Гг]+)([ЛлLl]+)([ОоOo]+)([ТтTt]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '33','DICTIONARY_ID' => '1','WORDS' => 'хуеплёт*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ХхXx]+)([УуUu]+)([ЁёЕеEe]+)([ПпPp]+)([ЛлLl]+)([ЁёЕеEe]+|[[Йй]+[Оо]+]+)([ТтTt]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '34','DICTIONARY_ID' => '1','WORDS' => 'хует*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ХхXx]+)([УуUu]+)([ЁёЕеEe]+)([ТтTt]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '35','DICTIONARY_ID' => '1','WORDS' => 'хуила','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ХхXx]+)([УуUu]+)([ИиIi]+)([ЛлLl]+)([АаAa]+))(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '36','DICTIONARY_ID' => '1','WORDS' => 'хул?','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ХхXx]+)([УуUu]+)([ЛлLl]+).?)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '37','DICTIONARY_ID' => '1','WORDS' => 'хуя','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ХхXx]+)([УуUu]+)([Яя]+))(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '38','DICTIONARY_ID' => '1','WORDS' => '^бляд*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([БбBb]+)([ЛлLl]+)([Яя]+)([ДдDd]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '39','DICTIONARY_ID' => '1','WORDS' => '^пидор*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ПпPp]+)([ИиIi]+)([ДдDd]+)([ОоOo]+)([РрPpRr]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '40','DICTIONARY_ID' => '1','WORDS' => '^хуев*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ХхXx]+)([УуUu]+)([ЁёЕеEe]+)([ВвVv]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '41','DICTIONARY_ID' => '1','WORDS' => '^хуем*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ХхXx]+)([УуUu]+)([ЁёЕеEe]+)([МмMm]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '42','DICTIONARY_ID' => '1','WORDS' => '^хуй*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ХхXx]+)([УуUu]+)([ЙйИиYy]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '43','DICTIONARY_ID' => '1','WORDS' => '^хуяк*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ХхXx]+)([УуUu]+)([Яя]+)([КкKk]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '44','DICTIONARY_ID' => '1','WORDS' => '^хуям*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ХхXx]+)([УуUu]+)([Яя]+)([МмMm]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '45','DICTIONARY_ID' => '1','WORDS' => '^хуяр*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ХхXx]+)([УуUu]+)([Яя]+)([РрPpRr]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '46','DICTIONARY_ID' => '1','WORDS' => '^хуяч*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ХхXx]+)([УуUu]+)([Яя]+)([Чч]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '47','DICTIONARY_ID' => '1','WORDS' => '^ъебал*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([АаAa]+)([ЛлLl]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '48','DICTIONARY_ID' => '1','WORDS' => '^ъебан*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([АаAa]+)([НнNn]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '49','DICTIONARY_ID' => '1','WORDS' => '^ъебар*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([АаAa]+)([РрPpRr]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '50','DICTIONARY_ID' => '1','WORDS' => '^ъебат*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([АаAa]+)([ТтTt]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '51','DICTIONARY_ID' => '1','WORDS' => '^ъебен*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([ЁёЕеEe]+)([НнNn]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '52','DICTIONARY_ID' => '1','WORDS' => '^ъеби','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([ИиIi]+))(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '53','DICTIONARY_ID' => '1','WORDS' => '^ъебис*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([ИиIi]+)([СсCc]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '54','DICTIONARY_ID' => '1','WORDS' => '^ъебит*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([ИиIi]+)([ТтTt]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '55','DICTIONARY_ID' => '1','WORDS' => '^ъёбля*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+|[[Йй]+[Оо]+]+)([БбBb]+)([ЛлLl]+)([Яя]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '56','DICTIONARY_ID' => '1','WORDS' => '^ъёбну*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+|[[Йй]+[Оо]+]+)([БбBb]+)([НнNn]+)([УуUu]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '57','DICTIONARY_ID' => '1','WORDS' => '^ъебу','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([УуUu]+))(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '58','DICTIONARY_ID' => '1','WORDS' => '^ъебуч*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([УуUu]+)([Чч]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '59','DICTIONARY_ID' => '1','WORDS' => '^ъебыв*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(([ВвЗзСс]+|[ВвЫы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)+|)([ЪъЬь"\']+|)([ЁёЕеEe]+)([БбBb]+)([Ыы]+)([ВвVv]+)[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '60','DICTIONARY_ID' => '1','WORDS' => '/(?<=[s.,;:!?-#*|[]()])(?![Вв][ЕеЁё][Бб])(([ВвЗзСс]+|[Ввы]+|[ДдОо]+|[ЗзАа]+|[ИиЗзСс]+|[НнАа]+|[НнЕе]+|[ОоТт]+|([Пп]*[Ее]+[Рр]+[Ее]+)|)([ЬьЪъ]+|)([ЁёЕеEe]+|[Йй]+[Оо]+|[Yy]+[Oo]+)([BbБб]+))(?=[s.,;:!?-#*|[]()])/is','PATTERN' => '','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'PTTRN'),
  array('ID' => '61','DICTIONARY_ID' => '3','WORDS' => 'angry','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(a+n+g+r+y+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '62','DICTIONARY_ID' => '3','WORDS' => 'ass','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(a+s+s+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '63','DICTIONARY_ID' => '3','WORDS' => 'asshole','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(a+s+s+h+o+l+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '64','DICTIONARY_ID' => '3','WORDS' => 'banger','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+a+n+g+e+r+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '65','DICTIONARY_ID' => '3','WORDS' => 'bastard','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+a+s+t+a+r+d+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '66','DICTIONARY_ID' => '3','WORDS' => 'batter','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+a+t+t+e+r+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '67','DICTIONARY_ID' => '3','WORDS' => 'bicho','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+i+c+h+o+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '68','DICTIONARY_ID' => '3','WORDS' => 'bisexual','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+i+s+e+x+u+a+l+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '69','DICTIONARY_ID' => '3','WORDS' => 'bitch','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+i+t+c+h+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '70','DICTIONARY_ID' => '3','WORDS' => 'blumpkin','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+l+u+m+p+k+i+n+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '71','DICTIONARY_ID' => '3','WORDS' => 'booger','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+o+o+g+e+r+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '72','DICTIONARY_ID' => '3','WORDS' => 'bugger*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+u+g+g+e+r+[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '73','DICTIONARY_ID' => '3','WORDS' => 'bukakke','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+u+k+a+k+k+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '74','DICTIONARY_ID' => '3','WORDS' => 'bull','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+u+l+l+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '75','DICTIONARY_ID' => '3','WORDS' => 'bulldyke','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+u+l+l+d+y+k+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '76','DICTIONARY_ID' => '3','WORDS' => 'bullshit','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+u+l+l+s+h+i+t+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '77','DICTIONARY_ID' => '3','WORDS' => 'bunny','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+u+n+n+y+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '78','DICTIONARY_ID' => '3','WORDS' => 'bunnyfuck','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(b+u+n+n+y+f+u+c+k+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '79','DICTIONARY_ID' => '3','WORDS' => 'chocha','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+h+o+c+h+a+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '80','DICTIONARY_ID' => '3','WORDS' => 'chode','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+h+o+d+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '81','DICTIONARY_ID' => '3','WORDS' => 'clap','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+l+a+p+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '82','DICTIONARY_ID' => '3','WORDS' => 'coconuts','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+o+c+o+n+u+t+s+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '83','DICTIONARY_ID' => '3','WORDS' => 'cohones','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+o+h+o+n+e+s+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '84','DICTIONARY_ID' => '3','WORDS' => 'cojones','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+o+j+o+n+e+s+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '85','DICTIONARY_ID' => '3','WORDS' => 'coon','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+o+o+n+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '86','DICTIONARY_ID' => '3','WORDS' => 'cootch','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+o+o+t+c+h+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '87','DICTIONARY_ID' => '3','WORDS' => 'cooter','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+o+o+t+e+r+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '88','DICTIONARY_ID' => '3','WORDS' => 'cornhole','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+o+r+n+h+o+l+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '89','DICTIONARY_ID' => '3','WORDS' => 'cracka','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+r+a+c+k+a+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '90','DICTIONARY_ID' => '3','WORDS' => 'crap','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+r+a+p+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '91','DICTIONARY_ID' => '3','WORDS' => 'cum','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+u+m+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '92','DICTIONARY_ID' => '3','WORDS' => 'cunnilingus','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+u+n+n+i+l+i+n+g+u+s+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '93','DICTIONARY_ID' => '3','WORDS' => 'cunt*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(c+u+n+t+[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '94','DICTIONARY_ID' => '3','WORDS' => 'damn*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+a+m+n+[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '95','DICTIONARY_ID' => '3','WORDS' => 'dark*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+a+r+k+[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '96','DICTIONARY_ID' => '3','WORDS' => 'dick','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+i+c+k+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '97','DICTIONARY_ID' => '3','WORDS' => 'dickhead','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+i+c+k+h+e+a+d+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '98','DICTIONARY_ID' => '3','WORDS' => 'diddle','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+i+d+d+l+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '99','DICTIONARY_ID' => '3','WORDS' => 'dildo','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+i+l+d+o+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '100','DICTIONARY_ID' => '3','WORDS' => 'dilhole','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+i+l+h+o+l+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '101','DICTIONARY_ID' => '3','WORDS' => 'dingleberry','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+i+n+g+l+e+b+e+r+r+y+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '102','DICTIONARY_ID' => '3','WORDS' => 'doodle','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+o+o+d+l+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '103','DICTIONARY_ID' => '3','WORDS' => 'dork','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+o+r+k+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '104','DICTIONARY_ID' => '3','WORDS' => 'dumpster','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(d+u+m+p+s+t+e+r+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '105','DICTIONARY_ID' => '3','WORDS' => 'faggot','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(f+a+g+g+o+t+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '106','DICTIONARY_ID' => '3','WORDS' => 'fart','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(f+a+r+t+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '107','DICTIONARY_ID' => '3','WORDS' => 'frig','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(f+r+i+g+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '108','DICTIONARY_ID' => '3','WORDS' => 'fuck*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(f+u+c+k+[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '109','DICTIONARY_ID' => '3','WORDS' => 'fucker','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(f+u+c+k+e+r+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '110','DICTIONARY_ID' => '3','WORDS' => 'giz','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(g+i+z+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '111','DICTIONARY_ID' => '3','WORDS' => 'goatse','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(g+o+a+t+s+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '112','DICTIONARY_ID' => '3','WORDS' => 'gook','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(g+o+o+k+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '113','DICTIONARY_ID' => '3','WORDS' => 'gringo','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(g+r+i+n+g+o+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '114','DICTIONARY_ID' => '3','WORDS' => 'hobo','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(h+o+b+o+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '115','DICTIONARY_ID' => '3','WORDS' => 'honky','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(h+o+n+k+y+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '116','DICTIONARY_ID' => '3','WORDS' => 'jackass','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(j+a+c+k+a+s+s+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '117','DICTIONARY_ID' => '3','WORDS' => 'jackoff','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(j+a+c+k+o+f+f+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '118','DICTIONARY_ID' => '3','WORDS' => 'jerkoff','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(j+e+r+k+o+f+f+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '119','DICTIONARY_ID' => '3','WORDS' => 'jiggaboo','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(j+i+g+g+a+b+o+o+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '120','DICTIONARY_ID' => '3','WORDS' => 'jizz','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(j+i+z+z+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '121','DICTIONARY_ID' => '3','WORDS' => 'kike','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(k+i+k+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '122','DICTIONARY_ID' => '3','WORDS' => 'mayo','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(m+a+y+o+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '123','DICTIONARY_ID' => '3','WORDS' => 'moose','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(m+o+o+s+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '124','DICTIONARY_ID' => '3','WORDS' => 'nigg*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(n+i+g+g+[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '125','DICTIONARY_ID' => '3','WORDS' => 'paki','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(p+a+k+i+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '126','DICTIONARY_ID' => '3','WORDS' => 'pecker','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(p+e+c+k+e+r+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '127','DICTIONARY_ID' => '3','WORDS' => 'piss','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(p+i+s+s+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '128','DICTIONARY_ID' => '3','WORDS' => 'poonanni','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(p+o+o+n+a+n+n+i+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '129','DICTIONARY_ID' => '3','WORDS' => 'poontang','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(p+o+o+n+t+a+n+g+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '130','DICTIONARY_ID' => '3','WORDS' => 'prick','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(p+r+i+c+k+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '131','DICTIONARY_ID' => '3','WORDS' => 'punch','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(p+u+n+c+h+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '132','DICTIONARY_ID' => '3','WORDS' => 'queef','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(q+u+e+e+f+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '133','DICTIONARY_ID' => '3','WORDS' => 'rogue','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(r+o+g+u+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '134','DICTIONARY_ID' => '3','WORDS' => 'sanchez','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(s+a+n+c+h+e+z+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '135','DICTIONARY_ID' => '3','WORDS' => 'schlong','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(s+c+h+l+o+n+g+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '136','DICTIONARY_ID' => '3','WORDS' => 'shit','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(s+h+i+t+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '137','DICTIONARY_ID' => '3','WORDS' => 'skank','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(s+k+a+n+k+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '138','DICTIONARY_ID' => '3','WORDS' => 'spaz','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(s+p+a+z+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '139','DICTIONARY_ID' => '3','WORDS' => 'spic','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(s+p+i+c+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '140','DICTIONARY_ID' => '3','WORDS' => 'teabag*','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(t+e+a+b+a+g+[^\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)]*)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '141','DICTIONARY_ID' => '3','WORDS' => 'tits','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(t+i+t+s+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '142','DICTIONARY_ID' => '3','WORDS' => 'twat','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(t+w+a+t+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '143','DICTIONARY_ID' => '3','WORDS' => 'twot','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(t+w+o+t+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '144','DICTIONARY_ID' => '3','WORDS' => 'vart','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(v+a+r+t+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '145','DICTIONARY_ID' => '3','WORDS' => 'wanker','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(w+a+n+k+e+r+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '146','DICTIONARY_ID' => '3','WORDS' => 'waste','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(w+a+s+t+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '147','DICTIONARY_ID' => '3','WORDS' => 'wetback','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(w+e+t+b+a+c+k+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '148','DICTIONARY_ID' => '3','WORDS' => 'whore','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(w+h+o+r+e+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '149','DICTIONARY_ID' => '3','WORDS' => 'wigger','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(w+i+g+g+e+r+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '150','DICTIONARY_ID' => '3','WORDS' => 'wog','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(w+o+g+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL'),
  array('ID' => '151','DICTIONARY_ID' => '3','WORDS' => 'wop','PATTERN' => '/(?<=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])(w+o+p+)(?=[\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)])/isu','REPLACEMENT' => '','DESCRIPTION' => '','USE_IT' => 'Y','PATTERN_CREATE' => 'TRNSL')
);

/* `rimstudio_db`.`b_forum_group` */
$b_forum_group = array(
);

/* `rimstudio_db`.`b_forum_group_lang` */
$b_forum_group_lang = array(
);

/* `rimstudio_db`.`b_forum_letter` */
$b_forum_letter = array(
  array('ID' => '1','DICTIONARY_ID' => '2','LETTER' => 'а','REPLACEMENT' => 'АаAa'),
  array('ID' => '2','DICTIONARY_ID' => '2','LETTER' => 'б','REPLACEMENT' => 'БбBb'),
  array('ID' => '3','DICTIONARY_ID' => '2','LETTER' => 'в','REPLACEMENT' => 'ВвVv'),
  array('ID' => '4','DICTIONARY_ID' => '2','LETTER' => 'г','REPLACEMENT' => 'Гг'),
  array('ID' => '5','DICTIONARY_ID' => '2','LETTER' => 'д','REPLACEMENT' => 'ДдDd'),
  array('ID' => '6','DICTIONARY_ID' => '2','LETTER' => 'е','REPLACEMENT' => 'ЁёЕеEe'),
  array('ID' => '7','DICTIONARY_ID' => '2','LETTER' => 'ё','REPLACEMENT' => 'ЁёЕеEe, [Йй]+[Оо]+'),
  array('ID' => '8','DICTIONARY_ID' => '2','LETTER' => 'ж','REPLACEMENT' => 'ЖжGg'),
  array('ID' => '9','DICTIONARY_ID' => '2','LETTER' => 'з','REPLACEMENT' => 'ЗзZz3'),
  array('ID' => '10','DICTIONARY_ID' => '2','LETTER' => 'и','REPLACEMENT' => 'ИиIi'),
  array('ID' => '11','DICTIONARY_ID' => '2','LETTER' => 'й','REPLACEMENT' => 'ЙйИиYy'),
  array('ID' => '12','DICTIONARY_ID' => '2','LETTER' => 'к','REPLACEMENT' => 'КкKk'),
  array('ID' => '13','DICTIONARY_ID' => '2','LETTER' => 'л','REPLACEMENT' => 'ЛлLl'),
  array('ID' => '14','DICTIONARY_ID' => '2','LETTER' => 'м','REPLACEMENT' => 'МмMm'),
  array('ID' => '15','DICTIONARY_ID' => '2','LETTER' => 'н','REPLACEMENT' => 'НнNn'),
  array('ID' => '16','DICTIONARY_ID' => '2','LETTER' => 'о','REPLACEMENT' => 'ОоOo'),
  array('ID' => '17','DICTIONARY_ID' => '2','LETTER' => 'п','REPLACEMENT' => 'ПпPp'),
  array('ID' => '18','DICTIONARY_ID' => '2','LETTER' => 'р','REPLACEMENT' => 'РрPpRr'),
  array('ID' => '19','DICTIONARY_ID' => '2','LETTER' => 'с','REPLACEMENT' => 'СсCc'),
  array('ID' => '20','DICTIONARY_ID' => '2','LETTER' => 'т','REPLACEMENT' => 'ТтTt'),
  array('ID' => '21','DICTIONARY_ID' => '2','LETTER' => 'у','REPLACEMENT' => 'УуUu'),
  array('ID' => '22','DICTIONARY_ID' => '2','LETTER' => 'ф','REPLACEMENT' => 'ФфFf'),
  array('ID' => '23','DICTIONARY_ID' => '2','LETTER' => 'х','REPLACEMENT' => 'ХхXx'),
  array('ID' => '24','DICTIONARY_ID' => '2','LETTER' => 'ц','REPLACEMENT' => 'ЦцCc'),
  array('ID' => '25','DICTIONARY_ID' => '2','LETTER' => 'ч','REPLACEMENT' => 'Чч'),
  array('ID' => '26','DICTIONARY_ID' => '2','LETTER' => 'ш','REPLACEMENT' => 'Шш'),
  array('ID' => '27','DICTIONARY_ID' => '2','LETTER' => 'щ','REPLACEMENT' => 'Щщ'),
  array('ID' => '28','DICTIONARY_ID' => '2','LETTER' => 'ь','REPLACEMENT' => 'ЪъЬь"\','),
  array('ID' => '29','DICTIONARY_ID' => '2','LETTER' => 'ы','REPLACEMENT' => 'Ыы'),
  array('ID' => '30','DICTIONARY_ID' => '2','LETTER' => 'ъ','REPLACEMENT' => 'ЪъЬь"\','),
  array('ID' => '31','DICTIONARY_ID' => '2','LETTER' => 'э','REPLACEMENT' => 'Ээ'),
  array('ID' => '32','DICTIONARY_ID' => '2','LETTER' => 'ю','REPLACEMENT' => 'Юю, [Йй]+[Оо]+'),
  array('ID' => '33','DICTIONARY_ID' => '2','LETTER' => 'я','REPLACEMENT' => 'Яя'),
  array('ID' => '34','DICTIONARY_ID' => '2','LETTER' => '%','REPLACEMENT' => '[Цц]+([Аа]+|[Оо]+), [Тт]+([Ьь]+|)[Сс]+[Яя]+'),
  array('ID' => '35','DICTIONARY_ID' => '2','LETTER' => '^','REPLACEMENT' => ',ВвЗзСс,ВвЫы,ДдОо,ЗзАа,ИиЗзСс,НнАа,НнЕе,ОоТт,([Пп]*[Ее]+[Рр]+[Ее]+)'),
  array('ID' => '36','DICTIONARY_ID' => '2','LETTER' => 'тся','REPLACEMENT' => '%'),
  array('ID' => '37','DICTIONARY_ID' => '2','LETTER' => 'ться','REPLACEMENT' => '%')
);

/* `rimstudio_db`.`b_forum_message` */
$b_forum_message = array(
);

/* `rimstudio_db`.`b_forum_perms` */
$b_forum_perms = array(
);

/* `rimstudio_db`.`b_forum_pm_folder` */
$b_forum_pm_folder = array(
  array('ID' => '1','TITLE' => 'SYSTEM_FOLDER_1','USER_ID' => '0','SORT' => '0'),
  array('ID' => '2','TITLE' => 'SYSTEM_FOLDER_2','USER_ID' => '0','SORT' => '0'),
  array('ID' => '3','TITLE' => 'SYSTEM_FOLDER_3','USER_ID' => '0','SORT' => '0'),
  array('ID' => '4','TITLE' => 'SYSTEM_FOLDER_4','USER_ID' => '0','SORT' => '0')
);

/* `rimstudio_db`.`b_forum_points` */
$b_forum_points = array(
);

/* `rimstudio_db`.`b_forum_points2post` */
$b_forum_points2post = array(
);

/* `rimstudio_db`.`b_forum_points_lang` */
$b_forum_points_lang = array(
);

/* `rimstudio_db`.`b_forum_private_message` */
$b_forum_private_message = array(
);

/* `rimstudio_db`.`b_forum_rank` */
$b_forum_rank = array(
);

/* `rimstudio_db`.`b_forum_rank_lang` */
$b_forum_rank_lang = array(
);

/* `rimstudio_db`.`b_forum_service_deleted_message` */
$b_forum_service_deleted_message = array(
);

/* `rimstudio_db`.`b_forum_service_statistic_queue` */
$b_forum_service_statistic_queue = array(
);

/* `rimstudio_db`.`b_forum_stat` */
$b_forum_stat = array(
);

/* `rimstudio_db`.`b_forum_subscribe` */
$b_forum_subscribe = array(
);

/* `rimstudio_db`.`b_forum_topic` */
$b_forum_topic = array(
);

/* `rimstudio_db`.`b_forum_user` */
$b_forum_user = array(
);

/* `rimstudio_db`.`b_forum_user_forum` */
$b_forum_user_forum = array(
);

/* `rimstudio_db`.`b_forum_user_points` */
$b_forum_user_points = array(
);

/* `rimstudio_db`.`b_forum_user_topic` */
$b_forum_user_topic = array(
);

/* `rimstudio_db`.`b_geoip_handlers` */
$b_geoip_handlers = array(
  array('ID' => '1','SORT' => '100','ACTIVE' => 'N','CLASS_NAME' => '\\Bitrix\\Main\\Service\\GeoIp\\MaxMind','CONFIG' => NULL),
  array('ID' => '2','SORT' => '110','ACTIVE' => 'Y','CLASS_NAME' => '\\Bitrix\\Main\\Service\\GeoIp\\SypexGeo','CONFIG' => NULL),
  array('ID' => '3','SORT' => '80','ACTIVE' => 'Y','CLASS_NAME' => '\\Bitrix\\Main\\Service\\GeoIp\\GeoIP2','CONFIG' => NULL)
);

/* `rimstudio_db`.`b_geoname` */
$b_geoname = array(
);

/* `rimstudio_db`.`b_group` */
$b_group = array(
  array('ID' => '1','TIMESTAMP_X' => NULL,'ACTIVE' => 'Y','C_SORT' => '1','ANONYMOUS' => 'N','IS_SYSTEM' => 'Y','NAME' => 'Администраторы','DESCRIPTION' => 'Полный доступ к управлению сайтом.','SECURITY_POLICY' => NULL,'STRING_ID' => NULL),
  array('ID' => '2','TIMESTAMP_X' => NULL,'ACTIVE' => 'Y','C_SORT' => '2','ANONYMOUS' => 'Y','IS_SYSTEM' => 'Y','NAME' => 'Все пользователи (в том числе неавторизованные)','DESCRIPTION' => 'Все пользователи, включая неавторизованных.','SECURITY_POLICY' => NULL,'STRING_ID' => NULL),
  array('ID' => '3','TIMESTAMP_X' => NULL,'ACTIVE' => 'Y','C_SORT' => '3','ANONYMOUS' => 'N','IS_SYSTEM' => 'Y','NAME' => 'Пользователи, имеющие право голосовать за рейтинг','DESCRIPTION' => 'В эту группу пользователи добавляются автоматически.','SECURITY_POLICY' => NULL,'STRING_ID' => 'RATING_VOTE'),
  array('ID' => '4','TIMESTAMP_X' => NULL,'ACTIVE' => 'Y','C_SORT' => '4','ANONYMOUS' => 'N','IS_SYSTEM' => 'Y','NAME' => 'Пользователи имеющие право голосовать за авторитет','DESCRIPTION' => 'В эту группу пользователи добавляются автоматически.','SECURITY_POLICY' => NULL,'STRING_ID' => 'RATING_VOTE_AUTHORITY')
);

/* `rimstudio_db`.`b_group_collection_task` */
$b_group_collection_task = array(
);

/* `rimstudio_db`.`b_group_subordinate` */
$b_group_subordinate = array(
);

/* `rimstudio_db`.`b_group_task` */
$b_group_task = array(
);

/* `rimstudio_db`.`b_hlblock_entity` */
$b_hlblock_entity = array(
);

/* `rimstudio_db`.`b_hlblock_entity_lang` */
$b_hlblock_entity_lang = array(
);

/* `rimstudio_db`.`b_hlblock_entity_rights` */
$b_hlblock_entity_rights = array(
);

/* `rimstudio_db`.`b_hot_keys` */
$b_hot_keys = array(
  array('ID' => '1','KEYS_STRING' => 'Ctrl+Alt+85','CODE_ID' => '139','USER_ID' => '0'),
  array('ID' => '2','KEYS_STRING' => 'Ctrl+Alt+80','CODE_ID' => '17','USER_ID' => '0'),
  array('ID' => '3','KEYS_STRING' => 'Ctrl+Alt+70','CODE_ID' => '120','USER_ID' => '0'),
  array('ID' => '4','KEYS_STRING' => 'Ctrl+Alt+68','CODE_ID' => '117','USER_ID' => '0'),
  array('ID' => '5','KEYS_STRING' => 'Ctrl+Alt+81','CODE_ID' => '3','USER_ID' => '0'),
  array('ID' => '6','KEYS_STRING' => 'Ctrl+Alt+75','CODE_ID' => '106','USER_ID' => '0'),
  array('ID' => '7','KEYS_STRING' => 'Ctrl+Alt+79','CODE_ID' => '133','USER_ID' => '0'),
  array('ID' => '8','KEYS_STRING' => 'Ctrl+Alt+70','CODE_ID' => '121','USER_ID' => '0'),
  array('ID' => '9','KEYS_STRING' => 'Ctrl+Alt+69','CODE_ID' => '118','USER_ID' => '0'),
  array('ID' => '10','KEYS_STRING' => 'Ctrl+Shift+83','CODE_ID' => '87','USER_ID' => '0'),
  array('ID' => '11','KEYS_STRING' => 'Ctrl+Shift+88','CODE_ID' => '88','USER_ID' => '0'),
  array('ID' => '12','KEYS_STRING' => 'Ctrl+Shift+76','CODE_ID' => '89','USER_ID' => '0'),
  array('ID' => '13','KEYS_STRING' => 'Ctrl+Alt+85','CODE_ID' => '139','USER_ID' => '1'),
  array('ID' => '14','KEYS_STRING' => 'Ctrl+Alt+80','CODE_ID' => '17','USER_ID' => '1'),
  array('ID' => '15','KEYS_STRING' => 'Ctrl+Alt+70','CODE_ID' => '120','USER_ID' => '1'),
  array('ID' => '16','KEYS_STRING' => 'Ctrl+Alt+68','CODE_ID' => '117','USER_ID' => '1'),
  array('ID' => '17','KEYS_STRING' => 'Ctrl+Alt+81','CODE_ID' => '3','USER_ID' => '1'),
  array('ID' => '18','KEYS_STRING' => 'Ctrl+Alt+75','CODE_ID' => '106','USER_ID' => '1'),
  array('ID' => '19','KEYS_STRING' => 'Ctrl+Alt+79','CODE_ID' => '133','USER_ID' => '1'),
  array('ID' => '20','KEYS_STRING' => 'Ctrl+Alt+70','CODE_ID' => '121','USER_ID' => '1'),
  array('ID' => '21','KEYS_STRING' => 'Ctrl+Alt+69','CODE_ID' => '118','USER_ID' => '1'),
  array('ID' => '22','KEYS_STRING' => 'Ctrl+Shift+83','CODE_ID' => '87','USER_ID' => '1'),
  array('ID' => '23','KEYS_STRING' => 'Ctrl+Shift+88','CODE_ID' => '88','USER_ID' => '1'),
  array('ID' => '24','KEYS_STRING' => 'Ctrl+Shift+76','CODE_ID' => '89','USER_ID' => '1')
);

/* `rimstudio_db`.`b_hot_keys_code` */
$b_hot_keys_code = array(
  array('ID' => '3','CLASS_NAME' => 'CAdminTabControl','CODE' => 'NextTab();','NAME' => 'HK_DB_CADMINTC','COMMENTS' => 'HK_DB_CADMINTC_C','TITLE_OBJ' => 'tab-container','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '5','CLASS_NAME' => 'btn_new','CODE' => 'var d=BX (\'btn_new\'); if (d) location.href = d.href;','NAME' => 'HK_DB_BUT_ADD','COMMENTS' => 'HK_DB_BUT_ADD_C','TITLE_OBJ' => 'btn_new','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '6','CLASS_NAME' => 'btn_excel','CODE' => 'var d=BX(\'btn_excel\'); if (d) location.href = d.href;','NAME' => 'HK_DB_BUT_EXL','COMMENTS' => 'HK_DB_BUT_EXL_C','TITLE_OBJ' => 'btn_excel','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '7','CLASS_NAME' => 'btn_settings','CODE' => 'var d=BX(\'btn_settings\'); if (d) location.href = d.href;','NAME' => 'HK_DB_BUT_OPT','COMMENTS' => 'HK_DB_BUT_OPT_C','TITLE_OBJ' => 'btn_settings','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '8','CLASS_NAME' => 'btn_list','CODE' => 'var d=BX(\'btn_list\'); if (d) location.href = d.href;','NAME' => 'HK_DB_BUT_LST','COMMENTS' => 'HK_DB_BUT_LST_C','TITLE_OBJ' => 'btn_list','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '9','CLASS_NAME' => 'Edit_Save_Button','CODE' => 'var d=BX .findChild(document, {attribute: {\'name\': \'save\'}}, true );  if (d) d.click();','NAME' => 'HK_DB_BUT_SAVE','COMMENTS' => 'HK_DB_BUT_SAVE_C','TITLE_OBJ' => 'Edit_Save_Button','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '10','CLASS_NAME' => 'btn_delete','CODE' => 'var d=BX(\'btn_delete\'); if (d) location.href = d.href;','NAME' => 'HK_DB_BUT_DEL','COMMENTS' => 'HK_DB_BUT_DEL_C','TITLE_OBJ' => 'btn_delete','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '12','CLASS_NAME' => 'CAdminFilter','CODE' => 'var d=BX .findChild(document, {attribute: {\'name\': \'find\'}}, true ); if (d) d.focus();','NAME' => 'HK_DB_FLT_FND','COMMENTS' => 'HK_DB_FLT_FND_C','TITLE_OBJ' => 'find','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '13','CLASS_NAME' => 'CAdminFilter','CODE' => 'var d=BX .findChild(document, {attribute: {\'name\': \'set_filter\'}}, true );  if (d) d.click();','NAME' => 'HK_DB_FLT_BUT_F','COMMENTS' => 'HK_DB_FLT_BUT_F_C','TITLE_OBJ' => 'set_filter','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '14','CLASS_NAME' => 'CAdminFilter','CODE' => 'var d=BX .findChild(document, {attribute: {\'name\': \'del_filter\'}}, true );  if (d) d.click();','NAME' => 'HK_DB_FLT_BUT_CNL','COMMENTS' => 'HK_DB_FLT_BUT_CNL_C','TITLE_OBJ' => 'del_filter','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '15','CLASS_NAME' => 'bx-panel-admin-button-help-icon-id','CODE' => 'var d=BX(\'bx-panel-admin-button-help-icon-id\'); if (d) location.href = d.href;','NAME' => 'HK_DB_BUT_HLP','COMMENTS' => 'HK_DB_BUT_HLP_C','TITLE_OBJ' => 'bx-panel-admin-button-help-icon-id','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '17','CLASS_NAME' => 'Global','CODE' => 'BXHotKeys.ShowSettings();','NAME' => 'HK_DB_SHW_L','COMMENTS' => 'HK_DB_SHW_L_C','TITLE_OBJ' => 'bx-panel-hotkeys','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '19','CLASS_NAME' => 'Edit_Apply_Button','CODE' => 'var d=BX .findChild(document, {attribute: {\'name\': \'apply\'}}, true );  if (d) d.click();','NAME' => 'HK_DB_BUT_APPL','COMMENTS' => 'HK_DB_BUT_APPL_C','TITLE_OBJ' => 'Edit_Apply_Button','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '20','CLASS_NAME' => 'Edit_Cancel_Button','CODE' => 'var d=BX .findChild(document, {attribute: {\'name\': \'cancel\'}}, true );  if (d) d.click();','NAME' => 'HK_DB_BUT_CANCEL','COMMENTS' => 'HK_DB_BUT_CANCEL_C','TITLE_OBJ' => 'Edit_Cancel_Button','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '54','CLASS_NAME' => 'top_panel_org_fav','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_org_fav','URL' => NULL,'IS_CUSTOM' => '0'),
  array('ID' => '55','CLASS_NAME' => 'top_panel_module_settings','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_module_settings','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '56','CLASS_NAME' => 'top_panel_interface_settings','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_interface_settings','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '57','CLASS_NAME' => 'top_panel_help','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_help','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '58','CLASS_NAME' => 'top_panel_bizproc_tasks','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_bizproc_tasks','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '59','CLASS_NAME' => 'top_panel_add_fav','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_add_fav','URL' => NULL,'IS_CUSTOM' => '0'),
  array('ID' => '60','CLASS_NAME' => 'top_panel_create_page','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_create_page','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '62','CLASS_NAME' => 'top_panel_create_folder','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_create_folder','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '63','CLASS_NAME' => 'top_panel_edit_page','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_edit_page','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '64','CLASS_NAME' => 'top_panel_page_prop','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_page_prop','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '65','CLASS_NAME' => 'top_panel_edit_page_html','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_edit_page_html','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '67','CLASS_NAME' => 'top_panel_edit_page_php','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_edit_page_php','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '68','CLASS_NAME' => 'top_panel_del_page','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_del_page','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '69','CLASS_NAME' => 'top_panel_folder_prop','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_folder_prop','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '70','CLASS_NAME' => 'top_panel_access_folder_new','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_access_folder_new','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '71','CLASS_NAME' => 'main_top_panel_struct_panel','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'main_top_panel_struct_panel','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '72','CLASS_NAME' => 'top_panel_cache_page','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_cache_page','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '73','CLASS_NAME' => 'top_panel_cache_comp','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_cache_comp','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '74','CLASS_NAME' => 'top_panel_cache_not','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_cache_not','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '75','CLASS_NAME' => 'top_panel_edit_mode','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_edit_mode','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '76','CLASS_NAME' => 'top_panel_templ_site_css','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_templ_site_css','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '77','CLASS_NAME' => 'top_panel_templ_templ_css','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_templ_templ_css','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '78','CLASS_NAME' => 'top_panel_templ_site','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_templ_site','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '81','CLASS_NAME' => 'top_panel_debug_time','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_debug_time','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '82','CLASS_NAME' => 'top_panel_debug_incl','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_debug_incl','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '83','CLASS_NAME' => 'top_panel_debug_sql','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_debug_sql','URL' => NULL,'IS_CUSTOM' => '0'),
  array('ID' => '84','CLASS_NAME' => 'top_panel_debug_compr','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_debug_compr','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '85','CLASS_NAME' => 'MTP_SHORT_URI1','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'MTP_SHORT_URI1','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '86','CLASS_NAME' => 'MTP_SHORT_URI_LIST','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'MTP_SHORT_URI_LIST','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '87','CLASS_NAME' => 'FMST_PANEL_STICKER_ADD','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'FMST_PANEL_STICKER_ADD','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '88','CLASS_NAME' => 'FMST_PANEL_STICKERS_SHOW','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'FMST_PANEL_STICKERS_SHOW','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '89','CLASS_NAME' => 'FMST_PANEL_CUR_STICKER_LIST','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'FMST_PANEL_CUR_STICKER_LIST','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '90','CLASS_NAME' => 'FMST_PANEL_ALL_STICKER_LIST','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'FMST_PANEL_ALL_STICKER_LIST','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '91','CLASS_NAME' => 'top_panel_menu','CODE' => 'var d=BX("bx-panel-menu"); if (d) d.click();','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'bx-panel-menu','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '92','CLASS_NAME' => 'top_panel_admin','CODE' => 'var d=BX(\'bx-panel-admin-tab\'); if (d) location.href = d.href;','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'bx-panel-admin-tab','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '93','CLASS_NAME' => 'admin_panel_site','CODE' => 'var d=BX(\'bx-panel-view-tab\'); if (d) location.href = d.href;','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'bx-panel-view-tab','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '94','CLASS_NAME' => 'admin_panel_admin','CODE' => 'var d=BX(\'bx-panel-admin-tab\'); if (d) location.href = d.href;','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'bx-panel-admin-tab','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '96','CLASS_NAME' => 'top_panel_folder_prop_new','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_folder_prop_new','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '97','CLASS_NAME' => 'main_top_panel_structure','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'main_top_panel_structure','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '98','CLASS_NAME' => 'top_panel_clear_cache','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_clear_cache','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '99','CLASS_NAME' => 'top_panel_templ','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_templ','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '100','CLASS_NAME' => 'top_panel_debug','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_debug','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '101','CLASS_NAME' => 'MTP_SHORT_URI','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'MTP_SHORT_URI','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '102','CLASS_NAME' => 'FMST_PANEL_STICKERS','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'FMST_PANEL_STICKERS','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '103','CLASS_NAME' => 'top_panel_settings','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_settings','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '104','CLASS_NAME' => 'top_panel_fav','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_fav','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '106','CLASS_NAME' => 'Global','CODE' => 'location.href=\'/bitrix/admin/hot_keys_list.php?lang=ru\';','NAME' => 'HK_DB_SHW_HK','COMMENTS' => '','TITLE_OBJ' => '','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '107','CLASS_NAME' => 'top_panel_edit_new','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_edit_new','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '108','CLASS_NAME' => 'FLOW_PANEL_CREATE_WITH_WF','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'FLOW_PANEL_CREATE_WITH_WF','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '109','CLASS_NAME' => 'FLOW_PANEL_EDIT_WITH_WF','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'FLOW_PANEL_EDIT_WITH_WF','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '110','CLASS_NAME' => 'FLOW_PANEL_HISTORY','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'FLOW_PANEL_HISTORY','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '111','CLASS_NAME' => 'top_panel_create_new','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_create_new','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '112','CLASS_NAME' => 'top_panel_create_folder_new','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'top_panel_create_folder_new','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '116','CLASS_NAME' => 'bx-panel-toggle','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'bx-panel-toggle','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '117','CLASS_NAME' => 'bx-panel-small-toggle','CODE' => '','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'bx-panel-small-toggle','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '118','CLASS_NAME' => 'bx-panel-expander','CODE' => 'var d=BX(\'bx-panel-expander\'); if (d) BX.fireEvent(d, \'click\');','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'bx-panel-expander','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '119','CLASS_NAME' => 'bx-panel-hider','CODE' => 'var d=BX(\'bx-panel-hider\'); if (d) d.click();','NAME' => '-=AUTONAME=-','COMMENTS' => NULL,'TITLE_OBJ' => 'bx-panel-hider','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '120','CLASS_NAME' => 'search-textbox-input','CODE' => 'var d=BX(\'search-textbox-input\'); if (d) { d.click(); d.focus();}','NAME' => '-=AUTONAME=-','COMMENTS' => '','TITLE_OBJ' => 'search','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '121','CLASS_NAME' => 'bx-search-input','CODE' => 'var d=BX(\'bx-search-input\'); if (d) { d.click(); d.focus(); }','NAME' => '-=AUTONAME=-','COMMENTS' => '','TITLE_OBJ' => 'bx-search-input','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '133','CLASS_NAME' => 'bx-panel-logout','CODE' => 'var d=BX(\'bx-panel-logout\'); if (d) location.href = d.href;','NAME' => '-=AUTONAME=-','COMMENTS' => '','TITLE_OBJ' => 'bx-panel-logout','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '135','CLASS_NAME' => 'CDialog','CODE' => 'var d=BX(\'cancel\'); if (d) d.click();','NAME' => 'HK_DB_D_CANCEL','COMMENTS' => '','TITLE_OBJ' => 'cancel','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '136','CLASS_NAME' => 'CDialog','CODE' => 'var d=BX(\'close\'); if (d) d.click();','NAME' => 'HK_DB_D_CLOSE','COMMENTS' => '','TITLE_OBJ' => 'close','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '137','CLASS_NAME' => 'CDialog','CODE' => 'var d=BX(\'savebtn\'); if (d) d.click();','NAME' => 'HK_DB_D_SAVE','COMMENTS' => '','TITLE_OBJ' => 'savebtn','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '138','CLASS_NAME' => 'CDialog','CODE' => 'var d=BX(\'btn_popup_save\'); if (d) d.click();','NAME' => 'HK_DB_D_EDIT_SAVE','COMMENTS' => '','TITLE_OBJ' => 'btn_popup_save','URL' => '','IS_CUSTOM' => '0'),
  array('ID' => '139','CLASS_NAME' => 'Global','CODE' => 'location.href=\'/bitrix/admin/user_admin.php?lang=\'+phpVars.LANGUAGE_ID;','NAME' => 'HK_DB_SHW_U','COMMENTS' => '','TITLE_OBJ' => '','URL' => '','IS_CUSTOM' => '0')
);

/* `rimstudio_db`.`b_iblock` */
$b_iblock = array(
  array('ID' => '3','TIMESTAMP_X' => '2023-02-18 16:05:19','IBLOCK_TYPE_ID' => 'Content','LID' => 's1','CODE' => 'portfolio','API_CODE' => NULL,'REST_ON' => 'N','NAME' => 'Портфолио на главной странице','ACTIVE' => 'Y','SORT' => '500','LIST_PAGE_URL' => '#SITE_DIR#/Content/index.php?ID=#IBLOCK_ID#','DETAIL_PAGE_URL' => '#SITE_DIR#/Content/detail.php?ID=#ELEMENT_ID#','SECTION_PAGE_URL' => '#SITE_DIR#/Content/list.php?SECTION_ID=#SECTION_ID#','CANONICAL_PAGE_URL' => '','PICTURE' => NULL,'DESCRIPTION' => '','DESCRIPTION_TYPE' => 'text','RSS_TTL' => '24','RSS_ACTIVE' => 'Y','RSS_FILE_ACTIVE' => 'N','RSS_FILE_LIMIT' => NULL,'RSS_FILE_DAYS' => NULL,'RSS_YANDEX_ACTIVE' => 'N','XML_ID' => NULL,'TMP_ID' => NULL,'INDEX_ELEMENT' => 'Y','INDEX_SECTION' => 'Y','WORKFLOW' => 'N','BIZPROC' => 'N','SECTION_CHOOSER' => 'L','LIST_MODE' => 'C','RIGHTS_MODE' => 'S','SECTION_PROPERTY' => 'N','PROPERTY_INDEX' => 'N','VERSION' => '1','LAST_CONV_ELEMENT' => '0','SOCNET_GROUP_ID' => NULL,'EDIT_FILE_BEFORE' => '','EDIT_FILE_AFTER' => '','SECTIONS_NAME' => 'Разделы','SECTION_NAME' => 'Раздел','ELEMENTS_NAME' => 'Элементы','ELEMENT_NAME' => 'Элемент')
);

/* `rimstudio_db`.`b_iblock_cache` */
$b_iblock_cache = array(
);

/* `rimstudio_db`.`b_iblock_element` */
$b_iblock_element = array(
  array('ID' => '2','TIMESTAMP_X' => '2023-02-18 17:51:43','MODIFIED_BY' => '1','DATE_CREATE' => '2023-02-18 16:07:34','CREATED_BY' => '1','IBLOCK_ID' => '3','IBLOCK_SECTION_ID' => NULL,'ACTIVE' => 'Y','ACTIVE_FROM' => NULL,'ACTIVE_TO' => NULL,'SORT' => '500','NAME' => 'KROK','PREVIEW_PICTURE' => '5','PREVIEW_TEXT' => 'KROK','PREVIEW_TEXT_TYPE' => 'text','DETAIL_PICTURE' => NULL,'DETAIL_TEXT' => '','DETAIL_TEXT_TYPE' => 'text','SEARCHABLE_CONTENT' => 'KROK
KROK
','WF_STATUS_ID' => '1','WF_PARENT_ELEMENT_ID' => NULL,'WF_NEW' => NULL,'WF_LOCKED_BY' => NULL,'WF_DATE_LOCK' => NULL,'WF_COMMENTS' => NULL,'IN_SECTIONS' => 'N','XML_ID' => '2','CODE' => 'krok','TAGS' => '','TMP_ID' => '0','WF_LAST_HISTORY_ID' => NULL,'SHOW_COUNTER' => NULL,'SHOW_COUNTER_START' => NULL),
  array('ID' => '3','TIMESTAMP_X' => '2023-02-18 17:51:21','MODIFIED_BY' => '1','DATE_CREATE' => '2023-02-18 17:51:21','CREATED_BY' => '1','IBLOCK_ID' => '3','IBLOCK_SECTION_ID' => NULL,'ACTIVE' => 'Y','ACTIVE_FROM' => NULL,'ACTIVE_TO' => NULL,'SORT' => '500','NAME' => 'SHURA BIG','PREVIEW_PICTURE' => '9','PREVIEW_TEXT' => 'SHURA BIG','PREVIEW_TEXT_TYPE' => 'text','DETAIL_PICTURE' => NULL,'DETAIL_TEXT' => '','DETAIL_TEXT_TYPE' => 'text','SEARCHABLE_CONTENT' => 'SHURA BIG
SHURA BIG
','WF_STATUS_ID' => '1','WF_PARENT_ELEMENT_ID' => NULL,'WF_NEW' => NULL,'WF_LOCKED_BY' => NULL,'WF_DATE_LOCK' => NULL,'WF_COMMENTS' => NULL,'IN_SECTIONS' => 'N','XML_ID' => '3','CODE' => 'shura-big','TAGS' => '','TMP_ID' => '0','WF_LAST_HISTORY_ID' => NULL,'SHOW_COUNTER' => NULL,'SHOW_COUNTER_START' => NULL),
  array('ID' => '4','TIMESTAMP_X' => '2023-02-19 06:54:05','MODIFIED_BY' => '1','DATE_CREATE' => '2023-02-19 06:54:05','CREATED_BY' => '1','IBLOCK_ID' => '3','IBLOCK_SECTION_ID' => NULL,'ACTIVE' => 'Y','ACTIVE_FROM' => NULL,'ACTIVE_TO' => NULL,'SORT' => '500','NAME' => 'ODA','PREVIEW_PICTURE' => '14','PREVIEW_TEXT' => 'ODA','PREVIEW_TEXT_TYPE' => 'text','DETAIL_PICTURE' => NULL,'DETAIL_TEXT' => '','DETAIL_TEXT_TYPE' => 'text','SEARCHABLE_CONTENT' => 'ODA
ODA
','WF_STATUS_ID' => '1','WF_PARENT_ELEMENT_ID' => NULL,'WF_NEW' => NULL,'WF_LOCKED_BY' => NULL,'WF_DATE_LOCK' => NULL,'WF_COMMENTS' => NULL,'IN_SECTIONS' => 'N','XML_ID' => '4','CODE' => 'oda','TAGS' => '','TMP_ID' => '0','WF_LAST_HISTORY_ID' => NULL,'SHOW_COUNTER' => NULL,'SHOW_COUNTER_START' => NULL),
  array('ID' => '5','TIMESTAMP_X' => '2023-02-19 06:59:46','MODIFIED_BY' => '1','DATE_CREATE' => '2023-02-19 06:59:46','CREATED_BY' => '1','IBLOCK_ID' => '3','IBLOCK_SECTION_ID' => NULL,'ACTIVE' => 'Y','ACTIVE_FROM' => NULL,'ACTIVE_TO' => NULL,'SORT' => '500','NAME' => 'GRODEKOV','PREVIEW_PICTURE' => '16','PREVIEW_TEXT' => 'GRODEKOV','PREVIEW_TEXT_TYPE' => 'text','DETAIL_PICTURE' => NULL,'DETAIL_TEXT' => '','DETAIL_TEXT_TYPE' => 'text','SEARCHABLE_CONTENT' => 'GRODEKOV
GRODEKOV
','WF_STATUS_ID' => '1','WF_PARENT_ELEMENT_ID' => NULL,'WF_NEW' => NULL,'WF_LOCKED_BY' => NULL,'WF_DATE_LOCK' => NULL,'WF_COMMENTS' => NULL,'IN_SECTIONS' => 'N','XML_ID' => '5','CODE' => 'grodekov','TAGS' => '','TMP_ID' => '0','WF_LAST_HISTORY_ID' => NULL,'SHOW_COUNTER' => NULL,'SHOW_COUNTER_START' => NULL),
  array('ID' => '6','TIMESTAMP_X' => '2023-02-19 07:01:08','MODIFIED_BY' => '1','DATE_CREATE' => '2023-02-19 07:01:08','CREATED_BY' => '1','IBLOCK_ID' => '3','IBLOCK_SECTION_ID' => NULL,'ACTIVE' => 'Y','ACTIVE_FROM' => NULL,'ACTIVE_TO' => NULL,'SORT' => '500','NAME' => 'PASTA NA BARE','PREVIEW_PICTURE' => '21','PREVIEW_TEXT' => 'PASTA NA BARE','PREVIEW_TEXT_TYPE' => 'text','DETAIL_PICTURE' => NULL,'DETAIL_TEXT' => '','DETAIL_TEXT_TYPE' => 'text','SEARCHABLE_CONTENT' => 'PASTA NA BARE
PASTA NA BARE
','WF_STATUS_ID' => '1','WF_PARENT_ELEMENT_ID' => NULL,'WF_NEW' => NULL,'WF_LOCKED_BY' => NULL,'WF_DATE_LOCK' => NULL,'WF_COMMENTS' => NULL,'IN_SECTIONS' => 'N','XML_ID' => '6','CODE' => 'pasta-na-bare','TAGS' => '','TMP_ID' => '0','WF_LAST_HISTORY_ID' => NULL,'SHOW_COUNTER' => NULL,'SHOW_COUNTER_START' => NULL),
  array('ID' => '7','TIMESTAMP_X' => '2023-02-19 07:03:03','MODIFIED_BY' => '1','DATE_CREATE' => '2023-02-19 07:03:03','CREATED_BY' => '1','IBLOCK_ID' => '3','IBLOCK_SECTION_ID' => NULL,'ACTIVE' => 'Y','ACTIVE_FROM' => NULL,'ACTIVE_TO' => NULL,'SORT' => '500','NAME' => 'AVRORA I LIS','PREVIEW_PICTURE' => '27','PREVIEW_TEXT' => 'AVRORA I LIS','PREVIEW_TEXT_TYPE' => 'text','DETAIL_PICTURE' => NULL,'DETAIL_TEXT' => '','DETAIL_TEXT_TYPE' => 'text','SEARCHABLE_CONTENT' => 'AVRORA I LIS
AVRORA I LIS
','WF_STATUS_ID' => '1','WF_PARENT_ELEMENT_ID' => NULL,'WF_NEW' => NULL,'WF_LOCKED_BY' => NULL,'WF_DATE_LOCK' => NULL,'WF_COMMENTS' => NULL,'IN_SECTIONS' => 'N','XML_ID' => '7','CODE' => 'avrora-i-lis','TAGS' => '','TMP_ID' => '0','WF_LAST_HISTORY_ID' => NULL,'SHOW_COUNTER' => NULL,'SHOW_COUNTER_START' => NULL),
  array('ID' => '8','TIMESTAMP_X' => '2023-02-19 07:04:47','MODIFIED_BY' => '1','DATE_CREATE' => '2023-02-19 07:04:47','CREATED_BY' => '1','IBLOCK_ID' => '3','IBLOCK_SECTION_ID' => NULL,'ACTIVE' => 'Y','ACTIVE_FROM' => NULL,'ACTIVE_TO' => NULL,'SORT' => '500','NAME' => 'OPTICA','PREVIEW_PICTURE' => '33','PREVIEW_TEXT' => 'OPTICA','PREVIEW_TEXT_TYPE' => 'text','DETAIL_PICTURE' => NULL,'DETAIL_TEXT' => '','DETAIL_TEXT_TYPE' => 'text','SEARCHABLE_CONTENT' => 'OPTICA
OPTICA
','WF_STATUS_ID' => '1','WF_PARENT_ELEMENT_ID' => NULL,'WF_NEW' => NULL,'WF_LOCKED_BY' => NULL,'WF_DATE_LOCK' => NULL,'WF_COMMENTS' => NULL,'IN_SECTIONS' => 'N','XML_ID' => '8','CODE' => 'optica','TAGS' => '','TMP_ID' => '0','WF_LAST_HISTORY_ID' => NULL,'SHOW_COUNTER' => NULL,'SHOW_COUNTER_START' => NULL),
  array('ID' => '9','TIMESTAMP_X' => '2023-02-19 07:05:37','MODIFIED_BY' => '1','DATE_CREATE' => '2023-02-19 07:05:37','CREATED_BY' => '1','IBLOCK_ID' => '3','IBLOCK_SECTION_ID' => NULL,'ACTIVE' => 'Y','ACTIVE_FROM' => NULL,'ACTIVE_TO' => NULL,'SORT' => '500','NAME' => 'KIT','PREVIEW_PICTURE' => '35','PREVIEW_TEXT' => 'KIT','PREVIEW_TEXT_TYPE' => 'text','DETAIL_PICTURE' => NULL,'DETAIL_TEXT' => '','DETAIL_TEXT_TYPE' => 'text','SEARCHABLE_CONTENT' => 'KIT
KIT
','WF_STATUS_ID' => '1','WF_PARENT_ELEMENT_ID' => NULL,'WF_NEW' => NULL,'WF_LOCKED_BY' => NULL,'WF_DATE_LOCK' => NULL,'WF_COMMENTS' => NULL,'IN_SECTIONS' => 'N','XML_ID' => '9','CODE' => 'kit','TAGS' => '','TMP_ID' => '0','WF_LAST_HISTORY_ID' => NULL,'SHOW_COUNTER' => NULL,'SHOW_COUNTER_START' => NULL),
  array('ID' => '10','TIMESTAMP_X' => '2023-02-19 07:06:14','MODIFIED_BY' => '1','DATE_CREATE' => '2023-02-19 07:06:14','CREATED_BY' => '1','IBLOCK_ID' => '3','IBLOCK_SECTION_ID' => NULL,'ACTIVE' => 'Y','ACTIVE_FROM' => NULL,'ACTIVE_TO' => NULL,'SORT' => '500','NAME' => ' Концепция «RED BIRD SQUARE»','PREVIEW_PICTURE' => '37','PREVIEW_TEXT' => 'Концепция «RED BIRD SQUARE»','PREVIEW_TEXT_TYPE' => 'text','DETAIL_PICTURE' => NULL,'DETAIL_TEXT' => '','DETAIL_TEXT_TYPE' => 'text','SEARCHABLE_CONTENT' => ' КОНЦЕПЦИЯ «RED BIRD SQUARE»
КОНЦЕПЦИЯ «RED BIRD SQUARE»
','WF_STATUS_ID' => '1','WF_PARENT_ELEMENT_ID' => NULL,'WF_NEW' => NULL,'WF_LOCKED_BY' => NULL,'WF_DATE_LOCK' => NULL,'WF_COMMENTS' => NULL,'IN_SECTIONS' => 'N','XML_ID' => '10','CODE' => 'kontseptsiya-red-bird-square','TAGS' => '','TMP_ID' => '0','WF_LAST_HISTORY_ID' => NULL,'SHOW_COUNTER' => NULL,'SHOW_COUNTER_START' => NULL)
);

/* `rimstudio_db`.`b_iblock_element_iprop` */
$b_iblock_element_iprop = array(
);

/* `rimstudio_db`.`b_iblock_element_lock` */
$b_iblock_element_lock = array(
);

/* `rimstudio_db`.`b_iblock_element_property` */
$b_iblock_element_property = array(
  array('ID' => '1','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '2','VALUE' => '6','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '6.0000','DESCRIPTION' => NULL),
  array('ID' => '2','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '2','VALUE' => '7','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '7.0000','DESCRIPTION' => NULL),
  array('ID' => '3','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '2','VALUE' => '8','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '8.0000','DESCRIPTION' => NULL),
  array('ID' => '4','IBLOCK_PROPERTY_ID' => '2','IBLOCK_ELEMENT_ID' => '2','VALUE' => 'Чистые цвета и разнообразие фактур в открытом,светлом пространстве.','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '0.0000','DESCRIPTION' => ''),
  array('ID' => '5','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '3','VALUE' => '10','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '10.0000','DESCRIPTION' => ''),
  array('ID' => '6','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '3','VALUE' => '11','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '11.0000','DESCRIPTION' => ''),
  array('ID' => '7','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '3','VALUE' => '12','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '12.0000','DESCRIPTION' => ''),
  array('ID' => '8','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '3','VALUE' => '13','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '13.0000','DESCRIPTION' => ''),
  array('ID' => '9','IBLOCK_PROPERTY_ID' => '2','IBLOCK_ELEMENT_ID' => '3','VALUE' => 'Три года назад, глубокой ночью, я придумывал символ нашей компании, своего рода, подпись любого нашего интерьера. Ранее мы часто использовали матрешку, как элемент дизайна, создавая светильники или мебель похожей формы. Мне показалось, что у этой всей известной скульптуры не достаточно выражен характер и настроение. И я подумал: »а почему у нее нет ног и рук, почему эта скульптура настолько безлика, почему у нее нет головного убора, традиционного, например кокошника». Идея не заставила себя долго ждать и в ту же ночь я создал серию из четырех керамических скульптур различного характера, и расцветки. Я назвал эту скульптуру SHURA и в ней удалось совместить историю, современный дизайн и ироничные образы. Сегодня минуя различные перевоплощения, виды раскрасок и материалов, четыре с половиной метра расположена в ТЦ BROSKO MALL.','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '0.0000','DESCRIPTION' => ''),
  array('ID' => '10','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '4','VALUE' => '15','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '15.0000','DESCRIPTION' => ''),
  array('ID' => '11','IBLOCK_PROPERTY_ID' => '2','IBLOCK_ELEMENT_ID' => '4','VALUE' => 'Мы создаем пространства, маленькие миры. Мы создаем настроение, атмосферу и музыку интерьера.Контраст новых эмоций и материалов в проекте ODA от нашей студии.','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '0.0000','DESCRIPTION' => ''),
  array('ID' => '12','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '5','VALUE' => '17','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '17.0000','DESCRIPTION' => ''),
  array('ID' => '13','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '5','VALUE' => '18','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '18.0000','DESCRIPTION' => ''),
  array('ID' => '14','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '5','VALUE' => '19','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '19.0000','DESCRIPTION' => ''),
  array('ID' => '15','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '5','VALUE' => '20','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '20.0000','DESCRIPTION' => ''),
  array('ID' => '16','IBLOCK_PROPERTY_ID' => '2','IBLOCK_ELEMENT_ID' => '5','VALUE' => 'Проект GRODEKOV г. Хабаровск передает атмосферу домашнего тепла и уюта, сочетая в себе стиль и комфорт.','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '0.0000','DESCRIPTION' => ''),
  array('ID' => '17','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '6','VALUE' => '22','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '22.0000','DESCRIPTION' => ''),
  array('ID' => '18','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '6','VALUE' => '23','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '23.0000','DESCRIPTION' => ''),
  array('ID' => '19','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '6','VALUE' => '24','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '24.0000','DESCRIPTION' => ''),
  array('ID' => '20','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '6','VALUE' => '25','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '25.0000','DESCRIPTION' => ''),
  array('ID' => '21','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '6','VALUE' => '26','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '26.0000','DESCRIPTION' => ''),
  array('ID' => '22','IBLOCK_PROPERTY_ID' => '2','IBLOCK_ELEMENT_ID' => '6','VALUE' => 'Новый концептуальный проект от нашей студии. Мы создаем пространства, маленькие миры. Мы создаем настроение, атмосферу и »музыку» интерьера.','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '0.0000','DESCRIPTION' => ''),
  array('ID' => '23','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '7','VALUE' => '28','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '28.0000','DESCRIPTION' => ''),
  array('ID' => '24','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '7','VALUE' => '29','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '29.0000','DESCRIPTION' => ''),
  array('ID' => '25','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '7','VALUE' => '30','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '30.0000','DESCRIPTION' => ''),
  array('ID' => '26','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '7','VALUE' => '31','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '31.0000','DESCRIPTION' => ''),
  array('ID' => '27','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '7','VALUE' => '32','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '32.0000','DESCRIPTION' => ''),
  array('ID' => '28','IBLOCK_PROPERTY_ID' => '2','IBLOCK_ELEMENT_ID' => '7','VALUE' => 'Атмосфера, магия, чувства, стиль — AVRORA I LIS. Реализованный рестобар от студии дизайна GORKOVENKO.','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '0.0000','DESCRIPTION' => ''),
  array('ID' => '29','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '8','VALUE' => '34','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '34.0000','DESCRIPTION' => ''),
  array('ID' => '30','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '9','VALUE' => '36','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '36.0000','DESCRIPTION' => ''),
  array('ID' => '31','IBLOCK_PROPERTY_ID' => '1','IBLOCK_ELEMENT_ID' => '10','VALUE' => '38','VALUE_TYPE' => 'text','VALUE_ENUM' => NULL,'VALUE_NUM' => '38.0000','DESCRIPTION' => '')
);

/* `rimstudio_db`.`b_iblock_element_right` */
$b_iblock_element_right = array(
);

/* `rimstudio_db`.`b_iblock_fields` */
$b_iblock_fields = array(
  array('IBLOCK_ID' => '3','FIELD_ID' => 'ACTIVE','IS_REQUIRED' => 'Y','DEFAULT_VALUE' => 'Y'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'ACTIVE_FROM','IS_REQUIRED' => 'N','DEFAULT_VALUE' => ''),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'ACTIVE_TO','IS_REQUIRED' => 'N','DEFAULT_VALUE' => ''),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'CODE','IS_REQUIRED' => 'Y','DEFAULT_VALUE' => 'a:8:{s:6:"UNIQUE";s:1:"Y";s:15:"TRANSLITERATION";s:1:"Y";s:9:"TRANS_LEN";i:100;s:10:"TRANS_CASE";s:1:"L";s:11:"TRANS_SPACE";s:1:"-";s:11:"TRANS_OTHER";s:1:"-";s:9:"TRANS_EAT";s:1:"Y";s:10:"USE_GOOGLE";s:1:"N";}'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'DETAIL_PICTURE','IS_REQUIRED' => 'N','DEFAULT_VALUE' => 'a:17:{s:5:"SCALE";s:1:"N";s:5:"WIDTH";s:0:"";s:6:"HEIGHT";s:0:"";s:13:"IGNORE_ERRORS";s:1:"N";s:6:"METHOD";s:8:"resample";s:11:"COMPRESSION";i:95;s:18:"USE_WATERMARK_TEXT";s:1:"N";s:14:"WATERMARK_TEXT";s:0:"";s:19:"WATERMARK_TEXT_FONT";s:0:"";s:20:"WATERMARK_TEXT_COLOR";s:0:"";s:19:"WATERMARK_TEXT_SIZE";s:0:"";s:23:"WATERMARK_TEXT_POSITION";s:2:"tl";s:18:"USE_WATERMARK_FILE";s:1:"N";s:14:"WATERMARK_FILE";s:0:"";s:20:"WATERMARK_FILE_ALPHA";s:0:"";s:23:"WATERMARK_FILE_POSITION";s:2:"tl";s:20:"WATERMARK_FILE_ORDER";N;}'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'DETAIL_TEXT','IS_REQUIRED' => 'N','DEFAULT_VALUE' => ''),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'DETAIL_TEXT_TYPE','IS_REQUIRED' => 'Y','DEFAULT_VALUE' => 'text'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'DETAIL_TEXT_TYPE_ALLOW_CHANGE','IS_REQUIRED' => 'N','DEFAULT_VALUE' => 'Y'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'IBLOCK_SECTION','IS_REQUIRED' => 'N','DEFAULT_VALUE' => 'a:1:{s:22:"KEEP_IBLOCK_SECTION_ID";s:1:"N";}'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'LOG_ELEMENT_ADD','IS_REQUIRED' => 'N','DEFAULT_VALUE' => NULL),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'LOG_ELEMENT_DELETE','IS_REQUIRED' => 'N','DEFAULT_VALUE' => NULL),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'LOG_ELEMENT_EDIT','IS_REQUIRED' => 'N','DEFAULT_VALUE' => NULL),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'LOG_SECTION_ADD','IS_REQUIRED' => 'N','DEFAULT_VALUE' => NULL),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'LOG_SECTION_DELETE','IS_REQUIRED' => 'N','DEFAULT_VALUE' => NULL),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'LOG_SECTION_EDIT','IS_REQUIRED' => 'N','DEFAULT_VALUE' => NULL),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'NAME','IS_REQUIRED' => 'Y','DEFAULT_VALUE' => ''),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'PREVIEW_PICTURE','IS_REQUIRED' => 'Y','DEFAULT_VALUE' => 'a:20:{s:11:"FROM_DETAIL";s:1:"N";s:5:"SCALE";s:1:"N";s:5:"WIDTH";s:0:"";s:6:"HEIGHT";s:0:"";s:13:"IGNORE_ERRORS";s:1:"N";s:6:"METHOD";s:8:"resample";s:11:"COMPRESSION";i:95;s:18:"DELETE_WITH_DETAIL";s:1:"N";s:18:"UPDATE_WITH_DETAIL";s:1:"N";s:18:"USE_WATERMARK_TEXT";s:1:"N";s:14:"WATERMARK_TEXT";s:0:"";s:19:"WATERMARK_TEXT_FONT";s:0:"";s:20:"WATERMARK_TEXT_COLOR";s:0:"";s:19:"WATERMARK_TEXT_SIZE";s:0:"";s:23:"WATERMARK_TEXT_POSITION";s:2:"tl";s:18:"USE_WATERMARK_FILE";s:1:"N";s:14:"WATERMARK_FILE";s:0:"";s:20:"WATERMARK_FILE_ALPHA";s:0:"";s:23:"WATERMARK_FILE_POSITION";s:2:"tl";s:20:"WATERMARK_FILE_ORDER";N;}'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'PREVIEW_TEXT','IS_REQUIRED' => 'N','DEFAULT_VALUE' => ''),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'PREVIEW_TEXT_TYPE','IS_REQUIRED' => 'Y','DEFAULT_VALUE' => 'text'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'PREVIEW_TEXT_TYPE_ALLOW_CHANGE','IS_REQUIRED' => 'N','DEFAULT_VALUE' => 'Y'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'SECTION_CODE','IS_REQUIRED' => 'N','DEFAULT_VALUE' => 'a:8:{s:6:"UNIQUE";s:1:"N";s:15:"TRANSLITERATION";s:1:"N";s:9:"TRANS_LEN";i:100;s:10:"TRANS_CASE";s:1:"L";s:11:"TRANS_SPACE";s:1:"-";s:11:"TRANS_OTHER";s:1:"-";s:9:"TRANS_EAT";s:1:"Y";s:10:"USE_GOOGLE";s:1:"N";}'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'SECTION_DESCRIPTION','IS_REQUIRED' => 'N','DEFAULT_VALUE' => ''),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'SECTION_DESCRIPTION_TYPE','IS_REQUIRED' => 'Y','DEFAULT_VALUE' => 'text'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'SECTION_DESCRIPTION_TYPE_ALLOW_CHANGE','IS_REQUIRED' => 'N','DEFAULT_VALUE' => 'Y'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'SECTION_DETAIL_PICTURE','IS_REQUIRED' => 'N','DEFAULT_VALUE' => 'a:17:{s:5:"SCALE";s:1:"N";s:5:"WIDTH";s:0:"";s:6:"HEIGHT";s:0:"";s:13:"IGNORE_ERRORS";s:1:"N";s:6:"METHOD";s:8:"resample";s:11:"COMPRESSION";i:95;s:18:"USE_WATERMARK_TEXT";s:1:"N";s:14:"WATERMARK_TEXT";s:0:"";s:19:"WATERMARK_TEXT_FONT";s:0:"";s:20:"WATERMARK_TEXT_COLOR";s:0:"";s:19:"WATERMARK_TEXT_SIZE";s:0:"";s:23:"WATERMARK_TEXT_POSITION";s:2:"tl";s:18:"USE_WATERMARK_FILE";s:1:"N";s:14:"WATERMARK_FILE";s:0:"";s:20:"WATERMARK_FILE_ALPHA";s:0:"";s:23:"WATERMARK_FILE_POSITION";s:2:"tl";s:20:"WATERMARK_FILE_ORDER";N;}'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'SECTION_NAME','IS_REQUIRED' => 'Y','DEFAULT_VALUE' => ''),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'SECTION_PICTURE','IS_REQUIRED' => 'N','DEFAULT_VALUE' => 'a:20:{s:11:"FROM_DETAIL";s:1:"N";s:5:"SCALE";s:1:"N";s:5:"WIDTH";s:0:"";s:6:"HEIGHT";s:0:"";s:13:"IGNORE_ERRORS";s:1:"N";s:6:"METHOD";s:8:"resample";s:11:"COMPRESSION";i:95;s:18:"DELETE_WITH_DETAIL";s:1:"N";s:18:"UPDATE_WITH_DETAIL";s:1:"N";s:18:"USE_WATERMARK_TEXT";s:1:"N";s:14:"WATERMARK_TEXT";s:0:"";s:19:"WATERMARK_TEXT_FONT";s:0:"";s:20:"WATERMARK_TEXT_COLOR";s:0:"";s:19:"WATERMARK_TEXT_SIZE";s:0:"";s:23:"WATERMARK_TEXT_POSITION";s:2:"tl";s:18:"USE_WATERMARK_FILE";s:1:"N";s:14:"WATERMARK_FILE";s:0:"";s:20:"WATERMARK_FILE_ALPHA";s:0:"";s:23:"WATERMARK_FILE_POSITION";s:2:"tl";s:20:"WATERMARK_FILE_ORDER";N;}'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'SECTION_XML_ID','IS_REQUIRED' => 'N','DEFAULT_VALUE' => ''),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'SORT','IS_REQUIRED' => 'N','DEFAULT_VALUE' => '0'),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'TAGS','IS_REQUIRED' => 'N','DEFAULT_VALUE' => ''),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'XML_ID','IS_REQUIRED' => 'Y','DEFAULT_VALUE' => ''),
  array('IBLOCK_ID' => '3','FIELD_ID' => 'XML_IMPORT_START_TIME','IS_REQUIRED' => 'N','DEFAULT_VALUE' => NULL)
);

/* `rimstudio_db`.`b_iblock_group` */
$b_iblock_group = array(
  array('IBLOCK_ID' => '3','GROUP_ID' => '1','PERMISSION' => 'X'),
  array('IBLOCK_ID' => '3','GROUP_ID' => '2','PERMISSION' => 'R')
);

/* `rimstudio_db`.`b_iblock_iblock_iprop` */
$b_iblock_iblock_iprop = array(
);

/* `rimstudio_db`.`b_iblock_iproperty` */
$b_iblock_iproperty = array(
);

/* `rimstudio_db`.`b_iblock_messages` */
$b_iblock_messages = array(
  array('IBLOCK_ID' => '3','MESSAGE_ID' => 'ELEMENT_ADD','MESSAGE_TEXT' => 'Добавить элемент'),
  array('IBLOCK_ID' => '3','MESSAGE_ID' => 'ELEMENT_DELETE','MESSAGE_TEXT' => 'Удалить элемент'),
  array('IBLOCK_ID' => '3','MESSAGE_ID' => 'ELEMENT_EDIT','MESSAGE_TEXT' => 'Изменить элемент'),
  array('IBLOCK_ID' => '3','MESSAGE_ID' => 'ELEMENT_NAME','MESSAGE_TEXT' => 'Элемент'),
  array('IBLOCK_ID' => '3','MESSAGE_ID' => 'ELEMENTS_NAME','MESSAGE_TEXT' => 'Элементы'),
  array('IBLOCK_ID' => '3','MESSAGE_ID' => 'SECTION_ADD','MESSAGE_TEXT' => 'Добавить раздел'),
  array('IBLOCK_ID' => '3','MESSAGE_ID' => 'SECTION_DELETE','MESSAGE_TEXT' => 'Удалить раздел'),
  array('IBLOCK_ID' => '3','MESSAGE_ID' => 'SECTION_EDIT','MESSAGE_TEXT' => 'Изменить раздел'),
  array('IBLOCK_ID' => '3','MESSAGE_ID' => 'SECTION_NAME','MESSAGE_TEXT' => 'Раздел'),
  array('IBLOCK_ID' => '3','MESSAGE_ID' => 'SECTIONS_NAME','MESSAGE_TEXT' => 'Разделы')
);

/* `rimstudio_db`.`b_iblock_offers_tmp` */
$b_iblock_offers_tmp = array(
);

/* `rimstudio_db`.`b_iblock_property` */
$b_iblock_property = array(
  array('ID' => '1','TIMESTAMP_X' => '2023-02-18 16:05:19','IBLOCK_ID' => '3','NAME' => 'Примеры работы','ACTIVE' => 'Y','SORT' => '500','CODE' => 'work_examples','DEFAULT_VALUE' => '','PROPERTY_TYPE' => 'F','ROW_COUNT' => '1','COL_COUNT' => '30','LIST_TYPE' => 'L','MULTIPLE' => 'Y','XML_ID' => NULL,'FILE_TYPE' => 'jpg, gif, bmp, png, jpeg, webp','MULTIPLE_CNT' => '5','TMP_ID' => NULL,'LINK_IBLOCK_ID' => '0','WITH_DESCRIPTION' => 'N','SEARCHABLE' => 'N','FILTRABLE' => 'N','IS_REQUIRED' => 'Y','VERSION' => '1','USER_TYPE' => NULL,'USER_TYPE_SETTINGS' => NULL,'HINT' => ''),
  array('ID' => '2','TIMESTAMP_X' => '2023-02-19 07:04:17','IBLOCK_ID' => '3','NAME' => 'Описание работы','ACTIVE' => 'Y','SORT' => '500','CODE' => 'work_descriptions','DEFAULT_VALUE' => '','PROPERTY_TYPE' => 'S','ROW_COUNT' => '1','COL_COUNT' => '30','LIST_TYPE' => 'L','MULTIPLE' => 'N','XML_ID' => NULL,'FILE_TYPE' => '','MULTIPLE_CNT' => '5','TMP_ID' => NULL,'LINK_IBLOCK_ID' => '0','WITH_DESCRIPTION' => 'N','SEARCHABLE' => 'N','FILTRABLE' => 'N','IS_REQUIRED' => 'N','VERSION' => '1','USER_TYPE' => NULL,'USER_TYPE_SETTINGS' => NULL,'HINT' => '')
);

/* `rimstudio_db`.`b_iblock_property_enum` */
$b_iblock_property_enum = array(
);

/* `rimstudio_db`.`b_iblock_property_feature` */
$b_iblock_property_feature = array(
  array('ID' => '1','PROPERTY_ID' => '1','MODULE_ID' => 'iblock','FEATURE_ID' => 'LIST_PAGE_SHOW','IS_ENABLED' => 'N'),
  array('ID' => '2','PROPERTY_ID' => '1','MODULE_ID' => 'iblock','FEATURE_ID' => 'DETAIL_PAGE_SHOW','IS_ENABLED' => 'Y')
);

/* `rimstudio_db`.`b_iblock_right` */
$b_iblock_right = array(
);

/* `rimstudio_db`.`b_iblock_rss` */
$b_iblock_rss = array(
);

/* `rimstudio_db`.`b_iblock_section` */
$b_iblock_section = array(
);

/* `rimstudio_db`.`b_iblock_section_element` */
$b_iblock_section_element = array(
);

/* `rimstudio_db`.`b_iblock_section_iprop` */
$b_iblock_section_iprop = array(
);

/* `rimstudio_db`.`b_iblock_section_property` */
$b_iblock_section_property = array(
);

/* `rimstudio_db`.`b_iblock_section_right` */
$b_iblock_section_right = array(
);

/* `rimstudio_db`.`b_iblock_sequence` */
$b_iblock_sequence = array(
);

/* `rimstudio_db`.`b_iblock_site` */
$b_iblock_site = array(
  array('IBLOCK_ID' => '3','SITE_ID' => 's1')
);

/* `rimstudio_db`.`b_iblock_type` */
$b_iblock_type = array(
  array('ID' => 'Content','SECTIONS' => 'Y','EDIT_FILE_BEFORE' => '','EDIT_FILE_AFTER' => '','IN_RSS' => 'N','SORT' => '500'),
  array('ID' => 'rest_entity','SECTIONS' => 'Y','EDIT_FILE_BEFORE' => NULL,'EDIT_FILE_AFTER' => NULL,'IN_RSS' => 'N','SORT' => '1000')
);

/* `rimstudio_db`.`b_iblock_type_lang` */
$b_iblock_type_lang = array(
  array('IBLOCK_TYPE_ID' => 'rest_entity','LID' => 'ru','NAME' => 'Хранилище данных для приложений','SECTION_NAME' => 'Разделы','ELEMENT_NAME' => 'Элементы'),
  array('IBLOCK_TYPE_ID' => 'Content','LID' => 'ru','NAME' => 'Контент','SECTION_NAME' => '','ELEMENT_NAME' => ''),
  array('IBLOCK_TYPE_ID' => 'Content','LID' => 'en','NAME' => 'Content','SECTION_NAME' => '','ELEMENT_NAME' => '')
);

/* `rimstudio_db`.`b_landing` */
$b_landing = array(
);

/* `rimstudio_db`.`b_landing_binding` */
$b_landing_binding = array(
);

/* `rimstudio_db`.`b_landing_block` */
$b_landing_block = array(
);

/* `rimstudio_db`.`b_landing_block_last_used` */
$b_landing_block_last_used = array(
);

/* `rimstudio_db`.`b_landing_chat` */
$b_landing_chat = array(
);

/* `rimstudio_db`.`b_landing_chat_binding` */
$b_landing_chat_binding = array(
);

/* `rimstudio_db`.`b_landing_cookies_agreement` */
$b_landing_cookies_agreement = array(
);

/* `rimstudio_db`.`b_landing_demo` */
$b_landing_demo = array(
);

/* `rimstudio_db`.`b_landing_designer_repo` */
$b_landing_designer_repo = array(
);

/* `rimstudio_db`.`b_landing_domain` */
$b_landing_domain = array(
  array('ID' => '1','ACTIVE' => 'Y','DOMAIN' => 'rimstudio','PREV_DOMAIN' => '','XML_ID' => NULL,'PROTOCOL' => 'http','PROVIDER' => NULL,'FAIL_COUNT' => NULL,'CREATED_BY_ID' => '1','MODIFIED_BY_ID' => '1','DATE_CREATE' => '2023-02-16 16:50:22','DATE_MODIFY' => '2023-02-16 16:50:22')
);

/* `rimstudio_db`.`b_landing_entity_lock` */
$b_landing_entity_lock = array(
);

/* `rimstudio_db`.`b_landing_entity_rights` */
$b_landing_entity_rights = array(
);

/* `rimstudio_db`.`b_landing_file` */
$b_landing_file = array(
  array('ID' => '1','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','FILE_ID' => '39','TEMP' => 'N')
);

/* `rimstudio_db`.`b_landing_filter_block` */
$b_landing_filter_block = array(
);

/* `rimstudio_db`.`b_landing_filter_entity` */
$b_landing_filter_entity = array(
);

/* `rimstudio_db`.`b_landing_folder` */
$b_landing_folder = array(
);

/* `rimstudio_db`.`b_landing_hook_data` */
$b_landing_hook_data = array(
  array('ID' => '1','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '2','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'AGREEMENT_ID','VALUE' => '1','PUBLIC' => 'N'),
  array('ID' => '3','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'COLOR_BG','VALUE' => '#03c1fe','PUBLIC' => 'N'),
  array('ID' => '4','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'COLOR_TEXT','VALUE' => '#fff','PUBLIC' => 'N'),
  array('ID' => '5','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'POSITION','VALUE' => 'bottom_left','PUBLIC' => 'N'),
  array('ID' => '6','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'MODE','VALUE' => 'I','PUBLIC' => 'N'),
  array('ID' => '7','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'B24BUTTON','CODE' => 'CODE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '8','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'B24BUTTON','CODE' => 'COLOR','VALUE' => 'site','PUBLIC' => 'N'),
  array('ID' => '9','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'B24BUTTON','CODE' => 'COLOR_VALUE','VALUE' => '#03c1fe','PUBLIC' => 'N'),
  array('ID' => '10','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'YACOUNTER','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '11','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'VIEW','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '12','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'VIEW','CODE' => 'TYPE','VALUE' => 'no','PUBLIC' => 'N'),
  array('ID' => '13','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'UP','CODE' => 'SHOW','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '14','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'SPEED','CODE' => 'USE_LAZY','VALUE' => 'Y','PUBLIC' => 'N'),
  array('ID' => '15','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'SPEED','CODE' => 'USE_WEBPACK','VALUE' => 'Y','PUBLIC' => 'N'),
  array('ID' => '16','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'PIXELVK','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '17','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'METAYANDEXVERIFICATION','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '18','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'METAGOOGLEVERIFICATION','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '19','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GTM','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '20','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GMAP','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '21','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GACOUNTER','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '22','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GACOUNTER','CODE' => 'SEND_CLICK','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '23','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GACOUNTER','CODE' => 'CLICK_TYPE','VALUE' => 'text','PUBLIC' => 'N'),
  array('ID' => '24','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GACOUNTER','CODE' => 'SEND_SHOW','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '25','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'FAVICON','CODE' => 'PICTURE','VALUE' => '39','PUBLIC' => 'N'),
  array('ID' => '26','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COPYRIGHT','CODE' => 'SHOW','VALUE' => 'Y','PUBLIC' => 'N'),
  array('ID' => '27','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'YMAP','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '28','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'HEADBLOCK','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '29','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'CSSBLOCK','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'N'),
  array('ID' => '30','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COPYRIGHT','CODE' => 'CODE','VALUE' => '18','PUBLIC' => 'N'),
  array('ID' => '31','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '32','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'AGREEMENT_ID','VALUE' => '1','PUBLIC' => 'Y'),
  array('ID' => '33','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'COLOR_BG','VALUE' => '#03c1fe','PUBLIC' => 'Y'),
  array('ID' => '34','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'COLOR_TEXT','VALUE' => '#fff','PUBLIC' => 'Y'),
  array('ID' => '35','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'POSITION','VALUE' => 'bottom_left','PUBLIC' => 'Y'),
  array('ID' => '36','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COOKIES','CODE' => 'MODE','VALUE' => 'I','PUBLIC' => 'Y'),
  array('ID' => '37','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'B24BUTTON','CODE' => 'CODE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '38','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'B24BUTTON','CODE' => 'COLOR','VALUE' => 'site','PUBLIC' => 'Y'),
  array('ID' => '39','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'B24BUTTON','CODE' => 'COLOR_VALUE','VALUE' => '#03c1fe','PUBLIC' => 'Y'),
  array('ID' => '40','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'YACOUNTER','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '41','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'VIEW','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '42','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'VIEW','CODE' => 'TYPE','VALUE' => 'no','PUBLIC' => 'Y'),
  array('ID' => '43','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'UP','CODE' => 'SHOW','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '46','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'PIXELVK','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '47','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'METAYANDEXVERIFICATION','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '48','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'METAGOOGLEVERIFICATION','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '49','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GTM','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '50','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GMAP','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '51','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GACOUNTER','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '52','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GACOUNTER','CODE' => 'SEND_CLICK','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '53','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GACOUNTER','CODE' => 'CLICK_TYPE','VALUE' => 'text','PUBLIC' => 'Y'),
  array('ID' => '54','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'GACOUNTER','CODE' => 'SEND_SHOW','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '55','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'FAVICON','CODE' => 'PICTURE','VALUE' => '39','PUBLIC' => 'Y'),
  array('ID' => '56','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'COPYRIGHT','CODE' => 'CODE','VALUE' => '18','PUBLIC' => 'Y'),
  array('ID' => '57','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'YMAP','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '58','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'HEADBLOCK','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y'),
  array('ID' => '59','ENTITY_ID' => '1','ENTITY_TYPE' => 'S','HOOK' => 'CSSBLOCK','CODE' => 'USE','VALUE' => 'N','PUBLIC' => 'Y')
);

/* `rimstudio_db`.`b_landing_placement` */
$b_landing_placement = array(
);

/* `rimstudio_db`.`b_landing_repo` */
$b_landing_repo = array(
);

/* `rimstudio_db`.`b_landing_role` */
$b_landing_role = array(
);

/* `rimstudio_db`.`b_landing_site` */
$b_landing_site = array(
  array('ID' => '1','CODE' => '/l2wyvmolca/','ACTIVE' => 'Y','DELETED' => 'N','TITLE' => 'RIMstudio','XML_ID' => NULL,'DESCRIPTION' => NULL,'TYPE' => 'SMN','TPL_ID' => '0','TPL_CODE' => NULL,'DOMAIN_ID' => '1','SMN_SITE_ID' => 's1','LANDING_ID_INDEX' => '0','LANDING_ID_404' => '0','LANDING_ID_503' => '0','LANG' => '','SPECIAL' => 'N','VERSION' => '1','CREATED_BY_ID' => '1','MODIFIED_BY_ID' => '1','DATE_CREATE' => '2023-02-16 16:50:22','DATE_MODIFY' => '2023-02-20 17:18:52')
);

/* `rimstudio_db`.`b_landing_syspage` */
$b_landing_syspage = array(
);

/* `rimstudio_db`.`b_landing_template` */
$b_landing_template = array(
  array('ID' => '1','ACTIVE' => 'Y','TITLE' => '#EMPTY#','SORT' => '100','XML_ID' => 'empty','CONTENT' => '#CONTENT#','AREA_COUNT' => '0','CREATED_BY_ID' => '1','MODIFIED_BY_ID' => '1','DATE_CREATE' => '2023-02-16 15:26:10','DATE_MODIFY' => '2023-02-16 15:26:10'),
  array('ID' => '2','ACTIVE' => 'Y','TITLE' => '#SIDEBAR_LEFT#','SORT' => '200','XML_ID' => 'sidebar_left','CONTENT' => '<div class="landing-layout-flex">
								<div class="landing-sidebar g-max-width-100x g-overflow-hidden">#AREA_1#</div>
								<div class="landing-main g-max-width-100x">#CONTENT#</div>
							</div>','AREA_COUNT' => '1','CREATED_BY_ID' => '1','MODIFIED_BY_ID' => '1','DATE_CREATE' => '2023-02-16 15:26:10','DATE_MODIFY' => '2023-02-16 15:26:10'),
  array('ID' => '3','ACTIVE' => 'Y','TITLE' => '#SIDEBAR_RIGHT#','SORT' => '300','XML_ID' => 'sidebar_right','CONTENT' => '<div class="landing-layout-flex sidebar-right">
								<div class="landing-sidebar g-max-width-100x">#AREA_1#</div>
								<div class="landing-main g-max-width-100x">#CONTENT#</div>
							</div>','AREA_COUNT' => '1','CREATED_BY_ID' => '1','MODIFIED_BY_ID' => '1','DATE_CREATE' => '2023-02-16 15:26:10','DATE_MODIFY' => '2023-02-16 15:26:10'),
  array('ID' => '4','ACTIVE' => 'Y','TITLE' => '#HEADER_ONLY#','SORT' => '400','XML_ID' => 'header_only','CONTENT' => '<div class="landing-header">#AREA_1#</div> 
								<div class="landing-main">#CONTENT#</div>','AREA_COUNT' => '1','CREATED_BY_ID' => '1','MODIFIED_BY_ID' => '1','DATE_CREATE' => '2023-02-16 15:26:10','DATE_MODIFY' => '2023-02-16 15:26:10'),
  array('ID' => '5','ACTIVE' => 'Y','TITLE' => '#HEADER_FOOTER#','SORT' => '500','XML_ID' => 'header_footer','CONTENT' => '<div class="landing-header">#AREA_1#</div> 
								<div class="landing-main">#CONTENT#</div> 
							<div class="landing-footer">#AREA_2#</div>','AREA_COUNT' => '2','CREATED_BY_ID' => '1','MODIFIED_BY_ID' => '1','DATE_CREATE' => '2023-02-16 15:26:10','DATE_MODIFY' => '2023-02-16 15:26:10'),
  array('ID' => '6','ACTIVE' => 'Y','TITLE' => '#WITHOUT_LEFT#','SORT' => '600','XML_ID' => 'without_left','CONTENT' => '<div class="landing-header">#AREA_1#</div>
								<div class="landing-layout-flex without-left">
									<div class="landing-sidebar g-max-width-100x">#AREA_2#</div>
									<div class="landing-main g-max-width-100x">#CONTENT#</div>
								</div>
							<div class="landing-footer">#AREA_3#</div>','AREA_COUNT' => '3','CREATED_BY_ID' => '1','MODIFIED_BY_ID' => '1','DATE_CREATE' => '2023-02-16 15:26:10','DATE_MODIFY' => '2023-02-16 15:26:10'),
  array('ID' => '7','ACTIVE' => 'Y','TITLE' => '#WITHOUT_RIGHT#','SORT' => '700','XML_ID' => 'without_right','CONTENT' => '<div class="landing-header">#AREA_1#</div>
								<div class="landing-layout-flex">
									<div class="landing-sidebar g-max-width-100x">#AREA_2#</div>
									<div class="landing-main g-max-width-100x">#CONTENT#</div>
								</div>
							<div class="landing-footer">#AREA_3#</div>','AREA_COUNT' => '3','CREATED_BY_ID' => '1','MODIFIED_BY_ID' => '1','DATE_CREATE' => '2023-02-16 15:26:10','DATE_MODIFY' => '2023-02-16 15:26:10')
);

/* `rimstudio_db`.`b_landing_template_ref` */
$b_landing_template_ref = array(
);

/* `rimstudio_db`.`b_landing_update_block` */
$b_landing_update_block = array(
);

/* `rimstudio_db`.`b_landing_urlchecker_host` */
$b_landing_urlchecker_host = array(
);

/* `rimstudio_db`.`b_landing_urlchecker_status` */
$b_landing_urlchecker_status = array(
);

/* `rimstudio_db`.`b_landing_urlchecker_whitelist` */
$b_landing_urlchecker_whitelist = array(
);

/* `rimstudio_db`.`b_landing_urlrewrite` */
$b_landing_urlrewrite = array(
);

/* `rimstudio_db`.`b_landing_view` */
$b_landing_view = array(
);

/* `rimstudio_db`.`b_lang` */
$b_lang = array(
  array('LID' => 's1','SORT' => '1','DEF' => 'Y','ACTIVE' => 'Y','NAME' => 'RIMstudio','DIR' => '/','FORMAT_DATE' => NULL,'FORMAT_DATETIME' => NULL,'FORMAT_NAME' => NULL,'WEEK_START' => NULL,'CHARSET' => NULL,'LANGUAGE_ID' => 'ru','DOC_ROOT' => '','DOMAIN_LIMITED' => 'N','SERVER_NAME' => '','SITE_NAME' => 'RIMstudio','EMAIL' => '','CULTURE_ID' => '1')
);

/* `rimstudio_db`.`b_language` */
$b_language = array(
  array('LID' => 'en','SORT' => '2','DEF' => 'N','ACTIVE' => 'Y','NAME' => 'English','FORMAT_DATE' => NULL,'FORMAT_DATETIME' => NULL,'FORMAT_NAME' => NULL,'WEEK_START' => NULL,'CHARSET' => NULL,'DIRECTION' => NULL,'CULTURE_ID' => '2','CODE' => 'en'),
  array('LID' => 'ru','SORT' => '1','DEF' => 'Y','ACTIVE' => 'Y','NAME' => 'Russian','FORMAT_DATE' => NULL,'FORMAT_DATETIME' => NULL,'FORMAT_NAME' => NULL,'WEEK_START' => NULL,'CHARSET' => NULL,'DIRECTION' => NULL,'CULTURE_ID' => '1','CODE' => 'ru')
);

/* `rimstudio_db`.`b_lang_domain` */
$b_lang_domain = array(
);

/* `rimstudio_db`.`b_list_rubric` */
$b_list_rubric = array(
);

/* `rimstudio_db`.`b_location` */
$b_location = array(
);

/* `rimstudio_db`.`b_location_address` */
$b_location_address = array(
);

/* `rimstudio_db`.`b_location_addr_fld` */
$b_location_addr_fld = array(
);

/* `rimstudio_db`.`b_location_addr_link` */
$b_location_addr_link = array(
);

/* `rimstudio_db`.`b_location_area` */
$b_location_area = array(
  array('ID' => '1','TYPE' => 'DISPUTED','CODE' => 'CRIMEA','SORT' => '0','GEOMETRY' => '{"type":"Polygon","coordinates":[[[32.201579,45.396892],[32.2052178,45.3690507],[32.2090567,45.3553206],[32.2172905,45.3355145],[32.2240585,45.3025866],[32.235686,45.2758033],[32.2434204,45.2628881],[32.2625503,45.2383126],[32.2738567,45.2267674],[32.2996887,45.2054331],[32.329404,45.1867687],[32.3624492,45.1711247],[32.3982085,45.1587952],[32.4168995,45.1539484],[32.4554687,45.1470047],[32.4878048,45.1442331],[32.5164102,45.1327887],[32.5532795,45.1222016],[32.5918488,45.115254],[32.6313994,45.1120768],[32.6711947,45.1127297],[32.729727,45.1208441],[32.8314558,45.1507864],[32.853076,45.1219934],[32.8767811,45.0994253],[32.8902144,45.0890467],[32.9199297,45.0703442],[32.9451894,45.0580954],[32.9796287,45.0321305],[33.0110823,45.0148866],[33.0279839,45.0074406],[33.0637432,44.9950757],[33.0879643,44.989073],[33.1342119,44.9689946],[33.192902,44.9506562],[33.2511697,44.9416162],[33.2951871,44.9405202],[33.5542562,44.8402319],[33.5621787,44.8410979],[33.5671526,44.838601],[33.5736666,44.8238183],[33.5866523,44.807848],[33.6044231,44.8103433],[33.6586481,44.7965631],[33.6693271,44.7918226],[33.6774224,44.7858657],[33.6827993,44.7703386],[33.6355485,44.7529449],[33.6136625,44.7497551],[33.6148368,44.7391957],[33.6111957,44.738286],[33.6105707,44.7329396],[33.611606,44.7296545],[33.6146258,44.729927],[33.6161203,44.711976],[33.6589663,44.7142533],[33.6708014,44.7097439],[33.7006932,44.7148119],[33.7072434,44.7105734],[33.7051533,44.7086069],[33.7050933,44.7049158],[33.7145084,44.705868],[33.715643,44.715848],[33.7265921,44.716636],[33.7348624,44.7075832],[33.7462868,44.7010307],[33.7518027,44.6987863],[33.7615132,44.7009902],[33.7769711,44.690265],[33.7674787,44.6820761],[33.754625,44.6753399],[33.7518666,44.6637439],[33.7300323,44.6470751],[33.7254762,44.6401041],[33.7176817,44.6375914],[33.7168675,44.6332156],[33.7218757,44.631584],[33.7162703,44.6204383],[33.7272166,44.6085501],[33.7286926,44.6046812],[33.735653,44.6009246],[33.7419126,44.6053835],[33.7496197,44.60791],[33.7651672,44.6091022],[33.7795796,44.6131096],[33.7828306,44.6059825],[33.781845,44.5971035],[33.7872108,44.5856602],[33.7920091,44.5848619],[33.7951987,44.5802969],[33.8004378,44.5814222],[33.8056839,44.5753186],[33.8093847,44.5769972],[33.8114458,44.5738111],[33.8139036,44.5771175],[33.8173303,44.577274],[33.8272108,44.5712636],[33.8273394,44.563316],[33.8310821,44.5548411],[33.8345552,44.5499395],[33.8372152,44.548782],[33.8337314,44.5416787],[33.8394649,44.5384748],[33.8401482,44.5304315],[33.8494976,44.5306195],[33.8572702,44.5258757],[33.8456566,44.519124],[33.85315,44.5154015],[33.8603572,44.5067568],[33.868911,44.5073968],[33.8707581,44.5054113],[33.8673484,44.5025419],[33.8672494,44.5003522],[33.8736292,44.4926938],[33.8869091,44.4822103],[33.8971535,44.4787873],[33.8934902,44.4732254],[33.8972198,44.4692246],[33.9262025,44.4213251],[33.9094099,44.4188846],[33.9024805,44.4193681],[33.8980569,44.4214726],[33.8828051,44.4210572],[33.8706281,44.4188467],[33.8591887,44.4199143],[33.8469623,44.4171293],[33.8292787,44.4089158],[33.8245729,44.411664],[33.8140922,44.4100258],[33.797829,44.4041246],[33.781585,44.4057444],[33.7840022,44.402866],[33.7855572,44.3968776],[33.7623083,44.3900862],[33.696591,44.1910397],[33.7357422,44.1858835],[33.7755079,44.184598],[33.8151473,44.1872073],[33.8567133,44.1943491],[33.9116725,44.1858835],[33.9514382,44.184598],[33.9910776,44.1872073],[34.0298524,44.1936623],[34.0670401,44.2038415],[34.0927335,44.2136353],[34.1417952,44.2137713],[34.2003274,44.2220125],[34.2375152,44.2321868],[34.2552959,44.2386127],[34.2888171,44.2539909],[34.3191029,44.2724903],[34.3328536,44.282804],[34.3551268,44.3032135],[34.3834932,44.3128241],[34.4170144,44.3281829],[34.4325985,44.3370516],[34.4579166,44.3546118],[34.4947227,44.3688605],[34.5111166,44.3769423],[34.5414024,44.3954029],[34.5678887,44.4166315],[34.590082,44.4402299],[34.607569,44.4657558],[34.6144422,44.4790935],[34.6220858,44.4994412],[34.6450122,44.5206113],[34.6661359,44.547163],[34.7006849,44.5628297],[34.735755,44.5848013],[34.7764494,44.5934492],[34.8085382,44.6038903],[34.8324881,44.6023351],[34.8722834,44.6029938],[34.9291911,44.6108698],[34.963432,44.598995],[35.0012394,44.590126],[35.0602428,44.5838827],[35.1197957,44.5863196],[35.1774068,44.5973337],[35.1957581,44.6028408],[35.2306662,44.6164595],[35.2586785,44.6310857],[35.2852182,44.6416945],[35.3171962,44.6585585],[35.3318979,44.668113],[35.3583842,44.6892424],[35.3805775,44.7127305],[35.3975542,44.7373268],[35.4116276,44.7442895],[35.4626979,44.7517865],[35.4998857,44.7618689],[35.5176664,44.7682366],[35.5511876,44.7834757],[35.5667717,44.7922754],[35.5952241,44.8120281],[35.6196208,44.8343376],[35.6322493,44.8491155],[35.670408,44.8272773],[35.7048906,44.8131714],[35.7230689,44.8074017],[35.7803291,44.7955387],[35.8397932,44.7921897],[35.8794326,44.7947719],[35.9241291,44.8026019],[35.9742343,44.8026778],[36.013533,44.8071728],[36.051603,44.8154218],[36.1028199,44.8336163],[36.1372853,44.8256548],[36.1764365,44.8205545],[36.2162022,44.8192829],[36.2558416,44.821864],[36.3134527,44.8328333],[36.3630225,44.8503296],[36.4154063,44.8528108],[36.454181,44.8591924],[36.4913688,44.869256],[36.5262768,44.8828121],[36.5426707,44.8908227],[36.5729565,44.9091205],[36.5994428,44.9301619],[36.6097225,44.9406672],[36.5679872,45.0506562],[36.5428648,45.1340402],[36.5338353,45.1751824],[36.530486,45.1992024],[36.5542469,45.2216309],[36.5859391,45.2441721],[36.5941742,45.252542],[36.5937019,45.2823897],[36.6030245,45.3093876],[36.6227602,45.3280113],[36.6635019,45.3599397],[36.6815681,45.4566115],[36.6684499,45.6266206],[36.583205,45.635158],[36.3387005,45.6715002],[36.1353542,45.6476547],[36.1034835,45.638376],[36.0723795,45.6256431],[36.028427,45.6242237],[35.9817734,45.6167329],[35.9534794,45.6280572],[35.9215589,45.6372534],[35.8711492,45.6454011],[35.8366954,45.6469342],[35.8022501,45.6453103],[35.7518847,45.6370298],[35.7200141,45.6277494],[35.6901483,45.6156372],[35.6627986,45.6008987],[35.6384328,45.5837842],[35.6174678,45.5645842],[35.6002625,45.5436256],[35.587111,45.5212652],[35.5764936,45.4903874],[35.5747509,45.4895333],[35.5487365,45.5142538],[35.5242787,45.5313252],[35.4968497,45.5460096],[35.459695,45.5603381],[35.4555162,45.5730522],[35.4443574,45.5959169],[35.4290297,45.6175579],[35.4198817,45.6278035],[35.3869834,45.6557223],[35.3609843,45.6715964],[35.3373014,45.6827713],[35.3237297,45.7127561],[35.3165721,45.7237303],[35.299254,45.7445762],[35.2663557,45.7724368],[35.2334204,45.7917299],[34.9750748,45.7619919],[34.9597746,45.7565682],[34.9411705,45.7658247],[34.876163,45.7904304],[34.7990874,45.8104643],[34.8021689,45.9006479],[34.7540112,45.9088363],[34.6699108,45.9676437],[34.628541,45.9864034],[34.6011392,45.9941699],[34.5816123,45.9956678],[34.5611691,45.9943843],[34.5542176,45.9904652],[34.5448398,45.9790277],[34.5443875,45.9761218],[34.5269998,45.9590021],[34.5109022,45.9480281],[34.4985264,45.9425606],[34.4762212,45.9441393],[34.459176,45.9512094],[34.4430184,45.9618096],[34.4233801,45.9786713],[34.4131796,45.9897359],[34.4107666,45.9992636],[34.4049875,46.0092864],[34.3471695,46.0549489],[34.3326403,46.0598467],[34.320021,46.0682092],[34.2648618,46.0548851],[34.2521968,46.0531749],[34.1843736,46.0668628],[34.1450093,46.0866862],[34.1359107,46.0966617],[34.1218931,46.1057194],[34.0809285,46.117556],[34.0695052,46.1166994],[34.0526389,46.1091293],[33.9982336,46.1264504],[33.971714,46.1411991],[33.9405553,46.1546515],[33.8973358,46.1706248],[33.86133,46.1945116],[33.8486859,46.1996667],[33.811324,46.203796],[33.7968936,46.2030156],[33.7726027,46.1976249],[33.7503231,46.18772],[33.7399776,46.1852474],[33.6995994,46.2028553],[33.6892658,46.2047794],[33.670864,46.2117939],[33.6661371,46.2207141],[33.6467708,46.22958],[33.6152408,46.2262179],[33.6177993,46.215981],[33.6135506,46.2139172],[33.6185932,46.213932],[33.6355706,46.1463365],[33.6412746,46.1424429],[33.6147111,46.1346624],[33.5870932,46.1191796],[33.5721329,46.1025643],[33.5911874,46.0612472],[33.5407189,46.0120312],[32.7727018,45.8266419],[32.7396744,45.8073204],[32.7259238,45.7972779],[32.7026395,45.7764183],[32.6659033,45.7625368],[32.6339252,45.7459969],[32.6054729,45.7265666],[32.5890615,45.7123247],[32.5685226,45.7063996],[32.5336146,45.6930389],[32.5016366,45.6764785],[32.4779329,45.660501],[32.4354921,45.6517736],[32.39936,45.6400966],[32.3822327,45.6329918],[32.3502547,45.6164136],[32.3218024,45.5969383],[32.2974057,45.5749258],[32.2868735,45.5630938],[32.2775192,45.5507836],[32.2643049,45.5283722],[32.2405042,45.5038633],[32.2230173,45.4787954],[32.2105624,45.4522796],[32.2062983,45.4386318],[32.2017961,45.4108733],[32.201579,45.396892]]]}'),
  array('ID' => '2','TYPE' => 'DISPUTED','CODE' => 'SEVASTOPOL','SORT' => '0','GEOMETRY' => '{"type":"Polygon","coordinates":[[[33.3779569,44.5838462],[33.3930152,44.5681987],[33.3996503,44.5643423],[33.4016594,44.5610614],[33.4004612,44.5592715],[33.4071732,44.5565894],[33.4100748,44.5535486],[33.414671,44.5526219],[33.4163465,44.5493377],[33.4274077,44.5457891],[33.4284008,44.543313],[33.4350539,44.5419983],[33.4348217,44.5409146],[33.4497224,44.5320144],[33.4573813,44.5290313],[33.464198,44.5233092],[33.4788113,44.5192613],[33.4788555,44.5174026],[33.4814623,44.5157171],[33.4897719,44.5122984],[33.4927974,44.5125433],[33.4930381,44.5174183],[33.4889039,44.5249823],[33.5078625,44.5311455],[33.5264968,44.5459033],[33.5395687,44.539262],[33.542912,44.5395173],[33.5372403,44.5484954],[33.5389717,44.5502823],[33.5485239,44.554409],[33.5500686,44.5525636],[33.5478351,44.5516093],[33.5487427,44.5497441],[33.5539774,44.5515491],[33.562927,44.5488265],[33.5684734,44.5559147],[33.5608581,44.55859],[33.563492,44.5617802],[33.5728005,44.5610282],[33.5747846,44.5592686],[33.5792988,44.5620965],[33.5702383,44.5724854],[33.578923,44.5730758],[33.5847547,44.5754084],[33.5895307,44.5805367],[33.5923472,44.5877529],[33.5923331,44.5924807],[33.5842788,44.5996505],[33.576377,44.6033141],[33.5738875,44.606603],[33.5673845,44.6074099],[33.5672286,44.6088974],[33.5706902,44.6149581],[33.5828279,44.6132154],[33.5835438,44.6150882],[33.5782058,44.6192201],[33.5859866,44.6374677],[33.5960725,44.6407591],[33.6034952,44.651651],[33.5993199,44.6632008],[33.6103428,44.6726833],[33.5991785,44.6709085],[33.5935735,44.67909],[33.5975627,44.6990734],[33.5945586,44.7071473],[33.5873092,44.7054915],[33.5868975,44.7004837],[33.5518827,44.711301],[33.5560938,44.7201787],[33.5554076,44.7221413],[33.5466985,44.7220158],[33.5474959,44.6897199],[33.5424577,44.6576964],[33.5313548,44.6400224],[33.5168858,44.636586],[33.5105038,44.6309138],[33.5075866,44.6209989],[33.5047582,44.6165579],[33.5013126,44.6151564],[33.5019782,44.6118966],[33.4973069,44.6098852],[33.5001394,44.6082374],[33.5007351,44.603576],[33.4993233,44.6074879],[33.4978317,44.607504],[33.4957525,44.6109471],[33.4981029,44.6121538],[33.4952779,44.6148727],[33.4864865,44.612926],[33.4843169,44.6092739],[33.4812423,44.6085388],[33.4805395,44.6110345],[33.4739853,44.6119977],[33.4730492,44.6057619],[33.4706817,44.6050402],[33.4746431,44.6017974],[33.4707787,44.6005913],[33.4714544,44.5926046],[33.4684703,44.5946123],[33.4680171,44.6001056],[33.4662354,44.6009409],[33.4662572,44.6065902],[33.468789,44.6078146],[33.4681762,44.6119631],[33.4636229,44.6117513],[33.4602628,44.6093012],[33.4571182,44.6105217],[33.4482092,44.6078374],[33.4475432,44.6041441],[33.4498455,44.6016442],[33.4468175,44.5979061],[33.4481208,44.5973543],[33.4476833,44.5948093],[33.4441644,44.5987997],[33.4404307,44.599419],[33.4413997,44.6015135],[33.4400636,44.605054],[33.4339409,44.6038632],[33.4313517,44.5969346],[33.4262966,44.5989669],[33.4198732,44.5924681],[33.4241188,44.5947288],[33.4264939,44.5934479],[33.4248662,44.581237],[33.4314365,44.574999],[33.4359306,44.5745808],[33.4376948,44.572334],[33.4353869,44.571057],[33.4344226,44.5719787],[33.4366416,44.5730618],[33.4356493,44.573903],[33.4267301,44.5733978],[33.428097,44.5756042],[33.419624,44.5838806],[33.4191592,44.5871545],[33.4170871,44.5878755],[33.4168157,44.5928239],[33.4161384,44.587998],[33.4136207,44.5857566],[33.412809,44.5782986],[33.4143867,44.5766282],[33.4119291,44.572169],[33.4136588,44.5699718],[33.4122288,44.564404],[33.4110539,44.5650361],[33.4098393,44.5712544],[33.4107359,44.575972],[33.4094392,44.5779911],[33.4065798,44.5767197],[33.4024217,44.5708259],[33.4043875,44.5825173],[33.4024193,44.5834106],[33.4030967,44.5911368],[33.3984799,44.5914294],[33.395001,44.5875713],[33.383653,44.5863156],[33.3779569,44.5838462]]]}')
);

/* `rimstudio_db`.`b_location_field` */
$b_location_field = array(
);

/* `rimstudio_db`.`b_location_hierarchy` */
$b_location_hierarchy = array(
);

/* `rimstudio_db`.`b_location_name` */
$b_location_name = array(
);

/* `rimstudio_db`.`b_location_source` */
$b_location_source = array(
  array('CODE' => 'GOOGLE','NAME' => 'Google','CONFIG' => 'a:4:{i:0;a:4:{s:4:"code";s:16:"API_KEY_FRONTEND";s:4:"type";s:6:"string";s:4:"sort";i:10;s:5:"value";s:0:"";}i:1;a:4:{s:4:"code";s:15:"API_KEY_BACKEND";s:4:"type";s:6:"string";s:4:"sort";i:20;s:5:"value";s:0:"";}i:2;a:4:{s:4:"code";s:18:"SHOW_PHOTOS_ON_MAP";s:4:"type";s:4:"bool";s:4:"sort";i:30;s:5:"value";b:1;}i:3;a:4:{s:4:"code";s:21:"USE_GEOCODING_SERVICE";s:4:"type";s:4:"bool";s:4:"sort";i:40;s:5:"value";b:1;}}'),
  array('CODE' => 'OSM','NAME' => 'OpenStreetMap','CONFIG' => 'a:3:{i:0;a:5:{s:4:"code";s:11:"SERVICE_URL";s:4:"type";s:6:"string";s:10:"is_visible";b:1;s:4:"sort";i:10;s:5:"value";s:30:"https://osm-ru-002.bitrix.info";}i:1;a:5:{s:4:"code";s:15:"MAP_SERVICE_URL";s:4:"type";s:6:"string";s:10:"is_visible";b:1;s:4:"sort";i:15;s:5:"value";s:30:"https://osm-ru-001.bitrix.info";}i:2;a:5:{s:4:"code";s:5:"TOKEN";s:4:"type";s:6:"string";s:10:"is_visible";b:0;s:4:"sort";i:20;s:5:"value";N;}}')
);

/* `rimstudio_db`.`b_log_notification` */
$b_log_notification = array(
);

/* `rimstudio_db`.`b_log_notification_action` */
$b_log_notification_action = array(
);

/* `rimstudio_db`.`b_main_mail_blacklist` */
$b_main_mail_blacklist = array(
);

/* `rimstudio_db`.`b_main_mail_sender` */
$b_main_mail_sender = array(
);

/* `rimstudio_db`.`b_main_mail_sender_send_counter` */
$b_main_mail_sender_send_counter = array(
);

/* `rimstudio_db`.`b_medialib_collection` */
$b_medialib_collection = array(
);

/* `rimstudio_db`.`b_medialib_collection_item` */
$b_medialib_collection_item = array(
);

/* `rimstudio_db`.`b_medialib_item` */
$b_medialib_item = array(
);

/* `rimstudio_db`.`b_medialib_type` */
$b_medialib_type = array(
  array('ID' => '1','NAME' => 'image_name','CODE' => 'image','EXT' => 'jpg,jpeg,gif,png','SYSTEM' => 'Y','DESCRIPTION' => 'image_desc'),
  array('ID' => '2','NAME' => 'video_name','CODE' => 'video','EXT' => 'flv,mp4,wmv','SYSTEM' => 'Y','DESCRIPTION' => 'video_desc'),
  array('ID' => '3','NAME' => 'sound_name','CODE' => 'sound','EXT' => 'mp3,wma,aac','SYSTEM' => 'Y','DESCRIPTION' => 'sound_desc')
);

/* `rimstudio_db`.`b_messageservice_incoming_message` */
$b_messageservice_incoming_message = array(
);

/* `rimstudio_db`.`b_messageservice_message` */
$b_messageservice_message = array(
);

/* `rimstudio_db`.`b_messageservice_rest_app` */
$b_messageservice_rest_app = array(
);

/* `rimstudio_db`.`b_messageservice_rest_app_lang` */
$b_messageservice_rest_app_lang = array(
);

/* `rimstudio_db`.`b_mobileapp_app` */
$b_mobileapp_app = array(
);

/* `rimstudio_db`.`b_mobileapp_config` */
$b_mobileapp_config = array(
);

/* `rimstudio_db`.`b_module` */
$b_module = array(
  array('ID' => 'b24connector','DATE_ACTIVE' => NULL),
  array('ID' => 'bitrix.sitecorporate','DATE_ACTIVE' => NULL),
  array('ID' => 'bitrix.siteinfoportal','DATE_ACTIVE' => NULL),
  array('ID' => 'bitrix.sitepersonal','DATE_ACTIVE' => NULL),
  array('ID' => 'bitrixcloud','DATE_ACTIVE' => NULL),
  array('ID' => 'blog','DATE_ACTIVE' => NULL),
  array('ID' => 'clouds','DATE_ACTIVE' => NULL),
  array('ID' => 'fileman','DATE_ACTIVE' => NULL),
  array('ID' => 'form','DATE_ACTIVE' => NULL),
  array('ID' => 'forum','DATE_ACTIVE' => NULL),
  array('ID' => 'highloadblock','DATE_ACTIVE' => NULL),
  array('ID' => 'iblock','DATE_ACTIVE' => NULL),
  array('ID' => 'landing','DATE_ACTIVE' => NULL),
  array('ID' => 'location','DATE_ACTIVE' => NULL),
  array('ID' => 'main','DATE_ACTIVE' => NULL),
  array('ID' => 'messageservice','DATE_ACTIVE' => NULL),
  array('ID' => 'mobileapp','DATE_ACTIVE' => NULL),
  array('ID' => 'perfmon','DATE_ACTIVE' => NULL),
  array('ID' => 'photogallery','DATE_ACTIVE' => NULL),
  array('ID' => 'rest','DATE_ACTIVE' => NULL),
  array('ID' => 'scale','DATE_ACTIVE' => NULL),
  array('ID' => 'search','DATE_ACTIVE' => NULL),
  array('ID' => 'security','DATE_ACTIVE' => NULL),
  array('ID' => 'seo','DATE_ACTIVE' => NULL),
  array('ID' => 'socialservices','DATE_ACTIVE' => NULL),
  array('ID' => 'subscribe','DATE_ACTIVE' => NULL),
  array('ID' => 'translate','DATE_ACTIVE' => NULL),
  array('ID' => 'ui','DATE_ACTIVE' => NULL),
  array('ID' => 'vote','DATE_ACTIVE' => NULL)
);

/* `rimstudio_db`.`b_module_group` */
$b_module_group = array(
);

/* `rimstudio_db`.`b_module_to_module` */
$b_module_to_module = array(
  array('ID' => '1','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '/modules/main/tools/prop_userid.php','TO_CLASS' => 'CIBlockPropertyUserID','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '2b30c309bf87645959b9bfbed51b49c6'),
  array('ID' => '2','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'main','TO_PATH' => '/modules/main/classes/mysql/favorites.php','TO_CLASS' => 'CFavorites','TO_METHOD' => 'OnUserDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'f437e170e4daf957766b0b0579f08fb4'),
  array('ID' => '3','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnLanguageDelete','TO_MODULE_ID' => 'main','TO_PATH' => '/modules/main/classes/mysql/favorites.php','TO_CLASS' => 'CFavorites','TO_METHOD' => 'OnLanguageDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9211999c5cfc3a4d374e4f957d5079f6'),
  array('ID' => '4','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserOptions','TO_METHOD' => 'OnUserDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9ef4e969f975b6425c7113444d210a90'),
  array('ID' => '5','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnChangeFile','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CMain','TO_METHOD' => 'OnChangeFileComponent','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '332179402f77c4d41c6c2e524acde4d0'),
  array('ID' => '6','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeRightsCheck','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUser','TO_METHOD' => 'UserTypeRightsCheck','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'e1aae03ea8eb08e7bbb6d8d42cbc2ebe'),
  array('ID' => '7','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserLogin','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'UpdateTools','TO_METHOD' => 'CheckUpdates','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a2986b9f6e9a99c0351c2ba858dafc85'),
  array('ID' => '8','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnModuleUpdate','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'UpdateTools','TO_METHOD' => 'SetUpdateResult','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'f9b70c6a75b6341063b23bde5d32e582'),
  array('ID' => '9','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUpdateCheck','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'UpdateTools','TO_METHOD' => 'SetUpdateError','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a0aecef95a192ec3dd134f71f0f4f175'),
  array('ID' => '10','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnPanelCreate','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUndo','TO_METHOD' => 'CheckNotifyMessage','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '6476f96ffba6ab2b4a7dbe644f42edf6'),
  array('ID' => '11','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterAddRating','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsMain','TO_METHOD' => 'OnAfterAddRating','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '6122bee2ad083f8f72e35655cee48859'),
  array('ID' => '12','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUpdateRating','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsMain','TO_METHOD' => 'OnAfterUpdateRating','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'f8f806e33dc35737bdbe6b9bc42626a4'),
  array('ID' => '13','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnSetRatingsConfigs','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsMain','TO_METHOD' => 'OnSetRatingConfigs','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9244ca7fd6964757ca191c9407cb1218'),
  array('ID' => '14','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingsConfigs','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsMain','TO_METHOD' => 'OnGetRatingConfigs','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd8ae8e1f8889b1fbb6af276fb14c8411'),
  array('ID' => '15','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingsObjects','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsMain','TO_METHOD' => 'OnGetRatingObject','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '129315715250c195ee115002b445a156'),
  array('ID' => '16','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingContentOwner','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsMain','TO_METHOD' => 'OnGetRatingContentOwner','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'bf1f5deaa1532fe9a28acd6d19d23a80'),
  array('ID' => '17','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterAddRatingRule','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatingRulesMain','TO_METHOD' => 'OnAfterAddRatingRule','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '298e763431f7f7d6c3af9798663f410d'),
  array('ID' => '18','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUpdateRatingRule','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatingRulesMain','TO_METHOD' => 'OnAfterUpdateRatingRule','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '4ecdc4a15e24c49f0fa8f44064bf1511'),
  array('ID' => '19','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingRuleObjects','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatingRulesMain','TO_METHOD' => 'OnGetRatingRuleObjects','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '6ac10928b76183004ba0e88ace0a1b5b'),
  array('ID' => '20','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingRuleConfigs','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatingRulesMain','TO_METHOD' => 'OnGetRatingRuleConfigs','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '06769c4f6bbba4fad79c1619a874ee97'),
  array('ID' => '21','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUserAdd','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatings','TO_METHOD' => 'OnAfterUserRegister','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'ecb9ae0476db69da6c95b06bcb3aebbb'),
  array('ID' => '22','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CRatings','TO_METHOD' => 'OnUserDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9fe6984fd29b7ab9508ac02c23690094'),
  array('ID' => '23','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterGroupAdd','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CGroupAuthProvider','TO_METHOD' => 'OnAfterGroupAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '02f2fe70b9068a6b307192321fe74430'),
  array('ID' => '24','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeGroupUpdate','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CGroupAuthProvider','TO_METHOD' => 'OnBeforeGroupUpdate','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'ef0f2e4d0ae7bbf59d0798e8078143f9'),
  array('ID' => '25','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeGroupDelete','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CGroupAuthProvider','TO_METHOD' => 'OnBeforeGroupDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd3ec9527c0e77709402a05ae4249afca'),
  array('ID' => '26','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterSetUserGroup','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CGroupAuthProvider','TO_METHOD' => 'OnAfterSetUserGroup','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '0de6c5b48e9382f6e857d79f76d95f25'),
  array('ID' => '27','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditTypes','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CEventMain','TO_METHOD' => 'GetAuditTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'ac0b8b7a5e703131a3bd41b4399bc032'),
  array('ID' => '28','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditHandlers','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CEventMain','TO_METHOD' => 'MakeMainObject','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '1ddb38ccf35a8a9da5d3b2bc80591ad6'),
  array('ID' => '29','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'perfmon','MESSAGE_ID' => 'OnGetTableSchema','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CTableSchema','TO_METHOD' => 'OnGetTableSchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'c1f65f88d449e8b8a3b7af9d54ef3f50'),
  array('ID' => '30','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sender','MESSAGE_ID' => 'OnConnectorList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\SenderEventHandler','TO_METHOD' => 'onConnectorListUser','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '8af99568465a1ccdb6a84e868cf5aad8'),
  array('ID' => '31','TIMESTAMP_X' => NULL,'SORT' => '110','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeString','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '09f8200652932044934bd3c522e920c5'),
  array('ID' => '32','TIMESTAMP_X' => NULL,'SORT' => '120','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeInteger','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '71ef247b3eb3b07e4bd6940791b89497'),
  array('ID' => '33','TIMESTAMP_X' => NULL,'SORT' => '130','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeDouble','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '4fe2008255fe567423cc0c2f080ca741'),
  array('ID' => '34','TIMESTAMP_X' => NULL,'SORT' => '140','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeDateTime','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '686c0679e60bee52dbcc27f5502277b6'),
  array('ID' => '35','TIMESTAMP_X' => NULL,'SORT' => '145','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeDate','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7e19b5fc5fc48b1cd317a6ac44d84236'),
  array('ID' => '36','TIMESTAMP_X' => NULL,'SORT' => '150','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeBoolean','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '4d5e1dd2369089f2db9480549241205f'),
  array('ID' => '37','TIMESTAMP_X' => NULL,'SORT' => '155','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeUrl','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '79fcd650625b296abf13216cd5af2428'),
  array('ID' => '38','TIMESTAMP_X' => NULL,'SORT' => '160','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeFile','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '67b9a4fbc45240a7887b73e3a246eba0'),
  array('ID' => '39','TIMESTAMP_X' => NULL,'SORT' => '170','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeEnum','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'fbebdb289fe38c1fbfeda4d3d8ee43ef'),
  array('ID' => '40','TIMESTAMP_X' => NULL,'SORT' => '180','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeIBlockSection','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '2065f8305645790970bac0b99f127f47'),
  array('ID' => '41','TIMESTAMP_X' => NULL,'SORT' => '190','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeIBlockElement','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '65bda5818e3545f1683a3ff5271cc891'),
  array('ID' => '42','TIMESTAMP_X' => NULL,'SORT' => '200','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserTypeStringFormatted','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '47e3cf1c280e01dbaed43f9989a6747b'),
  array('ID' => '43','TIMESTAMP_X' => NULL,'SORT' => '210','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\UrlPreview\\UrlPreviewUserType','TO_METHOD' => 'getUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '719d15ee5f60f6348d2bd6a8911aeed1'),
  array('ID' => '44','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeEndBufferContent','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Analytics\\Counter','TO_METHOD' => 'onBeforeEndBufferContent','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'ff5eb984fe6ce3e8d769bf3ba646b902'),
  array('ID' => '45','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeRestartBuffer','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Analytics\\Counter','TO_METHOD' => 'onBeforeRestartBuffer','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '0782f5a6df6dd52d834caea88c3ba3a7'),
  array('ID' => '46','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnFileDelete','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\UI\\Viewer\\FilePreviewTable','TO_METHOD' => 'onFileDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '54c80cd94412db221338aeb59902f059'),
  array('ID' => '47','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnSocNetLogDelete','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserCounter','TO_METHOD' => 'OnSocNetLogDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '33e603755a0bc07abd51a1f8ed52966e'),
  array('ID' => '48','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnSocNetLogCommentDelete','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CUserCounter','TO_METHOD' => 'OnSocNetLogCommentDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '51ee2214895be904a880046f43e84138'),
  array('ID' => '49','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAdminInformerInsertItems','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => 'CMpNotifications','TO_METHOD' => 'OnAdminInformerInsertItemsHandlerMP','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'c89c0e94ac1110c334a24c70e1773daa'),
  array('ID' => '50','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestServiceBuildDescription','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Rest\\Handlers','TO_METHOD' => 'onRestServiceBuildDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'c0b0c358a21b648d4f9c5d29d17a5ab2'),
  array('ID' => '51','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeUserTypeAdd','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\UserField\\Internal\\UserFieldHelper','TO_METHOD' => 'OnBeforeUserTypeAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'e204684efc0764af9431ca94b950619a'),
  array('ID' => '52','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUserTypeAdd','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\UserField\\Internal\\UserFieldHelper','TO_METHOD' => 'onAfterUserTypeAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '50932fb244caf7af686fac906caf3e73'),
  array('ID' => '53','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeUserTypeDelete','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\UserField\\Internal\\UserFieldHelper','TO_METHOD' => 'OnBeforeUserTypeDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd22a86deba0ff4bd031d022e331033b4'),
  array('ID' => '54','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAuthProvidersBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Access\\Auth\\AccessAuthProvider','TO_METHOD' => 'getProviders','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '3a2839dac113bf47bce01812903e768a'),
  array('ID' => '55','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnBeforeIBlockSectionUpdate','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Access\\Auth\\AccessEventHandler','TO_METHOD' => 'onBeforeIBlockSectionUpdate','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'dde505dba68c59bd4661b7680c329485'),
  array('ID' => '56','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnBeforeIBlockSectionAdd','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Access\\Auth\\AccessEventHandler','TO_METHOD' => 'onBeforeIBlockSectionAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd3a665b1890dabbba32ff01e3e46ec57'),
  array('ID' => '57','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnBeforeIBlockSectionDelete','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Access\\Auth\\AccessEventHandler','TO_METHOD' => 'onBeforeIBlockSectionDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '157add4b02621a60fabf1369c3e7ea9b'),
  array('ID' => '58','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sale','MESSAGE_ID' => 'OnSaleBasketItemSaved','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Analytics\\Catalog','TO_METHOD' => 'catchCatalogBasket','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'fa4fc3924ff2585e92f8bdabaf287864'),
  array('ID' => '59','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sale','MESSAGE_ID' => 'OnSaleOrderSaved','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Analytics\\Catalog','TO_METHOD' => 'catchCatalogOrder','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '6b358bb17b30da91b105fb1451ed9aaa'),
  array('ID' => '60','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sale','MESSAGE_ID' => 'OnSaleOrderPaid','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Analytics\\Catalog','TO_METHOD' => 'catchCatalogOrderPayment','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '8f5ca6e1c5136cb4bbf30474f0ff4183'),
  array('ID' => '61','TIMESTAMP_X' => NULL,'SORT' => '1000','FROM_MODULE_ID' => 'sale','MESSAGE_ID' => 'onBuildDiscountConditionInterfaceControls','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Discount\\UserConditionControl','TO_METHOD' => 'onBuildDiscountConditionInterfaceControls','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9f0d91c081704e52b52f540b3acaf52e'),
  array('ID' => '62','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforePhpMail','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Mail\\Sender','TO_METHOD' => 'applyCustomSmtp','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '10fbf5b8dec05a02d8d7010e594f16ec'),
  array('ID' => '63','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBuildFilterFactoryMethods','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\Filter\\FactoryMain','TO_METHOD' => 'onBuildFilterFactoryMethods','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '19f10c2686a955bd8b8116ea1f1ad829'),
  array('ID' => '64','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'onGetUserFieldValues','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\UserField\\Internal\\UserFieldHelper','TO_METHOD' => 'onGetUserFieldValues','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '7f9a5e25d638a6bff29f0bf4666da1a9'),
  array('ID' => '65','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'onUpdateUserFieldValues','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\UserField\\Internal\\UserFieldHelper','TO_METHOD' => 'onUpdateUserFieldValues','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'd78761f994d74258421d271810f03ebf'),
  array('ID' => '66','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'onDeleteUserFieldValues','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\UserField\\Internal\\UserFieldHelper','TO_METHOD' => 'onDeleteUserFieldValues','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '074b2e25238a00ffc809ad12b609db2c'),
  array('ID' => '67','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUserTypeAdd','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\ORM\\Entity','TO_METHOD' => 'onUserTypeChange','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '37b1b1538fa6a6c5f41c9ce4afbf2789'),
  array('ID' => '68','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUserTypeUpdate','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\ORM\\Entity','TO_METHOD' => 'onUserTypeChange','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '6a53bbd6e85686f4aa8a69d3d75f7e37'),
  array('ID' => '69','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUserTypeDelete','TO_MODULE_ID' => 'main','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Main\\ORM\\Entity','TO_METHOD' => 'onUserTypeChange','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '010cc1e3107418a1fd9f9a4cde7d93b9'),
  array('ID' => '70','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBuildGlobalMenu','TO_MODULE_ID' => 'b24connector','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\B24Connector\\Helper','TO_METHOD' => 'onBuildGlobalMenu','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9c4452a442bacc2d4d70635962485be1'),
  array('ID' => '71','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeProlog','TO_MODULE_ID' => 'b24connector','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\B24Connector\\Helper','TO_METHOD' => 'onBeforeProlog','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '641053ff6ee8ff57518d7c30724530e5'),
  array('ID' => '72','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeProlog','TO_MODULE_ID' => 'bitrix.sitecorporate','TO_PATH' => '','TO_CLASS' => 'CSiteCorporate','TO_METHOD' => 'ShowPanel','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'bc7c322534797a9ed3493c40e1b8fdac'),
  array('ID' => '73','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeProlog','TO_MODULE_ID' => 'bitrix.siteinfoportal','TO_PATH' => '','TO_CLASS' => 'CSiteInfoportal','TO_METHOD' => 'ShowPanel','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7ffb3da30f1bec7fe0c7456a8ec3b8d7'),
  array('ID' => '74','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeProlog','TO_MODULE_ID' => 'bitrix.sitepersonal','TO_PATH' => '','TO_CLASS' => 'CSitePersonal','TO_METHOD' => 'ShowPanel','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '5a8bf3ea4b17f8d011b8f398c05ac89b'),
  array('ID' => '75','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAdminInformerInsertItems','TO_MODULE_ID' => 'bitrixcloud','TO_PATH' => '','TO_CLASS' => 'CBitrixCloudBackup','TO_METHOD' => 'OnAdminInformerInsertItems','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '5499039afdd0fdb38d4b245c8b886dcb'),
  array('ID' => '76','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'mobileapp','MESSAGE_ID' => 'OnBeforeAdminMobileMenuBuild','TO_MODULE_ID' => 'bitrixcloud','TO_PATH' => '','TO_CLASS' => 'CBitrixCloudMobile','TO_METHOD' => 'OnBeforeAdminMobileMenuBuild','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '5828a8cdb2cc45e2724ef1c76139df88'),
  array('ID' => '77','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'search','MESSAGE_ID' => 'OnReindex','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogSearch','TO_METHOD' => 'OnSearchReindex','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '6c23ebfcdfc99d14541ad083b0ee7430'),
  array('ID' => '78','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Blog\\BlogUser','TO_METHOD' => 'onUserDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '470dc0caadb6eee3cf6bd32a89d2aa38'),
  array('ID' => '79','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnSiteDelete','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogSitePath','TO_METHOD' => 'DeleteBySiteID','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '33b1b3449b56990b745b251f3976521d'),
  array('ID' => '80','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnSocNetGroupDelete','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogSoNetPost','TO_METHOD' => 'OnGroupDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '4fa06723b7108652d8f6846f17c4bfda'),
  array('ID' => '81','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnSocNetFeaturesAdd','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogSearch','TO_METHOD' => 'SetSoNetFeatureIndexSearch','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '5e642b195637a47eda278a2f769d72ae'),
  array('ID' => '82','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnSocNetFeaturesUpdate','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogSearch','TO_METHOD' => 'SetSoNetFeatureIndexSearch','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '94116bd773c35830e32cabd264e1deac'),
  array('ID' => '83','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnBeforeSocNetFeaturesPermsAdd','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogSearch','TO_METHOD' => 'OnBeforeSocNetFeaturesPermsAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'ef99702762ccf8958b3bd05a0bc2bd21'),
  array('ID' => '84','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnSocNetFeaturesPermsAdd','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogSearch','TO_METHOD' => 'SetSoNetFeaturePermIndexSearch','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7e78a43487928787ac0665eb1eade0d5'),
  array('ID' => '85','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnBeforeSocNetFeaturesPermsUpdate','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogSearch','TO_METHOD' => 'OnBeforeSocNetFeaturesPermsUpdate','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '13116dc44040b680c93a2b7f60ff2845'),
  array('ID' => '86','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnSocNetFeaturesPermsUpdate','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogSearch','TO_METHOD' => 'SetSoNetFeaturePermIndexSearch','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '06ae1cde11216c73393f8720c0f31ea9'),
  array('ID' => '87','TIMESTAMP_X' => NULL,'SORT' => '200','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterAddRating','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsBlog','TO_METHOD' => 'OnAfterAddRating','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '6dd70a97fa5c2f15e619721007813bd0'),
  array('ID' => '88','TIMESTAMP_X' => NULL,'SORT' => '200','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUpdateRating','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsBlog','TO_METHOD' => 'OnAfterUpdateRating','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a2f4b906bc5e1e984c28ef37728d7007'),
  array('ID' => '89','TIMESTAMP_X' => NULL,'SORT' => '200','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnSetRatingsConfigs','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsBlog','TO_METHOD' => 'OnSetRatingConfigs','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '4461c77de3ca9dec12cd66c9554555a0'),
  array('ID' => '90','TIMESTAMP_X' => NULL,'SORT' => '200','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingsConfigs','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsBlog','TO_METHOD' => 'OnGetRatingConfigs','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '6708964800c60ed28bb3ac095494d0f8'),
  array('ID' => '91','TIMESTAMP_X' => NULL,'SORT' => '200','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingsObjects','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsBlog','TO_METHOD' => 'OnGetRatingObject','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '29df09132203259924e883921fed0971'),
  array('ID' => '92','TIMESTAMP_X' => NULL,'SORT' => '200','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingContentOwner','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsBlog','TO_METHOD' => 'OnGetRatingContentOwner','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a47b921e59710bdca16e2284d11e8aa0'),
  array('ID' => '93','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'im','MESSAGE_ID' => 'OnGetNotifySchema','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogNotifySchema','TO_METHOD' => 'OnGetNotifySchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'cd6910b2ee2dd66f257a68a6406b9f79'),
  array('ID' => '94','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'im','MESSAGE_ID' => 'OnAnswerNotify','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => 'CBlogNotifySchema','TO_METHOD' => 'CBlogEventsIMCallback','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '890d3be770eab6025cc54e120d3b51f5'),
  array('ID' => '95','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterRegisterModule','TO_MODULE_ID' => 'main','TO_PATH' => '/modules/blog/install/index.php','TO_CLASS' => 'blog','TO_METHOD' => 'installUserFields','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'bfd07861166a9d51c1d21d18b291a1dc'),
  array('ID' => '96','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'conversion','MESSAGE_ID' => 'OnGetCounterTypes','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Blog\\Internals\\ConversionHandlers','TO_METHOD' => 'onGetCounterTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'e5df84e19828b3b95901e7b2a5d55cb1'),
  array('ID' => '97','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'conversion','MESSAGE_ID' => 'OnGetRateTypes','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Blog\\Internals\\ConversionHandlers','TO_METHOD' => 'onGetRateTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '75028a7a2551f7c677c09c367ed1a54c'),
  array('ID' => '98','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'blog','MESSAGE_ID' => 'OnPostAdd','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Blog\\Internals\\ConversionHandlers','TO_METHOD' => 'onPostAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a3b637f0c0945089c95d5c08e1166938'),
  array('ID' => '99','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'mail','MESSAGE_ID' => 'onReplyReceivedBLOG_POST','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Blog\\Internals\\MailHandler','TO_METHOD' => 'handleReplyReceivedBlogPost','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '5e3d8ad3f14c5b994981074e43a02cd7'),
  array('ID' => '100','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'mail','MESSAGE_ID' => 'onForwardReceivedBLOG_POST','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Blog\\Internals\\MailHandler','TO_METHOD' => 'handleForwardReceivedBlogPost','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '6002badd4ffa13790a43d45c5c29fca3'),
  array('ID' => '101','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'onLogIndexGetContent','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Blog\\Integration\\Socialnetwork\\Log','TO_METHOD' => 'onIndexGetContent','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '3fba13b74a731f896448388c082c24a4'),
  array('ID' => '102','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'onLogCommentIndexGetContent','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Blog\\Integration\\Socialnetwork\\LogComment','TO_METHOD' => 'onIndexGetContent','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '57ce8e76c004b1447554d8ec64c48783'),
  array('ID' => '103','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'onContentViewed','TO_MODULE_ID' => 'blog','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Blog\\Integration\\Socialnetwork\\ContentViewHandler','TO_METHOD' => 'onContentViewed','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'd33a4b2ae579a2c9b5ddcea17bc62806'),
  array('ID' => '104','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditTypes','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'GetAuditTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'da69722ba95497cf263381b46e24df40'),
  array('ID' => '105','TIMESTAMP_X' => NULL,'SORT' => '90','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeProlog','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnBeforeProlog','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'f8c39ff182ad873715f10a7091f928a4'),
  array('ID' => '106','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAdminListDisplay','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnAdminListDisplay','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '8ddf4f578e7229a63cba4d2124c7643c'),
  array('ID' => '107','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBuildGlobalMenu','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnBuildGlobalMenu','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd6d308843a6521ad50bfa230a2fcef8f'),
  array('ID' => '108','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnFileSave','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnFileSave','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '1e4f94a842d6166359ed1789a6f21245'),
  array('ID' => '109','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterFileSave','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnAfterFileSave','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'c36bae07a3080f9b5bc5d422ec96933f'),
  array('ID' => '110','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetFileSRC','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnGetFileSRC','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7ec03b3b7ad3f2f54c1e438a1172e5a8'),
  array('ID' => '111','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnFileCopy','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnFileCopy','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '6880b56c76f7d3c5d09f887fca6341ca'),
  array('ID' => '112','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnPhysicalFileDelete','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnFileDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '3151c487c747a57d7817f68e97fd1c94'),
  array('ID' => '113','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnMakeFileArray','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnMakeFileArray','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '713ea8a7a25764b1af60f7a1ec3032d5'),
  array('ID' => '114','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeResizeImage','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnBeforeResizeImage','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '705cd310c52f9c7e8e0c8a0578a22667'),
  array('ID' => '115','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterResizeImage','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnAfterResizeImage','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a403ad2328227153475df0c478a465cc'),
  array('ID' => '116','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'clouds','MESSAGE_ID' => 'OnGetStorageService','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorageService_AmazonS3','TO_METHOD' => 'GetObjectInstance','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a4eb7ed1f50b5931474c565f448a4069'),
  array('ID' => '117','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'clouds','MESSAGE_ID' => 'OnGetStorageService','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorageService_GoogleStorage','TO_METHOD' => 'GetObjectInstance','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '1e559e2225608e8d40eeede5b7526f2a'),
  array('ID' => '118','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'clouds','MESSAGE_ID' => 'OnGetStorageService','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorageService_OpenStackStorage','TO_METHOD' => 'GetObjectInstance','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '5ad09feff5dab28ab571ad034ccdf2ea'),
  array('ID' => '119','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'clouds','MESSAGE_ID' => 'OnGetStorageService','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorageService_RackSpaceCloudFiles','TO_METHOD' => 'GetObjectInstance','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'cc976773610cf809bb56871ac7dd9f01'),
  array('ID' => '120','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'clouds','MESSAGE_ID' => 'OnGetStorageService','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorageService_ClodoRU','TO_METHOD' => 'GetObjectInstance','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'faadad31436e94c420ed787e4424714b'),
  array('ID' => '121','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'clouds','MESSAGE_ID' => 'OnGetStorageService','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorageService_Selectel','TO_METHOD' => 'GetObjectInstance','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '5e63a8eebed42bd099b4a9ef62e8d52b'),
  array('ID' => '122','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'clouds','MESSAGE_ID' => 'OnGetStorageService','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorageService_HotBox','TO_METHOD' => 'GetObjectInstance','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '1913169adcd6d6f3b7fb5f3b70ba1fd8'),
  array('ID' => '123','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'clouds','MESSAGE_ID' => 'OnGetStorageService','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorageService_Yandex','TO_METHOD' => 'GetObjectInstance','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '12bd1d4f0d145d5b1681955612fe61c8'),
  array('ID' => '124','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'clouds','MESSAGE_ID' => 'OnGetStorageService','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorageService_S3','TO_METHOD' => 'GetObjectInstance','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '4af3f0ba1f50ed9be6efcdb55dfbee4e'),
  array('ID' => '125','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'perfmon','MESSAGE_ID' => 'OnGetTableSchema','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'clouds','TO_METHOD' => 'OnGetTableSchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd31a1f80f07441976eb1711db4902a71'),
  array('ID' => '126','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGroupDelete','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => 'CFileman','TO_METHOD' => 'OnGroupDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd10f791d422ba0e7551ab267db50404c'),
  array('ID' => '127','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnPanelCreate','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => 'CFileman','TO_METHOD' => 'OnPanelCreate','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'b00a6174fb1763684c299ccf5e054c65'),
  array('ID' => '128','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnModuleUpdate','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => 'CFileman','TO_METHOD' => 'OnModuleUpdate','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '58ae853e2b7c230b5cdb51129efd8a05'),
  array('ID' => '129','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnModuleInstalled','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => 'CFileman','TO_METHOD' => 'ClearComponentsListCache','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7bdbd354eab11f376fa257a998587277'),
  array('ID' => '130','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyMapGoogle','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd9d06fd05f80b33379359ebd8e36e655'),
  array('ID' => '131','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyMapYandex','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '20ca1d02998884b5abec68b32fdb561d'),
  array('ID' => '132','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyVideo','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '991c32062e05844708a5cf7aba37bf9a'),
  array('ID' => '133','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => 'CUserTypeVideo','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '41bc5efb49ebf8d165acd4e4d556f60c'),
  array('ID' => '134','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditTypes','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => 'CEventFileman','TO_METHOD' => 'GetAuditTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'e0a610651ffec1fbddb2f261223fb2e9'),
  array('ID' => '135','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditHandlers','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => 'CEventFileman','TO_METHOD' => 'MakeFilemanObject','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'fbfef1ef99530f6eae191da293f9566c'),
  array('ID' => '136','TIMESTAMP_X' => NULL,'SORT' => '154','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'fileman','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Fileman\\UserField\\Address','TO_METHOD' => 'getUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'f0583a376e38d3d2675513b1a367ed3c'),
  array('ID' => '137','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sender','MESSAGE_ID' => 'OnConnectorList','TO_MODULE_ID' => 'form','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Form\\SenderEventHandler','TO_METHOD' => 'onConnectorListForm','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '182217f1803d20e2899086e379ada21c'),
  array('ID' => '138','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUserUpdate','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumUser','TO_METHOD' => 'OnAfterUserUpdate','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '18ca0a9757a229b6290603235dfff0d1'),
  array('ID' => '139','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGroupDelete','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumNew','TO_METHOD' => 'OnGroupDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '63f10ce39f269a9f1add6a0600aa05b9'),
  array('ID' => '140','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeLangDelete','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumNew','TO_METHOD' => 'OnBeforeLangDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '201c2a343960654a90382521e253328f'),
  array('ID' => '141','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnFileDelete','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumFiles','TO_METHOD' => 'OnFileDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a00aa95408b2665018cb63e21cef4684'),
  array('ID' => '142','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'search','MESSAGE_ID' => 'OnReindex','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumNew','TO_METHOD' => 'OnReindex','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '3fe2c3077963069fee2360611d840816'),
  array('ID' => '143','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumUser','TO_METHOD' => 'OnUserDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'eb0cb7958d708be629eba740bcabd8c4'),
  array('ID' => '144','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'main','TO_PATH' => '/modules/forum/tools/prop_topicid.php','TO_CLASS' => 'CIBlockPropertyTopicID','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd5b04b52654500981293dbcf10ca1ef9'),
  array('ID' => '145','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnBeforeIBlockElementDelete','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumTopic','TO_METHOD' => 'OnBeforeIBlockElementDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '929cf569dd703b922e4a96a0a023f120'),
  array('ID' => '146','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditTypes','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumEventLog','TO_METHOD' => 'GetAuditTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '30a759001702af8052ea65e700c519c7'),
  array('ID' => '147','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditHandlers','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CEventForum','TO_METHOD' => 'MakeForumObject','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '78ecc0524ac5d4fb0545c8a3fa28b3bd'),
  array('ID' => '148','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnSocNetGroupDelete','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumUser','TO_METHOD' => 'OnSocNetGroupDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '94cfb4cf5460746b7b31a5b93a3805f6'),
  array('ID' => '149','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnSocNetLogFormatEvent','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumMessage','TO_METHOD' => 'OnSocNetLogFormatEvent','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '28c7a91a467c1190a064f597487abd5c'),
  array('ID' => '150','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'mail','MESSAGE_ID' => 'OnGetFilterList','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumEMail','TO_METHOD' => 'OnGetSocNetFilterList','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'e42fc61795fed0c5f397259bb6f1f6b9'),
  array('ID' => '151','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterAddRating','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsForum','TO_METHOD' => 'OnAfterAddRating','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'db966e6ee1f8b98f83e57411f4757858'),
  array('ID' => '152','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUpdateRating','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsForum','TO_METHOD' => 'OnAfterUpdateRating','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'f5f6a93c1fe6d7dc61fbb5bf25f9965f'),
  array('ID' => '153','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnSetRatingsConfigs','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsForum','TO_METHOD' => 'OnSetRatingConfigs','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '84556c2f1f7f23189f90603f45ad3942'),
  array('ID' => '154','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingsConfigs','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsForum','TO_METHOD' => 'OnGetRatingConfigs','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7ead6be47d7bb2e297a2af57f85dc7ee'),
  array('ID' => '155','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingsObjects','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsForum','TO_METHOD' => 'OnGetRatingObject','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '99f4b68c8e6c1598377e0016b31234bb'),
  array('ID' => '156','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingContentOwner','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsForum','TO_METHOD' => 'OnGetRatingContentOwner','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '5ef51ecf36931b3a32f4fea00dc49c8c'),
  array('ID' => '157','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'im','MESSAGE_ID' => 'OnGetNotifySchema','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumNotifySchema','TO_METHOD' => 'OnGetNotifySchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'ad425ff862192078c050ea34d60f8d63'),
  array('ID' => '158','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterRegisterModule','TO_MODULE_ID' => 'main','TO_PATH' => '/modules/forum/install/index.php','TO_CLASS' => 'forum','TO_METHOD' => 'InstallUserFields','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '205fd3e33648d7e1ed6f4b7f0298f603'),
  array('ID' => '159','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestServiceBuildDescription','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => 'CForumRestService','TO_METHOD' => 'OnRestServiceBuildDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '506b2a93cea64d73c9e7c187fdde2840'),
  array('ID' => '160','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'conversion','MESSAGE_ID' => 'OnGetCounterTypes','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Forum\\Internals\\ConversionHandlers','TO_METHOD' => 'onGetCounterTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'fa69bf6ff10a0fb9b2e91098f0c0bab3'),
  array('ID' => '161','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'conversion','MESSAGE_ID' => 'OnGetRateTypes','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Forum\\Internals\\ConversionHandlers','TO_METHOD' => 'onGetRateTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9eb2b6d8edde63385655c1001d9e0c31'),
  array('ID' => '162','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'forum','MESSAGE_ID' => 'onAfterTopicAdd','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Forum\\Internals\\ConversionHandlers','TO_METHOD' => 'onTopicAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'ea61a319e93c2c3a9bfc9a63840b2155'),
  array('ID' => '163','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'forum','MESSAGE_ID' => 'onAfterMessageAdd','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Forum\\Internals\\ConversionHandlers','TO_METHOD' => 'onMessageAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '3cc5f27501dad77acdecb1c8a4e978de'),
  array('ID' => '164','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'onLogIndexGetContent','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Forum\\Integration\\Socialnetwork\\Log','TO_METHOD' => 'onIndexGetContent','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '909a8b84bf80774a6a89bfbbd2258ce8'),
  array('ID' => '165','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'onLogCommentIndexGetContent','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Forum\\Integration\\Socialnetwork\\LogComment','TO_METHOD' => 'onIndexGetContent','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'e6aaa86c7daeae2bc002e513f06ccffa'),
  array('ID' => '166','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'onContentViewed','TO_MODULE_ID' => 'forum','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Forum\\Integration\\Socialnetwork\\ContentViewHandler','TO_METHOD' => 'onContentViewed','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '5db6b373f6612f36c2ff6783dd4d6154'),
  array('ID' => '167','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeUserTypeAdd','TO_MODULE_ID' => 'highloadblock','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Highloadblock\\HighloadBlockTable','TO_METHOD' => 'OnBeforeUserTypeAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'f9dcff287cf7753e5c56974d37975507'),
  array('ID' => '168','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUserTypeAdd','TO_MODULE_ID' => 'highloadblock','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Highloadblock\\HighloadBlockTable','TO_METHOD' => 'onAfterUserTypeAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd1fa2865e72eca144b964b6fb1eefc15'),
  array('ID' => '169','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeUserTypeDelete','TO_MODULE_ID' => 'highloadblock','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Highloadblock\\HighloadBlockTable','TO_METHOD' => 'OnBeforeUserTypeDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '1bf13707e1a45b8320c2ecd35534cbb4'),
  array('ID' => '170','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'highloadblock','TO_PATH' => '','TO_CLASS' => 'CUserTypeHlblock','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '2ac4a2154f4fd85d67b50f412ed5ed48'),
  array('ID' => '171','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'highloadblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyDirectory','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a6f7df502db8a04590e43188d7cbfc99'),
  array('ID' => '172','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGroupDelete','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlock','TO_METHOD' => 'OnGroupDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'f2320df213f38adf32364d3169d5b197'),
  array('ID' => '173','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeLangDelete','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlock','TO_METHOD' => 'OnBeforeLangDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '46aef774958db327c1170a12d3a70ee5'),
  array('ID' => '174','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnLangDelete','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlock','TO_METHOD' => 'OnLangDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '861f6ee2ca56bf63c3af07db0553606b'),
  array('ID' => '175','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeRightsCheck','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockSection','TO_METHOD' => 'UserTypeRightsCheck','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '2a6d446893d46f04f2c151f458d2908c'),
  array('ID' => '176','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'search','MESSAGE_ID' => 'OnReindex','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlock','TO_METHOD' => 'OnSearchReindex','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'c6c8111f129e0eb19e558106e354e6f6'),
  array('ID' => '177','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'search','MESSAGE_ID' => 'OnSearchGetURL','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlock','TO_METHOD' => 'OnSearchGetURL','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '0ae9fc756bfb1273309240cd8f535672'),
  array('ID' => '178','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditTypes','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlock','TO_METHOD' => 'GetAuditTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '182d19c163e3a5a965bca170c3fb0e83'),
  array('ID' => '179','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditHandlers','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CEventIBlock','TO_METHOD' => 'MakeIBlockObject','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'f7a182e8d9b204970d111e4703b9f523'),
  array('ID' => '180','TIMESTAMP_X' => NULL,'SORT' => '200','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGetRatingContentOwner','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsIBlock','TO_METHOD' => 'OnGetRatingContentOwner','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '6da245944e376d586a3fa2aaee02c70b'),
  array('ID' => '181','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnTaskOperationsChanged','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockRightsStorage','TO_METHOD' => 'OnTaskOperationsChanged','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '01b3f9984fa07b1dfb4bc35d107d5672'),
  array('ID' => '182','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGroupDelete','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockRightsStorage','TO_METHOD' => 'OnGroupDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '2dbbccdee3f2e7bd86446bec02be1d54'),
  array('ID' => '183','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockRightsStorage','TO_METHOD' => 'OnUserDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '78f090ee29030c54788098b0782d28f9'),
  array('ID' => '184','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'perfmon','MESSAGE_ID' => 'OnGetTableSchema','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'iblock','TO_METHOD' => 'OnGetTableSchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '4b71a345c136beed338aa7137943d80b'),
  array('ID' => '185','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sender','MESSAGE_ID' => 'OnConnectorList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Iblock\\SenderEventHandler','TO_METHOD' => 'onConnectorListIblock','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '3de75587a47352dd3cb6d10866f69385'),
  array('ID' => '186','TIMESTAMP_X' => NULL,'SORT' => '10','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyDate','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'fa608e2c397b6793c54ad296619a22e2'),
  array('ID' => '187','TIMESTAMP_X' => NULL,'SORT' => '20','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyDateTime','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '78554c9e3c38ac383d51f0ee4d013120'),
  array('ID' => '188','TIMESTAMP_X' => NULL,'SORT' => '30','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyXmlID','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '952fe5f2ea67493fb9f9b924ce1b992b'),
  array('ID' => '189','TIMESTAMP_X' => NULL,'SORT' => '40','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyFileMan','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'fd688441d5e8203751fb47374931e011'),
  array('ID' => '190','TIMESTAMP_X' => NULL,'SORT' => '50','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyHTML','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '27645f81ce5d6d9f19a47cc171860beb'),
  array('ID' => '191','TIMESTAMP_X' => NULL,'SORT' => '60','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyElementList','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'c53e9314ae43c30267b32310a02d7df4'),
  array('ID' => '192','TIMESTAMP_X' => NULL,'SORT' => '70','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertySequence','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '3ff9528d1264fc77697248957aafdab5'),
  array('ID' => '193','TIMESTAMP_X' => NULL,'SORT' => '80','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertyElementAutoComplete','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '0d233a1e7a0d6a52a52e13df88291024'),
  array('ID' => '194','TIMESTAMP_X' => NULL,'SORT' => '90','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertySKU','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '8678bc826ced4f66640fba3775b18516'),
  array('ID' => '195','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnIBlockPropertyBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'CIBlockPropertySectionAutoComplete','TO_METHOD' => 'GetUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '26ff6f651cb94a1fe4ce9827566f0730'),
  array('ID' => '196','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'onVirtualClassBuildList','TO_MODULE_ID' => 'iblock','TO_PATH' => '','TO_CLASS' => 'Bitrix\\Iblock\\IblockTable','TO_METHOD' => 'compileAllEntities','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '8a4e85071d25e6ba7f9ed315874c411b'),
  array('ID' => '197','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'crm','MESSAGE_ID' => 'onAfterCrmCompanyAdd','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Connector\\Crm','TO_METHOD' => 'onAfterCompanyChange','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '7e8fed841380d8075d45525f328e8940'),
  array('ID' => '198','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'crm','MESSAGE_ID' => 'onAfterCrmCompanyUpdate','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Connector\\Crm','TO_METHOD' => 'onAfterCompanyChange','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '688027a0f389137b02ac0a834f0a8495'),
  array('ID' => '199','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'onAfterIBlockSectionDelete','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Connector\\Iblock','TO_METHOD' => 'onAfterIBlockSectionDelete','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'ffe8a984ae7ff50064ac74e788a80118'),
  array('ID' => '200','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'intranet','MESSAGE_ID' => 'onBuildBindingMenu','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Connector\\Intranet','TO_METHOD' => 'onBuildBindingMenu','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'd5464da9aea2308d3d5f13c2387c4c40'),
  array('ID' => '201','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'landing','MESSAGE_ID' => 'onBuildSourceList','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Connector\\Landing','TO_METHOD' => 'onSourceBuildHandler','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'fc391addc82a816df68510b0ae3363a5'),
  array('ID' => '202','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'onBeforeSiteDelete','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Site','TO_METHOD' => 'onBeforeMainSiteDelete','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '5faa9b5de931dbb101e2e0aef6fc594b'),
  array('ID' => '203','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'onSiteDelete','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Site','TO_METHOD' => 'onMainSiteDelete','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'af029bceca7ea9cc809515e95bd3a710'),
  array('ID' => '204','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'onUserConsentProviderList','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Site\\Cookies','TO_METHOD' => 'onUserConsentProviderList','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'f59a96e272348f934d62ba5d3ee79f21'),
  array('ID' => '205','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'mobile','MESSAGE_ID' => 'onMobileMenuStructureBuilt','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Connector\\Mobile','TO_METHOD' => 'onMobileMenuStructureBuilt','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '01fd8a44b83b5f7fcd2f36a626657ad0'),
  array('ID' => '206','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestServiceBuildDescription','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Publicaction','TO_METHOD' => 'restBase','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '9af99ddecf2dd8c3c5b14721f23e8fef'),
  array('ID' => '207','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onBeforeApplicationUninstall','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Publicaction','TO_METHOD' => 'beforeRestApplicationDelete','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'ef1f080a088ad54298a4ba9bf2896313'),
  array('ID' => '208','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestAppDelete','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Publicaction','TO_METHOD' => 'restApplicationDelete','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '031cfc016e3be91368376a391c351dea'),
  array('ID' => '209','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationGetManifest','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Transfer\\AppConfiguration','TO_METHOD' => 'getManifestList','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'b88124aac7c2c8ddecf2ce127a9c6ef8'),
  array('ID' => '210','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationExport','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Transfer\\AppConfiguration','TO_METHOD' => 'onEventExportController','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '917b00a9f82e6b8f7899a6e8c3b22236'),
  array('ID' => '211','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationGetManifestSetting','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Transfer\\AppConfiguration','TO_METHOD' => 'onInitManifest','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '99fa9aa37a23a371cca0153c840c7802'),
  array('ID' => '212','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationEntity','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Transfer\\AppConfiguration','TO_METHOD' => 'getEntityList','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '820df699b9abf22ce0356fc9957be794'),
  array('ID' => '213','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationImport','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Transfer\\AppConfiguration','TO_METHOD' => 'onEventImportController','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'e65daaed01b2c52e6098ee47ddb7f07a'),
  array('ID' => '214','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationFinish','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Transfer\\AppConfiguration','TO_METHOD' => 'onFinish','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '45343e5617dca2ad06a5d13050232caf'),
  array('ID' => '215','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'seo','MESSAGE_ID' => 'onExtensionInstall','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Hook\\Page\\PixelFb','TO_METHOD' => 'changeBusinessPixel','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '27bf01f04349ff82ede423de62df5384'),
  array('ID' => '216','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'onFillSocNetFeaturesList','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Connector\\SocialNetwork','TO_METHOD' => 'onFillSocNetFeaturesList','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '9825d91c89b53b69655aa98ea4f3a6cf'),
  array('ID' => '217','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'onFillSocNetMenu','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Connector\\SocialNetwork','TO_METHOD' => 'onFillSocNetMenu','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '14ecfb8fb4fc20f22ddb5ac64783461d'),
  array('ID' => '218','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'onSocNetGroupDelete','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Connector\\SocialNetwork','TO_METHOD' => 'onSocNetGroupDelete','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '78202f1461a8822a105a19f45502c327'),
  array('ID' => '219','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterEpilog','TO_MODULE_ID' => 'messageservice','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\MessageService\\Queue','TO_METHOD' => 'run','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '6bcb21b0ccc5ac89d9531ddf8b94683c'),
  array('ID' => '220','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestServiceBuildDescription','TO_MODULE_ID' => 'messageservice','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\MessageService\\RestService','TO_METHOD' => 'onRestServiceBuildDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7524628243223e572590eea87cc03f73'),
  array('ID' => '221','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestAppDelete','TO_MODULE_ID' => 'messageservice','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\MessageService\\RestService','TO_METHOD' => 'onRestAppDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '5febc41cd526ecba95dbb4843dd9c134'),
  array('ID' => '222','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestAppUpdate','TO_MODULE_ID' => 'messageservice','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\MessageService\\RestService','TO_METHOD' => 'onRestAppUpdate','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7e77b4d550c200a4ec06872af7857ee6'),
  array('ID' => '223','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'pull','MESSAGE_ID' => 'OnGetDependentModule','TO_MODULE_ID' => 'mobileapp','TO_PATH' => '','TO_CLASS' => 'CMobileAppPullSchema','TO_METHOD' => 'OnGetDependentModule','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '4833278dbe60d476fbccbaa54545cffa'),
  array('ID' => '224','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'perfmon','MESSAGE_ID' => 'OnGetTableSchema','TO_MODULE_ID' => 'perfmon','TO_PATH' => '','TO_CLASS' => 'perfmon','TO_METHOD' => 'OnGetTableSchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '3a4da255b44f05899b64e66a40c12662'),
  array('ID' => '225','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnBeforeIBlockElementDelete','TO_MODULE_ID' => 'photogallery','TO_PATH' => '','TO_CLASS' => 'CPhotogalleryElement','TO_METHOD' => 'OnBeforeIBlockElementDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'dc9ea0b8411dfa54929a022d44bc5b1a'),
  array('ID' => '226','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnAfterIBlockElementAdd','TO_MODULE_ID' => 'photogallery','TO_PATH' => '','TO_CLASS' => 'CPhotogalleryElement','TO_METHOD' => 'OnAfterIBlockElementAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7fc7f3cc71ad3188022388365d446ed2'),
  array('ID' => '227','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'search','MESSAGE_ID' => 'BeforeIndex','TO_MODULE_ID' => 'photogallery','TO_PATH' => '','TO_CLASS' => 'CRatingsComponentsPhotogallery','TO_METHOD' => 'BeforeIndex','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '06e2330d56c3b972e67707d665383704'),
  array('ID' => '228','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'im','MESSAGE_ID' => 'OnGetNotifySchema','TO_MODULE_ID' => 'photogallery','TO_PATH' => '','TO_CLASS' => 'CPhotogalleryNotifySchema','TO_METHOD' => 'OnGetNotifySchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7ca75249042a033e858d90dc2473adac'),
  array('ID' => '229','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialnetwork','MESSAGE_ID' => 'OnSocNetGroupDelete','TO_MODULE_ID' => 'photogallery','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Photogallery\\Integration\\Socialnetwork\\Group','TO_METHOD' => 'onSocNetGroupDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'bded61c39d768685fa7dd112c63c702b'),
  array('ID' => '230','TIMESTAMP_X' => NULL,'SORT' => '49','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeProlog','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => 'CRestEventHandlers','TO_METHOD' => 'OnBeforeProlog','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '395c9c42c3cc9392de1e5887617afe6d'),
  array('ID' => '231','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestServiceBuildDescription','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => 'CBitrixRestEntity','TO_METHOD' => 'OnRestServiceBuildDescription','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'f63068b1eb62c36219518206e1e2827c'),
  array('ID' => '232','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestServiceBuildDescription','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Api\\User','TO_METHOD' => 'onRestServiceBuildDescription','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'c9a03e9019564649e55f5409b661e050'),
  array('ID' => '233','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestServiceBuildDescription','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Api\\Placement','TO_METHOD' => 'onRestServiceBuildDescription','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '9751a266c2b6f6be5c34b1541bf7c194'),
  array('ID' => '234','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestServiceBuildDescription','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Api\\Event','TO_METHOD' => 'onRestServiceBuildDescription','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '842ad63f19aff6d810059c7e56739aae'),
  array('ID' => '235','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestServiceBuildDescription','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Api\\UserFieldType','TO_METHOD' => 'onRestServiceBuildDescription','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '4caf68a5256aabe4abef37f24562e59b'),
  array('ID' => '236','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onFindMethodDescription','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Engine\\RestManager','TO_METHOD' => 'onFindMethodDescription','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '4d0614f880674af333326dd5ba9b2828'),
  array('ID' => '237','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnApplicationsBuildList','TO_MODULE_ID' => 'main','TO_PATH' => 'modules/rest/lib/apauth/application.php','TO_CLASS' => '\\Bitrix\\Rest\\APAuth\\Application','TO_METHOD' => 'onApplicationsBuildList','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '9c39129872987f8dcc8baacc0c446ed7'),
  array('ID' => '238','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'im','MESSAGE_ID' => 'OnAfterConfirmNotify','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\NotifyIm','TO_METHOD' => 'receive','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '2ac9c19fe69d4e106deaa6f4a7a4371b'),
  array('ID' => '239','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => '\\Bitrix\\Rest\\APAuth\\Password::OnDelete','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\APAuth\\PermissionTable','TO_METHOD' => 'onPasswordDelete','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'f04447ca635f045ec1a64e593964fc90'),
  array('ID' => '240','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'perfmon','MESSAGE_ID' => 'OnGetTableSchema','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => 'rest','TO_METHOD' => 'OnGetTableSchema','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '47a76003c8f9f2d8c820f446e084ff39'),
  array('ID' => '241','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestApplicationConfigurationImport','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Configuration\\AppConfiguration','TO_METHOD' => 'onEventImportController','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '3fc1dd7e523b33f9d76c19e54d45c2fb'),
  array('ID' => '242','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestApplicationConfigurationExport','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Configuration\\AppConfiguration','TO_METHOD' => 'onEventExportController','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'b90a349060c693506b740c4d36f75f5f'),
  array('ID' => '243','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestApplicationConfigurationClear','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Configuration\\AppConfiguration','TO_METHOD' => 'onEventClearController','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '75dccda637a740c033b2d014a84a8009'),
  array('ID' => '244','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestApplicationConfigurationEntity','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Configuration\\AppConfiguration','TO_METHOD' => 'getEntityList','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '8d83d219eaf2f415d55fb67e221b7c3d'),
  array('ID' => '245','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestApplicationConfigurationGetManifest','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Configuration\\AppConfiguration','TO_METHOD' => 'getManifestList','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '6ba35b1f4b01d1e358e1b3a79ac437d6'),
  array('ID' => '246','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestCheckAuth','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\OAuth\\Auth','TO_METHOD' => 'onRestCheckAuth','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '70e923729089b8cba69bb3b4311da11e'),
  array('ID' => '247','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestCheckAuth','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\APAuth\\Auth','TO_METHOD' => 'onRestCheckAuth','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '3550e6c95772564101770e0c9cb54470'),
  array('ID' => '248','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestCheckAuth','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\SessionAuth\\Auth','TO_METHOD' => 'onRestCheckAuth','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '8e33ae5a47b59d21df7d26f916d19e38'),
  array('ID' => '249','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterRegisterModule','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Engine\\ScopeManager','TO_METHOD' => 'onChangeRegisterModule','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '900fb8bbf0d59d1924bedae5da1b6eb1'),
  array('ID' => '250','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUnRegisterModule','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Engine\\ScopeManager','TO_METHOD' => 'onChangeRegisterModule','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'e97e569fe3fc7775aa4ece09cdf209bc'),
  array('ID' => '251','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterRegisterModule','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Marketplace\\TagTable','TO_METHOD' => 'onAfterRegisterModule','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '80afec537db1eeda99462f0676dbb835'),
  array('ID' => '252','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUnRegisterModule','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Marketplace\\TagTable','TO_METHOD' => 'onAfterUnRegisterModule','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'fe9cb5af7e8ca277ca29b4a5423bd08b'),
  array('ID' => '253','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditTypes','TO_MODULE_ID' => 'scale','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Scale\\Logger','TO_METHOD' => 'onEventLogGetAuditTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd8192b7113f1652bdf8a37bcd4e38dea'),
  array('ID' => '254','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnChangePermissions','TO_MODULE_ID' => 'search','TO_PATH' => '','TO_CLASS' => 'CSearch','TO_METHOD' => 'OnChangeFilePermissions','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '1c37aedc2ec89f94624291d097fe7adf'),
  array('ID' => '255','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnChangeFile','TO_MODULE_ID' => 'search','TO_PATH' => '','TO_CLASS' => 'CSearch','TO_METHOD' => 'OnChangeFile','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd51170fc3433fde7eab8edc1c2b933a0'),
  array('ID' => '256','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGroupDelete','TO_MODULE_ID' => 'search','TO_PATH' => '','TO_CLASS' => 'CSearch','TO_METHOD' => 'OnGroupDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '05382d7448b1ba259b89bf9e87e4eb44'),
  array('ID' => '257','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnLangDelete','TO_MODULE_ID' => 'search','TO_PATH' => '','TO_CLASS' => 'CSearch','TO_METHOD' => 'OnLangDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '15ebda82514af5a966b3466cd26992a4'),
  array('ID' => '258','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUserUpdate','TO_MODULE_ID' => 'search','TO_PATH' => '','TO_CLASS' => 'CSearchUser','TO_METHOD' => 'OnAfterUserUpdate','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9e0cea5039973193afc706ec8978d674'),
  array('ID' => '259','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'search','TO_PATH' => '','TO_CLASS' => 'CSearchUser','TO_METHOD' => 'DeleteByUserID','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '524a910f381ba144bf50caa152222ed6'),
  array('ID' => '260','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'cluster','MESSAGE_ID' => 'OnGetTableList','TO_MODULE_ID' => 'search','TO_PATH' => '','TO_CLASS' => 'search','TO_METHOD' => 'OnGetTableList','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a40ffd36df151e2c0294b5639e81d665'),
  array('ID' => '261','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'perfmon','MESSAGE_ID' => 'OnGetTableSchema','TO_MODULE_ID' => 'search','TO_PATH' => '','TO_CLASS' => 'search','TO_METHOD' => 'OnGetTableSchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9c8df2577e0cb80c68afa2030e193efb'),
  array('ID' => '262','TIMESTAMP_X' => NULL,'SORT' => '90','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEpilog','TO_MODULE_ID' => 'search','TO_PATH' => '','TO_CLASS' => 'CSearchStatistic','TO_METHOD' => 'OnEpilog','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '6b3591ad78ac2a3ce6ad411f0aff47fe'),
  array('ID' => '263','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'security','TO_PATH' => '','TO_CLASS' => 'CSecurityUser','TO_METHOD' => 'OnUserDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '450a1c7509f5363a9bf7d1472f22f9cf'),
  array('ID' => '264','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditTypes','TO_MODULE_ID' => 'security','TO_PATH' => '','TO_CLASS' => 'CSecurityFilter','TO_METHOD' => 'GetAuditTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '893bc94df887141b4f3579561ea37454'),
  array('ID' => '265','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEventLogGetAuditTypes','TO_MODULE_ID' => 'security','TO_PATH' => '','TO_CLASS' => 'CSecurityAntiVirus','TO_METHOD' => 'GetAuditTypes','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9ba919b0537aa25fe47e438c2428b4d9'),
  array('ID' => '266','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAdminInformerInsertItems','TO_MODULE_ID' => 'security','TO_PATH' => '','TO_CLASS' => 'CSecurityFilter','TO_METHOD' => 'OnAdminInformerInsertItems','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'c751923f396ccc4e102ed17e97cb8afb'),
  array('ID' => '267','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAdminInformerInsertItems','TO_MODULE_ID' => 'security','TO_PATH' => '','TO_CLASS' => 'CSecuritySiteChecker','TO_METHOD' => 'OnAdminInformerInsertItems','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '0c7cea553d58a72f7c5521d282898bc7'),
  array('ID' => '268','TIMESTAMP_X' => NULL,'SORT' => '5','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeProlog','TO_MODULE_ID' => 'security','TO_PATH' => '','TO_CLASS' => 'CSecurityFilter','TO_METHOD' => 'OnBeforeProlog','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'bb70fedd18267b1c5290068ae80dbc4d'),
  array('ID' => '269','TIMESTAMP_X' => NULL,'SORT' => '9999','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEndBufferContent','TO_MODULE_ID' => 'security','TO_PATH' => '','TO_CLASS' => 'CSecurityXSSDetect','TO_METHOD' => 'OnEndBufferContent','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'd1886589ecd51b020420e6c1415edeaf'),
  array('ID' => '270','TIMESTAMP_X' => NULL,'SORT' => '1','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeLocalRedirect','TO_MODULE_ID' => 'security','TO_PATH' => '','TO_CLASS' => 'CSecurityRedirect','TO_METHOD' => 'BeforeLocalRedirect','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '2dbeb7fa7a8bec4d90e8940616976b3d'),
  array('ID' => '271','TIMESTAMP_X' => NULL,'SORT' => '1','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnEndBufferContent','TO_MODULE_ID' => 'security','TO_PATH' => '','TO_CLASS' => 'CSecurityRedirect','TO_METHOD' => 'EndBufferContent','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '099871646b4df8c1263e26f9bd91f3bd'),
  array('ID' => '272','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnPanelCreate','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => 'CSeoEventHandlers','TO_METHOD' => 'SeoOnPanelCreate','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '79688b0b4a106b805d09e63ffe88f580'),
  array('ID' => '273','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'fileman','MESSAGE_ID' => 'OnIncludeHTMLEditorScript','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => 'CSeoEventHandlers','TO_METHOD' => 'OnIncludeHTMLEditorScript','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '7995eac5813e40f6b3e82b146631397e'),
  array('ID' => '274','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'fileman','MESSAGE_ID' => 'OnBeforeHTMLEditorScriptRuns','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => 'CSeoEventHandlers','TO_METHOD' => 'OnBeforeHTMLEditorScriptRuns','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '313b34609f1fa34d34cde1c2103c09ff'),
  array('ID' => '275','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnAfterIBlockSectionAdd','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapIblock','TO_METHOD' => 'addSection','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'c61de21b0b0873525fa5c39427324664'),
  array('ID' => '276','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnAfterIBlockElementAdd','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapIblock','TO_METHOD' => 'addElement','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '1b167ab85d6d744bba456e559546f13e'),
  array('ID' => '277','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnBeforeIBlockSectionDelete','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapIblock','TO_METHOD' => 'beforeDeleteSection','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '148ce014df9dd9f99f17ebfc5d766e8a'),
  array('ID' => '278','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnBeforeIBlockElementDelete','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapIblock','TO_METHOD' => 'beforeDeleteElement','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '4b1e9896d9f0aa37a7039a321f25f9a5'),
  array('ID' => '279','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnAfterIBlockSectionDelete','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapIblock','TO_METHOD' => 'deleteSection','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'b699c1c0d6665f9cffe7ff76ab108a24'),
  array('ID' => '280','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnAfterIBlockElementDelete','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapIblock','TO_METHOD' => 'deleteElement','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'ff3a36654015c53890f4cf2204b030c4'),
  array('ID' => '281','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnBeforeIBlockSectionUpdate','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapIblock','TO_METHOD' => 'beforeUpdateSection','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'aa5f8c360ed88eb5e2884c57b6f1f2f3'),
  array('ID' => '282','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnBeforeIBlockElementUpdate','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapIblock','TO_METHOD' => 'beforeUpdateElement','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'a1022e0619263c0e91139fb3f9837085'),
  array('ID' => '283','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnAfterIBlockSectionUpdate','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapIblock','TO_METHOD' => 'updateSection','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '27930cffcd40b84666d0a22e1a953c41'),
  array('ID' => '284','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'iblock','MESSAGE_ID' => 'OnAfterIBlockElementUpdate','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapIblock','TO_METHOD' => 'updateElement','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'f0151e07363564774d45acba4100aebe'),
  array('ID' => '285','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'forum','MESSAGE_ID' => 'onAfterTopicAdd','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapForum','TO_METHOD' => 'addTopic','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'd4d54756116942c9ee0bda9b31e9d0e7'),
  array('ID' => '286','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'forum','MESSAGE_ID' => 'onAfterTopicUpdate','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapForum','TO_METHOD' => 'updateTopic','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '3e0a8569016a4c941f3eb4aa9fca6e8b'),
  array('ID' => '287','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'forum','MESSAGE_ID' => 'onAfterTopicDelete','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\SitemapForum','TO_METHOD' => 'deleteTopic','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '7f4379c818231561b41589d3de41e36b'),
  array('ID' => '288','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAdminIBlockElementEdit','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\AdvTabEngine','TO_METHOD' => 'eventHandler','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'c894d167ef03c35375b8eb8f2551a798'),
  array('ID' => '289','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeProlog','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\AdvSession','TO_METHOD' => 'checkSession','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '5fdf8dd9fd70719e442efcb589175bf0'),
  array('ID' => '290','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sale','MESSAGE_ID' => 'OnOrderSave','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\AdvSession','TO_METHOD' => 'onOrderSave','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '07d4ab0b1aa0aa130a0cbc06403f6eae'),
  array('ID' => '291','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sale','MESSAGE_ID' => 'OnBasketOrder','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\AdvSession','TO_METHOD' => 'onBasketOrder','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'cf6298b090e92e955b32c358c1d14b25'),
  array('ID' => '292','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sale','MESSAGE_ID' => 'onSalePayOrder','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\AdvSession','TO_METHOD' => 'onSalePayOrder','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '745afed820778e33d5cd3e91cbd622f1'),
  array('ID' => '293','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sale','MESSAGE_ID' => 'onSaleDeductOrder','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\AdvSession','TO_METHOD' => 'onSaleDeductOrder','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '12861bd5c6c27ffa2abe5cac90ea58d8'),
  array('ID' => '294','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sale','MESSAGE_ID' => 'onSaleDeliveryOrder','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\AdvSession','TO_METHOD' => 'onSaleDeliveryOrder','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'ead8fb64fece572d1fabd3d6fd27af27'),
  array('ID' => '295','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sale','MESSAGE_ID' => 'onSaleStatusOrder','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\AdvSession','TO_METHOD' => 'onSaleStatusOrder','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'b7b9ac4bbf458d433e1cf3835ff4cb6c'),
  array('ID' => '296','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'conversion','MESSAGE_ID' => 'OnSetDayContextAttributes','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\ConversionHandler','TO_METHOD' => 'onSetDayContextAttributes','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'c19eb7659342fabc34b953f69e8b9eee'),
  array('ID' => '297','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'conversion','MESSAGE_ID' => 'OnGetAttributeTypes','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\ConversionHandler','TO_METHOD' => 'onGetAttributeTypes','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '379294eefad289e474bf0c5ce2a281d8'),
  array('ID' => '298','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'catalog','MESSAGE_ID' => 'OnProductUpdate','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\Adv\\Auto','TO_METHOD' => 'checkQuantity','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '0f4deda4d57adb4389d85a19e5bbcf2b'),
  array('ID' => '299','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'catalog','MESSAGE_ID' => 'OnProductSetAvailableUpdate','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\Adv\\Auto','TO_METHOD' => 'checkQuantity','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '3d040ae51f0f6a4b2a08be0e6e1494d4'),
  array('ID' => '300','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'bitrix24','MESSAGE_ID' => 'onDomainChange','TO_MODULE_ID' => 'seo','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Seo\\Service','TO_METHOD' => 'changeRegisteredDomain','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'fcb2dadb8b7ff1863c0ad86320e9e521'),
  array('ID' => '301','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'socialservices','TO_PATH' => '','TO_CLASS' => 'CSocServAuthDB','TO_METHOD' => 'OnUserDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '1f5b8fc024dfdf83952d6c723466cdf5'),
  array('ID' => '302','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterUserLogout','TO_MODULE_ID' => 'socialservices','TO_PATH' => '','TO_CLASS' => 'CSocServEventHandlers','TO_METHOD' => 'OnUserLogout','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '7e4c40a3ff7cd102879cef10653f97ac'),
  array('ID' => '303','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'timeman','MESSAGE_ID' => 'OnAfterTMReportDailyAdd','TO_MODULE_ID' => 'socialservices','TO_PATH' => '','TO_CLASS' => 'CSocServAuthDB','TO_METHOD' => 'OnAfterTMReportDailyAdd','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'a16159f6a90f1b67cb9ec15b0c1bab3a'),
  array('ID' => '304','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'timeman','MESSAGE_ID' => 'OnAfterTMDayStart','TO_MODULE_ID' => 'socialservices','TO_PATH' => '','TO_CLASS' => 'CSocServAuthDB','TO_METHOD' => 'OnAfterTMDayStart','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '9567feb38890d6581a3204dc5e65e8b6'),
  array('ID' => '305','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'timeman','MESSAGE_ID' => 'OnTimeManShow','TO_MODULE_ID' => 'socialservices','TO_PATH' => '','TO_CLASS' => 'CSocServEventHandlers','TO_METHOD' => 'OnTimeManShow','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'b728f3cea11d374f7638c29f84e8e15e'),
  array('ID' => '306','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnFindExternalUser','TO_MODULE_ID' => 'socialservices','TO_PATH' => '','TO_CLASS' => 'CSocServAuthDB','TO_METHOD' => 'OnFindExternalUser','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '1ab251d15efc87c5b5cfe6396f5dec1b'),
  array('ID' => '307','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'perfmon','MESSAGE_ID' => 'OnGetTableSchema','TO_MODULE_ID' => 'socialservices','TO_PATH' => '','TO_CLASS' => 'socialservices','TO_METHOD' => 'OnGetTableSchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '56107bf1a0dcee0db660c0ec27c31c6c'),
  array('ID' => '308','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialservices','MESSAGE_ID' => 'OnFindSocialservicesUser','TO_MODULE_ID' => 'socialservices','TO_PATH' => '','TO_CLASS' => 'CSocServAuthManager','TO_METHOD' => 'checkOldUser','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'c3d7460e4ef694f5bc53b6a6ad902407'),
  array('ID' => '309','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'socialservices','MESSAGE_ID' => 'OnFindSocialservicesUser','TO_MODULE_ID' => 'socialservices','TO_PATH' => '','TO_CLASS' => 'CSocServAuthManager','TO_METHOD' => 'checkAbandonedUser','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '331f99f0b265544c33777c299eab16f6'),
  array('ID' => '310','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeLangDelete','TO_MODULE_ID' => 'subscribe','TO_PATH' => '','TO_CLASS' => 'CRubric','TO_METHOD' => 'OnBeforeLangDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'ee539731a3e52fe65cb52596ce0856d2'),
  array('ID' => '311','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'subscribe','TO_PATH' => '','TO_CLASS' => 'CSubscription','TO_METHOD' => 'OnUserDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '88c6e57a6f0f18341332db1879c0005b'),
  array('ID' => '312','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserLogout','TO_MODULE_ID' => 'subscribe','TO_PATH' => '','TO_CLASS' => 'CSubscription','TO_METHOD' => 'OnUserLogout','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'f4fa3b156b00fb4415c8612f8439f278'),
  array('ID' => '313','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnGroupDelete','TO_MODULE_ID' => 'subscribe','TO_PATH' => '','TO_CLASS' => 'CPosting','TO_METHOD' => 'OnGroupDelete','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '990d63845f75e93e670ed85f1aa15152'),
  array('ID' => '314','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'sender','MESSAGE_ID' => 'OnConnectorList','TO_MODULE_ID' => 'subscribe','TO_PATH' => '','TO_CLASS' => 'Bitrix\\Subscribe\\SenderEventHandler','TO_METHOD' => 'onConnectorListSubscriber','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '8a1cffe1bd46a72108e48656a1bae99b'),
  array('ID' => '315','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'perfmon','MESSAGE_ID' => 'OnGetTableSchema','TO_MODULE_ID' => 'subscribe','TO_PATH' => '','TO_CLASS' => 'subscribe','TO_METHOD' => 'OnGetTableSchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '320b1fb657ce46ad23992d00b2f54916'),
  array('ID' => '316','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnPanelCreate','TO_MODULE_ID' => 'translate','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Translate\\Ui\\Panel','TO_METHOD' => 'onPanelCreate','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '88ecb95eac2e28b80f234bfc8c1cd597'),
  array('ID' => '317','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'perfmon','MESSAGE_ID' => 'OnGetTableSchema','TO_MODULE_ID' => 'translate','TO_PATH' => '','TO_CLASS' => 'translate','TO_METHOD' => 'onGetTableSchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '00347f45b2f48480b1a521c32036beb5'),
  array('ID' => '320','TIMESTAMP_X' => NULL,'SORT' => '10','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeProlog','TO_MODULE_ID' => 'main','TO_PATH' => '/modules/vote/keepvoting.php','TO_CLASS' => '','TO_METHOD' => '','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '251d4d100c1545ca5847d8d6d626dea9'),
  array('ID' => '321','TIMESTAMP_X' => NULL,'SORT' => '200','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserTypeBuildList','TO_MODULE_ID' => 'vote','TO_PATH' => '','TO_CLASS' => 'Bitrix\\Vote\\Uf\\VoteUserType','TO_METHOD' => 'getUserTypeDescription','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'e30dd2d26df22ce2dcffef84256cf160'),
  array('ID' => '322','TIMESTAMP_X' => NULL,'SORT' => '200','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserLogin','TO_MODULE_ID' => 'vote','TO_PATH' => '','TO_CLASS' => 'Bitrix\\Vote\\User','TO_METHOD' => 'onUserLogin','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '5047b245af7aede3f2474b40dfbc65be'),
  array('ID' => '323','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'im','MESSAGE_ID' => 'OnGetNotifySchema','TO_MODULE_ID' => 'vote','TO_PATH' => '','TO_CLASS' => 'CVoteNotifySchema','TO_METHOD' => 'OnGetNotifySchema','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => '97ffe9642e64dc7d68f9ec9bc789be47'),
  array('ID' => '324','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnBeforeProlog','TO_MODULE_ID' => 'main','TO_PATH' => '/modules/main/install/wizard_sol/panel_button.php','TO_CLASS' => 'CWizardSolPanel','TO_METHOD' => 'ShowPanel','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'bbd7b8c1e518a0b3eae815eb91a95c11'),
  array('ID' => '325','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterFileDeleteDuplicate','TO_MODULE_ID' => 'clouds','TO_PATH' => '','TO_CLASS' => 'CCloudStorage','TO_METHOD' => 'OnAfterFileDeleteDuplicate','TO_METHOD_ARG' => '','VERSION' => '1','UNIQUE_ID' => 'c5f3eb3991b50d4f80c2ccbdc94f8656'),
  array('ID' => '326','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnUserDelete','TO_MODULE_ID' => 'ui','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\UI\\Integration\\Main\\User','TO_METHOD' => 'onDelete','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '5e748ff204d0dac471be127b136eeb1d'),
  array('ID' => '327','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnFileDelete','TO_MODULE_ID' => 'ui','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\UI\\Avatar\\Mask\\Item','TO_METHOD' => 'onFileDelete','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'bdf678d45b7e9f3ce906099a5e4fc975'),
  array('ID' => '328','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestAppDelete','TO_MODULE_ID' => 'ui','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\UI\\Integration\\Rest\\App','TO_METHOD' => 'onRestAppDelete','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'b213605cfa38675d5e4b60f257f6acce'),
  array('ID' => '329','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'OnRestAppInstall','TO_MODULE_ID' => 'ui','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\UI\\Integration\\Rest\\App','TO_METHOD' => 'OnRestAppInstall','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '206ce4eafe25cc4b5fbaddfa36eaba47'),
  array('ID' => '330','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationGetManifest','TO_MODULE_ID' => 'ui','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\UI\\Integration\\Rest\\MaskManifest','TO_METHOD' => 'onRestApplicationConfigurationGetManifest','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'daad84620a1a84daef4884f1162e2099'),
  array('ID' => '331','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationGetManifestSetting','TO_MODULE_ID' => 'ui','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\UI\\Integration\\Rest\\MaskManifest','TO_METHOD' => 'onRestApplicationConfigurationGetManifestSetting','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'b3290d964ad532e24a892bae6001146c'),
  array('ID' => '332','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationExport','TO_MODULE_ID' => 'ui','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\UI\\Integration\\Rest\\MaskManifest','TO_METHOD' => 'onRestApplicationConfigurationExport','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'ac9b60f1d69d98c3980413800a3524f7'),
  array('ID' => '333','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationEntity','TO_MODULE_ID' => 'ui','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\UI\\Integration\\Rest\\MaskManifest','TO_METHOD' => 'onRestApplicationConfigurationEntity','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '8d609b415b9bfa097d137ab69ba6903f'),
  array('ID' => '334','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'rest','MESSAGE_ID' => 'onRestApplicationConfigurationImport','TO_MODULE_ID' => 'ui','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\UI\\Integration\\Rest\\MaskManifest','TO_METHOD' => 'onRestApplicationConfigurationImport','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'b1a5ce1bd868f8c86462c5b60eec1307'),
  array('ID' => '335','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterFileDeleteDuplicate','TO_MODULE_ID' => 'landing','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Landing\\Update\\Block\\DuplicateImages','TO_METHOD' => 'onAfterFileDeleteDuplicate','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'b80f7597db6200591a0e0e41c14e0ee0'),
  array('ID' => '336','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'ui','MESSAGE_ID' => 'onUIFormInitialize','TO_MODULE_ID' => 'location','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Location\\Infrastructure\\EventHandler','TO_METHOD' => 'onUIFormInitialize','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => '462272192a150e16b28f1e1bd33ed62b'),
  array('ID' => '337','TIMESTAMP_X' => NULL,'SORT' => '100','FROM_MODULE_ID' => 'main','MESSAGE_ID' => 'OnAfterSetOption_~mp24_paid_date','TO_MODULE_ID' => 'rest','TO_PATH' => '','TO_CLASS' => '\\Bitrix\\Rest\\Marketplace\\Client','TO_METHOD' => 'onChangeSubscriptionDate','TO_METHOD_ARG' => '','VERSION' => '2','UNIQUE_ID' => 'b6ab5bafe2befd82726761f5a8b38a0b')
);

/* `rimstudio_db`.`b_numerator` */
$b_numerator = array(
);

/* `rimstudio_db`.`b_numerator_sequence` */
$b_numerator_sequence = array(
);

/* `rimstudio_db`.`b_operation` */
$b_operation = array(
  array('ID' => '1','NAME' => 'edit_php','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '2','NAME' => 'view_own_profile','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '3','NAME' => 'edit_own_profile','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '4','NAME' => 'view_all_users','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '5','NAME' => 'view_groups','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '6','NAME' => 'view_tasks','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '7','NAME' => 'view_other_settings','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '8','NAME' => 'view_subordinate_users','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '9','NAME' => 'edit_subordinate_users','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '10','NAME' => 'edit_all_users','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '11','NAME' => 'edit_groups','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '12','NAME' => 'edit_tasks','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '13','NAME' => 'edit_other_settings','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '14','NAME' => 'cache_control','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '15','NAME' => 'lpa_template_edit','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '16','NAME' => 'view_event_log','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '17','NAME' => 'edit_ratings','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '18','NAME' => 'manage_short_uri','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '19','NAME' => 'fm_view_permission','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '20','NAME' => 'fm_view_file','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '21','NAME' => 'fm_view_listing','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '22','NAME' => 'fm_edit_existent_folder','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '23','NAME' => 'fm_create_new_file','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '24','NAME' => 'fm_edit_existent_file','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '25','NAME' => 'fm_create_new_folder','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '26','NAME' => 'fm_delete_file','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '27','NAME' => 'fm_delete_folder','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '28','NAME' => 'fm_edit_in_workflow','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '29','NAME' => 'fm_rename_file','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '30','NAME' => 'fm_rename_folder','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '31','NAME' => 'fm_upload_file','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '32','NAME' => 'fm_add_to_menu','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '33','NAME' => 'fm_download_file','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '34','NAME' => 'fm_lpa','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '35','NAME' => 'fm_edit_permission','MODULE_ID' => 'main','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '36','NAME' => 'bitrixcloud_monitoring','MODULE_ID' => 'bitrixcloud','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '37','NAME' => 'bitrixcloud_backup','MODULE_ID' => 'bitrixcloud','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '39','NAME' => 'clouds_browse','MODULE_ID' => 'clouds','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '40','NAME' => 'clouds_upload','MODULE_ID' => 'clouds','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '41','NAME' => 'clouds_config','MODULE_ID' => 'clouds','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '42','NAME' => 'fileman_view_all_settings','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '43','NAME' => 'fileman_edit_menu_types','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '44','NAME' => 'fileman_add_element_to_menu','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '45','NAME' => 'fileman_edit_menu_elements','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '46','NAME' => 'fileman_edit_existent_files','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '47','NAME' => 'fileman_edit_existent_folders','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '48','NAME' => 'fileman_admin_files','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '49','NAME' => 'fileman_admin_folders','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '50','NAME' => 'fileman_view_permissions','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '51','NAME' => 'fileman_edit_all_settings','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '52','NAME' => 'fileman_upload_files','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '53','NAME' => 'fileman_view_file_structure','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '54','NAME' => 'fileman_install_control','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '55','NAME' => 'medialib_view_collection','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '56','NAME' => 'medialib_new_collection','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '57','NAME' => 'medialib_edit_collection','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '58','NAME' => 'medialib_del_collection','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '59','NAME' => 'medialib_access','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '60','NAME' => 'medialib_new_item','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '61','NAME' => 'medialib_edit_item','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '62','NAME' => 'medialib_del_item','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '63','NAME' => 'sticker_view','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'stickers'),
  array('ID' => '64','NAME' => 'sticker_edit','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'stickers'),
  array('ID' => '65','NAME' => 'sticker_new','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'stickers'),
  array('ID' => '66','NAME' => 'sticker_del','MODULE_ID' => 'fileman','DESCRIPTION' => '','BINDING' => 'stickers'),
  array('ID' => '67','NAME' => 'hl_element_read','MODULE_ID' => 'highloadblock','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '68','NAME' => 'hl_element_write','MODULE_ID' => 'highloadblock','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '69','NAME' => 'hl_element_delete','MODULE_ID' => 'highloadblock','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '70','NAME' => 'section_read','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '71','NAME' => 'element_read','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '72','NAME' => 'section_element_bind','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '73','NAME' => 'iblock_admin_display','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '74','NAME' => 'element_edit','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '75','NAME' => 'element_edit_price','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '76','NAME' => 'element_delete','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '77','NAME' => 'element_bizproc_start','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '78','NAME' => 'section_edit','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '79','NAME' => 'section_delete','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '80','NAME' => 'section_section_bind','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '81','NAME' => 'element_edit_any_wf_status','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '82','NAME' => 'iblock_edit','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '83','NAME' => 'iblock_delete','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '84','NAME' => 'iblock_rights_edit','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '85','NAME' => 'iblock_export','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '86','NAME' => 'section_rights_edit','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '87','NAME' => 'element_rights_edit','MODULE_ID' => 'iblock','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '88','NAME' => 'landing_read','MODULE_ID' => 'landing','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '89','NAME' => 'landing_edit','MODULE_ID' => 'landing','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '90','NAME' => 'landing_sett','MODULE_ID' => 'landing','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '91','NAME' => 'landing_public','MODULE_ID' => 'landing','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '92','NAME' => 'landing_delete','MODULE_ID' => 'landing','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '93','NAME' => 'security_filter_bypass','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '94','NAME' => 'security_edit_user_otp','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '95','NAME' => 'security_module_settings_read','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '96','NAME' => 'security_panel_view','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '97','NAME' => 'security_filter_settings_read','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '98','NAME' => 'security_otp_settings_read','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '99','NAME' => 'security_iprule_admin_settings_read','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '100','NAME' => 'security_session_settings_read','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '101','NAME' => 'security_redirect_settings_read','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '102','NAME' => 'security_stat_activity_settings_read','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '103','NAME' => 'security_iprule_settings_read','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '104','NAME' => 'security_antivirus_settings_read','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '105','NAME' => 'security_frame_settings_read','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '106','NAME' => 'security_module_settings_write','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '107','NAME' => 'security_filter_settings_write','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '108','NAME' => 'security_otp_settings_write','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '109','NAME' => 'security_iprule_admin_settings_write','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '110','NAME' => 'security_session_settings_write','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '111','NAME' => 'security_redirect_settings_write','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '112','NAME' => 'security_stat_activity_settings_write','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '113','NAME' => 'security_iprule_settings_write','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '114','NAME' => 'security_file_verifier_sign','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '115','NAME' => 'security_file_verifier_collect','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '116','NAME' => 'security_file_verifier_verify','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '117','NAME' => 'security_antivirus_settings_write','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '118','NAME' => 'security_frame_settings_write','MODULE_ID' => 'security','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '119','NAME' => 'seo_settings','MODULE_ID' => 'seo','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '120','NAME' => 'seo_tools','MODULE_ID' => 'seo','DESCRIPTION' => '','BINDING' => 'module')
);

/* `rimstudio_db`.`b_option` */
$b_option = array(
  array('MODULE_ID' => 'blog','NAME' => 'socNetNewPerms','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'fileman','NAME' => 'stickers_use_hotkeys','VALUE' => 'N','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'fileman','NAME' => 'use_editor_3','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'forum','NAME' => 'FILTER','VALUE' => 'N','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'landing','NAME' => 'new_blocks','VALUE' => 'a:2:{s:4:"date";i:1676706817;s:5:"items";a:6:{i:0;s:8:"68.1.faq";i:1;s:8:"68.2.faq";i:2;s:8:"68.3.faq";i:3;s:8:"68.4.faq";i:4;s:8:"68.5.faq";i:5;s:8:"68.6.faq";}}','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'landing','NAME' => 'pub_path_s1','VALUE' => '/lp/','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'location','NAME' => 'address_format_code','VALUE' => 'RU','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~crypto_b_socialservices_user','VALUE' => 'a:2:{s:7:"OATOKEN";b:1;s:13:"REFRESH_TOKEN";b:1;}','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~crypto_b_user_auth_code','VALUE' => 'a:1:{s:10:"OTP_SECRET";b:1;}','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~crypto_b_user_phone_auth','VALUE' => 'a:1:{s:10:"OTP_SECRET";b:1;}','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~mp24_paid','VALUE' => '','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~mp24_paid_date','VALUE' => '','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~new_license18_0_sign','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~PARAM_CLIENT_LANG','VALUE' => 'ru','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~PARAM_COMPOSITE','VALUE' => 'N','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~PARAM_FINISH_DATE','VALUE' => '715170d6baa0fd4e2b45d3a3ca79f959270162210912dfee1e10259fa22c39c1.2023-03-16','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~PARAM_MAX_SERVERS','VALUE' => '2','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~PARAM_MAX_USERS','VALUE' => '357e8d03be6ef758b00a1575fbc9428f65e018e13f55a3ea55c0305d3d13442b.0','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~PARAM_PARTNER_ID','VALUE' => '','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~PARAM_PHONE_SIP','VALUE' => 'N','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~support_finish_date','VALUE' => '2023-03-16','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => '~update_autocheck_result','VALUE' => 'a:4:{s:10:"check_date";i:1676719044;s:6:"result";b:0;s:5:"error";s:0:"";s:7:"modules";a:0:{}}','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'admin_lid','VALUE' => 'ru','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'admin_passwordh','VALUE' => 'FVkQe2YUBgUtCUVcBBcPCgsTAQ==','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'control_file_duplicates','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'crc_code','VALUE' => 'cDlGcFhTckx0ZQ==','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'email_from','VALUE' => 'skorikovdanila@mail.ru','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'GROUP_DEFAULT_TASK','VALUE' => '1','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'last_mp_modules_result','VALUE' => 'a:4:{s:10:"check_date";i:1676897180;s:13:"update_module";a:0:{}s:10:"end_update";a:0:{}s:10:"new_module";a:0:{}}','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'optimize_css_files','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'optimize_js_files','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'PARAM_MAX_SITES','VALUE' => '0','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'PARAM_MAX_USERS','VALUE' => '0','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_assign_authority_group','VALUE' => '4','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_assign_authority_group_add','VALUE' => '2','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_assign_authority_group_delete','VALUE' => '2','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_assign_rating_group','VALUE' => '3','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_assign_rating_group_add','VALUE' => '1','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_assign_rating_group_delete','VALUE' => '1','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_assign_type','VALUE' => 'auto','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_authority_rating','VALUE' => '2','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_authority_weight_formula','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_community_authority','VALUE' => '30','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_community_last_visit','VALUE' => '90','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_community_size','VALUE' => '1','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_count_vote','VALUE' => '10','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_normalization','VALUE' => '10','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_normalization_type','VALUE' => 'auto','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_self_vote','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_start_authority','VALUE' => '3','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_text_like_d','VALUE' => 'Это нравится','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_text_like_n','VALUE' => 'Не нравится','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_text_like_y','VALUE' => 'Нравится','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_vote_show','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_vote_template','VALUE' => 'like','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_vote_type','VALUE' => 'like','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'rating_vote_weight','VALUE' => '10','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'secure_logout','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'server_uniq_id','VALUE' => 'e091a06a3b3c2befcccd85cba8c20cd8','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'signer_default_key','VALUE' => '8387da39146bb1d00959788880539f2538b108a74e9b9a6308af8e9863dfb24cab45b1765f3fe9f65fd1078b8b5d9b77a0cc6dae57af1d06b18db44cac9de7ef','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'site_checker_success','VALUE' => 'N','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'update_site','VALUE' => 'www.1c-bitrix.ru','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'update_site_ns','VALUE' => 'Y','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'update_system_check','VALUE' => '18.02.2023 14:40:07','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'update_system_update','VALUE' => '18.02.2023 14:17:24','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main','NAME' => 'vendor','VALUE' => '1c_bitrix','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'main.stepper.messageservice','NAME' => '\\Bitrix\\MessageService\\Update\\SettingsEncryptor','VALUE' => 'a:0:{}','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'messageservice','NAME' => 'clean_up_period','VALUE' => '14','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'rest','NAME' => 'app_immune','VALUE' => '["infoservice.migrator_amocrm","informunity.excel","integrations24ru.pipedrive","integrations24ru.asana","integrations24ru.sugar","bitrix.eshop","bitrix.1cdoc","bitrix.assistant","bitrix.denominationby","bitrix.propertiesbot","bitrix.giphybot","bitrix.1c","bitrix.restapi","bitrix.partnerlandingexport","bitrix.partnerapplication","bitrix.partnerlanding","bitrix.1ctotal","integrations24.pipedrive","integrations24ru.pipedrive","integrations24.zoho","integrations24.asana","integrations24ru.asana","integrations24.sugar","integrations24ru.sugar","integrations24.jira_migration","integrations24.qbinventory","integrations24.zohoinventory","SEVERCODE.trello_migrator","htmls.ms_migrator","integrations24.mns_kazakhstan_poisk_po_bin","integrations24.portal_nalog_gov_by","bitrix.khellouin_ru","bitrix.den_zashchitnika_otechestva_2_ru","bitrix.mezhdunarodnyy_zhenskiy_den_2_ua","bitrix.mezhdunarodnyy_zhenskiy_den_3_ua","bitrix.mezhdunarodnyy_zhenskiy_den_ua","bitrix.den_smekha_ua","bitrix.den_svyatogo_valentina_ua","bitrix.den_vsekh_vlyublyennykh_ua","bitrix.katolicheskaya_paskha_ua","bitrix.novyy_god_ua","bitrix.rozhdestvo_ua","bitrix.valentinov_den_ua","bitrix.pravoslavnaya_paskha_ua","bitrix.chernaya_pyatnitsa_ua","bitrix.khellouin_ua","bitrix.den_zashchitnika_otechestva_3_ru","bitrix.den_zashchitnika_otechestva_ru","bitrix.den_zashchitnika_otechestva_by","bitrix.den_zashchitnika_otechestva_2_by","bitrix.den_zashchitnika_otechestva_3_by","bitrix.den_zashchitnika_otechestva_kz","bitrix.den_zashchitnika_otechestva_2_kz","bitrix.den_zashchitnika_otechestva_3_kz","bitrix.pravoslavnaya_paskha_ru","bitrix.pravoslavnaya_paskha_by","bitrix.pravoslavnaya_paskha_kz","bitrix.den_smekha_ru","bitrix.den_smekha_by","bitrix.den_smekha_kz","bitrix.valentinov_den_ru","bitrix.valentinov_den_by","bitrix.valentinov_den_kz","bitrix.rozhdestvo_ru","bitrix.rozhdestvo_by","bitrix.rozhdestvo_kz","bitrix.novyy_god_ru","bitrix.novyy_god_by","bitrix.novyy_god_kz","bitrix.katolicheskaya_paskha_ru","bitrix.katolicheskaya_paskha_by","bitrix.katolicheskaya_paskha_kz","bitrix.den_vsekh_vlyublyennykh_ru","bitrix.den_vsekh_vlyublyennykh_by","bitrix.den_vsekh_vlyublyennykh_kz","bitrix.den_svyatogo_valentina_ru","bitrix.den_svyatogo_valentina_by","bitrix.den_svyatogo_valentina_kz","bitrix.mezhdunarodnyy_zhenskiy_den_ru","bitrix.mezhdunarodnyy_zhenskiy_den_by","bitrix.mezhdunarodnyy_zhenskiy_den_kz","bitrix.mezhdunarodnyy_zhenskiy_den_2_ru","bitrix.mezhdunarodnyy_zhenskiy_den_2_by","bitrix.mezhdunarodnyy_zhenskiy_den_2_kz","bitrix.mezhdunarodnyy_zhenskiy_den_3_ru","bitrix.mezhdunarodnyy_zhenskiy_den_3_by","bitrix.mezhdunarodnyy_zhenskiy_den_3_kz","bitrix.thanksgiving_day_en","bitrix.april_fools_day_en","bitrix.valentine_s_day_en","bitrix.valentine_s_day_2_en","bitrix.valentine_s_day_3_en","bitrix.chernaya_pyatnitsa_ru","bitrix.chernaya_pyatnitsa_by","bitrix.chernaya_pyatnitsa_kz","bitrix.khellouin_by","bitrix.khellouin_kz","bitrix.easter_en","bitrix.halloween_en","bitrix.christmas_en","bitrix.new_year_en","bitrix.black_friday_en","bitrix.kraytvirtualtravel_ru","bitrix.kraytvirtualtravel_by","bitrix.kraytvirtualtravel_kz","bitrix.kraytvirtualtravel_ua","bitrix.kraytnutritionist_ru","bitrix.kraytnutritionist_by","bitrix.delobotcorporatetraining_en","bitrix.delobotblackfriday_en","bitrix.delobotcleaningcompany_en","bitrix.delobotfitness_en","bitrix.delobotfooddelivery_en","bitrix.delobotvisagiste_en","bitrix.delobotpsychologist_en","bitrix.delobotflorist_en","bitrix.delobotdecoration_en","bitrix.delobotcarservice_en","bitrix.kraytagency_en","bitrix.kraytagriculture_en","bitrix.kraytarchitecture_en","bitrix.kraytbusiness_en","bitrix.kraytdelivery_en","bitrix.kraytevents_en","bitrix.kraythalloween_en","bitrix.kraytvetclinic_en","bitrix.kraytmasterforhour_en","bitrix.kraytinstagramcontacts_en","bitrix.kraytinstagramstock_en","bitrix.kraytinstagramtarget_en","bitrix.kraytonlinebabysitter_en","bitrix.kraytpetservice_en","bitrix.kraytsolarenergy_en","bitrix.kraytsportonline_en","bitrix.kraytsummersale_en","bitrix.krayttravelblog_en","bitrix.kraytvebinar_en","bitrix.kraytartificialintelligence_en","bitrix.kraytbakeryproducts_en","bitrix.kraytchildrensschool_en","bitrix.kraytfooddelivery_en","bitrix.kraytfurniture_en","bitrix.kraytvirtualtravel_en","bitrix.kraytyoutubechannel_en","bitrix.kraytknitting_en","bitrix.kraytnutritionist_en","bitrix.kraytnailservice_en","bitrix.kraytmedicine_en","bitrix.kraytprofipage_en","bitrix.kraytsale11_en","bitrix.delobotblackfriday_ua","bitrix.delobotcleaning_ua","bitrix.delobotcorporatetraining_ua","bitrix.delobotfitness_ua","bitrix.delobotfooddelivery_ua","bitrix.delobotvisagiste_ua","bitrix.kraytagency_ua","bitrix.kraytagriculture_ua","bitrix.kraytarchitecture_ua","bitrix.kraytbusiness_ua","bitrix.kraytevents_ua","bitrix.kraythalloween_ua","bitrix.kraytinstagramcontacts_ua","bitrix.kraytinstagramstock_ua","bitrix.kraytinstagramtarget_ua","bitrix.kraytpetservice_ua","bitrix.kraytsolarenergy_ua","bitrix.kraytsummersale_ua","bitrix.krayttravelblog_ua","bitrix.kraytvebinar_ua","bitrix.kraytvetclinic_ua","bitrix.kraytnutritionist_ua","bitrix.kraytnutritionist_kz","bitrix.kraytfurniture_by","bitrix.kraytfurniture_ru","bitrix.kraytfurniture_kz","bitrix.kraytfurniture_ua","bitrix.kraytmedicine_ru","bitrix.kraytmedicine_by","bitrix.kraytmedicine_kz","bitrix.kraytmedicine_ua","bitrix.kraytsale11_ru","bitrix.kraytsale11_by","bitrix.kraytsale11_kz","bitrix.kraytsale11_ua","bitrix.kraytnailservice_ru","bitrix.kraytnailservice_by","bitrix.kraytnailservice_kz","bitrix.kraytnailservice_ua","bitrix.kraytknitting_ru","bitrix.kraytknitting_by","bitrix.kraytknitting_kz","bitrix.kraytknitting_ua","bitrix.kraytfooddelivery_ru","bitrix.kraytfooddelivery_by","bitrix.kraytfooddelivery_kz","bitrix.kraytfooddelivery_ua","bitrix.kraytbakeryproducts_ru","bitrix.kraytbakeryproducts_by","bitrix.kraytbakeryproducts_kz","bitrix.kraytbakeryproducts_ua","bitrix.kraytschoolmusic_ru","bitrix.kraytschoolmusic_by","bitrix.kraytschoolmusic_kz","bitrix.kraytschoolmusic_ua","bitrix.kraytautomechanic_ru","bitrix.kraytautomechanic_by","bitrix.kraytautomechanic_kz","bitrix.kraytautomechanic_ua","bitrix.kraytpresents_ru","bitrix.kraytpresents_by","bitrix.kraytpresents_kz","bitrix.kraytpresents_ua","bitrix.kraytportfoliophotographer_ru","bitrix.kraytportfoliophotographer_by","bitrix.kraytportfoliophotographer_kz","bitrix.kraytportfoliophotographer_ua","bitrix.kraytcrm_ru","bitrix.delobotcleaningcompany_ru","bitrix.delobotblackfriday_ru","bitrix.delobotblackfriday_by","bitrix.delobotblackfriday_kz","bitrix.delobotcleaningcompany_by","bitrix.delobotcleaningcompany_kz","bitrix.delobotcorporatetraining_ru","bitrix.delobotcorporatetraining_by","bitrix.delobotcorporatetraining_kz","bitrix.delobotfitness_ru","bitrix.delobotfitness_by","bitrix.delobotfitness_kz","bitrix.delobotfooddelivery_ru","bitrix.delobotfooddelivery_by","bitrix.delobotfooddelivery_kz","bitrix.delobotvisagiste_ru","bitrix.delobotvisagiste_by","bitrix.delobotvisagiste_kz","bitrix.delobotgiftsforwomensday_ru","bitrix.delobotgiftsforwomensday_by","bitrix.delobotgiftsforwomensday_kz","bitrix.delobotgiftsforwomensday_ua","bitrix.delobotwebdesigner_ru","bitrix.delobotwebdesigner_by","bitrix.delobotwebdesigner_kz","bitrix.delobotwebdesigner_ua","bitrix.delobotatelier_ru","bitrix.delobotatelier_by","bitrix.delobotatelier_kz","bitrix.delobotatelier_ua","bitrix.delobotconstructioncompany_ru","bitrix.delobotconstructioncompany_by","bitrix.delobotconstructioncompany_ua","bitrix.delobotlanguageschool_ru","bitrix.delobotlanguageschool_by","bitrix.delobotlanguageschool_kz","bitrix.delobotlanguageschool_ua","bitrix.delobotcoffee_ru","bitrix.delobotcoffee_by","bitrix.delobotcoffee_kz","bitrix.delobotcoffee_ua","bitrix.kraytcrm_by","bitrix.kraytcrm_kz","bitrix.kraytcrm_ua","bitrix.kraytonlinebabysitter_ru","bitrix.kraytonlinebabysitter_by","bitrix.kraytonlinebabysitter_kz","bitrix.kraytonlinebabysitter_uaa","bitrix.kraytsportonline_ru","bitrix.kraytsportonline_by","bitrix.kraytsportonline_kz","bitrix.kraytsportonline_ua","bitrix.kraytmasterforhour_ru","bitrix.kraytmasterforhour_by","bitrix.kraytmasterforhour_kz","bitrix.kraytmasterforhour_ua","bitrix.kraytdelivery_ru","bitrix.kraytdelivery_by","bitrix.kraytdelivery_kz","bitrix.kraytdelivery_ua","bitrix.kraytrepairservice_ru","bitrix.kraytrepairservice_by","bitrix.kraytrepairservice_kz","bitrix.kraytrepairservice_ua","bitrix.kraytprofipage_ru","bitrix.kraytprofipage_by","bitrix.kraytprofipage_kz","bitrix.kraytprofipage_ua","bitrix.krayttutor_ru","bitrix.krayttutor_by","bitrix.krayttutor_kz","bitrix.krayttutor_ua","bitrix.kraytartificialintelligence_ru","bitrix.kraytartificialintelligence_by","bitrix.kraytartificialintelligence_kz","bitrix.kraytartificialintelligence_ua","bitrix.kraytyoutubechannel_ru","bitrix.kraytyoutubechannel_by","bitrix.kraytyoutubechannel_kz","bitrix.kraytyoutubechannel_ua","bitrix.kraytchildrensschool_ru","bitrix.kraytchildrensschool_by","bitrix.kraytchildrensschool_kz","bitrix.kraytchildrensschool_ua","bitrix.krayttravelagency_ru","bitrix.krayttravelagency_by","bitrix.krayttravelagency_kz","bitrix.krayttravelagency_ua","bitrix.krayttranslator_ru","bitrix.krayttranslator_by","bitrix.krayttranslator_kz","bitrix.krayttranslator_ua","bitrix.kraytstylist_ru","bitrix.kraytstylist_by","bitrix.kraytstylist_kz","bitrix.kraytstylist_ua","bitrix.kraytstretchingstudio_ru","bitrix.kraytstretchingstudio_by","bitrix.kraytstretchingstudio_kz","bitrix.kraytstretchingstudio_ua","bitrix.kraytsportschool_ru","bitrix.kraytsportschool_by","bitrix.kraytsportschool_kz","bitrix.kraytsportschool_ua","bitrix.kraytsitedesigner_ru","bitrix.kraytsitedesigner_by","bitrix.kraytsitedesigner_kz","bitrix.kraytsitedesigner_ua","bitrix.kraytsport_ru","bitrix.kraytsport_by","bitrix.kraytsport_kz","bitrix.kraytsport_ua","bitrix.kraytmobileapp_ru","bitrix.kraytmobileapp_by","bitrix.kraytmobileapp_kz","bitrix.kraytmobileapp_ua","bitrix.kraytrealestate_ru","bitrix.kraytrealestate_by","bitrix.kraytrealestate_kz","bitrix.kraytrealestate_ua","bitrix.delobotnewyearsale_ru","bitrix.delobotnewyearsale_by","bitrix.delobotnewyearsale_kz","bitrix.delobotnewyearsale_ua","bitrix.delobotyoga_ru","bitrix.delobotyoga_by","bitrix.delobotyoga_kz","bitrix.delobotyoga_ua","bitrix.delobotcake_ru","bitrix.delobotcake_by","bitrix.delobotcake_kz","bitrix.delobotcake_ua","bitrix.delobotveterinarian_ru","bitrix.delobotveterinarian_by","bitrix.delobotveterinarian_kz","bitrix.delobotveterinarian_ua","bitrix.delobotpsychologist_ru","bitrix.delobotpsychologist_by","bitrix.delobotpsychologist_kz","bitrix.delobotpsychologist_ua","bitrix.delobotdecoration_ru","bitrix.delobotdecoration_by","bitrix.delobotdecoration_kz","bitrix.delobotdecoration_ua","bitrix.delobotflorist_ru","bitrix.delobotflorist_by","bitrix.delobotflorist_kz","bitrix.delobotflorist_ua","bitrix.delobotcarservice_ru","bitrix.delobotcarservice_by","bitrix.delobotcarservice_kz","bitrix.delobotcarservice_ua","bitrix.delobotcargotransportation_ru","bitrix.delobotcargotransportation_by","bitrix.delobotcargotransportation_kz","bitrix.delobotcargotransportation_ua","bitrix.delobotrealtor_ru","bitrix.delobotrealtor_by","bitrix.delobotrealtor_kz","bitrix.delobotrealtor_ua","bitrix.delobotfurnituremanufacturing_ru","bitrix.delobotfurnituremanufacturing_by","bitrix.delobotfurnituremanufacturing_kz","bitrix.delobotfurnituremanufacturing_ua","bitrix.delobotorganizationofholidays_ru","bitrix.delobotorganizationofholidays_by","bitrix.delobotorganizationofholidays_kz","bitrix.delobotorganizationofholidays_ua","bitrix.delobotconcertannounce_ru","bitrix.delobotconcertannounce_by","bitrix.delobotconcertannounce_kz","bitrix.delobotconcertannounce_ua","bitrix.delobotphotographersservice_ru","bitrix.delobotphotographersservice_by","bitrix.delobotphotographersservice_kz","bitrix.delobotphotographersservice_ua","bitrix.kraytsecurityagency_ru","bitrix.kraytsecurityagency_by","bitrix.kraytsecurityagency_kz","bitrix.kraytsecurityagency_ua","bitrix.kraytrecordingstudio_ru","bitrix.kraytrecordingstudio_by","bitrix.kraytrecordingstudio_kz","bitrix.kraytrecordingstudio_ua","bitrix.kraytrealestateagent_ru","bitrix.kraytrealestateagent_by","bitrix.kraytrealestateagent_kz","bitrix.kraytrealestateagent_ua","bitrix.delobotdecorationhouses_ru","bitrix.delobotdecorationhouses_by","bitrix.delobotdecorationhouses_kz","bitrix.delobotdecorationhouses_ua","bitrix.delobotairconditioners_ru","bitrix.delobotairconditioners_by","bitrix.delobotairconditioners_kz","bitrix.delobotairconditioners_ua","bitrix.delobotdesignworkshop_ru","bitrix.delobotdesignworkshop_by","bitrix.delobotdesignworkshop_kz","bitrix.delobotdesignworkshop_ua","bitrix.delobotcitygreeningproject_ru","bitrix.delobotcitygreeningproject_by","bitrix.delobotcitygreeningproject_kz","bitrix.delobotcitygreeningproject_ua","bitrix.delobotecoproducts_ru","bitrix.delobotecoproducts_by","bitrix.delobotecoproducts_kz","bitrix.delobotecoproducts_ua","bitrix.delobotsoundrecordingservices_ru","bitrix.delobotsoundrecordingservices_by","bitrix.delobotsoundrecordingservices_kz","bitrix.delobotsoundrecordingservices_ua","bitrix.delobotsecurityservice_ru","bitrix.delobotsecurityservice_by","bitrix.delobotsecurityservice_kz","bitrix.delobotsecurityservice_ua","bitrix.delobotsportschool_ru","bitrix.delobotsportschool_by","bitrix.delobotsportschool_kz","bitrix.delobotsportschool_ua","bitrix.delobotfamilyleisure_ru","bitrix.delobotfamilyleisure_by","bitrix.delobotfamilyleisure_kz","bitrix.delobotfamilyleisure_ua","bitrix.delobotdoctortherapist_ru","bitrix.delobotdoctortherapist_by","bitrix.delobotdoctortherapist_kz","bitrix.delobotdoctortherapist_ua","bitrix.kraytagency_ru","bitrix.kraytagency_by","bitrix.kraytagency_kz","bitrix.kraytarchitecture_ru","bitrix.kraytarchitecture_by","bitrix.kraytarchitecture_kz","bitrix.kraytagriculture_ru","bitrix.kraytagriculture_by","bitrix.kraytagriculture_kz","bitrix.kraytbusiness_ru","bitrix.kraytbusiness_by","bitrix.kraytbusiness_kz","bitrix.kraytevents_ru","bitrix.kraytevents_by","bitrix.kraytevents_kz","bitrix.kraythalloween_ru","bitrix.kraythalloween_by","bitrix.kraythalloween_kz","bitrix.kraytinstagramtarget_ru","bitrix.kraytinstagramtarget_by","bitrix.kraytinstagramtarget_kz","bitrix.kraytinstagramcontacts_ru","bitrix.kraytinstagramcontacts_by","bitrix.kraytinstagramcontacts_kz","bitrix.kraytinstagramstock_ru","bitrix.kraytinstagramstock_by","bitrix.kraytinstagramstock_kz","bitrix.kraytpetservice_ru","bitrix.kraytpetservice_by","bitrix.kraytpetservice_kz","bitrix.kraytsolarenergy_ru","bitrix.kraytsolarenergy_by","bitrix.kraytsolarenergy_kz","bitrix.kraytsummersale_ru","bitrix.kraytsummersale_by","bitrix.kraytsummersale_kz","bitrix.krayttravelblog_ru","bitrix.krayttravelblog_by","bitrix.krayttravelblog_kz","bitrix.kraytvebinar_ru","bitrix.kraytvebinar_by","bitrix.kraytvebinar_kz","bitrix.kraytvetclinic_ru","bitrix.kraytvetclinic_by","bitrix.kraytvetclinic_kz","bitrix.kraytrestaurant_ru","bitrix.kraytrestaurant_by","bitrix.kraytrestaurant_kz","bitrix.kraytrestaurant_ua","bitrix.kraytweddingservices_ru","bitrix.kraytweddingservices_by","bitrix.kraytweddingservices_kz","bitrix.kraytweddingservices_ua","bitrix.kraytoptics_ru","bitrix.kraytoptics_by","bitrix.kraytoptics_kz","bitrix.kraytoptics_ua","bitrix.krayt3dprint_ru","bitrix.krayt3dprint_by","bitrix.krayt3dprint_kz","bitrix.krayt3dprint_ua","bitrix.kraytbusinesspremisesdesign_ru","bitrix.kraytbusinesspremisesdesign_by","bitrix.kraytbusinesspremisesdesign_kz","bitrix.kraytbusinesspremisesdesign_ua","bitrix.kraytcentersproject_ru","bitrix.kraytcentersproject_by","bitrix.kraytcentersproject_kz","bitrix.kraytcentersproject_ua","bitrix.kraytcitygreening_ru","bitrix.kraytcitygreening_by","bitrix.kraytcitygreening_kz","bitrix.kraytcitygreening_ua","bitrix.kraytclimatesystems_ru","bitrix.kraytclimatesystems_by","bitrix.kraytclimatesystems_kz","bitrix.kraytclimatesystems_ua","bitrix.kraytclinicmomandbaby_ru","bitrix.kraytclinicmomandbaby_by","bitrix.kraytclinicmomandbaby_kz","bitrix.kraytclinicmomandbaby_ua","bitrix.kraytdesignerclothing_ru","bitrix.kraytdesignerclothing_by","bitrix.kraytdesignerclothing_kz","bitrix.kraytdesignerclothing_ua","bitrix.kraytprivatedoctor_ru","bitrix.kraytprivatedoctor_by","bitrix.kraytprivatedoctor_kz","bitrix.kraytprivatedoctor_ua","bitrix.kraytprintinghouse_ru","bitrix.kraytprintinghouse_by","bitrix.kraytprintinghouse_kz","bitrix.kraytprintinghouse_ua","bitrix.kraytpersonalcoach_ru","bitrix.kraytpersonalcoach_by","bitrix.kraytpersonalcoach_kz","bitrix.kraytpersonalcoach_ua","bitrix.kraytperfumer_ru","bitrix.kraytperfumer_by","bitrix.kraytperfumer_kz","bitrix.kraytperfumer_ua","bitrix.kraytnewsblog_ru","bitrix.kraytnewsblog_by","bitrix.kraytnewsblog_kz","bitrix.kraytnewsblog_ua","bitrix.kraytmakeupstudio_ru","bitrix.kraytmakeupstudio_by","bitrix.kraytmakeupstudio_kz","bitrix.kraytmakeupstudio_ua","bitrix.kraytlawyer_ru","bitrix.kraytlawyer_by","bitrix.kraytlawyer_kz","bitrix.kraytlawyer_ua","bitrix.kraytlandscapedesign_ru","bitrix.kraytlandscapedesign_by","bitrix.kraytlandscapedesign_kz","bitrix.kraytlandscapedesign_ua","bitrix.kraytjewelryrepairshop_ru","bitrix.kraytjewelryrepairshop_by","bitrix.kraytjewelryrepairshop_kz","bitrix.kraytjewelryrepairshop_ua","bitrix.kraytinteriordesign_ru","bitrix.kraytinteriordesign_by","bitrix.kraytinteriordesign_kz","bitrix.kraytinsurancecompany_ru","bitrix.kraytinsurancecompany_kz","bitrix.kraytinsurancecompany_ua","bitrix.kraytillustrator_ru","bitrix.kraytillustrator_by","bitrix.kraytillustrator_kz","bitrix.kraytillustrator_ua","bitrix.kraytgiftsvalentineday_ru","bitrix.kraytgiftsvalentineday_by","bitrix.kraytgiftsvalentineday_kz","bitrix.kraytgiftsvalentineday_ua","bitrix.kraytfebruary23_ru","bitrix.kraytfebruary23_by","bitrix.kraytfebruary23_kz","bitrix.kraytfebruary23_ua","bitrix.kraytequipmentrepair_ru","bitrix.kraytequipmentrepair_by","bitrix.kraytequipmentrepair_kz","bitrix.kraytequipmentrepair_ua","bitrix.kraytdentistry_ru","bitrix.kraytdentistry_by","bitrix.kraytdentistry_kz","bitrix.kraytdentistry_ua","bitrix.kraytdancemarathon_ru","bitrix.kraytdancemarathon_by","bitrix.kraytdancemarathon_kz","bitrix.kraytdancemarathon_ua","bitrix.kraytcourseformothers_ru","bitrix.kraytcourseformothers_by","bitrix.kraytcourseformothers_kz","bitrix.kraytcourseformothers_ua","bitrix.kraytcosmetologist_ru","bitrix.kraytcosmetologist_by","bitrix.kraytcosmetologist_kz","bitrix.kraytcosmetologist_ua","bitrix.kraytconstructionofprivatehouses_ru","bitrix.kraytconstructionofprivatehouses_by","bitrix.kraytconstructionofprivatehouses_kz","bitrix.kraytconstructionofprivatehouses_ua","bitrix.kraytconfectionery_ru","bitrix.kraytconfectionery_by","bitrix.kraytconfectionery_kz","bitrix.kraytconfectionery_ua","bitrix.kraytcoffeehouse_ru","bitrix.kraytcoffeehouse_by","bitrix.kraytcoffeehouse_kz","bitrix.kraytcoffeehouse_ua","bitrix.kraytcleaningservice_ru","bitrix.kraytcleaningservice_by","bitrix.kraytcleaningservice_kz","bitrix.kraytcleaningservice_ua","bitrix.kraytbeautystudio_ru","bitrix.kraytbeautystudio_by","bitrix.kraytbeautystudio_kz","bitrix.kraytbeautystudio_ua","bitrix.kraytbarbershop_ru","bitrix.kraytbarbershop_by","bitrix.kraytartworkshop_by","bitrix.kraytbarbershop_kz","bitrix.kraytbarbershop_ua","bitrix.kraytartworkshop_ru","bitrix.kraytartworkshop_kz","bitrix.kraytartworkshop_ua","bitrix.kraytaprilfoolsdaygifts_ru","bitrix.kraytaprilfoolsdaygifts_by","bitrix.kraytaprilfoolsdaygifts_kz","bitrix.kraytaprilfoolsdaygifts_ua","bitrix.kraytwindowinstallation_ru","bitrix.kraytwindowinstallation_by","bitrix.kraytwindowinstallation_kz","bitrix.kraytwindowinstallation_ua","bitrix.kraytwindowdesign_ru","bitrix.kraytwindowdesign_by","bitrix.kraytwindowdesign_kz","bitrix.kraytwindowdesign_ua","bitrix.krayttelecommunications_ru","bitrix.krayttelecommunications_by","bitrix.krayttelecommunications_kz","bitrix.krayttelecommunications_ua","bitrix.kraytsportsnutritionorder_ru","bitrix.kraytsportsnutritionorder_by","bitrix.kraytsportsnutritionorder_kz","bitrix.kraytsportsnutritionorder_ua","bitrix.kraytreconstructionoffices_ru","bitrix.kraytreconstructionoffices_by","bitrix.kraytreconstructionoffices_kz","bitrix.kraytreconstructionoffices_ua","bitrix.kraytpremisestrade_ru","bitrix.kraytpremisestrade_by","bitrix.kraytpremisestrade_ua","bitrix.kraytinsulationhouses_ru","bitrix.kraytinsulationhouses_by","bitrix.kraytinsulationhouses_kz","bitrix.kraytinsulationhouses_ua","bitrix.kraytinstallsecuritysystems_ru","bitrix.kraytinstallsecuritysystems_by","bitrix.kraytinstallsecuritysystems_kz","bitrix.kraytinstallsecuritysystems_ua","bitrix.kraytinstallbathrooms_ru","bitrix.kraytinstallbathrooms_by","bitrix.kraytinstallbathrooms_kz","bitrix.kraytinstallbathrooms_ua","bitrix.kraythousedesign_ru","bitrix.kraythousedesign_by","bitrix.kraythousedesign_kz","bitrix.kraythousedesign_ua","bitrix.kraythospitalforfamily_ru","bitrix.kraythospitalforfamily_by","bitrix.kraythospitalforfamily_kz","bitrix.kraythospitalforfamily_ua","bitrix.kraythomedecoration_ru","bitrix.kraythomedecoration_by","bitrix.kraythomedecoration_kz","bitrix.kraythomedecoration_ua","bitrix.kraytfurniturettransformer_ru","bitrix.kraytfurniturettransformer_by","bitrix.kraytfurniturettransformer_kz","bitrix.kraytfurniturettransformer_ua","bitrix.kraytfloristics_ru","bitrix.kraytfloristics_by","bitrix.kraytfloristics_kz","bitrix.kraytfloristics_ua","bitrix.kraytfestiveevents_ru","bitrix.kraytfestiveevents_by","bitrix.kraytfestiveevents_kz","bitrix.kraytfestiveevents_ua","bitrix.kraytecogreen_ru","bitrix.kraytecogreen_by","bitrix.kraytecogreen_kz","bitrix.kraytecogreen_ua","bitrix.kraytdoorinstallation_ru","bitrix.kraytdoorinstallation_by","bitrix.kraytdoorinstallation_kz","bitrix.kraytdoorinstallation_ua","bitrix.kraytdoordesign_ru","bitrix.kraytdoordesign_by","bitrix.kraytdoordesign_kz","bitrix.kraytdoordesign_ua","bitrix.kraytdesigningpeopledisabilities_ru","bitrix.kraytdesigningpeopledisabilities_by","bitrix.kraytdesigningpeopledisabilities_kz","bitrix.kraytdesigningpeopledisabilities_ua","bitrix.delobotkindergarten_ru","bitrix.kraytvideostudio_ru","bitrix.kraytlegalservices_ru","bitrix.kraytaccountingservices_ru","bitrix.kraytbookannouncement_ru","bitrix.kraytcharity_ru","bitrix.kraytspa_ru","bitrix.kraythandmadecosmetics_ru","bitrix.delobotmusic_ru","bitrix.kraythotelforanimals_ru","bitrix.kraytcityguide_ru","bitrix.delobotfoodblog_ru","bitrix.delobotgamedeveloper_ru","bitrix.delobotrenovationoffices_ru","bitrix.delobotcourses_ru","bitrix.delobotcityb__beautification_ru","bitrix.delobotaidfund_ru","bitrix.delobotnewsblog_ru","bitrix.delobottransportservices_ru","bitrix.delobotguide_ru","bitrix.delobotnnturalcosmetic_ru","bitrix.delobotboutiqueforsale_ru","bitrix.delobotorganizationweddings_ru","bitrix.delobotbeautyandrecreationcenter_ru","bitrix.delobotwriter_ru","bitrix.kraytotel","bitrix.kraytigrovoyklub","bitrix.kraytbazaotdykha","bitrix.kraytkurspotiktoku","bitrix.kraytkadrovoeagenstvo","bitrix.kraytportfoliomodeli","bitrix.kraytminecraftserver","bitrix.kraytigrovayakompaniya","bitrix.delobotuslugivideoproizvodstva","bitrix.delobotportfolioaktera","bitrix.delobotpub","bitrix.delobotminihotel","bitrix.delobotcamping","bitrix.delobotcafe","bitrix.delobotizgotovlenieduxov","bitrix.delobotbuhgalterskoeobslujivanie","bitrix.delobotarendanedvizimosti","bitrix.delobotalternativnayaenergetika","bitrix.delobotagentstvoponaimy","bitrix.kraytpodarkikjenskomydny","bitrix.kraytinstagramcontacts_ru1","bitrix.kraytinstagramstock_ru1","bitrix.kraytinstagramtarget_ru1","bitrix.kraytkhimchistka","bitrix.krayt_detskaya_odezhda_na_zakaz","bitrix.krayt_retsepty_blyud","bitrix.krayt_detskaya_mebel","bitrix.krayt_biblioteka","bitrix.krayt_pitomnik_rasteniy","bitrix.delobot_lawyer","bitrix.delobot_oformlenie_dverey","bitrix.delobot_montaj_dverey","bitrix.delobot_manicure_and_pedicure","bitrix.delobot_printing_services","bitrix.delobot_plants","bitrix.delobot_nutritionist","bitrix.delobot_designer_tableware","bitrix.delobot_montaj_okon","bitrix.delobot_oformlenie_okon","bitrix.krayt_zhurnalist","bitrix.krayt_tato_salon","bitrix.krayt_massajist","bitrix.krayt_consulting","bitrix.krayt_elektromontazh","bitrix.krayt_rezyume_spetsialista","bitrix.kraytportfoliophotographer","bitrix.kraytbeautystudio_en","bitrix.kraytautomechanic_en","bitrix.kraytequipmentrepair_en","bitrix.delobot_furniture_for_children","bitrix.delobot_architectural_projects","bitrix.delobot_scientists_page","bitrix.delobot_tatoo_studio","bitrix.delobot_journalist_resume","bitrix.delobot_leather_goods","bitrix.delobot_dance_marathon","bitrix.krayt_art_gallery","bitrix.krayt_leather_products","bitrix.krayt_scientific_researcher","bitrix.krayt_bureau_of_architecture","bitrix.krayt_jewelry_designer","bitrix.krayt_food_photographer","bitrix.krayt_acting_studio","bitrix.krayt_farm","bitrix.krayt_fashion_blog","bitrix.krayt_birthday_cakes","bitrix.krayt_plussize_fashion","bitrix.krayt_diving","bitrix.krayt_it_services","bitrix.krayt_beauty_blog","bitrix.krayt_aquarium","bitrix.krayt_sport_blog","bitrix.delobot_online_library","bitrix.delobot_diving_center","bitrix.delobot_designer_jewelry","bitrix.delobot_nail_art_course","bitrix.delobot_art_galery","bitrix.delobot_fashion_for_everyone","bitrix.delobot_handmade_chocolate","bitrix.krayt_chocolate_shop","bitrix.krayt_advertising_agency","bitrix.krayt_asian_food","bitrix.krayt_avtorskiy_master_klass","bitrix.krayt_utilizatsiya_otkhodov","bitrix.krayt_italyanskaya_kukhnya","bitrix.krayt_kurs_po_nogtevomu_servisu","bitrix.krayt_begovoy_klub","bitrix.krayt_gornyy_turizm","bitrix.krayt_biznes_prostranstvo","bitrix.krayt_shkola_iskusstv","bitrix.krayt_onlayn_intensiv_inostrannogo_yazyka","bitrix.delobot_reklama_brenda","bitrix.delobot_italyanskiy_restoran","bitrix.delobot_modnaya_stranichka","bitrix.delobot_fotografiya_edy","bitrix.krayt_pishchevoe_proizvodstvo","bitrix.krayt_appetitnyy_blog","bitrix.krayt_uslugi_remonta","bitrix.krayt_onlayn_kurs_kreativnogo_prodyusera","bitrix.krayt_detskie_prazdniki","bitrix.krayt_svetotekhnika","bitrix.krayt_urbanistika","bitrix.krayt_otdykh_na_prirode","bitrix.krayt_sportivnye_ploshchadki","bitrix.krayt_oborudovanie_dlya_turizma","bitrix.krayt_meksikanskaya_kukhnya","bitrix.delobot_sports_blog_20","bitrix.delobot_aziatskie_blyuda","bitrix.delobot_beauty_blog","bitrix.delobot_meksikanskiy_restoran_2_0","bitrix.delobot_urban_project","bitrix.delobot_drawing_school","bitrix.delobot_tourism","bitrix.delobot_runnig_club","bitrix.delobot_lighting_company","bitrix.delobot_garbage_disposal","bitrix.delobot_master_class","bitrix.delobot_it_outsourcing","bitrix.krayt_rent_car","bitrix.krayt_aviation","bitrix.krayt_street_sport_club","bitrix.krayt_kofemaniya","bitrix.krayt_corporate_events","bitrix.krayt_cooking_school","bitrix.krayt_blacksmith_craft","bitrix.krayt_med_lab","bitrix.krayt_music_studio","bitrix.krayt_web_application_development","bitrix.krayt_tennis_club","bitrix.krayt_bank_services","bitrix.krayt_smart_furniture","bitrix.krayt_dom_pod_klyuch","bitrix.krayt_uslugi_mediatora","bitrix.krayt_child_club","bitrix.delobot_custom_made_cakes","bitrix.delobot_online_yoga_classes","bitrix.krayt_pevitsa","bitrix.krayt_ozelenenie_pomeshcheniy","bitrix.krayt_internet_agentstvo","bitrix.krayt_kinolog","bitrix.krayt_poleznye_sneki","bitrix.krayt_oformlenie_interera","bitrix.delobot_tourist_equipment","bitrix.delobot_creative_producer","bitrix.delobot_aviation_services","bitrix.delobot_blacksmith_services","bitrix.delobot_coffee_subscription","bitrix.delobot_construction_company","bitrix.delobot_business_premises","bitrix.delobot_pet_hotel","bitrix.delobot_food_industry","bitrix.delobot_cars_for_rent","bitrix.krayt_klub_dlya_geymerov","bitrix.krayt_relaks_uslugi","bitrix.krayt_sportivnyy_inventar","bitrix.krayt_universitet","bitrix.delobot_uslugi_kinologa","bitrix.delobot_business_training","bitrix.krayt_vebinar","bitrix.krayt_kurs_po_iskusstvennomu_intellektu","bitrix.delobot_vypechka_na_zakaz","bitrix.delobot_osennaya_rasprodazh","bitrix.krayt_onlayn_shkola_dlya_detey","bitrix.krayt_arkhitekturnaya_kompaniya","bitrix.krayt_den_blagodareniya","bitrix.krayt_uslugi_nyani","bitrix.krayt_uslugi_repetitora","bitrix.krayt_logoped","bitrix.krayt_chyernaya_pyatnitsa","bitrix.krayt_sladosti_na_rozhdestvo","bitrix.krayt_podarki_na_novyy_god","bitrix.delobot_laboratory","bitrix.delobot_street_sports_grounds","bitrix.delobot_about_webinar","bitrix.krayt_dostavka_gruza","bitrix.delobot_online_travel","bitrix.delobot_youtube_channel","bitrix.delobot_interior_design","bitrix.krayt_kursy_po_interesam","bitrix.krayt_zimnyaya_rasprodazha","bitrix.krayt_tsifrovye_kommunikatsii","bitrix.krayt_avtosalon","bitrix.krayt_uslugi_stroitelnoy_kompanii","bitrix.krayt_vysshee_uchebnoe_zavedenie","bitrix.krayt_veterinar","bitrix.krayt_akademiya_iskusstv","bitrix.krayt_master_po_domu","bitrix.krayt_onlayn_trenirovki","bitrix.krayt_apart_otel","bitrix.krayt_tsvety_i_bukety_na_zakaz","bitrix.krayt_biznes_forum","bitrix.krayt_uslugi_stomatologii","bitrix.krayt_uslugi_avtoservisa","bitrix.delobot_winter_sale","bitrix.krayt_christmas_treats","bitrix.krayt_eksperty_tochnogo_zemledeliya","bitrix.krayt_servis_ukhoda_za_domom","bitrix.delobot_repetitor","bitrix.delobot_babysitter_for_children","bitrix.delobot_speech_therapist_services","bitrix.empty_template","bitrix.krayt_gift_wrapping"]','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'rest','NAME' => 'entity_iblock_type','VALUE' => 'rest_entity','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'rest','NAME' => 'server_path','VALUE' => '/rest','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'search','NAME' => 'dbnode_id','VALUE' => 'N','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'search','NAME' => 'dbnode_status','VALUE' => 'ok','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'search','NAME' => 'version','VALUE' => 'v2.0','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'security','NAME' => 'ipcheck_disable_file','VALUE' => '/bitrix/modules/ipcheck_disable_6c100d5ba4a960691ac0f67eeb8083f9','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'security','NAME' => 'redirect_sid','VALUE' => '9cx3yyp6vw475gkvg7o2oyfjzexouqkn','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'socialservices','NAME' => 'allow_encrypted_tokens','VALUE' => '1','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'socialservices','NAME' => 'bitrix24net_domain','VALUE' => 'http://rimstudio','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'socialservices','NAME' => 'bitrix24net_id','VALUE' => 'ext.63ee21314fb6b0.87372750','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'socialservices','NAME' => 'bitrix24net_secret','VALUE' => '6pT9KX3pEmjtI7rrBlmm3uXlMoHNnmvW5cndoXkrnk1vRC3Bxl','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'socialservices','NAME' => 'google_api_key','VALUE' => 'AIzaSyA7puwZwGDJgOjcAWsFsY7hQcrioC13A18','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'socialservices','NAME' => 'google_appid','VALUE' => '798910771106.apps.googleusercontent.com','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'vote','NAME' => 'VOTE_COMPATIBLE_OLD_TEMPLATE','VALUE' => 'N','DESCRIPTION' => NULL,'SITE_ID' => NULL),
  array('MODULE_ID' => 'vote','NAME' => 'VOTE_DIR','VALUE' => '','DESCRIPTION' => NULL,'SITE_ID' => NULL)
);

/* `rimstudio_db`.`b_option_site` */
$b_option_site = array(
  array('MODULE_ID' => 'forum','NAME' => 'FILTER_DICT_T','SITE_ID' => 'en','VALUE' => '4'),
  array('MODULE_ID' => 'forum','NAME' => 'FILTER_DICT_T','SITE_ID' => 'ru','VALUE' => '2'),
  array('MODULE_ID' => 'forum','NAME' => 'FILTER_DICT_W','SITE_ID' => 'en','VALUE' => '3'),
  array('MODULE_ID' => 'forum','NAME' => 'FILTER_DICT_W','SITE_ID' => 'ru','VALUE' => '1')
);

/* `rimstudio_db`.`b_perf_cache` */
$b_perf_cache = array(
);

/* `rimstudio_db`.`b_perf_cluster` */
$b_perf_cluster = array(
);

/* `rimstudio_db`.`b_perf_component` */
$b_perf_component = array(
);

/* `rimstudio_db`.`b_perf_error` */
$b_perf_error = array(
);

/* `rimstudio_db`.`b_perf_history` */
$b_perf_history = array(
);

/* `rimstudio_db`.`b_perf_hit` */
$b_perf_hit = array(
);

/* `rimstudio_db`.`b_perf_index_ban` */
$b_perf_index_ban = array(
);

/* `rimstudio_db`.`b_perf_index_complete` */
$b_perf_index_complete = array(
);

/* `rimstudio_db`.`b_perf_index_suggest` */
$b_perf_index_suggest = array(
);

/* `rimstudio_db`.`b_perf_index_suggest_sql` */
$b_perf_index_suggest_sql = array(
);

/* `rimstudio_db`.`b_perf_sql` */
$b_perf_sql = array(
);

/* `rimstudio_db`.`b_perf_sql_backtrace` */
$b_perf_sql_backtrace = array(
);

/* `rimstudio_db`.`b_perf_tab_column_stat` */
$b_perf_tab_column_stat = array(
);

/* `rimstudio_db`.`b_perf_tab_stat` */
$b_perf_tab_stat = array(
);

/* `rimstudio_db`.`b_perf_test` */
$b_perf_test = array(
);

/* `rimstudio_db`.`b_posting` */
$b_posting = array(
);

/* `rimstudio_db`.`b_posting_email` */
$b_posting_email = array(
);

/* `rimstudio_db`.`b_posting_file` */
$b_posting_file = array(
);

/* `rimstudio_db`.`b_posting_group` */
$b_posting_group = array(
);

/* `rimstudio_db`.`b_posting_rubric` */
$b_posting_rubric = array(
);

/* `rimstudio_db`.`b_rating` */
$b_rating = array(
  array('ID' => '1','ACTIVE' => 'N','NAME' => 'Рейтинг','ENTITY_ID' => 'USER','CALCULATION_METHOD' => 'SUM','CREATED' => '2023-02-16 15:24:01','LAST_MODIFIED' => NULL,'LAST_CALCULATED' => NULL,'POSITION' => 'Y','AUTHORITY' => 'N','CALCULATED' => 'N','CONFIGS' => 'a:3:{s:4:"MAIN";a:2:{s:4:"VOTE";a:1:{s:4:"USER";a:2:{s:11:"COEFFICIENT";s:1:"1";s:5:"LIMIT";s:2:"30";}}s:6:"RATING";a:1:{s:5:"BONUS";a:2:{s:6:"ACTIVE";s:1:"Y";s:11:"COEFFICIENT";s:1:"1";}}}s:5:"FORUM";a:2:{s:4:"VOTE";a:2:{s:5:"TOPIC";a:3:{s:6:"ACTIVE";s:1:"Y";s:11:"COEFFICIENT";s:3:"0.5";s:5:"LIMIT";s:2:"30";}s:4:"POST";a:3:{s:6:"ACTIVE";s:1:"Y";s:11:"COEFFICIENT";s:3:"0.1";s:5:"LIMIT";s:2:"30";}}s:6:"RATING";a:1:{s:8:"ACTIVITY";a:9:{s:6:"ACTIVE";s:1:"Y";s:16:"TODAY_TOPIC_COEF";s:3:"0.4";s:15:"WEEK_TOPIC_COEF";s:3:"0.2";s:16:"MONTH_TOPIC_COEF";s:3:"0.1";s:14:"ALL_TOPIC_COEF";s:1:"0";s:15:"TODAY_POST_COEF";s:3:"0.2";s:14:"WEEK_POST_COEF";s:3:"0.1";s:15:"MONTH_POST_COEF";s:4:"0.05";s:13:"ALL_POST_COEF";s:1:"0";}}}s:4:"BLOG";a:2:{s:4:"VOTE";a:2:{s:4:"POST";a:3:{s:6:"ACTIVE";s:1:"Y";s:11:"COEFFICIENT";s:3:"0.5";s:5:"LIMIT";s:2:"30";}s:7:"COMMENT";a:3:{s:6:"ACTIVE";s:1:"Y";s:11:"COEFFICIENT";s:3:"0.1";s:5:"LIMIT";s:2:"30";}}s:6:"RATING";a:1:{s:8:"ACTIVITY";a:9:{s:6:"ACTIVE";s:1:"Y";s:15:"TODAY_POST_COEF";s:3:"0.4";s:14:"WEEK_POST_COEF";s:3:"0.2";s:15:"MONTH_POST_COEF";s:3:"0.1";s:13:"ALL_POST_COEF";s:1:"0";s:18:"TODAY_COMMENT_COEF";s:3:"0.2";s:17:"WEEK_COMMENT_COEF";s:3:"0.1";s:18:"MONTH_COMMENT_COEF";s:4:"0.05";s:16:"ALL_COMMENT_COEF";s:1:"0";}}}}'),
  array('ID' => '2','ACTIVE' => 'N','NAME' => 'Авторитет','ENTITY_ID' => 'USER','CALCULATION_METHOD' => 'SUM','CREATED' => '2023-02-16 15:24:01','LAST_MODIFIED' => NULL,'LAST_CALCULATED' => NULL,'POSITION' => 'Y','AUTHORITY' => 'Y','CALCULATED' => 'N','CONFIGS' => 'a:3:{s:4:"MAIN";a:2:{s:4:"VOTE";a:1:{s:4:"USER";a:3:{s:6:"ACTIVE";s:1:"Y";s:11:"COEFFICIENT";s:1:"1";s:5:"LIMIT";s:1:"0";}}s:6:"RATING";a:1:{s:5:"BONUS";a:2:{s:6:"ACTIVE";s:1:"Y";s:11:"COEFFICIENT";s:1:"1";}}}s:5:"FORUM";a:2:{s:4:"VOTE";a:2:{s:5:"TOPIC";a:2:{s:11:"COEFFICIENT";s:1:"1";s:5:"LIMIT";s:2:"30";}s:4:"POST";a:2:{s:11:"COEFFICIENT";s:1:"1";s:5:"LIMIT";s:2:"30";}}s:6:"RATING";a:1:{s:8:"ACTIVITY";a:8:{s:16:"TODAY_TOPIC_COEF";s:2:"20";s:15:"WEEK_TOPIC_COEF";s:2:"10";s:16:"MONTH_TOPIC_COEF";s:1:"5";s:14:"ALL_TOPIC_COEF";s:1:"0";s:15:"TODAY_POST_COEF";s:3:"0.4";s:14:"WEEK_POST_COEF";s:3:"0.2";s:15:"MONTH_POST_COEF";s:3:"0.1";s:13:"ALL_POST_COEF";s:1:"0";}}}s:4:"BLOG";a:2:{s:4:"VOTE";a:2:{s:4:"POST";a:2:{s:11:"COEFFICIENT";s:1:"1";s:5:"LIMIT";s:2:"30";}s:7:"COMMENT";a:2:{s:11:"COEFFICIENT";s:1:"1";s:5:"LIMIT";s:2:"30";}}s:6:"RATING";a:1:{s:8:"ACTIVITY";a:8:{s:15:"TODAY_POST_COEF";s:3:"0.4";s:14:"WEEK_POST_COEF";s:3:"0.2";s:15:"MONTH_POST_COEF";s:3:"0.1";s:13:"ALL_POST_COEF";s:1:"0";s:18:"TODAY_COMMENT_COEF";s:3:"0.2";s:17:"WEEK_COMMENT_COEF";s:3:"0.1";s:18:"MONTH_COMMENT_COEF";s:4:"0.05";s:16:"ALL_COMMENT_COEF";s:1:"0";}}}}')
);

/* `rimstudio_db`.`b_rating_component` */
$b_rating_component = array(
);

/* `rimstudio_db`.`b_rating_component_results` */
$b_rating_component_results = array(
);

/* `rimstudio_db`.`b_rating_prepare` */
$b_rating_prepare = array(
);

/* `rimstudio_db`.`b_rating_results` */
$b_rating_results = array(
);

/* `rimstudio_db`.`b_rating_rule` */
$b_rating_rule = array(
  array('ID' => '1','ACTIVE' => 'N','NAME' => 'Добавление в группу пользователей, имеющих право голосовать за рейтинг','ENTITY_TYPE_ID' => 'USER','CONDITION_NAME' => 'AUTHORITY','CONDITION_MODULE' => NULL,'CONDITION_CLASS' => 'CRatingRulesMain','CONDITION_METHOD' => 'ratingCheck','CONDITION_CONFIG' => 'a:1:{s:9:"AUTHORITY";a:2:{s:16:"RATING_CONDITION";i:1;s:12:"RATING_VALUE";i:1;}}','ACTION_NAME' => 'ADD_TO_GROUP','ACTION_CONFIG' => 'a:1:{s:12:"ADD_TO_GROUP";a:1:{s:8:"GROUP_ID";s:1:"3";}}','ACTIVATE' => 'N','ACTIVATE_CLASS' => 'CRatingRulesMain','ACTIVATE_METHOD' => 'addToGroup','DEACTIVATE' => 'N','DEACTIVATE_CLASS' => 'CRatingRulesMain ','DEACTIVATE_METHOD' => 'addToGroup','CREATED' => '2023-02-16 15:24:01','LAST_MODIFIED' => '2023-02-16 15:24:01','LAST_APPLIED' => NULL),
  array('ID' => '2','ACTIVE' => 'N','NAME' => 'Удаление из группы пользователей, не имеющих права голосовать за рейтинг','ENTITY_TYPE_ID' => 'USER','CONDITION_NAME' => 'AUTHORITY','CONDITION_MODULE' => NULL,'CONDITION_CLASS' => 'CRatingRulesMain','CONDITION_METHOD' => 'ratingCheck','CONDITION_CONFIG' => 'a:1:{s:9:"AUTHORITY";a:2:{s:16:"RATING_CONDITION";i:2;s:12:"RATING_VALUE";i:1;}}','ACTION_NAME' => 'REMOVE_FROM_GROUP','ACTION_CONFIG' => 'a:1:{s:17:"REMOVE_FROM_GROUP";a:1:{s:8:"GROUP_ID";s:1:"3";}}','ACTIVATE' => 'N','ACTIVATE_CLASS' => 'CRatingRulesMain','ACTIVATE_METHOD' => 'removeFromGroup','DEACTIVATE' => 'N','DEACTIVATE_CLASS' => 'CRatingRulesMain ','DEACTIVATE_METHOD' => 'removeFromGroup','CREATED' => '2023-02-16 15:24:01','LAST_MODIFIED' => '2023-02-16 15:24:01','LAST_APPLIED' => NULL),
  array('ID' => '3','ACTIVE' => 'N','NAME' => 'Добавление в группу пользователей, имеющих право голосовать за авторитет','ENTITY_TYPE_ID' => 'USER','CONDITION_NAME' => 'AUTHORITY','CONDITION_MODULE' => NULL,'CONDITION_CLASS' => 'CRatingRulesMain','CONDITION_METHOD' => 'ratingCheck','CONDITION_CONFIG' => 'a:1:{s:9:"AUTHORITY";a:2:{s:16:"RATING_CONDITION";i:1;s:12:"RATING_VALUE";i:2;}}','ACTION_NAME' => 'ADD_TO_GROUP','ACTION_CONFIG' => 'a:1:{s:12:"ADD_TO_GROUP";a:1:{s:8:"GROUP_ID";s:1:"4";}}','ACTIVATE' => 'N','ACTIVATE_CLASS' => 'CRatingRulesMain','ACTIVATE_METHOD' => 'addToGroup','DEACTIVATE' => 'N','DEACTIVATE_CLASS' => 'CRatingRulesMain ','DEACTIVATE_METHOD' => 'addToGroup','CREATED' => '2023-02-16 15:24:01','LAST_MODIFIED' => '2023-02-16 15:24:01','LAST_APPLIED' => NULL),
  array('ID' => '4','ACTIVE' => 'N','NAME' => 'Удаление из группы пользователей, не имеющих права голосовать за авторитет','ENTITY_TYPE_ID' => 'USER','CONDITION_NAME' => 'AUTHORITY','CONDITION_MODULE' => NULL,'CONDITION_CLASS' => 'CRatingRulesMain','CONDITION_METHOD' => 'ratingCheck','CONDITION_CONFIG' => 'a:1:{s:9:"AUTHORITY";a:2:{s:16:"RATING_CONDITION";i:2;s:12:"RATING_VALUE";i:2;}}','ACTION_NAME' => 'REMOVE_FROM_GROUP','ACTION_CONFIG' => 'a:1:{s:17:"REMOVE_FROM_GROUP";a:1:{s:8:"GROUP_ID";s:1:"4";}}','ACTIVATE' => 'N','ACTIVATE_CLASS' => 'CRatingRulesMain','ACTIVATE_METHOD' => 'removeFromGroup','DEACTIVATE' => 'N','DEACTIVATE_CLASS' => 'CRatingRulesMain ','DEACTIVATE_METHOD' => 'removeFromGroup','CREATED' => '2023-02-16 15:24:01','LAST_MODIFIED' => '2023-02-16 15:24:01','LAST_APPLIED' => NULL),
  array('ID' => '5','ACTIVE' => 'Y','NAME' => 'Автоматическое голосование за авторитет пользователя','ENTITY_TYPE_ID' => 'USER','CONDITION_NAME' => 'VOTE','CONDITION_MODULE' => NULL,'CONDITION_CLASS' => 'CRatingRulesMain','CONDITION_METHOD' => 'voteCheck','CONDITION_CONFIG' => 'a:1:{s:4:"VOTE";a:6:{s:10:"VOTE_LIMIT";i:90;s:11:"VOTE_RESULT";i:10;s:16:"VOTE_FORUM_TOPIC";d:0.5;s:15:"VOTE_FORUM_POST";d:0.1;s:14:"VOTE_BLOG_POST";d:0.5;s:17:"VOTE_BLOG_COMMENT";d:0.1;}}','ACTION_NAME' => 'empty','ACTION_CONFIG' => 'a:0:{}','ACTIVATE' => 'N','ACTIVATE_CLASS' => 'empty','ACTIVATE_METHOD' => 'empty','DEACTIVATE' => 'N','DEACTIVATE_CLASS' => 'empty ','DEACTIVATE_METHOD' => 'empty','CREATED' => '2023-02-16 15:24:01','LAST_MODIFIED' => '2023-02-16 15:24:01','LAST_APPLIED' => NULL)
);

/* `rimstudio_db`.`b_rating_rule_vetting` */
$b_rating_rule_vetting = array(
);

/* `rimstudio_db`.`b_rating_user` */
$b_rating_user = array(
  array('ID' => '1','RATING_ID' => '2','ENTITY_ID' => '1','BONUS' => '3.0000','VOTE_WEIGHT' => '30.0000','VOTE_COUNT' => '13')
);

/* `rimstudio_db`.`b_rating_vote` */
$b_rating_vote = array(
);

/* `rimstudio_db`.`b_rating_vote_group` */
$b_rating_vote_group = array(
  array('ID' => '5','GROUP_ID' => '1','TYPE' => 'A'),
  array('ID' => '1','GROUP_ID' => '1','TYPE' => 'R'),
  array('ID' => '3','GROUP_ID' => '1','TYPE' => 'R'),
  array('ID' => '2','GROUP_ID' => '3','TYPE' => 'R'),
  array('ID' => '4','GROUP_ID' => '3','TYPE' => 'R'),
  array('ID' => '6','GROUP_ID' => '4','TYPE' => 'A')
);

/* `rimstudio_db`.`b_rating_voting` */
$b_rating_voting = array(
);

/* `rimstudio_db`.`b_rating_voting_prepare` */
$b_rating_voting_prepare = array(
);

/* `rimstudio_db`.`b_rating_voting_reaction` */
$b_rating_voting_reaction = array(
);

/* `rimstudio_db`.`b_rating_weight` */
$b_rating_weight = array(
  array('ID' => '1','RATING_FROM' => '-1000000.0000','RATING_TO' => '1000000.0000','WEIGHT' => '1.0000','COUNT' => '10')
);

/* `rimstudio_db`.`b_rest_ap` */
$b_rest_ap = array(
);

/* `rimstudio_db`.`b_rest_app` */
$b_rest_app = array(
);

/* `rimstudio_db`.`b_rest_app_lang` */
$b_rest_app_lang = array(
);

/* `rimstudio_db`.`b_rest_app_log` */
$b_rest_app_log = array(
);

/* `rimstudio_db`.`b_rest_ap_permission` */
$b_rest_ap_permission = array(
);

/* `rimstudio_db`.`b_rest_configuration_storage` */
$b_rest_configuration_storage = array(
);

/* `rimstudio_db`.`b_rest_event` */
$b_rest_event = array(
);

/* `rimstudio_db`.`b_rest_event_offline` */
$b_rest_event_offline = array(
);

/* `rimstudio_db`.`b_rest_integration` */
$b_rest_integration = array(
);

/* `rimstudio_db`.`b_rest_log` */
$b_rest_log = array(
);

/* `rimstudio_db`.`b_rest_owner_entity` */
$b_rest_owner_entity = array(
);

/* `rimstudio_db`.`b_rest_placement` */
$b_rest_placement = array(
);

/* `rimstudio_db`.`b_rest_placement_lang` */
$b_rest_placement_lang = array(
);

/* `rimstudio_db`.`b_rest_stat` */
$b_rest_stat = array(
);

/* `rimstudio_db`.`b_rest_stat_app` */
$b_rest_stat_app = array(
);

/* `rimstudio_db`.`b_rest_stat_method` */
$b_rest_stat_method = array(
);

/* `rimstudio_db`.`b_rest_usage_entity` */
$b_rest_usage_entity = array(
);

/* `rimstudio_db`.`b_rest_usage_stat` */
$b_rest_usage_stat = array(
);

/* `rimstudio_db`.`b_search_content` */
$b_search_content = array(
  array('ID' => '1','DATE_CHANGE' => '2023-02-20 17:23:19','MODULE_ID' => 'main','ITEM_ID' => 's1|/index.php','CUSTOM_RANK' => '0','USER_ID' => NULL,'ENTITY_TYPE_ID' => NULL,'ENTITY_ID' => NULL,'URL' => '/index.php','TITLE' => 'Главная','BODY' => '','TAGS' => '','PARAM1' => '','PARAM2' => '','UPD' => NULL,'DATE_FROM' => NULL,'DATE_TO' => NULL),
  array('ID' => '4','DATE_CHANGE' => '2023-02-18 17:51:43','MODULE_ID' => 'iblock','ITEM_ID' => '2','CUSTOM_RANK' => '0','USER_ID' => NULL,'ENTITY_TYPE_ID' => NULL,'ENTITY_ID' => NULL,'URL' => '=ID=2&EXTERNAL_ID=2&IBLOCK_SECTION_ID=&IBLOCK_TYPE_ID=Content&IBLOCK_ID=3&IBLOCK_CODE=portfolio&IBLOCK_EXTERNAL_ID=&CODE=krok','TITLE' => 'KROK','BODY' => 'KROK','TAGS' => '','PARAM1' => 'Content','PARAM2' => '3','UPD' => NULL,'DATE_FROM' => NULL,'DATE_TO' => NULL),
  array('ID' => '5','DATE_CHANGE' => '2023-02-18 17:51:21','MODULE_ID' => 'iblock','ITEM_ID' => '3','CUSTOM_RANK' => '0','USER_ID' => NULL,'ENTITY_TYPE_ID' => NULL,'ENTITY_ID' => NULL,'URL' => '=ID=3&EXTERNAL_ID=3&IBLOCK_SECTION_ID=&IBLOCK_TYPE_ID=Content&IBLOCK_ID=3&IBLOCK_CODE=portfolio&IBLOCK_EXTERNAL_ID=&CODE=shura-big','TITLE' => 'SHURA BIG','BODY' => 'SHURA BIG','TAGS' => '','PARAM1' => 'Content','PARAM2' => '3','UPD' => NULL,'DATE_FROM' => NULL,'DATE_TO' => NULL),
  array('ID' => '6','DATE_CHANGE' => '2023-02-19 06:54:05','MODULE_ID' => 'iblock','ITEM_ID' => '4','CUSTOM_RANK' => '0','USER_ID' => NULL,'ENTITY_TYPE_ID' => NULL,'ENTITY_ID' => NULL,'URL' => '=ID=4&EXTERNAL_ID=4&IBLOCK_SECTION_ID=&IBLOCK_TYPE_ID=Content&IBLOCK_ID=3&IBLOCK_CODE=portfolio&IBLOCK_EXTERNAL_ID=&CODE=oda','TITLE' => 'ODA','BODY' => 'ODA','TAGS' => '','PARAM1' => 'Content','PARAM2' => '3','UPD' => NULL,'DATE_FROM' => NULL,'DATE_TO' => NULL),
  array('ID' => '7','DATE_CHANGE' => '2023-02-19 06:59:46','MODULE_ID' => 'iblock','ITEM_ID' => '5','CUSTOM_RANK' => '0','USER_ID' => NULL,'ENTITY_TYPE_ID' => NULL,'ENTITY_ID' => NULL,'URL' => '=ID=5&EXTERNAL_ID=5&IBLOCK_SECTION_ID=&IBLOCK_TYPE_ID=Content&IBLOCK_ID=3&IBLOCK_CODE=portfolio&IBLOCK_EXTERNAL_ID=&CODE=grodekov','TITLE' => 'GRODEKOV','BODY' => 'GRODEKOV','TAGS' => '','PARAM1' => 'Content','PARAM2' => '3','UPD' => NULL,'DATE_FROM' => NULL,'DATE_TO' => NULL),
  array('ID' => '8','DATE_CHANGE' => '2023-02-19 07:01:08','MODULE_ID' => 'iblock','ITEM_ID' => '6','CUSTOM_RANK' => '0','USER_ID' => NULL,'ENTITY_TYPE_ID' => NULL,'ENTITY_ID' => NULL,'URL' => '=ID=6&EXTERNAL_ID=6&IBLOCK_SECTION_ID=&IBLOCK_TYPE_ID=Content&IBLOCK_ID=3&IBLOCK_CODE=portfolio&IBLOCK_EXTERNAL_ID=&CODE=pasta-na-bare','TITLE' => 'PASTA NA BARE','BODY' => 'PASTA NA BARE','TAGS' => '','PARAM1' => 'Content','PARAM2' => '3','UPD' => NULL,'DATE_FROM' => NULL,'DATE_TO' => NULL),
  array('ID' => '9','DATE_CHANGE' => '2023-02-19 07:03:03','MODULE_ID' => 'iblock','ITEM_ID' => '7','CUSTOM_RANK' => '0','USER_ID' => NULL,'ENTITY_TYPE_ID' => NULL,'ENTITY_ID' => NULL,'URL' => '=ID=7&EXTERNAL_ID=7&IBLOCK_SECTION_ID=&IBLOCK_TYPE_ID=Content&IBLOCK_ID=3&IBLOCK_CODE=portfolio&IBLOCK_EXTERNAL_ID=&CODE=avrora-i-lis','TITLE' => 'AVRORA I LIS','BODY' => 'AVRORA I LIS','TAGS' => '','PARAM1' => 'Content','PARAM2' => '3','UPD' => NULL,'DATE_FROM' => NULL,'DATE_TO' => NULL),
  array('ID' => '10','DATE_CHANGE' => '2023-02-19 07:04:47','MODULE_ID' => 'iblock','ITEM_ID' => '8','CUSTOM_RANK' => '0','USER_ID' => NULL,'ENTITY_TYPE_ID' => NULL,'ENTITY_ID' => NULL,'URL' => '=ID=8&EXTERNAL_ID=8&IBLOCK_SECTION_ID=&IBLOCK_TYPE_ID=Content&IBLOCK_ID=3&IBLOCK_CODE=portfolio&IBLOCK_EXTERNAL_ID=&CODE=optica','TITLE' => 'OPTICA','BODY' => 'OPTICA','TAGS' => '','PARAM1' => 'Content','PARAM2' => '3','UPD' => NULL,'DATE_FROM' => NULL,'DATE_TO' => NULL),
  array('ID' => '11','DATE_CHANGE' => '2023-02-19 07:05:37','MODULE_ID' => 'iblock','ITEM_ID' => '9','CUSTOM_RANK' => '0','USER_ID' => NULL,'ENTITY_TYPE_ID' => NULL,'ENTITY_ID' => NULL,'URL' => '=ID=9&EXTERNAL_ID=9&IBLOCK_SECTION_ID=&IBLOCK_TYPE_ID=Content&IBLOCK_ID=3&IBLOCK_CODE=portfolio&IBLOCK_EXTERNAL_ID=&CODE=kit','TITLE' => 'KIT','BODY' => 'KIT','TAGS' => '','PARAM1' => 'Content','PARAM2' => '3','UPD' => NULL,'DATE_FROM' => NULL,'DATE_TO' => NULL),
  array('ID' => '12','DATE_CHANGE' => '2023-02-19 07:06:14','MODULE_ID' => 'iblock','ITEM_ID' => '10','CUSTOM_RANK' => '0','USER_ID' => NULL,'ENTITY_TYPE_ID' => NULL,'ENTITY_ID' => NULL,'URL' => '=ID=10&EXTERNAL_ID=10&IBLOCK_SECTION_ID=&IBLOCK_TYPE_ID=Content&IBLOCK_ID=3&IBLOCK_CODE=portfolio&IBLOCK_EXTERNAL_ID=&CODE=kontseptsiya-red-bird-square','TITLE' => 'Концепция «RED BIRD SQUARE»','BODY' => 'Концепция «RED BIRD SQUARE»','TAGS' => '','PARAM1' => 'Content','PARAM2' => '3','UPD' => NULL,'DATE_FROM' => NULL,'DATE_TO' => NULL)
);

/* `rimstudio_db`.`b_search_content_freq` */
$b_search_content_freq = array(
);

/* `rimstudio_db`.`b_search_content_param` */
$b_search_content_param = array(
);

/* `rimstudio_db`.`b_search_content_right` */
$b_search_content_right = array(
  array('SEARCH_CONTENT_ID' => '1','GROUP_CODE' => 'G2'),
  array('SEARCH_CONTENT_ID' => '4','GROUP_CODE' => 'G1'),
  array('SEARCH_CONTENT_ID' => '4','GROUP_CODE' => 'G2'),
  array('SEARCH_CONTENT_ID' => '5','GROUP_CODE' => 'G1'),
  array('SEARCH_CONTENT_ID' => '5','GROUP_CODE' => 'G2'),
  array('SEARCH_CONTENT_ID' => '6','GROUP_CODE' => 'G1'),
  array('SEARCH_CONTENT_ID' => '6','GROUP_CODE' => 'G2'),
  array('SEARCH_CONTENT_ID' => '7','GROUP_CODE' => 'G1'),
  array('SEARCH_CONTENT_ID' => '7','GROUP_CODE' => 'G2'),
  array('SEARCH_CONTENT_ID' => '8','GROUP_CODE' => 'G1'),
  array('SEARCH_CONTENT_ID' => '8','GROUP_CODE' => 'G2'),
  array('SEARCH_CONTENT_ID' => '9','GROUP_CODE' => 'G1'),
  array('SEARCH_CONTENT_ID' => '9','GROUP_CODE' => 'G2'),
  array('SEARCH_CONTENT_ID' => '10','GROUP_CODE' => 'G1'),
  array('SEARCH_CONTENT_ID' => '10','GROUP_CODE' => 'G2'),
  array('SEARCH_CONTENT_ID' => '11','GROUP_CODE' => 'G1'),
  array('SEARCH_CONTENT_ID' => '11','GROUP_CODE' => 'G2'),
  array('SEARCH_CONTENT_ID' => '12','GROUP_CODE' => 'G1'),
  array('SEARCH_CONTENT_ID' => '12','GROUP_CODE' => 'G2')
);

/* `rimstudio_db`.`b_search_content_site` */
$b_search_content_site = array(
  array('SEARCH_CONTENT_ID' => '1','SITE_ID' => 's1','URL' => ''),
  array('SEARCH_CONTENT_ID' => '4','SITE_ID' => 's1','URL' => ''),
  array('SEARCH_CONTENT_ID' => '5','SITE_ID' => 's1','URL' => ''),
  array('SEARCH_CONTENT_ID' => '6','SITE_ID' => 's1','URL' => ''),
  array('SEARCH_CONTENT_ID' => '7','SITE_ID' => 's1','URL' => ''),
  array('SEARCH_CONTENT_ID' => '8','SITE_ID' => 's1','URL' => ''),
  array('SEARCH_CONTENT_ID' => '9','SITE_ID' => 's1','URL' => ''),
  array('SEARCH_CONTENT_ID' => '10','SITE_ID' => 's1','URL' => ''),
  array('SEARCH_CONTENT_ID' => '11','SITE_ID' => 's1','URL' => ''),
  array('SEARCH_CONTENT_ID' => '12','SITE_ID' => 's1','URL' => '')
);

/* `rimstudio_db`.`b_search_content_stem` */
$b_search_content_stem = array(
  array('SEARCH_CONTENT_ID' => '1','LANGUAGE_ID' => 'ru','STEM' => '1','TF' => '0.2314','PS' => '1'),
  array('SEARCH_CONTENT_ID' => '4','LANGUAGE_ID' => 'ru','STEM' => '2','TF' => '0.3667','PS' => '1.5'),
  array('SEARCH_CONTENT_ID' => '5','LANGUAGE_ID' => 'ru','STEM' => '12','TF' => '0.3667','PS' => '2'),
  array('SEARCH_CONTENT_ID' => '5','LANGUAGE_ID' => 'ru','STEM' => '13','TF' => '0.3667','PS' => '3'),
  array('SEARCH_CONTENT_ID' => '6','LANGUAGE_ID' => 'ru','STEM' => '14','TF' => '0.3667','PS' => '1.5'),
  array('SEARCH_CONTENT_ID' => '7','LANGUAGE_ID' => 'ru','STEM' => '15','TF' => '0.3667','PS' => '1.5'),
  array('SEARCH_CONTENT_ID' => '8','LANGUAGE_ID' => 'ru','STEM' => '16','TF' => '0.3667','PS' => '2.5'),
  array('SEARCH_CONTENT_ID' => '8','LANGUAGE_ID' => 'ru','STEM' => '17','TF' => '0.3667','PS' => '3.5'),
  array('SEARCH_CONTENT_ID' => '8','LANGUAGE_ID' => 'ru','STEM' => '18','TF' => '0.3667','PS' => '4.5'),
  array('SEARCH_CONTENT_ID' => '9','LANGUAGE_ID' => 'ru','STEM' => '19','TF' => '0.3667','PS' => '2.5'),
  array('SEARCH_CONTENT_ID' => '9','LANGUAGE_ID' => 'ru','STEM' => '20','TF' => '0.3667','PS' => '4.5'),
  array('SEARCH_CONTENT_ID' => '10','LANGUAGE_ID' => 'ru','STEM' => '21','TF' => '0.3667','PS' => '1.5'),
  array('SEARCH_CONTENT_ID' => '11','LANGUAGE_ID' => 'ru','STEM' => '22','TF' => '0.3667','PS' => '1.5'),
  array('SEARCH_CONTENT_ID' => '12','LANGUAGE_ID' => 'ru','STEM' => '23','TF' => '0.3667','PS' => '3'),
  array('SEARCH_CONTENT_ID' => '12','LANGUAGE_ID' => 'ru','STEM' => '24','TF' => '0.3667','PS' => '4'),
  array('SEARCH_CONTENT_ID' => '12','LANGUAGE_ID' => 'ru','STEM' => '25','TF' => '0.3667','PS' => '5'),
  array('SEARCH_CONTENT_ID' => '12','LANGUAGE_ID' => 'ru','STEM' => '26','TF' => '0.3667','PS' => '6')
);

/* `rimstudio_db`.`b_search_content_text` */
$b_search_content_text = array(
  array('SEARCH_CONTENT_ID' => '1','SEARCH_CONTENT_MD5' => 'f10591b306cc35ed567604af57dcb373','SEARCHABLE_CONTENT' => 'ГЛАВНАЯ

'),
  array('SEARCH_CONTENT_ID' => '4','SEARCH_CONTENT_MD5' => 'f5a9c65fac6c0ead71bed476232818a6','SEARCHABLE_CONTENT' => 'KROK
KROK
'),
  array('SEARCH_CONTENT_ID' => '5','SEARCH_CONTENT_MD5' => '2c94dcfa00abf5204c792d7eee83c033','SEARCHABLE_CONTENT' => 'SHURA BIG
SHURA BIG
'),
  array('SEARCH_CONTENT_ID' => '6','SEARCH_CONTENT_MD5' => '2bb488d4c47403311ca1eeefc9727376','SEARCHABLE_CONTENT' => 'ODA
ODA
'),
  array('SEARCH_CONTENT_ID' => '7','SEARCH_CONTENT_MD5' => '23726cf22967f59d1f9ba2d9bf48eb03','SEARCHABLE_CONTENT' => 'GRODEKOV
GRODEKOV
'),
  array('SEARCH_CONTENT_ID' => '8','SEARCH_CONTENT_MD5' => '8fe00d5ec065df207786f137b094e2ae','SEARCHABLE_CONTENT' => 'PASTA NA BARE
PASTA NA BARE
'),
  array('SEARCH_CONTENT_ID' => '9','SEARCH_CONTENT_MD5' => '33bb12e97b348b878f7b7ea275ee40e0','SEARCHABLE_CONTENT' => 'AVRORA I LIS
AVRORA I LIS
'),
  array('SEARCH_CONTENT_ID' => '10','SEARCH_CONTENT_MD5' => '50abe8903de297fca2f5d4ba997c4515','SEARCHABLE_CONTENT' => 'OPTICA
OPTICA
'),
  array('SEARCH_CONTENT_ID' => '11','SEARCH_CONTENT_MD5' => '9472f99af181ed43aa2b872bf443de34','SEARCHABLE_CONTENT' => 'KIT
KIT
'),
  array('SEARCH_CONTENT_ID' => '12','SEARCH_CONTENT_MD5' => '2c64ed9f3e39ae6722d9dc136be71646','SEARCHABLE_CONTENT' => 'КОНЦЕПЦИЯ «RED BIRD SQUARE»
КОНЦЕПЦИЯ «RED BIRD SQUARE»
')
);

/* `rimstudio_db`.`b_search_content_title` */
$b_search_content_title = array(
  array('SEARCH_CONTENT_ID' => '1','SITE_ID' => 's1','POS' => '0','WORD' => 'ГЛАВНАЯ'),
  array('SEARCH_CONTENT_ID' => '4','SITE_ID' => 's1','POS' => '0','WORD' => 'KROK'),
  array('SEARCH_CONTENT_ID' => '5','SITE_ID' => 's1','POS' => '6','WORD' => 'BIG'),
  array('SEARCH_CONTENT_ID' => '5','SITE_ID' => 's1','POS' => '0','WORD' => 'SHURA'),
  array('SEARCH_CONTENT_ID' => '6','SITE_ID' => 's1','POS' => '0','WORD' => 'ODA'),
  array('SEARCH_CONTENT_ID' => '7','SITE_ID' => 's1','POS' => '0','WORD' => 'GRODEKOV'),
  array('SEARCH_CONTENT_ID' => '8','SITE_ID' => 's1','POS' => '9','WORD' => 'BARE'),
  array('SEARCH_CONTENT_ID' => '8','SITE_ID' => 's1','POS' => '6','WORD' => 'NA'),
  array('SEARCH_CONTENT_ID' => '8','SITE_ID' => 's1','POS' => '0','WORD' => 'PASTA'),
  array('SEARCH_CONTENT_ID' => '9','SITE_ID' => 's1','POS' => '0','WORD' => 'AVRORA'),
  array('SEARCH_CONTENT_ID' => '9','SITE_ID' => 's1','POS' => '7','WORD' => 'I'),
  array('SEARCH_CONTENT_ID' => '9','SITE_ID' => 's1','POS' => '9','WORD' => 'LIS'),
  array('SEARCH_CONTENT_ID' => '10','SITE_ID' => 's1','POS' => '0','WORD' => 'OPTICA'),
  array('SEARCH_CONTENT_ID' => '11','SITE_ID' => 's1','POS' => '0','WORD' => 'KIT'),
  array('SEARCH_CONTENT_ID' => '12','SITE_ID' => 's1','POS' => '15','WORD' => 'BIRD'),
  array('SEARCH_CONTENT_ID' => '12','SITE_ID' => 's1','POS' => '11','WORD' => 'RED'),
  array('SEARCH_CONTENT_ID' => '12','SITE_ID' => 's1','POS' => '20','WORD' => 'SQUARE'),
  array('SEARCH_CONTENT_ID' => '12','SITE_ID' => 's1','POS' => '0','WORD' => 'КОНЦЕПЦИЯ')
);

/* `rimstudio_db`.`b_search_custom_rank` */
$b_search_custom_rank = array(
);

/* `rimstudio_db`.`b_search_phrase` */
$b_search_phrase = array(
);

/* `rimstudio_db`.`b_search_stem` */
$b_search_stem = array(
  array('ID' => '11','STEM' => '123123'),
  array('ID' => '10','STEM' => '234234'),
  array('ID' => '19','STEM' => 'AVRORA'),
  array('ID' => '18','STEM' => 'BARE'),
  array('ID' => '13','STEM' => 'BIG'),
  array('ID' => '25','STEM' => 'BIRD'),
  array('ID' => '15','STEM' => 'GRODEKOV'),
  array('ID' => '22','STEM' => 'KIT'),
  array('ID' => '2','STEM' => 'KROK'),
  array('ID' => '20','STEM' => 'LIS'),
  array('ID' => '17','STEM' => 'NA'),
  array('ID' => '14','STEM' => 'ODA'),
  array('ID' => '21','STEM' => 'OPTICA'),
  array('ID' => '16','STEM' => 'PASTA'),
  array('ID' => '24','STEM' => 'RED'),
  array('ID' => '12','STEM' => 'SHURA'),
  array('ID' => '26','STEM' => 'SQUARE'),
  array('ID' => '1','STEM' => 'ГЛАВН'),
  array('ID' => '23','STEM' => 'КОНЦЕПЦ'),
  array('ID' => '7','STEM' => 'ОТКРЫТ'),
  array('ID' => '9','STEM' => 'ПРОСТРАНСТВ'),
  array('ID' => '5','STEM' => 'РАЗНООБРАЗ'),
  array('ID' => '8','STEM' => 'СВЕТЛ'),
  array('ID' => '6','STEM' => 'ФАКТУР'),
  array('ID' => '4','STEM' => 'ЦВЕТ'),
  array('ID' => '3','STEM' => 'ЧИСТ')
);

/* `rimstudio_db`.`b_search_suggest` */
$b_search_suggest = array(
);

/* `rimstudio_db`.`b_search_tags` */
$b_search_tags = array(
);

/* `rimstudio_db`.`b_search_user_right` */
$b_search_user_right = array(
);

/* `rimstudio_db`.`b_security_sitecheck` */
$b_security_sitecheck = array(
);

/* `rimstudio_db`.`b_sec_filter_mask` */
$b_sec_filter_mask = array(
);

/* `rimstudio_db`.`b_sec_frame_mask` */
$b_sec_frame_mask = array(
);

/* `rimstudio_db`.`b_sec_iprule` */
$b_sec_iprule = array(
);

/* `rimstudio_db`.`b_sec_iprule_excl_ip` */
$b_sec_iprule_excl_ip = array(
);

/* `rimstudio_db`.`b_sec_iprule_excl_mask` */
$b_sec_iprule_excl_mask = array(
);

/* `rimstudio_db`.`b_sec_iprule_incl_ip` */
$b_sec_iprule_incl_ip = array(
);

/* `rimstudio_db`.`b_sec_iprule_incl_mask` */
$b_sec_iprule_incl_mask = array(
);

/* `rimstudio_db`.`b_sec_recovery_codes` */
$b_sec_recovery_codes = array(
);

/* `rimstudio_db`.`b_sec_redirect_url` */
$b_sec_redirect_url = array(
);

/* `rimstudio_db`.`b_sec_session` */
$b_sec_session = array(
);

/* `rimstudio_db`.`b_sec_user` */
$b_sec_user = array(
);

/* `rimstudio_db`.`b_sec_virus` */
$b_sec_virus = array(
);

/* `rimstudio_db`.`b_sec_white_list` */
$b_sec_white_list = array(
);

/* `rimstudio_db`.`b_seo_adv_autolog` */
$b_seo_adv_autolog = array(
);

/* `rimstudio_db`.`b_seo_adv_banner` */
$b_seo_adv_banner = array(
);

/* `rimstudio_db`.`b_seo_adv_campaign` */
$b_seo_adv_campaign = array(
);

/* `rimstudio_db`.`b_seo_adv_group` */
$b_seo_adv_group = array(
);

/* `rimstudio_db`.`b_seo_adv_link` */
$b_seo_adv_link = array(
);

/* `rimstudio_db`.`b_seo_adv_log` */
$b_seo_adv_log = array(
);

/* `rimstudio_db`.`b_seo_adv_order` */
$b_seo_adv_order = array(
);

/* `rimstudio_db`.`b_seo_adv_region` */
$b_seo_adv_region = array(
);

/* `rimstudio_db`.`b_seo_keywords` */
$b_seo_keywords = array(
);

/* `rimstudio_db`.`b_seo_search_engine` */
$b_seo_search_engine = array(
  array('ID' => '1','CODE' => 'google','ACTIVE' => 'Y','SORT' => '200','NAME' => 'Google','CLIENT_ID' => '868942902147-qrrd6ce1ajfkpse8ieq4gkpdeanvtnno.apps.googleusercontent.com','CLIENT_SECRET' => 'EItMlJpZLC2WRPKB6QsA5bV9','REDIRECT_URI' => 'urn:ietf:wg:oauth:2.0:oob','SETTINGS' => NULL),
  array('ID' => '2','CODE' => 'yandex','ACTIVE' => 'Y','SORT' => '300','NAME' => 'Yandex','CLIENT_ID' => 'f848c7bfc1d34a94ba6d05439f81bbd7','CLIENT_SECRET' => 'da0e73b2d9cc4e809f3170e49cb9df01','REDIRECT_URI' => 'https://oauth.yandex.ru/verification_code','SETTINGS' => NULL),
  array('ID' => '3','CODE' => 'yandex_direct','ACTIVE' => 'Y','SORT' => '400','NAME' => 'Yandex.Direct','CLIENT_ID' => '','CLIENT_SECRET' => '','REDIRECT_URI' => 'https://oauth.yandex.ru/verification_code','SETTINGS' => NULL)
);

/* `rimstudio_db`.`b_seo_service_log` */
$b_seo_service_log = array(
);

/* `rimstudio_db`.`b_seo_service_queue` */
$b_seo_service_queue = array(
);

/* `rimstudio_db`.`b_seo_service_rtg_queue` */
$b_seo_service_rtg_queue = array(
);

/* `rimstudio_db`.`b_seo_service_subscription` */
$b_seo_service_subscription = array(
);

/* `rimstudio_db`.`b_seo_service_webhook` */
$b_seo_service_webhook = array(
);

/* `rimstudio_db`.`b_seo_sitemap` */
$b_seo_sitemap = array(
);

/* `rimstudio_db`.`b_seo_sitemap_entity` */
$b_seo_sitemap_entity = array(
);

/* `rimstudio_db`.`b_seo_sitemap_iblock` */
$b_seo_sitemap_iblock = array(
);

/* `rimstudio_db`.`b_seo_sitemap_runtime` */
$b_seo_sitemap_runtime = array(
);

/* `rimstudio_db`.`b_seo_yandex_direct_stat` */
$b_seo_yandex_direct_stat = array(
);

/* `rimstudio_db`.`b_short_uri` */
$b_short_uri = array(
);

/* `rimstudio_db`.`b_site_template` */
$b_site_template = array(
  array('ID' => '2','SITE_ID' => 's1','CONDITION' => '','SORT' => '1','TEMPLATE' => 'main')
);

/* `rimstudio_db`.`b_smile` */
$b_smile = array(
  array('ID' => '1','TYPE' => 'S','SET_ID' => '2','SORT' => '100','TYPING' => ':) :-)','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_smile.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '2','TYPE' => 'S','SET_ID' => '2','SORT' => '105','TYPING' => ';) ;-)','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_wink.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '3','TYPE' => 'S','SET_ID' => '2','SORT' => '110','TYPING' => ':D :-D','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_biggrin.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '4','TYPE' => 'S','SET_ID' => '2','SORT' => '115','TYPING' => '8-)','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_cool.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '5','TYPE' => 'S','SET_ID' => '2','SORT' => '120','TYPING' => ':facepalm:','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_facepalm.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '6','TYPE' => 'S','SET_ID' => '2','SORT' => '125','TYPING' => ':{} :-{}','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_kiss.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '7','TYPE' => 'S','SET_ID' => '2','SORT' => '130','TYPING' => ':( :-(','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_sad.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '8','TYPE' => 'S','SET_ID' => '2','SORT' => '135','TYPING' => ':| :-|','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_neutral.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '9','TYPE' => 'S','SET_ID' => '2','SORT' => '140','TYPING' => ':oops:','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_redface.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '10','TYPE' => 'S','SET_ID' => '2','SORT' => '145','TYPING' => ':cry: :~(','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_cry.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '11','TYPE' => 'S','SET_ID' => '2','SORT' => '150','TYPING' => ':evil: >:-<','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_evil.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '12','TYPE' => 'S','SET_ID' => '2','SORT' => '155','TYPING' => ':o :-o :shock:','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_eek.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '13','TYPE' => 'S','SET_ID' => '2','SORT' => '160','TYPING' => ':/ :-/','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_confuse.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '14','TYPE' => 'S','SET_ID' => '2','SORT' => '165','TYPING' => ':idea:','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_idea.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '15','TYPE' => 'S','SET_ID' => '2','SORT' => '170','TYPING' => ':?:','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_question.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '16','TYPE' => 'S','SET_ID' => '2','SORT' => '175','TYPING' => ':!:','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_exclaim.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '17','TYPE' => 'S','SET_ID' => '2','SORT' => '180','TYPING' => ':like:','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_smile_like.png','IMAGE_DEFINITION' => 'UHD','IMAGE_WIDTH' => '20','IMAGE_HEIGHT' => '20'),
  array('ID' => '18','TYPE' => 'I','SET_ID' => '2','SORT' => '175','TYPING' => 'ICON_NOTE','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_icon_1.gif','IMAGE_DEFINITION' => 'SD','IMAGE_WIDTH' => '15','IMAGE_HEIGHT' => '15'),
  array('ID' => '19','TYPE' => 'I','SET_ID' => '2','SORT' => '180','TYPING' => 'ICON_DIRRECTION','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_icon_2.gif','IMAGE_DEFINITION' => 'SD','IMAGE_WIDTH' => '15','IMAGE_HEIGHT' => '15'),
  array('ID' => '20','TYPE' => 'I','SET_ID' => '2','SORT' => '185','TYPING' => 'ICON_IDEA','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_icon_3.gif','IMAGE_DEFINITION' => 'SD','IMAGE_WIDTH' => '15','IMAGE_HEIGHT' => '15'),
  array('ID' => '21','TYPE' => 'I','SET_ID' => '2','SORT' => '190','TYPING' => 'ICON_ATTANSION','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_icon_4.gif','IMAGE_DEFINITION' => 'SD','IMAGE_WIDTH' => '15','IMAGE_HEIGHT' => '15'),
  array('ID' => '22','TYPE' => 'I','SET_ID' => '2','SORT' => '195','TYPING' => 'ICON_QUESTION','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_icon_5.gif','IMAGE_DEFINITION' => 'SD','IMAGE_WIDTH' => '15','IMAGE_HEIGHT' => '15'),
  array('ID' => '23','TYPE' => 'I','SET_ID' => '2','SORT' => '200','TYPING' => 'ICON_BAD','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_icon_6.gif','IMAGE_DEFINITION' => 'SD','IMAGE_WIDTH' => '15','IMAGE_HEIGHT' => '15'),
  array('ID' => '24','TYPE' => 'I','SET_ID' => '2','SORT' => '205','TYPING' => 'ICON_GOOD','CLICKABLE' => 'Y','HIDDEN' => 'N','IMAGE' => 'bx_icon_7.gif','IMAGE_DEFINITION' => 'SD','IMAGE_WIDTH' => '15','IMAGE_HEIGHT' => '15')
);

/* `rimstudio_db`.`b_smile_lang` */
$b_smile_lang = array(
  array('ID' => '1','TYPE' => 'P','SID' => '1','LID' => 'ru','NAME' => 'Стандартная галерея'),
  array('ID' => '2','TYPE' => 'P','SID' => '1','LID' => 'en','NAME' => 'Standard gallery'),
  array('ID' => '3','TYPE' => 'G','SID' => '2','LID' => 'ru','NAME' => 'Основной набор'),
  array('ID' => '4','TYPE' => 'G','SID' => '2','LID' => 'en','NAME' => 'Default pack'),
  array('ID' => '5','TYPE' => 'S','SID' => '1','LID' => 'ru','NAME' => 'С улыбкой'),
  array('ID' => '6','TYPE' => 'S','SID' => '1','LID' => 'en','NAME' => 'Smile'),
  array('ID' => '7','TYPE' => 'S','SID' => '2','LID' => 'ru','NAME' => 'Шутливо'),
  array('ID' => '8','TYPE' => 'S','SID' => '2','LID' => 'en','NAME' => 'Wink'),
  array('ID' => '9','TYPE' => 'S','SID' => '3','LID' => 'ru','NAME' => 'Широкая улыбка'),
  array('ID' => '10','TYPE' => 'S','SID' => '3','LID' => 'en','NAME' => 'Big grin'),
  array('ID' => '11','TYPE' => 'S','SID' => '4','LID' => 'ru','NAME' => 'Здорово'),
  array('ID' => '12','TYPE' => 'S','SID' => '4','LID' => 'en','NAME' => 'Cool'),
  array('ID' => '13','TYPE' => 'S','SID' => '5','LID' => 'ru','NAME' => 'Разочарование'),
  array('ID' => '14','TYPE' => 'S','SID' => '5','LID' => 'en','NAME' => 'Facepalm'),
  array('ID' => '15','TYPE' => 'S','SID' => '6','LID' => 'ru','NAME' => 'Поцелуй'),
  array('ID' => '16','TYPE' => 'S','SID' => '6','LID' => 'en','NAME' => 'Kiss'),
  array('ID' => '17','TYPE' => 'S','SID' => '7','LID' => 'ru','NAME' => 'Печально'),
  array('ID' => '18','TYPE' => 'S','SID' => '7','LID' => 'en','NAME' => 'Sad'),
  array('ID' => '19','TYPE' => 'S','SID' => '8','LID' => 'ru','NAME' => 'Скептически'),
  array('ID' => '20','TYPE' => 'S','SID' => '8','LID' => 'en','NAME' => 'Skeptic'),
  array('ID' => '21','TYPE' => 'S','SID' => '9','LID' => 'ru','NAME' => 'Смущенный'),
  array('ID' => '22','TYPE' => 'S','SID' => '9','LID' => 'en','NAME' => 'Embarrassed'),
  array('ID' => '23','TYPE' => 'S','SID' => '10','LID' => 'ru','NAME' => 'Очень грустно'),
  array('ID' => '24','TYPE' => 'S','SID' => '10','LID' => 'en','NAME' => 'Crying'),
  array('ID' => '25','TYPE' => 'S','SID' => '11','LID' => 'ru','NAME' => 'Со злостью'),
  array('ID' => '26','TYPE' => 'S','SID' => '11','LID' => 'en','NAME' => 'Angry'),
  array('ID' => '27','TYPE' => 'S','SID' => '12','LID' => 'ru','NAME' => 'Удивленно'),
  array('ID' => '28','TYPE' => 'S','SID' => '12','LID' => 'en','NAME' => 'Surprised'),
  array('ID' => '29','TYPE' => 'S','SID' => '13','LID' => 'ru','NAME' => 'Смущенно'),
  array('ID' => '30','TYPE' => 'S','SID' => '13','LID' => 'en','NAME' => 'Confused'),
  array('ID' => '31','TYPE' => 'S','SID' => '14','LID' => 'ru','NAME' => 'Идея'),
  array('ID' => '32','TYPE' => 'S','SID' => '14','LID' => 'en','NAME' => 'Idea'),
  array('ID' => '33','TYPE' => 'S','SID' => '15','LID' => 'ru','NAME' => 'Вопрос'),
  array('ID' => '34','TYPE' => 'S','SID' => '15','LID' => 'en','NAME' => 'Question'),
  array('ID' => '35','TYPE' => 'S','SID' => '16','LID' => 'ru','NAME' => 'Восклицание'),
  array('ID' => '36','TYPE' => 'S','SID' => '16','LID' => 'en','NAME' => 'Exclamation'),
  array('ID' => '37','TYPE' => 'S','SID' => '17','LID' => 'ru','NAME' => 'Нравится'),
  array('ID' => '38','TYPE' => 'S','SID' => '17','LID' => 'en','NAME' => 'Like')
);

/* `rimstudio_db`.`b_smile_set` */
$b_smile_set = array(
  array('ID' => '1','TYPE' => 'P','PARENT_ID' => '0','STRING_ID' => 'bitrix','SORT' => '150'),
  array('ID' => '2','TYPE' => 'G','PARENT_ID' => '1','STRING_ID' => 'bitrix_main','SORT' => '150')
);

/* `rimstudio_db`.`b_sms_template` */
$b_sms_template = array(
  array('ID' => '1','EVENT_NAME' => 'SMS_USER_CONFIRM_NUMBER','ACTIVE' => 'Y','SENDER' => '#DEFAULT_SENDER#','RECEIVER' => '#USER_PHONE#','MESSAGE' => 'Код подтверждения #CODE#','LANGUAGE_ID' => NULL),
  array('ID' => '2','EVENT_NAME' => 'SMS_USER_RESTORE_PASSWORD','ACTIVE' => 'Y','SENDER' => '#DEFAULT_SENDER#','RECEIVER' => '#USER_PHONE#','MESSAGE' => 'Код для восстановления пароля #CODE#','LANGUAGE_ID' => NULL),
  array('ID' => '3','EVENT_NAME' => 'SMS_EVENT_LOG_NOTIFICATION','ACTIVE' => 'Y','SENDER' => '#DEFAULT_SENDER#','RECEIVER' => '#PHONE_NUMBER#','MESSAGE' => '#NAME#: #ADDITIONAL_TEXT# (событий: #EVENT_COUNT#)','LANGUAGE_ID' => NULL)
);

/* `rimstudio_db`.`b_sms_template_site` */
$b_sms_template_site = array(
  array('TEMPLATE_ID' => '1','SITE_ID' => 's1'),
  array('TEMPLATE_ID' => '2','SITE_ID' => 's1'),
  array('TEMPLATE_ID' => '3','SITE_ID' => 's1')
);

/* `rimstudio_db`.`b_sm_version_history` */
$b_sm_version_history = array(
);

/* `rimstudio_db`.`b_socialservices_ap` */
$b_socialservices_ap = array(
);

/* `rimstudio_db`.`b_socialservices_contact` */
$b_socialservices_contact = array(
);

/* `rimstudio_db`.`b_socialservices_contact_connect` */
$b_socialservices_contact_connect = array(
);

/* `rimstudio_db`.`b_socialservices_message` */
$b_socialservices_message = array(
);

/* `rimstudio_db`.`b_socialservices_user` */
$b_socialservices_user = array(
);

/* `rimstudio_db`.`b_socialservices_user_link` */
$b_socialservices_user_link = array(
);

/* `rimstudio_db`.`b_socialservices_zoom_meeting` */
$b_socialservices_zoom_meeting = array(
);

/* `rimstudio_db`.`b_socialservices_zoom_meeting_recording` */
$b_socialservices_zoom_meeting_recording = array(
);

/* `rimstudio_db`.`b_sticker` */
$b_sticker = array(
);

/* `rimstudio_db`.`b_sticker_group_task` */
$b_sticker_group_task = array(
);

/* `rimstudio_db`.`b_subscription` */
$b_subscription = array(
);

/* `rimstudio_db`.`b_subscription_rubric` */
$b_subscription_rubric = array(
);

/* `rimstudio_db`.`b_task` */
$b_task = array(
  array('ID' => '1','NAME' => 'main_denied','LETTER' => 'D','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '2','NAME' => 'main_change_profile','LETTER' => 'P','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '3','NAME' => 'main_view_all_settings','LETTER' => 'R','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '4','NAME' => 'main_view_all_settings_change_profile','LETTER' => 'T','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '5','NAME' => 'main_edit_subordinate_users','LETTER' => 'V','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '6','NAME' => 'main_full_access','LETTER' => 'W','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '7','NAME' => 'fm_folder_access_denied','LETTER' => 'D','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '8','NAME' => 'fm_folder_access_read','LETTER' => 'R','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '9','NAME' => 'fm_folder_access_write','LETTER' => 'W','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '10','NAME' => 'fm_folder_access_full','LETTER' => 'X','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '11','NAME' => 'fm_folder_access_workflow','LETTER' => 'U','MODULE_ID' => 'main','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'file'),
  array('ID' => '12','NAME' => 'bitrixcloud_deny','LETTER' => 'D','MODULE_ID' => 'bitrixcloud','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '13','NAME' => 'bitrixcloud_control','LETTER' => 'W','MODULE_ID' => 'bitrixcloud','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '14','NAME' => 'clouds_denied','LETTER' => 'D','MODULE_ID' => 'clouds','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '15','NAME' => 'clouds_browse','LETTER' => 'F','MODULE_ID' => 'clouds','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '16','NAME' => 'clouds_upload','LETTER' => 'U','MODULE_ID' => 'clouds','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '17','NAME' => 'clouds_full_access','LETTER' => 'W','MODULE_ID' => 'clouds','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '18','NAME' => 'fileman_denied','LETTER' => 'D','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '19','NAME' => 'fileman_allowed_folders','LETTER' => 'F','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '20','NAME' => 'fileman_full_access','LETTER' => 'W','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '21','NAME' => 'medialib_denied','LETTER' => 'D','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '22','NAME' => 'medialib_view','LETTER' => 'F','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '23','NAME' => 'medialib_only_new','LETTER' => 'R','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '24','NAME' => 'medialib_edit_items','LETTER' => 'V','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '25','NAME' => 'medialib_editor','LETTER' => 'W','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '26','NAME' => 'medialib_full','LETTER' => 'X','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'medialib'),
  array('ID' => '27','NAME' => 'stickers_denied','LETTER' => 'D','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'stickers'),
  array('ID' => '28','NAME' => 'stickers_read','LETTER' => 'R','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'stickers'),
  array('ID' => '29','NAME' => 'stickers_edit','LETTER' => 'W','MODULE_ID' => 'fileman','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'stickers'),
  array('ID' => '30','NAME' => 'hblock_denied','LETTER' => 'D','MODULE_ID' => 'highloadblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '31','NAME' => 'hblock_read','LETTER' => 'R','MODULE_ID' => 'highloadblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '32','NAME' => 'hblock_write','LETTER' => 'W','MODULE_ID' => 'highloadblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '33','NAME' => 'iblock_deny','LETTER' => 'D','MODULE_ID' => 'iblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '34','NAME' => 'iblock_read','LETTER' => 'R','MODULE_ID' => 'iblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '35','NAME' => 'iblock_element_add','LETTER' => 'E','MODULE_ID' => 'iblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '36','NAME' => 'iblock_admin_read','LETTER' => 'S','MODULE_ID' => 'iblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '37','NAME' => 'iblock_admin_add','LETTER' => 'T','MODULE_ID' => 'iblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '38','NAME' => 'iblock_limited_edit','LETTER' => 'U','MODULE_ID' => 'iblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '39','NAME' => 'iblock_full_edit','LETTER' => 'W','MODULE_ID' => 'iblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '40','NAME' => 'iblock_full','LETTER' => 'X','MODULE_ID' => 'iblock','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'iblock'),
  array('ID' => '41','NAME' => 'landing_right_denied','LETTER' => 'D','MODULE_ID' => 'landing','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '42','NAME' => 'landing_right_read','LETTER' => 'R','MODULE_ID' => 'landing','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '43','NAME' => 'landing_right_edit','LETTER' => 'U','MODULE_ID' => 'landing','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '44','NAME' => 'landing_right_sett','LETTER' => 'V','MODULE_ID' => 'landing','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '45','NAME' => 'landing_right_public','LETTER' => 'W','MODULE_ID' => 'landing','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '46','NAME' => 'landing_right_delete','LETTER' => 'X','MODULE_ID' => 'landing','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '47','NAME' => 'security_denied','LETTER' => 'D','MODULE_ID' => 'security','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '48','NAME' => 'security_filter','LETTER' => 'F','MODULE_ID' => 'security','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '49','NAME' => 'security_otp','LETTER' => 'S','MODULE_ID' => 'security','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '50','NAME' => 'security_view_all_settings','LETTER' => 'T','MODULE_ID' => 'security','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '51','NAME' => 'security_full_access','LETTER' => 'W','MODULE_ID' => 'security','SYS' => 'Y','DESCRIPTION' => NULL,'BINDING' => 'module'),
  array('ID' => '52','NAME' => 'seo_denied','LETTER' => 'D','MODULE_ID' => 'seo','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '53','NAME' => 'seo_edit','LETTER' => 'F','MODULE_ID' => 'seo','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'module'),
  array('ID' => '54','NAME' => 'seo_full_access','LETTER' => 'W','MODULE_ID' => 'seo','SYS' => 'Y','DESCRIPTION' => '','BINDING' => 'module')
);

/* `rimstudio_db`.`b_task_operation` */
$b_task_operation = array(
  array('TASK_ID' => '2','OPERATION_ID' => '2'),
  array('TASK_ID' => '2','OPERATION_ID' => '3'),
  array('TASK_ID' => '3','OPERATION_ID' => '2'),
  array('TASK_ID' => '3','OPERATION_ID' => '4'),
  array('TASK_ID' => '3','OPERATION_ID' => '5'),
  array('TASK_ID' => '3','OPERATION_ID' => '6'),
  array('TASK_ID' => '3','OPERATION_ID' => '7'),
  array('TASK_ID' => '4','OPERATION_ID' => '2'),
  array('TASK_ID' => '4','OPERATION_ID' => '3'),
  array('TASK_ID' => '4','OPERATION_ID' => '4'),
  array('TASK_ID' => '4','OPERATION_ID' => '5'),
  array('TASK_ID' => '4','OPERATION_ID' => '6'),
  array('TASK_ID' => '4','OPERATION_ID' => '7'),
  array('TASK_ID' => '5','OPERATION_ID' => '2'),
  array('TASK_ID' => '5','OPERATION_ID' => '3'),
  array('TASK_ID' => '5','OPERATION_ID' => '5'),
  array('TASK_ID' => '5','OPERATION_ID' => '6'),
  array('TASK_ID' => '5','OPERATION_ID' => '7'),
  array('TASK_ID' => '5','OPERATION_ID' => '8'),
  array('TASK_ID' => '5','OPERATION_ID' => '9'),
  array('TASK_ID' => '6','OPERATION_ID' => '2'),
  array('TASK_ID' => '6','OPERATION_ID' => '3'),
  array('TASK_ID' => '6','OPERATION_ID' => '4'),
  array('TASK_ID' => '6','OPERATION_ID' => '5'),
  array('TASK_ID' => '6','OPERATION_ID' => '6'),
  array('TASK_ID' => '6','OPERATION_ID' => '7'),
  array('TASK_ID' => '6','OPERATION_ID' => '10'),
  array('TASK_ID' => '6','OPERATION_ID' => '11'),
  array('TASK_ID' => '6','OPERATION_ID' => '12'),
  array('TASK_ID' => '6','OPERATION_ID' => '13'),
  array('TASK_ID' => '6','OPERATION_ID' => '14'),
  array('TASK_ID' => '6','OPERATION_ID' => '15'),
  array('TASK_ID' => '6','OPERATION_ID' => '16'),
  array('TASK_ID' => '6','OPERATION_ID' => '17'),
  array('TASK_ID' => '6','OPERATION_ID' => '18'),
  array('TASK_ID' => '8','OPERATION_ID' => '19'),
  array('TASK_ID' => '8','OPERATION_ID' => '20'),
  array('TASK_ID' => '8','OPERATION_ID' => '21'),
  array('TASK_ID' => '9','OPERATION_ID' => '19'),
  array('TASK_ID' => '9','OPERATION_ID' => '20'),
  array('TASK_ID' => '9','OPERATION_ID' => '21'),
  array('TASK_ID' => '9','OPERATION_ID' => '22'),
  array('TASK_ID' => '9','OPERATION_ID' => '23'),
  array('TASK_ID' => '9','OPERATION_ID' => '24'),
  array('TASK_ID' => '9','OPERATION_ID' => '25'),
  array('TASK_ID' => '9','OPERATION_ID' => '26'),
  array('TASK_ID' => '9','OPERATION_ID' => '27'),
  array('TASK_ID' => '9','OPERATION_ID' => '28'),
  array('TASK_ID' => '9','OPERATION_ID' => '29'),
  array('TASK_ID' => '9','OPERATION_ID' => '30'),
  array('TASK_ID' => '9','OPERATION_ID' => '31'),
  array('TASK_ID' => '9','OPERATION_ID' => '32'),
  array('TASK_ID' => '9','OPERATION_ID' => '33'),
  array('TASK_ID' => '9','OPERATION_ID' => '34'),
  array('TASK_ID' => '10','OPERATION_ID' => '19'),
  array('TASK_ID' => '10','OPERATION_ID' => '20'),
  array('TASK_ID' => '10','OPERATION_ID' => '21'),
  array('TASK_ID' => '10','OPERATION_ID' => '22'),
  array('TASK_ID' => '10','OPERATION_ID' => '23'),
  array('TASK_ID' => '10','OPERATION_ID' => '24'),
  array('TASK_ID' => '10','OPERATION_ID' => '25'),
  array('TASK_ID' => '10','OPERATION_ID' => '26'),
  array('TASK_ID' => '10','OPERATION_ID' => '27'),
  array('TASK_ID' => '10','OPERATION_ID' => '28'),
  array('TASK_ID' => '10','OPERATION_ID' => '29'),
  array('TASK_ID' => '10','OPERATION_ID' => '30'),
  array('TASK_ID' => '10','OPERATION_ID' => '31'),
  array('TASK_ID' => '10','OPERATION_ID' => '32'),
  array('TASK_ID' => '10','OPERATION_ID' => '33'),
  array('TASK_ID' => '10','OPERATION_ID' => '34'),
  array('TASK_ID' => '10','OPERATION_ID' => '35'),
  array('TASK_ID' => '11','OPERATION_ID' => '19'),
  array('TASK_ID' => '11','OPERATION_ID' => '20'),
  array('TASK_ID' => '11','OPERATION_ID' => '21'),
  array('TASK_ID' => '11','OPERATION_ID' => '24'),
  array('TASK_ID' => '11','OPERATION_ID' => '28'),
  array('TASK_ID' => '13','OPERATION_ID' => '36'),
  array('TASK_ID' => '13','OPERATION_ID' => '37'),
  array('TASK_ID' => '15','OPERATION_ID' => '39'),
  array('TASK_ID' => '16','OPERATION_ID' => '39'),
  array('TASK_ID' => '16','OPERATION_ID' => '40'),
  array('TASK_ID' => '17','OPERATION_ID' => '39'),
  array('TASK_ID' => '17','OPERATION_ID' => '40'),
  array('TASK_ID' => '17','OPERATION_ID' => '41'),
  array('TASK_ID' => '19','OPERATION_ID' => '44'),
  array('TASK_ID' => '19','OPERATION_ID' => '45'),
  array('TASK_ID' => '19','OPERATION_ID' => '46'),
  array('TASK_ID' => '19','OPERATION_ID' => '47'),
  array('TASK_ID' => '19','OPERATION_ID' => '48'),
  array('TASK_ID' => '19','OPERATION_ID' => '49'),
  array('TASK_ID' => '19','OPERATION_ID' => '50'),
  array('TASK_ID' => '19','OPERATION_ID' => '52'),
  array('TASK_ID' => '19','OPERATION_ID' => '53'),
  array('TASK_ID' => '20','OPERATION_ID' => '42'),
  array('TASK_ID' => '20','OPERATION_ID' => '43'),
  array('TASK_ID' => '20','OPERATION_ID' => '44'),
  array('TASK_ID' => '20','OPERATION_ID' => '45'),
  array('TASK_ID' => '20','OPERATION_ID' => '46'),
  array('TASK_ID' => '20','OPERATION_ID' => '47'),
  array('TASK_ID' => '20','OPERATION_ID' => '48'),
  array('TASK_ID' => '20','OPERATION_ID' => '49'),
  array('TASK_ID' => '20','OPERATION_ID' => '50'),
  array('TASK_ID' => '20','OPERATION_ID' => '51'),
  array('TASK_ID' => '20','OPERATION_ID' => '52'),
  array('TASK_ID' => '20','OPERATION_ID' => '53'),
  array('TASK_ID' => '20','OPERATION_ID' => '54'),
  array('TASK_ID' => '22','OPERATION_ID' => '55'),
  array('TASK_ID' => '23','OPERATION_ID' => '55'),
  array('TASK_ID' => '23','OPERATION_ID' => '56'),
  array('TASK_ID' => '23','OPERATION_ID' => '60'),
  array('TASK_ID' => '24','OPERATION_ID' => '55'),
  array('TASK_ID' => '24','OPERATION_ID' => '60'),
  array('TASK_ID' => '24','OPERATION_ID' => '61'),
  array('TASK_ID' => '24','OPERATION_ID' => '62'),
  array('TASK_ID' => '25','OPERATION_ID' => '55'),
  array('TASK_ID' => '25','OPERATION_ID' => '56'),
  array('TASK_ID' => '25','OPERATION_ID' => '57'),
  array('TASK_ID' => '25','OPERATION_ID' => '58'),
  array('TASK_ID' => '25','OPERATION_ID' => '60'),
  array('TASK_ID' => '25','OPERATION_ID' => '61'),
  array('TASK_ID' => '25','OPERATION_ID' => '62'),
  array('TASK_ID' => '26','OPERATION_ID' => '55'),
  array('TASK_ID' => '26','OPERATION_ID' => '56'),
  array('TASK_ID' => '26','OPERATION_ID' => '57'),
  array('TASK_ID' => '26','OPERATION_ID' => '58'),
  array('TASK_ID' => '26','OPERATION_ID' => '59'),
  array('TASK_ID' => '26','OPERATION_ID' => '60'),
  array('TASK_ID' => '26','OPERATION_ID' => '61'),
  array('TASK_ID' => '26','OPERATION_ID' => '62'),
  array('TASK_ID' => '28','OPERATION_ID' => '63'),
  array('TASK_ID' => '29','OPERATION_ID' => '63'),
  array('TASK_ID' => '29','OPERATION_ID' => '64'),
  array('TASK_ID' => '29','OPERATION_ID' => '65'),
  array('TASK_ID' => '29','OPERATION_ID' => '66'),
  array('TASK_ID' => '31','OPERATION_ID' => '67'),
  array('TASK_ID' => '32','OPERATION_ID' => '68'),
  array('TASK_ID' => '32','OPERATION_ID' => '69'),
  array('TASK_ID' => '34','OPERATION_ID' => '70'),
  array('TASK_ID' => '34','OPERATION_ID' => '71'),
  array('TASK_ID' => '35','OPERATION_ID' => '72'),
  array('TASK_ID' => '36','OPERATION_ID' => '70'),
  array('TASK_ID' => '36','OPERATION_ID' => '71'),
  array('TASK_ID' => '36','OPERATION_ID' => '73'),
  array('TASK_ID' => '37','OPERATION_ID' => '70'),
  array('TASK_ID' => '37','OPERATION_ID' => '71'),
  array('TASK_ID' => '37','OPERATION_ID' => '72'),
  array('TASK_ID' => '37','OPERATION_ID' => '73'),
  array('TASK_ID' => '38','OPERATION_ID' => '70'),
  array('TASK_ID' => '38','OPERATION_ID' => '71'),
  array('TASK_ID' => '38','OPERATION_ID' => '72'),
  array('TASK_ID' => '38','OPERATION_ID' => '73'),
  array('TASK_ID' => '38','OPERATION_ID' => '74'),
  array('TASK_ID' => '38','OPERATION_ID' => '75'),
  array('TASK_ID' => '38','OPERATION_ID' => '76'),
  array('TASK_ID' => '38','OPERATION_ID' => '77'),
  array('TASK_ID' => '39','OPERATION_ID' => '70'),
  array('TASK_ID' => '39','OPERATION_ID' => '71'),
  array('TASK_ID' => '39','OPERATION_ID' => '72'),
  array('TASK_ID' => '39','OPERATION_ID' => '73'),
  array('TASK_ID' => '39','OPERATION_ID' => '74'),
  array('TASK_ID' => '39','OPERATION_ID' => '75'),
  array('TASK_ID' => '39','OPERATION_ID' => '76'),
  array('TASK_ID' => '39','OPERATION_ID' => '77'),
  array('TASK_ID' => '39','OPERATION_ID' => '78'),
  array('TASK_ID' => '39','OPERATION_ID' => '79'),
  array('TASK_ID' => '39','OPERATION_ID' => '80'),
  array('TASK_ID' => '39','OPERATION_ID' => '81'),
  array('TASK_ID' => '40','OPERATION_ID' => '70'),
  array('TASK_ID' => '40','OPERATION_ID' => '71'),
  array('TASK_ID' => '40','OPERATION_ID' => '72'),
  array('TASK_ID' => '40','OPERATION_ID' => '73'),
  array('TASK_ID' => '40','OPERATION_ID' => '74'),
  array('TASK_ID' => '40','OPERATION_ID' => '75'),
  array('TASK_ID' => '40','OPERATION_ID' => '76'),
  array('TASK_ID' => '40','OPERATION_ID' => '77'),
  array('TASK_ID' => '40','OPERATION_ID' => '78'),
  array('TASK_ID' => '40','OPERATION_ID' => '79'),
  array('TASK_ID' => '40','OPERATION_ID' => '80'),
  array('TASK_ID' => '40','OPERATION_ID' => '81'),
  array('TASK_ID' => '40','OPERATION_ID' => '82'),
  array('TASK_ID' => '40','OPERATION_ID' => '83'),
  array('TASK_ID' => '40','OPERATION_ID' => '84'),
  array('TASK_ID' => '40','OPERATION_ID' => '85'),
  array('TASK_ID' => '40','OPERATION_ID' => '86'),
  array('TASK_ID' => '40','OPERATION_ID' => '87'),
  array('TASK_ID' => '42','OPERATION_ID' => '88'),
  array('TASK_ID' => '43','OPERATION_ID' => '89'),
  array('TASK_ID' => '44','OPERATION_ID' => '90'),
  array('TASK_ID' => '45','OPERATION_ID' => '91'),
  array('TASK_ID' => '46','OPERATION_ID' => '92'),
  array('TASK_ID' => '48','OPERATION_ID' => '93'),
  array('TASK_ID' => '49','OPERATION_ID' => '94'),
  array('TASK_ID' => '50','OPERATION_ID' => '95'),
  array('TASK_ID' => '50','OPERATION_ID' => '96'),
  array('TASK_ID' => '50','OPERATION_ID' => '97'),
  array('TASK_ID' => '50','OPERATION_ID' => '98'),
  array('TASK_ID' => '50','OPERATION_ID' => '99'),
  array('TASK_ID' => '50','OPERATION_ID' => '100'),
  array('TASK_ID' => '50','OPERATION_ID' => '101'),
  array('TASK_ID' => '50','OPERATION_ID' => '102'),
  array('TASK_ID' => '50','OPERATION_ID' => '103'),
  array('TASK_ID' => '50','OPERATION_ID' => '104'),
  array('TASK_ID' => '50','OPERATION_ID' => '105'),
  array('TASK_ID' => '51','OPERATION_ID' => '93'),
  array('TASK_ID' => '51','OPERATION_ID' => '94'),
  array('TASK_ID' => '51','OPERATION_ID' => '95'),
  array('TASK_ID' => '51','OPERATION_ID' => '96'),
  array('TASK_ID' => '51','OPERATION_ID' => '97'),
  array('TASK_ID' => '51','OPERATION_ID' => '98'),
  array('TASK_ID' => '51','OPERATION_ID' => '99'),
  array('TASK_ID' => '51','OPERATION_ID' => '100'),
  array('TASK_ID' => '51','OPERATION_ID' => '101'),
  array('TASK_ID' => '51','OPERATION_ID' => '102'),
  array('TASK_ID' => '51','OPERATION_ID' => '103'),
  array('TASK_ID' => '51','OPERATION_ID' => '104'),
  array('TASK_ID' => '51','OPERATION_ID' => '105'),
  array('TASK_ID' => '51','OPERATION_ID' => '106'),
  array('TASK_ID' => '51','OPERATION_ID' => '107'),
  array('TASK_ID' => '51','OPERATION_ID' => '108'),
  array('TASK_ID' => '51','OPERATION_ID' => '109'),
  array('TASK_ID' => '51','OPERATION_ID' => '110'),
  array('TASK_ID' => '51','OPERATION_ID' => '111'),
  array('TASK_ID' => '51','OPERATION_ID' => '112'),
  array('TASK_ID' => '51','OPERATION_ID' => '113'),
  array('TASK_ID' => '51','OPERATION_ID' => '114'),
  array('TASK_ID' => '51','OPERATION_ID' => '115'),
  array('TASK_ID' => '51','OPERATION_ID' => '116'),
  array('TASK_ID' => '51','OPERATION_ID' => '117'),
  array('TASK_ID' => '51','OPERATION_ID' => '118'),
  array('TASK_ID' => '53','OPERATION_ID' => '120'),
  array('TASK_ID' => '54','OPERATION_ID' => '119'),
  array('TASK_ID' => '54','OPERATION_ID' => '120')
);

/* `rimstudio_db`.`b_translate_diff` */
$b_translate_diff = array(
);

/* `rimstudio_db`.`b_translate_file` */
$b_translate_file = array(
);

/* `rimstudio_db`.`b_translate_path` */
$b_translate_path = array(
);

/* `rimstudio_db`.`b_translate_path_lang` */
$b_translate_path_lang = array(
);

/* `rimstudio_db`.`b_translate_path_tree` */
$b_translate_path_tree = array(
);

/* `rimstudio_db`.`b_translate_phrase` */
$b_translate_phrase = array(
);

/* `rimstudio_db`.`b_ui_avatar_mask_access` */
$b_ui_avatar_mask_access = array(
);

/* `rimstudio_db`.`b_ui_avatar_mask_file_deleted` */
$b_ui_avatar_mask_file_deleted = array(
);

/* `rimstudio_db`.`b_ui_avatar_mask_group` */
$b_ui_avatar_mask_group = array(
);

/* `rimstudio_db`.`b_ui_avatar_mask_item` */
$b_ui_avatar_mask_item = array(
);

/* `rimstudio_db`.`b_ui_avatar_mask_item_applied_to` */
$b_ui_avatar_mask_item_applied_to = array(
);

/* `rimstudio_db`.`b_ui_avatar_mask_recently_used` */
$b_ui_avatar_mask_recently_used = array(
);

/* `rimstudio_db`.`b_ui_entity_editor_config` */
$b_ui_entity_editor_config = array(
);

/* `rimstudio_db`.`b_ui_entity_editor_config_ac` */
$b_ui_entity_editor_config_ac = array(
);

/* `rimstudio_db`.`b_ui_file_uploader_temp_file` */
$b_ui_file_uploader_temp_file = array(
);

/* `rimstudio_db`.`b_undo` */
$b_undo = array(
  array('ID' => '109659246a24ad0e20ccbc266d50f240a','MODULE_ID' => 'fileman','UNDO_TYPE' => 'edit_file','UNDO_HANDLER' => 'CFileman::UndoEditFile','CONTENT' => 'a:2:{s:7:"absPath";s:30:"W:/domains/rimstudio/index.php";s:7:"content";s:1806:"<?
require($_SERVER[\'DOCUMENT_ROOT\'].\'/bitrix/header.php\');
$APPLICATION->SetTitle("Главная");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"portfolio_list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "999",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("work_descriptions","work_examples",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><?
require($_SERVER[\'DOCUMENT_ROOT\'].\'/bitrix/footer.php\');
?>";}','USER_ID' => '1','TIMESTAMP_X' => '1676897740'),
  array('ID' => '1dcae3bf226e70da677c3457709453841','MODULE_ID' => 'fileman','UNDO_TYPE' => 'edit_file','UNDO_HANDLER' => 'CFileman::UndoEditFile','CONTENT' => 'a:2:{s:7:"absPath";s:30:"W:/domains/rimstudio/index.php";s:7:"content";s:1806:"<?
require($_SERVER[\'DOCUMENT_ROOT\'].\'/bitrix/header.php\');
$APPLICATION->SetTitle("Главная");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"portfolio_list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "999",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("work_descriptions","work_examples",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><?
require($_SERVER[\'DOCUMENT_ROOT\'].\'/bitrix/footer.php\');
?>";}','USER_ID' => '1','TIMESTAMP_X' => '1676902998')
);

/* `rimstudio_db`.`b_urlpreview_metadata` */
$b_urlpreview_metadata = array(
);

/* `rimstudio_db`.`b_urlpreview_route` */
$b_urlpreview_route = array(
  array('ID' => '1','ROUTE' => '/knowledge/#knowledgeCode#/','MODULE' => 'landing','CLASS' => '\\Bitrix\\Landing\\Landing\\UrlPreview','PARAMETERS' => 'a:3:{s:13:"knowledgeCode";s:14:"$knowledgeCode";s:5:"scope";s:9:"knowledge";s:12:"allowSlashes";s:1:"N";}'),
  array('ID' => '2','ROUTE' => '/knowledge/group/#knowledgeCode#/','MODULE' => 'landing','CLASS' => '\\Bitrix\\Landing\\Landing\\UrlPreview','PARAMETERS' => 'a:3:{s:13:"knowledgeCode";s:14:"$knowledgeCode";s:5:"scope";s:5:"group";s:12:"allowSlashes";s:1:"N";}')
);

/* `rimstudio_db`.`b_user` */
$b_user = array(
  array('ID' => '1','TIMESTAMP_X' => NULL,'LOGIN' => 'admin','PASSWORD' => '$6$EHEA5iQ3EdYiQm0R$kaSRGUM9O87wj2u.0AnytGb63LPc42JRIbNsaIo5rumlioqkg9wv5hQJP1.El.HQBYG8Y7j5fgP5IdooKzaoJ0','CHECKWORD' => '$6$YLQZe6Y4X37lRg50$UqC7Z057z6Jjg9duKO9sR2ozloIoNrbEIkeBGgp3AxJjyNnXVHRFmRRDdwXx4CaRKK6O.FVlSlXvDqs1JySHV.','ACTIVE' => 'Y','NAME' => 'Данила','LAST_NAME' => 'Скориков','EMAIL' => 'skorikovdanila@mail.ru','LAST_LOGIN' => '2023-02-20 15:46:15','DATE_REGISTER' => '2023-02-16 15:28:15','LID' => NULL,'PERSONAL_PROFESSION' => NULL,'PERSONAL_WWW' => NULL,'PERSONAL_ICQ' => NULL,'PERSONAL_GENDER' => '','PERSONAL_BIRTHDATE' => NULL,'PERSONAL_PHOTO' => NULL,'PERSONAL_PHONE' => NULL,'PERSONAL_FAX' => NULL,'PERSONAL_MOBILE' => NULL,'PERSONAL_PAGER' => NULL,'PERSONAL_STREET' => NULL,'PERSONAL_MAILBOX' => NULL,'PERSONAL_CITY' => NULL,'PERSONAL_STATE' => NULL,'PERSONAL_ZIP' => NULL,'PERSONAL_COUNTRY' => NULL,'PERSONAL_NOTES' => NULL,'WORK_COMPANY' => NULL,'WORK_DEPARTMENT' => NULL,'WORK_POSITION' => NULL,'WORK_WWW' => NULL,'WORK_PHONE' => NULL,'WORK_FAX' => NULL,'WORK_PAGER' => NULL,'WORK_STREET' => NULL,'WORK_MAILBOX' => NULL,'WORK_CITY' => NULL,'WORK_STATE' => NULL,'WORK_ZIP' => NULL,'WORK_COUNTRY' => NULL,'WORK_PROFILE' => NULL,'WORK_LOGO' => NULL,'WORK_NOTES' => NULL,'ADMIN_NOTES' => NULL,'STORED_HASH' => NULL,'XML_ID' => NULL,'PERSONAL_BIRTHDAY' => NULL,'EXTERNAL_AUTH_ID' => NULL,'CHECKWORD_TIME' => '2023-02-16 15:28:15','SECOND_NAME' => NULL,'CONFIRM_CODE' => NULL,'LOGIN_ATTEMPTS' => '0','LAST_ACTIVITY_DATE' => NULL,'AUTO_TIME_ZONE' => NULL,'TIME_ZONE' => NULL,'TIME_ZONE_OFFSET' => NULL,'TITLE' => NULL,'BX_USER_ID' => 'eca384e397570b9cdf283e4c55b216a0','LANGUAGE_ID' => NULL,'BLOCKED' => 'N','PASSWORD_EXPIRED' => 'N')
);

/* `rimstudio_db`.`b_user_access` */
$b_user_access = array(
  array('ID' => '1','USER_ID' => '0','PROVIDER_ID' => 'group','ACCESS_CODE' => 'G2'),
  array('ID' => '2','USER_ID' => '1','PROVIDER_ID' => 'group','ACCESS_CODE' => 'G1'),
  array('ID' => '3','USER_ID' => '1','PROVIDER_ID' => 'group','ACCESS_CODE' => 'G3'),
  array('ID' => '4','USER_ID' => '1','PROVIDER_ID' => 'group','ACCESS_CODE' => 'G4'),
  array('ID' => '5','USER_ID' => '1','PROVIDER_ID' => 'group','ACCESS_CODE' => 'G2'),
  array('ID' => '9','USER_ID' => '1','PROVIDER_ID' => 'user','ACCESS_CODE' => 'U1')
);

/* `rimstudio_db`.`b_user_access_check` */
$b_user_access_check = array(
);

/* `rimstudio_db`.`b_user_auth_action` */
$b_user_auth_action = array(
);

/* `rimstudio_db`.`b_user_auth_code` */
$b_user_auth_code = array(
);

/* `rimstudio_db`.`b_user_counter` */
$b_user_counter = array(
);

/* `rimstudio_db`.`b_user_device` */
$b_user_device = array(
);

/* `rimstudio_db`.`b_user_device_login` */
$b_user_device_login = array(
);

/* `rimstudio_db`.`b_user_digest` */
$b_user_digest = array(
);

/* `rimstudio_db`.`b_user_field` */
$b_user_field = array(
  array('ID' => '1','ENTITY_ID' => 'BLOG_POST','FIELD_NAME' => 'UF_BLOG_POST_DOC','USER_TYPE_ID' => 'file','XML_ID' => 'UF_BLOG_POST_DOC','SORT' => '100','MULTIPLE' => 'Y','MANDATORY' => 'N','SHOW_FILTER' => 'N','SHOW_IN_LIST' => 'N','EDIT_IN_LIST' => 'Y','IS_SEARCHABLE' => 'Y','SETTINGS' => 'a:0:{}'),
  array('ID' => '2','ENTITY_ID' => 'BLOG_COMMENT','FIELD_NAME' => 'UF_BLOG_COMMENT_DOC','USER_TYPE_ID' => 'file','XML_ID' => 'UF_BLOG_COMMENT_DOC','SORT' => '100','MULTIPLE' => 'Y','MANDATORY' => 'N','SHOW_FILTER' => 'N','SHOW_IN_LIST' => 'N','EDIT_IN_LIST' => 'Y','IS_SEARCHABLE' => 'Y','SETTINGS' => 'a:0:{}'),
  array('ID' => '3','ENTITY_ID' => 'BLOG_POST','FIELD_NAME' => 'UF_BLOG_POST_URL_PRV','USER_TYPE_ID' => 'url_preview','XML_ID' => 'UF_BLOG_POST_URL_PRV','SORT' => '100','MULTIPLE' => 'N','MANDATORY' => 'N','SHOW_FILTER' => 'N','SHOW_IN_LIST' => 'N','EDIT_IN_LIST' => 'Y','IS_SEARCHABLE' => 'Y','SETTINGS' => 'a:0:{}'),
  array('ID' => '4','ENTITY_ID' => 'BLOG_COMMENT','FIELD_NAME' => 'UF_BLOG_COMM_URL_PRV','USER_TYPE_ID' => 'url_preview','XML_ID' => 'UF_BLOG_COMM_URL_PRV','SORT' => '100','MULTIPLE' => 'N','MANDATORY' => 'N','SHOW_FILTER' => 'N','SHOW_IN_LIST' => 'N','EDIT_IN_LIST' => 'Y','IS_SEARCHABLE' => 'Y','SETTINGS' => 'a:0:{}'),
  array('ID' => '5','ENTITY_ID' => 'BLOG_POST','FIELD_NAME' => 'UF_GRATITUDE','USER_TYPE_ID' => 'integer','XML_ID' => 'UF_GRATITUDE','SORT' => '100','MULTIPLE' => 'N','MANDATORY' => 'N','SHOW_FILTER' => 'N','SHOW_IN_LIST' => 'N','EDIT_IN_LIST' => 'Y','IS_SEARCHABLE' => 'N','SETTINGS' => 'a:0:{}'),
  array('ID' => '6','ENTITY_ID' => 'FORUM_MESSAGE','FIELD_NAME' => 'UF_FORUM_MES_URL_PRV','USER_TYPE_ID' => 'url_preview','XML_ID' => 'UF_FORUM_MES_URL_PRV','SORT' => '100','MULTIPLE' => 'N','MANDATORY' => 'N','SHOW_FILTER' => 'N','SHOW_IN_LIST' => 'N','EDIT_IN_LIST' => 'Y','IS_SEARCHABLE' => 'N','SETTINGS' => 'a:0:{}'),
  array('ID' => '7','ENTITY_ID' => 'FORUM_MESSAGE','FIELD_NAME' => 'UF_TASK_COMMENT_TYPE','USER_TYPE_ID' => 'integer','XML_ID' => 'UF_TASK_COMMENT_TYPE','SORT' => '100','MULTIPLE' => 'N','MANDATORY' => 'N','SHOW_FILTER' => 'N','SHOW_IN_LIST' => 'N','EDIT_IN_LIST' => 'Y','IS_SEARCHABLE' => 'N','SETTINGS' => 'a:0:{}')
);

/* `rimstudio_db`.`b_user_field_confirm` */
$b_user_field_confirm = array(
);

/* `rimstudio_db`.`b_user_field_enum` */
$b_user_field_enum = array(
);

/* `rimstudio_db`.`b_user_field_lang` */
$b_user_field_lang = array(
);

/* `rimstudio_db`.`b_user_field_permission` */
$b_user_field_permission = array(
);

/* `rimstudio_db`.`b_user_group` */
$b_user_group = array(
  array('USER_ID' => '1','GROUP_ID' => '1','DATE_ACTIVE_FROM' => NULL,'DATE_ACTIVE_TO' => NULL),
  array('USER_ID' => '1','GROUP_ID' => '3','DATE_ACTIVE_FROM' => NULL,'DATE_ACTIVE_TO' => NULL),
  array('USER_ID' => '1','GROUP_ID' => '4','DATE_ACTIVE_FROM' => NULL,'DATE_ACTIVE_TO' => NULL)
);

/* `rimstudio_db`.`b_user_hit_auth` */
$b_user_hit_auth = array(
);

/* `rimstudio_db`.`b_user_index` */
$b_user_index = array(
  array('USER_ID' => '1','SEARCH_USER_CONTENT' => '001 Данила Скориков ','SEARCH_DEPARTMENT_CONTENT' => '','SEARCH_ADMIN_CONTENT' => '001 Данила Скориков fxbevxbiqnavyn znvy fxbevxbiqnavyn@znvy.eh nqzva','NAME' => 'Данила','LAST_NAME' => 'Скориков','SECOND_NAME' => '','WORK_POSITION' => '','UF_DEPARTMENT_NAME' => '')
);

/* `rimstudio_db`.`b_user_option` */
$b_user_option = array(
  array('ID' => '1','USER_ID' => '0','CATEGORY' => 'intranet','NAME' => '~gadgets_admin_index','VALUE' => 'a:1:{i:0;a:1:{s:7:"GADGETS";a:8:{s:20:"ADMIN_INFO@333333333";a:3:{s:6:"COLUMN";i:0;s:3:"ROW";i:0;s:4:"HIDE";s:1:"N";}s:19:"HTML_AREA@444444444";a:5:{s:6:"COLUMN";i:0;s:3:"ROW";i:1;s:4:"HIDE";s:1:"N";s:8:"USERDATA";a:1:{s:7:"content";s:797:"<table class="bx-gadgets-info-site-table" cellspacing="0"><tr>	<td class="bx-gadget-gray">Создатель сайта:</td>	<td>Группа компаний &laquo;1С-Битрикс&raquo;.</td>	<td class="bx-gadgets-info-site-logo" rowspan="5"><img src="/bitrix/components/bitrix/desktop/templates/admin/images/site_logo.png"></td></tr><tr>	<td class="bx-gadget-gray">Адрес сайта:</td>	<td><a href="http://www.1c-bitrix.ru">www.1c-bitrix.ru</a></td></tr><tr>	<td class="bx-gadget-gray">Сайт сдан:</td>	<td>12 декабря 2010 г.</td></tr><tr>	<td class="bx-gadget-gray">Ответственное лицо:</td>	<td>Иван Иванов</td></tr><tr>	<td class="bx-gadget-gray">E-mail:</td>	<td><a href="mailto:info@1c-bitrix.ru">info@1c-bitrix.ru</a></td></tr></table>";}s:8:"SETTINGS";a:1:{s:9:"TITLE_STD";s:34:"Информация о сайте";}}s:25:"ADMIN_CHECKLIST@777888999";a:3:{s:6:"COLUMN";i:0;s:3:"ROW";i:2;s:4:"HIDE";s:1:"N";}s:19:"RSSREADER@777777777";a:4:{s:6:"COLUMN";i:1;s:3:"ROW";i:3;s:4:"HIDE";s:1:"N";s:8:"SETTINGS";a:3:{s:9:"TITLE_STD";s:33:"Новости 1С-Битрикс";s:3:"CNT";i:10;s:7:"RSS_URL";s:45:"https://www.1c-bitrix.ru/about/life/news/rss/";}}s:24:"ADMIN_SECURITY@555555555";a:3:{s:6:"COLUMN";i:1;s:3:"ROW";i:0;s:4:"HIDE";s:1:"N";}s:25:"ADMIN_SITESPEED@666666777";a:3:{s:6:"COLUMN";i:1;s:3:"ROW";i:1;s:4:"HIDE";s:1:"N";}s:23:"ADMIN_PERFMON@666666666";a:3:{s:6:"COLUMN";i:1;s:3:"ROW";i:2;s:4:"HIDE";s:1:"N";}s:23:"ADMIN_MARKETPALCE@22549";a:3:{s:6:"COLUMN";i:1;s:3:"ROW";i:3;s:4:"HIDE";s:1:"N";}}}}','COMMON' => 'Y'),
  array('ID' => '2','USER_ID' => '1','CATEGORY' => 'admin_panel','NAME' => 'settings','VALUE' => 'a:2:{s:4:"edit";s:3:"off";s:9:"collapsed";s:3:"off";}','COMMON' => 'N'),
  array('ID' => '3','USER_ID' => '1','CATEGORY' => 'hot_keys','NAME' => 'user_defined','VALUE' => 'b:1;','COMMON' => 'N'),
  array('ID' => '4','USER_ID' => '1','CATEGORY' => 'favorite','NAME' => 'favorite_menu','VALUE' => 'a:1:{s:5:"stick";s:1:"N";}','COMMON' => 'N'),
  array('ID' => '5','USER_ID' => '1','CATEGORY' => 'socialservices','NAME' => 'networkPopup','VALUE' => 'a:1:{s:9:"showcount";s:2:"11";}','COMMON' => 'N'),
  array('ID' => '8','USER_ID' => '1','CATEGORY' => 'admin_menu','NAME' => 'pos','VALUE' => 'a:1:{s:8:"sections";s:117:"menu_landing,menu_iblock,menu_iblock_/Content,menu_iblock_%2FContent%2F1,iblock_admin,menu_system,menu_site,menu_util";}','COMMON' => 'N'),
  array('ID' => '28','USER_ID' => '1','CATEGORY' => 'html_editor','NAME' => 'user_settings_','VALUE' => 'a:3:{s:13:"taskbar_shown";s:1:"1";s:4:"view";s:4:"code";s:14:"split_vertical";s:1:"0";}','COMMON' => 'N'),
  array('ID' => '35','USER_ID' => '1','CATEGORY' => 'main.interface.grid','NAME' => 'tbl_iblock_admin_f15c1cae7882448b3fb0404682e17e61','VALUE' => 'a:3:{s:5:"views";a:1:{s:7:"default";a:3:{s:7:"columns";s:0:"";s:13:"columns_sizes";a:2:{s:6:"expand";i:1;s:7:"columns";a:0:{}}s:15:"sticked_columns";a:0:{}}}s:7:"filters";a:0:{}s:12:"current_view";s:7:"default";}','COMMON' => 'N'),
  array('ID' => '36','USER_ID' => '1','CATEGORY' => 'main.interface.grid','NAME' => 'tbl_iblock_f15c1cae7882448b3fb0404682e17e61','VALUE' => 'a:3:{s:5:"views";a:1:{s:7:"default";a:3:{s:7:"columns";s:0:"";s:13:"columns_sizes";a:2:{s:6:"expand";i:1;s:7:"columns";a:0:{}}s:15:"sticked_columns";a:0:{}}}s:7:"filters";a:0:{}s:12:"current_view";s:7:"default";}','COMMON' => 'N'),
  array('ID' => '37','USER_ID' => '1','CATEGORY' => 'main.interface.grid','NAME' => 'tbl_iblock_section_ba2fa0d3403306687fc8509765221781','VALUE' => 'a:3:{s:5:"views";a:1:{s:7:"default";a:3:{s:7:"columns";s:0:"";s:13:"columns_sizes";a:2:{s:6:"expand";i:1;s:7:"columns";a:0:{}}s:15:"sticked_columns";a:0:{}}}s:7:"filters";a:0:{}s:12:"current_view";s:7:"default";}','COMMON' => 'N'),
  array('ID' => '38','USER_ID' => '1','CATEGORY' => 'main.ui.filter','NAME' => 'tbl_iblock_section_ba2fa0d3403306687fc8509765221781','VALUE' => 'a:6:{s:14:"use_pin_preset";b:1;s:15:"deleted_presets";a:0:{}s:15:"default_presets";a:0:{}s:7:"default";s:14:"default_filter";s:6:"filter";s:14:"default_filter";s:7:"filters";a:1:{s:10:"tmp_filter";a:2:{s:6:"fields";a:1:{s:10:"SECTION_ID";s:1:"0";}s:11:"filter_rows";s:10:"SECTION_ID";}}}','COMMON' => 'N'),
  array('ID' => '62','USER_ID' => '1','CATEGORY' => 'main.ui.filter','NAME' => 'tbl_iblock_element_ba2fa0d3403306687fc8509765221781','VALUE' => 'a:6:{s:14:"use_pin_preset";b:1;s:15:"deleted_presets";a:0:{}s:15:"default_presets";a:0:{}s:7:"default";s:14:"default_filter";s:6:"filter";s:14:"default_filter";s:7:"filters";a:2:{s:10:"tmp_filter";a:2:{s:6:"fields";a:1:{s:10:"SECTION_ID";s:1:"1";}s:11:"filter_rows";s:10:"SECTION_ID";}s:14:"default_filter";a:0:{}}}','COMMON' => 'N'),
  array('ID' => '67','USER_ID' => '1','CATEGORY' => 'main.interface.grid','NAME' => 'tbl_iblock_element_ba2fa0d3403306687fc8509765221781','VALUE' => 'a:3:{s:5:"views";a:1:{s:7:"default";a:3:{s:7:"columns";s:0:"";s:13:"columns_sizes";a:2:{s:6:"expand";i:1;s:7:"columns";a:0:{}}s:15:"sticked_columns";a:0:{}}}s:7:"filters";a:0:{}s:12:"current_view";s:7:"default";}','COMMON' => 'N'),
  array('ID' => '199','USER_ID' => '1','CATEGORY' => 'main.interface.grid','NAME' => 'tbl_iblock_admin_b68e15f27bb5c24c13ead6608ac8c903','VALUE' => 'a:3:{s:5:"views";a:1:{s:7:"default";a:3:{s:7:"columns";s:0:"";s:13:"columns_sizes";a:2:{s:6:"expand";i:1;s:7:"columns";a:0:{}}s:15:"sticked_columns";a:0:{}}}s:7:"filters";a:0:{}s:12:"current_view";s:7:"default";}','COMMON' => 'N'),
  array('ID' => '200','USER_ID' => '1','CATEGORY' => 'main.interface.grid','NAME' => 'tbl_iblock_b68e15f27bb5c24c13ead6608ac8c903','VALUE' => 'a:3:{s:5:"views";a:1:{s:7:"default";a:3:{s:7:"columns";s:0:"";s:13:"columns_sizes";a:2:{s:6:"expand";i:1;s:7:"columns";a:0:{}}s:15:"sticked_columns";a:0:{}}}s:7:"filters";a:0:{}s:12:"current_view";s:7:"default";}','COMMON' => 'N'),
  array('ID' => '201','USER_ID' => '1','CATEGORY' => 'main.ui.filter','NAME' => 'tbl_iblock_section_6d813521703ed49168adeccc93e2ecaf','VALUE' => 'a:6:{s:14:"use_pin_preset";b:1;s:15:"deleted_presets";a:0:{}s:15:"default_presets";a:0:{}s:7:"default";s:14:"default_filter";s:6:"filter";s:14:"default_filter";s:7:"filters";a:1:{s:10:"tmp_filter";a:2:{s:6:"fields";a:1:{s:10:"SECTION_ID";s:1:"0";}s:11:"filter_rows";s:10:"SECTION_ID";}}}','COMMON' => 'N'),
  array('ID' => '207','USER_ID' => '1','CATEGORY' => 'main.interface.grid','NAME' => 'tbl_iblock_section_6d813521703ed49168adeccc93e2ecaf','VALUE' => 'a:3:{s:5:"views";a:1:{s:7:"default";a:3:{s:7:"columns";s:0:"";s:13:"columns_sizes";a:2:{s:6:"expand";i:1;s:7:"columns";a:0:{}}s:15:"sticked_columns";a:0:{}}}s:7:"filters";a:0:{}s:12:"current_view";s:7:"default";}','COMMON' => 'N'),
  array('ID' => '208','USER_ID' => '1','CATEGORY' => 'main.ui.filter','NAME' => 'tbl_iblock_element_6d813521703ed49168adeccc93e2ecaf','VALUE' => 'a:6:{s:14:"use_pin_preset";b:1;s:15:"deleted_presets";a:0:{}s:15:"default_presets";a:0:{}s:7:"default";s:14:"default_filter";s:6:"filter";s:14:"default_filter";s:7:"filters";a:1:{s:14:"default_filter";a:0:{}}}','COMMON' => 'N'),
  array('ID' => '213','USER_ID' => '1','CATEGORY' => 'main.interface.grid','NAME' => 'tbl_iblock_element_6d813521703ed49168adeccc93e2ecaf','VALUE' => 'a:3:{s:5:"views";a:1:{s:7:"default";a:3:{s:7:"columns";s:0:"";s:13:"columns_sizes";a:2:{s:6:"expand";i:1;s:7:"columns";a:0:{}}s:15:"sticked_columns";a:0:{}}}s:7:"filters";a:0:{}s:12:"current_view";s:7:"default";}','COMMON' => 'N'),
  array('ID' => '214','USER_ID' => '1','CATEGORY' => 'main.interface.grid','NAME' => 'tbl_iblock_admin_d4f859a96c13f551a2771b7fc3a78d38','VALUE' => 'a:3:{s:5:"views";a:1:{s:7:"default";a:3:{s:7:"columns";s:0:"";s:13:"columns_sizes";a:2:{s:6:"expand";i:1;s:7:"columns";a:0:{}}s:15:"sticked_columns";a:0:{}}}s:7:"filters";a:0:{}s:12:"current_view";s:7:"default";}','COMMON' => 'N'),
  array('ID' => '215','USER_ID' => '1','CATEGORY' => 'main.ui.filter','NAME' => 'tbl_iblock_list_b7bbf572b2e004d3a3450c2185649acc','VALUE' => 'a:6:{s:14:"use_pin_preset";b:1;s:15:"deleted_presets";a:0:{}s:15:"default_presets";a:0:{}s:7:"default";s:14:"default_filter";s:6:"filter";s:14:"default_filter";s:7:"filters";a:1:{s:10:"tmp_filter";a:2:{s:6:"fields";a:1:{s:10:"SECTION_ID";s:1:"0";}s:11:"filter_rows";s:10:"SECTION_ID";}}}','COMMON' => 'N'),
  array('ID' => '220','USER_ID' => '1','CATEGORY' => 'main.interface.grid','NAME' => 'tbl_iblock_list_b7bbf572b2e004d3a3450c2185649acc','VALUE' => 'a:3:{s:5:"views";a:1:{s:7:"default";a:3:{s:7:"columns";s:0:"";s:13:"columns_sizes";a:2:{s:6:"expand";i:1;s:7:"columns";a:0:{}}s:15:"sticked_columns";a:0:{}}}s:7:"filters";a:0:{}s:12:"current_view";s:7:"default";}','COMMON' => 'N')
);

/* `rimstudio_db`.`b_user_password` */
$b_user_password = array(
  array('ID' => '1','USER_ID' => '1','PASSWORD' => '$6$EHEA5iQ3EdYiQm0R$kaSRGUM9O87wj2u.0AnytGb63LPc42JRIbNsaIo5rumlioqkg9wv5hQJP1.El.HQBYG8Y7j5fgP5IdooKzaoJ0','DATE_CHANGE' => '2023-02-16 15:28:15')
);

/* `rimstudio_db`.`b_user_phone_auth` */
$b_user_phone_auth = array(
);

/* `rimstudio_db`.`b_user_profile_history` */
$b_user_profile_history = array(
);

/* `rimstudio_db`.`b_user_profile_record` */
$b_user_profile_record = array(
);

/* `rimstudio_db`.`b_user_session` */
$b_user_session = array(
);

/* `rimstudio_db`.`b_user_stored_auth` */
$b_user_stored_auth = array(
  array('ID' => '1','USER_ID' => '1','DATE_REG' => '2023-02-16 15:28:15','LAST_AUTH' => '2023-02-16 15:28:15','STORED_HASH' => 'db550faa8c51c58f2c0a1661f34e462f','TEMP_HASH' => 'N','IP_ADDR' => '2130706433')
);

/* `rimstudio_db`.`b_utm_blog_comment` */
$b_utm_blog_comment = array(
);

/* `rimstudio_db`.`b_utm_blog_post` */
$b_utm_blog_post = array(
);

/* `rimstudio_db`.`b_utm_forum_message` */
$b_utm_forum_message = array(
);

/* `rimstudio_db`.`b_uts_blog_comment` */
$b_uts_blog_comment = array(
);

/* `rimstudio_db`.`b_uts_blog_post` */
$b_uts_blog_post = array(
);

/* `rimstudio_db`.`b_uts_forum_message` */
$b_uts_forum_message = array(
);

/* `rimstudio_db`.`b_vote` */
$b_vote = array(
);

/* `rimstudio_db`.`b_vote_answer` */
$b_vote_answer = array(
);

/* `rimstudio_db`.`b_vote_attached_object` */
$b_vote_attached_object = array(
);

/* `rimstudio_db`.`b_vote_channel` */
$b_vote_channel = array(
);

/* `rimstudio_db`.`b_vote_channel_2_group` */
$b_vote_channel_2_group = array(
);

/* `rimstudio_db`.`b_vote_channel_2_site` */
$b_vote_channel_2_site = array(
);

/* `rimstudio_db`.`b_vote_event` */
$b_vote_event = array(
);

/* `rimstudio_db`.`b_vote_event_answer` */
$b_vote_event_answer = array(
);

/* `rimstudio_db`.`b_vote_event_question` */
$b_vote_event_question = array(
);

/* `rimstudio_db`.`b_vote_question` */
$b_vote_question = array(
);

/* `rimstudio_db`.`b_vote_user` */
$b_vote_user = array(
);
