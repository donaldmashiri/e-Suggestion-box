<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuggestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suggestions = [
            [
                'title' => 'Improve campus Wi-Fi coverage',
                'description' => 'The Wi-Fi coverage on campus is weak in certain areas. It would be great if the university could improve the Wi-Fi infrastructure to provide better connectivity for students.',
                'category' => 'Campus Facilities',
                'status' => 'pending',
                'user_id' => 2,
            ],
            [
                'title' => 'Offer more elective courses in Computer Science',
                'description' => 'The current selection of elective courses in the Computer Science department is limited. It would be beneficial to have a wider range of electives to choose from.',
                'category' => 'Academics',
                'status' => 'pending',
                'user_id' => 2,
            ],
            [
                'title' => 'Improve the food quality in the campus cafeteria',
                'description' => 'The food options and quality in the campus cafeteria are not satisfactory. It would be great if the university could work on improving the food selection and taste.',
                'category' => 'Campus Life',
                'status' => 'pending',
                'user_id' => 2,
            ],
            [
                'title' => 'Increase the number of study spaces on campus',
                'description' => 'There is a lack of quiet, designated study spaces on campus. It would be helpful if the university could create more areas for students to study and focus.',
                'category' => 'Campus Facilities',
                'status' => 'pending',
                'user_id' => 2,
            ],
            [
                'title' => 'Offer more professional development workshops',
                'description' => 'The current selection of professional development workshops is limited. It would be beneficial for students to have more opportunities to develop their career-related skills.',
                'category' => 'Academics',
                'status' => 'pending',
                'user_id' => 2,
            ],
            [
                'title' => 'Improve the gym equipment and facilities',
                'description' => 'The gym on campus is in need of an upgrade. The equipment is outdated, and the facilities are not well-maintained. It would be great if the university could invest in improving the gym.',
                'category' => 'Campus Life',
                'status' => 'pending',
                'user_id' => 2,
            ],
            [
                'title' => 'Offer more support for student mental health',
                'description' => 'The current mental health resources and support services on campus are limited. It would be beneficial for the university to expand its offerings and make them more accessible to students.',
                'category' => 'Campus Life',
                'status' => 'pending',
                'user_id' => 2,
            ],
            [
                'title' => 'Improve the parking situation on campus',
                'description' => 'The parking on campus is often overcrowded and difficult to find. It would be great if the university could address the parking issues and provide more options for students.',
                'category' => 'Campus Facilities',
                'status' => 'pending',
                'user_id' => 2,
            ],

        ];

        \DB::table('suggestions')->insert($suggestions);
    }
}
