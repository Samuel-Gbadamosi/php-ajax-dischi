var app = new Vue({
  el:'#app',
  data:{
    song: []
  },
  mounted(){
    axios
    .get('server.php')
    .then(response =>{
      this.song = response.data;
      console.log(this.song);

    });
  }
})
