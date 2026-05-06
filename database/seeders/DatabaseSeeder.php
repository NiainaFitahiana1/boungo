<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Ad;
use App\Models\AdImage;
use App\Models\Favorite;
use App\Models\Comment;
use App\Models\View;
use App\Models\Apply;
use App\Models\Notification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Roles
        $roles = collect(['admin','user'])->map(function($name){
            return Role::firstOrCreate(['name' => $name]);
        });

        // Users (idempotent)
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin', 'password' => bcrypt('password')]
        );
        $admin->update(['role_id' => $roles->firstWhere('name','admin')->id]);

        $existingUsersCount = User::whereNotNull('id')->count();
        $toCreate = max(0, 4 - max(0, $existingUsersCount - 1));
        $users = collect();
        if($toCreate > 0){
            $users = User::factory($toCreate)->create();
        } else {
            $users = User::where('id', '!=', $admin->id)->limit(4)->get();
        }

        foreach($users as $u){
            $u->update(['role_id' => $roles->firstWhere('name','user')->id]);
        }

        // Ads and images
        foreach($users->take(3) as $u){
            $ads = Ad::factory(2)->make()->each(function($ad) use ($u){
                $ad->user_id = $u->id;
                $ad->save();
                AdImage::factory(2)->create(['ads_id' => $ad->id]);
            });
        }

        // Favorites / Views / Comments / Applies / Notifications (small sample)
        $firstAd = Ad::first();
        if($firstAd){
            Favorite::firstOrCreate([
                'user_id' => $admin->id,
                'ads_id' => $firstAd->id,
            ]);

            View::firstOrCreate([
                'user_id' => $admin->id,
                'ads_id' => $firstAd->id,
                'ip_address' => '127.0.0.1',
            ]);

            Comment::firstOrCreate([
                'user_id' => $admin->id,
                'ads_id' => $firstAd->id,
                'content' => 'Commentaire de démonstration',
            ]);

            Apply::firstOrCreate([
                'user_id' => $admin->id,
                'ads_id' => $firstAd->id,
            ], [
                'message' => 'Je suis intéressé par cette annonce.',
                'status' => 'pending',
            ]);

            Notification::firstOrCreate([
                'user_id' => $admin->id,
                'type' => 'system',
                'content' => 'Bienvenue sur la plateforme',
            ]);
        }
    }
}
