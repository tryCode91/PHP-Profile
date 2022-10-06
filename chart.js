function makeMusicChart(){

    var total = [];
    var musictaste = [];
    
    for(var key in musicChart){
        total.push(musicChart[key].total);
        musictaste.push(musicChart[key].Musictaste);
    }
    
    const dataMusic = {
        labels: musictaste,
        datasets: [{
        backgroundColor:[
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(42, 157, 143)',
            'rgb(247, 127, 0)'
        ],
        data: total,
        }]
    };
    
    const config = {
        type: 'doughnut',
        data: dataMusic,
        options: {
            parsing: {
                key:'key'
            },
            responsive:false,
            plugins: {
                title: {
                    display:true,
                    text: 'Music variation',
                    font: {
                        size: 22,
                    }
                }
            }
        }
    };
    const ctx = document.getElementById('musicChart').getContext('2d');
    
    const myChart = new Chart(
        document.getElementById('musicChart'),
        config
        );
        

}

$("#btnMusic").on('click',function(){
    makeMusicChart();
});

function makeLangChart(){

var language=[];
var langTotal = [];
for(var key in languageChart){
    langTotal.push(languageChart[key].total);
    language.push(languageChart[key].Language);
}

const dataLang = {
        labels: language,
        datasets: [{
        backgroundColor:[
            'rgb(255, 99, 132)',
            'rgb(252, 255, 178)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(42, 157, 143)',
            'rgb(247, 127, 0)',
            'rgb(111, 56, 197)',
            'rgb(6, 17, 60)'
        ],
        data: langTotal,
        }]
    };

    const configLang = {
        type: 'doughnut',
        data: dataLang,
        options: {
            parsing: {
                key:'key'
            },
            responsive:false,
            plugins: {
                title: {
                    display:true,
                    text: 'Spoken Languages',
                    font: {
                        size: 22
                    }
                }
            }
        }
    };

    const cty = document.getElementById('LanguageChart').getContext('2d');

    const langChart = new Chart(
        document.getElementById('LanguageChart'),
        configLang
    );
}
$("#btnLanguage").on('click', function(){
    makeLangChart();
})
