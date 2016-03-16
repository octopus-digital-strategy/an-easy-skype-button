<?php

namespace AnEasySkypeButton\Admin;


use WPExpress\Admin\BaseSettingsPage;


class Settings extends BaseSettingsPage
{

    public function __construct()
    {
        parent::__construct(__('Skype Settings', 'octopus-skype'), 'manage_options', 'octopus-skype-button');
        $description = __('Set the default skype account name', 'octopus-skype');
        $this->setPageDescription($description);

        $this->addOptions();

    }

    private function addOptions()
    {
        $defaultAccount = $this->getOptionValue('defaultAccount');

        $atts = array( 'style' => 'min-width: 400px;', 'readonly' => false );

        $this->fields->addTextInput('defaultAccount')
            ->addLabel(__('Default Account', 'octopus-skype'))
            ->setValue($defaultAccount)
            ->setAttributes($atts);
    }

}