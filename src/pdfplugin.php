<?php

defined('_JEXEC') or die;

class plgButtonPdfPlugin extends JPlugin
{
    public function onDisplay($name)
    {
        $width = $this->params->get('width');
        $height = $this->params->get('height');
        $label = "Insert PDF";

        $scriptUrl = "../plugins/editors-xtd/pdfplugin/pdfview.php";

        $button = new JObject();
        $button->modal = true;
        $button->class = 'btn';
        $button->text = $label;
        $button->name = 'blank';
        $button->link = $scriptUrl . '?name=' . $name . '&width=' . $width . '&height=' . $height;
        $button->options = "{handler: 'iframe', size: {x: 800, y: 500}}";
        return $button;
    }
}