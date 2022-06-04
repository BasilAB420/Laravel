@extends('layout.master')

@section('calculate')

<body>
    <div class="container">
        <form action="Calculate" method="GET">
            <h1>Simple Calculator</h1>
            <label>Number 1</label> <br>
            <input type="text" placeholder="0" name="number1" required> <br>
            <label>Number 2</label> <br>
            <input type="text" placeholder="0" name="number2" required> <br>
            <div>
                <button type="submit" name="adding" >Add</button>
                <button type="submit" name="Substract" >Substract</button>
                <button type="submit" name="Multiply">Multiply</button>
                <button type="submit" name="Divide" >Divide</button>
            </div>
        </form>
        @php
            if (isset($_GET['adding']) == 'Submit') {
                $sum = $_GET['number1'] + $_GET['number2'];
                echo '<h5 style = text-align:center;>' . $sum . '</h5>';
            } elseif (isset($_GET['Substract']) == 'submit') {
                $sub = $_GET['number1'] - $_GET['number2'];
                echo '<h5  style=text-align:center;>' . $sub . '</h5>';
            } elseif (isset($_GET['Multiply']) == 'submit') {
                $mul = $_GET['number1'] * $_GET['number2'];
                echo '<h5  style=text-align:center;>' . $mul . '</h5>';
            } elseif (isset($_GET['Divide']) == 'submit') {
                $divi = $_GET['number1'] / $_GET['number2'];
                echo '<h5  style=color:red;>'. 'The answer is: ' . $divi . '</h5>';
            }
        @endphp
    </div>
</body>
@endsection
