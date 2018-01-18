<template>
<div style="text-align: center;" class="container">


<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalTitle" aria-hidden="true">
  <div style="margin:auto; margin-top:200px;" class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{ modal_title }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="560" height="315" :src="modal_vid" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- FIRST ROW -->
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Shuffle The Deck</h5>
        <div class="card-body">
            <a v-on:click="modalCall(vid1)" class="btn btn-primary" data-toggle="modal" data-target="#videoModal">Watch Clip</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Square Hammer</h5>
        <div class="card-body">
          <a v-on:click="modalCall(vid2)" class="btn btn-primary" data-toggle="modal" data-target="#videoModal">Watch Clip</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SECOND ROW -->
  <div class="row">
    

    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">We Die Young</h5>
          <div class="card-body">
              <a v-on:click="modalCall(vid3)" class="btn btn-primary" data-toggle="modal" data-target="#videoModal">Watch Clip</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Mob Rules</h5>
          <div class="card-body">
              <a v-on:click="modalCall(vid4)" class="btn btn-primary" data-toggle="modal" data-target="#videoModal">Watch Clip</a>
          </div>
        </div>
      </div>
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
        // determine the modal video
        this.modal_vid = thing;

        // determine the video title
        switch(thing) {
            case this.vid1:
                this.modal_title = "Shuffle The Deck";
                break;
            case this.vid2:
                this.modal_title = "Square Hammer";
                break;
            case this.vid3:
                this.modal_title = "We Die Young";
                break;
            case this.vid4:
                this.modal_title = "Fourth Video";
                break;            
            default:
                // code block
        }

    }
},    
data () {
    return {
        showStudioPics: true,
        showShowPics: false,
        showMiscPics: false,

        modal_vid: '',
        modal_title: '',

        vid1: "https://www.youtube.com/embed/6rTVdLVWSX8?rel=0", // Shuffle The Deck
        vid2: "https://www.youtube.com/embed/Mz9oltazx3I?rel=0", // Square Hammer
        vid3: "https://www.youtube.com/embed/susCmBkVesw?rel=0", // We Die Young
        vid4: "https://www.youtube.com/embed/x7IPQnvbhGM?rel=0",
        // Square Hammer: https://www.youtube.com/embed/Mz9oltazx3I?rel=0

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
        img33: "images/shows/halloween3.jpg"
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