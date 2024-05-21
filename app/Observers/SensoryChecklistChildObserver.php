<?php

namespace App\Observers;

use App\Models\Domain;
use App\Models\Subdomain;
use App\Models\Area;
use App\Models\Activity;
use App\Models\Task;
use App\Models\Mitp;
use App\Models\SensoryChecklistChild;

class SensoryChecklistChildObserver
{
    /**
     * Handle the SensoryChecklistChild "created" event.
     *
     * @param SensoryChecklistChild $SensoryChecklistChild
     *
     * @return void
     */
    public function created(SensoryChecklistChild $SensoryChecklistChild): void
    {   
        $attrs = \Schema::getColumnListing((new SensoryChecklistChild)->getTable());
        foreach($attrs as $attr){
            if($SensoryChecklistChild->$attr == NULL){
                $SensoryChecklistChild->$attr = request()->$attr;  
                $SensoryChecklistChild->saveQuietly();  
                
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
                                                'sensory_checklist_child_id'=>  $SensoryChecklistChild->id 
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
                                                'sensory_checklist_child_id'=>  $SensoryChecklistChild->id
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
                                        'sensory_checklist_child_id'=>  $SensoryChecklistChild->id 
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
                                    'sensory_checklist_child_id'=>  $SensoryChecklistChild->id 
                                ]);
                            }
                        }
                    }    
                }
            }    
        }
    }

    /**
     * Handle the SensoryChecklistChild "updated" event.
     *
     * @param SensoryChecklistChild $SensoryChecklistChild
     *
     * @return void
     */
    public function updated(SensoryChecklistChild $SensoryChecklistChild): void
    { 
      Mitp::where('sensory_checklist_child_id', $SensoryChecklistChild->id)->delete(); //dd($m);   
      $attrs = \Schema::getColumnListing((new SensoryChecklistChild)->getTable()); //dd($attrs);
      foreach($attrs as $attr){ 
        $data_type = collect(\DB::select("SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'nov' AND TABLE_NAME = 'sensory_checklist_children' AND COLUMN_NAME = '$attr'"))->first()->DATA_TYPE;
        if($data_type == 'text'){ 

            $SensoryChecklistChild->$attr = request()->$attr;
            //$SensoryChecklistChild->updateQuietly([$SensoryChecklistChild->$attr => request()->$attr]);
             
            $SensoryChecklistChild->saveQuietly();  

            if(request()->$attr != 'no' && request()->$attr != null){   //dd($SensoryChecklistChild);
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
                                    'sensory_checklist_child_id'=>  $SensoryChecklistChild->id ])->exists();
                                    if($check==false){ 
                                        Mitp::create([
                                            'student_id' => request()->student_id,
                                            'activity_id' => $activity->id,
                                            'task_id' => $task->id,
                                            'sensory_checklist_child_id'=>  $SensoryChecklistChild->id 
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
                                    'sensory_checklist_child_id'=>  $SensoryChecklistChild->id ])->exists(); 
                                    if($check==false){
                                        Mitp::create([
                                            'student_id' => request()->student_id,
                                            'activity_id' => $activity->id,
                                            'task_id' => $task->id,
                                            'sensory_checklist_child_id'=>  $SensoryChecklistChild->id 
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
                                'sensory_checklist_child_id'=>  $SensoryChecklistChild->id ])->exists(); 
                                if($check==false){
                                    Mitp::create([
                                        'student_id' => request()->student_id,
                                        'activity_id' => $activity->id,
                                        'task_id' => $task->id,
                                        'sensory_checklist_child_id'=>  $SensoryChecklistChild->id 
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
                            'sensory_checklist_child_id'=>  $SensoryChecklistChild->id ])->exists(); 
                            if($check==false){//dd(99);
                                Mitp::create([
                                    'student_id' => request()->student_id,
                                    'activity_id' => $activity->id,
                                    'task_id' => $task->id,
                                    'sensory_checklist_child_id'=>  $SensoryChecklistChild->id 
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
            //                         'sensory_checklist_child_id'=>  $SensoryChecklistChild->id ])->delete(); 
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
            //                         'sensory_checklist_child_id'=>  $SensoryChecklistChild->id ])->delete(); 
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
            //                     'sensory_checklist_child_id'=>  $SensoryChecklistChild->id ])->delete(); 
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
            //                 'sensory_checklist_child_id'=>  $SensoryChecklistChild->id ])->delete(); 
            //             }
            //         }
            //     }    
            // }
        }    
      }   
    }  
}
