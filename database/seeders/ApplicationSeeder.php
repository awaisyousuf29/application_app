<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $applications = [
            [
                'name' => 'Sick Leave',

                'body' => '{PYour Name}
                {Your Address}
                {City, State, ZIP Code}
                {Email Address}
                {Phone Number}
                {Date}

                {Recipient Name}
                {Recipient Position/Title}
                {Company or Organization Name}
                {Company or Organization Address}
                {City, State, ZIP Code}

                Dear {Recipients Name},

                I hope this letter finds you well. I am writing to inform you that I am not feeling well and, after consulting with my healthcare provider, it has been recommended that I take a period of sick leave.

                Due to my illness, I am unable to perform my duties at work effectively, and I believe that taking some time off to rest and recover will contribute to a quicker and more complete recovery. I anticipate needing [number of days] days of sick leave, starting from {start date} to {end date}.

                I have attached a medical certificate from my healthcare provider for your reference. If there are any additional forms or procedures required for processing sick leave requests, please let me know, and I will promptly complete them.

                I understand the importance of my responsibilities, and I am committed to ensuring a smooth transition during my absence. I am willing to delegate my tasks to a colleague or provide any necessary information to help with the continuity of my work.

                I will keep you updated on my progress and will notify you if there are any changes to my expected return date. I appreciate your understanding and support during this time.

                Thank you for your attention to this matter. If you require any further information or if there are specific procedures I need to follow, please do not hesitate to contact me.

                Sincerely,

                {Your Name}',

            ],
            [
                'name' => 'Vacation Leave',

                'body' => '{PYour Name}
                {Your Address}
                {City, State, ZIP Code}
                {Email Address}
                {Phone Number}
                {Date}

                {Recipient Name}
                {Recipient Position/Title}
                {Company or Organization Name}
                {Company or Organization Address}
                {City, State, ZIP Code}

                Dear {Recipients Name},

                I hope this letter finds you well. I am writing to inform you that I am not feeling well and, after consulting with my healthcare provider, it has been recommended that I take a period of sick leave.

                Due to my illness, I am unable to perform my duties at work effectively, and I believe that taking some time off to rest and recover will contribute to a quicker and more complete recovery. I anticipate needing [number of days] days of sick leave, starting from {start date} to {end date}.

                I have attached a medical certificate from my healthcare provider for your reference. If there are any additional forms or procedures required for processing sick leave requests, please let me know, and I will promptly complete them.

                I understand the importance of my responsibilities, and I am committed to ensuring a smooth transition during my absence. I am willing to delegate my tasks to a colleague or provide any necessary information to help with the continuity of my work.

                I will keep you updated on my progress and will notify you if there are any changes to my expected return date. I appreciate your understanding and support during this time.

                Thank you for your attention to this matter. If you require any further information or if there are specific procedures I need to follow, please do not hesitate to contact me.

                Sincerely,

                {Your Name}',


            ]
            ,
            [
                'name' => 'Emergency Leave',

                'body' => '{PYour Name}
                {Your Address}
                {City, State, ZIP Code}
                {Email Address}
                {Phone Number}
                {Date}

                {Recipient Name}
                {Recipient Position/Title}
                {Company or Organization Name}
                {Company or Organization Address}
                {City, State, ZIP Code}

                Dear {Recipients Name},

                I hope this letter finds you well. I am writing to inform you that I am not feeling well and, after consulting with my healthcare provider, it has been recommended that I take a period of sick leave.

                Due to my illness, I am unable to perform my duties at work effectively, and I believe that taking some time off to rest and recover will contribute to a quicker and more complete recovery. I anticipate needing [number of days] days of sick leave, starting from {start date} to {end date}.

                I have attached a medical certificate from my healthcare provider for your reference. If there are any additional forms or procedures required for processing sick leave requests, please let me know, and I will promptly complete them.

                I understand the importance of my responsibilities, and I am committed to ensuring a smooth transition during my absence. I am willing to delegate my tasks to a colleague or provide any necessary information to help with the continuity of my work.

                I will keep you updated on my progress and will notify you if there are any changes to my expected return date. I appreciate your understanding and support during this time.

                Thank you for your attention to this matter. If you require any further information or if there are specific procedures I need to follow, please do not hesitate to contact me.

                Sincerely,

                {Your Name}',


            ]
            ,
            [
                'name' => 'Maternity Leave',

                'body' => '{PYour Name}
                {Your Address}
                {City, State, ZIP Code}
                {Email Address}
                {Phone Number}
                {Date}

                {Recipient Name}
                {Recipient Position/Title}
                {Company or Organization Name}
                {Company or Organization Address}
                {City, State, ZIP Code}

                Dear {Recipients Name},

                I hope this letter finds you well. I am writing to inform you that I am not feeling well and, after consulting with my healthcare provider, it has been recommended that I take a period of sick leave.

                Due to my illness, I am unable to perform my duties at work effectively, and I believe that taking some time off to rest and recover will contribute to a quicker and more complete recovery. I anticipate needing [number of days] days of sick leave, starting from {start date} to {end date}.

                I have attached a medical certificate from my healthcare provider for your reference. If there are any additional forms or procedures required for processing sick leave requests, please let me know, and I will promptly complete them.

                I understand the importance of my responsibilities, and I am committed to ensuring a smooth transition during my absence. I am willing to delegate my tasks to a colleague or provide any necessary information to help with the continuity of my work.

                I will keep you updated on my progress and will notify you if there are any changes to my expected return date. I appreciate your understanding and support during this time.

                Thank you for your attention to this matter. If you require any further information or if there are specific procedures I need to follow, please do not hesitate to contact me.

                Sincerely,

                {Your Name}',


            ]
        ];

        foreach ($applications as $application) {
            Application::create($application);
        }
    }
}
