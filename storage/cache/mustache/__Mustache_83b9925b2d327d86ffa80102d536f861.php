<?php

class __Mustache_83b9925b2d327d86ffa80102d536f861 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h1>Edit Post</h1>
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
