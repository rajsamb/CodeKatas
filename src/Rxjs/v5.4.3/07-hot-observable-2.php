<!DOCTYPE html>
<html lang="en">
    <?php include_once 'partials/header.html' ?>
<body>
<h1>Doing without decoupling data from observable</h1>
<script src="js/helper.js"></script>
<script>
    const cold = Rx.Observable.create(observer => {
        observer.next(Math.random());
    });

    const hot = cold.publish();

    hot.subscribe(a => print(`Subscriber A: ${a}`));
    hot.subscribe(b => print(`Subscriber B: ${b}`));

    hot.connect();
</script>
</body>
</html>
