<?php

namespace App\Observers;

use App\Models\Domain;
use App\Models\Subdomain;
use App\Models\Area;
use App\Models\Activity;
use App\Models\Task;
use App\Models\Mitp;
use App\Models\IndividualRisk;

class IndividualRiskObserver
{
    public function created(IndividualRisk $IndividualRisk): void
    {   
        $attrs = \Schema::getColumnListing((new IndividualRisk)->getTable());
        foreach($attrs as $attr){
            if($IndividualRisk->$attr == NULL){
                $IndividualRisk->$attr = request()->$attr;  
                $IndividualRisk->saveQuietly();  
                
                if(request()->$attr != 'no' && request()->$attr != null){
                    if(Domain::where('title', request()->$attr)->exists()){ 
                      $domain = Domain::where('title', request()->$attr)->first();  
                      foreach(Subdomain::where('domain_id', $domain->id)->get() as $subdomain){
                        foreach(Area::where('subdomain_id', $subdomain->id)->get() as $area){
                            $activities = Activity::where('area_id', $area->id)->get();
                            foreach($activities as $activity){
                                if(Activity::find($activity->id) != null){
                                    $tasks = Task::where('activity_id', $activity->id)->get(); 
                                    foreach($tasks as $task){
                                        Mitp::create([
                                                'student_id' => request()->student_id,
                                                'activity_id' => $activity->id,
                                                'task_id' => $task->id,
                                                'individual_risk_id'=>  $IndividualRisk->id 
                                        ]);
                                    }
                                }
                            }
                        }
                      }
                    }
                    elseif(Subdomain::where('title', request()->$attr)->exists()){
                       $subdomain = Subdomain::where('title', request()->$attr)->first();
                       foreach(Area::where('subdomain_id', $subdomain->id)->get() as $area){
                            $activities = Activity::where('area_id', $area->id)->get();
                            foreach($activities as $activity){
                                if(Activity::find($activity->id) != null){
                                    $tasks = Task::where('activity_id', $activity->id)->get(); 
                                    foreach($tasks as $task){
                                        Mitp::create([
                                                'student_id' => request()->student_id,
                                                'activity_id' => $activity->id,
                                                'task_id' => $task->id,
                                                'individual_risk_id'=>  $IndividualRisk->id
                                        ]);
                                    }
                                }
                            }
                        }
                    }    
                    elseif(Area::where('title', request()->$attr)->exists()){
                        $area = Area::where('title', request()->$attr)->first();
                        $activities = Activity::where('area_id', $area->id)->get();
                        foreach($activities as $activity){
                        if(Activity::find($activity->id) != null){
                            $tasks = Task::where('activity_id', $activity->id)->get(); 
                                foreach($tasks as $task){
                                    Mitp::create([
                                        'student_id' => request()->student_id,
                                        'activity_id' => $activity->id,
                                        'task_id' => $task->id,
                                        'individual_risk_id'=>  $IndividualRisk->id 
                                    ]);
                                }
                            }
                        }
                    }
                    else{ 
                        $activity = Activity::where('title', request()->$attr)->first(); 
                        if($activity != null){
                            $tasks = Task::where('activity_id', $activity->id)->get(); 
                            foreach($tasks as $task){
                                Mitp::create([
                                    'student_id' => request()->student_id,
                                    'activity_id' => $activity->id,
                                    'task_id' => $task->id,
                                    'individual_risk_id'=>  $IndividualRisk->id 
                                ]);
                            }
                        }
                    }    
                }
            }    
        }
    }

