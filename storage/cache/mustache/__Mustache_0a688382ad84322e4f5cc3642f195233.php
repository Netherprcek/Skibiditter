<?php

class __Mustache_0a688382ad84322e4f5cc3642f195233 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  class="fixed left-0 right-0 top-0 z-10 flex items-center justify-between bg-gray-800 p-4"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '  <div class="w-1/3"></div>
';
        $buffer .= $indent . '  <a href="/" class="text-2xl font-bold text-blue-500">SKIBIDITTER</a>
';
        $buffer .= $indent . '  <div class="hidden w-1/3 justify-end">
';
        $buffer .= $indent . '    <a href="/login" class="flex justify-end">
';
        $buffer .= $indent . '      <button class="rounded-md bg-blue-500 px-4 py-2 text-white">Login</button>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <a href="/register" class="ml-4 flex justify-end">
';
        $buffer .= $indent . '      <button class="rounded-md bg-blue-500 px-4 py-2 text-white">
';
        $buffer .= $indent . '        Register
';
        $buffer .= $indent . '      </button>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div class="flex w-1/3 justify-end">
';
        $buffer .= $indent . '    <button class="rounded-md bg-blue-500 px-4 py-2 text-white">Logout</button>
';
        $buffer .= $indent . '    <img src="/img/user.png" alt="User" class="h-10 w-10 rounded-full" />
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
