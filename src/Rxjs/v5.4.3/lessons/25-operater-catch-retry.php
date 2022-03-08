<!DOCTYPE html>
<html lang="en">
<?php include_once '../partials/header.html' ?>
<body>
<h1>Retry</h1>
<em>When there is an exception it will try for certain number of times</em>
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
        .retry(2) // Runs 3 times: Initial run plus the two retries
        .subscribe(value => print(value));
</script>
</body>
</html>
