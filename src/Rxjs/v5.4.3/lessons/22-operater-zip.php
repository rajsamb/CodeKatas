<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Zip</h1>
<em>Used to combine two similar observable</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const firstNameObservable = Rx.Observable.of('alice', 'bob', 'cathy', 'doug', 'eugine');
    const lastNameObservable = Rx.Observable.of('singh', 'seth', 'smith', 'dhungana', 'west');

    const combinedObservable = Rx.Observable.zip(firstNameObservable, lastNameObservable);

    combinedObservable.subscribe(array => print(array));
</script>
</body>
</html>
