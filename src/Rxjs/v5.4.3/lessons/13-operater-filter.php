<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>filter</h1>
<em>Filter value</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const observableNumber = Rx.Observable.of(1, 2, 10, 0, -10, -2, 4, 7, 8);

    observableNumber
        .filter(num => num > 0)
        .map(num => num * num)
        .subscribe(num => print(num));
</script>
</body>
</html>
