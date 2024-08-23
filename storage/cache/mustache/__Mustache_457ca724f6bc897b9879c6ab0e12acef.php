<?php

class __Mustache_457ca724f6bc897b9879c6ab0e12acef extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<title>pipik</title>
';
        $buffer .= $indent . '<h1>pipik</h1>
';
        $buffer .= $indent . '<h1>';
        $value = $this->resolveValue($context->findDot('post.title'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h1>
';
        $buffer .= $indent . '<p>';
        $value = $this->resolveValue($context->findDot('post.content'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '<p>';
        $value = $this->resolveValue($context->findDot('post.author'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '<p>';
        $value = $this->resolveValue($context->findDot('post.date'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';

        return $buffer;
    }
}
