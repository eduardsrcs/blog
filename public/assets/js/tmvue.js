
var app = new Vue({
  el: '#app',
  data: {
    on: false,
    swTxt: "Off",
    setTime: {minutes: 4, hours: 3}
  },
  mounted() {
    console.log('https://google.com')
    this.$data.setTime.hours = parseInt(localStorage.getItem('setHours')) || 12
    this.$data.setTime.minutes = parseInt(localStorage.getItem('setMinutes')) || 30
    const vid = document.getElementById('vid')
    setInterval(()=>{
      let t = new Date()
      let h = t.getHours()
      let m = t.getMinutes()

      if (this.$data.setTime.hours == h
          && this.$data.setTime.minutes == m
          && this.$data.on
          )
        {
          if(vid.paused){
            vid.currentTime = 0
            vid.play()
          }
        }
        else {
          vid.pause()
        }

    }, 10000)
  },
  template: `
    <div id="moviewrap">
      <movie :minutes="2" :hours="4" />
      <div id="tmcontrols">
        <div>
          <uarr @chTime="chTime" />
          <fields :minutes="this.setTime.minutes" :hours="this.setTime.hours" />
          <darr @chTime="chTime" />
        </div>
        <tmswitch :class="{active: on}" @fire="tmSwitch" :txt="swTxt"/>
      </div>
    </div>`,
  methods: {
    validateTimes(){
      if(this.$data.setTime.minutes > 59) {
        this.$data.setTime.minutes -= 60
        this.$data.setTime.hours++
      } 
      if(this.$data.setTime.minutes < 0) {
        this.$data.setTime.minutes += 60
        this.$data.setTime.hours--
      } 
      if(this.$data.setTime.hours > 23) this.$data.setTime.hours -= 24
      if(this.$data.setTime.hours < 0) this.$data.setTime.hours += 24
      
      localStorage.setItem('setHours', this.$data.setTime.hours)
      localStorage.setItem('setMinutes', this.$data.setTime.minutes)
    },
    chTime(type, val){
      if (type === "h"){
        this.$data.setTime.hours += val
      }
      if (type === "m"){
        this.$data.setTime.minutes += val
      }
      this.validateTimes()
    },
    tmSwitch(){
      this.$data.on = !this.$data.on
      if(this.$data.on){
        this.$data.swTxt = "On"
      }
      else {
        this.$data.swTxt = "Off"
        vid.pause()
      }
    }
  }
  
})
