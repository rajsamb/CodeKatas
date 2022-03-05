<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Scan</h1>
<em>Scan is used to keep track of number coming from observable and store in a kind of global variable for that observable.</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const observableClick = Rx.Observable.fromEvent(document, 'click');

    observableClick
        .map(e => parseInt(Math.random() * 10)) // Generate random number on each mouse click
        .do(score => print(`Clicked score + ${score}`)) //Print / Glimplse data on the observable
        .scan((highScore, score) => highScore + score) // Keep the running total on highScore - Like Array Reduce
        .subscribe(highScore => print(`High Score ${highScore}`))
    ;
</script>
</body>
</html>
