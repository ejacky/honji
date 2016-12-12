<?php

namespace Honji\Core;

class View
{
    public static function render($__template_name, array $__template_args = [])
    {
        extract($__template_args);
        ob_start();
        include self::getTemplateFile($__template_name);

        return ob_get_clean();
    }

    public static function getTemplateFile($template)
    {
        return implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..', 'resources', 'views', $template.'.php']);
    }
}
