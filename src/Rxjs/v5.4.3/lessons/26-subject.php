<!DOCTYPE html>
<html lang="en">
<?php include_once '../partials/header.html' ?>
<body>
<h1>Subject</h1>
<em>Subject is also another type of observable. It have ability to emit (broadcast) data to subscriber without having to resot to the source data</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const subject = new Rx.Subject();

    const subA = subject.subscribe(value => print(`Sub A: ${value}`));
    const subB = subject.subscribe(value => print(`Sub B: ${value}`));

    subject.next('Hello');

    setTimeout(() => {
        subject.next('World');
    }, 3000);
</script>
</body>
</html>
