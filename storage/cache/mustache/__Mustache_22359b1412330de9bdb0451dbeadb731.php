<?php

class __Mustache_22359b1412330de9bdb0451dbeadb731 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="mb-6 rounded-lg bg-gray-800 shadow-md overflow-hidden">
';
        $buffer .= $indent . '  <div class="p-4">
';
        $buffer .= $indent . '    <div class="flex items-center justify-between">
';
        $buffer .= $indent . '      <div class="flex items-center">
';
        $buffer .= $indent . '        <img src="';
        $value = $this->resolveValue($context->find('avatar'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '" alt="';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '\'s avatar" class="w-12 h-12 rounded-full mr-3">
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '          <h2 class="text-xl font-bold text-white">';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h2>
';
        $buffer .= $indent . '          <p class="text-gray-400">@';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $value = $context->find('is_own_profile');
        $buffer .= $this->section648b87f2d914f6b363a8012d84ed49dc($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <div class="flex mt-4 text-sm text-gray-400">
';
        $buffer .= $indent . '      <div class="mr-4">
';
        $buffer .= $indent . '        <span class="font-semibold text-white">';
        $value = $this->resolveValue($context->find('following_count'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span> Following
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="mr-4">
';
        $buffer .= $indent . '        <span class="font-semibold text-white">';
        $value = $this->resolveValue($context->find('followers_count'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span> Followers
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div>
';
        $buffer .= $indent . '        <span class="font-semibold text-white">';
        $value = $this->resolveValue($context->find('post_count'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span> Posts
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section648b87f2d914f6b363a8012d84ed49dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <button class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-700">
        Edit Profile
      </button>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <button class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-700">
';
                $buffer .= $indent . '        Edit Profile
';
                $buffer .= $indent . '      </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
