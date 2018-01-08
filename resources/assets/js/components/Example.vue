<template>
<div class="container">
  <div style="padding:10px;" class="row">
    <div class="col">
      <button class="toggle-button hvr-bounce-in" v-on:click="toggleStudioPictures()">Sneak Attack</button>
    </div>
    <div class="col">
      <button class="toggle-button hvr-bounce-in" v-on:click="toggleShowPictures()">Live Shows</button>      
    </div>
    <div class="col">
      <button class="toggle-button hvr-bounce-in" v-on:click="toggleMiscPictures()">Other</button>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="imgModal" tabindex="-1" role="dialog" aria-labelledby="imgModalTitle" aria-hidden="true">
    <div style="margin:auto; margin-top:200px;" class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLongTitle">{{ modal_title }}</h5> -->
          <button class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <img class="modal-img" :src="modal_img" />
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<div v-show="showStudioPics" class="studio-container">
  <!-- STUDIO ROW -->
  <div class="row">
    <div class="col">
      <a v-on:click="modalCall(img1)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img1" >
      </a>
    </div>
    <div class="col">
      <a v-on:click="modalCall(img2)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img2" >
      </a>
    </div>
    <div class="col">
      <a v-on:click="modalCall(img3)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img3" >
      </a>
    </div>
  </div>

  <!-- STUDIO ROW -->
  <div class="row">
    <div class="col">
      <a v-on:click="modalCall(img4)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img4" >
      </a>
    </div>
    <div class="col">
      <a v-on:click="modalCall(img5)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img5" >
      </a>
    </div>
    <div class="col">
      <a v-on:click="modalCall(img6)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img6" >
      </a>
    </div>
  </div>

  <!-- STUDIO ROW -->
  <div class="row">
    <div class="col">
      <a v-on:click="modalCall(img7)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img7" >
      </a>
    </div>
    <div class="col">
      <a href="http://sneakattackrecording.com/" target="_blank">
        <img class="hvr-wobble-horizontal thumbnails" :src="img8" >
      </a>
    </div>
    <div class="col">
      <a v-on:click="modalCall(img9)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img9" >
      </a>
    </div>
  </div>

  <!-- STUDIO ROW -->
  <div class="row">
    <div class="col">
      <a v-on:click="modalCall(img10)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img10" >
      </a>
    </div>
    <div class="col">
      <a v-on:click="modalCall(img11)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img11" >
      </a>
    </div>
    <div class="col">
      <a v-on:click="modalCall(img12)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img12" >
      </a>
    </div>
  </div>


  <!-- STUDIO ROW -->
  <div class="row">
    <div class="col">
      <a v-on:click="modalCall(img13)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img13" >
      </a>
    </div>
    <div class="col">
      <a v-on:click="modalCall(img14)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img14" >
      </a>
    </div>
    <div class="col">
      <a v-on:click="modalCall(img15)" data-toggle="modal" data-target="#imgModal">
        <img class="hvr-wobble-horizontal thumbnails" :src="img15" >
      </a>
    </div>
  </div>
  </div>


  <!-- LIVE SHOWS -->
  <div v-show="showShowPics" class="live-show-container">

    <!-- LIVE SHOW ROW -->
    <div class="row">
      <div class="col">
        <a v-on:click="modalCall(img16)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img16" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img17)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img17" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img18)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img18" >
        </a>
      </div>
    </div>  

    <!-- Live Show Row -->
    <div class="row">
      <div class="col">
        <a v-on:click="modalCall(img19)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img19" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img20)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img20" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img21)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img21" >
        </a>
      </div>
    </div>  

    <!-- Live Show Row -->
    <div class="row">
      <div class="col">
        <a v-on:click="modalCall(img22)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img22" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img23)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img23" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img24)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img24" >
        </a>
      </div>
    </div>  

    <!-- Live Show Row -->
    <div class="row">
      <div class="col">
        <a v-on:click="modalCall(img25)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img25" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img26)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img26" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img27)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img27" >
        </a>
      </div>
    </div>  

    <!-- Live Show Row -->
    <div class="row">
      <div class="col">
        <a v-on:click="modalCall(img28)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img28" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img29)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img29" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img30)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img30" >
        </a>
      </div>
    </div>  

        <!-- Live Show Row -->
    <div class="row">
      <div class="col">
        <a v-on:click="modalCall(img31)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img31" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img32)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img32" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img33)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img33" >
        </a>
      </div>
    </div>  

  </div>

  <!-- MISC PICTURES -->
  <div v-show="showMiscPics" class="Misc-container">
        <!-- MISC Row -->
    <div class="row">
      <div class="col">
        <a v-on:click="modalCall(img34)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img34" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img35)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img35" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img36)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img36" >
        </a>
      </div>
    </div>  

        <!-- MISC Row -->
    <div class="row">
      <div class="col">
        <a v-on:click="modalCall(img37)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img37" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img38)" data-toggle="modal" data-target="#imgModal">
          <img style="transform: rotate(90deg);" class="hvr-wobble-horizontal-90deg show-thumbnails" :src="img38" >
        </a>
      </div>
      <div class="col">
        <a v-on:click="modalCall(img39)" data-toggle="modal" data-target="#imgModal">
          <img class="hvr-wobble-horizontal show-thumbnails" :src="img39" >
        </a>
      </div>
    </div>  
  </div>

  </div>
