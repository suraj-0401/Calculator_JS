<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::Calculator::</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <style>
        h2 {
            position: absolute;
            top: 100px;
        }
    </style>
</head>

<body>

    <h2>Welcome Dude!</h2>
    <div class="container">
        <div class="container">
            <div class="row">
                <input type="text" class="display" id="display">
            </div>
            <div class="row">
                <button class="button" onclick="reset()">C</button>
                <button class="button" onclick="add(this.innerText)">%</button>
                <button class="button" onclick="">M+</button>
                <button class="button" onclick="">M-</button>
            </div>
            <div class="row">
                <button class="button" onclick="add(this.innerText)">7</button>
                <button class="button" onclick="add(this.innerText)">8</button>
                <button class="button" onclick="add(this.innerText)">9</button>
                <button class="button" onclick="add(this.innerText)">/</button>
            </div>
            <div class="row">
                <button class="button" onclick="add(this.innerText)">4</button>
                <button class="button" onclick="add(this.innerText)">5</button>
                <button class="button" onclick="add(this.innerText)">6</button>
                <button class="button" onclick="add(this.innerText)">*</button>
            </div>
            <div class="row">
                <button class="button" onclick="add(this.innerText)">1</button>
                <button class="button" onclick="add(this.innerText)">2</button>
                <button class="button" onclick="add(this.innerText)">3</button>
                <button class="button" onclick="add(this.innerText)">-</button>
            </div>
            <div class="row">
                <button class="button" onclick="add(this.innerText)">0</button>
                <button class="button" onclick="add(this.innerText)">.</button>
                <button class="button" onclick="evaluate_expr()">=</button>
                <button class="button" onclick="add(this.innerText)">+</button>
            </div>
        </div>
    </div>
</body>

</html>