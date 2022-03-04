<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Decoupling data from observable</h1>

<script src="../js/helper.js"></script>
<script>
    const rand = Math.random();
    const hot = Rx.Observable.create(observer => {
        observer.next(rand);
    });
    hot.subscribe(a => print(`Subscriber A: ${a}`));
    hot.subscribe(b => print(`Subscriber B: ${b}`));
</script>
</body>
</html>
