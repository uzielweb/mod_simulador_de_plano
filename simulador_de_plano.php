<?php

/**

 * @copyright	Copyright © 2016 - All rights reserved.

 * @license		GNU General Public License v2.0

 * @generator	http://xdsoft/joomla-module-generator/

 */

defined('_JEXEC') or die;



$doc = JFactory::getDocument();

/* Available fields:"tabela","faixa_etaria","valor_da_mensalidade","permitir_impressao", */

// Include assets

$doc->addStyleSheet(JURI::root()."modules/mod_simulador_de_plano/assets/css/style.css");
$doc->addScript(JURI::root()."modules/mod_simulador_de_plano/assets/js/script.js");
// $width 			= $params->get("width");



/**

	$db = JFactory::getDBO();

	$db->setQuery("SELECT * FROM #__mod_simulador_de_plano where del=0 and module_id=".$module->id);

	$objects = $db->loadAssocList();

*/

require JModuleHelper::getLayoutPath('mod_simulador_de_plano', $params->get('layout', 'default'));
