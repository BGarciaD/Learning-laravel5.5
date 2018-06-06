## About this Project

This is a project based on a laravel 5.5 tutorial I'm doing at the moment. Not a tutorial itself explaining Laravel.

This is the tutorial I'm following https://styde.net/laravel-5/ (spanish)

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Lessons

## Lesson 7

<div>
    <h5>Templates with Blade</h5>
    <ul>
        <li>{{$variable}} => Use {{}} to print variables</li>
        <li>@directive => Blade directives are written with @ at the beggining</li>
        <li>@foreach($variable in $variables)...@endforeach => Use @foreach and @endforeach to loop over data</li>
        <li>@forelse()$varaible in $variables)...@empty...@endforelse => Use @forelse, @empty and @endforelse to give a default result in case the variable is empty</li>
        <li>@for($variable = something; $varriable condition; $varriable increment or decrement)...@endfor => Use @for and @endfor to loop over data</li>
        <li>@if(condition)...@endif => Use @if and @endif for conditional sentences</li>
        <li>@if(condition)...@else...@endif => Use @if, @else and @endif for conditional sentences</li>
        <li>@if(condition)...@elseif...@else...@endif => Use @if, @elseif, @else and @endif for conditional sentences</li>
        <li>@unless(condition)...@else...@endunless => Use @unless, @else and @endunless for inverted conditional sentences</li>
        <li>@empty($variable)...@else...@endempty => Use @empty, @else and @endempty for conditional sentences when checking If a variable is empty. @empty($variable) is a shorthand for @if(empty($variable))</li>
    </ul>
</div>

## Lesson 8

<div>
    <h5>Layouts with Blade</h5>
    <ul>
        <li>@include('file_name') => Directive used to import the code of a file passing the name of the file</li>
        <li>@yield('section_name') => Directive used to import code from a section of a file wrapped by the @section and @endsection</li>
        <li>@section('section_name') / @endsection => Directives used to create a section wich will be imported later with @yield</li>
        <li>@extends => Directive necessary to import sections with @yield. It is used in those files where you have declared sections with @section</li>
    </ul>
</div>

## Lesson 9 

<div>
    <h5>Introduction to Data Bases with Laravel</h5>
    <ul>
        <li>php artisan migrate => Executes all migrations</li>
    </ul>
</div>

## Lesson 10

<div>
    <h5>Migrations</h5>
    <ul>
        <li>php artisan make:migration [migration_name] => Creates an empty migration (Laravel adds a timestamp on the name)</li>
        <li>php artisan migrate => Run migrations (Those migrations can't be run again with this command)</li>
        <li>php artisan migrate:rollback => Rollback the last batch of migrations</li>
        <li>php artisan migrate:reset => Runs a rollback for all migrations</li>
        <li>php artisan migrate:refresh => Runs a reset and then a migrate</li>
    </ul>
</div>

## Lesson 11

<div>
    <h5>Creatig tables and associations with migrations and foreign keys</h5>
    <ul>
        <li>php artisan make:migration [create_name_table] => Creates a migration with an id and timestamp field </li>
        <li>$table->foreign('foreign_key')->references('id')->on('id_table') => Creates a foreign key oon the designated table ofr the designated field</li>
        <li>php artisan migrate:fresh => Will drop all tables from the database and then execute migrate</li>
    </ul>
</div>

## Lesson 12

<div>
    <h5>Inserting data with Seeders</h5>
    <ul>
        <li>php artisna make:seeder seeder_name => Creates the initial structure for a seeder</li>
        <li>use Illuminate\Support\Facades\DB; => Needed in order to use DB</li>
        <li>DB::table('table_name')->insert([ 'key' => 'value', ]) => Directive to insert an associative array of data</li>
        <li>$this->call(ProfessionSeeder::class) => Add this call in DatabaseSeeder run method in order to call the seed with db:seed command</li>
        <li>php artisan db:seed => Command to execute seeds</li>
        <li>DB::table('table_name')->truncate(); => If we want to delete data from a table but without deleting the table use truncate method</li>
        <li>DB::statements('SET FOREIGN_KEY_CHECKS = 0'); => If you want to truncate a table with a foreign key first you can disable the foreign key and restore it again after the truncate => DB::statements('SET FOREIGN_KEY_CHECKS = 1'); | This code can be placed in every seed OR can be placed in DatabaseSeeder once</li>
    </ul>
</div>

## Lesson 13

<div>
    <h5>SQL query builder</h5>
    <ul>
        <li>DB::insert('INSERT INTO table (table_cols) VALUES ("values")') => Direct SQL sentence</li>
        <li>DB::insert('INSERT INTO table (table_cols) VALUES (?)', ['values']) => Direct SQL sentence protected from SQL Injections</li>
        <li>DB::insert('INSERT INTO table (table_cols) VALUES (:key)', ['key' => 'value']) => Direct SQL sentence protected from SQL Injections with parameter substitution</li>
        <li>DB::select('SELECT value FROM table WHERE key = value') => Select sentence</li>
        <li>DB::table('table_name')->select('col_name')=> Select sentence with Laravel Query Builder</li>
        <li>DB::table('table_name')->select('col_name')->take(1)=> Select sentence with Laravel Query Builder taking one record</li>
        <li>DB::table('table_name')->select('col_name')->first()=> Select sentence with Laravel Query Builder taking the first record</li>
        <li>DB::table('table_name')->select('col_name')->where('key', 'operator', 'value')=> Select sentence with Laravel Query Builder using where clause</li>
        <li>DB::table('table_name')->select('col_name')->where('key', 'value') => Select sentence with Laravel Query Builder using where clause</li>
        <li>DB::table('table_name')->select('col_name')->where(['key' => 'value'])=> Select sentence with Laravel Query Builder using where clause treating data as an associative array</li>
        <li>DB::table('table_name')->select('col_name')->whereKeyname('value') => Select sentence with Laravel Query Builder using where clause including the key name</li>
        <li>DB::table('table_name')->where('key', 'value')->value('key') => Select sentence with Laravel Query Builder without select clause and getting an specific value</li>
    </ul>
</div>

## Lesson 14

<div>
    <h5>Introduction to ORM Eloquent</h5>
    <ul>
    <li>php artisan make:model [ModelName] => Command to create a model. By convention, the "snake case", plural name of the class will be used as the table name unless another name is explicitly specified. So, in this case, Eloquent will assume the Flight model stores records in the flights table</li>
    <li>App\ModelName::create([Array of fields]) => Eloquent command to insert data</li>
    </ul>
</div>