<?php

class __Mustache_f18a55233f799b00b5c86c9eac85582e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="relative mb-6 mt-4 overflow-hidden bg-gray-800 shadow-md">
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
        $buffer .= $indent . '        <p>';
        $value = $this->resolveValue($context->findDot('profile.user_id'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Edit profile button -->
';
        $value = $context->findDot('profile.is_owner');
        $buffer .= $this->section7426bb3f555ff87af0e84141abfd54c3($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->findDot('profile.is_owner');
        if (empty($value)) {
            
            $buffer .= ' ';
            $value = $context->find('is_following');
            $buffer .= $this->section7a2a83d054bf3005ae64b58f2cc305ba($context, $indent, $value);
            $buffer .= ' ';
            $value = $context->find('is_following');
            if (empty($value)) {
                
                $buffer .= '
';
                $buffer .= $indent . '      <form action="/';
                $value = $this->resolveValue($context->findDot('profile.user_id'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/follow" method="POST">
';
                $buffer .= $indent . '        <button
';
                $buffer .= $indent . '          id="followButton"
';
                $buffer .= $indent . '          type="submit"
';
                $buffer .= $indent . '          class="mt-16 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '          Follow
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '      </form>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      ';
            }
            $buffer .= ' ';
        }
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Bio -->
';
        $buffer .= $indent . '    <p class="mt-4 text-gray-300">';
        $value = $this->resolveValue($context->findDot('profile.bio'), $context);
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
        $value = $this->resolveValue($context->findDot('profile.following'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span>
';
        $buffer .= $indent . '        Following
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="mr-6">
';
        $buffer .= $indent . '        <span class="font-bold text-white">';
        $value = $this->resolveValue($context->findDot('profile.followers'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</span>
';
        $buffer .= $indent . '        Followers
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="/js/follows.js"></script>
';

        return $buffer;
    }

    private function section7426bb3f555ff87af0e84141abfd54c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <a
        href="/{{username}}/edit-profile"
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
                $buffer .= $indent . '        href="/';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/edit-profile"
';
                $buffer .= $indent . '        class="mt-16 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        Edit Profile
';
                $buffer .= $indent . '      </a>
';
                $buffer .= $indent . '      ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a2a83d054bf3005ae64b58f2cc305ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <form action="/{{profile.user_id}}/unfollow" method="POST">
        <button
          type="submit"
          class="text-shadow-default hover:text-shadow-lg mt-16 rounded-lg border-2 border-red-700 bg-red-600 px-4 py-2 text-md text-white transition duration-300 ease-in-out hover:bg-red-700"
        >
          Unfollow
        </button>
      </form>
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
                
                $buffer .= '
';
                $buffer .= $indent . '      <form action="/';
                $value = $this->resolveValue($context->findDot('profile.user_id'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/unfollow" method="POST">
';
                $buffer .= $indent . '        <button
';
                $buffer .= $indent . '          type="submit"
';
                $buffer .= $indent . '          class="text-shadow-default hover:text-shadow-lg mt-16 rounded-lg border-2 border-red-700 bg-red-600 px-4 py-2 text-md text-white transition duration-300 ease-in-out hover:bg-red-700"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '          Unfollow
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '      </form>
';
                $buffer .= $indent . '      ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
