<?php

namespace App\Observers;

use App\Models\Domain;
use App\Models\Subdomain;
use App\Models\Area;
use App\Models\Activity;
use App\Models\Task;
use App\Models\Mitp;
use App\Models\Social;

class SocialObserver
{
    /**
     * Handle the Social "created" event.
     *
     * @param Social $Social
     *
     * @return void
     */
    public function created(Social $Social): void
    {   
        $attrs = \Schema::getColumnListing((new Social)->getTable());
        foreach($attrs as $attr){
            if($Social->$attr == NULL){
                $Social->$attr = request()->$attr;  
                $Social->saveQuietly();  
                
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
                                                'social_id'=>  $Social->id 
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
                                                'social_id'=>  $Social->id
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
                                        'social_id'=>  $Social->id 
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
                                    'social_id'=>  $Social->id 
                                ]);
                            }
                        }
                    }    
                }
            }    
        }
    }
    /**
     * Handle the Social "updated" event.
     *
     * @param Social $Social
     *
     * @return void
     */
    public function updated(Social $Social): void {  //dd(request());
      Mitp::where('social_id', $Social->id)->delete();    
      $attrs = \Schema::getColumnListing((new Social)->getTable());
      foreach($attrs as $attr){ 
           $data_type = collect(\DB::select("SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'nov' AND TABLE_NAME = 'socials' AND COLUMN_NAME = '$attr'"))->first()->DATA_TYPE;
         
           if($data_type == 'text'){ 
            $Social->$attr = request()->$attr;  
            $Social->saveQuietly();  //dd(request()->$attr);
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
                                    'social_id'=>  $Social->id ])->exists(); 
                                    if($check==false){ 
                                        Mitp::create([
                                            'student_id' => request()->student_id,
                                            'activity_id' => $activity->id,
                                            'task_id' => $task->id,
                                            'social_id'=>  $Social->id 
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
                                    'social_id'=>  $Social->id ])->exists(); 
                                    if($check==false){ 
                                        Mitp::create([
                                            'student_id' => request()->student_id,
                                            'activity_id' => $activity->id,
                                            'task_id' => $task->id,
                                            'social_id'=>  $Social->id 
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
                                'social_id'=>  $Social->id ])->exists(); 
                                if($check==false){ 
                                    Mitp::create([
                                        'student_id' => request()->student_id,
                                        'activity_id' => $activity->id,
                                        'task_id' => $task->id,
                                        'social_id'=>  $Social->id 
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
                            'social_id'=>  $Social->id ])->exists(); 
                            if($check==false){ 
                                Mitp::create([
                                    'student_id' => request()->student_id,
                                    'activity_id' => $activity->id,
                                    'task_id' => $task->id,
                                    'social_id'=>  $Social->id 
                                ]);
                            }
                        }
                    }
                }    
            }
          }
            
      }   
    }  
}
