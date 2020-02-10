<?php

/**
 * MIT License
 *
 * Copyright (c) 2020 Filli Group (Einzelunternehmen)
 * Copyright (c) 2020 Filli IT (Einzelunternehmen)
 * Copyright (c) 2020 Ursin Filli
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Automatic Blade Optimizations
    |--------------------------------------------------------------------------
    |
    | This option enables minification of the blade views as they are
    | compiled. These optimizations have little impact on php processing time
    | as the optimizations are only applied once and are cached. This package
    | will do nothing by default to allow it to be used without minifying
    | pages automatically.
    |
    | Default: false
    |
    */

    'blade' => true,

    /*
    |--------------------------------------------------------------------------
    | Force Blade Optimizations
    |--------------------------------------------------------------------------
    |
    | This option forces blade minification on views where there such
    | minification may be dangerous. This should only be used if you are fully
    | aware of the potential issues this may cause. Obviously, this setting is
    | dependent on blade minification actually being enabled.
    |
    | PLEASE USE WITH CAUTION
    |
    | Default: false
    |
    */

    'force' => false,

    /*
    |--------------------------------------------------------------------------
    | Ignore Blade Files
    |--------------------------------------------------------------------------
    |
    | Here you can specify paths, which you don't want to minify.
    |
    */

    'ignore' => [
        'resources/views/emails',
        'resources/views/html',
        'resources/views/notifications',
        'resources/views/markdown',
        'resources/views/vendor/emails',
        'resources/views/vendor/html',
        'resources/views/vendor/notifications',
        'resources/views/vendor/markdown',
    ],

];
