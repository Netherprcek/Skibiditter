<?php

class __Mustache_6e6379f482090b308e08ea2989d88a3f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<title>Home Page</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="flex w-full">
';
        if ($partial = $this->mustache->loadPartial('partials/leftBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '      
';
        if ($partial = $this->mustache->loadPartial('partials/postList')) {
            $buffer .= $partial->renderInternal($context, $indent . '          ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        if ($partial = $this->mustache->loadPartial('partials/rightBar')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
