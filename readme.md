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

##Lesson 6

<div>
    <h5>Views with Laravel</h5>
    <ul>
        <li>resources/views => That's the locations of the views. In order to create one you can just create a file manually with the extension .php (or .blade.php)</li>
        <li>return view('view_name') => In order to return a view from a controller we have to use the view helper and include the name of the view (no need to include the extension). The name of the view is relative to the view folder</li>
        <li>return view('view_name', ['key' => 'variable']) => If we want to send a variable to the view we can pass it as a second argument as an associative array</li>
        <li>return view('view_name')->with([associative_array]) => Another way to pass variables to a view. It is possible to concatenate ->with() sending the variables seperately</li>
        <li>return view('view_name', compact('variable_name',...)) => Another way to send an associative array is by using the helper compact. Compact will transform everything inside the parenthesis into an associative array</li>
        <li>e($variable) => e is a helper to escape a variable. This way we make sure no inserted code is executed</li>
    </ul>
</div>

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
    <li>use App\ModelName => Importing model</li>
    <li>ModelName::create([Array of fields]) => Another way to insert data with Eloquent ORM if we have imported the model needed</li>
    <li>ModelName::all() => Select all the content of the referenced table</li>
    <li>ModelName::where(Condition) => Select with Eloquent. The where method doesn't exist in the class Model but Laravel works with magic methods that will find the where method</li>
    <li>protected $table = 'table_name'; => Used inside a model if we want to use a Model with a name different than the table name.</li>
    <li>public $timestamp = false; => Used inside the model to avoid loading created at and updated at data into the table after commenting the timestamps method at the migration</li>
    </ul>
</div>

## Lesson 15

<div>
    <h5>Using Eloquent ORM with Tinker</h5>
    <ul>
        <li>php artisan tinker => Command to use the command console. We can interact with classes and methods with this console</li>
        <li>[path_to_class]::all(); => Inside the tinker console this command shows the selected class data</li>
        <li>exit => Using exit we exit the tinker console</li>
        <li>use [path_to_class]; => With this command we can import the class and now we don't need to use the path when using the directive all()</li>
        <li>[class_name]::get(); => We can also use get method to show all data</li>
        <li>$variable = [class]::all(); => We can declare variables and show its content just printing $variable;</li>
        <li>$variable->first() => Get first record from the array of data</li>
        <li>$variable->last() => Get the last record from the array of data</li>
        <li>$variable->random(1) => Get one random record from the array of data. We can set the number of records we want to get randomly</li>
        <li>$variable->pluck('column_name'); => Get all the records from the named column</li>
        <li>https://laravel.com/docs/5.5/eloquent-collections#available-methods => All methods for eloquent collections</li>
        <li>Collection(['value', 'value', 'value']) => Creates a collection</li>
        <li>$varaible->where('key', 'value') or $variable = Class::where('key', 'value') => Using where with tinker console</li>
        <li>Class::find(id) => Using find we can find records. The value inside the find method is the value of the id of the table</li>
        <li>$variable->method_name => We can call a class method from the tinker console. This method can be static or not</li>
    </ul>
</div>

## Lesson 16

<div>
    <h5>Managing attributes with Eloquent ORM</h5>
    <ul>
        <li>protected $fillable[Array of Columns] => With this attribute set at our Models we can avoid the massive assingment problem telling laravel what columns of our table will be assinged using an array of data</li>
        <li>$class_object->attribute_name => Command to read an attribute</li>
        <li>$class_object->attribute_name = value => Assinging a single attribute</li>
        <li>$class_object->save(); => This command is used to save data. It can't be used with the class itself, it must be used with objects of a class</li>
        <li>$class_object->exists => This directive shows If the record exists or not. This is used by Eloquent internally to decide whether to execute an update or an insert</li>
        <li>$class_object->delete(); => This will delete the record from the DB</li>
    </ul>
</div>

## Lesson 17

