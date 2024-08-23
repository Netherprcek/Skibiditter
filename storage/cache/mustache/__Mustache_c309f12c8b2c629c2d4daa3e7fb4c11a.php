<?php

class __Mustache_c309f12c8b2c629c2d4daa3e7fb4c11a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<title>Register</title>
';
        if ($partial = $this->mustache->loadPartial('partials/header')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="flex min-h-screen items-center justify-center">
';
        $buffer .= $indent . '      <form
';
        $buffer .= $indent . '        action="/register"
';
        $buffer .= $indent . '        method="post"
';
        $buffer .= $indent . '        id="register_form"
';
        $buffer .= $indent . '        class="w-96 rounded-lg bg-gray-800 p-4"
';
        $buffer .= $indent . '      >
';
        $buffer .= $indent . '        <h1 class="mb-2 text-center text-2xl font-bold">Register</h1>
';
        $buffer .= $indent . '        <input
';
        $buffer .= $indent . '          type="text"
';
        $buffer .= $indent . '          name="username"
';
        $buffer .= $indent . '          id="username"
';
        $buffer .= $indent . '          class="mb-3 w-full rounded-md bg-gray-700 p-2"
';
        $buffer .= $indent . '          placeholder="Username"
';
        $buffer .= $indent . '        />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <input
';
        $buffer .= $indent . '          type="password"
';
        $buffer .= $indent . '          name="password"
';
        $buffer .= $indent . '          id="password"
';
        $buffer .= $indent . '          class="mb-3 w-full rounded-md bg-gray-700 p-2"
';
        $buffer .= $indent . '          placeholder="Password"
';
        $buffer .= $indent . '        />
';
        $buffer .= $indent . '        <input
';
        $buffer .= $indent . '          type="password"
';
        $buffer .= $indent . '          name="confirm_password"
';
        $buffer .= $indent . '          id="confirm_password"
';
        $buffer .= $indent . '          class="mb-4 w-full rounded-md bg-gray-700 p-2"
';
        $buffer .= $indent . '          placeholder="Confirm Password"
';
        $buffer .= $indent . '        />
';
        $buffer .= $indent . '        <div class="mb-4 flex justify-center">
';
        $buffer .= $indent . '          <button class="w-auto rounded-md bg-blue-500 p-2">Register</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . ' 
';
        $buffer .= $indent . '        <div class="flex flex-wrap text-sm">
';
        $buffer .= $indent . '          <p class="mb-1">Password requirements:</p>
';
        $buffer .= $indent . '          <ul class="list-disc pl-5">
';
        $buffer .= $indent . '            <li id="username_length" class="text-red-500">
';
        $buffer .= $indent . '              Username must be at least 3 characters long
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <li id="password_length" class="">
';
        $buffer .= $indent . '              Password must be longer than 6 characters
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <li id="password_uppercase" class="">
';
        $buffer .= $indent . '              Password must contain at least one uppercase letter
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </form>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <script src="/js/register.js"></script>
';
        $buffer .= $indent . '  </body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }
}
