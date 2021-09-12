<template>
 
      <app-layout title="show course">
         
          <template #header>
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Course : {{course.name}}
              </h2>

          </template>
          <div class="py-3" >
              <div class="text-sm text-gray-500">{{course.videos[this.index].title}} </div>
                <div class="mx-8 my-3 ">
                    <iframe class="w-full h-full"  src="https://www.youtube.com/embed/SlX03hcCayE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="my-3 text-sm text-gray-500">{{course.videos[this.index].description}}</div>


             
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
    'course',
    
    ],
data(){
    return{
        index:0,
    }
}


}
</script>

<style>

</style>