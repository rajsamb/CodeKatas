<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Take Until</h1>
<em>This operate allows us to complete one observable based on value of another observable. This allows us to quickly unsubscrible from observable without calling unsubscribe</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const intervalObservable = Rx.Observable.interval(500);
    const notifierObservable = Rx.Observable.interval(2000);

    intervalObservable
        .takeUntil(notifierObservable) // notifier with is 2 sec
        .finally(() => print('Complete!')) // Will unsubscribe and print complete after 2 second
        .subscribe(i => print(i)); // print few value up to 2 sec
</script>
</body>
</html>
