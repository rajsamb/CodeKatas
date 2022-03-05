<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Map</h1>
<em>Map allows to transform the emitted value based on the underlying logics</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const observable = Rx.Observable.of(2, 9, 1, 10, 20, 1000);

    observable
        // .map(num => {
        //     console.log('how many times');
        //     return num * num;
        // }) // Long Way: Do some transformation on the emitted value by applying square
        .map(num => num * num) // Short Cut: Do some transformation on the emitted value by applying square
        .subscribe(transformedNumber => print(transformedNumber));
</script>
</body>
</html>
