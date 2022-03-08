<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Fork Join</h1>
<em>Wait for observable to complete and only combine last two values</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const firstNameObservable = Rx.Observable.of('alice', 'bob', 'cathy', 'doug', 'eugine');
    const lastNameObservable = Rx.Observable.of('singh', 'seth', 'smith', 'dhungana', 'west').delay(2000); // Wait for 2 sec

    const combinedObservable = Rx.Observable.forkJoin(firstNameObservable, lastNameObservable);

    combinedObservable.subscribe(array => print(array));
</script>
</body>
</html>
