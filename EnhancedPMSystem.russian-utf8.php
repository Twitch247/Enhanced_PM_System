﻿<?php
/**********************************************************************************
* EnhancedPMSystem.english-utf8.php - English language file of the Split Forum Mod
*********************************************************************************
* This program is distributed in the hope that it is and will be useful, but
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY
* or FITNESS FOR A PARTICULAR PURPOSE.
*********************************************************************************
* This work is licensed under a Creative Commons Attribution 3.0 Unported License
**********************************************************************************/
if (!defined('SMF'))
	die('Hacking attempt...');

// Replacement language strings for the Enhanced PM System:
//==================================================================
$txt['quote_to_all'] = 'Цитировать всем';
$txt['pm_unread'] = 'Непрочитанные';
$txt['pm_msg_label_title'] = 'Переместить сообщение';
$txt['pm_msg_label_apply'] = 'Переместить В';
$txt['pm_msg_label_remove'] = 'Текущая папка';
$txt['pm_sel_label_title'] = 'Переместить выбранные';
$txt['pm_manage_labels'] = 'Управление папками';
$txt['pm_labels_delete'] = 'Вы действительно желаете удалить выбранные папки?';
$txt['pm_labels_desc'] = 'Здесь Вы можете добавлять, редактировать и удалять папки, используемые в Вашем личном разделе сообщений.';
$txt['pm_label_add_new'] = 'Добавить новую папку';
$txt['pm_label_name'] = 'Имя папки';
$txt['pm_labels_no_exist'] = 'У Вас нет настроек для папок!';
$txt['pm_labels'] = 'Папки';
$txt['pm_search_choose_label'] = 'Выберите папки для поиска по критерию или общего поиска';
$txt['pm_email'] = 'Вам было отправлено личное сообщение ' . $context['forum_name'] . '.' . "\n\n" . 'ВНИМАНИЕ: Это всего лишь информационное оповещение. Пожалуйста, не отвечайте на данное сообщение.';
$txt['unread_items'] = 'Непрочитанные';
$txt['unsend_item'] = 'Отменённые';
$txt['pm_rule_label'] = 'Переместить сообщение в папку';
$txt['pm_rule_sel_label'] = 'Выберите папку';

$txt['pm_edit'] = 'Редактировать';
$txt['edit_message'] = 'Редактировать сообщение';
$txt['pm_unsent_denied'] = 'Вы не можете отменить сообщение.';
$txt['pm_unsent'] = 'Ваше ЛС было отменено для получения всеми адресатами.';
$txt['pm_unsent_some'] = 'Ваше ЛС было отменено для получения адресатами, которые ещё не прочитали его.';
$txt['pm_edited'] = 'Ваше ЛС было отредактировано и всем адресатам отправлено оповещение по электронной почте.';
$txt['pm_no_edit'] = 'Невозможно отредактировать ЛС, так как как минимум один получатель уже прочитал его.';
$txt['pm_send_blocked'] = 'Вы можете отправлять ЛС только через 24 часа после активации Вашей учётной записи.';
$txt['unsend_message'] = 'Отменить данное ЛС для всех адресатов, которые ещё не прочитали его.';
$txt['pm_search_what'] = 'Найти группу';
$txt['pm_search_to_user'] = 'Для пользователя';

$txt['pm_actions_filter_by_label'] = 'Фильтр по Папкам';
$txt['pm_current_label'] = 'Папка';
$txt['pm_readable_label'] = 'переместить в папку &quot;{LABEL}&quot;';

// Language string for PM Quick Reply:
//==================================================================
$txt['quick_reply_desc'] = 'Используя Быстрый Ответ, Вы можете написать ЛС, просматривая диалоги, не открывая, при этом, новую страницу. Вы можете использовать специальные символы и смайлы также, как при написании обычного сообщения.';

// Language strings for the Enhanced PM System settings page:
//==================================================================
$txt['eps_area'] = 'Расширенные ЛС';
$txt['eps_title'] = 'Расширенная система ЛС';
$txt['eps_new_version'] = 'Версия %s Расширенной Системы ЛС доступна для скачивания!';
$txt['eps_no_update'] = 'Вы используете последнюю версию Расширенной Системы ЛС!';
$txt['eps_allow_unsend'] = 'Группы, которым разрешено отменять непрочитанные ЛС';
$txt['eps_allow_edit'] = 'Группы, которым разрешено редактировать и отменять ЛС';
$txt['eps_block_1st_day'] = 'Группы, которые не могут отправлять ЛС в течение первых суток после регистрации';
$txt['eps_pm_view_switch'] = 'Разрешить пользователям выбирать просмотр ЛС, отличающийся от  режима диалога?';
$txt['eps_send_pm_while_muted'] = 'Разрешить пользователям, лишённым права написания сообщений отправлять ЛС?';
$txt['eps_allow_block_admin'] = 'Разрешить пользователям блокировать сообщения от Администраторов в правилах ЛС?';

// Language strings for the Enhanced PM System permissions:
//==================================================================
$txt['permissionname_eps_block_1st_day'] = '<strong>НЕ</strong> разрешено отправлять ЛС в первые сутки';
$txt['permissionhelp_eps_block_1st_day'] = 'Функция отключает для членов группы возможность отправлять ЛС в первые сутки (24ч) после регистрации. Требуется разрешение \'Читать персональные сообщения\' .';
$txt['permissionhelp_eps_allow_edit'] = 'Функция разрешает членам данной группы редактировать ЛС до того, как оно будет прочитано хотя бы одним адресатом.  Требуется разрешение \'Читать персональные сообщения\' .';
$txt['permissionname_eps_allow_edit'] = 'Разрешено редактировать непрочитанные ЛС';
$txt['permissionhelp_eps_allow_unsend'] = 'Функция разрешает членам группы отменять (или удалять) ЛС, если они не прочитаны хотя бы одним адресатом.  Не отменяет оповещения о ЛС, отправленные по электронной почте.  Требуется разрешение \'Читать персональные сообщения\' .';
$txt['permissionname_eps_allow_unsend'] = 'Разрешено отменять непрочитанные ЛС';

// Language strings for the Enhanced PM System profile area:
//==================================================================
$txt['display_pm_quick_reply'] = 'Выводить форму быстрого ответа на ЛС:';
if (!isset($txt['display_quick_reply1']))
{
	$txt['display_quick_reply1'] = 'Не показывать';
	$txt['display_quick_reply2'] = 'показать, ВЫКЛ по умолчанию';
	$txt['display_quick_reply3'] = 'показать, ВКЛ по умолчанию';
}
$txt['recent_pms_at_top'] = 'Показывать последние диалоги наверху списка.';
$txt['recent_msgs_at_top'] = 'Показывать последние ЛС наверху.';

?>