<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<script src="../js/helper.js"></script>
<script>

    //A promise that resolve after one second
    const promise = new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('resolved!');
        }, 1000);
    });

    // Now can convert promise to observable. Idea is to simulate API call or other asyc operation
    const promiseObservable = Rx.Observable.fromPromise(promise);

    // Subscribe to the observable. That print result on the page with one second delay
    promiseObservable.subscribe(result => print(result));
</script>
</body>
</html>
