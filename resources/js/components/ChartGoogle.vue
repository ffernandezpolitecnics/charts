<template>
    <div :id="idChart" style="width: 100%"></div>
</template>

<script>
    export default {
        props: {
            idChart: '',
        },
        data() {
            return {
               ciudades: [],
            }
        },
        methods: {
            drawChart() {
                let me = this;
           

                axios.get("/chart")
                .then((response) => {
                    me.ciudades = response.data;
                    var data = new google.visualization.DataTable();

                    //Crear las columnas
                    data.addColumn('string', 'Ciudad');
                    data.addColumn('number','numHoteles');

                    //Crear las filas
                    for (const ciudad of me.ciudades) {
                        data.addRow([ciudad.ciudad, ciudad.numHotels]);
                    }
                    // let data = google.visualization.arrayToDataTable([
                    //     ['Task', 'Hours per Day'],
                    //     ['Work',     11],
                    //     ['Eat',      2],
                    //     ['Commute',  2],
                    //     ['Watch TV', 2],
                    //     ['Sleep',    7]
                    //     ]
                    // );
                    let options = {
                        title: 'Hoteles por ciudad',
                        is3D: true,
                    };

                    let chart = new google.visualization.PieChart(document.getElementById(this.idChart));

                    chart.draw(data, options);
                })
                .catch((err) => {
                    console.log(err);
                })
                .finally(() => (this.loading = false));
            }
        },
        mounted() {
            console.log('Component mounted.')
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(this.drawChart);
        }
    }
</script>
