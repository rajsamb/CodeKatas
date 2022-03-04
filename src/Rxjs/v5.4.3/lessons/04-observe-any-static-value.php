<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<script src="../js/helper.js"></script>
<script>
    const mixedValueObservable = Rx.Observable.of('anything', ['like', 123], true, {objet: 'obj etc'});

    mixedValueObservable.subscribe(eachValue => print(eachValue));
</script>
</body>
</html>
