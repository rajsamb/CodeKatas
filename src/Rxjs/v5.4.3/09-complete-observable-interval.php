<!DOCTYPE html>
<html lang="en">
    <?php include_once 'partials/header.html' ?>
<body>
<h1>Interval observable that doesn't complete on its own</h1>
<em>So we need to call setTimeout to complete the interval</em>
<hr>
<script src="js/helper.js"></script>
<script>
    const interval = Rx.Observable
                    .interval(500)
                    .finally(() => print('All Done!'));

    const subscription = interval.subscribe(x => print(x));

    setTimeout(() => {
        // Manually force observable to send the complete signal
        subscription.unsubscribe();
    }, 3000);
</script>
</body>
</html>
