<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Public links
        DB::table('nav_links')->insert([
            ['title' => 'Home', 'url' => '/', 'sort_order' => 1, 'is_admin_link' => false, 'is_right_aligned' => false],
            ['title' => 'Sezóny', 'url' => '/seasons', 'sort_order' => 2, 'is_admin_link' => false, 'is_right_aligned' => false],
            ['title' => 'Týmy', 'url' => '/teams', 'sort_order' => 3, 'is_admin_link' => false, 'is_right_aligned' => false],
            ['title' => 'Administrace', 'url' => '/admin', 'sort_order' => 4, 'is_admin_link' => false, 'is_right_aligned' => true],
        ]);

        // Get the ID of the 'Administrace' link to use as the parent for admin links
        $adminLinkId = DB::table('nav_links')->where('title', 'Administrace')->value('id');

        // Admin links
        DB::table('nav_links')->insert([
            ['title' => 'Odhlásit', 'url' => '/logout', 'sort_order' => 1, 'is_admin_link' => true, 'is_right_aligned' => true, 'parent_id' => $adminLinkId],
            ['title' => 'Správa článků', 'url' => '/admin/articles', 'sort_order' => 2, 'is_admin_link' => true, 'is_right_aligned' => false, 'parent_id' => $adminLinkId],
        ]);
    }
}
