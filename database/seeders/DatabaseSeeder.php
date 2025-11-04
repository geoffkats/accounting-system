<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@codeacademy.ug',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Create Accountant User
        $accountant = User::create([
            'name' => 'Accountant User',
            'email' => 'accountant@codeacademy.ug',
            'password' => bcrypt('password'),
            'role' => 'accountant',
        ]);

        // Create Company Settings
        \App\Models\CompanySetting::create([
            'company_name' => 'Code Academy Uganda',
            'company_address' => 'Kampala, Uganda',
            'company_phone' => '+256-XXX-XXXXXX',
            'company_email' => 'info@codeacademy.ug',
            'company_website' => 'https://codeacademy.ug',
            'currency' => 'UGX',
            'currency_symbol' => 'UGX',
            'fiscal_year_start' => now()->startOfYear(),
            'fiscal_year_end' => now()->endOfYear(),
            'timezone' => 'Africa/Kampala',
            'date_format' => 'Y-m-d',
        ]);

        // Create Chart of Accounts
        $accounts = [
            // Assets
            ['code' => '1000', 'name' => 'Cash', 'type' => 'asset', 'description' => 'Cash on hand'],
            ['code' => '1100', 'name' => 'Bank Account', 'type' => 'asset', 'description' => 'Bank deposits'],
            ['code' => '1200', 'name' => 'Accounts Receivable', 'type' => 'asset', 'description' => 'Money owed by customers'],
            
            // Liabilities
            ['code' => '2000', 'name' => 'Accounts Payable', 'type' => 'liability', 'description' => 'Money owed to vendors'],
            ['code' => '2100', 'name' => 'Loans Payable', 'type' => 'liability', 'description' => 'Outstanding loans'],
            
            // Equity
            ['code' => '3000', 'name' => 'Owner\'s Equity', 'type' => 'equity', 'description' => 'Owner\'s investment'],
            ['code' => '3100', 'name' => 'Retained Earnings', 'type' => 'equity', 'description' => 'Accumulated profits'],
            
            // Income
            ['code' => '4000', 'name' => 'Program Fees', 'type' => 'income', 'description' => 'Revenue from programs'],
            ['code' => '4100', 'name' => 'Donations', 'type' => 'income', 'description' => 'Donation income'],
            ['code' => '4200', 'name' => 'Grants', 'type' => 'income', 'description' => 'Grant income'],
            
            // Expenses
            ['code' => '5000', 'name' => 'Salaries & Wages', 'type' => 'expense', 'description' => 'Staff compensation'],
            ['code' => '5100', 'name' => 'Rent', 'type' => 'expense', 'description' => 'Facility rent'],
            ['code' => '5200', 'name' => 'Utilities', 'type' => 'expense', 'description' => 'Electricity, water, internet'],
            ['code' => '5300', 'name' => 'Supplies', 'type' => 'expense', 'description' => 'Office and program supplies'],
            ['code' => '5400', 'name' => 'Marketing', 'type' => 'expense', 'description' => 'Marketing and advertising'],
            ['code' => '5500', 'name' => 'Training Materials', 'type' => 'expense', 'description' => 'Educational materials'],
            ['code' => '5600', 'name' => 'Equipment', 'type' => 'expense', 'description' => 'Computers and equipment'],
        ];

        foreach ($accounts as $account) {
            \App\Models\Account::create($account);
        }

      
    }
}
