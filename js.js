function getData(){
    fetch('https://playstationflix.herokuapp.com/categorias')
    .then(function(res){
        return res.json()
    })
    .then(function(data){
        console.log(data)
        //console.log(data[0].ponto)

    })}

    getData()