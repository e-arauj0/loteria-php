<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: black;
        }

        form {
            background-color: #BFBFBF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 20px auto;
        }

        h1 {
            color: #127369;
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
        }

        .checkbox-group label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .checkbox-group input[type="checkbox"] {
            margin-right: 8px;
            scale: 1.5;
        }

        input[type="submit"] {
            background-color: #127369;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #10403B;
        }
    </style>
</head>
 
<body>
    <center>
        <form method="POST" name="meu_form" action="loto.php">
        <label>Qual o seu nome?<input style="margin: 15px;" type="text" name="name" id="name"></label>
            <h1>Escolha seus números</h1>
            <div class="checkbox-group">
                <label><input type="checkbox" name="1" id="1">1</label>
                <label><input type="checkbox" name="2" id="2">2</label>
                <label><input type="checkbox" name="3" id="3">3</label>
                <label><input type="checkbox" name="4" id="4">4</label>
                <label><input type="checkbox" name="5" id="5">5</label>
                <label><input type="checkbox" name="6" id="6">6</label>
                <label><input type="checkbox" name="7" id="7">7</label>
                <label><input type="checkbox" name="8" id="8">8</label>
                <label><input type="checkbox" name="9" id="9">9</label>
                <label><input type="checkbox" name="10" id="10">10</label>
                <label><input type="checkbox" name="11" id="11">11</label>
                <label><input type="checkbox" name="12" id="12">12</label>
                <label><input type="checkbox" name="13" id="13">13</label>
                <label><input type="checkbox" name="14" id="14">14</label>
                <label><input type="checkbox" name="15" id="15">15</label>
                <label><input type="checkbox" name="16" id="16">16</label>
                <label><input type="checkbox" name="17" id="17">17</label>
                <label><input type="checkbox" name="18" id="18">18</label>
                <label><input type="checkbox" name="19" id="19">19</label>
                <label><input type="checkbox" name="20" id="20">20</label>
                <label><input type="checkbox" name="21" id="21">21</label>
                <label><input type="checkbox" name="22" id="22">22</label>
                <label><input type="checkbox" name="23" id="23">23</label>
                <label><input type="checkbox" name="24" id="24">24</label>
                <label><input type="checkbox" name="26" id="26">26</label>
                <label><input type="checkbox" name="27" id="27">27</label>
                <label><input type="checkbox" name="28" id="28">28</label>
                <label><input type="checkbox" name="29" id="29">29</label>
                <label><input type="checkbox" name="30" id="30">30</label>
                <label><input type="checkbox" name="31" id="31">31</label>
                <label><input type="checkbox" name="32" id="32">32</label>
                <label><input type="checkbox" name="33" id="33">33</label>
                <label><input type="checkbox" name="34" id="34">34</label>
                <label><input type="checkbox" name="35" id="35">35</label>
                <label><input type="checkbox" name="36" id="36">36</label>
                <label><input type="checkbox" name="37" id="37">37</label>
                <label><input type="checkbox" name="37" id="37">37</label>
                <label><input type="checkbox" name="38" id="38">38</label>
                <label><input type="checkbox" name="39" id="39">39</label>
                <label><input type="checkbox" name="40" id="40">40</label>
                <label><input type="checkbox" name="41" id="41">41</label>
                <label><input type="checkbox" name="42" id="42">42</label>
                <label><input type="checkbox" name="43" id="43">43</label>
                <label><input type="checkbox" name="44" id="44">44</label>
                <label><input type="checkbox" name="45" id="45">45</label>
                <label><input type="checkbox" name="46" id="46">46</label>
                <label><input type="checkbox" name="47" id="47">47</label>
                <label><input type="checkbox" name="48" id="48">48</label>
                <label><input type="checkbox" name="49" id="49">49</label>
                <label><input type="checkbox" name="50" id="50">50</label>
            </div>
            <label>Insira o valor da aposta:<input style="margin: 15px;" type="text" name="valor" id="valor"></label>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </center>
</body>
 
</html>