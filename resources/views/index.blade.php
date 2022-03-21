<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app" class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Chart Google</h5>
                        <chart-google id-chart="chart01"></chart-google>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Chart Chart</h5>
                        <chart-chart id-chart="chart03"></chart-chart>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Chart Google</h5>
                        <chart-d3 id-chart="chart02"></chart-d3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://d3js.org/d3.v6.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>