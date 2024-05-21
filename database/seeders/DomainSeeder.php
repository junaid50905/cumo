<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Area;
use App\Models\Domain;
use App\Utility\DomainConstants;
use App\Utility\ProjectConstants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Rfc4122\UuidV4;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $domainTable = (new Domain())->getTable();
        $areaTable = (new Area())->getTable();
        $activityTable = (new Activity())->getTable();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($domainTable)->truncate();
        DB::table($areaTable)->truncate();
        DB::table($activityTable)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach (DomainConstants::$domains as $key => $subDomains) {
            $domain = new Domain();
            $domain->title = $key;
            $domain->code = UuidV4::uuid4();
            $domain->save();

            foreach ($subDomains as $key => $subDomainVal) {
                $subDomain = new Domain();
                $subDomain->title = $subDomainVal;
                $subDomain->code = UuidV4::uuid4();
                $subDomain->parent_domain_id = $domain->id;
                $subDomain->save();
            }
        }

//        ====================

        foreach (DomainConstants::$areas as $subDomain => $areaVal) {
            $subDomain = Domain::FirstOrNew(['title' => $subDomain], ['code' => UuidV4::uuid4()]);
            foreach ($areaVal as $key => $val) {
                $customArea[$val] = [
                    'title' => $val,
                    'domain_id' => $subDomain->id,
                ];
            }
        }

        DB::table($areaTable)->insert($customArea ?? []);

//        ================

        foreach (DomainConstants::$activities as $area => $activityVal) {
            try{
                $area = Area::whereTitle($area)->first();
            } catch (\Exception $e) {
                dd("Area: $area not found");
            }

            if ($area) {
                foreach ($activityVal as $key => $val) {
                    $customActivities[$key] = [
                        'title' => $val,
                        'code' => UuidV4::uuid4(),
                        'type' => array_rand(ProjectConstants::$activityTypes),
                        'area_id' => $area->id,
                    ];
                }
            }
        }

        DB::table($activityTable)->insert($customActivities ?? []);
    }
}
