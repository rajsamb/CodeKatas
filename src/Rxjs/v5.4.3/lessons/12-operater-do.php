<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Do</h1>
<em>Do can be used to glimpse observable data before subscribing</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const observable = Rx.Observable.of('Sambhu','singh');

    observable
        .do(name => print(name))
        .map(name => name.toUpperCase())
        .do(name => print(name))
        .subscribe(name => print('Subscribed: ' + name));
</script>
</body>
</html>
