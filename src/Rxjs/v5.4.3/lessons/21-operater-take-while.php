<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Take While</h1>
<em>Tells observable to emit value until certain condition is met</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const namesOservable = Rx.Observable.of('alice', 'bob', 'cathy', 'doug', 'eugine');

    namesOservable
        .takeWhile(name => name !== 'doug') // Will continue until the name is not equal to doug
        .finally(() => print('complete! the name found.')) // Unsubscribe and print the value
        .subscribe(name => print(name));
</script>
</body>
</html>
