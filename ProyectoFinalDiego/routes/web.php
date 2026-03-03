    <?php

    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\UserController;
    use Laravel\Socialite\Facades\Socialite;
    use App\Http\Controllers\ContactController;
    use App\Http\Controllers\PlayerController;
    use App\Http\Controllers\EventController;
    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\LegalController;
    use App\Http\Controllers\MessageController;
    use App\Http\Controllers\ShopController;
    use App\Http\Controllers\WhereController;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    use App\Models\User;


    Route::get('/', IndexController::class)->name('index');
    Route::get('shop', ShopController::class)->name('shop');

    Route::get('players/create', [PlayerController::class, 'create'])
        ->middleware('isadmin')
        ->name('players.create');
    Route::get('players/{player}', [PlayerController::class, 'show'])
        ->middleware('auth')
        ->name('players.show');
    Route::resource('players', PlayerController::class)->except(['create', 'show']);

    Route::get('events/create',  [EventController::class, 'create'])
        ->middleware('isadmin')
        ->name('events.create');
    Route::resource('events',  EventController::class)->except(['create']);
    Route::get('events/delete',  [EventController::class, 'delete'])->name('events.delete');

    Route::get('messages/index',  [MessageController::class, 'index'])
        ->middleware('isadmin')
        ->name('messages.index');
    Route::resource('messages',  MessageController::class)->except(['index']);

    Route::post('/events/{event}/player', [EventController::class, 'eventsPlayers'])->name('events.player')->middleware('isadmin');

    Route::get('events/likedisllike/{event}',  [EventController::class, 'likeDislike'])->name('events.likeDislike');

    Route::get('legal/privacity',  [LegalController::class, 'privacity'])->name('legal.privacity');
    Route::get('legal/usage',  [LegalController::class, 'usage'])->name('legal.usage');


    Route::get('signup', [LoginController::class, 'signupForm'])->name('signupForm');
    Route::post('signup', [LoginController::class, 'signup'])->name('signup');
    Route::get('login', [LoginController::class, 'loginForm'])->name('loginForm');
    Route::post('login', [LoginController::class, 'login'])->name('login');

    Route::delete('login/destroy', [LoginController::class, 'destroy'])->name('user.destroy');

    Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

    Route::get('account', [UserController::class, 'account'])->name('users.account')->middleware('auth');

    Route::get('users/list', [UserController::class, 'list'])->name('users.list')->middleware('isadmin');

    Route::get('where', WhereController::class)->name('where');

    Route::get('/google-auth/redirect', function () {
        return Socialite::driver('google')->redirect();
    })->name('googlepage');

    Route::get('/google-auth/callback', function () {
        $user_google = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $user_google->email)->first();

        if ($user) {
            $user->google_id = $user_google->id;
            $user->save();
        } else {
            $user = new User();
            $user->username = $user_google->name;
            $user->name = $user_google->name;
            $user->email = $user_google->email;
            $user->google_id = $user_google->id;
            $user->save();
        }

        Auth::login($user);
        return redirect()->route('users.account');
    });
