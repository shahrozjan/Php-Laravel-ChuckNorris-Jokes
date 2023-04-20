<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
        }

        #box {
            box-sizing: border-box;
            border: 0;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
            width: 20rem;
            color: #fff;
            background-color: #28a745;
            padding: 2rem;
            text-align: left;
            border-radius: 0.25em;
            margin-top: 1rem;
            font: inherit;
        }

        #click-me {
            font-weight: 400;
            line-height: 1.5;
            color: white;
            background-color: #17a2b8;
            border-color: #17a2b8;
    border-radius: .25rem;
            margin-bottom: 0;
            padding: .375rem .75rem;
            font-size: 1rem;
            box-sizing: border-box;
            border: 0;
        }

        #click-me-container {
            display: flex;
            justify-content: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div id="click-me-container">
            <button id="click-me">Click Me</button>
        </div>
        <div id="box" class="quotebox bg-success rounded shadow">
            <p id="data"></p>
        </div>
        <script>
            document.getElementById('click-me').addEventListener('click', function() {
                fetch('/api/get-json')
                    .then(response => response.json())
                    .then(data => {
                        const message = data.value;
                        document.getElementById('data').innerText = message;
                    })
                    .catch(error => console.error(error));
            });
        </script>
    </div>
</body>
</html>
