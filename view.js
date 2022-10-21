
setInterval(()=>{
    const marka = document.getElementById('marka').value;
    const model = document.getElementById('model').value;
    const year = document.getElementById('year').value;
    const pic = document.getElementById('pic').value;
    const desc = document.getElementById('desc').value;
    document.getElementById('marka-view').innerHTML = marka;
    document.getElementById('model-view').innerHTML = model;
    document.getElementById('year-view').innerHTML = year;
    document.getElementById('desc-view').innerHTML = desc;
    document.getElementById('pic-view').style.backgroundImage = "url("+pic+")";
    
},500)