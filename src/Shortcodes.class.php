<?php

namespace AnEasySkypeButton;


use AnEasySkypeButton\Admin\Settings;
use WPExpress\UI\RenderEngine;


class Shortcodes
{

    public function __construct()
    {
        add_shortcode('easy-skype-button', array( $this, 'skypeButtonShortcode' ));
    }

    public static function renderSkypeButton()
    {
        $settings = new Settings();

        $defaultAccount = $settings->getOptionValue('defaultAccount');

        if( empty( $defaultAccount ) ) {
            return '<!-- This is not here! -->';
        }

        $targetElementID = "anEasySkypeButton_" . mt_rand();
        $templatePath    = Setup::getResourceDirectory('', 'templates');
        $engine          = new RenderEngine($templatePath);

        $context = array(
            'targetElementID' => $targetElementID,
            'defaultAccount'  => $defaultAccount,
            'imageSize'       => 24,
        );

        return $engine->renderTemplate("skype-button", $context);
    }

    public function skypeButtonShortcode( $atts )
    {
        // TODO: Implement custom parameters and validation
        $a = shortcode_atts(array(
            'foo' => 'something',
            'bar' => 'something else',
        ), $atts);

        $this->renderSkypeButton();
    }

}