    /**
     * Handle the IndividualRisk "updated" event.
     *
     * @param IndividualRisk $IndividualRisk
     *
     * @return void
     */
    public function updated(IndividualRisk $IndividualRisk): void
    { 
      Mitp::where('individual_risk_id', $IndividualRisk->id)->delete(); //dd($m);   
      $attrs = \Schema::getColumnListing((new IndividualRisk)->getTable()); //dd($attrs);
      foreach($attrs as $attr){ 
        $data_type = collect(\DB::select("SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'nov' AND TABLE_NAME = 'individual_risks' AND COLUMN_NAME = '$attr'"))->first()->DATA_TYPE;
        if($data_type == 'text'){ 

            $IndividualRisk->$attr = request()->$attr;
            //$IndividualRisk->updateQuietly([$IndividualRisk->$attr => request()->$attr]);
             
            $IndividualRisk->saveQuietly();  

            if(request()->$attr != 'no' && request()->$attr != null){   //dd($IndividualRisk);
                if(Domain::where('title', request()->$attr)->exists()){ //dd(93);
                  $domain = Domain::where('title', request()->$attr)->first();  
                  foreach(Subdomain::where('domain_id', $domain->id)->get() as $subdomain){
                    foreach(Area::where('subdomain_id', $subdomain->id)->get() as $area){
                        $activities = Activity::where('area_id', $area->id)->get();
                        foreach($activities as $activity){
                            if(Activity::find($activity->id) != null){
                                $tasks = Task::where('activity_id', $activity->id)->get(); 
                                foreach($tasks as $task){
                                    $check = Mitp::where([ 'student_id' => request()->student_id,
                                    'activity_id' => $activity->id,
                                    'task_id' => $task->id,
                                    'individual_risk_id'=>  $IndividualRisk->id ])->exists();
                                    if($check==false){ 
                                        Mitp::create([
                                            'student_id' => request()->student_id,
                                            'activity_id' => $activity->id,
                                            'task_id' => $task->id,
                                            'individual_risk_id'=>  $IndividualRisk->id 
                                        ]);
                                    }
                                }
                            }
                        }
                    }
                  }
                }
                elseif(Subdomain::where('title', request()->$attr)->exists()){//dd(92);
                   $subdomain = Subdomain::where('title', request()->$attr)->first();
                   foreach(Area::where('subdomain_id', $subdomain->id)->get() as $area){
                        $activities = Activity::where('area_id', $area->id)->get();
                        foreach($activities as $activity){
                            if(Activity::find($activity->id) != null){
                                $tasks = Task::where('activity_id', $activity->id)->get(); 
                                foreach($tasks as $task){
                                    $check = Mitp::where([ 'student_id' => request()->student_id,
                                    'activity_id' => $activity->id,
                                    'task_id' => $task->id,
                                    'individual_risk_id'=>  $IndividualRisk->id ])->exists(); 
                                    if($check==false){
                                        Mitp::create([
                                            'student_id' => request()->student_id,
                                            'activity_id' => $activity->id,
                                            'task_id' => $task->id,
                                            'individual_risk_id'=>  $IndividualRisk->id 
                                        ]);
                                    }
                                }
                            }
                        }
                    }
                }    
                elseif(Area::where('title', request()->$attr)->exists()){//dd(91);
                    $area = Area::where('title', request()->$attr)->first();
                    $activities = Activity::where('area_id', $area->id)->get();
                    foreach($activities as $activity){
                    if(Activity::find($activity->id) != null){
                        $tasks = Task::where('activity_id', $activity->id)->get(); 
                            foreach($tasks as $task){
                                $check = Mitp::where([ 'student_id' => request()->student_id,
                                'activity_id' => $activity->id,
                                'task_id' => $task->id,
                                'individual_risk_id'=>  $IndividualRisk->id ])->exists(); 
                                if($check==false){
                                    Mitp::create([
                                        'student_id' => request()->student_id,
                                        'activity_id' => $activity->id,
                                        'task_id' => $task->id,
                                        'individual_risk_id'=>  $IndividualRisk->id 
                                    ]);
                                }
                            }
                        }
                    }
                }
                else{ 
                    $activity = Activity::where('title', request()->$attr)->first(); 
                    if($activity != null){
                        $tasks = Task::where('activity_id', $activity->id)->get(); 
                        foreach($tasks as $task){
                            $check = Mitp::where([ 'student_id' => request()->student_id,
                            'activity_id' => $activity->id,
                            'task_id' => $task->id,
                            'individual_risk_id'=>  $IndividualRisk->id ])->exists(); 
                            if($check==false){//dd(99);
                                Mitp::create([
                                    'student_id' => request()->student_id,
                                    'activity_id' => $activity->id,
                                    'task_id' => $task->id,
                                    'individual_risk_id'=>  $IndividualRisk->id 
                                ]);
                            }
                        }
                    }
                }    
            }
            // if(request()->$attr == 'no' && request()->$attr != null){
            //     if(Domain::where('title', request()->$attr)->exists()){ 
            //       $domain = Domain::where('title', request()->$attr)->first();  
            //       foreach(Subdomain::where('domain_id', $domain->id)->get() as $subdomain){
            //         foreach(Area::where('subdomain_id', $subdomain->id)->get() as $area){
            //             $activities = Activity::where('area_id', $area->id)->get();
            //             foreach($activities as $activity){
            //                 if(Activity::find($activity->id) != null){
            //                     $tasks = Task::where('activity_id', $activity->id)->get(); 
            //                     foreach($tasks as $task){
            //                         $check = Mitp::where([ 'student_id' => request()->student_id,
            //                         'activity_id' => $activity->id,
            //                         'task_id' => $task->id,
            //                         'individual_risk_id'=>  $IndividualRisk->id ])->delete(); 
            //                     }
            //                 }
            //             }
            //         }
            //       }
            //     }
            //     elseif(Subdomain::where('title', request()->$attr)->exists()){
            //        $subdomain = Subdomain::where('title', request()->$attr)->first();
            //        foreach(Area::where('subdomain_id', $subdomain->id)->get() as $area){
            //             $activities = Activity::where('area_id', $area->id)->get();
            //             foreach($activities as $activity){
            //                 if(Activity::find($activity->id) != null){
            //                     $tasks = Task::where('activity_id', $activity->id)->get(); 
            //                     foreach($tasks as $task){
            //                         $check = Mitp::where([ 'student_id' => request()->student_id,
            //                         'activity_id' => $activity->id,
            //                         'task_id' => $task->id,
            //                         'individual_risk_id'=>  $IndividualRisk->id ])->delete(); 
            //                     }
            //                 }
            //             }
            //         }
            //     }    
            //     elseif(Area::where('title', request()->$attr)->exists()){
            //         $area = Area::where('title', request()->$attr)->first();
            //         $activities = Activity::where('area_id', $area->id)->get();
            //         foreach($activities as $activity){
            //         if(Activity::find($activity->id) != null){
            //             $tasks = Task::where('activity_id', $activity->id)->get(); 
            //                 foreach($tasks as $task){
            //                     $check = Mitp::where([ 'student_id' => request()->student_id,
            //                     'activity_id' => $activity->id,
            //                     'task_id' => $task->id,
            //                     'individual_risk_id'=>  $IndividualRisk->id ])->delete(); 
            //                 }
            //             }
            //         }
            //     }
            //     else{ 
            //         $activity = Activity::where('title', request()->$attr)->first(); 
            //         if($activity != null){
            //             $tasks = Task::where('activity_id', $activity->id)->get(); 
            //             foreach($tasks as $task){
            //                 $check = Mitp::where([ 'student_id' => request()->student_id,
            //                 'activity_id' => $activity->id,
            //                 'task_id' => $task->id,
            //                 'individual_risk_id'=>  $IndividualRisk->id ])->delete(); 
            //             }
            //         }
            //     }    
            // }
        }    
      }   
    }
}
