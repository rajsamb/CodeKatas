<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Debounce</h1>
<em>Debounce does similar to Throttle but emit the last event after waiting for time specified. Useful for autocomplete.</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const observableMouseEvents = Rx.Observable.fromEvent(document, 'mousemove');

    observableMouseEvents
        .debounceTime(1000)
        .subscribe(e => print(e.type));
</script>
</body>
</html>
