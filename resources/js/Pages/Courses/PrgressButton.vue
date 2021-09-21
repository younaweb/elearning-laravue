<template>
  <div>
    <button
      class="
        bg-transparent
        hover:bg-blue-500
        text-blue-700
        font-semibold
        hover:text-white
        py-2
        px-4
        border border-blue-500
        hover:border-transparent
        rounded
      "
      @click="toggleWatchVideo(videoId)"
    >
      Finished  {{ this.isWatched  ? '' : ' ?'}} 
    </button>
 
  </div>
</template>

<script>
export default {
  data(){
    return{
      isWatched: null,
      watchedEp:this.watchedVideo
    }
  },
  props: ['videoId','watchedVideo'],
  methods: {
  
    toggleWatchVideo() {
      axios
        .post("/togglewatched", { id: this.videoId })
        .then((response) => {
          if (response){
            this.isWatched=!this.isWatched;
          }
          
        })
        .catch((error) => {
          console.error("There was an error!", error);
        });
    },
  },
  computed:{
    isWatchedVideo(){
     for(var i=0; i < this.watchedEp.length; i++){
        if( this.watchedEp[i].id == this.videoId){
          return true
        }
      }
      return false
    }
  },
  mounted(){
    this.isWatched = this.isWatchedVideo;
    
  },
};
</script>

<style lang="scss" scoped>
</style>