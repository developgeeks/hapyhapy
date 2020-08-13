<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();

        $project = new Project();
        $project->name = "INVEST in Airdrie";
        $project->description = "Kings Point is a 37,674 sq. ft. development for use by various opportunity areas. This project consists of two buildings with an avant-garde design and with a focus on renovation.";
        $project->address = "Kingsview Road, Airdrie";
        $project->community = "Kingsview Road";
        $project->zoning = "Commercial / Retail / Office / Restaurant";
        $project->availability = "Immediately";
        $project->term = "5-10 years";
        $project->parking = "Surface – 82 Common Stalls";
        $project->url_Image = "/hapyhapy/images/img_1.jpg";
        $project->status = "ACTIVE";
        $project->save();
    }
}
