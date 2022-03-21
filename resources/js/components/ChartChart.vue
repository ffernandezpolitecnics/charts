<template>
    <!-- <div :id="idChart" style="width: 100%"></div> -->
    <canvas id="myChart"></canvas>
</template>

<script>
    export default {
        props: {
            idChart: '',
        },
        data() {
            return {
                ciudades: [],
                colors: ['#E74C3C', '#9B59B6', '#3498DB', '#1ABC9C', '#F1C40F', '#F39C12', '#C0392B', '#8E44AD', '#2980B9', '#16A085',
                    '#E67E22', '#27AE60', '#34495E'
                ],
            }
        },
        methods: {
            // dynamicColors() {
            //     var r = Math.floor(Math.random() * 255);
            //     var g = Math.floor(Math.random() * 255);
            //     var b = Math.floor(Math.random() * 255);
            //     return "rgb(" + r + "," + g + "," + b + ")";
            // },

            drawChart() {
                let me = this;
           

                axios.get("/chart")
                .then((response) => {
                    me.ciudades = response.data;
                
                    const data = {
                        labels: [],
                        datasets: [],
                    };

                    const dataset = {
                        label: 'My First dataset',
                        data: [],
                        backgroundColor: [],
                        hoverOffset: 10,
                    };                       
                    let index = 0;
                    for (const ciudad of me.ciudades) {
                        data.labels.push(ciudad.ciudad);
                        dataset.data.push(ciudad.numHotels);
                        dataset.backgroundColor.push(me.colors[index%me.colors.length]);
                        index++;
                    }

                    data.datasets.push(dataset);

                    const config = {
                        type: 'doughnut',
                        data: data,
                    };

            
                    const myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                    );
                })
                .catch((err) => {
                    console.log(err);
                })
                .finally(() => (this.loading = false));
            }
        },
        mounted() {
            console.log('Component mounted.')

            this.drawChart();
        }
    }
</script>
