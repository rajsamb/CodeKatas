<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<script src="../js/helper.js"></script>
<script>

    //A promise that resolve after one second
    const intervalObservable = Rx.Observable.interval(1000);
    // Emit a value after every 1 sec
    intervalObservable.subscribe(int => print(new Date().getSeconds()));
</script>
</body>
</html>
