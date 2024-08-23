<?php

class __Mustache_490f4d93049868107505d66ee5491fba extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
