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
                'name' => 'Son',
                'email' => 'user1',
                'Password' => 'password1',
                'Role' => 'employee',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dung',
                'email' => 'user2',
                'Password' => 'password2',
                'Role' => 'employee',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ha',
                'email' => 'admin1',
                'Password' => 'password1',
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
                'ServiceName' => 'Manned guarding',
                'ServiceDescription' => 'Star Security provides a comprehensive range of solutions to secure assets and people. Our experienced and NSI & SIRA-licensed guards and bouncers are trained to handle a variety of situations, resolving conflicts, acting and reacting in an emergency from crowd control to emergency response & evacuation. They are also equipped with customised training to suit the specific requirements of each customer, making them the perfect choice for concerts, events, VIP security operations, control room operations, building patrols, visitor management and more. Star Security is your reliable and integrated partner, providing on-the-spot protection against all risks.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'ServiceName' => 'Cash Service',
                'ServiceDescription' => 'The service range of the Cash Services division includes secured transfer of cash and valuables, ATM replenishment, Vaulting and Processing Services, multi-point cash collection and Caretaker Services
                ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'ServiceName' => 'Recruitment and training',
                'ServiceDescription' => 'People Are The Lifeblood Of Every Company. No Matter What Your Mission Is, No Matter What Challenge You’re Facing, Having The Right Employees In Your Ranks Can Lead You To Success. But If Your Recruiting And Talent Acquisition Teams Aren’t Optimized And Upskilled, The Odds Of Finding, Hiring, And Retaining The Best People Are Drastically Reduced.

                Recruiters Are The Gatekeepers Of Talent. By Ensuring That They Are Trained To Understand The Market And Your Organizational Goals, Provide A Stellar Interview Experience, Remove Bias, And Expand Their Scope Of Sourcing, You Open The Floodgates To Star Candidates.
                
                ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'ServiceName' => 'Electronic security systems',
                'ServiceDescription' => 'This division works in close association with SISs strategic partners i.e. reputed system integrators & installers. The primary area of activity for this division is design, installation and maintenance of Access control systems, CCTVs, fire alarm systems, fire suppression systems, intruder/burglar alarms, perimeter protection systems, etc. The division aims at marketing its products to the existing customer base. ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
