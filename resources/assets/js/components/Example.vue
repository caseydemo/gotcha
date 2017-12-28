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
      <img class="thumbnails" :src="img3" >
    </div>
  </div>
  <div class="row">
    <div class="col">
      <img class="thumbnails" :src="img4" >
    </div>
    <div class="col">
      <img class="thumbnails" :src="img5" >
    </div>
    <div class="col">
      <img class="thumbnails" :src="img6" >
    </div>
  </div>
  <div class="row">
    <div class="col">
      <img class="thumbnails" :src="img7" >
    </div>
    <div class="col">
      <img class="thumbnails" :src="img8" >
    </div>
    <div class="col">
      <img class="thumbnails" :src="img9" >
    </div>
  </div>
  <div class="row">
    <div class="col">
      <img class="thumbnails" :src="img10" >
    </div>
    <div class="col">
      <img class="thumbnails" :src="img11" >
    </div>
    <div class="col">
      <img class="thumbnails" :src="img12" >
    </div>
  </div>
  <div class="row">
    <div class="col">
      <img class="thumbnails" :src="img13" >
    </div>
    <div class="col">
      <img class="thumbnails" :src="img14" >
    </div>
    <div class="col">
      <img class="thumbnails" :src="img15" >
    </div>
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
        img1: "/images/studio/CaseyStudio1.jpg",
        img2: "/images/studio/CaseyStudio2.jpg",
        img3: "images/studio/CaseyStudio3.jpg",
        
        img4: "/images/studio/GriffyStudio1.jpg",
        img5: "/images/studio/GriffyStudio2.jpg",
        img6: "images/studio/GriffyStudio3.jpg",

        img7: "/images/studio/MikeStudio1.jpg",
        img8: "http://static1.squarespace.com/static/51f86a82e4b0b49df4c3d14b/t/51fb146be4b0a2a178e9c0f6/1505940236762/?format=1500w",
        img9: "images/studio/MikeStudio2.jpg",
        
        img10: "/images/studio/PhilStudio1.jpg",
        img11: "/images/studio/PhilStudio2.jpg",
        img12: "images/studio/PhilStudio3.jpg",

        img13: "/images/studio/ShuffleWarehouse2.jpg",
        img14: "/images/studio/GroupPhoto1.jpg",
        img15: "images/studio/ShuffleWarehouse3.jpg"
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