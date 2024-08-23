<?php

class __Mustache_6d4e463f40f9a5cdcc75b3927c933de4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<title>pipik</title>
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
