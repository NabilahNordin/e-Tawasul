<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Process;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }


    public static function playwrightscrapelogin($username , $password)
    {
        $username = "2225498";
        $password = "jOB1Te_H7";
        $scriptPath = resource_path('scripts/crawl-login.js');

        // Pass variables as arguments after the script path
        $result = Process::run("node \"$scriptPath\" $username $password");

        $output = $result->output();
        dd($output);

        return json_decode($output);
        // if($output){
        //     return $output ;
        // }
        // $userData = json_decode($output, true);
        // dd($userData);
    }



    public static function api_login($username, $password)
    {
        $baseUrl = 'https://api.quddus.my/api';
        $response = Http::post("{$baseUrl}/auth/login", [
            'username' => $username,
            'password' => $password,
        ]);

        if ($response->successful()) {
            return $response->json()['data']['token'];
        }

        // throw new \Exception($response->json()['message'] ?? 'Login failed');
        return false;
    }

    /**
     * Step 2: Fetch Profile using the token
     */
    public static function api_getProfile($token)
    {
        $baseUrl = 'https://api.quddus.my/api';
        $response = Http::withToken($token)
            ->get("{$baseUrl}/profile");

        return $response->json();
    }
}
