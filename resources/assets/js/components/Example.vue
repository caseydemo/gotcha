<template>
  <div class="container">
  
  <div class="row">
    <div class="col">
      <img class="thumbnails" :src="img1" >
    </div>
    <div class="col">
      <img class="thumbnails" :src="img2" >
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col">
      2 of 3
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>  
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },

methods: {


    toggleDates: function(){
        this.showDates = true;
        this.showMerch = false;
        this.showPictures = false;
    },
    togglePictures: function(){
        this.showPictures = true;
        this.showDates = false;
        this.showMerch = false;    
    },
    toggleMerch: function(){
        this.showMerch = true;
        this.showDates = false;
        this.showPictures = false;    
    }
},    
data () {
    return {
        showDates: false,
        showPictures: false,
        showMerch: false,
        img1: "/images/CaseyStudio1.jpg",
        img2: "/images/CaseyStudio2.jpg"
    }
    }
}
</script>
<style scoped>
.thumbnails{
  width: 100%;
  height: auto;
}
</style>