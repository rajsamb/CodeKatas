<!DOCTYPE html>
<html lang="en">
<?php include_once '../partials/header.html' ?>
<body>
<h1>Fork Join</h1>
<em>Wait for observable to complete and only combine last two values</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const observable = Rx.Observable.create(observer => {
        observer.next('good');
        observer.next('better');
        observer.next('best');

        throw 'catch me!';

        observer.next('bad');
    });

    observable
        .catch(err => print(`Error caught: ${err}`))
        .subscribe(value => print(value));
</script>
</body>
</html>
