<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Throttle</h1>
<em>Delay to the specified time</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const observableMouseEvents = Rx.Observable.fromEvent(document, 'mousemove');

    observableMouseEvents
        .throttleTime(1000)
        .subscribe(e => print(e.type));
</script>
</body>
</html>
