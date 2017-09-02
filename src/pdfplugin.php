<?php

defined('_JEXEC') or die;

class plgButtonPdfPlugin extends JPlugin
{
    public function onDisplay($name, $asset, $author)
    {
        $width = $this->params->get('width');
        $height = $this->params->get('height');
        $label = "Insert PDF";

        $scriptUrl = "index.php?option=com_media&amp;view=pdfList&amp;tmpl=component&amp;folder=";

        $button = new JObject();
        $button->modal = true;
        $button->class = 'btn';
        $button->text = $label;
        $button->name = 'blank';
        $button->link = $scriptUrl . '&amp;name=' . $name . '&amp;width=' . $width . '&amp;height=' . $height . '&amp;e_name=' . $name . '&amp;asset=' . $asset . '&amp;author=' . $author;
        $button->options = "{handler: 'iframe', size: {x: 820, y: 700}}";
        return $button;
    }
}
