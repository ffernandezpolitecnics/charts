<template>
    <!-- <div :id="idChart" style="width: 100%"></div> -->
    <div id="my_dataviz"></div>
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
                    chart = PieChart(population, {
                        name: d => d.name,
                        value: d => d.value,
                        width,
                        height: 500
                    });

                    let population = [];

                    for (const ciudad of me.ciudades) {
                        let data = {
                            name: ciudad.ciudad,
                            value: ciudad.numHotel
                        };

                        population.push(data);
                    }
                })
                .catch((err) => {
                    console.log(err);
                })
                .finally(() => (this.loading = false));

                
            }
        },
        mounted() {
            console.log('Component mounted.')
            // google.charts.load('current', {'packages':['corechart']});
            // google.charts.setOnLoadCallback(this.drawChart);
            // set the dimensions and margins of the graph
            
        }
    }
</script>
