async function getUser(place) {
            const api_url = `https://timezone.abstractapi.com/v1/current_time/?api_key=da4744df05ad43a5abeee18b526c7951&location=${place}`
            
            const response = await fetch(api_url);
            
            const data = await response.json();
            
            time = await data.datetime
            // arr = Array.from(time)
            // arr.splice(0, 11)
            // arr.toString()
            // timezone = (arr.splice(0, 5)).join("");
            document.getElementById("tempo").innerText = `${place}'s time = ${time} ${data.timezone_abbreviation}`

    }

    document.querySelectorAll(".allPaths").forEach(e => {
        e.setAttribute('class', `allPaths ${e.id}`);
        e.addEventListener("mouseover", function () {
            window.onmousemove=function (j) {
                x = j.clientX
                y = j.clientY
                document.getElementById('nome').style.top = y-60  + 'px'
                document.getElementById('nome').style.left = x +10 + 'px'
            }
            const classes=e.className.baseVal.replace(/ /g, '.')         
            document.querySelectorAll(`.${classes}`).forEach(country =>{
                country.style.fill = "rgb(240, 205, 11)"
            })
            document.getElementById("nome").style.opacity = 1
            
            document.getElementById("nome_pais").innerText = e.id
        })
        e.addEventListener("mouseleave", function () {
            const classes=e.className.baseVal.replace(/ /g, '.')
            document.querySelectorAll(`.${classes}`).forEach(country =>{
                country.style.fill = "#ececec"
            })
            document.getElementById("nome").style.opacity = 0
        })

        e.addEventListener("click",function(){
            getUser(e.id)
        })

    })

