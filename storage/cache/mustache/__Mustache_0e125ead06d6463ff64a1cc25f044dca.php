<?php

class __Mustache_0e125ead06d6463ff64a1cc25f044dca extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1 class="text-center text-4xl font-bold">Page not found</h1>
';

        return $buffer;
    }
}
