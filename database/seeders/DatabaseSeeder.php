<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedUsers();
        $this->seedEmployees();
        $this->seedAdmins();
        $this->seedVacancies();
        $this->seedClients();
        $this->seedBranches();
        $this->seedTestimonials();
        $this->seedServices();
    }

    private function seedUsers()
    {
        DB::table('users')->insert([
            [
                'Username' => 'user1',
                'Password' => Hash::make('password1'),
                'Role' => 'employee',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Username' => 'user2',
                'Password' => Hash::make('password2'),
                'Role' => 'employee',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Username' => 'admin1',
                'Password' => Hash::make('adminpassword1'),
                'Role' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function seedEmployees()
    {
        DB::table('employees')->insert([
            [
                'UserID' => 1,
                'EmployeeName' => 'Employee 1',
                'Address' => 'Address 1',
                'ContactNumber' => '123456789',
                'EmployeeCode' => 'EMP001',
                'Department' => 'HR',
                'Role' => 'HR Executive',
                'Photo' => 'employee1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 2,
                'EmployeeName' => 'Employee 2',
                'Address' => 'Address 2',
                'ContactNumber' => '987654321',
                'EmployeeCode' => 'EMP002',
                'Department' => 'IT',
                'Role' => 'Software Engineer',
                'Photo' => 'employee2.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function seedAdmins()
    {
        DB::table('admins')->insert([
            [
                'UserID' => 3,
                'AdminName' => 'Admin 1',
                'Department' => 'Finance',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function seedVacancies()
    {
        DB::table('vacancies')->insert([
            [
                'JobTitle' => 'HR Manager',
                'JobDescription' => 'We are looking for an experienced HR Manager...',
                'DatePosted' => Carbon::now()->toDateString(),
                'Status' => 'Open',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'JobTitle' => 'Software Engineer',
                'JobDescription' => 'We are hiring a Software Engineer to join our team...',
                'DatePosted' => Carbon::now()->toDateString(),
                'Status' => 'Open',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function seedClients()
    {
        DB::table('clients')->insert([
            [
                'ClientName' => 'Client 1',
                'ServicesAvailed' => 'Service A, Service B',
                'StaffAssigned' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'ClientName' => 'Client 2',
                'ServicesAvailed' => 'Service C, Service D',
                'StaffAssigned' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function seedBranches()
    {
        DB::table('branches')->insert([
            [
                'Region' => 'North',
                'Address' => 'Address in North',
                'ContactDetails' => 'Contact North',
                'ContactPerson' => 'Contact Person North',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Region' => 'South',
                'Address' => 'Address in South',
                'ContactDetails' => 'Contact South',
                'ContactPerson' => 'Contact Person South',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function seedTestimonials()
    {
        DB::table('testimonials')->insert([
            [
                'ClientID' => 1,
                'TestimonialText' => 'Great service! We are very satisfied with their work.',
                'DateAdded' => Carbon::now()->toDateString(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'ClientID' => 2,
                'TestimonialText' => 'Excellent team! They exceeded our expectations.',
                'DateAdded' => Carbon::now()->toDateString(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function seedServices()
    {
        DB::table('services')->insert([
            [
                'ServiceName' => 'Service A',
                'ServiceDescription' => 'Description of Service A...',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'ServiceName' => 'Service B',
                'ServiceDescription' => 'Description of Service B...',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
