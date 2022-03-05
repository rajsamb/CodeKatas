<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>
<h1>Map</h1>
<em>Suppose we want to parse json string content from the api into Javascript array</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const jsonString = '{"type": "Dog", "breed": "human"}';
    const observable = Rx.Observable.of(jsonString);

    observable
        // .map(json => {
        //     console.log('1');
        //     return JSON.parse(json)
        // })
        .map(json => JSON.parse(json))
        .subscribe(object => {
            print(object.type)
            print(object.breed)
        });
</script>
</body>
</html>
