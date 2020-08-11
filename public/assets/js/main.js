let mmm

const buttons = document.querySelectorAll('.mybtns')
const windows = document.querySelectorAll('.windows')

const buttonsNames = ['Progresi', 'Cita poga', 'Vēl viena poga', 'Te kaut kas', 'Something else', 'Veram visu ciet' ]

const windowNames = ['Grupas plāna izpilde', '2. logs', '3. logs', '4. logs', '5. logs']

const cities = {
  Riga: 'Rīga',
  Valmiera: 'Valmiera'
}

buttons.forEach((el, index) => makeSome(el, index))
windows.forEach((el, index) => makeWindows(el, index))

setInterval(()=> makeTime('time'), 1000)

makeTemp('temp')

fetch('/tools/php/temas.php')
      .then(res => res.json())
      .then(data => renderProgress(data))
      .catch(err => console.log(err))

// Functions

function makeTime(el) {
  let t = new Date()
  let h = t.getHours()
  let m = t.getMinutes()
  let s = t.getSeconds()
  let e = document.getElementById(el)
  if (e) e.innerHTML = `${nn(h)}:${nn(m)}:${nn(s)}`
}

function makeTemp(el) {
  console.log(el)
  fetch('inbox.php')
    .then(res => res.json())
    .then(data => renderTemp(data, el))
    .catch(err => console.log(err))
}

const nn = a => a < 10 ? `0${a}` : a

function makeSome(el, index){
  el.innerHTML = buttonsNames[index]
  // el.setAttribute('data-num', index)
  el.addEventListener('click', () => showWindow(index))
  // el.addEventListener('click', () => showWindow(el.dataset.num))
}

function resetwindows(e){
  showWindow(null)
}

function showWindow(num){
  windows.forEach((el, index) => {
     num == index
    //  num == el.dataset.num
      ? el.classList.toggle('winwis')
      : el.classList.remove('winwis')
  })
}

const renderProgress = data => {
  let out = ''
  data.forEach(element => {
    out += `<h3>${element.name}</h3><ul>`
    element.data.forEach(d => {
      out += `<li><span class=prname>${d[0]}</span>`
      out += `<span class=prval>${d[1]}</span></>`
    });
    out += `</ul>`
  })
  const mm = document.getElementById('progr')
  if(mm) mm.innerHTML = out
}

function makeWindows(e, i) {
  e.getElementsByTagName('h2')[0].innerHTML = windowNames[i] || `Window ${i}`
}

function renderTemp(d, e) {
  if(d.weather.currTemp && d.geoip.city){
    let out = ''
    let t = d.weather.currTemp
    let c = cities[d.geoip.city] || d.geoip.city
    let col = +t > 25 ? 'orange' : t < 15 ? 'blue' : 'green'
    out += `<h3 style="color:${col}">${t}&#8451;</h3>`
    out += `<h5>${c}</h5>`
    let el = document.getElementById(e)
    if(el) el.innerHTML = out
  }
  
}