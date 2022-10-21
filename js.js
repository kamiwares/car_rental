setInterval(()=>{
    const days = document.getElementById('days').value;
        document.getElementById('price').innerHTML = "Do zapłaty: "+days*259+"zł";
},500)




