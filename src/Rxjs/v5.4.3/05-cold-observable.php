<!DOCTYPE html>
<html lang="en">
    <?php include_once 'partials/header.html' ?>
<body>
<script src="js/helper.js"></script>
<script>
    const cold = Rx.Observable.create(observer => {
        observer.next(Math.random());
    });
    cold.subscribe(a => print(`Subscriber A: ${a}`));
    cold.subscribe(b => print(`Subscriber B: ${b}`));
</script>
</body>
</html>
