<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(AdminMenuTableSeeder::class);
        $this->call(AdminPermissionsTableSeeder::class);
        $this->call(AdminRoleMenuTableSeeder::class);
        $this->call(AdminRolePermissionsTableSeeder::class);
        $this->call(AdminRoleUsersTableSeeder::class);
        $this->call(AdminRolesTableSeeder::class);
        $this->call(AdminUserPermissionsTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);
        $this->call(AnnouncementUsersTableSeeder::class);
        $this->call(AnnouncementsTableSeeder::class);
        $this->call(BanqueCreditsTableSeeder::class);
        $this->call(BanquePaymentsTableSeeder::class);
        $this->call(BanquesTableSeeder::class);
        $this->call(ContributionsTableSeeder::class);
        $this->call(CreditsTableSeeder::class);
        $this->call(ExpensesTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PaymentCreditsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PeriodsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PushSubscriptionsTableSeeder::class);
        $this->call(UserBanquesTableSeeder::class);
        $this->call(UserContributionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