</template>

<script>
export default {
    mounted() {
        console.log('there. something changed.')
    },

methods: {


    toggleStudioPictures: function(){
        this.showStudioPics = true,
        this.showShowPics = false,
        this.showMiscPics = false
    },
     toggleShowPictures: function(){
        this.showStudioPics = false,
        this.showShowPics = true,
        this.showMiscPics = false
    },
     toggleMiscPictures: function(){
        this.showStudioPics = false,
        this.showShowPics = false,
        this.showMiscPics = true
    },
    modalCall: function(thing){
      console.log(thing);
        this.modal_img = thing;
        // console.log(this.modal_info[id]['image']);
        // this.modal_img=this.modal_info[id]['image'];
        // this.modal_title=this.modal_info[id]['title'];
        // console.log(this.modal_info[0]['title']);
    }
},    
data () {
    return {
        showStudioPics: true,
        showShowPics: false,
        showMiscPics: false,

        modal_img: '',
        modal_title: '',

        // modal_info: [
        // {
        //   image: '/images/studio/CaseyStudio1.jpg',
        //   title: 'Casey in the Studio'
        // },
        // {
        //   image: '/images/studio/CaseyStudio2.jpg',
        //   title: 'Casey in the Studio'
        // },
        // {
        //   image: '/images/studio/CaseyStudio3.jpg',
        //   title: 'Casey in the Studio'
        // },
        // ],

        // STUDIO PICS
        img1: "/images/studio/GroupPhoto1.jpg",
        img2: "/images/studio/ShuffleWarehouse2.jpg",
        img3: "images/studio/ShuffleWarehouse3.jpg",
             
        img4: "/images/studio/GriffyStudio1.jpg",
        img5: "/images/studio/GriffyStudio2.jpg",
        img6: "images/studio/GriffyStudio3.jpg",

        img7: "/images/studio/MikeStudio1.jpg",
        img8: "http://static1.squarespace.com/static/51f86a82e4b0b49df4c3d14b/t/51fb146be4b0a2a178e9c0f6/1505940236762/?format=1500w",
        img9: "images/studio/MikeStudio2.jpg",
        
        img10: "/images/studio/PhilStudio1.jpg",
        img11: "/images/studio/PhilStudio2.jpg",
        img12: "images/studio/PhilStudio3.jpg",

        img13: "/images/studio/CaseyStudio1.jpg",
        img14: "/images/studio/CaseyStudio2.jpg",
        img15: "images/studio/CaseyStudio3.jpg",

        // SHOW PICS
        img16: "/images/shows/EleventhFrame2.jpg",
        img17: "/images/shows/Mike1.jpg",
        img18: "images/shows/EleventhFrame3.jpg",

        img19: "/images/shows/Mike2.jpg",
        img20: "/images/shows/Phil2.jpg",
        img21: "images/shows/Phil3.jpg",

        img22: "/images/shows/halloween4.jpg",
        img23: "/images/shows/halloween5.jpg",
        img24: "images/shows/halloween6.jpg",

        img25: "/images/shows/Trio1.jpg",
        img26: "/images/shows/Trio2.jpg",
        img27: "images/shows/Trio3.jpg",

        img28: "/images/shows/EleventhFrame1.jpg",
        img29: "/images/shows/Phil1.jpg",
        img30: "images/shows/TheBurl1.jpg",

        img31: "/images/shows/halloween1.jpg",
        img32: "/images/shows/halloween2.jpg",
        img33: "images/shows/halloween3.jpg",

        img34: "/images/misc/casey-live.png", // casey close up
        img35: "/images/misc/dancin-baby.PNG",
        img36: "/images/misc/mike-fog.JPG",

        img37: "/images/misc/June17Poster.jpg", 
        img38: "/images/misc/phil-and-casey.jpeg",
        img39: "/images/misc/phil-live1.png",
    }
    }
}
</script>
<style scoped>
.thumbnails{
  width: 100%;
  height: auto;
  cursor: pointer;
}
.show-thumbnails{
    cursor: pointer;
    height: auto; 
    width: auto; 
    max-width: 300px; 
    max-height: 300px;
    padding-bottom: 10px;
}
.col{
  margin:auto;
  text-align: center;
}
.modal-img{
  width: 100%;
  margin:auto;
}
.modal-title{
  width: 100%;
  text-align: center;
  font-size: 30px;
  font-weight: bold;
}
.toggle-button{
  font-size: 30px;
  font-weight: bolder;
  font-family: 'Metal Mania', cursive;
  border-style: solid white;
  /*background: url(/public/dark-brushed-bg.jpg);*/
}
.toggle-button:hover{
  color:white;
  background: gray;
}
</style>