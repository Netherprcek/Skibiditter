<?php

class __Mustache_0182753942ed6a232c221530e7d44af2 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="relative mb-6 rounded-lg bg-gray-800 shadow-md overflow-hidden">
';
        $buffer .= $indent . '  <!-- Profile background -->
';
        $buffer .= $indent . '  <div class="h-32 bg-cover bg-center" style="background-image: url(\'';
        $value = $this->resolveValue($context->find('profile_background'), $context);
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
        $buffer .= '\'s avatar" class="w-24 h-24 rounded-full border-4 border-gray-800 mr-4">
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '      <!-- User info -->
';
        $buffer .= $indent . '      <div class="flex-grow">
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
        $buffer .= $indent . '      <a href="/edit-profile" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('edit_profile_text'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '
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
}
