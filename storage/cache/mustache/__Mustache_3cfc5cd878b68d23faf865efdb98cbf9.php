<?php

class __Mustache_3cfc5cd878b68d23faf865efdb98cbf9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('is_owner');
        $buffer .= $this->section9792a080fb38a786735038e932c4933e($context, $indent, $value);

        return $buffer;
    }

    private function section9792a080fb38a786735038e932c4933e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="relative mb-6 rounded-lg bg-gray-900 shadow-md overflow-hidden">
  <!-- Profile background -->
  <div class="h-48 bg-cover bg-center" style="background-image: url(\'{{profile.background}}\');"></div>
  
  <!-- Profile info -->
  <div class="p-6 pt-0">
    <div class="flex items-center -mt-16">
      <!-- Avatar -->
      <img src="{{avatar}}" alt="{{username}}\'s avatar" class="w-24 h-24 rounded-full border-4 border-gray-800 mr-2 mt-4">
      
      <!-- User info -->
      <div class="flex-grow mt-16">
        <h2 class="text-2xl font-bold text-white">{{username}}</h2>
        <p class="text-gray-400">@{{username}}</p>
      </div>
      
      <!-- Edit profile button -->
      <a href="/edit-profile" class="bg-blue-600 text-white px-4 py-2 mt-16 rounded-lg hover:bg-blue-700">
        Edit Profile
      </a>
    </div>
    
    <!-- Bio -->
    <p class="mt-4 text-gray-300">{{bio}}</p>
    
    <!-- User stats -->
    <div class="flex mt-4 text-gray-400">
      <div class="mr-6">
        <span class="font-bold text-white">{{following_count}}</span> Following
      </div>
      <div class="mr-6">
        <span class="font-bold text-white">{{followers_count}}</span> Followers
      </div>
      <div>
        <span class="font-bold text-white">{{postCount}}</span> Posts
      </div>
    </div>
  </div>
</div>
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
                
                $buffer .= $indent . '    <div class="relative mb-6 rounded-lg bg-gray-900 shadow-md overflow-hidden">
';
                $buffer .= $indent . '  <!-- Profile background -->
';
                $buffer .= $indent . '  <div class="h-48 bg-cover bg-center" style="background-image: url(\'';
                $value = $this->resolveValue($context->findDot('profile.background'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '\');"></div>
';
                $buffer .= $indent . '  
';
                $buffer .= $indent . '  <!-- Profile info -->
';
                $buffer .= $indent . '  <div class="p-6 pt-0">
';
                $buffer .= $indent . '    <div class="flex items-center -mt-16">
';
                $buffer .= $indent . '      <!-- Avatar -->
';
                $buffer .= $indent . '      <img src="';
                $value = $this->resolveValue($context->find('avatar'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '\'s avatar" class="w-24 h-24 rounded-full border-4 border-gray-800 mr-2 mt-4">
';
                $buffer .= $indent . '      
';
                $buffer .= $indent . '      <!-- User info -->
';
                $buffer .= $indent . '      <div class="flex-grow mt-16">
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
                $buffer .= $indent . '      <a href="/edit-profile" class="bg-blue-600 text-white px-4 py-2 mt-16 rounded-lg hover:bg-blue-700">
';
                $buffer .= $indent . '        Edit Profile
';
                $buffer .= $indent . '      </a>
';
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
                $buffer .= $indent . '    <div class="flex mt-4 text-gray-400">
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
                $buffer .= $indent . '      <div>
';
                $buffer .= $indent . '        <span class="font-bold text-white">';
                $value = $this->resolveValue($context->find('postCount'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '</span> Posts
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
