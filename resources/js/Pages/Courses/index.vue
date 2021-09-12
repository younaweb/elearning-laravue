<template>
 
      <app-layout title="courses">
         
          <template #header>
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              List of Courses
              </h2>

          </template>
          <div class="py-3" v-for="course in this.courses" :key="course.id">
              <div class="mx-8 bg-white rounded shadow p-4">
                  <div class="text-sm text-gray-500">Created by : {{course.user.name}} </div>
                  <div class="flex justify-between items-center">
                      <div class="text-4xl">
                          {{course.title}}
                      </div>
                      <div class="text-base">{{course.videos_count}} episode</div>
                    </div>
                  <div class="text-sm text-gray-500">{{course.description}}</div>
                  <a :href="'course/'+course.id" class="bg-indigo-500 text-white px-2 py-1 text-sm mt-3 inline-block rounded hover:bg-indigo-700">See Course</a>
              </div>
          </div>
      </app-layout>
      
  
</template>

<script>
import AppLayout from './../../Layouts/AppLayout'

export default {
components:{
    AppLayout,
    
},
mounted(){
    console.log("*****************************=========",this.courses);
},
props:[
    'courses',
    
    ],


}
</script>

<style>

</style>