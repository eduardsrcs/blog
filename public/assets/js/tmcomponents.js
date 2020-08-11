Vue.component('movie', {
  template: `<div>
      <video id="vid" width="320" height="240">
        <source src="/movie.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>`,
  props: ['minutes', 'hours']
})

Vue.component('uarr', {
  template: `<div class="tmbuttons">
      <button @click="hud">+</button>\
      <button @click="hup">+</button>\
      <button @click="mud">+</button>\
      <button @click="mup">+</button>\
    </div>`,
  methods: {
    hup() {this.$emit('chTime', 'h', 1)},
    hud() {this.$emit('chTime', 'h', 10)},
    mup() {this.$emit('chTime', 'm', 1)},
    mud() {this.$emit('chTime', 'm', 10)},
  }
})

Vue.component('darr', {
  template: `<div class="tmbuttons">\
      <button @click="hdd">&ndash;</button>\
      <button @click="hdo">&ndash;</button>\
      <button @click="mdd">&ndash;</button>\
      <button @click="mdo">&ndash;</button>\
    </div>`,
  methods: {
    hdo() {this.$emit('chTime', 'h', -1)},
    hdd() {this.$emit('chTime', 'h', -10)},
    mdo() {this.$emit('chTime', 'm', -1)},
    mdd() {this.$emit('chTime', 'm', -10)},
  }
})

Vue.component('fields', {
  template: `<div id="settime">
      <span class="tmdigits">{{parseInt(hours/10)}}</span>
      <span class="tmdigits">{{hours%10}}</span>
      <span>:</span>
      <span class="tmdigits">{{parseInt(minutes/10)}}</span>
      <span class="tmdigits">{{minutes%10}}</span>
    </div>`,
  props: ['minutes', 'hours'],
})

Vue.component('tmswitch', {
  template: `<div
      id="tmswitch"
      :class="{active: tmEnabled}""
      @click="fire">
        {{txt}}
    </div>`,
  props: ['tmEnabled', 'txt'],
  methods: {
    fire(){
      this.$emit('fire')
    }
  }
})
