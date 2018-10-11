<?php
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
$txt['quote_to_all'] = 'Quote to All';
$txt['pm_unread'] = 'Unread';
$txt['pm_msg_label_title'] = 'Mover Mensaje';
$txt['pm_msg_label_apply'] = 'Mover a';
$txt['pm_msg_label_remove'] = 'Carpeta Actual';
$txt['pm_sel_label_title'] = 'Mover Seleccionados';
$txt['pm_manage_labels'] = 'Administrar Carpetas';
$txt['pm_labels_delete'] = '�Est� seguro de que desea borrar las carpetas seleccionadas?';
$txt['pm_labels_desc'] = 'Desde aqu� puede a�adir, editar y borrar las carpetas usadas en su centro de mensajes personales.';
$txt['pm_label_add_new'] = 'A�adir nueva Carpeta';
$txt['pm_label_name'] = 'Nombre de la Carpeta';
$txt['pm_labels_no_exist'] = '�A�n no tiene carpetas activas!';
$txt['pm_labels'] = 'Carpetas';
$txt['pm_search_choose_label'] = 'Elige carpetas para buscar en, o busca todas';
$txt['pm_email'] = 'Acaba de recibir un Mensaje Privado de EMISOR en ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANTE: Recuerde, esto es solo una notificaci�n. Por favor, no responda a este email.';
$txt['unread_items'] = 'Bandeja de Salida';
$txt['unsend_item'] = 'Rectificar el env�o';
$txt['pm_rule_label'] = 'Mover mensaje a carpeta';
$txt['pm_rule_sel_label'] = 'Seleccione Carpeta';

$txt['pm_edit'] = 'Editar';
$txt['edit_message'] = 'Editar Mensaje';
$txt['pm_unsent_denied'] = 'No puede rectificar el env�o del mensaje';
$txt['pm_unsent'] = 'Su mensaje ha sido retirado de todos los receptores satisfactoriamente';
$txt['pm_unsent_some'] = 'Su mensaje ha sido retirado de todos los receptores que a�n no lo hayan le�do satisfactoriamente';
$txt['pm_edited'] = 'Su mensaje ha sido editado y se ha reenviado a todos los receptores.';
$txt['pm_no_edit'] = 'Incapaz de editar un Mensaje Privado porque al menos un receptor ha le�do el mensaje que quiere editar';
$txt['pm_send_blocked'] = 'No puede enviar Mensajes Privados hasta que hayan pasado 24 horas de la activaci�n de la cuenta.';
$txt['unsend_message'] = 'Unsend this message to all recipients who haven\'t read it yet';
$txt['pm_search_what'] = 'Buscar grupo';
$txt['pm_search_to_user'] = 'Para el usuario';

$txt['pm_actions_filter_by_label'] = 'Filtrar por Carpeta';
$txt['pm_current_label'] = 'Carpeta';
$txt['pm_readable_label'] = 'mover a carpeta &quot;{LABEL}&quot;';

// Language string for PM Quick Reply:
//==================================================================
$txt['quick_reply_desc'] = 'Con la respuesta r�pida puede escribir un Mensaje Privado cuando est�s viendo una conversaci�n sin necesidad de cargar la p�gina. Puede seguir utilizando BBCodes y Smileys al igual que en un Mensaje Privado normal.';

// Language strings for the Enhanced PM System settings page:
//==================================================================
$txt['eps_area'] = 'Enhaced PMs';
$txt['eps_title'] = 'Enhanced PM System';
$txt['eps_new_version'] = '�La versi�n %s del mod "Enhanced PM System" est� disponible para descargar!';
$txt['eps_no_update'] = '�Su versi�n del mod "Enhanced PM System" est� actualizada!';
$txt['eps_allow_unsend'] = 'Grupos de miembros capaces de rectificar el env�o de un Mensaje Privado no le�do';
$txt['eps_allow_edit'] = 'Grupos de miembros capaces de modificar un Mensaje Privado no le�do';
$txt['eps_block_1st_day'] = 'Grupos de miembros capaces de enviar Mensajes Privados el primer d�a';
$txt['eps_pm_view_switch'] = '�Permitir a los usuarios seleccionar la vista de Mensajes Privados a otro distinto al "Modo Conversaci�n"?';
$txt['eps_send_pm_while_muted'] = '�Permitir a los usuarios muteados enviar Mensajes Privados?';
$txt['eps_allow_block_admin'] = '�Permitir a los usuarios bloquear Mensajes Privados de Administradores en "Reglas de Mensajes Privados"?';

// Language strings for the Enhanced PM System permissions:
//==================================================================
$txt['permissionname_eps_block_1st_day'] = '<strong>NO</strong> se permite enviar Mensajes Privados el primer d�a';
$txt['permissionhelp_eps_block_1st_day'] = '�ste ajuste prohibe a los miembros de este grupo de enviar cualquier Mensaje Privado en el primer d�a (24 horas) de su membres�a. Requiere el permiso \'Read personal messages\'.';
$txt['permissionhelp_eps_allow_edit'] = '�ste ajuste prohibe a los miembros de este grupo de modificar cualquier Mensaje Privado enviado a otros siempre que el mensaje no haya sido le�do por ning�n destinatario. Requiere el permiso \'Read personal messages\'.';
$txt['permissionname_eps_allow_edit'] = 'Capaces de editar Mensajes Privados no le�dos';
$txt['permissionhelp_eps_allow_unsend'] = '�ste ajuste permite a los miembros de �ste grupo de rectificar el env�o (o borrar) Mensajes Privados enviados a otros, siempre que el mensaje no haya sido le�do por ning�n destinatario. No afecta a los emails ya enviados notificando un Mensaje Privado. Requiere el permiso \'Read personal messages\'.';
$txt['permissionname_eps_allow_unsend'] = 'Capaces de rectificar el env�o de Mensajes Privados no le�dos';

// Language strings for the Enhanced PM System profile area:
//==================================================================
$txt['display_pm_quick_reply'] = 'Usar la respuesta r�pida en la interfaz de los Mensajes Privados:';
if (!isset($txt['display_quick_reply1']))
{
	$txt['display_quick_reply1'] = 'no mostrar nada';
	$txt['display_quick_reply2'] = 'mostrar, desactivado por defecto';
	$txt['display_quick_reply3'] = 'mostrar, activado por defecto';
}
$txt['recent_pms_at_top'] = 'Mostrar las conversaciones m�s recientes en la parte superior de la lista.';
$txt['recent_msgs_at_top'] = 'Mostrar los Mensajes Privados m�s recientes en la parte superior.';

?>