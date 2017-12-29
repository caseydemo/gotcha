<template>
  <div class="container">


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
        <button Save changes</button>
      </div>
    </div>
  </div>
</div>

  <!-- ROW -->
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

  <!-- ROW -->
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

  <!-- ROW -->
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

  <!-- ROW -->
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


  <!-- ROW -->
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
        showDates: false,
        showPictures: false,
        showMerch: false,

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
        img15: "images/studio/CaseyStudio3.jpg"
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
</style>