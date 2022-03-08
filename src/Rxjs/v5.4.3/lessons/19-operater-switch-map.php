<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Switch Map</h1>
<em>Is Useful when we need value from observable before you subscribe to a second observable. For e.g. you need a
    user id from one observable before you use another observable to query the database using the user id obtained form the first observable</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const observableClick = Rx.Observable.fromEvent(document, 'click');

    observableClick
        .switchMap(click => { // When first observable click is received
            return Rx.Observable.of(500); // we start a new interval timer
        })
        .subscribe(i => print(i)) // On a first click interval will start and on a second click the interval will reset back to 0
    ;
</script>
</body>
</html>