<div>
    <h5>Relations with Eloquent ORM</h5>
    <ul>
        <li>Class::where('column_name', value) => Getting data related to another class</li>
        <li>public function [class_name]() { return $this->belongsTo([class_name]::class)} => Withi this method we are relating this class with another one. By default Eloquent determines the name of the foreign key with the name of the method followed by _id</li>
        <li>public function [class_name]() { return $this->belongsTo([class_name]::class, 'column_name')} => If the foreign key is not called [class_name]_id then we can pass the name of the foreign key as parameter. Calling this method will return a model object </li>
        <li>public function [class_name]() { return $this->belongsTo([class_name]::class, 'child_column_name', 'parent_column_name')} => If the parent class primary key is not called 'id' then we can specify with a third parameter (parent_colum_name) the name of the primary key. </li>
        <li>public function [plural_class_name]() { return $this->hasMany([class_name]::class) } => Method to relate two class models in a one to many relationship. Calling this method will return a collection</li>
        <li>$variable->method()->where('column_name', value)->get() => We can build a query using a class method. This can help us to query data beetween different classes.</li>
        <li>Class::where([conditions])->get => This way we could get the same result without the method of the class</li>
    </ul>
</div>

## Lesson 18

<div>
    <h5>Model Factories</h5>
    <ul>
        <li>factory(Class_Name::class)->create() => This command creates a random registry for the class selected using tinker</li>
        <li>factory(Class_Name::class)->create(['key' => 'value', ...]) => We can pass some values we want to overwrite or values that the factory doesn't generate</li>
        <li>factory(Class_Name::class, Number)->create() => We can create an specific number of registries passing a number to the factory function</li>
        <li>factory(Class_Name::class)->times(Number)->create() => Another way to create multiple registries</li>
        <li>php artisan make:factory FactoryName => We can create factories with this Laravel command</li>
        <li>'key' => $faker->faker_type => This way we can specify the type of data Faker will generate inside the function of the factory file</li>
        <li>php artisan make:factory FactoryName --model=ModelName</li>
        <li>php artisan make:model ModelName -mf => This command allows us to create a model, a migration and a factory at once</li>
    </ul>
    <h5>Documentation</h5>
    <ul>
        <li>https://github.com/fzaninotto/Faker => Faker documentation</li>
    </ul>
</div>

##Lesson 20

<div>
    <h5>Listing</h5>
    <ul>
        <li>$users = DB::table('users')->get() => Changing the static list of users for a dynamic list of users obtained from the DB </li>
        <li>$users->name => Changed the way to display the name of the users</li>
        <li>$users = User::all(); => We can also use Eloquent to get all the users. ALso if we use Eloquent and we then try to display the objects like $user in the view we wouldn't get an error because If we try to display something like a string but it's not a String Eloquent tries to convert it to a string</li>
    </ul>
</div>

##Lesson 21

<div>
    <h5>Databases configuration and usage with Laravel and PHPUnit</h5>
    <ul>
        <li>Now  our tests fails because we use dynamic data taken from the db. We could use the factories to create the users our tests expects but then the test for no users would fail and If we truncate the table before doing the tests we wouldn't see any users on our web. So first we create a secondary database just for tests. In my case is called "laravel_tutorial_test"</li>
        <li>Create a new enviroment variable in phpunit.xml => New enviroment variable pointing to a tests database so we can run the tests without affecting the production database</li>
        <li>use RefreshDatabase => A statement used in the tests class in order to create transactions when testing that will roll back at the end there for it is not necessary to truncate the test for no users</li>
    </ul>
</div>

##Lesson 22

<div>
    <h5>Details or Users profile</h5>
    <ul>
        <li>Users::find($id) => Find is an eloquent method that finds an specific register by its ID</li>
    </ul>
</div>

##Lesson 23

<div>
    <h5>Generating URL's in Laravel</h5>
    <ul>
        <li>href="{{ url('/users/' . $user->id) }}" => With the Laravel helper url we can create links to different parts of our web</li>
        <li>href="{{ url("/users/$user->id") }}" => We can also use double quotation marks but in this case we don't need to concatenate he user's id</li>
        <li>href="{{url()->previous()}}" => We can also use the method previous() to return to the previous page</li>
        <li>href="{{ action('UserController@index') }}" => We can also use the action helper to redirect to an specific page of our web using the controller and the method names as arguments</li>
        <li>href="{{ action('UserController@showUserDetails', [ 'id' => $user->id]) }}" => In order to pass a parameter with the action helper we can use an associative array</li>
        <li>Route::get('/users', 'UserController@index')->name('users.index'); => We can give a name to every route in order to avoid problems with the links when changing the route itseslf or changing the controller or the action</li>
        <li>href="{{ route('users.show', [ 'id' => $user->id]) }}" => Now we can use the name of the route to redirect with our links</li>
    </ul>
