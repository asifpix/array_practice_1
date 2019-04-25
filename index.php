<?php
include_once( 'array_data.php' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Practice 1</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-25"><h1>Array Practice</h1></div>
        </div>
        
        <div class="row">
            <div class="column column-50 column-offset-25">
            <?php
                $selectedDestination = isset( $_POST['destination'] ) ? $_POST['destination'] : '';
                $selectedOperator = isset( $_POST['operator'] ) ? $_POST['operator'] : '';
                $selectedClass = isset( $_POST['class'] ) ? $_POST['class'] : '';
            ?>
                <form action="./index.php" method="POST">
                    <label for="destination">Destination</label>
                    <select name="destination" id="destination">
                        <option value="" disabled selected>Select a destination</option>
                        <?php destinationList( $selectedDestination ) ?>
                    </select>
                    <?php if( isset( $_POST['destination'] ) ) : ?>
                    <label for="operator">Operators</label>
                    <select name="operator" id="operator">
                        <option value="" disabled selected>Select an operator</option>
                        <?php operatorList( $selectedDestination, $selectedOperator ) ?>
                    </select>
                    <?php endif; ?>
                    <?php if( isset( $_POST['destination'] ) && isset( $_POST['operator'] ) ) : ?>
                    <label for="operator">Class</label>
                    <select name="class" id="class">
                        <option value="" disabled selected>Select a Class</option>
                        <?php classList( $selectedDestination, $selectedOperator, $selectedClass ) ?>
                    </select>
                    <?php endif; ?>
                    <button>Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            
            <div class="column column-50 column-offset-25">
            <?php
            if( isset( $_POST['destination'] ) && isset( $_POST['operator'] ) && isset( $_POST['class'] ) ) {
                resultData($selectedDestination, $selectedOperator, $selectedClass); 
            }
            ?></div>
        </div>
    </div>
</body>
</html>