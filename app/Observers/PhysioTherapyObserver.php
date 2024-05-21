<?php

namespace App\Observers;

use App\Models\Domain;
use App\Models\Subdomain;
use App\Models\Area;
use App\Models\Activity;
use App\Models\Task;
use App\Models\Mitp;
use App\Models\PhysioTherapy;

class PhysioTherapyObserver
{
    /**
     * Handle the PhysioTherapy "created" event.
     *
     * @param PhysioTherapy $PhysioTherapy
     *
     * @return void
     */
    public function created(PhysioTherapy $PhysioTherapy): void
    {   
        $attrs = \Schema::getColumnListing((new PhysioTherapy)->getTable());
        foreach($attrs as $attr){
            if($PhysioTherapy->$attr == NULL){
                $PhysioTherapy->$attr = request()->$attr;  
                $PhysioTherapy->saveQuietly();  
                
                if(request()->$attr != 'no' && request()->$attr != null){//dd(request()->$attr);
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
                                                'physiotherapy_id'=>  $PhysioTherapy->id 
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
                                                'physiotherapy_id'=>  $PhysioTherapy->id
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
                                        'physiotherapy_id'=>  $PhysioTherapy->id 
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
                                    'physiotherapy_id'=>  $PhysioTherapy->id 
                                ]);
                            }
                        }
                    }    
                }
            }    
        }
    }

    /**
     * Handle the PhysioTherapy "updated" event.
     *
     * @param PhysioTherapy $PhysioTherapy
     *
     * @return void
     */
    public function updated(PhysioTherapy $PhysioTherapy): void { 
      Mitp::where('physiotherapy_id', $PhysioTherapy->id)->delete();    
      $attrs = \Schema::getColumnListing((new PhysioTherapy)->getTable());
      foreach($attrs as $attr){ 
        if(gettype($PhysioTherapy->$attr)=='string'){ //dd($PhysioTherapy->$attr);
            $PhysioTherapy->id = request()->id;
            $PhysioTherapy->$attr = request()->$attr;  
            $PhysioTherapy->saveQuietly();  

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
                                    $check = Mitp::where([ 'student_id' => request()->student_id,
                                    'activity_id' => $activity->id,
                                    'task_id' => $task->id,
                                    'physiotherapy_id'=>  $PhysioTherapy->id ])->exists(); 
                                    if($check==false){
                                        Mitp::create([
                                            'student_id' => request()->student_id,
                                            'activity_id' => $activity->id,
                                            'task_id' => $task->id,
                                            'physiotherapy_id'=>  $PhysioTherapy->id 
                                        ]);
                                    }
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
                                    $check = Mitp::where([ 'student_id' => request()->student_id,
                                    'activity_id' => $activity->id,
                                    'task_id' => $task->id,
                                    'physiotherapy_id'=>  $PhysioTherapy->id ])->exists(); 
                                    if($check==false){
                                        Mitp::create([
                                            'student_id' => request()->student_id,
                                            'activity_id' => $activity->id,
                                            'task_id' => $task->id,
                                            'physiotherapy_id'=>  $PhysioTherapy->id 
                                        ]);
                                    }
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
                                $check = Mitp::where([ 'student_id' => request()->student_id,
                                'activity_id' => $activity->id,
                                'task_id' => $task->id,
                                'physiotherapy_id'=>  $PhysioTherapy->id ])->exists(); 
                                if($check==false){
                                    Mitp::create([
                                        'student_id' => request()->student_id,
                                        'activity_id' => $activity->id,
                                        'task_id' => $task->id,
                                        'physiotherapy_id'=>  $PhysioTherapy->id 
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
                            'physiotherapy_id'=>  $PhysioTherapy->id ])->exists(); 
                            if($check==false){
                                Mitp::create([
                                    'student_id' => request()->student_id,
                                    'activity_id' => $activity->id,
                                    'task_id' => $task->id,
                                    'physiotherapy_id'=>  $PhysioTherapy->id 
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
            //                         'physiotherapy_id'=>  $PhysioTherapy->id ])->delete(); 
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
            //                         'physiotherapy_id'=>  $PhysioTherapy->id ])->delete(); 
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
            //                     'physiotherapy_id'=>  $PhysioTherapy->id ])->delete(); 
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
            //                 'physiotherapy_id'=>  $PhysioTherapy->id ])->delete(); 
            //             }
            //         }
            //     }    
            // }
        }    
      }   
    }  
}