</div>

##Lesson 24

<div>
    <h5>Handling Errors</h5>
    <ul>
        <li>response()->view('viewname, [data], 404') => Command to specify the code of the error to the view in order to pass the test</li>
        <li>Model::findOrFail($id) => This method searches for the specified register and If it doesn't find it it will display a custome laravel error message. But If you have a folder called errors and inside a file called 404 it will display this one</li>
    </ul>

##Lesson 25

<div>
    <h5>Implicit Route Model Binding</h5>
    <ul>
        <li>Route::get('/route/{modelName}', 'Controller@action') => We can bind a route with an Eloquent model like this. Instead of writing the name of the variable in the action of the controller we write the name of the model</li>
        <li>public function actionName(modelName $modelName) => Now in the controller we recieve an object of that model. Keep in mind that Laravel will assume the primary key so we'll have to pass it through the URL</li>
    </ul>

##Lesson 26

<div>
    <h5>POST routes and protection against CSRF attacks</h5>
    <ul>
        <li>Route::post() => We've been using GET method to get and display information. But now we want to store data in the DB so we use the POST method to send the data</li>
        <li>{{ csrf_field()}} => This method used inside a form will display an invisible input with the token needed to do post request. This is important because Laravel doesn't allow to do post requests just with the url in order to protect the application from csrf attacks</li>
        <li>Route::get('/route/test'); Route::post('/route/test') => We can use two routes with the mase URL but different method</li>
    </ul>

##Lesson 27

<div>
    <h5>Creating records with Laravel and TDD</h5>
    <ul>
        <li>$this->post('route', [data]) => With this method we can simulate POST requests</li>
        <li>->assertDatabaseHas('Model', [data]) => With this method we can check If a record exists or not in our DB</li>
        <li>$request->all() => With request() method we can retrieve inputs sent with a POST method. With all() method we retrieve all input data</li>
        <li>redirect() => With redirect() method we can redirect to another route followed by route() method for example</li>
        <li>->assertCredentials([data]) => With this method we can check fields like an encrypted password we wouldn't be able to check with ->assertDatabaseHas() just passing an array of data</li>
    </ul>

##Lesson 28

<div>
    <h5>Desiging form to create users</h5>

##Lesson 29

<div>
    <h5>Validating data from http requests and TDD</h5>
    <ul>
        <li>$this->assertDatabaseMissing('Model', [data]) => With this method we can look for an specific record and check If exists or not</li>
        <li>assertSessionHasErrors(['error_name']) => This method expects a field with the name specified in the list of errors </li>
        <li>assertSessionHasErrors(['error_name' => 'some_message']) => Same method but specifying the message it should recieve</li>
        <li>->withErrors(['error_name' => 'error_message']) => Method to send an array of errors when redirecting</li>
        <li>->validate(['field_name' => 'validation_rules']) => Method to validate post fields assinging validation rules</li>
        <li>->validate(['field_name' => 'validation_rules'], ]['field_name.rule_name' => 'message']) => Same method but including a response message</li>
        <li>->assertEquals(0, Model::count()) => Method to check if an specified value matches with a database query</li>
    </ul>  

##Lesson 30

<div>
    <h5>Creating records with Laravel and TDD</h5>
    <ul>
        <li>$errors => Variable that contains the errors</li>
        <li>$errors->any() => With any() method we can get all errors</li>
        <li>old('field_name') => The old method will pull the previously flashed input data from the session</li>
        <li>required => Rule that makes a field mandatory</li>
        <li>unique => Rule that makes a field unique. Non repeteable</li>
        <li>min => Rule to specify the minimal length for a field</li>
    </ul>  

## How to use Phpmyadmin in a remote computer
https://stackoverflow.com/questions/16801573/how-to-access-remote-server-with-local-phpmyadmin-client
