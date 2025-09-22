<?php
// database/seeders/NavLinkSeeder.php
namespace database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data to prevent duplicates on re-run
        DB::table('nav_links')->truncate();

        // Public and login/admin links
        DB::table('nav_links')->insert([
            // Main navigation links
            ['title' => 'Home', 'url' => '/', 'sort_order' => 1, 'is_admin_link' => false, 'is_right_aligned' => false],
            ['title' => 'Sezóny', 'url' => '/seasons', 'sort_order' => 2, 'is_admin_link' => false, 'is_right_aligned' => false],
            ['title' => 'Týmy', 'url' => '/teams', 'sort_order' => 3, 'is_admin_link' => false, 'is_right_aligned' => false],

            // Administration link (visible to all, leads to login or dashboard)
            ['title' => 'Administrace', 'url' => '/dashboard', 'sort_order' => 4, 'is_admin_link' => false, 'is_right_aligned' => true],
        ]);

        // Admin-only links (only shown when authenticated)
        DB::table('nav_links')->insert([
            ['title' => 'Správa článků', 'url' => '/admin/article', 'sort_order' => 1, 'is_admin_link' => true, 'is_right_aligned' => false],
            ['title' => 'Odhlásit', 'url' => '/logout', 'sort_order' => 2, 'is_admin_link' => true, 'is_right_aligned' => true],
        ]);
    }
}
