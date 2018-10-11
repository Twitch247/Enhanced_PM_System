<?php
/**********************************************************************************
* EnhancedPMSystem.spanish_latin-utf8.php - Latin Spanish language file of the Split Forum Mod
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
$txt['quote_to_all'] = 'Citar a todos';
$txt['pm_unread'] = 'No le�do';
$txt['pm_msg_label_title'] = 'Mover mensaje';
$txt['pm_msg_label_apply'] = 'Mover a';
$txt['pm_msg_label_remove'] = 'Carpeta actual';
$txt['pm_sel_label_title'] = 'Mover seleccionados';
$txt['pm_manage_labels'] = 'Administrar carpetas';
$txt['pm_labels_delete'] = '�Est�s seguro de que deseas borrar la(s) carpeta(s) seleccionada(s)?';
$txt['pm_labels_desc'] = 'Desde aqu� se puede a�adir, editar y borrar la(s) carpeta(s) usada(s) en su centro de mensajes personales.';
$txt['pm_label_add_new'] = 'A�adir nueva carpeta';
$txt['pm_label_name'] = 'Nombre de la carpeta';
$txt['pm_labels_no_exist'] = '�A�n no tiene carpetas activas!';
$txt['pm_labels'] = 'Carpetas';
$txt['pm_search_choose_label'] = 'Elige carpetas para buscar en... , o busca en todas';
$txt['pm_email'] = 'Acaba de recibir un mensaje privado del REMITENTE en... ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANTE: Recuerde, esto es solo una notificaci�n. Por favor, no responda a este correo.';
$txt['unread_items'] = 'Bandeja de salida';
$txt['unsend_item'] = 'Rectificar el env�o';
$txt['pm_rule_label'] = 'Mover el mensaje a la carpeta';
$txt['pm_rule_sel_label'] = 'Seleccione una carpeta';

$txt['pm_edit'] = 'Editar';
$txt['edit_message'] = 'Editar el mensaje';
$txt['pm_unsent_denied'] = 'No puede rectificar el env�o del mensaje';
$txt['pm_unsent'] = 'Su mensaje ha sido retirado de todos los receptores satisfactoriamente';
$txt['pm_unsent_some'] = 'Su mensaje ha sido retirado de todos los receptores que a�n no lo hayan le�do satisfactoriamente';
$txt['pm_edited'] = 'Su mensaje ha sido editado y se ha reenviado a todos los receptores.';
$txt['pm_no_edit'] = 'Incapaz de editar un mensaje privado porque al menos un receptor ha le�do el mensaje que quiere editar';
$txt['pm_send_blocked'] = 'No puede enviar mensajes Privados hasta que hayan pasado 24 horas de la activaci�n de la cuenta.';
$txt['unsend_message'] = 'Reenviar este mensaje a todos los destinatarios que no han le�do el mensaje privado todav�a';
$txt['pm_search_what'] = 'Buscar grupo';
$txt['pm_search_to_user'] = 'Para el usuario';

$txt['pm_actions_filter_by_label'] = 'Filtrar por carpeta';
$txt['pm_current_label'] = 'Carpeta';
$txt['pm_readable_label'] = 'mover a la carpeta &quot;{LABEL}&quot;';

// Language string for PM Quick Reply:
//==================================================================
$txt['quick_reply_desc'] = 'Con la respuesta r�pida puede escribir un mensaje privado cuando est�s viendo una conversaci�n sin necesidad de cargar la p�gina. Puede seguir utilizando BBCodes y Smileys al igual que en un mensaje privado normal.';

// Language strings for the Enhanced PM System settings page:
//==================================================================
$txt['eps_area'] = 'Mensajes privados mejoradas';
$txt['eps_title'] = 'Sistema mejorado de mensajes privados';
$txt['eps_new_version'] = '�La versi�n %s del mod "Sistema mejorado de mensajes privados(Enhanced PM System)" est� disponible para descargar!';
$txt['eps_no_update'] = '�Su versi�n del mod "Sistema mejorado de mensajes privados(Enhanced PM System)" est� actualizada!';
$txt['eps_allow_unsend'] = 'Grupos de miembros capaces de rectificar el env�o de un mensaje privado no le�do';
$txt['eps_allow_edit'] = 'Grupos de miembros capaces de modificar un mensaje privado no le�do';
$txt['eps_block_1st_day'] = 'Grupos de miembros capaces de enviar mensajes privados el primer d�a';
$txt['eps_pm_view_switch'] = '�Permitir a los usuarios seleccionar la vista de mensajes privados a otro distinto al "Modo conversaci�n"?';
$txt['eps_send_pm_while_muted'] = '�Permitir a los usuarios muteados enviar Mensajes Privados?';
$txt['eps_allow_block_admin'] = '�Permitir a los usuarios bloquear mensajes privados de administradores en "Reglas de mensajes privados"?';

// Language strings for the Enhanced PM System permissions:
//==================================================================
$txt['permissionname_eps_block_1st_day'] = '<strong>NO</strong> se permite enviar mensajes privados el primer d�a';
$txt['permissionhelp_eps_block_1st_day'] = '�ste ajuste prohibe a los miembros de este grupo de enviar cualquier mensaje privado en el primer d�a (24 horas) de su membres�a. Requiere el permiso "Leer mensajes personales".';
$txt['permissionhelp_eps_allow_edit'] = '�ste ajuste prohibe a los miembros de este grupo de modificar cualquier mensaje privado enviado a otros siempre que el mensaje no haya sido le�do por ning�n destinatario. Requiere el permiso "Leer mensajes personales".';
$txt['permissionname_eps_allow_edit'] = 'Capaces de editar mensajes privados no le�dos';
$txt['permissionhelp_eps_allow_unsend'] = '�ste ajuste permite a los miembros de �ste grupo de rectificar el env�o (o borrar) mensajes privados enviados a otros, siempre que el mensaje no haya sido le�do por ning�n destinatario. No afecta a los correos ya enviados notificando un mensaje privado. Requiere el permiso "Leer mensajes personales".';
$txt['permissionname_eps_allow_unsend'] = 'Capaces de rectificar el env�o de mensajes privados no le�dos';

// Language strings for the Enhanced PM System profile area:
//==================================================================
$txt['display_pm_quick_reply'] = 'Usar la respuesta r�pida en la interfaz de los mensajes privados:';
if (!isset($txt['display_quick_reply1']))
{
	$txt['display_quick_reply1'] = 'no mostrar nada';
	$txt['display_quick_reply2'] = 'mostrar, desactivado por defecto';
	$txt['display_quick_reply3'] = 'mostrar, activado por defecto';
}
$txt['recent_pms_at_top'] = 'Mostrar las conversaciones m�s recientes en la parte superior de la lista.';
$txt['recent_msgs_at_top'] = 'Mostrar los mensajes privados m�s recientes en la parte superior.';
?>