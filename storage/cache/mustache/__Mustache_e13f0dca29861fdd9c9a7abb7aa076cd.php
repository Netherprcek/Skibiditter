<?php

class __Mustache_e13f0dca29861fdd9c9a7abb7aa076cd extends Mustache_Template
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
        $buffer .= $indent . '        class="mr-2 mt-4 h-24 w-24 rounded-full border-4 border-blue-700"
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
        $value = $this->resolveValue($context->findDot('profile.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</h2>
';
        $buffer .= $indent . '        <p class="text-gray-400">@';
        $value = $this->resolveValue($context->findDot('profile.username'), $context);
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
        $buffer .= $this->section3fd27263234f99fca22f6f88e09f5b98($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->findDot('profile.is_owner');
        if (empty($value)) {
            
            $buffer .= ' ';
            $value = $context->find('profile');
            $buffer .= $this->section79d63c704a3138f3204d825bcbfcd9a2($context, $indent, $value);
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="mt-4 text-gray-300" id="bio-container">
';
        $buffer .= $indent . '      <p  class="bio-text cursor-pointer">';
        $value = $this->resolveValue($context->findDot('profile.bio'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '</p>
';
        $value = $context->findDot('profile.is_owner');
        $buffer .= $this->section5b3435e16925409197b86e698673cf73($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- User stats -->
';
        $buffer .= $indent . '    <div class="mt-4 flex text-gray-400">
';
        $buffer .= $indent . '      <div class="mr-6">
';
        $buffer .= $indent . '        <a href="/';
        $value = $this->resolveValue($context->findDot('profile.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '/following" class="font-bold text-white">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('profile.following'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= ' Following
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="mr-6">
';
        $buffer .= $indent . '        <a href="/';
        $value = $this->resolveValue($context->findDot('profile.username'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= '/followers" class="font-bold text-white">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('profile.followers'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
        $buffer .= ' Followers
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '  document.addEventListener("DOMContentLoaded", function () {
';
        $buffer .= $indent . '    const bioText = document.getElementsByClassName("bio-text");
';
        $buffer .= $indent . '    const bioForm = document.getElementById("bio-form");
';
        $buffer .= $indent . '    const bioTextarea = document.getElementById("bio-textarea");
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    bioText.addEventListener("click", function () {
';
        $buffer .= $indent . '      bioTextarea.value = bioText.textContent;
';
        $buffer .= $indent . '      bioText.classList.add("hidden");
';
        $buffer .= $indent . '      bioForm.classList.remove("hidden");
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '  });
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function section3fd27263234f99fca22f6f88e09f5b98(Mustache_Context $context, $indent, $value)
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

    private function section79d63c704a3138f3204d825bcbfcd9a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="mt-16">{{> partials/followButton}}</div>
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
                $buffer .= $indent . '      <div class="mt-16">';
                if ($partial = $this->mustache->loadPartial('partials/followButton')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</div>
';
                $buffer .= $indent . '      ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b3435e16925409197b86e698673cf73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{^profile.bio}}
      <p class="bio-text cursor-pointer">No bio yet</p>
      {{/profile.bio}}
      <form
        id="bio-form"
        action="/{{username}}/edit-profile"
        method="POST"
        class="hidden"
      >
        <textarea
          id="bio-textarea"
          name="bio"
          class="w-full resize-none overflow-hidden rounded-lg bg-gray-600 p-2 text-white"
        ></textarea>
        <button
          type="submit"
          id="update-bio-button"
          class="mt-2 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700"
        >
          Update
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
                
                $value = $context->findDot('profile.bio');
                if (empty($value)) {
                    
                    $buffer .= $indent . '      <p class="bio-text cursor-pointer">No bio yet</p>
';
                }
                $buffer .= $indent . '      <form
';
                $buffer .= $indent . '        id="bio-form"
';
                $buffer .= $indent . '        action="/';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 3, 'UTF-8'));
                $buffer .= '/edit-profile"
';
                $buffer .= $indent . '        method="POST"
';
                $buffer .= $indent . '        class="hidden"
';
                $buffer .= $indent . '      >
';
                $buffer .= $indent . '        <textarea
';
                $buffer .= $indent . '          id="bio-textarea"
';
                $buffer .= $indent . '          name="bio"
';
                $buffer .= $indent . '          class="w-full resize-none overflow-hidden rounded-lg bg-gray-600 p-2 text-white"
';
                $buffer .= $indent . '        ></textarea>
';
                $buffer .= $indent . '        <button
';
                $buffer .= $indent . '          type="submit"
';
                $buffer .= $indent . '          id="update-bio-button"
';
                $buffer .= $indent . '          class="mt-2 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '          Update
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '      </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
