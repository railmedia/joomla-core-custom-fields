<?php
defined ( '_JEXEC' ) or die ( 'Restricted access' );
class plgContentGarysPizzaCustomParams extends JPlugin {
	
	
	protected $autoloadLanguage = false;
    function onContentPrepareForm($form, $data) {

        $app = JFactory::getApplication();
        $option = $app->input->get('option');
        $view = $app->input->get('view');

        switch($option) {

                case 'com_menus': {
                    if ($app->isAdmin() && $view == 'item') {			
						JForm::addFormPath(__DIR__ . '/forms');
						$form->loadFile('menuitems', true);
                    }
                    return true;
                }
				
				case 'com_content': {
					if ($app->isAdmin()) {
						JForm::addFormPath(__DIR__ . '/forms');
						$form->loadFile('articles', true);
					}
				}

        }
        return true;

    }
}

?>