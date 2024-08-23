<?php

class __Mustache_11ec398eb49ab221691785fd563d2e8b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="relative mb-6 mt-4 overflow-hidden rounded-lg bg-gray-800 shadow-md">
';
        $buffer .= $indent . '  <!-- Profile background -->
';
        $buffer .= $indent . '  <div
';
        $buffer .= $indent . '    class="h-48 bg-cover bg-center"
';
        $buffer .= $indent . '    style="background-image: url(\'';
        $value = $this->resolveValue($context->findDot('profile.background'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '\');"
';
        $buffer .= $indent . '  ></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <!-- Profile info -->
';
        $buffer .= $indent . '  <div class="p-6 pt-0">
';
        $buffer .= $indent . '    <div class="-mt-16 flex items-center">
';
        $buffer .= $indent . '      <!-- Avatar -->
';
        $buffer .= $indent . '      <img
';
        $buffer .= $indent . '        src="';
        $value = $this->resolveValue($context->findDot('profile.avatar'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '"
';
        $buffer .= $indent . '        alt="';
        $value = $this->resolveValue($context->findDot('profile.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '\'s avatar"
';
        $buffer .= $indent . '        class="mr-2 mt-4 h-24 w-24 rounded-full border-4 border-gray-800"
';
        $buffer .= $indent . '      />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- User info -->
';
        $buffer .= $indent . '      <div class="mt-16 flex-grow">
';
        $buffer .= $indent . '        <h2 class="text-2xl font-bold text-white">';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h2>
';
        $buffer .= $indent . '        <p class="text-gray-400">@';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Edit profile button -->
';
        $value = $context->find('is_owner');
        $buffer .= $this->section94285fd11e618fb8fde33f7323800c46($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Bio -->
';
        $buffer .= $indent . '    <p class="mt-4 text-gray-300">';
        $value = $this->resolveValue($context->find('bio'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- User stats -->
';
        $buffer .= $indent . '    <div class="mt-4 flex text-gray-400">
';
        $buffer .= $indent . '      <div class="mr-6">
';
        $buffer .= $indent . '        <span class="font-bold text-white">';
        $value = $this->resolveValue($context->find('following_count'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span> Following
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="mr-6">
';
        $buffer .= $indent . '        <span class="font-bold text-white">';
        $value = $this->resolveValue($context->find('followers_count'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span> Followers
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div><span class="font-bold text-white">';
        $value = $this->resolveValue($context->find('postCount'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span> Posts</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section94285fd11e618fb8fde33f7323800c46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <a
        href="/edit-profile"
        class="mt-16 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700"
      >
        Edit Profile
      </a>
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
                
                $buffer .= $indent . '      <a
';
                $buffer .= $indent . '        href="/edit-profile"
';
                $buffer .= $indent . '        class="mt-16 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        Edit Profile
';
                $buffer .= $indent . '      </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
