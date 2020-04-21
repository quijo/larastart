@extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Laravel vue tutorial</h1>
        <h2>Lesson 1</h2>
        <p>install laravel</p>

        <h2>Lesson 2</h2>
        <ul>
            <li>source- https://www.youtube.com/watch?v=CowsopJhX3M&list=PLB4AdipoHpxaHDLIaMdtro1eXnQtl_UvE&index=2</li>
            <li>intall frontend vue scafolding --composer require laravel/ui --php artisan ui vue ---php artisan ui vue --auth</li>
            <li>setup database</li>
            <li>intall admin lte: npm install admin-lte@^3.0 --save</li>
            <li>migrate database: php artisan migrate; if problem happens edit app/providers/appserviceprovider/Schema::dgaultsStringLength(191)</li>
            <li>add at AppServiceProvider.php - use\Illuminate\Support\Schema; </li>
            <li>run php artisan migrate:fresh -- remigrate everything</li>
            <li>check databes</li>
            <li>register</li>
            <li>create new php file in layouts --master.blade.php -- this will contain the master template</li>
            <li>copy adminlte html code</li>
            <li>add:<!--<script src="/js/app.js"><script>--></li>
            <li>add stylesheet /css/app.css</li>
            <li>Remove: fontawesome css etc</li>
            <li>Edit home.blade.php/ replace to -extends('layouts.master') it will blowup</li>
            <li>open resources/js/bootstrap.js --add line require('admin-lte')</li>
            <li>css configuration: open resource/sass/app.scss add line (at)import '~admin-lte/dist/css/adminlte.css'</li>
        </ul>

        <h2>Lesson 3/54</h2>
        <ul>
            <li>Edit icons https://www.youtube.com/watch?v=cKhTwApvuyw&list=PLB4AdipoHpxaHDLIaMdtro1eXnQtl_UvE&index=3</li>
            <li>npm install --save (at)fortawesome/fontawesome-free</li>
            <li>add line to (a)import varaibles $fa-font-path:"../webfonts";</li>
            <li>add linse to bootrap 
                (a)import '/~(a)fortawesome/fontawesome-free/scss/fontawesome.scss';(a)import '(a)fortawesome/fontawesome-free/scss/solid.scss';(a)import '/~(@)fortawesome/fontawesome-free/scss/brandd.scss';
            </li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

        </ul>
    </div>
    @endsection
