<?php

namespace App\Observers;

use App\Models\Domain;
use App\Models\Subdomain;
use App\Models\Area;
use App\Models\Activity;
use App\Models\Task;
use App\Models\Mitp;
use App\Models\AutisumBhehaviour;

class AutisumBhehaviourObserver
{
    /**
     * Handle the AutisumBhehaviour "created" event.
     *
     * @param AutisumBhehaviour $AutisumBhehaviour
     *
     * @return void
     */
    public function created(AutisumBhehaviour $AutisumBhehaviour): void
    {   
        $attrs = \Schema::getColumnListing((new AutisumBhehaviour)->getTable());
        foreach($attrs as $attr){
            //dd(request()->$attr);
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
                                                'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id 
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
                                                'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id
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
                                        'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id 
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
                                    'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id 
                                ]);
                            }
                        }
                    }    
                }
                
        }
    }

    /**
     * Handle the AutisumBhehaviour "updated" event.
     *
     * @param AutisumBhehaviour $AutisumBhehaviour
     *
     * @return void
     */
    public function updated(AutisumBhehaviour $AutisumBhehaviour): void { 
      Mitp::where('autisum_bhehaviour_id', $AutisumBhehaviour->id)->delete();    
      $attrs = \Schema::getColumnListing((new AutisumBhehaviour)->getTable());
      foreach($attrs as $attr){ 
        
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
                                    'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id ])->exists(); 
                                    if($check==false){
                                        Mitp::create([
                                            'student_id' => request()->student_id,
                                            'activity_id' => $activity->id,
                                            'task_id' => $task->id,
                                            'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id 
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
                                    'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id ])->exists(); 
                                    if($check==false){
                                        Mitp::create([
                                            'student_id' => request()->student_id,
                                            'activity_id' => $activity->id,
                                            'task_id' => $task->id,
                                            'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id 
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
                                'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id ])->exists(); 
                                if($check==false){
                                    Mitp::create([
                                        'student_id' => request()->student_id,
                                        'activity_id' => $activity->id,
                                        'task_id' => $task->id,
                                        'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id 
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
                            'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id ])->exists(); 
                            if($check==false){
                                Mitp::create([
                                    'student_id' => request()->student_id,
                                    'activity_id' => $activity->id,
                                    'task_id' => $task->id,
                                    'autisum_bhehaviour_id'=>  $AutisumBhehaviour->id 
                                ]);
                            }
                        }
                    }
                }    
            }
            
      }   
    }  
}
