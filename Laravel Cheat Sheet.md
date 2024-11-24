# Laravel Cheat Sheet 🛠️

## 1. Setup & Basics 🟢

### Project Setup
- Create a new Laravel project:
  ```bash
  composer create-project laravel/laravel folder_name
Install dependencies:
composer install
Update dependencies:
composer update
Start the development server:
php artisan serve
Change port:
php artisan serve --port=8080
Serve on all hosts:
php artisan serve --host=0.0.0.0
Environment Configuration
Generate application key:
php artisan key:generate
Check environment:
php artisan env
Artisan Basics
Display list of commands:
php artisan list
Get help for a command:
php artisan --help
Check version:
php artisan --version
2. Database Management 🟠
Migrations
Run migrations:
php artisan migrate
Create a new migration:
php artisan make:migration create_table_name
Rollback migrations:
php artisan migrate:rollback
Refresh migrations (rollback and re-run):
php artisan migrate:refresh
Seed the database:
php artisan db:seed
Run migrations and seed:
php artisan migrate --seed
Database Queries
Get all rows:
DB::table('users')->get();
Insert data:
DB::table('users')->insert(['name' => 'John', 'email' => 'john@example.com']);
Update data:
DB::table('users')->where('id', 1)->update(['name' => 'Jane']);
Delete data:
DB::table('users')->where('id', 1)->delete();
3. Routing 🟡
Basic Routing
Define a route:
Route::get('/home', function () {
    return 'Hello, World!';
});
Route to a controller:
Route::get('/home', [HomeController::class, 'index']);
Parameters
Route with parameters:
Route::get('/user/{id}', function ($id) {
    return 'User ID: ' . $id;
});
Optional parameter:
Route::get('/user/{id?}', function ($id = 'Guest') {
    return 'User ID: ' . $id;
});
Named Routes
Define a named route:
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Redirect using a named route:
return redirect()->route('profile');
4. Controllers & Middleware 🟣
Controllers
Create a controller:
php artisan make:controller UserController
Define a resource controller:
Route::resource('users', UserController::class);
Middleware
Create middleware:
php artisan make:middleware CheckRole
Apply middleware to a route:
Route::get('/admin', function () {
    // Admin only
})->middleware('auth');
5. Models & Eloquent 🔵
Models
Create a model:
php artisan make:model User
Querying data:
User::all();
User::find(1);
User::where('name', 'John')->get();
Relationships
Define relationships:
class Post extends Model {
    public function user() {
        return $this->belongsTo(User::class);
    }
}
Soft Deletes
Enable soft deletes:
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model {
    use SoftDeletes;
}
6. Views & Blade Templates 🟤
Passing Data to Views
Return a view:
return view('welcome', ['name' => 'John']);
Blade Syntax
Echo data:
{{ $name }}
If statements:
@if ($age > 18)
    You are an adult.
@else
    You are a minor.
@endif
Loops:
@foreach ($users as $user)
    <p>{{ $user->name }}</p>
@endforeach
7. Advanced Features 🟡
Tinker
Interact with your application:
php artisan tinker
Queues
Create a queue job:
php artisan make:job SendEmailJob
Start a queue worker:
php artisan queue:work
Events
Fire an event:
Event::dispatch(new UserRegistered($user));
Listen to an event:
Event::listen(UserRegistered::class, SendWelcomeEmail::class);
8. Caching & Optimization 🟣
Caching
Clear cache:
php artisan cache:clear
Remember cache:
Cache::remember('key', $minutes, function () {
    return 'value';
});
Optimization
Optimize the application:
php artisan optimize
9. Testing 🔴
Testing
Run tests:
php artisan test
Create a test:
php artisan make:test UserTest
Feel free to copy and paste this into your cheat.md file for a clean and structured Laravel cheat sheet! 🎉